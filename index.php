<!DOCTYPE html>
<?php
session_start();
require_once ('include/mysql_connect_inc.php');
?>
<!-- ======================================================================================
! PROJECT NAME: Login Page (Front End / Back End task 1)
! DATE CREATED: 19 / SEPT /2019
! CREATED BY: ADAMU FURA SULEIMAN
! File Name: Index.html (Root File)
! DEVELOPED BY => adamufura98@gmail.com
! AN INTERN @Hotelsng
========================================================================================= -->

<html lang="en">
  <head>
    <title>Login | Sign Up</title>

    <!-- External Linking -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="shortcut icon" href="assets/images/user-photo.png" type="image/x-png"  sizes="16*16"/>
    <link rel="stylesheet" href="assets/icons/css/all.css" />

    <!-- Meta Tags -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta http-equiv="content-type" content="text/html" />
    <meta name="author" content="Adamu Fura Suleiman" />
    <meta name="keywords" content="Hotelsng, Hotelsng internship, Hotelsng" />
    <meta name="description" content="Hotelsng internship" />
    <meta name="revised" content="Hotelsng internship, 19/09/2019" />
    <meta name="robots" content="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="user-scalable=yes" />

    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="theme-color" content="#2196f3" />
    <!-- IOS Apple Chrome, Opera and FIreFox -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#2196f3" />
    <!-- windows phone -->
    <meta name="msapplication-navbutton-color" content="#2196f3" />
    <!-- Meta Info for Open Graph => Facebook> -->
    <!-- Meta Info for Twitter Card View -->
    <!-- Meta Info for Schema.org => Google.com -->
    <meta name="format-detection" content="telephone=no" />
  </head>
  <body>
    <header></header>

    <nav></nav>

    <main>
      <!-- Main Container Welcome -->

      <div class="container">
        <div class="container-welcome row" id="container_welcome_id">
          <h1 class="header-welcome">W<u>elco</u>me</h1>
          <p>
            We are the best in the universe, <br />
            There are multiple worlds where <br />
            we have super heros based on <br />
            logistics. THE REALITY IS THIS <br />
            LAGOS
          </p>
          <div class="weclome-btn-more">
            <button type="button" class="btn-more" onclick="mobile_log_in()">
              MORE »
            </button>
          </div>
        </div>

        <!-- SVG Circle -->

        <div class="container-circle">
          <svg width="100" height="100">
            <circle
              cx="50"
              cy="50"
              r="30"
              stroke="#ffffff"
              stroke-width="30px"
              fill="#2196f3"
            />
          </svg>
        </div>

        <?php
         if (isset($_SESSION['u_username'])) {
          echo '<!-- Log In Form Below -->
        <div class="container-login row" id="container_login_id">
          <form action="" method="post" class="container-form-login">
            <h1 class="header-sign-in">Si<u>gn I</u>n</h1>';
            
              if (isset($_GET['login'])) {
                switch ($_GET['login']) {
                 case 'empty':
                   echo "<p style='color: red'>Please fill the fields correctly.</p>";
                   break;
                 case 'notexist':
                   echo "<p style='color: red'>Username or Password is invalid.</p>";
                   break;
                 default:
                   echo "";
                   break;
               }
              }
            echo '<label for="label-username-login"></label>
            <input
              type="text"
              name=""
              id="label-username-login"
              placeholder="Enter Username"
              required
            />
            <label for="label-password-login"></label>
            <input
              type="password"
              name=""
              id="label-password-login"
              placeholder="Enter Password"
              required
            />
            <input
              type="checkbox"
              class="chk"
              name=""
              id="label-forgot-password-login"
            />
            <label for="label-forgot-password-login">Forgot Password...</label>
            <label for="label-btn-login"></label>
            <input type="submit" value="Login" class="login-btn" />
            <label for="label-login-to-sign-up">Don’t Have an account?</label>
            <a href="#" onclick="show_sign_up()" id="label-login-to-sign-up"
              >Sign Up now</a
            >
          </form>
        </div>'; }

        else {
          echo '<div class="container-profile row">
              <div class="container-profile-child">
                <h1 class="header-profile">P<u>rofile</u></h1>
                <label for="label-btn-profile"></label>
                <div class="profile-icon">
                  <i class="fas fa-user"></i>
                </div>
                <h2>LOGIN SUCCESSFULL!!!</h2>
              </div>
            </div>';
        }
        ?>

        <!-- Sign Up Form Below -->

        <div class="container-sign-up row" id="container_sign_up_id">
          <form action="" method="post" class="container-form-sign-up">
            <h1 class="header-sign-up">Si<u>gn U</u>p</h1>
            <label for="label-full-name-sign-up"></label>
            <input
              type="text"
              name=""
              id="label-full-name-sign-up"
              placeholder="Enter Full Name"
              required
            />
            <label for="label-username-sign-up"></label>
            <input
              type="text"
              name=""
              id="label-username-sign-up"
              placeholder="Enter Username"
              required
            />
            <label for="label-email-sign-up"></label>
            <input
              type="text"
              name=""
              id="label-email-sign-up"
              placeholder="Enter Email"
              required
            />
            <label for="label-password-sign-up"></label>
            <input
              type="password"
              name=""
              id="label-password-sign-up"
              placeholder="Enter Password"
              required
            />
            <label for="label-confirm-password-sign-up"></label>
            <input
              type="password"
              name=""
              id="label-confirm-password-sign-up"
              placeholder="Confirm Password"
              required
            />
            <input
              type="checkbox"
              class="chk"
              name=""
              id="label-agree-terms-login"
            />
            <label for="label-agree-terms-login"
              >I agree to the
              <a href="#" target="_blank" rel="noopener noreferrer"
                >Terms Of User</a
              ></label
            >
            <label for="label-btn-sign-up"></label>
            <input type="submit" value="Sign Up" class="login-btn" />
            <label for="label-link-to-sign-in">Already Have an account?</label>
            <a href="#" onclick="show_log_in()" id="label-link-to-sign-in"
              >Log In now</a
            >
          </form>
        </div>
      </div>
    </main>

    <footer></footer>
    <!-- Javascript Link -->
    <script src="js/main.js"></script>
  </body>
</html>