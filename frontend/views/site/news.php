<?php

/** @var yii\web\View $this */

use frontend\models\News;
use yii\data\Pagination;
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\controllers\SiteController;
use frontend\controllers\NewsController;
use yii\widgets\LinkPager;
use yii\data\ActiveDataProvider;

$this->title = 'Новости';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <div class="container pl-5 pr-5 pt-2 pb-5 rounded" style="background-color: #e9ecef">
        <h1><?= Html::encode($this->title) ?></h1>
        <?php
        $news_list = News::find()->asArray()->all();
        $provider = new ActiveDataProvider([
            'query' => News::find(),
            'pagination' => [
                'pageSize' => 7,

            ],


        ]);
        ?>
        <div class="container">

            <?php foreach ($provider->getModels() as $news): ?>
                <div class="col-lg-12 col-md-6">
                    <div class="card flex-md-row mb-4 box-shadow h-md-250">
                        <img class="card-img-right flex-auto d-none d-md-block img-thumbnail img-responsive"
                             src="<?php echo $news['image_link']; ?>" alt="Card image cap" height="150" width="400"/>
                        <div class="card-body d-flex flex-column align-items-start"><strong
                                    class="d-inline-block mb-2 text-secondary"><?php echo $news['author']; ?></strong>
                            <h3 class="mb-0"><a class="text-dark" href="#"><?php echo $news['title']; ?></a></h3>
                            <div class="mb-1 text-muted"><?php echo $news['datetime']; ?></div>
                            <p class="card-text mb-auto"><?php echo $news['short_desc']; ?></p><a
                                    href="<?= Url::toRoute(['site/news_detailed', 'id' => $news['id']]); ?>">Посмотреть
                                подробнее</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>


            <div class="container text-left">
                <?php
                echo LinkPager::widget([
                    'pagination' => $provider->pagination,
                    'options' => ['class' => 'd-flex flex-row justify-content-center pagination text-left'],
                    'maxButtonCount' => 8,
                    'linkOptions' => ['class' => 'page-link'],
                    'firstPageLabel' => '&nbsp;',
                    'lastPageLabel' => '&nbsp;',
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