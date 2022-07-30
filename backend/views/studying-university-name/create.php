<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\StudyingUniversityName */

$this->title = Yii::t('app', 'Create Studying University Name');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Studying University Names'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="studying-university-name-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
