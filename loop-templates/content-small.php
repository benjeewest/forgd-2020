<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class('article-sm'); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php
		the_title(
			sprintf( '<h2 class="entry-title balance-text"><a class="author-link" href="%s">%s</a> / <a href="%s" rel="bookmark">', esc_url( get_author_posts_url(get_the_author_meta( 'ID' ))),get_the_author_meta('display_name'),get_the_permalink() ),'</a></h2>'
		);
		?>

		<?php if ( 'post' == get_post_type() ) : ?>

		<?php endif; ?>

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

		<?php the_excerpt(); ?>


	</div><!-- .entry-content -->
	<!-- pseudolink -->
	<a class="pseudolink" href="<?php the_permalink();?>"><?php the_title();?></a>
	<!-- end-pseudolink -->
</article><!-- #post-## -->
