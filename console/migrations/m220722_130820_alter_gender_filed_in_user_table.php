<?php

use yii\db\Migration;

/**
 * Class m220722_130820_alter_gender_filed_in_user_table
 */
class m220722_130820_alter_gender_filed_in_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $query =<<<EOF
ALTER TABLE `user` CHANGE `age` `age` INT(100) NULL DEFAULT NULL; 
EOF;
        $this->execute($query);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220722_130820_alter_gender_filed_in_user_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220722_130820_alter_gender_filed_in_user_table cannot be reverted.\n";

        return false;
    }
    */
}
