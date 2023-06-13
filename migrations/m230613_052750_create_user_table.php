<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m230613_052750_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'first_name'=> $this->string(255)->notNull(),
            'last_name'=> $this->string(255)->notNull(),
            'phone'=> $this->integer(),
            'telegram'=> $this->integer()->notNull(),
            'position_id'=> $this->integer()->notNull(),
            'mahalla_id'=> $this->string(255),
            'status'=> $this->integer()->defaultValue(1),
            'creator'=> $this->integer()->notNull(),
            'image'=> $this->string()->notNull(),
            'password'=> $this->string(255)->notNull(),
            'user_name'=> $this->string(255)->unique()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }
}
