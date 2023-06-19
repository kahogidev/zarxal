<?php

use yii\db\Migration;

/**
 * Handles dropping columns from table `{{%tours}}`.
 */
class m230619_113608_drop_position_column_from_tours_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('{{%tours}}', 'updated_date');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('{{%tours}}', 'updated_date', $this->datetime()->notnull());
    }
}
