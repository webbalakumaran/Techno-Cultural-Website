<?php
require 'dbconnect.php';
$title = $_POST['title'];
$day = $_POST['day'];
$description=$_POST['description'];
$insertquery = "INSERT INTO `schedule`(`day`, `title`, `description`) VALUES ('$day','$title','$description')";
if(mysqli_query($connection,$insertquery)){
	echo "inserted";
}else{
	echo "not inserted".mysqli_error($connection);
}
mysqli_close($connection);
?>