<?php
require 'dbconnect.php';
$eventname="niresh";
$query="create table $eventname(count INT NOT NULL PRIMARY KEY AUTO_INCREMENT,id INT NOT NULL UNIQUE,name varchar(60) NOT NULL,mobile varchar(60) NOT NULL,email varchar(60) NOT NULL,collegename varchar(60) NOT NULL,FOREIGN KEY fk_cat(id)
   REFERENCES user_details(id)
   ON UPDATE CASCADE)";
if(mysqli_query($connection,$query)){
echo "successfull";
}else{
echo mysqli_error($connection);
}
?>