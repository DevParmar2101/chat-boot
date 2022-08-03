<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\StudyingBranchName */

$this->title = Yii::t('app', 'Create Studying Branch Name');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Studying Branch Names'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="studying-branch-name-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
