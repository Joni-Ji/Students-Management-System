
<?php
include 'includes/header.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Register Form</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="css/opensans-font.css">
    <link rel="stylesheet" type="text/css" href="fonts/line-awesome/css/line-awesome.min.css">
    <!-- Jquery -->
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
    <script src="js/verify.js"></script>
</head>

<?php
if($_SERVER['REQUEST_METHOD'] == "POST") {
    // header("location: https://www.google.com");
    require("process-register.php");
}
?>

<body class="form-v4">
<div class="page-content">
    <div class="form-v4-content">
        <div class="form-left">
            <h2>INFOMATION</h2>
            <div class="form-left-last">
                <input type="submit" name="account" class="account" value="Have An Account" onclick="window.location.href = 'login.php'" />
            </div>
        </div>
        <form class="form-detail" action="register.php" method="post" id="myform" onsubmit="return checked();">
            <h2>REGISTER FORM</h2>
            <div class="form-group">
                <div class="form-row form-row-1">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" id="first_name" class="input-text" required
                           value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>">
                </div>
                <div class="form-row form-row-1">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" id="last_name" class="input-text" required
                           value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>">
                </div>
            </div>
            <div class="form-row">
                <label for="your_email">Your Email</label>
                <input type="text" name="your_email" id="your_email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}"
                       value="<?php if (isset($_POST['your_email'])) echo $_POST['your_email']; ?>">
            </div>
            <div class="form-row">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="input-text" required
                       value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>">
            </div>

            <div class="form-group">
                <div class="form-row form-row-1 ">
                    <label for="password1">Password</label>
                    <input type="password" name="password1" id="password1" class="input-text" required
                           value="<?php if (isset($_POST['password1'])) echo $_POST['password1']; ?>">
                    <!--                               minlength="8" maxlength="12" required-->
                </div>
                <div class="form-row form-row-1">
                    <label for="password2">Confirm Password</label>
                    <input type="password" name="password2" id="password2" class="input-text" required
                           value="<?php if (isset($_POST['password2'])) echo $_POST['password2']; ?>">
                    <!--                               minlength="8" maxlength="12" required-->

                </div>
            </div>
            <div class="form-group">
                <div class="form-row form-row-1">
                    <label for="role">Role</label>
                    <input type="text" name="role" id="role" class="input-text" required
                           value="<?php if (isset($_POST['role'])) echo $_POST['role']; ?>">
                </div>
                <div class="form-row form-row-1">
                    <label for="status">Status</label>
                    <input type="text" name="status" id="status" class="input-text" required
                           value="<?php if (isset($_POST['status'])) echo $_POST['status']; ?>">
                </div>
            </div>
            <div class="form-checkbox">
                <label class="container"><p>I agree to the <a href="#" class="text">Terms and Conditions</a></p>
                    <input type="checkbox" name="checkbox">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="form-row-last">
                <input type="submit" name="register" class="register" value="Register">
            </div>
        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

</body>
</html>

<?php
require 'includes/footer.php';
?>
