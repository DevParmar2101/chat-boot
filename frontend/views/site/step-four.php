<?php

use common\components\ActiveForm;
use common\models\UserCurrentEducation;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\JsExpression;
use yii\web\View;

/** @var $this View*/
/** @var $form ActiveForm*/
/** @var $user_education UserCurrentEducation*/
/** @var $form_information*/
?>
<?php $form = ActiveForm::begin(['id'=>'step-four-form'])?>
    <div class="card-body">
        <p><?= $form_information?></p>
        <div class="row">
            <div class="col-sm-12">
                <?= $form->field($user_education,'last_year_percentage')->textInput()?>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <?= Html::submitButton('Save & Next',['class' => 'btn btn-primary'])?>
    </div>
<?php ActiveForm::end()?><?php
$current_page_url = Url::toRoute(['site/step-four']);
$js_page_reload = <<<JS
window.history.pushState('', '', "$current_page_url");
JS;
$this->registerJs($js_page_reload);
?>