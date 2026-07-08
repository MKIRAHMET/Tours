<?php
session_start();
error_reporting(0);
include('includes/config.php');
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

    <!--==============================header=================================-->
    <body>
  <?php include('includes/header.php');?>
  <div class="container" style="display: flex; justify-content: flex-end; align-items: center; color: white; padding: 7px;">
    <div class="div-telephone" style="display: flex; align-items: center;">
        <img src="img/viber.png" alt="Viber Icon" width="40vw" height="auto" style="margin-right: 2vw;">
        <img src="img/tel-img.png" alt="Telephone Icon" style="margin-right: 2vw;">
        <span style="color: white; font-size: 3vw;">+30 694 0214 738</span>
    </div>
</div>

    <!--==============================header=================================-->
    <header class="page-1">
    <div class="container">

      <div class="navbar navbar_ clearfix">
 <div class="navbar-inner">
  <div class="clearfix">

  <h1 class="brand">
    <a href="index.php"><img src="img/logo.png" alt="" style="width: 203px; height: auto;"></a><span>find the treasures of the underwater world</span>
  </h1>

    </div>                   </div> 
    <?php
  $currentPage = 'home'; // Define this variable according to the current page
  include('menu.php');
  ?>  

              
              </div>
            </div>
          </div>
        </div>
      <div class="slider">
        <div class="camera_wrap">
          <div data-src="img/1.jpg">
            <div class="camera-caption  fadeIn">
              <div>
                <div> EXPLORE  ALL THE BEAUTY  <br>
                  <span>OF HALKIDIKI'S SEAS</span> </div>
              </div>
            </div>
          </div>
          <div data-src="img/2.jpg">
            <div class="camera-caption fadeIn">
              <div>
                <div> See the underwater <br>
                  <span>world with your own eyes</span> </div>
              </div>
            </div>
          </div>
          <div data-src="img/3.jpg">
            <div class="camera-caption  fadeIn">
              <div>
                <div> FIND THE TREASURES <br>
                  <span>OF THE GREEK WATERS</span> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div id="content">
      <div class="container">
        <div class="row box">
          <article class="span3">
            <div class="block maxheight"> <span>Kayak</span> <em><span>EXPLORATION</span>
              </em> <em><span></span></em> <a href="kayak.php">Read More</a>
            </div>
          </article>
          <article class="span3">
          <div class="block maxheight"><span style="font-size: 30px;">Spearfishing</span> <em><span>Expeditions</span></em>
              <a href="spearfishing.php">Read More</a> </div>
          </article>
          <article class="span3">
            <div class="block maxheight"> <span>Fishing</span> <em><span>Escapades</span>
              </em> <a href="fishing.php">Read More</a> </div>
          </article>
          <article class="span3">
            <div class="block maxheight"> <span>Contact</span> <em><span>Thalatta</span>
              </em> <a href="contact.php">Click Here</a> </div>
          </article>
        </div>
        <div class="row">
          <article class="span6">
            <h2 class="colorh2 h2indent"><em> <em>Welcome to Thalatta Sea
                  Adventures in Halkidiki</em></em><span></span></h2>
            <div class="block-indent"> <a href="#" class="link-img"><img src="img/page-1-img.jpg"
                  alt=""></a>
              <div class="extra-wrap">
                <div class="markdown prose w-full break-words dark:prose-invert light">
                </div>
                <a href="#" class="link">Discover Thrilling Sea Experiences in
                  Greece</a> </div>
              <p> Are you ready to immerse yourself in the crystal-clear waters
                of Halkidiki and explore a world of thrilling sea adventures?
                Our website is your gateway to an unforgettable aquatic journey
                filled with kayak excursions, spearfishing expeditions, and
                thrilling fishing escapades along the mesmerizing coastlines of
                Greece's Halkidiki region.</p>
              <p></p>
            </div>
          </article>
          <div class="box-1">
            <article class="span3">
              <h2 class="h2indent">Explore Our Activities</h2>
              <ul class="list">
  <li>
    <a href="kayak.php" style="color: white;">
      <em>Kayak Exploration</em>: Glide through azure waters, discover hidden coves, and witness stunning coastal vistas on our guided kayak tours. Whether you're a beginner or an experienced paddler, there's an adventure waiting for you.
    </a>
  </li>
  <li>
    <a href="spearfishing.php" style="color: white;">
      <em>Spearfishing Expeditions</em>: Dive into the depths and experience the thrill of spearfishing. Our expert guides will take you to prime spots where you can hone your skills and catch your dinner in an eco-friendly, sustainable way.
    </a>
  </li>
  <li>
    <a href="fishing.php" style="color: white;">
      <em>Fishing Escapades</em>: Cast your line into the Mediterranean and reel in unforgettable moments. From shore fishing to deep-sea excursions, Halkidiki offers a paradise for fishing enthusiasts of all levels.
    </a>
  </li>
</ul>

            </article>
            <article class="span3">
              <h2 class="h2indent">Why Choose Halkidiki?</h2>
              <div class="block-img"> <img src="img/halkidiki.jpg" alt="">
                <ul class="list-1">
                  <li style="color: white;">Nestled in Greece's northern Aegean Sea,
                      Halkidiki boasts breathtaking landscapes, pristine waters,
                      and a rich marine ecosystem. Thalatta Sea Activities is your ultimate
                      guide to making the most of your visit, ensuring you have
                      a safe, thrilling, and memorable experience.</li>
                </ul>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>
    </div>
    <aside>
  <div class="container">
    <div class="row box-2">
      <article class="span9">
        <h2 class="h2indent-2">Our updates:</h2>
        <div class="list_carousel responsive">
          <div class="div-control"> <a href="#" class="prev"></a> <a href="#" class="next"></a> </div>
          <ul id="foo4">
            <?php
            include 'db.php'; // Include your database connection script

            // Fetch announcements from the database
            $sql = "SELECT * FROM announcements WHERE status = 'published'";
            $result = $conn->query($sql);

            // Check for errors in query execution
            if (!$result) {
              die("Error: " . $conn->error);
            }

            // Loop through the retrieved announcements and display them
            while ($row = $result->fetch_assoc()) {
              echo '<li>';
              echo '<time class="date"><strong><a href="' . $row['link'] . '">' . $row['title'] . '</a></strong></time>'; 
              echo '<time class="date" datetime="' . $row['publication_date'] . '">' . $row['publication_date'] . '<span></span></time>'; 
              echo '<p>' . $row['content'] . '</p>';
              echo '</li>';
            }

            // Close the database connection
            $conn->close();
            ?>
          </ul>
        </div>
      </article>
    </div>
  </div>
</aside>
    <strong>
    <?php include 'includes/footer1.php'; ?>
    <?php include 'PHPMailer/src/setup.php';?>
      <!-- signup -->
<?php include('includes/signup.php');?>
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>
<!-- //signin -->
      <script type="text/javascript" src="js/bootstrap.js"></script> </strong>
      <script>
  $(document).ready(function () {
    var currentIndex = 0; // Track the current index of announcements

    $('#prev2').click(function (e) {
      e.preventDefault();
      if (currentIndex > 0) {
        currentIndex--;
        // Adjust the display to show the previous announcement
        $('#foo4 li').eq(currentIndex).show();
        $('#foo4 li').eq(currentIndex + 1).hide();
      }
    });

    $('#next2').click(function (e) {
      e.preventDefault();
      var totalAnnouncements = $('#foo4 li').length;
      if (currentIndex < totalAnnouncements - 1) {
        currentIndex++;
        // Adjust the display to show the next announcement
        $('#foo4 li').eq(currentIndex).show();
        $('#foo4 li').eq(currentIndex - 1).hide();
      }
    });
  });
</script>
    </body>
</html>
