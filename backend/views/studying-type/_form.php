<?php

use kartik\select2\Select2;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\StudyingType */
/* @var $form yii\bootstrap4\ActiveForm */
?>
<div class="card">
    <h5 class="card-header">Studying Type</h5>
    <?php $form = ActiveForm::begin(); ?>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6 col-12">
                <?= $form->field($model,'studying_type_name')->textInput()?>
            </div>
            <div class="col-sm-6 col-12">
                <?= $form->field($model,'status')->dropdownList($model->status(),['prompt' => 'Select Status'])?>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>