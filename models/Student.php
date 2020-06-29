<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property int $id
 * @property string $nis
 * @property string $name
 * @property string|null $birthdate
 * @property string|null $starting_year
 * @property string $created_by
 * @property string $created_at
 * @property string|null $updated_by
 * @property string|null $updated_at
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nis', 'name', 'created_by', 'created_at'], 'required'],
            [['birthdate', 'created_at', 'updated_at'], 'safe'],
            [['nis', 'created_by', 'updated_by'], 'string', 'max' => 32],
            [['name'], 'string', 'max' => 128],
            [['starting_year'], 'string', 'max' => 8],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nis' => 'Nis',
            'name' => 'Name',
            'birthdate' => 'Birthdate',
            'starting_year' => 'Starting Year',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
        ];
    }
}
