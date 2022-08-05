<?php

use common\models\UserCurrentEducation;
use common\models\User;
use yii\widgets\Pjax;
use johnitvn\ajaxcrud\CrudAsset;
/**
 * @var $view_name string
 * @var $user User
 * @var $user_education UserCurrentEducation
 */
CrudAsset::register($this);
?>

<?php Pjax::begin(['id' => 'id-setup-process','enablePushState' => false,'scrollTo' => false]); ?>
    <div class="card text-center mx-auto" style="display:block; width: 45rem">
        <div class="card-header">
            <h4>Your Current Education</h4>
            <span class="text-sm-left text-secondary">Step 1/4</span>
        </div>
        <div class="card">
            <?= $this->render('@app/views/site/'.$view_name,[
                'user' => isset($user) ? $user : null,
                'user_education'=> isset($user_education) ? $user_education : null,
            ])?>

        </div>
    </div>
<?php Pjax::end(); ?>