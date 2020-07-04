<?php
namespace app\models\custom;

use Yii;
use app\models\FeeComponent;

/**
 * This is the model class for table "fee_component".
 *
 * @property int $id
 * @property string $name
 * @property int $amount
 * @property string $created_by
 * @property string $created_at
 * @property string|null $updated_by
 * @property string|null $updated_at
 */
class FeeCustom extends FeeComponent {
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Nama',
            'amount' => 'Jumlah (IDR)',
            'created_by' => 'Diinput Oleh',
            'created_at' => 'Waktu Input',
            'updated_by' => 'Diperbarui Oleh',
            'updated_at' => 'Terakhir Diperbarui',
        ];
    }

    public static function getAllFeeOptions() 
    {
        $models = self::find()->orderBy(['name'=>'SORT_ASC'])->all();
        $options = [];
        foreach ($models as $row) {
            $options[$row->amount] = $row->name.' - Rp. '.number_format($row->amount);
        }
        return $options;
    }
}