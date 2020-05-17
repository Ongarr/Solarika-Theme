<?php /* Template Name: Dla domu */ ?>
<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();?>

<div class="jumbotron jumbotron-fluid hero-custom dom">
    <div class="hero-text">
        <span>Zacznij oszczędzać z fotowoltaiką!</span>
    </div>
</div>

<div class="container-fluid py-5" style="background: linear-gradient(88.29deg, rgba(255, 255, 255, 0) 4.91%, rgba(255, 255, 255, 0.8) 28.63%, #FFFFFF 65.03%), url(<?php echo get_template_directory_uri(); ?>/images/dom-indywidualnyprojekt.jpg)";
 >
    <div class="container">
        <div class="row my-5 py-5">
            <div class="col-lg-6"></div>
            <div class="col-lg-6">
                <h3><b>Indywidualny projekt</b></h3>
                <p>Wychodzimy z założenia że każdy nasz klient wymaga osobnego podejścia. Każdy z nas ma inne oczekiwania,
                    problemy oraz możliwości. Dlatego nie korzystamy z gotowych projektów! Każdy nasz klient po
                    wcześniejszym kontakcie otrzymuje indywidualny projekt stworzony z myślą tylko o nim! </p>
                <a class="underline text-dark" href="<?= get_permalink(2242)?>"><ins><b>czytaj więcej</b></ins></a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5" style="background: url(<?php echo get_template_directory_uri(); ?>/images/dom-kompeksowa-opieka.jpg) center center, linear-gradient(88.29deg, rgba(255, 255, 255, 0) 4.91%, rgba(255, 255, 255, 0.8) 28.63%, #FFFFFF 65.03%); background-size: cover">
    <div class="container py-5">
        <div class="row my-5">
            <div class="col-lg-6">
                <h3><b>Kompleksowa opieka</b></h3>
                <p>Cały proces montażu paneli fotowoltaicznych realizujemy w trzech krokach: Pierwszy to przygotowanie
                    indywidualnego projektu instalacji fotowoltaicznej, drugi to wybór i montaż odpowiednich paneli
                    słonecznych oraz falownika, trzeci to opieka serwisowa i gwarancyjna. Montując instalacje z Solarika nie
                    zostaniesz sam po montażu fotowoltaiki!</p>
                <a class="underline text-dark" href="<?= get_permalink(2239)?>"><ins><b>czytaj więcej</b></ins></a>
            </div>
            <div class="col-lg-6"></div>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row my-5">
        <div class="col-lg-8 m-auto text-center pt-5">
            <p class="h2">Finanse</p>
            <p>Chciałbyś założyć instalację fotowoltaiczną lecz nie wiesz jak mógłbyś ją z sfinansować? Dowiedz się
                jakie możliwości finansowania daje nasza firma oraz co możesz zyskać dzięki założeniu paneli słonecznych
                w swoim domu!</p>
            <a class="underline text-dark" href="<?= get_permalink(2240)?>"><ins><b>czytaj więcej</b></ins></a>
        </div>
    </div>
    <div class="row justify-content-center finanse py-4">
        <div class="col-lg-3">
            <p class="h4 ratalny">
                Kredyt ratalny
            </p>
            <p>
                Dla naszych klientów mamy możliwość instalacji paneli słonecznych na raty. To my występujemy w Twoim
                imieniu do banku o udzielenie kredytu. Sprawdź już dziś możliwość instalacji fotowoltaiki na raty!
                Dowiedz się więcej!
            </p>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-3">
            <p class="h4 ulga">
                Ulga Podatkowa
            </p>
            <p>
                Zgodnie z nową ustawą o podatku dochodowym osoba fizyczna może odliczyć od podstawy opodatkowania
                inwestycje termomodernizacyjne w tym również inwestycje związaną z instalacją paneli fotowoltaicznych!
                Dowiedz się więcej!
            </p>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-3">
            <p class="h4 mojprad">
                Dotacja „Mój prąd”
            </p>
            <p>
                Wielu naszych klientów bierze udział w programie „Mój prąd” w którym można uzyskać dotację w wysokości
                5000 zł na instalacje fotowoltaiczną! Każdorazowo pomagamy w uzyskaniu takiej dotacji!
            </p>
        </div>
    </div>
    <div class="row mt-4">
        <a class="mx-auto" href="<?= get_permalink(2196)?>">
            <button type="button" class="btn btn-primary">
                Skontaktuj się z nami
            </button>
        </a>
    </div>
</div>

<?php get_footer();