

<?php 
session_start();
include_once("connection.php");
$id=$_REQUEST['id'];
// $types=$_REQUEST['types'];
// $fdate=$_REQUEST['fdate'];
// $tdate=$_REQUEST['tdate'];
// $days=$_REQUEST['days'];
// $comment=$_REQUEST['comment'];
$approve=$_REQUEST['approve'];
$delivery=$_REQUEST['delivery'];

$sql = "UPDATE `order` SET  approve='{$approve}', delivery='{$delivery}' where id=$id" ;
 //die($sql );


	

if ($conn->query($sql)) {
	 $_SESSION['status']="Success";
	 // mysqli_close($conn);
	 header("location:orderView.php");
}else{

	$_SESSION['status']="Update Error $conn->errno: $conn->error";
}



 ?>

