<?php

use common\components\ActiveForm;
use common\models\UserCurrentEducation;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;

/** @var $this View*/
/** @var $form ActiveForm*/
/** @var $user_education UserCurrentEducation*/
/** @var $form_information*/
?>


<?php $form = ActiveForm::begin(['id'=>'step-one-form'])?>
    <div class="card-body">
        <p><?= $form_information?></p>
        <div class="row">
            <div class="col-sm-6">
                <?= $form->field($user_education,'first_name')->textInput()?>
            </div>
            <div class="col-sm-6">
                <?= $form->field($user_education,'last_name')->textInput()?>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <?= Html::submitButton('Save & Next',['class' => 'btn btn-primary'])?>
    </div>
<?php ActiveForm::end()?>
<?php
$current_page_url = Url::toRoute(['site/step-two']);
$js_page_reload = <<<JS
window.history.pushState('', '', "$current_page_url");
JS;
$this->registerJs($js_page_reload);
