<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Institucion;

/**
 * InstitucionSearch represents the model behind the search form about `app\models\Institucion`.
 */
class InstitucionSearch extends Institucion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['nombre_institucion', 'rif', 'sigla', 'tlf_contacto', 'nombre_solicitante', 'correo_solicitante', 'numero_tlf', 'direccion'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Institucion::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'nombre_institucion', $this->nombre_institucion])
            ->andFilterWhere(['like', 'rif', $this->rif])
            ->andFilterWhere(['like', 'sigla', $this->sigla])
            ->andFilterWhere(['like', 'tlf_contacto', $this->tlf_contacto])
            ->andFilterWhere(['like', 'nombre_solicitante', $this->nombre_solicitante])
            ->andFilterWhere(['like', 'correo_solicitante', $this->correo_solicitante])
            ->andFilterWhere(['like', 'numero_tlf', $this->numero_tlf])
            ->andFilterWhere(['like', 'direccion', $this->direccion]);

        return $dataProvider;
    }
}
