<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\custom\PaymentCustom */

$this->title = 'Update Payment Custom: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Payment Customs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="payment-custom-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
