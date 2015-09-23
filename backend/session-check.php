<?php
    require '../_database/database.php';
    if(!$_SESSION['email']){
        header("location:../index.php?session=notset");
    }
?>
