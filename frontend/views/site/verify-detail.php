<?php

use common\components\ActiveForm;
use common\models\UserCurrentEducation;
use yii\helpers\Url;
use yii\web\View;

/** @var $this View*/
/** @var $form ActiveForm*/
/** @var $user_education UserCurrentEducation*/
/** @var $form_information*/
?>
<div class="card-body">
    <table style="width:100%">
        <tr>
            <th>Title</th>
            <th>Content</th>
        </tr>
        <tr>
            <td>Full Name</td>
            <td><?= $user_education->getFullName()?></td>
        </tr>
        <tr>
            <td>Mobile Number</td>
            <td><?= $user_education->mobile_number?></td>
        </tr>
        <tr>
            <td>Email ID</td>
            <td><?= $user_education->user->email?></td>
        </tr>
        <tr>
            <td>Education Type</td>
            <td><?= $user_education->educationType->studying_type_name?></td>
        </tr>
        <tr>
            <td>University Name</td>
            <td><?= $user_education->university->university_name?></td>
        </tr>
        <tr>
            <td>Studying Field Type</td>
            <td><?= $user_education->studyingField->field_name?></td>
        </tr>
        <tr>
            <td>Branch Name</td>
            <td><?= $user_education->studyingBranch->branch_name?></td>
        </tr>
    </table>
</div>
<div class="card-footer">
    <?= \yii\helpers\Html::a('Verify & Submit',['site/index'],['class' => 'btn btn-primary'])?>
</div>
<?php
$current_page_url = Url::toRoute(['site/verify-detail']);
$js_page_reload = <<<JS
window.history.pushState('', '', "$current_page_url");
JS;
$this->registerJs($js_page_reload);
?>