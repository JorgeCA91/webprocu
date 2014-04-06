<div class="regiones form">
<?php echo $this->Form->create('Region'); ?>
	<fieldset>
		<legend><?php echo __('Administrador Add Region'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('municipio');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Regiones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Mps'), array('controller' => 'mps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mp'), array('controller' => 'mps', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Municipios'), array('controller' => 'municipios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipio'), array('controller' => 'municipios', 'action' => 'add')); ?> </li>
	</ul>
</div>
