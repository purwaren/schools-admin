<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Siswa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-custom-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Registrasi Siswa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nis',
            'name',
            'birthdate',
            'starting_year',
            //'created_by',
            //'created_at',
            //'updated_by',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
