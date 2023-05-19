<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mahalla}}`.
 */
class m230428_172839_create_mahalla_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mahalla}}', [
            'id' => $this->primaryKey(),
            'name'=> $this->string(255),
            'status'=> $this->integer()->defaultValue(1),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mahalla}}');
    }
}
