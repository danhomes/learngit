<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use app\models\Week;
use app\models\UploadForm;

class WeekController extends Controller{
    public $enableCsrfValidation=false;
    //添加展示
    public function actionAdd(){
        $up_model = new UploadForm();
        $model = new Week();
        return $this->render('add', [
            'model' => $model,
            'up_model' => $up_model,
        ]);
    }
    //添加操作
    public function actionAdds(){
        $up_model = new UploadForm();
        if (Yii::$app->request->isPost) {
            $up_model->file = \yii\web\UploadedFile::getInstance($up_model, 'file');
            if ($up_model->file && $up_model->validate()) {
                $file_name='uploads/' . $up_model->file->baseName . '.' . $up_model->file->extension;
                $up_model->file->saveAs($file_name);
            }
        }

        $info=Yii::$app->request->post();
        $arr=$info['Week'];//大小写区分
//        print_r($arr);die;
        $arr['file']=$file_name;

//        print_r($arr);die;
        $obj=Yii::$app->db->createCommand();
        $re=$obj->insert('week',$arr)->execute();
        if($re){
            echo "<script>alert('添加成功');location.href='?r=week/list'</script>";
        }else{
            echo "<script>alert('添加失败');location.href='?r=week/add'</script>";
        }
    }
    //展示列表
    public function actionList(){
        $sql="select * from week ORDER by num desc";
//        echo $sql;die;
        $list=Yii::$app->db->createCommand($sql)->queryAll();

        return $this->render('list',['list'=>$list]);
    }

}
