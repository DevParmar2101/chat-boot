<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user_current_education".
 *
 * @property int $id
 * @property int|null $education_type_id
 * @property int|null $university_id
 * @property int|null $studying_field_id
 * @property int|null $studying_branch_id
 * @property string|null $last_year_percentage
 * @property int|null $user_id
 * @property string $created_at
 * @property string $first_name
 * @property string $last_name
 * @property string $mobile_number
 *
 * @property StudyingType $educationType
 * @property StudyingBranchName $studyingBranch
 * @property StudyingFieldName $studyingField
 * @property StudyingUniversityName $university
 * @property User $user
 */
class UserCurrentEducation extends BaseActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_current_education';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['education_type_id', 'university_id', 'studying_field_id', 'studying_branch_id', 'user_id','first_name','last_name','mobile_number'], 'integer'],
            [['created_at'], 'safe'],
            [['last_year_percentage'], 'string', 'max' => 11],
            [['education_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => StudyingType::className(), 'targetAttribute' => ['education_type_id' => 'id']],
            [['university_id'], 'exist', 'skipOnError' => true, 'targetClass' => StudyingUniversityName::className(), 'targetAttribute' => ['university_id' => 'id']],
            [['studying_field_id'], 'exist', 'skipOnError' => true, 'targetClass' => StudyingFieldName::className(), 'targetAttribute' => ['studying_field_id' => 'id']],
            [['studying_branch_id'], 'exist', 'skipOnError' => true, 'targetClass' => StudyingBranchName::className(), 'targetAttribute' => ['studying_branch_id' => 'id']],
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
            'education_type_id' => 'Education Type ID',
            'university_id' => 'University ID',
            'studying_field_id' => 'Studying Field ID',
            'studying_branch_id' => 'Studying Branch ID',
            'last_year_percentage' => 'Last Year Percentage',
            'user_id' => 'User ID',
            'created_at' => 'Created At',
        ];
    }

    /**
     * Gets query for [[EducationType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEducationType()
    {
        return $this->hasOne(StudyingType::className(), ['id' => 'education_type_id']);
    }

    /**
     * Gets query for [[StudyingBranch]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudyingBranch()
    {
        return $this->hasOne(StudyingBranchName::className(), ['id' => 'studying_branch_id']);
    }

    /**
     * Gets query for [[StudyingField]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudyingField()
    {
        return $this->hasOne(StudyingFieldName::className(), ['id' => 'studying_field_id']);
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
}
