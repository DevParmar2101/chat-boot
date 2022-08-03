<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\StudyingBranchName */

$this->title = $model->branch_name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Studying Branch Names'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="studying-branch-name-view">
    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a(Yii::t('app','Back'),['index'],['class' => 'btn btn-warning'])?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                    'attribute' => 'field_id',
                    'value' => function($model) {
                        return $model->getStudyFieldName()[$model->field_id];
                    }
            ],
            'branch_name',
            [
                    'attribute' => 'status',
                    'value' => function($model) {
                        return $model->status()[$model->status];
                    }
            ],
            'created_at:datetime',
        ],
    ]) ?>

</div>
