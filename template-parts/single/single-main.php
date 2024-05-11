<?php 

$single_main_step = json_decode( get_option( 'single_main_steps'), true ) ?? [];

// $single_main_step['Projektin valmistelu']['tilaajan']['step'] = 4;
// $single_main_step['Projektin valmistelu']['lahtotietojen']['step'] = 5;
// $single_main_step['Projektin valmistelu']['kohdekaynti']['step'] = 4;
// $single_main_step['Projektin valmistelu']['vuokrasopimuksen']['step'] = 4;
// $single_main_step['Projektin valmistelu']['kustannusarvion']['step'] = 2;
// $single_main_step['Projektin valmistelu']['vuokrasopimuksen_allekirjoitus']['step'] = 2;
// $single_main_step['Rakentamisen valmistelu']['noste_tarjouksen']['step'] = 4;
// $single_main_step['Rakentamisen valmistelu']['projektiraportointi']['step'] = 4;
// $single_main_step['Rakentamisen valmistelu']['suunnittelu']['step'] = 6;
// $single_main_step['Rakentamisen valmistelu']['kaupalliset']['step'] = 7;
// $single_main_step['Rakentamisen valmistelu']['tarjouspyynnon']['step'] = 11;
// $single_main_step['Rakentamisen valmistelu']['tarjouksen']['step'] = 3;
// $single_main_step['Rakentamisen käynnistäminen']['urakan']['step'] = 2;
// $single_main_step['Rakentamisen käynnistäminen']['urakkasopimuksen']['step'] = 3;
// $single_main_step['Rakentamisen käynnistäminen']['tyomaan']['step'] = 2;
// $single_main_step['Rakentamisen käynnistäminen']['tyomaan_aloituskokous']['step'] = 5;
// $single_main_step['Rakentaminen']['yleinen']['step'] = 6;
// $single_main_step['Rakentaminen']['tyomaavalvonta']['step'] = 4;
// $single_main_step['Rakentaminen']['tyomaakokoukset']['step'] = 5;
// $single_main_step['Rakentaminen']['lisaja']['step'] = 4;
// $single_main_step['Rakennustöiden vastaanotto ja toimeksiannon lopetus']['vastaanottotarkastustilaisuus']['step'] = 7;
// $single_main_step['Rakennustöiden vastaanotto ja toimeksiannon lopetus']['hallinnanluovutustilaisuus']['step'] = 6;
// $single_main_step['Rakennustöiden vastaanotto ja toimeksiannon lopetus']['virheja']['step'] = 2;
// $single_main_step['Rakennustöiden vastaanotto ja toimeksiannon lopetus']['taloudellinen']['step'] = 5;
// $single_main_step['Rakennustöiden vastaanotto ja toimeksiannon lopetus']['loppudokumentaatio']['step'] = 4;


// update_option( 'single_main_steps', json_encode( $single_main_step ) );


if ( empty($single_main_step) ) {
    wp_redirect( site_url() );
    exit;
}

$projektinimi_k4 = noste_check_empty( get_post_meta( get_the_ID(), 'pilar_K4', true ) );
$project_title = !empty($projektinimi_k4) ? $projektinimi_k4 : get_the_title( get_the_ID() );

?>

    <!-- Sub Header -->
    <div class="bg-bodyBg lg:sticky top-[4.55rem] z-10\" >
        <div class="container px-4">
            <div class="flex items-center justify-between border-b border-line py-2 md:py-3 lg:py-5">
                <h2 class="text-xl md:text-2xl text-black font-medium"><?php echo esc_html( $project_title ); ?></h2>
                <!-- <i class="um-icon-android-alert"></i> -->
            </div>
        </div> <!-- container -->

    </div>
    <!-- Sub Header -->


    <!-- Project Steps  -->
    <section class="py-10" id="single-main-list">

        <div class="container mx-auto px-4">
            <!-- Work Steps -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-5 gap-4">


                <?php foreach ($single_main_step as $topName => $steps): ?>

                    <!-- Step -->
                    <div>
                        <!-- Step Title -->
                        <div class="py-2 px-4 shadow flex items-center text-sm font-bold min-h-[4rem] bg-white border border-[#E1E1EA] rounded mb-6 min-h-16">
                            <h5 class="text-base"><?php echo $topName; ?></h5>
                        </div><!-- Step Title -->


                        <?php foreach ($steps as $tm => $val): 


                            $tm_url = add_query_arg([
                                'tm' => $tm
                            ], get_permalink( get_the_ID() ) );

                            $project_intdata = !empty(get_post_meta( get_the_ID(), sprintf('%s_status', $tm), true )) ? json_decode( get_post_meta( get_the_ID(), sprintf('%s_status', $tm), true ), true ) : [];
                            $status = 'starting';

                            if ( !empty($project_intdata) && !empty($val['step']) ) {
                                $score = array_sum(array_column($project_intdata, 'status')); 
                                $total_score = ( 100 / ( $val['step'] * 3 ) ) * $score;

                                if ( 100 >= $total_score && $total_score > 75 ) {
                                   $status = 'approval';
                                } elseif ( 75 >= $total_score && $total_score > 50 ) {
                                   $status = 'admitted';
                                } elseif ( 50 >= $total_score && $total_score > 25 ) {
                                   $status = 'started';
                                } elseif ( $total_score >= 25  ) {
                                    $status = 'starting';
                                }
                            }

                        ?>
                            <!-- Step Items -->
                            <div class="inline-flex items-start justify-between bg-white shadow rounded-md w-full relative mb-4 text-sm <?php echo esc_attr( $status ); ?>">
                                <a class="p-3 pr-2 w-full border-l border-l-[#E1E1EA] text-sm font-medium" href="<?php echo esc_attr( $tm_url ); ?>"><?php echo esc_html( $val['title'] ); ?></a>

                                <div class="step_main_status-switch pt-3 pr-3">
                                     <button class="rounded-sm border border-line p-[3px]"> 
                                        <?php echo noste_check_empty ( GetIconsMarkup( 'three-dot.svg', '13px' ) ); ?>
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
                    
                <?php endforeach ?>
                              

            </div> <!-- Work Steps -->
        </div> <!-- container -->

        <!-- Project Steps  -->

    </section>
    <!-- card list end  -->