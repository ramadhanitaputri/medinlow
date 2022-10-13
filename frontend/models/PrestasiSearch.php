<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Prestasi;

/**
 * PrestasiSearch represents the model behind the search form of `frontend\models\Prestasi`.
 */
class PrestasiSearch extends Prestasi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_prestasi'], 'integer'],
            [['nama_prestasi', 'gambar_prestasi', 'deskripsi_prestasi'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Prestasi::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_prestasi' => $this->id_prestasi,
        ]);

        $query->andFilterWhere(['like', 'nama_prestasi', $this->nama_prestasi])
            ->andFilterWhere(['like', 'gambar_prestasi', $this->gambar_prestasi])
            ->andFilterWhere(['like', 'deskripsi_prestasi', $this->deskripsi_prestasi]);

        return $dataProvider;
    }
}
