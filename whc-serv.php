<?php
/**
 * The template for displaying all single posts
 *
 * Template Name: whc-Services page
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package whc-digital-agency
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

 
      
 <div class="container pt-5">
 <div class="row">
 
 <div class="col-8">
 <div class="row pt-5">
		<?php 
            $args = array(
				'posts_per_page' => 3,
                'post_type' => 'services',
                'order' => 'DSC'
			);
			
			$services = new WP_Query($args);
			
			?>

            <?php if($services -> have_posts()): while($services -> have_posts()):$services -> the_post() ?>
			<div class="col-sm-4" >
			<div class="bg-dark rounded-circle fimg">
					<?php if(has_post_thumbnail()): ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<?php the_post_thumbnail(); ?>
					</a>
					<?php endif; ?>
				</div>
				<div class="services-box text-center">
					<h2 >
						<?php the_title(); ?>
					</h2>	
								
					<div class="container">
						<div class="col-xs-4">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
		<?php endwhile; endif; ?>
			</div>
		</div>
		<div class="col-4">
		<?php get_sidebar( '2' ) ?>
	 </div>
	</div>
</div>
</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

