<?php
include "db_connection.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // username and password sent from form
    
  $username = $_POST['username'];
  $password = $_POST['user_password'];

  $sql = "SELECT * FROM administrator WHERE employee_email = '$username' and employee_password = '$password'";
  $result = mysqli_query($conn, $sql);

  $row = mysqli_fetch_array($result);

  $count = mysqli_num_rows($result);

  // If result matched $myusername and $mypassword, table row must be 1 row

  if ($count == 1) {
    echo $row;
    $_SESSION['login_user'] = $username;
    $_SESSION['user_id'] = $row["user_id"];
    header("location: view_cinemas.php");
  } else {
    $error = "Your Login Name or Password is invalid";
    echo $error;
  }
}
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">

<!-- landing14:04-->
<head>
	<!-- Basic need -->
	<title>Open Pediatrics</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<link rel="profile" href="#">

    <!--Google Font-->
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
	<!-- Mobile specific meta -->
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone-no">

	<!-- CSS files -->
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
<!--preloading-->
<div id="preloader">
    <img class="logo" src="images/logo1.png" alt="" width="119" height="58">
    <div id="status">
        <span></span>
        <span></span>
    </div>
</div>
<!--end of preloading-->
<!--login form popup-->
<div class="login-wrapper" id="login-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>Login</h3>
        <form method="post" action="#">
        	<div class="row">
        		 <label for="username">
                    Username
                    <input type="text" name="username" id="username" required="required" />
                </label>
        	</div>
           
            <div class="row">
            	<label for="password">
                    User Password
                    <input type="password" name="user_password" id="password" required="required" />
                </label>
            </div>
           <div class="row">
           	 <button type="submit" name="submit">Login</button>
           </div>
        </form>
        <div class="row">
        	<p>Or via social</p>
            <div class="social-btn-2">
            	<a class="fb" href="#"><i class="ion-social-facebook"></i>Facebook</a>
            	<a class="tw" href="#"><i class="ion-social-twitter"></i>twitter</a>
            </div>
        </div>
    </div>
</div>
<!--end of login form popup-->
<!--signup form popup-->
<div class="login-wrapper"  id="signup-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>sign up</h3>
        <form method="post" action="create_employee.php">
            <div class="row">
                 <label for="username-2">
                    Employee Name:
                    <input type="text" name="emplyee_name" id="username-2" placeholder="" required="required" />
                </label>
            </div>
           
            <div class="row">
                <label for="email-2">
                    Employee Email:
                    <input type="email" name="employee_email" id="email-2" placeholder="" required="required" />
                </label>
            </div>
             <div class="row">
                <label for="password-2">
                    Password:
                    <input type="password" name="employee_password" id="password-2" placeholder="" required="required" />
                </label>
            </div>
             <div class="row">
                <label for="repassword-2">
                    re-type Password:
                    <input type="password" name="employee_password1" id="repassword-2" placeholder="" required="required" />
                </label>
            </div>
           <div class="row">
             <button type="submit" name="submit">Sign Up</button>
           </div>
        </form>
    </div>
</div>
<!--end of signup form popup-->

<div class="landing-hero">
	<img src="images/logo1.png" alt="Logo">
	<div class="row landing-hero-text">
		<h2>MOST COMPLETED</h2>
		<h2 class="text-yellow">FILM REVIEW  &middot;  MOVIE DATABASE</h2>
		<h2>HTML TEMPLATE</h2>
	</div>
	<a class="loginLink" href="#">LOG In</a>
	<a class="btn signupLink" href="#">Sign Up</a>

</div>
<div class="landing-version">
	<div class="container">
		<div class="col-md-6">
			<img src="images/uploads/landing-dark-version.png" alt="Dark Version">
			<h2>DARK VERSION</h2>
			<a href="index-2.php" target="blank_" class="redbtn">SEE DEMO</a>
		</div>
		<div class="col-md-6">
			<img src="images/uploads/landing-light-version.png" alt="Light Version">
			<h2>LIGHT VERSION</h2>
			<a href="index_light.php" target="blank_" class="redbtn">SEE DEMO</a>
		</div>
	</div>
</div>
<!-- footer v3 section-->
<div class="ft-copyright-landing">
	<p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
</div>
<!-- end of footer v3 section-->

<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script src="js/plugins2.js"></script>
<script src="js/custom.js"></script>
</body>

<!-- landing14:38-->
</html>