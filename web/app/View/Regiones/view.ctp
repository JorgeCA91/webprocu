<div class="regiones view">
<h2><?php echo __('Region'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($region['Region']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($region['Region']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Municipio'); ?></dt>
		<dd>
			<?php echo h($region['Region']['municipio']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Region'), array('action' => 'edit', $region['Region']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Region'), array('action' => 'delete', $region['Region']['id']), null, __('Are you sure you want to delete # %s?', $region['Region']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Regiones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Region'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mps'), array('controller' => 'mps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mp'), array('controller' => 'mps', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Municipios'), array('controller' => 'municipios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipio'), array('controller' => 'municipios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Mps'); ?></h3>
	<?php if (!empty($region['Mp'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Direccion'); ?></th>
		<th><?php echo __('Region Id'); ?></th>
		<th><?php echo __('Longitud'); ?></th>
		<th><?php echo __('Latitud'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($region['Mp'] as $mp): ?>
		<tr>
			<td><?php echo $mp['id']; ?></td>
			<td><?php echo $mp['nombre']; ?></td>
			<td><?php echo $mp['direccion']; ?></td>
			<td><?php echo $mp['region_id']; ?></td>
			<td><?php echo $mp['longitud']; ?></td>
			<td><?php echo $mp['latitud']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'mps', 'action' => 'view', $mp['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'mps', 'action' => 'edit', $mp['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'mps', 'action' => 'delete', $mp['id']), null, __('Are you sure you want to delete # %s?', $mp['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Mp'), array('controller' => 'mps', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Municipios'); ?></h3>
	<?php if (!empty($region['Municipio'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Region Id'); ?></th>
		<th><?php echo __('Codigo'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($region['Municipio'] as $municipio): ?>
		<tr>
			<td><?php echo $municipio['id']; ?></td>
			<td><?php echo $municipio['nombre']; ?></td>
			<td><?php echo $municipio['region_id']; ?></td>
			<td><?php echo $municipio['codigo']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'municipios', 'action' => 'view', $municipio['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'municipios', 'action' => 'edit', $municipio['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'municipios', 'action' => 'delete', $municipio['id']), null, __('Are you sure you want to delete # %s?', $municipio['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Municipio'), array('controller' => 'municipios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
