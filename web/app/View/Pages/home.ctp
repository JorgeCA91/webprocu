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
				<p>AFué vista por ultima vez en el municiío de Santa Cruz Xoxocotlán, Oax. <a href="#">read more</a></p>
			</div>
			<img src="css/images/img1.png" alt="" />
		</li>

		<li id="img2">
			<div class="slide-cnt">
				<h4>21/08/2013</h4>
				<h2>Daniel Gonzáles Aparicio</h2>
				<p>Fué visto por ultima vez en san Andrés Huayapan, Oaxaca. <a href="#">read more</a></p>
			</div>
			<img src="css/images/img2.png" alt="" />
		</li>

		<li id="img3">
			<div class="slide-cnt">
				<h4>30/08/2011</h4>
				<h2>Fatima Cariño Hernández</h2>
				<p>Fué vista por última vez en Sanlina Cruz, Oaxaca.<a href="#">read more</a></p>
			</div>
			<img src="css/images/img3.png" alt="" />
		</li>

		<li id="img4">
			<div class="slide-cnt">
				<h4>7/12/2010</h4>
				<h2>Fermín Díaz Aragón</h2>
				<p>Fué visto por ultima vez en Miahuatlán de Porfirio Díaz, Oaxaca. <a href="#">read more</a></p>
			</div>
			<img src="css/images/img4.png" alt="" />
		</li>

		<li id="img5">
			<div class="slide-cnt">
				<h4>21/08/2013</h4>
				<h2>Daniel Gonzáles Aparicio</h2>
				<p>Fué visto por ultima vez en san Andrés Huayapan, Oaxaca. <a href="#">read more</a></p>
			</div>
			<img src="css/images/img5.png" alt="" />
		</li>

		<li id="img6">
			<div class="slide-cnt">
				<h4>10/04/2013</h4>
				<h2>Andrea Ortiz Robles</h2>
				<p>Fué vista por última vez en la colonia Reforma, Oaxaca de Juárez, Oax.<a href="#">read more</a></p>
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

<section class="cols">
	<div class="col">
		<h3>About Us</h3>
		<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dui ipsum, cursus ut adipiscing porta, vestibulum quis turpis. Ut ultricies rutrum lorem, in blandit tortor congue pulvinar lorem ipsum dolor sit amet, consectetur adipiscing elit. <br><a class="more" href="#">view more</a></p>
	</div>

	<div class="col">
		<h3>We’re Hiring</h3>
		<img class="left" alt="" src="css/images/col-img.png">
		<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </h5>
		<div class="cl">&nbsp;</div>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dui ipsum, cursus ut adipiscing porta, vestibulum quis turpis adispicing amet sit. <br><a class="more" href="#">view more</a></p>
	</div>

	<div class="col last">
		<h3>Our Services</h3>
		<ul>
			<li class="first"><a href="#">Lorem ipsum dolor sit amet</a></li>
			<li class="odd"><a href="#">Sit atmet, consectetur lorem </a></li>
			<li><a href="#">Consectetur adispicing dolor</a></li>
			<li class="odd"><a href="#">Lipsuim dolor amet adpispicing</a></li>
			<li><a href="#">Lipsuim dolor amet adpispicing</a></li>
		</ul>
	</div>
	<div class="cl">&nbsp;</div>
</section>

<section class="entries">
	<div class="entry">
		<h3>Latest Blog Posts</h3>
		<div class="entry-inner">
			<div class="date">
				<strong>01</strong>
				<span>2012</span>
				<em>feb</em>
			</div>
			<div class="cnt">
				<p><a href="#">Lorem ipsum dolor sit<br> amet, consectetur dor</a></p>
				<p class="meta"><a href="#">by John Doe </a> /  <a href="#">Category Name</a></p>
			</div>
		</div>
		<div class="entry-inner">
			<div class="date">
				<strong>28</strong>
				<span>2012</span>
				<em>jan</em>
			</div>
			<div class="cnt">
				<p><a href="#">Lorem ipsum dolor sit<br> amet, consectetur dor</a></p>
				<p class="meta"><a href="#">by John Doe </a> /  <a href="#">Category Name</a></p>
			</div>
		</div>
		<div class="entry-inner">
			<div class="date">
				<strong>11</strong>
				<span>2012</span>
				<em>feb</em>
			</div>
			<div class="cnt">
				<p><a href="#">Lorem ipsum dolor sit<br> amet, consectetur dor</a></p>
				<p class="meta"><a href="#">by John Doe </a> /  <a href="#">Category Name</a></p>
			</div>
		</div>
	</div>
	<div class="entry">
		<h3>Latest Project</h3>
		<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </h5>
		<a href="#"><img alt="" src="css/images/col-img2.png"></a>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dui ipsum, cursus ut adipiscing porta, vestibulum quis turpis adispicing amet sit.  <br><a class="more" href="#">view more</a></p>
	</div>
	<div class="entry last">
		<h3>Testimonials</h3>

		<div class="testimonials">					
			<p><strong>“</strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dui ipsum, cursus ut adipiscing porta, vestibulum quis turpis.”</p>
			<p class="author">John Doe, <strong>Company Name</strong></p>
		</div>
		
		<div class="partners">
			<h3>Our Partners</h3>
			<img alt="" src="css/images/partners-img.png">
		</div>
	</div>
	<div class="cl">&nbsp;</div>
</section>
