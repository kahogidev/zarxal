<?php

use yii\db\Migration;

/**
 * Handles dropping columns from table `{{%tours}}`.
 */
class m230619_113510_drop_position_column_from_tours_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('{{%tours}}', 'created_date');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('{{%tours}}', 'created_date', $this->datetime()->notnull());
    }
}
