<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%studying_branch_name}}`.
 */
class m220728_133822_create_studying_branch_name_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%studying_branch_name}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%studying_branch_name}}');
    }
}
