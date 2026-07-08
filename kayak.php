<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Kayak</title>
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

    <!--==============================header=================================-->
    <div class="container" style="display: flex; justify-content: flex-end; align-items: center; color: white; padding: 20px;">
    <div class="div-telephone" style="display: flex; align-items: center;">
        <img src="img/viber.png" alt="Viber Icon" width="70" height="auto" style="margin-right: 5px;">
        <img src="img/tel-img.png" alt="Telephone Icon" style="margin-right: 5px;">
        <span style="color: white;">+30 694 0214 738</span>    </div>
</div>

    <header class="page-3">
      <div class="container">
        <div class="navbar navbar_ clearfix">
          <div class="navbar-inner">
            <div class="clearfix">
              <h1 class="brand"><a href="index.php"><img src="img/logo.png" alt=""
                    style="width: 203px; height: auto;"></a><span>find the
                  treasures of the underwater world</span></h1>
         </div>
            <?php
              $currentPage = 'kayak'; // Define this variable according to the current page
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
                <!-- Article 1: Discover the Beauty of Kayaking in Halkidiki -->
                <article class="span4">
                    <div class="indent-r">
                        <h2>Discover the Beauty of Kayaking in Halkidiki</h2>
                        <div class="img-indent">
                            <figure class="img-polaroid"><img src="img/1.jpg" alt=""></figure>
                            <strong class="dis-block bot">Embark on an Unforgettable Kayaking Adventure</strong>
                            <p>Embark on an unforgettable kayaking adventure with Thalatta and explore the pristine coastal waters of Halkidiki. Kayaking offers a unique and immersive way to experience the natural beauty of this stunning region, combining the thrill of paddling with the serenity of coastal exploration.</p>

                            <p>Why Choose Kayaking in Halkidiki with Thalatta?</p>

                            <ul>
                                <li><strong>Scenic Coastal Beauty:</strong> Halkidiki boasts some of the most picturesque coastal landscapes in Greece. Kayak through crystal-clear waters, paddle along scenic cliffs, and discover hidden coves and beaches that are only accessible by sea.</li>
                                <li><strong>Expert Guided Tours:</strong> Our experienced guides provide insights into the local history, marine life, and unique geography during guided tours.</li>
                                <li><strong>Variety of Routes:</strong> Choose from different kayaking routes tailored to various skill levels.</li>
                                <li><strong>Tandem Kayaks for Family Fun:</strong> Enjoy the adventure with our tandem kayaks, perfect for families.</li>
                                <li><strong>Quality Kayaking Equipment:</strong> We provide top-notch equipment for safety and comfort.</li>
                                <li><strong>Environmental Conservation:</strong> Committed to preserving Halkidiki's natural beauty with eco-friendly practices.</li>
                                <li><strong>Breathtaking Sunset Tours:</strong> Experience the magic of sunset kayaking with our specialized tours.</li>
                                <!-- Add more points as needed -->
                            </ul>

                            <p>Join us for an immersive kayaking experience in Halkidiki, where every paddle stroke opens up new vistas, and every moment on the water brings you closer to the heart of this coastal paradise.</p>
                        </div>
                    </div>
                </article>

                <!-- Article 2: Experience the Charm of Kayaking Sightseeing -->
                <article class="span4">
                    <div class="img-indent">
                        <h2>Experience the Charm of Kayaking Sightseeing</h2>
                        <p>Immerse yourself in the charm of kayaking sightseeing with Thalatta and discover the hidden gems along the picturesque coastal waters of Halkidiki. Our kayaking sightseeing tours are designed for those seeking a leisurely exploration of the region's natural wonders.</p>

                        <p>What Makes Kayaking Sightseeing Special?</p>

                        <ul>
                            <li><strong>Relaxed Coastal Exploration:</strong> Glide through tranquil waters and enjoy the scenic beauty of Halkidiki without the rush.</li>
                            <li><strong>Nature and Wildlife Observation:</strong> Encounter diverse marine life and bird species during your sightseeing tour.</li>
                            <li><strong>Photographic Opportunities:</strong> Capture breathtaking moments as you paddle along the coast.</li>
                            <li><strong>Peaceful and Scenic Routes:</strong> Explore hidden coves, stunning cliffs, and peaceful routes.</li>
                            <li><strong>Guided Tours with Local Insights:</strong> Our experienced guides share local stories, history, and interesting facts during the tour.</li>
                            <li><strong>Flexible Duration:</strong> Choose from various tour durations based on your preferences.</li>
                            <li><strong>Sunset and Sunrise Tours:</strong> Witness the beauty of Halkidiki with our special sunset and sunrise kayaking tours.</li>
                            <!-- Add more points as needed -->
                        </ul>

                        <p>Join us for a delightful kayaking sightseeing adventure, where you can unwind, appreciate the beauty of Halkidiki, and create cherished memories along the way.</p>
                    </div>
                </article>

                <!-- Article 3: Our Commitment to Marine Conservation -->
                <article class="span4">
                    <div class="img-indent">
                        <h2>Our Commitment to Marine Conservation</h2>
                        <ul class="list-history">
                            <li>At Thalatta, our mission extends beyond providing thrilling sea adventures. We are dedicated to fostering a deep respect for the marine environment and contributing to its preservation. Through responsible practices and guided experiences, we aim to connect people with the breathtaking natural beauty of Halkidiki's waters while ensuring the sustainability of its ecosystem for generations to come.</li>
                            <li>Our commitment to marine conservation includes:</li>
                            <ul>
                                <li>Promoting Responsible Fishing: We advocate and practice responsible fishing methods to minimize the impact on marine life and maintain a healthy balance in the ecosystem.</li>
                                <li>Eco-Friendly Tours: Our sea adventures prioritize eco-friendly practices, from waste reduction to using sustainable materials, to minimize our ecological footprint.</li>
                                <li>Environmental Awareness: We actively engage in raising awareness about marine conservation among our visitors, fostering a sense of responsibility towards the environment.</li>
                                <li>Collaboration with Conservation Organizations: Thalatta collaborates with marine conservation organizations to actively contribute to larger conservation efforts.</li>
                                <li>Interactive Educational Programs: We offer interactive educational programs for visitors, highlighting the importance of marine conservation and sustainable practices.</li>
                                <!-- Add more points as needed -->
                            </ul>
                            <li>When you choose Sea Adventures Halkidiki, you're not just embarking on an adventure; you're joining a community passionate about preserving the beauty of our oceans while creating lasting memories for our visitors.</li>
                        </ul>
                    </div>
                </article>

                <!-- Add more articles or content as needed -->

            </div>
        </div>
    </div>

    <?php include 'includes/footer1.php'; ?>
    <?php include 'PHPMailer/src/setup.php';?>
          <!-- signup -->
          <?php include('includes/signup.php');?>
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>
<!-- //signin -->

    <script type="text/javascript" src="js/bootstrap.js"></script>
  </body>
</html>
