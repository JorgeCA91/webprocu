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


$this->Html->script(array('functions','jquery-1.8.0.min.js'), array('inline' => false));
$this->set('menu_activo', '1');											
?>
<div class="slider-holder">
	<div class="slider">
		<div class="socials">
			<a href="https://www.facebook.com" class="facebook-ico">facebook-ico</a>
			<a href="https://twitter.com/" class="twitter-ico">twitter-ico</a>
			<a href="#" class="skype-ico">skype-ico</a>
			<a href="#" class="rss-ico">rss-ico</a>
		<div class="cl">&nbsp;</div>
	</div>

	<div class="arrs">
		<a href="#" class="prev-arr"></a>
		<a href="#" class="next-arr"></a>
	</div>

	<ul>
		<li id="img1">
			<div class="slide-cnt">
				<h4>27/Febrero/2014</h4>
				<h2>Alma Morales Ruíz</h2>
				<p>AFué vista por ultima vez en el municiío de Santa Cruz Xoxocotlán, Oax.</p>
				<a href="javascript:var dir=window.document.URL;var tit=window.document.title;var tit2=encodeURIComponent(tit);var dir2= encodeURIComponent(dir);window.location.href=('http://www.facebook.com/share.php?u='+dir2+'&amp;t='+tit2+'');"><img src="css/images/comparte-fb.png" border="0" width="80" height="26" alt="Compartir" /></a>
			    <a href="javascript:var dir=window.document.URL;var tit=window.document.title;var tit2=encodeURIComponent(tit);window.location.href=('http://twitter.com/?status='+tit2+'%20'+dir+'');"><img src="css/images/comparte-tw.png" border="0" width="80" height="26" alt="Compartir" /></a>
				</div>
			<img src="css/images/img1.png" alt="" />
		</li>

		<li id="img2">
			<div class="slide-cnt">
				<h4>21/08/2013</h4>
				<h2>Daniel Gonzáles Aparicio</h2>
				<p>Fué visto por ultima vez en san Andrés Huayapan, Oaxaca.</p>
				<a href="javascript:var dir=window.document.URL;var tit=window.document.title;var tit2=encodeURIComponent(tit);var dir2= encodeURIComponent(dir);window.location.href=('http://www.facebook.com/share.php?u='+dir2+'&amp;t='+tit2+'');"><img src="css/images/comparte-fb.png" border="0" width="80" height="26" alt="Compartir" /></a>
							    <a href="javascript:var dir=window.document.URL;var tit=window.document.title;var tit2=encodeURIComponent(tit);window.location.href=('http://twitter.com/?status='+tit2+'%20'+dir+'');"><img src="css/images/comparte-tw.png" border="0" width="80" height="26" alt="Compartir" /></a>
				</div>
			<img src="css/images/img2.png" alt="" />
		</li>

		<li id="img3">
			<div class="slide-cnt">
				<h4>30/08/2011</h4>
				<h2>Fatima Cariño Hernández</h2>
				<p>Fué vista por última vez en Sanlina Cruz, Oaxaca.</p>
				<a href="javascript:var dir=window.document.URL;var tit=window.document.title;var tit2=encodeURIComponent(tit);var dir2= encodeURIComponent(dir);window.location.href=('http://www.facebook.com/share.php?u='+dir2+'&amp;t='+tit2+'');"><img src="css/images/comparte-fb.png" border="0" width="80" height="26" alt="Compartir" /></a>
			    <a href="javascript:var dir=window.document.URL;var tit=window.document.title;var tit2=encodeURIComponent(tit);window.location.href=('http://twitter.com/?status='+tit2+'%20'+dir+'');"><img src="css/images/comparte-tw.png" border="0" width="80" height="26" alt="Compartir" /></a>
				</div>
			<img src="css/images/img3.png" alt="" />
		</li>

		<li id="img4">
			<div class="slide-cnt">
				<h4>7/12/2010</h4>
				<h2>Fermín Díaz Aragón</h2>
				<p>Fué visto por ultima vez en Miahuatlán de Porfirio Díaz, Oaxaca.</p>
				<a href="javascript:var dir=window.document.URL;var tit=window.document.title;var tit2=encodeURIComponent(tit);var dir2= encodeURIComponent(dir);window.location.href=('http://www.facebook.com/share.php?u='+dir2+'&amp;t='+tit2+'');"><img src="css/images/comparte-fb.png" border="0" width="80" height="26" alt="Compartir" /></a>
							    <a href="javascript:var dir=window.document.URL;var tit=window.document.title;var tit2=encodeURIComponent(tit);window.location.href=('http://twitter.com/?status='+tit2+'%20'+dir+'');"><img src="css/images/comparte-tw.png" border="0" width="80" height="26" alt="Compartir" /></a>
				</div>
			<img src="css/images/img4.png" alt="" />
		</li>

		<li id="img5">
			<div class="slide-cnt">
				<h4>21/08/2013</h4>
				<h2>Daniel Gonzáles Aparicio</h2>
				<p>Fué visto por ultima vez en san Andrés Huayapan, Oaxaca.</p>
				<a href="javascript:var dir=window.document.URL;var tit=window.document.title;var tit2=encodeURIComponent(tit);var dir2= encodeURIComponent(dir);window.location.href=('http://www.facebook.com/share.php?u='+dir2+'&amp;t='+tit2+'');"><img src="css/images/comparte-fb.png" border="0" width="80" height="26" alt="Compartir" /></a>
							    <a href="javascript:var dir=window.document.URL;var tit=window.document.title;var tit2=encodeURIComponent(tit);window.location.href=('http://twitter.com/?status='+tit2+'%20'+dir+'');"><img src="css/images/comparte-tw.png" border="0" width="80" height="26" alt="Compartir" /></a>
				</div>
			<img src="css/images/img5.png" alt="" />
		</li>

		<li id="img6">
			<div class="slide-cnt">
				<h4>10/04/2013</h4>
				<h2>Andrea Ortiz Robles</h2>
				<p>Fué vista por última vez en la colonia Reforma, Oaxaca de Juárez, Oax.</p>
				<a href="javascript:var dir=window.document.URL;var tit=window.document.title;var tit2=encodeURIComponent(tit);var dir2= encodeURIComponent(dir);window.location.href=('http://www.facebook.com/share.php?u='+dir2+'&amp;t='+tit2+'');"><img src="css/images/comparte-fb.png" border="0" width="80" height="26" alt="Compartir" /></a>
							    <a href="javascript:var dir=window.document.URL;var tit=window.document.title;var tit2=encodeURIComponent(tit);window.location.href=('http://twitter.com/?status='+tit2+'%20'+dir+'');"><img src="css/images/comparte-tw.png" border="0" width="80" height="26" alt="Compartir" /></a>
				</div>
			<img src="css/images/img6.png" alt="" />
		</li>

		<!--li id="img7">
			<div class="slide-cnt">
				<h4>Heading Title Goes</h4>
				<h2>Just Like That</h2>
				<p>Acor porta mi, non venenatis augue imperdiet quis. Nam faucibus, felis ut suscipit vulputate, tortor quam ultricies neque, eget dignissim elit urna a metus. Aliquam sed quam dui, id lacinia nunc. <a href="#">read more</a></p>
			</div>
			<img src="css/images/mac-img.png" alt="" />
		</li>

		<li id="img8">
			<div class="slide-cnt">
				<h4>Heading Title Goes</h4>
				<h2>Just Like That</h2>
				<p>Acor porta mi, non venenatis augue imperdiet quis. Nam faucibus, felis ut suscipit vulputate, tortor quam ultricies neque, eget dignissim elit urna a metus. Aliquam sed quam dui, id lacinia nunc. <a href="#">read more</a></p>
			</div>
			<img src="css/images/mac-img.png" alt="" />
		</li-->
	</ul>
</div>
<!-- end of slider -->

<!-- thumbs -->
<div id="thumbs-wrapper">
	<div id="thumbs">
		<a href="#img1" class="selected"><img src="css/images/thumb1.png"/></a>
		<a href="#img2"><img src="css/images/thumb2.png" /></a>
		<a href="#img3"><img src="css/images/thumb3.png" /></a>
		<a href="#img4"><img src="css/images/thumb4.png" /></a>
		<a href="#img5"><img src="css/images/thumb5.png" /></a>
		<a href="#img6"><img src="css/images/thumb6.png" /></a>
		<!--a href="#img7"><img src="css/images/thumb3.png" /></a>
		<a href="#img8"><img src="css/images/thumb4.png" /></a-->
	</div>
	<a id="prev" href="#"></a>
	<a id="next" href="#"></a>
</div>
<!-- end of thumbs -->
</div>
<div class="featured">
	<h4>¿Lo(a) Haz visto <strong>recientemente?</strong> ¡Ay&uacute;danos  a <strong>Localizarla!</strong></h4>
	<a class="blue-btn" href="<?php echo Router::url('/usuarios/pistas/');?>">REPORTALA</a>
</div>



<section class="entries">
	<div class="entry">
		<h3>Estadisticas</h3>
		<div class="entry-inner">
			<div class="date">
				<strong>04</strong>
				<span>2014</span>
				<em>Abr</em>
			</div>
			<div class="cnt">
				<p><a>Hasta el 2014, en Oaxaca el promedio de desaparecidos es 1.3 por día.</a></p>
				<p class="meta"><a>Segun datos oficiales de la procuradoria general de justicia del estado.</p>
			</div>
		</div>
		<div class="entry-inner">
			<div class="date">
				<strong>04</strong>
				<span>2014</span>
				<em>Abr</em>
			</div>
			<div class="cnt">
				<p><a href="#">Un menor rapatado puede ser sacada del pais en menos de 5 horas.<br></a></p>
				<p class="meta"><a href="#"> </a> /  <a href="#">e</a></p>
			</div>
		</div>
		<div class="entry-inner">
			<div class="date">
				<strong>06</strong>
				<span>2012¿4</span>
				<em>Abr</em>
			</div>
			<div class="cnt">
				<p><a href="#">El 70% de niños robados son por sus propios padres.<br></a></p>
				<p class="meta"><a href="#"> </a> /  <a href="#"></a></p>
			</div>
		</div>
	</div>
	<div class="entry">
		<h3>Hagamos conciencia</h3>
		<iframe width="550" height="400" src="//www.youtube.com/embed/SKQ6dmptOw4" frameborder="0" allowfullscreen></iframe>
		</div>
	
	<div class="cl">&nbsp;</div>
</section>
