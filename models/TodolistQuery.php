<?php

namespace app\models;

/**
 * Esta é a classe  ActiveQuery para [[Todolist]].
 *
 * @see Todolist
 */
class TodolistQuery extends \yii\db\ActiveQuery
{
    
    /**
     * {@inheritdoc}
     * @return Todolist[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Todolist|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
