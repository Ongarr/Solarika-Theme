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
    	            <div class="col-md-6 justify-content-center"><a href="tel:+48575727000">+48 575 727 000</a></div>
    	            <div class="col-md-6 justify-content-center"><a href="mailto:kontakt@solarika.pl">kontakt@solarika.pl</a></div>
                </div>
                <div class="row text-center mt-5 px-3">
                    <div class="col">
                        <p class="h3">Chcesz otrzymać indywidualną ofertę?</p>
                        <p>Zostaw nam swoje dane, odezwiemy się i zbierzemy informację niezbędne do przygotowania wyceny!</p>
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