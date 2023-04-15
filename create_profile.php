<?php
require("database.php");
if(isset($_GET['id']))
{
  $id=$_GET["id"];
  $query = "SELECT Username FROM users WHERE id='$id'";
  $query_run= mysqli_query($conn,$query);
  if(mysqli_num_rows($query_run)>0){
     foreach($query_run as $row)
     {
      echo $row["Username"];
     }
  
  }else{
           echo "no ";
  }

}

?>
<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/profile.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
   </head>
<body>
<a href="index.php">Back to Home</a>
  <div class="container" id="createprofile" >
    <div class="title">User Profile</div>
    <div class="content">
      <form action="profile.php" method="post">
      <?php if(isset($_GET['perror'])) { ?>
                <p class="perror"> <?php echo $_GET['perror']; ?></p>
            <?php } ?>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" name="fullname" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" name="Username" value="" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" name="email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="tel" placeholder="Enter your number" name="phone" required>
          </div>
          <div class="input-box">
            <span class="details">Age</span>
            <input type="number" placeholder="Enter your Age" name="age"required >
          </div>
          <div class="input-box">
            <span class="details">Date of Birth</span>
            <input type="date" placeholder="" name="dob" required>
          </div>
          
        </div>
        <div class="gender-details">  
        <input type="radio" id="dot-1"  name="gender" value="male" required>
        <input type="radio" id="dot-2"  name="gender" value="female" required>     
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1" > 
            <span class="dot one" ></span>
            <span class="gender" >Male</span>
          </label>
          <label for="dot-2" >
          <span class="dot two" ></span>
            <span class="gender">Female</span>
          </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Create" name="create">
        </div>
      </form>
    </div>
  </div>

  

 
  