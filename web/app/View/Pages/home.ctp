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


$this->Html->script(array(
											'functions.js',
											), array('inline' => false));
											
?>
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
