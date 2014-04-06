<nav id="navigation">
	<a href="#" class="nav-btn">Inicio<span></span></a>
	<?php $menu_activo;?>
	<ul>
		<li <?php echo $menu_activo=='1'? "class='active'": ""; ?> ><a href="<?php echo Router::url('/'); ?>">Inicio</a></li>
		<li <?php echo $menu_activo=='2'? "class='active'": ""; ?>><a href="<?php echo Router::url('/usuarios/mensaje/'); ?>">Quienes somos</a></li>
		<li <?php echo $menu_activo=='3'? "class='active'": ""; ?>><a href="<?php echo Router::url('/reportes/add/'); ?>">Denuncia</a></li>
		<li <?php echo $menu_activo=='5'? "class='active'": ""; ?>><a href="<?php echo Router::url('/usuarios/consulta/'); ?>">Consulta</a></li>
		<li <?php echo $menu_activo=='5'? "class='active'": ""; ?>><a href="<?php echo Router::url('/usuarios/quejas/'); ?>">Quejas y Sugerencias</a></li>
		<li <?php echo $menu_activo=='6'? "class='active'": ""; ?>><a href="<?php echo Router::url('/usuarios/contacto/'); ?>">Contacto</a></li>
	</ul>
	<div class="cl">&nbsp;</div>
</nav>
