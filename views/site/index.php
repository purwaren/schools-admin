<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'Sistem Administrasi Sekolah';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Selamat Datang</h1>

        <p class="lead">Sistem Administrasi Sekolah v 0.1</p>
        <?php if (Yii::$app->user->isGuest) { ?>
        <p><a class="btn btn-lg btn-success" href="/index.php/site/login">Login Untuk Memulai</a></p>
        <?php } ?>
    </div>
    <div class="body-content">
        <div class="col-lg-4">
            <div class="jumbotron">
                <p><a class="btn btn-lg btn-primary" href="<?= Url::toRoute(['/student'])?>">Lihat Data Semua Siswa</a></p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="jumbotron">
                <p><a class="btn btn-lg btn-primary" href="<?= Url::toRoute(['/payment'])?>">Lihat Data Pembayaran</a></p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="jumbotron">
                <p><a class="btn btn-lg btn-primary" href="<?= Url::toRoute(['/fee'])?>">Lihat Komponen Biaya</a></p>
            </div>
        </div>
    </div>
</div>
