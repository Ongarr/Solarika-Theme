<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<div class="container">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); 
			if(get_field('header-text'))
				{?>
				<p> <?php the_field('header-text')?></p> <?php
				}?>
		</div>

	</header><!-- .entry-header -->

	

	<div class="entry-content mx-auto pt-5">
	<?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>

		<?php the_content(); ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
