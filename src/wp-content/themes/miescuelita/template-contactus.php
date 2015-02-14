<?php /* Template Name: Contact us Template */get_header(); ?>

	<main role="main">
    <div class="menuwrap">
      <div class="ourschoolblk2">
        <b>Nosotros</b>
        <?php html5blank_nav2() ?>
      </div>
      <div class="parentsblk2">
        <b>Para padres</b>
        <?php html5blank_nav3() ?>
      </div>
      <div class="galleryblk2">
        <b><a href="?galerias=galeria-1">Galeria</a></b>
      </div>
    </div>
    <div class="sidebar">
        <div class="menuwrap2">
          <div class="aboutusblk2">
            <b>Servicios</b>
            <?php html5blank_nav() ?>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		  <div class="map">
          		<iframe width="920" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
              src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3902.3640573549465!2d-76.99789534799064!3d-12.0184388352992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2spe!4v1421974608042"></iframe>
          </div>
          
          <div class="contact">
          	<span class="titulo1">Contáctenos</span><br><br><br>

Teléfonos: <br>
(051)4593931 <br>
(051)4582078 <br>
(051)992313903 <br><br>

Correos:<br>
<a href="mailto:nido.dmerici@gmail.com">nido.dmerici@gmail.com</a><br>
<a href="mailto:marccia22@yahoo.es">marccia22@yahoo.es</a>

          </div>
          
          <div class="contactform">
          	<?php echo do_shortcode('[contact-form-7 id="107" title="Formulario de contacto 1"]'); ?>
          </div>
<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

	  </section>
		<!-- /section -->
        <div class="clear"></div>
</main>

<?php get_footer(); ?>
