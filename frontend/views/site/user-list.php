<?php

use common\models\User;
use common\models\UserCurrentEducationSearch;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;
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