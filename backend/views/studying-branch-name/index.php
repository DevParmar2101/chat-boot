<?php

use common\models\StudyingBranchName;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\StudyingBranchNameSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Studying Branch Names');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="studying-branch-name-index">

    <p>
        <?= Html::a(Yii::t('app', 'Create Studying Branch Name'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'branch_name',
            [
                    'attribute' => 'field_id',
                    'value' => function($model){
                        return $model->getStudyFieldName()[$model->field_id];
                    }
            ],

            [
                    'attribute' => 'status',
                    'value' => function($model) {
                        return $model->status()[$model->status];
                    }
            ],
            //'created_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, StudyingBranchName $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
