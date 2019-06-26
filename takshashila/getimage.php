<?php
require 'dbconnect.php';
$images = array(); 
$sql = "SELECT * FROM images";
$result = mysqli_query($connection,$sql);
while($row = mysqli_fetch_assoc($result)){
	array_push($images,$row);
}
echo json_encode($images);
?>