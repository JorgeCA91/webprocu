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
	<?php $menu_activo = '2';?>
	<ul>
		<li <?php echo $menu_activo=='1'? "class='active'": ""; ?> ><a href="<?php echo Router::url('/Admins/'); ?>">Inicio</a></li>
		<li <?php echo $menu_activo=='2'? "class='active'": ""; ?>><a href="<?php echo Router::url('/administrador/extraviados/'); ?>">Extraviados</a></li>
		<li <?php echo $menu_activo=='3'? "class='active'": ""; ?>><a href="<?php echo Router::url('/administrador/reportes/'); ?>">Reportes</a></li>
		<li <?php echo $menu_activo=='4'? "class='active'": ""; ?>><a href="<?php echo Router::url('/administrador/denunciantes/'); ?>">Denunciantes</a></li>
		<li <?php echo $menu_activo=='5'? "class='active'": ""; ?>><a href="<?php echo Router::url('/admins/consulta/'); ?>">Consultas</a></li>
	</ul>
	<div class="cl">&nbsp;</div>
</nav>
<div class="extraviados index">
	<h2><?php echo __('Extraviados'); ?></h2>
	<div class='datagrid'>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			
			<th>Nombre</th>
			<th>Apelidos</th>
			<th>Edad</th>
			<th>Domicilio</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($extraviados as $extraviado): ?>
	<tr>
		<td><?php echo h($extraviado['Usuario']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($extraviado['Usuario']['apellido_paterno']) .' '.h($extraviado['Usuario']['apellido_materno']); ?>&nbsp;</td>
		<td><?php echo h($extraviado['Extraviado']['edad']); ?>&nbsp;</td>
		<td><?php echo h($extraviado['Extraviado']['domicilio']); ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
</tbody>
	</table>
	</div>
	
</div>
