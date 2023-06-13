<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tours}}`.
 */
class m230613_135033_create_tours_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tours}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull(),
            'description' => $this->string(255)->null(),
            'category_id' => $this->integer()->notNull(),
            'body' => $this->text(),
            'created_date' => $this->dateTime()->notNull(),
            'updated_date' => $this->dateTime()->notNull(),
            'images' => $this->string(255)->null(),
            'price'=> $this->integer(),
            'period'=> $this->string(255),
            'status' => $this->tinyInteger()->defaultValue(1),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tours}}');
    }
}
