

<?php 

include_once("connection.php");

$id= $_REQUEST['id'];

$sql = "SELECT id,appr,mess FROM app WHERE id=$id";


$rResult = $conn->query($sql);
$row = $rResult->fetch_assoc();

 ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	
  
<body>




<div class="container">
  <h2 class="text-center ">Leave Form </h2>
  
  <form  action="Apview.php" method="post" enctype="multipart/form-data">
    <!-- <div class="form-group">
		  <label for="sel1">Leave Types:</label>
		  <select class="form-control " id="sel1" name="types" value="<?php echo $row['LT'] ?>">
		    <option value="Select Leave" selected>Select Leave</option>
		    <option>Academic</option>
		    <option>Casual Leave</option>
		    <option>Earn Leave</option>
		  </select>
          </div>
     <div class="form-group">
       <label for="fdate">From Date:</label>
       <input type="date" class="form-control" id="fdate" name="fdate" value="<?php echo $row['FD'] ?>">
     </div>
     <div class="form-group">
        <label for="tdate">To Date:</label>
        <input type="date" class="form-control" id="tdate" name="tdate" value="<?php echo $row['TD'] ?>">
     </div>
     <div class="form-group">
        <label for="pwd">Number of Days:</label>
        <input type="text" class="form-control" id="pwd" name="days" value="<?php echo $row['NOD'] ?>">
     </div>
     <div class="form-group">
      <label for="comment">Comment:</label>
      <textarea class="form-control"  id="comment" name="comment" value="<?php echo $row['COMNT'] ?>"></textarea>
      </div>
       <br> -->
	
 <select name="cars" value="<?php echo $row['appr'] ?>">
  <option value="Approve">Approve</option>
  <option value="Not Approve">Not Approve</option>
  <option value="">Fiat</option>
  <option value="">Audi</option>
</select>



<textarea name="message" value="<?php echo $row['mess'] ?>">
</textarea>

       <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </form>
</div>


</body>
</html>

