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
<div id= "mensaje">
			<h2> Mensaje del Procurador<br><br><br></h2>
			<h3>Distinguidos visitantes </h3>
		<dt> 	
			<p> En la procuraduría General de Justicia del Estado de Oaxaca somos personas puestas
			 a disposición del Ministerio Público, lista de personas no localizadas,noticias de importancia y otros
			  aspectos relevantes que nos permiten tener contacto permanente con ustedes y hacerles saber de la razón
			   de ser de la PGJE de Oaxaca.  </p> 
		</dt>
<br>
		<dt> 
			<p> Sin duda que este canal de comunicación nos permitirá interactuar de manera permanente con
			 la ciudadanía, el objetivo es dar respuestas eficaces a sus demandas.   </p>  
		</dt> 
			<br>
			<dt>	
			<p>  Seguiremos trabajando con el mismo compromiso hacia la sociedad, respondiendo a sus demandas
			 en la investigación de los delitos, redoblando esfuerzos, dando certidumbre a las victimas, coordinando acciones
			  que atiendan no sólo el aspecto jurídico de los delitos sino también la asistencia integral de las personas 
			  agraviadas, cumpliendo siempre con los principios constitucionales de legalidad, objetividad, eficiencia, 
			  profesionalismo, honradez y respeto a los derechos humanos.   </p> 
		</dt>
<br>
		<dt>	
			<p>  Por Oaxaca no daremos un sólo paso atrás en la lucha contra la violencia, no daremos un paso 
			atrás en acciones contra la delincuencia, e insistiremos permanentemente en la promoción de la denuncia,
			 el 01 800 00 77 628, queda permanentemente abierto para cualquier tipo de reporte en línea inherente a esta
			  institución.   </p> 
		</dt>
<br>
						<a href="<?php echo Router::url('/'); ?>">Inicio</a>
					</div>