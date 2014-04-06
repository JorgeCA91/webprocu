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
$this->set('menu_activo', '4');
?>
<div id="form-container">
 
        <?php echo $this->Form->create('Extraviado', array('class' => 'well', 'action' => 'index')); ?>
		<fieldset>
			<legend><?php echo __('Datos del Extraviado'); ?></legend>
            
		<div class="row" style="display: block;">
			<label class="field" for="nombre(s):">
				<font>
					<font>Nombre (s):</font>
				</font>
			<div class="rqrd">
				<font><font>*</font></font>
			</div>
				</label><span class="textField">
				<input type="text" id="nombre(s):" name="nombre(s):" data="{&quot;validate&quot;:{&quot;Requerido&quot;:false,&quot;messages&quot;:{&quot;required&quot;:&quot;This field is required&quot;},&quot;required&quot;:true}}"></span></div>
			<div class="row" style="display: block;">
				<label class="field" for="apellido_paterno:">
					<font><font>Apellido paterno:</font></font><div class="rqrd"><font><font>*</font></font></div></label><span class="textField">
					<input type="text" id="apellido_paterno:" name="apellido_paterno:" data="{&quot;validate&quot;:{&quot;Requerido&quot;:false,&quot;messages&quot;:{&quot;required&quot;:&quot;This field is required&quot;},&quot;required&quot;:true}}"></span></div>
			<div class="row" style="display: block;">
				<label class="field" for="apellido_materno:">
					<font><font>Apellido materno:</font></font></label><span class="textField">
					<input type="text" id="apellido_materno:" name="apellido_materno:" data="{&quot;validate&quot;:{&quot;Requerido&quot;:false,&quot;messages&quot;:{}}}"></span></div>
			<div class="row" style="display: block;">
				<label class="field" for="fecha_de_desaparición:">
					<font><font>Fecha de Desaparición:</font></font></label><span class="date">
						<input type="text" id="fecha_de_desaparición:" name="fecha_de_desaparición:" data="{&quot;validate&quot;:{&quot;Requerido&quot;:false,&quot;date&quot;:true,&quot;messages&quot;:{}}}"></span></div>
			<div class="row" style="display: block;">
				<label class="field" for="lugar_de_desaparición:">
					<font><font>Lugar de Desaparición:</font></font></label><span class="textField">
					<input type="text" id="lugar_de_desaparición:" name="lugar_de_desaparición:" data="{&quot;validate&quot;:{&quot;Requerido&quot;:false,&quot;messages&quot;:{}}}"></span></div>
					<font><font>
			<?php echo $this->Form->end(__('Consultar')); ?></font></font></form>
	 
		</fieldset>
	<div class="cl">&nbsp;</div>
	
					<a href="<?php echo Router::url('/'); ?>">Inicio</a>
							
</div>

