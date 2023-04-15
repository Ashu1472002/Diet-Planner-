
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href=”css/bootstrap.css”>
        <link rel="stylesheet" href=”css/bootstrap-responsive.css”>
        <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
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
            <img id="img" src="img/profile_head.png" width="100%" height="550px"></img>
        </div>
        <!--add some content here-->
    </section>
    <section>
        <div class="container">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12 mx-auto">
                        <div class=row>
                            <div class="col-md-10 ">
                                <div class="exercise bmi_profile">
                                   <a href="bmi_first.php"><h2 class="sub_head"><center>BMI</center></h2></a>
                                    
                                </div>
                            </div>
                        </div>
                        <div class=row>
                            <div class="col-md-10">
                                <div class="exercise bmi_profile">
                                  <a href="diet_lose.php" > <h2 class="sub_head"><center>Diet Plan</center></h2></a>
                                </div>
                            </div>
                        </div>
                        <div class=row>
                            <div class="col-md-10">
                                <div class="exercise bmi_profile">
                                    <a href="exercise_loss.php"><h2 class="sub_head"><center>Exercise Plan</center></h2></a>
                                </div>
                            </div>
                        </div>
                        <div class=row>
                            <div class="col-md-10">
                                <div class="exercise bmi_profile">
                                   <a href="feedback.php"> <h2 class="sub_head"><center>Feedback</center></h2></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8 col-sm-12 mt-5">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title sub_head">Update Profile</h5>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Enter your name"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter your email"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="dob">Date of Birth</label>
                                        <input type="date" class="form-control" id="dob" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <select class="form-control" id="gender" required>
                                            <option value="" selected disabled>Select your gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="height">Height (in cm)</label>
                                        <input type="number" class="form-control" id="height" placeholder="Enter your height"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="height">Weight (in kg)</label>
                                        <input type="number" class="form-control" id="weight" placeholder="Enter your weight" required>
                                    </div>
                                    <div class="form-group">
                                        
                                        <input type="submit" class="form-control update_btn" id="weight" name="Update" required>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include"./footer.php"; ?>  

        
    