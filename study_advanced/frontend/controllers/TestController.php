<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use app\models\Test;


/**
 * AdvancedController implements the CRUD actions for Advanced model.
 */
class TestController extends Controller
{
    public $enableCsrfValidation=false;//防止csrf  要不用post时找不到页面 关闭csrf
    //添加页面展示
    public function actionAdd(){
        return $this->render('add');
    }
    //添加动作
    public function actionAdds(){
//        Yii::$app->db->createCommand()->insert('user', [
//            'name' => 'test',
//            'age' => 30,
//        ])->execute();

        $info=Yii::$app->request->post();
//        print_r($info);die;
        $obj=Yii::$app->db->createCommand();
        $re=$obj->insert('test',$info)->execute();
        if($re){
            echo "<script>alert('添加成功');location.href='?r=test/test'</script>";
        }else{
            echo "<script>alert('添加失败');location.href='?r=test/add'</script>";
        }


    }
    public function actionTest()
    {
        //查询数据
//        $sql="select * from test where id=1";
//        $result=Test::findBySql($sql)->all();
        $sql="select * from test";
        $nav=Yii::$app->db->createCommand($sql)->queryAll();
        $result=Test::find()->asArray()->all();
//        print_r($result);die;
//        return $this->renderPartial('test');

        return $this->render('test',['test'=>$result]);
    }

    //修改
    public function actionUpdate(){
        $id=$_GET['id'];
        $sql="select * from test where id='$id'";
//        echo $sql;die;
        $update=Yii::$app->db->createCommand($sql)->queryOne();
//        print_r($update);die;

       return $this->render('update',$update);
    }




}
