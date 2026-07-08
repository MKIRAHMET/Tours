<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>THALATTA | THANK YOU</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <meta name="description" content="Thalatta kayak is sea adventures club in Halkidiki">
    <meta name="keywords" content="thalatta, kayak, spearfishing, fishing, halkidiki, greece, sea, adventures">
    <meta name="author" content="Thalatta">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/superfish.js"></script>
    <script type="text/javascript" src="js/jquery.mobilemenu.js"></script>
    <script type="text/javascript" src="js/jquery.equalheights.js"></script>

    <script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
    <script type="text/javascript" language="javascript">
      $(window).load(function(){
      //  Responsive layout, resizing the items
      
       jQuery(".maxheight").equalHeights();  
      });
    </script>
    <style>/* Default image styles */

.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}

.logo-image {
  width: 85%;
  height: auto;
  max-width: 100%; /* Ensure the image doesn't exceed its original size */
}

/* Media queries for different screen sizes affecting only logo.png */
@media only screen and (min-width: 768px) {
  .logo-image {
    max-width: 20%;
  }
}

@media only screen and (min-width: 1200px) {
  .logo-image {
    max-width: 50%;
  }
}
</style>
    <!--[if lt IE 8]>
    		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>     	<![endif]-->
    <!--[if lt IE 9]>
      <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>    <![endif]-->
  </head>
  <body>
  <?php include('travel/includes/header.php');?>

    <!--==============================header=================================-->
    <header class="page-3">
      <div class="container">
        <div class="navbar navbar_ clearfix">
          <div class="navbar-inner">

              <h1 class="brand"><a href="index.html">
              <img src="img/logo.png" alt="Logo" class="logo-image">


</a><span>find the
                  treasures of the underwater world</span></h1>
              <div class="div-telephone"> <img src="img/tel-img.png" alt=""> <span>1
                  800 123 1234</span> <span>1 800 123 1235</span> </div>
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
<!--- contact ---->
<div class="contact">
	<div class="container">
	<h3> Confirmation</h3>
		<div class="col-md-10 contact-left">
			<div class="con-top animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp;">
	

              <h4>  <?php echo htmlentities($_SESSION['msg']);?></h4>
            
			</div>
		
			<div class="clearfix"></div>
	</div>
</div>
<!--- /contact ---->
   
            </div>
          </article>
        </div>
      </div>
    </div>
    <aside>
    </aside>
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
                alt=""></a><span class="txt-foot"> © 2024 | &nbsp;<a href="index-5.html">Privacy
                Policy</a></span> </article>
        </div>
      </div>
    </footer>
<!-- signup -->
    <?php include('travel/includes/signup.php');?>
<!-- //signu -->
<!-- signin -->
<?php include('travel/includes/signin.php');?>
<!-- //signin -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
  </body>
</html>