<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%schedule_by_days}}`.
 */
class m230105_132932_create_schedule_by_days_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%schedule_by_days}}', [
            'id' => $this->primaryKey(),
            'day' => $this->string(32)->notNull(),
            'first_shift' => $this->string(64)->notNull(),
            'second_shift' => $this->string(64)->notNull(),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),  
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%schedule_by_days}}');
    }
}
