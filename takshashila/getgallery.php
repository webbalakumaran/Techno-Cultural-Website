<?php
require 'dbconnect.php';
$query = "SELECT `url` FROM `images`";
$result = mysqli_query($connection,$query);
$data = array();
while($row=mysqli_fetch_assoc($result)){
array_push($data,$row);
}
echo json_encode($data,JSON_PRETTY_PRINT);
?>