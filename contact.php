<?php require 'takshashila/dbconnect.php';?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Takshashila|Contact Us</title>
    <link rel="icon" href="ico.png"  sizes="32x32">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/nav.css">
      <link rel="stylesheet" type="text/css" href="css/contact.css">
      <style media="screen">
      a:hover{
        text-decoration: none;
      }
    .user{
      width: 150px;
      margin-top: -130px;
      margin-left: 800px;
    }

    .card .card-title{
      width: 100%!important;
      background: #0000004a!important;
    }
		body{
		overflow-x:hidden;
		}
      .side-nav li{
        line-height: 48px !important;
      }
      @media only screen and (max-width: 992px)
      {

  .side-nav a {
       padding: 0 0px;
  }
  }
  .t1,.t2,.t3,.t4,.t5
  {
   background-color: white;
   border-radius: 50%;
   border: 1x solid grey;
   padding:10px;
   color: black !important;
   height: 47px;
   width: 47px;
  }
  body{
    background-image: url("img/schedule pics2.jpg");
  }

  footer{
  	background-color: black;

  }
  .footer_icons{
  	color: white;
  }
  .footer_address{
  	 font-family: monospace;
  	 color: white;
  	 font-size: 20px;
  }

  @media only screen and (min-device-width : 768px)
  {
  	.foo_icons{
  		color: white;
  	}
  }

  @media only screen and (min-device-width : 768px) and (max-device-width : 1024px)
  {
     .foo_img{
        margin-left: 200px;
     }
     .foo_icons{
     	 margin-left: 200px;
     	 color: white;
     }
  }


      </style>
  </head>
  <body>
        <!--nav-->
        <nav class="container-fluid" style="position:fixed;z-index:1;">
          <div class="col-md-4">
            <a href="#" data-activates="slide-out" class="button-collapse" style="display:block;">&nbsp;<i class="fa fa-bars" aria-hidden="true" style="font-size:22px;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;Takshashila



          </div>
          <div class="col-md-8">

          </div>
        </nav>

        <ul id="slide-out" class="side-nav">
          <a href="index.php" ><li class="cont_1">Home</li></a>
          <a href="about.php" ><li class="cont_5">About Us</li></a>
          <a href="event.php" ><li class="cont_5">Events</li></a>
          <a href="proshow.php" ><li class="cont_4">Proshows</li></a>
          <a href="ticket.php" ><li class="cont_7">Tickets</li></a>
          <a href="schedule.php" ><li class="cont_6">Schedule</li></a>
          <a href="spons.php" ><li class="cont_9">Sponsor</li></a>
          <a href="cause.php" ><li class="cont_3">Cause</li></a>
          <a href="gallery.php" ><li class="cont_8">Gallery</li></a>
          <a href="hospitality.php" ><li class="cont_11">Hospitality</li></a>
          <a href="registration.php" ><li class="cont_10">Registration</li></a>
          		<?php if(isset($_SESSION['idvalue'])){ ?>
<a href="takshashila/logout.php" ><li class="cont_10"><b id="log">LogOut</b></li></a>
<?php }else{ ?>
          <a href="login.html" ><li class="cont_10"><b id="log">Login</b></li></a>
<?php }?>
      </ul><br><br><br>
        <!--nav-->
  <!--Code here for body-->
    <div class="container-fluid main">
      <div class="row">
        <div class="col-md-4 ri">

            <img src="img/tk_black.png" alt="" class="img-responsive fix" style="max-width:470px;position:fixed;left:20px;top:100px;"><br>
            <center style="position:fixed;left:136px;top:400px;"><h1><i>CONTACT US</i></h1></center>

        </div>
        <div class="col-md-8">
          <br><br><br><br>
          <center><h4>For any queries feel free to write or contact at takshashila@citchennai.net</h4></center>
          <div class="container-fluid">
            <div class="row">
              <center>
                <h2>For queries on events contact +919962211206, +919940076678  </h2>
                <h2>For queries on registration contact +918939652343  </h2>
                <h2>For queries on logistics and accommodation contact +919790920104</h2>
              </center>
            </div>
          </div>
          <br>
          <center><iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d124416.13999603194!2d79.97338045888525!3d12.971571635731657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3a52f4d07355bab5%3A0xbb6063169c4ed4d9!2schennai+institute+of+technology!3m2!1d12.971580999999999!2d80.043421!5e0!3m2!1sen!2sin!4v1514441623305" width="90%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></center>
        </div>
      </div>
    </div>

    <!--Code here for footer-->

    <footer>
    <!--
      <br><br> -->
    <div class="container-fluid" style="padding-right: 0px!important;
        padding-left: 0px!important;
        margin-right: 0px!important;
        margin-left: 0px!important;">


    <div class="row">
     <div class="col-md-5">
       <img src="img/cit logo.png" class="img-responsive foo_img" style="    margin-left: 13px;">
     </div>

     <div class="col-md-4 foo_icons">
        <h1 style="margin-left: 40px; color: white!important">
          <a href="https://www.facebook.com/cittakshashila" style=" color: white!important" target="blank" ><i class="fa fa-facebook-official" aria-hidden="true"></i> &nbsp;&nbsp; </a>
            <a href="https://twitter.com/cittakshashila" style=" color: white!important" target="blank"><i class="fa fa-instagram" aria-hidden="true"></i> &nbsp;&nbsp;</a>
          <a href="https://www.youtube.com/cittakshashila" style=" color: white!important" target="blank">  <i class="fa fa-twitter-square" aria-hidden="true"></i> &nbsp;&nbsp;</a>
            <a href="https://www.instagram.com/cittakshashila" style=" color: white!important" target="blank"><i class="fa fa-youtube-play" aria-hidden="true"></i> &nbsp;&nbsp;</a>
        </h1>
     </div>

     <div class="col-md-3">
      <center class="footer_address">CAMPUS:</center>
     <center><h4 style="color: white;">Sarathy Nagar, Kundrathur, <br>Chennai- 600069</h4> </center> <br>
     </div>
    </div>

    </div>
    </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
     $(".button-collapse").sideNav();
    </script>
    <script>
    $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 300
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true, // Choose whether you can drag to open on touch screens,
      onOpen: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is opened
      onClose: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is closed
    }
    );
    </script>
  </body>
</html>
