<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search results</title>
    <meta charset="utf-8">
    <meta name = "format-detection" content = "telephone=no" />
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">   
    <meta name = "format-detection" content = "telephone=no" /> 
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="search/search.js"></script>
    <script type="text/javascript" src="js/superfish.js"></script>
    <script type="text/javascript" src="js/jquery.mobilemenu.js"></script>
    <!--[if lt IE 8]>
        <div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg"border="0"alt=""/></a></div>  
    <![endif]-->
    <!--[if lt IE 9]>
      <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
<!--==============================header=================================-->
<header class="page-2">


    <div class="container">
         <div class="navbar navbar_ clearfix">
            <div class="navbar-inner">      
                  <div class="clearfix">
                    <h1 class="brand"><a href="index.php"><img src="img/logo.png" alt=""></a><span>find the treasures
of the underwater world</span></h1> 

                    <div class="div-telephone">
                      <img src="img/tel-img.png" alt="">
                      <span>1 800 123 1234</span>
                      <span>1 800 123 1235</span>
                    </div>
                  </div>
                  <?php
              $currentPage = 'kayak'; // Define this variable according to the current page
              include('menu.php');
              ?>  
                  <div class="nav-collapse nav-collapse_ collapse">
    
                  </div>
             </div>  
         </div>
    </div>

</header>
<section id="content">
  <div class="container">
    <div class="row">
        <div class="span12">
         <h2 class="h2-pad">Search result:</h2>
          <div id="search-results"></div>
        </div>
    </div>
  </div>
</section>
<footer>
  <div class="container">
       <div class="row">
           
           <article class="span6 fright">
              <ul class="list-soc">
                <li><a href="#" class="icon-1"></a></li>
                <li><a href="#" class="icon-2"></a></li>
                <li><a href="#" class="icon-3"></a></li>
                <li><a href="#" class="icon-4"></a></li>
              </ul>
           </article>
           <article class="span6 fleft">
                 <a href="index.html"><img src="img/logo-1.png" alt=""></a><span class="txt-foot"> &copy; 2013 | &nbsp;<a href="index-5.html">Privacy Policy</a></span>
           </article>
       </div>
  </div>
</footer>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>