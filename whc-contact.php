<?php
/**
 * The template for displaying all single posts
 *
 * Template Name: Contact page
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
<div class="container">
    <div class="col-md-6 offset-md-3">
        <?php echo do_shortcode( '[contact-form-7 id="61" title="form-2"]' ) ?>

    </div>
</div>
<div class="pd-5 map mb-5">
<?php echo do_shortcode( '[wpgmza id="1"]' ) ?>

</div>
      

		</main><!-- #main -->
    </div><!-- #primary -->
    <div class="">
<?php 
get_footer(  );
?>

    </div>
<?php
