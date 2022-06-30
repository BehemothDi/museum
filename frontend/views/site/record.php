<?php
use frontend\models\ContactForm;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\bootstrap4\ActiveForm $form */
/** @var ContactForm $model */

$this->title = 'Запись';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="site-about">
    <div class="pl-5 pr-5 pt-2 pb-5 bg-light">
    <h1><?= Html::encode($this->title) ?> на посещение</h1>

     <?= Yii::$app->session->getFlash('success'); ?>


    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
    <?= $form->field($model, 'surname') ?>
    <?= $form->field($model, 'patronymic') ?>
    <?= $form->field($model, 'email') ?>
    <?= $form->field($model, 'phone') ?>
    <?= $form->field($model, 'date') ?>
    <?= $form->field($model, 'amount_info') ?>
    <?= $form->field($model, 'commentary')->textarea(['rows' => 6]) ?>


    <div class="form-group">
        <?= Html::submitButton('Отправить заявку', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    </div>
</div>
