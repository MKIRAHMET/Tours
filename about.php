<?php
session_start();
error_reporting(0);
include('includes/config.php');
include 'PHPMailer/src/setup.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Home</title>
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
    <link rel="stylesheet" href="css/carousel.css" type="text/css" media="screen">
		<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/superfish.js"></script>
    <script type="text/javascript" src="js/jquery.mobilemenu.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/camera.js"></script>
    <script type="text/javascript" src="js/jquery.equalheights.js"></script>
    <!--[if (gt IE 9)|!(IE)]><!-->
      <script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>
    <!--<![endif]-->
    <script type="text/javascript" src="js/jquery.carouFredSel-6.1.0.js"></script>
    <script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>


    <link rel="stylesheet" href="css1/header.css" type="text/css" media="screen">
<link href="css1/font-awesome.css" rel="stylesheet">
    <script>
        $(document).ready(function(){
          jQuery('.camera_wrap').camera();
        });
    </script>
    <script type="text/javascript" language="javascript">
      $(window).load(function(){
      //  Responsive layout, resizing the items
      $('#foo4').carouFredSel({
      auto: false,
      responsive: true,
      width: '100%',    
      scroll: 1,
      prev: '#prev2',
      next: '#next2',
      pagination: false,
      mousewheel: true,
      items: {
      height: 'auto',
      width: '270',
      visible: {
      min: 1,
      max: 3
      }
      },
      swipe: {
        onMouse: true,
        onTouch: true
        }
      });
       jQuery(".maxheight").equalHeights();  
      });
    </script>
    <!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->

    <!--[if lt IE 8]>
    		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>     	<![endif]-->
    <!--[if lt IE 9]>
      <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>    <![endif]-->

    </head>
  <body>
  <?php include('includes/header.php');?>
  <div class="container" style="display: flex; justify-content: flex-end; align-items: center; color: white; padding: 20px;">
    <div class="div-telephone" style="display: flex; align-items: center;">
        <img src="img/viber.png" alt="Viber Icon" width="70" height="auto" style="margin-right: 5px;">
        <img src="img/tel-img.png" alt="Telephone Icon" style="margin-right: 5px;">
        <span style="color: white;">+30 694 0214 738</span>    </div>
</div>

    <!--==============================header=================================-->
    <header class="page-2">
      <div class="container">
        <div class="navbar navbar_ clearfix">
          <div class="navbar-inner">
            <div class="clearfix">
              <h1 class="brand"><a href="index.php"><img src="img/logo.png" alt=""
                    style="width: 203px; height: auto;"></a><span>find the
                  treasures of the underwater world</span></h1>
     </div>
          
              <?php
              $currentPage = 'about'; // Define this variable according to the current page
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
        <div class="row box-row">
          <article class="span4">
            <div class="indent-r">
              <h2>Who We Are</h2>
              <div class="img-indent">
                <figure class="img-polaroid"><img src="img/page-2-img.jpg" alt=""></figure>
                <strong class="dis-block bot">Embark on a Journey with Sea
                  Adventures Halkidiki </strong>
                <p>At Thalatta, we are passionate about unlocking the wonders of
                  the sea and providing unforgettable experiences along the
                  stunning coastlines of Greece's Halkidiki region. Our team
                  comprises avid sea enthusiasts and experts dedicated to
                  sharing the beauty of this marine paradise with visitors from
                  around the world. </p>
              </div>
            </div>
          </article>
          <article class="span4">
            <div class="img-indent">
              <h2>Our Mission</h2>
              <ul class="list-history">
                <li> Our mission is simple yet profound: to offer unparalleled
                  sea adventures while fostering a deep respect for the marine
                  environment. Through responsible practices and guided
                  experiences, we aim to connect people with the breathtaking
                  natural beauty of Halkidiki's waters while preserving its
                  ecosystem for generations to come. </li>
              </ul>
            </div>
          </article>
          <article class="span4">
            <div class="img-indent">
              <h2><strong>
                  <meta http-equiv="content-type" content="text/html; charset=utf-8">
                  <strong>What Sets Us Apart</strong></strong></h2>
              <ul class="list-img">
                <li> <img src="img/img-1.png" alt="">
                  <div>
                    <p>
                      <meta http-equiv="content-type" content="text/html; charset=utf-8">
                      <strong>Expert Guidance</strong>:</p>
                    <p>
                      <meta http-equiv="content-type" content="text/html; charset=utf-8">
                      Our experienced guides bring a wealth of knowledge and a
                      passion for the sea, ensuring safe, educational, and
                      enjoyable experiences for all adventurers.</p>
                  </div>
                </li>
                <li> <img src="img/img-2.png" alt="">
                  <div>
                    <p>
                      <meta http-equiv="content-type" content="text/html; charset=utf-8">
                      <strong>Commitment to Sustainability</strong>: </p>
                    <p>
                      <meta http-equiv="content-type" content="text/html; charset=utf-8">
                      We prioritize sustainable practices in all our activities,
                      promoting responsible fishing, eco-friendly tours, and
                      environmental awareness.</p>
                    <p></p>
                  </div>
                </li>
                <li> <img src="img/img-3.png" alt="">
                  <div>
                    <p>
                      <meta http-equiv="content-type" content="text/html; charset=utf-8">
                      <strong>Tailored Experiences</strong>: </p>
                    <p>
                      <meta http-equiv="content-type" content="text/html; charset=utf-8">
                      Whether you're a beginner or a seasoned enthusiast, our
                      range of activities is designed to cater to diverse skill
                      levels, ensuring everyone can enjoy the magic of
                      Halkidiki's seas.</p>
                    <p></p>
                  </div>
                </li>
                <li> <img src="img/img-4.png" alt="">
                  <div>
                    <div class="markdown prose w-full break-words dark:prose-invert light">
                      <meta http-equiv="content-type" content="text/html; charset=utf-8">
                      <p><strong>Our Promise</strong></p>
                    </div>
                    <p>
                      <meta http-equiv="content-type" content="text/html; charset=utf-8">
                      When you choose Sea Adventures Halkidiki, you're not just
                      embarking on an adventure; you're joining a community
                      passionate about preserving the beauty of our oceans while
                      creating lasting memories for our visitors.</p>
                    <p></p>
                  </div>
                </li>
              </ul>
            </div>
          </article>
        </div>
      </div>
    </div>
    
    <?php include 'includes/footer1.php'; ?>

          <!-- signup -->
<?php include('includes/signup.php');?>
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>
<!-- //signin -->

    <script type="text/javascript" src="js/bootstrap.js"></script>
  </body>
</html>
