<?php
include 'mysqli_connect.php';

$accountId = $_GET['accountId'];
$sql = 'SELECT * FROM accounts WHERE accountId= "'. $accountId . '"';

$result = mysqli_query($dbcon, $sql);

if (!$result) {
    exit('Error message：'.mysqli_error($dbcon));
}
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

//Convert a two-dimensional array of numbers to a one-dimensional array
foreach ($data as $key => $value) {
    foreach ($value as $k => $v) {
        $arr[$k]=$v;
    }
}
?>

<html>

<head>
    <meta charset="UTF-8">
    <title>admin-page</title>
    <style type="text/css">
        .box {display:table;margin:0 auto;}
        h2 {text-align: center;}
        .add {margin-bottom: 20px;}
    </style>
</head>

<body>
<div class="box">
    <h2>Modify Users Information</h2>
    <div class="add">
        <form action="action_editUsers.php" method="post" enctype="multipart/form-data">
            <table border="1">
                <tr><th>AccountId：</th><td><input  type="text"  name="accountId"  size="25"  value="<?php echo $arr["accountId"] ?>" readonly="readonly"></td></tr>
                <tr><th>FirstName ：</th><td><input  type="text"  name="firstName"  size="25"  value="<?php echo $arr["firstName"] ?>"></td></tr>
                <tr><th>LastName ：</th><td><input  type="text"  name="lastName"  size="25"  value="<?php echo $arr["lastName"] ?>"></td></tr>
                <tr><th>Email ：</th><td><input  type="text"  name="lastName"  size="25"  value="<?php echo $arr["email"] ?>"></td></tr>
                <tr><th></th><td>
                    <input  type="button"  onClick="javascript :history.back(-1);"  value="Return" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input  type="submit"  value="Submit">
                </td></tr>
            </table>
        </form>
    </div>
</div>
</body>
</html>
