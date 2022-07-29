<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\StudyingType */

$this->title = $model->studying_type_name;
$this->params['breadcrumbs'][] = ['label' => 'Studying Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="studying-type-view">


    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Back',['index'],['class'=>'btn btn-warning'])?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'studying_type_name',
            [
                    'attribute' => 'status',
                    'value' => function ($model){
                        return $model->status()[$model->status];
                    }
            ],
            'created_at:datetime',
        ],
    ]) ?>

</div>
