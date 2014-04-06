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
<div class="reportes index">
	<h2><?php echo __('Reportes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('tgenero'); ?></th>
			<th><?php echo $this->Paginator->sort('mayMen'); ?></th>
			<th><?php echo $this->Paginator->sort('grupo'); ?></th>
			<th><?php echo $this->Paginator->sort('fechaReporte'); ?></th>
			<th><?php echo $this->Paginator->sort('fechaConclusion'); ?></th>
			<th><?php echo $this->Paginator->sort('motivo'); ?></th>
			<th><?php echo $this->Paginator->sort('admin_id'); ?></th>
			<th><?php echo $this->Paginator->sort('denunciante_id'); ?></th>
			<th><?php echo $this->Paginator->sort('extraviado_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($reportes as $reporte): ?>
	<tr>
		<td><?php echo h($reporte['Reporte']['id']); ?>&nbsp;</td>
		<td><?php echo h($reporte['Reporte']['status']); ?>&nbsp;</td>
		<td><?php echo h($reporte['Reporte']['tgenero']); ?>&nbsp;</td>
		<td><?php echo h($reporte['Reporte']['mayMen']); ?>&nbsp;</td>
		<td><?php echo h($reporte['Reporte']['grupo']); ?>&nbsp;</td>
		<td><?php echo h($reporte['Reporte']['fechaReporte']); ?>&nbsp;</td>
		<td><?php echo h($reporte['Reporte']['fechaConclusion']); ?>&nbsp;</td>
		<td><?php echo h($reporte['Reporte']['motivo']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($reporte['Admin']['id'], array('controller' => 'admins', 'action' => 'view', $reporte['Admin']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($reporte['Denunciante']['id'], array('controller' => 'denunciantes', 'action' => 'view', $reporte['Denunciante']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($reporte['Extraviado']['id'], array('controller' => 'extraviados', 'action' => 'view', $reporte['Extraviado']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $reporte['Reporte']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $reporte['Reporte']['id'])); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $reporte['Reporte']['id']), null, __('Are you sure you want to delete # %s?', $reporte['Reporte']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Reporte'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Admins'), array('controller' => 'admins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Admin'), array('controller' => 'admins', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Denunciantes'), array('controller' => 'denunciantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Denunciante'), array('controller' => 'denunciantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Extraviados'), array('controller' => 'extraviados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Extraviado'), array('controller' => 'extraviados', 'action' => 'add')); ?> </li>
	</ul>
</div>
