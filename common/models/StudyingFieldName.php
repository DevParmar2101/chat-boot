<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "studying_field_name".
 *
 * @property int $id
 * @property int|null $university_id
 * @property string|null $field_name
 * @property int|null $user_id
 * @property int|null $status
 * @property string $created_at
 *
 * @property StudyingBranchName[] $studyingBranchNames
 * @property StudyingUniversityName $university
 * @property User $user
 * @property UserCurrentEducation[] $userCurrentEducations
 */
class StudyingFieldName extends BaseActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'studying_field_name';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['university_id', 'user_id', 'status'], 'integer'],
            [['created_at'], 'safe'],
            [['field_name'], 'string', 'max' => 255],
            [['university_id'], 'exist', 'skipOnError' => true, 'targetClass' => StudyingUniversityName::className(), 'targetAttribute' => ['university_id' => 'id']],
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
            'university_id' => 'University ID',
            'field_name' => 'Field Name',
            'user_id' => 'User ID',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }

    /**
     * Gets query for [[StudyingBranchNames]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudyingBranchNames()
    {
        return $this->hasMany(StudyingBranchName::className(), ['field_id' => 'id']);
    }

    /**
     * Gets query for [[University]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUniversity()
    {
        return $this->hasOne(StudyingUniversityName::className(), ['id' => 'university_id']);
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
        return $this->hasMany(UserCurrentEducation::className(), ['studying_field_id' => 'id']);
    }
}
