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
        <a href="<?= get_permalink(2197)?>" class="mx-auto"><button type="button" class="btn btn-primary"><b>Czytaj więcej</b></button></a>
    </div>
</div>
<div class="container extended-seo-text mt-5 mb-5 pt-5">
<h2>SOLARIKA – FOTOWOLTAIKA POZNAŃ – NAJLEPSZY DOSTAWCA FOTOWOLTAIKI</h2>
Solarika to firma z siedzibą w Poznaniu, która zajmuje się sprzedażą i montażem profesjonalnych instalacji fotowoltaicznych. Aktualnie fotowoltaika to jeden z najszybciej rozwijających się rynków w Polsce. Widzimy coraz więcej paneli słonecznych na prywatnych domach, a panele fotowoltaiczne zagościły, już na dobre na gospodarstwach rolnych oraz budynkach firmowych. Fotowoltaika to inwestycja w przyszłość. Produkując własny prąd, oszczędzasz pieniądze na energii elektrycznej, oraz przyczyniasz się do ochrony naszej planety, produkując w pełni ekologiczny prąd. Inwestycja w fotowoltaikę może być pierwszym Twoim krokiem w kierunku ekologicznego domu, a także znacząco wspomóc Twój budżet, generując oszczędności!
<h3 class="pt-5">JAKOŚĆ MONTAŻU FOTOWOLTAIKI</h3>
Solarika wyróżnia się przede wszystkim dbaniem o  wysoką jakość montażu fotowoltaiki. Wszystkie nasze ekipy zakładają fotowoltaikę zgodnie z wypracowanymi, najwyższymi standardami montażu. Dbałość o szczelność dachu, dodatkowe zabezpieczenia po stronie DC i AC, dbałość o bezpieczeństwo pracowników na dachu – to tylko niektóre z wytycznych, które muszą spełnić nasze ekipy podczas montażu fotowoltaiki. Montujemy wyłącznie wysokiej jakości ogniwa fotowoltaiczne. 
<h3 class="pt-5">ATRAKCYJNE CENY DZIĘKI WŁASNEMU IMPORTOWI PANELI FOTOWOLTAICZNYCH</h3>
Dysponujemy ogniwamy fotowoltaicznymi z własnego importu, co pozwala nam zaoferować bardzo korzystną cenę na instalacje fotowoltaiczne. Podczas wyceny każdej instalacji fotowoltaicznej, staramy się w spełnić wszystkie oczekiwania Klienta. Jesteśmy elastyczni w kwestii wyboru podzespołów, więc jak masz już wybrane ogniwa fotowoltaiczne czy falownik, które chcesz umieścić w fotowoltaice na swoim dachu – przygotujemy dla Ciebie ofertę właśnie na takie komponenty!
<h3 class="pt-5">PROFESJONALNE DORADZTWO</h3>
Podczas kontaktu z nami możesz spodziewać się odpowiedniego doradztwa w kwestii doboru podzespołów do fotowoltaiki, doboru mocy czy wyboru lokalizacji dla Twojej fotowoltaiki!

Zapraszam serdecznie do zapoznania się z naszą stroną w całości poświęconej fotowoltaice! Znajdziesz tutaj najnowsze informacje na temat paneli słonecznych i instalacji fotowoltaicznych. Dodatkowo możesz tutaj znaleźć zdjęcia i informację z montaży fotowoltaiki u naszych klientów! W dziale FAQ znajdziesz odpowiedzi na nurtujące cię pytania, natomiast w konkretnych podstronach dotyczących instalacji fotowoltaicznych dla domu, firmy czy gospodarstwa, znajdziesz korzyści wynikające z inwestycji w fotowoltaikę!

Nasza działalność skupia się głównie na terenie zachodniej części Polski. Większość instalacji wykonujemy w Wielkopolsce oraz w obrębie takich miast jak Poznań, Konin, Bydgoszcz, Zielona Góra, Kalisz, Piła czy Leszno. Starając się wychodzić naprzeciw waszym oczekiwaniom, staramy się poszerzać zakres geograficzny. Jeśli jesteś z okolic Torunia, Bydgoszczy, Ostrowa Wielkopolskiego czy Stargardu – napisz do nas! Chętnie zamontujemy fotowoltaikę również u Ciebie. Działamy też na terenie województwa zachodniopomorskiego, lubuskiego czy dolnośląskiego.  Zastanawiasz się, czy Fotowoltaika się opłaca? Nie wiesz, ile może kosztować fotowoltaika? Zadzwoń lub napisz do nas – przygotujemy dla Ciebie indywidualną wycenę, żebyś mógł się cieszyć fotowoltaiką we własnym domu! Nasze biura znajdziesz w Galerii Arkada w Poznaniu – ul. Obornicka 229!
</div>




<?php get_footer();