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


<?php $form = ActiveForm::begin(['id'=>'step-one-form'])?>
    <div class="card-body">
        <p><?= $form_information?></p>
        <div class="row">
            <div class="col-sm-6">
                <?php
                $format = <<<SCRIPT
function format(state) {
    if (!state.id) return state.text; // optgroup
    return state.text;
}
SCRIPT;
                $escape = new JsExpression("function(m){return m;}");
                $this->registerJs($format, View::POS_HEAD);
                ?>
                <?php
                $url = Url::toRoute(['/site/child-data']);
                echo $form->field($user_education,'education_type_id')->widget(Select2::class,[
                    'data' => $user_education->getEducationTypeName(),
                    'options' => [
                        'placeholder' => 'Select Education Type',
                        'onchange' => '$.post("'.$url.'?id="+$(this).val(), function( data ) {
                    $("select#usercurrenteducation-university_id").html( data );
                });'
                    ],
                    'pluginOptions' => [
                        'templateResult' => new JsExpression('format'),
                        'templateSelection' => new JsExpression('format'),
                        'escapeMarkup' => $escape,
                        'allowClear' => false,
                    ],
                ])?>
            </div>
            <div class="col-sm-6">
                <?php
                $format =<<<SCRIPT
function format(state) {
    if (!state.id) return state.text;
    return state.text;
}
SCRIPT;
                $escape = new JsExpression("function(m){return m;}");
                $this->registerJs($format, View::POS_HEAD);
                ?>
                <?php $url = Url::toRoute(['/site/child-data']);
                echo $form->field($user_education,'university_id')->widget(Select2::class,[
                    'options' => [
                        'placeholder' => 'Select Field Type',
                        'onchange' => '$.post("'.$url.'?id="$(this).val(), function( data ){
                                    $("select#usercurrenteducation-studying_field_id").html( data );
                                    });'
                    ],
                    'pluginOptions' => [
                        'templateResult' => new JsExpression('format'),
                        'templateSelection' => new JsExpression('format'),
                        'escapeMarkup' => $escape,
                        'allowClear' => false,
                    ],
                ])?>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <?= Html::submitButton('Save & Next',['class' => 'btn btn-primary'])?>
    </div>
<?php ActiveForm::end()?>
<?php
$current_page_url = Url::toRoute(['site/step-three']);
$js_page_reload = <<<JS
window.history.pushState('', '', "$current_page_url");
JS;
$this->registerJs($js_page_reload);
