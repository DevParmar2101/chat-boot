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

            'id',
            'education_type_id',
            'university_id',
            'studying_field_id',
            'studying_branch_id',
            //'last_year_percentage',
            //'user_id',
            //'created_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, UserCurrentEducation $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
