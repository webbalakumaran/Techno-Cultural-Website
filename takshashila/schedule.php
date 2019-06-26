<?php
require 'dbconnect.php';
$retrievequery = "select day,title,description from schedule";
$result = mysqli_query($connection,$retrievequery);
$data=array();
while($row = mysqli_fetch_assoc($result)){
$example=$row;
array_push($data,$example);
}
$data = json_encode(array("data"=>$data),JSON_PRETTY_PRINT);
echo $data;
?>