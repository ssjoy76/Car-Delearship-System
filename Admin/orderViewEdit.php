

<?php 

include_once("connection.php");

$id= $_REQUEST['id'];

$sql = "SELECT id,approve,delivery FROM `order` WHERE id=$id";


$rResult = $conn->query($sql);
$row = $rResult->fetch_assoc();

 ?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</head>
<body>

<h3 class="text-center">Order Aprrove </h3>

<div class="container">
  <form action="orderViewUpdate.php" method="POST">
   

    <!-- autocomplete off mane input field click data show stop  -->

   <!--  <label for="approve">Approve</label>
    <input type="text" id="approve" name="approve" autocomplete="off" placeholder="Your Message.."> -->
    <b>Approve:</b>
     
       <select name="approve" value="<?php echo $row['approve'] ?>">
        <option  disabled selected > Select Approval </option>
  <option value="Approved" <?php $row['approve']=='Approved'? print "selected" : ""; ?> >Approved</option>

  <option value="Not Approved" <?php $row['approve']=='Not Approved'? print "selected" : ""; ?>  >Not Approved</option>
  
</select>
<b>Delivery:</b>

   <select name="delivery" value="<?php echo $row['delivery'] ?>">
    <option  disabled selected > Select delivery </option>
  <option value="Pending" <?php $row['delivery']=='Pending'? print "selected" : ""; ?>  >Pending</option>
  <option value="Delivered" <?php $row['delivery']=='Delivered'? print "selected" : ""; ?>  >Delivered</option>
 
</select>

  <!--   <label for="delivery">Delivery</label>
    <input type="text" id="delivery" name="delivery" autocomplete="off"  placeholder="Your Address"> -->

       <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
      <button type="submit" class="btn btn-default">Submit</button>

       </form>
    </div>
 



</body>
</html>

