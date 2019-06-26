<?php

function record_exists ($conn,$value) {
    $query = "SELECT * FROM user_details WHERE id = '$value'";
    $result = mysqli_query($conn,$query);
    if (mysqli_num_rows($result) > 0 ) {
        return TRUE;
    } else {
		echo mysqli_error($conn);
        return FALSE;
    }
}

require 'dbconnect.php';
$filer=fopen("eventregister.txt",'w');
if(!isset($_SESSION['idvalue'])){
    echo "failed";
  }else{
    // // print_r(str_replace(substr($_SESSION['idvalue'],0,6),'',$_SESSION['idvalue']));
    if(!record_exists($connection,str_replace(substr($_SESSION['idvalue'],0,6),'',$_SESSION['idvalue']))){
            // header("Location: ../login.html");
      echo "Please Login or Signup";
      return;
    }

	$id=str_replace(substr($_SESSION['idvalue'],0,6),'',$_SESSION['idvalue']);

  $eventname=$_POST['eventname'];
	$name=$_SESSION['name'];
	$mobile=$_SESSION['mobile'];
	$email=$_SESSION['email'];
	$collegename=$_SESSION['collegename'];

	insertvalue:
	$query="INSERT INTO `$eventname`(`id`, `name`, `mobile`, `email`,`collegename`) VALUES ('$id','$name','$mobile','$email','$collegename')";
	// echo "in";
	if(mysqli_query($connection,$query)){
		echo "Added to your event sucessfully";
		fwrite($filer,"successfull");
	}else{
	if(mysqli_errno($connection)==1146){
$querycreate="create table $eventname(count INT NOT NULL PRIMARY KEY AUTO_INCREMENT,id INT NOT NULL UNIQUE,name varchar(60) NOT NULL,mobile varchar(60) NOT NULL,email varchar(60) NOT NULL,collegename varchar(60) NOT NULL)";
if(mysqli_query($connection,$querycreate)){
		goto insertvalue;
		}else{
			echo mysqli_error($connection);
		}
	}elseif(mysqli_errno($connection)==1062){
		echo "Already registered";
	}else{
		echo "failed".mysqli_error($connection);
	}
	}
}
fclose($filer);
mysqli_close($connection);
?>
