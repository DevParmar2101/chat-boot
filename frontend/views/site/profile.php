<?php

use kartik\file\FileInput;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $model \common\models\User*/

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
                <?= $form->field($model,'gender')->widget(Select2::class,[
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
                <?= $form->field($model,'status')->widget(Select2::class,[
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
                <?= $form->field($model,'profile_image')->widget(FileInput::class,[
                    'pluginOptions' => [
                        'initialPreviewData' => true,
                        'initialPreview' => Html::img(Yii::getAlias('@web/uploads/user/' . $model->profile_image), ['class' => 'img-thumbnail user-profile']),
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
            <?= Html::submitButton('Submit',['class' => 'btn btn-primary'])?>
    </div>
    <?php ActiveForm::end()?>
</div>
