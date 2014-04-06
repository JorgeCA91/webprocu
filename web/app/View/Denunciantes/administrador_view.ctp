<?php
/**
 * e-escolar.net
 * Vista:  Users Ver
 */


#sección metaDatos
$this->set('title_for_layout', 'PROCU - Usuarios Inicio');
$this->Html->meta('description', 'Usuarios Inicio', array('inline' => false));
$this->Html->css(array('style','form','style1','jquery.ui.timepicker.css'), 'stylesheet', array('inline' => false));
$this->Html->script(
	array(
		'jquery-1.8.0.min.js',
		'estilos',
		'estilosAdmin'
	),
	array(
	'inline' => false
	)
);
$this->set('menu_activo', '4');
?>
<div class="denunciantes view">
<h2><?php echo __('Denunciante'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($denunciante['Denunciante']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($denunciante['Usuario']['role'], array('controller' => 'usuarios', 'action' => 'view', $denunciante['Usuario']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Domicilio'); ?></dt>
		<dd>
			<?php echo h($denunciante['Denunciante']['domicilio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel'); ?></dt>
		<dd>
			<?php echo h($denunciante['Denunciante']['tel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Localidad'); ?></dt>
		<dd>
			<?php echo $this->Html->link($denunciante['Localidad']['nombre'], array('controller' => 'localidades', 'action' => 'view', $denunciante['Localidad']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Denunciante'), array('action' => 'edit', $denunciante['Denunciante']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Denunciante'), array('action' => 'delete', $denunciante['Denunciante']['id']), null, __('Are you sure you want to delete # %s?', $denunciante['Denunciante']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Denunciantes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Denunciante'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Identificaciones'); ?></h3>
	<?php if (!empty($denunciante['Identificacion'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tipo'); ?></th>
		<th><?php echo __('Denunciante Id'); ?></th>
		<th><?php echo __('Extraviado Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($denunciante['Identificacion'] as $identificacion): ?>
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
	<h3><?php echo __('Related Parentescos'); ?></h3>
	<?php if (!empty($denunciante['Parentesco'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Parentesco'); ?></th>
		<th><?php echo __('Denunciante Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($denunciante['Parentesco'] as $parentesco): ?>
		<tr>
			<td><?php echo $parentesco['id']; ?></td>
			<td><?php echo $parentesco['parentesco']; ?></td>
			<td><?php echo $parentesco['denunciante_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'parentescos', 'action' => 'view', $parentesco['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'parentescos', 'action' => 'edit', $parentesco['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'parentescos', 'action' => 'delete', $parentesco['id']), null, __('Are you sure you want to delete # %s?', $parentesco['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Parentesco'), array('controller' => 'parentescos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Reportes'); ?></h3>
	<?php if (!empty($denunciante['Reporte'])): ?>
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
	<?php foreach ($denunciante['Reporte'] as $reporte): ?>
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
