<?php

/* @var $this View */
/* @var $searchModel Sample */
/* @var $dataProvider ActiveDataProvider */

$this->title = 'Образцы';

use andrewdanilov\gridtools\FontawesomeActionColumn;
use app\models\News;
use backend\models\Sample;
use yii\data\ActiveDataProvider;
use yii\grid\GridView;
use andrewdanilov\adminpanel\models\User;
use andrewdanilov\adminpanel\models\UserSearch;
use yii\helpers\Html;
use yii\web\View;

?>

<div class="form-group">
	<?= Html::a('Новая запись', ['update'], ['class' => 'btn btn-success']) ?>
</div>

<?= GridView::widget([
	'filterModel' => $searchModel,
	'dataProvider' => $dataProvider,
	'columns' => [
		[
			'attribute' => 'id',
			'headerOptions' => ['width' => 50],
		],
		'image_link',
        'title',
		'short_desc',
        'datetime',
		[
			'class' => FontawesomeActionColumn::class,
			'template' => '{update}{delete}',
		]
	]
]) ?>