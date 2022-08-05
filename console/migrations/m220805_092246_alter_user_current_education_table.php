<?php

use yii\db\Migration;

/**
 * Class m220805_092246_alter_user_current_education_table
 */
class m220805_092246_alter_user_current_education_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $query =<<<EOF
ALTER TABLE `user_current_education` ADD `first_name` VARCHAR(125) NOT NULL AFTER `created_at`, ADD `last_name` VARCHAR(125) NOT NULL AFTER `first_name`, ADD `mobile_number` INT(15) NOT NULL AFTER `last_name`; 
EOF;
        $this->execute($query);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220805_092246_alter_user_current_education_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220805_092246_alter_user_current_education_table cannot be reverted.\n";

        return false;
    }
    */
}
