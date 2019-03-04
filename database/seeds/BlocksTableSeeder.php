<?php

use App\Models\Block;
use Illuminate\Database\Seeder;

class BlocksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Block::updateOrCreate([
            'order'   => '1',
            'name'    => 'geosmartone',
            'content' =>
                '<section id="geosmartone" class="dataspy-section">
                    <div class="container wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <div class="row section-header">
                            <div class="col-md-4">
                                <h3 style="text-align: center;"><span class="geosmart">GeoSmart</span>One®</h3>
                                <img style="width: 50%;margin:0 auto;display: block;" src="/frontend/img/geo/Geolocation.jpg" alt="Geolocation" class="img-responsive">
                            </div>
                            <div class="col-md-8" style=" text-align: justify;">
                                <p>
                                    Basé sur la technologie LoRaWAN<sup>TM</sup>, le système de géolocalisation <span class="geosmart">GeoSmart</span>One®  est composé de la meilleure de la technologie pour proposer un système de tracking au meilleur tarif.                     
                                </p>
                                <p>
                                    En effet, même si le&nbsp;<span class="geosmart">GeoSmart</span>One® est un concentré de technologie - GPS précis avec un REV inférieur à 10m, transmetteur LoRa Semtech, accéléromètre XX, nos équipes l’ont développé en recherchant à intégrer une autre variable importante, son prix! Les boitiers sont également customisables à volonté pour donner une identité à votre produit. Contactez-nous pour plus d’informations.
                                </p>
                                <p>
                                    Nos équipes proposent également des solutions logicielles dédiées permettant également de développer le suivi de vos matériels, les taux de fonctionnements ou encore de lutter contre les vols. A chaque utilisation, une smart-solution vous est proposée:                      
                                </p>
                            </div>
                            <div class="row" style="padding-left: 140px;">
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img style="width: 90%;margin:0 auto;display: block;" src="/frontend/img/geo/01.png" alt="Geolocation" class="img-responsive">
                                        </div>
                                        <div class="col-md-8">
                                            <p class="geosmart" style="margin-top: 20px;">Géolocalisation</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img style="width: 90%;margin:0 auto;display: block;" src="/frontend/img/geo/03.png" alt="Geolocation" class="img-responsive">
                                        </div>
                                        <div class="col-md-8">
                                            <p class="geosmart" style="margin-top: 10px;">Mesure temps réelle de l’activité</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img style="width: 90%;margin:0 auto;display: block;" src="/frontend/img/geo/02.png" alt="Geolocation" class="img-responsive">
                                        </div>
                                        <div class="col-md-8">
                                            <p class="geosmart" style="margin-top: 10px;">Sécurité, alarme, geofencing</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>',

        ]);

        Block::updateOrCreate([
            'order'   => '2',
            'name' => 'innovation',
            'content' =>
                '<section id="innovation" class="dataspy-section" style="background: url(' . url('/') . '/frontend/img/geo/IOT_1.jpg) top center fixed;">
                    <div class="innovation-container">
                        <h1>le souffle de l’innovation</h1>
                        <h2>
                            un nouveau standard dans les services de communications,<br>
                            M2M et le traitement des données.
                        </h2>
                    </div>
                </section>',
        ]);

        Block::updateOrCreate([
            'order'   => '3',
            'name' => 'fonctionnalite',
            'content' =>
                '<section id="fonctionnalite" class="dataspy-section">
                    <div class="container wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <div class="section-header">
                            <h3 class="section-title">FONCTIONNALITES</h3>
                            <p class="section-description">
                                A DFM, nos IOTs sont développés pour répondre à vos besoins en privilégiant votre business plan,  pas le notre : 
                                <br> pas d’obligations, pas d’abonnement, pas de coûts cachés.
                            </p>
                        </div>
                        <div class="row fonctionnalite-desc">
                            <div class="col-lg-3 col-6 text-center wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                <img src="/frontend/img/geo/Taille.jpg" alt="Taille">
                                <p class="fonctionnalite-desc-title">Taille</p>
                                <p class="fonctionnalite-desc-text">Le GeoSmart1 a une taille réduite lui permettant de se loger partout.</p>
                            </div>
                        
                            <div class="col-lg-3 col-6 text-center wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                <img src="/frontend/img/geo/Reseau.jpg" alt="Reseau">
                                <p class="fonctionnalite-desc-title">Réseau</p>
                                <p class="fonctionnalite-desc-text">Connecté au réseau Lora, réseau dédié aux objets connectés.</p>
                            </div>
                        
                            <div class="col-lg-3 col-6 text-center wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                <img src="/frontend/img/geo/Etancheite.jpg" alt="Etancheite">
                                <p class="fonctionnalite-desc-title">Etanchéité</p>
                                <p class="fonctionnalite-desc-text">Le système IOT est classé IP65 le protégeant des agressions extérieures et le rendant fonctionnel même dans des environnements hostiles.</p>
                            </div>
                        
                            <div class="col-lg-3 col-6 text-center wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                <img src="/frontend/img/geo/Autonomie.jpg" alt="Autonomie">
                                <p class="fonctionnalite-desc-title">Autonomie</p>
                                <p class="fonctionnalite-desc-text">Sans aucun câblage, le système 100% autonome offre une  grande autonomie (3 ans et plus en fonction de l’utilisation).</p>
                            </div>
                        
                        </div>
                    </div>
                </section>',
        ]);

        Block::updateOrCreate([
            'order'   => '4',
            'name' => 'banner-img',
            'content' =>
                '<section id="banner-img">
                    <div class="banner-img-container">
                        <div class="section-header">
                            <br>
                            <h3 class="section-title">LOCALISER, PROTEGER, TRACKER CE QUI VOUS EST CHER <!-- </br>CHER -->…</h3>
                            <br>
                            <div class="geosmart-blockquote">
                                <blockquote>
                                    <p>
                                        <i class="fa fa-quote-left fa-1x" style="color: #ff9002;" aria-hidden="true"></i>
                                        La seule fin pour laquelle les hommes sont autorisés, individuellement ou
                                        collectivement, à intervenir dans la liberté d\'action d\'un de leurs semblables, est la protection de soi-même<i class="fa fa-quote-right fa-1x" style="color: #ff9002;" aria-hidden="true"></i>
                                    </p>
                                    <footer>John Stuart Mill</footer>
                                </blockquote>
                            </div>
                        </div>
                        <div class="col-lg-12 banner-img-list-img">
                            <img class="item-img" src="/frontend/img/geo/GEOSMARTONE_1.jpg" alt="GEOSMARTONE_1">
                            <img class="item-img" src="/frontend/img/geo/GEOSMARTONE_2.jpg" alt="GEOSMARTONE_2">
                            <img class="item-img" src="/frontend/img/geo/GEOSMARTONE_3.jpg" alt="GEOSMARTONE_3">
                            <img class="item-img" src="/frontend/img/geo/GEOSMARTONE_4.jpg" alt="GEOSMARTONE_4">
                            <img class="item-img" src="/frontend/img/geo/GEOSMARTONE_5.jpg" alt="GEOSMARTONE_5">
                        </div>
                        <h2>
                            Concepteur et fabricant de nos produits hardwares sans aucun intermédiaire, il est aisé pour nous de customiser les produits pour qu’ils correspondent exactement à vos besoins. Contactez-nous pour toute information.
                        </h2>
                    </div>
                </section>',
        ]);

        Block::updateOrCreate([
            'order'   => '5',
            'name' => 'notre-vision',
            'content' =>
                '<section id="notre-vision" class="dataspy-section">
                    <div class="container wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <div class="section-header">
                            <h3 class="section-title">NOTRE VISION</h3>
                            <br>
                            <div class="geosmart-blockquote">
                                <blockquote>
                                    <p>
                                        <i class="fa fa-quote-left fa-1x" style="color: #ff9002;" aria-hidden="true"></i>    
                                        La vraie innovation de rupture change la façon dont on rend le produit ou le<br>
                                        service plus accessible et plus abordable. <i class="fa fa-quote-right fa-1x" style="color: #ff9002;" aria-hidden="true"></i>
                                    </p>
                                    <footer>Damien Tampling</footer>
                                </blockquote>
                            </div>
                        </div>
                        <div class="row notre-vision-desc">
                            <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-0 wow fadeInUp" style="text-align: justify; visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;" data-wow-delay="0.2s">
                                <div class="row">
                                    <div class="col-lg-3"> 
                                         <img class="notre-vision-img" src="/frontend/img/geo/Digitalisation.png" alt="Digitalisation">
                                    </div>
                                    <div class="col-lg-9"> 
                                        <h4 class="title">Digitalisation</h4>
                                        <p class="description">Au-delà même de la géolocalisation, le monde connecté, à travers la multitude de sources, doit être pluriel. Le besoin d’adaptation est permanent. Nos solutions sont open et facilement interfaçables. Que vous optiez pour nos solutions hardware ou software, vous gardez le contrôle et c’est cela l’essentiel.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-0 wow fadeInUp" style="text-align: justify; visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;" data-wow-delay="0.4s">
                                <div class="row">
                                    <div class="col-lg-3"> 
                                         <img class="notre-vision-img" src="/frontend/img/geo/mesurey.png" alt="mesurey">
                                    </div>
                                    <div class="col-lg-9"> 
                                        <h4 class="title">Le «&nbsp;sur-mesure&nbsp;»</h4>
                                        <p class="description">Nos solutions DFM sont taillées sur mesure : vous souhaitez gagner en productivité, optimiser vos sites logistiques, mesurer le taux de service de vos outils/produits, augmenter la satisfaction client ? Le tout à la fois ? Nous assurons un développement dédié des applications, site et programmes à des tarifs attractifs.</p>
                                    </div>    
                                </div>
                            </div>
                            <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-0 wow fadeInUp" style="text-align: justify; visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;" data-wow-delay="0.6s">
                                <div class="row">
                                    <div class="col-lg-3"> 
                                         <img class="notre-vision-img" src="/frontend/img/geo/Securisation.png" alt="Securisation">
                                    </div>
                                    <div class="col-lg-9 no-padding">
                                        <h4 class="title">Sécurisation</h4>
                                        <p class="description">Dans un monde ou le danger est partout, recourir aux IOTs peut engendrer également de nouvelles vulnérabilités. Protégez vos données avec la technologie Blockchain.  Accéder à vos données IoT sans avoir besoin d\'un contrôle et d\'une gestion centralisés en toute sécurité.</p>
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </div>
                </section>',
        ]);

        Block::updateOrCreate([
            'order'   => '6',
            'name' => 'information',
            'content' =>
                '<section id="information">
                    <div class="container wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                <div class="box">
                                    <div class="icon"><i class="fa fa-map-marker"></i></div>
                                    <h4 class="title">Nous rencontrer</h4>
                                    <p class="description">
                                        230 rue Saint-Jacques <br>
                                        75005 Paris
                                    </p>
                                    <p class="description">
                                        21 rue de Brin <br>
                                        86130 Jaunay-Marigny
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                <div class="box">
                                    <div class="icon"><i class="fa fa-comments-o"></i></div>
                                    <h4 class="title">Nous appeler</h4>
                                    <p class="description">
                                        Téléphones : (33) 610150607 (33) 549458135
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                                <div class="box">
                                    <div class="icon"><i class="fa fa-envelope-open-o"></i></div>
                                    <h4 class="title">Nous contacter</h4>
                                    <p class="description">
                                        <a href="mailto:info@dfm-europe.com">info@dfm-europe.com</a>
                                    </p>
                                    <p class="description">
                                        <a class="btn-link" href="http://www.dfm-europe.com">www.dfm-europe.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>',
        ]);
    }
}
