
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
    <title>Diet Gain</title>
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

    <section class="total">
        <div class="main">
            <div class="section-title">
                <h2>Diet Plan </h2>
                <p> </p>   <!--Tagline-->
            </div>
            <div class="menus">
                <form id="plan"action="dietp.php" method="post">
                    <div class="d-flex justify-content-center row">
                        <h2>Breakfast(8:00-8:30AM)</h2>
                        <span class="content col-lg-6 col-sm-12">
                            <input type="checkbox" class="checkbox" name=breakfast[] value="2 Aloo Paratha + 1 cup Raita"> 2 Aloo Paratha + 1 cup Raita <br>
                            <input type="checkbox" class="checkbox" name=breakfast[] value="2 Chapati + 1 cup Daal"> 2 Chapati + 1 cup Daal <br>
                            <input type="checkbox" class="checkbox" name=breakfast[] value="2 Cheela (2) + Raita (1 cup)"> 2 Cheela (2) + Raita (1 cup)<br>
                            <input type="checkbox" class="checkbox" name=breakfast[] value="1 cup Veg Poha + 1/2 cup Raita"> 1 cup Veg Poha + 1/2 cup Raita <br>                            
                            <input type="checkbox" class="checkbox" name=breakfast[] value="1 cup Veg upma + 1/2 cup Raita"> 1 cup Veg upma + 1/2 cup Raita <br> 
                        </span>
                    </div>

                    <div class="d-flex justify-content-center row">
                        <h2>Mid-Meal(11:00-11:30AM)</h2>
                        <span class="content col-lg-6 col-sm-12">
                            <input type="checkbox" class="checkbox" name=mid[] value="1 cup Fruit Salad + 1 glass Tender Coconut Water"> 1 cup Fruit Salad + 1 glass Tender Coconut Water<br>
                            <input type="checkbox" class="checkbox" name=mid[] value="1 fresh pear + almonds"> 1 fresh pear + almonds<br>
                            <input type="checkbox" class="checkbox" name=mid[] value="1 cup grapes + walnuts"> 1 cup grapes + walnuts<br>
                            <input type="checkbox" class="checkbox" name=mid[] value="1 cup baby carrots + 1 cup cauliflower pieces"> 1 cup baby carrots + 1 cup cauliflower pieces<br>
                            <input type="checkbox" class="checkbox" name=mid[] value="10 whole wheat pretzel twists + 3 tablespoons hummus"> 10 whole wheat pretzel twists + 3 tablespoons hummus<br>
                            <input type="checkbox" class="checkbox" name=mid[] value="1 sliced apple + 1 glass Tender Coconut Water"> 1 sliced apple + 1 glass Tender Coconut Water <br>
                            <input type="checkbox" class="checkbox" name=mid[] value="1 banana + 1 cup plain yogurt with 1 tablespoon honey"> 1 banana + 1 cup plain yogurt with 1 tablespoon honey<br>
                        </span>
                    </div>

                    <div class="d-flex justify-content-center row">
                        <h2>Lunch(2:00-2:30PM)</h2>
                        <span class="content col-lg-6 col-sm-12">
                            <input type="checkbox" class="checkbox" name=lunch[] value="1 cup moong dal + 1 cup bhindi + 2 chapatti + salad"> 1 cup moong dal + 1 cup bhindi + 2 chapatti + salad<br>
                            <input type="checkbox" class="checkbox"name=lunch[] value="1 cup rajma + 1 cup gobhi aloo + 1 cup cucumber raita + 1 cup rice + 1 chapatti + onion salad"> 1 cup rajma + 1 cup gobhi aloo + 1 cup cucumber raita + 1 cup rice + 1 chapatti + onion salad<br>
                            <input type="checkbox" class="checkbox"name=lunch[] vaue=" 1 cup chicken curry + 1 cup boiled rice + 2 chapatti + salad"> 1 cup chicken curry + 1 cup boiled rice + 2 chapatti + salad<br>
                            <input type="checkbox" class="checkbox"name=lunch[] value="1 cup white chana + palak paneer + 1 cup rice + 1 chapatti + salad"> 1 cup white chana + palak paneer + 1 cup rice + 1 chapatti + salad<br>
                            <input type="checkbox" class="checkbox"name=lunch[] value="1 cup soy bean curry + 1 cup tinda vegetable + 2 chapatti + salad"> 1 cup soy bean curry + 1 cup tinda vegetable + 2 chapatti + salad<br>
                            <input type="checkbox" class="checkbox"name=lunch[] value="1 cup fish curry + 1 cup boiled rice + 1 chapatti + 1 cup ghia raita + salad"> 1 cup fish curry + 1 cup boiled rice + 1 chapatti + 1 cup ghia raita + salad<br>
                            <input type="checkbox" class="checkbox"name=lunch[] value=" 1 cup chicken curry + 1 cup rice + salad"> 1 cup chicken curry + 1 cup rice + salad<br>
                        </span>
                    </div>

                    <div class="d-flex justify-content-center row">
                        <h2>Evening Breakfast(4:00-4:30PM)</h2>
                        <span class="content col-lg-6 col-sm-12">
                            <input type="checkbox" class="checkbox" name=evening[] value="1 cup Tea/ Coffee + 1 cup Boiled Chana Chat"> 1 cup Tea/ Coffee + 1 cup Boiled Chana Chat<br>
                            <input type="checkbox" class="checkbox" name=evening[] value="1 cup Tea/ Coffee + 1 cup Aloo Chat"> 1 cup Tea/ Coffee + 1 cup Aloo Chat <br>
                            <input type="checkbox" class="checkbox" name=evening[] value="1 cup Tea/ Coffee + 1 cup Papri Chat "> 1 cup Tea/ Coffee + 1 cup Papri Chat <br>
                            <input type="checkbox" class="checkbox" name=evening[] value="1 cup Tea/ Coffee + 1 cup Mur-mure Chat "> 1 cup Tea/ Coffee + 1 cup Mur-mure Chat <br>
                            <input type="checkbox" class="checkbox" name=evening[] value="1 cup Tea/ Coffee + (About 30) grapes"> 1 cup Tea/ Coffee + (About 30) grapes<br>
                            <input type="checkbox" class="checkbox" name=evening[] value="1 cup Tea/ Coffee + 1 cup cherry tomatoes"> 1 cup Tea/ Coffee + 1 cup cherry tomatoes<br>
                            <input type="checkbox" class="checkbox"name=evening[] value="1 cup Tea/ Coffee + 1/2 cup blueberries"> 1 cup Tea/ Coffee + 1/2 cup blueberries<br>
                        </span>
                    </div>

                    <div class="d-flex justify-content-center row">
                        <h2>Dinner(8:00-8:30PM)</h2>
                        <span class="content col-lg-6 col-sm-12">
                            <input type="checkbox" class="checkbox" name=dinner[] value="2 Chapati + 1 cup Jeera Aloo"> 2 Chapati + 1 cup Jeera Aloo <br>
                            <input type="checkbox" class="checkbox"name=dinner[] value="2 Chapati + Mix Veg"> 2 Chapati + Mix Veg.<br>
                            <input type="checkbox" class="checkbox"name=dinner[] value="2 Chapati + 1 cup Fish Curry"> 2 Chapati + 1 cup Fish Curry <br>
                            <input type="checkbox" class="checkbox"name=dinner[] value="2 Chapati + 1 cup Mustard Greens"> 2 Chapati + 1 cup Mustard Greens <br>
                            <input type="checkbox" class="checkbox"name=dinner[] value="2 Chapati + 1 cup Bottle Gourd Curry "> 2 Chapati + 1 cup Bottle Gourd Curry <br>
                            <input type="checkbox" class="checkbox"name=dinner[] value="2 Chapati + 1 cup Matar n Mushroom Curry"> 2 Chapati + 1 cup Matar n Mushroom Curry <br>
                            <input type="checkbox" class="checkbox"name=dinner[] value="2 Chapati + 1 cup Kofta"> 2 Chapati + 1 cup Kofta <br>
                        </span>
                    </div>

                    <div class="button">
                        <button type="submit"  name="submit" value="plan" class="btn btn-outline-info">Save</button>
                    </div> 
                </form>                
            </div>        
        </div>
    </section>
 
    <section class="footer" style="margin-top:900px;height:370px;">
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
</body>

</html>     