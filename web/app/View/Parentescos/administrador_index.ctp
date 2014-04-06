<div class="parentescos index">
	<h2><?php echo __('Parentescos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('parentesco'); ?></th>
			<th><?php echo $this->Paginator->sort('denunciante_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($parentescos as $parentesco): ?>
	<tr>
		<td><?php echo h($parentesco['Parentesco']['id']); ?>&nbsp;</td>
		<td><?php echo h($parentesco['Parentesco']['parentesco']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($parentesco['Denunciante']['id'], array('controller' => 'denunciantes', 'action' => 'view', $parentesco['Denunciante']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $parentesco['Parentesco']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $parentesco['Parentesco']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $parentesco['Parentesco']['id']), null, __('Are you sure you want to delete # %s?', $parentesco['Parentesco']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Parentesco'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Denunciantes'), array('controller' => 'denunciantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Denunciante'), array('controller' => 'denunciantes', 'action' => 'add')); ?> </li>
	</ul>
</div>
