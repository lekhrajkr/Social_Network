<?php include '../backend/authentication.php' ?>     
<?php include '../backend/session-check.php' ?>
<?php include '../backend/user-detail.php' ?>
<html>
<head>
<title><?php echo $row['name']; ?> ~ Feedback</title>
<link rel="stylesheet" href="../css/home.css">
</head>
<body>
<?php include '../contain/nav-settings.php' ?>

<div class="container">
<div class="propic">
<img width="140px" height="140px" src="../userfiles/avatars/<?php echo $row['avtar'];?>" class="img-responsive">
<br><br>
<center><?php echo $row['name']; ?></center>
</div>
<div class="padding10">
<div class="l-box">
<center><h2>Feedback</h2><hr></center>
<?php
        $sql=mysqli_query($database,"select * from user_message where email='$email'");
        $number=mysqli_num_rows($sql);
   
	 if( mysqli_num_rows($sql) > 0) { echo '<ul>';
	while($rws = mysqli_fetch_array($sql)){
		?>
		<li><?php echo $rws['message_sender']; ?><br><br></li>
		 <?php  } echo '</ul>';} else { echo '<h2> No Recent Feedback </h2>';}?>
</div>
</div>
<div class="padding10">
<div class="notify">
<h3>Enter your Feedback</h2>
<form action="../backend/feedback.php" method="post">
<textarea rows="9" cols="50" name="message" value="Message"></textarea><br><br>
<center><input type="submit" value="Send" name="submit"></center>
</form>
</div>
</div>
</div>
</body>
</html>
