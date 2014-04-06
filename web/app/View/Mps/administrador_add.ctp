<div class="mps form">
<?php echo $this->Form->create('Mp'); ?>
	<fieldset>
		<legend><?php echo __('Administrador Add Mp'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('direccion');
		echo $this->Form->input('region_id');
		echo $this->Form->input('longitud');
		echo $this->Form->input('latitud');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Mps'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Regiones'), array('controller' => 'regiones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Region'), array('controller' => 'regiones', 'action' => 'add')); ?> </li>
	</ul>
</div>
