<?php

/* @var $this \yii\web\View */
/* @var $searchModel \app\models\NewsSearch */
/* @var $dataProvider \yii\data\ActiveDataProvider */

$this->title = 'Новости';

use app\models\News;
use yii\grid\GridView;
use andrewdanilov\adminpanel\models\User;
use andrewdanilov\adminpanel\models\UserSearch;

?>

<div class="form-group">
	<?= \yii\helpers\Html::a('Новая запись', ['update'], ['class' => 'btn btn-success']) ?>
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
			'class' => \andrewdanilov\gridtools\FontawesomeActionColumn::class,
			'template' => '{update}{delete}',
		]
	]
]) ?>