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
            'education_type_id' => $this->integer(11),
            'university_id' => $this->integer(11),
            'studying_field_id' => $this->integer(11)->defaultValue(null),
            'studying_branch_id' => $this->integer(11)->defaultValue(null),
            'last_year_percentage' => $this->string(11),
            'user_id' => $this->integer(11),
            'created_at' => $this->timestamp()
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
