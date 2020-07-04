<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\custom\StudentCustom */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-custom-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birthdate')->textInput() ?>

    <?= $form->field($model, 'starting_year')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
