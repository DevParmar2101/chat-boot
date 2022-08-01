<?php

use common\models\User;
use yii\helpers\Html;
use yii\web\YiiAsset;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\StudyingFieldName */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Studying Field Names'), 'url' => ['index']];
YiiAsset::register($this);
?>
<div class="studying-field-name-view">
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
                    'attribute' => 'university_id',
                    'value' => function($model) {
                        return $model->getUniversityName()[$model->university_id];
                    }
            ],
            'field_name',
            [
                    'attribute' => 'user_id',
                    'value' => function ($model){
                        $user = User::findOne(['id' => $model->user_id]);
                        return $user->getFullName();
                    }
            ],
            [
                    'attribute' => 'status',
                    'value' => function ($model) {
                        return $model->status()[$model->status];
                    }
            ],
            'created_at',
        ],
    ]) ?>

</div>
