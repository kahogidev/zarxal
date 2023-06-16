<?php

use yii\db\Migration;

/**
 * Handles dropping columns from table `{{%tasks}}`.
 */
class m230616_134735_drop_position_column_from_tasks_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('{{%tasks}}', 'created_date');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('{{%tasks}}', 'created_date', $this->dateTime());
    }
}
