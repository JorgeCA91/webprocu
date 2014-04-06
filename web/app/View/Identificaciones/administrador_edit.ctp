<div class="identificaciones form">
<?php echo $this->Form->create('Identificacion'); ?>
	<fieldset>
		<legend><?php echo __('Administrador Edit Identificacion'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tipo');
		echo $this->Form->input('denunciante_id');
		echo $this->Form->input('extraviado_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Identificacion.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Identificacion.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Identificaciones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Denunciantes'), array('controller' => 'denunciantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Denunciante'), array('controller' => 'denunciantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Extraviados'), array('controller' => 'extraviados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Extraviado'), array('controller' => 'extraviados', 'action' => 'add')); ?> </li>
	</ul>
</div>
