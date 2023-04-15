<?php
require('database.php');
//$error = '';
//$success = '';

$fullname= trim($_POST["fullname"]);
$username =trim( $_POST["Username"]);
$email= trim($_POST["email"]);
$phone= trim($_POST["phone"]);
$dob= trim($_POST["dob"]);
$age= trim($_POST["age"]);
$gender= trim($_POST["gender"]);

// Validate full name
if (empty($full_name)) {
  header("location: create_profile.php?perror= 'Full name is required.");
  
} 
  // Allow letters and spaces only
  if (!preg_match("/^[a-zA-Z ]*$/",$full_name)) {
    header("location: create_profile.php?perror= Only letters and white space allowed in full name.");

  }

// Validate username
if (empty($username)) {
  header("location: create_profile.php?perror= Username is required.");
} 
  // Allow letters, numbers, and underscores only
  if (!preg_match("/^[a-zA-Z0-9_]*$/",$username)) {
    header("location: create_profile.php?perror= Only letters, numbers, and underscores allowed in username.");
  }

// Validate phone number
if (empty($phone_number)) {
  header("location: create_profile.php?perror='Phone number is required");
} 
  // Allow numbers and dashes only
  if (!preg_match("/^[0-9-]*$/",$phone_number)) {
    header("location: create_profile.php?perror=Only numbers and dashes allowed in phone number.");
  }

// Validate email
if (empty($email)) {
  header("location: create_profile.php?perror= Email is required.");
} 
  // Validate email format
 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("location: create_profile.php?perror= Invalid email format");
  }


// Validate date of birth
if (empty($date_of_birth)) {
  header("location: create_profile.php?perror= Date of birth is required.");
}
  // Validate date format
  if (!preg_match("/^\d{4}-\d{2}-\d{2}$/", $date_of_birth)) {
    header("location: create_profile.php?perror=Invalid date format.");
  } 
  
else {
      // Calculate age
      $dob = new DateTime($date_of_birth);
      $now = new DateTime();
      $diff = $now->diff($dob);
      $age = $diff->y;
} 
      // Validate age
      if ($age < 18) {
        header("location: create_profile.php?perror= You must be at least 18 years old.");
      }

// Display error message or success message
else { 
 // header("location: create_profile.php?succes=Profile Created.");
   $sql = "INSERT INTO user_profile(`fullname`, `Username`, `email`, `phone`, `dob`, `age`, `gender`) values ('$fullname','$username','$email','$phone','$dob','$age','$gender')";
   mysqli_query($conn, $sql);
   header("location:update_profile.php");
} 
mysqli_close($conn);

?>
  


