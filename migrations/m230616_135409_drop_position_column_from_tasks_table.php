<?php

use yii\db\Migration;

/**
 * Handles dropping columns from table `{{%tasks}}`.
 */
class m230616_135409_drop_position_column_from_tasks_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('{{%tasks}}', 'begin_date');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('{{%tasks}}', 'begin_date', $this->dateTime());
    }
}
