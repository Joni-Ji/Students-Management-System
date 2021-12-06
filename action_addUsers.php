<?php
include 'mysqli_connect.php';

//$uid = $_POST['uid'];
//$accountId = $_POST['accountId'];
//$userLogin = $_POST['userLogin'];
//$userRoleID = $_POST['userRoleID'];
//$userStatus = $_POST['userStatus'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$sql = "INSERT INTO accounts(firstName, lastName, email) VALUES(?,?,?)";
$stmt = mysqli_prepare($dbcon, $sql);

mysqli_stmt_bind_param($stmt, 'sss',$firstName, $lastName, $email);

if ($email) {
    $result = mysqli_stmt_execute($stmt);
    mysqli_close($dbcon);
    if ($result) {
        //Add user succeed
        header("Location:admin-page.php");
    }else{
        exit('Error：' . mysqli_error($dbcon));

    }
}else{
    //Fail to add users
    echo "Add Users Failed<br><br>";
    header('Refresh: 3; url=admin-page.php');  //3s后跳转
}

