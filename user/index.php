<?php
    require '../_database/database.php';
    if(!$_SESSION['mail']){
        header("location:../index.php?session=notset");
    }
?>
