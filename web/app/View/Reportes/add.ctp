<?php
/**
 * e-escolar.net
 * Vista:  Users Ver
 */


#sección metaDatos
$this->set('title_for_layout', 'PROCU - Usuarios Inicio');
$this->Html->meta('description', 'Usuarios Inicio', array('inline' => false));

$this->Html->css(array(
						'style',
						), 'stylesheet', array('inline' => false));


$this->Html->script(array(
											'functions.js',
											), array('inline' => false));
											
?>
<section class="cols">
	<div class="col">
		<?php echo $this->Form->create('Reporte'); ?>
		<fieldset>
			<legend><?php echo __('Add Reporte'); ?></legend>
			<?php
				echo $this->Form->input('status');
				echo $this->Form->input('tgenero');
				echo $this->Form->input('mayMen');
				echo $this->Form->input('grupo');
				echo $this->Form->input('fechaReporte');
				echo $this->Form->input('fechaConclusion');
				echo $this->Form->input('motivo');
				echo $this->Form->input('admin_id');
				echo $this->Form->input('denunciante_id');
				echo $this->Form->input('extraviado_id');
			?>
			</fieldset>
		<?php echo $this->Form->end(__('Submit')); ?>
	</div>
	<div class="col last">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>

				<li><?php echo $this->Html->link(__('List Reportes'), array('action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('List Admins'), array('controller' => 'admins', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Admin'), array('controller' => 'admins', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Denunciantes'), array('controller' => 'denunciantes', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Denunciante'), array('controller' => 'denunciantes', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Extraviados'), array('controller' => 'extraviados', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Extraviado'), array('controller' => 'extraviados', 'action' => 'add')); ?> </li>
			</ul>
	</div>
	<div class="cl">&nbsp;</div>
</section>