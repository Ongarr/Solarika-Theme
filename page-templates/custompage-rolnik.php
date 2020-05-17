<?php /* Template Name: Dla rolnika */ ?>
<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();?>

<div class="jumbotron jumbotron-fluid hero-custom rolnik">
    <div class="hero-text">
        <span>Zyskaj dzięki panelom słonecznym!</span>
    </div>
</div>

<div class="container-fluid py-5">
    <div class="container">
        <div class="row my-5">
            <div class="col-lg-8 m-auto text-center">
                <p class="h2">Mniejsze rachunki za prąd,
                    większy zysk z gospodarstwa!</p>
                <p>Instalacja fotowoltaiczna pozwala na generowanie olbrzymich oszczędności w Twoim gospodarstwie
                    rolnym! Współpracując z nami możesz liczyć na to że zbadamy zapotrzebowanie gospodarstwa na energię
                    elektryczną oraz dobierzemy odpowiednio wydajne panele słoneczne. Zaprojektujemy całą instalację
                    fotowoltaiczną dopasowaną do terenu oraz architektury budynków. Całość prac zostanie przeprowadzana
                    w taki sposób by nie przeszkodziła w funkcjonowaniu Twojego gospodarstwa rolnego!</p>
                <a class="underline text-dark" href="<?= get_permalink(2240)?>"><ins><b>czytaj więcej</b></ins></a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5"
    style="background: url(<?php echo get_template_directory_uri(); ?>/images/rolnik-bg-2.jpg) center center; background-size: cover">
    <div class="container py-5 finanse">
        <div class="row  mb-5">
            <div class="col-lg-2"></div>
            <div class="col-lg-4">
                <div class="rolnik-tile py-3 px-3 mb-3">
                    <p class="h4 ratalny">
                        Odliczanie podatku dolnego
                    </p>
                    <p>
                        Zgodnie z ustawą o podatku rolnym z 2017 roku masz prawo do odliczenia kosztów inwestycji związanej z instalacją paneli fotowoltaiczną. Możesz odzyskać aż do 25% wartości inwestycji (na podstawie art. 13 Ustawy o podatku rolnym 2017 Dz.I. 2016, poz. 617)
                    </p>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="rolnik-tile py-3 px-3">
                    <p class="h4 ulga ">
                        Finansowanie dla rolnictwa
                    </p>
                    <p>
                        Jako nieliczni z branży fotowoltaiki mamy doświadczenie w kredytowaniu instalacji dla gospodarstw rolnych. Dzięki współpracy z zespołem PEAC Finance możemy zapewnić atrakcyjne warunki finansowania instalacji paneli słonecznych w Twoim gospodarstwie. Całość formalności pozostaje po naszej stronie, a Ty możesz się cieszyć własnym prądem!
                    </p>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
        <div class="row pt-5">
            <a href="<?= get_permalink(2194)?>" class="mx-auto mt-5"><button type="button" class="btn btn-primary"><b>Skontakuj się z nami</b></button></a>
        </div>
    </div>
</div>



<?php get_footer();