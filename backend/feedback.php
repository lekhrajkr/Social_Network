<?php
    ini_set("display_errors",1);
   session_start();
    $temp=$_SESSION['email'];
    if(isset($_POST)){
		$feed=$_POST["message"];
        require '../_database/database.php';
        $sql5="INSERT INTO user_message ( email, message_sender) VALUES ( '$temp', '$feed');";
        $result = mysqli_query($database,"SELECT * FROM user_message WHERE email = '$temp'");

                mysqli_query($database,$sql5)or die(mysqli_error($database));
                header("location:../user/message.php?id=$temp&status=success");
            
        } 
	
?>
