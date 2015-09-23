
<?php require '_database/database.php'; ?>
<?php include 'backend/session-check-index.php' ?>
<html>
<head>
<title>Kodayickal Internet</title>
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/home.css">
</head>
<body>
<?php include 'contain/main.php' ?>
<div class="container">
<div class="padding10">
<div class="centered">

<div class="l-box">

<form action="backend/login.php" method="post" name="login">

<br>
<center><h2>User Login</h2></center>
<?php
if(isset($_GET["status"])){
if($_GET["status"]=="error"){
       
		echo '<center>Invalid Password or E-mail</center>';
    }
	else{
}}?>
<table>

<tr><td>E-mail</td><td><input type="text" name="username" placeholder="someone@example.com"></td></tr>
<tr><td>Password</td><td><input type="password" name="password" placeholder="Password"></td></tr>
<tr><td><center><a href="signup.php">Sign up</a></center></td><td><center><input type="submit" name="submit" value="Login"></center></td></tr>
</table>
<center><a href="forgot.php">Forgot Password?</a></center>
</div>
</div>
</div>
</div>
</body>
</html>
