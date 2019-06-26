<?php require 'takshashila/dbconnect.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
     <meta name="viewport" content="user-scalable=0 ">
    <title>Takshashila|Home</title>
    <!-- <link rel="stylesheet" href="css/home/style.css"> -->
<link rel="stylesheet" type="text/css"
    href="css/home/font.css"/>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" />
      <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
      <link rel="icon" href="ico.png"  sizes="32x32">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


    <style >
    
        a{
      text-decoration: none!important;
    }

    .tk{

      color: white;
      text-align: center;
      /* width: 100%; */
      height: 300px;
padding: 2%;
    }

    .tk span{
      font-family: 'Prakrta' ;
font-size: 100px;
    }

    .pulse {
  /* position: relative; */
  /* top: 75%; */
  /* left: 47%; */
  width: 8%;
  height: 60px;
  /* line-height: 72px; */
  font-family: sans-serif;
  font-weight: 700;
  font-size: 34px;
  text-align: center;
  z-index: 100000;
  margin-left:auto;
  margin-right: auto;
  border: solid;
  border-color: white!important;
  /* border: solid #ffffff;
border-radius: 100%;
  border-width: 2px; */
}

.pulse:hover{
  /* color:black!important;
  background-color: white; */

  transition: all .4s ease 0s;
  -webkit-transition: all .4s ease 0s;
  -moz-transition: all .4s ease 0s;
  transform: scale(1.5);
  -webkit-transform: scale(1.5);
  -moz-transform: scale(1.5);

  cursor: pointer;

}

    .col-xs-1-10,
    .col-sm-1-10 {
    position: relative;
    min-height: 1px;
    }

    .col-xs-1-10 {
    width: 10%;
    float: left;
    }
    canvas {
        position: absolute;
        left: 0px;
        top: 0px;
        z-index: -5;
          display: block;
  width: 102vw;
  height: 104vh;
  cursor: pointer;
    }

    .move{
	transition: all .4s ease 0s;
  -webkit-transition: all .4s ease 0s;
  -moz-transition: all .4s ease 0s;
}
.move:hover{
	transform: scale(1.5);
  -webkit-transform: scale(1.5);
  -moz-transform: scale(1.5);

  cursor: pointer;
}

/* (1366x768) WXGA Display */
@media  screen and (device-width: 1366px) and (device-height: 637px) {
      .tk{
    padding-top: 0%;
    zoom:56%;
  }}

@media screen and (device-width: 412px) and (device-height: 732px){
  .tk{
    padding-top: 20%;
    zoom:150%;
  }

  .pulse{
    font-size: 50px;
  width: 27%;
  height: 90px;
  border-color: white!important;
  border: solid;
  border-width: 5px

  }

}

@media screen and (device-width: 768px) and (device-height: 1024px){
  .tk{
    padding-top: 15%;
    zoom:150%;
  }
  .pulse{
    font-size: 50px;
  width: 27%;
  height: 90px;
  border-color: white!important;
  border: solid;
  border-width: 5px

  }
}

@media screen and (device-width: 320px) and (device-height: 476px){
  .tk{
    padding-top: 20%;
    zoom:150%;
  }
  .pulse{
    font-size: 50px;
  width: 27%;
  height: 90px;
  border-color: white!important;
  border: solid;
  border-width: 5px

  }
}


@media screen and (device-width: 320px) and (device-height: 568px){
  .tk{
    padding-top: 30%;
    zoom:150%;
  }

  .pulse{
    font-size: 100px;
  width: 27%;
  height: 144px;
  border-color: white!important;
  border: solid;
  border-width: 5px

  }
}

    @media screen and (device-width: 320px) and (device-height: 480px){
      .tk{
        padding-top: 30%;
        zoom:150%;
      }
      .pulse{
        font-size: 50px;
      width: 27%;
      height: 90px;
      border-color: white!important;
      border: solid;
      border-width: 5px

      }
    }


    @media screen and (device-width: 375px) and (device-height: 667px){
      .tk{
        padding-top: 30%;
        zoom:150%;
      }

      .pulse{
        font-size: 50px;
      width: 27%;
      height: 90px;
      border-color: white!important;
      border: solid;
      border-width: 5px

      }

    }
    
        @media screen and (device-width: 1024px) and (device-height: 1366px){
      .tk{
        padding-top: 10%;
        zoom:125%;
      }

      .pulse{
        font-size: 50px;
      width: 27%;
      height: 90px;
      border-color: white!important;
      border: solid;
      border-width: 5px

      }

    }

    @media screen and (device-width: 360px) and (device-height: 640px){
      .tk{
        padding-top: 20%;
      }

      .pulse{
        font-size: 50px;
      width: 27%;
      height: 90px;
      border-color: white!important;
      border: solid;
      border-width: 5px

      }

      footer{
        bottom: 70px!important;
      }

      .tk span{
        font-size: 150px;
      }

    }


    @media screen and (device-width: 320px) and (device-height: 480px) {
  .tk{
    padding-top: 10%;
  }
  .pulse{
    font-size: 50px;
  width: 27%;
  height: 90px;
  border-color: white!important;
  border: solid;
  border-width: 5px

  }
}
    @media (min-width: 768px) {
    .col-sm-1-10 {
      width: 10%;
      float: left;
    }

    footer{
      bottom: 20px!important;
    }


    }

    @media (min-width: 992px) {
    .col-md-1-10 {
      width: 10%;
      float: left;
    }
    }

    @media (min-width: 1200px) {
    .col-lg-1-10 {
      width: 10%;
      float: left;
    }
    }

    @media only screen
    and (device-width : 375px)
    and (device-height : 812px){
      .tk{
        padding-top: 30%;
        zoom:150%;
      }

      .pulse{
        font-size: 50px;
      width: 27%;
      height: 90px;
      border-color: white!important;
      border: solid;
      border-width: 5px

      }

    }
    canvas {

}

    </style>
  </head>
  <body style="overflow:hidden; background:black;">
    <canvas id="c"></canvas>
<div style="z-index:10000; height:100%">
<div class="tk">
  <img src="img/cit logo.png" style="height: 111px;
    width: auto;" alt="Chennai Institute of Technology"> <br>
  <i style="font-size:20px">proudly presents...</i> <br>
  <br>
    <span >Takshashila</span> <br>
    <br>
    <p style="font-size:36px;font-family: cursive;">Colour the future</p>
<p style="font-size:36px; font-family: cursive;">March 1-3</p> <br>
 <br>

    <?php
      if(isset($_SESSION['idvalue'])){
        ?>

        <div class="pulse"><a href="logout.php">
          <p style="margin-top:0px; color:white;">logout</p></a>
        </div>
        <?php
      }else{
      ?>
      <div class="pulse"><a href="login.html">
      <p style="margin-top:0px; color:white;">login</p></a>
      </div>
      <?php

      }

      ?>

    </div>
    <footer style="position:absolute; width:100%; bottom:5px;">
      <div class="row">
        <div class="col-xs-1-10 move">
          <div style="margin-left:35%;">
          <a href="about.php" style="color:white!important;"><i class="fa fa-users"  aria-hidden="true" style="font-size: 40px; color: white!important"></i><p style="font-size:16px;font-family:monospace; white-space: nowrap;margin-left:-10px;">About Us</p></a>
          </div>
        </div>
        <div class="col-xs-1-10 move">
          <div style="margin-left:32%;">
          <a href="event.php" style="color:white!important;"><i class="fa fa-puzzle-piece"  aria-hidden="true" style="font-size: 40px; color: white!important"></i><p style="font-size:16px;font-family:monospace; white-space: nowrap;margin-left:-10px;">Events</p></a>
          </div>
        </div>
        <div class="col-xs-1-10 move">
          <div style="margin-left:32%;">
          <a href="proshow.php" style="color:white!important;"><i class="fa fa-star-half-o"  aria-hidden="true" style="font-size: 40px; color: white!important"></i><p style="font-size:16px;font-family:monospace; white-space: nowrap;margin-left:-10px;">Proshows</p></a>
          </div>
        </div>
        <div class="col-xs-1-10 move">
          <div style="margin-left:32%;">
          <a href="ticket.php" style="color:white!important;"><i class="fa fa-ticket"  aria-hidden="true" style="font-size: 40px; color: white!important"></i><p style="font-size:16px;font-family:monospace; white-space: nowrap;margin-left:-10px;">Tickets</p></a>
          </div>
        </div>
        <div class="col-xs-1-10 move">
          <div style="margin-left:32%;">
          <a href="schedule.php" style="color:white!important;"><i class="fa fa-clock-o"  aria-hidden="true" style="font-size: 40px; color: white!important"></i><p style="font-size:16px;font-family:monospace; white-space: nowrap;margin-left:-15px;">Schedule</p></a>
          </div>
        </div>
         <div class="col-xs-1-10 move">
           <div style="margin-left:32%;">
           <a href="spons.php" style="color:white!important;"><i class="fa fa-handshake-o"  aria-hidden="true" style="font-size: 40px; color: white!important"></i><p style="font-size:16px;font-family:monospace; white-space: nowrap;margin-left:-5px;">Sponsors</p></a>
           </div>
        </div>
          <div class="col-xs-1-10 move">
            <div style="margin-left:32%;">
            <a href="gallery.php" style="color:white!important;"><i class="fa fa-picture-o"  aria-hidden="true" style="font-size: 40px; color: white!important"></i><p style="font-size:16px;font-family:monospace; white-space: nowrap;margin-left:-5px;">Gallery</p></a>
            </div>
        </div>
        <div class="col-xs-1-10 move">
          <div style="margin-left:32%;">
          <a href="hospitality.php" style="color:white!important;"><i class="fa fa-heartbeat"  aria-hidden="true" style="font-size: 40px; color: white!important"></i><p style="font-size:16px;font-family:monospace; white-space: nowrap;margin-left:-22px;">Hospitality</p></a>
          </div>
        </div>
        <div class="col-xs-1-10 move">
          <div style="margin-left:32%;">
          <a href="contact.php" style="color:white!important;"><i class="fa fa-phone"  aria-hidden="true" style="font-size: 40px; color: white!important"></i><p style="font-size:16px;font-family:monospace; white-space: nowrap;margin-left:-18px;">Contact Us</p></a>
          </div>
        </div>
        <div class="col-xs-1-10 move">
          <div style="margin-left:32%;">
          <a href="cause.php" style="color:white!important;"><i class="fa fa-question-circle-o"  aria-hidden="true" style="font-size: 40px; color: white!important"></i><p style="font-size:16px;font-family:monospace; white-space: nowrap;margin-left:-4px;">Cause</p></a>
          </div>
        </div>
      </div>

    </footer>
</div>
   <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/animejs/1.0.0/anime.min.js'></script>
<script  src="js/BG.js"></script>

  </body>

</html>
