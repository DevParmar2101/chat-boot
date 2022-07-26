<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \frontend\models\SignupForm $model */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'SignUp';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="card">
    <div class="card-header">
        <h3>
            <?= Html::encode($this->title)?>
        </h3>
    </div>
    <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6">
                        <?= $form->field($model,'first_name')->textInput()?>
                    </div>
                    <div class="col-lg-6">
                        <?= $form->field($model,'last_name')->textInput()?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <?= $form->field($model,'gender')->widget(\kartik\select2\Select2::class,[
                            'data' => \common\models\User::gender(),
                            'options' => ['placeholder' => 'Select Gender'],
                            'pluginOptions' => [
                                'allowClear' => true
                            ]
                        ])?>
                    </div>
                    <div class="col-lg-6">
                        <?= $form->field($model,'age')->textInput(['type' => 'number'])?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <?= $form->field($model, 'username')->textInput() ?>
                    </div>
                    <div class="col-lg-6">
                        <?= $form->field($model, 'email') ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <?= $form->field($model, 'password')->passwordInput() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>