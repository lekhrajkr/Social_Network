<?php include '../backend/authentication.php' ?>     
<?php include '../backend/session-check.php' ?>
<?php include '../backend/user-detail.php' ?>
<?php include '../backend/home-header.php' ?>
<html>
<head>
<title><?php echo $row['name']; ?> ~ Storage</title>
<link rel="stylesheet" href="../css/home.css">
</head>
<body>
<?php include '../contain/nav-storage.php' ?>
<div class="container">
<div class="propic">
<img  width="140px" height="140px" src="../userfiles/avatars/<?php echo $row['avtar'];?>" class="img-responsive">
<br><br>
<center><?php echo $row['name']; ?></center>
</div>
<div class="padding10">
<div class="l-box">
<center>
<form action="../backend/upload-files.php" method="post" enctype="multipart/form-data" id="UploadForm">
<h3>Upload your files</h3>
Browse for files on this computer <br>
<input name="ImageFile" type="file" id="uploadFile" required>
<button class="btn btn-primary ladda-button" data-style="zoom-in" type="submit"  id="SubmitButton" value="Upload" />upload</button>
</form>
</center>
</div>
</div>
<div class="padding10">

<div class="l-box">
<center><h2>Storage Area<hr></h2></center>
<?php
        $sql=mysqli_query($database,"select * from user_storage where email='$email'");
        $number=mysqli_num_rows($sql);
   
	 if( mysqli_num_rows($sql) > 0) { echo '<ol>';
	while($rws = mysqli_fetch_array($sql)){
		?>
		<li><a href="../userfiles/storage/<?php echo $rws['storage']; ?>"><?php echo $rws['storage']; ?></a><br><br></li>
		 <?php  } echo '</ol>';} else { echo '<h2> No files Found </h2>';}?>

</div>
</div>
</div>

</div>
</body>
</html>
