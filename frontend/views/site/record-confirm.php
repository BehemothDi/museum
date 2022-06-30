<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Record */
/* @var $form ActiveForm */
?>
<p>Ваша заявка принята</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->surname) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->patronymic) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->phone) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->date) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->amount_info) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->commentary) ?></li>
</ul>