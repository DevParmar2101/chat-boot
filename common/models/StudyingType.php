<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "studying_type".
 *
 * @property int $id
 * @property string|null $studying_type_name
 * @property int|null $user_id
 * @property int|null $status
 * @property string $created_at
 *
 * @property StudyingUniversityName[] $studyingUniversityNames
 * @property User $user
 * @property UserCurrentEducation[] $userCurrentEducations
 */
class StudyingType extends BaseActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'studying_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'status'], 'integer'],
            [['studying_type_name', 'user_id', 'status'],'required'],
            [['created_at'], 'safe'],
            [['studying_type_name'], 'string', 'max' => 255],
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
            'studying_type_name' => 'Studying Type Name',
            'user_id' => 'User ID',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }

    /**
     * Gets query for [[StudyingUniversityNames]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudyingUniversityNames()
    {
        return $this->hasMany(StudyingUniversityName::className(), ['type_id' => 'id']);
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
        return $this->hasMany(UserCurrentEducation::className(), ['education_type_id' => 'id']);
    }
}
