<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Weeks */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="weeks-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data'],
        'action' => '?r=weeks/adds','method'=>'post',]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'path')->textInput(['maxlength' => true]) ?>

    <?= $form->field($up_model, 'file')->fileInput() ?>

    <?= $form->field($model, 'num')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
