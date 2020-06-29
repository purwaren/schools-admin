<?php

namespace app\models;

use Yii;

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
class FeeComponent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fee_component';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'amount', 'created_by', 'created_at'], 'required'],
            [['amount'], 'default', 'value' => null],
            [['amount'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 128],
            [['created_by', 'updated_by'], 'string', 'max' => 32],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'amount' => 'Amount',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
        ];
    }
}
