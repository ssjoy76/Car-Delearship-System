<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
<!--   <script src="js/bootstrap.min.js"></script> -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/w3.css">
</head>
<body>

<!-- NAVBAR -->
<head>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">LEAVE MANAGEMENT</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php" >Home</a></li>
        <!-- <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">EMPLOYEE <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">CO</a></li>
            <li><a href="#">MANAGER</a></li>
            <li><a href="#">STAFF</a></li>
          </ul>
        </li> -->
        <!-- <li><a href="application.php">APPLICATION</a></li>
        <li><a href="lview.php">APPLICATION VIEW</a></li>
        <li><a href="Aview.php">ADMIN VIEW</a></li> -->
        <!-- <li><a href="contact.php">CONTACT</a></li>
        <li><a href="about.php">ABOUT</a></li> -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="userf.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
        <li><a href="logina.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>


</head>

<!-- Slider -->

<div class="container-fluid">
   
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
        <img src="s1.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="s2.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="s3.jpg" alt="New york" style="width:100%;">
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
</div>


<!-- Footer -->
  <footer class="w3-container w3-padding-32 w3-grey text-center">  
    <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p class="text-center">Powered by <a href="" title="" target="_blank" class="w3-hover-text-green">Methon</a></p>
  </footer>

</body>
</html>


