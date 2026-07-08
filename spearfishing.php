<?php
session_start();
error_reporting(0);
include('travel/includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Spearfishing</title>
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

    <header class="page-7">
      <div class="container">
        <div class="navbar navbar_ clearfix">
          <div class="navbar-inner">
            <div class="clearfix">
              <h1 class="brand"><a href="index.php"><img src="img/logo.png" alt=""
                    style="width: 203px; height: auto;"></a><span>find the
                  treasures of the underwater world</span></h1>
        </div>
            <?php
              $currentPage = 'spearfishing'; // Define this variable according to the current page
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
                        <h2>Explore the Thrill of Spearfishing</h2>
                        <div class="img-indent">
                            <figure class="img-polaroid"><img src="img/2.jpg" alt=""></figure>
                            <strong class="dis-block bot">Discover the Underwater World Through Spearfishing</strong>
                            <p>At Thalatta, we offer an exhilarating spearfishing experience that allows you to connect with the underwater world in a unique way. Spearfishing combines the excitement of hunting with the serenity of underwater exploration.</p>

                            <p>Our expert guides will lead you to prime spearfishing locations in Halkidiki, known for their diverse marine life. Whether you are a seasoned spearfisher or a beginner, our tailored experiences ensure an unforgettable adventure.</p>

                            <p>What Sets Our Spearfishing Experience Apart?</p>

                            <ul>
                                <li><strong>Expert Guides:</strong> Our experienced guides bring a wealth of knowledge and a passion for the sea, ensuring safe, educational, and enjoyable experiences for all adventurers.</li>
                                <li><strong>Prime Locations:</strong> Explore the rich marine life of Halkidiki by spearfishing in carefully selected locations known for their abundance of fish species. Our guides will lead you to the best spots for an immersive experience.</li>
                                <li><strong>Tailored for All Levels:</strong> Whether you're a beginner or an experienced spearfisher, our experiences are designed to cater to diverse skill levels. From introductory sessions to advanced spearfishing adventures, there's something for everyone.</li>
                                <li><strong>Emphasis on Safety:</strong> Your safety is our priority. We provide thorough safety briefings, equipment, and guidance to ensure a secure spearfishing experience for you and your fellow adventurers.</li>
                                <li><strong>Environmental Respect:</strong> We are committed to responsible spearfishing practices. Our experiences promote ethical fishing, respecting marine ecosystems, and contributing to the conservation of underwater environments.</li>
                                <li><strong>Unique Marine Encounters:</strong> Dive into an underwater world filled with diverse marine life. Encounter colorful fish, mesmerizing corals, and other fascinating creatures during your spearfishing expedition.</li>
                                <li><strong>Photography Opportunities:</strong> Capture the beauty of your spearfishing adventure with our underwater photography options. Document your encounters and share your unforgettable moments with friends and family.</li>
                                <li><strong>Customized Gear:</strong> We provide high-quality, specialized spearfishing gear tailored to your needs. Experience the latest equipment and technology to enhance your spearfishing adventure.</li>
                                <li><strong>Exclusive Dive Sites:</strong> Explore hidden gems and exclusive dive sites that are carefully selected to provide a unique and memorable spearfishing experience. Discover underwater landscapes that few have seen before.</li>
                                <li><strong>Customized Packages:</strong> We offer customized spearfishing packages to cater to individual preferences and group requirements. Whether you seek a solo adventure or a group expedition, our packages are tailored to meet your expectations.</li>
                                <li><strong>Interactive Learning:</strong> Enhance your spearfishing skills through interactive learning sessions. Our guides provide insights into marine life behavior, spearfishing techniques, and the ecological importance of responsible underwater practices.</li>
                                <li><strong>Community Engagement:</strong> Join our community of passionate spearfishers. Connect with like-minded individuals, share experiences, and participate in events that promote marine conservation and responsible spearfishing practices.</li>
                            </ul>

                            <p>Join us for an exciting spearfishing adventure in Halkidiki, where every dive brings you closer to the fascinating marine life of the region.</p>
                        </div>
                    </div>
                </article>
                <article class="span4">
                    <div class="img-indent">
                        <h2>Our Mission in Marine Conservation</h2>
                        <ul class="list-history">
                            <li>Our mission extends beyond providing thrilling sea adventures. At Thalatta, we are dedicated to fostering a deep respect for the marine environment and contributing to its preservation. Through responsible practices and guided experiences, we aim to connect people with the breathtaking natural beauty of Halkidiki's waters while ensuring the sustainability of its ecosystem for generations to come.</li>
                            <li>Our commitment to marine conservation includes:</li>
                            <ul>
                                <li>Promoting Responsible Fishing: We advocate and practice responsible fishing methods to minimize the impact on marine life and maintain a healthy balance in the ecosystem.</li>
                                <li>Eco-Friendly Tours: Our sea adventures prioritize eco-friendly practices, from waste reduction to using sustainable materials, to minimize our ecological footprint.</li>
                                <li>Environmental Awareness: We actively engage in raising awareness about marine conservation among our visitors, fostering a sense of responsibility towards the environment.</li>
                            </ul>
                            <li>When you choose Sea Adventures Halkidiki for spearfishing, you're not just embarking on an adventure; you're joining a community passionate about preserving the beauty of our oceans while creating lasting memories for our visitors.</li>
                        </ul>
                    </div>
                </article>
                <article class="span4">
                    <div class="img-indent">
                        <h2>What Sets Us Apart</h2>
                        <ul class="list-img">
                            <li><img src="img/img-1.png" alt="">
                                <div>
                                    <p><strong>Expert Guidance:</strong></p>
                                    <p>Our experienced guides bring a wealth of knowledge and a passion for the sea, ensuring safe, educational, and enjoyable experiences for all adventurers.</p>
                                </div>
                            </li>
                            <!-- Add more points highlighting what sets your spearfishing experience apart -->
                            <li><img src="img/img-2.png" alt="">
                                <div>
                                    <p><strong>Exclusive Dive Sites:</strong></p>
                                    <p>Explore hidden gems and exclusive dive sites that are carefully selected to provide a unique and memorable spearfishing experience. Discover underwater landscapes that few have seen before.</p>
                                </div>
                            </li>
                            <li><img src="img/img-3.png" alt="">
                                <div>
                                    <p><strong>Customized Packages:</strong></p>
                                    <p>We offer customized spearfishing packages to cater to individual preferences and group requirements. Whether you seek a solo adventure or a group expedition, our packages are tailored to meet your expectations.</p>
                                </div>
                            </li>
                            <li><img src="img/img-4.png" alt="">
                                <div>
                                    <p><strong>Interactive Learning:</strong></p>
                                    <p>Enhance your spearfishing skills through interactive learning sessions. Our guides provide insights into marine life behavior, spearfishing techniques, and the ecological importance of responsible underwater practices.</p>
                                </div>
                            </li>
                            <li><img src="img/img-5.png" alt="">
                                <div>
                                    <p><strong>Community Engagement:</strong></p>
                                    <p>Join our community of passionate spearfishers. Connect with like-minded individuals, share experiences, and participate in events that promote marine conservation and responsible spearfishing practices.</p>
                                </div>
                            </li>
                            <!-- Add more points as needed -->
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
<?php include 'PHPMailer/src/setup.php';?>
<!-- //signin -->


    <script type="text/javascript" src="js/bootstrap.js"></script>
  </body>
</html>
