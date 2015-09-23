
<?php require '/_database/database.php'; ?>
<?php include '/backend/session-check-index.php' ?>
<html>
<head>
<link rel="stylesheet" href="css/index.css">
</head>
<body>
<div class="container">
<div class="centered">
<form action="backend/forgot.php" method="post" name="login">

<br>
<center>Recover Account</center>
<p> Please enter the "E-mail" and "Mobile Number" </p>
<table>

<tr><td>E-mail</td><td><input type="text" name="email" placeholder="someone@example.com"></td></tr>
<tr><td>mobile</td><td><input type="text" name="mobile" placeholder="+91 ***********"></td></tr>
<tr><td></td><td><center><input type="submit" name="submit" value="Check"></center></td></tr>
</table>
<center><a href="/../users/index.php">Back to Login</a></center>
</div>
</div>
</body>
</html>
