<?php

use common\models\User;
use common\models\UserCurrentEducationSearch;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ListView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var $user User */
/** @var $dataProvider ActiveDataProvider */
/** @var $searchModel UserCurrentEducationSearch */

$this->title = 'My Yii Application';
?>
<?php Pjax::begin(['id' => 'user-list', 'enablePushState' => false, 'scrollTo' => false]) ?>
<div class="container" id="current-user-list">
    <?=
    ListView::widget([
        'dataProvider' => $dataProvider,
        'options' => [
            'tag' => 'div',
            'class' => 'list-wrapper',
            'id' => 'list-wrapper',
        ],
        'layout' => "{pager}\n{items}\n{summary}",
        'itemView' => function ($model, $key, $index, $widget) {
            return $this->render('_partial/_list', ['model' => $model]);
        },
    ]);
    ?>
</div>
<?php Pjax::end() ?>
<?php
//$add_to_favourite = Url::to(['site/user-list']);
//if (!Yii::$app->user->isGuest) {
//    $user_id = Yii::$app->user->identity->id;
//    $js = <<< JS
//
//$('.user-button-request').click(function (){
//    var user_request_id = $(this).attr('id');
//    var requested_id =  user_request_id.replace("request-", "");
//    var request_button_class = $(this).attr('class');
//    $.ajax({method:"POST",url: "$add_to_favourite", data: { user_id : "$user_id",user_requested_to_id : requested_id},
//     success: function(result){
//            console.log(result);
//        if (result === true){
//            $(request_button_class).removeClass('btn btn-primary');
//            $(request_button_class).addClass('btn btn-secondary');
//            $(user_request_id).html('Requested');
//            $("#current-user-list").load();
//        }
//        else{
//            $(request_button_class).removeClass('btn btn-secondary');
//            $(request_button_class).addClass('btn btn-primary');
//        }
//  }});
//});
//JS;
//    $this->registerJs($js);
//}
//?>
