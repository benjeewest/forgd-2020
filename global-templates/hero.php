<?php
/**
 * Hero setup.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<div class="jumbotron bg-primary text-white">
	<div class="container">
		<h1 class="display-4">Forging a new Britain - together</h1>
		<p class="lead">Forgd is for anyone who believes in a L</p>
		<hr class="my-4">
		<p>Forgd is a community of people working for a patriotic Labour Party that governs not just for itself, or the priorities of Labour members, but for the benefit of our country as a whole. For us, patriotism means so much more than flags or national anthems– it is, simply, a belief in our country, and a belief in the vast, untapped potential of all those who live in it.
			We are patriotic not in spite of being Labour members. We are Labour members because we are patriotic.
		</p>
		<p class="lead">
			<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
		</p>
	</div>
</div>
<?php if ( is_active_sidebar( 'hero' ) || is_active_sidebar( 'statichero' ) || is_active_sidebar( 'herocanvas' ) ) : ?>

<div class="wrapper" id="wrapper-hero">

	<?php get_template_part( 'sidebar-templates/sidebar', 'hero' ); ?>

	<?php get_template_part( 'sidebar-templates/sidebar', 'herocanvas' ); ?>

	<?php get_template_part( 'sidebar-templates/sidebar', 'statichero' ); ?>

</div>

<?php endif; ?>
