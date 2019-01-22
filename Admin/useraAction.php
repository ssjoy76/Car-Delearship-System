

<?php 

session_start();
include_once("connection.php");

	
$ui=$_POST['User'];
$name=$_POST['name'];
$types=$_POST['sel1'];
$branch=$_POST['se1'];
$user=$_POST['username'];
$password=$_POST['psw'];
$password1=$_POST['cpsw'];
$mobile=$_POST['moblie'];
$email=$_POST['email'];
$dob=$_POST['date'];
$address1=$_POST['address1'];
$address2=$_POST['address2'];
$state=$_POST['s1'];
$district=$_POST['sel2'];
//$photo=$_POST['photo'];
// $file=$_FILES['photo']['name'];
// $tmp_name=$_FILES['photo']['tmp_name'];
// $path="uploads/".$file;
// move_uploaded_file( $tmp_name,$path);

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
//echo basename($_FILES["fileToUpload"]["name"]);
//die();
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["photo"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
//die();
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
//die();
// Check file size
if ($_FILES["photo"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {

  if ($password == $password1) {

  	if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
        //echo" <img src="'.$target_file.'">";


	$sql="INSERT INTO user (ui,name,types,branch,user,password,mobile,email,dob,address1,address2,state,district,photo)VALUES ('$ui','$name','$types','$branch','$user','$password','$mobile','$email','$dob','$address1','$address2','$state','$district','$target_file')";


	if ($conn->query($sql)) {
		
		$SESSION['status']="Insert success";
		mysqli_close($conn);
		header("location: userfa.php");
	}
    else {
	      echo "ERROR $conn->errno:$conn->error";
         }
  }
    else  {
	      echo "Sorry, there was an error uploading your file.";
          }
     
 } else {
        echo "Password not Match";
        }
}








 ?>
