<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Usuario;

/**
 * UsuarioBuscar represents the model behind the search form about `app\models\Usuario`.
 */
class UsuarioBuscar extends Usuario
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'institucion_id', 'cargo_id', 'usuario_id_activo', 'role_id'], 'integer'],
            [['nombres', 'apellidos', 'cedula', 'correo', 'tlf', 'username', 'password', 'fecha_registro', 'fecha_login'], 'safe'],
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
        $query = Usuario::find();

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
            'institucion_id' => $this->institucion_id,
            'cargo_id' => $this->cargo_id,
            'fecha_registro' => $this->fecha_registro,
            'usuario_id_activo' => $this->usuario_id_activo,
            'fecha_login' => $this->fecha_login,
            'role_id' => $this->role_id,
        ]);

        $query->andFilterWhere(['like', 'nombres', $this->nombres])
            ->andFilterWhere(['like', 'apellidos', $this->apellidos])
            ->andFilterWhere(['like', 'cedula', $this->cedula])
            ->andFilterWhere(['like', 'correo', $this->correo])
            ->andFilterWhere(['like', 'tlf', $this->tlf])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'password', $this->password]);

        return $dataProvider;
    }
}
