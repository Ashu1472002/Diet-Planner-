<?php
require("database.php");
$bmivalue="";
$height= $weight="";
$bmi="";
$status="";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $bmivalue = floatval($weight) / (floatval($height) / 100) ** 2;
    $msg="";
    $bmi= number_format( ($bmivalue),2);
    if ($bmivalue < 18.5) {
        $status = 'Underweight';
        $dieturl='diet_gain.php';
       $exerciseurl='exercise_gain.php';
       //echo "<script>window.alert('You are " . $status . " and you need to eat');</script>";
       $message="Eat";
       
      
    } elseif ($bmivalue >= 18.5 && $bmivalue < 25) {
        $status = 'Normal weight';
        $dieturl='diet_plan.php';
        $exerciseurl='exercise.php';
        //echo "<script>alert('You are " . $status . " and can follow healthy diet');</script>";
        $message="diet";

    } elseif ($bmivalue >= 25 && $bmivalue < 30) {
        $status = 'Overweight';
        $dieturl='diet_lose.php';
        $exerciseurl='exercise_loss.php';
        //echo "<script>alert('You are " . $status . " and need to lose weight');</script>";
        $message="diet";

    } else {
        $status = 'Obesity';
        $dieturl='diet_lose.php';
        $exerciseurl='exercise_loss.php';
        //echo "<script>alert('You are " . $status . " and follow strictly diet');</script>";
        $message="diet";
    }
}

$sql = "INSERT INTO bmi (height, weight, bmi, status) VALUES ('$height','$weight','$bmi','$status')";
    //  $stmt->bind_param("ddds", $height, $weight, $bmi, $status);
    // $stmt->execute();

   // Close connection
    // $stmt->close();
    // $conn->close();
    $result= mysqli_query($conn,$sql);
   //if($result){
     // header("location:bmi_first.php");
      
   //}
//   else{
//     die(mysqli_error($conn));
//   }
$conn->close();
  
?>
