<div class="parentescos view">
<h2><?php echo __('Parentesco'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($parentesco['Parentesco']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parentesco'); ?></dt>
		<dd>
			<?php echo h($parentesco['Parentesco']['parentesco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Denunciante'); ?></dt>
		<dd>
			<?php echo $this->Html->link($parentesco['Denunciante']['id'], array('controller' => 'denunciantes', 'action' => 'view', $parentesco['Denunciante']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Parentesco'), array('action' => 'edit', $parentesco['Parentesco']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Parentesco'), array('action' => 'delete', $parentesco['Parentesco']['id']), null, __('Are you sure you want to delete # %s?', $parentesco['Parentesco']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Parentescos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parentesco'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Denunciantes'), array('controller' => 'denunciantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Denunciante'), array('controller' => 'denunciantes', 'action' => 'add')); ?> </li>
	</ul>
</div>
