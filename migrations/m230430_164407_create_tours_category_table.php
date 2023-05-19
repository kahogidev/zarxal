<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tours_category}}`.
 */
class m230430_164407_create_tours_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tours_category}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'images'=> $this->string(255)->notNull(),
            'status' => $this->tinyInteger()->defaultValue(1),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tours_category}}');
    }
}
