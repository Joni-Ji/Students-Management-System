<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    try{
        require ('mysqli_connect.php');
        $username = filter_var( $_POST['username'], FILTER_SANITIZE_STRING);
        if (empty($username)) {
            $errors[] = 'You forgot to enter your username.';
            $errors[] = 'or the username does not exist.';
        }

        $password1 = filter_var( $_POST['password1'], FILTER_SANITIZE_STRING);
        if (empty($password1)) {
            $errors[] = 'You forgot to enter your password.';
        }
        if(empty($errors)){
            $query = "SELECT uid,accountId,userLogin,userPassword ";
            $query .= "FROM users where userLogin=?";
            $q = mysqli_stmt_init($dbcon);
            mysqli_stmt_prepare($q, $query);
            mysqli_stmt_bind_param($q, 's', $username);
            mysqli_stmt_execute($q);

            $result = mysqli_stmt_get_result($q);
            $row = mysqli_fetch_array($result,MYSQLI_NUM);
//            if (mysqli_num_rows($result) == 1){
                //echo '<pre>'; print_r($result); echo '</pre>';
                if(password_verify($password1,$row[3])){
                    session_start();
                    $_SESSION['user_level'] = (int)$row[4];
                    $url = ($_SESSION['user_level'] === 1)? 'admin-page.php' : 'members-page.php';
                    header('Location:' . $url);
                }else{
                    $errors[] = 'Username/Password entered does not match our records. ';
                    $errors[] = 'Perhaps you need to register, just click the Register ';
                    $errors[] = 'Button on the header menu here. ';
                }
//            }else{
//                $errors[] = 'Username/Password entered does not match our records. ';
//                $errors[] = 'Perhaps you need to register, just click the Register ';
//                $errors[] = 'Button on the header menu here. ';
//            }
        }
if (!empty($errors))  {
    $errorstring = "Error! <br /> The following error(s) occurred:<br>";
    foreach ($errors as $msg){
        $errorstring .= " $msg<br>\n";
    }
    $errorstring .= "Please try again.<br>";
    echo "<p class='text-center col-sm-2' style='color: red'>$errorstring</p>";
}
mysqli_stmt_free_result($q);
mysqli_stmt_close($q);
}
catch (Exception $e)
    {
        print"An Exception occured. Message: " . $e->getMessage();
    }
    catch(Error $e)
    {
        print "An Error occurred. Message:" . $e->getMessage();
    }
}
