<?php

/** @var $this View*/
/** @var $form ActiveForm*/
/** @var $model UserCurrentEducation*/

use common\models\UserCurrentEducation;
use yii\bootstrap4\ActiveForm;
use yii\web\View;

?>

<div class="card text-center mx-auto" style="display:block; width: 45rem">
    <div class="card-header">
        <h4>Your Current Education</h4>
        <span class="text-sm-left text-secondary">Step 1/4</span>
    </div>
    <?php $form = ActiveForm::begin(['id'=>'step-one-form'])?>
    <div class="card-body">
        <p>Please give same detail as in your college.</p>
        <div class="row">
            <div class="col-sm-6">
                <?= $form->field($model,'first_name')->textInput()?>
            </div>
            <div class="col-sm-6">
                <?= $form->field($model,'last_name')->textInput()?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <?= $form->field($model,'mobile_number')->textInput()?>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <?= \yii\helpers\Html::submitButton('Save & Next',['class' => 'btn btn-primary'])?>
    </div>
    <?php ActiveForm::end()?>
</div>