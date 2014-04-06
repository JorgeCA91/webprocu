<?php
/**
 * e-escolar.net
 * Vista:  Users Ver
 */


#sección metaDatos
$this->set('title_for_layout', 'PROCU - Usuarios Inicio');
$this->Html->meta('description', 'Usuarios Inicio', array('inline' => false));

$this->Html->css(array('style','styletable'), 'stylesheet', array('inline' => false));

$this->set('menu_activo', '4');
											
?>
<div class="extraviados index">
	<h2><?php echo __('Extraviados'); ?></h2>
	<div class="datagrid">
	<table cellpadding="0" cellspacing="0">
	<thead>
		<tr>
				<th>Nombre</th>
				<th>Apellido Paterno</th>
				<th>Apellido Materno</th>
		</tr>
	</thead>
	<tbody>
	<?php $class = 1;?>
	<?php foreach ($extraviados as $extraviado): ?>
		<?php 
			$class++;
			if( ( (intval($class%2)) == 0 ) ) {
				echo "<tr class='alt'>";
			} else {
				echo '<tr>';
			}
		?>
		<td ><?php echo h($extraviado['Usuario']['nombre']); ?>&nbsp;</td>
		<td ><?php echo h($extraviado['Usuario']['apellido_paterno']); ?>&nbsp;</td>
		<td ><?php echo h($extraviado['Usuario']['apellido_materno']); ?>&nbsp;</td>
		<!--td><?php echo h($extraviado['Extraviado']['fechaNac']); ?>&nbsp;</td>
		<td><?php echo h($extraviado['Extraviado']['edad']); ?>&nbsp;</td>
		<td><?php echo h($extraviado['Extraviado']['genero']); ?>&nbsp;</td>
		<td><?php echo h($extraviado['Extraviado']['originario']); ?>&nbsp;</td>
		<td><?php echo h($extraviado['Extraviado']['nacionalidad']); ?>&nbsp;</td>
		<td><?php echo h($extraviado['Extraviado']['domicilio']); ?>&nbsp;</td>
		<td><?php echo h($extraviado['Extraviado']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($extraviado['Extraviado']['redSocial']); ?>&nbsp;</td>
		<td-->
			<?php // echo $this->Html->link($extraviado['Localidad']['nombre'], array('controller' => 'localidades', 'action' => 'view', $extraviado['Localidad']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	</div>

</div>

