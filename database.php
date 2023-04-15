<?php
$name= "localhost:3307";

$uname= "root";

$password = "";

$db_name = "dietplan";

$conn = mysqli_connect($name, $uname, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}
?>