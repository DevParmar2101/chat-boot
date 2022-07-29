<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\UserCurrentEducation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-current-education-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'education_type_id')->textInput() ?>

    <?= $form->field($model, 'university_id')->textInput() ?>

    <?= $form->field($model, 'studying_field_id')->textInput() ?>

    <?= $form->field($model, 'studying_branch_id')->textInput() ?>

    <?= $form->field($model, 'last_year_percentage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
