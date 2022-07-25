<?php

use yii\helpers\Html;

/**@var $user \common\models\User */
?>
<h3 class="text-center">Find New Friend</h3>

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-2 profile-border">
                <?= Html::img(Yii::getAlias('@web/uploads/user/'.$user->profile_image),['class' => 'profile-image'])?>
            </div>
            <div class="col-10">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Name:- <?= $user->getFullName()?></li>
                    <li class="list-group-item">Gender:- <?= $user->gender()?></li>
                </ul>
            </div>
        </div>
    </div>
</div>