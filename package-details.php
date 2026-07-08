<?php
session_start();

include('includes/config.php');

$error = ""; // Initialize $error variable
if(isset($_POST['submit2'])) {
    $pid = intval($_GET['pkgid']);
    
    // Retrieve package price, maximum participants, and tour date
    $sql_package_info = "SELECT TourDate, PackagePrice, MaxParticipants, CurrentParticipants FROM tbltourpackages WHERE PackageId = :pid";
    $query_package_info = $dbh->prepare($sql_package_info);
    $query_package_info->bindParam(':pid', $pid, PDO::PARAM_INT);
    $query_package_info->execute();
    $row_package_info = $query_package_info->fetch(PDO::FETCH_ASSOC);
    $tourDate = $row_package_info['TourDate'];
    $packagePrice = $row_package_info['PackagePrice'];
    $maxParticipants = $row_package_info['MaxParticipants'];
    $currentParticipants = $row_package_info['CurrentParticipants'];

    if ($currentParticipants >= $maxParticipants) {
        $error = "Sorry, the maximum number of participants for this tour package has been reached.";
    } else {
        // Insert booking details
        $useremail = $_SESSION['login'];
        $fromdate = $tourDate; // Use TourDate as FromDate

        $status = 0;

        $sql = "INSERT INTO tblbooking(PackageId, UserEmail, FromDate, status) VALUES(:pid, :useremail, :fromdate, :status)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':pid', $pid, PDO::PARAM_STR);
        $query->bindParam(':useremail', $useremail, PDO::PARAM_STR);
        $query->bindParam(':fromdate', $fromdate, PDO::PARAM_STR);
        $query->bindParam(':status', $status, PDO::PARAM_STR);
        $query->execute();
        $lastInsertId = $dbh->lastInsertId();
        
        // Update current participants count in tbltourpackages
        if ($lastInsertId) {
            $updateParticipantsSql = "UPDATE tbltourpackages SET CurrentParticipants = CurrentParticipants + 1 WHERE PackageId = :pid";
            $updateParticipantsQuery = $dbh->prepare($updateParticipantsSql);
            $updateParticipantsQuery->bindParam(':pid', $pid, PDO::PARAM_STR);
            $updateParticipantsQuery->execute();

            $msg = "Booked Successfully";
        } else {
            $error = "Something went wrong. Please try again";
        }
    }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>PACKAGE DETAILS</title>
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

<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<link rel="stylesheet" href="css/jquery-ui.css" />
	<script>
		 new WOW().init();
	</script>
<script src="js/jquery-ui.js"></script>
					<script>
						$(function() {
						$( "#datepicker,#datepicker1" ).datepicker();
						});
					</script>
	  <style>
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

 <header class="page-3">
      <div class="container">
        <div class="navbar navbar_ clearfix">
          <div class="navbar-inner">
      
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
<!--- selectroom ---->
<div class="selectroom">
    <div class="container">
    <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php }?>
        <?php
        $pid = intval($_GET['pkgid']);
        $sql = "SELECT * FROM tbltourpackages WHERE PackageId = :pid";
        $query = $dbh->prepare($sql);
        $query->bindParam(':pid', $pid, PDO::PARAM_INT);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        if($query->rowCount() > 0) {
            foreach($results as $result) {
                $maxParticipants = $result->MaxParticipants; // Fetch max participants for this specific package
                $currentParticipants = $result->CurrentParticipants; // Fetch current participants for this specific package
        ?>
                <form name="book" method="post">
                    <div class="selectroom_top">
                        <div class="col-md-4 selectroom_left wow fadeInLeft animated" data-wow-delay=".5s">
                            <img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="">
                        </div>
                        <div class="col-md-8 selectroom_right wow fadeInRight animated" data-wow-delay=".5s">
                            <h2 class="package-name"><?php echo htmlentities($result->PackageName);?></h2>
                            <div class="section-box" style="background-color: #f5f5f5;">
                                <p class="dow">#PKG-<?php echo htmlentities($result->PackageId);?></p>
                                <p><b>Package Type :</b> <?php echo htmlentities($result->PackageType);?></p>
                                <p><b>Package Location :</b> <?php echo htmlentities($result->PackageLocation);?></p>
                                <p><b>Features</b> <?php echo htmlentities($result->PackageFetures);?></p>
                                <p><b>Date</b> <?php echo htmlentities($result->TourDate);?></p>
                                <input type="hidden" name="fromdate" value="<?php echo htmlentities($result->TourDate); ?>">

                                <div class="clearfix"></div>
                                <?php
                                if ($currentParticipants >= $maxParticipants) {
                                    echo '<div class="errorWrap">Sorry, the maximum number of participants for this tour package has been reached.</div>';
                                } else {
                                    $spotsAvailable = $maxParticipants - $currentParticipants;
                                    echo '<p>Available spots: ' . $spotsAvailable . '</p>';
                                }
                                ?>

		<div class="buttonmargin";>


      
            <div class="selectroom-info animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp; margin-top: -70px">
      
                <?php if($_SESSION['login']) {?>
                    <div class="spe text-center" style="margin-top: 20px;"> <!-- Added margin-top -->
                        <button type="submit" name="submit2" class="btn-primary btn">Book</button>
                    </div>
                <?php } else {?>
                    <div class="sigi text-center" style="margin-top: 1%">
                        <a href="#" data-toggle="modal" data-target="#myModal4" class="btn-primary btn" > Book</a>
                    </div>
                <?php } ?>
            </div>
			</div>
    </div>

		</form>
<?php }} ?>

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
</body>
</html>