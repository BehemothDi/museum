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


?>


<div class="form-group">
    <?= \yii\helpers\Html::a('Новая запись', ['create'], ['class' => 'btn btn-success']) ?>
</div>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'headerOptions' => ['width' => 50],
                'attribute' => 'id'
            ],
            [
                'headerOptions' => ['width' => 250],
                'attribute' => 'status',
                'value' => function(Record $model) {
                    $statuses = Record::getStatuses();
                    return $statuses[$model->status];
                },
                'filter' => Record::getStatuses(),
            ],
            'name',
            'surname',
            'patronymic',
            'phone',
            'email:email',
            'date',
            'time',
            'amount_info',
            'commentary:ntext',
            [
                'class' => FontawesomeActionColumn::class,
                'template' => '{view}{update}{delete}',
                'headerOptions' => ['width' => 70],
            ]
        ],
    ]); ?>


