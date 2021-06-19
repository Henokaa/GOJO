<?php include "includes/functions.php"; ?>
<?php 
    if(isset($_GET['logout'])){
        unset($_SESSION['refreshed']);
        unset($_SESSION['login']);
        unset($_SESSION['name']);
        unset($_SESSION['email']);
    }
?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="rent,house,apartment">
    <title>Gojo house rent</title>
    <link rel="stylesheet" href="css/main.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Texturina&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="libs/animate/animate.css" />
    <script src="libs/jquery/jquery.min.js"></script>
</head>
<body>
    <div class="overlay"></div>
          <div class="menu" id="menu_header">
          <nav>
             <div class='brand'><strong>GOJO</strong>.com</div>
              <ul class='header-menu'>
                  <li><a class="header-link" href="#menu_header">Home</a></li>
                  <li><a class="header-link" href="#about_gojo">About Us</a></li>
                  <li><a class="header-link" href="#register_login">Register/Login</a></li>
                  <li><a class="header-link" href="#contact_gojo">Contact Us</a></li>
              </ul>
              <div class="burger_icon"></div>
          </nav>
          </div>
          <?php
            if(isset($_SESSION['showMess'])){
                if($_SESSION['showMess']=='register'){
                    ?>
                     <div id="top-message" style="z-index:100;position: fixed;top: 0;left:0;right:0;width:50%;background-color: rgb(39, 231, 39);text-align: center;margin:auto;color: #fff;font-weight: bolder;">
                        You have been Registered Successfully, You can login and Update or delete your Information anytime
                    </div>
                    <script>$('#top-message').delay(2000).fadeOut(2000)</script>
                    <?php
                    $_SESSION['showMess']=NULL;
                }
                elseif($_SESSION['showMess']=='delete'){
                    ?>
                     <div id="top-message" style="z-index:100;position: fixed;top: 0;left:0;right:0;width:50%;background-color: rgb(39, 231, 39);text-align: center;margin:auto;color: #fff;font-weight: bolder;">
                        Profile Successfully deleted but we hate to see you go 😢😢
                    </div>
                    <script>$('#top-message').delay(2000).fadeOut(2000);</script>
                    <?php
                    $_SESSION['showMess']=NULL;
                }
                elseif($_SESSION['showMess']=='suggestion'){
                     ?>
                     <div id="top-message" style="z-index:100;position: fixed;top: 0;left:0;right:0;width:50%;background-color: rgb(39, 231, 39);text-align: center;margin:auto;color: #fff;font-weight: bolder;">
                        Thank you for you feedback 👍👍
                    </div>
                    <script>$('#top-message').delay(2000).fadeOut(3000)</script>
                    <?php
                    $_SESSION['showMess']=NULL;
                }
            }
        ?>