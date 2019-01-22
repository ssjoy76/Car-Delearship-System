
<?php 
session_start();
include_once("connection.php");

$id= $_REQUEST['id'];

$sql = "SELECT * FROM user WHERE id=$id";

//die($sql);
$rResult = $conn->query($sql);
$row = $rResult->fetch_assoc();

 ?>


<!DOCTYPE html>
<html>
<head>
  <title>User From</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
   <script src="js/k.js"></script>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style >
  .hidden{

    display: none;
    background-color: red;
  }




</style>
<body>
</head>

<div class="container">
  <h2 class="text-center ">User Form </h2>
<form action="myAction.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
       <label for="User">User ID:</label>
       <input type="number" class="form-control" id="User" name="User" value="<?php echo $row['ui']; ?>" Required >
    </div>
  <div class="form-group">
       <label for="name">Name:</label>
       <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>" Required>
    </div>
    <div class="form-group">
      <label for="sel1"> Types:</label>
      <select class="form-control " id="sel1" name="sel1" value=""  Required>
        <option value="Select Leave" selected>Select Leave</option>
        <option value="Academic" <?php $row['types']=='Academic'? print "selected" : ""; ?> >Academic</option>
        <option value="Casual Leave" <?php $row['types']=='Casual Leave'? print "selected" : ""; ?> >Casual Leave</option>
        <option value="Earn Leave" <?php $row['types']=='Earn Leave'? print "selected" : ""; ?> >Earn Leave</option>
      </select>
     </div>
     <div class="form-group">
      <label for="se1">Branch:</label>
      <select class="form-control " id="se1" name="se1" value=""  Required>
        <option  >Select State</option>
        <option value="Dhaka" <?php $row['branch']=='Dhaka'? print "selected" : ""; ?> >Dhaka</option>
        <option value="Khulna"  <?php $row['branch']=='Khulna'? print "selected" : ""; ?>>Khulna</option>
        <option value="Mymensingh" <?php $row['branch']=='Mymensingh'? print "selected" : ""; ?>>Mymensingh</option>
        <option value="Rajshahi" <?php $row['branch']=='Rajshahi'? print "selected" : ""; ?>>Rajshahi</option>
        <option value="Rangpur"<?php $row['branch']=='Rangpur'? print "selected" : ""; ?>>Rangpur</option>
        <option value="Sylhet">Sylhet</option>
        <option value="Barisal">Barisal</option>
            <option value="Chittagong">Chittagong</option>
      </select>
     </div>
     <div class="form-group">
       <label for="name">User:</label>
       <input type="text" class="form-control" id="name" name="username" value="<?php echo $row['user']; ?>"  Required>
     </div>
     <div class="form-group">
       <label for="password">Password:</label>
       <input type="password" class="form-control" id="password" name="psw" value="<?php echo $row['password']; ?>"  Required>
     </div>
     <div class="form-group">
       <label for="con-password">Conform Password</label>
       <input type="password" class="form-control" id="con-password " name="cpsw" value="<?php echo $row['password']; ?>"  Required>
       <span id="verifynote" class="warn hidden">Password Not match</span>
     </div>
     <div class="form-group">
       <label for="moblie">Mobile</label>
       <input type="text" class="form-control" id="moblie" name="moblie" value="<?php echo $row['mobile']; ?>"  Required>
     </div>
     <div class="form-group">
       <label for="email">Email</label>
       <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>"  Required>
     </div>
     <div class="form-group">
       <label for="date1">Date of Birth</label>
       <input type="date" class="form-control" id="date1" name="date" value="<?php echo $row['dob']; ?>"  Required>
     </div>
     <div class="form-group">
       <label for="address1">Address 1</label>
       <input type="text" class="form-control" id="address1" name="address1" value="<?php echo $row['address1']; ?>"   Required>
     </div>
     <div class="form-group">
       <label for="address2">Address 2</label>
       <input type="text" class="form-control" id="address2" name="address2" value="<?php echo $row['address2']; ?>"  Required>
     </div>
     
     <div class="form-group">
      <label for="s1">State:</label>
      <select class="form-control " id="s1" name="s1" onchange="select_state()" value="<?php echo $row['state']; ?>"  Required>
        <option  disabled selected>Select State</option>
        <option value="Dhaka" <?php $row['state']=='Dhaka'? print "selected" : ""; ?> >Dhaka</option>
        <option value="Khulna" <?php $row['state']=='Khulna'? print "selected" : ""; ?> >Khulna</option>
        <option value="Mymensingh" <?php $row['state']=='Mymensingh'? print "selected" : ""; ?> >Mymensingh</option>
        <option value="Rajshahi" <?php $row['state']=='Rajshahi'? print "selected" : ""; ?> >Rajshahi</option>
        <option value="Rangpur" <?php $row['state']=='Rangpur'? print "selected" : ""; ?> >Rangpur</option>
        <option value="Sylhet" <?php $row['state']=='Sylhet'? print "selected" : ""; ?> >Sylhet</option>
        <option value="Barisal" <?php $row['state']=='Barisal'? print "selected" : ""; ?> >Barisal</option>
            <option value="Chittagong" <?php $row['state']=='Chittagong'? print "selected" : ""; ?> ">Chittagong</option>
      </select>
     </div>
     <div class="form-group">
      <label for="sel2">District:</label>
      <select class="form-control " id="sel2" name="sel2" value="" >
        <option value="Select Leave" disabled  selected>Select District</option>
        <option value="Dhaka" <?php $row['district']=='Dhaka'? print "selected" : ""; ?> >Dhaka</option>
        <option value="Gazipur" <?php $row['district']=='Gazipur'? print "selected" : ""; ?> >Gazipur  </option>
        <option value="Kishoreganj" <?php $row['district']=='Kishoreganj'? print "selected" : ""; ?> >Kishoreganj  </option>
        <option value="Manikganj" <?php $row['district']=='Manikganj'? print "selected" : ""; ?> >Manikganj </option>
        <option value="Tangail" <?php $row['district']=='Tangail'? print "selected" : ""; ?> >Tangail </option>
        <option value="Kushtia" <?php $row['district']=='Kushtia'? print "selected" : ""; ?> >Kushtia  </option>
        <option value="Narail" <?php $row['district']=='Narail'? print "selected" : ""; ?> >Narail</option>
        <option value="Jessore" <?php $row['district']=='Jessore'? print "selected" : ""; ?> >Jessore </option>
        <option value="Magura" <?php $row['district']=='Magura'? print "selected" : ""; ?> >Magura   </option>
        <option value="Satkhira" <?php $row['district']=='Satkhira'? print "selected" : ""; ?> >Satkhira   </option>'
        
      </select>
     </div>
     
     <div class="form-group">
       <label for="photo">Photo</label>
       <input type="file" class="form-control" id="photo" name="photo" value="<?php echo $row['photo']; ?>"  Required>
     </div>
     <input type="hidden" name="id" value="<?php echo $row['id'];?>">
    <button type="submit" class="btn btn-default" name="submit"> Submit</button><button type="submit" class="btn btn-default" name="submit" onclick="location.href='main.php'">Back</button>
    <!-- <button type="submit" class="btn btn-default">Reset</button> -->

</form>
</div>

<script type="text/javascript">
$(document).ready(function(){

  $("#con-password").keyup(function(){
     if ($(this).val() == $("#password").val()) {
      $("#verifynote").addClass('hidden');
     } else{
      $("#verifynote").removeClass('hidden');
     }
  })

})</script>

</body>
</html>


