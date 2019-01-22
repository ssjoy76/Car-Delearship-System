
<?php 
 include_once ('connection.php'); 
  $m=$_POST['carName'];
  $xx=$_POST['carName2'];



  $query = "select *from gari WHERE id='$m' ";  
                    $rs = mysqli_query($conn,$query) or die("Error : ".mysqli_error());
                    $row=mysqli_fetch_assoc($rs);



   
     $query2 = "select *from gari WHERE id='$xx' ";  
                    $rs2 = mysqli_query($conn,$query2) or die("Error : ".mysqli_error());
                    $row2=mysqli_fetch_assoc($rs2);                 



$Stock_no11=$row['Stock_no'];
$Stock_no22=$row2['Stock_no'];

// $query3 = "select *from key WHERE Stock_no2='$Stock_no11' ";  
//                     $rs3 = mysqli_query($conn,$query3) or die("Error : ".mysqli_error());
//                     $row3=mysqli_fetch_assoc($rs3); 



// $query4 = "select *from key WHERE Stock_no2='$Stock_no22' ";  
//                     $rs4 = mysqli_query($conn,$query4) or die("Error : ".mysqli_error());
//                     $row4=mysqli_fetch_assoc($rs4); 


 ?>


<title>Compare View</title>

<head>

<link rel="stylesheet" href="all.css"> 
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <meta name="format-detection" content="telephone=no" />
      <meta name="apple-mobile-web-app-capable" content="yes" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />

<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style2.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="slider1.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="mc.css">

<!-- footer css -->
<link rel="stylesheet" href="foot.css">
<!--// footer css -->


<!-- js -->
   <script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>

<!-- start-smoth-scrolling -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!--- start-rate-->
<script src="js/jstarbox.js"></script>
    
<!-- other -->

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <script src="js/jquery.min.js"></script>
  
<link rel="stylesheet" href="css/style_Search.css">
<!-- <link rel="stylesheet" href="css1/w3.css"> -->
<link rel="stylesheet" href="search.css"> 
<!-- other -->

</head>

<a href="offer.html"><img src="images/download.png" class="img-head" alt=""></a>
<div class="header">

        <div class="container">
            
            <div class="logo">
                <h1 ><a href="index.php">CAR DEALERSHIP<span>The Best Super Car shop</span></a></h1>
            </div>
            <div class="head-t">
                <ul class="card">
                    
                    <li><a href="loginDirect.php" ><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
                    <li><a href="register.php" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li>
                   <!--  <li><a href="#" ><i class="fa fa-ship" aria-hidden="true"></i>Shipping</a></li> -->
                </ul>   
            </div>
            
            <div class="header-ri">
                <ul class="social-top">
                    <li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
                    <li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
                    <li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
                    <li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
                </ul>   
            </div>
        

                <div class="nav-top">
                    <nav class="navbar navbar-default">
                    
                    <div class="navbar-header nav_2">
                        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        

                    </div>
            <!--Start Menu.... -->
                     
                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <ul class="nav navbar-nav">
                            <li class=" active"><a href="index.php" class="hyper "><span>Home</span></a></li>  
                            
                            <li class="dropdown">
                                <a href="buy.php" class="dropdown-toggle hyper" ><span>BUY</span></a>
                                <!-- <ul class="dropdown-menu multi">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <ul class="multi-column-dropdown">
            
                                                <li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Water & Beverages</a></li>
                                                <li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Fruits & Vegetables</a></li>
                                                <li><a href="kitchen.html"> <i class="fa fa-angle-right" aria-hidden="true"></i>Staples</a></li>
                                                <li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Branded Food</a></li>
                                        
                                            </ul>
                                        
                                        </div>
                                        <div class="col-sm-3">
                                        
                                            <ul class="multi-column-dropdown">
                                                <li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Breakfast &amp; Cereal</a></li>
                                                <li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Snacks</a></li>
                                                <li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Spices</a></li>
                                                <li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Biscuit &amp; Cookie</a></li>
                                                <li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Sweets</a></li>
                                        
                                            </ul>
                                        
                                        </div>
                                        <div class="col-sm-3">
                                        
                                            <ul class="multi-column-dropdown">
                                                <li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Pickle & Condiment</a></li>
                                                <li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Instant Food</a></li>
                                                <li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Dry Fruit</a></li>
                                                <li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Tea &amp; Coffee</a></li>
                                        
                                            </ul>
                                        </div>
                                        <div class="col-sm-3 w3l">
                                            <a href="kitchen.html"><img src="images/me.png" class="img-responsive" alt=""></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>  
                                </ul> -->
                            </li>
                            <li class="dropdown">
                            
                                <a href="compare.php" class="dropdown-toggle hyper" data-toggle="dropdown" ><span> Compare </span></a>
                                
                            </li>
                            <!-- <li class="dropdown">
                                <a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span>Sell a Car<b class="caret"></b></span></a>
                                <ul class="dropdown-menu multi multi2">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Cleaning Accessories</a></li>
                                                <li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>CookWear</a></li>
                                                <li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Detergents</a></li>
                                                <li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Gardening Needs</a></li>
                                        
                                            </ul>
                                        
                                        </div>
                                        <div class="col-sm-3">
                                            
                                            <ul class="multi-column-dropdown">
                                                <li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Kitchen & Dining</a></li>
                                                <li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>KitchenWear</a></li>
                                                <li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Pet Care</a></li>
                                                <li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Plastic Wear</a></li>
                                        
                                            </ul>
                                        
                                        </div>
                                        <div class="col-sm-3">
                                        
                                            <ul class="multi-column-dropdown">
                                                <li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Pooja Needs</a></li>
                                                <li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Serveware</a></li>
                                                <li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Safety Accessories</a></li>
                                                <li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Festive Decoratives </a></li>
                                        
                                            </ul>
                                        </div>
                                        <div class="col-sm-3 w3l">
                                            <a href="hold.html"><img src="images/me2.png" class="img-responsive" alt=""></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>  
                                </ul>
                            </li> -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span>Learn More<b class="caret"></b></span></a>
                                <ul class="dropdown-menu multi multi2">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <ul class="multi-column-dropdown">
                                              <li><a href="carTips.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Car Tips</a></li>
                                               <!--  <li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>CookWear</a></li>
                                                <li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Detergents</a></li>
                                                <li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Gardening Needs</a></li> -->
                                        
                                            </ul>
                                        
                                        </div>
                                        <!-- <div class="col-sm-3">
                                            
                                            <ul class="multi-column-dropdown">
                                                <li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Kitchen & Dining</a></li>
                                                <li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>KitchenWear</a></li>
                                                <li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Pet Care</a></li>
                                                <li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Plastic Wear</a></li>
                                        
                                            </ul>
                                        
                                        </div>
                                        <div class="col-sm-3">
                                        
                                            <ul class="multi-column-dropdown">
                                                <li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Pooja Needs</a></li>
                                                <li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Serveware</a></li>
                                                <li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Safety Accessories</a></li>
                                                <li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Festive Decoratives </a></li>
                                        
                                            </ul>
                                        </div> -->
                                        <!-- <div class="col-sm-3 w3l">
                                            <a href="hold.html"><img src="images/me2.png" class="img-responsive" alt=""></a>
                                        </div> -->
                                        <div class="clearfix"></div>
                                    </div>  
                                </ul>
                            </li>
                            
                            <li><a href="about.php" class="hyper"> <span>About</span></a></li>
                            <li><a href="contact.php" class="hyper"><span>Contact Us</span></a></li>
                        </ul>
                    </div>
                    </nav>
                    <div class="cart" >
                    
                    <a href="cart.php"> <span class="fa fa-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span></a>
                    </div>
                     
                    <div class="clearfix"></div>
                </div>
                    
                </div>          
</div>

<!-- End Menu.... -->









<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="autoshowroom-title autoshowroom-title-center">
                <h2 class="AutoshowroomTitle">Car Comparison</h2>
                <br />
                <br />
            </div>
        </div>
        <div class="col-sm-12 text-center">
                <table class="table table-hover bg-white">
                    <tr>
                        <th style="width:30%"></th>
                        <td style="width:35%">
                            <a href="/Car/Details?carId=8" target="_blank">
                                <div class="compare-title">
                                   <?php echo $row['Model'] ; ?>
                                </div>
                                <img src="<?php echo $row['photo'] ?>" style="max-width:400px" />
                            </a>
                        </td>
                        <td style="width:35%">
                            <a href="/Car/Details?carId=15" target="_blank" >
                                <div class="compare-title">
                                    <?php echo $row2['Model'] ?>
                                    </div>
                                <img src="<?php echo $row2['photo'] ?>" style="max-width:400px" />
                            </a>
                        </td>
                    </tr>
                   <!--  <tr>
                        <th class="car-detail-f-label">Rating</th>
                        <td class="car-detail-f-value compare-rating">
                            <input type="number" class="rating" min="1" max="5" step="0.5" disabled value="5.00">
                        </td>
                        <td class="car-detail-f-value compare-rating">
                            <input type="number" class="rating" min="1" max="5" step="0.5" disabled value="5.00">
                        </td>
                    </tr>
 -->                    <tr>
                        <th class="car-detail-f-label">Make</th>
                        <td class="car-detail-f-value"><?php echo $row['Make'] ; ?></td>
                        <td class="car-detail-f-value"><?php echo $row2['Make'] ; ?></td>
                    </tr>
                    <tr>
                        <th class="car-detail-f-label">Year</th>
                        <td class="car-detail-f-value"><?php echo $row['Year'] ; ?></td>
                        <td class="car-detail-f-value"><?php echo $row2['Year'] ; ?></td>
                    </tr>
                  <!--   <tr>
                        <th class="car-detail-f-label">Country of Origin</th>
                        <td class="car-detail-f-value">Japan</td>
                        <td class="car-detail-f-value">Japan</td>
                    </tr>
                    <tr>
                        <th class="car-detail-f-label">Doors</th>
                        <td class="car-detail-f-value">5</td>
                        <td class="car-detail-f-value">5</td>
                    </tr> -->
                    <tr>
                        <th class="car-detail-f-label">Drive Type</th>
                        <td class="car-detail-f-value"><?php echo $row['drive_Type'] ; ?></td>
                        <td class="car-detail-f-value"><?php echo $row2['drive_Type'] ; ?></td>
                    </tr>
                    <tr>
                        <th class="car-detail-f-label">Engine Capacity</th>
                        <td class="car-detail-f-value"><?php echo $row['Capacity'] ; ?></td>
                        <td class="car-detail-f-value"><?php echo $row2['Capacity'] ; ?></td>
                    </tr>
                    <tr>
                        <th class="car-detail-f-label">Exterior Color</th>
                        <td class="car-detail-f-value"><?php echo $row['Exterior_Color'] ; ?></td>
                        <td class="car-detail-f-value"><?php echo $row2['Exterior_Color'] ; ?></td>
                    </tr>
                    <tr>
                        <th class="car-detail-f-label">Fuel Type</th>
                        <td class="car-detail-f-value"><?php echo $row['Fuel_Type'] ; ?></td>
                        <td class="car-detail-f-value"><?php echo $row2['Fuel_Type'] ; ?></td>
                    </tr>
                    <!-- <tr>
                        <th class="car-detail-f-label">Key Features</th>
                        <td class="car-detail-f-value">

                            <div class="row">
                                <div class="col-sm-6">
                                    <ul>
                                            <li>
                                                <div class="list-content text-left">
                                                    <label for="94">ABS Brakes </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content text-left">
                                                    <label for="1127">Adaptive Headlight(s) </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content text-left">
                                                    <label for="1132">Adjustable Pedals </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content text-left">
                                                    <label for="95">Air Conditioning </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content text-left">
                                                    <label for="96">Alloy Wheels </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content text-left">
                                                    <label for="97">AM/FM Stereo </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content text-left">
                                                    <label for="98">Auto Transmission </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content text-left">
                                                    <label for="102">CD Audio </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content text-left">
                                                    <label for="119">Cloth Seat(s) </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content text-left">
                                                    <label for="2103">Crystal Break Light </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content text-left">
                                                    <label for="1099">Discharge Headlight </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content text-left">
                                                    <label for="1124">DVD Player </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content text-left">
                                                    <label for="2111">Front Wheel Drive </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content text-left">
                                                    <label for="1107">HID-Headlights </label>
                                                </div>
                                            </li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul>
                                            <li>
                                                <div class="list-content text-left">
                                                    <label for="2099">LED Break Light </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content text-left">
                                                    <label for="114">Navigation Sys (GPS) </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content text-left">
                                                    <label for="115">Overhead Airbags </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content text-left">
                                                    <label for="116">Power Lock(s) </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content text-left">
                                                    <label for="117">Power Mirror(s) </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content text-left">
                                                    <label for="1134">Power Steering </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content text-left">
                                                    <label for="125">Power WIndow(s) </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content text-left">
                                                    <label for="1108">Projector Light </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content text-left">
                                                    <label for="127">Rear Spoiler </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content text-left">
                                                    <label for="2112">Rear Wheel Drive </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content text-left">
                                                    <label for="1103">Semi-Leather Seat(s) </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content text-left">
                                                    <label for="2106">Tool Box </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content text-left">
                                                    <label for="1133">Travel Comfort </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content text-left">
                                                    <label for="1131">TV </label>
                                                </div>
                                            </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                        <td class="car-detail-f-value">

                            <div class="row">
                                <div class="col-sm-6">
                                    <ul>
                                            <li>
                                                <div class="list-content">
                                                    <label for="94">ABS Brakes </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content">
                                                    <label for="1127">Adaptive Headlight(s) </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content">
                                                    <label for="95">Air Conditioning </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content">
                                                    <label for="96">Alloy Wheels </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content">
                                                    <label for="97">AM/FM Stereo </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content">
                                                    <label for="98">Auto Transmission </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content">
                                                    <label for="102">CD Audio </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content">
                                                    <label for="110">Cruise Control </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content">
                                                    <label for="2103">Crystal Break Light </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content">
                                                    <label for="1099">Discharge Headlight </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content">
                                                    <label for="1124">DVD Player </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content">
                                                    <label for="1115">Fog Light </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content">
                                                    <label for="1107">HID-Headlights </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content">
                                                    <label for="114">Navigation Sys (GPS) </label>
                                                </div>
                                            </li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul>
                                            <li>
                                                <div class="list-content">
                                                    <label for="115">Overhead Airbags </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content">
                                                    <label for="120">Parking Sensors </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content">
                                                    <label for="116">Power Lock(s) </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content">
                                                    <label for="117">Power Mirror(s) </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content">
                                                    <label for="1134">Power Steering </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content">
                                                    <label for="125">Power WIndow(s) </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content">
                                                    <label for="123">Premium Package </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content">
                                                    <label for="1108">Projector Light </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content">
                                                    <label for="1110">Push Start </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content">
                                                    <label for="1118">Rear Wiper </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content">
                                                    <label for="130">Side Airbags </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content">
                                                    <label for="132">Smart Key </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content">
                                                    <label for="1133">Travel Comfort </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content">
                                                    <label for="1131">TV </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-content">
                                                    <label for="1130">Wooden Dashboard </label>
                                                </div>
                                            </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr> -->
                    <tr>
                        <th class="car-detail-f-label">Gear Box</th>
                         <td class="car-detail-f-value"><?php echo $row['Transmission'] ; ?></td>
                        <td class="car-detail-f-value"><?php echo $row2['Transmission'] ; ?></td>
                    </tr>
                    <tr>
                        <th class="car-detail-f-label">Riding Capacity</th>
                        <td class="car-detail-f-value"><?php echo $row['Capacity'] ; ?></td>
                        <td class="car-detail-f-value"><?php echo $row2['Capacity'] ; ?></td>
                    </tr>
                    <tr>
                        <th class="car-detail-f-label">Tyres</th>
                        <td class="car-detail-f-value"><?php echo $row['Tyre'] ; ?></td>
                        <td class="car-detail-f-value"><?php echo $row2['Tyre'] ; ?></td>
                    </tr>
                    <tr>
                        <th class="car-detail-f-label">Mileage</th>
                        <td class="car-detail-f-value"><?php echo $row['Mileage'] ;?>cc</td>
                        <td class="car-detail-f-value"><?php echo $row2['Mileage'] ; ?>cc</td>
                    </tr>

<!-- 
                    <tr>
                        <th class="car-detail-f-label">Description</th>
                        <td class="car-detail-f-value">The Toyota Harrier also known as the Lexus RX seamlessly blends luxury and function. It is available with optional all-wheel drive, giving it excellent performance in foul weather. It is finished in the finest of materials and has a wide array of convenience features. Being a Toyota, it is also extremely reliable and has low maintenance costs. Harrier is the ultimate high-end SUV.</td>
                        <td class="car-detail-f-value">Quality Japanese Vehicle</td>
                    </tr> -->

                </table>
        </div>
    </div>
</div>
<br /><br />








<br><br>

<!-- Footer -->

<footer class="container-fluid">

        <div class="container footer-body">
            <div class="row">
                <div class="col-sm-3">
                    <h3 class="footerNav_title">CONTACT INFO</h3>
                    <p>
                        Feel free to contact with us
                    </p>
                    <p>
                        <span>
                            <i class="fa fa-map-marker"></i> &nbsp;&nbsp;181-182 Tejgaon I/A, Dhaka 1212
                        </span>
                        <br>
                        <span>
                            <i class="fa fa-phone"></i> &nbsp;+88 02 8878052 +88 01700702644 +88 01700702645
                        </span>
                        <br>
                        <span>
                            <i class="fa fa-envelope-o"></i> &nbsp;info@methon.com
                        </span>
                    </p>
                </div>
                <div class="col-sm-3">
                    <h3 class="footerNav_title">LATEST TWEETS</h3>
                    <span>
                        Feel free to contact with us
                    </span>

                </div>
                <div class="col-sm-3">
                    <h3 class="footerNav_title">OPEN HOURS</h3>
                    <h5>Sales Department</h5>
                    <p>
                        Mon-Sat: 9:00am - 8:00pm<br>
                        Sunday is closed
                    </p>
                    <h5>Service Department</h5>
                    <p>
                        Mon-Sat: 9:00am - 8:00pm<br>
                        Sunday is closed
                    </p>

                </div>
                <div class="col-sm-3">
                    <h3 class="footerNav_title">NEWSLETTER</h3>

                    <p>Subscribe to our Newsletter Feed</p>

                    <div id="subscriptionFormContainer">

                        <form id="Subsription" class="subsription" novalidate="novalidate">
                            <div class="form-group">
                                <input type="email" name="Email" class="newsletter-text-input" placeholder="Your Email Address" required="" aria-required="true">
                                <label id="Email-error" class="error" for="Email"></label>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary btn-block" type="button" id="subsriptionButton">SUBSCRIBE</button>

                            </div>
                            <div class="form-group">
                                <a href="register.php" class="btn btn-block btn-registration-yellow-lg">
                                    <i class="fa fa-user"></i>
                                    FREE REGISTRATION
                                </a>
                            </div>
                        </form>
                        <div class="text-center alert alert-success" id="successLabel" style="display:none">
                            <strong>Thank you for subscribing. You have been added to our mailing list.</strong>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </footer>




<!-- social media -->

<div class="container-fluid footer-joinus-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="ul ul-horizontal social-iconBar pull-right">

                        <li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    </ul>
                    <span class="pull-right footer-joinus"> Join us on Social Media</span>

                </div>
            </div>
        </div>
    </div>


<!-- //social media -->

<!-- Menu -->
<nav class="footer_bottom">
            <div class="container">
                <div class="col-lg-1 col-md-1 col-sm-1 hidden-md hidden-sm hidden-xs">
                   <!--  <a href="#"><img src="/Content/BhaloGariTheme/Images/logo_footer.PNG"></a> -->
                </div>
                
                <div class="col-lg-11 col-sm-12">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 footer-col">
                            <div class="copyright">&nbsp;</div>
                            <div class="clearfix"></div>
                            <div class="footer-terms">
                                <ul class="ul ul-horizontal pull-right">
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="/privacy-policy">Privacy Policy</a></li>
                                    <li><a href="/terms-of-use">Terms of Use</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                    <li><a href="">© 2018 Methon Limited. All Rights Reserved.</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </nav>



<!--// Menu -->


<!-- //Footer -->








<style type="text/css">a:hover {
    text-decoration: none;
}</style>