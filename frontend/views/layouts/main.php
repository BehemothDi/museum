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
            $menuItems[] = ['label' => Html::tag('span', '', ['class' => 'fab fa-vk']) . '', 'url' => 'https://vk.com/club4424197'];
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
            <?= $content ?>
        </div>
    </main>

<!--    <footer class="bg-dark pt-5 text-white">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-xl-4 py-3"><a href="#"-->
<!--                                              class="d-inline-block h2 mb-4 text-decoration-none text-uppercase text-white">-->
<!--                        Учреждение </a>-->
<!--                    <p class="mb-3">Музейно-выставочный центр «Галерея безопасности Мурманской области»</p>-->
<!--                    <div class="mb-4">-->
<!--                        <a href="#" class="text-white mt-4">Телефон: (815 2) 53-81-94</a><br/>-->
<!--                        <a href="#" class="text-white mt-4">E-mail: museum-mchs51@yandex.ru</a><br/>-->
<!--                        <a href="#" class="text-white mt-4">Адрес: Мурманск, ул. Шевченко, д.32.</a><br/>-->
<!--                        <a href="#" class="text-white mt-4">Режим работы: понедельник-пятница с 9.00 до 16.00, суббота, воскресенье - выходные дни.</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-3 col-xl-2 py-3">-->
<!--                    <h2 class="font-weight-normal h5 mb-4 text-uppercase text-white">About</h2>-->
<!--                    <ul class="list-unstyled">-->
<!--                        <li class="mb-3"><a href="#" class="text-white">Get Quote</a>-->
<!--                        </li>-->
<!--                        <li class="mb-3"><a href="#" class="text-white">Enterprise Plan</a>-->
<!--                        </li>-->
<!--                        <li class="mb-3"><a href="#" class="text-white">Become an Affiliate</a>-->
<!--                        </li>-->
<!--                        <li class="mb-3"><a href="#" class="text-white">Our Portfolio</a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--                <div class="col-md-3 col-xl-2 py-3">-->
<!--                    <h2 class="font-weight-normal h5 mb-4 text-uppercase text-white">Services</h2>-->
<!--                    <ul class="list-unstyled">-->
<!--                        <li class="mb-3"><a href="#" class="text-white">Web Design</a>-->
<!--                        </li>-->
<!--                        <li class="mb-3"><a href="#" class="text-white">Web Development</a>-->
<!--                        </li>-->
<!--                        <li class="mb-3"><a href="#" class="text-white">WordPress</a>-->
<!--                        </li>-->
<!--                        <li class="mb-3"><a href="#" class="text-white">Digital Marketing</a>-->
<!--                        </li>-->
<!--                        <li class="mb-3"><a href="#" class="text-white">Content Writing</a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--                <div class="col-md-6 col-xl-4 py-3">-->
<!--                    <h2 class="font-weight-normal h5 mb-4 text-uppercase text-white">Подписаться</h2>-->
<!--                    <p class="mb-3">Подписаться на обновления сайта. Укажите свой почтовый ящик и будьте в курсе всех новостей.</p>-->
<!--                    <form class="mb-4">-->
<!--                        <div class="align-items-center bg-white border input-group overflow-hidden p-1">-->
<!--                            <input type="email" class="border-0 form-control pb-2 pl-3 pr-3 pt-2"-->
<!--                                   placeholder="Enter email..." aria-label="Recipient's email"-->
<!--                                   aria-describedby="newsletter-submit2"/>-->
<!--                            <div class="input-group-append ml-1">-->
<!--                                <button class="btn btn-dark pb-2 pl-4 pr-4 pt-2 rounded-0" type="button"-->
<!--                                        id="newsletter-submit2" aria-label="Submit">-->
<!--                                    <svg viewBox="0 0 24 24" fill="currentColor" class="d-inline-block" height="16"-->
<!--                                         width="16">-->
<!--                                        <path d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>-->
<!--                                    </svg>-->
<!--                                </button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </form>-->
<!--                    <h2 class="font-weight-normal h5 mb-3 text-uppercase text-white">Социальные сети</h2>-->
<!--                    <div class="d-inline-flex flex-wrap"><a href="#" class="p-1 text-white" aria-label="facebook link">-->
<!--                            <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20">-->
<!--                                <path d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4v-8.5z"/>-->
<!--                            </svg>-->
<!--                        </a> <a href="#" class="p-1 text-white" aria-label="twitter link">-->
<!--                            <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20">-->
<!--                                <path d="M22.162 5.656a8.384 8.384 0 0 1-2.402.658A4.196 4.196 0 0 0 21.6 4c-.82.488-1.719.83-2.656 1.015a4.182 4.182 0 0 0-7.126 3.814 11.874 11.874 0 0 1-8.62-4.37 4.168 4.168 0 0 0-.566 2.103c0 1.45.738 2.731 1.86 3.481a4.168 4.168 0 0 1-1.894-.523v.052a4.185 4.185 0 0 0 3.355 4.101 4.21 4.21 0 0 1-1.89.072A4.185 4.185 0 0 0 7.97 16.65a8.394 8.394 0 0 1-6.191 1.732 11.83 11.83 0 0 0 6.41 1.88c7.693 0 11.9-6.373 11.9-11.9 0-.18-.005-.362-.013-.54a8.496 8.496 0 0 0 2.087-2.165z"/>-->
<!--                            </svg>-->
<!--                        </a> <a href="#" class="p-1 text-white" aria-label="instagram link">-->
<!--                            <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20">-->
<!--                                <path d="M12 2c2.717 0 3.056.01 4.122.06 1.065.05 1.79.217 2.428.465.66.254 1.216.598 1.772 1.153a4.908 4.908 0 0 1 1.153 1.772c.247.637.415 1.363.465 2.428.047 1.066.06 1.405.06 4.122 0 2.717-.01 3.056-.06 4.122-.05 1.065-.218 1.79-.465 2.428a4.883 4.883 0 0 1-1.153 1.772 4.915 4.915 0 0 1-1.772 1.153c-.637.247-1.363.415-2.428.465-1.066.047-1.405.06-4.122.06-2.717 0-3.056-.01-4.122-.06-1.065-.05-1.79-.218-2.428-.465a4.89 4.89 0 0 1-1.772-1.153 4.904 4.904 0 0 1-1.153-1.772c-.248-.637-.415-1.363-.465-2.428C2.013 15.056 2 14.717 2 12c0-2.717.01-3.056.06-4.122.05-1.066.217-1.79.465-2.428a4.88 4.88 0 0 1 1.153-1.772A4.897 4.897 0 0 1 5.45 2.525c.638-.248 1.362-.415 2.428-.465C8.944 2.013 9.283 2 12 2zm0 5a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm6.5-.25a1.25 1.25 0 0 0-2.5 0 1.25 1.25 0 0 0 2.5 0zM12 9a3 3 0 1 1 0 6 3 3 0 0 1 0-6z"/>-->
<!--                            </svg>-->
<!--                        </a> <a href="#" class="p-1 text-white" aria-label="linkedin link">-->
<!--                            <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20">-->
<!--                                <path d="M6.94 5a2 2 0 1 1-4-.002 2 2 0 0 1 4 .002zM7 8.48H3V21h4V8.48zm6.32 0H9.34V21h3.94v-6.57c0-3.66 4.77-4 4.77 0V21H22v-7.93c0-6.17-7.06-5.94-8.72-2.91l.04-1.68z"/>-->
<!--                            </svg>-->
<!--                        </a> <a href="#" class="p-1 text-white" aria-label="youtube link">-->
<!--                            <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20">-->
<!--                                <path d="M21.543 6.498C22 8.28 22 12 22 12s0 3.72-.457 5.502c-.254.985-.997 1.76-1.938 2.022C17.896 20 12 20 12 20s-5.893 0-7.605-.476c-.945-.266-1.687-1.04-1.938-2.022C2 15.72 2 12 2 12s0-3.72.457-5.502c.254-.985.997-1.76 1.938-2.022C6.107 4 12 4 12 4s5.896 0 7.605.476c.945.266 1.687 1.04 1.938 2.022zM10 15.5l6-3.5-6-3.5v7z"/>-->
<!--                            </svg>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="pb-3 pt-3 small">-->
<!--                <hr class="border-secondary mt-0"/>-->
<!--                <div class="align-items-center row">-->
<!--                    <div class="col-md pb-2 pt-2">-->
<!--                        <p class="mb-0">&copy; 2022 | All Rights Reserved - МАГУ</p>-->
<!--                    </div>-->
<!--                    <div class="col-md-auto pb-2 pt-2"><a href="#" class="text-white">Политика Конфиденциальности</a> | <a href="#"-->
<!--                                                                                                              class="text-white">Правила использования</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </footer>-->

    <footer class="text-center text-lg-start bg-dark text-white">
        <!-- Section: Social media -->
        <section
                class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
        >
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
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
                            <i class="fas fa-gem me-3"></i>Company name
                        </h6>
                        <p>
                            Here you can use rows and columns to organize your footer content. Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Products
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Angular</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">React</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Vue</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Laravel</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Pricing</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Settings</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Orders</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Help</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Contact
                        </h6>
                        <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            info@example.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
