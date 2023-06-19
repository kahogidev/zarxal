<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%tours}}`.
 */
class m230619_115006_add_position_column_to_tours_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%tours}}', 'updated_at', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%tours}}', 'updated_at');
    }
}
