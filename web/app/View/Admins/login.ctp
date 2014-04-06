<?php
/**
 * e-escolar.net
 * Vista:  Users Ver
 */


#sección metaDatos
$this->set('title_for_layout', 'PROCU - Usuarios Inicio');
$this->Html->meta('description', 'Usuarios Inicio', array('inline' => false));
$this->Html->css(array('style','form','styletable','style1','jquery.ui.timepicker.css'), 'stylesheet', array('inline' => false));
$this->Html->script(
	array(
		'jquery-1.8.0.min.js',
		'estilos',
		'estilosAdmin'
	),
	array(
	'inline' => false
	)
);
?>
<nav id="navigation">
	<a href="#" class="nav-btn">Inicio<span></span></a>
	<?php $menu_activo = '1';?>
	<ul>
		<li <?php echo $menu_activo=='1'? "class='active'": ""; ?> ><a href="<?php echo Router::url('/Admins/'); ?>">Inicio</a></li>
		<li <?php echo $menu_activo=='2'? "class='active'": ""; ?>><a href="<?php echo Router::url('/administrador/extraviados/'); ?>">Extraviados</a></li>
		<li <?php echo $menu_activo=='3'? "class='active'": ""; ?>><a href="<?php echo Router::url('/administrador/reportes/'); ?>">Reportes</a></li>
		<li <?php echo $menu_activo=='4'? "class='active'": ""; ?>><a href="<?php echo Router::url('/administrador/denunciantes/'); ?>">Denunciantes</a></li>
		<li <?php echo $menu_activo=='5'? "class='active'": ""; ?>><a href="<?php echo Router::url('/admis/consulta'); ?>">Consultas</a></li>
	</ul>
	<div class="cl">&nbsp;</div>
</nav>
<div class='cols'>
<form>
  <h1>Entrar</h1>
  <div class="inset">
  <p>
    <label for="email">USUARIO</label>
    <input type="text" name="email" id="email">
  </p>
  <p>
    <label for="password">CONTRASEÑA</label>
    <input type="password" name="password" id="password">
  </p>
  <p>
    <input type="checkbox" name="remember" id="remember">
    <label for="remember">Recordar datos</label>
  </p>
  </div>
  <p class="p-container">
    
    <input type="submit" name="go" id="go" value="Log in">
  </p>
</form>
</div>
