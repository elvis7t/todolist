<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%todolist}}`.
 */
class m221207_192015_create_todolist_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%todolist}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'duo_date' => $this->date()->notNull(),
            'created_at' => $this->integer()->unsigned(),
            'updated_at' => $this->integer()->unsigned(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%todolist}}');
    }
}
