<?php /* Template Name: Kontakt */ 

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); ?>

<div class="container-fluid kontakt-wrapper" style>
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-lg-6"></div>
            <div class="col-lg-5">
                <div class="row kontakt-dane mx-auto">
                    <a href="tel:+48575727000">
                        <div class="col justify-content-center">+48 575 727 000</div>
                    </a>
                    <a href="mailto:kontakt@solarika.pl">
                        <div class="col justify-content-center">kontakt@solarika.pl</div>
                    </a>
                </div>
                <div class="row text-center mt-5 px-3">
                    <div class="col">
                        <p class="h3">ZAMÓW DARMOWĄ WYCENĘ!</p>
                        <p>Wypełnij formularz! Skontaktujemy się z Tobą i przedstawimy szczegóły oferty!</p>
                    </div>
                </div>
                <div class="row mx-auto kontakt-form p-5">
                    <?php echo do_shortcode( '[contact-form-7 id="1076" title="Kontakt"]')?>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</div>

<?php get_footer();