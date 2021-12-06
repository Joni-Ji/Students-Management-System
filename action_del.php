<?php

include 'mysqli_connect.php';

$accountId = $_GET['accountId'];

$sql = "DELETE FROM accounts WHERE accountId={$accountId}";

$result = mysqli_query($dbcon, $sql);

if (!$result) {

    exit('Error message：'.mysqli_error($dbcon));

}
header("Location:admin-page.php");
