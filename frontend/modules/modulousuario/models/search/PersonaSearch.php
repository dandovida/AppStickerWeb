<?php

namespace frontend\modules\modulousuario\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\modulousuario\models\Persona;

/**
 * PersonaSearch represents the model behind the search form about `frontend\modules\modulousuario\models\Persona`.
 */
class PersonaSearch extends Persona
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_Persona', 'Cedula', 'Telefono', 'Celular', 'Id_Empresa', 'Nr_Solicitud', 'Id_Rol'], 'integer'],
            [['Nombres', 'Apellidos', 'Email'], 'safe'],
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
        $query = Persona::find();

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
            'Id_Persona' => $this->Id_Persona,
            'Cedula' => $this->Cedula,
            'Telefono' => $this->Telefono,
            'Celular' => $this->Celular,
            'Id_Empresa' => $this->Id_Empresa,
            'Nr_Solicitud' => $this->Nr_Solicitud,
            'Id_Rol' => $this->Id_Rol,
        ]);

        $query->andFilterWhere(['like', 'Nombres', $this->Nombres])
            ->andFilterWhere(['like', 'Apellidos', $this->Apellidos])
            ->andFilterWhere(['like', 'Email', $this->Email]);

        return $dataProvider;
    }
}
