<?php

/** @var yii\web\View $this */

use frontend\models\News;
use yii\helpers\Html;
use frontend\models\NewsSearch;

$this->title = 'Новости';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row p-1 w-100 vh-100">
        <div class="col-4 bg-success">.col</div>
        <div class="col-8 bg-warning">.col</div>
    </div>

</div>