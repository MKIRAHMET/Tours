<?php
session_start();
error_reporting(0);

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $mnumber = $_POST['mobilenumber'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "INSERT INTO tblusers(FullName, MobileNumber, EmailId, Password) VALUES(:fname, :mnumber, :email, :password)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':fname', $fname, PDO::PARAM_STR);
    $query->bindParam(':mnumber', $mnumber, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);
    $query->execute();

    $lastInsertId = $dbh->lastInsertId();

    if ($lastInsertId) {
        $_SESSION['msg'] = "You are Successfully registered. Now you can login";
    } else {
        $_SESSION['msg'] = "Something went wrong. Please try again.";
    }
}
?>

<!-- Javascript for check email availability -->
<script>
function checkAvailability() {
    $("#loaderIcon").show();
    jQuery.ajax({
        url: "check_availability.php",
        data: 'emailid=' + $("#email").val(),
        type: "POST",
        success: function(data) {
            $("#user-availability-status").html(data);
            $("#loaderIcon").hide();
        },
        error: function() {}
    });
}
</script>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="color: black;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <section>
                <div class="modal-body modal-spa" style="color: black;">
                    <div class="login-grids">
                        <div class="login-right">
                            <form name="signup" method="post" style="color: black;">
                                <h3 style="color: black;">Create your account</h3>
                                <input type="text" value="" placeholder="Full Name" name="fname" autocomplete="off" required="" style="color: black;">
                                <input type="text" value="" placeholder="Mobile number" maxlength="10" name="mobilenumber" autocomplete="off" required="" style="color: black;">
                                <input type="text" value="" placeholder="Email id" name="email" id="email" onBlur="checkAvailability()" autocomplete="off" required="" style="color: black;">
                                <span id="user-availability-status" style="font-size:12px; color: black;"></span>
                                <input type="password" value="" placeholder="Password" name="password" required="" style="color: black;">
                                <input type="submit" name="submit" id="submit" value="CREATE" style="color: black;">
                            </form>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <p style="color: black;">By logging in you agree to our <a href="page.php?type=terms" style="color: black;">Terms and Conditions</a> and <a href="page.php?type=privacy" style="color: black;">Privacy Policy</a></p>
                </div>
            </section>
        </div>
    </div>
</div>

<?php
if (isset($_SESSION['msg'])) {
    echo '<script>alert("' . $_SESSION['msg'] . '");</script>';
    unset($_SESSION['msg']); // Clear the message to prevent it from being displayed on subsequent reloads
}
?>
