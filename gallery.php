<!DOCTYPE html>
  <html>
<head>
	<title>Takshashila|Gallery</title>
    <link rel="icon" href="ico.png"  sizes="32x32">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/normalize.min.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Tangerine|Audiowide|Bungee|Berkshire+Swash|Risque' rel='stylesheet'>
  <link rel="stylesheet" type="text/css"
        href="css/home/font.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
<link rel='stylesheet prefetch' href='https://code.getmdl.io/1.2.1/material.teal-red.min.css'>
<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"> -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->s
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<style>
    .user{
      width: 150px;
      margin-top: -130px;
      margin-left: 800px;
    }


body{
  background-color: black!important;
}
  header{
    background: black!important;
  }
  i{
    color: white!important;
  }
  .mdl-layout__header{
    box-shadow: 0px 0px 0px 0px!important;

  }
  .cont{
    padding-left: 25px;
    text-decoration: none;
    color: black;
  }
  .cont:hover{

    background-color: lightgrey !important;
  }
</style>

  <style>
  ::-webkit-scrollbar {
      width: 5px;
  }

  /* Track */
  ::-webkit-scrollbar-track {
      background: #efe9e9;
  }

  /* Handle */
  ::-webkit-scrollbar-thumb {
      background: #363535;
  }

  /* Handle on hover */
  ::-webkit-scrollbar-thumb:hover {
      background: #;
  }

  /*modal*/
  /* The Modal (background) */
  .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      padding-top: 100px; /* Location of the box */
      left: 0;
      top: 0%;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  }

  /* Modal Content */
  .modal-content {
      position: relative;
      top: 10%;
      background-color:transparent; ;
      margin: auto;
      padding: 0;
      /*border: 1px solid #888;*/
      width:75%;
      max-width: 500px;
      height: auto;
      /*box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);*/
      -webkit-animation-name: zoomInDown;
      -webkit-animation-duration: 0.7s;
      animation-name: zoomInDown;
      animation-duration: 0.7s
  }


  /* Add Animation */
  @-webkit-keyframes zoomInDown {
  from {
    opacity: 0;
    transform: scale3d(.1, .1, .1) translate3d(0, 10%, 0);
    animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }

  60% {
    opacity: 1;
    transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
}

  @keyframes zoomInDown {
  from {
    opacity: 0;
    transform: scale3d(.1, .1, .1) translate3d(0, 10%, 0);
    animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }

  60% {
    opacity: 1;
    transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
}
  /* The Close Button */
  .close {
      color: white;
      float: right;
      font-size: 28px;
      font-weight: bold;
      /*background: red;*/
  }

  .close:hover,
  .close:focus {
      color: red;
      text-decoration: none;
      cursor: pointer;
  }

  .modal-header {
      padding: 2px 16px;
      color: white;
  }

  .modal-body {padding: 2px 16px;}

    .modal-content img{
      width: 100%;
      height:auto;
    }


          #gallery_home2{
            visibility:hidden;
          }

    @media only screen and (max-width: 768px){

      #gallery_home{
        visibility:hidden;
      }


            #gallery_home2{
              visibility: visible;
            }

      .br{
                position: absolute;
        display: none;
      }

  .mom{

height: 150px!important;
width: 125px!important;
/* height: auto; */
/* width: 100%; */
}
    }
  </style>
</head>

<body>
    <div id="sidebar">
        <a id="gallery_home" href="index.php"><span class="home_out" style="position: absolute; top:0px; left: 0px; padding:15px">  <i class="material-icons" style="font-size:75px;">home</i></span>
          <p class="ga_text">Gallery</p>
        </a>
        <a id="gallery_home2" href="index.php"><span class="home_out" style="position: absolute; top:0px; left: 0px; padding:10px"><i class="material-icons" style="font-size:50px;">home</i></span></a>
      <div id="sidebar__portrait">
        <span class="br">
      <br><br><br>

        </span>
        <img class="mom" src="img/tk_black1.png" alt="Lorem Ipsum"/>
      </div>
      <p><h4 class="hr" style="font-family: 'Lobster', cursive; color: white;">Colour the future</h4></p>
      <div id="tki">
        <p id="texti"><br><br><br><br><br><br><br><br><br><br></p>
      </div>
         </div>


  <ul id="grid" class="clr">
    <li>
      <!-- <a href="#m1"> -->
        <div class="hexagon"  onclick="m1()">
          <img src="img/1.jpg" alt="Lorem Ipsum" />
          <div class="overlay"></div>
        </div>
      <!-- </a> -->
    </li>
    <li>
        <div class="hexagon" onclick="m2()">
          <img src="img/2.jpg" alt="Lorem Ipsum"/>
          <div class="overlay"></div>
        </div>

    </li>
    <li>
        <div class="hexagon"  onclick="m3()">
          <img src="img/3.jpg" alt="Lorem Ipsum"/>
          <div class="overlay"></div>
        </div>
    </li>
    <li>
        <div class="hexagon" onclick="m4()">
          <img src="img/4.jpg" alt="Lorem Ipsum"/>
          <div class="overlay"></div>
        </div>
    </li>
    <li>
        <div class="hexagon" onclick="m5()">
          <img src="img/25.jpg" alt="Lorem Ipsum"/>
          <div class="overlay"></div>
        </div>
    </li>
    <li>
        <div class="hexagon" onclick="m6()">
          <img src="img/6.jpg" alt="Lorem Ipsum"/>
          <div class="overlay"></div>
        </div>
    </li>
    <li>
        <div class="hexagon" onclick="m7()">
          <img src="img/7.jpg" alt="Lorem Ipsum"/>
          <div class="overlay"></div>
        </div>
    </li>
    <li>
        <div class="hexagon" onclick="m8()">
          <img src="img/8.jpg" alt="Lorem Ipsum"/>
          <div class="overlay"></div>
        </div>
    </li>
    <li>
        <div class="hexagon" onclick="m9()">
          <img src="img/9.jpg" alt="Lorem Ipsum"/>
          <div class="overlay"></div>
        </div>
    </li>
    <li>
        <div class="hexagon" onclick="m10()">
          <img src="img/10.jpg" alt="Lorem Ipsum"/>
          <div class="overlay"></div>
        </div>
    </li>
    <li>
        <div class="hexagon" onclick="m11()">
          <img src="img/11.jpg" alt="Lorem Ipsum"/>
          <div class="overlay"></div>
        </div>
    </li>
    <li>
        <div class="hexagon" onclick="m12()">
          <img src="img/12.jpg" alt="Lorem Ipsum"/>
          <div class="overlay"></div>
        </div>
    </li>
    <li>
        <div class="hexagon" onclick="m13()">
          <img src="img/13.jpg" alt="Lorem Ipsum"/>
          <div class="overlay"></div>
        </div>
    </li>
    <li>
        <div class="hexagon" onclick="m14()">
          <img src="img/14.jpg" alt="Lorem Ipsum"/>
          <div class="overlay"></div>
        </div>
    </li>
    <li>
        <div class="hexagon" onclick="m15()">
          <img src="img/15.jpg" alt="Lorem Ipsum"/>
          <div class="overlay"></div>
        </div>
    </li>

    <li>
      <!-- <a href="#m1"> -->
        <div class="hexagon"  onclick="m16()">
          <img src="img/16.jpg" alt="Lorem Ipsum" />
          <div class="overlay"></div>
        </div>
      <!-- </a> -->
    </li>
    <li>
        <div class="hexagon" onclick="m17()">
          <img src="img/17.jpg" alt="Lorem Ipsum"/>
          <div class="overlay"></div>
        </div>

    </li>
    <li>
        <div class="hexagon"  onclick="m18()">
          <img src="img/18.jpg" alt="Lorem Ipsum"/>
          <div class="overlay"></div>
        </div>
    </li>
    <li>
        <div class="hexagon" onclick="m19()">
          <img src="img/19.jpg" alt="Lorem Ipsum"/>
          <div class="overlay"></div>
        </div>
    </li>
    <li>
        <div class="hexagon" onclick="m20()">
          <img src="img/20.jpg" alt="Lorem Ipsum"/>
          <div class="overlay"></div>
        </div>
    </li>
    <li>
        <div class="hexagon" onclick="m21()">
          <img src="img/21.jpg" alt="Lorem Ipsum"/>
          <div class="overlay"></div>
        </div>
    </li>
    <li>
        <div class="hexagon" onclick="m22()">
          <img src="img/22.jpg" alt="Lorem Ipsum"/>
          <div class="overlay"></div>
        </div>
    </li>
    <li>
        <div class="hexagon" onclick="m23()">
          <img src="img/23.jpg" alt="Lorem Ipsum"/>
          <div class="overlay"></div>
        </div>
    </li>
    <li>
        <div class="hexagon" onclick="m24()">
          <img src="img/24.jpg" alt="Lorem Ipsum"/>
          <div class="overlay"></div>
        </div>
    </li>
    <li>
        <div class="hexagon" onclick="m25()">
          <img src="img/5.jpg" alt="Lorem Ipsum"/>
          <div class="overlay"></div>
        </div>
    </li>
    <li>
        <div class="hexagon" onclick="m26()">
          <img src="img/26.jpg" alt="Lorem Ipsum"/>
          <div class="overlay"></div>
        </div>
    </li>
    <li>
        <div class="hexagon" onclick="m27()">
          <img src="img/27.jpg" alt="Lorem Ipsum"/>
          <div class="overlay"></div>
        </div>
    </li>
    <li>
        <div class="hexagon" onclick="m28()">
          <img src="img/28.jpg" alt="Lorem Ipsum"/>
          <div class="overlay"></div>
        </div>
    </li>
    <li>
        <div class="hexagon" onclick="m29()">
          <img src="img/29.jpg" alt="Lorem Ipsum"/>
          <div class="overlay"></div>
        </div>
    </li>
    <li>
        <div class="hexagon" onclick="m30()">
          <img src="img/30.jpg" alt="Lorem Ipsum"/>
          <div class="overlay"></div>
        </div>
    </li>

  </ul>

<!-- Modal -->
<div id="myModal" class="modal">

<!-- Modal content -->
<div class="modal-content" id="modal1">
  <span class="close" >&times;</span>
  <img src="img/1.jpg" alt="">
</div>
</div>

<!-- modal2 -->
<div id="myModal2" class="modal">

<!-- Modal content -->
<div class="modal-content" id="modal2">
<div class="modal-body">
  <span class="close" id="close2">&times;</span>
  <img src="img/2.jpg" alt="">
</div>
</div>
</div>

<!-- modal2 -->
<div id="myModal3" class="modal">

<!-- Modal content -->
<div class="modal-content" id="modal3">
<div class="modal-body">
  <span class="close" id="close3">&times;</span>
  <img src="img/3.jpg" alt="">
</div>
</div>
</div>

<!-- modal2 -->
<div id="myModal4" class="modal">

<!-- Modal content -->
<div class="modal-content" id="modal4">
<div class="modal-body &#10006;">
  <span class="close" id="close4">&times;</span>
  <img src="img/4.jpg" alt="">
</div>
</div>
</div>

<!-- modal2 -->
<div id="myModal5" class="modal">

<!-- Modal content -->
<div class="modal-content" id="modal5">
<div class="modal-body">
  <span class="close" id="close5">&times;</span>
  <img src="img/25.jpg" alt="">
</div>
</div>
</div>

<!-- modal2 -->
<div id="myModal6" class="modal">

<!-- Modal content -->
<div class="modal-content" id="modal6">
<div class="modal-body">
  <span class="close" id="close6">&times;</span>
  <img src="img/6.jpg" alt="">
</div>
</div>
</div>

<!-- modal2 -->
<div id="myModal7" class="modal">

<!-- Modal content -->
<div class="modal-content" id="modal7">
<div class="modal-body">
  <span class="close" id="close7">&times;</span>
  <img src="img/7.jpg" alt="">
</div>
</div>
</div>

<!-- modal2 -->
<div id="myModal8" class="modal">

<!-- Modal content -->
<div class="modal-content" id="modal8">
<div class="modal-body">
  <span class="close" id="close8">&times;</span>
  <img src="img/8.jpg" alt="">
</div>
</div>
</div>

<!-- modal2 -->
<div id="myModal9" class="modal">

<!-- Modal content -->
<div class="modal-content" id="modal9">
<div class="modal-body">
  <span class="close" id="close9">&times;</span>
  <img src="img/9.jpg" alt="">
</div>
</div>
</div>

<!-- modal2 -->
<div id="myModal10" class="modal">

<!-- Modal content -->
<div class="modal-content" id="modal10">
<div class="modal-body">
  <span class="close" id="close10">&times;</span>
  <img src="img/10.jpg" alt="">
</div>
</div>
</div>

<!-- modal2 -->
<div id="myModal11" class="modal">

<!-- Modal content -->
<div class="modal-content" id="modal11">
<div class="modal-body">
  <span class="close" id="close11">&times;</span>
  <img src="img/11.jpg" alt="">
</div>
</div>
</div>

<!-- modal2 -->
<div id="myModal12" class="modal">

<!-- Modal content -->
<div class="modal-content" id="modal12">
<div class="modal-body">
  <span class="close" id="close12">&times;</span>
  <img src="img/12.jpg" alt="">
</div>
</div>
</div>

<!-- modal2 -->
<div id="myModal13" class="modal">

<!-- Modal content -->
<div class="modal-content" id="modal13">
<div class="modal-body">
  <span class="close" id="close13">&times;</span>
  <img src="img/13.jpg" alt="">
</div>
</div>
</div>

<!-- modal2 -->
<div id="myModal14" class="modal">

<!-- Modal content -->
<div class="modal-content" id="modal14">
<div class="modal-body">
  <span class="close" id="close14">&times;</span>
  <img src="img/14.jpg" alt="">
</div>
</div>
</div>

<!-- modal2 -->
<div id="myModal15" class="modal">

<!-- Modal content -->
<div class="modal-content" id="modal15">
<div class="modal-body">
  <span class="close" id="close15">&times;</span>
  <img src="img/15.jpg" alt="">
</div>
</div>
</div>

<div id="myModal16" class="modal">

<!-- Modal content -->
<div class="modal-content" id="modal16">
<div class="modal-body">
  <span class="close" id="close16">&times;</span>
  <img src="img/16.jpg" alt="">
</div>
</div>
</div>

<!-- modal2 -->
<div id="myModal17" class="modal">

<!-- Modal content -->
<div class="modal-content" id="modal17">
<div class="modal-body">
  <span class="close" id="close17">&times;</span>
  <img src="img/17.jpg" alt="">
</div>
</div>
</div>

<!-- modal2 -->
<div id="myModal18" class="modal">

<!-- Modal content -->
<div class="modal-content" id="modal18">
<div class="modal-body">
  <span class="close" id="close18">&times;</span>
  <img src="img/18.jpg" alt="">
</div>
</div>
</div>

<!-- modal2 -->
<div id="myModal19" class="modal">

<!-- Modal content -->
<div class="modal-content" id="modal19">
<div class="modal-body &#10006;">
  <span class="close" id="close19">&times;</span>
  <img src="img/19.jpg" alt="">
</div>
</div>
</div>

<!-- modal2 -->
<div id="myModal20" class="modal">

<!-- Modal content -->
<div class="modal-content" id="modal20">
<div class="modal-body">
  <span class="close" id="close20">&times;</span>
  <img src="img/20.jpg" alt="">
</div>
</div>
</div>

<!-- modal2 -->
<div id="myModal21" class="modal">

<!-- Modal content -->
<div class="modal-content" id="modal21">
<div class="modal-body">
  <span class="close" id="close21">&times;</span>
  <img src="img/21.jpg" alt="">
</div>
</div>
</div>

<!-- modal2 -->
<div id="myModal22" class="modal">

<!-- Modal content -->
<div class="modal-content" id="modal22">
<div class="modal-body">
  <span class="close" id="close22">&times;</span>
  <img src="img/22.jpg" alt="">
</div>
</div>
</div>

<!-- modal2 -->
<div id="myModal23" class="modal">

<!-- Modal content -->
<div class="modal-content" id="modal23">
<div class="modal-body">
  <span class="close" id="close23">&times;</span>
  <img src="img/23.jpg" alt="">
</div>
</div>
</div>

<!-- modal2 -->
<div id="myModal24" class="modal">

<!-- Modal content -->
<div class="modal-content" id="modal24">
<div class="modal-body">
  <span class="close" id="close24">&times;</span>
  <img src="img/24.jpg" alt="">
</div>
</div>
</div>

<!-- modal2 -->
<div id="myModal25" class="modal">

<!-- Modal content -->
<div class="modal-content" id="modal25">
<div class="modal-body">
  <span class="close" id="close25">&times;</span>
  <img src="img/5.jpg" alt="">
</div>
</div>
</div>

<!-- modal2 -->
<div id="myModal26" class="modal">

<!-- Modal content -->
<div class="modal-content" id="modal26">
<div class="modal-body">
  <span class="close" id="close26">&times;</span>
  <img src="img/26.jpg" alt="">
</div>
</div>
</div>

<!-- modal2 -->
<div id="myModal27" class="modal">

<!-- Modal content -->
<div class="modal-content" id="modal27">
<div class="modal-body">
  <span class="close" id="close27">&times;</span>
  <img src="img/27.jpg" alt="">
</div>
</div>
</div>

<!-- modal2 -->
<div id="myModal28" class="modal">

<!-- Modal content -->
<div class="modal-content" id="modal28">
<div class="modal-body">
    <span class="close" id="close28">&times;</span>
  <img src="img/28.jpg" alt="">

</div>
</div>
</div>

<!-- modal2 -->
<div id="myModal29" class="modal">

<!-- Modal content -->
<div class="modal-content" id="modal29">
<div class="modal-body">
  <span class="close" id="close29">&times;</span>
  <img src="img/29.jpg" alt="">
</div>
</div>
</div>

<!-- modal2 -->
<div id="myModal30" class="modal">

<!-- Modal content -->
<div class="modal-content" id="modal30">
<div class="modal-body">
  <span class="close" id="close30">&times;</span>
  <img src="img/30.jpg" alt="">
</div>
</div>
</div>


<!--Modal description -->
  <script src='https://code.getmdl.io/1.2.1/material.min.js'></script>
<script src="js/gallery.js"></script>
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
