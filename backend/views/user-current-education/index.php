<?php

use common\models\UserCurrentEducation;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\UserCurrentEducationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'User Current Educations');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-current-education-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create User Current Education'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'education_type_id',
                'format' => 'raw',
                'value' => function ($model) {
                    return $model->educationType->studying_type_name;
                }
            ],
            [
                'attribute' => 'university_id',
                'format' => 'raw',
                'value' => function ($model) {
                    return $model->university->university_name;
                }
            ],
            [
                'attribute' => 'studying_field_id',
                'format' => 'raw',
                'value' => function ($model) {
                    return $model->studyingField->field_name;
                }
            ],
            [
                'attribute' => 'studying_branch_id',
                'format' => 'raw',
                'value' => function ($model) {
                    return $model->studyingBranch->branch_name;
                }
            ],
            'last_year_percentage',
            [
                'attribute' => 'user_id',
                'format' => 'raw',
                'value' => function ($model) {
                    return $model->user->getFullName();
                }
            ],
            'created_at:date',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, UserCurrentEducation $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>
