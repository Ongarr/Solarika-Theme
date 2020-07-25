<?php
/**
 * The template for displaying all single posts
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>


<div class="jumbotron jumbotron-fluid hero">
    <div class="hero-text">
        <h1>Instalacje fotowoltaiczne</h1>
        <span>Pozwól by słońce pracowało dla Ciebie!</span>
        <a class="wycena-hero d-block " href="<?= get_permalink(2196)?>"><button type="button"
                class="btn btn-primary px-5 py-2">Zamów darmową wycenę</button></a>
    </div>

</div>

<div class="info-pills">
    <div class="row">
        <div class="col-lg-3 col-sm-6 mt-5">
            <a href="<?= get_permalink(2239)?>">
                <div class="pill-wrapper">
                    <div class="pill-icon heart rounded-circle"></div>
                    <div class="pill-text text-center w-100"><span>Kompleksowa
                            Opieka</span></div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-sm-6 mt-5">
            <a href="<?= get_permalink(2242)?>">
                <div class="pill-wrapper">
                    <div class="pill-icon puzzle rounded-circle"></div>
                    <div class="pill-text text-center w-100"><span>Indywidualny projekt</span></div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-sm-6 mt-5">
            <a href="<?= get_permalink(2241)?>">
                <div class="pill-wrapper">
                    <div class="pill-icon panel rounded-circle"></div>
                    <div class="pill-text text-center w-100"><span>Sprawdzona technologia</span></div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-sm-6 mt-5">
            <a href="<?= get_permalink(2240)?>">
                <div class="pill-wrapper">
                    <div class="pill-icon coin rounded-circle"></div>
                    <div class="pill-text text-center w-100"><span>Atrakcyjne finansowanie</span></div>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-12 text-center">
            <a class="wycena-btn" href="<?= get_permalink(2196)?>"><button type="button"
                    class="btn btn-primary  px-5 py-1">Darmowa wycena</button></a>
        </div>
    </div>
</div>

<div class="container about-short">
    <div class="row">
        <div class="col-lg-6 py-2">
            <h3>Solarika - prąd ze słońca!</h3>
            <p>
                Obsługujemy naszych Klientów kompleksowo, od projektu aż po zgłoszenie instalacji.
                Przeprowadzimy Cię przez cały proces instalacji elektrowni słonecznej!</p>

            <p>
                Przygotujemy dla Ciebie indywidualny projekt instalacji fotowoltaicznej, która zaspokoi Twoje
                zapotrzebowanie na energię elektryczną. Zapewnimy także doradztwo i wsparcie w zakresie finansowania.
                Zamontujemy Twoje panele słoneczne zgodnie z najwyższymi standardami by zapewnić trwałość instalacji i
                bezpieczeństwo użytkowania.
            </p>

            <p>
                Nie musisz się przejmować formalnościami! Po zakończonym montażu zgłosimy twoją instalację do operatora
                sieci oraz do programu “Mój prąd” abyś mógł otrzymać dotację 5000zł. Pomożemy w obliczeniu ulgi
                podatkowej.
            </p>

            </p>
            <a href="<?= get_permalink(2192)?>"><button type="button" class="btn btn-primary mt-3">DLA DOMU</button></a>
            <a href="<?= get_permalink(2194)?>"><button type="button" class="btn btn-primary mt-3">DLA
                    FIRMY</button></a>
            <a href="<?= get_permalink(2193)?>"><button type="button" class="btn btn-primary mt-3">DLA
                    ROLNIKA</button></a>
        </div>
        <div class="col-lg-6">
            <iframe width="100%" min-height="500px" height="100%" src="https://www.youtube.com/embed/qRbw1pqc4KQ"
                frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
    </div>
</div>
<div class="container-fluid steps-wrapper">
    <div class="row">
        <div class="col">
            <h4 class="text-center mb-5">
                Własna instalacja fotowoltaiczna, to proste!
            </h4>
        </div>
    </div>
    <div class="four-steps-wrapper">
        <div class="row four-steps">
            <div class="col-md-3 step contact">
                <div class="step-image"></div>
                <div class="step-pill ">Kontakt</div>
                <div class="step-caption mt-2">Zadzwoń lub napisz chcemy poznać Twoje potrzeby</div>
            </div>
            <div class="col-md-3 step offer">
                <div class="step-image"></div>
                <div class="step-pill">Oferta</div>
                <div class="step-caption mt-2">Po analizie Twoich potrzeb przedstawimy indywidualny projekt, który
                    spełni Twoje oczekiwania.</div>
            </div>
            <div class="col-md-3 step assembly">
                <div class="step-image"></div>
                <div class="step-pill">Montaż</div>
                <div class="step-caption mt-2">Po podpisaniu umowy niezwłocznie przystępujemy do profesjonalnego montażu
                </div>
            </div>
            <div class="col-md-3 step support">
                <div class="step-image"></div>
                <div class="step-pill">Wsparcie</div>
                <div class="step-caption mt-2">Dopilnujemy za Ciebie wszystkich formalności byś mógł cieszyć się darmową
                    energią!</div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <button type="button" class="btn btn-primary">Masz pytania? Pomożemy</button>
    </div>
</div>
<div class="container blog-tiles-mp">
    <div class="row">
        <div class="col">
            <h4 class="text-center mb-2">
                Aktualności
            </h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 ">

            <?php 
            // the query
            $the_query = new WP_Query( array('posts_per_page' => '1') );

            if ( $the_query->have_posts() ) : 
                while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <div class="first-blog"
                    style="background-image: url('<?= get_the_post_thumbnail_url(get_the_ID(),'full');?> ')">
                    <div class="blog-meta-preview pt-2 px-2">
                        <span>
                            <?php the_date(); ?>
                        </span>
                        <h2><?php the_title(); ?></h2>

                    </div>
                </div>
            </a>
            <?php endwhile;
    

            wp_reset_postdata();

            else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>

        </div>
        <div class="col-md-4">
            <?php 
            // the query
            $the_query = new WP_Query( array('offset' => '1', 'posts_per_page' => '2') );

            if ( $the_query->have_posts() ) : 
                while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <div class="secondary-blog"
                    style="background-image: url('<?= get_the_post_thumbnail_url(get_the_ID(),'full');?> ')">
                    <div class="blog-meta-preview pt-2 px-2">
                        <span>
                            <?php the_date(); ?>
                        </span>
                        <h2><?php the_title(); ?></h2>
                    </div>
                </div>
            </a>
            <?php endwhile;
    

            wp_reset_postdata();

            else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
        </div>
    </div>
    <div class="row">
        <a href="<?= get_permalink(2197)?>" class="mx-auto"><button type="button" class="btn btn-primary"><b>Czytaj
                    więcej</b></button></a>
    </div>
</div>




<?php get_footer();