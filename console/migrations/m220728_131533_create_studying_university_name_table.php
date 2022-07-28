<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%studying_university_name}}`.
 */
class m220728_131533_create_studying_university_name_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%studying_university_name}}', [
            'id' => $this->primaryKey(),
            'type_id' => $this->integer(11),
            'university_name' => $this->string(255)->defaultValue(null),
            'status' => $this->tinyInteger(2),
            'user_id' => $this->integer(11),
            'created_at' => $this->timestamp()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%studying_university_name}}');
    }
}
