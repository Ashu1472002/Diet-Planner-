<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercise Page</title>

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href=”css/bootstrap.css”>
    <link rel="stylesheet" href=”css/bootstrap-responsive.css”>
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+JQLhZz9zzTtmI9XVYDrdEgH5J7xS+" crossorigin="anonymous">

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
            <img id="img" src="img/exercise_head.png" width="100%" height="550px"></img>
        </div>
        <!--add some content here-->
    </section>
    
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-5 bmi_heading">Exercises</h1>
                </div>
        
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-5 bmi_subhead"><center>Week 1 to 4</center></h1>
                </div>
        
            </div>
        
            <div class="row">
                <div class="col-md-4">
                    <div class="exercise bmi_profile">
                        <h2>Cardiovascular Exercise</h2>
                        <p>Aim for at least 30 minutes of moderate-intensity cardio exercise, such as brisk walking, jogging, cycling, or swimming, on most days of the week</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="exercise bmi_profile">
                        <h2>Resistance Training</h2>
                        <p>Include 2-3 days per week of strength training exercises targeting major muscle groups, such as squats, lunges, push-ups, and rows. Aim for 3-4 sets of 8-12 reps with a weight that is challenging but manageable</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="exercise bmi_profile">
                        <h2>Flexibility Training</h2>
                        <p>Include stretching exercises at the end of each workout to improve flexibility and prevent injury</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-5 bmi_subhead"><center>Week 5 to 8</center></h1>
                </div>
        
            </div>
        
            <div class="row">
                <div class="col-md-4">
                    <div class="exercise bmi_profile">
                        <h2>Cardiovascular Exercise</h2>
                        <p>Increase to at least 45 minutes of moderate-intensity cardio exercise on most days of the week</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="exercise  bmi_profile">
                        <h2>Resistance Training</h2>
                        <p>Increase to 3-4 days per week of strength training exercises, and aim for 4-5 sets of 8-12 reps with a weight that is challenging but manageable</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="exercise  bmi_profile">
                        <h2>Flexibility Training</h2>
                        <p>Continue to include stretching exercises at the end of each workout to improve flexibility and prevent injury</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-5 bmi_subhead"><center>Week 9 to 12</center></h1>
                </div>
        
            </div>
        
            <div class="row">
                <div class="col-md-4">
                    <div class="exercise  bmi_profile">
                        <h2>Cardiovascular Exercise</h2>
                        <p>Increase to at least 60 minutes of moderate-intensity cardio exercise on most days of the week</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="exercise  bmi_profile">
                        <h2>Resistance Training</h2>
                        <p>Increase to 4-5 days per week of strength training exercises, and aim for 5-6 sets of 8-12 reps with a weight that is challenging but manageable</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="exercise  bmi_profile">
                        <h2>Flexibility Training</h2>
                        <p>Continue to include stretching exercises at the end of each workout to improve flexibility and prevent injury</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 exercise">
                    <h4>
                        Remember to start slowly and gradually increase the intensity and duration of your workouts to avoid injury and burnout. Also, be sure to listen to your body and make modifications as needed. Finally, prioritize getting adequate sleep and nutrition to support your fitness goals and overall health.
                    </h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-5 bmi_subhead"><center>Cardiovascular Exercises</center></h1>
                </div>
        
            </div>
        
            <div class="row">
                <div class="col-md-6">
                    <div class="exercise  bmi_profile">
                        <h2>Jumping Ropes</h2>
                        <p>How to do:</p>
                        <ul>
                            <li>Hold the rope while keeping your hands at hip level.</li>
                            <li>Rotate your wrists to swing the rope and jump.</li>
                            <li>Jump with both feet at the same time, one foot at a time, alternating between feet, etc.</li>
                            <li>Repeat until the set is complete.</li>
                            <li>Duration : start slowly with just 1 set of 2 to 3 minutes and increase the intensity and duration over time.</li>
                        </ul>
                        <img src="img/jumpingrope.jpg" width="100%" height="100%">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="exercise  bmi_profile">
                        <h2>Jogging in place</h2>
                        <p>How to do:</p>
                        <ul>
                            <li>Stand straight with your feet shoulder-width apart and face forward, opening up your chest.</li>
                            <li>Start pulling your knees up, and slowly land on the balls of your feet.</li>
                            <li>Repeat until the set is complete</li>
                            <li>Duration:start slowly then increase gradually.</li>
                        </ul>
                        <img src="img/jogginginplace.jpg" width="100%" height="100%">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-5 bmi_subhead"><center>Strength Training Exercises</center></h1>
                </div>
        
            </div>
        
            <div class="row">
                <div class="col-md-6">
                    <div class="exercise  bmi_profile">
                        <h2>Pushups </h2>
                        <p>How to do:</p>
                        <ul>
                            <li>Look down the whole time to keep your neck neutral and your back straight.</li>
                            <li>Maintain a slight diagonal line between your ears, shoulders, hips, and ankles.</li>
                            <li>Engage your core and glutes.</li>
                            <li>Bend your elbows to lower your body in a straight line down to the floor</li>
                            <li>Hover just above the floor.</li>
                            <li>Engage your shoulders to push into the floor.</li>
                            <li>Engage your shoulders to push into the floor.</li>
                            <li>Duration:start slowly improve gradually 10 to 20 reps a day</li>
                        </ul>
                        <img src="img/pushups.jpg" width="100%" height="100%">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="exercise  bmi_profile">
                        <h2>lunges</h2>
                        <p>How to do:</p>
                        <ul>
                            <li>Stand with your feet hip-width apart, keep your back straight, your shoulders back, and your abs tight.</li>
                            <li>Take a step forward and slowly bend both knees, until your back knee is just above the floor.</li>
                            <li>. Stand back up and repeat the movement.</li>
                            <li>Alternate legs until the set is complete</li>
                            <li>Duration:Start with a basic lunge and try to complete 1 set of 8 to 12 repetitions</li>
                        </ul>
                        <img src="img/lunges.jpg" width="100%" height="100%">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="exercise  bmi_profile">
                        <h2>Burpees </h2>
                        <p>How to do:</p>
                        <ul>
                            <li>Stand straight with your feet shoulder-width apart.</li>
                            <li>Squat and place your hands in front of your feet.</li>
                            <li>Jump back until your legs are fully extended and your body is in plank position.</li>
                            <li>Do a push up, jump forward, and then push through the heels to return to the starting position.</li> 
                            <li>Repeat until the set is complete.</li> 

                            <li>Duration: 3 to 5 sets of 8 to 15  burpees Start with low count</li>
                        </ul>
                        <img src="img/burpees.jpg" width="100%" height="100%">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="exercise  bmi_profile">
                        <h2>Jumping jacks</h2>
                        <p>How to do:</p>
                        <ul>
                            <li>Stand straight with your feet together and hands by your sides.</li>
                            <li>Jump up, spread your feet and bring both hands together above your head.</li>
                            <li>Jump again and return to the starting position.</li>
                            <li>Repeat until the set is complete.</li>
                            <li>Duration:Start with 8 to 12 reps or 30-sec sets and increase over time.</li>
                        </ul>
                        <img src="img/jumpingjacks.jpg" width="100%" height="100%">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                    <div class="exercise  bmi_profile">
                        <h2>Squats </h2>
                        <p>How to do:</p>
                        <ul>
                            <li>Stand up with your feet shoulder-width apart.</li>
                            <li>Bend your knees, press your hips back and stop the movement once the hip joint is slightly lower than the knees.</li>
                            <li>Press your heels into the floor to return to the initial position.</li>
                            <li>Repeat until set is complete</li>
                            <li>Duration:start with 3 sets of 15 to 20 repetitions.</li>
                        </ul>
                        <img src="img/squats.jpg" width="100%" height="100%">
                    </div>
                </div>
                
            </div>
        
        
        
        </div>
    
    
    <?php include"./footer.php"; ?>