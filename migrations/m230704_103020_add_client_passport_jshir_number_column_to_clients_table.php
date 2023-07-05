<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%clients}}`.
 */
class m230704_103020_add_client_passport_jshir_number_column_to_clients_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%clients}}', 'client_passport_jshir_number', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%clients}}', 'client_passport_jshir_number');
    }
}
