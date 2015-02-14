<?php get_header('archive'); ?>

	<main role="main">
    <div class="menuwrap">
      <div class="ourschoolblk2">
        <b>Servicios</b>
        <?php html5blank_nav2() ?>
      </div>
      <div class="parentsblk2">
        <b>Para padres</b>
        <?php html5blank_nav3() ?>
      </div>
      <div class="galleryblk2">
        <b><a href="?galerias=galeria-1">Gallery</a></b>
      </div>
    </div>
    <div class="sidebar">
    	<div class="menuwrap2">
          <div class="aboutusblk2">
            <b>Nosotros</b>
            <?php html5blank_nav() ?>
            </div>
        </div>
        <div class="spacer"></div>
        <div class="blogmenu">
        	<b>Blog</b>
            <ul>
				<?php wp_get_archives('type=yearly'); ?>
			</ul>
          <div class="bdarrow"><img src="<?php echo get_template_directory_uri(); ?>/img/darrow2.png" width="10" height="7"  alt=""/></div>
        </div>
        <div class="contactusblk">
            <?php get_template_part( 'include.text.contacto' ); ?>
        </div>
    </div>
    <!-- section -->
		<section>
		<div class="content">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post title -->
			<p><a class="titulo1" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			<!-- /post title -->

			<!-- post details -->
			<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
			<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author(); ?></span>
			<span class="comments"><?php comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span></p>
			<!-- /post details -->

			<div class="pcontent">
			  <?php the_content(); // Dynamic Content ?>
		  </div>

			<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

			<?php comments_template(); ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

		</div>
	  </section>
		<!-- /section -->
        <div class="clear"></div>
</main>

<?php get_footer(); ?>
