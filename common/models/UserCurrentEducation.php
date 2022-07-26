<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

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
    const STEP_ONE = 1;
    const STEP_TWO = 2;
    const STEP_THREE = 3;
    const STEP_FOUR = 4;
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
            [['education_type_id', 'university_id', 'studying_field_id', 'studying_branch_id', 'user_id'], 'integer'],

            [['first_name','last_name','mobile_number'],'string'],

            [['created_at','education_type_id','university_id','studying_field_id','studying_branch_id'], 'safe'],

            [['first_name','last_name','mobile_number'],'required','on' => self::STEP_ONE],
            [['education_type_id','university_id'],'required','on' => self::STEP_TWO],
            [['studying_field_id','studying_branch_id'],'required', 'on' => self::STEP_THREE],
            [['last_year_percentage'],'required', 'on' => self::STEP_FOUR],

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
            'education_type_id' => 'Education Type',
            'university_id' => 'University Name',
            'studying_field_id' => 'Field Name',
            'studying_branch_id' => 'Branch Name',
            'last_year_percentage' => 'Last Year Percentage',
            'user_id' => 'User Name',
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

    public function getFullName(){
        return $this->first_name.' '.$this->last_name;
    }
    /**
     * @return array
     */
    public function getEducationTypeName()
    {
        return ArrayHelper::map(StudyingType::find()->where(['status' => BaseActiveRecord::STATUS_ACTIVE])->all(),'id','studying_type_name');
    }

    /**
     * @param $university_id
     * @return array
     */
    public function getEducationFieldName($university_id)
    {
        return ArrayHelper::map(StudyingFieldName::find()->where(['university_id' => $university_id])->all(), 'id', 'field_name');
    }

    /**
     * @param $condition
     * @param $user_id
     * @return array
     */
    public static function usersList()
    {
        $user_id = Yii::$app->user->identity->id;
        UserCurrentEducation::findOne(['user_id' => $user_id]);
        $model = UserCurrentEducation::find()
            ->where(['education_type_id' => $user_current_education->education_type_id])
            ->orWhere(['university_id' => $user_current_education->university_id])
            ->orWhere(['studying_field_id' => $user_current_education->studying_field_id])
            ->orWhere(['studying_branch_id' => $user_current_education->studying_branch_id])
            ->andWhere(['not in', UserCurrentEducation::tableName() . '.user_id', [$user_id]]);
        return $model;
    }
}
