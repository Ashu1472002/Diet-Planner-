<?php
 require('database.php');
 $name= $_POST["Name"];
 $username = $_POST["Username"];
 $pass= $_POST["Password"];
 $passwordconfirm= $_POST['repeatpass'];
 

 $s= "select * from users where Username = '$username'";
 $result =  mysqli_query($conn,$s);
 $num = mysqli_num_rows($result);

 if($num==1){
   // echo $username_error= "Username taken";
    header("location: loginregister.php?regerror= Username already taken");

 }
 
 elseif(strlen($pass) < 6) {
   //echo $password_error = "Password must be minimum of 6 characters";
   header("location: loginregister.php?regerror=Password must be minimum of 6 characters");

   }  
  elseif($pass!= $passwordconfirm) {
     // echo $passwordconfirm_error = "Password and Re-Enter Password doesn't match";
      header("location: loginregister.php?regerror=Password and Re-Enter Password doesn't match");

      }
 else{
    $reg ="insert into users(Name,Username,Password) values ('$name','$username','$pass')";
    mysqli_query($conn,$reg);
    header("location: loginregister.php");
                                                  
 }
 
 ?>