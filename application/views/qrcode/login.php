<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <title>Login</title>

  <!-- Favicons-->
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <!-- <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png"> -->
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  
  <link href="<?= base_url(); ?>assets/login/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?= base_url(); ?>assets/login/css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="<?= base_url(); ?>assets/login/css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?= base_url(); ?>assets/login/css/layouts/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="<?= base_url(); ?>assets/login/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  
</head>

<body class="gray" background="<?= base_url(); ?>assets/img/bakgok.png" style="background-position: center; background-repeat: no-repeat; ">
  <!-- <body class="cyan"> -->

  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->
<h1 style="position: relative;  padding-top: 70px; margin-left: -150px;"


> ABSENSI KULIAH UMUM & PKKMB IKMI 2019 </h1>


  <div id="login-page" class="row">
    <div class="col s16 z-depth-4 card-panel">
      <form role="form" action="<?php echo site_url().'/login/auth'?>" method="post" autocomplete="on" class="login-form" id="form">
        <div class="row">
          <div class="input-field col s12 center">
            <p class="center login-form-text">LOGIN KU & PKKMB 2019</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input name="username" id="username" type="text">
            <label for="username" class="center-align">Username</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input name="password" id="password" type="password">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">
			<a href="javascript:void(0);" onclick="document.getElementById('form').submit();" class="btn waves-effect waves-light col s12">Login</a>
          </div>
		  		<div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="<?php echo site_url().'login/daftar'?>">Register Now!</a></p>
          </div>         
        </div>
        </div>


      </form>
    </div>
  </div>



  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
  <script type="text/javascript" src="<?= base_url(); ?>assets/login/js/plugins/jquery-1.11.2.min.js"></script>
  <!--materialize js-->
  <script type="text/javascript" src="<?= base_url(); ?>assets/login/js/materialize.min.js"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="<?= base_url(); ?>assets/login/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

      <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?= base_url(); ?>assets/login/js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="<?= base_url(); ?>assets/login/js/custom-script.js"></script>

</body>
</html>