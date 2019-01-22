<?php
 include_once ('connection.php'); 

 $dist_id=$_POST['dist'];
//echo "<script type='text/javascript'>alert('$dist_id');</script>";
 $query = "select *from gari where Make='$dist_id'";  
                    $rs = mysqli_query($conn,$query) or die("Error : ".mysqli_error());
 
  while($row= mysqli_fetch_assoc($rs)){
        ?>
            
    <option value="<?PHP echo $row['id'] ?>"><?PHP echo $row['Model'] ?></option>
  
        
        <?PHP 
    
}
