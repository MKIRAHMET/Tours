<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>HALKIDIKI</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/carousel.css" type="text/css" media="screen">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/superfish.js"></script>
    <script type="text/javascript" src="js/jquery.mobilemenu.js"></script>
    <link rel="stylesheet" href="css1/header.css" type="text/css" media="screen">
<link href="css1/font-awesome.css" rel="stylesheet">

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

    <header class="page-5">
      <div class="container">
        <div class="navbar navbar_ clearfix">
          <div class="navbar-inner">
            <div class="clearfix">
              <h1 class="brand"><a href="index.php"><img src="img/logo.png" alt=""
                    style="width: 203px; height: 123px;"></a><span>find the
                  treasures of the underwater world</span></h1>
         </div>
            <?php
              $currentPage = 'halkidiki'; // Define this variable according to the current page
              include('menu.php');
              ?> 
            <div class="nav-collapse nav-collapse_ collapse">
           
            </div>
          </div>
        </div>
      </div>
    </header>
    <div id="content">
      <div class="container">
        <div class="row">
          <article class="span8">
            <h2><strong>
                <meta http-equiv="content-type" content="text/html; charset=utf-8">
                <strong>Discover Halkidiki</strong></strong></h2>
            <div class="block-indent">
              <figure class="img-polaroid"><img src="img/page-4-img.jpg" alt=""></figure>
              <div class="extra-wrap"> <strong class="font12 dis-block bot">Where
                  Sea Adventures Await</strong>
                <p>Nestled in the heart of Greece's northern Aegean Sea,
                  Halkidiki beckons with its unparalleled beauty, diverse
                  landscapes, and a wealth of sea adventures waiting to be
                  explored. Comprising three peninsulas jutting out into the
                  azure waters of the Mediterranean – Kassandra, Sithonia, and
                  Athos – Halkidiki offers a tapestry of experiences for sea
                  enthusiasts.</p>
              </div>
            </div>
          </article>
          <article class="span4">
            <h2>Coastal Wonders</h2>
            <ul>
              <li>Explore Pristine Shorelines: With its idyllic beaches, hidden
                coves, and crystal-clear waters, Halkidiki's coastline is a
                haven for sea lovers. Whether you seek peaceful seclusion or
                vibrant seaside life, each peninsula offers its own unique charm
                and opportunities for aquatic exploration.</li>
              <h2> Experience Halkidiki's Magic </h2>
              <p> Join us as we uncover the treasures of Halkidiki's seas and
                landscapes, where every wave, every dive, and every coastline
                reveal a new dimension of beauty and adventure. </p>
            </ul>
          </article>
        </div>
      </div>
    </div>
    <aside>
      <div class="container">
        <div class="row">
          <article class="span3">
            <h2 class="h2indent-1">Marine Diversity</h2>
            <ul class="list">
              <li>Rich Underwater Ecosystems: Beneath the surface, Halkidiki's
                marine world thrives with biodiversity. From colorful reefs to
                intriguing sea life, the underwater landscapes make it an ideal
                destination for snorkeling, diving, and spearfishing adventures.</li>
              <h2 class="h2indent-1">Plan Your Visit</h2>
              <p> Whether you're drawn to the captivating waters for kayaking,
                fishing, or spearfishing or seeking to combine sea adventures
                with cultural exploration, Halkidiki provides an exquisite
                setting for an unforgettable journey. </p>
            </ul>
          </article>
          <article class="span9">
            <div class="block-indent">
              <figure class="img-polaroid"></figure>
              <h2 class="h2indent-1">Natural Splendor</h2>
              <div class="extra-wrap"> <strong class="font12 dis-block bot">Enchanting
                  Landscapes: Beyond the shores, Halkidiki boasts lush greenery,
                  majestic mountains, and quaint villages, creating a
                  picturesque backdrop for your sea escapades. Immerse yourself
                  in the beauty of nature as you explore both land and sea. </strong>
                <h2 class="h2indent-1"><img src="img/page-4-img-1.jpg" alt=""></h2>
                <h2 class="h2indent-1">Cultural Heritage</h2>
                <p>Timeless Traditions: The region is steeped in history and
                  culture, offering a glimpse into Greece's rich heritage.
                  Explore ancient ruins, monasteries, and vibrant local markets,
                  adding a touch of cultural immersion to your sea adventure.</p>
              </div>
            </div>
          </article>
        </div>
      </div>
    </aside>
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
