<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kategori_webinar".
 *
 * @property int $id
 * @property string $nama
 * @property int $parent_kategori
 *
 * @property Webinar[] $webinars
 */
class KategoriWebinar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kategori_webinar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'parent_kategori'], 'required'],
            [['parent_kategori'], 'integer'],
            [['nama'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'parent_kategori' => 'Parent Kategori',
        ];
    }

    /**
     * Gets query for [[Webinars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWebinars()
    {
        return $this->hasMany(Webinar::className(), ['kategori_id' => 'id']);
    }
}
