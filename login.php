<?php
include 'includes/header.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login Form</title>
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
    require("process-login.php");
}
?>

<body class="form-v4">
<div class="page-content">
    <div class="form-v4-content">
        <div class="form-left">
            <h2>STATUS</h2>
            <?php
                if(isset($errorstring)) {
                    echo $errorstring;
                }
            ?>
            <div class="spacer"><hr></div>
            <p class="text-2"><span>Need Help</span> Contact our <a href="mailto:support@unitypower.co" style="color:pink">technical support</a> </p>
        </div>

        <form class="form-detail" action="login.php" method="post" id="myform" onsubmit="return checked();">
            <h2>LOGIN FORM</h2>
            <div class="form-group">
                <div class="form-row">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="input-text" required
                           value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>">
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <label for="password1">Password</label>
                    <input type="password" name="password1" id="password1" class="input-text" required
                           value="<?php if (isset($_POST['password1'])) echo $_POST['password1']; ?>">
                </div>
            </div>
            <div class="form-row-last">
                <input type="submit" name="login" class="register" value="Login">
            </div>
        </form>
    </div>
</div>
</body>
</html>
<?php
require 'includes/footer.php';
?>
