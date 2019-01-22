<?php 

session_start();
include_once ('connection.php');
$id=$_REQUEST['id'];

$sql="DELETE FROM user WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    $_SESSION['status']="Record deleted successfully";
} else {
    $_SESSION['status']="Error deleting record: " . $conn->error;
}

$conn->close();

header("Location:view.php"); 



?>