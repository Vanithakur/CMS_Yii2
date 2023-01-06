<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%home_content_limits}}`.
 */
class m230105_125753_create_home_content_limits_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%home_content_limits}}', [
            'id' => $this->primaryKey(),
            'section_name' => $this->string()->notNull(),
            'content_limit' => $this->integer()->notNull(),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),          
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%home_content_limits}}');
    }
}
