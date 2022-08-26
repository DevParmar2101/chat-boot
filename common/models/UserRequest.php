<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "user_request".
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $user_requested_to_id
 * @property int|null $status
 * @property string|null $requested_at
 * @property string|null $accepted_at
 *
 * @property User $user
 * @property User $userRequestedTo
 */
class UserRequest extends BaseActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_request';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'user_requested_to_id', 'status'], 'integer'],
            [['requested_at', 'accepted_at'], 'safe'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['user_requested_to_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_requested_to_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'user_requested_to_id' => 'User Requested To ID',
            'status' => 'Status',
            'requested_at' => 'Requested At',
            'accepted_at' => 'Accepted At',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * Gets query for [[UserRequestedTo]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUserRequestedTo()
    {
        return $this->hasOne(User::className(), ['id' => 'user_requested_to_id']);
    }
}
