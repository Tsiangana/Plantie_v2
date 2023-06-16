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

<header class="header">
    <div class="flex">
        <a href="admin_page.php" class="logo"> Página de<span> Gerência</span></a>
        <nav class="nav_bar">
            <a href="admin_page.php">Início</a>
            <a href="admin_products.php">Alimentos</a>
        </nav>
        <div class="icons" style="display: flex;">
            <div id="user-btn" class="bi bi-user-fill"><i class="bi bi-person-fill"></i> </div>
            <div id="menu-btn" class="bi bi-bars" ><i class="bi bi-list"></i> </div>
        </div>
        <div class="account-box">
            <p>usuário: <span><?php echo $_SESSION['admin_name']; ?></span></p>
            <p>email: <span><?php echo $_SESSION['admin_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">Sair</a>
        </div>
    </div>
    
</header>