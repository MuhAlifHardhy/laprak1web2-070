<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa_070".
 *
 * @property int $Id
 * @property int $Nim
 * @property string $Nama
 * @property string $Kelas
 * @property string $Jurusan
 */
class Mahasiswa070 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa_070';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nim', 'Nama', 'Kelas', 'Jurusan'], 'required'],
            [['Nim'], 'integer'],
            [['Nama', 'Jurusan'], 'string', 'max' => 255],
            [['Kelas'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Nim' => 'Nim',
            'Nama' => 'Nama',
            'Kelas' => 'Kelas',
            'Jurusan' => 'Jurusan',
        ];
    }
    public function getProfil070()
    {
        // same as above
        return $this->hasOne(Profil070::class, ['Id' => 'Id']);
    }
}
