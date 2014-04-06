<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php //echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="wrapper">
		<div class="shell" >
			<div class="container">
				<header id="header">
					<h1 id="logo"><a href="#">Localización de personas desaparecidas</a></h1>
					<!-- search -->
					<div class="search">
						<form action="" method="post">
							<input type="text" class="field" title="keywords here ..." />
							<input type="submit" class="search-btn" value="" />
							<div class="cl">&nbsp;</div>
						</form>
					</div>
					<!-- end of search -->
					<div class="cl">&nbsp;</div>
				</header>
					<?php echo $this->Session->flash(); ?>
					
					<?php echo $this->element('menu');?>
					
				<div class="main">
					<?php echo $this->fetch('content'); ?>
				</div>
					
				<div id="footer">
				</div>
			</div>
		</div>
	</div>
	
	<?php echo $this->element('sql_dump'); ?>
	<script src="<?php echo Router::url('/'); ?>js/jquery-1.8.0.min.js"></script>
	<script src="<?php echo Router::url('/'); ?>js/functions.js"></script>
	<script src="<?php echo Router::url('/'); ?>js/jquery.carouFredSel-5.5.0-packed.js"></script>
</body>
</html>
