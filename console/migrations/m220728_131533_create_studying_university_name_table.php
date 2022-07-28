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
