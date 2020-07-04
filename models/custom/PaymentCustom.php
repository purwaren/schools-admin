<?php
namespace app\models\Custom;

use Yii;
use app\models\Payment;
use yii\db\Expression;

/**
 * This is the model class for table "payment".
 *
 * @property int $id
 * @property int $student_id
 * @property string $trx_date
 * @property int $amount
 * @property string|null $description
 * @property int $status
 * @property string $created_at
 * @property string $created_by
 * @property string|null $updated_at
 * @property string|null $updated_by
 */

class PaymentCustom extends Payment {

    public $payment_type;

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'student_id' => 'Nama Siswa',
            'trx_date' => 'Tanggal Transaksi',
            'amount' => 'Jumlah (IDR)',
            'description' => 'Keterangan',
            'status' => 'Lunas',
            'created_at' => 'Waktu Input',
            'created_by' => 'Diinput Oleh',
            'updated_at' => 'Terakhir Diperbarui',
            'updated_by' => 'Diperbarui Oleh',
            'payment_type' => 'Jenis Pembayaran'
        ];
    }

    public function rules()
    {
        return array_merge(parent::rules(),[
            ['payment_type','safe']
        ]);
    }

    public function savePayment() 
    {
        $this->amount = $this->payment_type;
        $this->created_at = new Expression('NOW()');
        $this->created_by = Yii::$app->user->getIdentity()->username;
        return $this->save();
    }
}