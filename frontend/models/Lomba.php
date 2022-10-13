<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "lomba".
 *
 * @property int $id_lomba
 * @property int $kategori_id
 * @property string $nama_lomba
 * @property string $gambar_lomba
 * @property string $deskripsi_lomba
 *
 * @property KategoriLomba $kategori
 */
class Lomba extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lomba';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kategori_id', 'nama_lomba', 'gambar_lomba', 'deskripsi_lomba'], 'required'],
            [['kategori_id'], 'integer'],
            [['deskripsi_lomba'], 'string'],
            [['nama_lomba', 'gambar_lomba'], 'string', 'max' => 255],
            [['kategori_id'], 'exist', 'skipOnError' => true, 'targetClass' => KategoriLomba::className(), 'targetAttribute' => ['kategori_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_lomba' => 'Id Lomba',
            'kategori_id' => 'Kategori ID',
            'nama_lomba' => 'Nama Lomba',
            'gambar_lomba' => 'Gambar Lomba',
            'deskripsi_lomba' => 'Deskripsi Lomba',
        ];
    }

    /**
     * Gets query for [[Kategori]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKategori()
    {
        return $this->hasOne(KategoriLomba::className(), ['id' => 'kategori_id']);
    }

    public function getLombas()
    {
        return Lomba::find()->all();
    }
}
