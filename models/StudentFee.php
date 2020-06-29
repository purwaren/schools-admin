<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student_fee".
 *
 * @property int $id
 * @property int $student_id
 * @property int $fee_id
 */
class StudentFee extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'student_fee';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['student_id', 'fee_id'], 'required'],
            [['student_id', 'fee_id'], 'default', 'value' => null],
            [['student_id', 'fee_id'], 'integer'],
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
            'fee_id' => 'Fee ID',
        ];
    }
}
