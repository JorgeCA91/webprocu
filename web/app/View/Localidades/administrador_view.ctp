<div class="localidades view">
<h2><?php echo __('Localidad'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($localidad['Localidad']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($localidad['Localidad']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Municipio'); ?></dt>
		<dd>
			<?php echo $this->Html->link($localidad['Municipio']['nombre'], array('controller' => 'municipios', 'action' => 'view', $localidad['Municipio']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Localidad'), array('action' => 'edit', $localidad['Localidad']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Localidad'), array('action' => 'delete', $localidad['Localidad']['id']), null, __('Are you sure you want to delete # %s?', $localidad['Localidad']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Localidades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Localidad'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Municipios'), array('controller' => 'municipios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipio'), array('controller' => 'municipios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Denunciantes'), array('controller' => 'denunciantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Denunciante'), array('controller' => 'denunciantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Extraviados'), array('controller' => 'extraviados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Extraviado'), array('controller' => 'extraviados', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Denunciantes'); ?></h3>
	<?php if (!empty($localidad['Denunciante'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th><?php echo __('Domicilio'); ?></th>
		<th><?php echo __('Tel'); ?></th>
		<th><?php echo __('Localidad Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($localidad['Denunciante'] as $denunciante): ?>
		<tr>
			<td><?php echo $denunciante['id']; ?></td>
			<td><?php echo $denunciante['usuario_id']; ?></td>
			<td><?php echo $denunciante['domicilio']; ?></td>
			<td><?php echo $denunciante['tel']; ?></td>
			<td><?php echo $denunciante['localidad_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'denunciantes', 'action' => 'view', $denunciante['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'denunciantes', 'action' => 'edit', $denunciante['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'denunciantes', 'action' => 'delete', $denunciante['id']), null, __('Are you sure you want to delete # %s?', $denunciante['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Denunciante'), array('controller' => 'denunciantes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Extraviados'); ?></h3>
	<?php if (!empty($localidad['Extraviado'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('FechaNac'); ?></th>
		<th><?php echo __('Edad'); ?></th>
		<th><?php echo __('Genero'); ?></th>
		<th><?php echo __('Originario'); ?></th>
		<th><?php echo __('Nacionalidad'); ?></th>
		<th><?php echo __('Domicilio'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('CorreoElectronico'); ?></th>
		<th><?php echo __('RedSocial'); ?></th>
		<th><?php echo __('Localidad Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($localidad['Extraviado'] as $extraviado): ?>
		<tr>
			<td><?php echo $extraviado['id']; ?></td>
			<td><?php echo $extraviado['fechaNac']; ?></td>
			<td><?php echo $extraviado['edad']; ?></td>
			<td><?php echo $extraviado['genero']; ?></td>
			<td><?php echo $extraviado['originario']; ?></td>
			<td><?php echo $extraviado['nacionalidad']; ?></td>
			<td><?php echo $extraviado['domicilio']; ?></td>
			<td><?php echo $extraviado['telefono']; ?></td>
			<td><?php echo $extraviado['correoElectronico']; ?></td>
			<td><?php echo $extraviado['redSocial']; ?></td>
			<td><?php echo $extraviado['localidad_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'extraviados', 'action' => 'view', $extraviado['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'extraviados', 'action' => 'edit', $extraviado['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'extraviados', 'action' => 'delete', $extraviado['id']), null, __('Are you sure you want to delete # %s?', $extraviado['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Extraviado'), array('controller' => 'extraviados', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
