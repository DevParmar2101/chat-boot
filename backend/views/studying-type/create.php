<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\StudyingType */

$this->title = 'Create Studying Type';
$this->params['breadcrumbs'][] = ['label' => 'Studying Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="studying-type-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
