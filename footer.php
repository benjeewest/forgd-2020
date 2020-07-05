<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<footer class="wrapper site-footer" id="wrapper-footer">

	<div class="inner">




		<div class="site-info" id="colophon">

			Copyright Forgd Ltd, 2020

		</div><!-- .site-info -->






	</div><!-- container end -->

</footer><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
