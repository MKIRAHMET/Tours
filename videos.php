<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Gallery</title>
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

      <style>
        /* Your CSS styles */
        /* ... */
        .button-container {
    text-align: center;
    margin-top: 20px;
    color: #333;
    background-color: #f9f9f9;
}
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .gallery img {
            width: 250px;
            height: 250px;
            cursor: pointer;
            border: 10px solid #f3f3f3;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }
        .gallery img:hover {
            transform: scale(1.05);
        }
        .modalgallery {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 50px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.9);
        }
        .modalgallery-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            border: 10px solid #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            text-align: center;
        }
        .modalgallery-content img {
            width: 100%;
            height: auto;
            display: block;
            margin: auto;
        }
        .caption {
            padding: 20px;
            font-family: 'Courier New', Courier, monospace;
            font-size: 18px;
        }
        .caption h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: red; /* Change color to black */
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
    cursor: pointer;
    z-index: 9999; /* Ensure it's above other elements */
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}
        .prev,
        .next {
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -50px;
            color: #f1f1f1;
            font-weight: bold;
            font-size: 20px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            cursor: pointer;
        }
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }
        .prev:hover, .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }
    </style>
  
  
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
                    style="width: 203px; height: auto;"></a><span>find the
                  treasures of the underwater world</span></h1>
   </div>
            <div class="navbar navbar_ clearfix">
            <?php
              $currentPage = 'videos'; // Define this variable according to the current page
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
          <article class="span12">
            <h2><strong>
                <meta http-equiv="content-type" content="text/html; charset=utf-8">
                <strong>Gallery: Explore Halkidiki's Sea Adventures</strong></strong></h2>
            <strong>Immerse Yourself in Visual Delights</strong>
            <P>
              Welcome to our gallery, a visual journey through the mesmerizing landscapes, thrilling activities, and breathtaking moments captured along the coasts of Halkidiki. Here, we invite you to explore the allure of the sea through our curated collection of images and videos.
            </P>
            <strong>Kayak Adventures</strong>
            <P>
              Paddle Through Paradise: View stunning snapshots of kayakers navigating through turquoise waters, discovering hidden coves, and reveling in the scenic beauty of Halkidiki's coastline.
            </P>
            <strong>Spearfishing Thrills
            </strong>
            <P>
              Underwater Wonders: Dive into our gallery to witness the excitement and skill of spearfishing. Experience the thrill of underwater hunts and the vibrant marine life that awaits beneath the surface.
            </P>
            <strong>Fishing Escapades</strong>
            <p>
              Reel in Memories: Explore the essence of fishing in Halkidiki. From serene moments by the shore to the exhilaration of catching the day's bounty, our gallery portrays the joy of fishing in these pristine waters
            </p>
            <strong>
       <!-- Videos Section -->
    <div class="videos">
        <div class="row">
            <?php
            include 'db.php'; // Include your database connection script
            
            $limit = 3; // Number of videos to display at once
            $offset = isset($_GET['offset']) ? (int)$_GET['offset'] : 0; // Get offset from URL

            // Fetch all videos from the database
            $sql = "SELECT * FROM videos ORDER BY created_at DESC LIMIT $limit OFFSET $offset";
            $result = $conn->query($sql);

            $videosCount = $result->num_rows;
            while ($row = $result->fetch_assoc()): ?>
                <div class="col-md-2" style="display: inline-block;">
                    <div class="video-container">
                        <video width="320" height="240" controls>
                            <source src="<?php echo $row['video_path']; ?>" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <h3><?php echo $row['title']; ?></h3>
                        <p><?php echo $row['description']; ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
    
    <!-- Load More Button -->
    <?php if ($videosCount >= $limit) : ?>
        <div class="button-container">
            <a href="?offset=<?php echo $offset + $limit; ?>" class="redirect-button">NEXT PAGE</a>
        </div>
    <?php endif; ?>

    <?php
    if ($videosCount <= $limit && $offset > 0) : ?>
        <div class="button-container">
            <a href="?offset=<?php echo $offset - $limit; ?>" class="redirect-button">PREVIOUS PAGE</a>
        </div>
    <?php endif; ?>
        </strong></article>
          <strong> </strong></div>
        <strong> </strong></div>
      <strong> </strong></div>
    <strong>
    <!-- Your modal code remains the same -->
      <!-- The Modal -->
      <div id="myModal1" class="modalgallery">
        <span class="close" onclick="closeModal()">&times;</span>
        <a class="prev" onclick="changeImage(-1)">&#10094;</a>
        <a class="next" onclick="changeImage(1)">&#10095;</a>
        <div class="modalgallery-content">
            <img id="modalImage" src="" alt="Image">
            <div class="caption">
                <h2 id="modalTitle"></h2>
                <p id="modalDescription"></p>
            </div>
        </div>
    </div>
    
    
    
    
    

    <?php include 'includes/footer1.php'; ?>
          <!-- signup -->
          <?php include('includes/signup.php');?>
          <?php include 'PHPMailer/src/setup.php';?>
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>
<!-- //signin -->



      <script type="text/javascript" src="js/bootstrap.js"></script> </strong>
       <!-- Script for opening and closing the modal -->
    <script>
        var slideIndex = 0;
        var images = document.querySelectorAll('.gallery img');

        function openModal(img) {
            var modal = document.getElementById("myModal1");
            var modalImg = document.getElementById("modalImage");
            var modalTitle = document.getElementById("modalTitle");
            var modalDescription = document.getElementById("modalDescription");

            modal.style.display = "block";
            modalImg.src = img.src;
            modalTitle.innerHTML = img.getAttribute('data-title');
            modalDescription.innerHTML = img.getAttribute('data-description');

            // Find the index of the clicked image in the gallery
            for (var i = 0; i < images.length; i++) {
                if (images[i].src === img.src) {
                    slideIndex = i;
                    break;
                }
            }
        }

        function closeModal() {
            document.getElementById("myModal1").style.display = "none";
        }

        function changeImage(n) {
            slideIndex += n;
            if (slideIndex >= images.length) {
                slideIndex = 0;
            } else if (slideIndex < 0) {
                slideIndex = images.length - 1;
            }
            document.getElementById("modalImage").src = images[slideIndex].src;
            document.getElementById("modalTitle").innerHTML = images[slideIndex].getAttribute("data-title");
            document.getElementById("modalDescription").innerHTML = images[slideIndex].getAttribute("data-description");
        }
    </script>
</body>
</html>
