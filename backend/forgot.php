<?php
	session_start();
	require '../_database/database.php';
    if(isset($_POST["submit"]))
	{
		$email=$_POST["email"];
		$mobile=$_POST["mobile"];
		$conn = new mysqli('localhost','user','abc123','users'); 
		$sql="SELECT email,mobile FROM user_details WHERE email='$email'AND mobile='$mobile'";
		$result=  mysqli_query($database,$sql) or die(mysqli_errno());
        $trws= mysqli_num_rows($result);
        if($trws==1){
            $rws=  mysqli_fetch_array($result);
            $_SESSION['email']=$rws['email'];
            $_SESSION['password']=$rws['password'];
            header("location:../user/settings.php?user=$username&request=password&status=success");    
        }else {
            $errmsg_arr[] = 'user name and password not found';
            $errflag = true;
            if($errflag) {
                $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
                session_write_close();
               echo ' The details provided are not Valid';
                exit();
            }
	}
	}
	?>
