<?php

use common\models\UserCurrentEducation;
use common\models\User;
use yii\widgets\Pjax;
use johnitvn\ajaxcrud\CrudAsset;
/**
 * @var $view_name string
 * @var $user User
 * @var $user_education UserCurrentEducation
 * @var $form_information string
 * @var $card_title string
 * @var $step string
 */
CrudAsset::register($this);
?>

<?php Pjax::begin(['id' => 'id-setup-process','enablePushState' => false,'scrollTo' => false]); ?>
    <div class="card mx-auto" style="display:block; width: 45rem">
        <div class="card-header">
            <h4><?= $card_title?:'Card Title'?></h4>
            <hr>
            <span class="text-sm-left text-secondary">Step <?= $step?>/4</span>
        </div>
        <div class="card">
            <?= $this->render('@app/views/site/'.$view_name,[
                'user' => isset($user) ? $user : null,
                'user_education'=> isset($user_education) ? $user_education : null,
                'card_title' => isset($card_title) ? $card_title : null,
                'form_information' => isset($form_information) ? $form_information : null,
                'step' => isset($step) ? $step : null,
            ])?>

        </div>
    </div>
<?php Pjax::end(); ?>