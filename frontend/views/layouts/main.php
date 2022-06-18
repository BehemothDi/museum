<?php

/** @var \yii\web\View $this */

/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;


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
    <?php
    NavBar::begin([
        //'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Главная', 'url' => ['/site/index']],
        ['label' => 'Новости', 'url' => ['/site/news']],
        ['label' => 'Галлерея', 'url' => ['/site/gallery']],
        ['label' => 'Запись', 'url' => ['/site/record']],
        ['label' => 'О нас', 'url' => ['/site/about']],
        ['label' => 'Контакты', 'url' => ['/site/contact']],



    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Регистрация', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Войти', 'url' => ['/site/login']];
        $menuItems[] = ['label' => Html::tag('span', '', ['class'=>'fa fa-home']).'', 'url' => 'https://vk.com/club4424197'];


    } 
    else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
            . Html::submitButton(
                'Выйти (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'encodeLabels' => false,
        'options' => ['class' => 'navbar-nav ml-auto'],
        'items' => $menuItems,

    ]);
    NavBar::end();
    ?>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
    </div>
    <?= $content ?>
</main>

<footer class="bg-dark pt-5 text-white"> 
    <div class="container"> 
        <div class="row_fut"> 
            <div class="col-xl-4 py-3"> 
                <h2 class="fw-normal h5 mb-4 text-uppercase text-white">Как с нами связаться</h2> 
                <div class="mb-4"> <a class="link-light text-decoration-none">+1 234 567-890</a> <br/> <a class="link-light text-decoration-none">rogandrey1@rambler.ru</a> 
                </div>                 
            </div>             
            <div class="col-md-3 col-xl-2 py-3"> 
                <h2 class="fw-normal h5 mb-4 text-uppercase text-white">Информация</h2> 
                <ul class="list-unstyled"> 
                    <li class="mb-3"> <a href="#" class="link-light text-decoration-none">О нас</a> 
                    </li>                     
                    <li class="mb-3"> <a href="#" class="link-light text-decoration-none">Контакты</a> 
                    </li>                                      
                </ul>                 
            </div>             
            <div class="col-md-3 col-xl-2 py-3"> 
                <h2 class="fw-normal h5 mb-4 text-uppercase text-white">Сервисы</h2> 
                <ul class="list-unstyled"> 
                    <li class="mb-3"> <a href="#" class="link-light text-decoration-none">Новости</a> 
                    </li>                     
                    <li class="mb-3"> <a href="#" class="link-light text-decoration-none">Галерея</a> 
                    </li>                     
                    <li class="mb-3"> <a href="#" class="link-light text-decoration-none">Запись</a> 
                    </li>                                         
                </ul>                 
            </div>             
            <div class="col-md-6 col-xl-4 py-3"> 
                <h2 class="fw-normal h5 mb-4 text-uppercase text-white">Мы в социальных сетях</h2>             
            </div>             
        </div>         
        <div class="pb-3 pt-3 small"> 
            <hr class="border-secondary mt-0"/> 
            <div class="row_fut">
                <div class="col-md pb-2 pt-2">
                    <p class="mb-0">&copy;2022год
                    </p>
                </div>
            </div>             
        </div>         
    </div>     
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
