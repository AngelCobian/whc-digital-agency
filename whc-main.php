<?php
/**
 * The template for displaying all single posts
 * 
 * Template Name: Main Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package whc-digital-agency
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
 
      
 

<div class="bg mb-5" style="background-image: url('<?php echo( get_header_image() ) ?>'); color: smokewhite;">
<div class="container-fluid">
    <div class="col-md-5  offset-1 text-white">
        <p class="site-title"><?php bloginfo( 'name' ); ?></p>
        <p class="site-description"><?php bloginfo( 'description' ) ?></p>
		<button class="btn btn-dark text-uppercase">purchase now</button>
    </div>
</div>
</div>

<section id="services">
<div class="container">
	<div class="row">
		<div class="col-6 offset-3 text-center">
			<h1>Welcome to digency</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis voluptatibus esse temporibus!</p>
			<hr style="width: 7rem; height: 2px;">
		</div>
	</div>
	<div class="row">
		<?php 
            $args = array(
				'posts_per_page' => 3,
                'post_type' => 'services',
                'order' => 'DSC'
                );
				
                $services = new WP_Query($args);
				
				?>

            <?php if($services -> have_posts()): while($services -> have_posts()):$services -> the_post() ?>
			<div class="col-md-4 mb-3 col-sd-12" >
				<div class="services-box bg-dark rounded-circle">
					<?php if(has_post_thumbnail()): ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<?php the_post_thumbnail(); ?>
					</a>
					<?php endif; ?>
				</div>
				<div class="services-box text-center pt-3">
					<h2 >
						<?php the_title(); ?>
					</h2>	
								
					<div class="container">
						<div class="col-xs-12">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
		<?php endwhile; endif; ?>
	</div>
</div>
			
</section>

<section id="stats">
	<div class="bg-dark">
		<div class="container p-100 mt-5">
			<div class="row ">

				<div class="col-md-3 text-white col-sm-12">
					<i class="fas fa-file text-muted custom"></i>
					<span class="font">&nbsp;230</span>
					<p class="text-muted">Projects done</p>
				</div>
				<div class="col-md-3 text-white col-sm-12 ">
					<i class="fas fa-file text-muted custom"></i>
					<span class="font">&nbsp;789</span>
					<p class="text-muted">satisfied Clients</p>
				</div>
				<div class="col-md-3 text-white col-sm-12 ">
					<i class="fas fa-file text-muted custom"></i>
					<span class="font">&nbsp;580</span>
					<p class="text-muted">Cup of Coffe</p>
				</div>
				<div class="col-md-3 text-white col-sm-12 ">
					<i class="fas fa-file text-muted custom"></i>
					<span class="font">&nbsp;129</span>
					<p class="text-muted">Awards Win</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="testimony" class="mb-5">
	<div class="p-100 container">
			<div class="row">

				<?php 
            $argsTestimonys = array(
				'posts_per_page' => 1,
                'post_type' => 'testimonys',
                'order' => 'DSC'
			);
			
			$testimonys = new WP_Query($argsTestimonys);
			
			?>

            	<?php if($testimonys -> have_posts()): while($testimonys -> have_posts()):$testimonys -> the_post() ?>
				<div class="col-md-5 col-sm-12 mb-5">
					<div class="services-box text-center">
						<h2 >
						<?php the_title(); ?>
						</h2>	
					
						<?php the_content(); ?>
					</div>
				</div>
					<div class="col-md-2 offset-md-3 offset-sm-2 col-sm-12">
						<div class="person">
							<div class="bg-dark rounded-circle">

								<?php if(has_post_thumbnail()): ?>
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
								<?php the_post_thumbnail(); ?>
							</a>
						</div>
						</div>
					</div>
				<?php endif; ?>
				</div>
			</div>
		</div>
		<?php endwhile; endif; ?>
	</div>
</div>
		
</section>
<section class="contact mb-5">
	<div class="container">
		<div class="row text-center">
			<?php 
            	$argsContacts = array(
					'posts_per_page' => 2,
                	'post_type' => 'contacts',
                	'order' => 'ASC'
				);
			
				$contacts = new WP_Query($argsContacts);
			
				?>

            	<?php if($contacts -> have_posts()): while($contacts -> have_posts()):$contacts -> the_post() ?>
				<div class="col-md-6 col-sm-12 ">
					<div class="contact-box">					
						<?php the_content(); ?>
					</div>
				</div>
					
				
				<?php endwhile; endif; ?>
		</div>
	</div>
</section>

<section id="map" class="map">
	

		<?php echo do_shortcode( '[wpgmza id="1"]' ) ?>
	
</section>

<section id="newsletter" class="p-100">
	<div class="container">
		<div class="text-center">
			<H1>Subscribe Newsletter</H1>
			<h2 class="text-muted mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing.</h2>
			<form class="row">
				<div class="col-md-6 offset-2">
					<input class="form-control" type="text" placeholder="Enter your email">

				</div>
				<div class="col-md-2">

					<button class="btn btn-dark form-control">Submit</button>
				</div>
			</form>
			<div class="col-md-4 offset-md-4 pt-4">

				<div class="row text-muted mb-6">
					
					<div class="col-sm-2"><i class="fab fa-facebook-f social"></i></div>
					<div class="col-sm-2"><i class="fab fa-facebook-f social"></i></div>
					<div class="col-md-2"><i class="fab fa-facebook-f social"></i></div>
					<div class="col-md-2"><i class="fab fa-facebook-f social"></i></div>
					<div class="col-md-2"><i class="fab fa-facebook-f social"></i></div>
				</div>
			</div>
		</div>

	</div>
</section>
<?php 
get_footer();

?>
