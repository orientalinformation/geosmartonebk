@extends('frontend.layouts.master')
@section('title', 'DFM GEOSMARTONE')

@section('content')
    <div class="embed-responsive embed-responsive-16by9">
        <div id="background">
            <video id="vid" width="80%" height="100%" autoplay muted loop >
                <source src="{{ asset('frontend/video/Banner.webm') }} " type="video/webm">
                <source src="{{ asset('frontend/video/banner.m4v') }} " type="video/mv4">
            </video>
        </div>
    </div>

    <div class="sectionBGgradient">
        <div class="sectionBGcontent">
            <h3 style="font-size: 30px;">DECOUVRER LE NOUVEAU GEOSMARTONE ®</h3>
            <h5 style="margin-top: -15px;">DFM, créateur d’IoT</h5>
            <p class="group-btn">
                <a target="_blank" class="btn-inline" href="datasheet" target="">Datasheet</a>
                <a target="_blank" style="background: #fe8f01;color:#fff;padding: 9px 23px;" class="btn-inline" href="brochure" target="">Brochure DFM -></a>
            </p>

            <p class="arrow-down">
                <a href="#main" class="back-to-down" id="bnSrlDown">
                    <img width="45" height="45" src="{{ asset('frontend/img/geo/arrow_down.png') }}" alt="arrow-down">
                </a>
            </p>
        </div>
    </div>
    <!-- #hero -->

    <main id="main">
        @foreach($blocks as $block)
            {!! $block->getTranslatedAttribute('content') !!}
        @endforeach
    </main>

    <a href="#" class="back-to-top">
        <img width="45" height="45" src="{{ asset('frontend/img/geo/arrow_up.png') }}" alt="arrow_up">
    </a>

    <!-- Modal -->
    <div class="modal fade" id="politique" tabindex="-1" role="dialog" aria-labelledby="politique" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" style="display: inline-flex;">
                        <img width="130" height="32" src="{{ asset('frontend/img/geo/Logo_DFM.png') }}" alt="Logo_DFM">
                        <p>POLITIQUE DE CONFIDENTIALITE</p>
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p> 1. Collecte de l’information Nous recueillons uniquement votre courriel'|_}}.</p>

                    <p> 2. Utilisation des informations Vous contacter par e-mail pour vous tenir informé des nouveautés DFM'|_}}.</p>

                    <p> 3. Confidentialité du commerce en ligne Nous sommes les seuls propriétaires des informations recueillies sur ce site.
                        Vos informations personnelles ne seront pas vendues, échangées, transférées, ou données à une autre société pour n’importe quel raison, sans votre consentement</p>

                    <p> 4. Divulgation à des tiers Nous ne vendons, n’échangeons et ne transférons pas vos informations personnelles identifiables à des tiers.</p>

                    <p> 5. Se désabonner Si à n’importe quel moment vous souhaitez vous désinscrire et ne plus recevoir d’e-mails, des instructions de désabonnement détaillées sont incluses en bas de chaque e-mail.</p>

                    <p> 6. Consentement En utilisant notre site, vous consentez à notre politique de confidentialité.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="mess-email" tabindex="-1" role="dialog" aria-labelledby="mess-email" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" style="display: inline-flex;">
                        <img width="130" height="32" src="{{ asset('frontend/img/geo/Logo_DFM_2.png') }} " alt="Logo_DFM ">
                        <p>SUIVEZ-NOUS!</p>
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>DFM vous remercie de votre intérêt dans nos produits et services.</p>

                    <p>En nous rejoignant, vous ne manquerez plus rien de nos nouveautés et nous avons le plaisir de vous invité à nous rejoindre au salon IoT-World, Paris Expo - Porte de Versailles – France.</p>

                    <p>A très bientôt</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('vid').play();
    </script>
@endsection
