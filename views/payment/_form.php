<?php

use app\models\custom\FeeCustom;
use app\models\custom\StudentCustom;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\custom\PaymentCustom */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="payment-custom-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'student_id')->dropDownList(StudentCustom::getAllStudentOptions(), ['prompt'=>'Pilih Siswa']) ?>

    <?= $form->field($model, 'payment_type')->dropDownList(FeeCustom::getAllFeeOptions(), ['prompt'=>'Jenis Pembayaran']) ?>

    <?php 
        echo Html::activeLabel($model, 'trx_date');
        echo DatePicker::widget([
            'name' => 'PaymentCustom[trx_date]', 
            'value' => date('Y-m-d'),
            'options' => ['placeholder' => 'Tanggal Bayar'],
            'pluginOptions' => [
                'format' => 'yyyy-mm-dd',
                'todayHighlight' => true
            ]
        ]); 
    ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
