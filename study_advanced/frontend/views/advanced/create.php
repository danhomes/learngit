<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Advanced */

$this->title = 'Create Advanced';
$this->params['breadcrumbs'][] = ['label' => 'Advanceds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="advanced-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
