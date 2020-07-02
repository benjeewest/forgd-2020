<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="wrapper" id="single-wrapper">

	



		<main class="site-main" id="main" tabindex="-1">

			<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'loop-templates/content', 'single' ); ?>

			<?php understrap_post_nav(); ?>

			<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->


	

</div><!-- #single-wrapper -->

<?php get_footer(); ?>
