  





   <!--  pagination -->

<?php 
$per_page=4;
 if (isset($_GET['page'])) {

    $page = $_GET['page'];
 }else {
    $page = 1 ;
 }

 $start_from = ($page-1) * $per_page;

 ?>


<!--  pagination -->
<?php 
include_once("connection.php");


$sql= "SELECT * FROM gari limit $start_from,$per_page";

$rResult = $conn->query($sql);



 ?>

<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	<meta charset="utf-8">
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

.k{
  margin-left: 500px;
}
body {
    font-family: Arial;
}

* {
    box-sizing: border-box;
}

form.example input[type=text] {
    padding: 10px;
    font-size: 17px;
    border: 1px solid grey;
    float: left;
    width: 80%;
    background: #f1f1f1;
}

form.example button {
    float: left;
    width: 20%;
    padding: 10px;
    background: #2196F3;
    color: white;
    font-size: 17px;
    border: 1px solid grey;
    border-left: none;
    cursor: pointer;
}

form.example button:hover {
    background: #0b7dda;
}

form.example::after {
    content: "";
    clear: both;
    display: table;
}
.input-group .form-control {
    position: relative;
    z-index: 2;
    float: left;
    width: 40%;
    margin-bottom: 0;
}
/* pagination */


.pagination{

    padding: 0px 0px 0px 450px;
}

.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
    border: 1px solid #ddd;
}

.pagination a.active {
    background-color: dodgerblue;
    color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}


/*  pagination */
</style>
<body>


	<?php 
        
        session_start();

        echo isset($_SESSION['status'])?$_SESSION['status']:"";

        unset($_SESSION['status']);



	 ?>

 <button type="submit" class="btn btn-primary" name="submit" onclick="location.href='admin.php'"> Back Home</button><br><br>

   <br>

   <div class="form-group k">

    <div class="input-group">

     <span class="input-group-addon">Search</span>
     <input type="text" name="search_text" id="search_text" placeholder="Search by any Details" class="form-control" />
    </div>
   </div>
    <div id="result">  
   <div class="table-responsive">
  
<table class="table table-hover">

	<thead>
		<tr>
		
			<th>Make</th>
			<th>Model</th>
			<th>Body_Type</th>
			<th>Interior_Color</th>
			<th>Exterior_Color</th>
			<!-- <th>Password</th> -->
			<th>Year</th>
			<th>Engine</th>
			<th>Transmission</th>
      <th>Drive_Type</th>
			<th>Fuel_Type</th>
			<th>Tyre</th>
			<th>Mileage</th>
			<th>Capacity</th>
			<th>price</th>
			<th>Grade</th>
			<th>Stock_no</th>
			<th>photo</th>
			<th>New_old</th>
			<th>Cat</th>
      <th>Quantity</th>
			<th>product_status</th>
			<th>Action</th>
			
		</tr>

	</thead>

<tfoot>
    <tr>
    
      <th>Make</th>
      <th>Model</th>
      <th>Body_Type</th>
      <th>Interior_Color</th>
      <th>Exterior_Color</th>
      <!-- <th>Password</th> -->
      <th>Year</th>
      <th>Engine</th>
      <th>Transmission</th>
      <th>Drive_Type</th>
      <th>Fuel_Type</th>
      <th>Tyre</th>
      <th>Mileage</th>
      <th>Capacity</th>
      <th>price</th>
      <th>Grade</th>
      <th>Stock_no</th>
      <th>photo</th>
      <th>New_old</th>
      <th>Cat</th>
      <th>Quantity</th>
      <th>product_status</th>
      <th>Action</th>
      
    </tr>

  </tfoot>

	<tbody>
		
		<?php 
              
              if ($rResult->num_rows>0) {
              	while ($row = $rResult->fetch_assoc()) {
              		echo "<tr id='product-data'>";
                    echo "<td>".$row['Make']."</td>";
              		echo "<td>".$row['Model']."</td>";
                    echo "<td>".$row['Body_Type']."</td>";
                    echo "<td>".$row['Interior_Color']."</td>";
                    echo "<td>".$row['Exterior_Color']."</td>";
                    //echo "<td>".$row['password']."<td>";
                    echo "<td>".$row['Year']."</td>";
                    echo "<td>".$row['Engine']."</td>";
                    echo "<td>".$row['Transmission']."</td>";
                     echo "<td>".$row['drive_Type']."</td>";
                    echo "<td>".$row['Fuel_Type']."</td>";
                    echo "<td>".$row['Tyre']."</td>";
                    echo "<td>".$row['Mileage']."</td>";
                    echo "<td>".$row['Capacity']."</td>";
                    echo "<td>".$row['price']."</td>";
                    echo "<td>".$row['Grade']."</td>";
                    echo "<td>".$row['Stock_no']."</td>";
                    //echo "<td>".$row['photo']."</td>";
                   echo "<td>"."<img  src=" .$row['photo'] ." > "."</td>";
                   echo "<td>".$row['New_old']."</td>";
                   
                  echo "<td>".$row['cat']."</td>";
                  echo "<td>".$row['quantity']."</td>";
                   echo "<td>".$row['product_status']."</td>";
                    ?>
                    <!-- <img src=" <?PHP echo $row['photo'] ;?>"> -->
                    
                    <!-- <img src="uploads/"> -->
                    <?PHP 


                    echo "<td><a href='carviewEdit.php?id=".$row['id']."'class='btn btn-danger'> Edit</a> | <a href='carViewDelete.php?id=".$row['id']."'class='btn btn-danger'> Delete</a></td>";
              		echo "</tr>";
              	}
              } else{

                 echo "0 Results";

              }



		 ?>

	</tbody>

</table>
</div>
<!--  pagination -->

<?php 
$sql="SELECT * FROM gari ";
$qResult=$conn->query($sql);
$total_row=mysqli_num_rows($qResult);
$total_pages= ceil($total_row/$per_page);
 
 echo " <span class='pagination '><a href='carView.php?page=1'  >".'&laquo;'."</a>";

for ($i=1; $i < $total_pages; $i++) { 
    
    echo " <a   href='carView.php?page=".$i."' >".$i."</a> ";
}


  echo " <a href='carView.php?page=$total_pages' >".'&raquo;'."</a> </span >";?>

<!--  pagination -->
</div>
</body>
</html>

<script>

    ////Search code
$(document).ready(function(){

 // load_data();

 function load_data(search1) // this function search1 and data name same hote hobe 
 {
      $.ajax({
       url:"project.php",
       method:"POST",
       data:{search1:search1},   // search1:search1 ei duita same likhte hobe 
       success:function(data)
       {
        $('#result').html(data);
       }
      });
 }

     $('#search_text').keyup(function(){
      var search = $(this).val();
      if(search != '')
      {
       load_data(search);
      }
      else
      {
       load_data("");
      }
     });


});
</script>




<script type="text/javascript"> 

// Not go  back Page code


history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
</script>




