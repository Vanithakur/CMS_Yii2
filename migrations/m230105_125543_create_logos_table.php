<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%logos}}`.
 */
class m230105_125543_create_logos_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%logos}}', [
            'id' => $this->primaryKey(),
            'logo_image' => $this->string()->notNull(),
            'logo_word' => $this->string()->notNull(),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),         
           
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%logos}}');
    }
}
