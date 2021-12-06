<!doctype html>
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
    <h2>Add Users</h2>
    <div class="add">
        <form action="action_addUsers.php" method="post" enctype="multipart/form-data">
            <table border="1">
<!--                <tr><th>UserId ：</th><td><input  type="text"  name="uid"  size="25"  value=""></td></tr>-->
<!--                <tr><th>AccountId ：</th><td><input  type="text"  name="accountId"  size="25"  value=""></td></tr>-->
<!--                <tr><th>UseLogin ：</th><td><input  type="text"  name="userLogin"  size="25"  value=""></td></tr>-->
<!--                <tr><th>UserRole：</th><td><input  type="text"  name="userRoleID"  size="25"  value=""></td></tr>-->
<!--                <tr><th>UserStatus：</th><td><input  type="text"  name="userStatus"  size="25"  value=""></td></tr>-->
                <tr><th>FirstName ：</th><td><input  type="text"  name="firstName"  size="25"  value=""></td></tr>
                <tr><th>LastName：</th><td><input  type="text"  name="lastName"  size="25"  value=""></td></tr>
                <tr><th>Email：</th><td><input  type="text"  name="email"  size="25"  value=""></td></tr>
                <tr><th></th><td>
                    <input  type="button"  onClick="javascript :history.back(-1);"  value="Back" >&nbsp;&nbsp;&nbsp;
                    <input  type="reset"  value="Reset">&nbsp;&nbsp;&nbsp;
                    <input  type="submit"  value="Submit">&nbsp;&nbsp;&nbsp;
                </td></tr>
            </table>
        </form>
    </div>
</div>
</body>
</html>

