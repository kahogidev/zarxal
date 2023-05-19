<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%faq}}`.
 */
class m230430_172750_create_faq_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%faq}}', [
            'id' => $this->primaryKey(),
            'question' => $this->text(),
            'answer' => $this->text(),
            'status' => $this->tinyInteger()->defaultValue(1)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%faq}}');
    }
}
