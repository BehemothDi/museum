<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Record */
/* @var $form ActiveForm */

$this->title = 'Запись';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-about">
    <div class="pl-5 pr-5 pt-2 pb-5 bg-light">
    <div class="record w-50">

        <?php $form = ActiveForm::begin(); ?>


        <?= $form->field($model, 'name')->textInput(['autofocus' => true])  ?>
        <?= $form->field($model, 'surname') ?>
        <?= $form->field($model, 'patronymic') ?>
        <?= $form->field($model, 'phone') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'date') ?>
        <?= $form->field($model, 'amount_info') ?>
        <?= $form->field($model, 'commentary')->textarea(['rows' => 6]) ?>

        <div class="form-group">
            <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
        </div>
        <?php ActiveForm::end(); ?>

    </div>
    </div>
</div>
