<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\custom\FeeCustom */

$this->title = 'Update Fee Custom: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Fee Customs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fee-custom-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
