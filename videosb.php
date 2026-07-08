<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Gallery</title>
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
    <script type="text/javascript" src="js/jquery.carouFredSel-6.1.0.js"></script>
    <script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>
    <script type="text/javascript" language="javascript">
      $(window).load(function(){
      //  Responsive layout, resizing the items
      $('#foo3').carouFredSel({
      auto: false,
      responsive: true,
      width: '100%',    
      scroll: 1,
      prev: '#prev-1',
      next: '#next-1',
      pagination: false,
      mousewheel: true,
      items: {
      height: 'auto',
      width: '270',
      visible: {
      min: 1,
      max: 2
        }
      },
      swipe: {
        onMouse: true,
        onTouch: true
        }
      }); 
      });
    </script>
    <!--[if lt IE 8]>
    		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>     	<![endif]-->
    <!--[if lt IE 9]>
      <link rel="stylesheet" href="css/docs.css" type="text/css" media="screen"      <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>    <![endif]-->
    <style>
        /* Your CSS styles */
        /* ... */

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
        .modal {
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
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            border: 10px solid #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            text-align: center;
        }
        .modal-content img {
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
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
            cursor: pointer;
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
        /* Video Gallery */
.video-gallery {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* Three videos in each row */
    grid-gap: 20px;
    padding: 20px;
}

.video-item {
    position: relative;
}

.video-item video {
    width: 100%;
    height: auto;
    border: 1px solid #ddd; /* Border style */
}

/* Load More Button */
.load-more {
    text-align: center;
    margin-top: 20px;
}

.load-more a {
    display: inline-block;
    padding: 10px 20px;
    background-color: #ffd700; /* Gold background color */
    color: #fff; /* White text color */
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.load-more a:hover {
    background-color: #e0ac00; /* Darker gold on hover */
}
    </style>
  
  
  </head>
  <body>
    <!--==============================header=================================-->
    <header class="page-3">
      <div class="container">
        <div class="navbar navbar_ clearfix">
          <div class="navbar-inner">
            <div class="clearfix">
              <h1 class="brand"><a href="index.html"><img src="img/logo.png" alt=""
                    style="width: 203px; height: 123px;"></a><span>find the
                  treasures of the underwater world</span></h1>
                  <div class="div-telephone"> <img src="img/tel-img.png" alt=""><img src="img/viber.png" alt=""> <span>+30 694 0214 738</span> </div>
            </div>
            <div class="nav-collapse nav-collapse_ collapse">
              <ul class="nav sf-menu clearfix">
                <li><a href="index.html">Home</a></li>
                <li class="sub-menu"><a href="about.html">About us</a>
                  <ul>
                    <li><a href="kayak.html">KAYAK</a></li>
                    <li><a href="spearfishing.html">SPEARFISHING</a></li>
                    <li><a href="fishing.html">FISHING</a></li>
                  </ul>
                </li>
                <li class="active"><a href="gallery.html">Gallery</a></li>
                <li><a href="halkidiki.html">HALKIDIKI</a></li>
                <li><a href="contact.html">Contact Us</a></li>
              </ul>
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
          <div class="gallery">
    <?php
    include 'db.php'; // Include your database connection script

    // Fetch all videos from the database
    $sql = "SELECT * FROM videos";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()): ?>
        <video controls>
            <source src="<?php echo $row['video_path']; ?>" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    <?php endwhile; ?>
</div>


            </strong></article>
          <strong> </strong></div>
        <strong> </strong></div>
      <strong> </strong></div>
    <strong>
    
<!-- The Modal -->
<div id="myModal" class="modal">
    <span class="close" onclick="closeModal()">&times;</span>
    <video id="modalVideo" controls style="width: 80%; height: auto;">
        <source src="" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="caption">
        <h2 id="modalTitle"></h2>
        <p id="modalDescription"></p>
    </div>
</div>

    
    
    
    
    
      <footer>
        <div class="container">
          <div class="row">
            <article class="span6 fright">
              <ul class="list-soc">
                <li><a href="#" class="icon-1"></a><br>
                </li>
                <li><a href="#" class="icon-2"></a><br>
                </li>
                <li><a href="#" class="icon-3"></a><br>
                </li>
                <li><a href="#" class="icon-4"></a><br>
                </li>
              </ul>
            </article>
            <article class="span6 fleft"> <a href="index.html"><img src="img/logo-1.png"
                  alt=""></a><span class="txt-foot"> © 2013 | &nbsp;<a href="index-5.html">Privacy
                  Policy</a></span> </article>
          </div>
        </div>
      </footer>
      
      <script type="text/javascript" src="js/bootstrap.js"></script> </strong>
       <!-- Script for opening and closing the modal -->
    <script>
        var slideIndex = 0;
        var images = document.querySelectorAll('.gallery img');


}




function openModal(video) {
    var modal = document.getElementById("myModal");
    var modalVideo = document.getElementById("modalVideo");
    var modalTitle = document.getElementById("modalTitle");
    var modalDescription = document.getElementById("modalDescription");

    modal.style.display = "block";
    modalVideo.src = video.querySelector('source').src;
    modalTitle.innerHTML = video.getAttribute('data-title');
    modalDescription.innerHTML = video.getAttribute('data-description');

    // Find the index of the clicked video in the gallery
    for (var i = 0; i < videos.length; i++) {
        if (videos[i] === video) {
            slideIndex = i;
            break;
        }
    }

        function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }

function changeVideo(n) {
    slideIndex += n;
    if (slideIndex >= videos.length) {
        slideIndex = 0;
    } else if (slideIndex < 0) {
        slideIndex = videos.length - 1;
    }
    document.getElementById("modalVideo").src = videos[slideIndex].querySelector('source').src;
    document.getElementById("modalTitle").innerHTML = videos[slideIndex].getAttribute("data-title");
    document.getElementById("modalDescription").innerHTML = videos[slideIndex].getAttribute("data-description");
}

        
    </script>
  </body>
</html>
