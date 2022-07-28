<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\helpers\Url;

AppAsset::register($this);
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
            <?php if (!Yii::$app->user->isGuest){?>
            <ul class="navbar-nav my-2 my-lg-0">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= Url::toRoute('/site/index')?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= Url::toRoute('/site/about')?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= Url::toRoute('/site/contact')?>">Contact</a>
                    </li>
                </ul>
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle profile-header-dropdown" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?= Yii::$app->user->identity->username?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?= Url::toRoute('site/profile')?>">Profile</a>
                        <?= Html::a('Logout', Url::to(['site/logout']),['data-method' => 'POST','class' => 'dropdown-item'])?>
                    </div>
                </div>
            </ul>
            <?php }else{?>
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= Url::toRoute('/')?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= Url::toRoute('/site/about')?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= Url::toRoute('/site/contact')?>">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= Url::toRoute('/site/signup')?>">Signup</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= Url::toRoute('/site/login')?>">Login</a>
                    </li>
                </ul>
            <?php }?>
        </div>
        </div>

    </nav>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
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
