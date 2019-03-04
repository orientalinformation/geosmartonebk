<?php

use App\Models\Block;
use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Translation;

class TranslationsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $this->dataTypesTranslations();
        $this->categoriesTranslations();
        $this->pagesTranslations();
        $this->menusTranslations();
        $this->userMenusTranslations();
        $this->blocksTranslations();
    }

    /**
     * Auto generate Categories Translations.
     *
     * @return void
     */
    private function categoriesTranslations()
    {
        // Adding translations for 'categories'
        //
        $cat = Category::where('slug', 'category-1')->firstOrFail();
        if ($cat->exists) {
            $this->trans('pt', $this->arr(['categories', 'slug'], $cat->id), 'categoria-1');
            $this->trans('pt', $this->arr(['categories', 'name'], $cat->id), 'Categoria 1');
        }
        $cat = Category::where('slug', 'category-2')->firstOrFail();
        if ($cat->exists) {
            $this->trans('pt', $this->arr(['categories', 'slug'], $cat->id), 'categoria-2');
            $this->trans('pt', $this->arr(['categories', 'name'], $cat->id), 'Categoria 2');
        }
    }

    /**
     * Auto generate DataTypes Translations.
     *
     * @return void
     */
    private function dataTypesTranslations()
    {
        // Adding translations for 'display_name_singular'
        //
        $_fld = 'display_name_singular';
        $_tpl = ['data_types', $_fld];
        $dtp = DataType::where($_fld, 'Post')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('pt', $this->arr($_tpl, $dtp->id), 'Post');
        }
        $dtp = DataType::where($_fld, 'Page')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('pt', $this->arr($_tpl, $dtp->id), 'Página');
        }
        $dtp = DataType::where($_fld, 'User')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('pt', $this->arr($_tpl, $dtp->id), 'Utilizador');
        }
        $dtp = DataType::where($_fld, 'Category')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('pt', $this->arr($_tpl, $dtp->id), 'Categoria');
        }
        $dtp = DataType::where($_fld, 'Menu')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('pt', $this->arr($_tpl, $dtp->id), 'Menu');
        }
        $dtp = DataType::where($_fld, 'Role')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('pt', $this->arr($_tpl, $dtp->id), 'Função');
        }

        // Adding translations for 'display_name_plural'
        //
        $_fld = 'display_name_plural';
        $_tpl = ['data_types', $_fld];
        $dtp = DataType::where($_fld, 'Posts')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('pt', $this->arr($_tpl, $dtp->id), 'Posts');
        }
        $dtp = DataType::where($_fld, 'Pages')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('pt', $this->arr($_tpl, $dtp->id), 'Páginas');
        }
        $dtp = DataType::where($_fld, 'Users')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('pt', $this->arr($_tpl, $dtp->id), 'Utilizadores');
        }
        $dtp = DataType::where($_fld, 'Categories')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('pt', $this->arr($_tpl, $dtp->id), 'Categorias');
        }
        $dtp = DataType::where($_fld, 'Menus')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('pt', $this->arr($_tpl, $dtp->id), 'Menus');
        }
        $dtp = DataType::where($_fld, 'Roles')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('pt', $this->arr($_tpl, $dtp->id), 'Funções');
        }
    }

    /**
     * Auto generate Pages Translations.
     *
     * @return void
     */
    private function pagesTranslations()
    {
        $page = Page::where('slug', 'hello-world')->firstOrFail();
        if ($page->exists) {
            $_arr = $this->arr(['pages', 'title'], $page->id);
            $this->trans('pt', $_arr, 'Olá Mundo');
            /**
             * For configuring additional languages use it e.g.
             *
             * ```
             *   $this->trans('es', $_arr, 'hola-mundo');
             *   $this->trans('de', $_arr, 'hallo-welt');
             * ```
             */
            $_arr = $this->arr(['pages', 'slug'], $page->id);
            $this->trans('pt', $_arr, 'ola-mundo');

            $_arr = $this->arr(['pages', 'body'], $page->id);
            $this->trans('pt', $_arr, '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>'
                                        ."\r\n".'<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>');
        }
    }

    /**
     * Auto generate Menus Translations.
     *
     * @return void
     */
    private function menusTranslations()
    {
        $_tpl = ['menu_items', 'title'];
        $_item = $this->findMenuItem('Dashboard');
        if ($_item->exists) {
            $this->trans('pt', $this->arr($_tpl, $_item->id), 'Painel de Controle');
        }

        $_item = $this->findMenuItem('Media');
        if ($_item->exists) {
            $this->trans('pt', $this->arr($_tpl, $_item->id), 'Media');
        }

        $_item = $this->findMenuItem('Posts');
        if ($_item->exists) {
            $this->trans('pt', $this->arr($_tpl, $_item->id), 'Publicações');
        }

        $_item = $this->findMenuItem('Users');
        if ($_item->exists) {
            $this->trans('pt', $this->arr($_tpl, $_item->id), 'Utilizadores');
        }

        $_item = $this->findMenuItem('Categories');
        if ($_item->exists) {
            $this->trans('pt', $this->arr($_tpl, $_item->id), 'Categorias');
        }

        $_item = $this->findMenuItem('Pages');
        if ($_item->exists) {
            $this->trans('pt', $this->arr($_tpl, $_item->id), 'Páginas');
        }

        $_item = $this->findMenuItem('Roles');
        if ($_item->exists) {
            $this->trans('pt', $this->arr($_tpl, $_item->id), 'Funções');
        }

        $_item = $this->findMenuItem('Tools');
        if ($_item->exists) {
            $this->trans('pt', $this->arr($_tpl, $_item->id), 'Ferramentas');
        }

        $_item = $this->findMenuItem('Menu Builder');
        if ($_item->exists) {
            $this->trans('pt', $this->arr($_tpl, $_item->id), 'Menus');
        }

        $_item = $this->findMenuItem('Database');
        if ($_item->exists) {
            $this->trans('pt', $this->arr($_tpl, $_item->id), 'Base de dados');
        }

        $_item = $this->findMenuItem('Settings');
        if ($_item->exists) {
            $this->trans('pt', $this->arr($_tpl, $_item->id), 'Configurações');
        }
    }

    private function findMenuItem($title)
    {
        return MenuItem::where('title', $title)->firstOrFail();
    }

    private function arr($par, $id)
    {
        return [
            'table_name'  => $par[0],
            'column_name' => $par[1],
            'foreign_key' => $id,
        ];
    }

    private function trans($lang, $keys, $value)
    {
        $_t = Translation::firstOrNew(array_merge($keys, [
            'locale' => $lang,
        ]));

        if (!$_t->exists) {
            $_t->fill(array_merge(
                $keys,
                ['value' => $value]
            ))->save();
        }
    }

    /**
     * Auto generate User Menus Translations.
     *
     * @return void
     */
    private function userMenusTranslations()
    {
        $_tpl = ['menu_items', 'title'];
        $_item = $this->findMenuItem('GeoSmartOne');
        if ($_item->exists) {
            $this->trans('en', $this->arr($_tpl, $_item->id), 'GeoSmartOne');
        }

        $_item = $this->findMenuItem('A propos de');
        if ($_item->exists) {
            $this->trans('en', $this->arr($_tpl, $_item->id), 'About us');
        }

        $_item = $this->findMenuItem('Fonctionnalites');
        if ($_item->exists) {
            $this->trans('en', $this->arr($_tpl, $_item->id), 'Functionality');
        }

        $_item = $this->findMenuItem('Notre vision');
        if ($_item->exists) {
            $this->trans('en', $this->arr($_tpl, $_item->id), 'Our vision');
        }

        $_item = $this->findMenuItem('Contact');
        if ($_item->exists) {
            $this->trans('en', $this->arr($_tpl, $_item->id), 'Contact');
        }
    }

    /**
     * Auto generate User Menus Translations.
     *
     * @return void
     */
    private function blocksTranslations()
    {
        $_tpl = ['blocks', 'content'];
        $_item = Block::whereName('geosmartone')->firstOrFail();
        if ($_item->exists) {
            $this->trans('en', $this->arr($_tpl, $_item->id),
                '<section id="geosmartone" class="dataspy-section">' .
                '    <div class="container wow fadeIn" style="visibility: visible; animation-name: fadeIn;">' .
                '        <div class="row section-header">' .
                '            <div class="col-md-4">' .
                '                <h3 style="text-align: center;"><span class="geosmart">GeoSmart</span>One®</h3>' .
                '                <img style="width: 50%;margin:0 auto;display: block;" src="/frontend/img/geo/Geolocation.jpg" alt="Geolocation" class="img-responsive">' .
                '            </div>' .
                '            <div class="col-md-8" style=" text-align: justify;">' .
                '                <p>' .
                '                    Based on the LoRaWANTM technology, the <span class="geosmart">GeoSmart</span>One® geolocation system is composed of the best technology to offer a tracking system at the best price.' .
                '                </p>' .
                '                <p>' .
                '                    Indeed, the <span class="geosmart">GeoSmart</span>One® is a concentrate of GPS technology and a REV less than 10m, which is transmitted LoRa Semtech and possesses accelerometer XX. But the most important thing of this tracking device: his attractive price! In addition, the system is customizable, this mean it can be provided as a&nbsp;details in accordance with the&nbsp;wishes of the client.' .
                '                </p>' .
                '                <p>' .
                '                    Our teams also provide dedicated software solutions which is developed for monitor of your equipment, operating rates or theft prevention. In every step of use, a smart-solution is proposed to you:' .
                '                </p>' .
                '            </div>' .
                '            <div class="row" style="padding-left: 140px;">' .
                '                <div class="col-md-4">' .
                '                    <div class="row">' .
                '                        <div class="col-md-4">' .
                '                            <img style="width: 90%;margin:0 auto;display: block;" src="/frontend/img/geo/01.png" alt="Geolocation" class="img-responsive">' .
                '                        </div>' .
                '                        <div class="col-md-8">' .
                '                            <p class="geosmart" style="margin-top: 20px;">Géolocalisation</p>' .
                '                        </div>' .
                '                    </div>' .
                '                </div>' .
                '                <div class="col-md-4">' .
                '                    <div class="row">' .
                '                        <div class="col-md-4">' .
                '                            <img style="width: 90%;margin:0 auto;display: block;" src="/frontend/img/geo/03.png" alt="Geolocation" class="img-responsive">' .
                '                        </div>' .
                '                        <div class="col-md-8">' .
                '                            <p class="geosmart" style="margin-top: 10px;">Mesure temps réelle de l’activité</p>' .
                '                        </div>' .
                '                    </div>' .
                '                </div>' .
                '                <div class="col-md-4">' .
                '                    <div class="row">' .
                '                        <div class="col-md-4">' .
                '                            <img style="width: 90%;margin:0 auto;display: block;" src="/frontend/img/geo/02.png" alt="Geolocation" class="img-responsive">' .
                '                        </div>' .
                '                        <div class="col-md-8">' .
                '                            <p class="geosmart" style="margin-top: 10px;">Sécurité, alarme, geofencing</p>' .
                '                        </div>' .
                '                    </div>' .
                '                </div>' .
                '            </div>' .
                '        </div>' .
                '    </div>' .
                '</section>'
            );
        }

        $_item = Block::whereName('innovation')->firstOrFail();
        if ($_item->exists) {
            $this->trans('en', $this->arr($_tpl, $_item->id), '
                <section style="background: url('. url('/') .'/frontend/img/geo/IOT_1.jpg) top center fixed;" id="innovation" class="dataspy-section">
                    <div class="innovation-container">
                        <h1>A breath of innovation</h1>
                        <h2>
                            a new standard in communications services,<br>
                            M2M and data processing.
                        </h2>
                    </div>
                </section>'
            );
        }

        $_item =  Block::whereName('fonctionnalite')->firstOrFail();
        if ($_item->exists) {
            $this->trans('en', $this->arr($_tpl, $_item->id), '
                <section id="fonctionnalite" class="dataspy-section">
                    <div class="container wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <div class="section-header">
                            <h3 class="section-title">Functionality</h3>
                            <p class="section-description">
                                At DFM, our IOTs are developed to meet your demands by focusing on your business plan, not ours : 
                                <br> no obligations, no subscription, no shadow costs.
                            </p>
                        </div>
                        <div class="row fonctionnalite-desc">
                            <div class="col-lg-3 col-6 text-center wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                <img src="/frontend/img/geo/Taille.jpg" alt="Taille">
                                <p class="fonctionnalite-desc-title">Size</p>
                                <p class="fonctionnalite-desc-text">The GeoSmart1 is small enough to be installed anywhere.</p>
                            </div>
                
                            <div class="col-lg-3 col-6 text-center wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                <img src="/frontend/img/geo/Reseau.jpg" alt="Reseau">
                                <p class="fonctionnalite-desc-title">Network</p>
                                <p class="fonctionnalite-desc-text">Connected to the Lora network, a network dedicated to connected objects.</p>
                            </div>
                
                            <div class="col-lg-3 col-6 text-center wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                <img src="/frontend/img/geo/Etancheite.jpg" alt="Etancheite">
                                <p class="fonctionnalite-desc-title">Sealing</p>
                                <p class="fonctionnalite-desc-text">The IOT system is rated at IP65 which protect it against external aggressions and make it functional even in hostile environments.</p>
                            </div>
                
                            <div class="col-lg-3 col-6 text-center wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                <img src="/frontend/img/geo/Autonomie.jpg" alt="Autonomie">
                                <p class="fonctionnalite-desc-title">Autonomy</p>
                                <p class="fonctionnalite-desc-text">Without any wiring, the 100% autonomous system offers a great autonomy (3 years and more depending on the level of usage).</p>
                            </div>
                        </div>
                    </div>
                </section>'
            );
        }

        $_item = Block::whereName('banner-img')->firstOrFail();
        if ($_item->exists) {
            $this->trans('en', $this->arr($_tpl, $_item->id), '
                <section id="banner-img">
                    <div class="banner-img-container">
                        <div class="section-header">
                            <br>
                            <h3 class="section-title">LOCALISER, PROTEGER, TRACKER CE QUI VOUS EST CHER …</h3>
                            <br>
                            <div class="geosmart-blockquote">
                                <blockquote>
                                    <p>
                                        <i class="fa fa-quote-left fa-1x" style="color: #ff9002;" aria-hidden="true"></i>    
                                        The only end for which men are allowed, individually or collectively, to interfere in the freedom of action of one of their fellow men, is the sefl-protection<i class="fa fa-quote-right fa-1x" style="color: #ff9002;" aria-hidden="true"></i>
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
                            Designer and manufacturer our hardware products without any intermediary, we can customize the products   to exactly match your needs. Contact us for more informations.
                        </h2>
                    </div>
                </section>'
            );
        }

        $_item = Block::whereName('notre-vision')->firstOrFail();
        if ($_item->exists) {
            $this->trans('en', $this->arr($_tpl, $_item->id), '
                <section id="notre-vision" class="dataspy-section">
                    <div class="container wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <div class="section-header">
                            <h3 class="section-title">Our vision</h3>
                            <br>
                            <div class="geosmart-blockquote">
                                <blockquote>
                                    <p>
                                        <i class="fa fa-quote-left fa-1x" style="color: #ff9002;" aria-hidden="true"></i>    
                                        The disruptive innovation make ours products or services more accessible and more affordable<br>
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
                                        <h4 class="title">Digitization</h4>
                                        <p class="description">Even out of geolocation, the device can be connected from a variety of sources. Equipment is highly adaptive. The characteristics of the product are "open" and diverse use. Whether you choose our hardware or software products, you can still control them and that is essential.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-0 wow fadeInUp" style="text-align: justify; visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;" data-wow-delay="0.4s">
                                <div class="row">
                                    <div class="col-lg-3"> 
                                         <img class="notre-vision-img" src="/frontend/img/geo/mesurey.png" alt="mesurey">
                                    </div>
                                    <div class="col-lg-9"> 
                                        <h4 class="title">Custom-made produit</h4>
                                        <p class="description">Our DFM solutions are tailor-made: you want to increase productivity, optimize your logistics sites, measure the service rate of your tools / products  increase customer satisfaction? All at once? We ensure a development dedicated to every application, site and program, all at the most&nbsp;attractive price rates.</p>
                                    </div>    
                                </div>
                            </div>
                            <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-0 wow fadeInUp" style="text-align: justify; visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;" data-wow-delay="0.6s">
                                <div class="row">
                                    <div class="col-lg-3"> 
                                         <img class="notre-vision-img" src="/frontend/img/geo/Securisation.png" alt="Securisation">
                                    </div>
                                    <div class="col-lg-9 no-padding">
                                        <h4 class="title">Security</h4>
                                        <p class="description">In a world where danger is everywhere using IOTs can also create new vulnerabilities. Protect your data with Blockchain technology Access your IoT data without the need for central control and management.</p>
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </div>
                </section>'
            );
        }

        $_item = Block::whereName('information')->firstOrFail();
        if ($_item->exists) {
            $this->trans('en', $this->arr($_tpl, $_item->id), '
                <section id="information">
                    <div class="container wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                <div class="box">
                                    <div class="icon"><i class="fa fa-map-marker"></i></div>
                                    <h4 class="title">MEET</h4>
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
                                    <h4 class="title">CALL US</h4>
                                    <p class="description">
                                        Phone : (33) 610150607 (33) 549458135
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                                <div class="box">
                                    <div class="icon"><i class="fa fa-envelope-open-o"></i></div>
                                    <h4 class="title">CONTACT US</h4>
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
                </section>'
            );
        }
    }
}
