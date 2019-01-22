
<?php
session_start(); 
include_once("connection.php");

// $sql="SELECT id,sid,item_id,item_name,quantity,total FROM `order` ";
$sql="SELECT *
FROM `order`
INNER JOIN `bill` ON order.sid = bill.sid";


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
			<th> ID</th>
			<th>item id</th>
			<th> item name</th>
			<th>Quantity</th>
			<th>Price</th>
			<th>User ID</th>
			<th>Customer Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
			
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

              		echo "<td>".$row['sid']."</td>";
                    echo "<td>".$row['item_id']."</td>";
                    echo "<td>".$row['item_name']."</td>";
                    echo "<td>".$row['quantity']."</td>";
                    //echo "<td>".$row['password']."<td>";
                    echo "<td>".$row['quantity']*$row['total']."</td>";
                    echo "<td>".$row['userid']."</td>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['phone']."</td>";
                     echo "<td>".$row['address']."</td>";
                    // echo "<td>".$row['appr']."</td>";
                    // echo "<td>".$row['mess']."</td>";
                    // echo "<td><a href='apedit.php?id=".$row['id']."' class='btn btn-success'> Approve</a></td>";
                    // echo "<td><a href='Apview.php'> View</a></td>";
          
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
