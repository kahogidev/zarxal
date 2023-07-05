<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%clients}}`.
 */
class m230704_102430_add_client_passport_given_by_column_to_clients_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%clients}}', 'client_passport_given_by', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%clients}}', 'client_passport_given_by');
    }
}
