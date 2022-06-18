<?php

/* @var yii\web\View $this */

use yii\helpers\Url;

$this->title = 'Главная';
?>
<div class="head_1">
    <div class="col-md-5 col-xl-10">
        <p class="display-4 fw-bold text-white">Добро пожаловать в</p>
        <h1 class="display-3 fw-bold text-white">Галерею безопасности Мурманской области</h1>
    </div>
</div>


<section class="pb-4 pt-4"> 
    <div class="container"> 
        <div class="justify-content-center row"> 
            <div class="col-md-6 py-3"> 
                <div class="position-relative text-dark"> 
                    <div class="button2">
                    <a class="button2" tabindex="0" href="<?= Url::to(['news']) ?>"></a></p>
                        <h2 class="h4 mb-3">Новости</h2>
                    </div>                     
                </div>                 
            </div>
            <div class="col-md-6 py-3"> 
                <div class="position-relative text-dark"> 
                        <div class="button2">
                            <a class="button2" tabindex="0" href="<?= Url::to(['gallery']) ?>"></a></p>
                                <h2 class="h4 mb-3">Галлерея</h2>
                    </div>                     
                </div>                 
            </div>      
            <div class="col-md-6 py-3"> 
                <div class="position-relative text-dark"> 
                        <div class="button2">
                            <a class="button2" tabindex="0" href="<?= Url::to(['record']) ?>"></a></p>
                                <h2 class="h4 mb-3">Запись</h2>
                    </div>                     
                </div>                 
            </div>     
            <div class="col-md-6 py-3"> 
                <div class="position-relative text-dark"> 
                        <div class="button2">
                            <a class="button2" tabindex="0" href="<?= Url::to(['about']) ?>"></a></p>
                                <h2 class="h4 mb-3">О нас</h2>
                    </div>                     
                </div>                 
            </div>            
        </div>         
    </div>     
</section>

<section> 
        <div class="container"> 
            <div class="justify-content-center row"> 
                <div class="col-lg-4 col-md-6 py-3 position-top"> 
                    <div class="position-top text-dark"> 
                    <a class="button3" tabindex="0" href="https://vk.com/public191153873"></a></p>
                        <div class="bottom-0 end-0  pe-4 position-top ps-4 start-0 text-center">
                            <h2 class="h5 mb-3 text-center">Группа ВКонтакте</h2>
                        </div>                     
                    </div>                 
                </div>
                <div class="col-lg-4 col-md-6 py-3"> 
                    <div class="position-relative text-dark"> 
                    <a class="button3" tabindex="0" href="https://51.mchs.gov.ru/"></a></p>
                        <div class="bottom-0 end-0  pe-4 position-top ps-4 start-0 text-center">
                            <h2 class="h5 mb-3">Управление гражданской обороны</h2>
                        </div>                     
                    </div>                 
                </div>
                <div class="col-lg-4 col-md-6 py-3"> 
                    <div class="position-relative text-dark"> 
                    <a class="button3" tabindex="0" href="https://murman01.ru/?page_id=11744"></a></p>
                        <div class="bottom-0 end-0  pe-4 position-top ps-4 start-0 text-center">
                            <h2 class="h5 mb-3">Главное управление МЧС России по Мурманской области</h2>
                        </div>                     
                    </div>                 
                </div>             
            </div>         
        </div>     
 </section>