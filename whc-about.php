<?php
/**
 * The template for displaying all single posts
 *
 * Template Name: About page
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

      
 <div class="container pt-5">
 <div class="row">
 <div class="col-4">
		<?php get_sidebar( ) ?>
	 </div>
 <div class="col-8">
 
			</div>
		</div>
		
	</div>
</div>
</div>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php 
get_footer(  );
?>
<?php
