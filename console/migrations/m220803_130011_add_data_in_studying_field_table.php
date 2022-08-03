<?php

use yii\db\Migration;

/**
 * Class m220803_130011_add_data_in_studying_field_table
 */
class m220803_130011_add_data_in_studying_field_table extends Migration
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
        echo "m220803_130011_add_data_in_studying_field_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220803_130011_add_data_in_studying_field_table cannot be reverted.\n";

        return false;
    }
    */
}
