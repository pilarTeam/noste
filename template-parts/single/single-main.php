<?php 
$projektinvalmistelu = [
    'tilaajan' => [
        'title' => 'Tilaajan yhteydenotto',
        'status' => 0,
    ],
    'lahtotietojen' => [
        'title' => 'Lähtötietojen läpikäynti, alustavan kustannusarvion ja aikataulun teko',
        'status' => 0,
    ],
    'kohdekaynti' => [
        'title' => 'Kohdekäynti',
        'status' => 0,
    ],
    'vuokrasopimuksen' => [
        'title' => 'Vuokrasopimuksen apudokumentit',
        'status' => 0,
    ],
    'kustannusarvion' => [
        'title' => 'Kustannusarvion ja aikataulun päivitys',
        'status' => 0,
    ],
    'vuokrasopimuksen_allekirjoitus' => [
        'title' => 'Vuokrasopimuksen allekirjoitus ja vuokralaismuutoksen aloituspäätös',
        'status' => 0,
    ],
];


$rakentamisen_valmistelu = [
    'noste_tarjouksen' => [
        'title' => 'Noste.ion tarjouksen toimitus',
        'status' => 0,
    ],
    'projektiraportointi' => [
        'title' => 'Projektiraportointi ja kustannusseuranta',
        'status' => 0,
    ],
    'suunnittelu' => [
        'title' => 'Suunnittelu ja selvitykset',
        'status' => 0,
    ],
    'kaupalliset' => [
        'title' => 'Kaupalliset asiakirjat ja kilpailutusmateriaalin teko',
        'status' => 0,
    ],
    'tarjouspyynnon' => [
        'title' => 'Tarjouspyynnön lähetys ja urakkakilpailutus',
        'status' => 0,
    ],
    'tarjouksen' => [
        'title' => 'Tarjouksen hyväksyttäminen',
        'status' => 0,
    ],
];



$rakentamisen_kaynnistaminen = [
    'urakan' => [
        'title' => 'Urakan kirjallinen tilaus',
        'status' => 0,
    ],
    'urakkasopimuksen' => [
        'title' => 'Urakkasopimuksen allekirjoitus',
        'status' => 0,
    ],
    'tyomaan' => [
        'title' => 'Työmaan käynnistymisen tehtävät',
        'status' => 0,
    ],
    'tyomaan_aloituskokous' => [
        'title' => 'Työmaan aloituskokous',
        'status' => 0,
    ],
];

$rakentaminen = [
    'yleinen' => [
        'title' => 'Yleinen projektinjohto rakentamisen aikana',
        'status' => 0,
    ],
    'tyomaavalvonta' => [
        'title' => 'Työmaavalvonta',
        'status' => 0,
    ],
    'tyomaakokoukset' => [
        'title' => 'Työmaakokoukset',
        'status' => 0,
    ],
    'lisaja' => [
        'title' => 'Lisä-ja muutostyökäsittely',
        'status' => 0,
    ],
];

$rakennustoiden_vastaanotto = [
    'vastaanottotarkastustilaisuus' => [
        'title' => 'Vastaanottotarkastustilaisuus',
        'status' => 0,
    ],
    'hallinnanluovutustilaisuus' => [
        'title' => 'Hallinnanluovutustilaisuus',
        'status' => 0,
    ],
    'virheja' => [
        'title' => 'Virhe- ja puutekorjausten valvonta',
        'status' => 0,
    ],
    'taloudellinen' => [
        'title' => 'Taloudellinen loppuselvitys',
        'status' => 0,
    ],
    'loppudokumentaatio' => [
        'title' => 'Loppudokumentaatio ja projektin lopetus',
        'status' => 0,
    ],


];


$projektinimi_k4 = noste_check_empty( get_post_meta( get_the_ID(), 'pilar_K4', true ) );
$project_title = !empty($projektinimi_k4) ? $projektinimi_k4 : get_the_title( get_the_ID() );



?>


    <!-- Sub Header -->
    <div class="bg-bodyBg lg:sticky top-[4.55rem] z-10\" >
        <div class="container px-4">
            <div class="flex items-center justify-between border-b border-line py-2 md:py-3 lg:py-5">
                <h2 class="text-xl md:text-2xl text-black font-medium"><?php echo esc_html( $project_title ); ?></h2>
            </div>
        </div> <!-- container -->

    </div>
    <!-- Sub Header -->


    <!-- Project Steps  -->
    <section class="py-10" id="single-main-list">

        <div class="container mx-auto px-4">
            <!-- Work Steps -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-5 gap-4">
                <!-- Step -->
                <div>
                    <!-- Step Title -->
                    <div class="py-2 px-4 shadow flex items-center text-sm font-bold min-h-[4rem] bg-white border border-[#E1E1EA] rounded mb-6 min-h-16">
                        <h5 class="text-base">Projektin valmistelu</h5>
                    </div><!-- Step Title -->


                    <?php foreach ($projektinvalmistelu as $tm => $val): 
                        $tm_url = add_query_arg([
                            'tm' => $tm
                        ], get_permalink( get_the_ID() ) );

                        if ( $val['status'] == 100 ) {
                           $status = 'approval';
                        } elseif ( $val['status'] == 75 ) {
                           $status = 'admitted';
                        } elseif ( $val['status'] == 50 ) {
                           $status = 'started';
                        } else {
                            $status = 'starting';
                        }

                    ?>
                        <!-- Step Items -->
                        <div class="inline-flex items-center justify-between bg-white shadow rounded-md w-full relative mb-4 text-sm <?php echo esc_attr( $status ); ?>">
                            <a class="p-3 pr-2 w-full border-l border-l-[#E1E1EA] text-sm font-medium" href="<?php echo esc_attr( $tm_url ); ?>"><?php echo esc_html( $val['title'] ); ?></a>
                            <div class="dropdown-step pr-3">
                                <button class="dropdown-toggle rounded-sm border border-line p-[3px]" data-dropdown="dropdown-menu1">
                                    
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0.00 0.00 300.00 300.00">
                                    <circle fill="#818d93" cx="66.01" cy="150.02" r="24.05"/>
                                    <circle fill="#818d93" cx="150.01" cy="150.02" r="24.05"/>
                                    <circle fill="#818d93" cx="234.01" cy="150.02" r="24.05"/>
                                </svg>

                                </button>

                                <ul class="px-4 py-2 w-[12rem] bg-white absolute right-0 top-full z-10 border border-[#E1E1EA] rounded hidden">
                                    <li class="text-sm mb-2">
                                        <label class="flex items-center gap-2"><input type="radio" class="accent-accent" value="value1" name="dropdown-menu-2"> Aloittamatta </label>
                                    </li>
                                    <li class="text-sm mb-2">
                                        <label class="flex items-center gap-2"><input type="radio" class="accent-accent" value="value2" name="dropdown-menu-2"> Aloitettu</label>
                                    </li>
                                    <li class="text-sm mb-2">
                                        <label class="flex items-center gap-2"><input type="radio" class="accent-accent" value="value3" name="dropdown-menu-2"> Odottaa hyväksyntää</label>
                                    </li>
                                    <li class="text-sm mb-2">
                                        <label class="flex items-center gap-2"><input type="radio" class="accent-accent" value="value4" name="dropdown-menu-2"> Hyväksytty</label>
                                    </li>
                                </ul>
                                
                            </div>
                        </div><!-- Step Items -->                        
                    <?php endforeach ?>
                    
                </div><!-- Step -->
                
                <!-- Step -->
                <div>
                    <!-- Step Title -->
                    <div class="p-2 shadow flex items-center min-h-[4rem] bg-white border border-[#E1E1EA] rounded mb-6 min-h-16">
                        <h5 class="text-base">Rakentamisen valmistelu</h5>
                    </div><!-- Step Title -->


                    <?php foreach ($rakentamisen_valmistelu as $tm_key => $val): 
                        $tm_url = add_query_arg([
                            'tm' => $tm_key
                        ], get_permalink( get_the_ID() ) );  

                        
                        if ( $val['status'] == 100 ) {
                           $status = 'approval';
                        } elseif ( $val['status'] == 75 ) {
                           $status = 'admitted';
                        } elseif ( $val['status'] == 50 ) {
                           $status = 'started';
                        } else {
                            $status = 'starting';
                        }

                    ?>
                        <div class="inline-flex items-start justify-between bg-white shadow rounded-md w-full relative mb-4 text-sm <?php echo esc_attr( $status ); ?>">
                            <a class="p-3 pr-2 w-full border-l border-l-[#E1E1EA] text-sm font-medium" href="<?php echo esc_attr( $tm_url ); ?>"><?php echo esc_html( $val['title'] ); ?></a>
                            <div class="dropdown-step pt-3 pr-3">
                                <button class="dropdown-toggle rounded-sm border border-line p-[3px]" data-dropdown="dropdown-menu7">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0.00 0.00 300.00 300.00">
                                        <circle fill="#818d93" cx="66.01" cy="150.02" r="24.05"/>
                                        <circle fill="#818d93" cx="150.01" cy="150.02" r="24.05"/>
                                        <circle fill="#818d93" cx="234.01" cy="150.02" r="24.05"/>
                                    </svg>
                                </button>

                                <ul class="px-4 py-2 w-[12rem] bg-white absolute right-0 top-full z-10 border border-[#E1E1EA] rounded hidden">
                                    <li class="text-sm mb-2">
                                        <label class="flex items-center gap-2"><input type="radio" class="accent-accent" value="value1" name="dropdown-menu-2"> Aloittamatta </label>
                                    </li>
                                    <li class="text-sm mb-2">
                                        <label class="flex items-center gap-2"><input type="radio" class="accent-accent" value="value2" name="dropdown-menu-2"> Aloitettu</label>
                                    </li>
                                    <li class="text-sm mb-2">
                                        <label class="flex items-center gap-2"><input type="radio" class="accent-accent" value="value3" name="dropdown-menu-2"> Odottaa hyväksyntää</label>
                                    </li>
                                    <li class="text-sm mb-2">
                                        <label class="flex items-center gap-2"><input type="radio" value="value4" name="dropdown-menu-2"> Hyväksytty </label>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- Step Items -->
                    <?php endforeach; ?>
                    <!-- Step Items -->
                   
                </div><!-- Step -->
                
                <!-- Step -->
                <div>
                    <!-- Step Title -->
                    <div class="py-2 px-4 shadow flex items-center text-sm font-bold min-h-[4rem] bg-white border border-[#E1E1EA] rounded mb-6 min-h-16">
                        <h5 class="text-base">Rakentamisen käynnistäminen</h5>
                    </div><!-- Step Title -->

                    <?php foreach ($rakentamisen_kaynnistaminen as $tm_key => $val): 
                        $tm_url = add_query_arg([
                            'tm' => $tm_key
                        ], get_permalink( get_the_ID() ) );  

                        
                        if ( $val['status'] == 100 ) {
                           $status = 'approval';
                        } elseif ( $val['status'] == 75 ) {
                           $status = 'admitted';
                        } elseif ( $val['status'] == 50 ) {
                           $status = 'started';
                        } else {
                            $status = 'starting';
                        }

                    ?>
                        <!-- Step Items -->
                        <div class="inline-flex items-start justify-between bg-white shadow rounded-md w-full relative mb-4 text-sm <?php echo esc_attr( $status ); ?>">
                            <a class="p-3 pr-2 w-full border-l border-l-[#E1E1EA] text-sm font-medium" href="<?php echo esc_attr( $tm_url ); ?>"><?php echo esc_html( $val['title'] ); ?></a>
                            <div class="dropdown-step pt-3 pr-3">
                                <button class="dropdown-toggle rounded-sm border border-line p-[3px]" data-dropdown="dropdown-menu13">
    								
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0.00 0.00 300.00 300.00">
                                        <circle fill="#818d93" cx="66.01" cy="150.02" r="24.05"/>
                                        <circle fill="#818d93" cx="150.01" cy="150.02" r="24.05"/>
                                        <circle fill="#818d93" cx="234.01" cy="150.02" r="24.05"/>
                                    </svg>

                                </button>

                                <ul class="px-4 py-2 w-[12rem] bg-white absolute right-0 top-full z-10 border border-[#E1E1EA] rounded hidden" id="dropdown-menu13">
                                    <li class="text-sm mb-2">
                                        <label class="flex items-center gap-2"><input type="radio" class="accent-accent" value="value1" name="dropdown-menu-2"> Aloittamatta </label>
                                    </li>
                                    <li class="text-sm mb-2">
                                        <label class="flex items-center gap-2"><input type="radio" class="accent-accent" value="value2" name="dropdown-menu-2"> Aloitettu</label>
                                    </li>
                                    <li class="text-sm mb-2">
                                        <label class="flex items-center gap-2"><input type="radio" class="accent-accent" value="value3" name="dropdown-menu-2"> Odottaa hyväksyntää</label>
                                    </li>
                                    <li class="text-sm mb-2">
                                        <label class="flex items-center gap-2"><input type="radio" value="value4" name="dropdown-menu-2"> Hyväksytty </label>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- Step Items -->

                <?php endforeach; ?>
                
                </div><!-- Step -->
                <!-- Step -->

                <div>
                    <!-- Step Title -->
                    <div class="py-2 px-4 shadow flex items-center text-sm font-bold min-h-[4rem] bg-white border border-[#E1E1EA] rounded mb-6 min-h-16">
                        <h5 class="text-base">Rakentaminen</h5>
                    </div><!-- Step Title -->

                    <?php foreach ($rakentaminen as $tm_key => $val): 
                        $tm_url = add_query_arg([
                            'tm' => $tm_key
                        ], get_permalink( get_the_ID() ) );  

                        
                        if ( $val['status'] == 100 ) {
                           $status = 'approval';
                        } elseif ( $val['status'] == 75 ) {
                           $status = 'admitted';
                        } elseif ( $val['status'] == 50 ) {
                           $status = 'started';
                        } else {
                            $status = 'starting';
                        }

                    ?>
                        <!-- Step Items -->
                        <div class="inline-flex items-start justify-between bg-white shadow rounded-md w-full relative mb-4 text-sm <?php echo esc_attr( $status ); ?>">
                            <a class="p-3 pr-2 w-full border-l border-l-[#E1E1EA] text-sm font-medium" href="<?php echo esc_attr( $tm_url ); ?>"><?php echo esc_html( $val['title'] ); ?></a>
                            <div class="dropdown-step pt-3 pr-3">
                                <button class="dropdown-toggle rounded-sm border border-line p-[3px]" data-dropdown="dropdown-menu17">
                                    
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0.00 0.00 300.00 300.00">
                                        <circle fill="#818d93" cx="66.01" cy="150.02" r="24.05"/>
                                        <circle fill="#818d93" cx="150.01" cy="150.02" r="24.05"/>
                                        <circle fill="#818d93" cx="234.01" cy="150.02" r="24.05"/>
                                    </svg>

                                </button>

                                <ul class="px-4 py-2 w-[12rem] bg-white absolute right-0 top-full z-10 border border-[#E1E1EA] rounded hidden" id="dropdown-menu17">
                                    <li class="text-sm mb-2">
                                        <label class="flex items-center gap-2"><input type="radio" class="accent-accent" value="value1" name="dropdown-menu-2"> Aloittamatta </label>
                                    </li>
                                    <li class="text-sm mb-2">
                                        <label class="flex items-center gap-2"><input type="radio" class="accent-accent" value="value2" name="dropdown-menu-2"> Aloitettu</label>
                                    </li>
                                    <li class="text-sm mb-2">
                                        <label class="flex items-center gap-2"><input type="radio" class="accent-accent" value="value3" name="dropdown-menu-2"> Odottaa hyväksyntää</label>
                                    </li>
                                    <li class="text-sm mb-2">
                                        <label class="flex items-center gap-2"><input type="radio" value="value4" name="dropdown-menu-2"> Hyväksytty </label>
                                    </li>
                                </ul>
                                
                            </div>
                        </div><!-- Step Items -->
                    <?php endforeach; ?>
                    
                </div><!-- Step -->
                
                <div>
                    <!-- Step Title -->
                    <div class="py-2 px-4 shadow flex items-center text-sm font-bold min-h-[4rem] bg-white border border-[#E1E1EA] rounded mb-6 min-h-16">
                        <h5 class="text-base">Rakennustöiden vastaanotto ja toimeksiannon lopetus</h5>
                    </div><!-- Step Title -->

                    <?php foreach ($rakennustoiden_vastaanotto as $tm_key => $val): 
                        $tm_url = add_query_arg([
                            'tm' => $tm_key
                        ], get_permalink( get_the_ID() ) );  

                        
                        if ( $val['status'] == 100 ) {
                           $status = 'approval';
                        } elseif ( $val['status'] == 75 ) {
                           $status = 'admitted';
                        } elseif ( $val['status'] == 50 ) {
                           $status = 'started';
                        } else {
                            $status = 'starting';
                        }

                    ?>
                        <!-- Step Items -->
                    <div class="inline-flex items-start justify-between bg-white shadow rounded-md w-full relative mb-4 text-sm <?php echo esc_attr( $status ); ?>">
                            <a class="p-3 pr-2 w-full border-l border-l-[#E1E1EA] text-sm font-medium" href="<?php echo esc_attr( $tm_url ); ?>"><?php echo esc_html( $val['title'] ); ?></a>
                        <div class="dropdown-step pt-3 pr-3">
                            <button class="dropdown-toggle rounded-sm border border-line p-[3px]" data-dropdown="dropdown-menu21">
                                
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0.00 0.00 300.00 300.00">
                                    <circle fill="#818d93" cx="66.01" cy="150.02" r="24.05"/>
                                    <circle fill="#818d93" cx="150.01" cy="150.02" r="24.05"/>
                                    <circle fill="#818d93" cx="234.01" cy="150.02" r="24.05"/>
                                </svg>

                            </button>
                            <ul class="px-4 py-2 w-[12rem] bg-white absolute right-0 top-full z-10 border border-[#E1E1EA] rounded hidden" id="dropdown-menu21">
                                <li class="text-sm mb-2">
                                    <label class="flex items-center gap-2"><input type="radio" class="accent-accent" value="value1" name="dropdown-menu-2"> Aloittamatta </label>
                                </li>
                                <li class="text-sm mb-2">
                                    <label class="flex items-center gap-2"><input type="radio" class="accent-accent" value="value2" name="dropdown-menu-2"> Aloitettu</label>
                                </li>
                                <li class="text-sm mb-2">
                                    <label class="flex items-center gap-2"><input type="radio" class="accent-accent" value="value3" name="dropdown-menu-2"> Odottaa hyväksyntää</label>
                                </li>
                                <li class="text-sm mb-2">
                                    <label class="flex items-center gap-2"><input type="radio" value="value4" name="dropdown-menu-2"> Hyväksytty </label>
                                </li>
                            </ul>

                        </div>
                    </div><!-- Step Items -->
                    <?php endforeach; ?>
                </div><!-- Step -->

            </div> <!-- Work Steps -->
        </div> <!-- container -->

        <!-- Project Steps  -->

    </section>
    <!-- card list end  -->