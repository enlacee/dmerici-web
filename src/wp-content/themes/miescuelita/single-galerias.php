<?php get_header(); ?>

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
      <div class="parentsblk2">
        <b>Para padres</b>
        <?php html5blank_nav3() ?>
      </div>
    </div>
    <div class="sidebar">
    	
          <div class="galleryblk2 activo">
        	<b>Galeria</b>
            <ul>
            	<li>Fotos</li>
                <li><a href="?vgalerias=gallery-1">Videos</a></li>
            </ul>
      	  </div>
        
<div class="blogbtn"><a href="<?php echo (get_permalink(171)) ? get_permalink(171) : '#'; ?>">Blog</a></div>
        <div class="contactusblk">
            <?php get_template_part( 'include.text.contacto' ); ?>
        </div>
    </div>
    <script type="text/javascript">
		function loadimg(img, title){
			jQuery('.gimg').attr('src', img);
			jQuery('.gimgtitle').html(title);
		}
		
		function moveslide(num){
			jQuery('.gthumbslider').css('left', -625*num);
			jQuery('.gnav a').removeClass('prendido');
			jQuery('.number'+num).addClass('prendido');
		}
	</script>
    <!-- section -->
		<section>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<?php 
				$repeatable_field_values = simple_fields_values("image,title");
				$imgid = $repeatable_field_values[0]["image"];
				$title = $repeatable_field_values[0]["title"];
				$img = wp_get_attachment_image_src($imgid, 'full');
			?>
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			  <div class="content">
              <div class="gselect">
              <?php
			$postid = get_the_id();
			$args = array(
				'post_type' => 'galerias'
			);
			$the_query = new WP_Query( $args );
		?>
        <?php if ( $the_query->have_posts() ) : ?>
              <select onChange="window.location = this.value">
               <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
			   		$postid2 = get_the_id();
					$temp='';
					if ($postid == $postid2){
						$temp = 'selected="selected"';
					}
			   ?>
                <option value="<?php the_permalink() ?>" <?php echo $temp; ?>><?php the_title() ?></option>
                <?php endwhile; ?>
  		<?php wp_reset_postdata(); ?>
			  </select>
		<?php else:  ?>
  	
		<?php endif; ?>
              </div>
<p><span class="titulo1">Photos</span></p>
              	<div class="gallery">
               	  <div class="gimgcont">
               	  	<img class="gimg" src="<?php echo $img[0] ?>" width="606" height="360"  alt=""/> 
                   </div>
                  <div class="gimgtitle"><?php echo $title ?></div>
                  <div class="clear"></div>
			<div class="gthumbcont">
            <div class="gthumbslider">
                    <?php 
						foreach ($repeatable_field_values as $values) {
							$image = wp_get_attachment_image_src($values["image"], 'full');
					?>
                      <div class="gthumb">
                        <img src="<?php echo $image[0] ?>" width="110" height="80"  alt="" onClick="loadimg('<?php echo $image[0] ?>','<?php echo $values["title"] ?>')"/> 
                      </div>
                      <?php }?>
            		</div>
                  </div>
                  <div class="gnav">
                  	<a class="cuadrado" href="javascript:void;" onClick="moveslide(0)"><</a>
                    <?php 
						$resto = 0;
						if (fmod(count($repeatable_field_values),5)>0){
							$resto = 1;
						}
						$total = floor(count($repeatable_field_values)/5)+$resto;
						for ($i = 1; $i <= $total; $i++){
							$class = '';
							if ($i == 1){
								$class = 'prendido';
							}
					?>
                    	<a class="number<?php echo $i-1 ?> <?php echo $class ?>" href="javascript:void;" onClick="moveslide(<?php echo $i-1 ?>)"><?php echo $i ?></a>
                    <?php }?>
                    <a class="cuadrado" href="javascript:void;" onClick="moveslide(<?php echo $total-1 ?>)">></a>
                    </div>
                </div>
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
