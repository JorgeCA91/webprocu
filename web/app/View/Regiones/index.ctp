<div class="regiones index">
	<h2><?php echo __('Regiones'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('municipio'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($regiones as $region): ?>
	<tr>
		<td><?php echo h($region['Region']['id']); ?>&nbsp;</td>
		<td><?php echo h($region['Region']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($region['Region']['municipio']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $region['Region']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $region['Region']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $region['Region']['id']), null, __('Are you sure you want to delete # %s?', $region['Region']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Region'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Mps'), array('controller' => 'mps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mp'), array('controller' => 'mps', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Municipios'), array('controller' => 'municipios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipio'), array('controller' => 'municipios', 'action' => 'add')); ?> </li>
	</ul>
</div>
