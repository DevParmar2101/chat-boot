<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\StudyingBranchName */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="card">
    <h5 class="card-header">Studying Branch Name</h5>
    <?php $form = ActiveForm::begin(); ?>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
                <?= $form->field($model, 'branch_name')->textInput()?>
            </div>
            <div class="col-sm-6">
                <?= $form->field($model, 'field_id')->dropDownList($model->getStudyFieldName(),['prompt' => 'Select Field Name']) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <?= $form->field($model, 'status')->dropDownList($model->status(),['prompt' => 'Select Status']) ?>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>

