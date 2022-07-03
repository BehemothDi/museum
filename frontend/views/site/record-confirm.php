<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Record */
/* @var $form ActiveForm */


$this->title = 'О нас';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-about">
    <div class="container pl-5 pr-5 pt-2 pb-5 rounded" style="background-color: #e9ecef">
        <div class="record w-50">
            <p class="bg-success w-50 p-2">Ваша заявка принята. После одобрения администратором, Вам придёт уведомление по почте.</p>

            <ul>
                <li><label>Имя</label>: <?= Html::encode($model->name) ?></li>
                <li><label>Фамилия</label>: <?= Html::encode($model->surname) ?></li>
                <li><label>Отчество</label>: <?= Html::encode($model->patronymic) ?></li>
                <li><label>Электронная почта</label>: <?= Html::encode($model->email) ?></li>
                <li><label>Телефон</label>: <?= Html::encode($model->phone) ?></li>
                <li><label>Дата визита</label>: <?= Html::encode($model->date) ?></li>
                <li><label>Время визита</label>: <?= Html::encode($model->time) ?></li>
                <li><label>Количество человек</label>: <?= Html::encode($model->amount_info) ?></li>
                <li><label>Дополнительная информация</label>: <?= Html::encode($model->commentary) ?></li>
            </ul>
            <?= Html::a('На главную', ['/site/index'], ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
</div>
