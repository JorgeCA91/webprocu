<div class="mps index">
	<h2><?php echo __('Mps'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('region_id'); ?></th>
			<th><?php echo $this->Paginator->sort('longitud'); ?></th>
			<th><?php echo $this->Paginator->sort('latitud'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($mps as $mp): ?>
	<tr>
		<td><?php echo h($mp['Mp']['id']); ?>&nbsp;</td>
		<td><?php echo h($mp['Mp']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($mp['Mp']['direccion']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($mp['Region']['nombre'], array('controller' => 'regiones', 'action' => 'view', $mp['Region']['id'])); ?>
		</td>
		<td><?php echo h($mp['Mp']['longitud']); ?>&nbsp;</td>
		<td><?php echo h($mp['Mp']['latitud']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $mp['Mp']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mp['Mp']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mp['Mp']['id']), null, __('Are you sure you want to delete # %s?', $mp['Mp']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Mp'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Regiones'), array('controller' => 'regiones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Region'), array('controller' => 'regiones', 'action' => 'add')); ?> </li>
	</ul>
</div>
