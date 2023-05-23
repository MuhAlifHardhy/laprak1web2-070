<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profil_070".
 *
 * @property int $Id
 * @property int $Id_mahasiswa
 * @property string $Foto_profil
 */
class Profil070 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profil_070';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_mahasiswa', 'Foto_profil'], 'required'],
            [['Id_mahasiswa'], 'integer'],
            [['Foto_profil'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Id_mahasiswa' => 'Id Mahasiswa',
            'Foto_profil' => 'Foto Profil',
        ];
    }
}
