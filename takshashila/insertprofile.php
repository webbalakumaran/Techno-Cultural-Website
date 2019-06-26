<?php
function send_mail($name,$idvalue,$email,$basestring){
    $mailto = trim($email," ");
    $eol = "\r\n";
    $subject = 'Cit Takshashila Qr Code For Entry';
    $message = 'Hey '.$name.','.$eol.'Welcome to Takshahila, the yearly grandeur of Chennai Institute of Technology.'.$eol.$eol.'Your registration Id is '.$idvalue.'.'.$eol.'Save the qr code given below for entering the fest!'.$eol.'Hope to have you on March 1, 2 and 3.'.$eol.'See you soon! :)';
    $content = chunk_split($basestring);
     $separator = md5(time());


    // main header (multipart mandatory)
    $headers = "From: Takshashila Support Team<takshashila@citchennai.net>" . $eol;
    $headers .= "MIME-Version: 1.0" . $eol;
    $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
    $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
    $headers .= "This is a MIME encoded message." . $eol;

    // message
    $body = "--" . $separator . $eol;
    $body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
    $body .= "Content-Transfer-Encoding: 8bit" . $eol;
    $body .= $message . $eol;

    // attachment
    $body .= "--" . $separator . $eol;
    $body .= "Content-Type: application/octet-stream; name=\"" . "Takshashila-QrCode.png" . "\"" . $eol;
    $body .= "Content-Transfer-Encoding: base64" . $eol;
    $body .= "Content-Disposition: attachment" . $eol;
    $body .= $content . $eol;
    $body .= "--" . $separator . "--";

    //SEND Mail
    if (mail($mailto, $subject, $body, $headers)) {
        echo "mail send ... OK"; // or use booleans here
    } else {
        echo "mail send ... ERROR!";

    }
}
require 'dbconnect.php';
include "phpqrcode.php";
$filer=fopen("insert.txt","w");
if(isset($_POST['name'])){
$name=$_POST['name'];
$password = $_POST['password'];
$collegename=$_POST['collegename'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$query="INSERT INTO `user_details`(`name`, `collegename`, `dob`, `mobile`, `email`,`password`) VALUES ('$name','$collegename','$dob','$mobile','$email','$password')";
if(mysqli_query($connection,$query)){
fwrite($filer,"success");
 $idvalue = "ONTK18".mysqli_insert_id($connection);
  $_SESSION['idvalue']=$idvalue;
  $_SESSION['name']=$name;
  $_SESSION['password']=$password;
  $_SESSION['collegename']=$collegename;
  $_SESSION['dob']=$dob;
  $_SESSION['email']=$email;
  $_SESSION['mobile']=$mobile;
  $data=array();
  $data['name']=$name;
  $data['email']=$email;
  $data['collegename']=$collegename;
  $data['department']=$department;
  $data['mobile']=$mobile;
  $data['dob']=$dob;
  $data['id']= $idvalue;
  $value =json_encode($data);
  QRcode::png($value,'tst.png');
  $value =file_get_contents('tst.png');
  $value = chunk_split(base64_encode($value));
  unlink('tst.png');
  send_mail($name,$idvalue,$email,$value);
 header("Location: ../index.php");
}else{
fwrite($filer,"failed".mysqli_error($connection));
header("Location: ../index.php");
}
}else{
	echo "not reached";
fwrite($filer,"failed");
}
fclose($filer);
mysqli_close($connection);
?>
