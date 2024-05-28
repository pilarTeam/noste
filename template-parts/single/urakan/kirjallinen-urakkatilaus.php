<?php 

if ( !is_singular( 'projektitiedot' ) ) {
   return;
}

$project_id = get_the_ID();
$data = the_form_stored_data();

?>


<!-- Main Content -->
<section class="py-10">
    <div class="container px-4">
        <!-- grid View Item -->
        <div class="grid grid-cols-1 gap-4">
            <!-- card_item -->
            <div class="card_item relative h-fit">
                <!-- Card Header --><?php echo wp_kses_post(noste_form_header('form')); ?><!-- Card Header -->
                
                <form action="<?php echo esc_url(get_permalink(get_the_ID())); ?>" method="post" enctype="multipart/form-data" class="ajax-submit">
                    <?php wp_nonce_field('project_step_form_validation', 'project_step_form__nonce_field'); ?>
                    <input type="hidden" name="ptname" value="<?php echo esc_attr(get_the_ptname()); ?>">
                    <input type="hidden" name="action" value="noste_update_project_step">
                    <input type="hidden" name="post_id" value="<?php echo esc_attr( $project_id ); ?>">
                    
                    <!-- Card Body -->
                    <div class="px-4 md:px-8 pt-6 pb-10 lg:h-[645px] overflow-y-auto no-scrollbar scroll-smooth">

                        <div>
                            <div class="mx-auto max-w-[650px] mb-4">
                                <p class="text-sm text-accent italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K1', true ), 'K1') ); ?></p>
                                <p class="text-sm text-accent italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K4', true ), 'K4') ); ?></p>
                            </div>
                            <h4 class="mb-8 text-[#081F2C] mx-auto max-w-[650px]">Urakan kirjallinen tilaus</h4>
                                    

                            <div class="mx-auto max-w-[650px]">
                                <div class="flex flex-col lg:flex-row lg:items-center gap-3">
                                    <span class="text-[#586B74] text-[15px]"><span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T1', true ), 'T1') ); ?></span> tilaa <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K4', true ), 'K4') ); ?></span> - urakan työt</span>
                                    <input type="text" <?php noste_textinput_attrset('noste_filed8_1', $data, 'U1'); ?> class="w-full lg:w-[68px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2 text-[#00B2A9] italic"><span class="text-[#586B74] text-[15px]">( Y-tunnus <span class="text-[#00B2A9] italic">U2</span> ) tämän tilauksen liitteenä</span>
                                </div>
                                 
                                <p class="text-[#586B74] text-[14px]">olevan tarjouksen jav urakkaneuvottelupöytäkirjan mukaisesti kiinteällä kokonaishinnalla <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_UH1', true ), 'UH1') ); ?></span> € (alv. 0%).</p>
                                <p class="text-[#586B74] text-[14px] mt-8">Tämä dokumentti toimii kirjallisena tilauksena ja hankinnat sekä työt tulee aloittaa urakkaneuvottelussa sovitun aikataulun mukaisesti.</p>
                                <p class="text-[#586B74] text-[14px] mt-8">Urakkasopimus laaditaan tarjouspyyntöaineistossa olleen Urakkasopimusluonnoksen pohjalle urakkaneuvottelussa mahdollisesti erikseen sovituilla tarkennuksilla. Sopimuksen laadinta ja allekirjoitus suoritetaan mahdollisimman pian.</p>
                                
                                <div class="my-10">
                                    <h5 class="text-[#081F2C] mx-auto max-w-[650px]">Tilauksen vakuudeksi</h5>
                                    <p class="text-[#586B74] text-[14px] mt-2 font-bold"><span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P1', true ), 'P1') ); ?></span>, Partners at Noste Oy</p>
                                </div>

                                <p class="mt-5 lg:mt-20 text-[#586B74] mx-auto max-w-[650px]">Liitteet</p>
                                
                                <div class="flex flex-col flex-wrap lg:flex-row lg:items-center gap-2 mt-1 mb-4">
                                    <span class="text-[#586B74]">
                                        Lilte 1. Urakoitsijan tarjous,
                                    </span>
                                    <span class="text-[#586B74]">
                                        <input type="text" <?php noste_textinput_attrset('noste_filed8_2', $data, ''); ?> placeholder="xx.xx.xxxx." class="w-[150px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id46">
                                    </span>
                                </div>
                                <div class="flex flex-col flex-wrap lg:flex-row lg:items-center gap-2 mt-1">
                                    <span class="text-[#586B74]">
                                        Liite2. Urakkaneuvottelupöytäkirja,
                                    </span>
                                    <span class="text-[#586B74]">
                                        <input type="text" <?php noste_textinput_attrset('noste_filed8_3', $data, 'U1'); ?> placeholder="xx.xx.xxxx." class="w-[150px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id46">
                                    </span>
                                </div>
                            </div>
                            
                        </div>

                    </div><!-- Card Body -->
                    <!-- Card footer --><?php echo wp_kses_post(noste_form_footer('form')); ?><!-- Card footer -->
                </form>
            </div>


        </div>
    </div>
</section>
<!-- Main Content -->