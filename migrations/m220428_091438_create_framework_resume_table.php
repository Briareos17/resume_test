<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%framework_resume}}`.
 */
class m220428_091438_create_framework_resume_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%framework_resume}}', [
            'framework_id' => $this->integer()->unsigned(),
            'resume_id' => $this->integer()->unsigned(),
        ]);

        $this->addPrimaryKey(
            'framework_resume_primary',
            '{{%framework_resume}}',
            ['framework_id', 'resume_id']
        );

        $this->addForeignKey(
            'fk-framework_resume-framework_id',
            'framework_resume',
            'framework_id',
            'frameworks',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-framework_resume-resume_id',
            'framework_resume',
            'resume_id',
            'resumes',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%framework_resume}}');
    }
}
