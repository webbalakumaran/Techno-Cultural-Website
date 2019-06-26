<?php require 'takshashila/dbconnect.php';?>

<!DOCTYPE html>
<html>
<head>
	<title>Takshashila|Culturals</title>
	<link rel="icon" href="ico.png"  sizes="32x32">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style media="screen">
a:hover{
	text-decoration: none!important;
}
	.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{
		border-top: none!important;
	}
	body{
		background-image: url("img/schedule pics2.jpg");
	}

	@media only screen and (max-width:768px) {
		div.card{
			height: fit-content!important;
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
.toast{
	font-size: 16px;
	top: 60px!important;
}
@media screen and (min-width: 1024px) and (min-height: 1320px) { /* ipad pro*/
		.desk_view{
			display: none!important;
		}
    }
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px){ /* ipad */
	.mob_view{
		display: block!important;
		margin-left: 25%;
	}
	.toast{
	font-size: 16px;
	top: 60px!important;
	z-index:100000!important;
}
    }
    .user{
      width: 150px;
      margin-top: -130px;
      margin-left: 800px;
    }


	.one{
		padding: 2px 4px 2px 4px;

	}


	@media only screen and (min-width: 768px) {/*desktop*/
		footer{
			position: absolute;
			bottom: -105l;'\px;
			width: 100%;
		}
		.one{
			position: relative;
		}
}

		footer{
			padding-bottom:-50px;
			margin-top: 50px;
			width: 100%!important;
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
				display: none;
			}
    }
    @media only screen and (min-width: 768px) {/*desktop*/
			.mob_view{
				display: none;
			}
}
.modal{
	max-height: 90%!important;
	overflow: scroll;
}
.pop_open{
height:100%!important;
width:100%!important;
top: 5%!important;
}

	</style>

</head>
<body>

<!-- login -->

<!-- <?php
if(isset($_SESSION['idvalue'])){
	?>
	<script type="text/javascript">
		document.getElementById('log').innerHTML = "LogOut";
	</script>
	<?php
}else{
?>
<script type="text/javascript">
	document.getElementById('log').innerHTML = "Login";
</script>
<?php

}

?> -->

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
		<a href="registration.php"><li class="cont_10"><b>Registration</b></li></a>
		<!-- <a href="login.html" ><li class="cont_10"><b id="log">Login</b></li></a> -->
		<?php if(isset($_SESSION['idvalue'])){ ?>
  	<a href="takshashila/logout.php" ><li class="cont_10"><b id="log">LogOut</b></li></a>
	<?php }else{ ?>
							<a href="login.html" ><li class="cont_10"><b id="log">Login</b></li></a>
		<?php }?>
	</ul><br><br>
	<!--nav-->

<div class="container-fluid  desk_view">
	<br><br><br>
	<center><h1 style="font-size:40px">Cultural</h1></center><br>
	<div class="row desk">
		<div class="col-md-2">
			<center>
				        <div class="card-image"  onclick="Materialize.toast('click \'ADD TO EVENTS LIST\' for ordinary events and click \'PREMIUM REGISTRATION\' for premium events', 10000)">
						<a href="#modal1" class="modal-trigger">
						<img src="img/cultural/dance/dance.png" id="dance" onclick="def()" class="img-responsive" style="height:150px;width:150px;"></a>
						<span class="card-title">DANCE EVENTS</span></div>

					</div>
				</center>

		<div class="col-md-2">
			<center>
					<div class="card-image" onclick="Materialize.toast('click \'ADD TO EVENTS LIST\'', 10000)">
						<a href="#modal2" class="modal-trigger">
						<img src="img/cultural/music/music.png" id="music" onclick="def()" class="img-responsive" style="height:150px;width:150px;"></a>
						<span class="card-title">MUSIC EVENTS</span>
					</div>
				</center>
		</div>
		<div class="col-md-2">
			<center>
					<div class="card-image" onclick="Materialize.toast('click \'ADD TO EVENTS LIST\'', 10000)">
						<a href="#modal3" class="modal-trigger">
						<img src="img/cultural/literary/lit.png" id="literary" onclick="def()" class="img-responsive" style="height:150px;width:150px;"></a>
						<span class="card-title">LITERARY</span>
					</div>
				</center>
		</div>
		<div class="col-md-2">
			<center>
					<div class="card-image">
						<a href="#modal4" class="modal-trigger" onclick="Materialize.toast('click \'ADD TO EVENTS LIST\'', 10000)">
						<img src="img/cultural/oratory/oratory.png" id="oratory" onclick="def()" class="img-responsive" style="height:150px;width:150px;"></a>
						<span class="card-title">ORATORY</span>
					</div>
				</center>
		</div>
		<div class="col-md-2">
			<center>
					<div class="card-image" onclick="Materialize.toast('click \'ADD TO EVENTS LIST\'', 10000)">
						<a href="#modal5" class="modal-trigger">
						<img src="img/cultural/theatre/theatre.png" id="theatre" onclick="def()" class="img-responsive" style="height:150px;width:150px;"></a>
						<span class="card-title">THEATRE</span>
					</div>
				</center>
		</div>
		<div class="col-md-2">
			<center>
					<div class="card-image" onclick="Materialize.toast('click \'ADD TO EVENTS LIST\'', 10000)">
						<a href="#modal6" class="modal-trigger">
						<img src="img/cultural/photography/photography.png" id="photo" onclick="def()" class="img-responsive" style="height:150px;width:150px;"></a>
						<span class="card-title">PHOTOGRAPHY</span>
					</div>
				</center>
		</div>
		  </div>

<br>
				<div class="row">
					<div class="col-md-2">
						<center>
								<div class="card-image" onclick="Materialize.toast('click \'ADD TO EVENTS LIST\'', 10000)">
									<a href="#modal7" class="modal-trigger">
									<img src="img/cultural/culnary/culnary.png" id="culinary" onclick="def()" class="img-responsive" style="height:150px;width:150px;"></a>
									<span class="card-title">CULINARY</span>
								</div>
							</center>
					</div>
					<div class="col-md-2">
						<center>
								<div class="card-image" onclick="Materialize.toast('click \'ADD TO EVENTS LIST\'', 10000)">
									<a href="#modal8" class="modal-trigger">
									<img src="img/cultural/quiz/quiz.png" id="quiz" onclick="def()" class="img-responsive" style="height:150px;width:150px;"></a>
									<span class="card-title">QUIZ</span>
								</div>
							</center>
					</div>
					<div class="col-md-2">
						<center>
								<div class="card-image" onclick="Materialize.toast('click \'ADD TO EVENTS LIST\'', 10000)">
									<a href="#modal9" class="modal-trigger">
									<img src="img/cultural/fine arts/paint.png" id="fine" onclick="def()" class="img-responsive" style="height:150px;width:150px;"></a>
									<span class="card-title">FINE ARTS</span>
								</div>
							</center>
					</div>
					<div class="col-md-2">
						<center>
								<div class="card-image" onclick="Materialize.toast('click \'ADD TO EVENTS LIST\'', 10000)">
									<a href="#modal10" class="modal-trigger">
									<img src="img/cultural/snooper/sherlock.png" id="snooper" onclick="def()" class="img-responsive" style="height:150px;width:150px;"></a>
									<span class="card-title">SNOOPER</span>
								</div>
							</center>
					</div>
					<div class="col-md-2">
						<center>
								<div class="card-image" onclick="Materialize.toast('click \'ADD TO EVENTS LIST\' for ordinary events and click \'PREMIUM REGISTRATION\' for premium events', 10000)">
									<a href="#modal11" class="modal-trigger">
									<img src="img/gaming/gaming.png" id="gaming" onclick="def()" class="img-responsive" style="height:150px;width:150px;"></a>
									<span class="card-title">GAMING</span>
								</div>
							</center>
					</div>
<br>
						<div class="row">
						<div class="col-md-2">
							<center>
									<div class="card-image" onclick="Materialize.toast('click \'ADD TO EVENTS LIST\'', 10000)">
										<a href="#modal13" class="modal-trigger">
										<img src="img/cultural/lifestyle/lifestyle.png" id="lifestyle" onclick="def()" class="img-responsive" style="height:150px;width:150px;"></a>
										<span class="card-title">LIFESTYLE</span>
									</div>
								</center>
						</div>
							<div class="col-md-2">
								<center>
										<div class="card-image hi14" onclick="Materialize.toast('click \'ADD TO EVENTS LIST\' for ordinary events and click \'PREMIUM REGISTRATION\' for premium events', 10000)">
											<a href="#modal14" class="modal-trigger">
											<img src="img/cultural/fashionz/fashionz.png" id="fashion" onclick="def()" class="img-responsive" style="height:150px;width:150px;"></a>
											<span class="card-title">FASHION</span>
										</div>
									</center>
							</div>

								<div class="col-md-2">
									<center>
											<div class="card-image hi15" onclick="Materialize.toast('click \'ADD TO EVENTS LIST\'', 10000)">
												<a href="#modal15" class="modal-trigger">
												<img src="img/cultural/online/online.png" id="online" onclick="def()" class="img-responsive" style="height:150px;width:150px;"></a>
												<span class="card-title">ONLINE </span>
											</div>
										</center>
								</div>


										<div class="col-md-2">
											<center>
													<div class="card-image hi17" onclick="Materialize.toast('click \'ADD TO EVENTS LIST\'', 10000)">
														<a href="#modal17" class="modal-trigger">
														<img src="img/bel/bell.png" class="img-responsive" id="red" onclick="def()" style="height:150px;width:150px;"></a>
														<span class="card-title">RED CARPET</span>
													</div>
												</center>
										</div>
											</div>
										</div>
</div>
<br><br>

<!--mobile-->
	<div class="container-fluid mob_view">
		<center><h1>CULTURALS</h1></center>
		<table class="table">
	<tbody>
		<tr onclick="Materialize.toast('click \'ADD TO EVENTS LIST\'', 10000)">
			<td><a href="#modal1" class="modal-trigger"><img src="img/cultural/dance/dance.png" id="dance" onclick="def()" style="width:100px;"alt=""></a></td>
			<td><a href="#modal1" class="modal-trigger"><h2 style="padding-top:10px;">DANCE</h2></a></td>
		</tr>

			<tr onclick="Materialize.toast('click \'ADD TO EVENTS LIST\'', 10000)">
				<td><a href="#modal2" class="modal-trigger"><img src="img/cultural/music/music.png" id="music" onclick="def()" style="width:100px;"alt=""></a></td>
				<td><a href="#modal2" class="modal-trigger"><h2 style="padding-top:10px;">MUSIC</h2></a></td>
			</tr>

				<tr onclick="Materialize.toast('click \'ADD TO EVENTS LIST\'', 10000)">
					<td><a href="#modal3" class="modal-trigger"><img src="img/cultural/literary/lit.png" id="literary" onclick="def()" style="width:100px;"alt=""></a></td>
					<td><a href="#modal3" class="modal-trigger"><h2 style="padding-top:10px;">LITERARY</h2></a></td>
				</tr>

					<tr onclick="Materialize.toast('click \'ADD TO EVENTS LIST\'', 10000)">
						<td><a href="#modal4" class="modal-trigger"><img src="img/cultural/oratory/oratory.png" id="oratory" onclick="def()" style="width:100px;"alt=""></a></td>
						<td><a href="#modal4" class="modal-trigger"><h2 style="padding-top:10px;">ORATORY</h2></a></td>
					</tr>

						<tr onclick="Materialize.toast('click \'ADD TO EVENTS LIST\'', 10000)">
							<td><a href="#modal5" class="modal-trigger"><img src="img/cultural/theatre/theatre.png" id="theatre" onclick="def()" style="width:100px;"alt=""></a></td>
							<td><a href="#modal5" class="modal-trigger"><h2 style="padding-top:10px;">THEATRE</h2></a></td>
						</tr>

							<tr onclick="Materialize.toast('click \'ADD TO EVENTS LIST\'', 10000)">
								<td><a href="#modal6" class="modal-trigger"><img src="img/cultural/photography/photography.png" id="photo" onclick="def()" style="width:100px;"alt=""></a></td>
								<td><a href="#modal6" class="modal-trigger"><h2 style="padding-top:10px;">PHOTOGRAPHY</h2></a></td>
							</tr>

								<tr onclick="Materialize.toast('click \'ADD TO EVENTS LIST\'', 10000)">
									<td><a href="#modal7" class="modal-trigger"><img src="img/cultural/culnary/culnary.png" id="culinary" onclick="def()" style="width:100px;"alt=""></a></td>
									<td><a href="#modal7" class="modal-trigger"><h2 style="padding-top:10px;">CULINARY</h2></a></td>
								</tr>

									<tr onclick="Materialize.toast('click \'ADD TO EVENTS LIST\'', 10000)">
										<td><a href="#modal8" class="modal-trigger"><img src="img/cultural/quiz/quiz.png" id="quiz" onclick="def()" style="width:100px;"alt=""></a></td>
										<td><a href="#modal8" class="modal-trigger"><h2 style="padding-top:10px;">QUIZ</h2></a></td>
									</tr>

										<tr onclick="Materialize.toast('click \'ADD TO EVENTS LIST\'', 10000)">
											<td><a href="#modal9" class="modal-trigger"><img src="img/cultural/fine arts/paint.png" id="fine" onclick="def()" style="width:100px;"alt=""></a></td>
											<td><a href="#modal9" class="modal-trigger"><h2 style="padding-top:10px;">FINE ARTS</h2></a></td>
										</tr>

											<tr onclick="Materialize.toast('click \'ADD TO EVENTS LIST\'', 10000)">
												<td><a href="#modal10" class="modal-trigger"><img src="img/cultural/snooper/snooper.png" id="snooper" onclick="def()" style="width:100px;"alt=""></a></td>
												<td><a href="#modal10" class="modal-trigger"><h2 style="padding-top:10px;">SNOOPER</h2></a></td>
											</tr>

												<tr onclick="Materialize.toast('click \'ADD TO EVENTS LIST\'', 10000)">
													<td><a href="#modal11" class="modal-trigger"><img src="img/gaming/gaming.png" id="gaming" onclick="def()" style="width:100px;"alt=""></a></td>
													<td><a href="#modal11" class="modal-trigger"><h2 style="padding-top:10px;">GAMING</h2></a></td>
												</tr>


													<tr onclick="Materialize.toast('click \'ADD TO EVENTS LIST\'', 10000)">
														<td><a href="#modal13" class="modal-trigger"><img src="img/cultural/lifestyle/lifestyle.png" id="lifestyle" onclick="def()" style="width:100px;"alt=""></a></td>
														<td><a href="#modal13" class="modal-trigger"><h2 style="padding-top:10px;">LIFESTYLE</h2></a></td>
													</tr>
													<tr onclick="Materialize.toast('click \'ADD TO EVENTS LIST\'', 10000)">
														<td><a href="#modal14" class="modal-trigger"><img src="img/cultural/fashionz/fashionz.png" id="fashion" onclick="def()" style="width:100px;"alt=""></a></td>
														<td><a href="#modal14" class="modal-trigger"><h2 style="padding-top:10px;">FASHION</h2></a></td>
													</tr>
													<tr onclick="Materialize.toast('click \'ADD TO EVENTS LIST\'', 10000)">
														<td><a href="#modal15" class="modal-trigger"><img src="img/cultural/online/online.png" id="online" onclick="def()" style="width:100px;"alt=""></a></td>
														<td><a href="#modal15" class="modal-trigger"><h2 style="padding-top:10px;">ONLINE</h2></a></td>
													</tr>

													<tr onclick="Materialize.toast('click \'ADD TO EVENTS LIST\'', 10000)">
														<td><a href="#modal17" class="modal-trigger"><img src="img/bel/bell.png" id="red" onclick="def()" style="width:100px;"alt=""></a></td>
														<td><a href="#modal17" class="modal-trigger"><h2 style="padding-top:10px;">RED CARPET</h2></a></td>
													</tr>
	</tbody>
</table>

	</div>
<!--mobile-->
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

  <!-- Modal Structure desktop -->
  <div id="modal1" class="modal pop_open">
  <div class="card" style="height: 100%">
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab"><a href="#test4" id="dance1" onclick="fun()">CHOREO NIGHT</a></li>
        <li class="tab"><a class="" href="#test5" onclick="fun()">DIPLOID</a></li>
        <li class="tab"><a href="#test6" onclick="fun()">DANCE A BEAT</a></li>
        <li class="tab"><a href="#test100" onclick="fun()">CLASICO BAILE</a></li>
      </ul>
    </div>

       <div class="card-content lighten-4">
      <div id="test4">
        <div class="row">
					<div class="col-md-1">
          </div>
          <div class="col-md-4">
            <img src="img/cultural/dance/choreonite.png" alt="Smiley face">
          </div>
					<div class="col-md-7" style="margin-top:-20px;"><p><span class="one" style="color: black;"><h2>CHOREO NIGHT (GROUP DANCE) :</h2><br>
						<h3>	 Unleash the skill that you have got rolled up in your sleeves and give the crowd the right moves.</h3>
	<h4> <b>CATEGORY:</b></h4>NON THEME :(all styles)<br>
	<b><b>REGISTRATION:</b></b> <br>

	<ul style="list-style-type:disc">
		<li>&#8226; College ID card is mandatory.</li>
		<li>&#8226; Team consisting 8 to 30 members is expected on stage including backstage helpers.</li>
		<li>&#8226; Participants are requested to report the college premises before 3pm.</li>
		<li>&#8226; Entry fee per head- Rs 150 to be deposited on the registration desk.</li>
		<li>&#8226; The music should be submitted to the coordinator at the registration desk.</li>
	</ul>

	<b>RULES</b>:<br>
	<ul>
		<li>&#8226; Marks are allotted based on team coordination and costumes.</li>
		<li>&#8226; Time limit is 6 to 7 minutes.</li>
		<li>&#8226; Green room will not be provided.</li>
		<li>&#8226; Usage of armaments will not be encouraged.</li>
		<li>&#8226; Vulgarity and obscenity is not permitted.</li>
		<li>&#8226; Judges and organiser decision will be final.</li>
	</ul>

	<b>CONTACT DETAILS:</b>
	Mr.Raj Pradeep: 9962211206
	Miss.Ashwini Govindraju: 9940076678
</span></p></div>
        </div>

				        <div class="row">
				         <center>
				        	<a  onclick="add()" href="https://www.townscript.com/e/takshashila-031214/booking"><button type="button" class="btn btn-success btn-lg one">Premium Registration</button></center></a>
				        </div>
      </div>
      <div id="test5"><div class="row">
				<div class="col-md-1">

				</div>
          <div class="col-md-4">
            <img src="img/cultural/dance/dual.png" alt="Smiley face">
          </div>

          <div class="col-md-7"><p><span class="one" style="color: black;"> <h2>DIPLOID (DUAL): Unleash the moment of a couple.</h2><br>
<b><b>REGISTRATION:</b></b><br>
	&#8226; College ID is mandatory.<br>
&#8226; Category: General registration.<br>
<b>RULES:</b><br>
	&#8226; Any form of dance is accepted. <br>
	&#8226; Time limit: 3 to 5 minutes. <br>
	&#8226; Usage of armaments will not be encouraged.<br>
	&#8226; Vulgarity and obscenity is not permitted.<br>
	&#8226; Judges and organiser decision will be final.<br>
<b>CONTACT :</b><br>
 Mr.J. Jaleel- 8939507291 <br>
 Miss.Sithara- 9123599002
</span></p></div>
</div>

        <div class="row">
         <center>
        	<a href="#"><button type="button" class="btn btn-success btn-lg one" onclick="add()">ADD TO EVENT LIST</button></center></a>
        </div>
</div>
      <div id="test6"><div class="row">
				<div class="col-md-1">

				</div>
          <div class="col-md-4">
            <img src="img/cultural/dance/western.png" alt="Smiley face">
          </div>

          <div class="col-md-7"><p><span class="one" style="color: black;"><h2>DANCE  A  BEAT (WESTERN SOLO):</h2>
          <h3>To the Prince and Princesses whose soles wear off, here's your floor <br>	</h3>
<b><b>REGISTRATION:</b></b><br>
	&#8226; College ID is mandatory. <br>
	&#8226; Category: General registration.<br>
<b>RULES</b>:<br>
&#8226; Time limit: 3 to 5 minutes. <br>
	&#8226; Marks are allotted on the basis of attitude, costume and performance.<br>
	&#8226; Music must be given 20 minutes prior to the commencement of performance. <br>
	&#8226; Any kind of armament and vulgarity is not permitted. <br>
	&#8226; Decision of Judges and Organizers will be final. <br>
<b>CONTACT</b>:<br>
Mr.J. Jaleel- 8939507291 <br>
Miss.Sithara- 9123599002
</span></h5></p></div>
</div>

        <div class="row">
         <center>
        	<a href="#"><button type="button" class="btn btn-success btn-lg one" onclick="add()">ADD TO EVENT LIST</button></center></a>
        </div>
</div>
<div id="test100">
<div class="row">
	<div class="col-md-1">

	</div>
		<div class="col-md-4">
			<img src="img/cultural/dance/classical.png" alt="Smiley face">
		</div>
		<div class="col-md-7"><p><span class="one" style="color: black;"> <h2>CLASICO  BAILE (CLASSICAL SOLO):</h2>
			<h3> Rephrasing the time machine. </h3>
<b>REGISTRATION</b>:<br>
	&#8226; College ID is mandatory.<br>
	&#8226; Category: General registration.<br>
<b>RULES</b>:<br>
	&#8226; Time limit 3 to 5 minutes.<br>
	&#8226; Marks are allotted based on expression, costumes and performance. <br>
	&#8226; Any Indian classical style is encouraged. <br>
	&#8226; Music must be given 20 minutes prior to the commencement of performance. <br>
	&#8226; Decision of Judges and Organizers will be final. <br>
<b>CONTACT</b>:<br>
Mr.J. Jaleel- 8939507291 <br>
Miss.Sithara- 9123599002
</span></p></div>
	</div>

	        <div class="row">
	         <center>
	        	<a href="#"><button type="button" class="btn btn-success btn-lg one" onclick="add()">ADD TO EVENT LIST</button></center></a>
	        </div>
</div>
    </div>
  </div>
  </div>

<!--End-modal1-->

<!--Modal2-->

  <!-- Modal Structure MUSIC EVENTS-->
  <div id="modal2" class="modal pop_open">
  <div class="card"  style="height: 100%">
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab"><a href="#test7" id="music1" onclick="fun()">SOUND CHECK</a></li>
        <li class="tab"><a class="" href="#test8" onclick="fun()">EQUALISER</a></li>
        <li class="tab"><a href="#test9" onclick="fun()">DRUMS BATTLE</a></li>
        <li class="tab"><a href="#test101" onclick="fun()">RAP BATTLE</a></li>
        <li class="tab"><a href="#test102" onclick="fun()">JUNK MUSIC</a></li>
      </ul>
    </div>
       <div class="card-content lighten-4">
      <div id="test7">
        <div class="row">
					<div class="col-md-1">

					</div>
          <div class="col-md-4">
            <img src="img/cultural/music/band.png" alt="Smiley face">
          </div>
          <div class="col-md-7"><p><span class="one" style="color: black;"><h2>SOUND CHECK (MUSICAL BAND):</h2>
          	<br><h3> A band event which is open for all college bands, universities and cross over bands [Musicians from different colleges]</h3>
<b>REGISTRATION</b>: <br>
	&#8226; College ID is mandatory. <br>
	&#8226; Category: General registration. <br>
<b>RULES</b>: <br>
	&#8226; 5-10 participants in a team. <br>
	&#8226; Performance can be in any language. <br>
	&#8226; Time limit is 15 minutes with an additional 5 minutes for setting up the instruments. <br>
	&#8226; A standard 5-piece drum kit, amplifier and microphone will be provided. <br>
	&#8226; Participants are requested to bring their own instruments. <br>
	&#8226; No restrictions for the number of instruments. <br>
	&#8226; Decision of Judges and Organizers will be final. <br>

<b>CONTACT</b>: <br>
 Mr.Prem- 9710066394 <br>
 Mr.MJ Bala- 7448508625
        </span></p></div>
        </div>
      </div>
      <div id="test8"><div class="row">
				<div class="col-md-1">

				</div>
          <div class="col-md-4">
            <img src="img/cultural/music/EQUALISER.png" alt="Smiley face">
          </div>

          <div class="col-md-7"><p><span class="one" style="color: black;"><h2>EQUALISER (SOLO SINGING):</h2>
          <h5> Equaliser promises to be an intensively competiting and rewarding program. Come and prove your mettle and grab prizes.</h5>
<b>REGISTRATION</b>: <br>
&#8226; College ID is mandatory.<br>
	&#8226; Category: General registration.<br>
<b>RULES</b>:<br>
&#8226; Usage of metronome will not be permitted.<br>
	&#8226; Performance can be of any language.<br>
	&#8226; Two rounds- prelims and finals.<br>
 <b>PRELIMS :</b> <br>
 &#8226; Each participant will be given 3 minutes with setup time. <br>
	&#8226; Karaoke is allowed.<br>
	&#8226; Participants using karaoke and other backup music should submit the track 20 minutes prior to the commencement of performance.<br>
	&#8226; Instrumental side music will not be encouraged.<br>
	&#8226; Decision of Judges and Organizers will be final.<br>
<b>FINALS :</b> <br>
	&#8226; Time limit is 5 minutes.<br>
	&#8226; Participants can perform blend of songs within the given time. <br>
	&#8226; Decision of Judges and Organizers will be final.<br>
<b>CONTACT</b>: <br>
 Mr.Ganesh- 9600127918 <br>
 Mr.Dinesh- 8667612013 <br>


          </span></p></div>
        </div></div>
      <div id="test9"><div class="row">
				<div class="col-md-1">

				</div>
          <div class="col-md-4">
            <img src="img/sound-check.png" alt="Smiley face">
          </div>

          <div class="col-md-7"><p><span class="one" style="color: black;"><h2>	DRUMS BATTLE (SOLO):</h2>
          <h2> Let the beats do the talking. </h2><br>
<b>REGISTRATION</b>: <br>
	&#8226; College ID is mandatory.<br>
	&#8226; Category: General registration.<br>
<b>RULES</b>:<br>
	&#8226; Time limit is 15 minutes.<br>
	&#8226; One round event.<br>
	&#8226; Decision of Judges and Organizers will be final.<br>
NOTE:<br>
Any damage to the properties provided by the organizing team, the respective participant should withstand the charges.<br>
<b>CONTACT</b>: <br>
 Mr.Ganesh- 9600127918 <br>
 Mr.Dinesh- 8667612013
 </span></p></div>
        </div></div>
        <div id="test101"><div class="row">
					<div class="col-md-1">

					</div>
          <div class="col-md-4">
            <img src="img/cultural/music/rapbattle.png" alt="Smiley face">
          </div>

          <div class="col-md-7"><p><span class="one" style="color: black;"><h2>RAP BATTLE( SOLO): </h2>
          	<br><h3>Let the words rhyme and the puns shine. </h3>

<b>REGISTRATION</b>: <br>
	&#8226; College ID is mandatory. <br>
	&#8226; Category: General registration. <br>
<b>RULES</b>: <br>
	&#8226; Metronome will be prohibited.<br>
	&#8226; Loop station will be prohibited. <br>
	&#8226; Maximum time limit is 5 minutes.<br>
	&#8226; Decision of Judges and Organizers will be final. <br>
<b>CONTACT</b>: <br>
 Mr.Ganesh- 9600127918 <br>
 Mr.Dinesh- 8667612013

          </span></p></div>
        </div></div><div id="test102"><div class="row">
					<div class="col-md-1">

					</div>
          <div class="col-md-4">
            <img src="img/cultural/music/junk.png" alt="Smiley face">
          </div>

          <div class="col-md-7"><p><span class="one" style="color: black;"><h2>JUNK MUSIC (A TEAM EVENT):</h2>
          	<br>  <h3> Players are the souls of the instruments.</h3>
<b>REGISTRATION</b>: <br>
	&#8226; College ID is mandatory. <br>
	&#8226; Category: General registration.  <br>
<b>RULES</b> :<br>
	&#8226; Junk items are provided on the stage. <br>
	&#8226; Additional materials are prohibited. <br>
	&#8226; Maximum time limit is 7 minutes. <br>
	&#8226; Decision of Judges and Organizers will be final. <br>
<b>CONTACT</b>: <br>
Mr.Prem- 9710066394 <br>
Mr.MJ Bala- 7448508625

          </span></p></div>
        </div></div>
        <div class="row">
         <center>
        	<button type="button" class="btn btn-success btn-lg one" onclick="add()">ADD TO EVENT LIST</button></center>
        </div>
    </div>
  </div>
  </div>

<!--End-modal2-->


<!--Modal3-->

  <!-- Modal Structure LITERARY -->
  <div id="modal3" class="modal pop_open">
  <div class="card" style="height: 100%">
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab"><a href="#test10" id="literary1" onclick="fun()">ELYSIAN</a></li>
        <li class="tab"><a class="" href="#test11" onclick="fun()">INK DROP</a></li>
        <li class="tab"><a href="#test12" onclick="fun()">SIRUKADHAI</a></li>
				<li class="tab"><a href="#test200" onclick="fun()">KARPANAI THULIGAL</a></li>
      </ul>
    </div>
       <div class="card-content lighten-4">
      <div id="test10">
        <div class="row">
					<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/elysian.png" alt="Smiley face">
          </div>

          <div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2>	ELYSIAN (CREATIVE WRITING ENGLISH):</h2>
						<br> <h3>Bring out the Shakespeare in you.</h3><br>
<b>REGISTRATION</b>:  <br>
	&#8226; College ID is mandatory. <br>
	&#8226; Category: General registration. <br>

<b>RULES</b>: <br>
	&#8226; Usage abusive language will not be encouraged. <br>
	&#8226; Word limit can range from 800 to 1000. <br>
	&#8226; Time limit is 90 minutes. <br>
	&#8226; Reference to other languages will not be encouraged. <br>
<b>CONTACT</b>:<br>
Mr.Venkata Raghavendra: 8939299959  <br>


</span></h5></p></div>
        </div>
      </div>
      <div id="test11"><div class="row">
				<div class="col-md-1">

				</div>
          <div class="col-md-4">
            <img src="img/cultural/literary/ink.png" alt="Smiley face">
          </div>

          <div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2>INK DROP (ENGLISH POETRY):</h2>
						<br><h3> Beautify the words with your enigma.</h3><br>

	<b>REGISTRATION:</b> <br>
	&#8226; College ID is mandatory. <br>
	&#8226; Category: General registration.<br>

<b>RULES</b>:<br>
	&#8226; Usage of abusive languages will not be encouraged. <br>
	&#8226; Time limit is 30 minutes. <br>
	&#8226; Reference to other languages is allowed. <br>
<b>CONTACT</b>:<br>
Ms.Sakthi:9790792180<br>


</span></h5></p></div>
        </div></div>
      <div id="test12"><div class="row">
				<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/sirukadhai.png" alt="Smiley face">
          </div>

          <div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2>	SIRUKADHAI  (CREATIVE  WRITING TAMIL):</h2>
						<br><h3>Tamil shone like a bag of diamonds. Feel like you've got that diamond in your pocket?  </h3>
	<b>REGISTRATION:</b> <br>
	&#8226; College ID is mandatory. <br>
	&#8226; Category: General registration.<br>

<b>RULES</b>: <br>
	&#8226; Time limit is 90 minutes. <br>
	&#8226; Reference to other languages will  not be encouraged. <br>
	&#8226; Word limit is 800-1000 words. <br>
<b>CONTACT</b>:<br>
Ms.Sakthi:9790792180<br> <br>

</span></h5></p></div>
        </div></div>
				<div id="test200"><div class="row">
					<div class="col-md-1"></div>

						<div class="col-md-4">
							<img src="img/kavidhai.png" alt="Smiley face">
						</div>

						<div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2>KARPANAI THULIGAL (KAVIDHAI) : </h2>
							<br><h3>
							Can there be anything much sweet than the rhyme of two meaningful Tamil words?</h3><br>
	<b>REGISTRATION:</b> <br>
	&#8226; College ID is mandatory. <br>
	&#8226; Category: General registration. <br>

<b>RULES</b>:<br>
	&#8226; Usage of abusive languages will not be encouraged.<br>
	&#8226; Time limit is 30 minutes. <br>
	&#8226; Reference to other languages is allowed. <br>
<b>CONTACT</b>:<br>
Ms.Sakthi:9790792180<br>


	</span></h5></p></div>
					</div></div>
        <div class="row">
         <center>
        	<button type="button" class="btn btn-success btn-lg one" onclick="add()">ADD TO EVENT LIST</button></center>
        </div>
    </div>
  </div>
  </div>

<!--End-modal3-->

<!--Modal4 oratory-->

  <!-- Modal Structure -->
  <div id="modal4" class="modal pop_open">
  <div class="card" style="height: 100%">
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab"><a href="#test13" id="oratory1" onclick="fun()">LINGUA FRANCA</a></li>
        <li class="tab"><a class="" href="#test14" onclick="fun()">SORPOR</a></li>
        <li class="tab"><a href="#test15" onclick="fun()">FAME IN 60 SECONDS</a></li>
				  <li class="tab"><a href="#test210" onclick="fun()">LOGOPHILE</a></li>
					  <li class="tab"><a href="#test220" onclick="fun()">BLOCK AND TACKLE</a></li>
      </ul>
    </div>
       <div class="card-content lighten-4">
      <div id="test13">
        <div class="row">
				<div class-"col-md-1"></div>
          <div class="col-md-4">
            <img src="img/cultural/oratory/lf.png" alt="Smiley face">
          </div>
<div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2>LINGUA FRANCA (DEBATE ENGLISH):</h2>
						<br><h3> You say the pen is mightier than sword, well, the words do too.</h3><br>
	<b>REGISTRATION:</b> <br>
	&#8226; College ID is mandatory. <br>
	&#8226; Category: General registration. <br>

<b>RULES</b>: <br>
	&#8226; Usage of abusive words will not be encouraged. <br>
	&#8226; Participants are not supposed to cross talk. <br>
	&#8226; Judgment of the jury is final. <br>
	&#8226; Personal violation against the opposite team member(s) will not be welcoming.<br>
<b>CONTACT</b>:<br>
Mr.Venkata Raghavendra: 8939299959
</span></h5></p></div>
</div>  </div>
      <div id="test14"><div class="row">
				<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/cultural/oratory/sorpor.png" alt="Smiley face">
          </div>
          <div class="col-md-7"><p><h5><span class="one" style="color: black;">	<h2>SORPOR(TAMIL ORATORICAL): </h2><br>
	<b>REGISTRATION:</b> <br>
	&#8226; College ID is mandatory.<br>
	&#8226; Category: General registration.<br><br>

	<b>RULES</b>: <br>
	&#8226; Time limit is 3 minutes. <br>
	&#8226; Physical references will not be encouraged. <br>
	&#8226; Trash talk is prohibited.  <br>
<b>CONTACT</b>:
Ms.Sakthi:9790792180
</span></h5></p></div>
        </div></div>
      <div id="test15"><div class="row">
				<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/cultural/oratory/fame-in-60-sec.png" alt="Smiley face">
          </div>

          <div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2>FAME IN 60 SECONDS (JAM):</h2>
						<br><h3>  Speak! Speak! Speak!!! Till the clock freezes. You just have a minute to win it.</h3><br>
	<b>REGISTRATION:</b> <br>
	&#8226; College ID is mandatory. <br>
	&#8226; Category: General registration. <br>
	<b>RULES</b>: <br>
	&#8226; Abusive words should not be used. <br>
	&#8226; Top seven will move to the finale. <br>
	&#8226; Repetition of words will not encouraged. <br>
	&#8226; Decision of the judges will be final.<br>
<b>CONTACT</b>:<br>
Mr.Venkata Raghavendra: 8939299959
</span></h5></p></div>
        </div></div>
				<div id="test210"><div class="row">
					<div class="col-md-1"></div>
	          <div class="col-md-4">
	            <img src="img/cultural/oratory/logophile.png" alt="Smiley face">
	          </div>

	          <div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2>	LOGOPHILE (SPELL BEE): </h2>
							<br><h3>  Hola grammar Nazis!! Buzz through the campus with your sound vocabulary and show off your proficiency.</h3><br>
			<b>REGISTRATION:</b> <br>
	&#8226; College ID is mandatory. <br>
	&#8226; Category: General registration. <br>

      <b>RULES</b>:<br>
			&#8226; 30 words will be dictated and they will have to spell it (written). <br>
	&#8226; Shortlisted candidates will be given a questionnaire and will be asked to find the word through clues which should be followed by giving the right spelling. <br>
<b>CONTACT</b>:<br>
Mr.Venkata Raghavendra: 8939299959.
	</span></h5></p></div>
	        </div></div>
					<div id="test220"><div class="row">
						<div class="col-md-1"></div>
		          <div class="col-md-4">
		            <img src="img/cultural/oratory/block-and-tackle.png" alt="Smiley face">
		          </div>

		          <div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2>	BLOCK AND TACKLE: </h2>
								<br><h3> Block the fears, tackle the problems, be a chameleon and score your points.</h3><br>
									<b>REGISTRATION:</b> <br>
							&#8226; College ID is mandatory. <br>
							&#8226; Category: General registration. <br>

						<b>RULES</b>: <br>
							&#8226; Individual event. <br>
							&#8226; Vulgarity in any sense will not be permitted. <br>
							&#8226; Mention of any controversial issues, political leaders and parties will not be appreciated. <br>
							&#8226; Participants will have to switch accordingly to block and tackle their topic with the command of the moderator. <br>
							&#8226; Decision of the judges will be final. <br>
						<b>CONTACT</b>:<br>
						Mr.Venkata Raghavendra: 8939299959
		</span></h5></p></div>
		        </div></div>
    <div class="row">
         <center>
        	<button type="button" class="btn btn-success btn-lg one" onclick="add()">ADD TO EVENT LIST</button></center>
        </div>
    </div>
  </div>
  </div>

<!--End-modal4-->
  <!--Modal5-->

  <!-- Modal Structure  THEATRE-->
  <div id="modal5" class="modal pop_open">
  <div class="card" style="height: 100%">
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab"><a href="#test16" id="theatre1" onclick="fun()">LIGHTS OUT</a></li>
        <li class="tab"><a href="#test17" onclick="fun()">COMIC SPUR</a></li>
        <li class="tab"><a href="#test18" onclick="fun()">TK TV</a></li>
				<li class="tab"><a href="#test230" onclick="fun()">FUN PUFF</a></li>
				<li class="tab"><a href="#test240" onclick="fun()">SHIP WRECK</a></li>
				<li class="tab"><a href="#test250" onclick="fun()">MANIAC</a></li>
				<li class="tab"><a href="#test260" onclick="fun()">MIME</a></li>

      </ul>
    </div>
       <div class="card-content lighten-4">
      <div id="test16">
        <div class="row">
					<div class="col-md-1"></div>

					</div>
          <div class="col-md-4">
            <img src="img/cultural/theatre/lights-out.png" alt="Smiley face">
          </div>

          <div class="col-md-7"><p><h5><span class="one" style="color: black;">	<h2>LIGHTS OUT (SHORT FILM): </h2>
						<br><h3>The Greatest Story requires the shortest time. Come plunge in your ideas with the quickest move.</h3><br>
	<b>REGISTRATION:</b> <br>
	&#8226; College ID is mandatory. <br>
	&#8226; Category: General registration. <br>

<b>RULES</b>: <br>
	&#8226; College students can only take part. <br>
	&#8226; College identity card is mandatory. <br>
	&#8226; Participants are asked to send their short films to the following email <b>"cittakshashila.lightsout@gmail.com"</b> on or before February 25. <br>
	&#8226; Shortlisted films will be screened. <br>
	&#8226; An entry fee of Rs.100 will be charged. <br>
	&#8226; Poster and teaser will be required for short films.<br>
<b>CONTACT</b>:<br>
Mr.Vishal S.R:8056486424
</span></h5></p></div>
        </div>
      </div>
      <div id="test17"><div class="row">
				<div class=" col-md-1"></div>
          <div class="col-md-4">
            <img src="img/cultural/theatre/standup.png" alt="Smiley face">
          </div>

          <div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2>COMIC SPUR (STAND UP): </h2>
						<br><h3>Laughter is not concealed for theatre screens. Show us the comic shade that you everyday reveal to your mirror.</h3><br>

	<b>REGISTRATION:</b> <br>
	&#8226; College ID is mandatory.<br>
	&#8226; Category: General registration. <br>

<b>RULES</b>:<br>
	&#8226; Individual participation. <br>
	&#8226; Two stage event  - prelims and finals. <br>
	&#8226; No personal innuendos or reference.   <br>
	&#8226; Decision of the judges will be final.<br>
<b>CONTACT</b>:<br>
Mr.Vishal S.R:8056486424
</span></h5></p></div>
        </div></div>
      <div id="test18"><div class="row">
				<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/cultural/theatre/channel-surfing.png" alt="Smiley face">
          </div>

          <div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2>	TK TV (CHANNEL SURFING): </h2>
						<br><h3> Know the television? Let the world know the raise of TV-addicts</h3><br>
<b>REGISTRATION:</b> <br>
	College ID is mandatory.<br>
	Category: General registration. <br>

	<b>RULES</b>: <br>
	&#8226; A team of 4 to 7 participants. <br>
	&#8226; Participants will have to switch to different channels with the command of the judge. <br>
	&#8226; Vulgarity in any form will lead to elimination. <br>
	&#8226; Performance should not hurt religious, caste based, political interest and beliefs of others. <br>
	&#8226; Channels include languages such as Hindi, Tamil, Telugu, Malayalam and English. <br>
	&#8226; Decision of the judges will be final.<br>
<b>CONTACT</b>:<br>
Mr.Vishal S.R:8056486424
</span></h5></p></div>
        </div></div>

	<div id="test230"><div class="row">
					<div class="col-md-1"></div>
	          <div class="col-md-4">
	            <img src="img/cultural/theatre/adzap.png" alt="Smiley face">
	          </div>
						<div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2>	FUN PUFF (ADZAP):  </h2>
							<br><h3> There's always something with spontaneity and relativity. You are really awesome when you can spontaneously relate to anything. Well, show us as we're intrigued.
							</h3><br><b>REGISTRATION:</b> <br>
	&#8226; College ID is mandatory.<br>
	&#8226; Category: General registration. <br>

	<b>RULES</b>: <br>
	&#8226; On spot registration.<br>
	&#8226; 4 to 6 members per team is allowed. <br>
	&#8226; Prelims will be an analysis and written logical quiz on marketing will be conducted. <br>
	&#8226; Use of mobiles and other gadgets is not permissive. <br>
	&#8226; Decision of the judges will be final. <br>
<b>CONTACT</b>:<br>
Mr.Vishal S.R:8056486424
</span></h5></p></div>
	        </div></div>
<div id="test240"><div class="row">
										<div class="col-md-1"></div>
						          <div class="col-md-4">
						            <img src="img/cultural/theatre/ship-wreck.png" alt="Smiley face">
						          </div>
											<div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2>SHIPWRECK: </h2>
												<br><h3> Existential crisis. Gut feeling. Heart thumping. When you got to decide from 100 opinions in less than a second. </h3><br>
												<b>REGISTRATION:</b> <br>
	&#8226; College ID is mandatory. <br>
	&#8226; Category: General registration. <br>

	<b>RULES</b>: <br>
	&#8226; No abusive language. <br>
	&#8226; Use of English language is mandatory. <br>
	&#8226; Time limit is 3 minutes per person.  <br>
	&#8226; Decision of the judges will be final. <br>
<b>CONTACT</b>:<br>
Mr.Vishal S.R:8056486424
</span></h5></p></div>
	        </div></div>
	<div id="test250"><div class="row">
															<div class="col-md-1"></div>
																<div class="col-md-4">
																	<img src="img/cultural/theatre/monoacting.png" alt="Smiley face">
																</div>
																<div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2>	MANIAC (MONO ACTING): </h2>
																	<br><h3> When one lion could be the king of an entire jungle, so can you roar the story with only you in it. .</h3><br>
																		<b>REGISTRATION:</b> <br>
	&#8226; College ID is mandatory. <br>
	&#8226; Category: General registration. <br>

<b>RULES</b>: <br>
	&#8226; No offensive symbols are allowed.  <br>
	&#8226; Time limit is 10 minutes per person.  <br>
	&#8226; Actions must be ethical friendly. <br>
	&#8226; Decision of the judges will be final. <br>
<b>CONTACT</b>:<br>
Mr.Vishal S.R:8056486424
</span></h5></p></div>
	        </div></div>

<div id="test260"><div class="row">
			<div class="col-md-1"></div>
				<div class="col-md-4">
						<img src="img/cultural/theatre/mime.png" alt="Smiley face">
								</div>
<div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2>	MIME: </h2>
						<br><h3> Do we really need those many dialogues to express something? Well, we've got expressions to pour out emotions. Take down everyone with only your fine acting.
						</h3><br>
	<b>REGISTRATION:</b> <br>
	&#8226; College ID is mandatory. <br>
	&#8226; Category: General registration. <br>

	<b>RULES</b>: <br>
	&#8226; A team of 7 members can participate. <br>
	&#8226; Two rounds- prelims and finals. <br>
	&#8226; Time limit is 10 minutes per team.  <br>
	&#8226; Shortlisted candidates will perform on main stage. <br>
	&#8226; Vulgarity will lead to elimination. <br>
	&#8226; Decision of the judges will be final. <br>
<b>CONTACT</b>:<br>
Mr.Vishal S.R:8056486424
</span></h5></p></div>
	        </div></div>
        <div class="row">
         <center>
        	<button type="button" class="btn btn-success btn-lg one" onclick="add()">ADD TO EVENT LIST</button></center>
        </div>
    </div>
  </div>
  </div>

<!--End-modal5-->
<!--Modal6-->

  <!-- Modal Structure PHOTOGRAPHY -->
  <div id="modal6" class="modal pop_open">
  <div class="card" style="height: 100%">
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab"><a href="#test19" id="photo1" onclick="fun()">CEASE REALITY</a></li>
        <li class="tab"><a class="" href="#test20" onclick="fun()">CLIQUES</a></li>
        <li class="tab"><a href="#test21" onclick="fun()">CLUSTER CLIP</a></li>
				<li class="tab"><a href="#test280" onclick="fun()">SHADOWGRAPHY</a></li>
      </ul>
    </div>
       <div class="card-content lighten-4">
      <div id="test19">
        <div class="row">
					<div class="col-md-1">

					</div>
          <div class="col-md-4">
            <img src="img/cultural/photography/ceasereality.png" alt="Smiley face">
          </div>

          <div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2>CEASE REALITY (ON SPOT PHOTOGRAPHY):</h2>
						<br><h3> You never know what's around you until you capture the moment. How quick can your capturing skills be?</h3><br>
	<b>REGISTRATION:</b><br>
	&#8226; College ID is mandatory.<br>
	&#8226; Category: General registration.<br>

	<b>RULES</b>:<br>
	&#8226; Participants are requested to bring their own DSLR camera.<br>
	&#8226; Participants are required to capture the photo based on the theme given on spot.<br>
	&#8226; College identity card is must.<br>
	&#8226; Prizes will be declared on the last day.<br>
<b>CONTACT</b>:<br>
Mr.Vishal S.R:8056486424
</span></h5></p></div>
        </div>
      </div>
      <div id="test20"><div class="row">
				<div class="col-md-1">

				</div>
				<div class="col-md-4">
					<img src="img/cultural/photography/cliques.png" alt="Smiley face">
				</div>

				<div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2>CLIQUES (MOBILE PHOTOGRAPHY): </h2>
						<br><h3>Why take the old school lens when you've got something even more powerful within your palm.</h3><br>

	<b>REGISTRATION:</b><br>
	&#8226; College ID is mandatory.<br>
	&#8226; Category: General registration. <br>


<b>RULES</b>: <br>
	&#8226; Theme will be given on the spot. <br>
	&#8226; Editing, filters, using other camera apps will be prohibited. <br>
	&#8226; Decision of the judges will be final. <br>
<b>CONTACT</b>:<br>
Mr.Vishal S.R:8056486424
</span></h5></p></div>
        </div></div>
      <div id="test21"><div class="row">
				<div class="col-md-1">

				</div>
				<div class="col-md-4">
					<img src="img/cultural/photography/groupfie.png" alt="Smiley face">
				</div>

				<div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2>CLUSTER CLIP (GROUP SELFIE CONTEST):</h2>
						<br><h3> Got a gala gang? Let us know what stories your groupie tells us. Oh! And the coolest gang is rewarded. Isn't this really cool?</h3><br>

	<b>REGISTRATION:</b> <br>
	&#8226; College ID is mandatory. <br>
	&#8226; Category: General registration. <br>

          <b>RULES</b>:<br>
	&#8226; Get your most creative groupie. <br>
	&#8226; Submit it in the instructed area. <br>
	&#8226; One winner for each day will be selected.<br>
	&#8226; Results will be announced at the end of the day. <br>
	&#8226; Prizes will be distributed on spot. <br>
<b>CONTACT</b>:<br>
Mr.Vishal S.R:8056486424
</span></h5></p></div>
        </div></div>
				<div id="test280"><div class="row">
					<div class="col-md-1">

					</div>
					<div class="col-md-4">
						<img src="img/cultural/photography/shadowgraphy.png" alt="Smiley face">
					</div>

					<div class="col-md-7">
	          <p><h5><span class="one" style="color: black;"><h2>SHADOWGRAPHY (CAPTURING SHADOWS BY DSLR):</h2>
							<br><h3> Capture the reflection of mere self. Show us that it takes only light to uphold beauty.</h3><br>

	<b>REGISTRATION:</b><br>
	&#8226; College ID is mandatory.<br>
	&#8226; Category: General registration. <br>

	  <b>RULES</b>: <br>
	&#8226; Participants are requested to bring their own DSLR camera. <br>
	&#8226; Participants are required to capture the photo based on the theme - Shadow. <br>
	&#8226; College identity card is must. <br>
	&#8226; Prizes will be declared on the last day.<br>
<b>CONTACT</b>:<br>
Mr.Vishal S.R:8056486424
</span></h5></p></div>
</div></div>
</div>
        <div class="row">
         <center>
        	<button type="button" class="btn btn-success btn-lg one" onclick="add()">ADD TO EVENT LIST</button></center>
        </div>
    </div>
  </div>


<!--End-modal6-->
<!--Modal7-->

  <!-- Modal Structure  CULINARY-->
  <div id="modal7" class="modal pop_open">
  <div class="card" style="height: 100%">
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab"><a href="#test22" id="culinary1" onclick="fun()">OVER THE DAYS</a></li>
        <li class="tab"><a class="" href="#test23" onclick="fun()">VEGGIE-CRAVING</a></li>
        <li class="tab"><a href="#test24" onclick="fun()">MASTERCHEF TK18</a></li>
      </ul>
    </div>
       <div class="card-content lighten-4">
      <div id="test22">
        <div class="row">
					<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/cultural/culnary/overs.png" alt="Smiley face">
          </div>

          <div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2>OVER THE DAYS (COOKING WITHOUT FIRE):</h2>
						<br><h3> Fire is essential, but is it for every other dish we consume? Let us know the art of cooking without fire.</h3><br>
	<b>REGISTRATION:</b><br>
	&#8226; College ID is mandatory.<br>
	&#8226; Category: General registration. <br>

	<b>RULES</b>: <br>
	&#8226; Strictly no use of heat. <br>
	&#8226; Ingredients should be bought by the participant. <br>
	&#8226; Time limit is 15 minutes. <br>
	&#8226; Safety is the responsibility of the participant. <br>
<b>CONTACT</b>:<br>
Ms.Jacqulin:8939652343
</span></h5></p></div>
        </div>
      </div>
      <div id="test23"><div class="row">
				<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/cultural/culnary/veggie-carving.png" alt="Smiley face">
          </div>

          <div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2>VEGGIE CARVING:</h2>
						<br><h3> We're desperately in search for a Michael Angelo, but this time we want the one who carves veggies not stones.</h3><br>
	<b>REGISTRATION:</b><br>
	&#8226; College ID is mandatory. <br>
	&#8226; Category: General registration. <br>

	<b>RULES</b>: <br>
	&#8226; 3 options on the vegetable will be provided on spot. <br>
	&#8226; Time limit is 45 minutes. <br>
	&#8226; Knives and other tools must be bought by the participant. <br>
	&#8226; Safety is the responsibility of the participant. <br>
<b>CONTACT</b>:<br>
Ms.Jacqulin:8939652343
</span></h5></p></div>
        </div></div>
      <div id="test24"><div class="row">
				<div class="col-md-1">

				</div>
          <div class="col-md-4">
            <img src="img/cultural/culnary/master.png" alt="Smiley face">
          </div>

          <div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2>MASTERCHEF TK18:</h2>
						<br><h3> If cooking was Star Wars, then we are definitely looking out for a Yoda. May the force of taste-buds be with you.</h3><br>
	<b>REGISTRATION:</b><br>
	&#8226; College ID is mandatory. <br>
	&#8226; Category: General registration. <br>

<b>RULES</b>: <br>
	&#8226; Participants will have 10 minutes of cool prep and two hours of cooking time to plate up a starter, main course, and a dessert. <br>
	&#8226; Basic ingredients should be brought by the participants. <br>
	&#8226; Time limit is 2 hours. <br>
	&#8226; Safety is the responsibility of the participant. <br>
<b>CONTACT</b>:<br>
Ms.Jacqulin:8939652343
</span></h5></p></div>
        </div></div>
            <div class="row">
         <center>
        	<button type="button" class="btn btn-success btn-lg one" onclick="add()">ADD TO EVENT LIST</button></center>
        </div>

    </div>
  </div>
  </div>

<!--End-modal7-->
<!--Modal8-->

  <!-- Modal Structure quiz -->
  <div id="modal8" class="modal pop_open">
  <div class="card" style="height: 100%">
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab"><a href="#test25" id="quiz1" onclick="fun()">MIX  MATCH  QUIZ</a></li>
        <li class="tab"><a class="" href="#test26"  onclick="fun()"onclick="fun()">BUZZ</a></li>
        <li class="tab"><a href="#test27"  onclick="fun()"onclick="fun()">LEXICON</a></li>
      </ul>
    </div>
       <div class="card-content lighten-4">
      <div id="test25">
        <div class="row">
					<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/cultural/quiz/mixy.png" alt="Smiley face">
          </div>
          <div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2>MIX  MATCH  QUIZ (COLLECTIVE QUIZ):</h2>
						<br><h3>  How well is your Derek O'brien</h3><br>
	<b>REGISTRATION:</b> <br>
	&#8226; College ID is mandatory.<br>
	&#8226; Category: General registration. <br>

	<b>RULES</b>: <br>
	&#8226; 2 to 3 members per team.<br>
	&#8226; Top 8 teams will go to the final. <br>
	&#8226; Open theme. <br>
	&#8226; Regional movie questions will be based on their native tongue. <br>
<b>CONTACT</b>:<br>
Ms.Jacqulin:8939652343
</span></h5></p></div>
        </div>
      </div>
			<div id="test26">
        <div class="row">
					<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/cultural/quiz/buzz.png" alt="Smiley face">
          </div>
          <div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2>BUZZ (GENERAL QUIZ):</h2>
						<br><h3> Good with the morning papers, well you should also be good with this then.</h3><br>

	<b>REGISTRATION:</b> <br>
	&#8226; College ID is mandatory. <br>
	&#8226; Category: General registration. <br>

	<b>RULES</b>: <br>
	&#8226; 3 members per team. <br>
	&#8226; Prelims will be a written round. <br>
	&#8226; Top 10   teams will be qualified for the final. <br>
<b>CONTACT</b>:<br>
Ms.Jacqulin:8939652343
</span></h5></p></div>
        </div>
      </div>
			<div id="test27">
        <div class="row">
					<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/cultural/quiz/lexicon.png" alt="Smiley face">
          </div>
          <div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2>LEXICON (PUZZLE  EVENTS): </h2>
						<br><h3>Let's have a mix of your intelligence.</h3><br>

	<b>REGISTRATION:</b><br>
	&#8226; College ID is mandatory.<br>
	&#8226; Category: General registration. <br>


	<b>RULES</b>:<br>

	&#8226; A team of 2 to 3 members are allowed. <br>
	&#8226; Round 1 will be a written round. <br>
	&#8226; Crosswords, riddles and puzzles will be conducted. <br>
	&#8226; Time limit is 60 minutes. <br>
	&#8226; Top 8 will go to the final.<br>
	&#8226; Themes will be announced on spot.<br>
<b>CONTACT</b>:<br>
Ms.Jacqulin:8939652343

</span></h5></p></div>
        </div>
      </div>

            <div class="row">
         <center>
        	<button type="button" class="btn btn-success btn-lg one" onclick="add()">ADD TO EVENT LIST</button></center>
        </div>
    </div>
  </div>
  </div>

<!--End-modal8-->
<!--Modal9-->

  <!-- Modal Structure FINE ARTS  -->
  <div id="modal9" class="modal pop_open">
  <div class="card" style="height: 100%">
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab"><a href="#test28" id="fine1" onclick="fun()">LOGO ZONE</a></li>
        <li class="tab"><a class="" href="#test29" onclick="fun()">FACE OUT</a></li>
        <li class="tab"><a href="#test30" onclick="fun()">CRAZY CANVAS</a></li>
				<li class="tab"><a href="#test290" onclick="fun()">PLAY-DOH</a></li>
				<li class="tab"><a href="#test300" onclick="fun()">FAUX IT OFF</a></li>
				      </ul>
    </div>
       <div class="card-content lighten-4">
      <div id="test28">
        <div class="row">
					<div class="col-md-1">

					</div>
          <div class="col-md-4">
            <img src="img/cultural/fine arts/logo-zone.png" alt="Smiley face">
          </div>

          <div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2>LOGO  ZONE (LOGO CREATION):</h2>
						<br><h3> Every logo has its story and every story has it's meaning. Raise your logo and the intriguing story behind.</h3><br>
	<b>REGISTRATION:</b> <br>
	&#8226; College ID is mandatory. <br>
	&#8226; Category: General registration. <br>

	<b>RULES</b>: <br>
	&#8226; 2 members per team. <br>
	&#8226; Theme will be announced on spot. <br>
	&#8226; On spot registration with Rs.50 per team should be done. <br>
	&#8226; Time limit is 90 minutes. <br>
<b>CONTACT</b>:<br>
Ms.Jacqulin:8939652343
</span></h5></p></div>
        </div>
      </div>
      <div id="test29"><div class="row">
				<div class="col-md-1">

				</div>
          <div class="col-md-4">
            <img src="img/cultural/fine arts/face-painting.png" alt="Smiley face">
          </div>

          <div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2>FACE  OUT (FACE  PAINTING):</h2>
						<br><h3> Face is the index of mind. Or is it possible to hide it under colours? Show us your true colours while you make someone beautiful in their index.</h3><br>
	<b>REGISTRATION:</b><br>
	&#8226; College ID is mandatory.<br>
	&#8226; Category: General registration. <br>

	<b>RULES</b>:<br>
	&#8226; On spot theme will be given. <br>
	&#8226; Equipment's will be provided.<br>
	&#8226; Decision of the judges will be final.<br>
<b>CONTACT</b>:<br>
Ms.Jacqulin:8939652343
</span></h5></p></div>
        </div></div>
      <div id="test30"><div class="row">
				<div class="col-md-1">

				</div>
          <div class="col-md-4">
            <img src="img/cultural/fine arts/crazy-canvas.png" alt="Smiley face">
          </div>

          <div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2>CRAZY  CANVAS (GRAFFITI):</h2>
						<br><h3>We can never restrict the fun of chaos in painting and graffiti is one type of art wherein you can hide a billion truth.
							 So now we'll be watching for the truth in your graffiti.</h3><br>
	<b>REGISTRATION:</b> <br>
	&#8226; College ID is mandatory. <br>
	&#8226; Category: General registration. <br>

	<b>RULES</b>:<br>
	&#8226; Event includes sketching, pencil art and painting.<br>
	&#8226; Participants will be given one and half hour time limit from their starting time. <br>
	&#8226; Participants should bring the necessary materials.<br>
	&#8226; A3 charts will be provided.<br>
	&#8226; Winners will be announced at the end of the day.<br>
	&#8226; Decision of the judges will be final.<br>
<b>CONTACT</b>:<br>
Ms.Jacqulin:8939652343
</span></h5></p></div>
        </div></div>
				<div id="test290"><div class="row">
					<div class="col-md-1">

					</div>
	          <div class="col-md-4">
	            <img src="img/cultural/fine arts/clay.png" alt="Smiley face">
	          </div>

	          <div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2>PLAY-DOH (CLAY MODELLING):</h2>
							<br><h3> The clay only for the crawlers? No, not at all. Clay it with the emotions you have and we'll enjoy it with the astonishment of you creativity.</h3><br>

	<b>REGISTRATION:</b> <br>
	&#8226; College ID is mandatory. <br>
	&#8226; Category: General registration. <br>
	<b>RULES</b>:<br>
	&#8226; Participants should bring the clay of their own. <br>
	&#8226; Judge's and organiser's decision wil    l be final. <br>
<b>CONTACT</b>:<br>
Ms.Jacqulin:8939652343
</span></h5></p></div>
	        </div></div>
					<div id="test300"><div class="row">
						<div class="col-md-1">

						</div>
		          <div class="col-md-4">
		            <img src="img/cultural/fine arts/fauxitoff.png" alt="Smiley face">
		          </div>

		          <div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2>FAUX  IT OFF (PAINT IT WITHOUT BRUSH):</h2>
								<br><h3> Why depend on fabrics for art.</h3>
	<b>REGISTRATION:</b> <br>
	&#8226; College ID is mandatory.<br>
	&#8226; Category: General registration. <br>

	<b>RULES</b>:<br>
	&#8226; On spot theme. <br>
<b>CONTACT</b>:<br>
Ms.Jacqulin:8939652343
</span></h5></p></div>
	</div></div>
	<div id="test310"><div class="row">
		<div class="col-md-1">

		</div>
			<div class="col-md-4">

			</div>

			<div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2></h2></span></h5></p></div>
</div></div>


            <div class="row">
         <center>
        	<button type="button" class="btn btn-success btn-lg one" onclick="add()">ADD TO EVENT LIST</button></center>
        </div>
    </div>
  </div>
  </div>

<!--End-modal9-->
<!--Modal10 snooper -->

  <!-- Modal Structure -->
  <div id="modal10" class="modal pop_open">
  <div class="card" style="height: 100%">
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab"><a href="#test31" id="snooper1" onclick="fun()">POTPOURRI</a></li>
        <li class="tab"><a class="" href="#test32" onclick="fun()">SCAVENGER HUNT</a></li>
        <li class="tab"><a href="#test33" onclick="fun()">SHERLOCK</a></li>
      </ul>
    </div>
       <div class="card-content lighten-4">
      <div id="test31">
        <div class="row">
					<div class="col-md-1">

					</div>
          <div class="col-md-4">
            <img src="img/cultural/snooper/connections.png" alt="Smiley face">
          </div>
                    <div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2>POTPOURRI (GROUP TASK) </h2>
<br><h3> Welcome to Takshashila's Takeshi's castle.</h3><br>
	<b>REGISTRATION:</b><br>
	&#8226; College ID is mandatory.<br>
	&#8226; Category: General registration.<br>

	<b>RULES</b>:<br>
	&#8226; Mixed theme will be provided on spot. <br>
	&#8226; Decision of the judges will be final. <br><br>
	&#8226; Other Rules will be announced on spot. <br>
<b>CONTACT</b>:<br>
Ms.Jacqulin:8939652343
</span></h5></p></div>
        </div>
      </div>
      <div id="test32"><div class="row">
				<div class="col-md-1">

				</div>
          <div class="col-md-4">
            <img src="img/cultural/snooper/s.png" alt="Smiley face">
          </div>

          <div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2>SCAVENGER  HUNT (PHOTO  HUNT): </h2>
						<br><h3>Oh! I see you have eagle eyes.</h3><br>
	<b>REGISTRATION:</b><br>
	&#8226; College ID is mandatory.<br>
	&#8226; Category: General registration.<br>

	<b>RULES</b>:<br>
	&#8226; On spot registration.<br>
	&#8226; 2 to 5 members per team.<br>
	&#8226; College identity card is mandatory.<br>
	&#8226; Participants of various colleges can group in to a single team.<br>
	&#8226; Organizers decision will be final.<br><br>
<b>CONTACT</b>:<br>
Ms.Jacqulin:8939652343
</span></h5></p></div>
        </div></div>
      <div id="test33"><div class="row">
				<div class="col-md-1">

				</div>
          <div class="col-md-4">
            <img src="img/cultural/snooper/sherlock.png" alt="Smiley face">

					</div>
          <div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2>SHERLOCK (TREASURE HUNT):</h2>
						<br><h3> Well, it is a game of shadows.</h3><br>
<b>REGISTRATION:</b><br>
	&#8226; Category: General registration. <br><br>
	<b>Rules</b>:<br>
	&#8226; College ID is mandatory.<br>
<b>CONTACT</b>:<br>
Ms.Jacqulin:8939652343
</span></h5></p></div>
        </div></div>
            <div class="row">
         <center>
        	<button type="button" class="btn btn-success btn-lg one" onclick="add()">ADD TO EVENT LIST</button></center>
        </div>
    </div>
  </div>
  </div>

<!--End-modal10-->
<!--Modal11  gaming-->








<!--Modal11  gaming-->
			<!-- Modal Structure -->
			<div id="modal11" class="modal pop_open">
			<div class="card" style="height: 100%">
				<div class="card-tabs">
					<ul class="tabs tabs-fixed-width">
						<li class="tab"><a href="#test400" id="gaming1" onclick="fun()">COUNTER STRIKE</a></li>
						<li class="tab"><a class="" href="#test420" onclick="fun()">BLUR</a></li>
						<!-- <li class="tab"><a class="" href="#test440" onclick="fun()">COD</a></li> -->
						<li class="tab"><a class="" href="#test460" onclick="fun()">DOTA 2</a></li>
						<li class="tab"><a class="" href="#test480" onclick="fun()">FIFA</a></li>
					</ul>
				</div>
					 <div class="card-content lighten-4">

			<div id="test400"><div class="row">
				<div class="col-md-1">

				</div>
					<div class="col-md-4">
						<img src="img/gaming/counter-strike.png" alt="Smiley face">
					</div>

					<div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2>COUNTER STRIKE:</h2>
						<br><h3> Which side are you on? Well, it doesn't really matter since winning the game does.</h3><br>

	<b>REGISTRATION:</b><br>
	&#8226; College ID is mandatory. <br>
	&#8226; This event comes under premium registration. <br>
	<b>Rules</b>: <br>
	&#8226; By entering the tournament all the players agree to be bound by and comply with the rules and regulations put forthby the committee members. <br>
	&#8226; Players also agree that they fully understand and comply with the fact that any committee decisions surpreses the rules and regulations. <br>
	&#8226; Allocation of teams will be vased on participants.<br>
	&#8226; Players will play death mathch containing 5 rounds of 3 minutes each. <br>
<b>CONTACT</b>:<br>
Mr.Sridhar Kannan:9884889555

</span></h5></p></div>
				</div>

				        <div class="row">
				         <center>
				        	<a href="https://www.townscript.com/e/takshashila-031214/booking"><button type="button" class="btn btn-success btn-lg one" onclick="add()">Premium Registration</button></center></a>
				        </div>
			</div>
				<div id="test420"><div class="row">
					<div class="col-md-1"></div>
						<div class="col-md-4">
							<img src="img/gaming/blur.png" alt="Smiley face">
						</div><div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2>BLUR:</h2>
							<br><h3> Ever been an on road terrible driver and an onscreen road-ruler?</h3><br>
	<b>REGISTRATION:</b><br>
	&#8226; College ID is mandatory. <br>
	&#8226; This event comes under premium registration. <br>
	<b>RULES</b>:<br>
	&#8226; No arguments in the <b>Rules</b> given below and decision taken by committee members.<br>
	&#8226; Quarrel in game or after the game will not be encouraged.<br>
	&#8226; Selection of rides at your choice.<br>
	&#8226; Final round will be played for 3 laps.<br>
	&#8226; Selection of circuit will be done by the committee members.<br>
<b>CONTACT</b>:<br>
Mr.Sridhar Kannan:9884889555
	</span></h5></p></div>
					</div>

					        <div class="row">
					         <center>
					        	<a href="https://www.townscript.com/e/takshashila-031214/booking"><button type="button" class="btn btn-success btn-lg one" onclick="add()">Premium Registration</button></center></a>
					        </div>
				</div>
					<!-- <div id="test440"><div class="row">
						<div class="col-md-1"></div>
							<div class="col-md-4">
								<img src="img/gaming/cod.png" alt="Smiley face">
							</div><div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2>COD:</h2>
															<br><h3> Ever been an on road terrible driver and an onscreen road-ruler?</h3><br>

															<b>CONTACT</b>:<br>
															Mr.Sridhar Kannan:9884889555
		</span></h5></p></div>
						</div>

						        <div class="row">
						         <center>
						        	<a href="https://www.townscript.com/e/takshashila-031214/booking"><button type="button" class="btn btn-success btn-lg one" onclick="add()">Premium Registration</button></center></a>
						        </div>
					</div> -->
						<div id="test460"><div class="row">
							<div class="col-md-1"></div>
								<div class="col-md-4">
									<img src="img/gaming/dota.png" alt="Smiley face">
								</div><div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2>	DOTA 2: </h2>
									<br><h3> Strategies are vital for an impulsive victory.</h3><br>
										<b>REGISTRATION:</b> <br>
								&#8226; College ID is mandatory. <br>
								&#8226; This event comes under premium registration. <br>

								<b>RULES</b>: <br>
								&#8226; Captain's Draft - All pick mode (Max : 60 mins  positively). <br>
								&#8226; Team can select their side with a coin toss. <br>
								&#8226; Gamers can bring their own Keyboard/ Mouse/Headphones for their convenience. <br>
								&#8226; Players will be given 5 minutes to adjust settings and controls. <br>
								&#8226; Knockout basis for further rounds. <br>
								&#8226; If any lag or graphic issues, prior information to volunteer is advisable. <br>
								&#8226; No arguments or trash-talking during the game or after the game. <br>
							<b>CONTACT</b>:<br>
							Mr.Sridhar Kannan:9884889555

			</span></h5></p></div>
							</div>

							        <div class="row">
							         <center>
							        	<a href="https://www.townscript.com/e/takshashila-031214/booking"><button type="button" class="btn btn-success btn-lg one" onclick="add()">Premium Registration</button></center></a>
							        </div>
						</div>
							<div id="test480"><div class="row">
								<div class="col-md-1"></div>
									<div class="col-md-4">
										<img src="img/gaming/fifa.png" alt="Smiley face">
									</div><div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2>FIFA:</h2>
										<br><h3> all players are good at ground, some are good with keys.</h3><br>
											<b>REGISTRATION:</b> <br>
								&#8226; College ID is mandatory. <br>
								&#8226; Category: General registration. <br>
								<b>RULES</b>: <br>
								&#8226; No arguments in the <b>Rules</b> given below and decision taken by committee members. <br>
								&#8226; Quarrel in the game or after the game will not be encouraged. <br>
								&#8226; Each preliminary round is played for 4 minutes. <br>
								&#8226; Selection of team is of participant's choice. <br>
							<b>CONTACT</b>:<br>
							Mr.Sridhar Kannan:9884889555


				</span></h5></p></div>
								</div>

								        <div class="row">
								         <center>
								        	<a href="https://www.townscript.com/e/takshashila-031214/booking"><button type="button" class="btn btn-success btn-lg one" onclick="add()">Premium Registration</button></center></a>
								        </div>
							</div>

		</div>
	</div>
</div>
</div>
<!-- Modal Structure  LIFESTYLE-->

  <div id="modal13" class="modal pop_open">
  <div class="card" style="height: 100%">
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab"><a href="#test600" id="lifestyle1" onclick="fun()">PRIMP UP</a></li>
        <li class="tab"><a class="" href="#test601" onclick="fun()">MINK DOODLE</a></li>

      </ul>
    </div>
       <div class="card-content lighten-4">
      <div id="test600">
        <div class="row">
					<div class="col-md-1">

					</div>
          <div class="col-md-4">
            <img src="img/cultural/lifestyle/primpup.png" alt="Smiley face">
          </div>

          <div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2>PRIMP UP (FASHION DESIGNING): </h2>
						<br><h3>Flaunt with the brimming colors.</h3><br>
	<b>RULES</b>:<br>
	&#8226; Materials of two contrasting colours will be provided to the participant.<br>
	&#8226; Team of 3 comprising 2 designers and 1 model.<br>
	&#8226; The designer stiches and clads their work on their model.<br>
	&#8226; Makeup, styling of hair and complete grooming of the models by the designer of the event.<br>
	&#8226; The theme will be disclosed to the participants on spot, around which their design should evolve.<br>
	&#8226; Finally, the model should walk the runaway to showcase their designer's work based on which the event will be judged.<br>
<b>CONTACT</b>:<br>
Ms.Hannah Felix:9962287100

</span></h5></p></div>
        </div>
      </div>
      <div id="test601"><div class="row">
				<div class="col-md-1">

				</div>
          <div class="col-md-4">
            <img src="img/cultural/lifestyle/mehandhi.png" alt="Smiley face">
          </div>
          <div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2>MINK DOODLE (MEHANDI):</h2>
						<br><h3> Orange is the new white.</h3>
	<b>RULES&#8226; </b>:<br>
	&#8226; Category: General registration.<br>
	&#8226; College ID mandatory.<br>
	&#8226; 2 members per team.<br>
	&#8226; Time limit for a participant is 30minutes.<br>
<b>CONTACT</b>:<br>
Ms.Hannah Felix:9962287100
</span></h5></p></div>
        </div></div>

            <div class="row">
         <center>
        	<button type="button" class="btn btn-success btn-lg one" onclick="add()">ADD TO EVENT LIST</button></center>
        </div>
    </div>
  </div>
  </div>



<!--End-modal11-->
<!--Modal12-->

  <!-- Modal Structure FASHION-->

  <div id="modal14" class="modal pop_open">
  <div class="card" style="height: 100%">
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab"><a href="#test800" id="fashion1" onclick="fun()">PLUSH</a></li>
        <li class="tab"><a class="" href="#test801" onclick="fun()">MR AND MS.TAKSHASHILA</a></li>

      </ul>
    </div>
       <div class="card-content lighten-4">
      <div id="test800">
        <div class="row">
					<div class="col-md-1">

					</div>
          <div class="col-md-4">
            <img src="img/cultural/fashionz/plush.png" alt="Smiley face">
          </div>

          <div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2>PLUSH (RAMP  WALK):</h2>
						<br><h3> walk like the elements are compromised.</h3><br>
	<b>RULES</b>:<br>
	&#8226; College ID is mandatory.<br>
	&#8226; Each team should have 8 members.<br>
	&#8226; Crossover teams are also permitted.<br>
	&#8226; Green room will be provided.<br>
	&#8226; Participants should be present at the college premises on or before 3 p.m.<br>
	&#8226; Maximum of eight members per team and a minimum of 5 members per team.<br>
	&#8226; Maximum of 10 minutes will be allotted for a team.<br>
	&#8226; Entry fee- Rs.200 per head.<br>
	&#8226; Judge's decision is final.<br>
<b>CONTACT</b>:<br>
Ms.Hannah Felix:9962287100

</span></h5></p></div>
        </div>

				        <div class="row">
				         <center>
				        	<a href="https://www.townscript.com/e/takshashila-031214/booking"><button type="button" class="btn btn-success btn-lg one" onclick="add()">Premium Registration</button></center></a>
				        </div>
      </div>
      <div id="test801"><div class="row">
				<div class="col-md-1">

				</div>
          <div class="col-md-4">
            <img src="img/bel.png" alt="Smiley face">
          </div>

					<div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2>MR & MS. TAKSHASHILA:</h2>
						<br><h3>What all could you go through to become the ultimatum.
							 This is the event to hunt for the next face of this grand event.
							 Let's see what you have and what it takes for you to become the One in many.</h3><br>
	<b>RULES</b>:<br>
	<b>ROUND 1:</b><br>
	The first round is where we come to know who you really are, send us your talent through our whatsapp number- 9445676161 (Mr. Hariharran)<br>
	<b>ROUND 2:</b>:<br>
	A general trivia in the form of MCQ will be held for you if you're shortlisted from round 1. THIS ROUND WILL BE HELD ON COLLEGE DURING THE EVENT.<br>
	<b>ROUND 3:</b><br>
	Top 4 talents from boys and top 4 talents from girls will be selected to the finale. A popular celebrity will be anchoring this grand event.<br>
<b>CONTACT</b>:<br>
Ms.Hannah Felix:9962287100
</span></h5></p></div></div>

        <div class="row">
         <center>
        	<a href="#"><button type="button" class="btn btn-success btn-lg one" onclick="add()">ADD TO EVENT LIST</button></center></a>
        </div>
</div>
    </div>
  </div>
  </div>

	<!-- Modal Structure ONLINE-->
	<div id="modal15" class="modal pop_open">
	<div class="card" style="height: 100%">
		<div class="card-tabs">
			<ul class="tabs tabs-fixed-width">
				<li class="tab"><a href="#test605" id="online1" onclick="fun()">FOCUS</a></li>
				<li class="tab"><a class="" href="#test606" onclick="fun()">MUSICALLY</a></li>
				<li class="tab"><a href="#test607" onclick="fun()">GRAPHICA</a></li>
			</ul>
		</div>
			 <div class="card-content lighten-4">
			<div id="test605">
				<div class="row">
					<div class="col-md-1">

					</div>
					<div class="col-md-4">
						<img src="img/cultural/online/focus.png" alt="Smiley face">
					</div>

					<div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2>FOCUS (ONLINE  PHOTOGRAPHY):</h2>
						<br><h3> Submit your visions.</h3><br>
	<b>RULES</b>:<br>
	&#8226; Open theme.<br>
	&#8226; Maximum of 3 entries from an individual participant is allowed.<br>
	&#8226; Deadline: February 25.<br>
	&#8226; The design should be posted in instagram or facebook using the hashtag #FOCUSTK18  and #TAKSHASHILA2K18.<br>
<b>CONTACT</b>:<br>
Mr.Vishal:8056486424

</span></h5></p></div>
				</div>
			</div>
			<div id="test606"><div class="row">
				<div class="col-md-1">

				</div>
					<div class="col-md-4">
						<img src="img/cultural/online/musically.png" alt="Smiley face">
					</div>

					<div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2>MUSICALLY:</h2>
						<br><h3>  Not every celebrity shines in the silver screens, mobile screens do.</h3><br>
	<b>RULES</b>:<br>
	&#8226; The clip should be to the maximum of 2 minutes long.<br>
	&#8226; Not more than 2 entries per person.<br>
	&#8226; The design should be posted in instagram or facebook using the hashtag.<br>
	#MUSICALLYTK18 #TAKSHASHILA2K18 <br>
<b>CONTACT</b>:<br>
Mr.Vishal:8056486424
</span></h5></p></div></div></div>
<div id="test607"><div class="row">
	<div class="col-md-1">

	</div>
		<div class="col-md-4">
			<img src="img/cultural/online/g.png" alt="Smiley face">
		</div>

		<div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2>GRAPHICA:</h2>
			<b>Theme:</b> COLOURS <br>
<b>RULES</b>: <br>
	&#8226; The design should be submitted in 3980x2160(4K) or abaove. <br>
	&#8226; The design should be posted in instagram or facebook using the hashtag #GRAPHICATK18 & #TAKSHASHILA <br>
	&#8226; The design should be an original creation by the participant. Any infrignment or modification will not be considered as a valid submission. <br>
	&#8226; The designs must be submitted before February 25. (5p.m.). <br>
<b>CONTACT</b>:<br>
Mr. Sam Stennet: 9952533430
</span></h5></p></div></div></div>
<div class="row">
				 <center>
					<button type="button" class="btn btn-success btn-lg one" onclick="add()">ADD TO EVENT LIST</button></center>
				</div>
		</div>
	</div>
	</div>

	<!-- Modal Structure  red carpet-->
	<div id="modal17" class="modal pop_open">
	<div class="card" style="height: 100%">
		<div class="card-tabs">
			<ul class="tabs tabs-fixed-width">
				<li class="tab"><a href="#test900" id="red1" onclick="fun()">TALK SHOW</a></li>

			</ul>
		</div>
			 <div class="card-content lighten-4">
			<div id="test900">
				<div class="row">
					<div class="col-md-1">

					</div>
					<div class="col-md-4">
						<img src="img/talky.png" alt="Smiley face">
					</div>

					<div class="col-md-7"><p><h5><span class="one" style="color: black;"><h2>
						RED CARPET (TALK SHOW):</h2>
						<br><h3> Let's give an ear to what people with milestones say.</h3><br>
						</span></h5></p></div>
						</div>
			</div>
			<div class="row">
				 <center>
					<button type="button" class="btn btn-success btn-lg one" onclick="add()">ADD TO EVENT LIST</button></center>
				</div>
		</div>
	</div>
	</div>

<!--End-modal12-->

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
	var cat;

	function def() {
		cat = event.srcElement.id;
		console.log(cat+"1");
		cd = cat+"1";
		document.getElementById(cd).click();
		// switch (cat) {
		// 	case expression:
    //
		// 		break;
		// }
	}

	function fun() {
		ev = event.toElement.textContent.replace(/[^a-zA-Z0-9]/g,'');
		// console.log(event.toElement.textContent.replace(/[^a-zA-Z0-9]/g,''));
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
	  alert("Login to add events");
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
