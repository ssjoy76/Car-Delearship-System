<?php

 include_once ('connection.php'); 

$make="";
$bodyt="";
$interior="";
$exterior="";
// $size="";
// $eprice="";
$make = isset($_REQUEST['make'])?$_REQUEST['make']:"";
 $bodyt = isset($_REQUEST['bodyt'])?$_REQUEST['bodyt']:"";
  $interior = isset($_REQUEST['interior'])?$_REQUEST['interior']:"";
    $exterior = isset($_REQUEST['exterior'])?$_REQUEST['exterior']:"";
    $dept1 = isset($_REQUEST['dept'])?$_REQUEST['dept']:"";
// $size = isset($_REQUEST['size'])?$_REQUEST['size']:"";
// $sprice = isset($_REQUEST['sprice'])?$_REQUEST['sprice']:"";
// $eprice = isset($_REQUEST['eprice'])?$_REQUEST['eprice']:"";

	     $query = "select * from gari where product_status = '0' AND New_old='New'"; 
		 
		           //filter query start 
					  if(!empty($make)){
						  $makedata =implode("','",$make);
						  $query  .= " and Make in('$makedata')";

					  }
					  
					   if(!empty($bodyt)){
						  $bodytypedata =implode("','",$bodyt);
						  $query  .= " and Body_Type in('$bodytypedata')";

					  }
					  
					  if(!empty($interior)){
						  $interiordata =implode("','",$interior);
						  $query  .= " and Interior_Color in('$interiordata')"; 
					  }
					  if(!empty($exterior)){
						  $exteriordata =implode("','",$exterior);
						  $query  .= " and Exterior_Color in('$exteriordata')"; 
					  }
					 

					  // if(!empty($sprice) && !empty($eprice)){
						 //  $query  .= " and product_price >='$sprice' and product_price <='$eprice'"; 
					  // }
                      
				  //    $rs = mysqli_query($conn,$query) or die("Error : ".mysqli_error());
					 
					 // while($row = mysqli_fetch_assoc($rs)){
				  ?>
                    <!-- <div class="col-xlg-10 col-lg-9  col-md-9 col-sm-8  right-panel"> -->

                

            <?php  
 $rs = mysqli_query($conn,$query) or die("Error : ".mysqli_error());
					 
					 while($row = mysqli_fetch_assoc($rs)){
				  ?>
        <div class="col-xlg-2 col-lg-3 col-md-4 col-sm-6">




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
             


        </div>
                 
<?php  } ?>



</div>
					 