<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Fishing</title>
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
      <?php include('includes/header.php');?>
    </head>
  <body>
  <div class="container" style="display: flex; justify-content: flex-end; align-items: center; color: white; padding: 20px;">
    <div class="div-telephone" style="display: flex; align-items: center;">
        <img src="img/viber.png" alt="Viber Icon" width="70" height="auto" style="margin-right: 5px;">
        <img src="img/tel-img.png" alt="Telephone Icon" style="margin-right: 5px;">
        <span style="color: white;">+30 694 0214 738</span>    </div>
</div>

    <!--==============================header=================================-->
    <header class="page-6">
      <div class="container">
        <div class="navbar navbar_ clearfix">
          <div class="navbar-inner">
            <div class="clearfix">
              <h1 class="brand"><a href="index.php"><img src="img/logo.png" alt=""
                    style="width: 203px; height: auto;"></a><span>find the
                  treasures of the underwater world</span></h1>
           </div>
            <?php
              $currentPage = 'fishing'; // Define this variable according to the current page
              include('menu.php');
              ?>  
         </ul>
            <div class="nav-collapse nav-collapse_ collapse">
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
                        <h2>Discover the Art of Fishing in Halkidiki</h2>
                        <div class="img-indent">
                            <figure class="img-polaroid"><img src="img/3.jpg" alt=""></figure>
                            <strong class="dis-block bot">Embark on a Fishing Adventure with Thalatta</strong>
                            <p>Experience the thrill of fishing in the pristine waters of Halkidiki with Thalatta. Our fishing adventures are designed to provide a memorable and rewarding experience for anglers of all skill levels.</p>

                            <p>Why Choose Fishing in Halkidiki with Thalatta?</p>

                            <ul>
                                <li><strong>Abundance of Marine Life:</strong> Halkidiki is renowned for its rich marine biodiversity. Join us to fish in waters teeming with a variety of fish species, from local favorites to elusive game fish.</li>
                                <li><strong>Expert Fishing Guides:</strong> Our experienced fishing guides have extensive knowledge of the local waters. They will guide you to the best fishing spots, share tips and techniques, and ensure a successful fishing experience.</li>
                                <li><strong>Customizable Fishing Tours:</strong> Tailor your fishing adventure based on your preferences. Choose from half-day or full-day fishing tours, solo expeditions, or group trips to make the most of your time on the water.</li>
                                <li><strong>Top-Quality Fishing Gear:</strong> Fish with confidence using our top-notch fishing equipment. We provide high-quality rods, reels, bait, and tackle to enhance your chances of a successful and enjoyable fishing experience.</li>
                                <li><strong>Scenic Coastal Beauty:</strong> Enjoy breathtaking views of Halkidiki's coastline as you fish. Our fishing tours take you to picturesque locations, providing a perfect blend of angling excitement and natural beauty.</li>
                                <li><strong>Guidance for All Skill Levels:</strong> Whether you're a novice or an experienced angler, our guides cater to all skill levels. Receive personalized instruction and guidance to improve your fishing skills or learn the basics.</li>
                                <li><strong>Responsible Fishing Practices:</strong> We prioritize sustainable and responsible fishing. Our team promotes catch-and-release practices to preserve the marine ecosystem and maintain the balance of fish populations.</li>
                                <li><strong>Family-Friendly Fishing:</strong> Make fishing a family affair with our family-friendly fishing tours. Share the joy of fishing with your loved ones and create lasting memories on the water.</li>
                                <li><strong>Fishing Events and Competitions:</strong> Join our fishing events and competitions for added excitement. Test your angling skills, connect with fellow fishing enthusiasts, and compete for prizes.</li>
                            </ul>

                            <p>Join us for an unforgettable fishing experience in Halkidiki, where every cast brings you closer to the excitement of the sea.</p>
                        </div>
                    </div>
                </article>
                <article class="span4">
                    <div class="img-indent">
                        <h2>Our Commitment to Marine Conservation</h2>
                        <ul class="list-history">
                            <li>Our commitment extends beyond providing exciting sea adventures. At Thalatta, we are dedicated to fostering a deep respect for the marine environment and contributing to its preservation. Through responsible practices and guided experiences, we aim to connect people with the breathtaking natural beauty of Halkidiki's waters while ensuring the sustainability of its ecosystem for generations to come.</li>
                            <li>Our commitment to marine conservation includes:</li>
                            <ul>
                                <li>Promoting Responsible Fishing: We advocate and practice responsible fishing methods to minimize the impact on marine life and maintain a healthy balance in the ecosystem.</li>
                                <li>Eco-Friendly Tours: Our fishing adventures prioritize eco-friendly practices, from waste reduction to using sustainable materials, to minimize our ecological footprint.</li>
                                <li>Environmental Awareness: We actively engage in raising awareness about marine conservation among our visitors, fostering a sense of responsibility towards the environment.</li>
                            </ul>
                            <li>When you choose Sea Adventures Halkidiki for fishing, you're not just embarking on an adventure; you're joining a community passionate about preserving the beauty of our oceans while creating lasting memories for our visitors.</li>
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
                            <li><img src="img/img-2.png" alt="">
                                <div>
                                    <p><strong>Commitment to Sustainability:</strong></p>
                                    <p>We prioritize sustainable practices in all our activities, promoting responsible fishing, eco-friendly tours, and environmental awareness.</p>
                                </div>
                            </li>
                            <li><img src="img/img-3.png" alt="">
                                <div>
                                    <p><strong>Tailored Experiences:</strong></p>
                                    <p>Whether you're a beginner or a seasoned enthusiast, our range of activities is designed to cater to diverse skill levels, ensuring everyone can enjoy the magic of Halkidiki's seas.</p>
                                </div>
                            </li>
                            <li><img src="img/img-4.png" alt="">
                                <div>
                                    <div class="markdown prose w-full break-words dark:prose-invert light">
                                        <p><strong>Our Promise</strong></p>
                                    </div>
                                    <p>When you choose Sea Adventures Halkidiki, you're not just embarking on an adventure; you're joining a community passionate about preserving the beauty of our oceans while creating lasting memories for our visitors.</p>
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
<?php include 'PHPMailer/src/setup.php';?>
<!-- //signin -->
    </footer>
    <script type="text/javascript" src="js/bootstrap.js"></script>
  </body>
</html>
