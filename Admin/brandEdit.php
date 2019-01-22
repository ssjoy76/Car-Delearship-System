

<?php 
session_start();
include_once("connection.php");

$id= $_REQUEST['id'];

$sql = "SELECT * FROM gari_name WHERE id=$id";

//die($sql);
$rResult = $conn->query($sql);
$row = $rResult->fetch_assoc();

 ?>






<!DOCTYPE html>
<html>
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

<body>

<h2 class="text-center"><b>Brands</b></h2>

<form action="brandEditAction.php" method="post">
	 <div class="col-sm-6 " style="margin-left: 250px">
  <h4><b>Brand name:</b><h4><br>
  <input type="text" class="form-control" name="brandname" value="<?php echo $row['name']; ?>">
  <br>
  <input type="hidden" name="id" value="<?php echo $row['id'];?>">
  <input type="submit" class="btn btn-primary" value="Submit">
</div>
</form> 

</body>
</html>