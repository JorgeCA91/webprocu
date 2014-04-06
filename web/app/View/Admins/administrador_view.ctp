<div class="admins view">
<h2><?php echo __('Admin'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($admin['Admin']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pass'); ?></dt>
		<dd>
			<?php echo h($admin['Admin']['pass']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($admin['Usuario']['role'], array('controller' => 'usuarios', 'action' => 'view', $admin['Usuario']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Admin'), array('action' => 'edit', $admin['Admin']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Admin'), array('action' => 'delete', $admin['Admin']['id']), null, __('Are you sure you want to delete # %s?', $admin['Admin']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Admins'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Admin'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reportes'), array('controller' => 'reportes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reporte'), array('controller' => 'reportes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Reportes'); ?></h3>
	<?php if (!empty($admin['Reporte'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Tgenero'); ?></th>
		<th><?php echo __('MayMen'); ?></th>
		<th><?php echo __('Grupo'); ?></th>
		<th><?php echo __('FechaReporte'); ?></th>
		<th><?php echo __('FechaConclusion'); ?></th>
		<th><?php echo __('Motivo'); ?></th>
		<th><?php echo __('Admin Id'); ?></th>
		<th><?php echo __('Denunciante Id'); ?></th>
		<th><?php echo __('Extraviado Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($admin['Reporte'] as $reporte): ?>
		<tr>
			<td><?php echo $reporte['id']; ?></td>
			<td><?php echo $reporte['status']; ?></td>
			<td><?php echo $reporte['tgenero']; ?></td>
			<td><?php echo $reporte['mayMen']; ?></td>
			<td><?php echo $reporte['grupo']; ?></td>
			<td><?php echo $reporte['fechaReporte']; ?></td>
			<td><?php echo $reporte['fechaConclusion']; ?></td>
			<td><?php echo $reporte['motivo']; ?></td>
			<td><?php echo $reporte['admin_id']; ?></td>
			<td><?php echo $reporte['denunciante_id']; ?></td>
			<td><?php echo $reporte['extraviado_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'reportes', 'action' => 'view', $reporte['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'reportes', 'action' => 'edit', $reporte['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'reportes', 'action' => 'delete', $reporte['id']), null, __('Are you sure you want to delete # %s?', $reporte['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Reporte'), array('controller' => 'reportes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
