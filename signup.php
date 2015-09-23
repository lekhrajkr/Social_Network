
<html>
<head>
<link rel="stylesheet" href="css/index.css">

<link rel="stylesheet" href="css/home.css">
</head>
<body>
<?php include 'contain/main.php' ?>
<div class="container">
<div class="centered">

<div class="l-box">
<form action="backend/signup.php" method="post" name="login">

<br>
<center>Register User</center>
<table>

<tr><td>Name</td><td><input type="text" name="name" placeholder="Name" required></td></tr>
<tr><td>Email</td><td><input type="text" name="email" placeholder="Email" required></td></tr>
<tr><td>Mobile number</td><td><input type="text" name="mobile" placeholder="+91 *************" required></td></tr>
<tr><td>Password</td><td><input type="password" name="password1" placeholder="Password" required></td></tr>
<tr><td>Re-Password</td><td><input type="password" name="password2" placeholder="Password" required></td></tr>
<tr><td></td><td><center><input type="submit" name="submit" value="Create"></center></td></tr>
</table>
</div>
</div>
</div>
</body>
</html>
