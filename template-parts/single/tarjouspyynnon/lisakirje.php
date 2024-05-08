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
                        <div>
                            
                            <div class="max-w-[700px] mx-auto mt-20">
                                <div class="mb-[30px]">
                                    <span class="font-medium italic text-[#00B2A9] block"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K1', true ), 'K1') ); ?></span>
                                    <span class="font-medium italic text-[#00B2A9] block"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K4', true ), 'K4') ); ?></span>
                                </div>

                                <div class="mb-[30px] flex items-center gap-[80px]">
                                    <div class="flex items-center gap-5">
                                        <h1 class="text-black text-[25px] font-medium">Tarjouspyynnön lisäkirje</h1>
                                        <input type="text" name="pilar_VA1" placeholder="X" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-full  lg:w-[100px] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </div>
                                    <input type="text" name="pilar_VA1" placeholder="XX.XX.XXXX" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] min-w-full  lg:min-w-[209px] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </div>

                                <div class="grid grid-cols-1 lg:grid-cols-3 gap-[20px] mb-5">
                                    <span class="text-[#586B74]">KOHDE:</span>
                                    <span class="text-[#00B2A9] italic">K4, K1, K2 K3</span>
                                </div>

                                <div class="grid grid-cols-1 lg:grid-cols-3 gap-[20px] mb-5">
                                    <span class="text-[#586B74]">RAKENNUTTAJA:</span>
                                    <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T1', true ), 'T1') ); ?></span>
                                </div>

                                <div class="grid grid-cols-1 lg:grid-cols-3 gap-[20px] mb-5">
                                    <span class="text-[#586B74]">RAKENNUTTAJAN</span>
                                    <span class="text-[#586B74]">Partners at Noste Oy</span>
                                    
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K17">
                                        <span class="flex-1 text-[#586B74] text-[14px]">Projektipäällikkö</span>
                                    </label>
                                </div>

                                <div class="grid grid-cols-1 lg:grid-cols-3 gap-[20px] mb-5">
                                    <span class="text-[#586B74]">YHTEYSHENKILÖ</span>
                                    <span class="text-[#586B74]">Kansakoulukatu 10</span>
                                    <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P1', true ), 'P1') ); ?></span>
                                </div>

                                <div class="grid grid-cols-1 lg:grid-cols-3 gap-[20px] mb-5">
                                    <span class="text-[#586B74]">(rakennuttajakonsultti):</span>
                                    <span class="text-[#586B74]">00100 Helsinki</span>
                                    <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P2', true ), 'P2') ); ?></span>
                                </div>

                                <div class="grid grid-cols-1 lg:grid-cols-3 gap-[20px] mb-5">
                                    <span class="hidden lg:inline-block"></span>
                                    <span class="hidden lg:inline-block"></span>
                                    <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P3', true ), 'P3') ); ?></span>
                                </div>

                                <div class="grid grid-cols-1 lg:grid-cols-3 gap-[20px] mb-5">
                                    <span class="hidden lg:inline-block"></span>
                                    <span class="hidden lg:inline-block"></span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K17">
                                        <span class="flex-1 text-[#586B74] text-[14px]">Projektijohtamisen asiantuntija</span>
                                    </label>
                                </div>

                                <div class="grid grid-cols-1 lg:grid-cols-3 gap-[20px] mb-5">
                                    <span class="hidden lg:inline-block"></span>
                                    <span class="hidden lg:inline-block"></span>
                                    <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P4', true ), 'P4') ); ?></span>
                                </div>

                                <div class="grid grid-cols-1 lg:grid-cols-3 gap-[20px] mb-5">
                                    <span class="hidden lg:inline-block"></span>
                                    <span class="hidden lg:inline-block"></span>
                                    <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P5', true ), 'P5') ); ?></span>
                                </div>

                                <div class="grid grid-cols-1 lg:grid-cols-3 gap-[20px] mb-5">
                                    <span class="hidden lg:inline-block"></span>
                                    <span class="hidden lg:inline-block"></span>
                                    <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P6', true ), 'P6') ); ?></span>
                                </div>
                            </div>

                            <div class="max-w-[700px] mx-auto mt-8">
                                

                                <p class="text-[#586B74] text-[15px] my-3 lg:my-10">Lisäkirjeellä X tarkennetaan tarjouspyyntöä seuraavasti:</p>
                            
                                <div class="flex flex-col lg:flex-row lg:items-center gap-2">
                                    <span class="h-[1px] bg-[#94969C] inline-block self-end w-full mt-5 lg:mt-0 lg:w-[358px]"></span>
                                    <div class="help_wrap relative mb-2">
                                        <div class="max-w-[700px] mx-auto flex items-center gap-2">               
                                            <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                                        </div>
                    
                                        <div class="help_show hidden text-[#586B74] text-[14px] lg:w-[414px] 2xl:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:ml-[145px] lg:left-[100%] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-80px]">
                                            <hr class="inline-block absolute right-[100%] top-[70px] w-[147px] border border-solid border-[#E1E1EA]">
                                            <span>
                                                Kuvaa tähän kohtaan lisäkirjeen sisältö, eli millä tavalla alkuperäistä tarjouspyyntöä tarkennetaan. Tässä kohdassa voit myös täydentää lisäkirjeen liitteiden sisältöä (esim. päivitetyissä suunnitelmissa ei ole määritetty riittävän tarkasti jotakin lisättyä asiaa).
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex flex-col lg:flex-row lg:items-center gap-2 mt-10">

                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                        <span class="flex-1 text-[#586B74] text-[14px]">Tarjouksen laskenta-aika päättyy alkuperäisen aikataulun mukaisesti</span>
                                    </label>

                                    <input type="text" name="pilar_VA1" placeholder="XX.XX.XXXX" class="w-full lg:w-[119px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    <span class="text-[#586B74] text-[15px]">klo</span>
                                    <input type="text" name="pilar_VA1" placeholder="XX.XX" class="w-full lg:w-[68px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </div>

                                <div class="flex flex-col lg:flex-row lg:items-center gap-2 mt-10">
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                        <span class="flex-1 text-[#586B74] text-[14px]">Tarjouksen laskenta-aikaa on jatkettu</span>
                                    </label>

                                    <input type="text" name="pilar_VA1" placeholder="XX.XX.XXXX" class="w-full lg:w-[119px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    <span class="text-[#586B74] text-[15px]">klo</span>
                                    <input type="text" name="pilar_VA1" placeholder="XX.XX" class="w-full lg:w-[68px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </div>

                                <p class="text-[#586B74] text-[15px] mt-5 mb-5 lg:mt-20 lg:mb-10">Lisäksi päivitetty asiakirjaluettelo seuraavasti:</p>

                                <div>
                                    <div class="grid lg:grid-cols-3 items-center gap-[20px] mb-5">
                                        <span class="text-[#283B44] font-medium">Kaupalliset asiakirjat</span>
                                        <span class="text-[#283B44] font-medium">Tekijä</span>
                                        <span class="text-[#283B44] font-medium">Asiakirjan päiväys</span>
                                    </div>
                                    <div class="grid lg:grid-cols-3 items-center gap-[20px] mb-5">
                                        <span class="text-[#586B74]">Lisäkirje x</span>
                                        <span class="text-[#586B74]">Partners at Noste Oy</span>
                                        <span class="text-[#586B74]">
                                            <input type="text" name="pilar_VA1" placeholder="XX.XX.XXXX" class="w-full lg:w-[119px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                        </span>
                                    </div>
                                    <div class="grid lg:grid-cols-3 items-center gap-[20px] mb-5">
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                            <span class="text-[#586B74]">Tarjouspyyntölomake</span>
                                        </label>
                                        <span class="text-[#586B74]">Partners at Noste Oy</span>
                                        <span class="text-[#586B74]">
                                            <input type="text" name="pilar_VA1" placeholder="XX.XX.XXXX" class="w-full lg:w-[119px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                        </span>
                                    </div>
                                    <div class="grid lg:grid-cols-3 items-center gap-[20px] mb-5">
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                            <span class="text-[#586B74]">Turvallisuusasiakirja</span>
                                        </label>
                                        <span class="text-[#586B74]">Partners at Noste Oy</span>
                                        <span class="text-[#586B74]">
                                            <input type="text" name="pilar_VA1" placeholder="XX.XX.XXXX" class="w-full lg:w-[119px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                        </span>
                                    </div>
                                    <div class="grid lg:grid-cols-3 items-center gap-[20px] mb-5">
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                            <span class="text-[#586B74]">Urakkasopimusluonnos</span>
                                        </label>
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
                                            <input type="text" name="pilar_M1" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                        </span>
                                        <span class="text-[#586B74]">
                                            <input type="text" name="pilar_VA1" placeholder="XX.XX.XXXX" class="w-full lg:w-[119px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                        </span>
                                    </div>
                                </div>

                                <div class="mt-10">
                                    <div class="grid lg:grid-cols-3 items-center gap-[20px] mb-5">
                                        <span class="text-[#283B44] font-medium">Tekniset asiakirjat</span>
                                        <span class="text-[#283B44] font-medium">Tekijä</span>
                                        <span class="text-[#283B44] font-medium">Asiakirjan päiväys</span>
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
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                                <span class="text-[#586B74]">Tarjouspyyntölomake</span>
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
                                                <input type="text" name="pilar_filed8_6" placeholder="Muu" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                            </div>
                                        </span>
                                        <span class="text-[#586B74]">
                                            <input type="text" name="pilar_M1" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                        </span>
                                        <span class="text-[#586B74]">
                                            <input type="text" name="pilar_VA1" placeholder="XX.XX.XXXX" class="w-full lg:w-[119px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                        </span>
                                    </div>
                                </div>
                                
                            </div>

                        </div>
                    </div>
                    <!-- Card footer --><?php echo wp_kses_post(noste_form_footer('form')); ?><!-- Card footer -->
                </form>
            </div>


        </div>
    </div>
</section>
<!-- Main Content -->