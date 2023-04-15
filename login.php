<?php
   include("database.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      function validate($data){
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
      
      } 
      
      $username = mysqli_real_escape_string($conn,$_POST['Username']);
      $pass= mysqli_real_escape_string($conn,$_POST['Password']); 
      $error = "";
      
      $sql = "SELECT id FROM users WHERE Username = '$username' and Password = '$pass'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC); 
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("username");
         $_SESSION['login_user'] = $username;
           header("location: create_profile.php");
      }
      else{
        //echo  $error = "Your Login Name or Password is invalid";
        header("location: loginregister.php?error=Your Login Name or Password is invalid");

        // echo "Your Login Name or Password is invalid";
      }
   }
   if(!empty($_POST["rem"])) {
      setcookie ("Username",$_POST["Username"],time()+ 3600);
      setcookie ("Password",$_POST["Password"],time()+ 3600);
     // echo "Cookies Set Successfuly";

   } else {
      setcookie("Username","");
      setcookie("Password","");
     // echo "Cookies Not Set";
   }
   //.....
   


