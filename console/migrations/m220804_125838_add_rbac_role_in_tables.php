<?php

use yii\db\Migration;

/**
 * Class m220804_125838_add_rbac_role_in_tables
 */
class m220804_125838_add_rbac_role_in_tables extends Migration
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
        echo "m220804_125838_add_rbac_role_in_tables cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220804_125838_add_rbac_role_in_tables cannot be reverted.\n";

        return false;
    }
    */
}
