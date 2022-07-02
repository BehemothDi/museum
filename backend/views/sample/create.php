<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Sample */

$this->title = 'Новый экспонат';
?>
<div class="sample-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
