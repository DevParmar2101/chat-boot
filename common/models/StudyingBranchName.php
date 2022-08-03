<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "studying_branch_name".
 *
 * @property int $id
 * @property int|null $field_id
 * @property string|null $branch_name
 * @property int|null $user_id
 * @property int|null $status
 * @property string $created_at
 *
 * @property StudyingFieldName $field
 * @property User $user
 * @property UserCurrentEducation[] $userCurrentEducations
 */
class StudyingBranchName extends BaseActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'studying_branch_name';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['field_id', 'user_id', 'status'], 'integer'],
            [['created_at'], 'safe'],
            [['branch_name'], 'string', 'max' => 255],
            [['field_id'], 'exist', 'skipOnError' => true, 'targetClass' => StudyingFieldName::className(), 'targetAttribute' => ['field_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'field_id' => 'Field Name',
            'branch_name' => 'Branch Name',
            'user_id' => 'User ID',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }

    /**
     * Gets query for [[Field]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getField()
    {
        return $this->hasOne(StudyingFieldName::className(), ['id' => 'field_id']);
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
     * Gets query for [[UserCurrentEducations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUserCurrentEducations()
    {
        return $this->hasMany(UserCurrentEducation::className(), ['studying_branch_id' => 'id']);
    }

    public function getStudyFieldName()
    {
        return ArrayHelper::map(StudyingFieldName::find()->where(['status'=> BaseActiveRecord::STATUS_ACTIVE])->all(),'id','field_name');
    }

}
