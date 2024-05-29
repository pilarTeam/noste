<?php 

if (!is_singular('projektitiedot')) {return;}

$project_id = get_the_ID();
$data = the_form_stored_data();

?>

<section class="py-10">
    <!-- grid View Item -->
    <div class="grid grid-cols-1 gap-4">
        <div class="container">
            <!-- Card Header --><?php echo wp_kses_post(noste_form_header('form')); ?><!-- Card Header -->
            <form action="<?php echo esc_url(get_permalink(get_the_ID())); ?>" method="post" enctype="multipart/form-data" class="ajax-submit">
                <?php wp_nonce_field('project_step_form_validation', 'project_step_form__nonce_field'); ?>
                <input type="hidden" name="ptname" value="<?php echo esc_attr(get_the_ptname()); ?>">
                <input type="hidden" name="action" value="noste_update_project_step">
                <input type="hidden" name="post_id" value="<?php echo esc_attr( $project_id ); ?>">

                
                <!-- Card Body -->
                <div class="px-4 md:px-8 pt-6 pb-10 lg:h-[645px] overflow-y-auto no-scrollbar scroll-smooth">
                    <div class="">
                        <div class="mx-auto max-w-[700px] mb-4">
                            <p class="text-sm text-accent italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K1', true ), 'K1') ); ?></p>
                            <p class="text-sm text-accent italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K4', true ), 'K4') ); ?></p>
                        </div>
                        
                        <h4 class="mb-8 text-[#081F2C] mx-auto max-w-[700px]">RAKENNUSTAPASELOSTUS</h4>
                        <div class="mb-8 mx-auto max-w-[700px]">
                            <div class="flex flex-wrap mb-4">
                                <label class="flex-[3] md:flex-[.7] lg:flex-[.67] mr-4 text-sm font-medium text-black" for="version">Versio:</label>
                                <input class="shadow-input md:ml-5 text-sm border-accent rounded-md text-[#686d70]" type="text" id="version" <?php noste_textinput_attrset('updated_date', $data, gmdate('d.m.Y')); ?> placeholder="xx.xx.xxxx">
                            </div>
    
                            <div class="flex flex-wrap mb-2">
                                <label class="flex-[3] mr-4 text-sm font-medium text-black" for="um_project-manager">Tilaaja:</label>
                                <p class="flex-[3] text-sm text-accent italic" id="um_project-manager"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T1', true ), 'T1') ); ?></p>
                            </div>
                            
                            <div class="flex flex-wrap mb-4">
                                <label class="flex-[3] mr-4 text-sm font-medium text-black" for="author">Laatija:</label>
                                <p class="flex-[3] text-sm text-accent italic" id="author"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P1', true ), 'P1') ); ?>, <span class="text-[#586B74]">Partners at Noste Oy</span></p>
                            </div>
                            
                            <div class="flex flex-wrap mb-4">
                                <label class="flex-[3] mr-4 text-sm font-medium text-black" for="target">Kohde:</label>
                                <p class="flex-[3] text-sm text-accent italic" id="target"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K4', true ), 'K4') ); ?></p>
                            </div>
    
                            <div class="flex flex-wrap mb-4">
                                <label class="flex-[3] mr-4 text-sm font-medium text-black" for="target"></label>
                                <p class="flex-[3] text-sm text-accent italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K1', true ), 'K1') ); ?></p>
                            </div>
                            
                            <div class="flex flex-wrap mb-4">
                                <label class="flex-[3] mr-4 text-sm font-medium text-black" for="target"></label>
                                <p class="flex-[3] text-sm text-accent italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K2', true ), 'K2') ); ?></p>
                            </div>
    
                            <div class="flex flex-wrap mb-4">
                                <label class="flex-[3] mr-4 text-sm font-medium text-black" for="target"></label>
                                <p class="flex-[3] text-sm text-accent italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K3', true ), 'K3') ); ?></p>
                            </div>
                        </div>
    
                        <h4 class="mb-8 text-[#081F2C] mx-auto max-w-[700px]">YLEISTÄ</h4>
    
                        <div class="help_wrap my-10 relative">
                            <div class="max-w-[700px] mx-auto">
                                <div class="flex flex-col lg:flex-row lg:items-center gap-2">
                                    <input type="text" <?php noste_textinput_attrset('yleista', $data, ''); ?> class="shadow-input inline-block max-w-full w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" placeholder="Kuvaus muutosten laajuudesta yleisellä tasolla...">
                                    <a href="#!" class="help_click">
                                        <svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g stroke-width="0"></g>
                                            <g stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g>
                                                <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path>
                                                <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                            </g>
                                        </svg> </a>
                            
                                    <hr class="help_line hidden w-full lg:w-[0px] border border-solid border-[#E1E1EA]">
                                </div>
                            </div>
                        
                            <div class="help_show hidden text-[#586B74] text-[14px] lg:w-[240px] 2xl:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px]">
                                Esittelykappaleeseen avataan tehtävien töiden luonnetta, eli ollaanko tekemässä kuinka mittavia muutoksia. Esim:<br> -Vasta valmistuvan toimistotalon muokkaukset uudelle toimijalle.<br> - Olevan toimistorakennuksen muokkaaminen kokonaisvaltaisesti uuden toimijan käyttöön<br> - Olevan tilan toimintojen parantaminen olevalle toimijalle<br> - Olevan tilan laajentaminen olevalle toimijalle jne.<br><br> Näin seuraavista kappaleista lukija saa enemmän irti ja paremman käsityksen, siitä mitä ollaan tekemässä. Pyri välttämän sanamuotoja, jotka saavat tilan näyttämään huonolta <br><br> Viittaa lopuksi suunnitelmiin, jos niitä o, ristiriitaisuuksien välttämiseksi.
                            </div>
                        </div>
    
                        <div class="max-w-[700px] mx-auto flex items-center gap-2">
                            <ul class="list-none w-full">
                                <li class="mb-10">
                                    <label class="flex items-center text-md md:text-lg mb-5" for="suunnittelu_agree">
                                        <span class="font-bold mr-5">1.</span>
                                        <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="suunnittelu_agree[1]" id="suunnittelu_agree" <?php echo esc_attr( noste_checked_with_array( noste_check_array_data( $data, 'suunnittelu_agree' ), 'on' ) ); ?>>
                                        SUUNNITTELU
                                    </label>
                                    <textarea class="shadow-input inline-block max-w-full w-full border border-solid border-[#06F9B7] rounded-[5px] p-4" id="suunnittelu" name="suunnittelu" rows="2"><?php echo esc_textarea( noste_check_array_data( $data, 'suunnittelu' ) ); ?></textarea>
                                </li>
                                
                                <li class="mb-10">
                                    <label class="flex items-center text-md md:text-lg mb-5" for="tilajakoosat_agree">
                                        <span class="font-bold mr-5">2.</span>
                                        <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="tilajakoosat_agree[1]" id="tilajakoosat_agree" <?php echo esc_attr( noste_checked_with_array( noste_check_array_data( $data, 'tilajakoosat_agree' ), 'on' ) ); ?>>
                                        TILAJAKO-OSAT
                                    </label>
                                    <textarea class="shadow-input inline-block max-w-full w-full border border-solid border-[#06F9B7] rounded-[5px] p-4" id="tilajako-osat" name="tilajako_osat" rows="22"><?php echo esc_textarea( noste_check_array_data( $data, 'tilajako_osat' ) ); ?></textarea>
                                </li>
                                
                                <li class="mb-10">
                                    <label class="flex items-center text-md md:text-lg mb-5" for="tilapinnat_agree">
                                        <span class="font-bold mr-5">3.</span>
                                        <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="tilapinnat_agree[1]" id="tilapinnat_agree" <?php echo esc_attr( noste_checked_with_array( noste_check_array_data( $data, 'tilapinnat_agree' ), 'on' ) ); ?>>
                                        TILAPINNAT
                                    </label>
                                    <textarea class="shadow-input inline-block max-w-full w-full border border-solid border-[#06F9B7] rounded-[5px] p-4" id="tilapinnat" name="tilapinnat" rows="20"><?php echo esc_textarea( noste_check_array_data( $data, 'tilapinnat' ) ); ?></textarea>
                                </li>
                                
                                <li class="mb-10">
                                    <label class="flex items-center text-md md:text-lg mb-5" for="kalusteetjavarusteet_agree">
                                        <span class="font-bold mr-5">4.</span>
                                        <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="kalusteetjavarusteet_agree[4]" id="kalusteetjavarusteet_agree" <?php echo esc_attr( noste_checked_with_array( noste_check_array_data( $data, 'kalusteetjavarusteet_agree' ), 'on' ) ); ?>>
                                        KALUSTEET JA VARUSTEET
                                    </label>
                                    <textarea class="shadow-input inline-block max-w-full w-full border border-solid border-[#06F9B7] rounded-[5px] p-4" id="kalusteet-ja-varusteet" name="kalusteetjavarusteet" rows="20"><?php echo esc_textarea( noste_check_array_data( $data, 'kalusteetjavarusteet' ) ); ?></textarea>
                                </li>
                                
                                <li class="mb-10">
                                    <label class="flex items-center text-md md:text-lg mb-5" for="lviajarjestelmat_agree">
                                        <span class="font-bold mr-5">5.</span>
                                        <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="lviajarjestelmat_agree[1]" id="lviajarjestelmat_agree" <?php echo esc_attr( noste_checked_with_array( noste_check_array_data( $data, 'lviajarjestelmat_agree' ), 'on' ) ); ?>>
                                        LVIA-JÄRJESTELMÄT
                                    </label>
                                    <textarea class="shadow-input inline-block max-w-full w-full border border-solid border-[#06F9B7] rounded-[5px] p-4" id="lvia_jarjestelmat" name="lvia_jarjestelmat" rows="25"><?php echo esc_textarea( noste_check_array_data( $data, 'lvia_jarjestelmat' ) ); ?></textarea>
                                </li>
                                
                                <li class="mb-10">
                                    <label class="flex items-center text-md md:text-lg mb-5" for="sahkoja_agree">
                                        <span class="font-bold mr-5">6.</span>
                                        <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="sahkoja_agree[1]" id="sahkoja_agree" <?php echo esc_attr( noste_checked_with_array( noste_check_array_data( $data, 'sahkoja_agree' ), 'on' ) ); ?>>
                                        SÄHKÖ- JA YLEISKAAPELOINTIJÄRJESTELMÄT
                                    </label>
                                    <textarea class="shadow-input inline-block max-w-full w-full border border-solid border-[#06F9B7] rounded-[5px] p-4" id="sähkö-ja" name="sahkoja" rows="45"><?php echo esc_textarea( noste_check_array_data( $data, 'sahkoja' ) ); ?></textarea>
                                </li>
                                
                                <li class="mb-10">
                                    <label class="flex items-center text-md md:text-lg mb-5" for="kulunvalvontaja_agree">
                                        <span class="font-bold mr-5">7.</span>
                                        <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="kulunvalvontaja_agree[1]" id="kulunvalvontaja_agree" <?php echo esc_attr( noste_checked_with_array( noste_check_array_data( $data, 'kulunvalvontaja_agree' ), 'on' ) ); ?>>
                                        TURVA-, KULUNVALVONTA- JA LUKITUSJÄRJESTELMÄT
                                    </label>
                                    <textarea class="shadow-input inline-block max-w-full w-full border border-solid border-[#06F9B7] rounded-[5px] p-4" id="kulunvalvonta-ja" name="kulunvalvontaja" rows="18"><?php echo esc_textarea( noste_check_array_data( $data, 'kulunvalvontaja' ) ); ?></textarea>
                                </li>
    
                                <li class="mb-10">
                                    <label class="flex items-center text-md md:text-lg mb-5" for="vuokralaisenhankinnat_agree">
                                        <span class="font-bold mr-5">8.</span>
                                        <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="vuokralaisenhankinnat_agree[1]" id="vuokralaisenhankinnat_agree" <?php echo esc_attr( noste_checked_with_array( noste_check_array_data( $data, 'vuokralaisenhankinnat_agree' ), 'on' ) ); ?>>
                                        VUOKRALAISEN HANKINNAT
                                    </label>
                                    <textarea class="shadow-input inline-block max-w-full w-full border border-solid border-[#06F9B7] rounded-[5px] p-4" id="vuokralaisen-hankinnat" name="vuokralaisenhankinnat" rows="18"><?php echo esc_textarea( noste_check_array_data( $data, 'vuokralaisenhankinnat' ) ); ?></textarea>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <!-- Card footer --><?php echo wp_kses_post(noste_form_footer('form')); ?><!-- Card footer -->
            </form>
        </div>
    </div>
</section>