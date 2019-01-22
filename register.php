







<!DOCTYPE html>
<html>
<title>Register</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<style>
body{
     background-image:url(primag.jpg);
     background-repeat:no-repeat;
     background-size:cover;
     width:100%;
     height:100vh;
     overflow:auto;
     
}

/*-----for border----*/
.container{
    font-family:Roboto,sans-serif;
      background-image:url(dark-blue-blurred-background_1034-589.jpg) ;
    
     border-style: 1px solid grey;
     margin: 0 auto;
     text-align: center;
     opacity: 0.8;
     margin-top: 67px;
   box-shadow: 2px 5px 5px 0px #eee;
     max-width: 500px;
     padding-top: 10px;
     height: 448px;
     margin-top: 166px;
}
/*--- for label of first and last name---*/
.lastname{
     margin-left: 1px;
     font-family: sans-serif;
     font-size: 14px;
     color: white;
     margin-top: 10px;
}
.firstname{
     margin-left: 1px;
     font-family: sans-serif;
     font-size: 14px;
     color: white;
     margin-top: 5px;
}
#lname{
     margin-top:5px;
}
      

/*---for heading-----*/
.heading{
     text-decoration:bold;
     text-align : center;
     font-size:30px;
     color:#F96;
     padding-top:10px;
}
/*-------for email----------*/
  /*------label----*/
#email{
      margin-top: 5px;
}
/*-----------for Password--------*/
     /*-------label-----*/
.mail{
     margin-left: 44px;
     font-family: sans-serif;
     color: white;
     font-size: 14px;
     margin-top: 13px;
}
.pass{
     color: white;
     margin-top: 9px;
     font-size: 14px;
     font-family: sans-serif;
     margin-left: 6px;
     margin-top: 9px;
}
#password{
 margin-top: 6px;
}
/*------------for phone Number--------*/
      /*----------label--------*/
.pno{
     font-size: 18px;
     margin-left: -13px;
     margin-top: 10px;
     color: #ff9;
    
}   

/*--------------for Gender---------------*/
     /*--------------label---------*/
.gender {
     color: white;
     font-family: sans-serif;
     font-size: 14px;
     margin-left: 28px;
     margin-top: 8px;
}

     /*---------- for Input type--------*/
.col-xs-4.male{
     color: white;
     font-size: 13px;
     margin-top: 9px;
     padding-bottom: 16px;
}
.col-xs-4.female {
     color: white;
     font-size: 13px;
     margin-top: 9px;
     padding-bottom: 16px;
     padding-right: 95px;
}   
/*------------For submit button---------*/
.sbutton{
     color: white;
     font-size: 20px;
     border: 1px solid white;
     background-color: #080808;
     width: 32%;
     margin-left: 41%;
     margin-top: 16px;
     box-shadow: 0px 2px 2px 0px white;
       
   }
.btn.btn-warning:hover {
    box-shadow: 2px 1px 2px 3px #99ccff;
    background:#5900a6;
    color:#fff;
    transition: background-color 1.15s ease-in-out,border-color 1.15s ease-in-out,box-shadow 1.15s ease-in-out;
    
}    
      
</style>
</head>

<body>

 

<div class="container">

  <header class="heading"> Registration-Form</header><hr></hr> 
   <!---Form starting----> 
   

  <form action="registerAction.php" method="POST">
    <div class="row ">

    <!-- autocomplete off mane input field click data show stop  -->



    <div class="col-sm-12">
             <div class="row">
                 <div class="col-xs-4">
                     <label class="firstname">Full Name :</label> </div>
                 <div class="col-xs-8">
                     <input type="text" name="name" id="fname" placeholder="Enter Your Full Name" class="form-control " autocomplete="off" required>
             </div>
              </div>
         </div>
         <div class="col-sm-12">
             <div class="row">
                 <div class="col-xs-4">
                     <label class="lastname">User ID :</label> </div>
                 <div class="col-xs-8">
                     <input type="tel" name="uid" id="lname" placeholder="Enter your User ID" class="form-control " autocomplete="off" required maxlength="11">
             </div>
              </div>
         </div>
         <div class="col-sm-12">
             <div class="row">
                 <div class="col-xs-4">
                     <label class="lastname">Address :</label> </div>
                 <div class="col-xs-8">
                     <input type="text" name="address" id="lname" placeholder="Enter your Address" class="form-control " autocomplete="off" required>
             </div>
              </div>
         </div>
         <div class="col-sm-12">
             <div class="row">
                 <div class="col-xs-4">
                     <label class="lastname">Phone :</label> </div>
                 <div class="col-xs-8">
                     <input type="tel" name="phone" id="lname" placeholder="01xxxxxxxxx" class="form-control " autocomplete="off" required  maxlength="12">
             </div>
              </div>
         </div>

<div class="col-sm-12">
             <div class="row">
                 <div class="col-xs-4">
                     <label class="lastname">Password :</label> </div>
                 <div class="col-xs-8">
                     <input type="password" name="password" id="lname" placeholder="Enter your Password" class="form-control " autocomplete="off" required maxlength="15">
             </div>
              </div>
         </div>


         <div class="col-sm-12">
             <div class="row">
                 <div class="col-xs-4">
                     <label class="lastname">Email :</label> </div>
                 <div class="col-xs-8">
                     <input type="email" name="email" id="lname" placeholder="xxxxx@xxx.com" class="form-control " autocomplete="off" required>
             </div>
              </div>
<br>
              <div class="col-sm-12">
                  <input type="submit" class="btn btn-warning"  id="lname" value="Submit">

           </div>
              <!-- <input type="submit" value="Submit"> -->
         </div>

    <!-- <label for="fname">Full Name</label>
    <input type="text" id="fname" name="name" autocomplete="off" placeholder="Your name.."> -->

  <!--    <label for="uid">User ID</label>
    <input type="number" id="uid" class="form-control" autocomplete="off"  name="uid" placeholder="Your User ID">
     <label for="password">Password</label>
    <input type="password" id="password" class="form-control" name="password" placeholder="Your Password">

    <label for="address">Address</label>
    <input type="text" id="address" name="address" autocomplete="off"  placeholder="Your Address">



     
     <label for="phone">Phone</label>
    <input type="text" id="phone" name="phone" autocomplete="off"  placeholder="Your Phone..">

    <label for="email">Email</label>
    <input type="text" id="email" name="email" autocomplete="off"  placeholder="Your Email.."> -->
    

   
    


</div>
  </form>

 <div class="col-sm-12">
                  <input type="submit" class="btn btn-primary"  id="lname" value="Back Home" onclick="location.href='index.php'">
                  <input type="submit" class="btn btn-primary"  id="lname" value="Back Login" onclick="location.href='loginDirect.php'">
                  
           </div>

</div>



</body>
</html>


<script type="text/javascript"> 

// Not go  back Page code


history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
</script>







