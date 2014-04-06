<div class="municipios form">
<?php echo $this->Form->create('Municipio'); ?>
	<fieldset>
		<legend><?php echo __('Administrador Edit Municipio'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('region_id');
		echo $this->Form->input('codigo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Municipio.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Municipio.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Municipios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Regiones'), array('controller' => 'regiones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Region'), array('controller' => 'regiones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Localidades'), array('controller' => 'localidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Localidad'), array('controller' => 'localidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
