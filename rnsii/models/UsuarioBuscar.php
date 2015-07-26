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
            [['id', 'usuario_id_activo'], 'integer'],
            [['nombres', 'apellidos','role_id', 'cedula', 'cargo', 'correo', 'tlf', 'username', 'password', 'fecha_registro', 'fecha_login','institucion_id'], 'safe'],
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
        
        $query->joinWith('institucion');
        $query->joinWith('role');
        
        $query->andFilterWhere([
            'id' => $this->id,
            //'institucion_id' => $this->institucion_id,
            'fecha_registro' => $this->fecha_registro,
            'usuario_id_activo' => $this->usuario_id_activo,
            'fecha_login' => $this->fecha_login,
            //'role_id' => $this->role_id,
        ]);

        $query->andFilterWhere(['like', 'nombres', $this->nombres])
            ->andFilterWhere(['like', 'apellidos', $this->apellidos])
            ->andFilterWhere(['like', 'cedula', $this->cedula])
            ->andFilterWhere(['like', 'cargo', $this->cargo])
            ->andFilterWhere(['like', 'correo', $this->correo])
            ->andFilterWhere(['like', 'tlf', $this->tlf])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'institucion.nombre_institucion', $this->institucion_id])
            ->andFilterWhere(['like', 'role.nombre_role', $this->role_id])
            ->andFilterWhere(['like', 'password', $this->password]);

        return $dataProvider;
    }
}
