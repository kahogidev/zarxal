<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%sponsors}}`.
 */
class m230430_173550_create_sponsors_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%sponsors}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'link' => $this->string(255)->notNull(),
            'images' => $this->string(255)->notNull(),
            'status'=>$this->tinyInteger()->defaultValue(1),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%sponsors}}');
    }
}
