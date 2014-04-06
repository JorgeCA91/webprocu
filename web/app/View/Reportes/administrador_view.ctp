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
<div class="reportes view">
<h2><?php echo __('Reporte'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($reporte['Reporte']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($reporte['Reporte']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tgenero'); ?></dt>
		<dd>
			<?php echo h($reporte['Reporte']['tgenero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MayMen'); ?></dt>
		<dd>
			<?php echo h($reporte['Reporte']['mayMen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grupo'); ?></dt>
		<dd>
			<?php echo h($reporte['Reporte']['grupo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FechaReporte'); ?></dt>
		<dd>
			<?php echo h($reporte['Reporte']['fechaReporte']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FechaConclusion'); ?></dt>
		<dd>
			<?php echo h($reporte['Reporte']['fechaConclusion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Motivo'); ?></dt>
		<dd>
			<?php echo h($reporte['Reporte']['motivo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Admin'); ?></dt>
		<dd>
			<?php echo $this->Html->link($reporte['Admin']['id'], array('controller' => 'admins', 'action' => 'view', $reporte['Admin']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Denunciante'); ?></dt>
		<dd>
			<?php echo $this->Html->link($reporte['Denunciante']['id'], array('controller' => 'denunciantes', 'action' => 'view', $reporte['Denunciante']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Extraviado'); ?></dt>
		<dd>
			<?php echo $this->Html->link($reporte['Extraviado']['id'], array('controller' => 'extraviados', 'action' => 'view', $reporte['Extraviado']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Reporte'), array('action' => 'edit', $reporte['Reporte']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Reporte'), array('action' => 'delete', $reporte['Reporte']['id']), null, __('Are you sure you want to delete # %s?', $reporte['Reporte']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Reportes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reporte'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Admins'), array('controller' => 'admins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Admin'), array('controller' => 'admins', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Denunciantes'), array('controller' => 'denunciantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Denunciante'), array('controller' => 'denunciantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Extraviados'), array('controller' => 'extraviados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Extraviado'), array('controller' => 'extraviados', 'action' => 'add')); ?> </li>
	</ul>
</div>
