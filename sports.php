<?php require 'takshashila/dbconnect.php';?>

<!DOCTYPE html>
<html>
<head>
	<title>Takshashila|Sports</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="ico.png"  sizes="32x32">
<style media="screen">
.toast{
	font-size: 16px!important;
}
a:hover{
	text-decoration: none!important;
}
	.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{
		border-top: none!important;
	}
	.modal{
		max-height: 90%!important;
		overflow-y: scroll!important;
	}.pop_open{
		height: 100%!important;
		width:100%!important;
		top:5%!important;
	}

	body{
		background-image: url("img/schedule pics2.jpg");
	}
	@media screen and (min-width: 1024px) and (min-height: 1320px) { /* ipad pro*/
		footer{
			position: absolute;
			bottom: 0px!important;
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

    .user{
      width: 150px;
      margin-top: -130px;
      margin-left: 800px;
    }


	.one{
		margin-top: 50px;
		padding: 2px 4px 2px 4px;
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
.card-title{
	color: black;
	font-size: 16px;
	font-weight: bolder;

}

@media only screen and (max-width: 768px) {/*mobile*/
			.desk_view{
				display: block;
			}
			.modal{
				overflow-y: visible;

			}
    }
    @media only screen and (min-width: 768px) {/*desktop*/
			.mob_view{
				display: none;
			}
}
footer{
	margin-top:200px;
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
		<a href="index.php"><li class="cont_1">Home</li></a>
		<a href="about.php"><li class="cont_2">About Us</li></a>
		<a href="event.php"><li class="cont_5">Events</li></a>
		<a href="proshow.php"><li class="cont_4">Proshows</li></a>
		<a href="ticket.php"><li class="cont_7">Tickets</li></a>
		<a href="schedule.php"><li class="cont_6">Schedule</li></a>
		<a href="spons.php"><li class="cont_9">Sponsor</li></a>
		<a href="cause.php"><li class="cont_3">Cause</li></a>
		<a href="gallery.php"><li class="cont_8">Gallery</li></a>
		<a href="hospitality.php"><li class="cont_11">Hospitality</li></a>
		<a href="contact.php"><li class="cont_2">Contact Us</li></a>
		<a href="registration.php"><li class="cont_10">Registration</li></a>
				<?php if(isset($_SESSION['idvalue'])){ ?>
<a href="takshashila/logout.php" ><li class="cont_10"><b id="log">LogOut</b></li></a>
<?php }else{ ?>
          <a href="login.html" ><li class="cont_10"><b id="log">Login</b></li></a>
<?php }?>
</ul><br><br>
	<!--nav-->

<div class="container-fluid  desk_view">
	<br><br>
	<div class="row">
		<center><h1>Sports</h1></center>
	</div>
	<div class="row desk">
			<center>
				        <div class="card-image" onclick="Materialize.toast('Click \'PREMIUM REGISTERATION\' ', 10000)">
						<a href="#modal1" class="modal-trigger">
						<img src="img/futsal.png" id="fustal" onclick="fun()" class="img-responsive" style="height:150px;width:150px;"></a>
						<span class="card-title">Futsal </span></div>
                      </center>
					</div>


		<div class="row">
			<center>
					<div class="card-image" onclick="Materialize.toast('Click \'PREMIUM REGISTERATION\' ', 10000)">
						<a href="#modal2" class="modal-trigger">
						<img src="img/squarecricket.png" id="cricket" onclick="fun()" class="img-responsive" style="height:150px;width:150px;"></a>
						<span class="card-title">Square Cricket</span>
					</div>
				</center>
		</div>
		<div class="row">
			<center>
					<div class="card-image" onclick="Materialize.toast('Click \'PREMIUM REGISTERATION\' ', 10000)">
						<a href="#modal3" class="modal-trigger">
						<img src="img/jumpshot.png" id="basketball" onclick="fun()" class="img-responsive" style="height:150px;width:150px;"></a>
						<span class="card-title">BIG 3'S</span>
					</div>
				</center>
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


						<!--Modal1-->
  <!-- Modal Structure -->
  <div id="modal1" class="modal pop_open">
  <div class="card" style="height: 170%">
    <div class="card-tabs">
    </div>
       <div class="card-content lighten-4">
      <div id="test4">
        <div class="row">
        	<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/futsal.png" alt="Smiley face">
          </div>
          <div class="col-md-7"><p><span class="one" style="color: black;"><h1>TAKSHASHILA FUTSAL LEAGUE (5'S FOOTBALL):</h1><h3> Welcome to the real
football.</h3>
<h4>RULES:</h4>
1. 5 + 3 players per team. <br>
2. Timings (10 - 5 - 10). <br>
3. Entire team should enter the campus before reporting time. <br>
4. College ID is mandatory. <br>
5. Entry fee: Rs.200 per team for online registration and Rs.250 for on spot
registration. <br>
6. Teams can call one 1minute timeout per half. <br>
7. There is no extra time, injury time and stoppage time. <br>
8. Teams are comprised of 4 outfield players and one goal keeper. <br>
9. There are no off-sides. <br>
10. Referee's decision is final. <br>
11. Rotational substitution is allowed. <br>
CONTACT <br>
Mr. Shyam Paul: 8940447515.
</span></p></div>
        </div>
      </div>

			<div class="row">
			 <center>
				<a href="https://www.townscript.com/e/takshashila-031214/booking"><button type="button" class="btn btn-success btn-lg one" onclick="add()">Premium Registration</button></center></a>
			</div>    </div>
  </div>
  </div>

<!--End-modal1-->

<!--Modal2-->

  <!-- Modal Structure -->
  <div id="modal2" class="modal pop_open">
  <div class="card"  style="height: 145%">
    <div class="card-tabs">
    </div>
       <div class="card-content lighten-4">
      <div id="test7">
        <div class="row">

        	<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/squarecricket.png" alt="Smiley face">
          </div>

          <div class="col-md-7"><p><span class="one" style="color: black;"><h1>SQUARE CRICKET (GULLY CRICKET):</h1><h3> Let's bring back your childhood. </h3>
<h4>Rules: </h4>
1. Before start of the match both captain have to give the name of all the 6
players to the umpire. <br>
2. The game consists of 6 overs. <br>
3. Entry fee of Rs.100 per team should be paid online and Rs.150 on spot
registration. <br>
4. Only Underarms are allowed. <br>
5. Only boundaries are allowed. <br>
6. One bowler can bowl maximum of 2overs and others can bowl 1 over. <br>
7. College ID card is mandatory. <br>
CONTACT <br>
Mr. Arun Pandi S: 8778842273.

</span></p></div>
        </div>
      </div>

			<div class="row">
			 <center>
				<a href="https://www.townscript.com/e/takshashila-031214/booking"><button type="button" class="btn btn-success btn-lg one" onclick="add()">Premium Registration</button></center></a>
			</div>
    </div>
  </div>
  </div>

<!--End-modal2-->


<!--Modal3-->

  <!-- Modal Structure -->
  <div id="modal3" class="modal pop_open">
  <div class="card" style="height: 145%">
    <div class="card-tabs">
    </div>
       <div class="card-content lighten-4">
      <div id="test10">
        <div class="row">
        	<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/jumpshot.png" alt="Smiley face">
          </div>

          <div class="col-md-7"><p><span class="one" style="color: black;"><h1>BIG 3'S (BASKET BALL) (3 -on- 3):</h1>       <h3>Hello to the indie Michael Jordan. </h3>
<h4>Rules: </h4>
1. The game is a single period of 10 minutes with sudden death at 21 points. <br>
2. The winner is the first team to score 21 points or the team with highest score at the end of 10 minutes. <br>
3. Entry fee of Rs.100 per team should be paid on spot and Rs.150 should be
paid on spot. <br>
4. A tie regulation leads to an untimed overtime period, which is won by the first team to score two points in overtime. <br>
5. Note that if a game is tied at 20 points at the end of regulation, reaching 21 points does not end the game. <br>
6. College ID card is mandatory. <br>
7. Organizers decision will be final. <br>
CONTACT <br>
Mr. Ugesh C: 7401332965
</span></p></div>
        </div>
      </div>
			<div class="row">
			 <center>
				<a href="https://www.townscript.com/e/takshashila-031214/booking"><button type="button" class="btn btn-success btn-lg one" onclick="add()">Premium Registration</button></center></a>
			</div>
    </div>
  </div>
  </div>

<!--End-modal3-->



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
<script>
$(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });

</script>


<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
<!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

	<script type="text/javascript">
	var ev;

	function fun() {
		ev = event.srcElement.id;
		// console.log(ev);
		// console.log(event.srcElement.id);
	}

	function add() {
		// alert(ev);
		$.ajax({
		type: "POST",
		url: "takshashila/registerevent.php",
		data: {
			eventname:ev
		},
		success: function (data) {

				if(data==="failed"){
		alert("Login to register");
			location.href = "login.html";
		}else{
		// alert("success");
					alert(data);
		}
		}
	});
	}

	</script>

</body>
</html>
