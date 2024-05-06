<?php 

if ( !is_singular( 'projektitiedot' ) ) {
   return;
}

$project_id = get_the_ID();
$ptname = implode('_', ['noste', $_GET['tm'], $_GET['tmin']]);

$data = !empty( get_post_meta( $project_id, $ptname, true ) ) ? json_decode( get_post_meta( $project_id, $ptname, true ), true ) : '';

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
                    <input type="hidden" name="ptname" value="<?php echo esc_attr( $ptname ) ; ?>">
                    <input type="hidden" name="action" value="noste_update_project_step">
                    <input type="hidden" name="post_id" value="<?php echo esc_attr( $project_id ); ?>">

                    <!-- Card Body -->
                    <div class="px-4 md:px-8 pt-6 pb-10 lg:h-[645px] overflow-y-auto no-scrollbar scroll-smooth">
                        <div class="">
                            <div class="max-w-[800px] mx-auto mt-20">
                                <div class="mb-[30px]">
                                    <span class="font-medium italic text-[#00B2A9] block"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K1', true ), 'K1') ); ?></span>
                                    <span class="font-medium italic text-[#00B2A9] block"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K4', true ), 'K4') ); ?></span>
                                </div>
            
                                <div class="mb-[30px]">
                                    <h1 class="text-black text-[25px] font-medium mb-4">Vuokrakohteen hallinnan luovutusta koskeva pöytäkirja</h1>
                                </div>
            
                                <div class="flex items-center mb-5">
                                    <span class="text-[#283B44] text-[17px] w-[30%] font-medium">Vuokranantaja:</span>
                                    <span class="text-[#586B74] text-[14px] block">
                                        <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T1', true ), 'T1') ); ?></span> (Y -tunnus <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T7', true ), 'T7') ); ?></span> )
                                    </span>
                                </div>
                                <div class="flex items-center mb-5">
                                    <span class="text-[#283B44] text-[17px] w-[30%] font-medium">Vuokralainen:</span>
                                    <span class="text-[#586B74] text-[14px] block">
                                        <span class="text-[#00B2A9] italic">V1 </span> (Y -tunnus <span class="text-[#00B2A9] italic">V6</span> )
                                    </span>
                                </div>
                            </div>
            
                            <div class="help_wrap mb-5 relative">
                                <div class="max-w-[800px] mx-auto flex items-center">
            
                                    <span class="text-[#283B44] text-[17px] w-[30%] font-medium">Vuokrasopimus:</span>
                                    <span class="h-[1px] bg-[#94969C] inline-block self-end w-full mt-5 lg:mt-0 lg:w-[200px]"></span>
            
                                    <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                                    
                                    <hr class="help_line w-[200px] border border-solid border-[#E1E1EA] hidden">
                                </div>
            
                                <div class="help_show text-[#586B74] text-[14px] lg:w-[310px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-80px] hidden">
                                    Vuokrasopimuksen yksilöinti. Esim. kansakoulukatu 10, 6. krs liiketiloja koskeva vuokrasopimus, joka on allekirjoitettu Vuokralaisen osalta 1.1.1900 ja Vuokranantajan osalta 2.1.1900.
                                </div>
                            </div>
            
                            <div class="max-w-[800px] mx-auto">
                                <div class="flex items-center mb-5">
                                    <span class="text-[#283B44] text-[17px] w-[30%] font-medium">Aika:</span>
                                    <div class="flex flex-col lg:flex-row lg:items-center gap-2">
                                        <span class="">
                                            <input type="text" name="pilar_VA1" placeholder="xx.xx.xxxx" class="w-full lg:w-[120px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                        </span>
                                        <span class="text-[#283B44] text-[15px]">klo</span>
                                        <span class="">
                                            <input type="text" name="pilar_VA1" placeholder="xx.xx" class="w-full lg:w-[120px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                        </span>
                                    </div>
                                </div>
                                <div class="flex items-center mb-5">
                                    <span class="text-[#283B44] text-[17px] w-[30%] font-medium">Paikka:</span>
                                    <input type="text" name="pilar_VA1" placeholder="X" class="w-full lg:w-[120px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </div>
                                <div class="flex items-center mb-5">
                                    <span class="text-[#283B44] text-[17px] w-[30%] font-medium">Läsnä:</span>
                                    <span class="text-[#283B44] text-[17px] w-[30%] font-medium">Vuokralaisen edustajat:</span>
                                </div>
                                <div class="flex items-center mb-5">
                                    <span class="text-[#283B44] text-[17px] w-[30%] font-medium"></span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer w-[40%]">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                        <span class="italic text-[#00B2A9]">V2</span>
                                    </label>
                                    <span class="text-[#00B2A9] italic">V1</span>
                                </div>
                                <div class="flex items-center mb-5">
                                    <span class="text-[#283B44] text-[17px] w-[30%] font-medium"></span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer w-[40%]">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                        <span class="italic text-[#00B2A9]">V3</span>
                                    </label>
                                    <span class="text-[#00B2A9] italic">V1</span>
                                </div>
                                <div class="flex items-center mb-5">
                                    <span class="text-[#283B44] text-[17px] w-[30%] font-medium"></span>
                                    <div class="flex items-center gap-3 w-[40%]">
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <input type="text" name="pilar_filed8_6" placeholder="Muu" class="w-full lg:w-[120px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </div>
                                    <input type="text" name="pilar_filed8_6" placeholder="V1" class="w-full lg:w-[120px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </div>
                                
                                <div class="flex items-center mt-10 mb-5">
                                    <span class="text-[#283B44] text-[17px] w-[30%] font-medium"></span>
                                    <span class="text-[#283B44] text-[17px] w-[30%] font-medium">Vuokranantajan edustajat:</span>
                                </div>
                                <div class="flex items-center mb-5">
                                    <span class="text-[#283B44] text-[17px] w-[30%] font-medium"></span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer w-[40%]">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                        <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T3', true ), 'T3') ); ?></span>
                                    </label>
                                    <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T2', true ), 'T2') ); ?></span>
                                </div>
                                <div class="flex items-center mb-5">
                                    <span class="text-[#283B44] text-[17px] w-[30%] font-medium"></span>
                                    <div class="flex items-center gap-3 w-[40%]">
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <input type="text" name="pilar_filed8_6" placeholder="Muu" class="w-full lg:w-[120px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </div>
                                    <input type="text" name="pilar_filed8_6" placeholder="T2" class="w-full lg:w-[120px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </div>
                                <div class="flex items-center mb-5">
                                    <span class="text-[#283B44] text-[17px] w-[30%] font-medium"></span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer w-[40%]">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                        <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K6', true ), 'K6') ); ?></span>
                                    </label>
                                    <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K22', true ), 'K22') ); ?></span>
                                </div>
                                <div class="flex items-center mb-5">
                                    <span class="text-[#283B44] text-[17px] w-[30%] font-medium"></span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer w-[40%]">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                        <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P1', true ), 'P1') ); ?></span>
                                    </label>
                                    <span class="text-[#586B74]">Partners at Noste Oy</span>
                                </div>
                                <div class="flex items-center mb-5">
                                    <span class="text-[#283B44] text-[17px] w-[30%] font-medium"></span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer w-[40%]">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                        <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P4', true ), 'P4') ); ?></span>
                                    </label>
                                    <span class="text-[#586B74]">Partners at Noste Oy</span>
                                </div>
                                <div class="flex items-center mb-5">
                                    <span class="text-[#283B44] text-[17px] w-[30%] font-medium"></span>
                                    <div class="flex items-center gap-3 w-[40%]">
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <input type="text" name="pilar_filed8_6" placeholder="Muu" class="w-full lg:w-[120px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </div>
                                    <input type="text" name="pilar_filed8_6" placeholder="X" class="w-full lg:w-[120px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </div>
            
                                <div class="flex items-center mt-10 mb-5">
                                    <span class="text-[#283B44] text-[17px] w-[30%] font-medium"></span>
                                    <span class="text-[#283B44] text-[17px] w-[30%] font-medium">Suunnittelijoiden edustajat:</span>
                                </div>
                                <div class="flex items-center mb-5">
                                    <span class="text-[#283B44] text-[17px] w-[30%] font-medium"></span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer w-[40%]">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                        <span class="text-[#586B74]">Ei paikalla</span>
                                    </label>
                                </div>
                                <div class="flex items-center mb-5">
                                    <span class="text-[#283B44] text-[17px] w-[30%] font-medium"></span>
                                    <div class="flex items-center gap-3 w-[40%]">
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <input type="text" name="pilar_filed8_6" placeholder="Muu" class="w-full lg:w-[120px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </div>
                                    <input type="text" name="pilar_filed8_6" placeholder="X" class="w-full lg:w-[120px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </div>
            
                                <div class="flex items-center mt-10 mb-5">
                                    <span class="text-[#283B44] text-[17px] w-[30%] font-medium"></span>
                                    <span class="text-[#283B44] text-[17px] w-[30%] font-medium">Urakoitsijoiden edustajat:</span>
                                </div>
                                <div class="flex items-center mb-5">
                                    <span class="text-[#283B44] text-[17px] w-[30%] font-medium"></span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer w-[40%]">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                        <span class="text-[#586B74]">Ei paikalla</span>
                                    </label>
                                </div>
                                <div class="flex items-center mb-5">
                                    <span class="text-[#283B44] text-[17px] w-[30%] font-medium"></span>
                                    <div class="flex items-center gap-3 w-[40%]">
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <input type="text" name="pilar_filed8_6" placeholder="Muu" class="w-full lg:w-[120px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </div>
                                    <input type="text" name="pilar_filed8_6" placeholder="X" class="w-full lg:w-[120px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </div>
                                
                                <h2 class="flex gap-10 text-black text-[20px] font-medium mt-10">
                                    1. HALLINNANLUOVUTUSTILAISUUDEN TARKOITUS
                                </h2>
                                <p class="text-[#586B74] ml-[60px] mt-2">Tilaisuuden tarkoituksena on tarkastaa ja hyväksyä luovutettavaksi vuokralaisen hallintaan vuokrakohde, todeta että vuokrakohde vastaa vuokrasopimuksessa sovittua sekä kirjata vuokranantajan tai vuokralaisen hallinnanluovutuksen jälkeiset toimenpiteet.</p>
                                
                                <h2 class="flex gap-10 text-black text-[20px] font-medium mt-10">
                                    2. HALLINNANLUOVUTUSTILAISUUDEN TARKOITUS
                                </h2>
                                <div class="ml-[60px] flex flex-col flex-wrap lg:flex-row lg:items-center gap-2 mt-3">
                                    <span class="text-[#586B74] text-[15px]">Vuokralaisen tiloja koskeva rakennustöiden vastaanotto on pidetty vuokranantajan toimesta</span>
                                    <input type="text" name="pilar_VA1" placeholder="XX.XX.XXXX" class="w-full lg:w-[119px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </div>
            
                                <h2 class="flex gap-10 text-black text-[20px] font-medium mt-10">
                                    3. TULEVAT TOIMENPITEET
                                </h2>
                                <div class="ml-[60px]">
                                    <div class="flex items-start gap-3 mt-3">
                                        <label class="inline-flex items-center gap-2 cursor-pointer mt-[5px]">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <span class="text-[#586B74]">Vuokralainen ja vuokranantaja ovat laatineet yhdessä vuokrakohteen virhe- ja puutelistauksen (liite1).</span>
                                    </div>
                                    <div class="flex items-start gap-3 mt-3">
                                        <label class="inline-flex items-center gap-2 cursor-pointer mt-[5px]">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <span class="text-[#586B74]">Yhteisesti todettiin, että vuokrakohteessa tehdyssä tarkastuksessa ei havaittu toimenpiteitä aiheuttavia virheitä ja puutteita.</span>
                                    </div>
                                    <div class="flex items-start gap-3 mt-3">
                                        <label class="inline-flex items-center gap-2 cursor-pointer mt-[5px]">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <span class="text-[#586B74]">Yhteisesti todettiin, että vuokrakohteessa tullaan tekemään liitteen 1 mukaiset jälkityöt kohteen hallinnanluovutuksen jälkeen. </span>
                                    </div>
                                    <p class="text-[#586B74]">Osapuolet totesivat, että liitteessä 1 esitetyt seikat eivät vaikuta vuokrakohteen hallinnanluovutukseen tai vuokralaisen oikeuteen ottaa vuokrakohde hallintaansa.</p>
                                    <div class="flex items-center gap-2">
                                        <span class="text-[#586B74] text-[15px]">Osapuolet sopivat yhteisesti, että liitteessä 1 esitetyt työt on korjattu</span>
                                        <input type="text" name="pilar_VA1" placeholder="työvaihetta" class="w-full lg:w-[130px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                        <span class="text-[#586B74] text-[15px]">mennessä. ]</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <input type="text" name="pilar_filed8_6" placeholder="Vapaa teksti." class="w-full lg:w-[120px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </div>
                                </div>
            
                                <h2 class="flex gap-10 text-black text-[20px] font-medium mt-10">
                                    4. HALLINNAN LUOVUTUKSEN VAHVISTAMINEN JA HALLINTAAN OTTAMINEN
                                </h2>
                                <p class="text-[#586B74] ml-[60px] mt-2">Tämän pöytäkirjan allekirjoituksin vuokranantaja vahvistaa luovuttaneensa vuokrakohteen vuokralaiselle vuokrasopimuksen mukaisesti ja vuokralainen vahvistaa vastaanottaneensa vuokrakohteen hallinnan vuokrasopimuksen mukaisesti.</p>
            
                                <h2 class="flex gap-10 text-black text-[20px] font-medium mt-10">
                                    5. VUOKRAVAKUUDEN TOIMITTAMINEN
                                </h2>
                                <div class="ml-[60px]">
                                    <div class="flex items-start gap-3 mt-3">
                                        <label class="inline-flex items-center gap-2 cursor-pointer mt-[5px]">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <span class="text-[#586B74]">Vuokranantaja ja vuokralainen ovat yhteisesti sopineet, ettei vuokravakuuden toimittaminen ole tarpeen.</span>
                                    </div>
                                    <div class="flex items-center gap-3 mt-3">
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <span class="text-[#586B74]">Vuokralaisen tulee toimittaa Vuokranantajalle Vuokrasopimuksen mukainen vuokravakuus.</span>
                                    </div>
                                    <div class="flex items-center gap-3 mt-3">
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <span class="text-[#586B74]">Todettiin, että Vuokralainen on toimittanut vuokravakuuden.</span>
                                    </div>
                                    <div class="flex items-center gap-3 mt-3">
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <span class="text-[#586B74]">Vakuuden toimittaminen vahvistetaan erikseen tämän hallinnanluovutuksen jälkeen.</span>
                                    </div>
                                    <div class="flex items-center gap-3 mt-3">
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <input type="text" name="pilar_filed8_6" placeholder="Vapaa teksti." class="w-full lg:w-[120px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </div>
                                </div>
            
                                <h2 class="flex gap-10 text-black text-[20px] font-medium mt-10">
                                    6. MUUT ASIAT
                                </h2>
                                <p class="text-[#586B74] ml-[60px] mt-2 mb-5">Takuuajan toimintamalli on seuraava:</p>
                                <div class="flex flex-col ml-[60px] flex-wrap lg:flex-row lg:items-center gap-2 mt-5">
                                    <span class="text-[#586B74] text-[15px]">Virheen ilmentyessä takuuaikana tilan käyttäjän reklamaation vastaanottaa kohteen</span> 
                                    <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                        [
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                        </label>
                                        <span class="flex-1 text-[#586B74] text-[14px]">huoltoyhtiö (<span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K23', true ), 'K23') ); ?></span>, <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K11', true ), 'K11') ); ?></span>, <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K12', true ), 'K12') ); ?></span>, puh <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K13', true ), 'K13') ); ?></span> )</span>
                                        ]
                                    </span>
                                    <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                        [
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                        </label>
                                        <span class="flex-1 text-[#586B74] text-[14px]">kiinteistöpäällikkö (<span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K22', true ), 'K22') ); ?></span>, <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K6', true ), 'K6') ); ?></span>, <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K9', true ), 'K9') ); ?></span>, puh. <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K10', true ), 'K10') ); ?></span> )</span>
                                        ]
                                    </span>
                                    <span class="text-[#586B74] text-[15px]">Kiinteistön yhteyshenkilö erottelee, onko kyseessä ylläpitohuollollinen toimenpide vai vuokrasopimuksen mukaisiin rakennustöihin liittyvä virhe ja toimittaa reklamaation pääurakoitsijalle tai kiinteistöhuollolle toimenpiteitä varten. Urakkaan kuuluvan reklamaation kiinteistön yhteyshenkilö välittää tiedoksi myös rakennuttajakonsultille. Rakennustöihin liittyen tehdään 2 vuotistakuutarkastus ja tarvittaessa takuuajan välitarkastus.</span>
                                </div>
            
                            </div>
            
                            <div class="help_wrap relative mb-2 mt-3">
                                <div class="max-w-[800px] mx-auto flex items-center gap-2 text-[#586B74]">
                                    <label class="inline-flex items-center gap-2 cursor-pointer ml-[65px]">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        
                                        <input type="text" name="pilar_VA1" placeholder="vapaa teksti" class="w-full lg:w-[110px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </label>
            
                                    <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                                    
                                    <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                                </div>
            
                                <div class="help_show text-[#586B74] text-[14px] lg:w-[284px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                    Tähän voi kirjata esimerkiksi avaintenluovutukseen liittyviä tietoja.
                                </div>
                            </div>
            
                            <div class="help_wrap mt-10 mb-5 relative">
                                <div class="max-w-[800px] mx-auto flex items-center gap-2">
                                    <h3 class="flex gap-10 text-black text-[20px] font-medium min-w-[215px]">
                                        7. ALLEKIRJOITUKSET
                                    </h3>
            
                                    <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                                    
                                    <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                                </div>
            
                                <div class="help_show text-[#586B74] text-[14px] lg:w-[300px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                    Valitse sähköinen tai perinteinen allekirjoitustapa. Perinteisessä täytä tiedot manuaalisesti. Voi olla useampia allekirjoittajia.
                                </div>
                            </div>
            
                            <div class="max-w-[800px] mx-auto">
                                <div class="ml-[60px]">
                                    <div class="flex items-start gap-3 mt-3">
                                        <label class="inline-flex items-center gap-2 cursor-pointer mt-[5px]">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <span class="text-[#586B74]">Sopijapuolet ovat allekirjoittaneet tämän sopimuksen sähköisesti. Sopimus on sitova, kun molemmat osapuolet ovat sen allekirjoittaneet. Kumpikin sopijapuoli tallentaa ja/tai tulostaa allekirjoituspalvelujärjestelmästä oman sopimuskappaleensa.</span>
                                    </div>
                                    <div class="flex items-start gap-3 mt-3">
                                        <label class="inline-flex items-center gap-2 cursor-pointer mt-[5px]">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <span class="text-[#586B74]">Tätä sopimusta on tehty kaksi samasanaista kappaletta, toinen vuokranantajalle ja toinen vuokralaiselle.</span>
                                    </div>
            
                                    <div class="flex items-center mt-8">
                                        <span class="text-[#586B74] text-[15px] w-[20%]">Paikka</span>
                                        <span class="h-[1px] bg-[#94969C] inline-block w-full mt-5 lg:mt-0 lg:w-[200px]"></span>
                                    </div>
                                    <div class="flex items-center mt-5">
                                        <span class="text-[#586B74] text-[15px] w-[20%]">Aika</span>
                                        <span class="h-[1px] bg-[#94969C] inline-block w-full mt-5 lg:mt-0 lg:w-[200px]"></span>
                                    </div>
                                    <p class="text-[#586B74] text-[15px] w-[20%] mt-5">Vuokranantaja</p>
                                    <div class="flex items-center gap-2 mt-5">
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                            <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T1', true ), 'T1') ); ?></span>
                                        </label>
                                        <input type="text" name="pilar_filed8_6" placeholder="c/o T2" class="w-full lg:w-[160px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </div>
                                    <div class="flex items-center mt-5">
                                        <span class="text-[#00B2A9] italic  w-[20%]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T3', true ), 'T3') ); ?></span>
                                        <span class="h-[1px] bg-[#94969C] inline-block w-full mt-5 lg:mt-0 lg:w-[290px]"></span>
                                    </div>
                                    <div class="flex items-center gap-2 mt-5">
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                            <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T1', true ), 'T1') ); ?></span>
                                        </label>
                                        <input type="text" name="pilar_filed8_6" placeholder="c/o T2" class="w-full lg:w-[160px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </div>
                                    <div class="flex items-center my-10 gap-8">
                                        <span class="h-[1px] bg-[#94969C] inline-block w-full mt-5 lg:mt-0 lg:w-[120px]"></span>
                                        <span class="h-[1px] bg-[#94969C] inline-block w-full mt-5 lg:mt-0 lg:w-[290px]"></span>
                                    </div>
                                    <p class="text-[#586B74] text-[15px] my-5">Vuokralainen</p>
            
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                        <span class="italic text-[#00B2A9]">V1</span>
                                    </label>
                                    <div class="flex items-center mt-5">
                                        <span class="italic text-[#00B2A9] w-[20%]">V2</span>
                                        <span class="h-[1px] bg-[#94969C] inline-block w-full mt-5 lg:mt-0 lg:w-[290px]"></span>
                                    </div>
            
                                    <label class="inline-flex items-center gap-2 cursor-pointer mt-10">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                        <span class="italic text-[#00B2A9]">V1</span>
                                    </label>
                                    <div class="flex items-center mt-5">
                                        <span class="italic text-[#00B2A9] w-[20%]">V3</span>
                                        <span class="h-[1px] bg-[#94969C] inline-block w-full mt-5 lg:mt-0 lg:w-[290px]"></span>
                                    </div>
            
                                    <label class="inline-flex items-center gap-2 cursor-pointer mt-10">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                        <span class="italic text-[#00B2A9]">V1</span>
                                    </label>
                                    <div class="flex items-center my-10 gap-8">
                                        <span class="h-[1px] bg-[#94969C] inline-block w-full mt-5 lg:mt-0 lg:w-[120px]"></span>
                                        <span class="h-[1px] bg-[#94969C] inline-block w-full mt-5 lg:mt-0 lg:w-[290px]"></span>
                                    </div>
                                </div>
            
                                <div class="flex flex-col flex-wrap lg:flex-row lg:items-center gap-2 mt-20">
                                    <span class="text-[#283B44] text-[15px] font-medium">LIITTEET:</span>
                                </div>
                                <div class="flex items-center mt-5">
                                    <span class="text-[#586B74] text-[14px] underline w-[15%] ">Liite 1</span>
                                    <span class="text-[#586B74] text-[14px]">Hallinnanluovutustarkastuksessa havaitut virheet ja puutteet</span>
                                </div>
                                <div class="flex items-center mt-5">
                                    <label class="inline-flex items-center gap-2 cursor-pointer w-[15%]">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                        <span class="text-[#586B74] text-[14px] underline">Liite 2</span>
                                    </label>
                                    <input type="text" name="pilar_filed8_6" placeholder="Muu, mikä" class="w-full lg:w-[160px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card Body -->

                    <!-- Card footer -->
                    <?php echo wp_kses_post(noste_form_footer('form')); ?>
                    <!-- Card footer -->
                </form>
            </div>


        </div>
    </div>
</section>
<!-- Main Content -->