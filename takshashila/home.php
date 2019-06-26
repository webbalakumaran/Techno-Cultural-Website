<?php require 'dbconnect.php';?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta name="viewport" content="width=device-width, initial-scale=0.7, user-scalable=no ,maximum-scale=1.0" />
  <meta charset="UTF-8">
  <title>Tk18HOME</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="css/home/text.css">
      <link rel="stylesheet" href="css/home/style.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css"
          href="css/home/font.css"/>
      <link rel="stylesheet" href="css/home/pulse.css">
    <link rel="stylesheet" href="css/home/icon.css">
      <link rel="stylesheet" href="css/home/text.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

      <link rel="stylesheet" href="css/home/BG.css">

      <link rel="stylesheet" type="text/css" href="css/home/footer.css">
<script type="text/javascript">
function aboutus() {
    location.href = "about.html";
}
function schedule() {
    location.href = "schedule.html";
}
function sponsors() {
    location.href = "spons.html";
}
function hospitality() {
    location.href = "hospitality.html";
}
function events() {
    location.href = "events.html";
}
function tickets() {
    location.href = "tickets.html";
}
function gallery() {
    location.href = "gallery.html";
}
function proshows() {
    location.href = "proshows.html";
}
function contact() {
    location.href = "contact.html";
}
function cause() {
    location.href = "cause.html";
}

function login() {
    location.href = "login.html";
}
</script>
<style>
@media only screen and (max-width: 768px) {/*mobile*/
.wrapper{
  zoom:63%;
}
.pulse{
  left: 41%;
}
.tk_font{
  font-size: 74px;
  position: relative;
  left: -10px;
  top: 0px;
}
}
@media screen and (min-width: 1024px) and (min-height: 1320px) { /* ipad pro*/
  .wrapper{
    zoom: 128%!important;
  }
    }
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px){ /* ipad */
  .wrapper{
    zoom: 173%;
  }
    }
	.one {
    position: absolute;
    left: 0px;
    top: 400px;
    z-index: 1;
}
.two {
    position: absolute;
    left: 125px;
    top: 250px;
    z-index: 1;
}
.three {
    position: absolute;
    left: 340px;
    top: 60px;
    z-index: 1;
}
.four {
    position: absolute;
    left: 510px;
    top: -10px;
    z-index: 1;
}
.five {
    position: absolute;
    left: 680px;
    top: -10px;
    z-index: 1;
}

.six {
    position: absolute;
    left: 850px;
    top: 60px;
    z-index: 1;
}
.seven {
    position: absolute;
    left: 1119px;
    top: 250px;
    z-index: 1;
}
.eight {
    position: absolute;
    left: 1190px;
    top:400px;
    z-index: 1;
}
.nine {
    position: absolute;
    left: 340px;
    top: 550px;
    z-index: 1;
}
.ten {
    position: absolute;
    left: 850px;
    top: 550px;
    z-index: 1;
}
.eleven {
    position: absolute;
    left: 680px;
    top: 480px;
    z-index: 1;
}
.twean {
    position: absolute;
    left: 510px;
    top: 480px;
    z-index: 1;
}
canvas {
    position: absolute;
    left: 0px;
    top: 0px;
    z-index: -1;
}


</style>

</head>


<body style="overflow: hidden;" >
      <canvas id="c"></canvas>
<?php 
if($_SESSION['idvalue']!=null){

}else{
?>
<div class="pulse" onclick="login()">
<p style="margin-top:20px;">login</p>

</div>
<?php 

}

?>
<div class="wod">
	<span class="tk_font">
    Takshashila
  <p style="font-size:36px;">Colour the future</p>
  <p style="font-size:36px; font-family: cursive;">March 1-3</p>
</span>

<br>
</div>

<!--Footers-->
<a href="#"></a>
<br>
<footer>
  <div class="wrapper">
      <div>
        <div class="item1 item motion" onclick="aboutus()">
          <h1><i class="fa fa-users"  aria-hidden="true" style="font-size: 60px; color: white"></i><p style="font-size:16px; white-space: nowrap; margin-left:-10px;">About Us</p></h1></a>

        </div>
        <div class="item2 item motion" onclick="schedule()">
            <i class="fa fa-clock-o" aria-hidden="true" style="font-size: 60px; color: white"><p style="font-size:16px; white-space: nowrap; margin-left:-10px;">Schedule</p></i>

        </div>
        <div class="item3 item motion" onclick="sponsors()">
        	<i class="fa fa-handshake-o" aria-hidden="true" style="font-size: 60px; color: white"><p style="font-size:16px; white-space: nowrap; margin-left:-10px;">Sponsors</p></i>
        </div>
        <div class="item4 item motion" onclick="hospitality()">
        	<i class="fa fa-heartbeat" aria-hidden="true" style="font-size: 60px; color: white"><p style="font-size:16px; white-space: nowrap; margin-left:-10px;">Hospitality</p></i>

        </div>
        <div class="item5 item motion" onclick="events()">
          <i class="fa fa-puzzle-piece" aria-hidden="true" style="font-size: 60px; color: white"><p style="font-size:16px; white-space: nowrap; margin-left:-10px;">Events</p></i>
        </div>
        <div class="item6 item motion" onclick="tickets()">

          <i class="fa fa-ticket" aria-hidden="true" style="font-size: 60px; color: white"><p style="font-size:16px; white-space: nowrap; margin-left:10px;margin-top:5px;">Tickets</p></i>
        </div>
        <div class="item7 item motion" onclick="gallery()">
        	<i class="fa fa-picture-o" aria-hidden="true" style="font-size: 60px; color: white"><p style="font-size:16px; white-space: nowrap; margin-left:10px;">Gallery</p></i>
        </div>
        <div class="item8 item motion" onclick="proshows()">
        	<i class="fa fa-star-half-o" aria-hidden="true" style="font-size: 60px; color: white"><p style="font-size:18px; white-space: nowrap; margin-left:-10px;">Proshows</p></i>

        </div>
        <div class="item9 item motion" onclick="contact()">
        	<i class="fa fa-phone" aria-hidden="true" style="font-size: 60px; color: white"><p style="font-size:16px; white-space: nowrap; margin-left:10px;">Contact Us</p></i>
        </div>
        <div class="item10 item motion" onclick="cause()">
          <i class="fa fa-question-circle-o" aria-hidden="true" style="font-size: 60px; color: white;position:relative;left:120px;top:19px;"><p style="font-size:16px; white-space: nowrap; margin-left:10px;">Cause</p></i>
        </div>
        <div class="item11 item motion">

        </div>
     </div>
</div>
</footer>

<!--End-->
<script  src="js/home/index.js"></script>
     <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/animejs/1.0.0/anime.min.js'></script>
<script  src="js/home/BG.js"></script>
<script  src="js/home/text.js"></script>
</body>
</html>
