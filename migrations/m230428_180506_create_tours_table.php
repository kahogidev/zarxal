<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tours}}`.
 */
class m230428_180506_create_tours_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tours}}', [
            'id' => $this->primaryKey(),
            'title_uz' => $this->string(255)->notNull(),
            'title_ru' => $this->string(255)->notNull(),
            'title_en' => $this->string(255)->notNull(),
            'description_uz' => $this->string(255)->null(),
            'description_ru' => $this->string(255)->null(),
            'description_en' => $this->string(255)->null(),
            'category_id' => $this->integer()->notNull(),
            'body_uz' => $this->text(),
            'body_ru' => $this->text(),
            'body_en' => $this->text(),
            'created_date' => $this->dateTime()->notNull(),
            'updated_date' => $this->dateTime()->notNull(),
            'seen_count' => $this->integer()->defaultValue(0),
            'images' => $this->string(255)->null(),
            'price'=> $this->integer(),
            'period'=> $this->string(255),
            'status' => $this->tinyInteger()->defaultValue(1),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tours}}');
    }
}
