<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Weeks */

$this->title = 'Update Weeks: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Weeks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="weeks-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
