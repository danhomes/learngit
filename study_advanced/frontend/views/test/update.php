<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<center>
    <h1>1111</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $id;?>"/>
        <table border="1">
            <tr>
                <td>用户名</td>
                <td><input type="text" name="username" value="<?php echo $username;?>"/></td>
            </tr>
            <tr>
                <td>密码</td>
                <td><input type="password" name="pwd" value="<?php echo $pwd;?>"/></td>
            </tr>
            <tr>
                <td><input type="submit" value="确认修改"/></td>
                <td></td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>