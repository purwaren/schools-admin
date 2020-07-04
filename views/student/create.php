<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\custom\StudentCustom */

$this->title = 'Registrasi Siswa';
$this->params['breadcrumbs'][] = ['label' => 'Data Siswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-custom-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
