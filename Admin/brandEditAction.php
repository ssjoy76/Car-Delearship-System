
<?php 
include_once ("connection.php");

session_start();
$id=$_REQUEST['id'];
$brand=$_POST['brandname'];




$sql = "UPDATE gari_name SET name='{$brand}' WHERE id=$id ";

if ($conn->query($sql)) {
    //echo "New Record has id ".$conn->insert_id;
    $_SESSION['status']="Update Success";
    mysqli_close($conn);
    header('Location: brandView.php');
} else {
    echo "<p>MySQL error no {$conn->errno} : {$conn->error}</p>";
    exit();
}