<?php
include 'mysqli_connect.php';

$accountId = $_POST['accountId'];

$firstName = $_POST['firstName'];

$lastName = $_POST['lastName'];

$email = $_POST['email'];

$sql = "UPDATE accounts
                  SET
                    firstName= ?,
                    lastName= ?,
                    email= ?
                  WHERE accountId= ?";

$stmt = mysqli_prepare($dbcon, $sql);

mysqli_stmt_bind_param($stmt, 'ssss', $firstName, $lastName, $email, $accountId);

if ($firstName) {
    $result = mysqli_stmt_execute($stmt);
    mysqli_close($dbcon);
    if ($result) {
        header("Location:admin-page.php");
    }else{
        exit('Error message：' . mysqli_error($dbcon));
    }
}else{
    echo "Modify users failed！<br><br>";
    header('Refresh: 3; url=admin-page.php');  //3s后跳转
}
