<?php
require("database.php");
$user_id = 123; // Replace with the user ID of the logged-in user

$result = mysqli_query($conn, "SELECT * FROM user_profile  WHERE id = $user_id");
$row = mysqli_fetch_assoc($result);

$fullname = $row['fullname'];
$email = $row['email'];
$dob = $row['dob'];
$gender = $row['gender'];
$height = $row['height'];
$weight= $row['weight'];


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$new_fullname = $row['fullname'];
$new_email = $row['email'];
$new_dob = $row['dob'];
$new_gender = $row['gender'];
$new_height = $row['height'];
$new_weight= $row['weight'];

  $stmt = mysqli_prepare($conn, "UPDATE user_profile SET fullname=?,email=?,dob=?,gender=?,height=?,weight=? WHERE id = ?");
  mysqli_stmt_bind_param($stmt, "ssi", $new_fullname, $new_email,$new_dob,$new_gender,$new_height,$new_weight, $user_id);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);

  $fullname = $new_fullname;
  $email = $new_email;
  $dob= $new_dob;
  $gender= $new_gender;
  $height= $new_height;
  $weight=$new_weight;
}

mysqli_close($conn);



?>