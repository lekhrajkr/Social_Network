<?php
	session_start();
	require '../_database/database.php';
    $temp= $_SESSION['email'];
    if(isset($_POST["submit"]))
	{
		$password1=$_POST["password1"];
		$password2=$_POST["password2"];
		if ($password1 != $password2){
			echo '<h2><center>Password was incorrect</center></h2>';
			header("refresh:5;../user/settings.php?id=$temp&status=false");
		}
		$conn = new mysqli('localhost','user','abc123','users'); 
		$sql3="UPDATE user_details SET password='$password1' WHERE email= '$temp'";
		mysqli_query($database,$sql3)or die(mysqli_error($database));
		
        header("location:../user/settings.php?id=$temp&status=true");
	}
