<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>PACKAGE LIST</title>
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
                    style="width: 203px; height: 123px;"></a><span>find the
                  treasures of the underwater world</span></h1>
       </div>
          
              <?php
              $currentPage = 'book_m'; // Define this variable according to the current page
              include('menu.php');
              ?>  
             <div class="nav-collapse nav-collapse_ collapse"> 
              
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
<!--- rooms ---->
<div class="rooms">
	<div class="container">

		<div class="room-bottom">
			<h3>Package List</h3>

      <?php 
$sql = "SELECT * from tbltourpackages";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0) {
    foreach($results as $result) {	
?>
    <div class="rom-btm">
        <div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
            <a href="package-details.php?pkgid=<?php echo htmlentities($result->PackageId);?>">
                <img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="">
            </a>
        </div>
        <div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
            <h4>
                <a href="package-details.php?pkgid=<?php echo htmlentities($result->PackageId);?>">
                    <?php echo htmlentities($result->PackageName);?>
                </a>
            </h4>
            <h6>Package Type : <?php echo htmlentities($result->PackageType);?></h6>
            <p><b>Package Location :</b> <?php echo htmlentities($result->PackageLocation);?></p>
            <p><b>Features</b> <?php echo htmlentities($result->PackageFetures);?></p>
            <p><b>Date</b> <?php echo htmlentities($result->TourDate);?></p>
        </div>
        <div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
            <h5><?php echo htmlentities($result->PackagePrice);?>EURO</h5>
            <a href="package-details.php?pkgid=<?php echo htmlentities($result->PackageId);?>" class="view">Details</a>
        </div>
        <div class="clearfix"></div>
    </div>
<?php 
    }
}
?>



		</div>
	</div>
</div>
<!--- /rooms ---->
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
