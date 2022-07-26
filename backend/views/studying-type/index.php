<?php

use common\models\StudyingType;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\StudyingTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Studying Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="studying-type-index">

    <p>
        <?= Html::a('Create Studying Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'studying_type_name',
            [
                    'attribute' => 'status',
                    'value' => function($model) {
                        return $model->status()[$model->status];
                    }
            ],
            'created_at:datetime',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, StudyingType $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
