<?php

use kartik\select2\Select2;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\StudyingType */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="studying-type-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'studying_type_name')->widget(Select2::class,[
            'data' => $model->status(),
            'options' => [
                    'placeholder' => 'Select Status',
                    'autoClear' => true
            ]
    ]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
