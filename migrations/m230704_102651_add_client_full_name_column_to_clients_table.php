<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%clients}}`.
 */
class m230704_102651_add_client_full_name_column_to_clients_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%clients}}', 'client_full_name', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%clients}}', 'client_full_name');
    }
}
