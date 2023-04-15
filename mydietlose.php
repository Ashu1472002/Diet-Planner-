<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name=”viewport” content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dgstyle.css">
    <title>My Diet Plan</title>
    <style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;

}
th {
background-color: #588c7e;
color: white;
border:1px solid #ddd;
padding: 4px;

}
td{
    border:1px solid #ddd;
padding: 4px;
}
tr:nth-child(even) {background-color: #f2f2f2}
.next{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 60px;
}

</style>
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
                            <a class="dropdown-item" href="diet_lose.php">Diet Planner</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="exercise_loss.php">Exercise Suggestion</a>
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

    <section class="total">
        <div class="main">
            <div class="section-title">
                <h2>My Diet Plan</h2>
                <p> </p>   <!--Tagline-->
            </div>
            <table>
                <tr>
                    <th>Breakfast</th>
                    <th>Mid-Meal</th>
                    <th>Lunch</th>
                    <th> Evening Breakfast</th>
                    <th>Dinner</th>
                </tr>
            
            <?php
            require("database.php");
            $diet="";
            if(isset($_POST['submit'])) {
               $diet = $_POST['id'];
            }
            $sql = "SELECT breakfast,mid,lunch,evening,dinner FROM dietloss";
             $result = mysqli_query($conn, $sql);

            if($result-> num_rows>0){
                while($row = $result-> fetch_assoc()){
                    echo "<tr><td>".$row["breakfast"]."</td><td>".$row["mid"]."</td><td>".$row["lunch"]."</td><td>".$row["evening"]."</td><td>".$row["dinner"]."</td></tr>";
                }
                echo "</table>";
            }
            else
            echo "No diet";
            $conn->close();
?>
</table>

                             <!-- <div class="next">
                            <a type="button" <?php if (isset($exerciseurl)) : ?> onclick="redirectToExercise()"<?php endif;?> class="btn btn-outline-dark btn-lg btn-block">
                            <center><h3>Next</h3></center>
                            </a>
                        </div> 
         -->
    <section class="footer" style="margin-top: 900px;height:400px;">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h1>Health Hub</h1>
                        <!--Enter some content here-->
                    </div>
                    <div class="col-4 col-md-2 mb-3">
                        <h5>Health Hub</h5>
                        <ul class="nav flex-column foot_sec">
                            <li class="nav-item mb-2">
                                <a href="#Home">Home</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#About">About</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#Services">Services</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#Contact">Contact</a>
                            </li>

                        </ul>

                    </div>
                    <div class="col-6 col-md-2 mb-3  foot_sec">
                        <h5>Services</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2">
                                <a href="#Diet_Planner">Diet Planner</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#Exercise Suggestor">Exercise Suggestor</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#Daily Routine Planner">Daily Routine Planner</a>
                            </li>

                        </ul>

                    </div>
                    <div class="col-6 col-md-2 mb-3 foot_sec">
                        <h5>Connect</h5>
                        <ul class="nav flex-column ml-auto">
                            <li class="nav-item mb-2">
                                <a href="#">Instagram</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#">Facebook</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#">LinkedIn</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#">Twitter</a>
                            </li>

                        </ul>

                    </div>
                </div>
                <div class="row justify-content-bottom">
                    <div class="col-auto">
                        <p>©2023 Diet Planner - Software for good health.</p>
                    </div>
                </div>
            </div>

        </footer>
    </section>




    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <script src="js/bmi.js"></script>
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>