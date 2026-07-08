<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>THALATTA | BOOKING</title>
    <meta charset="utf-8">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <meta name = "format-detection" content = "telephone=no" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/carousel.css" type="text/css" media="screen">
		<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/superfish.js"></script>
    <script type="text/javascript" src="js/jquery.mobilemenu.js"></script>

  	<!--[if lt IE 8]>
    		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>  
   	<![endif]-->
    <!--[if lt IE 9]>
      <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <style>/* Default image styles */
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
</head>
<body>
<?php include('travel/includes/header.php');?>
<div class="container" style="display: flex; justify-content: flex-end; align-items: center; color: white; padding: 20px;">
    <div class="div-telephone" style="display: flex; align-items: center;">
        <img src="img/viber.png" alt="Viber Icon" width="70" height="auto" style="margin-right: 5px;">
        <img src="img/tel-img.png" alt="Telephone Icon" style="margin-right: 5px;">
        <span style="color: white;">+30 694 0214 738</span>    </div>
</div>

    <!--==============================header=================================-->
    <header class="page-3">
      <div class="container">
        <div class="navbar navbar_ clearfix">
          <div class="navbar-inner">

          <h1 class="brand"><a href="index.php"><img src="img/logo.png" alt=""
                    style="width: 203px; height: auto;"></a><span>find the
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
    <div id="content">
      <div class="container">
      <?php


?>

<h1>Package List</h1>

<?php $sql = "SELECT * from tbltourpackages order by rand() limit 4";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>
			<div class="rom-btm">
				<div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
					<img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="">
				</div>
				<div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
					<h4>Package Name: <?php echo htmlentities($result->PackageName);?></h4>
					<h6>Package Type : <?php echo htmlentities($result->PackageType);?></h6>
					<p><b>Package Location :</b> <?php echo htmlentities($result->PackageLocation);?></p>
					<p><b>Features</b> <?php echo htmlentities($result->PackageFetures);?></p>
				</div>
				<div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
					<h5>USD <?php echo htmlentities($result->PackagePrice);?></h5>
					<a href="package-details.php?pkgid=<?php echo htmlentities($result->PackageId);?>" class="view">Details</a>
				</div>
				<div class="clearfix"></div>
			</div>

<?php }} ?>


<div><a href="package-list.php" class="view">View More Packages</a></div>
</div>
			<div class="clearfix"></div>
	</div>



<!--- routes ---->
<div class="routes">
	<div class="container">
		<div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
			<div class="rou-left">
				<a href="#"><i class="glyphicon glyphicon-list-alt"></i></a>
			</div>
			<div class="rou-rgt wow fadeInDown animated" data-wow-delay=".5s">
				<h3>80000</h3>
				<p>Enquiries</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 routes-left">
			<div class="rou-left">
				<a href="#"><i class="fa fa-user"></i></a>
			</div>
			<div class="rou-rgt">
				<h3>1900</h3>
				<p>Registered users</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
			<div class="rou-left">
				<a href="#"><i class="fa fa-ticket"></i></a>
			</div>
			<div class="rou-rgt">
				<h3>7,00,00,000+</h3>
				<p>Booking</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
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
          <article class="span6 fleft"> <a href="index.php"><img src="img/logo-1.png"
                alt=""></a><span class="txt-foot"> © 2024 | &nbsp;<a href="index-5.html">Privacy
                Policy</a></span> </article>
        </div>
      </div>
    </footer>
    <script type="text/javascript" src="js/bootstrap.js"></script>
  </body>
</html>
