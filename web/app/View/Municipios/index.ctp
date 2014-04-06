<div class="municipios index">
	<h2><?php echo __('Municipios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('region_id'); ?></th>
			<th><?php echo $this->Paginator->sort('codigo'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($municipios as $municipio): ?>
	<tr>
		<td><?php echo h($municipio['Municipio']['id']); ?>&nbsp;</td>
		<td><?php echo h($municipio['Municipio']['nombre']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($municipio['Region']['nombre'], array('controller' => 'regiones', 'action' => 'view', $municipio['Region']['id'])); ?>
		</td>
		<td><?php echo h($municipio['Municipio']['codigo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $municipio['Municipio']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $municipio['Municipio']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $municipio['Municipio']['id']), null, __('Are you sure you want to delete # %s?', $municipio['Municipio']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Municipio'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Regiones'), array('controller' => 'regiones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Region'), array('controller' => 'regiones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Localidades'), array('controller' => 'localidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Localidad'), array('controller' => 'localidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
