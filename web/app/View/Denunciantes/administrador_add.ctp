<?php
/**
 * e-escolar.net
 * Vista:  Users Ver
 */


#sección metaDatos
$this->set('title_for_layout', 'PROCU - Usuarios Inicio');
$this->Html->meta('description', 'Usuarios Inicio', array('inline' => false));
$this->Html->css(array('style','form','style1','jquery.ui.timepicker.css'), 'stylesheet', array('inline' => false));
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
$this->set('menu_activo', '4');
?>
<div class="denunciantes form">
<?php echo $this->Form->create('Denunciante'); ?>
	<fieldset>
		<legend><?php echo __('Administrador Add Denunciante'); ?></legend>
	<?php
		echo $this->Form->input('usuario_id');
		echo $this->Form->input('domicilio');
		echo $this->Form->input('tel');
		echo $this->Form->input('localidad_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Denunciantes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Localidades'), array('controller' => 'localidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Localidad'), array('controller' => 'localidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Identificaciones'), array('controller' => 'identificaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Identificacion'), array('controller' => 'identificaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Parentescos'), array('controller' => 'parentescos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parentesco'), array('controller' => 'parentescos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reportes'), array('controller' => 'reportes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reporte'), array('controller' => 'reportes', 'action' => 'add')); ?> </li>
	</ul>
</div>
