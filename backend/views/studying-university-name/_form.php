<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\StudyingUniversityName */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="studying-university-name-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'type_id')->textInput() ?>

    <?= $form->field($model, 'university_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
