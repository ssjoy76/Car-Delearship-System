<?php 
session_start();
include_once("connection.php");

$email= $_POST['email'];

$password= $_POST['psw'];


$sql= "SELECT * FROM lohin where adminEmail='{$email}'and adminPass='{$password}'";

$rResult = $conn->query($sql);
$row = $rResult->fetch_assoc();

if ($row['adminEmail']==$email && $row['adminPass']==$password) {

	 $_SESSION['i']=$row['adminId'];

	$_SESSION['s']="Login Successfully";
	header("location:admin.php");
}else{

$_SESSION['u']= "Login Unsuccess";
 header("location:logina.php");

}


 ?>

