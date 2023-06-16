<?php 
include 'config.php';
session_start();

if (isset($_POST['submit'])){

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

    $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email ='$email' AND password ='$pass'") or die('query failed');

    if(mysqli_num_rows($select_users) > 0){

        $row = mysqli_fetch_assoc($select_users);

        if ($row['user_type'] == 'admin') {
            $_SESSION['admin_name'] = $row['name'];
            $_SESSION['admin_email'] = $row['email'];
            $_SESSION['admin_id'] = $row['id'];
            header('location:admin_page.php');
        }
        elseif($row['user_type'] == 'user') {
            $_SESSION['user_name'] = $row['name'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_id'] = $row['id'];
            header('location:inicio.php');
        }

        else{
            $message[] = 'Email ou senha incorreta !';
        }
 }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    

    <?php 
    if (isset($message)) {
        foreach ($message as $message) {
            echo '
            <div class="message">
                <span  onclick="this.parentElement.remove();">'.$message.'</span>
            </div>
            ';
        }
    }
    ?>

    <div class="form_container">
        
        <form action="" method="post">
            <h3>Login</h3>
            <input type="email" name="email" placeholder="email" required class="box">
            <input type="password" name="password" placeholder="senha" required class="box">

            <input type="submit" name="submit" value="Logar" class="btn">
            <p>Ainda não possui uma conta ! <a href="cadastrar.php">Cadastra-te já!</a></p>
        </form>

    </div>
    
</body>
</html>