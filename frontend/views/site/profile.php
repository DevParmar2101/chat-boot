<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/** @var $model \common\models\User*/

$this->title = 'User Profile';
?>
<div class="card">
    <h3 class="card-header">Profile</h3>
    <?php $form = ActiveForm::begin(['id' => 'profile-form']); ?>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6 col-12">
                <?= $form->field($model,'first_name')->textInput()?>
            </div>
            <div class="col-sm-6 col-12">
                <?= $form->field($model,'last_name')->textInput()?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-12">
                <?= $form->field($model,'age')->textInput(['type' => 'number'])?>
            </div>
            <div class="col-sm-6 col-12">
                <?= $form->field($model,'gender')->widget(\kartik\select2\Select2::class,[
                    'data' => $model->gender(),
                    'options' => [
                        'placeholder' => 'Select Gender',
                        'autoClear' => true,
                    ]
                ])?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-12">
                <?= $form->field($model,'email')->textInput()?>
            </div>
            <div class="col-sm-6 col-12">
                <?= $form->field($model,'status')->widget(\kartik\select2\Select2::class,[
                    'data' => $model->status(),
                    'options' => [
                        'placeholder' => 'Select Status',
                        'autoClear' => true,
                    ]
                ])?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-12">
                <?= $form->field($model,'profile_image')->widget(\kartik\file\FileInput::class,[
                    'pluginOptions' => [
                        'showUpload' => false,
                        'browseLabel' => '',
                        'removeLabel' => '',
                        'mainClass' => 'input-group-lg'
                    ]
                ])?>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="form-group">
            <?= Html::submitButton('Submit',['class' => 'btn btn-primary'])?>
        </div>
    </div>
    <?php ActiveForm::end()?>
</div>
