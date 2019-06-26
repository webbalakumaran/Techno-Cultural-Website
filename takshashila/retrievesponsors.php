<?php
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
			 $myObj=array('url'=>'http://192.168.43.41/takshashila/'.$dir.$file);
			 $gallery_arr[$count++] = json_encode($myObj);
		}
		
	}  
	echo json_encode($gallery_arr);
	
}
?>