

<?php 
include_once ("connection.php");

session_start();
$id=$_REQUEST['id'];
$Make=$_POST['Make'];
$Model=$_POST['Model'];
$Body=$_POST['Body'];
$Exterior=$_POST['Exterior'];
$Year=$_POST['Year'];
$Interior=$_POST['Interior'];
$Engine=$_POST['Engine'];
$Transmission=$_POST['Transmission'];
$Fuel=$_POST['Fuel'];
$Drive=$_POST['Drive'];
$Tyre=$_POST['Tyre'];
$Mileage=$_POST['Mileage'];
$Capacity=$_POST['Capacity'];
$New_old=$_POST['New_old'];
$cat=$_POST['cat'];
$Grade=$_POST['Grade'];
$Stock=$_POST['Stock'];
$photo=$_POST['photo'];
$price=$_POST['price'];

$quantity=$_POST['quantity'];



$sql = "UPDATE gari SET Make='{$Make}', Model='{$Model}', Body_Type='{$Body}', Interior_Color='{$Interior}', Exterior_Color='{$Exterior}', Year='{$Year}', Engine='{$Engine}', Transmission='{$Transmission}', Fuel_Type='{$Fuel}', drive_Type='{$Drive}', Tyre='{$Tyre}', Mileage='{$Mileage}', Capacity='{$Capacity}', price='{$price}', photo='{$photo}', New_old='{$New_old}', cat='{$cat}', Grade='{$Grade}' , Stock_no='{$Stock}', quantity='{$quantity}' WHERE id=$id ";

if ($conn->query($sql)) {
    //echo "New Record has id ".$conn->insert_id;
    $_SESSION['status']="Update Success";
    mysqli_close($conn);
    header('Location: carView.php');
} else {
    echo "<p>MySQL error no {$conn->errno} : {$conn->error}</p>";
    exit();
}

// $target_dir = "images/";
// $target_file = $target_dir . basename($_FILES["photo"]["name"]);
//echo basename($_FILES["fileToUpload"]["name"]);
//die();
// $uploadOk = 1;
// $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//     $check = getimagesize($_FILES["photo"]["tmp_name"]);
//     if($check !== false) {
//         echo "File is an image - " . $check["mime"] . ".";
//         $uploadOk = 1;
//     } else {
//         echo "File is not an image.";
//         $uploadOk = 0;
//     }
// }
//die();
// Check if file already exists
// if (file_exists($target_file)) {
//     echo "Sorry, file already exists.";
//     $uploadOk = 0;
// }
// //die();
// // Check file size
// if ($_FILES["photo"]["size"] > 500000) {
//     echo "Sorry, your file is too large.";
//     $uploadOk = 0;
// }
// // Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
//     && $imageFileType != "gif" ) {
//     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//     $uploadOk = 0;
// }
// // Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//     echo "Sorry, your file was not uploaded.";
// // if everything is ok, try to upload file
// } else {

 

//   	if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
//         echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
//         //echo" <img src="'.$target_file.'">";


// 	$sql = "UPDATE gari SET Make='{$Make}', Model='{$Model}', Body_Type='{$Body}', Interior_Color='{$Interior}', Exterior_Color='{$Exterior}', Year='{$Year}', Engine='{$Engine}', Transmission='{$Transmission}', Fuel_Type='{$Fuel}', drive_Type='{$Drive}', Tyre='{$Tyre}', Mileage='{$Mileage}', Capacity='{$Capacity}', price='{$price}', photo='{$target_file}', New_old='{$New_old}', cat='{$cat}', Grade='{$Grade}' , Stock_no='{$Stock}', quantity='{$quantity}' WHERE id=$id ";

   

// 	if ($conn->query($sql)===TRUE) {
		
// 		$SESSION['status']="Insert success";
// 		mysqli_close($conn);
// 		 header("location: carView.php");
// 	}
//     else {
// 	      echo "ERROR $conn->errno:$conn->error";
//          }
//   }
//     else  {
// 	      echo "Sorry, there was an error uploading your file.";
//           }
     

// }





 ?>


