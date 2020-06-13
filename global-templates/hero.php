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
		<h1 class="display-4">Lorem ipsum delor set amet</h1>
		<p class="lead">TEST TEST TESTdsdssdsds for anyone who believes in a L</p>
		<hr class="my-4">
		<p>rtrtrtrtrtrtdffggfghghhjhjhhj
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
