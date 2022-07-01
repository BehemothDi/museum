<?php

/** @var yii\web\View $this */

use frontend\models\Sample;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;

$this->title = 'Музейно-выставочный центр «Галерея безопасности Мурманской области»';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <div class="container pl-5 pr-5 pt-2 pb-5 rounded" style="background-color: #e9ecef">
    <h1><?= Html::encode($this->title) ?></h1>

    <section class="text-center">
        <iframe src="https://www.mospano.ru/museums/2020/murmansk/" width="100%"  height="600" style="border:0; border-radius: 7px; overflow: hidden" allowfullscreen></iframe>
        <div class="bg-dark container-fluid text-white p-2">
            <a href="https://www.mospano.ru/museums/2020/murmansk/" target="_blank" style="color: white; text-decoration: none;">Открыть виртуальный тур в новом окне</a>
        </div>
    </section>

    <?php



    $sample_list = Sample::find()->asArray()->all();

    $provider2 = new ActiveDataProvider([
        'query' => Sample::find(),
        'pagination' => [
            'pageSize' => 9,

        ],
    ]);

    ?>

    <div class="album py-5 ">
        <div class="container">
            <div class="row">
                <?php foreach ($provider2->getModels() as $sample): ?>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="<?php echo $sample['image_link']; ?>"/>
                        <div class="card-body">
                            <p class="card-text"><?php echo $sample['description']; ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">

                                    <button type="button" class="btn btn-sm btn-outline-secondary">Посмотреть</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Редактировать</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="container text-left">
            <?php
            echo LinkPager::widget([
                'pagination' => $provider2->pagination,
                'options' => ['class' => 'd-flex flex-row justify-content-center pagination text-left'],
                'maxButtonCount' => 8,
                'linkOptions' => ['class' => 'page-link'],
                'firstPageLabel'=>'&nbsp;',
                'lastPageLabel'=>'&nbsp;',
                'prevPageLabel' => '&nbsp;',
                'nextPageLabel' => '&nbsp;',
                'prevPageCssClass' => 'd-none',
                'nextPageCssClass' => 'd-none',
                'firstPageCssClass' => 'd-none',
                'lastPageCssClass' => 'd-none',
            ]);
            ?>
        </div>

    </div>
    </div>

</div>