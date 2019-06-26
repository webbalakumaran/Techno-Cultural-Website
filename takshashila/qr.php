<?php 
include "phpqrcode.php";
$data=array();
$data['name']= "niresh";
$data['email']= "niresh@gmail.com";
$data['collegename']= "niresh";
$data['department']= "cse";
$data['mobile']= "9941989384";
$data['dob']= "niresh@gmail.com";
$data['id']= "12345678";
$value =json_encode($data);
QRcode::png($value,'tst.png');
$value =file_get_contents('tst.png');
$value = chunk_split(base64_encode($value));
unlink('tst.png');
send_mail($value);
function send_mail($basestring){
    $mailto = trim($email," ");
    $subject = 'Cit Takshashila Qr Code For Entry';
    $message = 'My message';
    $content = chunk_split($basestring);
     $separator = md5(time());

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
        print_r( error_get_last() );
    }
}
?>