


<?php 
 include_once ('connection.php'); 

 ?>


<!DOCTYPE html>
<html>
<head>
    <title>New Car</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"/>
<link rel="stylesheet" href="All_Gari.css"/>    
<!-- <link rel="stylesheet" href="all.css">  -->
 <link rel="stylesheet" href="css/bootstrap.min.css"/>

<!--   <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script> -->

<script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<!-- footer css -->
<link rel="stylesheet" href="foot.css">
<!--// footer css -->
<link href="css/style2.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />



<style type="text/css">
    
.input-group .form-control {
    position: relative;
    z-index: 2;
    float: left;
    width: 60%;
    margin-bottom: 0;
    
}
 
.k
{
margin-left: 150px ;

}
button:focus {
    outline: none;
}


/* pagination */


.pagination{

    padding: 0px 0px 0px 350px;
}

.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
    border: 1px solid #ddd;
}

.pagination a.active {
    background-color: dodgerblue;
    color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}


/*  pagination */






</style>






</head>
<body>


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
                    <!-- <li><a href="#" ><i class="fa fa-ship" aria-hidden="true"></i>Shipping</a></li> -->
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
                                <a href="buy.php" class="dropdown-toggle hyper"  ><span>BUY</span></a>
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
                            
                                <a href="compare.php" class="dropdown-toggle hyper" ><span> Compare </span></a>
                                
                            </li>
                          <!--   <li class="dropdown">
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
                                                <!-- <li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>CookWear</a></li>
                                                <li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Detergents</a></li>
                                                <li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Gardening Needs</a></li> -->
                                        
                                            </ul>
                                        
                                        </div>
                                       <!--  <div class="col-sm-3"> -->
                                       <!--      
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
                     
                    <div class="clearfix"></div>
                </div>
                    
                </div>          
</div>

<!-- End Menu.... -->


<br><br>





<div class="row">

<!-- Start left -->


        <div class="col-xlg-2 col-lg-3 col-md-3 col-sm-4 left-panel">
            <div id="panel-back-window"><a href="javascript:void(0)"><i class="material-icons">arrow_back</i></a></div>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h6 class="panel-title">MAKE</h6>
                    <button data-toggle="collapse" data-target="#make"  aria-expanded="false" aria-controls="make"   style="background: none; border: none; "><span class="fa fa-caret-down fa-fw" 
               data-icon-in="fa-caret-down" data-icon-out="fa-caret-up"></span></button>
                </div>
                <div id="make" class="panel-body collapse in">


                    <div class="row">

                          <!-- Start Left Make Title  Coding -->

                 <?php 
                    $query = "select distinct(Make) from gari";  
                    $rs = mysqli_query($conn,$query) or die("Error : ".mysqli_error());
                    while($Make = mysqli_fetch_assoc($rs)){
                 
                ?> 
                        <div class="col-sm-6">
                            <ul class="inline-list" data-show-item="7">
         

                                 <li>
                                        <div class="modify-checkbox pull-left">
                                            <input type="checkbox" id="Make21" class="checkbox-car-make item_filter make" onchange="sortGridByCarMakes(this)" value="<?php echo $Make['Make']; ?> ">
                                            <label></label>
                                        </div>
                                        <div class="list-content">
                                            <span class="total-count pull-right">  <i class="material-icons"></i></span>
                                            <label for="Make21"><?php echo $Make['Make']; ?>  </label>

                 

                                           
                                        </div>
                                    </li>
                                    <!-- <li>
                                        <div class="modify-checkbox pull-left">
                                            <input type="checkbox" id="Make22" class="checkbox-car-make" onchange="sortGridByCarMakes(this)" value="22">
                                            <label></label>
                                        </div>
                                        <div class="list-content">
                                            <span class="total-count pull-right">(5)  <i class="material-icons"></i></span>
                                            <label for="Make22">Honda </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="modify-checkbox pull-left">
                                            <input type="checkbox" id="Make23" class="checkbox-car-make" onchange="sortGridByCarMakes(this)" value="23">
                                            <label></label>
                                        </div>
                                        <div class="list-content">
                                            <span class="total-count pull-right">(2)  <i class="material-icons"></i></span>
                                            <label for="Make23">Nissan </label>
                                        </div>
                                    </li> -->
                            </ul>
                        </div>

                 <!-- END Left Make Title  Coding-->

                         <?php } ?> 

                     </div>


                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h6 class="panel-title">BODY TYPE</h6>
                    <button data-toggle="collapse" data-target="#bodytype" style="background: none; border: none; "><span class="fa fa-caret-down fa-fw" 
               data-icon-in="fa-caret-down" data-icon-out="fa-caret-up"></button>
                </div>
                <div id="bodytype" class="panel-body collapse in">
 <!-- Start Left Body Type Title  Coding -->

          <?php 

          $sql="SELECT distinct(ccat),svgPhoto FROM cat  ";

            $qResult=$conn->query($sql);

            $data=[];

              if ($qResult->num_rows > 0) {
        // output data of each row
                while($row = $qResult->fetch_assoc()) { 

                      $data[]=$row;
                    }
               }
    ?>   

                    <div class="fly-out-container" style="height: 270px;">
                     
                     <!-- Start Foreach loop -->
                        <?php
                        foreach ($data as $key => $value) 
                            {
                                ?>  

                            <div class="col-xs-4 car-item">
                                <input type="checkbox" class="checkbox-car-type item_filter bodyt" onchange="sortGridByCarTypes(this)" value="<?php echo $value['ccat']; ?>">
                                <div class="car-content">
                                    <a href="javascript:void(0)"><img src="<?php echo $value['svgPhoto']; ?>" height="80"></a>
                                    <h5><a href=""><?php echo $value['ccat']; ?></a></h5>
                                </div>
                            </div>

                   <!-- END Foreach loop -->

             
                            <?php } ?>

            <!-- END Left Body Type Title  Coding -->



                         <!--    <div class="col-xs-4 car-item">
                                <input type="checkbox" class="checkbox-car-type" onchange="sortGridByCarTypes(this)" value="2">
                                <div class="car-content">
                                    <a href="javascript:void(0)"><img src="svg-icons/hybrid.svg" height="80"></a>
                                    <h5><a href="">Hybrids</a></h5>
                                </div>
                            </div>
                            <div class="col-xs-4 car-item">
                                <input type="checkbox" class="checkbox-car-type" onchange="sortGridByCarTypes(this)" value="42">
                                <div class="car-content">
                                    <a href="javascript:void(0)"><img src="svg-icons/coupe-car.svg" height="80"></a>
                                    <h5><a href="">Coupes</a></h5>
                                </div>
                            </div>
                            <div class="col-xs-4 car-item">
                                <input type="checkbox" class="checkbox-car-type" onchange="sortGridByCarTypes(this)" value="43">
                                <div class="car-content">
                                    <a href="javascript:void(0)"><img src="svg-icons/crossovers.svg" height="80"></a>
                                    <h5><a href="">Crossovers</a></h5>
                                </div>
                            </div>
                            <div class="col-xs-4 car-item">
                                <input type="checkbox" class="checkbox-car-type" onchange="sortGridByCarTypes(this)" value="45">
                                <div class="car-content">
                                    <a href="javascript:void(0)"><img src="svg-icons/luxery.svg" height="80"></a>
                                    <h5><a href="">Luxury Vehicles</a></h5>
                                </div>
                            </div>
                            <div class="col-xs-4 car-item">
                                <input type="checkbox" class="checkbox-car-type" onchange="sortGridByCarTypes(this)" value="46">
                                <div class="car-content">
                                    <a href="javascript:void(0)"><img src="svg-icons/mini-van.svg" height="80"></a>
                                    <h5><a href="">Minivans and Vans</a></h5>
                                </div>
                            </div>
                            <div class="col-xs-4 car-item">
                                <input type="checkbox" class="checkbox-car-type" onchange="sortGridByCarTypes(this)" value="47">
                                <div class="car-content">
                                    <a href="javascript:void(0)"><img src="svg-icons/pick-up.svg" height="80"></a>
                                    <h5><a href="">Pickup Trucks</a></h5>
                                </div>
                            </div>
                            <div class="col-xs-4 car-item">
                                <input type="checkbox" class="checkbox-car-type" onchange="sortGridByCarTypes(this)" value="48">
                                <div class="car-content">
                                    <a href="javascript:void(0)"><img src="svg-icons/sedan.svg" height="80"></a>
                                    <h5><a href="">Sedan</a></h5>
                                </div>
                            </div>
                            <div class="col-xs-4 car-item">
                                <input type="checkbox" class="checkbox-car-type" onchange="sortGridByCarTypes(this)" value="49">
                                <div class="car-content">
                                    <a href="javascript:void(0)"><img src="svg-icons/suv.svg" height="80"></a>
                                    <h5><a href="">SUV</a></h5>
                                </div>
                            </div>
                            <div class="col-xs-4 car-item">
                                <input type="checkbox" class="checkbox-car-type" onchange="sortGridByCarTypes(this)" value="50">
                                <div class="car-content">
                                    <a href="javascript:void(0)"><img src="svg-icons/sports.svg" height="80"></a>
                                    <h5><a href="">Sports Cars</a></h5>
                                </div>
                            </div>
                            <div class="col-xs-4 car-item">
                                <input type="checkbox" class="checkbox-car-type" onchange="sortGridByCarTypes(this)" value="51">
                                <div class="car-content">
                                    <a href="javascript:void(0)"><img src="svg-icons/wagon.svg" height="80"></a>
                                    <h5><a href="">Wagons</a></h5>
                                </div>
                            </div>
                            <div class="col-xs-4 car-item">
                                <input type="checkbox" class="checkbox-car-type" onchange="sortGridByCarTypes(this)" value="55">
                                <div class="car-content">
                                    <a href="javascript:void(0)"><img src="svg-icons/black-car-side-view.svg" height="80"></a>
                                    <h5><a href="">Hatchback</a></h5>
                                </div>
                            </div>
                            <div class="col-xs-4 car-item">
                                <input type="checkbox" class="checkbox-car-type" onchange="sortGridByCarTypes(this)" value="89">
                                <div class="car-content">
                                    <a href="javascript:void(0)"><img src="svg-icons/crossovers.svg" height="80"></a>
                                    <h5><a href="">Compact</a></h5>
                                </div>
                            </div>
                            <div class="col-xs-4 car-item">
                                <input type="checkbox" class="checkbox-car-type" onchange="sortGridByCarTypes(this)" value="90">
                                <div class="car-content">
                                    <a href="javascript:void(0)"><img src="svg-icons/crossovers.svg" height="80"></a>
                                    <h5><a href="">RV</a></h5>
                                </div>
                            </div>
                            <div class="col-xs-4 car-item">
                                <input type="checkbox" class="checkbox-car-type" onchange="sortGridByCarTypes(this)" value="91">
                                <div class="car-content">
                                    <a href="javascript:void(0)"><img src="svg-icons/crossovers.svg" height="80"></a>
                                    <h5><a href="">Mini SUV</a></h5>
                                </div>
                            </div>
                            <div class="col-xs-4 car-item">
                                <input type="checkbox" class="checkbox-car-type" onchange="sortGridByCarTypes(this)" value="92">
                                <div class="car-content">
                                    <a href="javascript:void(0)"><img src="svg-icons/crossovers.svg" height="80"></a>
                                    <h5><a href="">Station Wagon</a></h5>
                                </div>
                            </div> -->
                    </div>
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h6 class="panel-title">PRICE RANGE</h6>

                </div>
                <div class="product-price-range-input">
                    <div class="row" style="padding:20px">
                        <div class="col-xs-5 col-md-5" style="padding-right:0!important">
                            <input type="text" id="MinPrice" name="MinPrice" value="500000" class="form-control car-price" maxlength="15">
                        </div>
                        <div class="col-xs-5 col-md-5" style="padding-right:0!important">
                            <input type="text" id="MaxPrice" name="MaxPrice" value="15000000" class="form-control car-price" maxlength="15">
                        </div>
                        <div class="col-xs-2 col-md-2" style="padding:0px !important;background:none;">
                            <i id="range" class="fa fa-search fa-4x btn" onclick="readGridData()" style="color:orangered"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h6 class="panel-title">YEAR</h6>
                    <button data-toggle="collapse" data-target="#yearFilter" style="background: none; border: none; "><span class="fa fa-caret-down fa-fw" 
               data-icon-in="fa-caret-down" data-icon-out="fa-caret-up"></button>
                </div>

           <!-- Start Year type Coding -->
        <?php     
                $sql="SELECT distinct(Year) FROM gari ";
                $qResult=$conn->query($sql);

                $data=[];

               if ($qResult->num_rows > 0) {
        // output data of each row
                 while($row = $qResult->fetch_assoc()) { 
                       $data[]=$row;
                       }
                   }

       ?>      
                <div id="yearFilter" class="panel-body collapse in">
                    <select id="year-list" class="form-control filter-by-year">
                        <option value="">Filter By Year</option>
         <!-- Start Foreach loop -->
                    <?php
                        
                        foreach ($data as $key => $value) 

                            {
                    ?> 
                           <option value="<?php echo $value['Year'] ?>"><?php echo $value['Year'] ?></option>

                           <!-- END Foreach loop -->

                           <?php } ?>
        <!-- END Year type Coding -->
              

                           <!--  <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option> -->
                    </select>
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h6 class="panel-title">MILEAGE</h6>
                     <button data-toggle="collapse" data-target="#mileageFilter" style="background: none; border: none; "><span class="fa fa-caret-down fa-fw" 
               data-icon-in="fa-caret-down" data-icon-out="fa-caret-up"></button>
                </div>
                <div id="mileageFilter" class="panel-body collapse in">
                    <select class="form-control filter-by-mileage" id="mileage">
                        <option value="0">Filter By Mileage</option>
                            <option value="2000">0 km - 2,000 km</option>
                            <option value="5000">2,000 km - 5,000 km</option>
                            <option value="10000">5,000 km - 10,000 km</option>
                            <option value="100000">more than 10,000 km</option>
                    </select>
                </div>
            </div>


            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h6 class="panel-title">COLOR</h6>
                    <button data-toggle="collapse" data-target="#color" style="background: none; border: none; "><span class="fa fa-caret-down fa-fw" 
               data-icon-in="fa-caret-down" data-icon-out="fa-caret-up"></button>
                </div>
                <div id="color" class="panel-body collapse in">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="color-box">
                                <div class="color-header">
                                    <h4>INTERIOR</h4>
                                </div>
                   <!-- Start INTERIOR Colour Left side  -->

                  <?php

                    $query = "select distinct(Interior_Color) from gari ";  
                    $rs = mysqli_query($conn,$query) or die("Error : ".mysqli_error());
                    while($colour1 = mysqli_fetch_assoc($rs)){
                 
                ?>   

                                <div id="listResults" class="color-list">

                                        <div class="checkbox checkbox-circle">
                                                <label>
                                                    <input id="InColor36" class="item_filter interior" style="background-color: Black" type="checkbox" value="<?php echo $colour1['Interior_Color']; ?>" onchange="sortGridByCarInColors(this)">
                                                    <?php echo $colour1['Interior_Color']; ?>
                                                </label>
                                            </div>
                                        <!-- <div class="checkbox checkbox-circle">
                                                <label>
                                                    <input id="InColor37" style="background-color: Gray" type="checkbox" value="37" onchange="sortGridByCarInColors(this)">
                                                    Gray
                                                </label>
                                            </div>
                                        <div class="checkbox checkbox-circle">
                                                <label>
                                                    <input id="InColor38" style="background-color: Silver" type="checkbox" value="38" onchange="sortGridByCarInColors(this)">
                                                    Silver
                                                </label>
                                            </div>
                                        <div class="checkbox checkbox-circle">
                                                <label>
                                                    <input id="InColor39" style="background-color: White" type="checkbox" value="39" onchange="sortGridByCarInColors(this)">
                                                    White
                                                </label>
                                            </div>
                                        <div class="checkbox checkbox-circle">
                                                <label>
                                                    <input id="InColor40" style="background-color: Blue" type="checkbox" value="40" onchange="sortGridByCarInColors(this)">
                                                    Blue
                                                </label>
                                            </div>
                                        <div class="checkbox checkbox-circle">
                                                <label>
                                                    <input id="InColor41" style="background-color: #722f37" type="checkbox" value="41" onchange="sortGridByCarInColors(this)">
                                                    Deep Wine Red
                                                </label>
                                            </div>
                                        <div class="checkbox checkbox-circle">
                                                <label>
                                                    <input id="InColor54" style="background-color: Red" type="checkbox" value="54" onchange="sortGridByCarInColors(this)">
                                                    Red
                                                </label>
                                            </div>
                                        <div class="checkbox checkbox-circle">
                                                <label>
                                                    <input id="InColor56" style="background-color: #800080" type="checkbox" value="56" onchange="sortGridByCarInColors(this)">
                                                    Purple
                                                </label>
                                            </div>
                                        <div class="checkbox checkbox-circle">
                                                <label>
                                                    <input id="InColor57" style="background-color: #722f37" type="checkbox" value="57" onchange="sortGridByCarInColors(this)">
                                                    Wine Red
                                                </label>
                                            </div>
                                        <div class="checkbox checkbox-circle">
                                                <label>
                                                    <input id="InColor58" style="background-color: #551a8b" type="checkbox" value="58" onchange="sortGridByCarInColors(this)">
                                                    Deep Purple
                                                </label>
                                            </div>
                                        <div class="checkbox checkbox-circle">
                                                <label>
                                                    <input id="InColor60" style="background-color: #f5f5dc" type="checkbox" value="60" onchange="sortGridByCarInColors(this)">
                                                    Beige
                                                </label>
                                            </div>
                                        <div class="checkbox checkbox-circle">
                                                <label>
                                                    <input id="InColor80" style="background-color: #eeebd9" type="checkbox" value="80" onchange="sortGridByCarInColors(this)">
                                                    Pearl White
                                                </label>
                                            </div>
                                        <div class="checkbox checkbox-circle">
                                                <label>
                                                    <input id="InColor81" style="background-color: #000080" type="checkbox" value="81" onchange="sortGridByCarInColors(this)">
                                                    Navy Blue
                                                </label>
                                            </div>
                                        <div class="checkbox checkbox-circle">
                                                <label>
                                                    <input id="InColor82" style="background-color: #556B2F" type="checkbox" value="82" onchange="sortGridByCarInColors(this)">
                                                    Olive Green
                                                </label>
                                            </div>
                                        <div class="checkbox checkbox-circle">
                                                <label>
                                                    <input id="InColor83" style="background-color: #ADD8E6" type="checkbox" value="83" onchange="sortGridByCarInColors(this)">
                                                    Light Blue
                                                </label>
                                            </div>
                                        <div class="checkbox checkbox-circle">
                                                <label>
                                                    <input id="InColor84" style="background-color: #90EE90" type="checkbox" value="84" onchange="sortGridByCarInColors(this)">
                                                    Light Green
                                                </label>
                                            </div>
                                        <div class="checkbox checkbox-circle">
                                                <label>
                                                    <input id="InColor85" style="background-color: #D1DBDD" type="checkbox" value="85" onchange="sortGridByCarInColors(this)">
                                                    Metallic Gray
                                                </label>
                                            </div>
                                        <div class="checkbox checkbox-circle">
                                                <label>
                                                    <input id="InColor86" style="background-color: #008000" type="checkbox" value="86" onchange="sortGridByCarInColors(this)">
                                                    Green
                                                </label>
                                            </div>
                                        <div class="checkbox checkbox-circle">
                                                <label>
                                                    <input id="InColor87" style="background-color: #ab3b4e" type="checkbox" value="87" onchange="sortGridByCarInColors(this)">
                                                    Cherry Wine
                                                </label>
                                            </div>
                                        <div class="checkbox checkbox-circle">
                                                <label>
                                                    <input id="InColor88" style="background-color: #790604" type="checkbox" value="88" onchange="sortGridByCarInColors(this)">
                                                    Cherry Red
                                                </label>
                                            </div>
                                        <div class="checkbox checkbox-circle">
                                                <label>
                                                    <input id="InColor2143" style="background-color: ffggdd" type="checkbox" value="2143" onchange="sortGridByCarInColors(this)">
                                                    Brown 
                                                </label>
                                            </div>
 -->
                                </div>
                        <?php 

                             } 

                        ?>
             <!-- END INTERIOR Colour Left side  -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="color-box">
                                <div class="color-header">
                                    <h4>EXTERIOR</h4>
                                </div>
             <!-- Start EXTERIOR Colour Left side  -->
                <?php 

                    $query = "select distinct(Exterior_Color) from gari ";  
                    $rs = mysqli_query($conn,$query) or die("Error : ".mysqli_error());
                    while($colour = mysqli_fetch_assoc($rs)){
                 
                ?>        
                                <div class="color-list">
                                        <div class="checkbox checkbox-circle">
                                                <label>
                                                    <input id="ExColor36" class="item_filter exterior" type="checkbox" value="<?php echo $colour['Exterior_Color']; ?>" onchange="sortGridByCarExColors(this)">
                                                    <?php echo $colour['Exterior_Color']; ?>
                                                </label>
                                            </div>
                                        <!-- <div class="checkbox checkbox-circle">
                                                <label>
                                                    <input id="ExColor37" type="checkbox" value="37" onchange="sortGridByCarExColors(this)">
                                                    Gray
                                                </label>
                                            </div>
                                        <div class="checkbox checkbox-circle">
                                                <label>
                                                    <input id="ExColor38" type="checkbox" value="38" onchange="sortGridByCarExColors(this)">
                                                    Silver
                                                </label>
                                            </div>
                                        <div class="checkbox checkbox-circle">
                                                <label>
                                                    <input id="ExColor39" type="checkbox" value="39" onchange="sortGridByCarExColors(this)">
                                                    White
                                                </label>
                                            </div>
                                        <div class="checkbox checkbox-circle">
                                                <label>
                                                    <input id="ExColor40" type="checkbox" value="40" onchange="sortGridByCarExColors(this)">
                                                    Blue
                                                </label>
                                            </div>
                                        <div class="checkbox checkbox-circle">
                                                <label>
                                                    <input id="ExColor41" type="checkbox" value="41" onchange="sortGridByCarExColors(this)">
                                                    Deep Wine Red
                                                </label>
                                            </div>
                                        <div class="checkbox checkbox-circle">
                                                <label>
                                                    <input id="ExColor54" type="checkbox" value="54" onchange="sortGridByCarExColors(this)">
                                                    Red
                                                </label>
                                            </div>
                                        <div class="checkbox checkbox-circle">
                                                <label>
                                                    <input id="ExColor56" type="checkbox" value="56" onchange="sortGridByCarExColors(this)">
                                                    Purple
                                                </label>
                                            </div>
                                        <div class="checkbox checkbox-circle">
                                                <label>
                                                    <input id="ExColor57" type="checkbox" value="57" onchange="sortGridByCarExColors(this)">
                                                    Wine Red
                                                </label>
                                            </div>
                                        <div class="checkbox checkbox-circle">
                                                <label>
                                                    <input id="ExColor58" type="checkbox" value="58" onchange="sortGridByCarExColors(this)">
                                                    Deep Purple
                                                </label>
                                            </div>
                                        <div class="checkbox checkbox-circle">
                                                <label>
                                                    <input id="ExColor60" type="checkbox" value="60" onchange="sortGridByCarExColors(this)">
                                                    Beige
                                                </label>
                                            </div>
                                        <div class="checkbox checkbox-circle">
                                                <label>
                                                    <input id="ExColor80" type="checkbox" value="80" onchange="sortGridByCarExColors(this)">
                                                    Pearl White
                                                </label>
                                            </div>
                                        <div class="checkbox checkbox-circle">
                                                <label>
                                                    <input id="ExColor81" type="checkbox" value="81" onchange="sortGridByCarExColors(this)">
                                                    Navy Blue
                                                </label>
                                            </div>
                                        <div class="checkbox checkbox-circle">
                                                <label>
                                                    <input id="ExColor82" type="checkbox" value="82" onchange="sortGridByCarExColors(this)">
                                                    Olive Green
                                                </label>
                                            </div>
                                        <div class="checkbox checkbox-circle">
                                                <label>
                                                    <input id="ExColor83" type="checkbox" value="83" onchange="sortGridByCarExColors(this)">
                                                    Light Blue
                                                </label>
                                            </div>
                                        <div class="checkbox checkbox-circle">
                                                <label>
                                                    <input id="ExColor84" type="checkbox" value="84" onchange="sortGridByCarExColors(this)">
                                                    Light Green
                                                </label>
                                            </div>
                                        <div class="checkbox checkbox-circle">
                                                <label>
                                                    <input id="ExColor85" type="checkbox" value="85" onchange="sortGridByCarExColors(this)">
                                                    Metallic Gray
                                                </label>
                                            </div>
                                        <div class="checkbox checkbox-circle">
                                                <label>
                                                    <input id="ExColor86" type="checkbox" value="86" onchange="sortGridByCarExColors(this)">
                                                    Green
                                                </label>
                                            </div>
                                        <div class="checkbox checkbox-circle">
                                                <label>
                                                    <input id="ExColor87" type="checkbox" value="87" onchange="sortGridByCarExColors(this)">
                                                    Cherry Wine
                                                </label>
                                            </div>
                                        <div class="checkbox checkbox-circle">
                                                <label>
                                                    <input id="ExColor88" type="checkbox" value="88" onchange="sortGridByCarExColors(this)">
                                                    Cherry Red
                                                </label>
                                            </div>
                                        <div class="checkbox checkbox-circle">
                                                <label>
                                                    <input id="ExColor2143" type="checkbox" value="2143" onchange="sortGridByCarExColors(this)">
                                                    Brown 
                                                </label>
                                            </div> -->
                                </div>
                         <?php 

                             } 

                        ?>
             <!-- END EXTERIOR Colour Left side  -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

<!-- End left -->



        <!--Start Body -->
        <div class="col-xlg-10 col-lg-9  col-md-9 col-sm-8  right-panel">

   <!-- Search -->

<!-- <div class="form-group k">
    <div class="input-group">
     <span class="input-group-addon">Search</span>
     <input type="text" name="search_text" id="search_text" placeholder="Search by any Details" class="form-control" />
    </div>
   </div>   -->

<!-- Search -->
             

            <div class="row product-data" id="car-list">
        <!-- Start car-list Coding -->  












<!--  pagination -->

<?php 
$per_page=12;
 if (isset($_GET['page'])) {

    $page = $_GET['page'];
 }else {
    $page = 1 ;
 }

 $start_from = ($page-1) * $per_page;

 ?>


<!--  pagination -->

<?php 


// Button Search Main Page er 

if(isset($_POST['button'])){    //trigger button click

  $search=$_POST['search'];

// $q="select * from gari where Make like '%{$search}%' || Model like '%{$search}%' ";
$sql="SELECT * FROM gari where Make like '%{$search}%' || Model like '%{$search}%'";
$price_list=$conn->query($sql);
if ($price_list->num_rows > 0) {
        // output data of each row
        while($row = $price_list->fetch_assoc()) {
    
?>


        <div class="col-xlg-2 col-lg-3 col-md-4 col-sm-6">


<!--Start  car Div -->



            <a href="gariView.php?id=<?php echo $row['id'];  ?>" target="_blank" class="car-detail-link">
                
                <div class="panel car-stock-panel">
                        <div class="ribbon-box">
                            <div class="ribbon-premium"><span><?php echo $row['logo']; ?></span></div>
                            <div class="car-detail-img " style="background-image:url('<?php echo $row['photo']; ?>')">
                            </div>
                        </div>

                    <div class="panel-body">
                        <div class="car-detail-name center-block"><?php echo $row['Year']; ?> <?php echo $row['Model']; ?></div>
                        <div class="car-detail-grade center-block"><?php echo $row['Grade']; ?></div>
                        <div class="car-detail-mileage center-block"><?php echo $row['Mileage']; ?> KM</div>
                        <div class="car-detail-price-label center-block"> PRICE</div>
                        <div class="car-detail-price center-block">৳ <?php echo $row['price']; ?></div>
                        <div class="car-detail-rating center-block">
                            <div class="rating-container rating-md rating-animate rating-disabled"><div class="clear-rating " title="Clear"><i class="glyphicon glyphicon-minus-sign"></i></div><div class="rating-stars"><span class="empty-stars"><span class="star"><i class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i class="glyphicon glyphicon-star-empty"></i></span></span><span class="filled-stars" style="width: 100%;"><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i class="glyphicon glyphicon-star"></i></span></span><input name="Rating" type="number" class="rating car-detail-rating-input rating-input" min="1" max="5" step="0.5" value="5.00" disabled="disabled"></div><div class="caption"><span class="label label-success">Five Stars</span></div></div>
                        </div>
                        <!-- <label>
                            <input id="cbc-8" type="checkbox" class="checkbox-compare cbc-8" value="true">
                            ADD TO COMPARE
                        </label> -->
                    </div>

                </div>
            </a>
             
 <!--END   car Div -->

        </div>


<?php


// End while Loop
}


}  


// End if condition
}


else{                          


// All gari from data base

// Start else condition

$sql="SELECT * FROM gari where New_old='New' limit  $start_from,$per_page";
$price_list=$conn->query($sql);
if ($price_list->num_rows > 0) {
        // output data of each row
        while($row = $price_list->fetch_assoc()) {
        //start while loop 

 ?>


        <div class="col-xlg-2 col-lg-3 col-md-4 col-sm-6">


<!--Start  car Div -->



            <a href="gariView.php?id=<?php echo $row['id'];  ?>" target="_blank" class="car-detail-link">
                <div class="panel car-stock-panel">
                        <div class="ribbon-box">
                            <div class="ribbon-premium"><span><?php echo $row['logo']; ?></span></div>
                            <div class="car-detail-img " style="background-image:url('<?php echo $row['photo']; ?>')">
                            </div>
                        </div>

                    <div class="panel-body">
                        <div class="car-detail-name center-block"><?php echo $row['Year']; ?> <?php echo $row['Model']; ?></div>
                        <div class="car-detail-grade center-block"><?php echo $row['Grade']; ?></div>
                        <div class="car-detail-mileage center-block"><?php echo $row['Mileage']; ?> KM</div>
                        <div class="car-detail-price-label center-block"> PRICE</div>
                        <div class="car-detail-price center-block">৳ <?php echo $row['price']; ?></div>
                        <div class="car-detail-rating center-block">
                            <div class="rating-container rating-md rating-animate rating-disabled"><div class="clear-rating " title="Clear"><i class="glyphicon glyphicon-minus-sign"></i></div><div class="rating-stars"><span class="empty-stars"><span class="star"><i class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i class="glyphicon glyphicon-star-empty"></i></span></span><span class="filled-stars" style="width: 100%;"><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i class="glyphicon glyphicon-star"></i></span></span><input name="Rating" type="number" class="rating car-detail-rating-input rating-input" min="1" max="5" step="0.5" value="5.00" disabled="disabled"></div><div class="caption"><span class="label label-success">Five Stars</span></div></div>
                        </div>
                       <!--  <label>
                            <input id="cbc-8" type="checkbox" class="checkbox-compare cbc-8" value="true">
                            ADD TO COMPARE
                        </label> -->
                    </div>

                </div>
            </a>
             
 <!--END   car Div -->

        </div>
                 

                
    <?php }?>   
<?php  }?>  

<!-- End While Loop -->

<!-- 
    <script type="text/javascript">

    var totalPages;

         if (totalPages != 6) {

             totalPages = 6;

        var $pagination = $('#pagination-demo');
        var defaultOpts = {
            totalPages: 20
        };
        $pagination.twbsPagination(defaultOpts);
        $pagination.twbsPagination('destroy');
        $pagination.twbsPagination($.extend({}, defaultOpts, {
            totalPages: totalPages,
            onPageClick: function (event, page) {
                readGridData(page);
            }
        }));
    }
    else {
        var $pagination = $('#pagination-demo').twbsPagination({
        visiblePages: 7,
        totalPages: 6,
        onPageClick: function (event, page) {
            readGridData(page);
        }});
    };


        $(".checkbox-compare").change(function () {
            if (this.checked) {

                if (compareCheck.length == 2) {
                    $('#' + compareCheck[0]).prop('checked', false);
                    $('#' + compareCheck[0]).parent().parent().parent().removeClass('compare-car-select');
                    compareCheck.shift();
                }
                compareCheck.push(this.id);
                $(this).parent().parent().parent().addClass('compare-car-select');
            }
            else
            {
                var index = compareCheck.indexOf(this.id);
                if (index != -1)
                    $('#' + compareCheck[index]).parent().parent().parent().removeClass('compare-car-select');
                    compareCheck.splice(index, 1);
                debo               
            }
        });

    </script> -->


<?php }?>

</div>

            <br>
           <!--  <div class="row">
                <div class="col-sm-12 text-center">
                    <ul id="pagination-demo" class="pagination-sm pagination"><li class="page-item first disabled"><a href="#" class="page-link">First</a></li><li class="page-item prev disabled"><a href="#" class="page-link">Previous</a></li><li class="page-item active"><a href="#" class="page-link">1</a></li><li class="page-item"><a href="#" class="page-link">2</a></li><li class="page-item"><a href="#" class="page-link">3</a></li><li class="page-item"><a href="#" class="page-link">4</a></li><li class="page-item"><a href="#" class="page-link">5</a></li><li class="page-item next"><a href="#" class="page-link">Next</a></li><li class="page-item last"><a href="#" class="page-link">Last</a></li></ul>
                </div>

            </div> -->
        </div>
<!--  pagination -->

<?php 
$sql="SELECT * FROM gari";
$qResult=$conn->query($sql);
$total_row=mysqli_num_rows($qResult);
$total_pages= ceil($total_row/$per_page);
 
 echo " <span class='pagination '><a href='All_gari.php?page=1'  >".'&laquo;'."</a>";

for ($i=1; $i < $total_pages; $i++) { 
    
    echo " <a   href='All_gari.php?page=".$i."' >".$i."</a> ";
}


  echo " <a href='All_gari.php?page=$total_pages' >".'&raquo;'."</a> </span >";?>

<!--  pagination -->


<!--End Body -->

    </div>


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

  <script>

       // multiple checkbox selected code for make,body,interior,exterior     

    var make,bodyt,interior,exterior;
    $(function(){
        $('.item_filter').click(function(){
            
        
             make = multiple_values('make');
             bodyt = multiple_values('bodyt');
            interior = multiple_values('interior');
            exterior = multiple_values('exterior');
            $.ajax({
                url:"newAjax.php",
                type:'post',
                data:{make:make,bodyt:bodyt,interior:interior,exterior:exterior},
                success:function(result){
                     $('.product-data').html(result);
                }
            });
        });
        
    });
    
            
     
    
    function multiple_values(inputclass){
        var val = new Array();
        $("."+inputclass+":checked").each(function() {
            val.push($(this).val());
        });
        return val;
    }
           
            
</script>

<script type="text/javascript">
    
 ////Left Side year  Dropdown          
                
           $(document).ready(function(){  
      $('#year-list').change(function(){  
           var brand_id = $(this).val();  
           $.ajax({  
                url:"newAjax1.php",  
                method:"POST",  
                data:{brand_id:brand_id},  
                success:function(data){  
                     $('.product-data').html(data);  
                }  
           });  
      });  
 });
    
</script>

<script>

    //Range to two input value  search
$(document).ready(function(){
    // $.datepicker.setDefaults({
    //     dateFormat: 'yy-mm-dd'
    // });
    // $(function(){
    //     $("#From").datepicker();
    //     $("#to").datepicker();
    // });
    $('#range').click(function(){
        var From = $('#MaxPrice').val();
        var to = $('#MinPrice').val();
        if(From != '' && to != '')
        {
            $.ajax({
                url:"range.php",
                method:"POST",
                data:{From:From, to:to},
                success:function(data)
                {
                    $('.product-data').html(data);
                }
            });
        }
      
    });
});
</script>


<script type="text/javascript">
    
 ////Dropdown with select mileage            
                
           $(document).ready(function(){  
      $('#mileage').change(function(){  
           var brand_id = $(this).val();  

           $.ajax({  
                url:"newAjax3.php",  
                method:"POST",  
                data:{brand_id:brand_id},  
                success:function(data){  
                     $('.product-data').html(data);  
                }  
           });  
      });  
 });
    
</script>




<script>


    ////Search code
$(document).ready(function(){

 // load_data();

 function load_data(search1) // this function search1 and data name same hote hobe 
 {
      $.ajax({
       url:"project.php",
       method:"POST",
       data:{search1:search1},   // search1:search1 ei duita same likhte hobe 
       success:function(data)
       {
        $('.product-data').html(data);
       }
      });
 }

     $('#search_text').keyup(function(){
      var search = $(this).val();
      if(search != '')
      {
       load_data(search);
      }
      else
      {
       load_data("");
      }
     });


});
</script>

<script type="text/javascript">
    
$('[data-toggle="collapse"]').on('click', function () {
    var iconElement = $(this).find("[data-icon-in]")
    var iconIn = iconElement.attr('data-icon-in')
    var iconOut = iconElement.attr('data-icon-out')

    if (iconElement.hasClass(iconIn)) {
        iconElement.removeClass(iconIn).addClass(iconOut)
    } else {
        iconElement.removeClass(iconOut).addClass(iconIn)
    }
})
</script>


</body>
</html>







