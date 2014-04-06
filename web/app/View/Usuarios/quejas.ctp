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
<div>
					
						<form id="dynamic-form" action="" method="post" class="ui-sortable" novalidate="novalidate">
						<div class="row" style="display: block;"  id="quejas">
						<br>
						<h3>Quejas y sugerencias</h3>
							<label class="field" for="nombre">Nombre:</label><span class="textField"><input type="text" id="nombre" name="nombre" data="{&quot;validate&quot;:{&quot;Requerido&quot;:false,&quot;messages&quot;:{&quot;required&quot;:&quot;This field is required&quot;},&quot;maxlength&quot;:&quot;30&quot;,&quot;required&quot;:true}}"></span></div><div class="row" style="display: block; position: relative;">
							<label class="field" for="apellidos:">Apellidos:</label><span class="textField"><input type="text" id="apellidos:" name="apellidos:" data="{&quot;validate&quot;:{&quot;Requerido&quot;:false,&quot;messages&quot;:{&quot;required&quot;:&quot;This field is required&quot;},&quot;maxlength&quot;:&quot;30&quot;,&quot;required&quot;:true}}"></span></div><div class="row" style="display: block;">
							<label class="field" for="coreo_electrónico:">Correo electrónico:</label><span class="email"><input type="text" id="coreo_electrónico:" name="coreo_electrónico:" data="{&quot;validate&quot;:{&quot;Requerido&quot;:false,&quot;email&quot;:true,&quot;messages&quot;:{&quot;required&quot;:&quot;This field is required&quot;},&quot;required&quot;:true}}"></span></div><div class="row" style="display: block; position: relative;">
							<label class="field" for="teléfono:">Teléfono:</label><span class="phone"><input type="text" id="teléfono:" name="teléfono:" data="{&quot;validate&quot;:{&quot;Requerido&quot;:false,&quot;phone&quot;:true,&quot;messages&quot;:{&quot;required&quot;:&quot;This field is required&quot;},&quot;required&quot;:true}}"></span></div><div class="row" style="display: block; position: relative;">
							<label class="field" for="¿hizo_usted_la_denuncia_de_una_persona_no_localizada?">¿Hizo usted la denuncia de una persona no localizada?</label><span class="radioButton" id="¿hizo_usted_la_denuncia_de_una_persona_no_localizada?"><label class="option" for="¿hizo_usted_la_denuncia_de_una_persona_no_localizada?_si"><input class="radio" type="radio" name="¿hizo_usted_la_denuncia_de_una_persona_no_localizada?" id="¿hizo_usted_la_denuncia_de_una_persona_no_localizada?_si" value="Si" data="{&quot;validate&quot;:{&quot;Requerido&quot;:false,&quot;messages&quot;:{&quot;required&quot;:&quot;Este campo es requerido.&quot;},&quot;required&quot;:true}}">Si</label><label class="option" for="¿hizo_usted_la_denuncia_de_una_persona_no_localizada?_no"><input class="radio" type="radio" name="¿hizo_usted_la_denuncia_de_una_persona_no_localizada?" id="¿hizo_usted_la_denuncia_de_una_persona_no_localizada?_no" value="No">No</label></span></div><div class="row" style="display: block; position: relative;">
							<label class="field" for="asunto:">Asunto:</label><span class="textArea"><textarea id="asunto:" name="asunto:" data="{&quot;validate&quot;:{&quot;Requerido&quot;:false,&quot;messages&quot;:{&quot;required&quot;:&quot;This field is required&quot;},&quot;required&quot;:true}}"></textarea></span></div>
							<input type="submit" class="button blue" value="Enviar" id="submit-form">
						</form>
						<a href="<?php echo Router::url('/'); ?>">Inicio</a>
							
					</div>

