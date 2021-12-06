<?php
include 'includes/headerUser.php';
//connect database
include 'mysqli_connect.php';
$sql = 'SELECT * FROM accounts';

$result = mysqli_query($dbcon, $sql);

if (!$result) {
    exit('The query SQL statement failed to execute. Error message：'.mysqli_error($dbcon));
}
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

//$sql = 'SELECT COUNT(*) FROM users ';
$sql = 'SELECT COUNT(*) FROM accounts ';
$n = mysqli_query($dbcon, $sql);

if (!$n) {
    exit('Query number SQL statement execution failed. Error message：'.mysqli_error($dbcon));
}
$num = mysqli_fetch_assoc($n);

//Convert the value of a one-dimensional array to a string
$num = implode($num);
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>admin-page</title>
</head>
<style type="text/css">
    .wrapper {width: 1000px;margin: 20px auto;}
    h1 {text-align: center;}
    .add {margin-bottom: 20px;}
    .add a {text-decoration: none;color: #fff;background-color: #00CCFF;padding: 6px;border-radius: 5px;}
    td {text-align: center;}
</style>

<body>
<div class="wrapper">
    <h1>admin-page</h1>
    <div class="add">
        <a href="addUsers.php">Add Users</a>&nbsp;&nbsp;&nbsp;Total "<?php echo $num; ?>" users
    </div>

    <table  width="960" border="1">
        <tr>
            <th>AccountId</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Email</th>
            <th>RegistrationDate</th>

        </tr>
        <?php
        foreach ($data as $key => $value) {
            foreach ($value as $k => $v) {
                $arr[$k] = $v;
            }
            echo "<tr>";

            echo "<td>{$arr['accountId']}</td>";

            echo "<td>{$arr['firstName']}</td>";

            echo "<td>{$arr['lastName']}</td>";

            echo "<td>{$arr['email']}</td>";
            echo "<td>{$arr['registrationDate']}</td>";

            echo "<td>
    
             <a href='javascript:del({$arr['accountId']})'>Delete</a>
    
             <a href='editUsers.php?id={$arr['accountId']}'>Modify</a>

                    </td>";

            echo "</tr>";
        }
        mysqli_close($dbcon);
        ?>
    </table>
</div>

<script type="text/javascript">
    function del (accountId){
        if (confirm("Are you sure to delete this users？")){
            window.location = "action_del.php?accountId="+accountId;
        }
    }
</script>
</body>
</html>
