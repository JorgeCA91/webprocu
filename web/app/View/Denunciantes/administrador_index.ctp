<?php
/**
 * e-escolar.net
 * Vista:  Users Ver
 */


#sección metaDatos
$this->set('title_for_layout', 'PROCU - Usuarios Inicio');
$this->Html->meta('description', 'Usuarios Inicio', array('inline' => false));
$this->Html->css(array('style','styletable','form','style1','jquery.ui.timepicker.css'), 'stylesheet', array('inline' => false));
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
?>
<nav id="navigation">
	<a href="#" class="nav-btn">Inicio<span></span></a>
	<?php $menu_activo = '4';?>
	<ul>
		<li <?php echo $menu_activo=='1'? "class='active'": ""; ?> ><a href="<?php echo Router::url('/Admins/'); ?>">Inicio</a></li>
		<li <?php echo $menu_activo=='2'? "class='active'": ""; ?>><a href="<?php echo Router::url('/administrador/extraviados/'); ?>">Extraviados</a></li>
		<li <?php echo $menu_activo=='3'? "class='active'": ""; ?>><a href="<?php echo Router::url('/administrador/reportes/'); ?>">Reportes</a></li>
		<li <?php echo $menu_activo=='4'? "class='active'": ""; ?>><a href="<?php echo Router::url('/administrador/denunciantes/'); ?>">Denunciantes</a></li>
		<li <?php echo $menu_activo=='5'? "class='active'": ""; ?>><a href="<?php echo Router::url('/admins/consulta/'); ?>">Consultas</a></li>
	</ul>
	<div class="cl">&nbsp;</div>
</nav>
<div class="denunciantes index">
	<h2><?php echo __('Denunciantes'); ?></h2>
	<div class='datagrid'>
	<table cellpadding="0" cellspacing="0">
		<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('usuario_id'); ?></th>
			<th><?php echo $this->Paginator->sort('domicilio'); ?></th>
			<th><?php echo $this->Paginator->sort('tel'); ?></th>
			<th><?php echo $this->Paginator->sort('localidad_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
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
</tbody>
	</table>
	</div>
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
