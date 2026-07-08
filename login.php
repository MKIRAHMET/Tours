<?php
// Perform any necessary operations or checks before the redirection

// Redirect to admin login page
header("Location: admin/login.php");
exit; // Ensure that subsequent code is not executed after the redirection
?>
