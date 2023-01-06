<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%reviews}}`.
 */
class m230105_124840_create_reviews_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%reviews}}', [
            'id' => $this->primaryKey(),
            'user_name' => $this->string()->notNull(),
            'link' => $this->text()->notNull(),
            'thumbnail' => $this->string()->notNull(),
            'reviews' => $this->integer()->notNull(),
            'rating' => $this->integer()->notNull(),
            'date' => $this->string()->notNull(),
            'comments' => $this->text()->notNull(),
            'likes' => $this->integer()->notNull(),
            'status' => $this->integer()->notNull(),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),  
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%reviews}}');
    }
}
