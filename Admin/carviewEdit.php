

<?php 
session_start();
include_once("connection.php");

$id= $_REQUEST['id'];

$sql = "SELECT * FROM gari WHERE id=$id";

//die($sql);
$rResult = $conn->query($sql);
$row = $rResult->fetch_assoc();

 ?>






<!DOCTYPE html>
<html>
<head>
  <title>Car View Edit</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
   <script src="js/k.js"></script>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style >
  .hidden{

    display: none;
    background-color: red;
  }




</style>
<body>
</head>

<div class="container">
  <h2 class="text-center ">Car Information </h2>
<form action="carviewEditAction.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
       <label for="Make">Make:</label>
       <input type="text" class="form-control" id="Make" name="Make" value="<?php echo $row['Make']; ?>" Required >
    </div>
  <div class="form-group">
       <label for="Model">Model:</label>
       <input type="text" class="form-control" id="Model" name="Model" value="<?php echo $row['Model']; ?>"  Required>
    </div>
   <div class="form-group">
       <label for="Body">Body Type:</label>
       <input type="text" class="form-control" id="Body" name="Body" value="<?php echo $row['Body_Type']; ?>"  Required>
    </div>
    <div class="form-group">
       <label for="Interior">Interior Color:</label>
       <input type="text" class="form-control" id="Interior" name="Interior" value="<?php echo $row['Interior_Color']; ?>"  Required>
    </div>
     
     <div class="form-group">
       <label for="Exterior">Exterior Color:</label>
       <input type="text" class="form-control" id="Exterior" name="Exterior" value="<?php echo $row['Exterior_Color']; ?>"  Required>
     </div>
     <div class="form-group">
       <label for="Year">Year:</label>
       <input type="text" class="form-control" id="Year" name="Year" value="<?php echo $row['Year']; ?>"  Required>
     </div>
    
     <div class="form-group">
       <label for="moblie">Engine</label>
       <input type="text" class="form-control" id="Engine" name="Engine" value="<?php echo $row['Engine']; ?>"  Required>
     </div>
     <div class="form-group">
       <label for="Transmission">Transmission</label>
       <input type="text" class="form-control" id="Transmission" name="Transmission" value="<?php echo $row['Transmission']; ?>"  Required>
     </div>
     <div class="form-group">
       <label for="Fuel">Fuel Type</label>
       <input type="text" class="form-control" id="Fuel" name="Fuel" value="<?php echo $row['Fuel_Type']; ?>"  Required>
     </div>
      <div class="form-group">
       <label for="MiDriveleage">Drive Type</label>
       <input type="text" class="form-control" id="Drive" name="Drive" value="<?php echo $row['drive_Type']; ?>"  Required>
     </div>
     <div class="form-group">
       <label for="Tyre">Tyre</label>
       <input type="text" class="form-control" id="Tyre" name="Tyre" value="<?php echo $row['Tyre']; ?>"   Required>
     </div>
     <div class="form-group">
       <label for="Mileage">Mileage</label>
       <input type="text" class="form-control" id="Mileage" name="Mileage" value="<?php echo $row['Mileage']; ?>"  Required>
     </div>
     <div class="form-group">
       <label for="Capacity">Capacity</label>
       <input type="text" class="form-control" id="Capacity" name="Capacity" value="<?php echo $row['Capacity']; ?>"  Required>
     </div>
  <div class="form-group">
       <label for="price">Price</label>
       <input type="text" class="form-control" id="price" name="price" value="<?php echo $row['price']; ?>"  Required>
     </div>
    
     
     <div class="form-group">
       <label for="photo">Photo</label><br>
       <img src="<?php echo $row['photo']; ?>" style="width: 60px;
  height: 60px;"  >
       <input type="file" class="form-control" id="photo" name="photo" >
     </div>
 <div class="form-group">
       <label for="New_old">New_old</label>
       <input type="text" class="form-control" id="New_old" name="New_old" value="<?php echo $row['New_old']; ?>"  Required>
     </div>
     <div class="form-group">
       <label for="cat">category</label>
       <input type="text" class="form-control" id="cat" name="cat" value="<?php echo $row['cat']; ?>"  Required>
     </div>
     
      <div class="form-group">
       <label for="Grade">Grade</label>
       <input type="text" class="form-control" id="Grade" name="Grade" value="<?php echo $row['Grade']; ?>"  Required>
     </div>
   <div class="form-group">
       <label for="Stock">Stock No</label>
       <input type="text" class="form-control" id="Stock" name="Stock" value="<?php echo $row['Stock_no']; ?>"  Required>
     </div>
     <div class="form-group">
       <label for="quantity">Quantity</label>
       <input type="quantity" class="form-control" id="quantity" name="quantity" value="<?php echo $row['quantity']; ?>"  Required>
     </div>

<input type="hidden" name="id" value="<?php echo $row['id'];?>">
    <button type="submit" class="btn btn-default" name="submit"> Submit</button>
    
    <!-- <button type="submit" class="btn btn-default">Reset</button> -->

</form>
</div>

<script type="text/javascript">
$(document).ready(function(){

  $("#con-password").keyup(function(){
     if ($(this).val() == $("#password").val()) {
      $("#verifynote").addClass('hidden');
     } else{
      $("#verifynote").removeClass('hidden');
     }
  })

})</script>

</body>
</html>


