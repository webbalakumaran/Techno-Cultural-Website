<?php require 'takshashila/dbconnect.php';?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Takshashila|Sponsors</title>
<link rel="icon" href="ico.png"  sizes="32x32">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="css/nav.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
	a:hover{
		text-decoration: none;
	}
    .user{
      width: 150px;
      margin-top: -130px;
      margin-left: 800px;
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
	.t1:hover{
	  color:   #3b5998 !important;
	}

	.t2:hover{
	  color: skyblue !important;
	}

	.t3:hover{
	  color: #FF0000!important;
	}

	.t4:hover{
	  color: #0077B5!important;
	}

	.t5:hover{
	  color: #d34836 !important;
	}

	body{
		overflow-x:hidden;
	}
	.cont{
		padding-left: 25px;
		text-decoration: none;
		color: black;
	}
	.cont:hover{

		background-color: lightgrey !important;
	}
	@media only screen and (max-width: 992px)
	{

.side-nav a {
	 padding: 0 0px;
}
}

/* footer */
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
		<a href="about.php" ><li class="cont_2">About Us</li></a>
		<a href="event.php" ><li class="cont_5">Events</li></a>
		<a href="proshow.php" ><li class="cont_4">Proshows</li></a>
		<a href="ticket.php" ><li class="cont_7">Tickets</li></a>
		<a href="schedule.php" ><li class="cont_6">Schedule</li></a>
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



	<div class="container-fluid" style="padding-right: 0px!important;
	    padding-left: 0px!important;
	    margin-right: 0px!important;
	    margin-left: 0px!important;">
		<div class="row">
			<center><h1>SPONSORS</h1></center>
		</div>
		<br><br>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<center><h3><!--TITLE SPONSOR--></h3> <a href="http://crizaze.com/">
				<img src="img/spons/crizaze318-159.jpg" alt="img" class="img-responsive"></img></a>
			</center>
			</div>
			<div class="col-md-4"></div>
		</div>

		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<center><h3><!--Platinum Sponsor--></h3> <a href="http://www.radiomirchi.com/">
                 <img src="img/spons/radio-mirchi318-159.jpg" alt="img" class="img-responsive"></img></a></center>
                </div>
                <div class="col-md-4"></div>
		</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<center><h3> <!--Presented by--></h3> <a href="http://www.paulsons.in/">
                 <img src="img/spons/paulsons318-159.jpg" alt="img" class="img-responsive"></img></a></center>
                </div>
                <div class="col-md-4"></div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<center><h3> <!--Presented by--></h3> <a href="http://www.livechennai.com/">
								 <img src="img/spons/live-chennai318-159.jpg" alt="img" class="img-responsive"></img></a></center>

			</div>
			<div class="col-md-4">
				<center><h3> <!--Presented by--></h3> <a href="http://www.vgpuniversalkingdom.in/attractions/snow-kingdom/">
                 <img src="img/spons/vgp.png" alt="img" class="img-responsive"></img></a></center>

			</div>
			<div class="col-md-4">
				<center><h3> <!--Presented by--></h3> <a href="http://www.thedressshop.in/">
                 <img src="img/spons/the-dress-dress318-159.jpg" alt="img" class="img-responsive"></img></a></center>

			</div>
            </div>
            <br><br>
						<!--
            <div class="row">
            	<div class="col-md-1"></div>
            	<div class="col-md-3"><center><h3>suiting sponsor</h3>
            		<img src="img/pic3.png" alt="img" class="img-responsive"></img></center>
            	</div><br>
            	<div class="col-md-1"></div>
            	<div class="col-md-3"><center><h3>travel sponsor</h3>
            		<img src="img/travel.jpg" alt="img" class="img-responsive"></img></center>
            	</div><br>
            	<div class="col-md-1"></div>
            	<div class="col-md-3"><center><h3>style sponsor</h3>
            		<img src="img/pic6.png" alt="img" class="img-responsive"></img></center>
            	</div>
            </div>
            <div class="row">
            	<div class="col-md-1"></div>
            	<div class="col-md-3"><center><h3>radio sponsor</h3>
            		<img src="img/pic8.png" alt="img" class="img-responsive"></img></center>
            	</div><br>
            	<div class="col-md-1"></div>
            	<div class="col-md-3"><center><h3>co-sponsor</h3>
            		<img src="img/pic5.png" alt="img" class="img-responsive"></img></center>
            	</div><br>
            	<div class="col-md-1"></div>
            	<div class="col-md-3"><center><h3>opportunity sponsor</h3>
            		<img src="img/pic13.png" alt="img" class="img-responsive"></img></center>
            	</div>
             </div>
				<div class="row">
            	<div class="col-md-1"></div>
            	<div class="col-md-3"><center><h3>sports sponsor</h3>
            		<img src="img/pic15.png" alt="img" class="img-responsive"></img></center>
            	</div><br>
            	<div class="col-md-1"></div>
            	<div class="col-md-3"><center><h3>adventure sponsor</h3>
            		<img src="img/park.png" alt="img" class="img-responsive"></img></center>
            	</div><br>
            	<div class="col-md-1"></div>
            	<div class="col-md-3"><center><h3>gift sponsor</h3>
            		<img src="img/gift.jpg" alt="img" class="img-responsive"></img></center>
            	</div>
             </div>
	</div>
-->
	<!-- <footer class="container-fluid" style="background-color: black;margin-left:-15px!important;margin-right:-15px!important;">
        <center> <h3> &nbsp&nbsp&nbsp;
            <a href="https://www.facebook.com/cittakshashila" target="blank"><i class="t1 fa fa-facebook ico" aria-hidden="true"></i> &nbsp;&nbsp;</a>
            <a href="https://twitter.com/cittakshashila" target="blank"><i class="t2 fa fa-twitter ico" aria-hidden="true"></i> &nbsp;&nbsp;</a>
            <a href="https://www.youtube.com/cittakshashila" target="blank"><i class="t3 fa fa-youtube ico" aria-hidden="true"></i> &nbsp;&nbsp;</a>
						<a href="https://www.instagram.com/cittakshashila" target="blank"><i class="t3 fa fa-instagram ico" aria-hidden="true"></i> &nbsp;&nbsp;</a>
					</center>
</footer> -->
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
    <h1 style="margin-left: 40px; color: white">
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
