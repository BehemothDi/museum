<?php
use frontend\models\ContactForm;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\bootstrap4\ActiveForm $form */
/** @var ContactForm $model */

$this->title = 'Запись';
$this->params['breadcrumbs'][] = $this->title;
?>
    <div class="pl-5 pr-5 pt-2 pb-5 bg-light">
<div class="p-2 bg-success w-25 text-white">
    Ваша заявка принята
</div>


<ul>

    <li><label>Имя</label>: <?= Html::encode($model->name) ?></li>

    <li><label>Фамилия</label>: <?= Html::encode($model->surname) ?></li>
    <li><label>Отчество</label>: <?= Html::encode($model->patronymic) ?></li>
    <li><label>Почта</label>: <?= Html::encode($model->email) ?></li>
    <li><label>Телефон</label>: <?= Html::encode($model->phone) ?></li>
    <li><label>Телефон</label>: <?= Html::encode($model->date) ?></li>
    <li><label>Телефон</label>: <?= Html::encode($model->amount_info) ?></li>
    <li><label>Телефон</label>: <?= Html::encode($model->commentary) ?></li>
</ul>


<?= Html::a('На главную', ['/site/index'], ['class'=>'btn btn-primary']) ?>

        </div>
