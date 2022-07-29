<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\UserCurrentEducationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-current-education-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'education_type_id') ?>

    <?= $form->field($model, 'university_id') ?>

    <?= $form->field($model, 'studying_field_id') ?>

    <?= $form->field($model, 'studying_branch_id') ?>

    <?php // echo $form->field($model, 'last_year_percentage') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
