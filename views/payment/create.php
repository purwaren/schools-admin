<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\custom\PaymentCustom */

$this->title = 'Buat Pembayaran';
$this->params['breadcrumbs'][] = ['label' => 'Pembayaran', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="payment-custom-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
