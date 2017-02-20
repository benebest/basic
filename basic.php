<?php

use Maslosoft\Ilmatar\Components\Application;
use Maslosoft\Ilmatar\Components\Controller;
use Maslosoft\Ilmatar\Widgets\Breadcrumbs;
use Maslosoft\Ilmatar\Widgets\Html\Decorator;
use Maslosoft\Ilmatar\Widgets\Search\SearchDrawer;
use Maslosoft\Menulis\Widgets\Menu\LinkBlocks;
use Maslosoft\Menulis\Widgets\Menu\PageLinks;

/* @var $this Controller */
?>
<div id="mainWrapper">
	<div>
		<header id="topBg" class="container">
			<div class="row">
				<div class="col-sm-2 col-xs-4" >
					<a class="logo-img" href="/" title="">
					</a>
				</div>
				<div class="col-sm-7 col-xs-8" id="menuBg">
					<?php
					echo PageLinks::widget([
						'code' => 'mainMenu',
						'flags' => true
					]);
					?>
				</div>
				<div class="col-sm-3" id="searchBox">
					<?php
					echo SearchDrawer::widget([
						//'icon' => false,
						'id' => 'top-search'
					]);
					?>
				</div>
			</div>
		</header>
		<div class="container">
			<?php
			echo Breadcrumbs::widget([
				'homeLink' => [tx('Home page') => (string) Yii::app()->baseUrl . '/'],
				'links' => $this->breadcrumbs,
				'encodeLabel' => false,
				'separator' => ' <i class="fa fa-angle-right"></i> '
			]);
			?>
		</div>
		<?= $content; ?>
		<footer id="bottomBg" class="container">
			<div class="row">
				<div class="col-xs-12">
					<?php
					echo PageLinks::widget([
						'code' => 'midMenu',
					]);
					?>
				</div>
			</div>
		</footer>
	</div>

	<div id="bottomWrapper">
		<div class="container">
			<div class="row">
				<?php
				echo LinkBlocks::widget([
					'columns' => '4',
					'showTitles' => true,
					'codes' => [
						'bottomLeft',
						'bottomCenter',
						'bottomRight'
				]]);
				?>
			</div>
		</div>
		<div id="leafBot" class="container">
			<div id="copyright" class="row">
				<div class="col-md-3 pull-left">
					<?= Decorator::madeBy('2017'); ?>
				</div>
			</div>
		</div>
	</div>
</div>