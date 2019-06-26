<?php
$id = $_POST['id'];
$name = $_POST['name'];
$collegename = $_POST['collegename'];
$dob = $_POST['dob'];
$email =$_POST['email'];
$basestring = $_POST['basestring'];
$mobile = $_POST['mobile'];
send_mail($id,$name,$collegename,$dob,$email,$basestring,$mobile);
function send_mail($id,$name,$collegename,$dob,$email,$basestring,$mobile){
    //  $filename = '1513242697197x';
    // $path = 'images';
    // $file = $path . "/" . $filename;

    $mailto = trim($email," ");
    $subject = 'Cit Takshashila Qr Code For Entry';
    $message = 'My message';

   // $content = file_get_contents($file);
    //$content = chunk_split(base64_encode($content));
    $content = chunk_split($basestring);
    // a random hash will be necessary to send mixed content
    $separator = md5(time());

    // carriage return type (RFC)
    $eol = "\r\n";

    // main header (multipart mandatory)
    $headers = "From: name <takshashila@citchennai.net>" . $eol;
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
    $body .= "Content-Type: application/octet-stream; name=\"" . "Takshashila-QrCode" . "\"" . $eol;
    $body .= "Content-Transfer-Encoding: base64" . $eol;
    $body .= "Content-Disposition: attachment" . $eol;
    $body .= $content . $eol;
    $body .= "--" . $separator . "--";

    //SEND Mail
    if (mail($mailto, $subject, $body, $headers)) {
        echo "mail send ... OK"; // or use booleans here
    } else {
        echo "mail send ... ERROR!";
        print_r( error_get_last() );
    }
}
?>
