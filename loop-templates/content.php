<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="col-lg-4 col-md-6 blog-tile">
    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <div class="blog"
                style="background-image: url('<?= get_the_post_thumbnail_url(get_the_ID(),'full');?> ')">
                <div class="blog-meta-preview pt-2 px-2">
                    <span>
                        <?php the_date(); ?>
                    </span>
                    <h2><?php the_title(); ?></h2>
                </div>
            </div>
        </a>
    </article><!-- #post-## -->
</div>