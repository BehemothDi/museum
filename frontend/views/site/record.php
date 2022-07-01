<?php

use kl83\ymaps\MapWidget;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Record */
/* @var $form ActiveForm */

$this->title = 'Запись';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-about">
    <div class="container pl-5 pr-5 pt-2 pb-5 rounded" style="background-color: #e9ecef">
        <h1>Записаться на экскурсию</h1>
    <div class="row">
        <div class="col-sm m-3">

            <?php $form = ActiveForm::begin(); ?>


            <?= $form->field($model, 'name')->textInput(['type' => 'text', 'maxlength' => 20, 'autofocus' => true,])  ?>
            <?= $form->field($model, 'surname')->textInput(['type' => 'text', 'maxlength' => 20]) ?>
            <?= $form->field($model, 'patronymic')->textInput(['type' => 'text', 'maxlength' => 20])?>
            <?= $form->field($model, 'phone')->textInput(['type' => 'text', 'maxlength' => 12]) ?>
            <?= $form->field($model, 'email')->textInput(['type' => 'text', 'maxlength' => 20])?>
            <?= $form->field($model, 'date')->textInput(['type' => 'date']) ?>
            <?= $form->field($model, 'amount_info') ?>
            <?= $form->field($model, 'commentary')->textarea(['rows' => 6]) ?>

            <div class="form-group">
                <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
            </div>
            <?php ActiveForm::end(); ?>

        </div>
        <div class="col-sm m-3">
        <div class="">
            <p style="font-weight: bold">Как к нам добраться?</p>
            <ul style="list-style: none; padding-left: 0">
                <li>
                    На троллейбусе:
                    <ul style="list-style: disc">
                        <li>№6 до остановки «Улица Шевченко»,</li>
                        <li>№4 до остановки «Улица Шевченко» (конечная).</li>
                    </ul>
                </li>
                <li>
                    На автобусе:
                    <ul style="list-style: disc">
                        <li>№5, 10, 27 до остановки «Улица Шевченко»,</li>
                        <li>№18 до остановки «Улица Баумана».</li>
                    </ul>
                </li>
                <li>
                    Пригородные автобусы:
                    <ul style="list-style: disc">
                        <li>№108, 110 до остановки «Улица Шевченко».</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="p-1">
            <?= MapWidget::widget([
                'mapState' => [
                    'center' => [68.907066, 33.098016],
                    'zoom' => 16,
                ],
                'placemarks' => [
                    [
                        [68.907066, 33.098016],
                        [], // properties
                        [], // options
                    ],
                ],
            ]) ?>
        </div>
        </div>
    </div>

    </div>




</div>
