<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include('includes/config.php');

$error = ""; // Initialize $error variable
$msg = "";   // Initialize $msg variable

if (!isset($_SESSION["admin_logged_in"]) || $_SESSION["admin_logged_in"] !== true) {
    // Check if $_SESSION['admin_logged_in'] is empty or if $_SESSION["admin_logged_in"] is not set or not equal to true

    // Redirect to the login page
    header("Location: ../../admin/login.php");
} else {
    if (isset($_POST['submit'])) {
        error_reporting(E_ALL);

        $pname = $_POST['PackageName'];
        $ptype = $_POST['PackageType']; // Modified to fetch Package Type from dropdown
        $plocation = $_POST['PackageLocation'];
        $pprice = $_POST['PackagePrice'];
        $pfeatures = $_POST['PackageFetures'];
        $pdetails = $_POST['PackageDetails'];
        $pimage = $_FILES["PackageImage"]["name"];
        $ptourdate = $_POST['TourDate'];
        $maxParticipants = $_POST['MaxParticipants']; // Added max participants

        move_uploaded_file($_FILES["PackageImage"]["tmp_name"], "images/" . $_FILES["PackageImage"]["name"]);

        // Debugging snippets
        if ($_FILES["PackageImage"]["error"] > 0) {
            echo "Error: " . $_FILES["PackageImage"]["error"];
        }

        $sql = "INSERT INTO tbltourpackages(PackageName,PackageType,PackageLocation,PackagePrice,PackageFetures,PackageDetails,PackageImage,TourDate, MaxParticipants) 
                VALUES(:pname,:ptype,:plocation,:pprice,:pfeatures,:pdetails,:pimage,:ptourdate, :maxParticipants)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':pname', $pname, PDO::PARAM_STR);
        $query->bindParam(':ptype', $ptype, PDO::PARAM_STR);
        $query->bindParam(':plocation', $plocation, PDO::PARAM_STR);
        $query->bindParam(':pprice', $pprice, PDO::PARAM_STR);
        $query->bindParam(':pfeatures', $pfeatures, PDO::PARAM_STR);
        $query->bindParam(':pdetails', $pdetails, PDO::PARAM_STR);
        $query->bindParam(':pimage', $pimage, PDO::PARAM_STR);
        $query->bindParam(':ptourdate', $ptourdate, PDO::PARAM_STR);
        $query->bindParam(':maxParticipants', $maxParticipants, PDO::PARAM_INT); // Bind max participants
        $query->execute();

        $lastInsertId = $dbh->lastInsertId();
        if ($lastInsertId) {
            $msg = "Package Created Successfully";
        } else {
            $error = "Something went wrong. Please try again";
        }
    }
}

// Fetch data from categories table to populate the dropdown for Package Type
$sql = "SELECT * FROM categories";
$query = $dbh->prepare($sql);
$query->execute();
$categories = $query->fetchAll(PDO::FETCH_ASSOC);
?>



<!DOCTYPE HTML>
<html>
<head>
<title>THALATTA | ΔΗΜΙΟΥΡΓΙΑ ΠΑΚΕΤΟΥ</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery-2.1.4.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
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
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
              <!--header start here-->
<?php include('includes/header.php');?>
							
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
	<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>ΕΝΗΜΕΡΩΣΗ ΠΑΚΕΤΟΥ</li>
            </ol>
		<!--grid-->
 	<div class="grid-form">
 
<!---->
  <div class="grid-form1">
  	       <h3>Create Package</h3>
  	        	  <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
						<form class="form-horizontal" name="packageForm" method="post" enctype="multipart/form-data">								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">ΟΝΟΜΑ ΠΑΚΕΤΟΥ</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="PackageName" id="PackageName" placeholder="Create Package" required>
									</div>
								</div>
<!-- Add input field for max participants -->
<div class="form-group">
    <label for="focusedinput" class="col-sm-2 control-label">Μέγιστος Αριθμός Συμμετεχόντων</label>
    <div class="col-sm-8">
        <input type="number" class="form-control1" name="MaxParticipants" id="MaxParticipants" placeholder="Maximum Participants" required>
    </div>
</div>



								            <!-- Add date input field -->
											<div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">ΗΜΕΡΟΜΗΝΙΑ</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control1" name="TourDate" id="TourDate" required>
                            </div>
                        </div>

<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">ΤΟΠΟΘΕΣΙΑ ΠΑΚΕΤΟΥ</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="PackageLocation" id="PackageLocation" placeholder=" Package Location" required>
									</div>
								</div>
								
								<div class="form-group">
    <label for="PackageType" class="col-sm-2 control-label">ΤΥΠΟΣ ΠΑΚΕΤΟΥ</label>
    <div class="col-sm-8">
        <select class="form-control1" name="PackageType" id="PackageType" required>
            <option value="">Επιλέξτε τον τύπο του πακέτου</option>
            <?php foreach ($categories as $category) { ?>
                <option value="<?php echo $category['category_name']; ?>"><?php echo $category['category_name']; ?></option>
            <?php } ?>
        </select>
    </div>
</div>



    <!-- Other form fields -->
    <div class="form-group">
        <label for="focusedinput" class="col-sm-2 control-label">ΤΙΜΗ ΠΑΚΕΤΟΥ</label>
        <div class="col-sm-8">
            <input type="text" class="form-control1" name="PackagePrice" id="PackagePrice" placeholder=" Package Price is EURO" required>
        </div>
    </div>


<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">ΧΑΡΑΚΤΗΡΙΣΤΙΚΑ ΠΑΚΕΤΟΥ</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="PackageFetures" id="PackageFetures" placeholder="Package Features Eg-free Pickup-drop facility" required>
									</div>
								</div>		


<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">ΛΕΠΤΟΜΕΡΕΙΕΣ ΠΑΚΕΤΟΥ</label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="5" cols="50" name="PackageDetails" id="PackageDetails" placeholder="Package Details" required></textarea> 
									</div>
								</div>															
<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">ΦΩΤΟΓΡΑΦΙΑ ΠΑΚΕΤΟΥ</label>
									<div class="col-sm-8">
										<input type="file" name="PackageImage" id="PackageImage">
									</div>
								</div>	

								<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<button type="submit" name="submit" class="btn-primary btn">ΔΗΜΙΟΥΡΓΙΑ</button>

				<button type="reset" class="btn-inverse btn">Reset</button>
			</div>
		</div>
						
					
						
						
						
					</div>
					
					</form>

     
      

      
      <div class="panel-footer">
		
	 </div>
    </form>
  </div>
 	</div>
 	<!--//grid-->

<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
<?php include('includes/footer.php');?>
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
		<!--/sidebar-menu-->
					<?php include('includes/sidebarmenu.php');?>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   

</body>
</html>
