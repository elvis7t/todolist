<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Todolist;

/**
 * TodolistSearch representa o modelo por trás do formulário de pesquisa de `app\models\Todolist`.
 */
class TodolistSearch extends Todolist
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name','due_date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // ignorar a implementação de scenarios () na classe pai
        return Model::scenarios();
    }

    /**
     * Cria instância do provedor de dados com consulta de pesquisa aplicada
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Todolist::find();

        // adicione condições que devem sempre se aplicar aqui

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // descomente a linha a seguir se não quiser retornar nenhum registro quando a validação falhar
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
              ->andFilterWhere(['like', 'due_date', $this->due_date]);

        return $dataProvider;
    }
}
