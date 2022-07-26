<?php

/** @var \yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;

AppAsset::register($this);
$action_id = Yii::$app->controller->id;
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="<?= Url::toRoute('/site/index')?>"><?= Yii::$app->name?></a>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    </ul>
                    <ul class="navbar-nav my-2 my-lg-0">
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="<?= Url::toRoute('/site/index')?>">Home</a>
                            </li>
                            <li class="nav-item">
                                <?= Html::a(Yii::$app->user->identity->username.' Logout', Url::to(['site/logout']),['data-method' => 'POST','class' => 'nav-link text-white btn btn-outline-secondary'])?>
                            </li>
                        </ul>
                        <div class="dropdown">
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="<?= Url::toRoute('site/profile')?>">Profile</a>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main role="main" class="flex-shrink-0">
        <div class="mt-5 pr-5 pl-5 container-fluid">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                    <div id="list-example" class="list-group">
                        <a class="list-group-item list-group-item-action <?= $action_id == 'user-current-education'?'active':''?>" href="<?= Url::toRoute('/user-current-education')?>">User Current Education</a>
                        <a class="list-group-item list-group-item-action <?= $action_id == 'studying-type'?'active':''?>" href="<?= Url::toRoute('/studying-type')?>">Studying Type</a>
                        <a class="list-group-item list-group-item-action <?= $action_id == 'studying-university-name'?'active':''?>" href="<?= Url::toRoute('/studying-university-name')?>">Studying University</a>
                        <a class="list-group-item list-group-item-action <?= $action_id == 'studying-field-name'?'active':''?>" href="<?= Url::toRoute('/studying-field-name')?>">Studying Field</a>
                        <a class="list-group-item list-group-item-action <?= $action_id == 'studying-branch-name'?'active':''?>" href="<?= Url::toRoute('/studying-branch-name')?>">Studying Branch</a>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12">
                        <?= Breadcrumbs::widget([
                            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        ]) ?>
                        <?= Alert::widget() ?>
                        <?= $content ?>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer mt-auto py-3 text-muted">
        <div class="container">
            <p class="float-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
            <p class="float-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
