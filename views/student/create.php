<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\custom\StudentCustom */

$this->title = 'Create Student Custom';
$this->params['breadcrumbs'][] = ['label' => 'Student Customs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-custom-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
