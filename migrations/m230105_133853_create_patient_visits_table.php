<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%patient_visits}}`.
 */
class m230105_133853_create_patient_visits_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%patient_visits}}', [
            'id' => $this->primaryKey(),
            'patient_id' => $this->integer(20)->notNull(),
            'registration_no' => $this->integer(20)->notNull(),
            'visit_date' => $this->string(64)->notNull(),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(), 
        ]);
        $this->createIndex(
            '{{%idx-patient_visits-patient_id}}',
            '{{%patient_visits}}',
            'patient_id'
        );
        
        $this->addForeignKey(
            '{{%fk-products-patient_id}}',
            '{{%patient_visits}}',
            'patient_id',
            '{{%patients}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%patient_visits}}');
    }
}
