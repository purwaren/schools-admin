<?php 
namespace app\models\custom;

use Yii;
use app\models\Student;

/**
 * 
 */
class StudentCustom extends Student {
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nis' => 'NIS',
            'name' => 'Nama',
            'birthdate' => 'Tanggal Lahir',
            'starting_year' => 'Tahun Masuk',
            'created_by' => 'Diinput Oleh',
            'created_at' => 'Tanggal Input',
            'updated_by' => 'Diperbarui Oleh',
            'updated_at' => 'Terakhir Diperbarui',
        ];
    }
}