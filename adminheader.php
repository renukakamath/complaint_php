<?php include 'connection.php';
extract($_GET);
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>admin</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto" style="font-size: 10px;color: #18d26e">public complaint system</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active">
            <a href="adminhome.php">Home</a>
         </li>
    <!--       <li>
            <a href="publicregister.php">register</a>
         </li>
          <li>
            <a href="login.php">login</a>
         </li> -->
     <!--      <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li> -->
          <li class="menu-has-children"><a href="">message</a>
            <ul>
              <li><a href="adminmessagetodepartment.php">to department</a></li>
              <li><a href="adminmessagetopublic.php">to public</a></li>
            <!--   <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li> -->
            </ul>
          </li>
          <li class="menu-has-children"><a href="">View</a>
            <ul>
              <li><a href="adminviewpublic.php">public</a></li>
              <li><a href="adminviewreview.php">Review</a></li>
              <li><a href="adminviewunsolvedcomplaint.php">Unsolved complaints</a></li>
              <!-- <li><a href="#">Drop Down 5</a></li> -->
            </ul>
          </li>
            <li class="menu-has-children"><a href="">manage</a>
            <ul>
              <li><a href="adminmanagedepartment.php">department</a></li>
              <li><a href="adminmanageplace.php">place</a></li>
              <li><a href="adminmanagerule.php">Rules & Regulations</a></li>
              <!-- <li><a href="#">Drop Down 5</a></li> -->
            </ul>
          </li>
          <li><a href="login.php">logout</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->







