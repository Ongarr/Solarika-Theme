<?php /* Template Name: Kariera */ 

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
                        <?php
                                            $args = array(
                        'post_type' => 'job',
                        'posts_per_page' => 3
                        );
                        $jobs = new WP_Query( $args );
                        
                        if($jobs->have_posts()) : while($jobs->have_posts()) : 
                            $jobs->the_post(); ?>
                            <div class="row bg-light py-3">
                                <div class="col">
                                    <h3 class="entry-title"><?php the_field('stanowisko'); ?></h1>
                                    <?php the_field('opis')?>
                                    <p class="text-center">Wyślij swoje CV/zapytanie na <a href="mailto:kontakt@solarika.pl">kontakt@solarika.pl</a></p>
                                </div>
                            </div>

                        <?php endwhile; ?>
                        <?php else : ?>
                            <p class="h4 text-center">W tym momencie nie rekrutujemy na żadne stanowisko w naszej firmie.</p>
                        <?php endif; ?>


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