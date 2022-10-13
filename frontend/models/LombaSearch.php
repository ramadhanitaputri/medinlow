<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Lomba;

/**
 * LombaSearch represents the model behind the search form of `frontend\models\Lomba`.
 */
class LombaSearch extends Lomba
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_lomba', 'kategori_id'], 'integer'],
            [['nama_lomba', 'gambar_lomba', 'deskripsi_lomba'], 'safe'],
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
        $query = Lomba::find();

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
            'id_lomba' => $this->id_lomba,
            'kategori_id' => $this->kategori_id,
        ]);

        $query->andFilterWhere(['like', 'nama_lomba', $this->nama_lomba])
            ->andFilterWhere(['like', 'gambar_lomba', $this->gambar_lomba])
            ->andFilterWhere(['like', 'deskripsi_lomba', $this->deskripsi_lomba]);

        return $dataProvider;
    }
}
