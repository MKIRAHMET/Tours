<?php
session_start();
error_reporting(0);
include 'db.php'; 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>ARTICLES</title>
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
    <link rel="stylesheet" href="css1/header.css" type="text/css" media="screen">
<link href="css1/font-awesome.css" rel="stylesheet">

    <script type="text/javascript" language="javascript">

      $(window).load(function(){
      //  Responsive layout, resizing the items
      
       jQuery(".maxheight").equalHeights();  
      });
    </script>
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
    <!--[if lt IE 8]>
    		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>     	<![endif]-->
    <!--[if lt IE 9]>
      <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>    <![endif]-->
  </head>
  <body>
  <?php include('includes/header.php');?>
  <?php include('includes/header1.php');?>
    <div id="content">
      <div class="container">
      <?php
// Check if the article ID is provided in the URL
if(isset($_GET['id'])) {
    $article_id = $_GET['id'];
    
    // Retrieve the article details from the database based on the ID
    $sql = "SELECT * FROM articles WHERE id = $article_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Display the full article
        echo "<h1>" . htmlspecialchars($row['title']) . "</h1>";
        echo "<p><strong>Author:</strong> " . htmlspecialchars($row['author']) . "</p>";
        echo "<p><strong>Publication Date:</strong> " . htmlspecialchars($row['publication_date']) . "</p>";
        echo "<p><strong>Content:</strong><br>" . htmlspecialchars_decode(nl2br($row['content'])) . "</p>";
    } else {
        echo "Article not found.";
    }
} else {
    echo "Article ID is missing.";
}
?>
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
