<?php

use common\models\User;
use common\models\UserCurrentEducationSearch;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ListView;

/** @var yii\web\View $this */
/** @var $user User */
/** @var $dataProvider ActiveDataProvider */
/** @var $searchModel UserCurrentEducationSearch */

$this->title = 'My Yii Application';
?>
<div class="container">
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

<?php
$add_to_favourite = Url::to(['site/user-list']);
if (!Yii::$app->user->isGuest) {
    $user_id = Yii::$app->user->identity->id;
    $js = <<< JS

$('.user-button-request').click(function (){
    var car_id_string = $(this).attr('id');
    var car_id =  car_id_string.replace("request-", "");
    $.ajax({method:"POST",url: "$add_to_favourite", data: { user_id : "$user_id",user_requested_to_id : car_id},
     success: function(result){
        if (result == true){
           $("#request-"+car_id).addClass('secondary');
        }
        else{
           $("#request-"+car_id).removeClass('secondary');
        }
  }});
})
JS;
    $this->registerJs($js);
}
?>