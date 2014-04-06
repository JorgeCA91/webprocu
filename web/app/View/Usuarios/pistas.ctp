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
<div id="form-container">
 
        <h1 id="form-name">Datos de la persona no localizada</h1>
		<form id="dynamic-form" action="" method="post" class="ui-sortable" novalidate="novalidate">
            
		<div class="row" style="display: block;"><label class="field" for="nombre_completo:">Nombre completo:</label><span class="textField"><input type="text" id="nombre_completo:" name="nombre_completo:" data="{&quot;validate&quot;:{&quot;Requerido&quot;:false,&quot;messages&quot;:{}}}"></span></div><div class="row" style="display: block; position: relative;"><label class="field" for="fecha_de_localización:">Fecha de localización:</label><span class="date"><input type="text" id="fecha_de_localización:" name="fecha_de_localización:" data="{&quot;validate&quot;:{&quot;Requerido&quot;:false,&quot;date&quot;:true,&quot;messages&quot;:{}}}"></span></div><div class="row" style="display: block; position: relative;"><label class="field" for="hora_de_localización:">Hora de Localización:</label><span class="time"><input type="text" id="hora_de_localización:" name="hora_de_localización:" data="{&quot;validate&quot;:{&quot;Requerido&quot;:false,&quot;time&quot;:true,&quot;messages&quot;:{}}}"></span></div><div class="row" style="display: block;"><label class="field" for="lugar_en_que_fue_visto(a):">Lugar en que fue visto(a):</label><span class="textField"><input type="text" id="lugar_en_que_fue_visto(a):" name="lugar_en_que_fue_visto(a):" data="{&quot;validate&quot;:{&quot;Requerido&quot;:false,&quot;messages&quot;:{}}}"></span></div><div class="row" style="display: block;"><label class="field" for="persona(as)_con_quien_fue_visto(a):">Persona(as) con quien fue visto(a):</label><span class="textArea"><textarea id="persona(as)_con_quien_fue_visto(a):" name="persona(as)_con_quien_fue_visto(a):" data="{&quot;validate&quot;:{&quot;Requerido&quot;:false,&quot;messages&quot;:{}}}"></textarea></span></div><div class="row" style="display: block;"><label class="field" for="tu_correo_electrónico:">Tu correo electrónico:</label><span class="email"><input type="text" id="tu_correo_electrónico:" name="tu_correo_electrónico:" data="{&quot;validate&quot;:{&quot;Requerido&quot;:false,&quot;email&quot;:true,&quot;messages&quot;:{}}}"></span></div><div class="row" style="display: block;"><label class="field" for="tu_número_telefónico:">Tu número telefónico:</label><span class="phone"><input type="text" id="tu_número_telefónico:" name="tu_número_telefónico:" data="{&quot;validate&quot;:{&quot;Requerido&quot;:false,&quot;phone&quot;:true,&quot;messages&quot;:{}}}"></span></div><input type="submit" class="button blue" value="Enviar" id="submit-form"></form>
						<a href="<?php echo Router::url('/'); ?>">Inicio</a>
							
</div>

