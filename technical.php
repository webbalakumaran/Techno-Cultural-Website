<?php require 'takshashila/dbconnect.php';?>

<!DOCTYPE html>
<html>
<head>
	<title>Takshashila|Technical</title>
<link rel="icon" href="ico.png"  sizes="32x32">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style media="screen">

.toast{
	font-size: 16px!important;
		top: 60px!important;
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
	.photo{
		height: 180px;
		width: 180px;
	}

	body{
		background-image: url("img/schedule pics2.jpg");
	}

	@media screen and (min-width: 1024px) and (min-height: 1320px) { /* ipad pro*/
			.desk_view{
				display: none!important;
			}
			footer{
				position: absolute;
				bottom: 0px!important;
				width: 100%;
			}
	    }
	@media only screen and (min-device-width : 768px) and (max-device-width : 1024px){ /* ipad */
		.mob_view{
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
@media screen and (min-width: 1024px) and (min-height: 1320px) { /* ipad pro*/
	footer{
		position: absolute;
		bottom: 0px!important;
		width: 100%;
	}
	}
	@media only screen and (min-device-width : 768px) and (max-device-width : 1024px){ /* ipad */
			.desk_view{
				display: block!important;
			}
			footer{
				position: relative;
				bottom: inherit!important;
			}
	    }
@media only screen and (max-width: 768px) {/*mobile*/
			.desk_view{
				display: none;
			}
			.modal{
				overflow-y: visible;

			}
    }
    @media only screen and (min-width: 768px) {/*desktop*/
			.mob_view{
				display: none;
			}
			footer{
				position: absolute;
				bottom: 0px;
				width: 100%;
			}
}
footer{
	margin-top:200px;
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
		<center><h1>Technical</h1></center>
	</div>
	<div class="row desk">
		<div class="col-md-2">
			<center>
				        <div class="card-image" onclick="Materialize.toast('click \'ADD TO EVENTS LIST\'', 6000)">
						<a href="#modal1" onclick="def()" class="modal-trigger">
						<img src="img/tech/cse.png" id="cse" class="img-responsive" style="height:150px;width:150px;" >
						<span class="card-title" id="csetxt">CSE</span></div></a>

					</div>
				</center>

		<div class="col-md-2">
			<center>
					<div class="card-image" onclick="Materialize.toast('click \'ADD TO EVENTS LIST\'', 6000)">
						<a href="#modal2" class="modal-trigger" onclick="def()">
						<img src="img/tech/ece.png" id="ece" class="img-responsive" style="height:150px;width:150px;">
						<span class="card-title" id="ecetxt">ECE</span></a>
					</div>
				</center>
		</div>

		<div class="col-md-2">
			<center>
					<div class="card-image" onclick="Materialize.toast('click \'ADD TO EVENTS LIST\'', 6000)">
						<a href="#modal4" class="modal-trigger" onclick="def()">
							<img src="img/tech/impulse.png" id="eee" class="img-responsive" style="height:150px;width:150px;">
						<span class="card-title" id="eeetxt">EEE</span></a>
					</div>
				</center>
		</div>
		<div class="col-md-2">
			<center>
					<div class="card-image" onclick="Materialize.toast('click \'ADD TO EVENTS LIST\'', 6000)">
						<a href="#modal5" class="modal-trigger" onclick="def()">
						<img src="img/tech/mct.png" id="mct" class="img-responsive" style="height:150px;width:150px;">
						<span class="card-title" id="mcttext">MCT</span></a>
					</div>
				</center>
		</div>
		<div class="col-md-2">
			<center>
					<div class="card-image" onclick="Materialize.toast('click \'ADD TO EVENTS LIST\'', 6000)">
						<a href="#modal6" class="modal-trigger" onclick="def()">
						<img src="img/tech/civil.png" id="civil" class="img-responsive" style="height:150px;width:150px;">
						<span class="card-title" id="civiltxt">CIVIL</span></a>
					</div>
				</center>
		</div>
		<div class="col-md-2">
			<center>
					<div class="card-image" onclick="Materialize.toast('click \'ADD TO EVENTS LIST\'', 6000)">
						<a href="#modal3" class="modal-trigger" onclick="def()">
						<img src="img/tech/mech.png" id="mech" class="img-responsive" style="height:150px;width:150px;">
						<span class="card-title" id="mechtxt">MECH</span></a>
					</div>
				</center>
		</div>
		  </div>
					  </div>

</div>
<br>

<!--mobile-->
	<div class="container-fluid mob_view">
		<center><h1>TECHNICAL</h1></center>
		<table class="table">
	<tbody>
		<tr id="cse" onclick="Materialize.toast('click \'ADD TO EVENTS LIST\'', 6000);def()">
			<td><a href="#modal1" class="modal-trigger" ><img src="img/tech/cse.png" style="width:100px;"alt="" id="cse"></a></td>
			<td><a href="#modal1" class="modal-trigger"><h2 style="padding-top:10px;">CSE</h2></a></td>
		</tr>

			<tr onclick="Materialize.toast('click \'ADD TO EVENTS LIST\'', 6000); def()">
				<td><a href="#modal2" class="modal-trigger"><img src="img/tech/ece.png" id="ece" style="width:100px;"alt=""></a></td>
				<td><a href="#modal2" class="modal-trigger"><h2 style="padding-top:10px;">ECE</h2></a></td>
			</tr>

				<tr onclick="Materialize.toast('click \'ADD TO EVENTS LIST\'', 6000);def()">
					<td><a href="#modal3" class="modal-trigger"><img src="img/tech/mech.png" id="mech" style="width:100px;"alt=""></a></td>
					<td><a href="#modal3" class="modal-trigger"><h2 style="padding-top:10px;">MECH</h2></a></td>
				</tr>

					<tr onclick="Materialize.toast('click \'ADD TO EVENTS LIST\'', 6000);def()">
						<td><a href="#modal4" class="modal-trigger"><img src="img/tech/impulse.png" id="eee" style="width:100px;"alt=""></a></td>
						<td><a href="#modal4" class="modal-trigger"><h2 style="padding-top:10px;">EEE</h2></a></td>
					</tr>

						<tr onclick="Materialize.toast('click \'ADD TO EVENTS LIST\'', 6000);def()">
							<td><a href="#modal5" class="modal-trigger"><img src="img/tech/mct.png" id="mct" style="width:100px;"alt=""></a></td>
							<td><a href="#modal5" class="modal-trigger"><h2 style="padding-top:10px;">MCT</h2></a></td>
						</tr>

							<tr onclick="Materialize.toast('click \'ADD TO EVENTS LIST\'', 6000);def()">
								<td><a href="#modal6" class="modal-trigger"><img src="img/tech/civil.png" id="civil" style="width:100px;"alt=""></a></td>
								<td><a href="#modal6" class="modal-trigger"><h2 style="padding-top:10px;">CIVIL</h2></a></td>
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

  <!-- Modal Structure -->
  <div id="modal1" class="modal pop_open">
  <div class="card" style="height: 145%">
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab"><a id="cse1" href="#test4" onclick="fun()">BLIND CODING</a></li>
        <li class="tab"><a id="cse2" href="#test5" onclick="fun()">HACKATHON</a></li>
        <li class="tab"><a id="cse3" href="#test6" onclick="fun()">MISCOMP</a></li>
        <li class="tab"><a id="cse4" href="#test22" onclick="fun()">PAPER PRESENTATION</a></li>
        <li class="tab"><a id="cse5" href="#test23" onclick="fun()">NETWORKING</a></li>
        <li class="tab"><a id="cse6" href="#test24" onclick="fun()">WEB DESIGN</a></li>
      </ul>
    </div>
       <div class="card-content lighten-4">
      <div id="test4">
        <div class="row">
        	<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/tech/blindcoding.png" alt="Smiley face" class="img-responsive photo">
          </div>
          <div class="col-md-7"><p><span class="one" style="color: black;"><h2>Blind Coding</h2>
 <h4>Do you talk in codes? All technical leads out there, you need to be coding here.</h4>

1. Team should consist maximum of 2 members (irrespective of department and year).
Team members should be of the same college. <br>
2. Participants are requested to register in advance. <br>
3. Event consists of 2 rounds. <br>
4. First round is called TechGeek(Quiz). Teams will be grilled with technical questions and the team that answers most questions in short time will qualify. <br>
5. Teams that qualify TechGeek will move to Round 2 called Debug. <br>
6. Teams will be given a task and have to complete the given task within the given duration. <br>
7. Internet usage is strictly not allowed. <br>
Panel member's decision will be final.


</span></p></div>
        </div>
      </div>

      <div id="test5">
      	<div class="row">
      		<div class="col-md-1"></div>
          <div class="col-md-4">

            <img src="img/tech/hackathon.png" alt="Smiley face" class="img-responsive photo">
          </div>
          <div class="col-md-7"><p><span class="one" style="color: black;"><h2>HACKATHON</h2>
<h4>Do you think you have what it takes to make your projects stand a chance in real time hackathon event? You are marked...</h4>
<h5>
1. Team should consist maximum of 2 members (irrespective of department and year).
Team members should be of the same college. <br>
2. Only registered participants are allowed to participate in this event. <br>
3. The event consists of 2 rounds. <br>
4. First round is called TechGeek(Quiz). Teams will be grilled with technical questions and the team that answers most questions in the shortest time will qualify. <br>
5.Teams that qualify TechGeek will move to Round 2 in which the scenario will be provided. Based on the scenario you need to code. <br>
6. Teams will be given a task on the spot and are required to complete it. <br>
Systems with internet will be provided. <br>
7. Panel member decision is final. </h5>

</span></p></div>
        </div></div>
      <div id="test6">
      	<div class="row">
        <div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/tech/miscomp.png" alt="Smiley face" class="img-responsive photo">
          </div>
          <div class="col-md-7"><p><span class="one" style="color: black;"><h2>MISCOMP</h2> <br>
1. Team should consist maximum of 2 members (irrespective of department and year).
Team members should be of the same college. <br>
2.Only registered participants are allowed to participate in this event. <br>
3.The event consists of two rounds. <br>
4. First round is called IDENTIFY. Computer components will be displayed and the teams are supposed to identify the respective components. The teams that identify the most number of components in minimum duration will qualify to the 2nd round called ASSEMBLE. <br>
5. ASSEMBLE : Teams are supposed to assemble the identified items. Teams that assemble all components in minimum duration wins. <br>
6. Panel decision will be final. <br><br>
</span></p></div>
        </div></div>
      <div id="test22">
      	<div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/tech/csepaperpresentation.png" alt="Smiley face" class="img-responsive photo">
          </div>
          <div class="col-md-7"><p><span class="one" style="color: black;"><h2>PAPER PRESENTATION</h2>
1. Team should consist maximum of 2 members (irrespective of department and year). <br>
2. Team members should be of the same college. <br>
3. Participants are requested to register in advance. <br>
4. Topics can be from any domain. <br>
5. Contact the event coordinator for the submission details. <br>
6. Panel decision will be final. <br>

</span></p></div>
        </div></div>
        <div id="test23">
        <div class="row">
        	<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/tech/networking.png" alt="Smiley face" class="img-responsive photo">
          </div>
          <div class="col-md-7"><p><span class="one" style="color: black;"><h2>NETWORKING</h2>
1. Team should consist maximum of 2 members (irrespective of department and year). <br>
2. Team members should be of the same college. <br>
3. Participants are requested to register in advance. <br>
4. Event consist of 2 rounds. <br>
5. First round is TechGeek. Teams that qualify TechGeek will move to the finals. <br>
6. FINALS : Teams will be given a task on the spot and are required to complete it. <br>
7. Panel decision will be final. <br>
</span></p></div>
        </div>
      </div>
<div id="test24">
        <div class="row">
        	<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/tech/webdesign.png" alt="Smiley face" class="img-responsive photo">
          </div>

          <div class="col-md-7"><p><span class="one" style="color: black;"><h2>WEB DESIGN</h2>
1. Team should consist maximum of 2 members (irrespective of department and year). <br>
2. Team members should be of the same college. <br>
3. Participants are requested to register in advance. <br>
4. Event consist of 2 rounds. <br>
5. First round is TechGeek. Teams that qualify TechGeek will move to the finals. <br>
6. FINALS : Teams will be given a task on the spot and are required to design a website within the specified time. <br>
7. Panel decision will be final. <br>
</span></p></div>
        </div>
      </div>


        <div class="row">
         <center>
        	<button type="button" class="btn btn-success btn-lg one" onclick="add()">ADD TO EVENT LIST</button></center>
        </div>
    </div>
  </div>
  </div>

<!--End-modal1-->

<!--Modal2-->

  <!-- Modal Structure -->
  <div id="modal2" class="modal pop_open">
  <div class="card"  style="height: 145%">
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab"><a href="#test7" id="ece1" onclick="fun()">EARD WARAQA</a></li>
        <li class="tab"><a class="" href="#test8" onclick="fun()">TECH-BANG</a></li>
        <li class="tab"><a href="#test9" onclick="fun()">TEKA-TEKI</a></li>
         <li class="tab"><a href="#test25" onclick="fun()">MARS ROVER</a></li>
          <li class="tab"><a href="#test26" onclick="fun()">PROJECT-O-PHILIA</a></li>
           <li class="tab"><a href="#test27" onclick="fun()">CIRCUIT-O-SAURAS</a></li>
      </ul>
    </div>
       <div class="card-content lighten-4">
      <div id="test7">
        <div class="row">

        	<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/tech/eardwaraqa.png" alt="Smiley face" class="img-responsive photo">
          </div>

          <div class="col-md-7"><p><span class="one" style="color: black;"><h1>EARD WARAQA</h1>

            	<h3>"Your voice of idea can turn to dust or magic"</h3>

<h4><b>RULES</b>:</h4>

   Topics should be related to electronics and communication department. <br>
   Each team can have 2 members <br>
   Submission of abstract should be before the due date. <br>
   Based on the peering review of the abstract, few papers will be selected. <br>
   Presentation will be conducted before the panel members. <br>
   Team members must submit the soft copy of the presentation on the same day. <br>
   Presentation should not exceed ten minutes, which involves queries and answer sessions.

</span></p></div>
        </div>
      </div>
      <div id="test8"><div class="row">
      	<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/tech/techbang.png" alt="Smiley face" class="img-responsive photo">
          </div>

                    <div class="col-md-7"><p><span class="one" style="color: black;"><h1>TECH-BANG (technical quiz)</h1>

<h3>"To win or to lose!!! That's the question..."</h3>

<h4><b>RULES</b>:</h4>
         Each team can hold up to 3 members. <br>
         Round-1: It is a pen and paper test with MCQ based on electronics and communication. <br>
         Round-2: It involves questions on science and general knowledge. <br>
         Winners will be awarded based on their score. <br>

</span></p></div>
        </div></div>
      <div id="test9"><div class="row">
      	<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/tech/tekateki.png" alt="Smiley face" class="img-responsive photo">
          </div>

          <div class="col-md-7"><p><span class="one" style="color: black;"><h1>TEKA-TEKI(technical puzzle)</h1>

<h4><b>RULES</b>:</h4>

         Each team can hold up to 2 members. <br>
         Round-1: It is a MCQ test on aptitude. <br>
         Round-2: Final round will be a buzzer round that is based on technical connections. <br>
         Winners will be selected based on their score. </span></p></div>
        </div></div>
        <div id="test25">
        <div class="row">
        	<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/tech/marsrover.png" alt="Smiley face"  class="img-responsive photo">
          </div>

          <div class="col-md-7"><p><h5><span class="one" style="color: black;"><h1>MARS ROVER(line following robot)</h1>

<h3>"Fast is Fine, but accuracy is everything "</h3>

<h4><b>RULES</b>:</h4>

         A team can have two members. <br>
         A maximum of 5 minutes is given for the robot to complete the course. <br>
         Once the robot has crossed the starting line, it must remain autonomous. <br>
         A maximum of two chances will be given for the robot that loses the line course. <br>
         Accuracy and completion of the line course are the winning parameters. <br>

</span></p></div>
        </div>
      </div><div id="test26">
        <div class="row">
<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/tech/projectophilia.png" alt="Smiley face" class="img-responsive photo">
          </div>

          <div class="col-md-7"><p><span class="one" style="color: black;"><h1>PROJECT-O-PHILIA (project expo)</h1>

<h3>"Every expert was once a beginner!!!"</h3>

<h4><b>RULES</b>:</h4>

         A team can have 2-3 members. <br>
         Every team must present their working model before the panel members. <br>
         Oral explanation about the project is must. <br>
         Description of the project should also be submitted as a soft copy. <br>
         The best project will be awarded.
</span></p></div>
        </div>
      </div><div id="test27">
        <div class="row">
        	<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/tech/circuitosauras.png" alt="Smiley face" class="img-responsive photo">
          </div>

          <div class="col-md-7"><p><span class="one" style="color: black;">
<h1>CIRCUIT-O-SAURAS (circuit debugging)</h1>

<h3>"Circuit with bug...Is like breathe with no air"</h3>

<h4>Rules:</h4>

         Maximum number of students per team is 2. <br>
         Round 1: Identification of electronic components. <br>
         Round 2 : The participants have to debug the given circuits within the time constraint and rectify them. <br>
         Round 3: Justifying the real time applications for the given circuit. <br>
         Winner will be decided by the organizers.</span></p></div>
        </div>
      </div>
        <div class="row">
         <center>
        	'<button type="button" class="btn btn-success btn-lg one" onclick="add()">ADD TO EVENT LIST</button></center>
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
      <ul class="tabs tabs-fixed-width">
        <li class="tab"><a href="#test10" id="mech1" onclick="fun()">WATER ROCKETRY</a></li>
        <!-- <li class="tab"><a class="" href="#test11">WORKSHOP</a></li> -->
        <li class="tab"><a href="#test12" onclick="fun()">ROLE PLAY</a></li>
        <li class="tab"><a href="#test28" onclick="fun()">MR.MACHINIST</a></li>
        <li class="tab"><a href="#test29" onclick="fun()">CAD/CAM</a></li>
        <!-- <li class="tab"><a href="#test30" onclick="fun()">CAM</a></li> -->
        <li class="tab"><a href="#test31" onclick="fun()">PAPER PRESENTATION</a></li>
        <li class="tab"><a href="#test32" onclick="fun()">TECHNICAL QUIZ</a></li>
      </ul>
    </div>
       <div class="card-content lighten-4">
      <div id="test10">
        <div class="row">
        	<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/tech/waterrocketry.png" alt="Smiley face" class="img-responsive photo">
          </div>

          <div class="col-md-7"><p><span class="one" style="color: black;"><h1>Water Rocketry</h1>
Innovations start with simple constructive ideologies that sync with patterns which eventually leads to Success of the Advancements in Science!!! The use of common water bottles and a compressor to explain Aerodynamics in a Much Subtle objective is the keen output of the event!  <br>
The hierarchy of flying range will be the judging parameters. <br>
<h4><b>RULES</b>: </h4>
1. Team should consist of a maximum of 3 members. <br>
2. All Design Materials should be brought by the Participants. Only The Compressor will be Provided by the Institution. <br>
</span></p></div>
        </div>
      </div>
      <!-- <div id="test11"><div class="row">
      	<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/tech/workshopicon.png" alt="Smiley face" class="img-responsive photo">
          </div>

          <div class="col-md-7"><p><span class="one" style="color: black;"><h1>Workshop/ Seminars</h1>
Technical knowledge grows in the aspect of substantial skill set preparing young entrepreneurs in their success of the career. Workshops conducted by trained faculties to inscribe the experiential learning about 3D printing, CNC and Robotics.</span></p></div>
        </div></div> -->
      <div id="test12"><div class="row">
      	<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/tech/roleplay.png" alt="Smiley face" class="img-responsive photo">
          </div>

          <div class="col-md-7"><p><span class="one" style="color: black;"><h1>Role Play</h1>
Enacting the roles of the mechanical components and based on the titles given the participants will have to perform the play. <br>
<h4><b>RULES</b>: </h4>
The time Limits will be Monitored and the Judgement will be based on the presentation Styles!!!
</span></p></div>
        </div></div>
        <div id="test28"><div class="row">
        	<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/tech/mrmachinist.png" alt="Smiley face" class="img-responsive photo">
          </div>

          <div class="col-md-7"><p><span class="one" style="color: black;"><h1>Mr. MACHINIST</h1>
You won't believe the attention to detail that goes into designing, modeling, measuring, cutting, grinding, polishing, and fitting parts to realize this horological wonder.
 <br>
<h4><b>RULES AND REGULATIONS: </b> </h4>
ROUND 1:Students should answer the given number of questions in a given period of time.Those who clear the round will be qualified to the next round.  <br>
ROUND 2:A diagrammatic job will be given with dimensions.A model should be made in lathe machine for the given dimensions with accuracy and short time will be the winner. <br>
</span></p></div>
        </div></div><div id="test29"><div class="row">
        	<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/tech/cad.png" alt="Smiley face" class="img-responsive photo">
          </div>

          <div class="col-md-7"><p><span class="one" style="color: black;"><h1>CAD - COMPUTER AIDED DESIGNING </h1>
Design and analysis- these two terms provide their own brand of enthusiasm. If you are looking for a stage to showcase your design then come and grab it. <br>
<h4><b>RULES</b>:</h4>
         A  team consists of two members. <br>
         College ID must. <br>
ROUND 1 : Written exam <br>
ROUND 2 : software design. <br>

</br> <h1> CAM-COMPUTER AIDED MANUFACTURING </h1>
<h4><b>RULES</b>:</h4>
         A  team consists of two members. <br>
         College ID must. <br>
ROUND 1 : Written exam <br>
ROUND 2 : software design <br>
</span></p></div>
        </div></div><div id="test30"><div class="row">
        	<div class="col-md-1"></div>
          <!-- <div class="col-md-4">
            <img src="img/tech/cam.png" alt="Smiley face" class="img-responsive photo">
          </div> -->

          <!-- <div class="col-md-7"><p><span class="one" style="color: black;"><h1>CAM-COMPUTER AIDED MANUFACTURING</h1>
For all  the heads that seek glory  in CAM.  Here is the right  chance . <br>
<h4><b>RULES</b>:</h4>
         A  team consists of two members. <br>
         College ID must. <br>
ROUND 1 : Written exam <br>
ROUND 2 : software design <br>

</span></p></div> -->
        </div></div><div id="test31"><div class="row">
        	<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/tech/mechanicalpaperpresentation.png" alt="Smiley face" class="img-responsive photo">
          </div>

          <div class="col-md-7"><p><span class="one" style="color: black;"><h1>PAPER PRESENTATION</h1>
<h4><b>RULES</b>:</h4>
1. Team should consist of a maximum of 2 members (irrespective of department and year). <br>
2. Team members should be of the same college. <br>
3. Participants are requested to register in advance. <br>
4. Topics can be from any domain. <br>
5. Contact the event coordinator for the submission details. <br>
6. Panel decision is final.

</span></p></div>
        </div></div><div id="test32"><div class="row">
        	<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/tech/technicalquiz.png" alt="Smiley face" class="img-responsive photo">
          </div>

          <div class="col-md-7"><p><span class="one" style="color: black;"><h1>TECHNICAL QUIZ</h1>
<h4><b>RULES</b>:</h4>
 1.  Each team can hold up to 3 members. <br>
  2. Round-1: it is a paper pen test with MCQ based on electronics and communication.

</span></p></div>
        </div></div>
        <div class="row">
         <center>
        	'<button type="button" class="btn btn-success btn-lg one" onclick="add()">ADD TO EVENT LIST</button></center>
        </div>
    </div>
  </div>
  </div>

<!--End-modal3-->

<!--Modal4-->

  <!-- Modal Structure -->
  <div id="modal4" class="modal pop_open">
  <div class="card" style="height: 145%">
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab"><a href="#test13" id="eee1" onclick="fun()">MODEL EXPO</a></li>
        <li class="tab"><a class="" href="#test14" onclick="fun()">BRAIN WAVE</a></li>
        <li class="tab"><a href="#test15" onclick="fun()">ENQUIZTA</a></li>
        <li class="tab"><a href="#test33" onclick="fun()">COMPO QUEST</a></li>
        <li class="tab"><a href="#test34" onclick="fun()">MAKE IT SIMPLE</a></li>
        <li class="tab"><a href="#test35" onclick="fun()">GOOGLE HUNT</a></li>
        <li class="tab"><a href="#test36" onclick="fun()">BOMB SQUAD</a></li>

      </ul>
    </div>
       <div class="card-content lighten-4">
      <div id="test13">
        <div class="row">
        	<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/tech/modelexpo.png" alt="Smiley face" class="img-responsive photo">
          </div>

          <div class="col-md-7"><p><span class="one" style="color: black;"><h1>MODEL EXPO (PROJECT DISPLAY)</h1>
          	<h3>Display of projects in the below mentioned topics.</h3>
<h4><b>RULES</b>:</h4>
1.Related to energy conservation,IoT , Smart city and Robotics. <br>
2.Team can accommodate upto3 members. <br>
3.Regardless to any department and curriculum. <br>
4.Presentation regarding the project are most welcome. <br>
5.Laptops will not be provided. <br>
6. Projects will be analyzed based on uniqueness,scalability and demonstrability. <br>

</span></p></div>
        </div>
      </div>
      <div id="test14"><div class="row">
      	<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/tech/brainwave.png" alt="Smiley face" class="img-responsive photo">
          </div>

          <div class="col-md-7"><p><span class="one" style="color: black;"><h1>BRAIN WAVE(PAPER PRESENTATION)</h1>

<h3>Presenting yours innovative ideas related to stream of electrical and electronics </h3>
<h4><b>RULES</b>:</h4>
1.Topic related to electrical and electronics. <br>
2.Each team can have 2 members only. <br>
3. Each team will be provided with 10 mins to present their ideas. <br>
4.Projector will be provided. <br>
5.Abstracts should be sent to impulse.sympo@gmail.com before 14th Feb 2k18. <br>
6.Paper will be analyzed based on uniqueness and content.

</span></p></div>
        </div></div>
      <div id="test15"><div class="row">
      	<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/tech/enquizta.png" alt="Smiley face">
          </div>

          <div class="col-md-7"><p><span class="one" style="color: black;"><h1>ENQUIZTA(TECHNICAL QUIZ)</h1>
<h3>Testing your technical ability with question realted to electrical and electronic engineering</h3>
<h4><b>RULES</b>:</h4>
1.Two members per team. <br>
2.Prelims will be conducted on the topic related to basics electrical and electronics concepts. <br>
3.Materials will be provided. <br>
4.Prelims consist of 30 MCQ. <br>
5.Top 6 teams will be selected for the main event. <br>
6.Main event will be a buzzer round. <br>
7.Main event will be conducted on the topic related to upcoming and recent technologies, electrical and electronics concepts.

</span></p></div>
        </div></div>
        <div id="test33"><div class="row">
      	<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/tech/compoquest.png" alt="Smiley face" class="img-responsive photo">
          </div>

          <div class="col-md-7"><p><span class="one" style="color: black;"><h1>COMPO QUEST(TREASURE HUNT)</h1>
<h3>Bulit your circuit with the identified components. </h3>
<h4><b>RULES</b>:</h4>
1.A team should be consisting of 3 members. <br>
2.Teams should roam inside the campus in search of certain components that will be missing in a particular device based on clues provided. <br>
3.As a final task the teams should assemble each and every components of the device and make it work. <br>
4. Teams require basic knowledge about electrical hardware to get succeeded.
</span></p></div>
        </div></div><div id="test34"><div class="row">
      	<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/tech/makeitsimple.png" alt="Smiley face" class="img-responsive photo">
          </div>

          <div class="col-md-7"><p><span class="one" style="color: black;"><h1>MAKE IT SIMPLE(BREAKING COMPLEXITY OF CIRCUIT)</h1>
          	<h3>Built a simple circuit from the complex one and make it work.</h3>
<h4><b>RULES</b>:</h4>
1.Only one individual can participate. <br>
2. Prelims will be conducted related to circuit designing in MCQ pattern. <br>
3.Materials will be provided. <br>
4.Prelims consist of 20 MCQ. <br>
5.Top 6 participants will be selected for the final round. <br>
6.In final round a complex circuit will be given to the participants. The participants must make the given circuit as simple as possible and deliver the output. <br>
7.Components required for the circuit will be provided. <br>
8. No additional components will be provided other then the components in the circuit.


</span></p></div>
        </div></div><div id="test35"><div class="row">
      	<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/tech/googlehunt.png" alt="Smiley face" class="img-responsive photo">
          </div>

          <div class="col-md-7"><p><span class="one" style="color: black;"><h1>GOOGLE HUNT(GOOGLE SEARCH)</h1>
          	<h3>Search the maximum contents based on the given topic in the given time.</h3>
<h4><b>RULES</b>:</h4>
1.Only one individual can participate.  <br>
2.Problem will be given to the participants based on electrical and electronics. <br>
3.Participants must find the solutions for the problems with the help of Google. <br>
4.The solutions should be found within the time limit. <br>
5.The participant should find the apt and efficient solution for maximum problems. <br>
6.The participants must bring their own network enabled devices(laptop,mobile,tab). <br>
7.Internet facility will be provided.


</span></p></div>
        </div></div><div id="test36"><div class="row">
      	<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/tech/bombsquad.png" alt="Smiley face" class="img-responsive photo">
          </div>

          <div class="col-md-7"><p><span class="one" style="color: black;"><h1>BOMB SQUAD(DEFUSE THE ALARMS)</h1>
          	<h3>Identify the circuit and detach the odd wire</h3>
<h4><b>RULES</b>:</h4>
1.Two participants per team. <br>
2.Prelims will be conducted related to electrical circuits in MCQ pattern. <br>
3.Materials will be provided. <br>
4.Prelims consist of 30 MCQ. <br>
5.Top 6 teams will be qualified for the final round. <br>
6.Alarm circuit will be given to the teams. The teams must defuse the circuit before the time limit with the given components. <br>
7.Alarm circuits will be provided.

</span></p></div>
        </div></div>
    <div class="row">
         <center>
        	'<button type="button" class="btn btn-success btn-lg one" onclick="add()">ADD TO EVENT LIST</button></center>
        </div>
    </div>
  </div>
  </div>

<!--End-modal4-->
<!--Modal5-->

  <!-- Modal Structure -->
  <div id="modal5" class="modal pop_open">
  <div class="card" style="height: 145%">
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab"><a href="#test16" id="mct1" onclick="fun()">MR. G</a></li>
        <li class="tab"><a class="" href="#test17" onclick="fun()">SLIDE DESK</a></li>
        <li class="tab"><a href="#test18" onclick="fun()">LIVE NFS</a></li>
        <li class="tab"><a href="#test55" onclick="fun()">WAR OF TITANS</a></li>
        <li class="tab"><a href="#test56" onclick="fun()">TECH MAZE</a></li>
        <li class="tab"><a href="#test57" onclick="fun()">CRAZY ENGINEERS</a></li>
        <li class="tab"><a href="#test58" onclick="fun()">LADDER BUILDER</a></li>
        <li class="tab"><a href="#test59" onclick="fun()">ARDUINO CRACKERS</a></li>
      </ul>
    </div>
       <div class="card-content lighten-4">
      <div id="test16">
        <div class="row">
        	<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/tech/mrg.png" alt="Smiley face" class="img-responsive photo">
          </div>

          <div class="col-md-7"><p><span class="one" style="color: black;"><h1>Mr. G (PROJECT EXPO)</h1>

<h3>Mr.Genius here future scientist can bring up his fabricated projects(including mini projects) and display them.</h3>

<h4>Rules:</h4>
1. Team can have a Maximum of 6 members. <br>
2. Multiple teams are allowed from a college. <br>
3. Participant cannot be a part of more than one team. <br>
<h4>Prelims:</h4>
1. Each team must submit an abstract of their project. <br>
2. Teams can use charts and presentations as visual aids.

</span></p></div>
        </div>
      </div>
      <div id="test17"><div class="row">
      	<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/tech/slidedesk.png" alt="Smiley face" class="img-responsive photo">
          </div>

          <div class="col-md-7"><p><span class="one" style="color: black;">
          	 <h1>Slide Desk</h1>
          	 <h3>It is generally a paper presentation event where the participants are instructed to present a paper on the list of the event topics.</h3>

<h4>Topics:</h4>
		1. Unmanned Aerial Vehicles <br>
		2. Robots in Hazardous Environment <br>
		3. Autotronics <br>
		4. Industrial application using internet of things <br>
<h4>Rules:</h4>
1. Maximum 3 Members per team. <br>
2. Time limit : 10mins. <br>
3. Last date for paper submission 21/02/2018.

          </span></p></div>
        </div></div>
      <div id="test18"><div class="row">
      	<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/tech/livenfs.png" alt="Smiley face" class="img-responsive photo">
          </div>

          <div class="col-md-7"><p><span class="one" style="color: black;"> <h1>Live NFS (RC RACE)</h1>
         <h3> It is an RC race competition where the pilots are instructed to drive their RC cars on the given track.</h3>
<h4>Rules:</h4>
1. Maximum of 5 members per team are allowed. <br>
2. Readymade bots are not allowed. <br>
<h4> Car Specifications:</h4> <br>
1. Car Dimension: 30*30*30cm. <br>
2. It must be a battery operated. <br>
3. Both wired and wireless connections are allowed. <br>
4. Extra batteries or any other accessories will not be given. <br>
5. The race will have time constraints. <br>
6. Only two bots will be in fly in the track at an instant.

</span></p></div>
        </div></div>
        <div id="test55"><div class="row">
        	<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/tech/waroftitans.png" alt="Smiley face" class="img-responsive photo">
          </div>

          <div class="col-md-7"><p><span class="one" style="color: black;"><h1> War of Titans (Robo War)</h1>
          	<h3>If you are crazy enough, then this is the place for you where you can train your own battle bots and make them to fight with other competitive bots.
</h3>
	<h4>Rules:</h4>
1. Maximum of 7 members per team are allowed. <br>
2. Wireless or wired controlled bots are eligible to participate. <br>
3. Of the 7 only two will be allowed in the ring. <br>
4. Teams should report properly without any discrepancy before specified time. <br>
5. Required dimension : 50cm*50cm*50cm <br>
6. Bots exceeding the weight of 50Kgs(Including Battery) are disqualified.

</span></p></div>
        </div></div>
        <div id="test56"><div class="row">
        	<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/tech/techmaze.png" alt="Smiley face" class="
            img-responsive photo">
          </div>

          <div class="col-md-7"><p><span class="one" style="color: black;"><h1>Tech Maze (Technical Quiz)</h1>
          	<h3>It's the place to check your technical knowledge and crack it out. </h3>
	<h4>Rules:</h4>
1. Maximum of 3 members per team are allowed. <br>
2. The event will have two levels. <br>
3. Prelim is a written round with 20 questions. <br>
4. Final round will be a buzzer round. <br>
5. Decision of the quiz master will be the final.

</span></p></div>
        </div></div>
        <div id="test57"><div class="row">
        	<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/tech/crazyengineers.png" alt="Smiley face" class="img-responsive photo">
          </div>

          <div class="col-md-7"><p><span class="one" style="color: black;"><h1>Crazy Engineers</h1>
          	<h3>Here you can get wide exposure to automobile engines where the event is to assemble the disassembled engine.
</h3>
	<h4>Rules:</h4>
1. Maximum of 4 members per team are allowed. <br>
2. The event will be conducted in two levels. <br>
3. First round is a written test with 20 questions. <br>
4. In second round the participants will be given mechanical components to assemble within the specified time.
</span></p></div>
        </div></div>
        <div id="test58"><div class="row">
        	<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/tech/ladderbuilder.png" alt="Smiley face" class="img-responsive photo">
          </div>

          <div class="col-md-7"><p><span class="one" style="color: black;"> <h1>Ladder Builder (PLC Programming):</h1>
           <h3>It is the event in which the participants are initially supposed to attend the workshop exclusively conducted for the event. Only those who take part in the workshop are eligible to contest in the event.
</h3>

<h4>Rules:</h4>
1. Maximum of 4 members per team are allowed. <br>
2. Three levels will be conducted.  <br>
3. <b>Prelim</b> has 10 basic questions in PLC
                                                                     (Time allotted: 15m). <br>
4. Second stage will be a programming and simulation level.
                                                                     (Time allotted: 30 m). <br>
5. Final stage will be hardware based PLC Programming
                                                                     (Time allotted: 30m). <br>


</span></p></div>
        </div></div>
        <div id="test59"><div class="row">
        	<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/tech/arduinocrackers.png" alt="Smiley face" class="img-responsive photo">
          </div>

          <div class="col-md-7"><p><span class="one" style="color: black;"><h1>Arduino Crackers:</h1>
          	<h3>It is the event where initially the participants are supposed to attend the workshop exclusively conducted for the event. Only those who take part in the workshop are eligible to contest in the event.
</h3>

<h4>Rules: </h4>
1. Maximum of 4 members per team are allowed. <br>
2. The event will be conducted in two phases. <br>
3. Round one will have 20 questions (Time allotted: 15 m). <br>
4. Round two is based on the programming and execution of the given task (Time allotted: 45m). <br>
</span></p></div>
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

  <!-- Modal Structure -->
  <div id="modal6" class="modal pop_open ">
  <div class="card" style="height: 220%">
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab"><a href="#test19" onclick="fun()" id="civil1">PAPER PRESENTATION</a></li>
        <li class="tab"><a class="" href="#test20" onclick="fun()">BOB THE BUILDER</a></li>
        <li class="tab"><a href="#test21" onclick="fun()">BRIDGE BUILDING</a></li>
        <li class="tab"><a href="#test50" onclick="fun()">CADD'IZ</a></li>
        <li class="tab"><a href="#test51" onclick="fun()">PRO HACK</a></li>

      </ul>
    </div>
       <div class="card-content lighten-4">
      <div id="test19">
        <div class="row">
        	<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/tech/civilpaperpresentation.png" alt="Smiley face" class="img-responsive photo">
          </div>
           <div class="col-md-7"><p><span class="one" style="color: black;"><h1>PAPER PRESENTATION</h1>
   <h3>"The Material is paper . The Content isn't"</h3>
<h4>Rules:</h4>
 1. A maximum of only two members for each team is permitted. <br>
 2. Participants are requested to register in advance. <br>
 3. Abstract should not exceed one page and the presentation should not exceed 20 slides. <br>
 4. Last day for submission of the softcopy <b>( karigaala@citchennai.net )</b> will be prior to the day of presentation. <br>
 Participants are requested to bring along 2 hard copies of the submitted paper on the day of  the event. <br>
 5. A team can harbor students from different colleges , though participation of an individual in multiple events is not permitted. <br>
  6. The abstract mail should contain abstract, references, your email id and mobile number. <br>
 7. The decision of judges will be final and no argument or appeal will be entertained. <br>
 8. Any kind of plagiarism leads to immediate disqualification . <br>

<h4>Topics </h4>
     	The event is an open stage for the students to explore the topics of their own interest on the field of civil engineering .
( TOPICS ON GIS, STEEL BUILDINGS, GEOTECHNICAL STABILIZING, SMART CITY, CONCRETE TECHNOLOGY, TRANSPORTATION SYSTEM ARE ENCOURAGED )
  No priorities intended
</span></p></div>
        </div>
      </div>
      <div id="test20"><div class="row">
      	<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/tech/bobthebuilder.png" alt="Smiley face" class="img-responsive photo">
          </div>

          <div class="col-md-7"><p><span class="one" style="color: black;"><h1>BOB THE BUILDER</h1>
    	<h4>" For some people its Junk. For us, its Inventory"
The Budding Civil Engineers are tested on their skills to give life to an aesthetic structure out of the provided artifacts along with their ability to withstand. </h4>
   <h4>Rules:</h4>
1. Teams can have a maximum of 3 members. <br>
2. The materials will be provided by the co-ordinator. <br>
3. Task should be completed within the time limit. <br>
4. Stability of the structure would be checked on various grounds. <br>
5. Aesthetic appearance of the structure is also taken into account. <br>
6. Panel's decision is final.
</span></p></div>
        </div></div>
      <div id="test21"><div class="row">
      	<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/tech/bridgebuilding.png" alt="Smiley face" class="img-responsive photo">
          </div>

          <div class="col-md-7"><p><span class="one" style="color: black;"><h1>BRIDGE BUILDING</h1>
   	<h3>"It takes both the sides to build a bridge "
Bridging the distance between hardware and software the students are tested on their skills to design a bridge which pleases both economically and the design stability.</h3>
<h4>Rules:</h4>
 1. A Team can support a maximum of 2 members. <br>
2. Participants will be provided with a software to design a bridge. <br>
3. Make your design stable and economic.
</span></p></div>
        </div></div>
        <div id="test50"><div class="row">
      	<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/tech/caddiz.png" alt="Smiley face" class="img-responsive photo">
          </div>

          <div class="col-md-7"><p><span class="one" style="color: black;"><h1>CADD'IZ</h1>
            	<h3>" Are you a techno wizard? You think you have what it takes to crack the spells of tasks, mists of challenges CADD'IZ casts you with ? "</h3>

Round 1: Prelims will be a pencil & paper type round with topics from Engineering Graphics. <br>
Round 2: Qualified participants will be provided with pre-installed AutoCad systems where they're to draft a design for a provided set of dimensions.
</span></p></div>
        </div></div>
        <div id="test51"><div class="row">
      	<div class="col-md-1"></div>
          <div class="col-md-4">
            <img src="img/tech/prohack.png" alt="Smiley face" class="img-responsive photo">
          </div>

          <div class="col-md-7"><p><span class="one" style="color: black;"><h1>PRO HACK</h1>
<h3>"The purpose of a quiz is to make sure everyone is on the same page" <br>
Pack yourself prepared to face questions from every nook and corner of Civil Engineering. <br>
Throw your best stone , for ripples of your ability to switch between lateral and technical spectrum of what you have is where you throw your pebble at. <br></h3>
1. A Team can consist of a maximum of 2 members. <br>
2. Team members can be of different colleges. <br>
3. Panel's decision is final.
</span></p></div>
        </div></div>

        <div class="row">
         <center>
        	'<button type="button" class="btn btn-success btn-lg one" onclick="add()">ADD TO EVENT LIST</button></center>
        </div>
    </div>
  </div>
  </div>

<!--End-modal6-->

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

<!-- Event name DOM -->
<script type="text/javascript">
var ev;
var cat;

function def() {
	cat = event.srcElement.id;
	console.log(cat);
	switch (cat) {
		case "cse":
		case "csetxt":
			document.getElementById("cse1").click();
			break;

		case "ece":
		case "ecetxt":
			document.getElementById("ece1").click();
			break;

		case "mech":
		case "mechtxt":
			document.getElementById("mech1").click();
			break;

		case "eee":
		case "eeetxt":
			document.getElementById("eee1").click();
			break;

		case "mct":
		case "mcttext":
			document.getElementById("mct1").click();
			break;

		case "civil":
		case "civiltxt":
			document.getElementById("civil1").click();
			break;


	}
}

function fun() {
	ev = event.toElement.textContent.replace(/[^a-zA-Z0-9]/g,'');
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
