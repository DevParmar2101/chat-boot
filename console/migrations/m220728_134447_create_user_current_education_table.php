<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user_current_education}}`.
 */
class m220728_134447_create_user_current_education_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user_current_education}}', [
            'id' => $this->primaryKey(),
            'education_type' => $th
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user_current_education}}');
    }
}
