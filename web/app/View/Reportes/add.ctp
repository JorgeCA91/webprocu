<?php
/**
 * e-escolar.net
 * Vista:  Users Ver
 */


#sección metaDatos
$this->set('title_for_layout', 'PROCU - Usuarios Inicio');
$this->Html->meta('description', 'Usuarios Inicio', array('inline' => false));

$this->Html->css(array('style'), 'stylesheet', array('inline' => false));
											
?>
<section class="cols">
	<div class="col">
		<?php echo $this->Form->create('Reporte'); ?>
		<fieldset>
			<legend><?php echo __('Datos Denunciante'); ?></legend>
			<?php
				echo $this->Form->input('Extraviado.fechaNac');
				echo $this->Form->input('Extraviado.observaciones');
			?>
			</fieldset>
		<?php echo $this->Form->end(__('Submit')); ?>
	</div>
	<div class="col">
		<?php echo $this->Form->create('Reporte'); ?>
		<fieldset>
			<legend><?php echo __('Datos Extraviado(a)'); ?></legend>
			<?php
				echo $this->Form->input('Denunciante.domicilio');
				echo $this->Form->input('Denunciante.tel');
			?>
			</fieldset>
		<?php echo $this->Form->end(__('Submit')); ?>
	</div>
	<div class="col last">
			<h3><?php echo __('Foto del Extraviado(a)'); ?></h3>
			<ul>

			</ul>
	</div>
	<div class="cl">&nbsp;</div>
</section>
