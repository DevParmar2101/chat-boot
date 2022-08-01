<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\StudyingUniversityName */

$this->title = $model->university_name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Studying University Names'), 'url' => ['index']];
\yii\web\YiiAsset::register($this);
?>
<div class="studying-university-name-view">

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Back',['index'],['class'=>'btn btn-warning'])?>

    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                    'attribute' => 'type_id',
                    'value' => function($model) {
                        return $model->getStudyType()[$model->type_id];
                    }
            ],
            'university_name',
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
