<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kategori_lomba".
 *
 * @property int $id
 * @property string $nama
 * @property int $parent_kategori
 *
 * @property Lomba[] $lombas
 */
class KategoriLomba extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kategori_lomba';
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
     * Gets query for [[Lombas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLombas()
    {
        return $this->hasMany(Lomba::className(), ['kategori_id' => 'id']);
    }
}
