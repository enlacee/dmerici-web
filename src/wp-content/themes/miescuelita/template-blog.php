<?php /* Template Name: Blog Template */get_header(); ?>

	<main role="main">
    <div class="menuwrap">
      <div class="ourschoolblk2">
        <b>Our school</b>
        <?php html5blank_nav2() ?>
      </div>
      <div class="parentsblk2">
        <b>Parents</b>
        <?php html5blank_nav3() ?>
      </div>
      <div class="galleryblk2">
        <b><a href="?galerias=galeria-1">Gallery</a></b>
      </div>
    </div>
    <div class="sidebar">
    	<div class="menuwrap2">
          <div class="aboutusblk2">
            <b>About us</b>
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
			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>
             
          </div>
	  </section>
		<!-- /section -->
        <div class="clear"></div>
</main>

<?php get_footer(); ?>
