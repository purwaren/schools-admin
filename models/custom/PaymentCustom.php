<?php
namespace app\models\Custom;

use Yii;
use app\models\Payment;

class PaymentCustom extends Payment {
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'student_id' => 'ID Siswa',
            'trx_date' => 'Tanggal Transaksi',
            'amount' => 'Jumlah (IDR)',
            'description' => 'Keterangan',
            'status' => 'Status',
            'created_at' => 'Waktu Input',
            'created_by' => 'Diinput Oleh',
            'updated_at' => 'Terakhir Diperbarui',
            'updated_by' => 'Diperbarui Oleh',
        ];
    }
}