<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<center>
<table border="1">
    <tr>
        <td>用户名</td>
        <td>密码</td>
        <td>操作</td>
    </tr>
    <?php foreach($test as $k=>$v){?>
        <tr>
            <td><?php echo $v['username']; ?></td>
            <td><?php echo $v['pwd']; ?></td>
            <td><a href="index.php?r=test/update&id=<?php echo $v['id'];?>">修改</a></td>
        </tr>
    <?php }?>
</table>
</center>
</body>
</html>


