<div class="municipios view">
<h2><?php echo __('Municipio'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($municipio['Municipio']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($municipio['Municipio']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Region'); ?></dt>
		<dd>
			<?php echo $this->Html->link($municipio['Region']['nombre'], array('controller' => 'regiones', 'action' => 'view', $municipio['Region']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo'); ?></dt>
		<dd>
			<?php echo h($municipio['Municipio']['codigo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Municipio'), array('action' => 'edit', $municipio['Municipio']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Municipio'), array('action' => 'delete', $municipio['Municipio']['id']), null, __('Are you sure you want to delete # %s?', $municipio['Municipio']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Municipios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipio'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Regiones'), array('controller' => 'regiones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Region'), array('controller' => 'regiones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Localidades'), array('controller' => 'localidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Localidad'), array('controller' => 'localidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Localidades'); ?></h3>
	<?php if (!empty($municipio['Localidad'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Municipio Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($municipio['Localidad'] as $localidad): ?>
		<tr>
			<td><?php echo $localidad['id']; ?></td>
			<td><?php echo $localidad['nombre']; ?></td>
			<td><?php echo $localidad['municipio_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'localidades', 'action' => 'view', $localidad['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'localidades', 'action' => 'edit', $localidad['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'localidades', 'action' => 'delete', $localidad['id']), null, __('Are you sure you want to delete # %s?', $localidad['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Localidad'), array('controller' => 'localidades', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
