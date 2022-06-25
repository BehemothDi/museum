<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Sample */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sample-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'titlr')->textInput() ?>

    <?= $form->field($model, 'imagelink')->textInput() ?>

    <?= $form->field($model, 'description')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
