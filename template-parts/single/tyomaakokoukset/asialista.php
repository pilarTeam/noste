<?php 

if ( !is_singular( 'projektitiedot' ) ) {
   return;
}

$project_id = get_the_ID();
$ptname = implode('_', ['noste', $_GET['tm'], $_GET['tmin']]);

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
                
                <form action="<?php echo esc_url( get_permalink( get_the_ID() ) ); ?>" method="post" enctype="multipart/form-data" class="ajax-submit">
                    <!-- Card Body -->
                    <?php wp_nonce_field('project_step_form_validation', 'project_step_form__nonce_field'); ?>
                    <input type="hidden" name="ptname" value="<?php echo esc_attr( $ptname ) ; ?>">
                    <input type="hidden" name="action" value="noste_update_project_step">
                    <input type="hidden" name="post_id" value="<?php echo esc_attr( $project_id ); ?>">

                    <div class="px-4 md:px-8 pt-6 pb-10 lg:h-[645px] overflow-y-auto no-scrollbar scroll-smooth">
                        
                    <div>
                            <div class="max-w-[700px] mx-auto mt-20 mb-20">
                                <div class="mb-[30px]">
                                    <span class="font-medium italic text-[#00B2A9] block"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K1', true ), 'K1') ); ?></span>
                                    <span class="font-medium italic text-[#00B2A9] block"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K4', true ), 'K4') ); ?></span>
                                </div>
                            
                                <div class="mb-[30px]">
                                    <h1 class="text-black text-[25px] font-medium mb-4">TYÖMAAKOKOUS NRO 2</h1>
                                    <p class="text-[#586B74] text-[14px] mb-5">Edellisten kokousten päätökset ja kirjaukset esitetty harmaalla.</p>
                                    <h2 class="text-black text-[25px] font-medium">ASIALISTA/PÖYTÄKIRJA</h2>
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
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
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
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
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
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                            </label>
                                            <input type="text" name="pilar_filed8_6" placeholder="Vapaa teksti" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
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
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                            </label>
                                            <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T10', true ), 'T10') ); ?></span>
                                        </div>
                                    </span>
                                
                                    <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T9', true ), 'T9') ); ?></span>
                                </div>

                                <div class="grid grid-cols-1 lg:grid-cols-3 gap-[20px] mb-5">
                                    <span class=""></span>
                                    <span class="text-[#586B74]">
                                        <div class="flex items-center gap-3">
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                            </label>
                                            <input type="text" name="pilar_filed8_6" placeholder="Vapaa teksti" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                        </div>
                                    </span>
                                
                                    <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T9', true ), 'T9') ); ?></span>
                                </div>
                                <div class="grid grid-cols-1 lg:grid-cols-3 gap-[20px] mb-5">
                                    <span class=""></span>
                                    <span class="text-[#586B74]">
                                        <div class="flex items-center gap-3">
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                            </label>
                                            <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K6', true ), 'K6') ); ?></span>
                                        </div>
                                    </span>
                                
                                    <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K22', true ), 'K22') ); ?></span>
                                </div>

                                <div class="grid grid-cols-1 lg:grid-cols-3 gap-[20px] mb-5">
                                    <span class=""></span>
                                    <span class="text-[#586B74]">
                                        <div class="flex items-center gap-3">
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                            </label>
                                            <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T3', true ), 'T3') ); ?></span>
                                        </div>
                                    </span>
                                
                                    <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T2', true ), 'T2') ); ?></span>
                                </div>

                                <div class="grid grid-cols-1 lg:grid-cols-3 gap-[20px] mb-5">
                                    <span class=""></span>
                                    <span class="text-[#586B74]">
                                        <div class="flex items-center gap-3">
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
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
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
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
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                            </label>
                                            <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P4', true ), 'P4') ); ?></span>
                                        </div>
                                    </span>
                            
                                    <span class="text-[#586B74]">Partners at Noste Oy</span>
                                </div>
                            
                            </div>
                            <div class="help_wrap mt-10 mb-5 relative">
                                <div class="help_wrap mt-10 mb-5 relative">
                                    <div class="max-w-[700px] mx-auto flex items-center gap-2">
                                        <h3 class="flex gap-20 text-black text-[20px] font-medium min-w-[295px]">
                                            <span>1.</span>
                                            <span>KOKOUKSEN AVAUS JA JÄRJESTÄYTYMINEN</span>
                                        </h3>
                                
                                        <a href="#!" class="help_click">
                                            <svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                    <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path>
                                                    <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                                </g>
                                            </svg>
                                        </a>
                                
                                        <hr class="help_line w-full lg:w-[105px] border border-solid border-[#E1E1EA] hidden">
                                    </div>
                                
                                    <div class="help_show text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                        HUOM! Kun kokouksessa käydään läpi asioita ja sovitaan jotain tehtäväksi kirjaa aina lauseen perään sulkuihin se kenelle tehtävä on osoitettu. Näin pöytäkirja toimii myös tehtäväluettelona.
                                    </div>
                                </div>

                                <div class="max-w-[700px] mx-auto">
                                    <div class="flex flex-col lg:flex-row lg:items-center gap-2 mt-5">
                                        <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                                <span class="flex-1 text-[14px] italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P1', true ), 'P1') ); ?></span>
                                            </label>
                                        </span>
                                        <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                                <span class="flex-1 text-[14px] italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P4', true ), 'P4') ); ?></span>
                                            </label>
                                        </span>
                                        <span class="text-[#586B74] text-[14px] w-full">toivotti läsnäolijat tervetulleiksi työmaan aloituskokoukseen.</span>
                                    </div>
                                
                                    <div class="flex flex-col flex-wrap lg:flex-row lg:items-center gap-2 mt-1">
                                        <span class="text-[#586B74] text-[14px] w-full">Kokouksen puheenjohtajana toimii</span>
                                        <span class="text-[#586B74] text-[14px] inline-flex gap-1">
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                                <span class="flex-1 text-[14px] italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P1', true ), 'P1') ); ?></span>
                                            </label>
                                        </span>
                                        <span class="text-[#586B74] text-[14px] inline-flex gap-1">
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                                <span class="flex-1 text-[14px] italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P4', true ), 'P4') ); ?></span>
                                            </label>
                                        </span>
                                        <span class="text-[#586B74] text-[14px] w-full">/ Partners at Noste Oy ja sihteerinä</span>
                                        <span class="text-[#586B74] text-[14px] inline-flex gap-1">
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                                <span class="flex-1 text-[14px] italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P1', true ), 'P1') ); ?></span>
                                            </label>
                                        </span>
                                        <span class="text-[#586B74] text-[14px] inline-flex gap-1">
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                                <span class="flex-1 text-[14px] italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P4', true ), 'P4') ); ?></span>
                                            </label>
                                        </span>
                                        <span class="text-[#586B74] text-[14px] w-full">/ Partners at Noste Oy. Puheenjohtaja avasi kokouksen.</span>
                                    </div>

                                </div>
                            </div>

                            

                            <div class="max-w-[700px] mx-auto">
                                <div class="flex items-center gap-2">
                                    <h3 class="flex gap-20 text-black text-[20px] font-medium min-w-[295px]">
                                        <span>2.</span>
                                        <span>HANKKEEN ESITTELY</span>
                                    </h3>
                                </div>

                                <div class="flex flex-col flex-wrap lg:flex-row lg:items-center gap-2 mt-1">
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        Todettiin, että Tilaajan ja Urakoitsijan päätösvaltaiset edustajat ovat paikalla. Kokouksen pitämisestä ja ajankohdasta on sovittu yhteisesti osapuolten kesken
                                    </span>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="xx.xx.xxxx" class="w-[120px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </span>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        . Todettiin kokous sopimuksen mukaiseksi ja päätösvaltaiseksi työmaakokoukseksi.
                                    </span>
                                </div>
                            </div>
                            
                            <div class="max-w-[700px] mx-auto mt-10">
                                <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                    <span>3. </span>
                                    <span>EDELLISEN TYÖMAAKOKOUKSEN PÖYTÄKIRJA</span>
                                </h3>
                                <div class="flex gap-1 mb-4"> 
                                    <div class="flex gap-3">
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">Hyväksyttiin työmaakokouksen nro 1 pöytäkirja kokouksen kulun mukaisena </p>
                                    </div>
                                    <div class="flex gap-3">
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">jälkikirjauksineen.</p>
                                    </div>
                                </div>
                                <div  class="mb-5">
                                    <div class="flex items-center gap-3 mb-4">
                                        <span class="inline-block mr-5">-</span>
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">Osapuolet ovat allekirjoittaneet TMK1 pöytäkirjan</p>
                                        <span class="text-[#586B74] text-[14px] w-full">
                                            <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-[200px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                        </span>
                                    </div>
                                    <div class="flex gap-3 mb-4">
                                        <span class="inline-block mr-5">-</span>
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">Osapuolet allekirjoittivat TMK1 pöytäkirjan. </p>
                                    </div>
                                    <div class="flex gap-3 mb-4">
                                        <span class="inline-block mr-5">-</span>
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">Hyväksyttiin TMK1 pöytäkirja allekirjoitettavaksi sähköisesti tämän kokouksen jälkeen (<span class="font-bold text-black">NOSTE</span>).</p>
                                    </div>
                                    
                                </div>

                                <div class="flex gap-1 mb-4"> 
                                    <div class="flex gap-3">
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">Hyväksyttiin työmaakokouksen nro 1 pöytäkirja kokouksen kulun mukaisena seuraavin korjauksin:</p>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex items-center gap-3 mb-4">
                                        <span class="inline-block mr-5 text-white">-</span>
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <span class="text-[#586B74] text-[14px] w-full">
                                            <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-[280px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-3 mb-4">
                                        <span class="inline-block mr-5">-</span>
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">Yllä olevat korjaukset on päivitetty kokousvälillä TMK1 pöytäkirjaan.</p>
                                    </div>

                                    <div class="flex items-center gap-3 mb-4">
                                        <span class="inline-block mr-5 text-white">-</span>
                                        <span class="inline-block mr-5">o</span>
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">Osapuolet ovat allekirjoittaneet TMK1 pöytäkirjan</p>
                                        <span class="text-[#586B74] text-[14px] w-full">
                                            <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-[120px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                        </span>
                                    </div>

                                    <div class="flex gap-3 mb-4">
                                        <span class="inline-block mr-5 text-white">-</span>
                                        <span class="inline-block mr-5">o</span>
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">Osapuolet allekirjoittivat päivitetyn TMK1 pöytäkirjan</p>
                                    </div>
                                    <div class="flex gap-3 mb-4">
                                        <span class="inline-block mr-5 text-white">-</span>
                                        <span class="inline-block mr-5">o</span>
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">Rakennuttajakonsultti lähettää päivitetyn TMK1 pöytäkirjan allekirjoitettavaksi sähköisesti yllä olevin muutoksin(<span class="font-bold text-black">NOSTE</span>).</p>
                                    </div>

                                    <div class="flex items-center gap-3 mb-4">
                                        <span class="inline-block mr-5">-</span>
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">Päivitetään yllä olevat allekirjoitettavaan TMK1 pöytäkirjaan kokouksen jälkeen ja hyväksytään päivitetty TMK1 pöytäkirja allekirjoitettavaksi sähköisesti. (<span class="font-bold text-black">NOSTE</span>)</p>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <div class="max-w-[700px] mx-auto mt-10">
                                <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                    <span>4. </span>
                                    <span>YHTEYSHENKILÖT JA YHTEISTOIMINTA</span>
                                </h3>
                                <div class="mb-5">
                                    <p class="text-[#586B74] text-[14px] leading-7">KOHTEEN NIMI JA OSOITE</p>
                                    <p class="text-[#586B74] text-[14px] leading-7">Kohde: <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K1', true ), 'K1') ); ?></span>, <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K4', true ), 'K4') ); ?></span></p>
                                    <p class="text-[#586B74] text-[14px] leading-7">Osoite: <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K2', true ), 'K2') ); ?></span>, <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K3', true ), 'K3') ); ?></span></p>
                                </div>
                                <p class="text-[#586B74] text-[14px] leading-7 mb-5">PROJEKTIN OSAPUOLET</p>


                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px]">
                                    <p class="mb-5 text-black text-[14px] font-medium">Rakennuttaja</p>
                                    <p class="italic text-[#00B2A9] text-[14px] font-medium"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K1', true ), 'K1') ); ?></p>
                                </div>
                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px] mb-5">
                                    <p class="mb-5 text-black text-[14px] font-medium">Projektinjohtokonsultti</p>
                                    <p class="mb-5 text-black text-[14px] font-medium">Partners at Noste Oy</p>
                                </div>
                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px] mb-5">
                                    <div class="flex gap-3">
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">Projektipäällikkö</p>
                                    </div>
                                    <p class="text-[#586B74] text-[14px]  leading-7"><span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P1', true ), 'P1') ); ?></span>, puh. <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P2', true ), 'P2') ); ?></span></p>
                                </div>
                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px] mb-5">
                                    <div class="flex gap-3">
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">Projektijohtamisen asiantuntija</p>
                                    </div>
                                    <p class="text-[#586B74] text-[14px]  leading-7"><span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P4', true ), 'P4') ); ?></span>, puh. <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P5', true ), 'P5') ); ?></span></p>
                                </div>
                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px]">
                                    <p class="mb-5 text-black text-[14px] font-medium">Pääurakoitsija</p>
                                    <p class="italic text-[#00B2A9] text-[14px] font-medium"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_U1', true ), 'U1') ); ?></p>
                                </div>
                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px]">
                                    <p class="mb-5 text-black text-[14px]">Työnjohtaja</p>
                                    <p class="text-[#586B74] text-[14px]  leading-7"><span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_U7', true ), 'U7') ); ?></span>, puh. <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_U9', true ), 'U9') ); ?></span></p>
                                </div>
                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px]">
                                    <p class="mb-5 text-black text-[14px] font-medium">Tilasuunnittelu</p>
                                    <p class="italic text-[#00B2A9] text-[14px] font-medium"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T9', true ), 'T9') ); ?></p>
                                </div>
                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px] mb-5">
                                    <input type="text" name="pilar_filed8_6_4" placeholder="Sisustusarkkitehti" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    <p class="text-[#586B74] text-[14px]  leading-7"><span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T10', true ), 'T10') ); ?></span>, puh. <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T11', true ), 'T11') ); ?></span></p>
                                </div>
                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px]">
                                    <p class="mb-5 text-black text-[14px] font-medium">Käyttäjä</p>
                                    <p class="italic text-[#00B2A9] text-[14px] font-medium"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_V1', true ), 'V1') ); ?></p>
                                </div>
                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px]">
                                    <p class="mb-5 text-black text-[14px] font-medium">Kiinteistömanageeraus</p>
                                    <p class="italic text-[#00B2A9] text-[14px] font-medium"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K22', true ), 'K22') ); ?></p>
                                </div>
                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px] mb-5">
                                    <input type="text" name="pilar_filed8_6_4" placeholder="Kiinteistöpäällikkö" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    <p class="text-[#586B74] text-[14px] leading-7"><span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K6', true ), 'K6') ); ?></span>, puh. <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K10', true ), 'K10') ); ?></span></p>
                                </div>
                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px]">
                                    <p class="mb-5 text-black text-[14px] font-medium">Huolto</p>
                                    <p class="italic text-[#00B2A9] text-[14px] font-medium"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K23', true ), 'K23') ); ?></p>
                                </div>
                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px] mb-5">
                                    <span></span>
                                    <p class="text-[#586B74] text-[14px]  leading-7"><span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K11', true ), 'K11') ); ?></span>, puh. <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K13', true ), 'K13') ); ?></span></p>
                                </div>
                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px] mb-5">
                                    <div class="flex gap-3">
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <p class="text-black text-[14px] font-medium">Aulapalvelut</p>
                                    </div>
                                    <p class="text-[#586B74] text-[14px]  leading-7"><span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P1', true ), 'P1') ); ?></span>, puh. <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P2', true ), 'P2') ); ?></span></p>
                                </div>
                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px] mb-5">
                                    <span></span>
                                    <p class="text-[#586B74] text-[14px]  leading-7">Aukioloajat klo <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K16', true ), 'K16') ); ?></span></p>
                                </div>
                            </div>
                            
                            <div class="max-w-[700px] mx-auto mt-10">
                                <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                    <span>5. </span>
                                    <span>SOPIMUSASIAT JA -LIITTEET</span>
                                </h3>
                            
                                <p class="text-[#586B74] text-[14px] leading-7 mb-8">URAKKASOPIMUS JA -AIKA</p>

                                <p class="text-[#586B74] text-[14px] leading-7">Urakkamuotona on kiinteähintainen kokonaisurakka.</p>
                                <p class="text-[#586B74] text-[14px] leading-7 mb-8">Urakkasopimuksen tilanne</p>
                                
                                <div class="flex gap-2 mb-5">
                                    <div class="flex items-center gap-3">
                                        <span class="inline-block mr-5">-</span>
                                        <span class="inline-block mr-5"></span>
                                        <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    </div>

                                    <div class="flex gap-3">
                                        <div class="flex items-center gap-3">
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                            </label>
                                            <p class="text-[#586B74] text-[14px] leading-7">Kesken</p>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                            </label>
                                            <p class="text-[#586B74] text-[14px] leading-7">Kommenteilla</p>
                                        </div>
                                        <div class="flex gap-3">
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                            </label>
                                            <p class="text-[#586B74] text-[14px] leading-7">Allekirjoitettu</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="help_wrap relative">
                                <div class="max-w-[700px] mx-auto flex gap-2 mb-5">
                                    <div class="flex items-center gap-3">
                                        <span class="inline-block mr-5">-</span>
                                        <label class="inline-flex gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    </div>
                                    
                                    <div class="flex items-center  gap-3">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                        <a href="#!" class="help_click">
                                            <svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                    <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path>
                                                    <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                                </g>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="help_show text-[#586B74] text-[14px] lg:w-[180px] 2xl:w-[335px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:ml-[15px] lg:left-[70%] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                    <hr class="inline-block absolute right-[100%] top-[10px] w-full border border-solid border-[#E1E1EA]">
                                    <span>Tilanne jos poikkeava: Urakoitsija allekirjoittanut, allekirjoitetaan sähköisesti jne."</span>
                                </div>
                            </div>

                            <div class="max-w-[700px] mx-auto">
                                <div class="flex gap-2 mb-5">
                                    <div class="flex items-center gap-3">
                                        <span class="inline-block mr-5">-</span>
                                        <label class="inline-flex gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    </div>
                                    <div class="flex gap-3">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </div>
                                </div>


                                <p class="text-[#586B74] text-[14px] leading-7 mb-8">Aikataulu</p>
                                
                                <div class="flex gap-2 mb-5">
                                    <div class="flex items-center gap-3">
                                        <span class="inline-block mr-5">-</span>
                                        <span class="inline-block mr-5"></span>
                                        <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    </div>
                                
                                    <div class="flex gap-3">
                                        <p class="text-[#586B74] text-[14px] leading-7">Todettiin, että urakkasopimuksen mukainen valmistumisaika on xx.xx.xxxx.</p>
                                    </div>
                                </div>
                                
                                <div class="flex gap-2 mb-5">
                                    <div class="flex items-center gap-3">
                                        <span class="inline-block mr-5">-</span>
                                        <label class="inline-flex gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    </div>
                                    <div class="flex gap-3">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </div>
                                </div>
                                <div class="flex gap-2 mb-5">
                                    <div class="flex items-center gap-3">
                                        <span class="inline-block mr-5">-</span>
                                        <label class="inline-flex gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    </div>
                                    <div class="flex gap-3">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </div>
                                </div>

                                <p class="text-[#586B74] text-[14px] leading-7">LASKUTUSKÄYTÄNTÖ</p>
                                <p class="text-[#586B74] text-[14px] leading-7 mb-8">Aikataulu</p>
                                
                                <div class="flex gap-2 mb-5">
                                    <div class="flex items-center gap-3">
                                        <span class="inline-block mr-5">-</span>
                                        <span class="inline-block mr-5"></span>
                                        <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    </div>
                                
                                    <div class="flex gap-3">
                                        <p class="text-[#586B74] text-[14px] leading-7">Kesken/Kommenteilla/Hyväksytty</p>
                                    </div>
                                </div>
                                
                                <div class="flex gap-2 mb-5">
                                    <div class="flex items-center gap-3">
                                        <span class="inline-block mr-5">-</span>
                                        <label class="inline-flex gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    </div>
                                    <div class="flex gap-3">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </div>
                                </div>
                                <div class="flex gap-2 mb-5">
                                    <div class="flex items-center gap-3">
                                        <span class="inline-block mr-5">-</span>
                                        <label class="inline-flex gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    </div>
                                    <div class="flex gap-3">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </div>
                                </div>

                                <p class="text-[#586B74] text-[14px] leading-7 mb-8">Laskujen tarkastaminen</p>

                                <div class="mb-5">
                                    <div class="flex items-center gap-3">
                                        <span class="inline-block mr-5">-</span>
                                        <span class="inline-block mr-5"></span>
                                        <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                        <p class="text-[#586B74] text-[14px] leading-7">Ennen laskujen lähettämistä urakoitsijan on hyväksytettävä laskutettavat maksuerät</p>
                                    </div>
                                    <p class="text-[#586B74] text-[14px] leading-7">rakennuttajakonsultilla urakkasopimuksessa kirjatun mukaisesti ja liitettävä rakennuttajakonsultin hyväksyntä osaksi laskua.</p>
                                </div>
                                <div class="flex gap-2 mb-5">
                                    <div class="flex items-center gap-3">
                                        <span class="inline-block mr-5">-</span>
                                        <label class="inline-flex gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    </div>
                                    <div class="flex gap-3">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </div>
                                </div>

                                <p class="text-[#586B74] text-[14px] leading-7 mb-8">Laskutusohje</p>

                                <div class="mb-5">
                                    <div class="flex items-center gap-3">
                                        <span class="inline-block mr-5">-</span>
                                        <span class="inline-block mr-5"></span>
                                        <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                        <p class="text-[#586B74] text-[14px] leading-7">Verkkolaskutusosoite:</p>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <div class="flex items-center gap-3">
                                        <span class="inline-block mr-5"></span>
                                        <span class="inline-block mr-5"></span>
                                        <p class="text-[#586B74] text-[14px] leading-7"></p>
                                        <p class="text-[#586B74] text-[14px] leading-7"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_M1', true ), 'M1') ); ?></p>
                                    </div>
                                </div>


                                <div class="flex gap-2 mb-5">
                                    <div class="flex items-center gap-3">
                                        <span class="inline-block mr-5">-</span>
                                        <span class="inline-block mr-5"></span>
                                        <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    </div>
                                
                                    <div class="flex gap-3">
                                        <div class="flex items-center gap-3">
                                            <p class="text-[#586B74] text-[14px] leading-7">Laskujen viitteeksi tulee laittaa</p>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                            </label>
                                            <p class="text-[#586B74] text-[14px] leading-7">hankenumero K8</p>
                                        </div>
                                        <div class="flex gap-3">
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                            </label>
                                            <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                        </div>
                                    </div>
                                </div>

                                <div class="flex gap-2 mb-5">
                                    <div class="flex items-center gap-3">
                                        <span class="inline-block mr-5">-</span>
                                        <label class="inline-flex gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    </div>
                                    <div class="flex gap-3">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </div>
                                </div>
                            </div>

                            <div class="help_wrap relative mb-4 mt-10">
                                <div class="max-w-[700px] mx-auto flex items-center gap-2">
                                    <label class="inline-flex items-center gap-2 cursor-pointer min-w-[155px]">                        
                                        <span class="text-[#586B74]">KOKOUSKÄYTÄNNÖT</span>
                                    </label>
                            
                                    <a href="#!" class="help_click">
                                        <svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path>
                                                <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                            </g>
                                        </svg>
                                    </a>
                            
                                    <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                                </div>
                            
                                <div class="help_show text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                    Mikäli työmaa on jo käynnissä, mutta et ole vielä saanut, pyydä työvaiheilmoitus (=TVI), josta saat kätevästi työmaatilanteen hahmoteltua. Työvaiheilmoituksesta tulee käydä ilmi: Työmaan vahvuus, työmaatilanne, aikataulutilanne, suunnitelmapuutteet ja lisätyöesitykset kts urakkasopimus.
                                </div>
                            </div>

                            <div class="max-w-[700px] mx-auto">
                                <p class="text-[#586B74] text-[14px] leading-7">Työmaakokouksiin osallistuvat ensisijaisesti urakoitsijat ja rakennuttajakonsultti.</p>

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5">-</span>
                                    <span class="inline-block mr-5"></span>
                                    <p class="text-[#586B74] text-[14px] leading-7">Suunnittelijat kutsutaan työmaakokouksiin vain tarvittaessa.</p>
                                </div>
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">Tilasuunnittelija kutsuttu aloituskokoukseen</p>
                                </div>

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5">-</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">Pääurakoitsija laatii urakkasopimuksen mukaisesti työvaiheilmoitukset, joista viimeisin liitetään osaksi työmaakokouspöytäkirjaa.</p>
                                </div>
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5">-</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">Työmaakokouksia järjestetään arviolta kerran kuukaudessa. Kuitenkin tarpeen mukaan.</p>
                                </div>

                                <div class="flex gap-2 mb-5">
                                    <div class="flex items-center gap-3">
                                        <span class="inline-block mr-5">-</span>
                                        <label class="inline-flex gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    </div>
                                    <div class="flex gap-3">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </div>
                                </div>


                                <div class="mt-10 mb-4">
                                    <p class="text-[#586B74] text-[14px] leading-7">VAKUUTUKSET JA VAKUUDET</p>
                                    <p class="text-[#586B74] text-[14px] leading-7">Todistus vastuuvakuutuksesta</p>
                                </div>

                                <div class="flex items-center gap-3 mb-10">
                                    <span class="inline-block mr-5">-</span>
                                    <span class="inline-block mr-5"></span>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <p class="text-[#586B74] text-[14px] leading-7">Urakoitsija on toimittanut todistuksen voimassa olevasta vastuuvakuutuksesta sekä Luotettava Kumppani-raportin tarjouksen jättämisen yhteydessä, OK.</p>
                                </div>

                                <p class="text-[#586B74] text-[14px] leading-7 mb-4">Rakennustyövakuutuksen toimittaminen</p>

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5">-</span>
                                    <span class="inline-block mr-5"></span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">Pääurakoitsija on toimittanut todistuksen rakennustyövakuutuksesta</p>
                                </div>

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5">-</span>
                                    <span class="inline-block mr-5"></span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">Pääurakoitsija ei ole toimittanut todistusta rakennustyövakuutuksesta, toimitetaan (U7)</p>
                                </div>

                                <div class="flex gap-2 mb-5">
                                    <div class="flex items-center gap-3">
                                        <span class="inline-block mr-5">-</span>
                                        <label class="inline-flex gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    </div>
                                    <div class="flex gap-3">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </div>
                                </div>

                                <p class="text-[#586B74] text-[14px] leading-7 mb-4">Takuuajan vakuus</p>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5">-</span>
                                    <span class="inline-block mr-5"></span>
                                    <p class="text-[#586B74] text-[14px] leading-7">Urakoitsijan tulee urakan vastaanoton yhteydessä toimittaa takuuajan vakuus, joka on 2 % laskettuna arvonlisäverottomasta urakkahinnasta lisä- ja muutostöineen. <span class="flex-1 text-[14px] italic text-[#00B2A9]">(U7)</span></p>
                                </div>

                                <div class="mt-10">
                                    <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                        <span>6.</span>
                                        <span>VIRANOMAISASIAT</span>
                                    </h3>


                                    <p class="text-[#586B74] text-[14px] leading-7 mb-4">Rakennusluvan tilanne.</p>
                                    
                                    <div class="flex items-center gap-3 mb-4">
                                        <span class="inline-block mr-5">-</span>
                                        <span class="inline-block mr-5"></span>
                                        <p class="text-[#586B74] text-[14px] leading-7">Hankkeessa tehtävät työt eivät edellytä rakennuslupaa.</p>
                                    </div>
                                </div>

                                <div>
                                    <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                        <span>7. </span>
                                        <span>AIKATAULU- JA TYÖMAATILANNE SEKÄ PÄÄURAKOITSIJAN ASIAT</span>
                                    </h3>

                                    <p class="text-[#586B74] text-[14px] leading-7 mb-4">Pääurakoitsijan asiat:</p>

                                    <div class="flex items-center gap-3 mb-4">
                                        <span class="inline-block mr-5">-</span>
                                        <span class="inline-block mr-5"></span>
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                            <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">Viimeisin työvaiheilmoitus (</p>
                                        <span class="text-[#586B74] text-[14px]">
                                            <input type="text" name="pilar_filed8_6_4" placeholder="xx.xx.xxxx" class="w-[85px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                        </span>
                                        <p class="text-[#586B74] text-[14px] leading-7">) , liite 1.</p>
                                    </div>
                                    
                                    <div class="flex items-center gap-3 mb-4">
                                        <span class="inline-block mr-5">-</span>
                                        <span class="inline-block mr-5"></span>
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                            <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">Työvaiheilmoitusta ei toimitettu.</p>
                                    </div>


                                    <div class="flex items-center gap-3 mb-4">
                                        <span class="inline-block mr-5">-</span>
                                        <span class="inline-block mr-5"></span>
                                        <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                        <p class="text-[#586B74] text-[14px] leading-7">Työmaan yhteisvahvuus</p>
                                        <span class="text-[#586B74] text-[14px]">
                                            <input type="text" name="pilar_filed8_6_4" placeholder="x" class="w-[25px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                        </span>
                                        <p class="text-[#586B74] text-[14px] leading-7">hlöä.</p>
                                    </div>

                                    <div class="flex items-center gap-3 mb-4">
                                        <span class="inline-block mr-5">-</span>
                                        <span class="inline-block mr-5"></span>
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                            <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">Viimeisin työvaiheilmoitus (</p>
                                        <span class="text-[#586B74] text-[14px]">
                                            <input type="text" name="pilar_filed8_6_4" placeholder="xx.xx.xxxx" class="w-[85px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                        </span>
                                        <p class="text-[#586B74] text-[14px] leading-7">) , liite 1.</p>
                                    </div>

                                    <div class="flex items-center gap-3 mb-4">
                                        <span class="inline-block mr-5">-</span>
                                        <span class="inline-block mr-5"></span>
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                            <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">Työvaiheilmoitusta ei toimitettu.</p>
                                    </div>

                                    <div class="flex items-center gap-3 mb-4">
                                        <span class="inline-block mr-5">-</span>
                                        <span class="inline-block mr-5"></span>
                                        <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                        <p class="text-[#586B74] text-[14px] leading-7">Työmaan yhteisvahvuus</p>
                                        <span class="text-[#586B74] text-[14px]">
                                            <input type="text" name="pilar_filed8_6_4" placeholder="x" class="w-[25px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                        </span>
                                        <p class="text-[#586B74] text-[14px] leading-7">hlöä.</p>
                                    </div>


                                    <p class="text-[#586B74] text-[14px] leading-7 mb-4">Aikataulutilanne pääurakoitsijan ilmoituksen mukaisesti:</p>

                                    <div class="flex items-center gap-3 mb-4">
                                        <span class="inline-block mr-5">-</span>
                                        <span class="inline-block mr-5"></span>
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                            <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">Työmaa-aikataulu seurantaviivalla, (</p>
                                        <span class="text-[#586B74] text-[14px]">
                                            <input type="text" name="pilar_filed8_6_4" placeholder="xx.xx.xxxx" class="w-[85px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                        </span>
                                        <p class="text-[#586B74] text-[14px] leading-7">), liite 2.</p>
                                    </div>
                                    
                                    <div class="flex items-center gap-3 mb-4">
                                        <span class="inline-block mr-5">-</span>
                                        <span class="inline-block mr-5"></span>
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                            <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">Työmaa-aikataulua ei toimitettu.</p>
                                    </div>
                                    
                                    <div class="flex items-center gap-3 mb-4">
                                        <span class="inline-block mr-5">-</span>
                                        <span class="inline-block mr-5"></span>
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                            <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">Päivitetty työmaa-aikataulu seurantaviivalla, (</p>
                                        <span class="text-[#586B74] text-[14px]">
                                            <input type="text" name="pilar_filed8_6_4" placeholder="xx.xx.xxxx" class="w-[85px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                        </span>
                                        <p class="text-[#586B74] text-[14px] leading-7">), liite 2</p>
                                    </div>
                                    
                                    <div class="flex items-center gap-3 mb-4">
                                        <span class="inline-block mr-5">-</span>
                                        <span class="inline-block mr-5"></span>
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                            <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">Päivitettyä työmaa-aikataulua ei toimitettu.</p>
                                    </div>

                                </div>
                            </div>
                            <div class="help_wrap relative mb-4 mt-10">
                                <div class="max-w-[700px] mx-auto flex items-center gap-2">
                                    <label class="inline-flex items-center gap-2 cursor-pointer min-w-[325px]">
                                        <span class="inline-block mr-5">-</span>
                                        <span class="text-[#586B74]">Urakoitsijan ilmoitus aikataulutilanteesta</span>
                                    </label>
                            
                                    <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path>
                                                <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                            </g>
                                        </svg>
                                    </a>
                            
                                    <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                                </div>
                            
                                <div class="help_show text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                    Käydään läpi onko työt saatu aloitettua/milloin aloitetaan ja mikä työvaihe on menossa. Lisäksi käydään läpi muutokset/epävarmuudet loppu urakan aikataulujen suhteen. Mikäli jokin työvaihe puuttuu tai on epäselvä kirjataan siitä huomiot. Käydään läpi, saadaanko urakka valmiiksi vuokrasopimuksen mukaisesti ja tuleeko asiasta viestiä Tilaajalle ja/tai Vuokralaiselle. Tarkennetaan, että kokonaisaikataulu on kaikille selvä ja varmistetaan, että urakoitsija on suunnitellut koko aikataulun.
                                </div>
                            </div>


                            <div class="max-w-[700px] mx-auto">

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-8"></span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </span>
                                </div>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-8"></span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Tehty urakan mukaisista töistä…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </span>
                                </div>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-8"></span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Tehty urakan mukaisista töistä…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </span>
                                </div>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-8"></span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Meneillään oleva työvaihe on…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </span>
                                </div>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-8"></span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Meneillään oleva työvaihe on…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </span>
                                </div>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-8"></span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Valmistuminen vuokrasopimuksen mukaisesti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </span>
                                </div>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-8"></span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Valmistuminen vuokrasopimuksen mukaisesti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </span>
                                </div>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-8"></span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Aikataulussa epävarmuuksia? …" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </span>
                                </div>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-8"></span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Aikataulussa epävarmuuksia? …" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </span>
                                </div>
                            </div>
                            <div class="help_wrap relative mb-4">
                                <div class="max-w-[700px] mx-auto flex items-center gap-3 mb-4">
                                    <div class="flex items-center gap-3 min-w-[340px]">
                                        <span class="inline-block mr-5 text-white">-</span>
                                        <span class="inline-block mr-5">o</span>
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                        <span class="text-[#586B74] text-[14px] w-full">
                                            <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                        </span>
                                    </div>
                                    <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path>
                                                <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                            </g>
                                        </svg>
                                    </a>
                                    <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                                </div>
                                <div class="help_show text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                    Tähän voi lisätä jos urakassa on jotain erikoista koordinoitavaa aikataulun osalta, esim käyttäjän asennuksia.
                                </div>
                            </div>

                            <div class="max-w-[700px] mx-auto">
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </span>
                                </div>

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5">-</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id87">
                                        <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">Päivitetään aikataulu yllä olevien kirjausten mukaan. <span class="flex-1 text-[14px] italic text-[#00B2A9]">(U7)</span></p>
                                </div>
                                
                                <div class="flex items-center gap-3 mb-10">
                                    <span class="inline-block mr-5">-</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id87">
                                        <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">Päivitetään aikataulu yllä olevien kirjausten mukaan. <span class="flex-1 text-[14px] italic text-[#00B2A9]">(U7)</span></p>
                                </div>

                                <p class="text-[#586B74] text-[14px] leading-7 mb-5">Päivitetään aikataulu yllä olevien kirjausten mukaan.</p>
                            </div>
                            <div class="help_wrap relative mb-4">
                                <div class="max-w-[700px] mx-auto flex items-center gap-3 mb-4">
                                    <div class="flex items-center gap-3 min-w-[340px]">
                                        <span class="inline-block mr-5">-</span>
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                        <span class="text-[#586B74] text-[14px] w-full">
                                            <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                        </span>
                                    </div>
                                    <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path>
                                                <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                            </g>
                                        </svg>
                                    </a>
                                    <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                                </div>
                                <div class="help_show text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                    Tähän voi lisätä jos urakassa on jotain erikoista koordinoitavaa aikataulun osalta, esim käyttäjän asennuksia.
                                </div>
                            </div>

                            <div class="max-w-[700px] mx-auto"> 
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5">-</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </span>
                                </div>

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5">-</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">Toimitusajallisten tuotteiden hankinnan tilanne:</p>
                                </div>

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">Hankinta</p>
                                </div>

                                <div class="text-[#586B74] text-[15px] flex items-start gap-[5px] mb-4">
                                    <span class="inline-block mr-6">-</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <div class="flex flex-wrap flex-col lg:flex-row lg:items-center gap-x-2">
                                        <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                            [
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                                <span class="flex-1 text-[#586B74] text-[14px]">Urakoitsijalla selvityksessä</span>
                                            </label>
                                            ]
                                        </span>
                                        <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                            [
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                                <span class="flex-1 text-[#586B74] text-[14px]">Tilattu</span>
                                            </label>
                                            ]
                                        </span>
                                        <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                            [
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                                <span class="flex-1 text-[#586B74] text-[14px]">Toimituksessa</span>
                                            </label>
                                            ]
                                        </span>
                                        <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                            [
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                                <span class="flex-1 text-[#586B74] text-[14px]">Toimitettu työmaalle</span>
                                            </label>
                                            ]
                                        </span>
                                    </div>
                                </div>

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>

                                <div class="text-[#586B74] text-[15px] flex items-start gap-[5px] mb-4">
                                    <span class="inline-block mr-6">-</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <div class="flex flex-wrap flex-col lg:flex-row lg:items-center gap-x-2">
                                        <span class="text-[#586B74] text-[15px] inline-flex gap-1">Toimitusaika</span>
                                        <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                            [
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                                <span class="flex-1 text-[#586B74] text-[14px]">vahvistettu vapaa teksti</span>
                                            </label>
                                            ]
                                        </span>
                                        <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                            [
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                                <span class="flex-1 text-[#586B74] text-[14px]">arviolta vapaa teksti</span>
                                            </label>
                                            ]
                                        </span>
                                        <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                            [
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                                <span class="flex-1 text-[#586B74] text-[14px]">ei vielä tiedossa</span>
                                            </label>
                                            ]
                                        </span>
                                        <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                            [
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                                <span class="flex-1 text-[#586B74] text-[14px]">Toimitettu työmaalle</span>
                                            </label>
                                            ]
                                        </span>
                                    </div>
                                </div>

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[15px] inline-flex gap-1">Toimitusaika</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">Hankinta</p>
                                </div>

                                <div class="text-[#586B74] text-[15px] flex items-start gap-[5px] mb-4">
                                    <span class="inline-block mr-8 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <div class="flex flex-wrap flex-col lg:flex-row lg:items-center gap-x-2">
                                        <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                            [
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                                <span class="flex-1 text-[#586B74] text-[14px]">vahvistettu vapaa teksti</span>
                                            </label>
                                            ]
                                        </span>
                                        <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                            [
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                                <span class="flex-1 text-[#586B74] text-[14px]">arviolta vapaa teksti</span>
                                            </label>
                                            ]
                                        </span>
                                        <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                            [
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                                <span class="flex-1 text-[#586B74] text-[14px]">ei vielä tiedossa</span>
                                            </label>
                                            ]
                                        </span>
                                        <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                            [
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                                <span class="flex-1 text-[#586B74] text-[14px]">Toimitettu työmaalle</span>
                                            </label>
                                            ]
                                        </span>
                                    </div>
                                </div>
                                
                                <div class="text-[#586B74] text-[15px] flex items-start gap-[5px] mb-4">
                                    <span class="inline-block mr-8 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <div class="flex flex-wrap flex-col lg:flex-row lg:items-center gap-x-2">
                                        <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                            [
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                                <span class="flex-1 text-[#586B74] text-[14px]">vahvistettu vapaa teksti</span>
                                            </label>
                                        </span>
                                        <span class="text-[#586B74] text-[15px] inline-flex items-center gap-1">
                                            <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                            ]
                                        </span>
                                        <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                            [
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                                <span class="flex-1 text-[#586B74] text-[14px]">arviolta vapaa teksti</span>
                                            </label>
                                        </span>
                                        <span class="text-[#586B74] text-[15px] inline-flex items-center gap-1">
                                            <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                            ]
                                        </span>
                                        <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                            [
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                                <span class="flex-1 text-[#586B74] text-[14px]">ei vielä tiedossa</span>
                                            </label>
                                            ]
                                        </span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[15px] inline-flex gap-1">Toimitusaika</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>

                                <p class="text-[#586B74] text-[14px] leading-7 mb-5">Työmaatilanne:</p>

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5">-</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <p class="text-[#586B74] text-[14px] leading-7">Työmaa on luovutettu urakoitsijan käyttöön xx.xx.xxxx.</p>
                                </div>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5">-</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">Avaimet ja kulkutunnisteet</p>
                                </div>

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <p class="text-[#586B74] text-[14px] leading-7">Urakoitsijalla on tarvittavat avaimet ja kulkutunnisteet kiinteistössä liikkumiseen.</p>
                                </div>
                            </div>

                            <div class="help_wrap relative mb-4">
                                <div class="max-w-[700px] mx-auto flex items-center gap-3 mb-4">
                                    <div class="flex items-center gap-3 mb-4">
                                        <div class="flex items-center gap-3 min-w-[680px]">
                                            <span class="inline-block mr-5 text-white">-</span>
                                            <span class="inline-block mr-5">o</span>
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                            </label>
                                            <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                            <p class="text-[#586B74] text-[14px] leading-7">Kulkutunnisteet myönnetään aulasta. Sähköpostiin henkilöiden nimet, työnantajat ja kopioksi rakennuttajakonsultti.</p>
                                        </div>

                                        <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                    <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path>
                                                    <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                                </g>
                                            </svg>
                                        </a>
                                        <hr class="help_line w-[18px] border border-solid border-[#E1E1EA] hidden">
                                    </div>
                                </div>
                                <div class="help_show text-[#586B74] text-[14px] lg:w-[192px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:-mt-[75px] hidden">
                                Kuvaus miten sosiaalitilat ja suihkut on järjestetty. Muistutetaan, että kiinteistön tilat tulee olla käytön jälkeen vastaavassa kunnossa kuin ennen niiden ottamista työmaan käyttöön. Nykytilanne dokumentoidaan esimerkiksi valokuvin urakoitsijan toimesta.
                                </div>
                            </div>

                            <div class="max-w-[700px] mx-auto">
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5">-</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">Työmaatoimisto ja sosiaalitilat</p>
                                </div>

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                            </div>

                            <div class="help_wrap relative mb-4 mt-10">
                                <div class="max-w-[700px] mx-auto flex items-center gap-2">
                                    <label class="inline-flex items-center gap-2 cursor-pointer min-w-[130px]">
                                        <span class="inline-block mr-5">-</span>
                                        <span class="text-[#586B74]">Jätehallinta</span>
                                    </label>
                            
                                    <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path>
                                                <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                            </g>
                                        </svg>
                                    </a>
                            
                                    <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                                </div>
                            
                                <div class="help_show text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                    Kuvaus missä jätelava on tai miten jätteiden poisvienti on toteutettu.
                                </div>
                            </div>

                            <div class="max-w-[700px] mx-auto">
                                

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5">-</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">Varastointi</p>
                                </div>

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>

                            </div>
                            
                            <div class="help_wrap relative mb-4 mt-10">
                                <div class="max-w-[700px] mx-auto flex items-center gap-2">
                                    <label class="inline-flex items-center gap-2 cursor-pointer min-w-[190px]">
                                        <span class="inline-block mr-5">-</span>
                                        <span class="text-[#586B74]">Kiinteistön tiedotus</span>
                                    </label>
                            
                                    <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path>
                                                <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                            </g>
                                        </svg>
                                    </a>
                            
                                    <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                                </div>
                            
                                <div class="help_show text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                    Kuvaus onko tiedotteet jaettu jne.
                                </div>
                            </div>
                            
                            <div class="max-w-[700px] mx-auto">

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                            
                            </div>
                                
                            <div class="help_wrap relative mb-4 mt-10">
                                <div class="max-w-[700px] mx-auto flex items-center gap-2">
                                    <label class="inline-flex items-center gap-2 cursor-pointer min-w-[190px]">
                                        <span class="text-[#586B74]">Muut pääurakoitsijan asiat</span>
                                    </label>
                            
                                    <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path>
                                                <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                            </g>
                                        </svg>
                                    </a>
                            
                                    <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                                </div>
                            
                                <div class="help_show text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                    Käydään läpi mitä asioita pääurakoitsijalla on kirjattu työvaiheilmoituksessa. (TVI)
                                </div>
                            </div>
                            
                            <div class="max-w-[700px] mx-auto">
                            
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">-</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                            
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">-</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">-</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                            
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                            </div>

                            <div class="help_wrap relative mb-4 mt-10">
                                <div class="max-w-[700px] mx-auto flex items-center gap-2">
                                    <label class="inline-flex items-center gap-2 cursor-pointer min-w-[190px]">
                                        <span class="text-[#586B74]">Tilasuunnittelijan aikatauluasiat</span>
                                    </label>
                            
                                    <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path>
                                                <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                            </g>
                                        </svg>
                                    </a>
                            
                                    <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                                </div>
                            
                                <div class="help_show text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                    Tähän kirjataan mikäli tilasuunnittelijan osalta tulee tehdä aikatauluun huomioita.<br><br> Käyttäjälle tulee tosinaan esimerkiksi kalustus Tilasuunnittelijan kautta. Näin tieto siirtyy kaikille osapuolille.
                                </div>
                            </div>
                            
                            <div class="max-w-[700px] mx-auto">
                            
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">-</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                            
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">-</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                            
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">-</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                            
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                            </div>

                            <div class="help_wrap mt-10 mb-5 relative">
                                <div class="help_wrap mt-10 mb-5 relative">
                                    <div class="max-w-[700px] mx-auto flex items-center gap-2">
                                        <h3 class="flex gap-20 text-black text-[20px] font-medium min-w-[295px]">
                                            <span>8.</span>
                                            <span>LISÄ- JA MUUTOSTYÖT</span>
                                        </h3>
                            
                                        <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                    <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path>
                                                    <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                                </g>
                                            </svg>
                                        </a>
                            
                                        <hr class="help_line w-full lg:w-[105px] border border-solid border-[#E1E1EA] hidden">
                                    </div>
                            
                                    <div class="help_show text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                        Kirjaa tilanne tähän. Kokouksessa ei ole tarpeen hyväksyä mitään, vaan näihin voidaan palata myöhemmin kun olet rauhassa selvittänyt onko kyseessä lisätyö vai ei ja mikä Tilaajan kanta on kustannukseen.
                                    </div>
                                </div>
                            
                                <div class="max-w-[700px] mx-auto">
                                    <p class="text-[#586B74] text-[14px] leading-7">Lisä- ja muutostyötarjoukset tehdään urakkasopimuksen mukaisesti ja tarjoukset tarvittavine laskelmineen ja erittelyineen tulee hyväksyttää rakennuttajalla ennen töiden aloitusta. <br> <br> Huom. Oikeus tilata lisä- ja muutostöitä on vain erikseen urakkasopimuksessa määritetyillä henkilöillä. Suunnittelijalla, muulla asiantuntijalla tai käyttäjän edustajalla ei ole oikeutta antaa muutoksia koskevia määräyksiä.</p>
                                </div>
                            </div>
                            
                            <div class="max-w-[700px] mx-auto">
                                <p class="text-[#586B74] text-[14px] leading-7 my-5">Hyväksytyt lisätyöt</p>

                                <div class="flex lg:items-end flex-col lg:flex-row gap-4 mt-3">
                                    <div class="flex items-center gap-3">
                                        <span class="inline-block mr-5 text-white">-</span>
                                        <span class="inline-block mr-5">-</span>
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                        <span class="text-[#586B74] text-[15px] inline-flex gap-1">LMT</span>
                                        <span class="text-[#586B74] text-[14px] w-full">
                                            <input type="text" name="pilar_filed8_6_4" placeholder="X" class="w-[30px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                        </span>
                                        <span class="text-[#586B74] text-[14px] w-full">,</span>
                                        <span class="text-[#586B74] text-[14px] w-full">
                                            <input type="text" name="pilar_filed8_6_4" placeholder="Aihe" class="w-[50px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                        </span>
                                    </div>
                                    <span class="text-[#586B74]"><span class="flex-1 h-[1px] bg-[#94969C] inline-block w-[105px]"></span></span>
                                    <p class="text-[#586B74]"> € (alv. 0 ), tilattu</p>
                                    <span class="text-[#586B74] text-[14px]">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-[120px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </span>
                                </div>
                                
                                <div class="flex lg:items-end flex-col lg:flex-row gap-4 mt-3">
                                    <div class="flex items-center gap-3">
                                        <span class="inline-block mr-5 text-white">-</span>
                                        <span class="inline-block mr-5">-</span>
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                        <span class="text-[#586B74] text-[15px] inline-flex gap-1">LMT</span>
                                        <span class="text-[#586B74] text-[14px] w-full">
                                            <input type="text" name="pilar_filed8_6_4" placeholder="X" class="w-[30px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                        </span>
                                        <span class="text-[#586B74] text-[14px] w-full">,</span>
                                        <span class="text-[#586B74] text-[14px] w-full">
                                            <input type="text" name="pilar_filed8_6_4" placeholder="Aihe" class="w-[50px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                        </span>
                                    </div>
                                    <span class="text-[#586B74]"><span class="flex-1 h-[1px] bg-[#94969C] inline-block w-[105px]"></span></span>
                                    <p class="text-[#586B74]"> € (alv. 0 ), tilattu</p>
                                    <span class="text-[#586B74] text-[14px]">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-[120px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </span>
                                </div>
                                
                                
                                <p class="text-[#586B74] text-[14px] leading-7 my-5">Tarjotut lisätyöt</p>

                                <div class="flex lg:items-end flex-col lg:flex-row gap-4 mt-3">
                                    <div class="flex items-center gap-3">
                                        <span class="inline-block mr-5 text-white">-</span>
                                        <span class="inline-block mr-5">-</span>
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                        <span class="text-[#586B74] text-[15px] inline-flex gap-1">LMT</span>
                                        <span class="text-[#586B74] text-[14px] w-full">
                                            <input type="text" name="pilar_filed8_6_4" placeholder="X" class="w-[30px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                        </span>
                                        <span class="text-[#586B74] text-[14px] w-full">,</span>
                                        <span class="text-[#586B74] text-[14px] w-full">
                                            <input type="text" name="pilar_filed8_6_4" placeholder="Aihe" class="w-[50px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                        </span>
                                    </div>
                                    <span class="text-[#586B74]"><span class="flex-1 h-[1px] bg-[#94969C] inline-block w-[105px]"></span></span>
                                    <p class="text-[#586B74]"> € (alv. 0</p>
                                </div>
                                
                                <div class="flex lg:items-end flex-col lg:flex-row gap-4 mt-3">
                                    <div class="flex items-center gap-3">
                                        <span class="inline-block mr-5 text-white">-</span>
                                        <span class="inline-block mr-5">-</span>
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                        <span class="text-[#586B74] text-[15px] inline-flex gap-1">LMT</span>
                                        <span class="text-[#586B74] text-[14px] w-full">
                                            <input type="text" name="pilar_filed8_6_4" placeholder="X" class="w-[30px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                        </span>
                                        <span class="text-[#586B74] text-[14px] w-full">,</span>
                                        <span class="text-[#586B74] text-[14px] w-full">
                                            <input type="text" name="pilar_filed8_6_4" placeholder="Aihe" class="w-[50px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                        </span>
                                    </div>
                                    <span class="text-[#586B74]"><span class="flex-1 h-[1px] bg-[#94969C] inline-block w-[105px]"></span></span>
                                    <p class="text-[#586B74]"> € (alv. 0</p>
                                </div>
                                
                                <p class="text-[#586B74] text-[14px] leading-7 my-5">Muut lisätyöaiheet</p>

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">-</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">-</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>

                                <p class="text-black font-medium text-[14px] leading-7 mb-5">Rakennuttajakonsultti huomautti, että lisätöitä ei saa suorittaa ennen kirjallista hyväksyntää.</p>

                                <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                    <span>9.</span>
                                    <span>TYÖTURVALLISUUS</span>
                                </h3>

                                <p class="text-[#586B74] text-[14px] leading-7 mb-5">Muut lisätyöaiheet</p>

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5">-</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">Pääurakoitsijana toimiva U1 vastaa työmaan johtovelvollisuuksista ja toimii lainsäädännön tarkoittamana työturvallisuudesta vastaavana päätoteuttajana.</p>
                                </div>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5">-</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">Päätoteuttajan työsuojelupäällikkönä ja työturvallisuudesta vastaavana henkilönä toimii työnjohtaja U7. Työsuojeluvaltuutettuna toimii U7.</p>
                                </div>

                            </div>

                            <div class="help_wrap relative mb-4">
                                <div class="max-w-[700px] mx-auto flex items-center gap-3 mb-4">
                                    <div class="flex items-center gap-3 min-w-[340px]">
                                        <span class="inline-block mr-5">-</span>
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                        <p class="text-[#586B74] text-[14px] leading-7">Työnjohtajana toimii U7</p>
                                    </div>
                                    <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path>
                                                <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                            </g>
                                        </svg>
                                    </a>
                                    <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                                </div>
                                <div class="help_show text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                    Valitaan jos työturvallisuudesta vastaa joku muu kuin työnjohtaja.
                                </div>
                            </div>
                            <div class="max-w-[700px] mx-auto">
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5">-</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                                <div class="flex items-start gap-3 mb-4">
                                    <span class="inline-block mr-5">-</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">Päätoteuttajan vastuulla on huolehtia verottajan edellyttämästä rakentamisen tiedonantovelvollisuudesta. Pääurakoitsija vastaa sekä aliurakoitsijoidensa että kaikkien yhteisellä työmaalla työskentelevien henkilöiden ilmoittamisesta suoraan verottajalle. Päätoteuttajan tiedonantovelvollisuus koskee kaikkia yhteisellä työmaalla työskenteleviä henkilöitä, myös Tilaajan mahdollisiin erillishankintoihin liittyen.</p>
                                </div>

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <p class="text-[#586B74] text-[14px] leading-7">Miten tiedot kerätään? (perehdytyksessä, leimauslaitteella, muuten?)</p>
                                </div>

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5">-</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>

                                <div class="flex items-start gap-3 mb-4">
                                    <span class="inline-block mr-5">-</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">Kaikki työmaalla työskentelevät henkilöt on perehdytettävä työmaahan. Perehdyttämisen suorittaa päätoteuttaja, myös aliurakoitsijoiden työntekijöille. Pääurakoitsija ylläpitää listaa työmaan työntekijöistä. Pääurakoitsijalla tulee olla aina tiedossa työmaalla työskentelevien henkilöiden nimet, syntymäajat, veronumerot ja heidän palkanmaksajansa.</p>
                                </div>

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <p class="text-[#586B74] text-[14px] leading-7">Miten tiedot kerätään? (perehdytyksessä, leimauslaitteella, muuten?)</p>
                                </div>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5">-</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                                
                                <p class="text-[#586B74] text-[14px] leading-7">Tilaajavastuulain mukaiset selvitykset</p>

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5">-</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">Pääurakoitsijan selvitykset toimitettu urakkatarjouksen yhteydessä</p>
                                </div>
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5">-</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">Aliurakoitsijoiden Tilaajavastuulain mukaiset selvitykset:</p>
                                </div>
                            </div>

                            <div class="help_wrap relative mb-4">
                                <div class="max-w-[700px] mx-auto flex items-center gap-3 mb-4">
                                    <div class="flex items-center gap-3 min-w-[340px]">
                                        <span class="inline-block mr-5 text-white">-</span>
                                        <span class="inline-block mr-5">o</span>
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                        <span class="text-[#586B74] text-[14px] w-full">
                                            <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                        </span>
                                    </div>
                                    <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path>
                                                <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                            </g>
                                        </svg>
                                    </a>
                                    <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                                </div>
                                <div class="help_show text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                    Aliurakoitsijoiden läpikäynti ja onko selvitystä toimitettu ja onko huomautettavaa. Huom! jos jollain vastuuvakuutus alle 1.000.000 € niin pyydä päivittämään, tai velvoita pääurakoitsija vastaamaan alijäävältä osuudelta omalla vastuuvakuutuksellaan.
                                </div>
                            </div>
                                
                            <div class="max-w-[700px] mx-auto">
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5">-</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                            </div>
                            <div class="help_wrap relative mb-4 mt-10">
                                <div class="max-w-[700px] mx-auto flex items-center gap-2">
                                    <label class="inline-flex items-center gap-2 cursor-pointer min-w-[190px]">
                                        <span class="text-[#586B74]">Ilmoitusvelvollisuudet</span>
                                    </label>
                            
                                    <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path>
                                                <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                            </g>
                                        </svg>
                                    </a>
                            
                                    <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                                </div>
                            
                                <div class="help_show text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                    LAKI 44/2006 48 §<br><br> Tulkinta:<br> Rakennustyön ennakkoilmoitus on tehtävä työmaasta, joka on tarkoitettu kestämään kauemmin kuin kuukauden ja jolla itsenäiset työnsuorittajat mukaan lukien työskentelee yhteensä vähintään 10 työntekijää sekä työmaasta, jolla työn määräksi arvioidaan yli 500 henkilötyöpäivää. Yhteisellä rakennustyömaalla päätoteuttaja (pääurakoitsija tai vastaava) tekee alkavasta työmaasta yhden yhteisen alkamisilmoituksen. Sen tulee sisältää tiedot myös ilmoituksenantohetkellä tiedossa olevista sivu- ja aliurakoitsijoista arvioitune työvoimatietoineen. Ilmoituksen tekeminen Ilmoituksen voi tehdä täyttämällä pdf-muotoisen lomakkeen ja toimittamalla sen postitse tai sähköpostin liitteenä sen aluehallintoviraston työsuojelun vastuualueelle, jonka alueella työmaa sijaitsee. Ilmoituksen voi tehdä myös verkkolomakkeella.
                                </div>
                            </div>

                            <div class="max-w-[700px] mx-auto">

                                <div class="flex items-start gap-3 mb-4">
                                    <span class="inline-block mr-5">-</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">Rakennustyön ennakkoilmoitus</p>
                                </div>
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5">-</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                            </div>

                            <div class="help_wrap relative mb-4 mt-10">
                                <div class="max-w-[700px] mx-auto flex items-center gap-2">
                                    <span class="inline-block mr-5">-</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer min-w-[190px]">
                                        <p class="text-[#586B74] text-[14px] leading-7">Työsuojeluhenkilöilmoitus</p>
                                    </label>
                            
                                    <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path>
                                                <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                            </g>
                                        </svg>
                                    </a>
                            
                                    <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                                </div>
                            
                                <div class="help_show text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                    Vna 2009/205 4 §<br><br> Päätoteuttajan tulee ennen rakennustyön alkua tehdä asianomaiselle työsuojeluviranomaiselle liitteen 1 mukaiset tiedot sisältävä ennakkoilmoitus työmaasta, joka on tarkoitettu kestämään kauemmin kuin kuukauden ja jolla itsenäiset työnsuorittajat mukaan lukien työskentelee yhteensä vähintään 10 työntekijää sekä työmaasta, jolla työn määräksi arvioidaan yli 500 henkilötyöpäivää.<br> Päätoteuttajan on annettava ennakkoilmoitus tiedoksi myös rakennuttajalle.<br> Päätoteuttajan on pantava ennakkoilmoitus selvästi näkyville rakennustyömaalla ja pidettävä se tarpeellisilta osin ajan tasalla.
                                </div>
                            </div>
                            
                            <div class="max-w-[700px] mx-auto">

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5">-</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                            </div>

                            <div class="help_wrap relative mb-4 mt-10">
                                <div class="max-w-[700px] mx-auto flex items-center gap-2">
                                    <label class="inline-flex items-center gap-2 cursor-pointer min-w-[190px]">
                                        <span class="text-[#586B74]">Urakoitsijan turvallisuussuunnitelmat</span>
                                    </label>
                            
                                    <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path>
                                                <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                            </g>
                                        </svg>
                                    </a>
                            
                                    <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                                </div>
                            
                                <div class="help_show text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                    Huom! Pääurakoitsijan turvallisuuteen liittyvissä suunnitelmissa kirjataan vain onko dokumentit vastaanotettu. Voi antaa myös päivitysvaateita (esim jos puuttuu jotain mielestäsi olennaista, kuten varapoistumistie), mutta muuten oikeellisuutta ei kommentoida/hyväksytä suunnitelmia. Vastuu dokumenttien oikeellisuudesta tulee säilyä niiden laatijalla.
                                </div>
                            </div>
                            
                            <div class="max-w-[700px] mx-auto">
                            
                                <div class="flex items-start gap-3 mb-4">
                                    <span class="inline-block mr-5">-</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">Työmaan turvallisuussuunnitelma</p>
                                </div>
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                            
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5">-</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>

                                <div class="flex items-start gap-3 mb-4">
                                    <span class="inline-block mr-5">-</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">Pölynhallintasuunnitelma</p>
                                </div>
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Onko toimenpiteitä noudatettu? (IV-tulppaus, kanavien varastointi suojattuna, kohdepoistot purkutöissä jne.?)" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>

                                <div class="flex items-start gap-3 mb-4">
                                    <span class="inline-block mr-5">-</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">Työmaan aluesuunnitelma</p>
                                </div>
                            </div>

                            <div class="help_wrap relative mb-4">
                                <div class="max-w-[700px] mx-auto  text-[#586B74] text-[15px] flex items-start gap-[5px] mb-4">
                                    <div class="flex items-start gap-[5px] min-w-[480px]">
                                        <span class="inline-block mr-8 text-white">-</span>
                                        <span class="inline-block mr-5">o</span>
                                        <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                        <div class="flex flex-wrap flex-col lg:flex-row lg:items-center gap-x-2">
                                            <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                                [
                                                <label class="inline-flex items-center gap-2 cursor-pointer">
                                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                                    <span class="flex-1 text-[#586B74] text-[14px]">Laadittu</span>
                                                </label>
                                                ]
                                            </span>
                                            <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                                [
                                                <label class="inline-flex items-center gap-2 cursor-pointer">
                                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                                    <span class="flex-1 text-[#586B74] text-[14px]">Laaditaan xx.xx.xxxx mennessä.</span>
                                                </label>
                                                ]
                                            </span>
                                        </div>
                                    </div>
                                    <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path>
                                                <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                            </g>
                                        </svg>
                                    </a>
                                        <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                                </div>
                                <div class="help_show text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                    Vna 205/2009 11 §<br><br> Rakennustyömaa-alueen käytön suunnittelu<br> Päätoteuttajan on esitettävä rakennuttajalle tässä pykälässä tarkoitetut rakennustyömaa-alueen käytön suunnitelmat. Päätoteuttajan on tehtävä kirjallinen rakennustyömaa-alueen käytön suunnitelma. Päätoteuttajan on riittävän järjestelmällisesti selvitettävä ja tunnistettava kyseessä olevan työmaa-alueen yleiseen järjestelyyn, toteutukseen ja käyttöön liittyvät vaara- ja haittatekijät. Tällöin on otettava huomioon myös rakennuttajan turvallisuusasiakirjan tiedot. Vaara- ja haittatekijät on poistettava asianmukaisesti sekä milloin niitä ei voida poistaa, arvioitava niiden merkitys työmaalla työskentelevien ja muille työn vaikutuspiirissä olevien turvallisuudelle ja terveydelle. Rakennustyömaa-alueen käytön suunnittelussa on kiinnitettävä erityistä huomiota tapaturmavaaran ja terveyden haitan poistamisessa ja vähentämisessä ainakin seuraaviin seikkoihin: 1) toimisto-, henkilöstö- ja varastotilojen määrä ja sijainti; 2) nostureiden, koneiden ja laitteiden sijoitus; 3) kaivuu- ja täyttömassojen sijoitus; 4) rakennustarvikkeiden ja -aineiden sekä elementtien lastaus-, purkaus- ja varastointipaikkojen sijoitus; 5) elementtirakentamisessa nostureiden nostopaikkojen perustus ja maapohjan vahvistus, nostureiden nostosäteet ja -kapasiteetit, nosturinkuljettajien mahdollisimman esteetön näköyhteys elementtivarastoon ja asennuskohteeseen; 6) työmaaliikenne sekä sen ja yleisen liikenteen liittymiskohdat; 7) kulku-, nousu- ja kuljetustiet sekä niiden kunnossapito; 8) työmaan järjestys ja siisteys sekä pölyn torjuntaan ja hallintaan tarvittavien rakenteiden ja laitteiden sijoitus; 9) jätteiden sekä turvallisuudelle ja terveydelle vaaraa tai haittaa aiheuttavien materiaalien kerääminen, säilyttäminen, poistaminen ja hävittäminen; 10) palontorjunta; 11) varastointialueiden rajaaminen ja järjestäminen, erityisesti kun käsitellään turvallisuudelle ja terveydelle vaaraa tai haittaa aiheuttavia materiaaleja tai aineita. Rakennustyömaa-alueen käytön suunnittelun keskeiset osat on esitettävä työmaasuunnitelmana kirjallisesti, tarvittaessa rakennus- ja työvaiheittain. Suunnitelmat on tarkistettava olosuhteiden muuttuessa, ja ne on muutenkin pidettävä ajan tasalla.
                                </div>
                            </div>

                            <div class="max-w-[700px] mx-auto ">
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5">-</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <p class="text-[#586B74] text-[14px] leading-7">Rakennuttajakonsultti huomautti, että työmaasuunnitelma tulee olla näkyvillä työmaalla.</p>
                                </div>
                                <div class="text-[#586B74] text-[15px] flex items-start gap-[5px] mb-4">
                                    <span class="inline-block mr-8 text-white">-</span>
                                    <span class="inline-block mr-5 text-white">o</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <div class="flex flex-wrap flex-col lg:flex-row lg:items-center gap-x-2">
                                        <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                            [
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                                <span class="flex-1 text-[#586B74] text-[14px]">Suunnitelma nähtävillä työmaalla.</span>
                                            </label>
                                            ]
                                        </span>
                                        <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                            [
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                                <span class="flex-1 text-[#586B74] text-[14px]">Urakoitsija lisää työmaasuunnitelman näkyviin työmaalle. (U1)</span>
                                            </label>
                                            ]
                                        </span>
                                    </div>
                                </div>

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5">-</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                            </div>

                            <div class="help_wrap relative mb-4">
                                <div class="max-w-[700px] mx-auto flex items-center gap-3 mb-4">
                                    <div class="flex items-center gap-3 min-w-[340px]">
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <span class="text-[#586B74] text-[14px] w-full">
                                            <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                        </span>
                                    </div>
                                    <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path>
                                                <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                            </g>
                                        </svg>
                                    </a>
                                    <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                                </div>
                                <div class="help_show text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                    Mikäli urakassa on vaarallisia töitä, kuten tulityöt, asbestipurkua jne. tulee näistä olla erillinen suunnitelma
                                </div>
                            </div>

                            <div class="max-w-[700px] mx-auto">

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5">-</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                    </label>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </span>
                                </div>

                                <p class="text-[#586B74] text-[14px] leading-7">Rakennuttajan turvallisuusasiakirja.</p>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">-</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">Työmaalla tulee käyttää turvallisuusasiakirjassa mainittuja suojavarusteita.</p>
                                </div>
                                
                                <p class="text-[#586B74] text-[14px] leading-7">Kiinteistöä palvelevat järjestelmät</p>

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">-</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">Urakoitsijan on toiminnassaan huomioitava, että kiinteistöä palvelevat ja toiminnassa olevat järjestelmät ( mm. paloilmaisinjärjestelmä ) eivät häiriinny rakentamisen aikana.</p>
                                </div>

                            </div>
                            
                            <div class="help_wrap relative mb-4">
                                <div class="max-w-[700px] mx-auto flex items-center gap-3 mb-4">
                                    <div class="flex items-center gap-3 min-w-[340px]">
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <span class="text-[#586B74] text-[14px] w-full">
                                            <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                        </span>
                                    </div>
                                    <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path>
                                                <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                            </g>
                                        </svg>
                                    </a>
                                    <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                                </div>
                                <div class="help_show text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                    Mietin onko tarpeen lisätä vielä jokin erityismaininta. Esimerkiksi jokin erityinen turvallisuusriski.
                                </div>
                            </div>
                            
                            <div class="max-w-[700px] mx-auto">

                                <div class="flex items-center gap-3 mb-4">
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                    </label>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </span>
                                </div>

                                <div class="flex items-center gap-3 mb-4">
                                    <p class="text-[#586B74] text-[14px] leading-7">Rakennuttajan turvallisuuskoordinaattorina toimii henkilö</p>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                        <span class="flex-1 text-[#586B74] text-[14px]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P1', true ), 'P1') ); ?></span>
                                    </label>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                        <span class="flex-1 text-[#586B74] text-[14px]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P4', true ), 'P4') ); ?></span>
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">, Partners at Noste Oy.</p>
                                </div>

                                <p class="text-[#586B74] text-[14px] leading-7">Rakennuttajan turvallisuusasiakirja.</p>

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">-</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">Rakennuttaja on laatinut kohteesta turvallisuusasiakirjan ( xx.xx.xxxx ) ja se on jaettu urakoitsijoille.</p>
                                </div>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">-</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">Mikäli urakoitsija havaitsee tarvetta päivittää turvallisuusasiakirjaa, on tästä ilmoitettava turvallisuuskoordinaattorille.</p>
                                </div>

                                <div class="flex items-center gap-3 mb-4">
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                    </label>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </span>
                                </div>

                                <p class="text-[#586B74] text-[14px] leading-7">Työturvallisuuden havainnointi</p>
                                <div class="text-[#586B74] text-[15px] flex items-start gap-[5px] mb-4">
                                    <span class="inline-block mr-8 text-white">-</span>
                                    <span class="inline-block mr-5">-</span>
                                    <div class="flex flex-wrap flex-col lg:flex-row lg:items-center gap-x-2">
                                        <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                            [
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                                <span class="flex-1 text-[#586B74] text-[14px]">vahvistettu vapaa teksti</span>
                                            </label>
                                        </span>
                                    </div>
                                </div>
                                
                                <div class="text-[#586B74] text-[15px] flex items-start gap-[5px] mb-4">
                                    <span class="inline-block mr-8 text-white">-</span>
                                    <span class="inline-block mr-5">-</span>
                                    <span class="flex-1 text-[#586B74] text-[14px]">Edellisen viikon TR-mittaus toimitetaan rakennuttajakonsultille ennen työmaakokousta</span>
                                </div>
                            </div>

                            <div class="help_wrap relative mb-4">
                                <div class="max-w-[700px] mx-auto  text-[#586B74] text-[15px] flex items-center gap-[5px] mb-4">
                                    <div class="flex items-center gap-[5px] min-w-[320px]">
                                        <span class="inline-block mr-8 text-white">-</span>
                                        <span class="inline-block mr-5">-</span>
                                        <p class="text-[#586B74] text-[14px] leading-7">Tavoitellaan</p>
                                        <span class="text-[#586B74]">
                                            <input type="text" name="pilar_VA1" placeholder="90" class="w-full lg:w-[35px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                        </span>
                                        <p class="text-[#586B74] text-[14px] leading-7"> %</p>
                                    </div>
                                    <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path>
                                                <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                            </g>
                                        </svg>
                                    </a>
                                        <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                                </div>
                                <div class="help_show text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                    Turvallisuusasiakirjassa määritetyn mukaisesti.
                                </div>
                            </div>

                            <div class="max-w-[700px] mx-auto">

                                <div class="flex lg:items-end flex-col lg:flex-row gap-4 mt-3">
                                    <div class="flex items-center gap-3">
                                        <span class="inline-block mr-5 text-white">-</span>
                                        <span class="inline-block mr-5">-</span>
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                        <span class="text-[#586B74] text-[15px] inline-flex gap-1">Viimeisin mittaustulos</span>
                                        <span class="text-[#586B74] text-[14px]">
                                            <input type="text" name="pilar_filed8_6_4" placeholder="xx.xx.xxxx" class="w-[120px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                        </span>
                                        <span class="text-[#586B74] text-[14px]">,</span>
                                    </div>
                                    <span class="text-[#586B74]"><span class="flex-1 h-[1px] bg-[#94969C] inline-block w-[105px]"></span></span>
                                    <p class="text-[#586B74]">%]</p>
                                </div>

                                <div class="flex items-start gap-3 mb-4 mt-10">
                                    <span class="inline-block mr-5">-</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">Muu tapa</p>
                                </div>

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>

                                <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium mb-4">
                                    <span>10. </span>
                                    <span>LAADUNVARMISTUS</span>
                                </h3>

                                <p class="text-[#586B74] text-[14px] leading-7">Työmaan laatusuunnitelma</p>

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Noudatetaan urakoitsijan omaa laatusuunnitelmaa. Urakoitsija toimittaa työmaan laatusuunnitelman rakennuttajakonsultille." class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                                
                                <p class="text-[#586B74] text-[14px] leading-7">Muut laadunvarmistustoimenpiteet</p>

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5 text-white">o</span>
                                    
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>

                                <p class="text-[#586B74] text-[14px] leading-7">Ennen vastaanottotarkastusta urakoitsija laatii ja toimittaa rakennuttajakonsultille urakkasopimusasiakirjojen mukaiset dokumentit, joita on:</p>

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">
                                        Urakoitsijan itselle luovutuksen virhe- ja puutelista (täydennetään vastaanottotarkastuksessa) <br> <span class="italic text-[#00B2A9]">VL1</span> <br> <span class="italic text-[#00B2A9]">VL2…</span> <br> .<br> .<br> .<br> <span class="italic text-[#00B2A9]">…VLX</span><br> Käytettyjen tuotteiden materiaalitiedot ja CE-todistukset<br> Käytettyjen tuotteiden käyttö- ja huolto-ohjeet
                                    </p>
                                </div>

                                <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                    <span>11. </span>
                                    <span>SUUNNITTELUASIAT</span>
                                </h3>

                                <p class="text-[#586B74] text-[14px] leading-7">Projektipankki</p>

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">-</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">
                                        Urakan suunnitelmat ja loppudokumentit jaetaan:
                                    </p>
                                </div>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">-</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">
                                        Projektipankin kautta
                                    </p>
                                </div>
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Mikä pankki" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Tilanne (Onko kaikilla tunnukset, toimiiko jne.)" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti…" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">-</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">
                                        Sähköpostilla
                                    </p>
                                </div>

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                                
                                
                                <p class="text-[#586B74] text-[14px] leading-7">Aihe</p>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Aihe" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5">-</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>

                                <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                    <span>12. </span>
                                    <span>RAKENNUTTAJAN ASIAT</span>
                                </h3>
                                
                                <p class="text-[#586B74] text-[14px] leading-7">Urakoitsijan on kiinnitettävä huomiota, ettei meluavia töitä suoriteta arkisin klo <span class="text-[#FE3B2D]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K7', true ), 'K7') ); ?></span> välisenä aikana.</p>
                                <p class="text-[#586B74] text-[14px] leading-7">Aihe</p>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Aihe" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>

                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5">-</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>

                                <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                    <span>13. </span>
                                    <span>KÄYTTÄJIEN ASIAT</span>
                                </h3>

                                <p class="text-[#586B74] text-[14px] leading-7">Urakoitsijan on kiinnitettävä huomiota, ettei meluavia töitä suoriteta arkisin klo <span class="text-[#FE3B2D]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K7', true ), 'K7') ); ?></span> välisenä aikana.</p>
                            </div>
                            
                            <div class="help_wrap relative mb-4">
                                <div class="max-w-[700px] mx-auto flex items-center gap-2">
                                    <label class="inline-flex items-center gap-2 cursor-pointer min-w-[190px]">
                                        <p class="text-[#586B74] text-[14px] leading-7">Aihe</p>
                                    </label>
                            
                                    <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path>
                                                <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                            </g>
                                        </svg>
                                    </a>
                            
                                    <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                                </div>
                            
                                <div class="help_show text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                    Esim. valitukset jne. viestit ja toiveet
                                </div>
                            </div>
                            
                            <div class="max-w-[700px] mx-auto">
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>

                                <div class="flex items-center gap-3 mb-4">
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Aihe" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5">-</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>

                                <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                    <span>14. </span>
                                    <span>TYÖMAAKIERROS</span>
                                </h3>
                                <p class="text-[#586B74] text-[14px] leading-7">Urakoitsijan on kiinnitettävä huomiota, ettei meluavia töitä suoriteta arkisin klo <span class="text-[#FE3B2D]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K7', true ), 'K7') ); ?></span> välisenä aikana.</p>

                                <div class="text-[#586B74] text-[15px] flex items-start gap-[5px] mb-4">
                                    <span class="inline-block mr-8 text-white">-</span>
                                    <span class="inline-block mr-5">-</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <div class="flex flex-wrap flex-col lg:flex-row lg:items-center gap-x-2">
                                        <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                            [
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                                <span class="flex-1 text-[#586B74] text-[14px]">Kokouksen jälkeen</span>
                                            </label>
                                            ]
                                        </span>
                                        <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                            [
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                                <span class="flex-1 text-[#586B74] text-[14px]">Ennen kokousta</span>
                                            </label>
                                            ]
                                        </span>
                                        <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                            tehtiin yhteinen kierros työmaalla.
                                        </span>
                                    </div>
                                </div>
                                
                                <div class="text-[#586B74] text-[15px] flex items-start gap-[5px] mb-4">
                                    <span class="inline-block mr-8 text-white">-</span>
                                    <span class="inline-block mr-5">-</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <div class="flex flex-wrap flex-col lg:flex-row lg:items-center gap-x-2">
                                        <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                            [
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                                <span class="flex-1 text-[#586B74] text-[14px]">Kokouksen jälkeen</span>
                                            </label>
                                            ]
                                        </span>
                                        <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                            [
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                                <span class="flex-1 text-[#586B74] text-[14px]">Ennen kokousta</span>
                                            </label>
                                            ]
                                        </span>
                                        <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                            tehtiin yhteinen kierros työmaalla.
                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="help_wrap relative mb-4">
                                <div class="max-w-[700px] mx-auto  text-[#586B74] text-[15px] flex items-start gap-[5px] mb-4">
                                    <div class="flex items-start gap-[5px] min-w-[480px]">
                                        <span class="inline-block mr-8 text-white">-</span>
                                        <span class="inline-block mr-5">-</span>
                                        <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                        <div class="flex flex-wrap flex-col lg:flex-row lg:items-center gap-x-2">
                                            <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                                [
                                                <label class="inline-flex items-center gap-2 cursor-pointer">
                                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                                    <span class="flex-1 text-[#586B74] text-[14px]">Tarkistettiin seuraavat asiat</span>
                                                </label>
                                            </span>
                                        </div>
                                    </div>
                                    <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path>
                                                <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                            </g>
                                        </svg>
                                    </a>
                                    <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                                </div>
                                <div class="help_show text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                    Mikäli jokin yllä keskusteltu asia vaatii tarkastelua paikan päällä.
                                </div>
                            </div>
                            
                            <div class="max-w-[700px] mx-auto ">
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Aihe ja kommentti/sovittu toimenpide" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                            
                                <div class="text-[#586B74] text-[15px] flex items-start gap-[5px] mb-4">
                                    <span class="inline-block mr-8 text-white">-</span>
                                    <span class="inline-block mr-5">-</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <div class="flex flex-wrap flex-col lg:flex-row lg:items-center gap-x-2">
                                        <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                            [
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                                <span class="flex-1 text-[#586B74] text-[14px]">Tarkistettiin seuraavat asiat</span>
                                            </label>
                                        </span>
                                    </div>
                                </div>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Tarkistettiin seuraavat asiat" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                            
                                <div class="text-[#586B74] text-[15px] flex items-start gap-[5px] mb-4">
                                    <span class="inline-block mr-8 text-white">-</span>
                                    <span class="inline-block mr-5">-</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <div class="flex flex-wrap flex-col lg:flex-row lg:items-center gap-x-2">
                                        <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                            [
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                                <span class="flex-1 text-[#586B74] text-[14px]">Kuvat työmaalta liitteessä 3.</span>
                                            </label>
                                        </span>
                                    </div>
                                </div>
                                
                                <div class="text-[#586B74] text-[15px] flex items-start gap-[5px] mb-4">
                                    <span class="inline-block mr-8 text-white">-</span>
                                    <span class="inline-block mr-5">-</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <div class="flex flex-wrap flex-col lg:flex-row lg:items-center gap-x-2">
                                        <span class="text-[#586B74] text-[15px] inline-flex items-center gap-1">
                                            [
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                                <span class="flex-1 text-[#586B74] text-[14px]">Kuvat työmaalta liitteessä</span>
                                                <span class="text-[#586B74]">
                                                    <input type="text" name="pilar_VA1" placeholder="3" class="w-full lg:w-[25px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                                </span>
                                            </label>
                                        </span>
                                    </div>
                                </div>

                                <div class="text-[#586B74] text-[15px] flex items-start gap-[5px] mb-4">
                                    <span class="inline-block mr-8 text-white">-</span>
                                    <span class="inline-block mr-5">-</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <div class="flex flex-wrap flex-col lg:flex-row lg:items-center gap-x-2">
                                        <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                            [
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                                <span class="flex-1 text-[#586B74] text-[14px]">Ei pidetty yhteistä kierrosta työmaalla, koska vapaa teksti.</span>
                                            </label>
                                            ]
                                        </span>
                                    </div>
                                </div>
                                
                                <div class="text-[#586B74] text-[15px] flex items-start gap-[5px] mb-4">
                                    <span class="inline-block mr-8 text-white">-</span>
                                    <span class="inline-block mr-5">-</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <div class="flex flex-wrap flex-col lg:flex-row lg:items-center gap-x-2">
                                        <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                            [
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                                <span class="flex-1 text-[#586B74] text-[14px]">Ei pidetty yhteistä kierrosta työmaalla, koska vapaa teksti.</span>
                                            </label>
                                            ]
                                        </span>
                                    </div>
                                </div>

                                <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                    <span>15. </span>
                                    <span>MUUT ASIAT</span>
                                </h3>
                                
                                <p class="text-[#586B74] text-[14px] leading-7">Urakoitsijan on kiinnitettävä huomiota, ettei meluavia töitä suoriteta arkisin klo <span class="text-[#FE3B2D]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K7', true ), 'K7') ); ?></span> välisenä aikana.</p>
                                <p class="text-[#586B74] text-[14px] leading-7">Aihe</p>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5 text-white">-</span>
                                    <span class="inline-block mr-5">o</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Aihe" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="inline-block mr-5">-</span>
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>


                                <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                    <span>16. </span>
                                    <span>SEURAAVAT KOKOUKSET</span>
                                </h3>

                                <div class="flex items-center gap-3 mb-4">
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK1:</p>
                                    <p class="text-[#586B74] text-[14px] leading-7">
                                        Seuraavan kokouksen aihe ja ajankohta.
                                    </p>
                                </div>

                                <div class="flex items-center gap-3 mb-4">
                                    <p class="text-[#586B74] text-[14px] leading-7">TMK2:</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Seuraavan kokouksen aihe ja ajankohta." class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                                
                                <p class="text-[#586B74] text-[14px] leading-7">
                                    Rakennuttajakonsultti lähettää kokouskutsun. <b>(NOSTE)</b>
                                </p>

                                <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium mt-10">
                                    <span>17. </span>
                                    <span>KOKOUKSEN PÄÄTTÄMINEN</span>
                                </h3>
                            
                                <div class="flex items-center gap-2 mt-5 mb-5">
                                    <span class="text-[#586B74] text-[15px]">Puheenjohtaja päätti kokouksen klo</span>
                                    <input type="text" name="pilar_VA1" placeholder="xx.xx" class="w-full lg:w-[60px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </div>

                                <p class="text-[#586B74] text-[15px]">Pöytäkirjan vakuudeksi</p>

                                <div>
                                    <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                        [
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
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
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                            <span class="flex-1 text-[#586B74] text-[14px]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P4', true ), 'P4') ); ?></span>
                                        </label>
                                        ]
                                    </span>
                                </div>
                                <p class="text-[#586B74] text-[15px] mb-5">Partners at Noste Oy</p>
                                <p class="text-[#586B74] text-[15px] mb-5">Pöytäkirja tarkastetaan ja vahvistetaan hyväksytyksi allekirjoituksilla seuraavassa työmaakokouksessa. Pöytäkirjan allekirjoittavat rakennuttajan ja pääurakoitsijan edustajat. Virheet korjataan seuraavan työmaakokouksen pöytäkirjaan.</p>

                                <span class="text-[#586B74] text-[15px] inline-flex flex-start gap-1 mb-5">
                                    [
                                    <label class="inline-flex gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                    </label>
                                    <span class="flex-1 text-[#586B74] text-[14px]">Sopijapuolet ovat allekirjoittaneet tämän pöytäkirjan sähköisesti. Pöytäkirja on pätevä, kun molemmat osapuolet ovat sen allekirjoittaneet. Kumpikin sopijapuoli tallentaa ja/tai tulostaa allekirjoituspalvelujärjestelmästä oman asiakirjakappaleensa.]</span>
                                </span>

                                <label class="inline-flex gap-2 cursor-pointer mb-10">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                </label>
                            
                                <div class="grid lg:grid-cols-12">
                                    <div class="lg:col-span-6">
                                        <span class="flex-1 h-[1px] bg-[#94969C] inline-block w-[240px] mb-5"></span>
                                        <p class="text-[#586B74] text-[15px]">Tilaajan edustaja</p>

                                        <div>
                                            <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                                [
                                                <label class="inline-flex items-center gap-2 cursor-pointer">
                                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
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
                                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                                    <span class="flex-1 text-[#586B74] text-[14px]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P4', true ), 'P4') ); ?></span>
                                                </label>
                                                ]
                                            </span>
                                        </div>
                                        <p class="text-[#586B74] text-[15px] mb-5">Partners at Noste Oy</p>
                                    </div>
                                    
                                    <div class="lg:col-span-6">
                                        <span class="flex-1 h-[1px] bg-[#94969C] inline-block w-[240px] mb-5"></span>
                                        <p class="text-[#586B74] text-[15px]">Urakoitsijan edustaja</p>

                                        <div>
                                            <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                                [
                                                <label class="inline-flex items-center gap-2 cursor-pointer">
                                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
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
                                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                                    <span class="flex-1 text-[#586B74] text-[14px]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P4', true ), 'P4') ); ?></span>
                                                </label>
                                                ]
                                            </span>
                                        </div>
                                        <p class="text-accent italic text-[15px] mb-5"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_U1', true ), 'U1') ); ?></p>
                                    </div>
                                </div>

                            </div>

                            <div class="help_wrap relative mb-5">
                                <div class="max-w-[700px] mx-auto flex items-center gap-2">
                                    <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path>
                                                <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                            </g>
                                        </svg>
                                    </a>
                            
                                    <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                                </div>
                            
                                <div class="help_show text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                    Muista toimittaa PTK myös Tilaajalle ja kiinteistöpäällikölle kokouksessa mukana olleiden lisäksi.
                                </div>
                            </div>
                            
                            <div class="max-w-[700px] mx-auto">

                                <span class="text-[#586B74] text-[15px] inline-flex flex-center gap-1 mb-4">
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                    </label>
                                    <span class="flex-1 text-[#586B74] text-[14px]">Ei liitteitä</span>
                                </span>

                                <div class="flex items-center gap-3 mb-4">
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1" wfd-id="id108">
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7 w-[50px]">Liite 1</p>
                                    <span class="text-[#586B74] text-[14px] w-full">
                                        <input type="text" name="pilar_filed8_6_4" placeholder="Vapaa teksti, xx.xx.xxxx" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id109">
                                    </span>
                                </div>
                                
                            </div>
                        </div>
                    </div><!-- Card Body -->

                    <!-- Card footer -->
                    <?php echo wp_kses_post(noste_form_footer('form')); ?>
                    <!-- Card footer -->
                </form>
            </div>


        </div>
    </div>
</section>
<!-- Main Content -->