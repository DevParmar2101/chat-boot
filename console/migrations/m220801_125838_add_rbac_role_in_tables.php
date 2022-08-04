<?php

use common\models\Role;
use common\models\User;
use yii\db\Migration;

/**
 * Class m220801_125838_add_rbac_role_in_tables
 */
class m220801_125838_add_rbac_role_in_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $auth = Yii::$app->authManager;
        $admin = $auth->createRole(Role::TYPE_ROLE_KEY['admin']);
        $auth->add($admin);
        $user = $auth->createRole(Role::TYPE_ROLE_KEY['user']);
        $auth->add($user);

        $time = time();
        $this->batchInsert(
            'user',
            ['username', 'first_name', 'last_name', 'mobile_number', 'profile_pic', 'promo_code', 'auth_key', 'verification_token', 'password_hash', 'password_reset_token', 'email', 'status', 'created_at', 'updated_at'],
            array(
                array('admin', 'admin', 'name', NULL, NULL, 'admin_master123', 'O-oDBLVlj7obhJzovnP15-Soz9iUB', '', '$2y$13$.aRQImtxqZur2mQb0jivKugRBwZnvfu1GP2v1fNbC7P/EjArPLnl.', NULL, 'admin@gmail.com', '10', $time, $time),
                array('user', 'user', 'name', NULL, NULL, 'user_master123', 'O-oDBLVlj7obhJzovnP15-Soz', '', '$2y$13$.aRQImtxqZur2mQb0jivKugRBwZnvfu1GP2v1fNbC7P/EjArPLnl.', NULL, 'user@gmail.com', '10', $time, $time),

            )
        );

        $admin_id = User::findOne(['email' => 'admin@gmail.com'])->id;
        $auth->assign($admin, $admin_id);
        $user_id = User::findOne(['email' => 'user@gmail.com'])->id;
        $auth->assign($user, $user_id);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220801_125838_add_rbac_role_in_tables cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220801_125838_add_rbac_role_in_tables cannot be reverted.\n";

        return false;
    }
    */
}
