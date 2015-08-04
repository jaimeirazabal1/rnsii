<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Usuario;

/**
 * CountrySearch represents the model behind the search form about `app\models\Country`.
 */
class UsuarioSearch extends Usuario
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['institucion_id', 'nombres', 'apellidos', 'cedula', 'cargo', 'correo', 'tlf', 'username', 'password', 'access_token', 'auth_key', 'fecha_registro', 'role_id','repeat_password'], 'required','message'=>'Este Campo no puede ser nulo'],
            [['institucion_id', 'usuario_id_activo', 'role_id'], 'integer'],
            [['fecha_registro', 'fecha_login'], 'safe'],
            [['nombres', 'apellidos', 'username'], 'string', 'max' => 60],
            [['cedula'], 'string', 'max' => 10],
            [['cargo', 'password', 'access_token', 'auth_key'], 'string', 'max' => 255],
            [['correo'], 'string', 'max' => 50],
            [['tlf'], 'string', 'max' => 11],
            [['cedula'], 'unique',"message"=>"El número de cédula ya fue usado"],
            [['correo'], 'unique',"message"=>"El correo de cédula ya fue usado"],
            [['tlf'], 'unique',"message"=>"El número de teléfono ya fue usado"],
            [['username'], 'unique','message'=>'El nombre de usuario ya fue usado'],
            ['repeat_password', 'compare', 'compareAttribute'=>'password','message'=>"La contraseña debe coincidir exactamente"],
            ['password, repeat_password', 'required', 'on'=>'insert'],
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
        $query = Country::find();

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
            'nombres' => $this->nombres,
            'apellidos' => $this->apellidos,
            'cedula' => $this->cedula,
            'cargo' => $this->correo,
            'tlf' => $this->tlf,
            'username' => $this->username,
            'fecha_registro' => $this->username,
        ]);

        $query->andFilterWhere(['like', 'nombres', $this->nombres])
            ->andFilterWhere(['like', 'apellidos', $this->apellidos])
            ->andFilterWhere(['like', 'cedula', $this->cedula])
            ->andFilterWhere(['like', 'cargo', $this->cargo])
            ->andFilterWhere(['like', 'tlf', $this->tlf])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'fecha_registro', $this->fecha_registro]);

        return $dataProvider;
    }
}
