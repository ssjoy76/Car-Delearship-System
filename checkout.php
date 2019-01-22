<?php 

session_start();

include_once("connection.php");




foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               { 

                           $s=session_id();
                          $item_id= $values['item_id'];
                          $name=$values['item_name'];
                          $quantity=$values['item_quantity'];
                          $price=$values['item_price'];
                         // echo  $x=mysqli_query($conn,"INSERT INTO order VALUES('$s','$item_id','$name','$quantity','$price')"); 
                         //       } 

          $res3=mysqli_query($conn, "SELECT * FROM gari where id='$item_id'");
          $row3=mysqli_fetch_array($res3);


 header('location: loginUser.php');



 if (isset($_SESSION["userid"])) {
   $m =  $_SESSION["userid"];

 $k=date("Y/m/d");
  $sql="INSERT INTO `order` "."(sid,ui,item_id,item_name,quantity,total,Datee) "." VALUES"."('$s','$m','$item_id','$name','$quantity','$price','$k')";

  $q=$row3['quantity']-$quantity;

   $sql2="UPDATE  gari SET quantity='$q' WHERE id='$item_id'";
   $dateSql2=$conn->query($sql2);

  if ($conn->query($sql)===TRUE) {
    
   // echo "string";
   header("location: userPanel.php");
  }
    else {
        echo "ERROR $conn->errno:$conn->error";
         }



           if (isset($sql)) {
             

             unset($_SESSION["shopping_cart"]);
             // header("Location:Bill.php");
            
           }
 }


  }
 






 ?>