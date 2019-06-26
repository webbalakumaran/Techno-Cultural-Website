<?php require 'takshashila/dbconnect.php';?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Takshashila|Funzone</title>
    <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
       <link rel="icon" href="ico.png"  sizes="32x32">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/css?family=Quintessential|Rancho" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/about.css">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <style>
    a:hover{
      text-decoration: none!important;
    }
    body{
      background-image: url("img/schedule pics2.jpg");
    }
    .user{
    	width: 150px;
    	margin-top: -130px;
    	margin-left: 800px;
    }

  @media only screen and (min-width: 768px) {/*desktop*/
    footer{
      position: absolute;
      bottom: 0px;
      width: 100%;
    }
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
      <div class="col-md-6">
        <a href="#" data-activates="slide-out" class="button-collapse" style="display:block;">&nbsp;<i class="fa fa-bars" aria-hidden="true" style="font-size:22px;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;Takshashila


      </div>
      <div class="col-md-6">


      </div>
    </nav>
    <ul id="slide-out" class="side-nav">
      <a href="index.php" ><li class="cont_1">Home</li></a>
      <a href="about.php" ><li class="cont_2">About Us</li></a>
      <a href="event.php" ><li class="cont_5">Events</li></a>
      <a href="proshow.php" ><li class="cont_4">Proshows</li></a>
      <a href="ticket.php" ><li class="cont_7">Tickets</li></a>
      <a href="schedule.php" ><li class="cont_6">Schedule</li></a>
      <a href="spons.php" ><li class="cont_9">Sponsor</li></a>
      <a href="cause.php" ><li class="cont_3">Cause</li></a>
      <a href="gallery.php" ><li class="cont_8">Gallery</li></a>
      <a href="hospitality.php" ><li class="cont_11">Hospitality</li></a>
      <a href="contact.php" ><li class="cont_2">Contact Us</li></a>
      <a href="registration.php" ><li class="cont_10">Registration</li></a>
      		<?php if(isset($_SESSION['idvalue'])){ ?>
<a href="takshashila/logout.php" ><li class="cont_10"><b id="log">LogOut</b></li></a>
<?php }else{ ?>
          <a href="login.html" ><li class="cont_10"><b id="log">Login</b></li></a>
<?php }?>
  </ul><br><br><br>
    <!--nav-->

    <!--Code here for body-->
      <center><h1 style="font-size:40px">FUNZONE</h1></center>
      <center><h3>You have a lot to enjoy on spot</h3></center>
    <!--Code here for body-->

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
    <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
       <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
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
