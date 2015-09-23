<?php include '../backend/authentication.php' ?>     
<?php include '../backend/session-check.php' ?>
<?php include '../backend/user-detail.php' ?>
<html>
<head>
<title><?php echo $row['name']; ?> ~ Home</title>
<link rel="stylesheet" href="../css/home.css">
</head>
<body>
<?php include '../contain/nav-home.php' ?>
<div class="container">
<div class="propic">
<img width="140px" height="140px" src="../userfiles/avatars/<?php echo $row['avtar'];?>" class="img-responsive">
<br><br>
<center><?php echo $row['name']; ?></center>
</div>

<div class="l-box">
<p><center><b>Hi   ,<?php echo $row['name']; ?> ....  we are HAPPY that you are here  :)</b></center></p>

</div>

<div class="padding10">
<div class="notify">
<center><p>Feel free to check our new App.</p></center>
<center><h2><a href="../../Biodata-Creatorbackup/">Resume Creator</a></h2></center>
</div>
</div>
<div class="padding10">
<div class="float-right-notify">
<h4><a href="message.php">Send us your Feedback</a></h4>
</div>
</div>
<div class="l-box">
<center>
<form action="../backend/upload-files.php" method="post" enctype="multipart/form-data" id="UploadForm">
<h2>Online Storage Facility</h2>
Browse for files on this computer <br>
<input name="ImageFile" type="file" id="uploadFile" required>
<button class="btn btn-primary ladda-button" data-style="zoom-in" type="submit"  id="SubmitButton" value="Upload" />upload</button>
</form>
</center>
</div>


</div>
</body>
</html>
