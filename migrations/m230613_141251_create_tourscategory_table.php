<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tourscategory}}`.
 */
class m230613_141251_create_tourscategory_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tourscategory}}', [
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
        $this->dropTable('{{%tourscategory}}');
    }
}
