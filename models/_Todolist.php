<?php

namespace app\models;
use  yii\db\ActiveRecord;


class Tudolist extends ActiveRecord
{
     /**
     *  Método estático que retorna o nome da tabela
     * @return string table
     */
    public static function tableName()
    {
        return 'todolist';
    } 

    /**
     * Método responsável por realizar a validação dos dados recebidos, 
     * OBS: O tipo safe, informa que as colunas que podem ser informado os dados do formulário (Massive Assignment) atribuição da massiva
     */

     public function rules()
     {
         //informa que os dados podem ser gravados ao utilizar o   $model->attributes no controller
         return [
            [['name','due_date'], 'safe'],
            [['name','due_date'], 'required'],
            [['name'], 'string', 'max' => 255], 
         ];
     }
}
