<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Webinar;

/**
 * WebinarSearch represents the model behind the search form of `backend\models\Webinar`.
 */
class WebinarSearch extends Webinar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_webinar', 'kategori_id'], 'integer'],
            [['nama_webinar', 'gambar_webinar', 'deskripsi_webinar'], 'safe'],
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
        $query = Webinar::find();

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
            'id_webinar' => $this->id_webinar,
            'kategori_id' => $this->kategori_id,
        ]);

        $query->andFilterWhere(['like', 'nama_webinar', $this->nama_webinar])
            ->andFilterWhere(['like', 'gambar_webinar', $this->gambar_webinar])
            ->andFilterWhere(['like', 'deskripsi_webinar', $this->deskripsi_webinar]);

        return $dataProvider;
    }
}
