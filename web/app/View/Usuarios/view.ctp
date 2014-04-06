<div class="usuarios view">
<h2><?php echo __('Usuario'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['role']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido Paterno'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['apellido_paterno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido Materno'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['apellido_materno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['email']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Usuario'), array('action' => 'edit', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Usuario'), array('action' => 'delete', $usuario['Usuario']['id']), null, __('Are you sure you want to delete # %s?', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Admins'), array('controller' => 'admins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Admin'), array('controller' => 'admins', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Denunciantes'), array('controller' => 'denunciantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Denunciante'), array('controller' => 'denunciantes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Admins'); ?></h3>
	<?php if (!empty($usuario['Admin'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Pass'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($usuario['Admin'] as $admin): ?>
		<tr>
			<td><?php echo $admin['id']; ?></td>
			<td><?php echo $admin['pass']; ?></td>
			<td><?php echo $admin['usuario_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'admins', 'action' => 'view', $admin['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'admins', 'action' => 'edit', $admin['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'admins', 'action' => 'delete', $admin['id']), null, __('Are you sure you want to delete # %s?', $admin['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Admin'), array('controller' => 'admins', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Denunciantes'); ?></h3>
	<?php if (!empty($usuario['Denunciante'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th><?php echo __('Domicilio'); ?></th>
		<th><?php echo __('Tel'); ?></th>
		<th><?php echo __('Localidad Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($usuario['Denunciante'] as $denunciante): ?>
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
