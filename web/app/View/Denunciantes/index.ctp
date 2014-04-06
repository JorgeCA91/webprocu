<div class="denunciantes index">
	<h2><?php echo __('Denunciantes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('usuario_id'); ?></th>
			<th><?php echo $this->Paginator->sort('domicilio'); ?></th>
			<th><?php echo $this->Paginator->sort('tel'); ?></th>
			<th><?php echo $this->Paginator->sort('localidad_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($denunciantes as $denunciante): ?>
	<tr>
		<td><?php echo h($denunciante['Denunciante']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($denunciante['Usuario']['role'], array('controller' => 'usuarios', 'action' => 'view', $denunciante['Usuario']['id'])); ?>
		</td>
		<td><?php echo h($denunciante['Denunciante']['domicilio']); ?>&nbsp;</td>
		<td><?php echo h($denunciante['Denunciante']['tel']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($denunciante['Localidad']['nombre'], array('controller' => 'localidades', 'action' => 'view', $denunciante['Localidad']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $denunciante['Denunciante']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $denunciante['Denunciante']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $denunciante['Denunciante']['id']), null, __('Are you sure you want to delete # %s?', $denunciante['Denunciante']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Denunciante'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Localidades'), array('controller' => 'localidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Localidad'), array('controller' => 'localidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Identificaciones'), array('controller' => 'identificaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Identificacion'), array('controller' => 'identificaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Parentescos'), array('controller' => 'parentescos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parentesco'), array('controller' => 'parentescos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reportes'), array('controller' => 'reportes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reporte'), array('controller' => 'reportes', 'action' => 'add')); ?> </li>
	</ul>
</div>
