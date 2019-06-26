<!DOCTYPE html>
<html lang="en">
<head>
  <title>Takshashila|Proshows</title>
  <meta charset="utf-8">
  <link rel="icon" href="ico.png"  sizes="32x32">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style media="screen">
  a:hover{
    text-decoration: none!important;
  }
    body{
      overflow-y: auto;
    }
    .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{
      border-top: none;
    }
    .home_out{
      padding: 10px 10px 10px 10px;
      background-color: deepskyblue;
      position: absolute;
      top: 20px;
      left: 20px;
      z-index: 10;
      border-radius: 50%;
    }
    .home_bt{
      font-size: 60px;
      color: white;
    }
  </style>
</head>
<body>

  <a href="index.php"><span class="home_out"><i class="fa fa-home home_bt" aria-hidden="true"></i></span></a>

<div class="container-fluid" style="padding-left:0px;padding-right:0px;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
    <!-- Indicators -->
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/proshows/dj night.jpg" alt="Los Angeles" style="width:100%;" class="img-responsive">
      </div>

      <div class="item">
        <img src="img/proshows/live in concert.jpg" alt="Chicago" style="width:100%;" class="img-responsive">
      </div>

      <div class="item">
        <img src="img/proshows/red carpet.jpg" alt="New york" style="width:100%;" class="img-responsive">
      </div>

      <div class="item">
        <img src="img/proshows/stand up.jpg" alt="New york" style="width:100%;" class="img-responsive">
      </div>
    </div>

  </div>
</div>

<!--mobile view-->
<div class="container-fluid">
  <center><h2>Proshows</h2></center>
  <table class="table">
<tbody>
  <tr>
    <td><a href="#modal1" class="modal-trigger"><img src="4/q.png" style="width:90px;"alt=""></a></td>
    <td><a href="#modal1" class="modal-trigger"><h3 style="padding-top:10px;">DJ Night</h3></a></td>
  </tr>

    <tr>
      <td><a href="#modal2" class="modal-trigger"><img src="4/w.png" style="width:90px;"alt=""></a></td>
      <td><a href="#modal2" class="modal-trigger"><h3 style="padding-top:10px;">Live in concert</h3></a></td>
    </tr>

      <tr>
        <td><a href="#modal3" class="modal-trigger"><img src="4/e.png" style="width:90px;"alt=""></a></td>
        <td><a href="#modal3" class="modal-trigger"><h3 style="padding-top:10px;">Red carpet</h3></a></td>
      </tr>

            <tr>
              <td><a href="#modal3" class="modal-trigger"><img src="4/r.png" style="width:90px;"alt=""></a></td>
              <td><a href="#modal3" class="modal-trigger"><h3 style="padding-top:10px;">Stand up comedy</h3></a></td>
            </tr>
</tbody>
</table>
</div>
<!--mobile view-->
</body>
</html>
