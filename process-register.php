<?php
//// This script is a query that INSERTs a record in the users table.
//// Check that form has been submitted:
//session_start();
////$successMsg = "";
//try {
//    $errors = array(); // Initialize an error array.
//    // Check for a first name:
//    $first_name = filter_var( $_POST['first_name'], FILTER_SANITIZE_STRING);
//    if (empty($first_name)) {
//        $errors[] = 'You forgot to enter your first name.';
//    }
//    // Check for a last name:
//    $last_name = filter_var( $_POST['last_name'], FILTER_SANITIZE_STRING);
//    if (empty($last_name)) {
//        $errors[] = 'You forgot to enter your last name.';
//    }
//    // Check for an email address:
//    $email = filter_var( $_POST['your_email'], FILTER_SANITIZE_EMAIL);
//    if  ((empty($email)) || (!filter_var($email, FILTER_VALIDATE_EMAIL))) {
//        $errors[] = 'You forgot to enter your email address';
//        $errors[] = ' or the e-mail format is incorrect.';
//    }
//
//    // Check for a status:
//    $username = filter_var( $_POST['username'], FILTER_SANITIZE_STRING);
//    if (empty($username)) {
//        $errors[] = 'You forgot to enter your username.';
//    }
//    // Check for a role:
//    $role = filter_var( $_POST['role'], FILTER_SANITIZE_STRING);
//    if (empty($role)) {
//        $errors[] = 'You forgot to enter your role.';
//    }
//    // Check for a status:
//    $status = filter_var( $_POST['role'], FILTER_SANITIZE_STRING);
//    if (empty($status)) {
//        $errors[] = 'You forgot to enter your status.';
//    }
//
//    // Check for a password and match against the confirmed password:
//    $password1 = filter_var( $_POST['password1'], FILTER_SANITIZE_STRING);
//    $password2 = filter_var( $_POST['password2'], FILTER_SANITIZE_STRING);
//    if (!empty($password1)) {
//        if ($password1 !== $password2) {
//            $errors[] = 'Your two password did not match.';
//        }
//    } else {
//        $errors[] = 'You forgot to enter your password(s).';
//    }
//    if (empty($errors)) { // If everything's OK.
//        // Register the user in the database...
//        $hashed_passcode = password_hash($password1, PASSWORD_DEFAULT);
//        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//        require ('mysqli_connect.php');
//        // Make the query:
//        $query = "INSERT INTO accounts (accountId, firstName, lastName, email,registrationDate) VALUES(' ',?, ?,?, NOW())";
////        $query .="VALUES(' ',?, ?,?)";
//        $q = mysqli_stmt_init($dbcon);
//        mysqli_stmt_prepare($q, $query);
//        // use prepared statement to insure that only text is inserted
//        // bind fields to SQL Statement
////        mysqli_stmt_bind_param($q, 'ssss', $first_name, $last_name, $email, $hashed_passcode);
//        mysqli_stmt_bind_param($q, 'sss', $first_name, $last_name, $email);
//        // execute query
//        mysqli_stmt_execute($q);
//        $last_id = $dbcon->insert_id;
//        // echo "New record ID " . $last_id;
//        $_SESSION['last_entry'] = $last_id;
//        $_SESSION['successMsg'] = "<p class='text-1'>Successfully added the user account...</p>";
//
//        if (mysqli_stmt_affected_rows($q) == 1) {	// One record inserted
//            $query = "INSERT INTO users (uid, accountId, userLogin, userPassword,userRoleID,userStatus) VALUES (' ',?,?,?,?,?)" ;
////            $query .="VALUES(' ',?,?,?)";
//            $q = mysqli_stmt_init($dbcon);
//            mysqli_stmt_prepare($q, $query);
//            mysqli_stmt_bind_param($q, 'iss', $last_id,$username, $hashed_passcode);
////            mysqli_stmt_bind_param($q,'iissii',$last_id, $accountId, $userLogin, $userPassword,$userRoleID,$userStatus);
//            mysqli_stmt_execute($q);
//            if (mysqli_stmt_affected_rows($q) == 1) {
//                // echo "Successfully added the user account";
//                header ("location: register.php");
//                $q->close();
//                exit();
//            } else {
//                $errorstring = "User account creation failed...";
//            }
//        } else { // If it did not run OK.
//            // Public message:
//            $errorstring = "<p class='text-center col-sm-8' style='color:red'>";
//            $errorstring .= "System Error<br />You could not be registered due ";
//            $errorstring .= "to a system error. We apologize for any inconvenience.</p>";
//            echo "<p class=' text-center col-sm-2' style='color:red'>$errorstring</p>";
//            // Debugging message below do not use in production
//            //echo '<p>' . mysqli_error($dbcon) . '<br><br>Query: ' . $query . '</p>';
//            // mysqli_close($dbcon); // Close the database connection.
//            $q->close();
//            exit();
//        }
//    } else { // Report the errors.
//        $errorstring = "Error! <br /> The following error(s) occurred:<br>";
//        foreach ($errors as $msg) { // Print each error.
//            $errorstring .= "<p class='text-1'> - $msg</p><br>\n";
//        }
//        $errorstring .= "<p class='text-1'>Please try again.</p><br>";
//        echo "<p class=' text-center col-sm-2' style='color:red'>$errorstring</p>";
//    }// End of if (empty($errors)) IF.
//}
//catch(Exception $e) // We finally handle any problems here
//{
//    print "An Exception occurred. Message: " . $e->getMessage();
//    //print "The system is busy please try later";
//
//}
//catch(Error $e)
//{
//    print "An Error occurred. Message: " . $e->getMessage();
//    // print "The system is busy please try again later.";
//}
//
//


// This script is a query that INSERTs a record in the users table.
// Check that form has been submitted:
try {
    $errors = array(); // Initialize an error array.
    // Check for a first name:
    $first_name = filter_var($_POST['first_name'], FILTER_SANITIZE_STRING);
    if (empty($first_name)) {
        $errors[] = 'You forgot to enter your first name.';
    }
    // Check for a last name:
    $last_name = filter_var($_POST['last_name'], FILTER_SANITIZE_STRING);
    if (empty($last_name)) {
        $errors[] = 'You forgot to enter your last name.';
    }
    // Check for an email address:
    $email = filter_var($_POST['your_email'], FILTER_SANITIZE_EMAIL);
    if ((empty($email)) || (!filter_var($email, FILTER_VALIDATE_EMAIL))) {
        $errors[] = 'You forgot to enter your email address';
        $errors[] = ' or the e-mail format is incorrect.';
    }
    // Check for a user:
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    if (empty($username)) {
        $errors[] = 'You forgot to enter your username.';
    }
        // Check for a role:
    $role = filter_var( $_POST['role'], FILTER_SANITIZE_STRING);
    if (empty($role)) {
        $errors[] = 'You forgot to enter your role.';
    }
    // Check for a status:
    $status = filter_var( $_POST['role'], FILTER_SANITIZE_STRING);
    if (empty($status)) {
        $errors[] = 'You forgot to enter your status.';
    }

    // Check for a password and match against the confirmed password:
    $password1 = filter_var($_POST['password1'], FILTER_SANITIZE_STRING);
    $password2 = filter_var($_POST['password2'], FILTER_SANITIZE_STRING);
    if (!empty($password1)) {
        if ($password1 !== $password2) {
            $errors[] = 'Your two password did not match.';
        }
    } else {
        $errors[] = 'You forgot to enter your password(s).';
    }
    if (empty($errors)) { // If everything's OK.
        // Register the user in the database...
        // Hash password current 60 characters but can increase
        $hashed_passcode = password_hash($password1, PASSWORD_DEFAULT);
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        require('mysqli_connect.php'); // Connect to the db.
        // Make the query:
        $query = "INSERT INTO accounts (accountId, firstName, lastName, email, registrationDate) ";
        $query .= "VALUES(' ',?, ?, ?, NOW())";
        $q = mysqli_stmt_init($dbcon);
        mysqli_stmt_prepare($q, $query);
        // use prepared statement to insure that only text is inserted
        // bind fields to SQL Statement
        // mysqli_stmt_bind_param($q, 'ssss', $first_name, $last_name, $email, $hashed_passcode);
        mysqli_stmt_bind_param($q, 'sss', $first_name, $last_name, $email);
        // execute query
        mysqli_stmt_execute($q);
        $last_id = $dbcon->insert_id;
        // echo "New record ID " . $last_id;

        if (mysqli_stmt_affected_rows($q) == 1) {    // One record inserted

            $query = "INSERT INTO users (uid, accountId,userLogin, userPassword,userRoleID,userStatus) VALUES(' ',?,?,?,?,?)";
//            $query .= "VALUES(' ',?,?,?,?,?)";
            $q = mysqli_stmt_init($dbcon);
            mysqli_stmt_prepare($q, $query);
            mysqli_stmt_bind_param($q, 'issii', $last_id, $username, $hashed_passcode,$role,$status);
            mysqli_stmt_execute($q);
            if (mysqli_stmt_affected_rows($q) == 1) {
                echo "Successfully added the user account";
                header("location: register.php");
                exit();
            } else {
                $errorstring = "User account creation failed...";
            }
        } else { // If it did not run OK.
            // Public message:
            $errorstring = "<p class='text-center col-sm-8' style='color:red'>";
            $errorstring .= "System Error<br />You could not be registered due ";
            $errorstring .= "to a system error. We apologize for any inconvenience.</p>";
            echo "<p class=' text-center col-sm-2' style='color:red'>$errorstring</p>";
            // Debugging message below do not use in production
            //echo '<p>' . mysqli_error($dbcon) . '<br><br>Query: ' . $query . '</p>';
            mysqli_close($dbcon); // Close the database connection.
            exit();
        }
    } else { // Report the errors.
        $errorstring = "Error! <br /> The following error(s) occurred:<br>";
        foreach ($errors as $msg) { // Print each error.
            $errorstring .= " - $msg<br>\n";
        }
        $errorstring .= "Please try again.<br>";
        echo "<p class=' text-center col-sm-2' style='color:red'>$errorstring</p>";
    }// End of if (empty($errors)) IF.
} catch (Exception $e) // We finally handle any problems here
{
    print "An Exception occurred. Message: " . $e->getMessage();
    //print "The system is busy please try later";
} catch (Error $e) {
    print "An Error occurred. Message: " . $e->getMessage();
    // print "The system is busy please try again later.";
}


?>