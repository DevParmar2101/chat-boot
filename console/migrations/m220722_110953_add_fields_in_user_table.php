<?php

use yii\db\Migration;

/**
 * Class m220722_110953_add_fields_in_user_table
 */
class m220722_110953_add_fields_in_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%user}}','first_name',$this->string(125));
        $this->addColumn('{{%user}}','last_name',$this->string(125));
        $this->addColumn('{{%user}}','gender',$this->tinyInteger(1));
        $this->addColumn('{{%user}}','age',$this->tinyInteger(4));
        $this->addColumn('{{%user}}','profile_image',$this->string(255));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220722_110953_add_fields_in_user_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220722_110953_add_fields_in_user_table cannot be reverted.\n";

        return false;
    }
    */
}
