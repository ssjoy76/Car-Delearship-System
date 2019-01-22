<?php  


include_once ("connection.php");



 $sql="SELECT * FROM gari where Make like '%".$_POST["search1"]."%' OR Year LIKE '%".$_POST["search1"]."%' OR Body_Type LIKE '%".$_POST["search1"]."%' OR Model LIKE '%".$_POST["search1"]."%' limit 0,4";

$k='';
 $rs = mysqli_query($conn,$sql) or die("Error : ".mysqli_error());
 if(mysqli_num_rows($rs) > 0)
{
     ?>   
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
       <?php               while($row = mysqli_fetch_assoc($rs)){
          

                       
                    echo "<tr>";
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
                }}
                else {
                 echo "0 Results";
                }
            


        
                 
   ?>

    </tbody>

</table>
</div>





