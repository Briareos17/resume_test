<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%frameworks}}`.
 */
class m220428_091247_create_frameworks_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%frameworks}}', [
            'id' => $this->primaryKey()->unsigned(),
            'name' => $this->string()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%frameworks}}');
    }
}
