<?php
namespace common\models;

use Yii;

/**
 * Login form
 */
class Role extends \yii\rbac\Role
{
    const TYPE_ROLE = [
        'super_admin' => 'Super Administrator',
        'admin' => 'Administrator',
        'user' => 'User',
    ];

    const TYPE_ROLE_KEY = [
        'super_admin'=>'super_admin',
        'admin'=>'admin',
        'user'=>'user',
    ];


    public static function getRole($id, $type='label'){
        $roles = self::TYPE_ROLE;
        $role = array_keys(Yii::$app->authManager->getRolesByUser($id));
        if(isset($role[0])){
            if($type=='label'){
                return $roles[$role[0]];
            }else{
                return $role[0];
            }
        }
        return 'Unknown';
    }

    public static function getList(){
        return [
            'admin' => 'Administrator',
            'user' => 'User',
        ];
    }
}