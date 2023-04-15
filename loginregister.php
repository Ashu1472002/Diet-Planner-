<?php
 require("login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Login and Registration</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    
    
</head>
<body>
    <!-- <button type="button" class="btn">Back to Home</button> -->
    <a href="index.php">Back to Home</a>
    <div class="form-box">
        <div class="button-box">
            <div id="btn"></div>
            <button type="button" class="toggle-btn" onclick="login()">Login</button>
            <button type="button" class="toggle-btn" onclick="register()">Register</button>
        </div>
        <form id="login" class="input-group" action="login.php" method="post">
            <?php if(isset($_GET['error'])) { ?>
                <p class="error"> <?php echo $_GET['error']; ?></p>
            <?php } ?>
            <?php if(isset($_GET['regerror'])) { ?>
                <label class="regerror"> <?php echo $_GET['regerror']; ?></label>
            <?php } ?>
            <input type="text" class="input-field" name="Username" placeholder="Username" required>
            <input type="password" class="input-field" name="Password"placeholder="Password" required>
            <input type="checkbox" class="checkbox" name="rem" id="rem" ><p class="label" >Remember me</p>
            <button type="submit" class="submit-btn" name="login">Log In</button>
            <a href="#">Forgot Password?</a>
           
        </form>
        <form id="register" class="input-group" action="register.php" method="post">
       <!--  <?php if(isset($_GET['regerror'])) { ?>
                <label class="regerror"> <?php echo $_GET['regerror']; ?></label>
            <?php } ?> -->
            <input type="text" class="input-field"  name="Name" placeholder="Name" required>
            <input type="text" class="input-field" name="Username" placeholder="Username" required >
            <input type="password" class="input-field" name="Password" placeholder="Password" required>
            <input type="password" class="input-field" name="repeatpass" placeholder="Re-enter Password" required>
            <input type="checkbox" class="checkbox"><p class="label">I agree to the terms & conditions</p>
            <button type="submit" class="submit-btn" name="register">Register</button>
        </form>
    </div>

    <?php include"./footer.php"; ?>

    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register(){
            x.style.left="-400px";
            y.style.left="-50px";
            z.style.left="110px"
        }

        function login(){
            x.style.left="50px";
            y.style.left="450px";
            z.style.left="0px"
        }
    </script>

</body>
</html>

