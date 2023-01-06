<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%patients}}`.
 */
class m230105_130239_create_patients_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%patients}}', [
            'id' => $this->primaryKey(),
            'registration_no' => $this->integer()->notNull(),
            'name' => $this->string(50)->notNull(),
            'mobile' => $this->string(15)->notNull(),
            'disease' => $this->string(200)->notNull(),
            'age' => $this->integer(3)->notNull(),
            'gender' => $this->string(10)->notNull(),
            'address' => $this->string()->notNull(),
            'city' => $this->string(20)->notNull(),
            'state' => $this->string(20)->notNull(),
            'charge' => $this->integer(20)->notNull(),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%patients}}');
    }
}
