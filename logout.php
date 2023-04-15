<?php

// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: index.php");
exit;
?>

<!-- unset($_SESSION['id']);
    setcookie("id", "", time() - 3600);
    $_COOKIE['id'] = "";
?> -->