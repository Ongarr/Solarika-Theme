<?php /* Template Name: Newsletter */ ?>
<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;?>

<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<style>
    .landing-hero {
    background: url(<?php echo get_template_directory_uri()?>/images/hero-solarika.jpg) center left / cover;
    padding: 30px 0;
    }

    .landing-hero span {
        background-color: black;
        padding: 5px 5px;
        color: white;
        font-size: 20px;
    }

    .landing-hero h2 {
        font-size: 47px; 
        font-weight: bold; 
        color: black; 
        line-height: 1.2em;
    }

    ul.pdf-list {
    list-style-type: none;
    margin-top: 50px;
    }

    ul.pdf-list li {
    position: relative;
    margin-bottom: 28px;
    padding-left: 60px;
}

ul.pdf-list li::before {
    content: '';
    width: 45px;
    height: 45px;
    position: absolute;
    background-image: url(https://solarika.pl/wp-content/uploads/2020/02/list-pdf.png);
    background-size: cover;
    background-position: center;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
}

img.arrow-pdf {
    margin: auto;
    transform: translateY(-70px);
}

#wpcf7-f2186-o1 {
    background: #F2F2F2;
    transform: translateY(-90px);
    padding: 50px 20px;
    box-shadow: 0 4px 10px rgba(78,78,78,.75);
    margin-bottom: 30px;
    max-width: 400px;
    margin: 30px auto;
}

#wpcf7-f2186-o1 span.form-title {
    font-size: 20px;
    text-align: center;
    display: block;
    margin: auto;
}

#wpcf7-f2186-o1 .wpcf7-submit:hover {
    background: #f0c419;
    color: #000;
}

#wpcf7-f2186-o1 .wpcf7-submit {
    background: #000 !important;
    border: 0 solid #000;
    font-size: 16px;
    min-width: 250px;
    padding: 10px;
    text-align: center;
    margin: auto;
    color: #fff;
    display: block;
    cursor: pointer;
    border-radius: 0px;
    width: 300px;
}

#wpcf7-f2186-o1 .wpcf7-list-item label {
    font-size: 10px;
    line-height: 1.2;
}

@media (max-width: 1023px){
#wpcf7-f2186-o1 {
    transform: translateY(0);
    
}
img.arrow-pdf {
    display: none;
    margin: auto;
    transform: translateY(-70px);
}

}


</style>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav id="main-nav" class="navbar navbar-expand-md navbar-light " aria-labelledby="main-nav-label">

			<h2 id="main-nav-label" class="sr-only">
				<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
			</h2>

		<?php if ( 'container' === $container ) : ?>
			<div class="container">
		<?php endif; ?>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

						<?php endif; ?>

					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->

				
			</div><!-- .container -->
			

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->

<div class="container-fluid landing-hero py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <span>POBIERZ ZA DARMO</span>
                <h2>Poradnik PDF z niezbędną wiedzą o fotowoltaice</h2>
            </div>
            <div class="col-lg-6"></div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-6" style="padding-top: 20px; font-size: 22px">
            <p>
            Zdobądź wiedze o fotowoltaice jeszcze przed decyzją o inwestycji. Zyskaj więcej niż inni, dowiedz się jakie rozwiązania będą najlepsze dla Ciebie.
            </p>
            <ul class="pdf-list"><li>Kiedy inwestycja się zwróci?</li><li>Ulgi, dopłaty, finansowanie</li><li>Jaka jest realna cena instalacji fotowoltaicznej ?</li><li>Jakie są zasady rozliczania z zakładem energetycznym?</li></ul>
        </div>
        <div class="col-lg-6"><?php echo do_shortcode('[contact-form-7 id="2186" title="Landing-PDF"]')?></div>
    </div>
    <div class="row pt-5">
    <img class="arrow-pdf" src="<?php echo get_template_directory_uri()?>/images/arrow-landing.svg">
    </div>
</div>



<?php get_footer();