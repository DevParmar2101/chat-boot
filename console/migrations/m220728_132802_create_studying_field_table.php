<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%studying_branch_name}}`.
 */
class m220728_132802_create_studying_field_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%studying_field_name}}', [
            'id' => $this->primaryKey(),
            'university_id' => $this->integer(11),
            'field_name' => $this->string(255),
            'user_id' => $this->integer(11),
            'status'  => $this->tinyInteger(2),
            'created_at' => $this->timestamp(),
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
