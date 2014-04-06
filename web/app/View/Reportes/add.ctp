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
		'estilos'
	),
	array(
	'inline' => false
	)
);
?>
<section class="cols">
	<div class="col">
		<?php echo $this->Form->create('Reporte', array('class' => 'well', 'action' => 'add')); ?>
		<fieldset>
			<legend><?php echo __('Datos Denunciante'); ?></legend>
			<?php
				
				echo $this->Form->input('Denunciante.nombre');
				echo $this->Form->input('Denunciante.apellido_paterno');
				echo $this->Form->input('Denunciante.apellido_materno');
				echo $this->Form->input('Denunciante.email');
				echo $this->Form->input('Denunciante.domicilio');
				echo $this->Form->input('Denunciante.tel');
				echo $this->Form->input('Parentesco.parentesco');
				
			?>
			</fieldset>
	</div>
	<div class="col">
		<fieldset>
			<legend><?php echo __('Datos Extraviado(a)'); ?></legend>
			<?php
				echo $this->Form->input('Extraviado.nombre');
				echo $this->Form->input('Extraviado.apellido_paterno');
				echo $this->Form->input('Extraviado.apellido_materno');
				echo $this->Form->input('Extraviado.fechaNac');
				echo $this->Form->input('Extraviado.observaciones');
				echo $this->Form->input('Extraviado.edad');
				echo $this->Form->input('Extraviado.domicilio');
			?>
			</fieldset>
	</div>
	<div class="col last">
			<fieldset>
				<legend><?php echo __('Reporte'); ?></legend>
				<?php
					echo $this->Form->input('Reporte.tgenero');
					echo $this->Form->input('Reporte.grupo');
					echo $this->Form->input('Reporte.motivo');
					echo $this->Form->input('Reporte.status');
				?>
			</fieldset>
	</div>
	<div class="cl">&nbsp;</div>
	<?php echo $this->Form->end(__('Enviar Denuncia')); ?>
</section>
