<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>



<div class="wrapper" id="wrapper-footer">

    <?php 
    if (!is_page('kontakt')) :?>
    <div class="container-fluid bg-primary py-4 mb-5">
        <div class="row text-center">
            <div class="col-12">
                <p class="display-4 text-dark">Darmowa wycena</p>
            </div>
            <div class="col-12 mb-4">
                <a href="<?= get_permalink(2196)?>"><button type="button" class="btn btn-dark">Kliknij
                        tutaj</button></a>
            </div>
        </div>
    </div>
    <?php else:?>
    <div class="container-fluid py-4 ">
    </div>
    <?php endif;?>



    <div class="<?php echo esc_attr( $container ); ?>">

        <div class="row">

            <div class="col-md-3">
                <div class="menu-title">
                    <span>OFERTA</span>
                </div>
                <!-- The WordPress Menu goes here -->
                <?php wp_nav_menu(
						array(
							'menu'            => 'footer-offer',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => '',
							'fallback_cb'     => '',
							'menu_id'         => 'footer-offer',
							'depth'           => 1,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					); ?>

            </div>
            <div class="col-md-3">
                <div class="menu-title">
                    <span>INFORMACJE</span>
                </div>
                <!-- The WordPress Menu goes here -->
                <?php wp_nav_menu(
						array(
							'menu'            => 'footer-info',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => '',
							'fallback_cb'     => '',
							'menu_id'         => 'footer-info',
							'depth'           => 1,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					); ?>

            </div>
            <!-- <div class="col-md-3">
                <div class="menu-title">
					<span>SOCIAL MEDIA</span>
					<div class="div mt-2">
					<a href="https://www.facebook.com/solarikapl">
						<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
	<path d="M25.7812 3.28125H4.21875C3.7002 3.28125 3.28125 3.7002 3.28125 4.21875V25.7812C3.28125 26.2998 3.7002 26.7188 4.21875 26.7188H25.7812C26.2998 26.7188 26.7188 26.2998 26.7188 25.7812V4.21875C26.7188 3.7002 26.2998 3.28125 25.7812 3.28125ZM23.0742 10.1221H21.2021C19.7344 10.1221 19.4502 10.8193 19.4502 11.8447V14.1035H22.9541L22.4971 17.6396H19.4502V26.7188H15.7969V17.6426H12.7412V14.1035H15.7969V11.4961C15.7969 8.46973 17.6455 6.82031 20.3467 6.82031C21.6416 6.82031 22.752 6.91699 23.0771 6.96094V10.1221H23.0742Z" fill="#ADADAD"/>
	</svg>
					</a>
<a href="https://www.instagram.com/solarikapl/">
	<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
	<path d="M15.0001 8.99111C11.6749 8.99111 8.99135 11.6747 8.99135 14.9999C8.99135 18.3251 11.6749 21.0087 15.0001 21.0087C18.3253 21.0087 21.0089 18.3251 21.0089 14.9999C21.0089 11.6747 18.3253 8.99111 15.0001 8.99111ZM15.0001 18.9052C12.8497 18.9052 11.0949 17.1503 11.0949 14.9999C11.0949 12.8495 12.8497 11.0946 15.0001 11.0946C17.1505 11.0946 18.9054 12.8495 18.9054 14.9999C18.9054 17.1503 17.1505 18.9052 15.0001 18.9052ZM21.255 7.34462C20.4787 7.34462 19.8517 7.97157 19.8517 8.74794C19.8517 9.52431 20.4787 10.1513 21.255 10.1513C22.0314 10.1513 22.6583 9.52724 22.6583 8.74794C22.6586 8.56359 22.6224 8.381 22.552 8.21064C22.4816 8.04028 22.3782 7.88549 22.2478 7.75513C22.1175 7.62477 21.9627 7.52141 21.7923 7.45097C21.622 7.38053 21.4394 7.34439 21.255 7.34462ZM26.713 14.9999C26.713 13.3827 26.7277 11.7802 26.6369 10.1659C26.546 8.29091 26.1183 6.62685 24.7472 5.25575C23.3732 3.88173 21.7121 3.45693 19.8371 3.36611C18.2199 3.27529 16.6173 3.28993 15.0031 3.28993C13.3859 3.28993 11.7833 3.27529 10.1691 3.36611C8.29409 3.45693 6.63002 3.88466 5.25893 5.25575C3.8849 6.62978 3.4601 8.29091 3.36928 10.1659C3.27846 11.7831 3.29311 13.3856 3.29311 14.9999C3.29311 16.6142 3.27846 18.2196 3.36928 19.8339C3.4601 21.7089 3.88783 23.3729 5.25893 24.744C6.63295 26.1181 8.29409 26.5429 10.1691 26.6337C11.7863 26.7245 13.3888 26.7099 15.0031 26.7099C16.6203 26.7099 18.2228 26.7245 19.8371 26.6337C21.7121 26.5429 23.3761 26.1151 24.7472 24.744C26.1212 23.37 26.546 21.7089 26.6369 19.8339C26.7306 18.2196 26.713 16.6171 26.713 14.9999ZM24.1349 21.9081C23.921 22.4413 23.6632 22.8397 23.2501 23.2499C22.8371 23.663 22.4415 23.9208 21.9083 24.1347C20.3673 24.747 16.7081 24.6093 15.0001 24.6093C13.2921 24.6093 9.63002 24.747 8.08901 24.1376C7.5558 23.9237 7.15737 23.6659 6.74721 23.2528C6.33412 22.8397 6.07631 22.4442 5.86244 21.911C5.25307 20.3671 5.39076 16.7079 5.39076 14.9999C5.39076 13.2919 5.25307 9.62978 5.86244 8.08876C6.07631 7.55556 6.33412 7.15712 6.74721 6.74697C7.1603 6.33681 7.5558 6.07607 8.08901 5.8622C9.63002 5.25282 13.2921 5.39052 15.0001 5.39052C16.7081 5.39052 20.3703 5.25282 21.9113 5.8622C22.4445 6.07607 22.8429 6.33388 23.2531 6.74697C23.6662 7.16005 23.924 7.55556 24.1378 8.08876C24.7472 9.62978 24.6095 13.2919 24.6095 14.9999C24.6095 16.7079 24.7472 20.3671 24.1349 21.9081Z" fill="#ADADAD"/>
	</svg>
</a>

					</div>
                </div> -->

            <!-- </div> -->
            <div class="col-md-3">

                <div class="menu-title">
                    <span>BIURO OBSŁUGI KLIENTA</span>
                </div>
                <div>
                    <p>Biuro otwarte od 9:00 do 17:00</p>
                    <p><a rel="nofollow" href="tel:+48575727000">+48 575 727 000</a></p>
                    <p><a rel="nofollow" href="mailto:kontakt@solarika.pl">kontakt@solarika.pl</a></p>
                </div>

            </div>

            <div class="col-md-3">

                <div class="menu-title">
                    <span>Dane firmy</span>
                </div>
                <div>
                    <div>
                        <p>Solarika sp. z o.o. sp. k<br>
                            Obornicka 229 lok. 219<br>
                            60-650 Poznań<br>
                            NIP: 7792505801<br>
                            REGON: 383334359</p>
                    </div>
                </div>

            </div>

        </div><!-- row end -->

    </div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>