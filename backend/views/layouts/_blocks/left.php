<?php

use andrewdanilov\adminpanel\widgets\Menu;

/* @var $this \yii\web\View */
/* @var $siteName string */
/* @var $directoryAsset false|string */

?>

<div class="page-left">
	<div class="sidebar-heading"><?= $siteName ?></div>
	<?= Menu::widget(['items' => [
		['label' => 'Главная', 'url' => ['/site/index'], 'icon' => 'desktop'],
		[],
		['label' => 'Blog'],
		['label' => 'Новости', 'url' => ['/news/index'], 'icon' => ['symbol' => 'newspaper', 'type' => 'regular']],
		['label' => 'Экспонаты', 'url' => ['/articles/index'], 'icon' => ['symbol' => 'newspaper', 'type' => 'solid']],
		[],
		['label' => 'System'],
		['label' => 'Пользователи', 'url' => ['/user/index'], 'icon' => 'users'],
	]]) ?>
</div>
