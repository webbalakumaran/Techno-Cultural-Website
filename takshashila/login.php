<?php
require 'dbconnect.php';
$email = $_POST['email'];
$password = $_POST['password'];
$query = "select * from user_details where email ='$email' and password='$password'";
$result = mysqli_query($connection,$query);
if(mysqli_num_rows($result)>0){
  $row = mysqli_fetch_row($result);
  $_SESSION['idvalue']='ONtk18'.$row[0];
  $_SESSION['name']=$row[1];
  $_SESSION['password']=$row[6];
  $_SESSION['collegename']=$row[4];
  $_SESSION['dob']=$row[5];
  $_SESSION['email']=$row[2];
  $_SESSION['mobile']=$row[3];
  // echo $_SESSION['name'];
  header("Location: ../index.php");
}else{
  // print_r("Retry");
  // echo "Failed!";
 //  $message = "Try again";
 //  echo "<script type='text/javascript'>alert('$message');</script>";
 // header("Location: ../login.html");
 ?>
<script type="text/javascript">
alert("Try again");
window.location.href = "../login.html";
</script>
<?php
}
?>
