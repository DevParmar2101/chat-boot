<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \frontend\models\SignupForm $model */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>

    <div class="row">
        <div class="col-lg-12">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
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
            <div class="form-group">
                <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
