<?php
    if(isset($_POST["submit"]))
	{
		$avtar="default.jpg";
     $mobile=$_POST["mobile"];
	$XbRb0011= $_POST["name"];
	$XaRa1100= $_POST["email"];
	$XcRc0011= $_POST["password1"];
	$XxXx0000= $_POST["password2"];
	if( $XcRc0011 != $XxXx0000 )
	{
	echo '<div class="alert alert-danger" role="alert">';
	echo " <b> Pasword</b> Doesn't Match Try again";
	echo "</div>";
	header("refresh:5;../signup.php");
	}
	else
	{
			$conn = new mysqli('localhost','user','abc123','users'); 
			$query1 = "SELECT * FROM user_details WHERE email='$XaRa1100'"; 
			$result1 = $conn->query($query1); 
			
			if($result1->num_rows > 0 ) 
			{ 
			echo '<div class="alert alert-danger" role="alert">';
			echo " <b> Account already exist </b>";
			echo "</div>";
			header("refresh:5;../signup.php");
			}
			else 
			{
			$query2 = "INSERT INTO user_details ( name, email, password, mobile, avtar) VALUES ( '$XbRb0011', '$XaRa1100', '$XcRc0011', '$mobile', '$avtar');";
			$result2 = $conn->query($query2);
			echo '<div class="alert alert-success" role="alert">';
			echo " <b> Account created successfully </b>";
			echo "</div>";
			header("refresh:5;../index.php");
			$conn->close();
			}
	}	
}
?>
		
		
	}
