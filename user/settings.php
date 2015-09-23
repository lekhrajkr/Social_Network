<?php include '../backend/authentication.php' ?>     
<?php include '../backend/session-check.php' ?>
<?php include '../backend/user-detail.php' ?>
<html>
<head>
<title><?php echo $row['name']; ?> ~ Settings</title>
<link rel="stylesheet" href="../css/settings.css">
</head>
<body>
<?php include '../contain/nav-settings.php' ?>

<div class="container">
<div class="propic">
<img width="140px" height="140px" src="../userfiles/avatars/<?php echo $row['avtar'];?>" class="img-responsive">
<br><br>
<center><?php echo $row['name']; ?></center>
</div>

<div class="l-box">
<center>
<form action="../backend/upload.php" method="post" enctype="multipart/form-data" id="UploadForm">
<h2>Change your Profile Pic</h2>
Browse for photos on this computer<br>
<input name="ImageFile" type="file" id="uploadFile" required>
<button class="btn btn-primary ladda-button" data-style="zoom-in" type="submit"  id="SubmitButton" value="Upload" />Save Your Profile</button>
</form>
</center>
</div>
<div class="l-box">
<form action="../backend/change-personal.php" method="post">
<h2>Edit Personal Details</h2> 
<?php
if(isset($_GET["status"])){
if($_GET["status"]=="success"){
       
		echo '<h2><center>Done Successfully  !</center></h2>';
    }
	else{
}}?>
<table>
<tr><td>Name</td><td><input type="text" name="name" value="<?php echo $row['name'] ;?>" required></td></tr>
<tr><td>Mobile number</td><td><input type="text" name="mobile" value="<?php echo $row['mobile'] ;?>" required></td></tr>
<tr><td></td><td><center><input type="submit" name="submit" value="Submit"></center></td></tr>
</table>
</form>
<form action="../backend/change-password.php" method="post">
<h2>Change the Password</h2>
<?php
if(isset($_GET["status"])){
if($_GET["status"]=="true"){
       
		echo '<h2><center>Password Changed Successfully </center></h2>';
    }
	else{
}}?>
<table>
<tr><td>Password</td><td><input type="password" name="password1" placeholder="Password" required></td></tr>
<tr><td>Re-Password</td><td><input type="password" name="password2" placeholder="Password" required></td></tr>
<tr><td></td><td><center><input type="submit" name="submit" value="Create"></center></td></tr>
</table>
</form>
</div>

</div>

</body>
</html>
