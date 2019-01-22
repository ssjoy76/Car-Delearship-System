

<?php 

include_once("connection.php");

session_start();

echo isset( $_SESSION['s'])? $_SESSION['s']:"";

        unset( $_SESSION['s']);






        $userid=$_SESSION['userid'];

// $sql="SELECT id,sid,item_id,item_name,quantity,total FROM `order` ";


$sql="SELECT * FROM `bill` where userid='$userid'";
$data=[];
$rResult = $conn->query($sql);

if ($rResult->num_rows > 0) {

 while($row = $rResult->fetch_assoc()) {
        $data[]=$row;
    }
}


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
      <a class="navbar-brand" href="#">CAR DEALERSHIP</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="admin.php">Home</a></li>
       <!--  <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Car Detials <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="CarViewInsert.php">CAR INFORMATION Add</a></li>
            <li><a href="carView.php">CAR INFORMATION View</a></li>
            
          </ul>
        </li> -->
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Order <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <!-- <li><a href="Aview.php">Add order</a></li> -->
             <li><a href="userOrderView.php">Order View</a></li>
            
          </ul>
        </li>

  

         <li class="dropdown" style="float: right;">
          <?php foreach ($data as $key => $value){ ?>
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $value['name']; ?> </a>
         <?php } ?>
        </li>

        <!-- <li><a href="application.php">APPLICATION</a></li>
        <li><a href="lview.php">APPLICATION VIEW</a></li>
        <li><a href="Aview.php">ADMIN VIEW</a></li> -->
        <!-- <li><a href="userfa.php">ADD USER</a></li> -->
        <!-- <li><a href="about.php">ABOUT</a></li> -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="userf.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
        <li><a href="logoutUser.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
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
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="s4.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="s2.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="s3.jpg" alt="New york" style="width:100%;">
      </div>
      <div class="item">
        <img src="s1.jpg" alt="New york" style="width:100%;">
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
  <p class="text-center">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">Methon</a></p>
  </footer>

</body>
</html>


<script type="text/javascript"> 

// Not go  back Page code


history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
</script>

