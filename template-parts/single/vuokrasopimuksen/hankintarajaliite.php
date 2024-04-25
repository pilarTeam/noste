<?php 

if ( !is_singular( 'projektitiedot' ) ) {
   return;
}

$project_id = get_the_ID();

?>


<!-- Main Content -->
<section class="py-10">
    <div class="container px-4">
        <!-- grid View Item -->
        <div class="grid grid-cols-1 gap-4">
            <!-- card_item -->
            <div class="card_item relative h-fit">
                <!-- Card Header --><?php echo wp_kses_post(noste_form_header('form')); ?><!-- Card Header -->
                
                <form action="<?php echo esc_url( get_permalink( get_the_ID() ) ); ?>" method="post" enctype="multipart/form-data" class="ajax-submit">
                    <?php wp_nonce_field('project_step_form_validation', 'project_step_form__nonce_field'); ?>
                    <input type="hidden" name="ptname" value="<?php echo esc_attr(implode('_', ['noste', $_GET['tm'], $_GET['tmin']])); ?>">
                    <input type="hidden" name="action" value="noste_update_project_step">
                    <input type="hidden" name="post_id" value="<?php echo esc_attr( $project_id ); ?>">
                    
                    <!-- Card Body -->
                    <div class="px-4 md:px-8 pt-6 pb-10 lg:h-[645px] overflow-y-auto no-scrollbar scroll-smooth">
                        <div class="">
                            <div class="mx-auto max-w-full mb-4">
                                <p class="text-sm text-accent italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K1', true ), 'K1') ); ?></p>
                                <p class="text-sm text-accent italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K1', true ), 'K1') ); ?></p>
                            </div>
                            
                            <h4 class="mb-8 text-[#081F2C] mx-auto max-w-full">Hankintarajaliite</h4>

                            <div class="mb-8 mx-auto max-w-full">
                                <div class="flex flex-wrap mb-4">
                                    <label class="flex-[3] md:flex-[.7] lg:flex-[.2] mr-4 text-sm font-medium text-black" for="version">Versio:</label>
                                    <input class="shadow-input md:ml-5 text-sm border-accent rounded-md text-[#686d70] max-w-[420px]" type="text" id="version" name="present" placeholder="xx.xx.xxxx">
                                </div>
                            </div>

                            <div class="help_wrap my-10 relative">
                                <div class="max-w-full mx-auto">
                                    <div class="flex flex-col lg:flex-row lg:items-center justify-end gap-2">
                                        <hr class="help_line hidden w-full lg:w-[50px] border border-solid border-[#E1E1EA]">
                                        <a href="#!" class="help_click">
                                            <svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g stroke-width="0"></g>
                                                <g stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g>
                                                    <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                    <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path>
                                                    <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                                </g>
                                            </svg> 
                                        </a>
                                    </div>
                                </div>
                                <div class="help_show hidden text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[50px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px]">
                                    Keltaisiin kenttiin syötä kohdekohtaisia tietoja/valintaruuduista valitse sopivat, valitsematta jäävät eivät tulostu. KORVAA KENTISSÄ OLEVAT APUKYSYMYKSET. <br><br> Täytä aina rakennustapaselostus ensin jos täytät hankintarajaliitteen. Hankintarajaliite on rakennustapaselostusta tukeva dokumentti.
                                </div>
                            </div>

                            <div class="max-w-full mx-auto">
                                <div class="flex flex-col">
                                    <div class="overflow-x-auto">
                                        <div class="inline-block min-w-full align-middle">
                                            <div class="overflow-hidden">
                                                <table class="w-full whitespace-nowrap border-collapse">
                                                    <thead class="text-left rounded-t-lg bg-accent text-black text-sm">
                                                        <tr class="rounded-lg">
                                                            <th colspan="2" class="p-3">Koodari huomio</th>
                                                            <th class="p-3 min-w-[250px]">Vapaata tekstiä…</th>
                                                            <th colspan="3" class="p-3">Koodari huomio</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- 1 -->
                                                        <tr>
                                                            <td colspan="8" class="px-4 py-3"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention1" id="coder_attention1">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">1</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">SUUNNITTELU</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                Suunnittelu
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Kustannus</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed1_1" id="pilar_filed1_1" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä…">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                        </tr>

                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention2" id="coder_attention2">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">1.1</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Arkkitehtisuunnittelu</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_1" id="pilar_filed2_1" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention3" id="coder_attention3">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">1.2</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Sisustussuunnittelu</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#06F9B7]">
                                                                <span class="text-sm text-black">vuokralainen</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#06F9B7]">
                                                                <span class="text-sm text-black">vuokralainen</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_2" id="pilar_filed2_2" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention4" id="coder_attention4">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">1.3</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Rakennesuunnittelu</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_3" id="pilar_filed2_3" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention5" id="coder_attention5">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">1.4</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Palotekninen suunnittelu</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_4" id="pilar_filed2_4" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention6" id="coder_attention6">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">1.5</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">LVIA-suunnittelu</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_5" id="pilar_filed2_5" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention7" id="coder_attention7">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">1.6</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Sprinklerisuunnittelu</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_6" id="pilar_filed2_6" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention8" id="coder_attention8">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">1.7</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Palosuunnittelu</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_7" id="pilar_filed2_7" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention9" id="coder_attention9">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">1.8</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Sähkösuunnittelu</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_8" id="pilar_filed2_8" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention10" id="coder_attention10">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">1.9</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Vuokralaisen järjestelmien suunnittelu</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#06F9B7]">
                                                                <span class="text-sm text-black">vuokralainen</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#06F9B7]">
                                                                <span class="text-sm text-black">vuokralainen</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_9" id="pilar_filed2_9" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention11" id="coder_attention11">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">1.10</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed1_2" id="pilar_filed1_2" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä…">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_10" id="pilar_filed2_10" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <!-- 2 -->
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention12" id="coder_attention12">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">2</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">TILAJAKO-OSAT</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Hankinta</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Asennus</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Kustannus</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed1_3" id="pilar_filed1_3" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä…">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                        </tr>

                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention13" id="coder_attention13">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">2.1</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Hissiaula / vuokratilan sisäänkäynti</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_11" id="pilar_filed2_11" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention14" id="coder_attention14">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">2.2</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Vuokrattavaa tilaa rajaavat seinät</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_12" id="pilar_filed2_12" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention16" id="coder_attention16">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">2.3</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Toimistohuoneiden väliset seinät</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_14" id="pilar_filed2_14" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention17" id="coder_attention17">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">2.4</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Toimistohuoneiden ja käytävien väliset seinät</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_15" id="pilar_filed2_15" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention18" id="coder_attention18">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">2.5</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Neuvotteluhuoneiden väliset seinät</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_16" id="pilar_filed2_16" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention19" id="coder_attention19">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">2.6</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Neuvotteluhuoneiden ja käytävien väliset seinät</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_17" id="pilar_filed2_17" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention20" id="coder_attention20">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">2.7</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Muut seinät</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_18" id="pilar_filed2_18" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention21" id="coder_attention21">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">2.8</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Muut seinät</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_19" id="pilar_filed2_19" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention22" id="coder_attention22">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">2.9</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Muut seinät</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_20" id="pilar_filed2_20" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention23" id="coder_attention23">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">2.10</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Neuvotteluhuoneiden ovet</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_21" id="pilar_filed2_21" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention24" id="coder_attention24">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">2.11</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Neuvotteluhuoneiden ovet</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_22" id="pilar_filed2_22" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention25" id="coder_attention25">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">2.12</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Muut ovet</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_23" id="pilar_filed2_23" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention26" id="coder_attention26">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">2.13</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Hätäpoistumistieovi</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_23" id="pilar_filed2_23" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention26" id="coder_attention26">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">2.14</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed1_4" id="pilar_filed1_4" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä…">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_23" id="pilar_filed2_23" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä…">
                                                            </td>
                                                        </tr>

                                                        <!-- 3 -->
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                        </tr>

                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention27" id="coder_attention27">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">3</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">TILAPINNAT</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Hankinta</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Asennus</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Kustannus</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed1_5" id="pilar_filed1_5" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä…">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                        </tr>

                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention28" id="coder_attention28">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">3.1</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Kattopinnat, toimistotilat</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_24" id="pilar_filed2_24" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention29" id="coder_attention29">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">3.2</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Lattiapinnat, toimistotilat</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_25" id="pilar_filed2_25" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention30" id="coder_attention30">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">3.3</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Seinäpinnat, toimistotilat</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_26" id="pilar_filed2_26" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention31" id="coder_attention31">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">3.4</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Seinäpinnat, erikoisvärit</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#06F9B7]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_27" id="pilar_filed2_27" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention32" id="coder_attention32">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">3.5</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Kattopinnat, WC-tilat</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_28" id="pilar_filed2_28" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention33" id="coder_attention33">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">3.6</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Lattiapinnat, WC-tilat</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_29" id="pilar_filed2_29" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention34" id="coder_attention34">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">3.7</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Seinäpinnat, WC-tilat</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_30" id="pilar_filed2_30" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention35" id="coder_attention35">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">3.8</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Kattopinnat, varasto- ja tekniset tilat</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_31" id="pilar_filed2_31" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention36" id="coder_attention36">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">3.9</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Lattiapinnat, varasto- ja tekniset tilat</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_32" id="pilar_filed2_32" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention37" id="coder_attention37">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">3.10</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Seinäpinnat, varasto- ja tekniset tilat</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_33" id="pilar_filed2_33" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention38" id="coder_attention38">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">3.11</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">
                                                                    <input type="text" name="pilar_filed1_6" id="pilar_filed1_6" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä…">
                                                                </span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_34" id="pilar_filed2_34" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <!-- 4 -->
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention39" id="coder_attention39">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">4</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">KALUSTEET JA VARUSTEET</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Hankinta</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Asennus</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Kustannus</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed1_7" id="pilar_filed1_7" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä…">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention40" id="coder_attention40">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">4.1</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Keittiökalusteet</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_35" id="pilar_filed2_35" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention41" id="coder_attention41">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">4.2</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">WC-tilojen kalusteet ja varusteet</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_36" id="pilar_filed2_36" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention42" id="coder_attention42">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">4.3</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Sälekaihtimet tai muu häikäisysuoja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#D0D3D4]">
                                                                <span class="text-sm text-black">vuokranantaja <br> ja vuokralainen</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#D0D3D4]">
                                                                <span class="text-sm text-black">vuokranantaja <br> ja vuokralainen</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#D0D3D4]">
                                                                <span class="text-sm text-black">vuokranantaja <br> ja vuokralainen</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_37" id="pilar_filed2_37" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention43" id="coder_attention43">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">4.4</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Muut kiintokalusteet ja -varusteet</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#06F9B7]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#06F9B7]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#06F9B7]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_38" id="pilar_filed2_38" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention44" id="coder_attention44">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">4.5</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Muut kiintokalusteet ja -varusteet</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#06F9B7]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#06F9B7]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#06F9B7]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_28" id="pilar_filed2_28" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention45" id="coder_attention45">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">4.6</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">
                                                                    <input type="text" name="pilar_filed1_8" id="pilar_filed1_8" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä…">
                                                                </span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_34" id="pilar_filed2_34" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä…">
                                                            </td>
                                                        </tr>

                                                        <!-- 5 -->
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention46" id="coder_attention46">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">5</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">LVIA-JÄRJESTELMÄT</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Hankinta</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Asennus</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Kustannus</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed1_8" id="pilar_filed1_8" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä…">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention47" id="coder_attention47">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">5.1</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Lämmitys</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_35" id="pilar_filed2_35" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention48" id="coder_attention48">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">5.2</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Ilmanvaihto</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_36" id="pilar_filed2_36" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention49" id="coder_attention49">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">5.3</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Jäähdytys</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_37" id="pilar_filed2_37" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention50" id="coder_attention50">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">5.4</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Vesi - ja viemäri</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_38" id="pilar_filed2_38" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention51" id="coder_attention51">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">5.5</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Sprinkleri</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_39" id="pilar_filed2_39" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention52" id="coder_attention52">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">5.6</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">
                                                                    <input type="text" name="pilar_filed1_8" id="pilar_filed1_8" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä…">
                                                                </span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_40" id="pilar_filed2_40" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä…">
                                                            </td>
                                                        </tr>

                                                        <!-- 6 -->
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention53" id="coder_attention53">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">6</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">SÄHKÖ- JA YLEISKAAPELOINTIJÄRJESTELMÄT</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Hankinta</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Asennus</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Kustannus</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed1_9" id="pilar_filed1_9" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä…">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention54" id="coder_attention54">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">6.1</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Yleisvalaistus toimistoalueet</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_41" id="pilar_filed2_41" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention55" id="coder_attention55">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">6.2</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Yleisvalaistus neuvotteluhuoneet</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_42" id="pilar_filed2_42" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention56" id="coder_attention56">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">6.3</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Sisustusvalaisimet ja kohdevalaisimet</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#06F9B7]">
                                                                <span class="text-sm text-black">vuokralainen</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#06F9B7]">
                                                                <span class="text-sm text-black">vuokralainen</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#06F9B7]">
                                                                <span class="text-sm text-black">vuokralainen</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_43" id="pilar_filed2_43" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention57" id="coder_attention57">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">6.4</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Sähkönjakelu, ryhmäkeskus</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_44" id="pilar_filed2_44" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention58" id="coder_attention58">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">6.5</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Sähkönjakelu, yleisperiaate</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_45" id="pilar_filed2_45" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention59" id="coder_attention59">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">6.6</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Yleiskaapelointi, huoneistojakamo</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_46" id="pilar_filed2_46" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention60" id="coder_attention60">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">6.7</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Yleiskaapelointi, yleisperiaate</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_47" id="pilar_filed2_47" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention61" id="coder_attention61">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">6.8</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Sähkönjakelu ja yleiskaapelointi, työpisteet</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_47" id="pilar_filed2_47" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention62" id="coder_attention62">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">6.9</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Sähkönjakelu ja yleiskaapelointi, neuvotteluhuoneet</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_48" id="pilar_filed2_48" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention63" id="coder_attention63">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">6.10</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Langaton verkko (WLAN)</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#06F9B7]">
                                                                <span class="text-sm text-black">vuokralainen</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#06F9B7]">
                                                                <span class="text-sm text-black">vuokralainen</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#06F9B7]">
                                                                <span class="text-sm text-black">vuokralainen</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_49" id="pilar_filed2_49" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention64" id="coder_attention64">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">6.11</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">AV- ja informaatiojärjestelmät</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#06F9B7]">
                                                                <span class="text-sm text-black">vuokralainen</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#06F9B7]">
                                                                <span class="text-sm text-black">vuokralainen</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#06F9B7]">
                                                                <span class="text-sm text-black">vuokralainen</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_50" id="pilar_filed2_50" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention65" id="coder_attention65">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">6.12</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">AV- ja informaatiojärjestelmät</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#06F9B7]">
                                                                <span class="text-sm text-black">vuokralainen</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#06F9B7]">
                                                                <span class="text-sm text-black">vuokralainen</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#06F9B7]">
                                                                <span class="text-sm text-black">vuokralainen</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_51" id="pilar_filed2_51" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention66" id="coder_attention66">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">6.13</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">UPS-järjestelmät</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#06F9B7]">
                                                                <span class="text-sm text-black">vuokralainen</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#06F9B7]">
                                                                <span class="text-sm text-black">vuokralainen</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#06F9B7]">
                                                                <span class="text-sm text-black">vuokralainen</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_52" id="pilar_filed2_52" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention67" id="coder_attention67">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">6.14</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Ovipuhelinjärjestelmät</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_53" id="pilar_filed2_53" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention68" id="coder_attention68">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">6.15</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Ovipuhelinjärjestelmät</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_54" id="pilar_filed2_54" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention69" id="coder_attention69">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">6.16</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">
                                                                    <input type="text" name="pilar_filed1_10" id="pilar_filed1_10" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä…">
                                                                </span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_55" id="pilar_filed2_55" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä…">
                                                            </td>
                                                        </tr>
                                                        
                                                        <!-- 7 -->
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention70" id="coder_attention70">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">7</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">TURVA-, KULUNVALVONTA- JA LUKITUSJÄRJESTELMÄT</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Hankinta</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Asennus</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Kustannus</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed1_11" id="pilar_filed1_11" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä…">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention71" id="coder_attention71">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">7.1</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Kiinteistön kulunvalvontajärjestelmä ja lukitus</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_56" id="pilar_filed2_56" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention72" id="coder_attention72">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">7.2</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Vuokratilan sisäinen kulunvalvontajärjestelmä ja lukitus</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_57" id="pilar_filed2_57" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention73" id="coder_attention73">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">7.3</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Hätäpoistumistieovi</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#06F9B7]">
                                                                <span class="text-sm text-black">vuokralainen</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#06F9B7]">
                                                                <span class="text-sm text-black">vuokralainen</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#06F9B7]">
                                                                <span class="text-sm text-black">vuokralainen</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_58" id="pilar_filed2_58" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention74" id="coder_attention74">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">7.4</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Turva- ja poistumistievalaistus</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_59" id="pilar_filed2_59" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention75" id="coder_attention75">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">7.5</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Paloilmoitinjärjestelmä</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_60" id="pilar_filed2_60" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention76" id="coder_attention76">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">7.6</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Palonsammutuskalusto</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#00B2A9]">
                                                                <span class="text-sm text-black">vuokranantaja</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_61" id="pilar_filed2_61" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention77" id="coder_attention77">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">7.7</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Vuokratilan rikosilmoitusjärjestelmät</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#06F9B7]">
                                                                <span class="text-sm text-black">vuokralainen</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#06F9B7]">
                                                                <span class="text-sm text-black">vuokralainen</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#06F9B7]">
                                                                <span class="text-sm text-black">vuokralainen</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_62" id="pilar_filed2_62" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention78" id="coder_attention78">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">7.8</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">Sähkönjakelu ja yleiskaapelointi, työpisteet</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line bg-[#06F9B7]">
                                                                <span class="text-sm text-black">vuokralainen</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#06F9B7]">
                                                                <span class="text-sm text-black">vuokralainen</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line bg-[#06F9B7]">
                                                                <span class="text-sm text-black">vuokralainen</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_63" id="pilar_filed2_63" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä… / Katso rakennustapaselostus.">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="coder_attention79" id="coder_attention79">
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">7.9</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <span class="text-sm text-black">
                                                                    <input type="text" name="pilar_filed1_12" id="pilar_filed1_12" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä…">
                                                                </span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line">
                                                                <input type="text" name="pilar_filed2_64" id="pilar_filed2_64" class="shadow-input w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vapaata tekstiä…">
                                                            </td>
                                                        </tr>
                                                        
                                                    </tbody>
                        
                                                    <tfoot>
                                                        <tr>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                            <td class="px-4 py-3 border border-line"></td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
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