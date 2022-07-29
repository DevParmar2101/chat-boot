<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\StudyingFieldName */

$this->title = Yii::t('app', 'Create Studying Field Name');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Studying Field Names'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="studying-field-name-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
