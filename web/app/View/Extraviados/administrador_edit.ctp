<div class="extraviados form">
<?php echo $this->Form->create('Extraviado'); ?>
	<fieldset>
		<legend><?php echo __('Administrador Edit Extraviado'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('fechaNac');
		echo $this->Form->input('edad');
		echo $this->Form->input('genero');
		echo $this->Form->input('originario');
		echo $this->Form->input('nacionalidad');
		echo $this->Form->input('domicilio');
		echo $this->Form->input('telefono');
		echo $this->Form->input('correoElectronico');
		echo $this->Form->input('redSocial');
		echo $this->Form->input('localidad_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Extraviado.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Extraviado.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Extraviados'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Localidades'), array('controller' => 'localidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Localidad'), array('controller' => 'localidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Identificaciones'), array('controller' => 'identificaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Identificacion'), array('controller' => 'identificaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reportes'), array('controller' => 'reportes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reporte'), array('controller' => 'reportes', 'action' => 'add')); ?> </li>
	</ul>
</div>
