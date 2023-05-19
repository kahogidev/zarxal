<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tasks}}`.
 */
class m230428_171019_create_tasks_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tasks}}', [
            'id' => $this->primaryKey(),
            'created_date' => $this->dateTime()->notNull(),
            'updated_date' => $this->dateTime(),
            'begin_date' => $this->dateTime()->notNull(),
            'ended_date'=> $this->dateTime()->notNull(),
            'employee_id'=> $this->integer(),
            'task_name'=> $this->string(255)->notNull(),
            'status' => $this->integer()->defaultValue(1) ,

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tasks}}');
    }
}
