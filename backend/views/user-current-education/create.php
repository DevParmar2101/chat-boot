<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\UserCurrentEducation */

$this->title = Yii::t('app', 'Create User Current Education');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'User Current Educations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-current-education-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
