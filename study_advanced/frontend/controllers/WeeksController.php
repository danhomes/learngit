<?php

namespace frontend\controllers;

use Yii;
use app\models\Weeks;
use app\models\search\WeeksSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\UploadForm;

/**
 * WeeksController implements the CRUD actions for Weeks model.
 */
class WeeksController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Weeks models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new WeeksSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Weeks model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Weeks model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $up_model = new UploadForm();

        $model = new Weeks();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', ['model' => $model,'up_model' => $up_model]);
        }
    }
    public function actionAdds()
    {
        $up_model = new UploadForm();
        if (Yii::$app->request->isPost) {
            $up_model->file = \yii\web\UploadedFile::getInstance($up_model, 'file');
            if ($up_model->file && $up_model->validate()) {
                $file_name='uploads/' . $up_model->file->baseName . '.' . $up_model->file->extension;
                $up_model->file->saveAs($file_name);
            }
        }
        $info=Yii::$app->request->post();
        print_r($info);
        $arr=$info['Weeks'];
//        print_r($arr);die;
        $arr['img']=$file_name;
//        print_r($arr);die;
        $obj=Yii::$app->db->createCommand();
        $re=$obj->insert('weeks',$arr)->execute();
        if($re){
            echo "<script>alert('添加成功');location.href='?r=weeks/index'</script>";
        }else{
            echo "<script>alert('添加失败');location.href='?r=week/index'</script>";
        }
    }

    /**
     * Updates an existing Weeks model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Weeks model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Weeks model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Weeks the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Weeks::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
