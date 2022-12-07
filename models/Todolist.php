<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "todolist".
 *
 * @property int $id
 * @property string $name
 * @property string $duo_date
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Todolist extends \yii\db\ActiveRecord
{
    /**
     * Static method that returns the table name
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'todolist';
    }

    /**
     * Method responsible for validating the received data
     * {@inheritdoc}
     */
    public function rules()
    {
        //informs that the data can be written when using the $model->attributes in the controller
        return [
            [['name', 'duo_date'], 'required'],
            [['duo_date'], 'safe'],
            [['created_at', 'updated_at'], 'integer'],
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
            'duo_date' => 'Duo Date',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
