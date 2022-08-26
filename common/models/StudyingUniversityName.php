<?php

namespace common\models;

use Faker\Provider\Base;
use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "studying_university_name".
 *
 * @property int $id
 * @property int|null $type_id
 * @property string|null $university_name
 * @property int|null $status
 * @property int|null $user_id
 * @property string $created_at
 *
 * @property StudyingFieldName[] $studyingFieldNames
 * @property StudyingType $type
 * @property User $user
 * @property UserCurrentEducation[] $userCurrentEducations
 */
class StudyingUniversityName extends BaseActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'studying_university_name';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type_id', 'status', 'user_id'], 'integer'],
            [['type_id', 'university_name','status', 'user_id'], 'required'],
            [['created_at'], 'safe'],
            [['university_name'], 'string', 'max' => 255],
            [['type_id'], 'exist', 'skipOnError' => true, 'targetClass' => StudyingType::className(), 'targetAttribute' => ['type_id' => 'id']],
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
            'type_id' => 'Studying Type',
            'university_name' => 'University Name',
            'status' => 'Status',
            'user_id' => 'User ID',
            'created_at' => 'Created At',
        ];
    }

    /**
     * Gets query for [[StudyingFieldNames]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudyingFieldNames()
    {
        return $this->hasMany(StudyingFieldName::className(), ['university_id' => 'id']);
    }

    /**
     * Gets query for [[Type]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(StudyingType::className(), ['id' => 'type_id']);
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
        return $this->hasMany(UserCurrentEducation::className(), ['university_id' => 'id']);
    }

    /**
     * @return array
     */
    public function getStudyType()
    {
        return ArrayHelper::map(StudyingType::find()->where(['status' => BaseActiveRecord::STATUS_ACTIVE])->all(),'id','studying_type_name');
    }
}
