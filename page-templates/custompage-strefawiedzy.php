<?php /* Template Name: Strefa wiedzy */ 

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper" id="page-wrapper">

    <div class="<?php echo esc_attr( $container ); ?>-fluid" id="content" tabindex="-1">

        <div class="row">

            <!-- Do the left sidebar check -->
            <?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

            <main class="site-main" id="main">

                <?php while ( have_posts() ) : the_post(); ?>

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

                        <div class="container pb-5">
                            <div class="row faq">
                                <div class="col-lg-3 text-center"><a href="<?= get_permalink(2195)?>"
                                        class="mx-auto mt-5"><button type="button" class="btn btn-primary"><b>O
                                                fotowoltaice</b></button></a></div>
                                <div class="col-lg-3 text-center"><a href="<?= get_permalink(2347)?>"
                                        class="mx-auto mt-5"><button type="button" class="btn btn-primary"><b>Dla
                                                domu</b></button></a></div>
                                <div class="col-lg-3 text-center"><a href="<?= get_permalink(2353)?>"
                                        class="mx-auto mt-5"><button type="button" class="btn btn-primary"><b>Dla
                                                rolnika</b></button></a></div>
                                <div class="col-lg-3 text-center"><a href="<?= get_permalink(2350)?>"
                                        class="mx-auto mt-5"><button type="button" class="btn btn-primary"><b>Dla
                                                firmy</b></button></a></div>
                            </div>
                        </div>
                        <?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>

                        <?php the_content(); ?>


                    </div><!-- .entry-content -->

                </article><!-- #post-## -->


                <?php endwhile; // end of the loop. ?>

            </main><!-- #main -->

            <!-- Do the right sidebar check -->
            <?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

        </div><!-- .row -->

    </div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer();