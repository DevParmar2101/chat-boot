<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user_request}}`.
 */
class m220824_182852_create_user_request_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user_request}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(11),
            'user_requested_to_id' => $this->integer(11),
            'status' => $this->tinyInteger(2),
            'requested_at' => $this->dateTime(),
            'accepted_at' => $this->dateTime()
        ]);
        $this->addForeignKey('fk-user_request_user_id', 'user_request', 'user_id', 'user', 'id');
        $this->addForeignKey('fk-user_request_user_requested_to_id', 'user_request', 'user_requested_to_id', 'user', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user_request}}');
    }
}
