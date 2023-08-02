<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->
      <meta name="author" content="https://www.grandmuonline.com/"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <meta name="keywords" content="keywords"/>
      <meta name="description" content="description"/>
      <meta property="og:title" content="title"/>
      <meta property="og:image" content="./images/cms_logo.png"/>
      <meta property="og:url" content=""/>
      <meta property="og:description" content="description"/>
      <meta property="og:type" content="website">
      <title>Grand MU Online - Season 18</title>
      <link rel="icon" type="image/x-icon" href="./images/favicon.ico?v=2"  />
      <link rel="stylesheet" href="./css/bootstrap.min.css" type="text/css"/>
      <link href='https://fonts.googleapis.com/css?family=Philosopher' rel='stylesheet'>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&amp;display=swap">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Teko:300,400,500,600,700&amp;display=swap">
      <link rel="stylesheet" href="./fonts/ionicons.min.css">
      <link rel="stylesheet" href="./fonts/simple-line-icons.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
      <link rel="stylesheet" href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
      <link href="./css/style.css" rel="stylesheet">
      <link href="./css/dmncms.css" rel="stylesheet">
      <link href="./assets/default_assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <script src="./js/jquery-3.6.0.min.js"></script>
      <script src="./js/jquery-ui.min.js"></script>
   </head>
   <body>
      <div id="nav1" class="nav1">
         <img src="./images/webzen.png">
         <div class="dropdown float-right" style="padding-top: 2px;height: 100%;">
            <?php 
               if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
               ?>
            <a class="btn btn-primary user-button" aria-expanded="false" data-toggle="dropdown" role="button" id="normalbutton">
            <img src="./images/user-icon.png" style="width: 17px;padding-top: 0px;margin-top: -3px;">&nbsp; &nbsp;<?php echo $_SESSION["username"]?>&nbsp; &nbsp; &nbsp; &nbsp;<i class="icon-arrow-down" style="font-size: 10px;"></i>
            </a>
            <div class="dropdown-menu user-dropdown">
               <div class="dropdown-item user-dropdown-item">
                  <a href="./account.php" class="btn btn-primary" role="button" id="normalbutton2" style="width: 100%;margin-top: 0px;background: #2D3338;font-family: Philosopher, sans-serif;border-style: none;height: 50px;border-radius: 2px;padding-top: 11px;">Account Panel</a>
               </div>
               <div class="dropdown-item user-dropdown-item">
                  <a href="./contact.php" class="btn btn-primary" role="button" id="normalbutton2" style="width: 100%;margin-top: 0px;font-family: Philosopher, sans-serif;background: rgba(166,37,29,0);border: 1px solid #2D3338 !important;color: #4C555E;height: 50px;padding-top: 11px;border-radius: 2px;"><b>Customer Support</b></a>
               </div>
               <div class="dropdown-item user-dropdown-item">
                  <a href="./logout.php" class="btn btn-primary" role="button" id="normalbutton2" style="width: 100%;margin-top: 0px;font-family: Philosopher, sans-serif;background: rgba(166,37,29,0);border: 1px solid #2D3338 !important;color: #4C555E;height: 50px;padding-top: 11px;border-radius: 2px;"><b>Logout</b></a>
               </div>
            </div>
            <?php } else {
               ?>
            <a class="btn btn-primary user-button" aria-expanded="false" data-toggle="dropdown" role="button" id="normalbutton">
            <img src="./images/user-icon.png" style="width: 17px;padding-top: 0px;margin-top: -3px;">&nbsp; &nbsp;My Account&nbsp; &nbsp;<i class="icon-arrow-down" style="font-size: 10px;"></i>
            </a>
            <div class="dropdown-menu user-dropdown">
               <div class="dropdown-item user-dropdown-item">
                  <a href="./login.php" class="btn btn-primary" role="button" id="normalbutton2" style="width: 100%;margin-top: 0px;background: #2D3338;font-family: Philosopher, sans-serif;border-style: none;height: 50px;border-radius: 2px;padding-top: 11px;">Login</a>
               </div>
               <div class="dropdown-item user-dropdown-item">
                  <a href="./register.php" class="btn btn-primary" role="button" id="normalbutton2" style="width: 100%;margin-top: 0px;font-family: Philosopher, sans-serif;background: rgba(166,37,29,0);border: 1px solid #2D3338 !important;color: #4C555E;height: 50px;padding-top: 11px;border-radius: 2px;"><b>Create Account</b></a>
               </div>
            </div>
            <?php }
               ?>
         </div>
      </div>
      <nav class="navbar navbar-dark navbar-expand-xl sticky-top" style="background: rgba(0,0,0,0.85);padding-left: 14px;padding-bottom: 12px;padding-right: 0px;padding-top: 14px;margin-right: 0px;height: 86px;">
         <div class="container-fluid">
            <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-2" style="padding-top: 14px;padding-bottom: 14px;border-radius: 9px;padding-right: 17px;padding-left: 17px;"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2" style="width: 100%;margin: 0px;margin-right: 0px;margin-left: 0px;">
               <ul class="navbar-nav" style="width: 100%;">
                  <li class="nav-item" style="margin-right: 55px;"><a href="./"><img src="./images/L-icon.png" style="margin-top: 10px;"></a></li>
                  <li class="nav-item"><a class="nav-link" href="./" style="font-family: Philosopher, sans-serif;font-size: 24px;width: 100%;height: 100%;margin-right: 55px;">Home</a></li>
                  <li class="nav-item"><a class="nav-link" href="./downloads.php" style="font-family: Philosopher, sans-serif;font-size: 24px;width: 100%;height: 100%;margin-right: 55px;">Downloads</a></li>
                  <li class="nav-item"><a class="nav-link" href="./register.php" style="font-family: Philosopher, sans-serif;font-size: 24px;width: 100%;height: 100%;margin-right: 55px;">Register</a></li>
                  <li class="nav-item"><a class="nav-link" href="./highscore.php" style="font-family: Philosopher, sans-serif;font-size: 24px;width: 100%;height: 100%;margin-right: 55px;">Highscores</a></li>
                  <li class="nav-item"><a class="nav-link" href="./guides.php" style="font-family: Philosopher, sans-serif;font-size: 24px;width: 100%;height: 100%;margin-right: 55px;">Guides</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://discord.gg/xapEJwvEGu" target="_blank" style="font-family: Philosopher, sans-serif;font-size: 24px;width: 100%;height: 100%;margin-right: 55px;">Discord</a></li>
               </ul>
            </div>
            <ul class="navbar-nav" style="margin-right: 14px;">
               <li class="nav-item text-center d-flex flex-grow-1" style="width: 100%;height: 100%;margin-right: 0px;margin-left: 0px;">
                  <div style="width: 90px;padding-top: 16px;"></div>
                  <div style="width: 60px;height: 100%;margin-right: 20px;">
                     <a href="./downloads.php" class="btn" role="button" id="playbutton" style="border-radius: 9px;border: 1px solid rgba(255,255,255,0.1) ;color: rgba(255,255,255,.5);font-family: Philosopher, sans-serif;"><img src="./images/R-icon.png" style="margin-top: 5px;">Download</a>
                  </div>
               </li>
            </ul>
         </div>
      </nav>