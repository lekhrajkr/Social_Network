<?php
    ini_set("display_errors",1);
   session_start();
    $temp=$_SESSION['email'];
    if(isset($_POST)){
        require '../_database/database.php';
        $Destination = '../userfiles/storage';
        if(!isset($_FILES['ImageFile']) || !is_uploaded_file($_FILES['ImageFile']['tmp_name'])){
            $NewImageName= 'Not a Valid File';
            move_uploaded_file($_FILES['ImageFile']['tmp_name'], "$Destination/$NewImageName");
        }
        else{
            
            $ImageName = str_replace(' ','-',strtolower($_FILES['ImageFile']['name']));
            $ImageType = $_FILES['ImageFile']['type'];
            $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
            $ImageExt = str_replace('.','',$ImageExt);
            $ImageName = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
            $NewImageName = $ImageName.'.'.$ImageExt;
            move_uploaded_file($_FILES['ImageFile']['tmp_name'], "$Destination/$NewImageName");
        }
        $sql5="INSERT INTO user_storage ( email, storage) VALUES ( '$temp', '$NewImageName');";
        $result = mysqli_query($database,"SELECT * FROM user_storage WHERE email = '$temp'");

                mysqli_query($database,$sql5)or die(mysqli_error($database));
                header("location:../user/storage.php?user_username=$temp");
            
        } 
	
?>
