
<?php include_once ('connection.php'); 

//Get id

if (!isset($_GET['id'])|| $_GET['id'] == NULL) {
  
 header('Location:404.php');

} else {
    $id=$_GET['id'];
    

  
}



   ?>

<!DOCTYPE html>
<html>
<head>
    <title>Gari Deatils</title>
    <meta charset="utf-8">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="gariView.css">     
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery-1.11.1.min.js"></script>
<!--   <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script> -->


  <script src="js/bootstrap.min.js"></script>
<!-- footer css -->
<link rel="stylesheet" href="foot.css">
<!--// footer css -->
<link href="css/style2.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />


<script src="js/smoothbox.min.js" type="text/javascript"></script>
<link href="css/smoothbox.css" rel="stylesheet"> 
    



</head>

<style >
    
.m{

 height: 200px;
    width:270px;
   background-color: powderblue;


}

</style>


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
                                <a href="buy.php" class="dropdown-toggle hyper"  ><span>BUY<b class="caret"></b></span></a>
                               <!--  <ul class="dropdown-menu multi">
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
                            
                                <a href="compare.php" class="dropdown-toggle hyper"  ><span> Compare </span></a>
                                
                            </li>
                           <!--  <li class="dropdown">
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
                                       <!--  <div class="col-sm-3">
                                            
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

<div class="container-fluid">





    <?php 

// all data show one by one id
 
$sql="SELECT * FROM gari where id=$id ";
$qResult=$conn->query($sql);

 $data=[];

if ($qResult->num_rows > 0) {
        // output data of each row
        while($row = $qResult->fetch_assoc()) { 
             $data[]=$row;
        
    ?>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <?php
                        foreach ($data as $key => $value) {?>

                    <h3 class="car-detail-title"  ><?php echo $value['Year']; ?> <?php echo $value['Model']; ?> <?php echo $value['Grade']; ?></h3>

                       <?php }?>  
                    <h4 class="car-detail-owner" >Cargari <a href="All_gari.php" class="car-detail-seemore">See More</a></h4>
                    <table class="table car-detail-stockno">
                        <tbody><tr>
                            <td width="90">STOCK NO</td>
                          <?php
                        foreach ($data as $key => $value) {?>   <td><?php echo $value['Stock_no']; ?></td>
                       <?php }?>  
                        </tr>
                    </tbody></table>
                    <div class="addthis_inline_share_toolbox" data-url="http://www.bhalogari.com/Car/Details?carId=8" data-title="BHALOGARI.COM | Toyota Harrier" data-description="The Toyota Harrier also known as the Lexus RX seamlessly blends luxury and function. It is available with optional all-wheel drive, giving it excellent performance in foul weather. It is finished in the finest of materials and has a wide array of convenience features. Being a Toyota, it is also extremely reliable and has low maintenance costs. Harrier is the ultimate high-end SUV." style="clear: both;"><div id="atstbx" class="at-resp-share-element at-style-responsive addthis-smartlayers addthis-animated at4-show" aria-labelledby="at-dbcb8713-83e7-47a7-aa05-448c973525fa" role="region"><span id="at-dbcb8713-83e7-47a7-aa05-448c973525fa" class="at4-visually-hidden">AddThis Sharing Buttons</span><div class="at-share-btn-elements"><a role="button" tabindex="1" class="at-icon-wrapper at-share-btn at-svc-facebook" style="background-color: rgb(59, 89, 152); border-radius: 0px;"><span class="at4-visually-hidden">Share to Facebook</span><span class="at-icon-wrapper" style="line-height: 20px; height: 20px; width: 20px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-facebook-1" style="fill: rgb(255, 255, 255); width: 20px; height: 20px;" class="at-icon at-icon-facebook"><title id="at-svg-facebook-1">Facebook</title><g><path d="M22 5.16c-.406-.054-1.806-.16-3.43-.16-3.4 0-5.733 1.825-5.733 5.17v2.882H9v3.913h3.837V27h4.604V16.965h3.823l.587-3.913h-4.41v-2.5c0-1.123.347-1.903 2.198-1.903H22V5.16z" fill-rule="evenodd"></path></g></svg></span></a><a role="button" tabindex="1" class="at-icon-wrapper at-share-btn at-svc-twitter" style="background-color: rgb(29, 161, 242); border-radius: 0px;"><span class="at4-visually-hidden">Share to Twitter</span><span class="at-icon-wrapper" style="line-height: 20px; height: 20px; width: 20px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-twitter-2" style="fill: rgb(255, 255, 255); width: 20px; height: 20px;" class="at-icon at-icon-twitter"><title id="at-svg-twitter-2">Twitter</title><g><path d="M27.996 10.116c-.81.36-1.68.602-2.592.71a4.526 4.526 0 0 0 1.984-2.496 9.037 9.037 0 0 1-2.866 1.095 4.513 4.513 0 0 0-7.69 4.116 12.81 12.81 0 0 1-9.3-4.715 4.49 4.49 0 0 0-.612 2.27 4.51 4.51 0 0 0 2.008 3.755 4.495 4.495 0 0 1-2.044-.564v.057a4.515 4.515 0 0 0 3.62 4.425 4.52 4.52 0 0 1-2.04.077 4.517 4.517 0 0 0 4.217 3.134 9.055 9.055 0 0 1-5.604 1.93A9.18 9.18 0 0 1 6 23.85a12.773 12.773 0 0 0 6.918 2.027c8.3 0 12.84-6.876 12.84-12.84 0-.195-.005-.39-.014-.583a9.172 9.172 0 0 0 2.252-2.336" fill-rule="evenodd"></path></g></svg></span></a><a role="button" tabindex="1" class="at-icon-wrapper at-share-btn at-svc-google_plusone_share" style="background-color: rgb(220, 78, 65); border-radius: 0px;"><span class="at4-visually-hidden">Share to Google+</span><span class="at-icon-wrapper" style="line-height: 20px; height: 20px; width: 20px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-google_plusone_share-3" style="fill: rgb(255, 255, 255); width: 20px; height: 20px;" class="at-icon at-icon-google_plusone_share"><title id="at-svg-google_plusone_share-3">Google+</title><g><path d="M12 15v2.4h3.97c-.16 1.03-1.2 3.02-3.97 3.02-2.39 0-4.34-1.98-4.34-4.42s1.95-4.42 4.34-4.42c1.36 0 2.27.58 2.79 1.08l1.9-1.83C15.47 9.69 13.89 9 12 9c-3.87 0-7 3.13-7 7s3.13 7 7 7c4.04 0 6.72-2.84 6.72-6.84 0-.46-.05-.81-.11-1.16H12zm15 0h-2v-2h-2v2h-2v2h2v2h2v-2h2v-2z" fill-rule="evenodd"></path></g></svg></span></a><a role="button" tabindex="1" class="at-icon-wrapper at-share-btn at-svc-email" style="background-color: rgb(132, 132, 132); border-radius: 0px;"><span class="at4-visually-hidden">Share to Email</span><span class="at-icon-wrapper" style="line-height: 20px; height: 20px; width: 20px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-email-4" style="fill: rgb(255, 255, 255); width: 20px; height: 20px;" class="at-icon at-icon-email"><title id="at-svg-email-4">Email</title><g><g fill-rule="evenodd"></g><path d="M27 22.757c0 1.24-.988 2.243-2.19 2.243H7.19C5.98 25 5 23.994 5 22.757V13.67c0-.556.39-.773.855-.496l8.78 5.238c.782.467 1.95.467 2.73 0l8.78-5.238c.472-.28.855-.063.855.495v9.087z"></path><path d="M27 9.243C27 8.006 26.02 7 24.81 7H7.19C5.988 7 5 8.004 5 9.243v.465c0 .554.385 1.232.857 1.514l9.61 5.733c.267.16.8.16 1.067 0l9.61-5.733c.473-.283.856-.96.856-1.514v-.465z"></path></g></svg></span></a></div></div></div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <!-- <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="slider slick-initialized slick-slider"><button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button" style="display: block;">Previous</button>
                            <div aria-live="polite" class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 5096px; transform: translate3d(-1176px, 0px, 0px);" role="listbox"><div class="slider-section slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" style="width: 377px;" tabindex="-1">
                                <img src="/Media/Images/21d4fc79-71ce-4054-b401-3091799b1d9c_th.jpg" class="img-responsive">
                            </div><div class="slider-section slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" style="width: 377px;" tabindex="-1">
                                <img src="/Media/Images/7eb0f212-616c-43a8-921b-3f894653a47c_th.jpg" class="img-responsive">
                            </div><div class="slider-section slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 377px;" tabindex="-1">
                                <img src="/Media/Images/1409960c-0a5f-43a9-8e0b-04dc13356d91_th.jpg" class="img-responsive">
                            </div><div class="slider-section slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 377px;" tabindex="-1" role="option" aria-describedby="slick-slide00">
                                <img src="/Media/Images/3701f386-9bd5-424b-8d23-fc1bdcd1e731_th.jpg" class="img-responsive">
                            </div><div class="slider-section slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 377px;" tabindex="-1" role="option" aria-describedby="slick-slide01">
                                <img src="/Media/Images/c2e017a2-75b2-4119-aa71-8ebdeaa2be0a_th.jpg" class="img-responsive">
                            </div><div class="slider-section slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 377px;" tabindex="-1" role="option" aria-describedby="slick-slide02">
                                <img src="/Media/Images/8427812b-df6d-47eb-83b6-fb576c5f6644_th.jpg" class="img-responsive">
                            </div><div class="slider-section slick-slide" data-slick-index="3" aria-hidden="true" style="width: 377px;" tabindex="-1" role="option" aria-describedby="slick-slide03">
                                <img src="/Media/Images/754d43ac-22c9-488e-8dea-b3a5e45d28b5_th.jpg" class="img-responsive">
                            </div><div class="slider-section slick-slide" data-slick-index="4" aria-hidden="true" style="width: 377px;" tabindex="-1" role="option" aria-describedby="slick-slide04">
                                <img src="/Media/Images/21d4fc79-71ce-4054-b401-3091799b1d9c_th.jpg" class="img-responsive">
                            </div><div class="slider-section slick-slide" data-slick-index="5" aria-hidden="true" style="width: 377px;" tabindex="-1" role="option" aria-describedby="slick-slide05">
                                <img src="/Media/Images/7eb0f212-616c-43a8-921b-3f894653a47c_th.jpg" class="img-responsive">
                            </div><div class="slider-section slick-slide" data-slick-index="6" aria-hidden="true" style="width: 377px;" tabindex="-1" role="option" aria-describedby="slick-slide06">
                                <img src="/Media/Images/1409960c-0a5f-43a9-8e0b-04dc13356d91_th.jpg" class="img-responsive">
                            </div><div class="slider-section slick-slide slick-cloned" data-slick-index="7" aria-hidden="true" style="width: 377px;" tabindex="-1">
                                <img src="/Media/Images/3701f386-9bd5-424b-8d23-fc1bdcd1e731_th.jpg" class="img-responsive">
                            </div><div class="slider-section slick-slide slick-cloned" data-slick-index="8" aria-hidden="true" style="width: 377px;" tabindex="-1">
                                <img src="/Media/Images/c2e017a2-75b2-4119-aa71-8ebdeaa2be0a_th.jpg" class="img-responsive">
                            </div><div class="slider-section slick-slide slick-cloned" data-slick-index="9" aria-hidden="true" style="width: 377px;" tabindex="-1">
                                <img src="/Media/Images/8427812b-df6d-47eb-83b6-fb576c5f6644_th.jpg" class="img-responsive">
                            </div></div></div>
                            
                            
                            
                            
                            
                            
                    <button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="display: block;">Next</button></div>

                    <br>
                    <a href="#" class="btn btn-primary pull-right" onclick="openGallery()">PHOTO GALLERY</a>

                </div>
            </div>

            <div class="gallery">
                    <a href="/Media/Images/3701f386-9bd5-424b-8d23-fc1bdcd1e731.jpg"></a>
                    <a href="/Media/Images/c2e017a2-75b2-4119-aa71-8ebdeaa2be0a.jpg"></a>
                    <a href="/Media/Images/8427812b-df6d-47eb-83b6-fb576c5f6644.jpg"></a>
                    <a href="/Media/Images/754d43ac-22c9-488e-8dea-b3a5e45d28b5.jpg"></a>
                    <a href="/Media/Images/21d4fc79-71ce-4054-b401-3091799b1d9c.jpg"></a>
                    <a href="/Media/Images/7eb0f212-616c-43a8-921b-3f894653a47c.jpg"></a>
                    <a href="/Media/Images/1409960c-0a5f-43a9-8e0b-04dc13356d91.jpg"></a>
            </div>
        </div> -->

                      <!-- Slider 1 -->
<?php 


//photo show in slider 

$bo1=$row['Stock_no'];



$sql="SELECT * FROM photos where Stock_no1='$bo1' ";

// die($sql);
$price_list=$conn->query($sql);
if ($price_list->num_rows > 0) {
        // output data of each row
        while($row = $price_list->fetch_assoc()) {
   $e[]=$row;}}

 ?>
 <link rel="stylesheet" href="tiny-slider.css">
  <link rel="stylesheet" href="tStyle.css">
    <!-- <link rel="stylesheet" href="styles.css"> --><!--[if (IE 8)&!(IEMobile)]>
  <script src="../dist/tiny-slider.helper.ie8.js"></script>
  <![endif]-->

    <script src="tiny-slider.js"></script>

<div class="container">
    <div class="slider-container">
      <div id="responsive7_wrapper">
       
        <div class="responsive7" id="responsive7">
        <?php foreach ($e as $key => $value){ ?>  <div class="item">
             
            <div class="">
              <a href="<?php echo $value['photo']; ?>" class="sb"><img src="<?php echo $value['photo']; ?>"></a>
            </div>
           
          

          </div><?php } ?>
          <!-- <div class="item">
            <div class="">
              <a href=""><img src="4.jpg"></a>
            </div>
            <p>
              Corrupti, libero minima nihil expedita officiis? Quo.
            </p>
          </div> -->
          <!-- <div class="item">
            <div >
              <a href="">2</a>
            </div>
            <p>
              Alias rem, ab impedit recusandae repellat tempore.
            </p>
          </div>
          <div class="item">
            <div >
              <a href="">3</a>
            </div>
            <p>
              Nisi inventore quo delectus perspiciatis voluptatibus, quae.
            </p>
          </div>
          <div class="item">
            <div>
              <a href="">4</a>
            </div>
            <p>
              Nisi harum earum consectetur laudantium iusto, laboriosam.
            </p>
          </div>
          <div class="item">
            <div ">
              <a href="">5</a>
            </div>
            <p>
              Dolores blanditiis neque, quis vitae? Reprehenderit, aliquam.
            </p>
          </div>
          <div class="item">
            <div >
              <a href="">6</a>
            </div>
            <p>
              Omnis dolorum eum blanditiis, ratione voluptates quod.
            </p>
          </div>
           <div class="item">
            <div class="img img-4">
              <a href="">7</a>
            </div>
            <p>
              Omnis dolorum eum blanditiis, ratione voluptates quod.
            </p>
          </div>
           <div class="item">
            <div class="img img-7">
              <a href="">8</a>
            </div>
            <p>
              Omnis dolorum eum blanditiis, ratione voluptates quod.
            </p>
          </div>
           <div class="item">
            <div class="img img-5">
              <a href="">9</a>
            </div>
            <p>
              Omnis dolorum eum blanditiis, ratione voluptates quod.
            </p>
          </div> -->
        </div>
      </div>
    </div>
    <script>
    var isTestPage,
      initFns = {},
      doc = document,
      isDemoPage = doc.body.getAttribute('data-page') === 'demos',
      classIn = (doc.body.getAttribute('data-page') === 'demos') ? 'jello' : 'tns-fadeIn',
      classOut = (doc.body.getAttribute('data-page') === 'demos') ? 'rollOut' : 'tns-fadeOut',
      sliders = new Object(),
      speed = Number(document.body.getAttribute('data-speed')),
      edgepadding = 50,
      gutter = 10;
    </script> 
    <script src="options1.js"></script> 
    <script src="run.js"></script>
    
</div>
<!-- Slider 1 -->

    </section>


    <section>
        <div class="container">

            <br><br>
            <div class="row">
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="car-detail-header">VEHICLE OUTLINE</h3>
                            <br>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-xs-6 car-detail-f-label">Make</div>
                                 <?php
                        foreach ($data as $key => $value) {?>
                                <div class="col-xs-6 text-right car-detail-f-value"><?php echo $value['Make']; ?></div> <?php } ?>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 car-detail-f-label">Model</div>
                                 <?php
                        foreach ($data as $key => $value) {?>
                                <div class="col-xs-6 text-right car-detail-f-value"><?php echo $value['Model']; ?></div><?php } ?>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 car-detail-f-label">Body Type</div>
                                 <?php
                        foreach ($data as $key => $value) {?>
                                <div class="col-xs-6 text-right car-detail-f-value"><?php echo $value['Body_Type']; ?></div> <?php } ?>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 car-detail-f-label">Year (MFG)</div>
                                 <?php
                        foreach ($data as $key => $value) {?>
                                <div class="col-xs-6 text-right car-detail-f-value"><?php echo $value['Year']; ?></div> <?php } ?>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 car-detail-f-label">Capacity</div>
                                 <?php
                        foreach ($data as $key => $value) {?>
                                <div class="col-xs-6 text-right car-detail-f-value"><?php echo $value['Capacity']; ?></div> <?php } ?>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 car-detail-f-label">Exterior Color</div>
                                 <?php
                        foreach ($data as $key => $value) {?>
                                <div class="col-xs-6 text-right car-detail-f-value"><?php echo $value['Exterior_Color']; ?></div>  <?php } ?>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 car-detail-f-label">Interior Color</div
                                     <?php
                        foreach ($data as $key => $value) {?>>
                                    <div class="col-xs-6 text-right car-detail-f-value"><?php echo $value['Interior_Color']; ?></div> <?php } ?>
                            </div>

                        </div>

                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-xs-6 car-detail-f-label">Chassis No.</div>
                                <div class="col-xs-6 text-right car-detail-f-value">N/A</div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 car-detail-f-label">Engine</div>
                                 <?php
                        foreach ($data as $key => $value) {?>
                                <div class="col-xs-6 text-right car-detail-f-value"><?php echo $value['Engine']; ?></div> <?php } ?>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 car-detail-f-label">TRANSMISSION</div>
                                 <?php
                        foreach ($data as $key => $value) {?>
                                <div class="col-xs-6 text-right car-detail-f-value"><?php echo $value['Transmission']; ?></div> <?php } ?>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 car-detail-f-label">Fuel Type</div>
                                 <?php
                        foreach ($data as $key => $value) {?>
                                <div class="col-xs-6 text-right car-detail-f-value"><?php echo $value['Fuel_Type']; ?></div> <?php } ?>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 car-detail-f-label">Drive Type</div>
                                 <?php
                        foreach ($data as $key => $value) {?>
                                <div class="col-xs-6 text-right car-detail-f-value"><?php echo $value['drive_Type']; ?></div> <?php } ?>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 car-detail-f-label">Tyre</div>
                                 <?php
                        foreach ($data as $key => $value) {?>
                                <div class="col-xs-6 text-right car-detail-f-value"><?php echo $value['Tyre']; ?></div> <?php } ?>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 car-detail-f-label">Mileage</div>
                                 <?php
                        foreach ($data as $key => $value) {?>
                                <div class="col-xs-6 text-right car-detail-f-value"><?php echo $value['Mileage']; ?> km</div> <?php } ?>
                            </div>

                        </div>
                    </div> 
                    <br><br>

<?php 

// Key FEATURES show

$boo=$value['Stock_no'];




$sql="SELECT * FROM `key` where Stock_no2='$boo' ";

// die($sql);
$price_list=$conn->query($sql);
if ($price_list->num_rows > 0) {
        // output data of each row
        while($row = $price_list->fetch_assoc()) {

   $m[]=$row;
           }
         }





 ?>

                    <div class="row">

             <div class="col-sm-12">
                            <h3 class="car-detail-header">KEY FEATURES</h3>
                            <br>
             </div>

<?php  foreach ($m as $key => $value) {?>
                        <div class="col-sm-4">
                            

                            <ul class="inline-list key-feature-list">

                                    <li>
                                       

                                        <div class="pull-left">

                                            <label class="product-detail-keyfeature">◉ </label>
                                        </div>
           
   

                                        <div class="list-content">
                                                                       
                                            <label for="Make94"><?php echo $value['Features']; ?></label>
                                           
                                            
                                        </div>
                                    
                                    </li>
                                   <!--  <li>
                                        <div class="pull-left">
                                            <label class="product-detail-keyfeature">◉ </label>
                                        </div>

                                        <div class="list-content">
                                            <label for="Make1127">Adaptive Headlight(s) </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left">
                                            <label class="product-detail-keyfeature">◉ </label>
                                        </div>
                                        <div class="list-content">
                                            <label for="Make95">Air Conditioning </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left">
                                            <label class="product-detail-keyfeature">◉ </label>
                                        </div>
                                        <div class="list-content">
                                            <label for="Make96">Alloy Wheels </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left">
                                            <label class="product-detail-keyfeature">◉ </label>
                                        </div>
                                        <div class="list-content">
                                            <label for="Make97">AM/FM Stereo </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left">
                                            <label class="product-detail-keyfeature">◉ </label>
                                        </div>
                                        <div class="list-content">
                                            <label for="Make98">Auto Transmission </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left">
                                            <label class="product-detail-keyfeature">◉ </label>
                                        </div>
                                        <div class="list-content">
                                            <label for="Make102">CD Audio </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left">
                                            <label class="product-detail-keyfeature">◉ </label>
                                        </div>
                                        <div class="list-content">
                                            <label for="Make110">Cruise Control </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left">
                                            <label class="product-detail-keyfeature">◉ </label>
                                        </div>
                                        <div class="list-content">
                                            <label for="Make2103">Crystal Break Light </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left">
                                            <label class="product-detail-keyfeature">◉ </label>
                                        </div>
                                        <div class="list-content">
                                            <label for="Make1099">Discharge Headlight </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left">
                                            <label class="product-detail-keyfeature">◉ </label>
                                        </div>
                                        <div class="list-content">
                                            <label for="Make1124">DVD Player </label>
                                        </div>
                                    </li> -->
                            </ul>


                        </div><?php } ?>
                        <!-- <div class="col-sm-4">
                            <ul class="inline-list key-feature-list">
                                    <li>
                                        <div class="pull-left">
                                            <label class="product-detail-keyfeature">◉</label>
                                        </div>
                                        <div class="list-content">
                                            <label for="Make1115">Fog Light </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left">
                                            <label class="product-detail-keyfeature">◉</label>
                                        </div>
                                        <div class="list-content">
                                            <label for="Make1107">HID-Headlights </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left">
                                            <label class="product-detail-keyfeature">◉</label>
                                        </div>
                                        <div class="list-content">
                                            <label for="Make114">Navigation Sys (GPS) </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left">
                                            <label class="product-detail-keyfeature">◉</label>
                                        </div>
                                        <div class="list-content">
                                            <label for="Make115">Overhead Airbags </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left">
                                            <label class="product-detail-keyfeature">◉</label>
                                        </div>
                                        <div class="list-content">
                                            <label for="Make120">Parking Sensors </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left">
                                            <label class="product-detail-keyfeature">◉</label>
                                        </div>
                                        <div class="list-content">
                                            <label for="Make116">Power Lock(s) </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left">
                                            <label class="product-detail-keyfeature">◉</label>
                                        </div>
                                        <div class="list-content">
                                            <label for="Make117">Power Mirror(s) </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left">
                                            <label class="product-detail-keyfeature">◉</label>
                                        </div>
                                        <div class="list-content">
                                            <label for="Make1134">Power Steering </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left">
                                            <label class="product-detail-keyfeature">◉</label>
                                        </div>
                                        <div class="list-content">
                                            <label for="Make125">Power WIndow(s) </label>
                                        </div>
                                    </li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <ul class="inline-list key-feature-list">
                                    <li>
                                        <div class="pull-left">
                                            <label class="product-detail-keyfeature">◉</label>
                                        </div>
                                        <div class="list-content">
                                            <label for="Make123">Premium Package </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left">
                                            <label class="product-detail-keyfeature">◉</label>
                                        </div>
                                        <div class="list-content">
                                            <label for="Make1108">Projector Light </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left">
                                            <label class="product-detail-keyfeature">◉</label>
                                        </div>
                                        <div class="list-content">
                                            <label for="Make1110">Push Start </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left">
                                            <label class="product-detail-keyfeature">◉</label>
                                        </div>
                                        <div class="list-content">
                                            <label for="Make1118">Rear Wiper </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left">
                                            <label class="product-detail-keyfeature">◉</label>
                                        </div>
                                        <div class="list-content">
                                            <label for="Make130">Side Airbags </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left">
                                            <label class="product-detail-keyfeature">◉</label>
                                        </div>
                                        <div class="list-content">
                                            <label for="Make132">Smart Key </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left">
                                            <label class="product-detail-keyfeature">◉</label>
                                        </div>
                                        <div class="list-content">
                                            <label for="Make1133">Travel Comfort </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left">
                                            <label class="product-detail-keyfeature">◉</label>
                                        </div>
                                        <div class="list-content">
                                            <label for="Make1131">TV </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left">
                                            <label class="product-detail-keyfeature">◉</label>
                                        </div>
                                        <div class="list-content">
                                            <label for="Make1130">Wooden Dashboard </label>
                                        </div>
                                    </li>
                            </ul>
                        </div> -->
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="car-detail-header">WARRANTIES AND SERVICING</h3>
                            <br>
                            <p>This vehicle is eligible for up to 1-Year of Free Check-up and Servicing.<br> For more extensive coverage, please consider the <strong class="text-bold text-uppercase">CARGARI EXTENDED SERVICING PLAN.</strong></p>
                        </div>
                    </div>

                    <br><br>
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="car-detail-header">USER REVIEW</h3>
                            <br>

                        </div>

                        <div class="col-sm-12">                          
                   
                               <p>No review found. Please <a href="register.php" title="Register" class="text-orange">Register</a> to review on a car.</p>

                        </div>
                    </div>

                    <br><br>
                </div>



                <div class="col-sm-4">
                    <div class="panel car-detail-panel">
                        <div class="panel-heading text-center car-detail-pricing-heading">
                            <?php
                        foreach ($data as $key => $value) {?>
                            <span class="car-detail-pricing-year"><?php echo $value['Year']; ?> </span>  <span class="car-detail-pricing-name"><?php echo $value['Model']; ?> <?php echo $value['Grade']; ?></span><br>
                            <span class="car-detail-pricing-mileage">
                                <?php echo $value['Mileage']; ?> km
                            </span> <?php } ?>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-6 car-detail-pricing-price">PRICE</div>
                                 <?php
                        foreach ($data as $key => $value) {?>
                                <div class="col-xs-6 text-right car-detail-pricing-price-value">৳ <br> <?php echo $value['price']; ?></div><?php } ?>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-xs-6 car-detail-pricing-shipping">Shipping</div>
                                <div class="col-xs-6 text-right car-detail-pricing-shipping-value">FREE</div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-xs-6 car-detail-pricing-total">Total</div>
                                 <?php
                        foreach ($data as $key => $value) {?>
                                <div class="col-xs-6 text-right car-detail-pricing-total-value">৳ <?php echo $value['price']; ?></div><?php } ?>
                            </div>
                            
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel car-detail-panel">
                                <div class="panel-body car-detail-available">
                                    <h3>AVAILABLE AT</h3>
                                    <p>
                                        CARGARI SHOWROOM <br>
                                        181-182 Tejgoan Industrial Area,Dhaka-1212<br>
                                        TEL: +88 02 8878052 +88 01700702644 +88 01700702645
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">

                        <div class="col-sm-12">
                            <div class="panel car-detail-panel">
                                <div class="panel-body car-detail-help">
                                    <h3>Still Need Help!</h3>
                                    <table class="car-detail-help-table">
                                        <tbody><tr>
                                            <td width="60">
                                                <a href="/faq">
                                                    <i class="fa fa-question-circle"></i>
                                                </a>

                                            </td>
                                            <td><a href="/faq"><span>Check Out<br>Our FAQS</span></a></td>

                                            <td>
                                                <div class="car-detail-help-separator">|</div>
                                            </td>


                                            <td>
                                                <span>Chat<br>With US</span>
                                            </td>
                                            <td width="60">
                                                <i class="fa fa-arrow-down"></i>
                                            </td>
                                        </tr>
                                    </tbody></table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <h3 class="car-detail-header">SIMILAR CARS</h3>
<!--             <div class="row">
                <div class="col-sm-12">
                    <h3 class="car-detail-header">SIMILAR CARS</h3>
                    <br>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">

                    <div class="slider slick-initialized slick-slider"><button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button" style="display: block;">Previous</button>
                            <div aria-live="polite" class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 7056px; transform: translate3d(-1176px, 0px, 0px);" role="listbox"><div class="slider-section slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" style="width: 377px;" tabindex="-1">
                                <a class="photo" href="/Car/Details?carId=1071" tabindex="-1">
                                    <img src="/Media/Images/8b7d43d9-3420-4865-8d2d-66443bcad94b_th.jpg" class="img-responsive">
                                </a>
                                <div class="slider-content">
                                    <div class="slider-title">
                                        Honda Vezel X Stylish Package 
                                    </div>
                                    <div class="dolar-title">
                                        Contact Sales
                                    </div>
                                </div>
                            </div><div class="slider-section slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" style="width: 377px;" tabindex="-1">
                                <a class="photo" href="/Car/Details?carId=3" tabindex="-1">
                                    <img src="/Media/Images/0dcaabbe-8960-46e3-9bee-ba2d99107748_th.jpg" class="img-responsive">
                                </a>
                                <div class="slider-content">
                                    <div class="slider-title">
                                        Honda Vezel Hybrid HV &nbsp;Z
                                    </div>
                                    <div class="dolar-title">
                                        Contact Sales
                                    </div>
                                </div>
                            </div><div class="slider-section slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 377px;" tabindex="-1">
                                <a class="photo" href="/Car/Details?carId=9" tabindex="-1">
                                    <img src="/Media/Images/549ec8ed-456e-4654-97de-17e1bb89274d_th.jpg" class="img-responsive">
                                </a>
                                <div class="slider-content">
                                    <div class="slider-title">
                                        Nissan X-TRAIL
                                    </div>
                                    <div class="dolar-title">
                                        Contact Sales
                                    </div>
                                </div>
                            </div><div class="slider-section slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 377px;" tabindex="-1" role="option" aria-describedby="slick-slide10">
                                <a class="photo" href="/Car/Details?carId=1036" tabindex="0">
                                    <img src="/Media/Images/0abd37ba-4386-4700-96cc-d28d3110e4d4_th.jpg" class="img-responsive">
                                </a>
                                <div class="slider-content">
                                    <div class="slider-title">
                                        NISSAN JUKE
                                    </div>
                                    <div class="dolar-title">
                                        Contact Sales
                                    </div>
                                </div>
                            </div><div class="slider-section slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 377px;" tabindex="-1" role="option" aria-describedby="slick-slide11">
                                <a class="photo" href="/Car/Details?carId=8" tabindex="0">
                                    <img src="/Media/Images/3701f386-9bd5-424b-8d23-fc1bdcd1e731_th.jpg" class="img-responsive">
                                </a>
                                <div class="slider-content">
                                    <div class="slider-title">
                                        Toyota Harrier
                                    </div>
                                    <div class="dolar-title">
                                        Contact Sales
                                    </div>
                                </div>
                            </div><div class="slider-section slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 377px;" tabindex="-1" role="option" aria-describedby="slick-slide12">
                                <a class="photo" href="/Car/Details?carId=1070" tabindex="0">
                                    <img src="/Media/Images/a4c501be-f112-40a2-a13c-0b16277d97b8_th.jpg" class="img-responsive">
                                </a>
                                <div class="slider-content">
                                    <div class="slider-title">
                                        Honda Vezel
                                    </div>
                                    <div class="dolar-title">
                                        Contact Sales
                                    </div>
                                </div>
                            </div><div class="slider-section slick-slide" data-slick-index="3" aria-hidden="true" style="width: 377px;" tabindex="-1" role="option" aria-describedby="slick-slide13">
                                <a class="photo" href="/Car/Details?carId=22" tabindex="-1">
                                    <img src="/Media/Images/38f62c37-c2d3-4092-b36f-54f47ec2db1b_th.jpg" class="img-responsive">
                                </a>
                                <div class="slider-content">
                                    <div class="slider-title">
                                        Honda Vezel  
                                    </div>
                                    <div class="dolar-title">
                                        Contact Sales
                                    </div>
                                </div>
                            </div><div class="slider-section slick-slide" data-slick-index="4" aria-hidden="true" style="width: 377px;" tabindex="-1" role="option" aria-describedby="slick-slide14">
                                <a class="photo" href="/Car/Details?carId=1041" tabindex="-1">
                                    <img src="/Media/Images/f710e7bc-170c-42c4-85b0-2b682eed5b5a_th.jpg" class="img-responsive">
                                </a>
                                <div class="slider-content">
                                    <div class="slider-title">
                                        Honda Vezel Hybrid
                                    </div>
                                    <div class="dolar-title">
                                        Contact Sales
                                    </div>
                                </div>
                            </div><div class="slider-section slick-slide" data-slick-index="5" aria-hidden="true" style="width: 377px;" tabindex="-1" role="option" aria-describedby="slick-slide15">
                                <a class="photo" href="/Car/Details?carId=1072" tabindex="-1">
                                    <img src="/Media/Images/bbeb8306-0079-4358-ae5d-5c52978f8b40_th.jpg" class="img-responsive">
                                </a>
                                <div class="slider-content">
                                    <div class="slider-title">
                                        Honda Vezel Hybrid HV X AWD
                                    </div>
                                    <div class="dolar-title">
                                        Contact Sales
                                    </div>
                                </div>
                            </div><div class="slider-section slick-slide" data-slick-index="6" aria-hidden="true" style="width: 377px;" tabindex="-1" role="option" aria-describedby="slick-slide16">
                                <a class="photo" href="/Car/Details?carId=13" tabindex="-1">
                                    <img src="/Media/Images/1e8c5ccd-f1b7-4569-8b01-dc9365457710_th.jpg" class="img-responsive">
                                </a>
                                <div class="slider-content">
                                    <div class="slider-title">
                                        Toyota Harrier
                                    </div>
                                    <div class="dolar-title">
                                        Contact Sales
                                    </div>
                                </div>
                            </div><div class="slider-section slick-slide" data-slick-index="7" aria-hidden="true" style="width: 377px;" tabindex="-1" role="option" aria-describedby="slick-slide17">
                                <a class="photo" href="/Car/Details?carId=1040" tabindex="-1">
                                    <img src="/Media/Images/8ee65f2a-520e-4ca1-a969-684a4b8f2a3f_th.jpg" class="img-responsive">
                                </a>
                                <div class="slider-content">
                                    <div class="slider-title">
                                        NISSAN X-TRAIL 20x Emergency
                                    </div>
                                    <div class="dolar-title">
                                        Contact Sales
                                    </div>
                                </div>
                            </div><div class="slider-section slick-slide" data-slick-index="8" aria-hidden="true" style="width: 377px;" tabindex="-1" role="option" aria-describedby="slick-slide18">
                                <a class="photo" href="/Car/Details?carId=1037" tabindex="-1">
                                    <img src="/Media/Images/fa703d5b-9548-4386-a0aa-784ffe2c1807_th.jpg" class="img-responsive">
                                </a>
                                <div class="slider-content">
                                    <div class="slider-title">
                                        Toyota HARRIER Hybrid Premium
                                    </div>
                                    <div class="dolar-title">
                                        Contact Sales
                                    </div>
                                </div>
                            </div><div class="slider-section slick-slide" data-slick-index="9" aria-hidden="true" style="width: 377px;" tabindex="-1" role="option" aria-describedby="slick-slide19">
                                <a class="photo" href="/Car/Details?carId=1071" tabindex="-1">
                                    <img src="/Media/Images/8b7d43d9-3420-4865-8d2d-66443bcad94b_th.jpg" class="img-responsive">
                                </a>
                                <div class="slider-content">
                                    <div class="slider-title">
                                        Honda Vezel X Stylish Package 
                                    </div>
                                    <div class="dolar-title">
                                        Contact Sales
                                    </div>
                                </div>
                            </div><div class="slider-section slick-slide" data-slick-index="10" aria-hidden="true" style="width: 377px;" tabindex="-1" role="option" aria-describedby="slick-slide110">
                                <a class="photo" href="/Car/Details?carId=3" tabindex="-1">
                                    <img src="/Media/Images/0dcaabbe-8960-46e3-9bee-ba2d99107748_th.jpg" class="img-responsive">
                                </a>
                                <div class="slider-content">
                                    <div class="slider-title">
                                        Honda Vezel Hybrid HV &nbsp;Z
                                    </div>
                                    <div class="dolar-title">
                                        Contact Sales
                                    </div>
                                </div>
                            </div><div class="slider-section slick-slide" data-slick-index="11" aria-hidden="true" style="width: 377px;" tabindex="-1" role="option" aria-describedby="slick-slide111">
                                <a class="photo" href="/Car/Details?carId=9" tabindex="-1">
                                    <img src="/Media/Images/549ec8ed-456e-4654-97de-17e1bb89274d_th.jpg" class="img-responsive">
                                </a>
                                <div class="slider-content">
                                    <div class="slider-title">
                                        Nissan X-TRAIL
                                    </div>
                                    <div class="dolar-title">
                                        Contact Sales
                                    </div>
                                </div>
                            </div><div class="slider-section slick-slide slick-cloned" data-slick-index="12" aria-hidden="true" style="width: 377px;" tabindex="-1">
                                <a class="photo" href="/Car/Details?carId=1036" tabindex="-1">
                                    <img src="/Media/Images/0abd37ba-4386-4700-96cc-d28d3110e4d4_th.jpg" class="img-responsive">
                                </a>
                                <div class="slider-content">
                                    <div class="slider-title">
                                        NISSAN JUKE
                                    </div>
                                    <div class="dolar-title">
                                        Contact Sales
                                    </div>
                                </div>
                            </div><div class="slider-section slick-slide slick-cloned" data-slick-index="13" aria-hidden="true" style="width: 377px;" tabindex="-1">
                                <a class="photo" href="/Car/Details?carId=8" tabindex="-1">
                                    <img src="/Media/Images/3701f386-9bd5-424b-8d23-fc1bdcd1e731_th.jpg" class="img-responsive">
                                </a>
                                <div class="slider-content">
                                    <div class="slider-title">
                                        Toyota Harrier
                                    </div>
                                    <div class="dolar-title">
                                        Contact Sales
                                    </div>
                                </div>
                            </div><div class="slider-section slick-slide slick-cloned" data-slick-index="14" aria-hidden="true" style="width: 377px;" tabindex="-1">
                                <a class="photo" href="/Car/Details?carId=1070" tabindex="-1">
                                    <img src="/Media/Images/a4c501be-f112-40a2-a13c-0b16277d97b8_th.jpg" class="img-responsive">
                                </a>
                                <div class="slider-content">
                                    <div class="slider-title">
                                        Honda Vezel
                                    </div>
                                    <div class="dolar-title">
                                        Contact Sales
                                    </div>
                                </div>
                            </div></div></div>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                    <button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="display: block;">Next</button></div>
                </div>
            </div> -->


<!-- Slider 2 -->
<br>
<?php 

// similer car show

$bo=$value['cat'];



$sql="SELECT * FROM gari where cat='$bo' ";

// die($sql);
$price_list=$conn->query($sql);
if ($price_list->num_rows > 0) {
        // output data of each row
        while($row = $price_list->fetch_assoc()) {
   $d[]=$row;}}

 ?>

 <link rel="stylesheet" href="tiny-slider.css">
  <link rel="stylesheet" href="tStyle.css">
   <!--  <link rel="stylesheet" href="styles.css"> --><!--[if (IE 8)&!(IEMobile)]>
  <script src="../dist/tiny-slider.helper.ie8.js"></script>
  <![endif]-->

    <script src="tiny-slider.js"></script>
  </head>
  <body data-speed="0" data-page="responsive2">
    <div class="slider-container">
      <div id="responsive2_wrapper">
       
        <div class="responsive2" id="responsive2">
        <?php foreach ($d as $key => $value){ ?>  <div class="item">
             
            <div class="">
              <a href="gariView.php?id=<?php echo $value['id']; ?>"><img src="<?php echo $value['photo']; ?>"></a>
            </div>

            <p class="text-center">
              <?php echo $value['Model']; ?><br>
              Contact Sales
            </p> 
            
          </div><?php } ?>
          <!-- <div class="item">
            <div class="">
              <a href=""><img src="4.jpg"></a>
            </div>
            <p>
              Corrupti, libero minima nihil expedita officiis? Quo.
            </p>
          </div> -->
          <!-- <div class="item">
            <div >
              <a href="">2</a>
            </div>
            <p>
              Alias rem, ab impedit recusandae repellat tempore.
            </p>
          </div>
          <div class="item">
            <div >
              <a href="">3</a>
            </div>
            <p>
              Nisi inventore quo delectus perspiciatis voluptatibus, quae.
            </p>
          </div>
          <div class="item">
            <div>
              <a href="">4</a>
            </div>
            <p>
              Nisi harum earum consectetur laudantium iusto, laboriosam.
            </p>
          </div>
          <div class="item">
            <div ">
              <a href="">5</a>
            </div>
            <p>
              Dolores blanditiis neque, quis vitae? Reprehenderit, aliquam.
            </p>
          </div>
          <div class="item">
            <div >
              <a href="">6</a>
            </div>
            <p>
              Omnis dolorum eum blanditiis, ratione voluptates quod.
            </p>
          </div>
           <div class="item">
            <div class="img img-4">
              <a href="">7</a>
            </div>
            <p>
              Omnis dolorum eum blanditiis, ratione voluptates quod.
            </p>
          </div>
           <div class="item">
            <div class="img img-7">
              <a href="">8</a>
            </div>
            <p>
              Omnis dolorum eum blanditiis, ratione voluptates quod.
            </p>
          </div>
           <div class="item">
            <div class="img img-5">
              <a href="">9</a>
            </div>
            <p>
              Omnis dolorum eum blanditiis, ratione voluptates quod.
            </p>
          </div> -->
        </div>
      </div>
    </div>
    <script>
    var isTestPage,
      initFns = {},
      doc = document,
      isDemoPage = doc.body.getAttribute('data-page') === 'demos',
      classIn = (doc.body.getAttribute('data-page') === 'demos') ? 'jello' : 'tns-fadeIn',
      classOut = (doc.body.getAttribute('data-page') === 'demos') ? 'rollOut' : 'tns-fadeOut',
      sliders = new Object(),
      speed = Number(document.body.getAttribute('data-speed')),
      edgepadding = 50,
      gutter = 10;
    </script> 
    <script src="options.js"></script> 
    <script src="run.js"></script>
    




<?php

 // End first query if and while 

 // all table data get 
    }
        
        } ?>
<!-- Slider 2 -->


        </div>



    </section>

    <section class="container-fluid" style="background-image:url('mm.jpg'); min-height:120px;">
        <div class="container">
            <div class="row" style="margin-top:45px;">
                <div class="col-sm-8">
                    <h1 style=" color:white!important;"><i class="fa fa-headphones" aria-hidden="true"></i> NEED A HAND TO FIND YOUR CAR ?</h1>
                </div>
                <div class="col-sm-4">
                    <a href="register.php" class="btn btn-registration-yellow pull-right">FREE REGISTRATION</a> <a href="contact.php" class="btn btn-primary pull-right" style="margin-right:10px">CONTACT US</a>
                </div>
            </div>
        </div>
    </section>



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
                    <!-- <a href="#"><img src="/Content/BhaloGariTheme/Images/logo_footer.PNG"></a> -->
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








</body>
</html>