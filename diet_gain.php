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
                <h2>Diet Plan to Gain Weight</h2>
                <p> </p>   <!--Tagline-->
            </div>
            <div class="menus">
                <form id="gain" action="dietg.php" method="post">
                    <div class="d-flex justify-content-center row">
                        <h2>Breakfast(8:00-8:30AM)</h2>
                        <span class="content col-lg-6 col-sm-12">
                            <input type="checkbox" class="checkbox" name=breakfast[] value="2 egg brown bread sandwich + green chutney + 1 cup milk + 3 cashews + 4 almonds + 2 walnuts"> 2 egg brown bread sandwich + green chutney + 1 cup milk + 3 cashews + 4 almonds + 2 walnuts<br>
                            <input type="checkbox" class="checkbox" name=breakfast[] value=" 3 onion stuffed parantha + 1 cup curd + 3 cashews + 4 almonds + 2 walnuts"> 3 onion stuffed parantha + 1 cup curd + 3 cashews + 4 almonds + 2 walnuts<br>
                            <input type="checkbox" class="checkbox" name=breakfast[] value="3 paneer stuffed besan cheela + green chutney + 1 cup curd + 3 cashews + 4 almonds + 2 walnuts"> 3 paneer stuffed besan cheela + green chutney + 1 cup curd + 3 cashews + 4 almonds + 2 walnuts<br>
                            <input type="checkbox" class="checkbox" name=breakfast[] value="1.5 cup vegetable bread upma + 1 cup milk + 3 cashews + 4 almonds + 2 walnuts"> 1.5 cup vegetable bread upma + 1 cup milk + 3 cashews + 4 almonds + 2 walnuts<br>
                            <input type="checkbox" class="checkbox" name=breakfast[] value="2 cucmber potato sandwich + 1 tsp green chutney + 1 orange juice + 3 cshews + 2 walnuts + 4 almonds"> 2 cucmber potato sandwich + 1 tsp green chutney + 1 orange juice + 3 cshews + 2 walnuts + 4 almonds<br>
                            <input type="checkbox" class="checkbox" name=breakfast[] value="2 cup vegetable poha + 1 cup curd + 3 cashews + 4 almonds + 2 walnuts"> 2 cup vegetable poha + 1 cup curd + 3 cashews + 4 almonds + 2 walnuts<br>
                            <input type="checkbox" class="checkbox" name=breakfast[] value="3 vegetable suji cheela + 1 cup strawberry shake + 4 cashews + 4 almonds + 3 walnuts"> 3 vegetable suji cheela + 1 cup strawberry shake + 4 cashews + 4 almonds + 3 walnuts<br>
                        </span>
                    </div>

                    <div class="d-flex justify-content-center row">
                        <h2>Mid-Meal(11:00-11:30AM)</h2>
                        <span class="content col-lg-6 col-sm-12">
                            <input type="checkbox" class="checkbox" name=mid[] value=" 1 cup banana shake"> 1 cup banana shake<br>
                            <input type="checkbox" class="checkbox" name=mid[] value=" 1 cup mango shake"> 1 cup mango shake<br>
                            <input type="checkbox" class="checkbox" name=mid[] value="1 apple smoothie with maple syrup"> 1 apple smoothie with maple syrup<br>
                            <input type="checkbox" class="checkbox" name=mid[] value="1 cup ripe banana with 2 tsp ghee"> 1 cup ripe banana with 2 tsp ghee<br>
                            <input type="checkbox" class="checkbox" name=mid[] value="1 cup buttermilk + 1 cup sweet potato chaat"> 1 cup buttermilk + 1 cup sweet potato chaat<br>
                            <input type="checkbox" class="checkbox" name=mid[] value=" 2 cups watermelon juice"> 2 cups watermelon juice<br>
                            <input type="checkbox" class="checkbox" name=mid[] value="1 cup coconut water + 1 cup pomegranate"> 1 cup coconut water + 1 cup pomegranate<br>
                        </span>
                    </div>

                    <div class="d-flex justify-content-center row">
                        <h2>Lunch(2:00-2:30PM)</h2>
                        <span class="content col-lg-6 col-sm-12">
                            <input type="checkbox" class="checkbox" name=lunch[] value="1 cup arhar dal + 1 cup potato curry + 3 chapatti + 1/2 cup rice + 1/2 cup low fat curd + salad"> 1 cup arhar dal + 1 cup potato curry + 3 chapatti + 1/2 cup rice + 1/2 cup low fat curd + salad<br>
                            <input type="checkbox" class="checkbox" name=lunch[] value=" 1 cup moong dal/ chicken curry + 1 cup potato and caulifllower vegetable + 3 chapatti + 1/2 cup rice + salad"> 1 cup moong dal/ chicken curry + 1 cup potato and caulifllower vegetable + 3 chapatti + 1/2 cup rice + salad<br>
                            <input type="checkbox" class="checkbox" name=lunch[] value=" 1 cup masoor dal + 1 cup calocasia + 3 chapatti + 1/2 cup rice + 1 cup low curd + salad"> 1 cup masoor dal + 1 cup calocasia + 3 chapatti + 1/2 cup rice + 1 cup low curd + salad<br>
                            <input type="checkbox" class="checkbox" name=lunch[] value=" 1 cup rajma curry + 1 cup spinach potato + 3 chapatti + 1/2 cup rice + salad"> 1 cup rajma curry + 1 cup spinach potato + 3 chapatti + 1/2 cup rice + salad<br>
                            <input type="checkbox" class="checkbox" name=lunch[] value="1 cup white chana/ fish curry + 3 chapatti + 1/2 cup rice + salad"> 1 cup white chana/ fish curry + 3 chapatti + 1/2 cup rice + salad<br>
                            <input type="checkbox" class="checkbox" name=lunch[] value="1 cup chana dal + 1 cup bhindi vegetable + 3 chapatti + 1/2 cup rice + salad"> 1 cup chana dal + 1 cup bhindi vegetable + 3 chapatti + 1/2 cup rice + salad<br>
                            <input type="checkbox" class="checkbox" name=lunch[] value=" 1 cup coconut water + 1 cup pomegranate"> 1 cup coconut water + 1 cup pomegranate<br>
                        </span>
                    </div>

                    <div class="d-flex justify-content-center row">
                        <h2>Evening Breakfast(4:00-4:30PM)</h2>
                        <span class="content col-lg-6 col-sm-12">
                            <input type="checkbox" class="checkbox" name=evening[] value="1 cup strawberry smoothie + 1 cup vegetable poha"> 1 cup strawberry smoothie + 1 cup vegetable poha<br>
                            <input type="checkbox" class="checkbox"  name=evening[] value="1 cup pomegranate juice + 2 butter toasted bread"> 1 cup pomegranate juice + 2 butter toasted bread<br>
                            <input type="checkbox" class="checkbox"  name=evening[] value="1 cup tomato soup with bread crumbs + 1 cup aloo chaat"> 1 cup tomato soup with bread crumbs + 1 cup aloo chaat<br>
                            <input type="checkbox" class="checkbox"  name=evening[] value="1 cup vegetable juice + 1 cup upma"> 1 cup vegetable juice + 1 cup upma<br>
                            <input type="checkbox" class="checkbox"  name=evening[] value="1 cup almond milk + banana"> 1 cup almond milk + banana<br>
                            <input type="checkbox" class="checkbox"  name=evening[] value="1 cup sprouts salad + 2 potato cheela + green chutney"> 1 cup sprouts salad + 2 potato cheela + green chutney<br>
                            <input type="checkbox" class="checkbox"  name=evening[] value="1 cup fruit salad + 4 pc vegetable cutlets + green chutney"> 1 cup fruit salad + 4 pc vegetable cutlets + green chutney<br>
                        </span>
                    </div>

                    <div class="d-flex justify-content-center row">
                        <h2>Dinner(8:00-8:30PM)</h2>
                        <span class="content col-lg-6 col-sm-12">
                            <input type="checkbox" class="checkbox" name=dinner[] value="1.5 cup chicken curry + 3 chapatti + salad"> 1.5 cup chicken curry + 3 chapatti + salad<br>
                            <input type="checkbox" class="checkbox" name=dinner[] value="1 cup beans potato vegetable + 3 chapatti + salad"> 1 cup beans potato vegetable + 3 chapatti + salad<br>
                            <input type="checkbox" class="checkbox" name=dinner[] value="1 cup carrot peas vegetable +3 chapatti + salad"> 1 cup carrot peas vegetable +3 chapatti + salad<br>
                            <input type="checkbox" class="checkbox" name=dinner[] value=" 1.5 cup parwal vegetable + 3 chapatti + salad"> 1.5 cup parwal vegetable + 3 chapatti + salad<br>
                            <input type="checkbox" class="checkbox" name=dinner[] value="1 cup cauliflower potato vegetable + 3 chapatti + salad"> 1 cup cauliflower potato vegetable + 3 chapatti + salad<br>
                            <input type="checkbox" class="checkbox" name=dinner[] value="1 cup peas mushroom vegetable + 3 chapatti + salad"> 1 cup peas mushroom vegetable + 3 chapatti + salad<br>
                            <input type="checkbox" class="checkbox" name=dinner[] value=" 1 cup karela vegetable + 3 chaptti + salad"> 1 cup karela vegetable + 3 chaptti + salad<br>
                        </span>
                    </div>

                    <div class="button">
                        <button  type="submit"  name="submit" value="gain" class="btn btn-outline-info">Save</button>
                    </div> 
                </form>                
            </div>        
        </div>
    </section>
 
    <section class="footer" style="margin-top: 1100px;height:370px;">
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