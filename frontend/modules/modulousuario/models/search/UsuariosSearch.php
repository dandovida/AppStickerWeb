<?php

namespace frontend\modules\modulousuario\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\modulousuario\models\Usuarios;

/**
 * UsuariosSearch represents the model behind the search form about `frontend\modules\modulousuario\models\Usuarios`.
 */
class UsuariosSearch extends Usuarios
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_Usuarios', 'PrimeraVez'], 'integer'],
            [['Login', 'Password'], 'safe'],
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
        $query = Usuarios::find();

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
            'Id_Usuarios' => $this->Id_Usuarios,
            'PrimeraVez' => $this->PrimeraVez,
        ]);

        $query->andFilterWhere(['like', 'Login', $this->Login])
            ->andFilterWhere(['like', 'Password', $this->Password]);

        return $dataProvider;
    }
}
