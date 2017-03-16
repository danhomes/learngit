<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\WeeksSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Weeks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="weeks-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Weeks', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'path',
            'img:image',
            [
                'attribute'=>'img',
                'format' =>['image',['width'=>'100','height'=>'80',]
                ],
            ],
            'num',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
