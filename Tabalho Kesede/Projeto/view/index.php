<html>

<head>
<title>Novo Cliente</title>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="..\bootstrap\jquery\jquery-213.js"></script>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="../style/style.css">
</head>

<body>
<?php
    include('Menu.php');

?>
    <center>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="..\img\promocao.png" alt="" id="img1">
      <img src="..\img\corona.png" alt="" id="img1">
    </div>


    <div class="item">
      <img src="..\img\admitindo.png" alt="New " id="img2">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </center>

</body>
</html>
