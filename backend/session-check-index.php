<?php
    session_start();
    require '_database/database.php';
    if(isset($_SESSION['email'])){
        header("location:user/home.php");
    }
?>
