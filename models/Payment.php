<?php

namespace app\models;

use Yii;

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
class Payment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'payment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['student_id', 'trx_date', 'amount', 'status', 'created_at', 'created_by'], 'required'],
            [['student_id', 'amount', 'status'], 'default', 'value' => null],
            [['student_id', 'amount', 'status'], 'integer'],
            [['trx_date', 'created_at', 'updated_at'], 'safe'],
            [['description'], 'string', 'max' => 512],
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
            'student_id' => 'Student ID',
            'trx_date' => 'Trx Date',
            'amount' => 'Amount',
            'description' => 'Description',
            'status' => 'Status',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }
}
