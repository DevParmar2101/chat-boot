<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\StudyingFieldName */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="card">
    <h5 class="card-header">Studying Field Name</h5>
    <?php $form = ActiveForm::begin(); ?>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6 col-12">
                <?= $form->field($model, 'field_name')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-sm-6 col-12">
                <?= $form->field($model, 'university_id')->dropDownList($model->getUniversityName(),['prompt' => 'Select University']) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-12">
                <?= $form->field($model, 'status')->dropDownList($model->status(),['prompt' => 'Select Status']) ?>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
