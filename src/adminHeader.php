<?php 
    require 'config.php';
    session_start();

    if(!isset($_SESSION['log_user'])){
        header('adminLog.php');
    }else{
        $adminName=$_SESSION['log_name'];
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="src/css/adminHeader.css" type="text/css">
        <script src="https://kit.fontawesome.com/8291a47a9c.js" crossorigin="anonymous"></script>
        <link rel="shortcut icon" type="image/jpg" href="src/img/favi.jpg">
        <link rel="preconnect" href="https://fonts.googleapis.com">
            <header>
            <div class="container">
                <div class="side-head">
                    <span>Welcome <?php echo $adminName?> !</span>
                </div>
                <div class="nav">
                    <ul>
                        <li><a href="#"><i class="fa-solid fa-arrow-trend-up"></i> Trends</a></li>
                        <li><a href="#"><i class="fa-solid fa-bag-shopping"></i> Orders</a></li>
                        <li><a href="#"><i class="fa-solid fa-users"></i> Users</a></li>
                        <li><a href="addItem.php"><i class="fa-solid fa-plus"></i> Add Item</a></li>
                        <li><a href="editItem.php"><i class="fa-solid fa-pen"></i> Edit Item</a></li>
                        <li><a href="logOut.php"><i class="fa-solid fa-right-from-bracket"></i> Log Out</a></li>
                    </ul>
                </div>
            </div>
        </header>
 