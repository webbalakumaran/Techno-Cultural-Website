<?php require 'takshashila/dbconnect.php';?>

<!DOCTYPE html>
<html>
<head>
	<title>Takshashila|Cause</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="ico.png"  sizes="32x32">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="css/cause.css">

<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
<link rel='stylesheet prefetch' href='https://code.getmdl.io/1.2.1/material.teal-red.min.css'>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/nav.css">
	<style media="screen">

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

	#txt{
		font-size:25px;
	}
	a:hover{
		text-decoration: none!important;
	}
    .user{
    	width: 150px;
    	margin-top: -130px;
    	margin-left: 800px;
    }

		footer{
			padding-bottom: 10px;

		}
		.side-nav li{
			line-height: 48px;
		}
		@media only screen and (max-width: 992px)
		{

.side-nav a {
     padding: 0 0px;
}
}
body{
	background-image: url("img/schedule pics2.jpg");
}
.head1{
	font-family: 'Pacifico', cursive;

}
.head2{
	font-size:55px;
}
}
	</style>

</head>
<body>

	<!--nav-->
	<nav class="container-fluid" style="position:fixed;z-index:1;">
		<div class="col-md-4">
			<a href="#" data-activates="slide-out" class="button-collapse" style="display:block;">&nbsp;<i class="fa fa-bars" aria-hidden="true" style="font-size:22px;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:25px;">Takshashila</span>
		</div>
		<div class="col-md-8">

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
		<a href="gallery.php" ><li class="cont_8">Gallery</li></a>
		<a href="hospitality.php" ><li class="cont_11">Hospitality</li></a>
		<a href="contact.php" ><li class="cont_2">Contact Us</li></a>
		<a href="registration.php" ><li class="cont_10">Registration</li></a>
				<?php if(isset($_SESSION['idvalue'])){ ?>
<a href="takshashila/logout.php" ><li class="cont_10"><b id="log">LogOut</b></li></a>
<?php }else{ ?>
          <a href="login.html" ><li class="cont_10"><b id="log">Login</b></li></a>
<?php }?>
	</ul><br><br>
	<!--nav-->

<div class="container-fluid">

	<div class="row">
		<br><br><br>
      <div class="col-md-4">
				<center>
				<img src="img/logo.png" alt="logo" class="img-responsive">
			    <h1>Cause</h1></center><h4></h4>
      </div>
			<div class=" head1 col-md-8">
			<span>	<p class="head2">
					<ul id="txt">
					<li><span style="color:red;">RED: organ donation and blood</span>For the sake of living humanity, the living which needs blood and to humanity is to sharing. We embark the colour of Red amd proudly stand for organ and blood donation.  </li>
					<br>
					<li><span style="color:black;">BLACK: against drugs.</span>
The patience for the end of the current enslavement to pain, that patience is what is happiness on the other side. Lets preach black as we embark the step against drugs and it's aftermath. </li>
					<br>
					<li><span style="color:green;">GREEN: global warming</span>
It's saddening to know that the Amazons are perishing. Not everyone are certain on the certainty that the oxygen one day wont equally perish. Lets grow the thought  of seeding for the nature and going green. </li>
					<br>
					<li><span style="color:blue;">BLUE: saving water</span>
We serve merely a percent to this blue ball of wonder. Yet we somehow have reached to disintegrate its identity, Water. Wave your thoughts blue for the prosperity of our mother land's identity.</li>
					<br>
					<li><span style="color:yellow;">YELLOW: fighting depression</span>
When life comes with a package of happiness and envy. It all comes to a picture with a person holding ones joy with surreal life. Rise and shine with yellow, as the happiness and joy shines beside you.
 </li>
					<br>
					<li><span style="color:pink;">PINK: human trafficking</span>
Millions of years since humanity yet on the path flourishing towards tomorrow, somewhere the humans list the meaning of humanity. Raise pink with us as we stand against one of the brutal acts ever, human trafficking.</li>
					</ul>
					</p></span>

				</div>
			</div>
      </div>

</div>


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
