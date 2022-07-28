<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%studying_type}}`.
 */
class m220728_131127_create_studying_type_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%studying_type}}', [
            'id' => $this->primaryKey(),
            'studying_type_name' => $this->string(255),
            'user_id' => $this->integer(11),
            'status' => $this->tinyInteger(2),
            'created_at' => $this->timestamp()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%studying_type}}');
    }
}
