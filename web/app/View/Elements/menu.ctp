<nav id="navigation">
	<a href="#" class="nav-btn">Inicio<span></span></a>
	<?php $menu_activo;?>
	<ul>
		<li <?php echo $menu_activo=='1'? "class='active'": ""; ?> ><a href="<?php echo Router::url('/'); ?>">Inicio</a></li>
		<li <?php echo $menu_activo=='2'? "class='active'": ""; ?>><a href="<?php echo Router::url('/usuarios/mensaje/'); ?>">Quienes somos</a></li>
		<li <?php echo $menu_activo=='3'? "class='active'": ""; ?>><a href="<?php echo Router::url('/reportes/add/'); ?>">Denuncia</a></li>
		<li><a href="#">Consulta</a></li>
		<li><a href="<?php echo Router::url('/usuarios/quejas/'); ?>">Quejas y sujerencias</a></li>
		<li><a href="<?php echo Router::url('/usuarios/contacto/'); ?>">Contacto</a></li>
	</ul>
	<div class="cl">&nbsp;</div>
</nav>
