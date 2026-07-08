<?php
session_start();
error_reporting(0);
include 'db.php'; 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>ANNOUNCEMENTS</title>
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
    <link rel="stylesheet" href="travel/css/header.css" type="text/css" media="screen">
    <link rel="stylesheet" href="travel/css/style.css" type="text/css" media="screen">

    <link href="travel/css/font-awesome.css" rel="stylesheet">
    <script src="travel/js/jquery-1.12.0.min.js"></script>

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
    <!--[if lt IE 8]>
    		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>     	<![endif]-->
    <!--[if lt IE 9]>
      <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>    <![endif]-->
  </head>
  <body>
  <?php include('includes/header.php');?>
  <div class="container" style="display: flex; justify-content: flex-end; align-items: center; color: white; padding: 20px;">
    <div class="div-telephone" style="display: flex; align-items: center;">
        <img src="img/viber.png" alt="Viber Icon" width="70" height="auto" style="margin-right: 5px;">
        <img src="img/tel-img.png" alt="Telephone Icon" style="margin-right: 5px;">
        <span style="color: white;">+30 694 0214 738</span>    </div>
</div>

    <!--==============================header=================================-->
    <header class="page-4">
      <div class="container">
        <div class="navbar navbar_ clearfix">
          <div class="navbar-inner">
            <div class="clearfix">
              <h1 class="brand"><a href="index.php"><img src="img/logo.png" alt=""
                    style="width: 203px; height: auto;"></a><span>find the
                  treasures of the underwater world</span></h1>
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
    <div id="content">
      <div class="container">
              <?php

// Pagination variables
$results_per_page = 5; // Number of announcements displayed per page
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$start_from = ($current_page - 1) * $results_per_page;

// Query to retrieve total number of published articles
$count_sql = "SELECT COUNT(*) AS total FROM announcements WHERE status = 'published'";
$total_result = $conn->query($count_sql);
$total_row = $total_result->fetch_assoc();
$total_announcements = $total_row['total'];

// Calculate total pages for published announcements
$total_pages = ceil($total_announcements / $results_per_page);
?>

<h1>Announcements</h1>

<form action="?page=<?php echo $current_page; ?>" method="GET">
<label for="sort">SHORT BY:</label>
<select id="sort" name="sort">
    <option value="latest">LATEST</option>
    <option value="oldest">OLDEST</option>
    <option value="title_asc">TITLE (A-Z)</option>
    <option value="title_desc">TITLE (Z-A)</option>
    <!-- Add more options as needed -->
</select>
<input type="submit" value="SORT">
</form>

<?php
$sort_by = isset($_GET['sort']) ? $_GET['sort'] : 'latest';

$sql = "SELECT id, title, publication_date FROM announcements WHERE status = 'published'";

// Adjust SQL query based on the selected sorting option
switch ($sort_by) {
    case 'oldest':
        $sql .= " ORDER BY publication_date ASC";
        break;
    case 'title_asc':
        $sql .= " ORDER BY title ASC";
        break;
    case 'title_desc':
        $sql .= " ORDER BY title DESC";
        break;
    default:
        $sql .= " ORDER BY publication_date DESC"; // Default to latest
        break;
}
$sql .= " LIMIT $start_from, $results_per_page";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // If there are articles in the result set
  while ($row = $result->fetch_assoc()) {
      // Start the anchor tag, wrapping the entire article entry
      echo "<a href='announcement.php?id={$row["id"]}'>";
      echo "<div style='border: 1px solid #ccc; padding: 15px; margin-bottom: 15px;'>";
      // Display the article title
      echo "<p style='font-size: 20px; margin-bottom: 8px;'>" . htmlspecialchars($row["title"]) . "</p>";
      // Display the publication date
      echo "<p style='margin-bottom: 5px;'><strong>DATE:</strong> " . htmlspecialchars($row["publication_date"]) . "</p>";
      echo "</div>"; 
      // Close the anchor tag
      echo "</a>";
      echo "<hr>";   
  }
} else {
    echo "NO ANNOUNCEMENTS FOUND";
}

$conn->close();
?>

<div class='pagination'>
<?php
for ($page = 1; $page <= $total_pages; $page++) {
    $class = $page == $current_page ? 'current' : '';
    echo "<a href='?page=$page' class='$class'>$page</a>";
}
?>
</div>
   
            </div>
          </article>
        </div>
      </div>
    </div>
    <aside>
    </aside>
    <?php include 'includes/footer1.php'; ?>
    <?php include 'PHPMailer/src/setup.php';?>
          <!-- signup -->
          <?php include('includes/signup.php');?>
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>
<!-- //signin -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
  </body>
</html>
