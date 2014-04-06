<div class="extraviados view">
<h2><?php echo __('Extraviado'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($extraviado['Extraviado']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FechaNac'); ?></dt>
		<dd>
			<?php echo h($extraviado['Extraviado']['fechaNac']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edad'); ?></dt>
		<dd>
			<?php echo h($extraviado['Extraviado']['edad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Genero'); ?></dt>
		<dd>
			<?php echo h($extraviado['Extraviado']['genero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Originario'); ?></dt>
		<dd>
			<?php echo h($extraviado['Extraviado']['originario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nacionalidad'); ?></dt>
		<dd>
			<?php echo h($extraviado['Extraviado']['nacionalidad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Domicilio'); ?></dt>
		<dd>
			<?php echo h($extraviado['Extraviado']['domicilio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($extraviado['Extraviado']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CorreoElectronico'); ?></dt>
		<dd>
			<?php echo h($extraviado['Extraviado']['correoElectronico']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RedSocial'); ?></dt>
		<dd>
			<?php echo h($extraviado['Extraviado']['redSocial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Localidad'); ?></dt>
		<dd>
			<?php echo $this->Html->link($extraviado['Localidad']['nombre'], array('controller' => 'localidades', 'action' => 'view', $extraviado['Localidad']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Extraviado'), array('action' => 'edit', $extraviado['Extraviado']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Extraviado'), array('action' => 'delete', $extraviado['Extraviado']['id']), null, __('Are you sure you want to delete # %s?', $extraviado['Extraviado']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Extraviados'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Extraviado'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Localidades'), array('controller' => 'localidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Localidad'), array('controller' => 'localidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Identificaciones'), array('controller' => 'identificaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Identificacion'), array('controller' => 'identificaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reportes'), array('controller' => 'reportes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reporte'), array('controller' => 'reportes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Identificaciones'); ?></h3>
	<?php if (!empty($extraviado['Identificacion'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tipo'); ?></th>
		<th><?php echo __('Denunciante Id'); ?></th>
		<th><?php echo __('Extraviado Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($extraviado['Identificacion'] as $identificacion): ?>
		<tr>
			<td><?php echo $identificacion['id']; ?></td>
			<td><?php echo $identificacion['tipo']; ?></td>
			<td><?php echo $identificacion['denunciante_id']; ?></td>
			<td><?php echo $identificacion['extraviado_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'identificaciones', 'action' => 'view', $identificacion['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'identificaciones', 'action' => 'edit', $identificacion['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'identificaciones', 'action' => 'delete', $identificacion['id']), null, __('Are you sure you want to delete # %s?', $identificacion['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Identificacion'), array('controller' => 'identificaciones', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Reportes'); ?></h3>
	<?php if (!empty($extraviado['Reporte'])): ?>
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
	<?php foreach ($extraviado['Reporte'] as $reporte): ?>
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
