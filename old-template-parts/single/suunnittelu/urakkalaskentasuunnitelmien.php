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
            <div class="card_item relative h-fit overflow-hidden">
                <!-- Card Header --><?php echo wp_kses_post(noste_form_header('form')); ?><!-- Card Header -->
                
                <form action="<?php echo esc_url( get_permalink( get_the_ID() ) ); ?>" method="post" enctype="multipart/form-data" class="ajax-submit">
                    <?php wp_nonce_field('project_step_form_validation', 'project_step_form__nonce_field'); ?>
                    <input type="hidden" name="ptname" value="<?php echo esc_attr(implode('_', ['noste', $_GET['tm'], $_GET['tmin']])); ?>">
                    <input type="hidden" name="action" value="noste_update_project_step">
                    <input type="hidden" name="post_id" value="<?php echo esc_attr( $project_id ); ?>">
                    
                    <!-- Card Body -->
                    <div class="px-4 md:px-8 pt-6 pb-10 lg:h-[645px] overflow-y-auto no-scrollbar scroll-smooth">
                        
                        <div class="max-w-[700px] mx-auto mt-20 mb-20">
                            <div class="mb-[30px]">
                                <span class="font-medium italic text-[#00B2A9] block"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K1', true ), 'K1') ); ?></span>
                                <span class="font-medium italic text-[#00B2A9] block"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K4', true ), 'K4') ); ?></span>
                            </div>

                            <div class="mb-[30px]">
                                <h1 class="text-black text-[25px] font-medium mb-4">URAKKANEUVOTTELU</h1>
                                <h2 class="text-black text-[20px] font-medium">ASIALISTA/PÖYTÄKIRJA</h2>
                            </div>

                            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[20px] mb-5">
                                <span class="text-[#586B74]">Aika ja paikka</span>
                                <span class="text-[#586B74]">
                                    <div class="flex flex-col lg:flex-row lg:items-center gap-2">
                                        <span class="flex-1 ">
                                            <input type="text" name="pilar_VA1" placeholder="XX.XX.XXXX" class="w-full lg:w-[119px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                        </span>
                                        <span class="flex-1 text-[#586B74] text-[15px]">klo</span>
                                        <span class="flex-1 ">
                                            <input type="text" name="pilar_VA1" placeholder="XX.XX.XXXX" class="w-full lg:w-[68px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                        </span>
                                    </div>
                                </span>
                                
                                <span>
                                    <input type="text" name="pilar_M1" placeholder="Vapaa teksti" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </span>
                            </div>

                            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[20px] mb-5">
                                <span class="text-[#586B74]">Läsnä</span>
                                <span class="text-[#586B74]">
                                    <div class="flex items-center gap-3">
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_U4', true ), 'U4') ); ?></span>
                                    </div>
                                </span>
                                
                                <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_U1', true ), 'U1') ); ?></span>
                            </div>

                            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[20px] mb-5">
                                <span class=""></span>
                                <span class="text-[#586B74]">
                                    <div class="flex items-center gap-3">
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_U7', true ), 'U7') ); ?></span>
                                    </div>
                                </span>
                                
                                <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_U1', true ), 'U1') ); ?></span>
                            </div>

                            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[20px] mb-5">
                                <span class=""></span>
                                <span class="text-[#586B74]">
                                    <div class="flex items-center gap-3">
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <input type="text" name="pilar_filed8_6" placeholder="Vapaa teksti" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </div>
                                </span>
                                
                                <span>
                                    <input type="text" name="pilar_filed8_6" placeholder="Vapaa teksti" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </span>
                            </div>

                            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[20px] mb-5">
                                <span class=""></span>
                                <span class="text-[#586B74]">
                                    <div class="flex items-center gap-3">
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P1', true ), 'P1') ); ?></span>
                                    </div>
                                </span>
                                
                                <span class="text-[#586B74]">Partners at Noste Oy</span>
                            </div>

                            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[20px] mb-5">
                                <span class=""></span>
                                <span class="text-[#586B74]">
                                    <div class="flex items-center gap-3">
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P4', true ), 'P4') ); ?></span>
                                    </div>
                                </span>
                                
                                <span class="text-[#586B74]">Partners at Noste Oy</span>
                            </div>

                        </div>
                        
                        <div class="max-w-[700px] mx-auto">
                            <h3 class="flex gap-20 text-black text-[20px] font-medium">
                                <span>1.</span> 
                                <span>KOKOUKSEN AVAUS JA JÄRJESTÄYTYMINEN</span>
                            </h3>

                            <div class="flex flex-col lg:flex-row lg:items-center gap-2 mt-5">
                                <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                        <span class="flex-1 text-[14px] italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P1', true ), 'P1') ); ?></span>
                                    </label>
                                </span>
                                <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                        <span class="flex-1 text-[14px] italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P4', true ), 'P4') ); ?></span>
                                    </label>
                                </span>
                                <span class="text-[#586B74] text-[14px]">toivotti läsnäolijat tervetulleiksi työmaan aloituskokoukseen.</span>
                            </div>

                            <div class="flex flex-col flex-wrap lg:flex-row lg:items-center gap-2 mt-1">
                                <span class="text-[#586B74] text-[14px]">Kokouksen puheenjohtajana toimii</span>
                                <span class="text-[#586B74] text-[14px] inline-flex gap-1">
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                        <span class="flex-1 text-[14px] italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P1', true ), 'P1') ); ?></span>
                                    </label>
                                </span>
                                <span class="text-[#586B74] text-[14px] inline-flex gap-1">
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                        <span class="flex-1 text-[14px] italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P4', true ), 'P4') ); ?></span>
                                    </label>
                                </span>
                                <span class="text-[#586B74] text-[14px]">/ Partners at Noste Oy ja sihteerinä</span>
                                <span class="text-[#586B74] text-[14px] inline-flex gap-1">
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                        <span class="flex-1 text-[14px] italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P1', true ), 'P1') ); ?></span>
                                    </label>
                                </span>
                                <span class="text-[#586B74] text-[14px] inline-flex gap-1">
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                        <span class="flex-1 text-[14px] italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P4', true ), 'P4') ); ?></span>
                                    </label>
                                </span>
                                <span class="text-[#586B74] text-[14px]">/ Partners at Noste Oy. Puheenjohtaja avasi kokouksen.</span>
                            </div>
                        </div>

                        <div class="help_wrap mt-10 mb-5 relative">
                            <div class="max-w-[700px] mx-auto flex items-center gap-2">
                                <h3 class="flex gap-20 text-black text-[20px] font-medium min-w-[295px]">
                                    <span>2.</span> 
                                    <span>HANKKEEN ESITTELY</span>
                                </h3>

                                <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                                
                                <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                            </div>

                            <div class="help_show text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                Kohteen lyhyt kuvaus tarjouspyyntökirjeen mukaisesti.
                            </div>
                        </div>

                        <div class="max-w-[700px] mx-auto">
                            <div class="flex flex-col flex-wrap lg:flex-row lg:items-center gap-2 mt-1">
                                <span class="text-[#586B74] text-[14px]">
                                    Tämä urakkaneuvottelu koskee osoitteessa <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K2', true ), 'K2') ); ?></span>, <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K3', true ), 'K3') ); ?></span> sijaitsevan
                                </span>
                                <span class="text-[#586B74] text-[14px]">
                                    <input type="text" name="pilar_filed8_6_4" value="toimistorakennuksen x. krs tilamuutostöistä " class="w-[290px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </span>
                                <span class="text-[#586B74] text-[14px]">
                                    tehtyä tarjouspyyntöä, tarjousta ja niiden sisältöä. Töiden laajuus on esitetty tarjouspyyntöasiakirjoissa.
                                </span>
                            </div>
                        </div>

                        <div class="max-w-[700px] mx-auto mt-10">
                            <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                <span>3. </span> 
                                <span>HANKKEEN URAKKAMUOTO JA SUORITUSVELVOLLISUUS</span>
                            </h3>

                            <p class="text-[#586B74] text-[14px] leading-7">Urakkamuotona on kiinteähintainen kokonaisurakka, jossa valittu rakennustöiden urakoitsija toimii pääurakoitsijana ja lainsäädännön tarkoittamana päätoteuttajana. Kohteen kaikki tarjouspyyntöasiakirjojen mukaiset velvoitteet ja työt materiaaleineen, laitteineen ja hankintoineen sekä toimenpiteet, jotka tarvitaan kohteen saattamiseksi täysin valmiiksi sisältyvät kokonaisurakkaan.</p>
                        </div>

                        <div class="max-w-[700px] mx-auto mt-10">
                            <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                <span>4. </span> 
                                <span>NEUVOTTELUJEN TARKOITUS</span>
                            </h3>

                            <p class="text-[#586B74] text-[14px] leading-7">Neuvottelun tarkoitus on tarjouspyyntöasiakirjojen ja tarjouksen läpikäynti sekä hankkeen sisällön tarkentaminen. Kokouksesta laaditaan pöytäkirja, joka liitetään mahdolliseen urakkasopimukseen liitteeksi 1, jota rinnastetaan pätevyysjärjestyksessä.</p>
                            <p class="text-[#586B74] text-[14px] leading-7">Urakkasopimukseen päätymisestä sovitaan erikseen.</p>
                            <p class="text-[#283B44] text-[14px] leading-7"> <span class="inline-block mr-5">-</span> <b>Tilauksen katsotaan syntyneen vasta, kun Tilaaja tai Tilaajan edustaja on ilmoittanut asiasta kirjallisesti urakoitsijalle.</b></p>
                            <p class="text-[#283B44] text-[14px] leading-7"> <span class="inline-block mr-5">-</span> <b>Kirjalliseksi ilmoitukseksi käy esimerkiksi sähköposti.</b></p>
                        </div>

                        <div class="max-w-[700px] mx-auto mt-10">
                            <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                <span>5. </span> 
                                <span>TARJOUSPYYNTÖASIAKIRJAT</span>
                            </h3>

                            <p class="text-[#586B74] text-[14px] leading-7 mb-8">Urakoitsijalle on toimitettu seuraavat asiakirjat.</p>
                        
                            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[20px] mb-5">
                                <span class="text-[#586B74] font-medium">Kaupalliset asiakirjat</span>
                                <span class="text-[#586B74] font-medium">Tekijä</span>
                                <span class="text-[#586B74] font-medium">Asiakirjan päiväys</span>
                            </div>
                            <div class="grid lg:grid-cols-3 items-center gap-[20px] mb-5">
                                <span class="text-[#586B74]">Tarjouspyyntökirje</span>
                                <span class="text-[#586B74]">Partners at Noste Oy</span>
                                
                                <div class="help_wrap relative mb-2">
                                    <div class="flex items-center gap-2">
                                        <span class="text-[#586B74]">
                                            <input type="text" name="pilar_VA1" placeholder="XX.XX.XXXX" class="w-full lg:w-[119px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                        </span>
                
                                        <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                                    </div>
                
                                    <div class="help_show text-[#586B74] text-[14px] lg:w-[250px] 2xl:w-[284px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:ml-[15px] lg:left-[100%] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                        <hr class="inline-block absolute right-[100%] top-[31px] w-[91px] border border-solid border-[#E1E1EA]">
                                        <span>Kopioi tähän tarjouspyyntökirjeessä ja mahdollisissa lisäkirjeissä olevat päivämäärät ja suunnitelmat</span>
                                    </div>
                                </div>
                            </div>
                            <div class="grid lg:grid-cols-3 items-center gap-[20px] mb-5">
                                <span class="text-[#586B74]">Tarjouspyyntölomake</span>
                                <span class="text-[#586B74]">Partners at Noste Oy</span>
                                <span class="text-[#586B74]">
                                    <input type="text" name="pilar_VA1" placeholder="XX.XX.XXXX" class="w-full lg:w-[119px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </span>
                            </div>
                            <div class="grid lg:grid-cols-3 items-center gap-[20px] mb-5">
                                <span class="text-[#586B74]">Turvallisuusasiakirja</span>
                                <span class="text-[#586B74]">Partners at Noste Oy</span>
                                <span class="text-[#586B74]">
                                    <input type="text" name="pilar_VA1" placeholder="XX.XX.XXXX" class="w-full lg:w-[119px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </span>
                            </div>
                            <div class="grid lg:grid-cols-3 items-center gap-[20px] mb-5">
                                <span class="text-[#586B74]">Urakkasopimusluonnos</span>
                                <span class="text-[#586B74]">Partners at Noste Oy</span>
                                <span class="text-[#586B74]">
                                    <input type="text" name="pilar_VA1" placeholder="XX.XX.XXXX" class="w-full lg:w-[119px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </span>
                            </div>
                            <div class="grid lg:grid-cols-3 items-center gap-[20px] mb-5">
                                <span class="text-[#586B74]">
                                    <div class="flex items-center gap-3">
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <input type="text" name="pilar_filed8_6" placeholder="Muu" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </div>
                                </span>
                                <span class="text-[#586B74]">
                                    <input type="text" name="pilar_M1" placeholder="__" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </span>
                                <span class="text-[#586B74]">
                                    <input type="text" name="pilar_VA1" placeholder="XX.XX.XXXX" class="w-full lg:w-[119px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </span>
                            </div>

                            <div class="grid lg:grid-cols-3 items-center gap-[20px] mb-5 mt-10">
                                <span class="text-[#586B74] font-medium">Tekniset asiakirjat</span>
                                <span class="text-[#586B74] font-medium">Tekijä</span>
                                <span class="text-[#586B74] font-medium">Asiakirjan päiväys</span>
                            </div>
                            <div class="grid lg:grid-cols-3 items-center gap-[20px] mb-5">
                                <span class="text-[#586B74]"><span class="flex-1 h-[1px] bg-[#94969C] inline-block w-full"></span></span>
                                <span class="text-[#586B74]"><span class="flex-1 h-[1px] bg-[#94969C] inline-block w-full"></span></span>
                                <span class="text-[#586B74]">
                                    <input type="text" name="pilar_VA1" placeholder="XX.XX.XXXX" class="w-full lg:w-[119px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </span>
                            </div>
                            <div class="grid lg:grid-cols-3 items-center gap-[20px] mb-5">
                                <span class="text-[#586B74]">
                                    <div class="flex items-center gap-3">
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <span class="text-[#586B74]">Rakennustapaselostus</span>
                                    </div>
                                </span>
                                <span class="text-[#586B74]">Partners at Noste Oy</span>
                                <span class="text-[#586B74]">
                                    <input type="text" name="pilar_VA1" placeholder="XX.XX.XXXX" class="w-full lg:w-[119px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </span>
                            </div>
                            <div class="grid lg:grid-cols-3 items-center gap-[20px] mb-5">
                                <span class="text-[#586B74]">
                                    <div class="flex items-center gap-3">
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <input type="text" name="pilar_filed8_6" placeholder="Muu__" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </div>
                                </span>
                                <span class="text-[#586B74]">
                                    <input type="text" name="pilar_M1" placeholder="__" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </span>
                                <span class="text-[#586B74]">
                                    <input type="text" name="pilar_VA1" placeholder="XX.XX.XXXX" class="w-full lg:w-[119px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </span>
                            </div>
                            <div class="flex items-center gap-3 mt-10">
                                <label class="inline-flex items-center gap-2 cursor-pointer">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                </label>
                                <span class="text-[#586B74]">Lisäksi lisäkirjeillä on toimitettu seuraavat asiakirjat.</span>
                            </div>

                            <div class="grid lg:grid-cols-3 items-center gap-[20px] mb-5 mt-10">
                                <span class="text-[#586B74] font-medium">Kaupalliset asiakirjat</span>
                                <span class="text-[#586B74] font-medium">Tekijä</span>
                                <span class="text-[#586B74] font-medium">Asiakirjan päiväys</span>
                            </div>
                            <div class="grid lg:grid-cols-3 items-center gap-[20px] mb-5">
                                <span class="text-[#586B74]">
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K17">
                                        <span class="flex-1 text-[#586B74] text-[14px]">Lisäkirje 1</span>
                                    </label>
                                </span>
                                <span class="text-[#586B74]">Partners at Noste Oy</span>
                                <span class="text-[#586B74]">
                                    <input type="text" name="pilar_VA1" placeholder="XX.XX.XXXX" class="w-full lg:w-[119px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </span>
                            </div>
                            <div class="grid lg:grid-cols-3 items-center gap-[20px] mb-5">
                                <span class="text-[#586B74]">
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K17">
                                        <span class="flex-1 text-[#586B74] text-[14px]">Lisäkirje 2</span>
                                    </label>
                                </span>
                                <span class="text-[#586B74]">Partners at Noste Oy</span>
                                <span class="text-[#586B74]">
                                    <input type="text" name="pilar_VA1" placeholder="XX.XX.XXXX" class="w-full lg:w-[119px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </span>
                            </div>
                            <div class="grid lg:grid-cols-3 items-center gap-[20px] mb-5">
                                <span class="text-[#586B74]">
                                    <div class="flex items-center gap-3">
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <input type="text" name="pilar_filed8_6" placeholder="Muu__" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </div>
                                </span>
                                <span class="text-[#586B74]">
                                    <input type="text" name="pilar_M1" placeholder="__" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </span>
                                <span class="text-[#586B74]">
                                    <input type="text" name="pilar_VA1" placeholder="XX.XX.XXXX" class="w-full lg:w-[119px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </span>
                            </div>
                            
                            <div class="grid lg:grid-cols-3 items-center gap-[20px] mb-5 mt-10">
                                <span class="text-[#586B74] font-medium">Tekniset asiakirjat</span>
                                <span class="text-[#586B74] font-medium">Tekijä</span>
                                <span class="text-[#586B74] font-medium">Asiakirjan päiväys</span>
                            </div>
                            <div class="grid lg:grid-cols-3 items-center gap-[20px] mb-5">
                                <span class="text-[#586B74]">
                                    <div class="flex items-center gap-3">
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <input type="text" name="pilar_filed8_6" placeholder="Vapaa teksti" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </div>
                                </span>
                                <span class="text-[#586B74]">
                                    <input type="text" name="pilar_M1" placeholder="Vapaa teksti" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </span>
                                <span class="text-[#586B74]">
                                    <input type="text" name="pilar_VA1" placeholder="XX.XX.XXXX" class="w-full lg:w-[119px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </span>
                            </div>

                            <p class="text-[#586B74] font-bold my-10">Urakoitsija totesi, että on vastaanottanut kaikki edellä mainitut asiakirjat.</p>
                        </div>

                        <div class="max-w-[700px] mx-auto mt-10">
                            <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                <span>6.</span> 
                                <span>TARJOUS</span>
                            </h3>

                            <div class="flex flex-col flex-wrap lg:flex-row lg:items-center gap-2 mt-1">
                                <span class="text-[#586B74]">
                                    Urakoitsija on toimittanut tarjouksensa
                                </span>
                                <span class="text-[#586B74]">
                                    <input type="text" name="pilar_filed8_6_4" placeholder="xx.xx.xxxx." class="w-[150px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </span>
                            </div>

                            <div class="flex items-start gap-3 mt-3">
                                <label class="inline-flex items-center gap-2 cursor-pointer mt-[5px]">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                </label>
                                <span class="text-[#586B74]">Ennen tarjouksen toimittamista urakoitsija on tutustunut kohteeseen ja sen olosuhteisiin paikan päällä sekä tutustunut tarjouspyynnön mukana tulleisiin tarjouspyyntöasiakirjoihin.</span>
                            </div>

                            <div class="flex lg:items-end flex-col lg:flex-row gap-4 mt-3">
                                <p class="text-[#586B74]">Tarjouksen mukainen kiinteä urakkasumma on yhteensä</p>
                                <span class="text-[#586B74]"><span class="flex-1 h-[1px] bg-[#94969C] inline-block w-[200px]"></span></span>
                                <p class="text-[#586B74]"> € (alv. 0</p>
                            </div>

                            <div class="flex items-start gap-3 mt-3">
                                <label class="inline-flex items-center gap-2 cursor-pointer mt-[5px]">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                </label>
                                <span class="text-[#586B74]">Urakoitsija on laatinut tarjouksen rakennuttajan toimittamalle lomakkeelle ja eritellyt tarjouksensa tarjouspyyntölomakkeen mukaisesti.</span>
                            </div>

                            <div class="flex items-start gap-3 mt-3">
                                <label class="inline-flex items-center gap-2 cursor-pointer mt-[5px]">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                </label>
                                <span class="text-[#586B74]">Urakoitsija on laatinut tarjouksen rakennuttajan toimittamalle lomakkeelle ja eritellyt tarjouksensa tarjouspyyntölomakkeen mukaisesti seuraavin poikkeuksin:</span>
                            </div>

                            <div class="flex items-center gap-3 ml-[150px] mt-3">
                                <label class="inline-flex items-center gap-2 cursor-pointer">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                </label>
                                <input type="text" name="pilar_filed8_6" placeholder="Esim. sähköpurkutöitä ja LVIA‐purkutöitä ei ole eritelty sähkötöistä ja LVIA‐töistä.]" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                            </div>
                            <div class="flex items-center gap-3 ml-[150px] mt-3">
                                <label class="inline-flex items-center gap-2 cursor-pointer">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                </label>
                                <input type="text" name="pilar_filed8_6" placeholder="Vapaa teksti" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                            </div>

                            <p class="text-[#586B74] mt-3">Tarjouksen poikkeamat ja mahdolliset erityisehdot:</p>
                            
                            <div class="flex flex-col lg:flex-row items-start gap-3 mt-3 ml-[150px]">
                                <label class="inline-flex items-center gap-2 cursor-pointer mt-[5px]">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                </label>
                                <span class="text-[#586B74]">Urakoitsijan tarjoukseen ei liity poikkeamia tai erityisiä ehtoja verrattuna tarjouspyyntöön.</span>
                            </div>

                            <div class="flex items-center gap-3 ml-[150px] mt-[60px]">
                                <label class="inline-flex items-center gap-2 cursor-pointer">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                </label>
                                <input type="text" name="pilar_filed8_6" placeholder="Vapaa teksti" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                            </div>
                            
                            <div class="flex items-center gap-3 mt-5">
                                <label class="inline-flex items-center gap-2 cursor-pointer">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                </label>
                                <input type="text" name="pilar_filed8_6" placeholder="Vapaa teksti" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                
                                <div class="help_wrap relative mb-2 mr-[-30px]">
                                    <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                                    
                                    <div class="help_show text-[#586B74] text-[14px] lg:w-[250px] 2xl:w-[284px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:ml-[15px] lg:left-[100%] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                        <hr class="inline-block absolute right-[100%] top-[40px] w-[19px] border border-solid border-[#E1E1EA]">
                                        <span>Kopioi tähän tarjouspyyntökirjeessä ja mahdollisissa lisäkirjeissä olevat päivämäärät ja suunnitelmat</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="max-w-[700px] mx-auto mt-10">
                            <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                <span>7. </span> 
                                <span>TÄSMENNYKSET URAKAN SISÄLTÖÖN</span>
                            </h3>
                        </div>

                        <div class="help_wrap mt-10 mb-5 relative">
                            <div class="max-w-[700px] mx-auto flex items-center gap-2">
                                <p class="flex gap-10 italic text-[#00B2A9] font-medium">
                                    <span>1. </span> 
                                    <span><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_TY1', true ), 'TY1') ); ?></span>
                                </p>

                                <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                                
                                <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                            </div>

                            <div class="help_show text-[#586B74] text-[14px] lg:w-[380px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[-15px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                Tässä vaiheessa urakkaa olet tutustunut materiaaliin, ohjeistanut suunnittelijaa ja tarkastanut suunnitelmat. Aina kaikki tarpeellinen ei kuitenkaan ole päätynyt tarjouspyyntöaineistoon (suunnitelmat, lisäkirjeet jne.) asti. 
                                <br>
                                <br>
                                Kirjaa tähän asiat, joissa mielestäsi on epäselvyyttä tai on tullut muutoksia tarjouspyyntöasiakirjoihin nähden. Huom! Mikäli muutoksia ei ole kirjaa: ”Tarjouspyyntöaineiston mukaan” , jolloin epäselvissä tilanteissa voitte tulkita suunnitelmia sen sijaan, että tieto olisi hajanaisena eri paikoissa. Näin vältytään myös ristiriidoilta. 
                                <br>
                                <br>
                                Muista, että urakkaneuvottelupöytäkirjaa rinnastetaan liitteenä 1, joten kaikkea voi vielä muuttaa. 
                                <br>
                                <br>
                                Lasiseinien, keittiöiden ja muiden suurempien hankintojen osalta varmista kenen tuotteilla tarjous on jätetty ja millaisia toimitusaikoja tuotteilla on.                        
                            </div>
                        </div>
                        
                        <div class="max-w-[700px] mx-auto mt-3">
                            <div class="flex items-center gap-3 ml-[57px]">
                                <label class="inline-flex items-center gap-2 cursor-pointer">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                </label>
                                <input type="text" name="pilar_filed8_6" placeholder="Vapaa teksti" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                            </div>
                        </div>

                        <div class="max-w-[700px] mx-auto mt-10">
                            <p class="flex gap-10 italic text-[#00B2A9] font-medium">
                                <span>2. </span> 
                                <span>TYX</span>
                            </p>
                            <div class="flex items-center gap-3 ml-[57px] mt-3">
                                <label class="inline-flex items-center gap-2 cursor-pointer">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                </label>
                                <input type="text" name="pilar_filed8_6" placeholder="Vapaa teksti" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                            </div>
                            <div class="flex items-center gap-3 mt-5">
                                <label class="inline-flex items-center gap-2 cursor-pointer">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                </label>
                                <input type="text" name="pilar_filed8_6" placeholder="Vapaa teksti" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                            </div>
                        </div>

                        <div class="max-w-[700px] mx-auto mt-10">
                            <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                <span>8. </span> 
                                <span>OPTIOT</span>
                            </h3>

                            <div class="flex items-start gap-3 mt-3">
                                <label class="inline-flex items-center gap-2 cursor-pointer mt-[5px]">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                </label>
                                <span class="text-[#586B74]">Option mukainen työ ei sisälly kiinteään kokonaishintaan, vaan optio on tarjottu erillisenä työnä. Optiohinta on ilmoitettu työsuorituksen tekemisestä täysin valmiiseen tasoon kaikki liittyvät työt huomioituna.</span>
                            </div>

                            <div class="mt-4 flex items-center gap-3">
                                <div class="flex items-center gap-3">
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        
                                        <span class="text-[#283B44] font-medium">OPTIO</span>
                                    </label>
                                </div>

                                <input type="text" name="pilar_M1" placeholder="nro." class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[70px] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                <input type="text" name="pilar_M1" placeholder="Aihe" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[100px] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                <input type="text" name="pilar_M1" placeholder="tarjous" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[120px] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                            </div>

                            <div class="flex items-center gap-3 mt-5 ml-[150px]">
                                <label class="inline-flex items-center gap-2 cursor-pointer">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                </label>
                                <input type="text" name="pilar_filed8_6" placeholder="Vapaa teksti" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                
                                <div class="help_wrap relative mb-2 mr-[-30px]">
                                    <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                                    
                                    <div class="help_show text-[#586B74] text-[14px] lg:w-[250px] 2xl:w-[284px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:ml-[15px] lg:left-[100%] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                        <hr class="inline-block absolute right-[100%] top-[40px] w-[19px] border border-solid border-[#E1E1EA]">
                                        <span>Tähän kirjaukset, mikäli option hintaan, aikatauluun tms. liittyy jotain kirjattavaa.</span>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center gap-3 mt-4">
                                <label class="inline-flex items-center gap-2 cursor-pointer">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                    
                                    <span class="text-[#586B74]">Urakkasuoritukseen ei liity optiotöitä.</span>
                                </label>
                            </div>
                        </div>

                        <div class="max-w-[700px] mx-auto mt-10">
                            <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                <span>9. </span> 
                                <span>URAKOITSIJAN TOTEUTUSORGANISAATIO</span>
                            </h3>

                            <p class="text-[#586B74] text-[15px]">Päätoteuttaja: <span class="italic text-[#00B2A9] inline-block ml-3"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_U1', true ), 'U1') ); ?></span></p>
                            <p class="text-[#586B74] text-[15px] m-3">Organisaatio:</p>
                            <p class="text-[#586B74] text-[15px]"><span class="inline-block mr-10">-</span> Vastaava työnjohtaja <span class="italic text-[#00B2A9] inline-block ml-1"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_U7', true ), 'U7') ); ?></span>,</p>
                            
                            <div class="text-[#586B74] text-[15px] flex items-center gap-10 mt-3">
                                <span class="inline-block">-</span> 
                                
                                <div class="flex items-center gap-3 flex-1">
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        
                                        <span class="text-[#586B74]">TATE-työnjohtajat</span>
                                    </label>

                                    <input type="text" name="pilar_filed8_6" placeholder="Vapaa teksti" class="flex-1 w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </div>
                            </div>
                            <div class="flex items-center gap-3 mt-5">
                                <label class="inline-flex items-center gap-2 cursor-pointer">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                </label>
                                <input type="text" name="pilar_filed8_6" placeholder="Vapaa teksti" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                            </div>
                        </div>

                        <div class="max-w-[700px] mx-auto mt-10">
                            <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                <span>10. </span> 
                                <span>VIRANOMAISASIAT</span>
                            </h3>

                            <p class="text-[#586B74] text-[14px] leading-7">Rakennuslupaa ei tarvita. <br> Työsuoritukseen liittyvien ilmoitusten ja lupien tekemisestä/hankkimisesta vastaa pääurakoitsija.</p>
                        </div>

                        <div class="max-w-[700px] mx-auto mt-10">
                            <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                <span>11. </span> 
                                <span>AIKATAULU</span>
                            </h3>

                            <p class="text-[#283B44 font-medium my-3">Urakka-aika</p>

                            <div class="flex flex-col flex-wrap lg:flex-row lg:items-center gap-2 mt-5">
                                <span class="text-[#586B74] text-[15px]">Urakka alkaa</span>
                                <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                    [
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                        <span class="flex-1 text-[#586B74] text-[14px]">välittömästi tilauksesta.</span>
                                    </label>
                                    ]
                                </span>
                                <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                    [
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                        <span class="flex-1 text-[#586B74] text-[14px]">erikseen sovittavan mukaan. Arviolta xx.xx.xxxx</span>
                                    </label>
                                    ]
                                </span>
                                <span class="text-[#586B74] text-[15px]">Koko urakka on oltava täysin valmis ja vastaanotettavissa</span>
                                <input type="text" name="pilar_VA1" placeholder="XX.XX.XXXX" class="w-full lg:w-[119px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                            </div>

                            <div class="flex items-center gap-3 mt-5">
                                <label class="inline-flex items-center gap-2 cursor-pointer">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                </label>
                                <input type="text" name="pilar_filed8_6" placeholder="Kirjaus poikkeamista aikatauluun, esimerkiksi vaiheistus" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                            </div>

                            <div class="flex flex-col flex-wrap lg:flex-row lg:items-center gap-2 mt-5">
                                <span class="text-[#586B74] text-[15px]">Mikäli sopimukseen päädytään, urakoitsija toimittaa tarkemman toteutusaikataulun rakennuttajan hyväksyttäväksi.</span>
                                <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                    [
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                        <span class="flex-1 text-[#586B74] text-[14px]">Aikataulua laatiessa urakoitsijan on huomioitava</span>
                                    </label>
                                </span>
                                <input type="text" name="pilar_VA1" placeholder="erityisehto, kuten vaiheistus" class="w-full lg:w-[220px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                            </div>
                        </div>

                        <div class="max-w-[700px] mx-auto mt-10">
                            <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                <span>12. </span> 
                                <span>TYÖMAAJÄRJESTELYT</span>
                            </h3>
                            
                            <div class="flex items-start my-5">
                                <div class="flex flex-col flex-wrap lg:flex-row lg:items-center gap-2">
                                    <span class="text-[#586B74] text-[15px]">Työt toteutetaan</span>
                                    <input type="text" name="pilar_VA1" placeholder="vapaa teksti" class="w-full lg:w-[110px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    <span class="text-[#586B74] text-[15px]">Kohdetta ympäröivät tilat ovat</span>
                                    <input type="text" name="pilar_VA1" placeholder="käytössä/tyhjänä" class="w-full lg:w-[130px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    <span class="text-[#586B74] text-[15px]">Urakoitsijan tulee huomioida</span>
                                    <span class="text-[#586B74] text-[15px]">työalueen sijainnista aiheutuvat haitat työjärjestelyjensä suunnittelussa. Kiinteistön ja ympäristön käyttäjien turvallisuudesta, toimintaedellytyksistä ja häiriöttömyydestä tulee huolehtia kaikkien työvaiheiden aikana. Urakoitsijan on huomioitava, että rakennustyöt tapahtuvat toimivassa kiinteistössä.</span>
                                </div>

                                <div class="help_wrap relative mb-2 mr-[-30px]">
                                    <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                                    
                                    <div class="help_show text-[#586B74] text-[14px] lg:w-[250px] 2xl:w-[284px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:ml-[15px] lg:left-[100%] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                        <hr class="inline-block absolute right-[100%] top-[40px] w-[19px] border border-solid border-[#E1E1EA]">
                                        <span>Lisää sijainti. Esim: <br><br> "Helsingissä, Pitäjänmäessä, sijaitsevassa toimistorakennuksessa MOVE:ssa."</span>
                                    </div>
                                </div>
                            </div>

                            <p class="text-[#586B74] text-[15px]"><span class="inline-block mr-10">-</span> Meluavien töiden tekeminen kiinteistössä on kielletty klo <span class="italic text-[#00B2A9] inline-block ml-1"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K7', true ), 'K7') ); ?></span></p>
                            <p class="text-[#586B74] text-[15px]"><span class="inline-block mr-10">-</span> Muulloin kuin arkisin klo 8-16 tehtävistä töistä on ilmoitettava etukäteen kiinteistöpäällikölle ja rakennuttajakonsultille, jotta vältytään turhilta hälytys- ja vartijakuluilta ja viikonloppukäyttäjien häiriöiltä. Mikäli urakoitsija aiheuttaa toiminnallaan kiinteistön omistajalle ylimääräisiä kuluja, vähennetään ne urakkahinnasta.</p>
                            <p class="text-[#586B74] text-[15px]"><span class="inline-block mr-10">-</span>  Urakoitsijan vastuulla on työmaa-alueen siivous sekä haalausreittien siistinä pitäminen ja suojaaminen.</p>
                            <p class="text-[#586B74] text-[15px]"><span class="inline-block mr-10">-</span>  Kiinteistön käyttäjiä on tiedotettava kulkujärjestelyiden muuttumisesta.</p>
                            <p class="text-[#586B74] text-[15px]">
                                <span class="inline-block mr-10">-</span>  
                            
                                <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                    [
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                        <span class="flex-1 text-[#586B74] text-[14px]">Vapaa teksti</span>
                                    </label>
                                    ]
                                </span>
                            </p>

                            <p class="text-[#586B74] text-[15px] mt-5">Jätelava</p>
                            <p class="text-[#586B74] text-[15px]"><span class="inline-block mr-10">-</span> Pääurakoitsija vastaa tarvittavien jätelavojen järjestämisestä ja niiden lukitsemisesta.</p>
                            <p class="text-[#586B74] text-[15px]"><span class="inline-block mr-10">-</span> Pääurakoitsija sopii jätelavojen paikat huollon tai kiinteistöpäällikön kanssa.</p>
                        
                            <p class="text-[#586B74] text-[15px] mt-5">Sosiaalitilat</p>
                            <div class="text-[#586B74] text-[15px] flex items-start gap-[5px]">
                                <span class="inline-block mr-10">-</span>  
                                <div class="flex flex-wrap flex-col lg:flex-row lg:items-center gap-x-2">
                                    <span class="text-[#586B74] text-[14px]">Urakoitsija voi käyttää</span>
                                    <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                        [
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                            <span class="flex-1 text-[#586B74] text-[14px]">kiinteistön yleisistä tiloista erikseen sovittavia</span>
                                        </label>
                                        ]
                                    </span>
                                    <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                        [
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                            <span class="flex-1 text-[#586B74] text-[14px]">tilamuutosalueen</span>
                                        </label>
                                        ]
                                    </span>
                                    <span class="text-[#586B74] text-[14px]">wc-tiloja.</span>
                                </div>
                            </div>
                            <p class="text-[#586B74] text-[15px]"><span class="inline-block mr-10">-</span> Wc-tilat on oltava vähintään alkutilannetta vastaavassa kunnossa urakan päätyttyä.</p>
                            <p class="text-[#586B74] text-[15px]"><span class="inline-block mr-10">-</span> Tilat, joista urakoitsija voi tehdä itselleen sosiaalitilat, osoitetaan urakoitsijalle myöhemmin (asia käydään läpi työmaan aloituskokouksessa).</p>
                            
                            <div class="text-[#586B74] text-[15px] flex items-start gap-[5px] mt-3">
                                <span class="inline-block mr-10">-</span> 
                                
                                <span class="text-[#586B74] text-[15px]">
                                    <span class="text-[#586B74] text-[14px]">Tilaaja</span>
                                    [
                                    <label class="cursor-pointer">
                                        <span class="mb-[-3px] shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                        <span class="flex-1 text-[#586B74] text-[14px]">osoittaa urakoitsijan käyttöön suihkutilat.</span>
                                    </label>
                                    ]

                                    [
                                    <label class="cursor-pointer">
                                        <span class="mb-[-3px] shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                        <span class="flex-1 text-[#586B74] text-[14px]">ei osoita kiinteistön suihkutiloista urakoitsijalle rajattua tilaa, vaan urakoitsija vastaa itse työntekijöidensä peseytymismahdollisuuksien järjestämisestä.</span>
                                    </label>
                                    ]
                                </span>
                            </div>
                        </div>

                        <div class="max-w-[700px] mx-auto mt-10">
                            <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                <span>13. </span> 
                                <span>TYÖTURVALLISUUS</span>
                            </h3>
                            
                            <div class="flex flex-col flex-wrap lg:flex-row lg:items-center gap-2">
                                <span class="text-[#586B74] text-[15px]">Rakennuttaja on laatinut kohteesta rakennuttajan turvallisuusasiakirjan ( </span>
                                <input type="text" name="pilar_VA1" placeholder="xx.xx.xxxx" class="w-full lg:w-[110px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                <span class="text-[#586B74] text-[15px]">), joka on ollut tarjouspyynnön liitteenä. </span>
                            </div>
                            <p class="text-[#586B74] text-[15px]"><span class="inline-block mr-10">-</span> Todettiin, että urakoitsija on ottanut tarjouksessaan huomioon turvallisuusasiakirjassa mainitut seikat ja toimenpiteet. </p>
                            <p class="text-[#586B74] text-[15px] my-5">Pääurakoitsija on työturvallisuudesta vastaava päätoteuttaja. </p>
                            <p class="text-[#586B74] text-[15px]">Urakoitsijan nimeämä työturvallisuudesta vastaava henkilö on <span class="italic text-[#00B2A9] inline-block ml-1">U7.</span></p>
                            <p class="text-[#586B74] text-[15px]">Turvallisuusasiakirjan mukaisesti päätoteuttajan tulee laatia ja esittää rakennuttajalle ennen töiden aloittamista kirjallinen turvallisuussuunnitelma sekä työmaa-alueen suunnitelma. </p>
                            <p class="text-[#586B74] text-[15px]">Henkilökohtaisten suojavarusteiden käyttö</p>
                            <p class="text-[#586B74] text-[15px]"><span class="inline-block mr-10">-</span> Todettiin, että hankkeessa edellytetään henkilökohtaisten suojavarusteiden käyttämistä turvallisuusasiakirjan ja pääurakoitsijan turvallisuusohjeen mukaisesti. </p>
                            
                            <p class="text-[#586B74] text-[15px] mt-10">Paloilmaisimet/sammutusjärjestelmä </p>

                            <div class="text-[#586B74] text-[15px] flex items-start gap-[5px]">
                                <span class="inline-block mr-10">-</span>  
                                <label class=" gap-2 cursor-pointer">
                                    [
                                    <span class="mb-[-3px] mr-2 shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                    <span class="flex-1 text-[#586B74] text-[14px]"> Kiinteistössä on toiminnassa oleva paloilmoitinjärjestelmä, joka on pidettävä toiminnassa koko työmaan ajan. Mikäli urakoitsijalla on tarvetta paloilmaisimien irtikytkennöille, urakoitsija vastaa irtikytkennästä ja sen kustannuksista sekä väliaikaisen palovartioinnin järjestämisestä irtikytkennän ajaksi. </span>
                                    ]
                                </label>
                            </div>

                            <div class="text-[#586B74] text-[15px] flex items-start gap-[5px] mt-3">
                                <span class="inline-block mr-10">-</span>  
                                <label class=" gap-2 cursor-pointer">
                                    [
                                    <span class="mb-[-3px] mr-2 shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                    <span class="flex-1 text-[#586B74] text-[14px]"> Kiinteistössä on toiminnassa oleva automaattinen sammutusjärjestelmä, joka on pidettävä toiminnassa koko työmaan ajan. Mikäli urakoitsijalla on tarvetta sammutusjärjestelmän sulkemiselle, urakoitsija vastaa sulkemisesta ja sen kustannuksista sekä väliaikaisen palovartioinnin järjestämisestä katkoksen ajaksi.</span>
                                    ]
                                </label>
                            </div>

                            <p class="text-[#586B74] text-[15px] mt-10">Pölynhallinta</p>
                            <p class="text-[#586B74] text-[15px]"><span class="inline-block mr-10">-</span> Pääurakoitsijan on sisällytettävä pölynhallintasuunnitelma osaksi työmaan turvallisuussuunnitelmaa ja varmistettava, että rakennustöistä ei kulkeudu pölyä ympäröiviin tiloihin tai ilmanvaihtokanavistoon.</p>
                            <div class="text-[#586B74] text-[15px] flex items-center gap-[5px]">
                                <span class="inline-block mr-10">-</span>  
                                <div class="flex items-center gap-2">
                                    [
                                    <label class="cursor-pointer">
                                        <span class="mb-[-3px] mr-2 shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                        <span class="flex-1 text-[#586B74] text-[14px]">Erityisesti huomioitavaa</span>
                                    </label>
                                    <input type="text" name="pilar_VA1" placeholder="työvaihetta" class="w-full lg:w-[130px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    <span class="text-[#586B74] text-[15px]">tehdessä</span>
                                    ]
                                </div>
                            </div>
                            <p class="text-[#586B74] text-[15px]"><span class="inline-block mr-10">-</span> Pääurakoitsija rajaa työmaa-alueen muusta kiinteistöstä pölyn kulkeutumisen ehkäisemiseksi. </p>
                            <p class="text-[#586B74] text-[15px]"><span class="inline-block mr-10">-</span> Pääurakoitsija suojaa urakka-alueen ilmanvaihtoelimet, jotta kanavistoon ei pääse pölyä. </p>
                    
                            
                            <p class="text-[#586B74] text-[15px] mt-10">Pelastusreitit ja poistuminen </p>
                            <p class="text-[#586B74] text-[15px]"><span class="inline-block mr-10">-</span> Pääurakoitsijan on huolehdittava, että kiinteistön pelastusreitit ja poistumistiet (mm. porrashuoneet) pysyvät avoimina kaikkien työvaiheiden aikana. </p>
                            <p class="text-[#586B74] text-[15px]"><span class="inline-block mr-10">-</span> Pääurakoitsija vastaa työmaan aitaamisesta tai muusta fyysisestä rajauksesta urakkaan kuuluvana.</p>
                            <div class="flex items-center gap-3 mt-5">
                                <label class="inline-flex items-center gap-2 cursor-pointer">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                </label>
                                <input type="text" name="pilar_filed8_6" placeholder="Vapaa teksti" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                            </div>
                        </div>

                        <div class="max-w-[700px] mx-auto mt-10">
                            <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                <span>14. </span> 
                                <span>RAKENNUTTAJAN ERILLISHANKINNAT</span>
                            </h3>
                        </div>
                        <div class="help_wrap relative mb-2">
                            <div class="max-w-[700px] mx-auto flex items-center gap-2">
                                <label class="inline-flex items-center gap-2 cursor-pointer min-w-[270px]">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                    
                                    <span class="text-[#586B74]">Ei rakennuttajan erillishankintoja.</span>
                                </label>

                                <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                                
                                <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                            </div>

                            <div class="help_show text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                Onko kohteessa erillishankintoja? Kuten sähkökeskus, lasiseinät, portaikko jne.?
                            </div>
                        </div>

                        <div class="max-w-[700px] mx-auto mt-3">
                            <div class="flex items-center gap-3">
                                <label class="inline-flex items-center gap-2 cursor-pointer">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                </label>
                                <input type="text" name="pilar_filed8_6" placeholder="Erillishankinta ja toimittaja" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                            </div>
                            <div class="flex items-center gap-3 mt-3">
                                <label class="inline-flex items-center gap-2 cursor-pointer">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                </label>
                                <span class="text-[#586B74]">Kiinteistössä on yhtä aikaa käynnissä myös muita tilamuutosurakoita.</span>
                            </div>
                        </div>

                        <div class="max-w-[700px] mx-auto mt-10">
                            <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                <span>15. </span> 
                                <span>SOPIMUSTEKNISET ASIAT</span>
                            </h3>

                            <p class="text-[#586B74] text-[14px] leading-7">Mahdollinen urakkasopimus laaditaan tarjouspyynnössä mukana olleelle Urakkasopimus YSE 1998 asiakirja (RT 80260) -pohjautuvalle urakkasopimuspohjalle.</p>
                            <p class="text-[#586B74] text-[14px] leading-7">Vakuutukset:</p>
                            <p class="text-[#586B74] text-[15px]"><span class="inline-block mr-10">-</span> Pääurakoitsija ottaa rakennuskohteelle YSE:n mukaisen rakennustyövakuutuksen koko rakennustyön ajalle. </p>
                            <p class="text-[#586B74] text-[15px]"><span class="inline-block mr-10">-</span> Pääurakoitsijan vastuuvakuutuksen on oltava voimassa ja sen suuruus on oltava vähintään 1 000 000 €.</p>
                        </div>
                        <div class="help_wrap relative mb-2 mt-5">
                            <div class="max-w-[700px] mx-auto flex items-center gap-2 text-[#586B74]">
                                <span class="inline-block ml-[50px]">[</span>
                                <label class="inline-flex items-center gap-2 cursor-pointer">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                    
                                    <input type="text" name="pilar_VA1" placeholder="vapaa teksti" class="w-full lg:w-[110px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </label>

                                <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                                
                                <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                            </div>

                            <div class="help_show text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                Kommentit. Esim: "Urakoitsijan vastuuvakuutus liian alhainen. Nostetaan 1.000.000 € asti." Tämä on viimeinen kohta tarkastaa, onko urakoitsija hoitanut tilaajavastuu-lakien mukaisia velvoitteitaan.
                            </div>
                        </div>
                        <div class="max-w-[700px] mx-auto">
                            <p class="text-[#586B74] text-[15px] ml-[50px]">o Pääurakoitsija vastaa myös käytettävien aliurakoitsijoiden vastuuvakuutuksen olevan 1 000 000 € tai vastaa alijäävältä osalta omalla vastuuvakuutuksellaan. </p>
                            <p class="text-[#586B74] text-[14px] leading-7 mt-10">Rakennusaikainen ja takuuaikainen vakuus:</p>
                            <p class="text-[#586B74] text-[15px]"><span class="inline-block mr-10">-</span> Tarjouspyyntöaineistossa olleeseen urakkasopimusluonnokseen kirjatun mukaisesti. </p>
                            
                            <p class="text-[#586B74] text-[14px] leading-7 mt-10">Tilaajavastuulain mukaiset selvitykset:</p> 
                            <div class="text-[#586B74] text-[15px] flex items-center gap-[5px]">
                                <span class="inline-block mr-10">-</span>  
                                <div class="flex items-center gap-2">
                                    <span class="text-[#586B74] text-[15px]">Urakoitsija on toimittanut Luotettava Kumppani -raportin</span>
                                    <input type="text" name="pilar_VA1" placeholder="xx.xx.xxxx" class="w-full lg:w-[130px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </div>
                            </div> 
                            <div class="text-[#586B74] text-[15px] flex items-center gap-[5px]">
                                <span class="inline-block mr-10">-</span>  
                                <label class="inline-flex items-center gap-2 cursor-pointer text-[#586B74]">
                                    [
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                    
                                    <input type="text" name="pilar_VA1" placeholder="vapaa teksti" class="w-full lg:w-[110px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </label>
                            </div>
                            <p class="text-[#586B74] text-[15px] ml-[50px]">o Pääurakoitsija vastaa myös käytettävien aliurakoitsijoiden tilaaja vastuu -lain mukaisten selvitysten tarkastamisesta ja ilmoittamisesta rakennuttajakonsultille.</p>
                    
                            <p class="text-[#586B74] text-[14px] leading-7 mt-10">Maksuerätaulukko:</p>
                            <div class="text-[#586B74] text-[15px] flex items-start gap-[5px]">
                                <span class="inline-block mr-10">-</span>  
                                <div class="flex flex-wrap items-center gap-2">
                                    Urakoitsija
                                    <span> 
                                        [
                                        <label class="cursor-pointer">
                                            <span class="mb-[-3px] mr-2 shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                            <span class="flex-1 text-[#586B74] text-[14px]">on toimittanut ehdotuksensa</span>
                                        </label>
                                        ]
                                    </span>
                                    <span> 
                                        [
                                        <label class="cursor-pointer">
                                            <span class="mb-[-3px] mr-2 shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                            <span class="flex-1 text-[#586B74] text-[14px]">ei ole toimittanut ehdotustaan</span>
                                        </label>
                                        ] maksuerätaulukosta tarjouksen liitteenä.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="help_wrap relative mb-2 mt-5">
                            <div class="max-w-[700px] mx-auto flex items-center gap-2 text-[#586B74]">
                                <div class="text-[#586B74] text-[15px] flex items-center gap-[5px]">
                                    <span class="inline-block mr-10">-</span>  
                                    <div class="flex flex-wrap items-center gap-2 min-w-[160px]">
                                        <span class="inline-block">[</span>
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                            
                                            <input type="text" name="pilar_VA1" placeholder="vapaa teksti" class="w-full lg:w-[110px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                        </label>
                                    </div>
                                </div>
                                
                                <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                                
                                <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                            </div>

                            <div class="help_show text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                Käydään läpi ja kirjataan mahdolliset muutokset. 
                                <br>
                                <br>
                                Maksuerätaulukossa on tarkastettava, että se seuraa kunkin työvaiheen kustannuksia. Kunkin työvaiheen karkean kustannuksen näkee tarjouslomakkeen erittelystä. Usein urakoitsijalla erät ovat kuitenkin erittelyä suuremmat urakan muiden kulujen vuoksi. (Näitä mm. työnjohto, jätelava jne.) ja ne on jyvitetty maksueriin. 
                                <br>
                                Huomioi myös, että kaikki työt on tehty siinä vaiheessa, kun kaikki maksuerät ovat maksukelpoisia. Jos sinulla on esimerkiksi valaisinmuutoksia urakassa on niille hyvä olla oma maksuerä tai niiden on sisällyttävä johonkin maksuerään (esim. sähkötyöt). 
                                <br>
                                <br>
                                Lisäksi on huomioitava, että kirjaukset kuten: lattiatyöt aloitettu, eivät palvele urakan vaiheiden mukaista laskutusta. Maksetaan siis vain tehdystä työstä tai suurista hankinnoista. Isommat kokonaisuudet voi pilkkoa esim: 50% tehty ja 100% tehty. 
                                <br>
                                <br>
                                Maksuerätaulukon tulee myös olla päivätty ja maksuerät numeroitu.
                            </div>
                        </div>
                        <div class="max-w-[700px] mx-auto">
                            <p class="text-[#586B74] text-[14px] leading-7 mt-10">Muut sopimusasiat:</p>
                            <div class="text-[#586B74] text-[15px] flex items-start gap-[5px]">
                                <span class="inline-block mr-10">-</span>  
                                <div class="flex flex-wrap items-center gap-2">
                                    <span> 
                                        [
                                        <label class="cursor-pointer">
                                            <span class="mb-[-3px] mr-2 shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                            <span class="flex-1 text-[#586B74] text-[14px]">Viivästyssakko tarjouspyyntöaineiston mukaisesti.</span>
                                        </label>
                                        ]
                                    </span>
                                </div>
                            </div>
                            <div class="text-[#586B74] text-[15px] flex items-start gap-[5px]">
                                <span class="inline-block mr-10">-</span>  
                                <div class="flex flex-wrap items-center gap-1">
                                    <span class="inline-block">[</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        
                                        <input type="text" name="pilar_VA1" placeholder="vapaa teksti" class="w-full lg:w-[110px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="max-w-[700px] mx-auto mt-10">
                            <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                <span>16. </span> 
                                <span>MUUT ASIAT</span>
                            </h3>

                            <p class="text-[#586B74] text-[14px] leading-7 mt-3 mb-2">Pääurakoitsija suorittaa urakan luovutusvaiheessa urakkasopimusasiakirjojen mukaiset tarkastukset ja laatii sekä toimittaa urakkasopimusluonnoksen kohdan 7 "laadun varmistus" mukaiset luovutusdokumentit. Aineisto luovutetaan sähköisesti.</p>
                            <input type="text" name="pilar_filed8_6" placeholder="Vapaa teksti" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                        </div>

                        <div class="max-w-[700px] mx-auto mt-10">
                            <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                <span>17. </span> 
                                <span>JATKOTOIMENPITEET</span>
                            </h3>

                            <label class=" gap-2 cursor-pointer text-[#586B74] block">
                                [
                                <span class="mb-[-3px] mr-2 shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                <span class="flex-1 text-[#586B74] text-[14px]"> Ei tarvetta tarjouksen päivittämiselle. Rakennuttaja ilmoittaa urakoitsijavalinnasta mahdollisimman pian.</span>
                                ]
                            </label>  

                            <div class="flex-wrap gap-2 text-[#586B74] flex items-center">
                                [
                                <label class="cursor-pointer">
                                    <span class="mb-[-3px] mr-2 shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                    <span class="text-[#586B74] text-[14px]"> Urakoitsija tarkistaa </span>
                                </label>
                                
                                <div class="flex flex-col lg:flex-row lg:items-center gap-2">
                                    <span class="">
                                        <input type="text" name="pilar_VA1" placeholder="XX.XX.XXXX" class="w-full lg:w-[119px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </span>
                                    <span class="text-[#586B74] text-[15px]">klo</span>
                                    <span class="">
                                        <input type="text" name="pilar_VA1" placeholder="XX.XX.XXXX" class="w-full lg:w-[68px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </span>
                                </div>
                                <span class="text-[#586B74] text-[14px]">mennessä tarjouksensa tämän neuvottelun perusteella. Rakennuttaja ilmoittaa urakoitsijavalinnasta mahdollisimman pian päivitetyn tarjouksen jättämisen jälkeen. ]</span>
                                
                            </div>  
                            
                            <div class="flex-wrap gap-2 text-[#586B74] flex items-center">
                                [
                                <label class="cursor-pointer">
                                    <span class="mb-[-3px] mr-2 shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                    <span class="text-[#586B74] text-[14px]"> (Jälkikirjaus: Urakoitsija on tämän selonottoneuvottelun seurauksena päivittänyt tarjoustaan </span>
                                </label>
                                
                                <div class="flex flex-col lg:flex-row lg:items-center gap-2">
                                    <span class="">
                                        <input type="text" name="pilar_VA1" placeholder="XX.XX.XXXX" class="w-full lg:w-[119px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </span>
                                </div>
                                <span class="text-[#586B74] text-[14px]">ja kiinteä kokonaishinta tässä asiakirjassa ja tarjouspyyntöaineistossa määritetyille töille on <span class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] text-[#06F9B7] border border-solid border-[#06F9B7] rounded-[5px] p-2"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_UH1', true ), 'UH1') ); ?></span> (alv. 0%)]</span>
                                
                            </div>  
                        </div>

                        <div class="max-w-[700px] mx-auto mt-10">
                            <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                <span>18. </span> 
                                <span>KOKOUKSEN PÄÄTTÄMINEN</span>
                            </h3>

                            <div class="flex items-center gap-2 mt-5">
                                <span class="text-[#586B74] text-[15px]">Puheenjohtaja päätti kokouksen klo</span>
                                <input type="text" name="pilar_VA1" placeholder="xx.xx" class="w-full lg:w-[60px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                            </div>
                            <p class="text-[#586B74] text-[15px]">Pöytäkirjan vakuudeksi</p>
                            <div>
                                <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                    [
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                        <span class="flex-1 text-[#586B74] text-[14px]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P1', true ), 'P1') ); ?></span>
                                    </label>
                                    ]
                                </span>
                                <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                    [
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                        <span class="flex-1 text-[#586B74] text-[14px]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P4', true ), 'P4') ); ?></span>
                                    </label>
                                    ]
                                </span>
                            </div>
                            <p class="text-[#586B74] text-[15px]">Partners at Noste Oy</p>
                        </div>
                    </div><!-- Card Body -->
                    <!-- Card footer --><?php echo wp_kses_post(noste_form_footer('form')); ?><!-- Card footer -->
                </form>
            </div>


        </div>
    </div>
</section>
<!-- Main Content -->