<?php

use yii\data\ActiveDataProvider;
use yii\widgets\ListView;

/** @var $dataProvider ActiveDataProvider */
?>
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
            return $this->render('_partial/_requested_user', ['model' => $model]);
        },
    ]);
    ?>
</div>
