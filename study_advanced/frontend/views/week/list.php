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
            <td>景点</td>
            <td>路线</td>
            <td>图片</td>
            <td>推荐</td>
        </tr>
        <?php foreach($list as $k=>$v){?>
        <tr>
            <td><?php echo $v['name'];?></td>
            <td><?php echo $v['path'];?></td>
            <td><img src="<?php echo $v['file']; ?>" alt="" width="100" height="80"/></td>
            <td><?php echo $v['num']; ?></td>
        </tr>
        <?php } ?>
    </table>
</center>
</body>
</html>