<?php 
session_start();
include_once("connection.php");

$brand= $_POST['brandname'];



$sql="INSERT INTO `gari_name` "."(name) "." VALUES"."('$brand')";

if ($conn->query($sql)===TRUE) {
		
		$SESSION['status']="Insert success";
		mysqli_close($conn);
	    header("location: admin.php");
	}
    else {
	      echo "ERROR $conn->errno:$conn->error";
         }
  

 ?>