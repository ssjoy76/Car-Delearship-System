 

<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery.min.js"></script>

<!-- <link rel="stylesheet" href="view.css">  -->


<?php 
 include_once ('connection.php'); 

 ?>

 <?php 

if (isset($_POST['submit'])=='submit') {
	extract($_POST);
	//print_r($_POST);
}

  ?>
<br><br><br>
<div  style="margin-left: 300px">
 			<form method="post" action="compareShow.php">
<div class="col-xlg-2 col-lg-3 col-md-3 col-sm-4 left-panel ">

 <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h6 class="panel-title text-center">1st Car</h6>
                    <!-- <button data-toggle="collapse" data-target="#yearFilter"></button> -->
                </div>
                   

                               <?php 
                    $query = "select *from gari_name";  
                    $rs = mysqli_query($conn,$query) or die("Error : ".mysqli_error());
                    //while($Make = mysqli_fetch_assoc($rs)){
                 
                ?>      
                <div id="yearFilter" class="panel-body collapse in">
                    <select id="year-list" name=""  class="form-control filter-by-year">
                        <option value="" selected="selected">Make</option>
                        

								<?php while ($row=mysqli_fetch_assoc($rs)) {
									
							//	} ?>
                       
                            <option value="<?php echo $row['name'] ?>"><?php echo $row['name'] ?></option>

                        <?php } ?>
                           
                    </select>
                </div>
                 <div id="yearFilter" class="panel-body collapse in">
                    <select id="busname" name="carName"  class="form-control filter-by-year">
                        <option value="" selected="selected">Model</option>
                        
                         
                    </select>
                </div>
                 <!-- <div id="yearFilter" class="panel-body collapse in">
                    <select id=""  class="form-control filter-by-year">
                        <option value="" selected="selected">Year</option>
                        
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option> 
                    </select>
                </div> -->

            </div>

            </div>


            <div class="col-xlg-2 col-lg-3 col-md-3 col-sm-4 right-panel">

 <div class="panel panel-primary">
                <div class="panel-heading">
                    <h6 class="panel-title text-center" >2nd Car</h6>
                    <!-- <button data-toggle="collapse" data-target="#yearFilter"></button> -->
                </div>
                      <?php 
                    $query = "select *from gari_name";  
                    $rs = mysqli_query($conn,$query) or die("Error : ".mysqli_error());
                    //while($Make = mysqli_fetch_assoc($rs)){
                 
                ?>     
                <div id="yearFilter" class="panel-body collapse in">
                    <select id="year-lists"  class="form-control filter-by-year">
                        <option value="" selected="selected">Make</option>
                        <?php while ($row1=mysqli_fetch_assoc($rs)) {
                        	# code...
                        //} ?>
                            <option value="<?php echo $row1['name'] ?>"><?php echo $row1['name'] ?></option>
                        <?php } ?>
                           
                    </select>
                </div>

                 <div id="yearFilter" class="panel-body collapse in">
                    <select id="busnames" name="carName2"  class="form-control filter-by-year">
                        <option value="" selected="selected">Model</option>
                        
                             
                    </select>
                </div>
                 <!-- <div id="yearFilter" class="panel-body collapse in">
                    <select id=""  class="form-control filter-by-year">
                        <option value="" selected="selected">Year</option>
                        
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option> 
                    </select>
                </div> -->


            </div>


<div class="">
                            <button type="submit" name="submit" class="btn btn-primary center-block text-uppercase" id="compareButton" style="line-height:30px">
                                <i class="fa  fa-binoculars"></i>  COMPARE
                            </button>
                        </div>

            </div>

</div>
<!-- <br><br><br> -->
<!-- <div class="">
                            <button type="submit" name="submit" class="btn btn-primary center-block text-uppercase" id="compareButton" style="line-height:30px">
                                <i class="fa  fa-binoculars"></i>  COMPARE
                            </button>
                        </div> -->

 </form>

<script>
$(document).ready(function(){
    $("#year-list").change(function(){
       var dist = $('#year-list').val();
      // alert(dist);
       
        $.post('get_gariname.php',{dist:dist},
        function(data){
             $("#busname").html(data);
        });
    });
});
</script> 

<script>
$(document).ready(function(){
    $("#year-lists").change(function(){
       var dist = $('#year-lists').val();
      // alert(dist);
       
        $.post('get_gariname.php',{dist:dist},
        function(data){
             $("#busnames").html(data);
        });
    });
});
</script> 