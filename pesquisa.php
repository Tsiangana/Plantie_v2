<?php

include 'config.php';
session_start();

if (isset($_POST['add_product'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = 'uploaded_img/'. $image;
 
    $select_product_name = mysqli_query($conn, "SELECT name FROM `products` WHERE name = '$name' ") or die('a busca falhou'); 

    if (mysqli_num_rows($select_product_name) > 0) {
        $message[] = 'Um produto com esse nome ja existe';
    }else {

        $add_product_query = mysqli_query($conn, "INSERT INTO `products`(name, price, image) VALUES 
        ('$name', '$price', '$image')") or die('query faild');

        if ($add_product_query) {
            if ($image_size > 2000000) {
                $message[] = 'Imagem do produto demasiado grande';
            }else{
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'Um produto adicionado com sucesso';
            }
            }else{
                $message[] = 'Um produto não pode ser adicionado!';
            }
        }
}
if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    $delete_image_query = mysqli_query($conn, "SELECT image FROM `products` WHERE id = '$delete_id'") or die('query faild');
    $fetch_delete_image = mysqli_fetch_assoc($delete_image_query);
    unlink('uploaded_img/'.$fetch_delete_image['image']);
    mysqli_query($conn, "DELETE FROM `products` WHERE id = '$delete_id '") or die('query failed');
    header('location:admin_page.php');
}

if (isset($_POST['update_product'])) {
    $update_p_id = $_POST['update_p_id'];
    $update_name = $_POST['update_name'];
    $update_price = $_POST['update_price'];

    mysqli_query($conn, "UPDATE `products` SET name = '$update_name', price = '$update_price' WHERE id = '$update_p_id'") or die('query failed');

    $update_image = $_FILES['update_image']['name'];
    $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
    $update_image_size = $_FILES['update_image']['size'];
    $update_folder = 'uploaded_img/'.$update_image;
    $update_old_image = $_POST['update_old_image'];

    if (!empty($update_image)) {
        if ($update_image_size > 2000000) {
            $messagem[] = 'A imagem inserida é demasiado grande, insira outra';
        }else {
            mysqli_query($conn, "UPDATE `products` SET image = '$update_image' WHERE id = '$update_p_id'") or die('query failed');
            move_uploaded_file($update_image_tmp_name, $update_folder);
            unlink('uploaded_img/'.$update_old_image );
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
    <title>Pesquisa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="css/admin2.css">
</head>
<body>

    <!-- inicio da barra de navegacao -->

    <nav class="navbar navbar-inverse" style="padding: 20px 60px; background: none;border: none;">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Cultitchowa</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav" style="margin-left: 33%;">
              <li><a href="inicio.php" style="color: black;">Início</a></li>
              <li><a href="pesquisa.php"  style="color: black;">Instruções</a></li>
              <li><a href="index.php"  style="color: black;">Sair</a></li>
              
            </ul>
            <!--<ul class="nav navbar-nav navbar-right">
              <li><a href="login.php"><button class="btn btn-default" style="padding: 10px 45px; border-radius: 15px;background: rgb(122, 233, 122);color: #fff;border: none;">Login</button></a></li>
            </ul>-->
          </div>
        </div>
      </nav>

      <!-- fim da barra de navegacao-->

      <!-- show products start-->

    <section class="show-products">
        <div class="box-container">
            <?php
            $select_products = mysqli_query($conn, "SELECT * FROM `products`") or die('query faild');
            if (mysqli_num_rows($select_products)>0) {
                while ($fetch_products = mysqli_fetch_assoc($select_products)) {
                  
            ?>
            
            <div class="box">
                <a href="pesquisa.php?update=<?php echo $fetch_products['id']; ?>"><img src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="" data-search="<?php echo $fetch_products['name']; ?>" id="<?php echo $fetch_products['id']; ?>"></a>
                <div class="conteudo">
                <div class="price"><?php echo $fetch_products['name']; ?></div>
                <div class="name"><?php echo $fetch_products['price']; ?></div>
                </div>
                <a href="pesquisa.php?update=<?php echo $fetch_products['id']; ?>" class="link">Ler mais...</a>
                <!--<a href="admin_products.php?update=<?php echo $fetch_products['id']; ?>" class="option-btn">Actualizar</a>-->
                <!--<a href="admin_products.php?delete=<?php echo $fetch_products['id']; ?>" class="delete-btn" onclick="return confirm('Tem mesmo acerteza de que quer apagar esse produto!');">Apagar</a>-->
            </div>
            
            <?php
             }
            }else {
                echo '<p class="empty">Ainda não foi adicionado nenhum produto</p>';
            }
            ?>
        </div>
    </section>

    <section class="edit-product-form">
        <?php
        if (isset($_GET['update'])) {
            $update_id = $_GET['update'];
            $update_query = mysqli_query($conn, "SELECT * FROM `products` WHERE id = '$update_id'") or die('query failed');
            if (mysqli_num_rows($update_query) > 0) {
                while ($fetch_update = mysqli_fetch_assoc($update_query)) {
                    # code...
        ?>

        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="update_p_id" value="<?php echo $fetch_update['id']; ?>">
            <input type="hidden" name="update_old_image" value="<?php echo $fetch_update['image']; ?>">
            <div class="img">
            <img src="uploaded_img/<?php echo $fetch_update['image']; ?>" alt="">
            <div class="texts">
            <p><?php echo $fetch_update['name']; ?></p><br>
            <p><?php echo $fetch_update['price']; ?></p><br>
            <div class="fechar"><input type="reset" value="Fechar" id="close-update" class="option-btn" style="width: 130px;height: 30px; background: #e60023;cursor: pointer;color: #fff; border-radius: 25px;text-align: center;padding: 2px;"></div>
            </div>
            </div>
        </form>

        <?php
                }
            }
        }else {
            echo '<script>document.querySelector(".edit-product-form").style.display = "none";</script>';
        }
        ?>
            
    </section>

    <!-- show products end-->
    

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
       <script src="bootstrap/js/bootstrap.min.js"></script>
       <script>
    document.querySelector('#close-update').onclick = () =>{
    document.querySelector('.edit-product-form').style.display = 'none';
    window.location.href = 'pesquisa.php'
    }

    let images = document.querySelectorAll('.show-products .box-container .box img');

    document.querySelector('#search-box').oninput = () =>{
       var value = document.querySelector('#search-box').value.toLowerCase();
        images.forEach(img =>{
            var dataSearch = img.getAttribute('data-search');
            if(dataSearch.indexOf(value) > -1){
                img.style.display = 'inline-block';
            }else{
                img.style.display = 'none';
            }
        })
    }



    </script>
</body>
</html>