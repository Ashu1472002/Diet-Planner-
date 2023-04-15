
<!Doctype html>
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
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    

    <title>Diet Planner</title>
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
                        <a class="nav-link font-weight-normal" href="#Home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-normal" href="#About">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-normal" href="#Services"> Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-normal" href="loginregister.php">Login/Register</a>
                    </li>
                    <!-- <li class="nav-item dropdown ml-auto">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="true">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="update_profile.php">Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="diet_plan.php ">Diet Planner</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="exercise.php">Exercise Suggestion</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Set Daily Routine</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Nutrition Guidelines</a>
                        </div>
                    </li> -->
                </ul>
            </div>
        </nav>
        
        <div class="image-container">
            <img id="img" src="img/bg_img.jpeg" width="100%" height="100%"></img>
            <div class="text-overlay">
                <h1>DIET PLANNER <br></h1>
                <h2>USING BMI CALCULATION</h2>
            </div>
            <a class="image-text index_btn" type="button" href="bmi_first.php">Get Started</a>
        </div>
        <!--add some content here-->
    </section>

    


    <section id="About" class="about">
        <h1 class="heading">ABOUT</h1>
        <div class="d-flex justify-content-center row">
                <img src="img/about.jpeg" width="40%" height="40%"></img>
                <span class="about-content col-lg-6 col-sm-12"><p>&emsp;It is sometimes said your health is a function of what you are
                    not doing, not what you are currently doing.The degree to which individuals can attain,
                    process, and comprehend the necessary health information and services they need to make
                    proper health decisions is vital for optimal health and well being.</p>
                    <p>&emsp;The objective of Website is to provide a diet plan options that would help users to maintain
                    their health while also providing exercises to loose or gain weight accordingly.This also
                    promotes constant awareness for people with specialized health diets. The
                    system provides a complete and easy to use integrated system that promotes the process of
                    analyzing wellness and improving the user’s overall health.</p>
                </span> 
        </div>

    </section>

    <section id="Services">
        <div class="d-flex justify-content-center services">
            <div>
                <h3 class="heading">
                    <center>SERVICES</center>
                </h3> 
                
                <div class="flex justify-content-center">  
                    <div class="row center">
                        <div class="center">
                            <img class="vectors" src="img/undraw_diet_ghvw.svg" alt="Diet Planner">
                            <h2 class="sub_head">Diet Planner</h2>
                        </div>
                        <div class="justify-content-center">
                            <img class="vectors" src="img/undraw_workout_gcgu.svg" alt="Exercise Suggestor">
                            <h2 class="sub_head">Exercise Suggestor</h2>
                        </div>
                        <!-- <div class="justify-content-center">
                            <img class="vectors" src="img/undraw_complete_task_re_44tb.svg" alt="Daily Routine Planner">
                            <h2 class="sub_head">Daily Routine Planner</h2>
                        </div>   -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
    
    <?php include"./footer.php"; ?>
    </html>


    


    
