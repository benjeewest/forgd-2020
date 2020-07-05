<?php
/**
 * Sidebar setup for footer full.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>

<?php if ( is_active_sidebar( 'footerfull' ) ) : ?>

<!-- ******************* The Footer Full-width Widget Area ******************* -->

<aside class="wrapper footer-full" id="wrapper-footer-full">

	<div class="inner" id="footer-full-content" tabindex="-1">

		<div class="row">

			<?php dynamic_sidebar( 'footerfull' ); ?>

		</div>

	</div>

</aside><!-- #wrapper-footer-full -->

<?php endif; ?>
