<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Weeks */

$this->title = 'Create Weeks';
$this->params['breadcrumbs'][] = ['label' => 'Weeks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="weeks-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'up_model'=>$up_model,
    ]) ?>

</div>
