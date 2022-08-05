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
