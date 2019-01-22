<?php

 include_once ('connection.php'); 

if(isset($_POST["brand_id"]))  
 { 
    

         // $query = "select * from gari where product_status = '0'"; 
          if($_POST["brand_id"] == '2000')  
      {  
            $query  = "select * from gari where Mileage <='2000' ";  
      } 
      else if($_POST["brand_id"] == '5000')
      {  
             $query  = "select * from gari where Mileage >'2000' AND Mileage <='5000' "; 
      }
       else if($_POST["brand_id"] == '10000')
      {  
            $query  = "select * from gari where Mileage >'50000' AND Mileage <='10000' "; 
      }         
                 
     else if ($_POST["brand_id"] == '100000') 
      
      {  
            $query  = "select * from gari where Mileage>'10000' "; 
      }
      else{   $query  = "select * from gari" ; }          

                

             
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
                 
<?php  } }?>




                     