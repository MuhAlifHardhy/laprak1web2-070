<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "buku".
 *
 * @property int $id
 * @property string $kode_buku
 * @property string $judul
 * @property int|null $jml_item
 */
class Buku extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'buku';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_buku', 'judul'], 'required'],
            [['jml_item'], 'integer'],
            [['kode_buku'], 'string', 'max' => 25],
            [['judul'], 'string', 'max' => 255],
            [['kode_buku'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode_buku' => 'Kode Buku',
            'judul' => 'Judul',
            'jml_item' => 'Jml Item',
        ];
    }
}
