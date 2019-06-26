<?php 
require 'dbconnect.php';
$dir = 'images/';

$file_display = array(
	'jpg',
	'png',
	'jpeg'
);

if(file_exists($dir) == false)
{
	echo "file not found";
}else
{
	$file_contents = scandir($dir);
	$gallery_arr = array();
	$count = 0;
	foreach($file_contents as $file)
	{
		$value=explode('.', $file);
		$file_type = strtolower(end($value));

        if ($file !== '.' && $file !== '..' && in_array($file_type, $file_display) == true) {
			$gallery_arr[$count++] = 'http://192.168.43.41/takshashila/'.$dir.$file ;
	$vlaues='http://192.168.43.41/takshashila/'.$dir.$file;
	$query="INSERT INTO `images`(`url`) VALUES ('$vlaues')";
	if(mysqli_query($connection,$query)){
		echo "inserted";
	}else{
		echo "rejected";
	}

	}
		
	}  
	echo json_encode($gallery_arr);
	
}

?>