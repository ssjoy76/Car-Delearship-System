


<?php 

session_start();

echo isset( $_SESSION['u'])? $_SESSION['u']:"";

        unset( $_SESSION['u']);

 ?>


 
<!DOCTYPE html>
<html>
<head>
  <title>User Login From</title>
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

body#LoginForm{ background-image:url("blur-26347-27038-hd-wallpapers.jpg"); background-repeat:no-repeat; background-position:center; background-size:cover; padding:10px;}

.form-heading { color:#fff; font-size:23px;}
.panel h2{ color:#444444; font-size:18px; margin:0 0 8px 0;}
.panel p { color:#777777; font-size:14px; margin-bottom:30px; line-height:24px;}
.login-form .form-control {
  background: #f7f7f7 none repeat scroll 0 0;
  border: 1px solid #d4d4d4;
  border-radius: 4px;
  font-size: 14px;
  height: 50px;
  line-height: 50px;
}
.main-div {
  background: #ffffff none repeat scroll 0 0;
  border-radius: 2px;
  margin: 10px auto 30px;
  max-width: 38%;
  padding: 50px 70px 70px 71px;
}

.login-form .form-group {
  margin-bottom:10px;
}
.login-form{ text-align:center;}
.forgot a {
  color: #777777;
  font-size: 14px;
  text-decoration: underline;
}
.login-form  .btn.btn-primary {
  background: #f0ad4e none repeat scroll 0 0;
  border-color: #f0ad4e;
  color: #ffffff;
  font-size: 14px;
  width: 100%;
  height: 50px;
  line-height: 50px;
  padding: 0;
}
.forgot {
  text-align: left; margin-bottom:30px;
}
.botto-text {
  color: #ffffff;
  font-size: 14px;
  margin: auto;
}
.login-form .btn.btn-primary.reset {
  background: #ff9900 none repeat scroll 0 0;
}
.back { text-align: left; margin-top:10px;}
.back a {color: #444444; font-size: 13px;text-decoration: none;}


</style>
<body  id="LoginForm">

<head>
  <!-- <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">LEAVE MANAGEMENT</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="main.php">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">EMPLOYEE <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">CO</a></li>
            <li><a href="#">MANAGER</a></li>
            <li><a href="#">STAFF</a></li>
          </ul>
        </li>
        <!--<li><a href="application.php">APPLICATION</a></li> -->
        <!-- <li><a href="lview.php">APPLICATION VIEW</a></li> -->
        <!-- <li><a href="Aview.php">ADMIN VIEW</a></li> -->
        <!-- <li><a href="contact.php">CONTACT</a></li>
        <li><a href="about.php">ABOUT</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="userf.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav> --> 

<?php 



echo isset( $_SESSION['out'])? $_SESSION['out']:"";

        unset( $_SESSION['out']);

 ?>
</head>

<div class="container">
  <br><br>
<!-- <h1 class="form-heading text-center">login Form</h1> -->
<div class="login-form">
<div class="main-div">

 <div class="panel">
   <h2>User Login</h2>
   <p>Please enter your email and password</p>
   </div>
 <!--  <h2 class="text-center "> User Login Form </h2> -->
<form action="loginUserAction.php" method="post" enctype="multipart/form-data" id="Login">
  
  <div class="form-group">
       <!-- <label for="email">Email</label> -->
       <input type="email" class="form-control"  id="inputEmail" autocomplete="off" name="email" placeholder="xxxxx@xxx.com" Required>
     </div>
     <div class="form-group">
       <!-- <label for="password">Password:</label> -->
       <input type="password" class="form-control" id="inputPassword" autocomplete="off" placeholder="Password" name="psw" Required>
     </div>
     
     
<br>
    
    <button type="submit" class="btn btn-primary" name="submit"> Login</button><br><br>
    
    <!-- <button type="submit" class="btn btn-default">Reset</button> -->
       
</form>
<button type="submit" class="btn btn-primary" name="submit" onclick="location.href='Bill.php'"> Register</button><br><br>
<input type="submit" class="btn btn-primary"  id="lname" value="Back Home" onclick="location.href='index.php'">
</div>
</div>
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



<script type="text/javascript"> 

// Not go  back Page code


history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
</script>

