<?php
session_start();
require_once ('include/mysql_connect_inc.php');
?>
<!DOCTYPE html>
<!-- ======================================================================================
! PROJECT NAME: Login Page (Front End / Back End task 1)
! DATE CREATED: 17 / SEPT /2019
! CREATED BY: ADAMU FURA SULEIMAN
! DEVELOPED BY => adamufura98@gmail.com
! AN INTERN @Hotelsng
========================================================================================= -->
<html lang="en" dir="ltr" manifest="">
  <head>
    <!-- Meta data -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta http-equiv="content-type" content="text/html" />
    <meta name="author" content="Adamu Fura Suleiman" />
    <meta name="keywords" content="Hotelsng, Hotelsng internship, Hotelsng" />
    <meta name="description" content="Hotelsng internship" />
    <meta name="revised" content="Hotelsng internship, 17/09/2019" />
    <meta name="robots" content="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="user-scalable=yes" />
    <title>Hotelsng | HNG</title>
    <!-- external links for offline NOTE ==> comment this while online -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link
      rel="icon"
      type="icon/x-png"
      sizes="16*16 "
      href="./images/user-photo.png"
    />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="preconnect" href="font awesome" />
    <!-- online  links -->
    <!-- NOTE ==> comment out this while online
    <link rel="stylesheet" type="text/css" href="css link here">
    <link rel="preconnect" href="font awesome">
    <link rel="stylesheet" type="text/css" href="bootstrap css link here"> -->

    <!-- Phones Header color Metadata -->
    <!-- Android Chrome, Opera and FIreFox -->
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="theme-color" content="#27d64e" />
    <!-- IOS Apple Chrome, Opera and FIreFox -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content=" #27d64e" />
    <!-- windows phone -->
    <meta name="msapplication-navbutton-color" content="#27d64e" />
    <!-- Meta Info for Open Graph => Facebook> -->
    <!-- Meta Info for Twitter Card View -->
    <!-- Meta Info for Schema.org => Google.com -->
    <meta name="format-detection" content="telephone=no" />
  </head>
  <body>
    <?php
      if (isset($_SESSION['u_username'])) {
          echo '<div class="container" id="form-holder">
      <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
          <div class="panel panel-default">
            <div class="panel-body">
              <h3>Login Successful</h3>
              <form
                class="biodata-form"
                action="include/unset.php"
                method="post"
                enctype="application/x-www-form-urlencoded"
                autocomplete="off"
                accept-charset="utf-8"
              >
              <div class="col-lg-12 ">
                  <div class="form-group">
                    <input
                      type="submit"
                      name="submit"
                      value="Log Out"
                      class="btn btn-block btn-success"
                    />
                  </div>
                </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>';
      }
      else {
            echo '<div class="container" id="form-holder">
      <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
          <div class="panel panel-default">
            <div class="panel-heading">
              <img src="images/user-photo.png" alt="" />
              <h1>Login Here</h1>
            </div>
            <div class="panel-body">
              <form
                class="biodata-form"
                action="include/login_inc.php"
                method="post"
                enctype="application/x-www-form-urlencoded"
                autocomplete="off"
                accept-charset="utf-8"
              >
                <div class="col-lg-12">
                  <div class="form-group">';
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

                   echo '<label class="">User Name</label>
                    <div class="input-group">  
                     <input
                        type="text"
                        name="username"
                        inputmode="text"
                        value=""
                        class="form-control"
                        placeholder="Enter Username"
                        required
                      />
                      <span class="input-group-addon">
                        <span class="glyphicon glyphicon-user"></span>
                      </span>
                    </div>
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="">Password</label>
                    <div class="input-group">
                      <input
                        type="password"
                        name="password"
                        inputmode="text"
                        value=""
                        class="form-control"
                        placeholder="Enter Password"
                        required
                      />
                      <span class="input-group-addon">
                        <span class="glyphicon glyphicon-lock"></span>
                      </span>
                    </div>
                  </div>
                </div>

                <div class="col-lg-12 ">
                  <div class="form-group">
                    <input
                      type="submit"
                      name="submit"
                      value="Log In"
                      class="btn btn-block btn-success"
                    />
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>';
      }
     ?>
  </body>
</html>
