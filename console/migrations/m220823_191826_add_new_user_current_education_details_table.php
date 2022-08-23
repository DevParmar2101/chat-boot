<?php

use yii\db\Migration;

/**
 * Class m220823_191826_add_new_user_current_education_details_table
 */
class m220823_191826_add_new_user_current_education_details_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220823_191826_add_new_user_current_education_details_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220823_191826_add_new_user_current_education_details_table cannot be reverted.\n";

        return false;
    }
    */
}
