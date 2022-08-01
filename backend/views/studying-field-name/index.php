<?php

use common\models\StudyingFieldName;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\StudyingFieldNameSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Studying Field Names');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="studying-field-name-index">
    <p>
        <?= Html::a(Yii::t('app', 'Create Studying Field Name'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'field_name',
            [
                    'attribute' => 'university_id',
                    'value'  => function($model) {
                        return $model->getUniversityName()[$model->university_id];
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
                'urlCreator' => function ($action, StudyingFieldName $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
