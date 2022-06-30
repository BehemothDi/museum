<?php

use andrewdanilov\gridtools\FontawesomeActionColumn;
use backend\models\Record;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RecordSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Records';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="record-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Record', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'surname',
            'patronymic',
            'phone',
            'email:email',
            'date',
            'amount_info',
            'commentary:ntext',
            [
                'class' => FontawesomeActionColumn::class,
                'template' => '{view}{update}{delete}',
                'headerOptions' => ['width' => 70],
            ]
        ],
    ]); ?>


</div>
