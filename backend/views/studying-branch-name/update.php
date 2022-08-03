<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\StudyingBranchName */

$this->title = Yii::t('app', 'Update Studying Branch Name: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Studying Branch Names'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->branch_name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="studying-branch-name-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
