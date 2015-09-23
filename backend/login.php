<?php
    session_start();
    if(isset($_REQUEST['submit'])||$_REQUEST['auto']==1){
        require '../_database/database.php';
        $errmsg_arr = array();
        $errflag = false;
        $username=  mysqli_real_escape_string($database,$_REQUEST['username']);
        $password=  mysqli_real_escape_string($database,$_REQUEST['password']);
        if($username == '') {
            $errmsg_arr[] = 'Username missing';
            $errflag = true;
        }
        if($password == '') {
            $errmsg_arr[] = 'Password missing';
            $errflag = true;
        }
        if($errflag) {
            $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
            session_write_close();
            header("location: code0.php");
            exit();
        }
        $sql="SELECT email,password FROM user_details WHERE email='$username'AND password='$password'";
        $result=  mysqli_query($database,$sql) or die(mysqli_errno());
        $trws= mysqli_num_rows($result);
        if($trws==1){
            $rws=  mysqli_fetch_array($result);
            $_SESSION['email']=$rws['email'];
            $_SESSION['password']=$rws['password'];
            header("location:../user/home.php?user=$username&request=login&status=success");    
        }
        else {
            $errmsg_arr[] = 'user name and password not found';
            $errflag = true;
            if($errflag) {
                $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
                session_write_close();
                header("location: ../backend/code0.php");
                exit();
            }
        }
    }

?>
