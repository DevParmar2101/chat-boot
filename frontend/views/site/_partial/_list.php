<?php

use common\models\UserCurrentEducation;
use common\models\UserRequest;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;

/** @var $model UserCurrentEducation */
$user_request = UserRequest::findOne(['user_id' => Yii::$app->user->identity->id, 'user_requested_to_id' => $model->user_id]);
?>
<div class="row">
    <div class="col-xl-11 col-lg-11 col-md-11 col-sm-12 col-xs-12 mb-4">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-1 col-lg-1 col-md-4 col-sm-4 col-xs-12 mr-2 pl-0 profile">
                        <?= Html::img(Yii::getAlias('@web/uploads/user/' . $model->user->profile_image), ['alt' => Yii::getAlias('@web/uploads/user/user-profile.jpg'), 'width' => '75', 'height' => '75', 'class' => 'rounded-circle']) ?>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 pl-0">
                        <p class="m-0"><span>Name:-</span><?= $model->getFullName() ?></p>
                        <p class="m-0"><span>Mobile Number:-</span><?= $model->mobile_number ?></p>
                        <p class="m-0"><span>Age:-</span><?= $model->user->age ?></p>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 text-right">
                        <?= Html::a($user_request ? 'Requested' : 'Request', ['site/user-list'], ['class' => $user_request ? 'btn btn-secondary' : 'btn btn-primary']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
