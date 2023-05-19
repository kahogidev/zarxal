<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%positions}}`.
 */
class m230428_170510_create_positions_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%positions}}', [
            'id' => $this->primaryKey(),
            'position_name'=> $this->string(255),
            'status'=> $this->integer()->defaultValue(1),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%positions}}');
    }
}
