<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Institucion;

/**
 * InstitucionBuscar represents the model behind the search form about `app\models\Institucion`.
 */
class InstitucionBuscar extends Institucion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['nombre_institucion', 'rif_institucion', 'sigla_institucion', 'direccion_institucion', 'tlf_contacto_institucion', 'nombre_solicitante_institucion', 'correo_institucion', 'tlf_institucion'], 'safe'],
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
            ->andFilterWhere(['like', 'rif_institucion', $this->rif_institucion])
            ->andFilterWhere(['like', 'sigla_institucion', $this->sigla_institucion])
            ->andFilterWhere(['like', 'direccion_institucion', $this->direccion_institucion])
            ->andFilterWhere(['like', 'tlf_contacto_institucion', $this->tlf_contacto_institucion])
            ->andFilterWhere(['like', 'nombre_solicitante_institucion', $this->nombre_solicitante_institucion])
            ->andFilterWhere(['like', 'correo_institucion', $this->correo_institucion])
            ->andFilterWhere(['like', 'tlf_institucion', $this->tlf_institucion]);

        return $dataProvider;
    }
}
