<?php 
session_start();
include_once("connection.php");

$email= $_POST['email'];

$password= $_POST['psw'];


$sql= "SELECT * FROM bill where email='{$email}'and pass='{$password}'";

$rResult = $conn->query($sql);
$row = $rResult->fetch_assoc();

if ($row['email']==$email && $row['pass']==$password) {

	 $_SESSION['userid']=$row['userid'];

	echo  "Login Successfully";
	 header("location:userPanel.php");
}else{

echo "Login Unsuccess";
 // header("location:logina.php");

}



 ?>
