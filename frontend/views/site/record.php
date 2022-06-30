<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Record */
/* @var $form ActiveForm */
?>
<div class="record">

    <?php $form = ActiveForm::begin(); ?>


        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'surname') ?>
        <?= $form->field($model, 'patronymic') ?>
        <?= $form->field($model, 'phone') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'date') ?>
        <?= $form->field($model, 'amount_info') ?>
        <?= $form->field($model, 'commentary') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- record -->
