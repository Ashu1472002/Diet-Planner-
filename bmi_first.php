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
       $message=" You are " . $status . " and you need to Gain weight!" ;
       
      
    } elseif ($bmivalue >= 18.5 && $bmivalue < 25) {
        $status = 'Normal weight';
        $dieturl='diet_plan.php';
        $exerciseurl='exercise.php';
        //echo "<script>alert('You are " . $status . " and can follow healthy diet');</script>";
        $message=" You are " . $status . " You can Follow diet to maintain your BMI! " ;

    } elseif ($bmivalue >= 25 && $bmivalue < 30) {
        $status = 'Overweight';
        $dieturl='diet_lose.php';
        $exerciseurl='exercise_loss.php';
        //echo "<script>alert('You are " . $status . " and need to lose weight');</script>";
        $message=" You are " . $status . " and you need to Lose weight!" ;

    } else {
        $status = 'Obesity';
        $dieturl='diet_lose.php';
        $exerciseurl='exercise_loss.php';
        //echo "<script>alert('You are " . $status . " and follow strictly diet');</script>";
        $message=" Your BMI Status is " . $status . " and need to lose weight!" ;
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
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name=”viewport” content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href=”css/bootstrap.css”>
    <link rel="stylesheet" href=”css/bootstrap-responsive.css”>
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
    <title>Diet Planner</title>
    <script>

function redirectToDietPlan() {
    <?php if (isset($dieturl)) : ?>
        window.location.href = "<?php echo $dieturl ?>";
    <?php endif; ?>
}
function redirectToExercise(){
    <?php if (isset($exerciseurl)) : ?>
        window.location.href = "<?php echo $exerciseurl ?>";
    <?php endif; ?>
}
 window.onload = function showAlert() {
        
if($status="Underweight")
        alert("<?php echo $message; ?>");
     
       else if($status="Normal weight")
        alert("<?php echo $message; ?>");

     else if($status="Overweight")
     alert("<?php echo $message; ?>"); 

      else if($status="Obesity")
        alert("<?php echo $message; ?>");
    else{

    }
}

    </script>
    
</head>

<body>
    <section id="Home">

        <nav class="navbar navbar-expand-lg navbar-light bg-light head">
            <a class="navbar-brand" href="#Home"><img class="logo" src="img/logo.svg"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto" id="menu">
                    <li class="nav-item active">
                        <a class="nav-link font-weight-normal" href="index.php">Home <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-normal" href="index.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-normal" href="index.php"> Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-normal" href="loginregister.php">Login/Register</a>
                    </li>
                    <li class="nav-item dropdown ml-auto">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="update_profile.php">Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Diet Planner</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Exercise Suggestion</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="feedback.php">Feedback</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="index.php">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="row">
            <img id="img" src="img/bmi_img.png" width="100%" height="550px"></img>
        </div>
        <!--add some content here-->
    </section>

    <section>
        
        <div> 
        
            <h2 class="bmi_heading mt-5" >Let's Get Started</h2>
            <div class=" d-flex justify-content-center bmi border">
                    <div class="container col-6">
                    <form id="bmi" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
                        <center>
                            <h3 class="bmi_sub_head" name="height" >Height</h3>
                            <div class="input-group input-group-lg mb-3 w-50">
                                <input type="text" id="height" name="height"class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-lg" placeholder="In Centimeters">
                            </div>
                        </center>
                    </div>
                    <div class="container col-6">
                        <center>
                            <h3 class="bmi_sub_head" name="weight" >Weight</h3>
                            <div class="input-group input-group-lg mb-3 w-50" >
                                <input type="text" id="weight" name="weight"class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-lg" placeholder="In Kilograms">
                            </div>
                        </center>
                    </div>
            </div>
            <div class=" d-flex justify-content-center bmi ">
                <button type="submit" onclick="showAlert()"  class="btn btn-outline-dark btn-lg btn-block" name="submit" ><h3>Here's Your BMI</h3></button>
            </div>
            
            <!-- //  error_reporting(0);
            //  $bmi= number_format($bmipass , 2); -->
            <!-- <?php if (isset($bmi) && isset($status));?>  -->
            
            <div class="justify-content-center status border bmi">
                <div class=" d-flex justify-content-center">
                    <div class="bmi-value">
                        <h3 class="bmi_sub_head" name="bmi">BMI Value:</h3>
                        <center><h4><div id="bmi"></div> <?php if(isset($bmi)) ?><?php echo $bmi ?> </h4></center>
                    </div>
                </div>
                <div class=" d-flex justify-content-center ">
                    <div class="bmi-value">
                        <h3 class="bmi_sub_head" name="status">Status:</h3>
                        <center><h4><div id="status"> </div> <?php if(isset($status))?><?php echo $status; ?></h4></center>
                    </div>
                </div>
               
    
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <a type="button" <?php if (isset($dieturl)) : ?> onclick="redirectToDietPlan()"<?php endif;?> class="btn btn-outline-dark btn-lg btn-block">
                            <center><h3>Diet Plan</h3></center>
                            </a>
                        </div> 
                        <div class="col-6">
                            <a type="button" <?php if (isset($exerciseurl)) : ?> onclick="redirectToExercise()"<?php endif;?> class="btn btn-outline-dark btn-lg btn-block">
                            <center><h3>Exercise Suggestion</h3></center>
                            </a>
                            
                        </div>  
                        </form>
                    </div>
                  
                </div> 
                
            </div>    
        </div> 
       
    </section>

    <?php include"./footer.php";?>