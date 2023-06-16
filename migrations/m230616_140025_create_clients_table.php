<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%clients}}`.
 */
class m230616_140025_create_clients_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%clients}}', [
            'id' => $this->primaryKey(),
            'client_lastname'=> $this->string(255)->notNull(),
            'client_firstname'=> $this->string(255)->notNull(),
            'client_passport_series'=> $this->string(255)->notNull(),
            'client_passport_number'=> $this->integer()->notNull(),
            'client_phone'=>$this->integer()->notNull(),
            'tour_id'=> $this->integer()->notNull(),
            'sum_pay'=>$this->integer()->notNull(),
            'sum_cash'=>$this->integer()->notNull(),
            'sum_credit'=>$this->integer()->notNull(),
            'created_at'=>$this->integer()->notNull(),
            'updated_at'=>$this->integer()->notNull(),
            'status'=>$this->integer()->defaultValue(1),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%clients}}');
    }
}
