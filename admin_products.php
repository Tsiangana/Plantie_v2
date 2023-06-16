<?php

include 'config.php';
session_start();

$admin_id = $_SESSION['admin_id'];

if (!isset($admin_id)) {
    header('location:login.php');
};

if (isset($_POST['add_product'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = 'uploaded_img/'. $image;
 
    $select_product_name = mysqli_query($conn, "SELECT name FROM `products` WHERE name = '$name' ") or die('a busca falhou'); 

    if (mysqli_num_rows($select_product_name) > 0) {
        $message[] = 'A foto com esse nome ja existe';
    }else {

        $add_product_query = mysqli_query($conn, "INSERT INTO `products`(name, price, image) VALUES 
        ('$name', '$price', '$image')") or die('query faild');

        if ($add_product_query) {
            if ($image_size > 2000000) {
                $message[] = 'Imagem demasiado grande';
            }else{
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'foto adicionado com sucesso';
            }
            }else{
                $message[] = 'essa foto não pode ser adicionada!';
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

    header('location:admin_products.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Produtos</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="css/admin_style.css">
</head>
<body>

    <?php
    include 'admin_header.php';
    ?>

    <!-- product CRUD section start-->

        <h1 class="tittle" style="margin-top:25px;margin-bottom:-10px">Fotos</h1>

        <section class="add-products">
            <form action="" method="post" enctype="multipart/form-data">
            <h3>Adicionar Fotos</h3>
            <input type="text" name="name" class="box" placeholder="Nome da foto" required>
            <input type="text" name="price" class="box" placeholder="Descrição da foto" required>
            <input type="file" name="image" accept="image/jpg, image/png, image/jpeg, image/webp" class="box" required>
            <input type="submit" value="Adicionar" name="add_product" class="btn">
            </form>
        </section>
 
    <!-- product CRUD section end-->

    <!-- show products start-->

    <section class="show-products">
        <div class="box-container">
            <?php
            $select_products = mysqli_query($conn, "SELECT * FROM `products`") or die('query faild');
            if (mysqli_num_rows($select_products)>0) {
                while ($fetch_products = mysqli_fetch_assoc($select_products)) {
                  
            ?>
            <div class="box">
                <a href="admin_products.php?update=<?php echo $fetch_products['id']; ?>"><img src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt=""></a>
                <!--<div class="price"><?php echo $fetch_products['name']; ?></div>-->
                <!--<div class="name"><?php echo $fetch_products['price']; ?>Kz</div>-->
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
            <img src="uploaded_img/<?php echo $fetch_update['image']; ?>" alt="">
            <input type="text" name="update_name" value="<?php echo $fetch_update['name']; ?>" class="box" required placeholder="Actualizar nome da imagem">
            <input type="text" name="update_price" value="<?php echo $fetch_update['price']; ?>" min="0" class="box" required placeholder="Actualizar a descrição da imagem">
            <input type="file" class="box" name="update_image" accept="image/jpg, image/jpeg, image/png, image/webp">
            <input type="submit" value="Actualizar" name="update_product" class="btn">
            <a href="admin_products.php?delete=<?php echo $fetch_products['id']; ?>" class="delete-btn" onclick="return confirm('Tem mesmo acerteza de que quer apagar esse produto!');">Apagar</a>
            <input type="reset" value="Cancelar" id="close-update" class="option-btn">
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

    

    <script src="js/admin_script.js"></script>
</body>
</html>