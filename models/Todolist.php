<?php

namespace app\models;

use Yii;

/**
 * Esta é a classe de modelo para a tabela "Todolist".
 *
 * @property int $id
 * @property string $name
 * @property string $due_date
 */
class Todolist extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'todolist';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name','due_date'], 'required'],   
            [['name'], 'string', 'max' => 255],         
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'due_date' => 'Data',
        ];
    }

    /**
     * {@inheritdoc}
     * @return TodolistQuery a consulta ativa usada por esta classe AR.
     */
    public static function find()
    {
        return new TodolistQuery(get_called_class());
    }
}
