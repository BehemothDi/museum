<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Record */

$this->title = 'Создать запись';
?>
<div class="record-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
