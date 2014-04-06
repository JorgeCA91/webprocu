<div class="parentescos form">
<?php echo $this->Form->create('Parentesco'); ?>
	<fieldset>
		<legend><?php echo __('Edit Parentesco'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('parentesco');
		echo $this->Form->input('denunciante_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Parentesco.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Parentesco.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Parentescos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Denunciantes'), array('controller' => 'denunciantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Denunciante'), array('controller' => 'denunciantes', 'action' => 'add')); ?> </li>
	</ul>
</div>
