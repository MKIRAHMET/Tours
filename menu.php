<!-- menu.php -->
<div class="nav-collapse nav-collapse_ collapse">
<ul class="nav sf-menu clearfix">
    <li class="sub-menu" <?php if ($currentPage === 'home' || $currentPage === 'kayak' || $currentPage === 'spearfishing' || $currentPage === 'fishing' ) echo 'class="active"'; ?>><a href="index.php">Home</a>
      <ul>
        <li <?php if ($currentPage === 'kayak') echo 'class="active"'; ?>><a href="kayak.php">Kayak</a></li>
        <li <?php if ($currentPage === 'spearfishing') echo 'class="active"'; ?>><a href="spearfishing.php">Spearfishing</a></li>
        <li <?php if ($currentPage === 'fishing') echo 'class="active"'; ?>><a href="fishing.php">Fishing</a></li>
      </ul>
  </li>
  <li <?php if ($currentPage === 'book_m') echo 'class="active"'; ?>><a href="package-list.php">Tour Packages</a></li>

    </li>
    <li class="sub-menu <?php if ($currentPage === 'gallery' || $currentPage === 'videos') echo 'active'; ?>">
      <a href="gallery.php">Gallery</a>
      <ul>
        <li <?php if ($currentPage === 'videos') echo 'class="active"'; ?>><a href="videos.php">Videos</a></li>
      </ul>
    </li>
    <li class="sub-menu <?php if ($currentPage === 'thalatta' || $currentPage === 'articles' || $currentPage === 'announcements' || $currentPage === 'halkidiki'|| $currentPage === 'contact' ) echo 'active'; ?>">
      <a href="announcements.php">Thalatta</a>
      <ul>
      <li <?php if ($currentPage === 'about') echo 'class="active"'; ?>><a href="about.php">About Us</a></li>
      <li <?php if ($currentPage === 'articles') echo 'class="active"'; ?>><a href="articles.php">Articles</a></li>
    <li <?php if ($currentPage === 'announcements') echo 'class="active"'; ?>><a href="announcements.php">Announcements</a></li>
    <li <?php if ($currentPage === 'halkidiki') echo 'class="active"'; ?>><a href="halkidiki.php">Halkidiki</a></li>
    <li <?php if ($currentPage === 'contact') echo 'class="active"'; ?>><a href="contact.php">Contact Us</a></li>
  </ul> 
</div>

