<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%resumes}}`.
 */
class m220428_085938_create_resumes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%resumes}}', [
            'id' => $this->primaryKey()->unsigned(),
            'name' => $this->string()->notNull(),
            'birthday' => $this->date()->notNull(),
            'experience_years' => $this->tinyInteger()->notNull()->defaultValue(0),
            'resume_path' => $this->string(),
            'comment' => $this->text(),
            'created_at' => $this->dateTime()->null(),
            'updated_at' => $this->dateTime()->null()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%resumes}}');
    }
}
