<?php

/** @var \yii\web\View $this */

/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\ActiveForm;



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

        <div class="bg-dark text-light font-weight-bold text-center py-4 text-break border-bottom border-white m-auto">
            МУЗЕЙНО-ВЫСТАВОЧНЫЙ ЦЕНТР «ГАЛЕРЕЯ БЕЗОПАСНОСТИ МУРМАНСКОЙ ОБЛАСТИ»
        </div>

        <?php
        NavBar::begin([
            'brandLabel' => 'Галерея МЧС',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed',
            ],
        ]);
        $menuItems = [
            ['label' => 'Главная', 'url' => ['/site/index']],
            ['label' => 'Новости', 'url' => ['/site/news']],
            ['label' => 'Галерея', 'url' => ['/site/gallery']],
            ['label' => 'Запись', 'url' => ['/site/record']],
            ['label' => 'О нас', 'url' => ['/site/about']],
            ['label' => 'Контакты', 'url' => ['/site/contact']],

        ];
        if (Yii::$app->user->isGuest) {
            $menuItems[] = ['label' => 'Регистрация', 'url' => ['/site/signup']];
            $menuItems[] = ['label' => 'Войти', 'url' => ['/site/login'],];
            $menuItems[] = ['label' => '|'];
            $menuItems[] = ['label' => Html::tag('span', '', ['class' => 'fab fa-vk']) . '', 'url' => 'https://vk.com/public191153873', 'linkOptions' => array('target' => '_blank'),];
            $menuItems[] = ['label' => Html::tag('span', '', ['class' => 'fab fa-youtube']). '', 'url' => 'https://www.youtube.com/watch?v=nyJC3_GWo7E', 'linkOptions' => array('target' => '_blank'),];
        } else {
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
            'options' => ['class' => 'navbar-nav ml-auto', 'style' => 'align:center',],
            'items' => $menuItems,

        ]);
        NavBar::end();
        ?>
    </header>

    <main role="main" class="flex-shrink-0">
        <div class="container pt-3">
            <?= Breadcrumbs::widget([
                'homeLink'=> ['url'=>'/site/index','label'=>'Главная'],
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>


    <footer class="text-center text-lg-start bg-dark text-white">
        <!-- Section: Social media -->
        <section
                class="d-flex justify-content-center p-4 border-bottom"
        >


            <!-- Right -->
            <div class="me-5 d-none d-lg-block">
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Музейно-выставочный центр «Галерея безопасности Мурманской области»
                        </h6>
<!--                        <p>-->
<!--                            Here you can use rows and columns to organize your footer content. Lorem ipsum-->
<!--                            dolor sit amet, consectetur adipisicing elit.-->
<!--                        </p>-->
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Навигация
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Новости</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Галлерея</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Запись</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">О нас</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Полезные ссылки
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Управление МЧС МО</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">МЧС России</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Гражданская оборона</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Виртуальные туры</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Контакты
                        </h6>
                        <p><i class="fas fa-home me-3"></i> 183052 г. Мурманск, ул. Шевченко, 32</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            museum-mchs51@yandex.ru
                        </p>
                        <p><i class="fas fa-phone me-3"></i> +7 921 281-02-41</p>
                        <p><i class="fas fa-print me-3"></i> (815 2) 53-81-94</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            Копирайт &copy; <?=date("Y")?>
            <a href="https://www.masu.edu.ru/" style="text-decoration: none; color: wheat" target="_blank">МАГУ</a>.
            Все права защищены.
        </div>
        <!-- Copyright -->
    </footer>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
