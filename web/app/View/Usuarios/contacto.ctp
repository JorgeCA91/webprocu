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
$this->set('menu_activo', '6');
?>
<div id="cols">
	<div id="conta">	
		Calle de Arista # 313
		Entre las calles de J. P. García y 20 de Noviembre, Colonia Centro,<br> Oaxaca de Juárez, Oax.
		<br>           	
		Teléfono: (951) 5143695<br><br>
		<iframe src="https://mapsengine.google.com/map/embed?mid=zVEnAg1baG6w.kvUrlrh5FH6o" width="404" height="400"></iframe>
		</p>
							<a href="<?php echo Router::url('/'); ?>">Inicio</a>
								
	</div>
</div>

