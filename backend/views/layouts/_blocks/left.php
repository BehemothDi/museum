<?php

use andrewdanilov\adminpanel\widgets\Menu;

/* @var $this \yii\web\View */
/* @var $siteName string */
/* @var $directoryAsset false|string */

?>

<div class="page-left">
	<div class="sidebar-heading"><?= $siteName ?></div>
	<?= Menu::widget(['items' => [
		['label' => 'Домой', 'url' => ['/site/index'], 'icon' => 'desktop'],
		[],
		['label' => 'Управление'],
		['label' => 'Новости', 'url' => ['/news/index'], 'icon' => ['symbol' => 'newspaper', 'type' => 'regular']],
        ['label' => 'Экспонаты', 'url' => ['/sample/index'], 'icon' => ['symbol' => 'newspaper', 'type' => 'regular']],
        ['label' => 'Записи', 'url' => ['/record/index'], 'icon' => ['symbol' => 'newspaper', 'type' => 'regular']],
		[],
		['label' => 'Система'],
		['label' => 'Пользователи', 'url' => ['/user/index'], 'icon' => 'users'],
        [],
        ['label' => 'Разное'],
        ['label' => 'Сайт', 'icon' => 'link', 'url' => '/museum', ],
        [],
        ['label' => 'Локально'],
        ['label' => 'PhpMyAdmin', 'icon' => 'file', 'url' => '/phpmyadmin', ],
        ['label' => 'Gii', 'icon' => 'file-code', 'url' => ['/gii'], ],
        ['label' => 'Debug', 'icon' => 'bug', 'url' => ['/debug'], 'target' => '_blank'],
	]]) ?>
</div>
