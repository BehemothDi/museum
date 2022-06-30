<?php

/** @var yii\web\View $this */

$this->title = 'Главная';
?>
<section class="background-cover bg-dark pb-5 position-relative pt-5 text-white" style="background-image:url(../../web/img/index/main.PNG)">
    <div class="container pb-5 pt-5">
        <div class="pb-5 pt-5 row">
            <div class="col-lg-7 pb-5 pt-5">
                 <h1 class="display-4 font-weight-bold mb-3">Галерея безопасности </h1>
                 <h1 class="display-4 font-weight-bold mb-3">Мурманской области </h1>
<!--                <p class="lead mb-4">Our ability to feel, act and communicate is indistinguishable from magic.</p><a href="#" class="btn btn-light pb-2 pl-4 pr-4 pt-2">Shop Collection</a>-->
            </div>
        </div>
    </div>
</section>
<main class="pb-5 pt-5">
    <section>
        <div class="container">
            <div class="justify-content-center row">
                <div class="col-lg-4 col-md-6 py-3">
                    <div class="background-left-center bg-dark pb-5 pl-4 position-relative pr-4 pt-5 text-dark" style="background-image:url('https://images.unsplash.com/photo-1467043237213-65f2da53396f?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MXwyMDkyMnwwfDF8c2VhcmNofDMwNnx8d29tZW4lMjBjbG90aGVzfGVufDB8fHw&ixlib=rb-1.2.1&q=80&w=1080');">
                        <div class="pb-5 pt-5"></div>
                        <div>
                            <h2 class="h5 mb-3">Информация посетителям</h2><a href="#" class="small stretched-link text-secondary">Перейти</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 py-3">
                    <div class="background-left-center bg-dark pb-5 pl-4 position-relative pr-4 pt-5 text-dark" style="background-image:url('https://images.unsplash.com/photo-1467043237213-65f2da53396f?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MXwyMDkyMnwwfDF8c2VhcmNofDMwNnx8d29tZW4lMjBjbG90aGVzfGVufDB8fHw&ixlib=rb-1.2.1&q=80&w=1080');">
                        <div class="pb-5 pt-5"></div>
                        <div>
                            <h2 class="h5 mb-3">Виртуальный тур</h2><a href="#" class="small stretched-link text-secondary">Перейти</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 py-3">
                    <div class="background-left-center bg-dark pb-5 pl-4 position-relative pr-4 pt-5 text-dark" style="background-image:url('https://images.unsplash.com/photo-1467043237213-65f2da53396f?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MXwyMDkyMnwwfDF8c2VhcmNofDMwNnx8d29tZW4lMjBjbG90aGVzfGVufDB8fHw&ixlib=rb-1.2.1&q=80&w=1080');">
                        <div class="pb-5 pt-5"></div>
                        <div>
                            <h2 class="h5 mb-3">Запись на приём</h2><a href="#" class="small stretched-link text-secondary">Перейти</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container pb-4 pt-4">
        <div class="align-items-center row">
            <div class="col">
                <hr class="mb-0 mt-0"/>
            </div>
            <div class="col-auto">
                <h2 class="font-weight-normal lead mb-0 text-dark">Последние новости</h2>
            </div>
            <div class="col">
                <hr class="mb-0 mt-0"/>
            </div>
        </div>
    </div>

    <div id="carousel1" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel1" data-slide-to="0" class="active"></li>

            <li data-target="#carousel1" data-slide-to="1"></li>

            <li data-target="#carousel1" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/news/2.jpg" alt="First slide"/>
                <div class="carousel-caption d-none d-md-block">
                    <h1 style="text-shadow: 3px 3px #000000;">Мастер-класс для юных нахимовцев</h1>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="img/news/3.jpg" alt="Second slide"/>
                <div class="carousel-caption d-none d-md-block">
                    <h1 style="text-shadow: 3px 3px #000000;">Ловим первое летнее настроение</h1>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="img/news/6.jpg" alt="Third slide"/>
                <div class="carousel-caption d-none d-md-block">
                    <h1 style="text-shadow: 3px 3px #000000;">Книжная мини-выставка ко Дню славянской <письменности></письменности></h1>
                </div>
            </div>
        </div>     <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
    </div>

    <section class="pb-5 pt-5 text-center">
        <div class="container pb-4 pt-4">
            <div class="row">
                <div class="col-lg-8 ml-auto mr-auto py-3">
                    <h2 class="text-dark">Подписаться на обновления</h2>
                    <div class="col-md-9 col-xl-8 ml-auto mr-auto">
                        <form>
                            <div class="align-items-center bg-white border input-group p-1">
                                <input type="email" class="border-0 form-control pb-2 pl-3 pr-3 pt-2" placeholder="Введите email..." aria-label="Recipient's email" aria-describedby="newsletter-submit"/>
                                <div class="input-group-append ml-1">
                                    <button class="btn btn-dark pb-2 pl-4 pr-4 pt-2 rounded-0" type="button" id="newsletter-submit">Отправить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>



<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

