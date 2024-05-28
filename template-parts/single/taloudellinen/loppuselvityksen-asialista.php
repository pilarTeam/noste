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
                            <div class="max-w-[800px] mx-auto mt-20">
                                <div class="mb-[30px]">
                                    <span class="font-medium italic text-[#00B2A9] block"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K1', true ), 'K1') ); ?></span>
                                    <span class="font-medium italic text-[#00B2A9] block"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K4', true ), 'K4') ); ?></span>
                                </div>
            
                                <div class="mb-[50px]">
                                    <h1 class="text-black text-[25px] font-medium mb-4">TALOUDELLISEN LOPPUSELVITYKSEN PÖYTÄKIRJA</h1>
                                    <p class="text-[#586B74]">Lomake pohjautuu RT 80285 taloudellisen loppuselvityksen pöytäkirja.</p>
                                </div>
            
                                <div class="flex items-center mb-5">
                                    <span class="text-[#283B44] text-[17px] w-[30%]">Hanke:</span>
                                    <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K4', true ), 'K4') ); ?></span>
                                </div>
                                <div class="flex items-center mb-5">
                                    <span class="text-[#283B44] text-[17px] w-[30%]">Projektinumero:</span>
                                    <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K8', true ), 'K8') ); ?></span>
                                </div>
                                <div class="flex items-start mb-5">
                                    <span class="text-[#283B44] text-[17px] w-[30%]">Rakennuskohde:</span>
                                    <span class="text-[#586B74] text-[15px]">
                                        <span class="text-[#00B2A9] italic block mb-2"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K1', true ), 'K1') ); ?></span>
                                        <span class="text-[#00B2A9] italic block mb-2"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T1', true ), 'T1') ); ?></span>
                                        <span class="text-[#00B2A9] italic block mb-2"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K2', true ), 'K2') ); ?></span>
                                        <span class="text-[#00B2A9] italic block"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K3', true ), 'K3') ); ?></span>
                                    </span>
                                </div>
                                <div class="flex items-center mb-5">
                                    <span class="text-[#283B44] text-[17px] w-[30%]">Tilaaja:</span>
                                    <span class="text-[#586B74] text-[15px] block">
                                        <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T1', true ), 'T1') ); ?></span> Y-tunnus <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T7', true ), 'T7') ); ?></span>
                                    </span>
                                </div>
                                <div class="flex items-center mb-5">
                                    <span class="text-[#283B44] text-[17px] w-[30%]">Rakennuttaja:</span>
                                    <span class="text-[#586B74] text-[14px] block">
                                        Sama kuin Tilaaja.
                                    </span>
                                </div>
                                <div class="flex items-center mb-5">
                                    <span class="text-[#283B44] text-[17px] w-[30%]">Urakoitsija:</span>
                                    <span class="text-[#586B74] text-[15px] block">
                                        <span class="text-[#00B2A9] italic">U1,</span> Y-tunnus <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_U2', true ), 'U2') ); ?></span>
                                    </span>
                                </div>
                                <div class="flex items-center mb-5">
                                    <span class="text-[#283B44] text-[17px] w-[30%]">Ali- ja sivu-urakoitsijat:</span>
                                    <input type="text" name="ali_js_sivu" placeholder="Ei ole" class="w-full lg:w-[120px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_html( noste_check_array_data( $data, 'ali_js_sivu' ) ); ?>">
                                </div>
                                <div class="flex items-center mb-5">
                                    <span class="text-[#283B44] text-[17px] w-[30%]">Muut osapuolet:</span>
                                    <input type="text" name="ali_muut_osapuolet" placeholder="Ei ole" class="w-full lg:w-[120px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_html( noste_check_array_data( $data, 'ali_muut_osapuolet' ) ); ?>">
                                </div>
                                <div class="flex items-center mb-5">
                                    <span class="text-[#283B44] text-[17px] w-[30%]">Käyttäjä:</span>
                                    <span class="text-[#586B74] text-[15px] block">
                                        <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_V1', true ), 'V1') ); ?>,</span> Y-tunnus <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_V6', true ), 'V6') ); ?></span>
                                    </span>
                                </div>
            
                                <h2 class="flex gap-10 text-black text-[20px] font-medium mt-10">
                                    <span>1.</span> 
                                    <span>AIKA</span>
                                </h2>
                                <div class="flex flex-col lg:flex-row lg:items-center gap-2 mt-3 ml-[55px]">
                                    <span class="text-[#586B74] text-[15px]">Taloudellisen loppuselvityksen ajankohta, </span>
                                    <span class="">
                                        <input type="text" name="present" placeholder="xx.xx.xxxx" class="w-full lg:w-[120px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_html( noste_check_array_data( $data, 'present' ) ); ?>">
                                    </span>
                                    <span class="text-[#586B74] text-[15px]">klo</span>
                                    <span class="">
                                        <input type="text" name="present_kio" placeholder="xx.xx" class="w-full lg:w-[120px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_html( noste_check_array_data( $data, 'present_kio' ) ); ?>">
                                    </span>
                                </div>
                            </div>
            
                            <div class="help_wrap mt-10 mb-5 relative">
                                <div class="max-w-[800px] mx-auto flex items-center gap-2">
                                    <h3 class="flex gap-10 text-black text-[20px] font-medium min-w-[150px]">
                                        <span>2.</span> 
                                        <span>PAIKKA</span>
                                    </h3>
            
                                    <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                                    
                                    <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                                </div>
            
                                <div class="help_show text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                    Taloudellinen loppuselvitys pidetään tilanteen selvyydestä riippuen joko fyysisesti koolle kutsuttuna, teams-palaverina tai sähköpostitse. Jos kaikki on selvää, on ajallisesti tehokkainta pitää tilaisuus sähköpostitse.
                                </div>
                            </div>
                            
                            <div class="max-w-[800px] mx-auto">
                                <span class="h-[1px] bg-[#94969C] inline-block w-full lg:w-[200px] ml-[55px]"></span>
                            </div>
            
                            <div class="help_wrap mt-10 mb-5 relative">
                                <div class="max-w-[800px] mx-auto flex items-center gap-2">
                                    <h3 class="flex gap-10 text-black text-[20px] font-medium min-w-[195px]">
                                        <span>3.</span> 
                                        <span>OSANOTTAJAT</span>
                                    </h3>
            
                                    <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                                    
                                    <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                                </div>
            
                                <div class="help_show text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                    Yleensä pienissä hankkeissa vain projektipäällikkö ja urakoitsija.
                                </div>
                            </div>
            
                            <div class="max-w-[800px] mx-auto">
                                <p class="text-[#586B74] mb-5">Tilaajan edustajat:</p>
            
                                <div class="flex items-center mb-5">
                                    <label class="inline-flex items-center gap-2 cursor-pointer w-[30%]">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_t3_check" <?php checked( noste_check_array_data( $data, 'noste_t3_check' ), 'on', true); ?>>
                                        <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T3', true ), 'T3') ); ?></span>
                                    </label>
            
                                    <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T2', true ), 'T2') ); ?></span>
                                </div>
                                <div class="flex items-center mb-5">
                                    <label class="inline-flex items-center gap-2 cursor-pointer w-[30%]">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_k6_check" <?php checked( noste_check_array_data( $data, 'noste_k6_check' ), 'on', true); ?>>
                                        <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K6', true ), 'K6') ); ?></span>
                                    </label>
            
                                    <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K22', true ), 'K22') ); ?></span>
                                </div>
                                <div class="flex items-center mb-5">
                                    <label class="inline-flex items-center gap-2 cursor-pointer w-[30%]">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_p1_check" <?php checked( noste_check_array_data( $data, 'noste_p1_check' ), 'on', true); ?>>
                                        <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P1', true ), 'P1') ); ?></span>
                                    </label>
            
                                    <span class="text-[#586B74] block">Partners at Noste Oy</span>
                                </div>
                                <div class="flex items-center mb-5">
                                    <label class="inline-flex items-center gap-2 cursor-pointer w-[30%]">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_p4_check" <?php checked( noste_check_array_data( $data, 'noste_p4_check' ), 'on', true); ?>>
                                        <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P4', true ), 'P4') ); ?></span>
                                    </label>
            
                                    <span class="text-[#586B74] block">Partners at Noste Oy</span>
                                </div>
                                <div class="flex items-center mb-5">
                                    <div class="flex items-center gap-3 w-[30%]">
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_muu_check_3" <?php checked( noste_check_array_data( $data, 'noste_muu_check_3' ), 'on', true); ?>>
                                        </label>
                                        <input type="text" name="noste_muu_3_value" placeholder="Muu" class="w-full lg:w-[120px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_html( noste_check_array_data( $data, 'noste_muu_3_value' ) ); ?>">
                                    </div>
            
                                    <input type="text" name="noste_muu_31_value" placeholder="..." class="w-full lg:w-[120px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_html( noste_check_array_data( $data, 'noste_muu_31_value' ) ); ?>">
                                </div>
            
                                <p class="text-[#586B74] my-8">Urakoitsijan edustajat:</p>
                                <div class="flex items-center mb-5">
                                    <label class="inline-flex items-center gap-2 cursor-pointer w-[30%]">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_u4_check" <?php checked( noste_check_array_data( $data, 'noste_u4_check' ), 'on', true); ?>>
                                        <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_U4', true ), 'U4') ); ?></span>
                                    </label>
            
                                    <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_U1', true ), 'U1') ); ?></span>
                                </div>
                                <div class="flex items-center mb-5">
                                    <label class="inline-flex items-center gap-2 cursor-pointer w-[30%]">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_u7_check" <?php checked( noste_check_array_data( $data, 'noste_u7_check' ), 'on', true); ?>>
                                        <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_U7', true ), 'U7') ); ?></span>
                                    </label>
            
                                    <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_U1', true ), 'U1') ); ?></span>
                                </div>
                                <div class="flex items-center mb-5">
                                    <div class="flex items-center gap-3 w-[30%]">
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_u7_muu_check" <?php checked( noste_check_array_data( $data, 'noste_u7_muu_check' ), 'on', true); ?>>
                                        </label>
                                        <input type="text" name="noste_u7_muu_value" placeholder="Muu" class="w-full lg:w-[120px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_html( noste_check_array_data( $data, 'noste_u7_muu_value' ) ); ?>">
                                    </div>
            
                                    <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_U1', true ), 'U1') ); ?></span>
                                </div>
            
                                <p class="text-[#586B74] mt-8">Muut:</p>
                                <div class="flex items-center mt-5">
                                    <div class="flex items-center gap-3 w-[30%]">
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_paret_muu_check" <?php checked( noste_check_array_data( $data, 'noste_paret_muu_check' ), 'on', true); ?>>
                                        </label>
                                        <input type="text" name="noste_paret_muu_value" placeholder="Muu" class="w-full lg:w-[120px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_html( noste_check_array_data( $data, 'noste_paret_muu_value' ) ); ?>">
                                    </div>
            
                                    <input type="text" name="noste_paret_muu2_value" placeholder="..." class="w-full lg:w-[120px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_html( noste_check_array_data( $data, 'noste_paret_muu2_value' ) ); ?>">
                                </div>
            
                                <h2 class="flex gap-10 text-black text-[20px] font-medium mt-10">
                                    <span>4.</span> 
                                    <span>VASTAANOTTOTARKASTUKSEN PITÄMINEN</span>
                                </h2>
                                <div class="flex flex-col flex-wrap lg:flex-row lg:items-center gap-2 mt-5">
                                    <span class="text-[#586B74] text-[15px]">Urakan vastaanottotarkastus on pidetty hyväksytysti</span>
                                    <input type="text" name="urakan_4_value" placeholder="XX.XX.XXXX" class="w-full lg:w-[119px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_html( noste_check_array_data( $data, 'urakan_4_value' ) ); ?>">
                                </div>
            
                                <h2 class="flex gap-10 text-black text-[20px] font-medium mt-10">
                                    <span>5.</span> 
                                    <span>LOPPUSELVITYKSEN SOPIMUKSENMUKAISUUS</span>
                                </h2>
                                <p class="text-[#586B74] mt-5 underline">Urakoitsijan lopputilityksen lähettäminen</p>
                                <div class="flex flex-col flex-wrap lg:flex-row lg:items-center gap-2 mt-2">
                                    <span class="text-[#586B74] text-[15px]">Urakoitsija on lähettänyt lopputilityksen rakennuttajalle sähköpostitse</span>
                                    <input type="text" name="urakoitsija_5_value" placeholder="XX.XX.XXXX" class="w-full lg:w-[119px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_html( noste_check_array_data( $data, 'urakoitsija_5_value' ) ); ?>">
                                </div>
                                <p class="text-[#586B74] mt-2 underline">Tilaajan ilmoitus loppuselvityksen ajankohdasta</p>
                                <div class="flex flex-col flex-wrap lg:flex-row lg:items-center gap-2 mt-2">
                                    <span class="text-[#586B74] text-[15px]">Taloudellisen loppuselvityksen pitämisestä ja ajankohdasta on sovittu yhteisesti osapuolten kesken</span>
                                    <input type="text" name="taloudellisen_5_value" placeholder="XX.XX.XXXX" class="w-full lg:w-[119px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_html( noste_check_array_data( $data, 'taloudellisen_5_value' ) ); ?>">
                                </div>
                                <p class="text-[#586B74] mt-2 underline">Sopimuksenmukaisuuden toteaminen</p>
                                <p class="text-[#586B74] mt-2">Todettiin taloudellinen loppuselvitys sopimuksen mukaiseksi.</p>
            
                                <h2 class="flex gap-10 text-black text-[20px] font-medium mt-10">
                                    <span>6.</span> 
                                    <span>PUHEENJOHTAJA</span>
                                </h2>
                                <div class="flex items-center mt-5 mb-5">
                                    <label class="inline-flex items-center gap-2 cursor-pointer w-[30%]">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_k16_check" <?php checked( noste_check_array_data( $data, 'noste_k16_check' ), 'on', true); ?>>
                                        <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P1', true ), 'P1') ); ?></span>
                                    </label>
            
                                    <span class="text-[#586B74] block">Partners at Noste Oy</span>
                                </div>
                                <div class="flex items-center mb-5">
                                    <label class="inline-flex items-center gap-2 cursor-pointer w-[30%]">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_p46_check" <?php checked( noste_check_array_data( $data, 'noste_p46_check' ), 'on', true); ?>>
                                        <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P4', true ), 'P4') ); ?></span>
                                    </label>
            
                                    <span class="text-[#586B74] block">Partners at Noste Oy</span>
                                </div>
            
                                <h2 class="flex gap-10 text-black text-[20px] font-medium mt-10">
                                    <span>7.</span> 
                                    <span>SIHTEERI</span>
                                </h2>
                                <div class="flex items-center mt-5 mb-5">
                                    <label class="inline-flex items-center gap-2 cursor-pointer w-[30%]">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_p17_check" <?php checked( noste_check_array_data( $data, 'noste_p17_check' ), 'on', true); ?>>
                                        <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P1', true ), 'P1') ); ?></span>
                                    </label>
            
                                    <span class="text-[#586B74] block">Partners at Noste Oy</span>
                                </div>
                                <div class="flex items-center mb-5">
                                    <label class="inline-flex items-center gap-2 cursor-pointer w-[30%]">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_p47_check" <?php checked( noste_check_array_data( $data, 'noste_p47_check' ), 'on', true); ?>>
                                        <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P4', true ), 'P4') ); ?></span>
                                    </label>
            
                                    <span class="text-[#586B74] block">Partners at Noste Oy</span>
                                </div>
            
                                <h2 class="flex gap-10 text-black text-[20px] font-medium mt-10">
                                    <span>8.</span> 
                                    <span>URAKOITSIJAN LOPPUTILITYS</span>
                                </h2>
                                <p class="text-[#586B74] my-5">Pääurakoitsija on toimittanut tilaajalle seuraavat lopputilitykset:</p>
                                <div>
                                    <input type="text" name="paaurakoitsija_8_value" placeholder="Liite 1: Lopputilitys pääurakkasopimukseen liittyvistä töistä lisä- ja muutostöineen, pvm xx.xx.xxxx." class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_html( noste_check_array_data( $data, 'paaurakoitsija_8_value' ) ); ?>"
>
                                </div>
            
                                <h2 class="flex gap-10 text-black text-[20px] font-medium mt-10">
                                    <span>9.</span> 
                                    <span>LOPPUTILITYKSEN TARKASTUS</span>
                                </h2>
                                <p class="text-[#586B74] mt-5 underline">Tilaajan tarkastus ja vastine</p>
                                <p class="text-[#586B74] mb-5">Urakkamuotona on ollut kiinteähintainen kokonaisurakka.</p>
                                
                                <table class="w-full"> 
                                    <tr>
                                        <td class="w-[50%] text-left text-[#586B74] px-5 py-3 border border-solid border-[#E1E1EA] underline">
                                            Urakkahinta
                                        </td>
                                        <td class="w-[50%] text-right text-[#586B74] px-5 py-3 border border-solid border-[#E1E1EA]">
                                            (alv.0 %)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-[50%] text-left text-[#586B74] px-5 py-3 border border-solid border-[#E1E1EA]">
                                            - Urakkasopimuksen mukainen urakkahinta
                                        </td>
                                        <td class="w-[50%] text-right text-[#586B74] px-5 py-3 border border-solid border-[#E1E1EA]">
                                            <input type="text" name="urakkasopimuksen_9_value" placeholder="UH1 €" class="text-right w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_html( noste_check_array_data( $data, 'urakkasopimuksen_9_value' ) ); ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-[50%] text-left text-[#586B74] px-5 py-3 border border-solid border-[#E1E1EA]">
                                            - Hyväksytyt lisä- ja muutostyöt
                                        </td>
                                        <td class="w-[50%] text-right text-[#586B74] px-5 py-3 border border-solid border-[#E1E1EA]">
                                            <input type="text" name="hyvaksytyt_9_value" placeholder="xxx.xxx,xx €" class="text-right w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_html( noste_check_array_data( $data, 'hyvaksytyt_9_value' ) ); ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-[50%] text-left text-[#586B74] px-5 py-3 border border-solid border-[#E1E1EA]">
                                            - Urakkahinta yhteensä
                                        </td>
                                        <td class="w-[50%] text-right text-[#586B74] px-5 py-3 border border-solid border-[#E1E1EA]">
                                            <input type="text" name="urakkahinta_9_value" placeholder="xxx.xxx,xx €" class="text-right w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_html( noste_check_array_data( $data, 'urakkahinta_9_value' ) ); ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-[50%] text-left text-[#586B74] px-5 py-5 border border-solid border-[#E1E1EA]"></td>
                                        <td class="w-[50%] text-right text-[#586B74] px-5 py-5 border border-solid border-[#E1E1EA]"></td>
                                    </tr>
                                    <tr>
                                        <td class="w-[50%] text-left text-[#586B74] px-5 py-3 border border-solid border-[#E1E1EA] underline">
                                            Laskutus
                                        </td>
                                        <td class="w-[50%] text-right text-[#586B74] px-5 py-3 border border-solid border-[#E1E1EA]">
                                            (alv.0 %)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-[50%] text-left text-[#586B74] px-5 py-3 border border-solid border-[#E1E1EA]">
                                            - Laskutettu
                                        </td>
                                        <td class="w-[50%] text-right text-[#586B74] px-5 py-3 border border-solid border-[#E1E1EA]">
                                            <input type="text" name="laskutettu_9_value" placeholder="xxx.xxx,xx €" class="text-right w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_html( noste_check_array_data( $data, 'laskutettu_9_value' ) ); ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-[50%] text-left text-[#586B74] px-5 py-3 border border-solid border-[#E1E1EA]">
                                            - Laskuttamatta
                                        </td>
                                        <td class="w-[50%] text-right text-[#586B74] px-5 py-3 border border-solid border-[#E1E1EA]">
                                            <input type="text" name="laskuttamatta_9_value" placeholder="xxx.xxx,xx €" class="text-right w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_html( noste_check_array_data( $data, 'laskuttamatta_9_value' ) ); ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-[50%] text-left text-[#586B74] px-5 py-3 border border-solid border-[#E1E1EA]">
                                            - Laskutus yhteensä
                                        </td>
                                        <td class="w-[50%] text-right text-[#586B74] px-5 py-3 border border-solid border-[#E1E1EA]">
                                            <input type="text" name="laskutus_9_value" placeholder="xxx.xxx,xx €" class="text-right w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_html( noste_check_array_data( $data, 'laskutus_9_value' ) ); ?>">
                                        </td>
                                    </tr>
                                </table>
            
                                <p class="text-[#586B74] my-5">Todettiin, että tilaaja maksaa maksamattomia maksueriä seuraavasti:</p>
                                <div class="flex items-start gap-3 mt-3">
                                    <label class="inline-flex items-center gap-2 cursor-pointer mt-[5px]">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="kaikki_9_hyvas_check" <?php checked( noste_check_array_data( $data, 'kaikki_9_hyvas_check' ), 'on', true); ?>>
                                    </label>
                                    <span class="text-[#586B74]">Kaikki hyväksytyt lisätyöt.</span>
                                </div>
                                <div class="flex items-start gap-3 mt-3">
                                    <label class="inline-flex items-center gap-2 cursor-pointer mt-[5px]">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="kaikki_9_urakka_check" <?php checked( noste_check_array_data( $data, 'kaikki_9_urakka_check' ), 'on', true); ?>>
                                    </label>
                                    <span class="text-[#586B74]">Kaikki urakkasopimuksen mukaiset maksuerät urakkasopimuksessa sovitusti.</span>
                                </div>
                                <div class="flex items-start gap-3 mt-3">
                                    <label class="inline-flex items-center gap-2 cursor-pointer mt-[5px]">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="kaikki_urakaso_9_check" <?php checked( noste_check_array_data( $data, 'kaikki_urakaso_9_check' ), 'on', true); ?>>
                                    </label>
                                    <span class="text-[#586B74]">Kaikki urakkasopimuksen mukaiset maksuerät viimeistä maksuerää lukuun ottamatta, kunnes kaikki Tilaajan vaatimukset on suoritettu hyväksytysti.</span>
                                </div>
                                <div class="flex items-center gap-3 mt-3">
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="kaiki_9_muu_check" <?php checked( noste_check_array_data( $data, 'kaiki_9_muu_check' ), 'on', true); ?>>
                                    </label>
                                    <input type="text" name="kaiki_9_muu_value" placeholder="Muu" class="w-full lg:w-[120px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_html( noste_check_array_data( $data, 'kaiki_9_muu_value' ) ); ?>">
                                </div>
                                <div class="flex items-start gap-3 mt-3">
                                    <label class="inline-flex items-center gap-2 cursor-pointer mt-[5px]">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="tilaajan_9_check" <?php checked( noste_check_array_data( $data, 'tilaajan_9_check' ), 'on', true); ?>>
                                    </label>
                                    <span class="text-[#586B74]">Tilaajan näkemys tilisuhteista vastaa urakoitsijan lähettämää lopputilitystä.</span>
                                </div>
                                <div class="flex items-start gap-3 mt-3">
                                    <label class="inline-flex items-center gap-2 cursor-pointer mt-[5px]">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="tilaajan_9_nakemy_check" <?php checked( noste_check_array_data( $data, 'tilaajan_9_nakemy_check' ), 'on', true); ?>>
                                    </label>
                                    <span class="text-[#586B74]">Tilaajan näkemys tilisuhteista ei vastaa urakoitsijan lähettämää lopputilitystä. Mielipide-eroavaisuudet on esitetty kohdassa 12.</span>
                                </div>
            
                                <p class="text-[#586B74] mt-10 mb-4 underline">Tilaajan vaatimukset</p>
                                <div class="flex items-start gap-3 mt-3">
                                    <label class="inline-flex items-center gap-2 cursor-pointer mt-[5px]">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="vastaanosots_9_check" <?php checked( noste_check_array_data( $data, 'vastaanosots_9_check' ), 'on', true); ?>>
                                    </label>
                                    <span class="text-[#586B74]">Vastaanottotarkastuspöytäkirjassa kirjattujen velvoitteiden suorittaminen.</span>
                                </div>
                                <div class="flex items-start gap-3 mt-3">
                                    <label class="inline-flex items-center gap-2 cursor-pointer mt-[5px]">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="luovutusmater_9_check" <?php checked( noste_check_array_data( $data, 'luovutusmater_9_check' ), 'on', true); ?>>
                                    </label>
                                    <span class="text-[#586B74]">Luovutusmateriaalin toimittaminen sähköisesti.</span>
                                </div>
                                <div class="flex items-start gap-3 mt-3">
                                    <label class="inline-flex items-center gap-2 cursor-pointer mt-[5px]">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="takuuajan_9_vak_check" <?php checked( noste_check_array_data( $data, 'takuuajan_9_vak_check' ), 'on', true); ?>>
                                    </label>
                                    <span class="text-[#586B74]">Takuuajan vakuuden toimittaminen rakennuttajalle.</span>
                                </div>
                                <div class="flex items-center gap-3 mt-3">
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="takuun_9_muu_check" <?php checked( noste_check_array_data( $data, 'takuun_9_muu_check' ), 'on', true); ?>>
                                    </label>
                                    <input type="text" name="takuun_9_muu_value" placeholder="Muu" class="w-full lg:w-[120px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_html( noste_check_array_data( $data, 'takuun_9_muu_value' ) ); ?>"
>
                                </div>
            
                                <h2 class="flex gap-10 text-black text-[20px] font-medium mt-10">
                                    <span>10.</span> 
                                    <span>SOVITUT SAKOT, HYVITYKSET JA ARVONVÄHENNYKSET</span>
                                </h2>
                                <div class="mt-5">
                                    <input type="text" name="sovitut_ei_value" placeholder="Ei kirjattavaa." class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_html( noste_check_array_data( $data, 'sovitut_ei_value' ) ); ?>">
                                </div>
                                <div class="mt-2">
                                    <input type="text" name="sovitut_tai_value" placeholder="tai yksilöity luettelo." class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_html( noste_check_array_data( $data, 'sovitut_tai_value' ) ); ?>">
                                </div>
            
                                <h2 class="flex gap-10 text-black text-[20px] font-medium mt-10">
                                    <span>11.</span> 
                                    <span>SOVITUT LISÄKORVAUKSET</span>
                                </h2>
                                <div class="mt-5">
                                    <input type="text" name="sovitut_11_ei_value" placeholder="Ei kirjattavaa." class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_html( noste_check_array_data( $data, 'sovitut_11_ei_value' ) ); ?>">
                                </div>
                                <div class="mt-2">
                                    <input type="text" name="sovitut_11_tai_value" placeholder="tai yksilöity luettelo." class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_html( noste_check_array_data( $data, 'sovitut_11_tai_value' ) ); ?>">
                                </div>
            
                            </div>
            
                            <div class="help_wrap mt-10 mb-5 relative">
                                <div class="max-w-[800px] mx-auto flex items-center gap-2">
                                    <h3 class="flex gap-10 text-black text-[20px] font-medium min-w-[310px]">
                                        <span>12.</span> 
                                        <span>MIELIPIDE-EROAVUUDET</span>
                                    </h3>
            
                                    <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                                    
                                    <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                                </div>
            
                                <div class="help_show text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                    Käy lävitse vastaanottotarkastuksen pöytäkirja ja kirjaa tähän urakoitsijan vaateet, mikäli niitä ei ole jo kohdassa 9 käyty läpi.
                                </div>
                            </div>
            
                            <div class="max-w-[800px] mx-auto">
                                <p class="text-[#586B74] my-5 underline">Mielipide-eroavuudet yksilöityinä:</p>
                                <div class="mt-5">
                                    <input type="text" name="mielipide_12_ei_value" placeholder="Ei kirjattavaa." class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_html( noste_check_array_data( $data, 'mielipide_12_ei_value' ) ); ?>">
                                </div>
                                <div class="mt-2">
                                    <input type="text" name="mielipide_12_tai_value" placeholder="tai yksilöity luettelo." class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_html( noste_check_array_data( $data, 'mielipide_12_tai_value' ) ); ?>">
                                </div>
            
                                <p class="text-[#586B74] my-5 underline">Toimenpiteet mielipide-eroavuuksien ratkaisemiseksi:</p>
                                <div class="mt-5">
                                    <input type="text" name="toimenpiteet_12_ei_value" placeholder="Ei kirjattavaa." class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_html( noste_check_array_data( $data, 'toimenpiteet_12_ei_value' ) ); ?>">
                                </div>
                                <div class="mt-2">
                                    <input type="text" name="toimenpiteet_12_tai_value" placeholder="tai yksilöity luettelo." class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_html( noste_check_array_data( $data, 'toimenpiteet_12_tai_value' ) ); ?>">
                                </div>
            
                                <h2 class="flex gap-10 text-black text-[20px] font-medium mt-10">
                                    <span>13.</span> 
                                    <span>MUUT ASIAT</span>
                                </h2>
                                <div class="flex flex-col flex-wrap lg:flex-row lg:items-center gap-2 my-3">
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="muu_13_merkittiin_check" <?php checked( noste_check_array_data( $data, 'muu_13_merkittiin_check' ), 'on', true); ?>>
                                    </label>
                                    <span class="text-[#586B74] text-[15px]">Merkittiin, että rakennusajan vakuuksien vaihto takuuajan vakuuksiksi on toteutettu</span>
                                    <input type="text" name="muu_13_merkittiin_date" placeholder="XX.XX.XXXX" class="w-full lg:w-[119px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_html( noste_check_array_data( $data, 'muu_13_merkittiin_date' ) ); ?>">
                                </div>
                                <div class="flex items-start gap-3 my-3">
                                    <label class="inline-flex items-center gap-2 cursor-pointer mt-[5px]">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="todettiin_13_check" <?php checked( noste_check_array_data( $data, 'todettiin_13_check' ), 'on', true); ?>>
                                    </label>
                                    <span class="text-[#586B74]">Todettiin, että rakennusaikaisen vakuuden voi päättää, kun kaikki virhe- ja puutetyöt sekä jälkityöt on tehty.</span>
                                </div>
                                <div class="flex flex-col flex-wrap lg:flex-row lg:items-center gap-2 my-2">
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="urakoitsijan_13_check" <?php checked( noste_check_array_data( $data, 'urakoitsijan_13_check' ), 'on', true); ?>>
                                    </label>
                                    <span class="text-[#586B74] text-[15px]">Urakoitsijan tulee huomioida, että nykyinen rakennusajan vakuus on päättymässä</span>
                                    <input type="text" name="urakoitsijan_13_date" placeholder="XX.XX.XXXX" class="w-full lg:w-[119px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_html( noste_check_array_data( $data, 'urakoitsijan_13_date' ) ); ?>">
                                </div>
                                <div class="flex items-start gap-3 my-3">
                                    <label class="inline-flex items-center gap-2 cursor-pointer mt-[5px]">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="todettiin_13_check" <?php checked( noste_check_array_data( $data, 'todettiin_13_check' ), 'on', true); ?>>
                                    </label>
                                    <span class="text-[#586B74]">Todettiin, että urakoitsija toimittaa takuuajan vakuuden tässä taloudellisessa loppuselvityksessä kirjatun lopullisen urakkasumman mukaisesti.</span>
                                </div>
                                <div class="flex items-center gap-3 mt-3">
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="muut_asiat_13_muu_check" <?php checked( noste_check_array_data( $data, 'muut_asiat_13_muu_check' ), 'on', true); ?>>
                                    </label>
                                    <input type="text" name="muut_asiat_13_muu_value" placeholder="Muu" class="w-full lg:w-[120px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_html( noste_check_array_data( $data, 'muut_asiat_13_muu_value' ) ); ?>">
                                </div>
            
                                <h2 class="flex gap-10 text-black text-[20px] font-medium mt-10">
                                    <span>14.</span> 
                                    <span>PÖYTÄKIRJAN TARKISTAMINEN JA ALLEKIRJOITTAMINEN</span>
                                </h2>
                                <div class="flex items-start gap-3 my-3">
                                    <label class="inline-flex items-center gap-2 cursor-pointer mt-[5px]">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="sopijapuolet_14_check" <?php checked( noste_check_array_data( $data, 'sopijapuolet_14_check' ), 'on', true); ?>>
                                    </label>
                                    <span class="text-[#586B74]">Sopijapuolet ovat allekirjoittaneet tämän taloudellisen loppuselvityksen pöytäkirjan sähköisesti. Pöytäkirja on sitova, kun molemmat osapuolet ovat sen allekirjoittaneet. Kumpikin sopijapuoli tallentaa ja/tai tulostaa allekirjoituspalvelujärjestelmästä oman asiakirjakappaleensa.</span>
                                </div>
                                <div class="flex items-start gap-3 my-3">
                                    <label class="inline-flex items-center gap-2 cursor-pointer mt-[5px]">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="taman_tal_14_check" <?php checked( noste_check_array_data( $data, 'taman_tal_14_check' ), 'on', true); ?>>
                                    </label>
                                    <span class="text-[#586B74]">Tämän taloudellisen loppuselvityksen pöytäkirjan allekirjoituksellaan vahvistavat Tilaajan ja Urakoitsijan allekirjoitusoikeudelliset edustajat.</span>
                                </div>
            
                                <p class="text-[#586B74] mt-10 mb-5">Tilaaja:</p>
                                <div class="flex items-center mt-5 mb-5">
                                    <label class="inline-flex items-center gap-2 cursor-pointer w-[30%]">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_p114_check" <?php checked( noste_check_array_data( $data, 'noste_p114_check' ), 'on', true); ?>>
                                        <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P1', true ), 'P1') ); ?></span>
                                    </label>
            
                                    <span class="text-[#586B74] block">Partners at Noste Oy</span>
                                </div>
                                <div class="flex items-center mt-5 mb-5">
                                    <label class="inline-flex items-center gap-2 cursor-pointer w-[30%]">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_t314_check" <?php checked( noste_check_array_data( $data, 'noste_t314_check' ), 'on', true); ?>>
                                        <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T3', true ), 'T3') ); ?></span>
                                    </label>
            
                                    <span class="text-[#586B74] text-[15px] block italic">
                                        <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T2', true ), 'T2') ); ?> </span> c/o <span class="text-[#00B2A9] italic"> <?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T1', true ), 'T1') ); ?></span>
                                    </span>
                                </div>
                                <div class="flex items-center mt-5">
                                    <div class="flex items-center gap-3 w-[30%]">
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="poytakirjan_14_muu_check" <?php checked( noste_check_array_data( $data, 'poytakirjan_14_muu_check' ), 'on', true); ?>>
                                        </label>
                                        <input type="text" name="poytakirjan_14_muu_value" placeholder="Muu" class="w-full lg:w-[120px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_html( noste_check_array_data( $data, 'poytakirjan_14_muu_value' ) ); ?>">
                                    </div>
            
                                    <input type="text" name="poytakirjan_14_muu_part" placeholder="T2 c/o T1" class="w-full lg:w-[120px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_html( noste_check_array_data( $data, 'poytakirjan_14_muu_part' ) ); ?>">
                                </div>
            
                                <p class="text-[#586B74] mt-10 mb-5">Urakoitsija:</p>
                                <div class="flex items-center mt-5 mb-5">
                                    <label class="inline-flex items-center gap-2 cursor-pointer w-[30%]">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_u414_check" <?php checked( noste_check_array_data( $data, 'noste_u414_check' ), 'on', true); ?>>
                                        <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_U4', true ), 'U4') ); ?></span>
                                    </label>
            
                                    <span class="text-[#586B74] text-[15px] block italic">
                                        <span class="text-[#00B2A9] italic">U1 </span>
                                    </span>
                                </div>
                                <div class="flex items-center mt-5 mb-5">
                                    <div class="flex items-center gap-3 w-[30%]">
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="urakoitsija_14_muu_check" <?php checked( noste_check_array_data( $data, 'urakoitsija_14_muu_check' ), 'on', true); ?>>
                                        </label>
                                        <input type="text" name="urakoitsija_14_muu_value" placeholder="Muu" class="w-full lg:w-[120px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_html( noste_check_array_data( $data, 'urakoitsija_14_muu_value' ) ); ?>">
                                    </div>
            
                                    <span class="text-[#586B74] text-[15px] block italic">
                                        <span class="text-[#00B2A9] italic">U1 </span>
                                    </span>
                                </div>
            
                                <div class="flex flex-col flex-wrap lg:flex-row lg:items-center gap-2 mt-20">
                                    <span class="text-[#283B44] text-[15px] font-medium">Liitteitä</span>
                                    <input type="text" name="noste_14_liitteita_value" placeholder="x kpl" class="w-full lg:w-[119px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_html( noste_check_array_data( $data, 'noste_14_liitteita_value' ) ); ?>">
                                </div>
            
                            </div>
                        
                        </div>
                    </div>
                    <!-- / Card Body -->

                    <!-- Card footer -->
                    <?php echo wp_kses_post(noste_form_footer('form')); ?>
                    <!-- Card footer -->
                </form>
            </div>


        </div>
    </div>
</section>
<!-- Main Content -->