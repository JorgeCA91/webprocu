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
?>
<nav id="navigation">
	<a href="#" class="nav-btn">Inicio<span></span></a>
	<?php $menu_activo = '5';?>
	<ul>
		<li <?php echo $menu_activo=='1'? "class='active'": ""; ?> ><a href="<?php echo Router::url('/Admins/'); ?>">Inicio</a></li>
		<li <?php echo $menu_activo=='2'? "class='active'": ""; ?>><a href="<?php echo Router::url('/administrador/extraviados/'); ?>">Extraviados</a></li>
		<li <?php echo $menu_activo=='3'? "class='active'": ""; ?>><a href="<?php echo Router::url('/administrador/reportes/'); ?>">Reportes</a></li>
		<li <?php echo $menu_activo=='4'? "class='active'": ""; ?>><a href="<?php echo Router::url('/administrador/denunciantes/'); ?>">Denunciantes</a></li>
		<li <?php echo $menu_activo=='5'? "class='active'": ""; ?>><a href="<?php echo Router::url('/admins/consulta/'); ?>">Consultas</a></li>
	</ul>
	<div class="cl">&nbsp;</div>
</nav>
<div id="form-container">
 
        <?php echo $this->Form->create('Extraviado', array('class' => 'well', 'action' => 'consultaadmin')); ?>
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
				<input type="text" id="nombre(s):" name="data[Consulta][nombre]" data="{&quot;validate&quot;:{&quot;Requerido&quot;:false,&quot;messages&quot;:{&quot;required&quot;:&quot;This field is required&quot;},&quot;required&quot;:true}}"></span></div>
			<div class="row" style="display: block;">
				<label class="field" for="apellido_paterno:">
					<font><font>Apellido paterno:</font></font><div class="rqrd"><font><font>*</font></font></div></label><span class="textField">
					<input type="text" id="apellido_paterno:" name="data[Consulta][apellido_paterno]" data="{&quot;val	idate&quot;:{&quot;Requerido&quot;:false,&quot;messages&quot;:{&quot;required&quot;:&quot;This field is required&quot;},&quot;required&quot;:true}}"></span></div>
			<div class="row" style="display: block;">
				<label class="field" for="apellido_materno:">
					<font><font>Apellido materno:</font></font></label><span class="textField">
					<input type="text" id="apellido_materno:" name="data[Consulta][apellido_materno]" data="{&quot;validate&quot;:{&quot;Requerido&quot;:false,&quot;messages&quot;:{}}}"></span></div>
			
					<font><font>
			<?php echo $this->Form->end(__('Consultar')); ?></font></font></form>
	 
		</fieldset>
	<div class="cl">&nbsp;</div>
	
					<a href="<?php echo Router::url('/'); ?>">Inicio</a>
							
</div>

