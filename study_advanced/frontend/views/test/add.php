<?php
use yii\widgets\ActiveForm;
?>

<center>
    <form action="?r=test/adds" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>用户名</td>
                <td><input type="text" name="username"/></td>
            </tr>
            <tr>
                <td>密码</td>
                <td><input type="password" name="pwd"/></td>
            </tr>
            <tr>
                <td><input type="submit" value="添加"/></td>
                <td></td>
            </tr>
        </table>
    </form>
</center>

