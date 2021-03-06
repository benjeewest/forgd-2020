<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly  . test cfgfgefffomment 3

defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="archive-wrapper">

	<div class="container" id="content" tabindex="-1">

		<div class="site-main" id="main">


			<!-- Do the left sidebar check -->
			<main class="content-area" id="primary">



				<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
				</header><!-- .page-header -->

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

				<?php

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'loop-templates/content', get_post_format() );
						?>

				<?php endwhile; ?>

				<?php else : ?>

				<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>



				<!-- The pagination component -->
				<?php understrap_pagination(); ?>
			</main><!-- #main -->
			<?php get_template_part( 'sidebar-templates/sidebar', 'right' ); ?>
		</div><!-- #content -->

	</div><!-- #archive-wrapper -->

	<?php get_footer(); ?>
