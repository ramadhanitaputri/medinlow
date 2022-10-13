<?php

namespace backend\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "prestasi".
 *
 * @property int $id_prestasi
 * @property string $nama_prestasi
 * @property string $gambar_prestasi
 * @property string $deskripsi_prestasi
 */
class Prestasi extends \yii\db\ActiveRecord
{
    public $file_upload;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prestasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_prestasi', 'gambar_prestasi', 'deskripsi_prestasi'], 'required'],
            [['deskripsi_prestasi'], 'string'],
            [['nama_prestasi', 'gambar_prestasi'], 'string', 'max' => 255],
            [['file_upload'], 'file', 'extensions' => 'jpg, jpeg, png, jfif'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_prestasi' => 'Id Prestasi',
            'nama_prestasi' => 'Nama Prestasi',
            'gambar_prestasi' => 'Gambar Prestasi',
            'deskripsi_prestasi' => 'Deskripsi Prestasi',
        ];
    }
}
