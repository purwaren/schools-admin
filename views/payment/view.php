<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\custom\PaymentCustom */

$this->title = 'Pembayaran: '.$model->student->name;
$this->params['breadcrumbs'][] = ['label' => 'Pembayaran', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="payment-custom-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Anda yakin akan menghapus pembayaran ini?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            ['label'=>'Nama Siswa', 'value'=>$model->student->name],
            'trx_date',
            ['label'=>'Jumlah', 'value'=>number_format($model->amount)],
            'description',
            ['label'=>'Status Bayar', 'value'=> $model->status ? 'Lunas' : 'Belum'],
            'created_at',
            'created_by',
            'updated_at',
            'updated_by',
        ],
    ]) ?>

</div>
