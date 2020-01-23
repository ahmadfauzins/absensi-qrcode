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
  <title>Daftar Mentor</title>

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
<h1 style="position: relative;  padding-top: 70px; margin-left: 0px;"


> MENTOR KULIAH UMUM & PKKMB IKMI 2019 </h1>


  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form class="formValidate" id="formValidate" action="<?php echo site_url().'login/daftarsave'?>" 
method="post" enctype="multipart/form-data" autocomplete="on" validate="validate" class="col s12">
        <div class="row">
          <div class="input-field col s12  center">
            
            <p class="center">MENTOR KULIAH UMUM & PKKMB 2019</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <!-- <i class="mdi-social-person-outline prefix"></i> -->
            <input name="username" id="username" type="text"  data-error=".errorTxt1">
            <label for="username" class="center-align">Username</label>
      <div class="errorTxt1"></div>     
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <!-- <i class="mdi-social-person prefix"></i> -->
            <input name="name" id="name" type="text" data-error=".errorTxt2">
            <label for="name" class="center-align">Name</label>
      <div class="errorTxt2"></div>     
          </div>
        </div>
         <div class="row margin">
          <div class="input-field col s12">
            
            <Select name="gugus" id="gugus" type="text">
            <option value="Big Data">Big Data</option>
            <option value="Programmer">Programmer</option>
            <option value="Hacker">Hacker</option>
            <option value="Developer">Developer</option>
            <option value="Programmer">Designer</option>
            <option value="Data Science">Data Science</option>
            <option value="Animator">Animator</option>
            <option value="Robotics">Robotics</option>
            <option value="IoT Internet of Things">IoT Internet of Things</option>
            <option value="AI Artificial Intelligent">AI Artificial Intelligent</option>
            </select>
      
          </div>
        </div> 
        <div class="row margin">
          <div class="input-field col s12">
            <!-- <i class="mdi-action-lock-outline prefix"></i> -->
            <input name="password" id="password" type="password" data-error=".errorTxt3">
            <label for="password">Password</label>
      <div class="errorTxt3"></div>     
          </div>
        </div>

         <div class="row margin">
                  <div class="input-field col s12">

                  <input type="file" name="F1" id="F1" onchange="tampilkanPreview(this,'preview')" required />
                    <br>
                    <img id="preview" src="" alt="" height="200px" width="150px"/>
                  </div>
          </div> 
                  



        <div class="row">
          <div class="input-field col s12">
      <a href="javascript:void(0);" onclick="document.getElementById('formValidate').submit();" class="btn waves-effect waves-light col s12">Daftar</a>
          </div>
          <div class="input-field col s12">
            <p class="margin center medium-small sign-up">Already have an account? 
              <a href="<?php echo site_url().'login'?>">Login</a></p>
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