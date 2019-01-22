

<?php 
include_once ('connection.php');
session_start();

$s=session_id();

// $name="";
// $address="";
// $phone="";
// $email="";
// $uid="";
// $password="";
  $name= $_POST['name'];
   $address=$_POST['address'];
  $phone=$_POST['phone'];
 
  $email=$_POST['email'];
$uid=$_POST['uid'];
$password=$_POST['password'];


  $sql = "INSERT INTO bill (sid,userid,name,pass,address, phone,email)
VALUES ('$s','$uid','$name','$password', '$address', '$phone', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("location:loginDirect.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 














 ?>






