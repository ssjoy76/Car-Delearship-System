
<!DOCTYPE html>
<html>
<head>
	<title>Car Add</title>
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
<form action="CarViewInsertAction.php" method="post" enctype="multipart/form-data">
	<div class="form-group">
       <label for="Make">Brand:</label>
       <input type="text" class="form-control" id="Make" name="Make" Required >
    </div>
	<div class="form-group">
       <label for="Model">Model:</label>
       <input type="text" class="form-control" id="Model" name="Model" Required>
    </div>
   <div class="form-group">
       <label for="Body">Body Type:</label>
       <input type="text" class="form-control" id="Body" name="Body" Required>
    </div>
    <div class="form-group">
       <label for="Interior">Interior Color:</label>
       <input type="text" class="form-control" id="Interior" name="Interior" Required>
    </div>
     
     <div class="form-group">
       <label for="Exterior">Exterior Color:</label>
       <input type="text" class="form-control" id="Exterior" name="Exterior" Required>
     </div>
     <div class="form-group">
       <label for="Year">Year:</label>
       <input type="text" class="form-control" id="Year" name="Year" Required>
     </div>
    
     <div class="form-group">
       <label for="moblie">Engine</label>
       <input type="text" class="form-control" id="Engine" name="Engine" Required>
     </div>
     <div class="form-group">
       <label for="Transmission">Transmission</label>
       <input type="text" class="form-control" id="Transmission" name="Transmission" Required>
     </div>
     <div class="form-group">
       <label for="Fuel">Fuel Type</label>
       <input type="text" class="form-control" id="Fuel" name="Fuel" Required>
     </div>
      <div class="form-group">
       <label for="MiDriveleage">Drive Type</label>
       <input type="text" class="form-control" id="Drive" name="Drive" Required>
     </div>
     <div class="form-group">
       <label for="Tyre">Tyre</label>
       <input type="text" class="form-control" id="Tyre" name="Tyre"  Required>
     </div>
     <div class="form-group">
       <label for="Mileage">Mileage</label>
       <input type="text" class="form-control" id="Mileage" name="Mileage" Required>
     </div>
     <div class="form-group">
       <label for="Capacity">Capacity</label>
       <input type="text" class="form-control" id="Capacity" name="Capacity" Required>
     </div>
  <div class="form-group">
       <label for="price">Price</label>
       <input type="text" class="form-control" id="price" name="price" Required>
     </div>
    
     
     <div class="form-group">
       <label for="photo">Photo</label>
       <input type="file" class="form-control" id="photo" name="photo" Required>
     </div>
 <div class="form-group">
       <label for="New_old">New_old</label>
       <input type="text" class="form-control" id="New_old" name="New_old" Required>
     </div>
     <div class="form-group">
       <label for="cat">category</label>
       <input type="text" class="form-control" id="cat" name="cat" Required>
     </div>
     
      <div class="form-group">
       <label for="Grade">Grade</label>
       <input type="text" class="form-control" id="Grade" name="Grade" Required>
     </div>
   <div class="form-group">
       <label for="Stock">Stock No</label>
       <input type="text" class="form-control" id="Stock" name="Stock" Required>
     </div>
     <div class="form-group">
       <label for="quantity">Quantity</label>
       <input type="quantity" class="form-control" id="quantity" name="quantity" Required>
     </div>


    <button type="submit" class="btn btn-default" name="submit"> Submit</button>
    <button type="submit" class="btn btn-default" name="submit" onclick="location.href='main.php'">Back</button>
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


