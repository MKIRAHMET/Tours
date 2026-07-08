<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>THALATTA | Confirmation</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <meta name="description" content="Thalatta kayak is sea adventures club in Halkidiki">
    <meta name="keywords" content="thalatta, kayak, spearfishing, fishing, halkidiki, greece, sea, adventures">
    <meta name="author" content="Thalatta">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">

    <link rel="stylesheet" href="css/camera.css" type="text/css" media="screen">
    <link rel="stylesheet" href="travel/css/header.css" type="text/css" media="screen">
    <link rel="stylesheet" href="travel/css/style.css" type="text/css" media="screen">

    <link href="travel/css/font-awesome.css" rel="stylesheet">
    <script src="travel/js/jquery-1.12.0.min.js"></script>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/superfish.js"></script>
    <script type="text/javascript" src="js/jquery.mobilemenu.js"></script>
    <script type="text/javascript" src="js/jquery.equalheights.js"></script>
    <link rel="stylesheet" href="css1/header.css" type="text/css" media="screen">
<link href="css1/font-awesome.css" rel="stylesheet">    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!--//end-animate-->
</head>
<?php include('includes/header.php');?>
<div class="container" style="display: flex; justify-content: flex-end; align-items: center; color: white; padding: 20px;">
    <div class="div-telephone" style="display: flex; align-items: center;">
        <img src="img/viber.png" alt="Viber Icon" width="70" height="auto" style="margin-right: 5px;">
        <img src="img/tel-img.png" alt="Telephone Icon" style="margin-right: 5px;">
        <span style="color: white;">+30 694 0214 738</span>    </div>
</div>

<header class="page-4">
      <div class="container">
        <div class="navbar navbar_ clearfix">
          <div class="navbar-inner">
            <div class="clearfix">
              <h1 class="brand"><a href="index.php"><img src="img/logo.png" alt=""
                    style="width: 203px; height: 123px;"></a><span>find the
                  treasures of the underwater world</span></h1>
        </div>
          
              <?php
              $currentPage = 'profile'; // Define this variable according to the current page
              include('menu.php');
              ?>  
             <div class="nav-collapse nav-collapse_ collapse"> 
              
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div id="content">
      <div class="container">
    <!--- /banner-1 ---->
    <!--- contact ---->
    <div class="contact">
        <div class="container">
            <h3>Confirmation</h3>
            <div class="col-md-10 contact-left">
                <div class="con-top animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp;">
                    <h4><?php echo htmlentities($_SESSION['msg']);?></h4>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <?php include 'includes/footer1.php'; ?>
          <!-- signup -->
          <?php include('includes/signup.php');?>
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>
<?php include 'PHPMailer/src/setup.php';?>
<!-- //signin -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
  </body>
</html>
