<?php /* Template Name: Dla firmy */ ?>
<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();?>

<div class="jumbotron jumbotron-fluid hero-custom firma">
    <div class="hero-text">
        <span>Obniż koszty z fotowoltaiką</span>
    </div>
</div>

<div class="container-fluid py-5">
    <div class="container">
        <div class="row my-5">
            <div class="col-lg-8 m-auto text-center">
                <p class="h2">Mniejsze koszty prowadzenia biznesu</p>
                <p> Instalacja paneli fotowoltaicznych w firmie pozwala obniżyć jeden z większych kosztów prowadzenia
                    biznesu – koszt energii elektrycznej. Spraw by Twoja firma sama produkowała dla siebie prąd! Wszyscy
                    wiemy że mniejsze koszty to większy zysk dla Ciebie! Zacznij oszczędzać z fotowoltaiką!</p>
                <a href="<?= get_permalink(2194)?>" class="mx-auto mt-5"><button type="button"
                        class="btn btn-primary"><b>Skontakuj się z nami</b></button></a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid"
    style="background: url(<?php echo get_template_directory_uri(); ?>/images/firma-plusy.jpg) center center; background-size: cover">
    <div class="container py-2 firma-finanse">
    
        <div class="row">
            
            <div class="col-lg-6">
                <div class="firma-tile p-4 my-5">
                    <div class="analiza"></div>
                    <p class="h4">
                        Analiza Twoich potrzeb energetycznych
                    </p>
                    <p>
                        Pierwsze co robimy zanim zaczniemy rozmawiać na temat instalacji dla Ciebie to sprawdzenie i
                        analiza Twojego zapotrzebowania energetycznego. Możemy również przeprowadzić kompleksowy audyt
                        energetyczny Twojej firmy. Dopasujemy ilość i moc paneli do Twoich potrzeb. Następnie
                        przygotowujemy tylko dla Ciebie projekt instalacji wraz z wybranymi materiałami z użyciem
                        naszego kalkulatora instalacji fotowoltaicznej!
                    </p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="firma-tile p-4 my-5">
                    <div class="zwrot"></div>
                    <p class="h4">
                        Szybki okres zwrotu inwestycji
                    </p>
                    <p>
                        Montaż paneli słonecznych to nie wydatek ale inwestycja, która w dodatku bardzo szybko się
                        zwróci. Założenie paneli słonecznych w Twojej firmie sprawi że Twoje wydatki na energię
                        elektryczną mogą spaść nawet o 90%! Sprawdź swoje możliwości i zacznij oszczędzać z
                        fotowoltaiką!
                    </p>
                </div>
            </div>
            
        </div>
        
            
        </div>
    </div>
</div>

<div class="container my-5 pt-5">
    <div class="row">
        <div class="col-lg-6"><img src="<?= get_template_directory_uri()?>/images/firma-laptop.jpg" alt=""></div>
        <div class="col-lg-6 my-auto"><p class="h2">Oferta finansowania</p><p>Dla firm które zdecydują się na instalację paneli fotowoltaicznych z Solariką mamy przygotowane atrakcyjne możliwości finansowania inwestycji. Pomagamy w uzyskaniu kredytu oraz pośredniczymy w całym procesie, oferujemy zakup i montaż instalacji fotowoltaicznej w systemie ratalnym oraz mamy przygotowaną atrakcyjną ofertę leasingu!
Skontaktuj się z naszym konsultantem i dowiedz się jakie możliwości finansowania na Ciebie czekają!
</p>
<a href="<?= get_permalink(2194)?>" class="mx-auto mt-5"><button type="button"
                    class="btn btn-primary"><b>Skontakuj się z nami</b></button></a>
                </div>
    </div>
</div>



<?php get_footer();