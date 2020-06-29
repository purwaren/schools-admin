<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\custom\FeeCustom */

$this->title = 'Tambah Komponen Biaya';
$this->params['breadcrumbs'][] = ['label' => 'Komponen Biaya', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fee-custom-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
