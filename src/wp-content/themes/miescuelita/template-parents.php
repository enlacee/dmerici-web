<?php /* Template Name: Parents Template */get_header(); ?>

	<main role="main">
    <div class="menuwrap">
      <div class="aboutusblk2">
  			<b>Nosotros</b>
    		<?php html5blank_nav() ?>
  		</div>
        <div class="ourschoolblk2">
        <b>Servicios</b>
        <?php html5blank_nav2() ?>
      </div>
      <div class="galleryblk2">
        <b><a href="?galerias=galeria-1">Gallery</a></b>
      </div>
    </div>
    <div class="sidebar">
   	  <div class="activo parentsblk2">
        <b><a href="#">Para padres</a></b>
        <?php html5blank_nav3() ?>
      </div>
  
  <div class="blogbtn"><a href="<?php echo (get_permalink(171)) ? get_permalink(171) : '#'; ?>">Blog</a></div>
        
<div class="contactusblk">
  <?php get_template_part( 'include.text.contacto' ); ?>
</div>
    </div>
    <!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			  <div class="content">
              <p><span class="titulo1"><?php the_title(); ?></span></p>
              	<?php the_content();?>
              </div>
            </article>
			<!-- /article -->

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
