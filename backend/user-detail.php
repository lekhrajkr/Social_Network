<?php
if(isset(_SESSION)){
$email=$_SESSION['email'];
$sql = "SELECT * from user_details where email='$email'";
$result = $database->query($sql);
$row = $result->fetch_assoc();
}
?>
