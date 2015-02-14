<?php get_header('home'); ?>

<main role="main">
  <div class="aboutusblk">
  	<b>Nosotros</b>
    <?php html5blank_nav() ?>
  </div>
  <div class="ourschoolblk">
  	<b>Servicios</b>
    <?php html5blank_nav2() ?>
  </div>
  <div class="parentsblk">
  	<b>Para padres</b>
    <?php html5blank_nav3() ?>
  </div>
  <div class="galleryblk">
  	<div class="gblklogo"><img src="<?php echo get_template_directory_uri(); ?>/img/logito.png" width="35" height="40"  alt=""/></div>
    <div class="gblkbtn"><a href="?galerias=galeria-1">Galeria</a></div>
  </div>
  <div class="welcomeblk"><span class="welcometitle">Bienvenidos</span></br></br>Somos una Institución Educativa que ofrece los servicios en los niveles de Inicial y Primaria que abre sus puertas para construir con niños, padres y docentes una comunidad educativa crítica...<br>
    <span class="welcomemore"><a href="?page_id=22">Read more</a></span>
  </div>
  <div class="blogblk">
    
  </div>
  <div class="contactusblk">
    <?php get_template_part( 'include.text.contacto' ); ?>
  </div>
 
<div class="clear"></div>
</main>

<?php get_footer(); ?>
