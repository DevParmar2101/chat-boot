<?php

use common\models\StudyingUniversityName;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\StudyingUniversityNameSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Studying University Names');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="studying-university-name-index">

    <p>
        <?= Html::a(Yii::t('app', 'Create Studying University Name'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'university_name',
            [
                    'attribute' => 'type_id',
                    'value' => function($model) {
                        return $model->getStudyType()[$model->type_id];
                    }
            ],
            [
                    'attribute' => 'status',
                    'value' => function($model){
                        return $model->status()[$model->status];
                    }
            ],
            'created_at:datetime',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, StudyingUniversityName $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
