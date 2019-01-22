
<button type="submit" class="btn btn-primary" name="submit" onclick="location.href='admin.php'"> Back Home</button><br><br>

<?php
session_start(); 
include_once("connection.php");

// $sql="SELECT id,sid,item_id,item_name,quantity,total FROM `order` ";
$sql="SELECT * FROM `gari_name`";


$rResult = $conn->query($sql);



 ?>

<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<style type="text/css">
	
img{

	width: 30px;
	height: 30px;
}



</style>
<body>


	<?php 
        
       

        echo isset($_SESSION['status'])?$_SESSION['status']:"";

        unset($_SESSION['status']);



	 ?>

<table class="table table-hover">

	<thead>
		<tr>
			<th>Brand Name</th>
			
		</tr>

	</thead>

	<tfoot>
<!-- 		<tr>
			<th>User ID</th>
			<th>Types</th>
			<th>From Date</th>
			<th>To Date</th>
			
			<th>Number of Days</th>
			<th>Comment</th>
			<th>Action</th>
			
		</tr>
		 -->

	</tfoot>
	<tbody>
		
		<?php 
              
              
              if ($rResult->num_rows>0) {

              	while ($row = $rResult->fetch_assoc()) {



              		echo "<tr>";

              		echo "<td>".$row['name']."</td>";
                   
                    // echo "<td>".$row['mess']."</td>";
                    // echo "<td><a href='apedit.php?id=".$row['id']."' class='btn btn-success'> Approve</a></td>";
                    // echo "<td><a href='Apview.php'> View</a></td>";
                     echo "<td><a href='brandEdit.php?id=".$row['id']."'class='btn btn-danger'> Edit</a> | <a href='brandDelete.php?id=".$row['id']."'class='btn btn-danger'> Delete</a></td>";
              		echo "</tr>";
              	}
              } else{

                 echo "0 Results";

              }



		 ?>

	</tbody>

</table>

</body>
</html>






<script type="text/javascript"> 

// Not go  back Page code


history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
</script>