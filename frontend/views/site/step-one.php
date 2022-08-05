<?php

/** @var $this View*/
/** @var $form ActiveForm*/
/** @var $user_education UserCurrentEducation*/

use common\models\UserCurrentEducation;
use yii\bootstrap4\ActiveForm;
use yii\web\View;

?>
<?php $form = ActiveForm::begin(['id'=>'step-one-form'])?>
<div class="card-body">
    <p>Please give same detail as in your college.</p>
    <div class="row">
        <div class="col-sm-6">
            <?= $form->field($user_education,'first_name')->textInput()?>
        </div>
        <div class="col-sm-6">
            <?= $form->field($user_education,'last_name')->textInput()?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <?= $form->field($user_education,'mobile_number')->textInput()?>
        </div>
    </div>
</div>
<div class="card-footer">
    <?= \yii\helpers\Html::submitButton('Save & Next',['class' => 'btn btn-primary'])?>
</div>
<?php ActiveForm::end()?>
