<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%appointments}}`.
 */
class m230105_125224_create_appointments_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%appointments}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'contact_number' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'description' => $this->text()->notNull(),
            'date' => $this->string()->notNull(),
            'time' => $this->string()->notNull(),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),  
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%appointments}}');
    }
}
