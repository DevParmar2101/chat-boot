<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\StudyingFieldName */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="studying-field-name-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'university_id')->textInput() ?>

    <?= $form->field($model, 'field_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
