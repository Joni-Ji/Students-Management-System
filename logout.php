<html>
<head>
    <title>Logout</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="login">
    <p><strong>Logout</strong></p>
    <span>Thank you for your access, you have safely logged out!</span>
    <p>Click to log in again<a href="login.php">Click me</a></p>
    <?php
    session_start();
    session_destroy();
    ?>
</div>
</body>
</html>