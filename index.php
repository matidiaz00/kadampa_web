<?php get_header(); ?>

		<?php if( is_home() ) {?>
			<section style="background-image: url(<?php bloginfo('template_directory'); ?>/img/gueshe-la.jpg);"></section>
		<?php } else { ?>
	    	<?php if(has_post_thumbnail()) :?>
				<section style="background-image: url(<?php $image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id, true); echo $image_url[0];  ?>);"></section>
			<?php else :?>
				<section style="background-image: url(<?php bloginfo('template_directory'); ?>/img/buda.png);background-color: #FFE0AF;"></section>
			<?php endif;?>
		<?php } ?>


		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="wrapper">
				<?php if( is_home() ) {//IF SI ES HOME
					if ( 0 == get_option('page_on_front') ) {//IF SI ESTA SELECCIONADA UNA PAGINA EN HOME
						include get_template_directory().'/functions/default/home_default.php';
					} else {
						while (have_posts()) : the_post();
							the_content();
						endwhile;
					}
				} else {
					if (have_posts()) {
						while (have_posts()) : the_post();
							the_content();
						endwhile;
					} else {
						echo "<h1>ERROR</h1>";
						echo "<p>La pagina que usted esta intentando ingresar es incorrecta.</p>";
					}
				}?>
			</div>
		</article>

		<div>
			<?php
			$posttags = get_the_tags();
			if ($posttags) {
			  foreach($posttags as $tag) {
			    echo '<img src="http://example.com/images/' . $tag->term_id . '.jpg" 
			alt="' . $tag->name . '" />'; 
			  }
			}
			?>
			
		</div>
		
<?php get_footer(); ?>