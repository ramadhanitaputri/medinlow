<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "webinar".
 *
 * @property int $id_webinar
 * @property int $kategori_id
 * @property string $nama_webinar
 * @property string $gambar_webinar
 * @property string $deskripsi_webinar
 *
 * @property KategoriWebinar $kategori
 */
class Webinar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'webinar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kategori_id', 'nama_webinar', 'gambar_webinar', 'deskripsi_webinar'], 'required'],
            [['kategori_id'], 'integer'],
            [['deskripsi_webinar'], 'string'],
            [['nama_webinar', 'gambar_webinar'], 'string', 'max' => 255],
            [['kategori_id'], 'exist', 'skipOnError' => true, 'targetClass' => KategoriWebinar::className(), 'targetAttribute' => ['kategori_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_webinar' => 'Id Webinar',
            'kategori_id' => 'Kategori ID',
            'nama_webinar' => 'Nama Webinar',
            'gambar_webinar' => 'Gambar Webinar',
            'deskripsi_webinar' => 'Deskripsi Webinar',
        ];
    }

    /**
     * Gets query for [[Kategori]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKategori()
    {
        return $this->hasOne(KategoriWebinar::className(), ['id' => 'kategori_id']);
    }

    public function getWebinars()
    {
        return Webinar::find()->all();
    }
}
