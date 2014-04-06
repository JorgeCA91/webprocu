<?php
/**
 * e-escolar.net
 * Vista:  Users Ver
 */


#sección metaDatos
$this->set('title_for_layout', 'PROCU - Usuarios Inicio');
$this->Html->meta('description', 'Usuarios Inicio', array('inline' => false));

$this->Html->css(array('style','styletable'), 'stylesheet', array('inline' => false));
											
?>
<div class="extraviados index">
	<h2><?php echo __('Extraviados'); ?></h2>
	<div class="datagrid">
	<table cellpadding="0" cellspacing="0">
	<thead>
		<tr>
				<th><?php echo $this->Paginator->sort('id'); ?></th>
				<th><?php echo $this->Paginator->sort('fechaNac'); ?></th>
				<th><?php echo $this->Paginator->sort('edad'); ?></th>
				<th><?php echo $this->Paginator->sort('genero'); ?></th>
				<th><?php echo $this->Paginator->sort('originario'); ?></th>
				<th><?php echo $this->Paginator->sort('nacionalidad'); ?></th>
				<th><?php echo $this->Paginator->sort('domicilio'); ?></th>
				<th><?php echo $this->Paginator->sort('telefono'); ?></th>
				<th><?php echo $this->Paginator->sort('redSocial'); ?></th>
				<th><?php echo $this->Paginator->sort('localidad_id'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
	</thead>
	<tbody>
	<?php $class = 1; ?>
	<?php foreach ($extraviados as $extraviado): ?>
		<?php 
			$class++;
			if( ( (intval($class%2)) == 0 ) ) {
				echo "<tr class='alt'>";
			} else {
				echo '<tr>';
			}
		?>
		<td ><?php echo h($extraviado['Extraviado']['id']); ?>&nbsp;</td>
		<td><?php echo h($extraviado['Extraviado']['fechaNac']); ?>&nbsp;</td>
		<td><?php echo h($extraviado['Extraviado']['edad']); ?>&nbsp;</td>
		<td><?php echo h($extraviado['Extraviado']['genero']); ?>&nbsp;</td>
		<td><?php echo h($extraviado['Extraviado']['originario']); ?>&nbsp;</td>
		<td><?php echo h($extraviado['Extraviado']['nacionalidad']); ?>&nbsp;</td>
		<td><?php echo h($extraviado['Extraviado']['domicilio']); ?>&nbsp;</td>
		<td><?php echo h($extraviado['Extraviado']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($extraviado['Extraviado']['redSocial']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($extraviado['Localidad']['nombre'], array('controller' => 'localidades', 'action' => 'view', $extraviado['Localidad']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $extraviado['Extraviado']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $extraviado['Extraviado']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $extraviado['Extraviado']['id']), null, __('Are you sure you want to delete # %s?', $extraviado['Extraviado']['id'])); ?>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Extraviado'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Localidades'), array('controller' => 'localidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Localidad'), array('controller' => 'localidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Identificaciones'), array('controller' => 'identificaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Identificacion'), array('controller' => 'identificaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reportes'), array('controller' => 'reportes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reporte'), array('controller' => 'reportes', 'action' => 'add')); ?> </li>
	</ul>
</div>
