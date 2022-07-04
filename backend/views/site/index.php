<?php

/* @var $this View */
/* @var $record Record */

use backend\models\RecordSearch;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\DetailView;
use frontend\models\ContactForm;
use backend\models\Record;
use yii\web\View;

$this->registerCssFile("css/my.css");
$this->title = "Добро пожаловать!"
?>
<div>
 <div class="record-card">
    <div class="record-card-line" style="border-top: 2px whitesmoke dashed; margin-top: 5px;">Иванов Иван Иванович</div>
    <div class="record-card-line">email: sobaka@sobaka.ru</div>
    <div class="record-card-line">телефон: +792140001212</div>
    <div class="record-card-line">количество человек: 20</div>
    <div class="record-card-line">дата: 23-23-2123</div>
    <div class="record-card-line">время: 11:11</div>
    <div class="record-card-line">втыаолвтыоатывоаироывиарывиаривыраиывриарывиароиывраиыриарывариыварииаы</div>
    <div class="record-card-line">
         <div class="record-button" style="color: green">Подтвердить запись</div>
    </div>
     <div class="record-card-line" style="margin-bottom: 5px;">
         <div class="record-button" style="color: red">
             Отклонить запись
         </div>
     </div>

 </div>

</div>