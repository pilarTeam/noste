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
    'Tyomaan' => [
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
    'Lisaja' => [
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






?>


    <!-- Sub Header -->
    <div class="bg-bodyBg lg:sticky top-[4.55rem] z-10\" >
        <div class="container px-4">
            <div class="flex items-center justify-between border-b border-line py-2 md:py-3 lg:py-5">
                <h2 class="text-xl md:text-2xl text-black font-medium">Projektit</h2>
                <i class="um-icon-android-alert"></i>
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
                        <div class="inline-flex items-start justify-between bg-white shadow rounded-md w-full relative mb-4 text-sm <?php echo esc_attr( $status ); ?>">
                            <a class="p-3 pr-2 w-full border-l border-l-[#E1E1EA] text-sm font-medium" href="<?php echo esc_attr( $tm_url ); ?>"><?php echo esc_html( $val['title'] ); ?></a>
                            <div class="dropdown pt-3 pr-3">
                                <button class="dropdown-toggle rounded-sm border border-line p-[3px]" data-dropdown="dropdown-menu1">
                                    
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-3" viewBox="0 0 16 16">
                                        <defs>
                                            <pattern id="pattern" preserveAspectRatio="xMidYMid slice" width="100%" height="100%" viewBox="0 0 100 100">
                                            <image width="100" height="100" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAABs0lEQVR4nO3cTW7CMBCGYTbtYQp39Dhb7DTYdMFZSk8BPUh/dm1FFZC6aVGVIPAn8z6SNxCkkUaexNEnJhMAAAAAAAAAAIpx827mY+ospK3F/L5fIW37z/rvaM2lGuHcrYX84GP+8jHv/loW0qeFnPtracyZm+FjfjrWiF+NiWlNU87IDjtjN2yldM6arpabd7N+FA1tSP+bpl1OS9dfHQt5MXx3/Ky2dP3V8TE/n9CQTen6q+NDehvbEIv5tXT91bGYX0fvkJBfStdfHc/I0mIh3Z+wQ0Lp+qvTtMvp2MdeN1/cla6/ShZyHnEw7ErXXfd7rJjWA0bV42q1uild9xW8z0rpn/H10e8MmnHhe4qPue0PffszyuGcsrGYIvcMAAAAAAAAAEeR7RXhyPbqcGR7tRjZXh2ObK8WI9urxROU0+LJ9moxsr1aPCNLi5Ht1dKQ7dVjZHu1OLK9ehzZXk0N2V4AAAAAAAAAYzj+t1eDI9urw5Ht1WJke3U4sr1ajGyvFk9QTosn26vFyPZq8YwsLUa2V0tDtlePke3V4sj26nFkezU1ZHsBAAAAAAAAABNV310JmT2x4ejYAAAAAElFTkSuQmCC"/>
                                            </pattern>
                                        </defs>
                                        <rect id="icons8-menu-vertical-100" width="16" height="16" transform="translate(16) rotate(90)" fill="url(#pattern)"/>
                                    </svg>

                                </button>

                                <ul class="px-4 py-2 w-[12rem] bg-white absolute right-0 top-full z-10 border border-[#E1E1EA] rounded hidden" id="dropdown-menu1">
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
                            <div class="dropdown pt-3 pr-3">
                                <button class="dropdown-toggle rounded-sm border border-line p-[3px]" data-dropdown="dropdown-menu7">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-3" viewBox="0 0 16 16">
                                        <defs>
                                            <pattern id="pattern" preserveAspectRatio="xMidYMid slice" width="100%" height="100%" viewBox="0 0 100 100">
                                            <image width="100" height="100" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAABs0lEQVR4nO3cTW7CMBCGYTbtYQp39Dhb7DTYdMFZSk8BPUh/dm1FFZC6aVGVIPAn8z6SNxCkkUaexNEnJhMAAAAAAAAAAIpx827mY+ospK3F/L5fIW37z/rvaM2lGuHcrYX84GP+8jHv/loW0qeFnPtracyZm+FjfjrWiF+NiWlNU87IDjtjN2yldM6arpabd7N+FA1tSP+bpl1OS9dfHQt5MXx3/Ky2dP3V8TE/n9CQTen6q+NDehvbEIv5tXT91bGYX0fvkJBfStdfHc/I0mIh3Z+wQ0Lp+qvTtMvp2MdeN1/cla6/ShZyHnEw7ErXXfd7rJjWA0bV42q1uild9xW8z0rpn/H10e8MmnHhe4qPue0PffszyuGcsrGYIvcMAAAAAAAAAEeR7RXhyPbqcGR7tRjZXh2ObK8WI9urxROU0+LJ9moxsr1aPCNLi5Ht1dKQ7dVjZHu1OLK9ehzZXk0N2V4AAAAAAAAAYzj+t1eDI9urw5Ht1WJke3U4sr1ajGyvFk9QTosn26vFyPZq8YwsLUa2V0tDtlePke3V4sj26nFkezU1ZHsBAAAAAAAAABNV310JmT2x4ejYAAAAAElFTkSuQmCC"/>
                                            </pattern>
                                        </defs>
                                        <rect id="icons8-menu-vertical-100" width="16" height="16" transform="translate(16) rotate(90)" fill="url(#pattern)"/>
                                    </svg>
                                </button>

                                <ul class="px-4 py-2 w-[12rem] bg-white absolute right-0 top-full z-10 border border-[#E1E1EA] rounded hidden"  id="dropdown-menu7">
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
                            <div class="dropdown pt-3 pr-3">
                                <button class="dropdown-toggle rounded-sm border border-line p-[3px]" data-dropdown="dropdown-menu13">
    								
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-3" viewBox="0 0 16 16">
                                        <defs>
                                            <pattern id="pattern" preserveAspectRatio="xMidYMid slice" width="100%" height="100%" viewBox="0 0 100 100">
                                            <image width="100" height="100" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAABs0lEQVR4nO3cTW7CMBCGYTbtYQp39Dhb7DTYdMFZSk8BPUh/dm1FFZC6aVGVIPAn8z6SNxCkkUaexNEnJhMAAAAAAAAAAIpx827mY+ospK3F/L5fIW37z/rvaM2lGuHcrYX84GP+8jHv/loW0qeFnPtracyZm+FjfjrWiF+NiWlNU87IDjtjN2yldM6arpabd7N+FA1tSP+bpl1OS9dfHQt5MXx3/Ky2dP3V8TE/n9CQTen6q+NDehvbEIv5tXT91bGYX0fvkJBfStdfHc/I0mIh3Z+wQ0Lp+qvTtMvp2MdeN1/cla6/ShZyHnEw7ErXXfd7rJjWA0bV42q1uild9xW8z0rpn/H10e8MmnHhe4qPue0PffszyuGcsrGYIvcMAAAAAAAAAEeR7RXhyPbqcGR7tRjZXh2ObK8WI9urxROU0+LJ9moxsr1aPCNLi5Ht1dKQ7dVjZHu1OLK9ehzZXk0N2V4AAAAAAAAAYzj+t1eDI9urw5Ht1WJke3U4sr1ajGyvFk9QTosn26vFyPZq8YwsLUa2V0tDtlePke3V4sj26nFkezU1ZHsBAAAAAAAAABNV310JmT2x4ejYAAAAAElFTkSuQmCC"/>
                                            </pattern>
                                        </defs>
                                        <rect id="icons8-menu-vertical-100" width="16" height="16" transform="translate(16) rotate(90)" fill="url(#pattern)"/>
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
                            <div class="dropdown pt-3 pr-3">
                                <button class="dropdown-toggle rounded-sm border border-line p-[3px]" data-dropdown="dropdown-menu17">
                                    
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-3" viewBox="0 0 16 16">
                                        <defs>
                                            <pattern id="pattern" preserveAspectRatio="xMidYMid slice" width="100%" height="100%" viewBox="0 0 100 100">
                                            <image width="100" height="100" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAABs0lEQVR4nO3cTW7CMBCGYTbtYQp39Dhb7DTYdMFZSk8BPUh/dm1FFZC6aVGVIPAn8z6SNxCkkUaexNEnJhMAAAAAAAAAAIpx827mY+ospK3F/L5fIW37z/rvaM2lGuHcrYX84GP+8jHv/loW0qeFnPtracyZm+FjfjrWiF+NiWlNU87IDjtjN2yldM6arpabd7N+FA1tSP+bpl1OS9dfHQt5MXx3/Ky2dP3V8TE/n9CQTen6q+NDehvbEIv5tXT91bGYX0fvkJBfStdfHc/I0mIh3Z+wQ0Lp+qvTtMvp2MdeN1/cla6/ShZyHnEw7ErXXfd7rJjWA0bV42q1uild9xW8z0rpn/H10e8MmnHhe4qPue0PffszyuGcsrGYIvcMAAAAAAAAAEeR7RXhyPbqcGR7tRjZXh2ObK8WI9urxROU0+LJ9moxsr1aPCNLi5Ht1dKQ7dVjZHu1OLK9ehzZXk0N2V4AAAAAAAAAYzj+t1eDI9urw5Ht1WJke3U4sr1ajGyvFk9QTosn26vFyPZq8YwsLUa2V0tDtlePke3V4sj26nFkezU1ZHsBAAAAAAAAABNV310JmT2x4ejYAAAAAElFTkSuQmCC"/>
                                            </pattern>
                                        </defs>
                                        <rect id="icons8-menu-vertical-100" width="16" height="16" transform="translate(16) rotate(90)" fill="url(#pattern)"/>
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
                        <div class="dropdown pt-3 pr-3">
                            <button class="dropdown-toggle rounded-sm border border-line p-[3px]" data-dropdown="dropdown-menu21">
                                
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-3" viewBox="0 0 16 16">
                                    <defs>
                                        <pattern id="pattern" preserveAspectRatio="xMidYMid slice" width="100%" height="100%" viewBox="0 0 100 100">
                                        <image width="100" height="100" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAABs0lEQVR4nO3cTW7CMBCGYTbtYQp39Dhb7DTYdMFZSk8BPUh/dm1FFZC6aVGVIPAn8z6SNxCkkUaexNEnJhMAAAAAAAAAAIpx827mY+ospK3F/L5fIW37z/rvaM2lGuHcrYX84GP+8jHv/loW0qeFnPtracyZm+FjfjrWiF+NiWlNU87IDjtjN2yldM6arpabd7N+FA1tSP+bpl1OS9dfHQt5MXx3/Ky2dP3V8TE/n9CQTen6q+NDehvbEIv5tXT91bGYX0fvkJBfStdfHc/I0mIh3Z+wQ0Lp+qvTtMvp2MdeN1/cla6/ShZyHnEw7ErXXfd7rJjWA0bV42q1uild9xW8z0rpn/H10e8MmnHhe4qPue0PffszyuGcsrGYIvcMAAAAAAAAAEeR7RXhyPbqcGR7tRjZXh2ObK8WI9urxROU0+LJ9moxsr1aPCNLi5Ht1dKQ7dVjZHu1OLK9ehzZXk0N2V4AAAAAAAAAYzj+t1eDI9urw5Ht1WJke3U4sr1ajGyvFk9QTosn26vFyPZq8YwsLUa2V0tDtlePke3V4sj26nFkezU1ZHsBAAAAAAAAABNV310JmT2x4ejYAAAAAElFTkSuQmCC"/>
                                        </pattern>
                                    </defs>
                                    <rect id="icons8-menu-vertical-100" width="16" height="16" transform="translate(16) rotate(90)" fill="url(#pattern)"/>
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