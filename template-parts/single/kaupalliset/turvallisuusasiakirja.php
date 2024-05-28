<?php 

if ( !is_singular( 'projektitiedot' ) ) {
   return;
}



$project_id = get_the_ID();
$data = the_form_stored_data();
$data['noste_check'] = isset($data['noste_check'])?array_values((array) $data['noste_check']):[];

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
                        
                    
                        <div class="max-w-[700px] mx-auto mt-20">
                            <div class="mb-[30px]">
                                <span class="font-medium italic text-[#00B2A9] block"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K1', true ), 'K1') ); ?></span>
                                <span class="font-medium italic text-[#00B2A9] block"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K4', true ), 'K4') ); ?></span>
                            </div>

                            <div class="mb-[30px]">
                                <h3 class="text-[#08202C] text-[24px] font-medium my-4 uppercase">työturvallisuusasiakirja T. TAVANOMAINEN</h3>
                                <h1 class="text-black text-[28px] font-medium mb-4">KORJAUSRAKENNUSHANKE</h1>
                                <p class="text-dark mt-5 mb-10">
                                    Lomake sisältää työturvallisuuteen liittyvät asiakirjat tavanomaisessa korjausrakennushankkeessa ja liittyy ohjekorttiin RT 10-10982 Rakennuttajan työturvallisuusvelvoitteet rakennushankkeessa. Viittaukset VNa 205/2009. 
                                    <br>
                                    <br>
                                    Turvallisuusasiakirjan, turvallisuussääntöjen ja menettelyohjeiden avulla rakennuttajan ja rakennushankkeeseen osallistuvien osapuolten työturvallisuustehtävät määritellään selkeästi, parannetaan aktiivista yhteistyötä ja tiedonsiirtoa.
                                </p>  

                                <div class="flex items-center mb-5">
                                    <span class="text-dark text-[17px] w-[15%]">Versio:</span>
                                    <input type="text" name="pilar_VA1_1" placeholder="XX.XX.XXXX" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] min-w-full  lg:min-w-[209px] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </div>
                                <div class="flex items-center mb-5">
                                    <span class="text-dark text-[17px] w-[15%]">Tilaaja:</span>
                                    <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T1', true ), 'T1') ); ?></span>
                                </div>
                                <div class="flex items-center mb-5">
                                    <span class="text-dark text-[17px] w-[15%]">Laatija:</span>
                                    <span class="text-dark text-[15px]">
                                        <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P1', true ), 'P1') ); ?></span> , Partners at Noste Oy
                                    </span>
                                </div>
                                <div class="flex items-center mb-5">
                                    <span class="text-dark text-[17px] w-[15%]">Tilaaja:</span>
                                    <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K4', true ), 'K4') ); ?></span>
                                </div>
                                <div class="flex items-center mb-5">
                                    <span class="text-dark text-[17px] w-[15%]"></span>
                                    <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K1', true ), 'K1') ); ?></span>
                                </div>
                                <div class="flex items-center mb-5">
                                    <span class="text-dark text-[17px] w-[15%]"></span>
                                    <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K2', true ), 'K2') ); ?></span>
                                </div>
                                <div class="flex items-center mb-5">
                                    <span class="text-dark text-[17px] w-[15%]"></span>
                                    <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K3', true ), 'K3') ); ?></span>
                                </div>
                            </div>

                            <div class="mt-10">
                                <h3 class="text-black text-[20px] font-medium uppercase">
                                    1. Yleistä
                                </h3>

                                <div class="flex items-center mb-10">
                                    <span class="text-dark text-[17px] w-[35%]">Rakennuskohteen kuvaus:</span>
                                    
                                    <div class="help_wrap relative">
                                        <div class="flex items-center gap-2">
                                            <span class="text-dark text-[17px]">Rakennushanke käsittää</span>
                                            <span class="text-dark">
                                                <input type="text" name="pilar_VA1_2" placeholder="" class="w-full lg:w-[209px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                            </span>
                    
                                            <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                                        </div>
                    
                                        <div class="help_show text-dark text-[14px] lg:w-[250px] 2xl:w-[284px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:ml-[15px] lg:left-[100%] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                            <hr class="inline-block absolute right-[100%] top-[31px] w-[17px] border border-solid border-[#E1E1EA]">
                                            <span>
                                                Lyhyt kuvaus missä töitä tehdään ja minkä tyyppisiä. esim: 
                                                <br>
                                                -3. kerroksen Elixia-tilamuutostyöt 
                                                <br>
                                                -1. krs sijaitsevan lounasravintolan muutostyöt 
                                                <br>
                                                - Toimistotilan lattiamateriaalin uusiminen jne.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center mb-5">
                                    <span class="text-dark text-[17px] w-[35%]"></span>
                                    
                                    <div class="help_wrap relative">
                                        <div class="flex items-center gap-2">
                                            <span class="text-dark text-[17px]">
                                                Kohteen rakennustyöt sisältävät mm. 
                                                <br>
                                                seuraavanlaisia töitä:
                                            </span>
                    
                                            <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                                        </div>
                    
                                        <div class="help_show text-dark text-[14px] lg:w-[180px] 2xl:w-[350px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:ml-[50px] lg:left-[100%] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-55px] hidden">
                                            <hr class="inline-block absolute right-[100%] top-[31px] w-[51px] border border-solid border-[#E1E1EA]">
                                            <span>
                                            Mieti ja valitse mitä töitä urakassa tehdään. Tarkoitus on itsekin pysähtyä miettimään ainakin
                                            onko urakassa vaarallisia töitä, kuten haitta-ainepurkua, sähkötöitä jne. Valitsematta jätetyt eivät tulostu.

                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center mb-5">
                                    <span class="text-dark text-[17px] w-[35%]"></span>
                                    <div>
                                        <div class="flex items-center gap-3 mb-3">
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_1', $data); ?>>
                                                <span class="text-dark">Purkutöitä</span>
                                            </label>
                                        </div>
                                        <div class="flex items-center gap-3 mb-3">
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_2', $data); ?>>
                                                <span class="text-dark">Haitta-ainepurkuja</span>
                                            </label>
                                        </div>
                                        <div class="flex items-center gap-3 mb-3">
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_3', $data); ?>>
                                                <span class="text-dark">Tasoitus- ja maalaustöitä</span>
                                            </label>
                                        </div>
                                        <div class="flex items-center gap-3 mb-3">
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_4', $data); ?>>
                                                <span class="text-dark">Uusien kipsilevyseinien rakennustyötä</span>
                                            </label>
                                        </div>
                                        <div class="flex items-center gap-3 mb-3">
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_5', $data); ?>>
                                                <span class="text-dark">Lasiseinien asennusta</span>
                                            </label>
                                        </div>
                                        <div class="flex items-center gap-3 mb-3">
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_6', $data); ?>>
                                                <span class="text-dark">Uuden lattiamateriaalin asennusta</span>
                                            </label>
                                        </div>
                                        <div class="flex items-center gap-3 mb-3">
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_7', $data); ?>>
                                                <span class="text-dark">Alakatto- tai holvitöitä</span>
                                            </label>
                                        </div>
                                        <div class="flex items-center gap-3 mb-3">
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_8', $data); ?>>
                                                <span class="text-dark">Keittiökalusteasennuksia</span>
                                            </label>
                                        </div>
                                        <div class="flex items-center gap-3 mb-3">
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_9', $data); ?>>
                                                <span class="text-dark">WC:n rakennustöitä</span>
                                            </label>
                                        </div>
                                        <div class="flex items-center gap-3 mb-3">
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_10', $data); ?>>
                                                <span class="text-dark">Märkätilatöitä</span>
                                            </label>
                                        </div>
                                        <div class="flex items-center gap-3 mb-3">
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_11', $data); ?>>
                                                <span class="text-dark">Valaistusmuutostöitä</span>
                                            </label>
                                        </div>
                                        <div class="flex items-center gap-3 mb-3">
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_12', $data); ?>>
                                                <span class="text-dark">Ryhmäkeskustasoisia sähkötöitä</span>
                                            </label>
                                        </div>
                                        <div class="flex items-center gap-3 mb-3">
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_13', $data); ?>>
                                                <span class="text-dark">Pääkeskustasoisia sähkötöitä</span>
                                            </label>
                                        </div>
                                        <div class="flex items-center gap-3 mb-3">
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_14', $data); ?>>
                                                <span class="text-dark">LVI-töitä</span>
                                            </label>
                                        </div>
                                        <div class="flex items-center gap-3 mb-3">
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_15', $data); ?>>
                                                <span class="text-dark">Automaatiotöitä</span>
                                            </label>
                                        </div>
                                        <div class="flex items-center gap-3 mb-3">
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_16', $data); ?>>
                                                <span class="text-dark">SPR-töitä</span>
                                            </label>
                                        </div>
                                        <div class="flex items-center gap-3 mb-3">
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_17', $data); ?>>
                                                <span class="text-dark">Töitä vesikatolla</span>
                                            </label>
                                        </div>
                                        <div class="flex items-center gap-3 mb-3">
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_18', $data); ?>>
                                                <span class="text-dark">Töitä korkealla tai tekniikkakuiluissa</span>
                                            </label>
                                        </div>
                                        <div class="flex items-center gap-3 mb-3">
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_19', $data); ?>>
                                                <span class="text-dark">Töitä useassa tasossa/muun toiminnan yläpuolella</span>
                                            </label>
                                        </div>
                                        <div class="flex items-center gap-3 mb-3">
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_20', $data); ?>>
                                                <span class="text-dark">Töitä vilkkaasti liikennöidyllä paikalla</span>
                                            </label>
                                        </div>
                                        <div class="flex items-center gap-3 mb-3">
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_21', $data); ?>>
                                                <span class="text-dark">Töitä käytössä olevassa kiinteistössä</span>
                                            </label>
                                        </div>
                                        <div class="flex items-center gap-3 mb-3">
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_22', $data); ?>>
                                                <span class="text-dark">Töitä käytössä olevassa tilassa</span>
                                            </label>
                                        </div>
                                        <div class="flex items-center gap-3 mb-3">
                                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_23', $data); ?>>
                                                <input type="text" name="pilar_filed8_2" placeholder="(Tähän oma)" class="flex-1 w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center mb-5">
                                    <span class="text-dark text-[17px] w-[35%]">Rakennuttaja:</span>
                                    <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T1', true ), 'T1') ); ?></span>
                                </div>
                                <div class="flex items-center mb-5">
                                    <span class="text-dark text-[17px] w-[35%]">Päätoteuttaja:</span>
                                    <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_U1', true ), 'U1') ); ?></span>
                                </div>
                                <p class="text-dark mt-5 mb-10">
                                    Vaaratekijöistä tehdyt havainnot tulostetaan turvallisuusasiakirjaksi,
                                    <br>
                                    turvallisuussäännöiksi ja menettelyohjeiksi.
                                </p>
                            </div>

                        </div>

                        <div class="help_wrap mt-10 mb-5 relative">
                            <div class="max-w-[700px] mx-auto flex items-center gap-2">
                                <h3 class="text-black text-[20px] font-medium uppercase min-w-[210px]">
                                    2. Turvallisuusasiakirja
                                </h3>

                                <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                                
                                <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                            </div>

                            <div class="help_show text-dark text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                Kappaleessa 2 esitetään rakennushankkeen 
                                <br>
                                - ominaisuuksista, 
                                <br>
                                - olosuhteista ja 
                                <br>
                                - luonteesta aiheutuvat erityiset vaara- ja 
                                <br>
                                haittatekijät ja niistä tehdyt selvitykset ja 
                                <br>
                                kartoitukset tms. 
                                <br>
                                <br>
                                Rakennustöiden turvallisuussuunnittelu VNa 205/2009 10 §
                            </div>
                        </div>

                        <div class="max-w-[700px] mx-auto">
                            <p class="text-dark">
                                Turvallisuusasiakirja on rakentamisen suunnittelua ja valmistelua varten laadittu asiakirja, joka sisältää rakennushankkeen ominaisuuksista, olosuhteista ja luonteesta aiheutuvia vaara- ja haittatekijöitä koskevat tiedot sekä rakennushankkeen toteuttamiseen liittyvät työturvallisuutta ja työterveyttä koskevat tiedot. Turvallisuusasiakirjan laatimisesta vastaa rakennuttaja. 
                                <br>
                                <br>
                                Turvallisuusasiakirjan sisältö muodostuu vaaratekijöiden arvioinnissa esiin tulleista asioista ja asetuksessa (VNa 205/2009 10 §) erikseen päätoteuttajan suunniteltaviksi määrätyistä asioista. 
                                <br>
                                <br>
                                Rakennuttaja edellyttää päätoteuttajan tekevän riskien arviointia vähintään turvallisuusasiakirjassa esittämilleen vaaroille, joiden poistamiseksi toteuttajan on suunniteltava turvalliset työmenetelmät tai otettava ne huomioon työmaan turvallisuusjohtamisessa. 
                                <br>
                                <br>
                                Päätoteuttaja vastaa tämän turvallisuusasiakirjan ja näiden menettelyohjeiden jakelusta muille päätoteuttajan kanssa sopimussuhteessa oleville osapuolille. Suunnittelijoille menettelyohjeiden toimittamisesta vastaa rakennuttajan turvallisuuskoordinaattori.
                            </p>

                            <h3 class="text-black text-[20px] font-medium uppercase mt-10">
                                2.1 Rakennuskohteen ominaisuuksia ja olosuhteita
                            </h3>

                            <p class="text-dark text-[17px] my-5">Kohteelle tyypillisiä ominaisuuksia ja olosuhteita ovat mm.</p>

                            <div>
                                <label class="mb-5 flex items-start gap-2 cursor-pointer">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_24', $data); ?>>
                                    <span class="text-dark flex-1 mt-[-5px]">Työt toteutetaan toiminnassa olevassa kiinteistössä. Muutosalueen ympäröivissä tiloissa on ulkopuolisia kiinteistön käyttäjiä.</span>
                                </label>
                                <label class="mb-5 flex items-start gap-2 cursor-pointer">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_25', $data); ?>>
                                    <span class="text-dark flex-1 mt-[-5px]">Työt toteutetaan vilkkaasti liikennöidyllä keskusta-alueella sijaitsevassa kiinteistössä.</span>
                                </label>
                                <label class="mb-5 flex items-start gap-2 cursor-pointer">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_26', $data); ?>>
                                    <span class="text-dark flex-1 mt-[-5px]">Rakennuksen kaikkia asennuksia, ml. kaapeleita, putkia ja johtoja ei ole kaikilta osin esitetty suunnitelmissa, joten suunnittelun ja toteutuksen lähtötiedot eivät ole kaiken kattavia.</span>
                                </label>
                                <label class="mb-5 flex items-start gap-2 cursor-pointer">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_27', $data); ?>>
                                    <span class="text-dark flex-1 mt-[-5px]">Kaikista kiinteistössä käytetyistä rakennusmateriaaleista ei ole haitta-ainekartoitusta tai muuta tietoa.</span>
                                </label>
                                <label class="mb-5 flex items-start gap-2 cursor-pointer">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_28', $data); ?>>
                                    <span class="text-dark flex-1 mt-[-5px]">Urakka-alueen läpi kulkee muita tiloja palvelevaa talotekniikkaa.</span>
                                </label>
                                <label class="mb-5 flex items-start gap-2 cursor-pointer">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_29', $data); ?>>
                                    <span class="text-dark flex-1 mt-[-5px]">Kuljetus- ja haalausreitit ovat myös kiinteistön käyttäjien käytössä, mikä täytyy ottaa huomioon työmaasuunnitelmaa laadittaessa.</span>
                                </label>
                                <label class="mb-5 flex items-start gap-2 cursor-pointer">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_31', $data); ?>>
                                    <span class="text-dark flex-1 mt-[-5px]">Työt toteutetaan säälle alttiilla paikalla ja sääolosuhteet voivat vaihdella (sade, tuuli, pakkanen, helle).</span>
                                </label>
                                <label class="mb-5 flex items-start gap-2 cursor-pointer">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_32', $data); ?>>
                                    <span class="text-dark flex-1 mt-[-5px]">Työmaa-alueelle varattavalle tilalle on rajoitteita.</span>
                                </label>
                                <label class="mb-5 flex items-start gap-2 cursor-pointer">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_33', $data); ?>>
                                    <span class="text-dark flex-1 mt-[-5px]">Työmaa-alueen läpi/ali kulkee satunnaisesti ulkopuolisia henkilöitä.</span>
                                </label>
                                <label class="mb-5 flex items-start gap-2 cursor-pointer">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_34', $data); ?>>
                                    <span class="text-dark flex-1 mt-[-5px]">Työskentely tapahtuu korkealla/telineillä.</span>
                                </label>
                                <label class="mb-5 flex items-start gap-2 cursor-pointer">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_35', $data); ?>>
                                    <span class="text-dark flex-1 mt-[-5px]">Työskentelyä tapahtuu kuiluissa.</span>
                                </label>
                                <label class="mb-5 flex items-start gap-2 cursor-pointer">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_36', $data); ?>>
                                    <span class="text-dark flex-1 mt-[-5px]">Rakennus sisältää asbestia ja/tai muita haitta-aineita sisältäviä rakennusosia.</span>
                                </label>
                                <div class="flex items-center gap-3 mb-3">
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_37', $data); ?>>
                                        <input type="text" name="pilar_filed8_3" placeholder="(Tähän oma)" class="flex-1 w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </label>
                                </div>
                            </div>

                            <h3 class="text-black text-[20px] font-medium uppercase mt-10">
                                2.2 Rakennuskohteen tyypilliset turvallisuusriskit
                            </h3>
                        </div>

                        <div class="help_wrap mb-5 relative">
                            <div class="max-w-[700px] mx-auto flex items-center gap-2">
                                <p class="text-dark text-[17px] my-5 min-w-[480px]">Kohteelle tyypillisiä työturvallisuusriskejä ja muita riskejä sisältäviä työvaiheita tai olosuhteita ovat mm.</p>

                                <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                                
                                <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                            </div>

                            <div class="help_show text-dark text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-80px] hidden">
                                Käy ajatuksella läpi. Huomioi, että pienetkin muutokset sisältöön voivat aiheuttaa esimerkiksi töitä kuiluissa, vaikka niitä ei alkuperäisessä urakassa ole.
                            </div>
                        </div>

                        <div class="max-w-[700px] mx-auto">
                            <label class="mb-5 flex items-start gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_38', $data); ?>>
                                <span class="text-dark flex-1 mt-[-5px]">Purkutyöt yleisesti. Purkutöitä tehtäessä purku- ja työalueiden tulee tehdä sähköstä jännitteettömiksi huomioiden kuitenkin muita käyttäjiä remontin aikana palveleva tekniikka.</span>
                            </label>
                            <label class="mb-5 flex items-start gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_39', $data); ?>>
                                <span class="text-dark flex-1 mt-[-5px]">Talotekniikan muutokset/lisäykset kuiluissa ja/tai korkealla työskentely; Riskinä materiaalin ja henkilöiden putoaminen kuiluun/korkealta.</span>
                            </label>
                            <label class="mb-5 flex items-start gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_41', $data); ?>>
                                <span class="text-dark flex-1 mt-[-5px]">Purku- ja työalueilla olevat muita kiinteistön käytössä olevia osia palvelevat kaapeloinnit. Riskinä turvallisuuden ja toimintojen häiriintyminen kiinteistön käytössä olevissa tiloissa.</span>
                            </label>
                            <label class="mb-5 flex items-start gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_42', $data); ?>>
                                <span class="text-dark flex-1 mt-[-5px]">Purkutyöt mahdollisten sprinklerilinjojen ja muiden paineellisten putkien läheisyydessä. Riskinä on vaurioitumisesta johtuva vesivahinko. Työt on suoritettava huolellisesti ja varmistettava, ettei vaurioita tapahdu.</span>
                            </label>
                            <label class="mb-5 flex items-start gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_43', $data); ?>>
                                <span class="text-dark flex-1 mt-[-5px]">Osa purkutöistä on asbesti- tai haitta-ainepurkuja.</span>
                            </label>
                            <label class="mb-5 flex items-start gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_44', $data); ?>>
                                <span class="text-dark flex-1 mt-[-5px]">Materiaalisiirrot ja nostot työmaalla ja katualueella; riskinä esineiden ja materiaalin putoaminen, pelastus- ja kulkureittien käytön estyminen ja sivullisten loukkaantuminen.</span>
                            </label>
                            <label class="mb-5 flex items-start gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_45', $data); ?>>
                                <span class="text-dark flex-1 mt-[-5px]">Kulku- ja työturvallisuus; riskinä työmaan epäjärjestyksestä johtuvat tapaturmat työntekijöille tai sivullisille.</span>
                            </label>
                            <label class="mb-5 flex items-start gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_46', $data); ?>>
                                <span class="text-dark flex-1 mt-[-5px]">Työmaajärjestelyt; riskinä, että ulkopuoliset harhautuvat tai tunkeutuvat työmaa-alueelle, myös viikonloppuisin.</span>
                            </label>
                            <label class="mb-5 flex items-start gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_47', $data); ?>>
                                <span class="text-dark flex-1 mt-[-5px]">Koneiden ja laitteiden käytöstä syntyvät vaarat ja haitat (esim. pöly, melu, tärinä ja pakokaasut). Riskinä edellä mainittujen haittojen leviäminen muualle kiinteistöön.</span>
                            </label>
                            <label class="mb-5 flex items-start gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_48', $data); ?>>
                                <span class="text-dark flex-1 mt-[-5px]">Paloturvallisuus; riskinä tulipalon syttyminen.</span>
                            </label>
                            <label class="mb-5 flex items-start gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_49', $data); ?>>
                                <span class="text-dark flex-1 mt-[-5px]">Pölyn kulkeutuminen IV-kanavistoon ja muihin liiketiloihin.</span>
                            </label>
                            <label class="mb-5 flex items-start gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_50', $data); ?>>
                                <span class="text-dark flex-1 mt-[-5px]">Epäergonomiset työasennot ja/tai ajat.</span>
                            </label>
                            <label class="mb-5 flex items-start gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_51', $data); ?>>
                                <span class="text-dark flex-1 mt-[-5px]">Liian lämpimät/kylmät työskentelyolosuhteet</span>
                            </label>
                            <div class="flex items-center gap-3 mb-3">
                                <label class="inline-flex items-center gap-2 cursor-pointer">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_52', $data); ?>>
                                    <input type="text" <?php noste_textinput_attrset('pilar_filed8_4', $data, ''); ?> placeholder="(Tähän oma)" class="flex-1 w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </label>
                            </div>

                            <h3 class="text-black text-[20px] font-medium uppercase mt-10">
                                2.3 Turvallisuusasiakirjan ylläpito
                            </h3>
                            <p class="text-dark mt-5">
                                Turvallisuusasiakirjaa päivitetään tarpeen vaatiessa. 
                                <br>
                                <br>
                                Rakennuttajan turvallisuuskoordinaattorina toimii <span class="text-[#00B2A9]">TK1</span> (Partners at Noste Oy). 
                                <br>
                                <br>
                                Urakoitsijat ilmoittavat havainnoistaan Rakennuttajan turvallisuuskoordinaattorille, joka vastaa asiakirjan päivittämisestä.
                            </p>
                        </div>

                        <div class="help_wrap mt-10 mb-5 relative">
                            <div class="max-w-[700px] mx-auto flex items-center gap-2">
                                <h3 class="text-black text-[20px] font-medium uppercase min-w-[210px]">
                                    3. Turvallisuussäännöt
                                </h3>

                                <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                                
                                <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                            </div>

                            <div class="help_show text-dark text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                Esitetään tavoitteet<br>
                                - työturvallisuuden tasolle ja sen seurannalle,<br>
                                - yhteistoimintaan liittyville tehtäville ja kokouksille<br>
                                - turvallisuussuunnitelmien käsittelylle<br>
                                - viranomaismääräyksissä rakennuttajalle<br>
                                asetettujen työturvallisuuden huolehtimisvelvollisuuden
                                tehtäville.<br><br>

                                Korjausrakennuskohteessa esitetään myös<br>
                                - käyttäjien edellyttämät turvallisuusvaatimukset<br>
                                - ilmoitusmenettelyt,<br>
                                - toiminta sähkön- ja veden jakeluhäiriöiden suhteen<br>
                                - työn aikarajoitukset.
                            </div>
                        </div>

                        <div class="max-w-[700px] mx-auto">
                            <p class="text-dark mt-5">
                                Turvallisuussäännöillä tarkoitetaan rakennuttajan antamia kirjallisia ohjeita, missä on esitetty turvallisuushallinnan tavoitteet ja toimenpiteet sekä ohjeet turvallisuusseurantaan, tarkastuksiin, yhteistoimintaan, työmaakokouksiin, henkilötunnisteen ja kulkuluvan käyttöön sekä osapuolten hyväksyntää edellyttävien turvallisuussuunnitelmien käsittelyyn.
                            </p>

                            <h3 class="text-black text-[20px] font-medium uppercase mt-10">
                                3.1 rakennuttajan tavoitteet työturvallisuudesta
                            </h3>
                            <p class="text-dark my-5">Turvallisuustaso ja sen seuranta:</p>

                            <div class="help_wrap relative">
                                <div class="flex items-center gap-2">
                                    <p class="text-dark flex items-center gap-4">
                                        <span>-</span>
                                        <span class="inline-flex items-center gap-2">
                                            Tilaaja edellyttää työssä hyvää turvallisuustasoa (TR-mittaus > 
                                            <input type="text" name="pilar_filed8_5" placeholder="90" class="flex-1 w-[80px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                            %)
                                        </span>
                                    </p>

                                    <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                                </div>
            
                                <div class="help_show text-dark text-[14px] lg:w-[250px] 2xl:w-[284px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:ml-[15px] lg:left-[100%] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                    <hr class="inline-block absolute right-[100%] top-[31px] w-[17px] border border-solid border-[#E1E1EA]">
                                    <span>
                                        Onko Tilaaja asettanut tavoitteen? Jos ei niin käytetään >90%
                                    </span>
                                </div>
                            </div>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Työturvallisuustavoite on nolla (0) onnettomuutta tai tapaturmaa.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Päätoteuttaja on velvollinen suorittamaan viikoittaiset kunnossapitotarkastukset (VNa 205/2009 14-16§ ).</span>
                            </p>

                            <p class="text-dark my-5">Töiden yhteensovitus ja työsuojelu:</p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Päätoteuttaja vastaa toteutuksen turvallisuusjohtamisesta.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Turvallisuusasiat käsitellään hankkeen kaikissa kokouksissa ja katselmuksissa (suunnittelu-, työmaa- ja urakoitsijakokoukset).</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Päätoteuttaja huolehtii, että tapaturmat tutkitaan ja vakavasta tapaturmasta tehdään ilmoitukset alueellisesti toimivaltaiselle työsuojeluviranomaiselle, poliisille ja rakennuttajalle.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Päätoteuttaja huolehtii, että sattuneet tapaturmat ja onnettomuudet käsitellään työmaakokouksissa ja urakoitsijapalavereissa.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Päätoteuttaja huolehtii, että kiinteistön alueella sattuneet vakavat vaaratilanteet ja vahingot dokumentoidaan ja tutkitaan. Näistä tiedotetaan myös rakennuttajalle ja rakennuttajan edustajalle välittömästi.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Tilaaja saattaa suorittaa hankkeessa rakennuttajan erillishankintoja. Päätoteuttaja vastaa myös erillishankintojen turvallisuusjohtamisesta vastaanottoon saakka.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Päätoteuttaja nimeää hankkeelle työsuojelupäällikön ja varmistaa, että hankkeelle on valittu määräysten ja sopimusten mukaisesti työsuojeluvaltuutettu.</span>
                            </p>

                            <p class="text-dark my-5">Turvallisuussuunnitelmien käsittely:</p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Päätoteuttajan tulee laatia ja esittää rakennuttajalle ennen töiden aloittamista kirjallinen turvallisuussuunnitelma (VNa 205/2009 10§), jossa on otettu huomioon:</span>
                            </p>
                            <ul class="list-disc ml-[60px]">
                                <li class="text-dark">Rakennuttajan antamat turvallisuustiedot ja -vaatimukset</li>
                                <li class="text-dark">Rakennuttajan turvallisuusasiakirjan tiedot</li>
                                <li class="text-dark">Työn ja työkohteen muut erityisolosuhteet</li>
                                <li class="text-dark">Työsuojelumääräysten mukaiset vaatimukset</li>
                            </ul>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Vaarallisista töistä ja työvaiheista laaditaan aina ennen töiden aloittamista riskienarviointi ja kirjallinen suunnitelma.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Urakoitsijoiden tulee arvioida hankkeen ja työvaiheiden riskit sekä saattaa ao. riskit rakennuttajan ja turvallisuuskoordinaattorin tietoon turvallisuusasiakirjan päivittämiseksi. Urakoitsijan tekemä riskienkartoitus tulee päivittää vähintään kerran kuukaudessa siten, että se on ajantasainen suhteessa sen hetkisen työmaatilanteen kanssa.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Päätoteuttajan tulee laatia ja esittää rakennuttajalle VNa 205/2009 11 §:n mukainen rakennustyömaa-alueen käytön suunnitelma ennen töiden aloittamista.</span>
                            </p>

                            <p class="text-dark my-5">Lupien tarkastus</p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Päätoteuttajan vastuulla on huolehtia verottajan edellyttämistä rakentamisen tiedonantovelvollisuuksista.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Päätoteuttajan velvollisuus on ylläpitää ajantasaista rekisteriä työmaalla työskentelevistä henkilöistä.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Kaikilla työmaalla työskentelevillä henkilöillä tulee olla henkilön identifioiva kuvallinen henkilötunniste veronumerolla varustettuna.</span>
                            </p>

                            <p class="text-dark my-5">Perehdyttäminen ja työhön opastus</p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Päätoteuttaja perehdyttää jokaisen oman, aliurakoitsijan, sivu-urakoitsijan tai muun työnsuorittajan henkilöstöön kuuluvan työmaan työturvallisuusohjeisiin ennen työn aloittamista. Perehdytyksen tulee kattaa kaikki työmaalla toimivat henkilöt; myös suunnittelijat, käyttäjät, valvojat sekä rakennuttajan edustajat.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Päätoteuttajan tulee huolehtia, että työmaan henkilöstön käytössä on asianmukaiset ensiapuvarusteet sekä ensiapukoulutuksen saanut henkilö.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Päätoteuttajan on huolehdittava, että muut urakoitsijat ja toimijat ovat saaneet mahdollisuuden tutustua tähän turvallisuusasiakirjaan.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Päätoteuttaja huolehtii, että rakennuttajan antamat muutkin turvallisuuteen liittyvät vaatimukset ja ohjeet välitetään muille urakoitsijoille ja toimijoille.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Hankkeen eri osapuolten keskinäinen ymmärrys ja tiedonkulku tulee varmistaa. Työmaan turvallisuudesta vastaavien henkilöiden ja työnjohdon tulee pystyä kommunikoimaan työn toteuttajien kanssa.</span>
                            </p>

                            <p class="text-dark my-5">Käyttäjien huomiointi</p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Kiinteistön käyttäjien toimintaedellytykset tulee turvata kaikkien työvaiheiden aikana.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Kiinteistön käyttö tulee huomioida suunniteltaessa töiden vaiheistusta, aikataulua, asennustapoja ja -järjestystä, pöly- ja melusuojausta, yleistä turvallisuutta jne.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Urakoitsija varmistaa hyvällä työsuunnittelulla ja tiedottamisella, ettei työmaa häiritse kohtuuttomasti kiinteistön käyttäjien toimintaa.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Työt tulee suorittaa niin, ettei kiinteistön käyttäjille aiheudu merkittävää melu-, tärinä-, haju-, pöly- tai muuta haittaa.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Urakka-alueella on käytössä olevia järjestelmiä, joiden toiminta on turvattava kaikkien työvaiheiden aikana.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Päätoteuttaja järjestää tarvittavan palovartioinnin.</span>
                            </p>

                            <p class="text-dark my-5">Ilmoitusmenettelyt ja erityisohjeet:</p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Päätoteuttaja on velvollinen ilmoittamaan etukäteen meluavista tai tärinää aiheuttavista töistä sekä häiriöistä sähkön tai veden jakelun sekä muiden järjestelmien toiminnan suhteen ja sopimaan niiden toteutuksesta kiinteistön edustajien kanssa.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Urakoitsijan laatimista viikkotiedotteista sovitaan rakennuttajan kanssa.</span>
                            </p>

                            <p class="text-dark my-5">Jakelukatkokset:</p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Tiedossa olevista tarvittavista katkoksista sähkön/veden/viemärin tai muiden järjestelmien jakelussa tulee sopia rakennuttajan ja kiinteistön edustajien kanssa hyvissä ajoin etukäteen (1 viikko etukäteen).</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Jakelukatkokset on koottava mahdollisimman tiiviiksi kokonaisuuksiksi ja ne on valmisteltava siten, että katkos on mahdollisimman lyhytkestoinen.</span>
                            </p>

                            <p class="text-dark my-5">Aikarajoitukset:</p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Toiminnassa olevat toimistotilat asettavat meluavien ja tärinää aiheuttavien töiden osalta aikarajoituksia. Melua ja tärinää aiheuttavien töiden tekeminen kiinteistössä on kiellettyä arkisin klo K7 välisenä aikana.</span>
                            </p>

                            <p class="text-dark my-5">Kulkurajoitukset:</p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Käyttäjäturvallisuus on hoidettava kulkuturvallisuuden kannalta tarvittavin aitauksin ja pölyn osalta suojaseinin ja kohdepoistoin. Lisäksi pölyn ja pienmateriaalin (esim. ruuvit) leviäminen työmaan kulkuaukoilla tulee olla estetty.</span>
                            </p>

                            <p class="text-[#283B44] font-medium my-5">Tilaajalla ja päätoteuttajalla on oikeus poistaa työntekijä työmaalta, mikäli työntekijä rikkoo työmaan turvallisuusohjeita.</p>
                        </div>

                        <div class="help_wrap mt-10 mb-5 relative">
                            <div class="max-w-[700px] mx-auto flex items-center gap-2">
                                <h3 class="text-black text-[20px] font-medium uppercase min-w-[210px]">
                                    4. Menettelyohjeet
                                </h3>

                                <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                                
                                <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                            </div>

                            <div class="help_show text-dark text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                Esitetään rakennuttajan edellyttämät toimet säädösten noudattamisen lisäksi
                                <br>
                                urakoitsijoilta työturvallisuuden suhteen. 
                                <br>
                                - töiden ajoitus ja varattava aika 
                                <br>
                                - erityisiä työmenetelmiä koskevat vaatimukset 
                                <br>
                                - sivu- ja aliurakoinninjärjestäminen 
                                <br>
                                - työhygieeniset mittaukset 
                                <br>
                                - merkittävien työmenetelmien työturvallisuutta koskevat vaatimukset ja 
                                <br>
                                käytön reunaehdot 
                                <br>
                                - työmaa- ja asennussuunnitelmatarkastukset 
                                <br>
                                - ilmoitusvelvollisuudet 
                                <br>
                                - lupakäytännöt vaaraa tai muille haittaa aiheuttavista töistä 
                                <br>
                                - putoamissuojaus 
                                <br>
                                - työmaan liikennejärjestelyt 
                                <br>
                                - työmaan aitaaminen 
                                <br>
                                - jätteiden käsittely 
                                <br>
                                - kulkulupakäytännöt. 
                                <br>
                                <br>
                                Korjausrakennuskohteessa esitetään myös 
                                <br>
                                - ohjeet kohteen käyttäjille 
                                <br>
                                - korjaustöiden suorittaminen käyttö- ja työturvallisuutta vaarantamatta. 
                                <br>
                                <br>
                                Menettelyohjeiden jakelu 
                                <br>
                                - urakoitsijat 
                                <br>
                                - suunnittelijat 
                                <br>
                                - valmistajat 
                                <br>
                                - tavarantoimittajat 
                                <br>
                                - kuljetusliikkeet 
                                <br>
                                <br>
                                Rakennustöiden turvallisuusohjeet Raturva 2 työlajiohjeet
                            </div>
                        </div>

                        <div class="max-w-[700px] mx-auto">
                            <p class="text-dark my-5">Turvallisuussäännöillä tarkoitetaan rakennuttajan antamia kirjallisia ohjeita, missä on esitetty turvallisuushallinnan tavoitteet ja toimenpiteet sekä ohjeet turvallisuusseurantaan, tarkastuksiin, yhteistoimintaan, työmaakokouksiin, henkilötunnisteen ja kulkuluvan käyttöön sekä osapuolten hyväksyntää edellyttävien turvallisuussuunnitelmien käsittelyyn.</p>

                            <h3 class="text-black text-[20px] mt-10 uppercase">
                                4.1 Projektin suunnittelu
                            </h3>
                            <p class="text-dark my-5">
                                Päätoteuttaja ottaa oman työnsä suunnittelussa huomioon töiden oikean ajoituksen haitan tai altistuksen minimoimiseksi, sekä varaa riittävästi aikaa työn turvalliselle ja laadukkaalle suorittamiselle.
                                <br>
                                Päätoteuttaja pyytää aina luvan rakennuttajalta vaaraa tai haittaa muille aiheuttavien töiden teolle sekä laatii riittävät ja vähintään lakisääteiset ja hyvää rakentamistapaa tarkoittavat suunnitelmat töihin liittyen. 
                                <br>
                                Päätoteuttaja laatii säädösten mukaisen työmaasuunnitelman, jossa huomioi ainakin poistumistiet, alkusammutus- ja ensiapuvälineistön sijainnit sekä varastointi ja sosiaalitilat. Lisäksi päätoteuttaja laatii kaikista merkittävistä asennuksista työmaa- ja asennussuunnitelmat ja toimittaa ne rakennuttajan edustajalle hyväksyttäväksi. Lisäksi päätoteuttaja valvoo ja tarkastaa muiden työmaalla toimivien tahojen työmaa- ja asennussuunnitelmat ennen kunkin työvaiheen toteutusta.
                            </p>

                            <h3 class="text-black text-[20px] mt-10 uppercase">
                                4.2 Purkutyöt ja rakennusjäte
                            </h3>
                            <p class="text-dark mt-5">
                                Päätoteuttaja laatii suunnitelman rakennus-, purku- ja muun jätteen keräämiselle, lajittelulle ja käsittelylle. Purkumateriaalia ei varastoida kerroksiin tai muualle työalueelle, vaan kuljetetaan ulos, sille varattuihin astioihin sitä mukaan kuin purkumateriaalia syntyy ja siitä jätteenkäsittelylaitoksiin. Rakenteita purettaessa urakoitsijan on varmistettava, ettei rakenteissa kulje jännitteellisiä sähköjohtoja, paineellisia vesiputkia tai muuta vastaavaa.
                            </p>
                        </div>

                        <div class="help_wrap relative">
                            <div class="max-w-[700px] mx-auto flex items-center gap-2">
                                <p class="text-dark min-w-[310px]">
                                    Kiinteistö on valmistunut vuonna <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K5', true ), 'K5') ); ?></span>, jolloin
                                </p>

                                <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                                
                                <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                            </div>

                            <div class="help_show text-dark text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[-20px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                Mikäli K5 < 1994 tulostuu kirjaus 1: ”asbestia on yleisesti käytetty rakennusmateriaalina. Rakennuksen materiaaleista ei ole laadittu kaiken kattavaa haitta-aineraporttia. Ennen purkutöihin ryhtymistä on selvitettävä, onko purettavan materiaalin haitta-ainepitoisuutta kartoitettu ja mikäli epäillään purettavan materiaalin sisältävän asbestia, tai muita haitallisia aineita, on materiaalille tehtävä haitta-ainekartoitus ennen purkutöiden suorittamista.” 
                                <br>
                                <br>
                                Mikäli K5>=1994 tulostuu kirjaus 2: ” haitta-aineita kuten asbestia ei ole enää saanut käyttää rakennusmateriaalina”.
                            </div>
                        </div>

                        <div class="max-w-[700px] mx-auto">
                            <p class="text-dark">
                                Urakoitsijan tulee tarkkailla purettavia rakenteita ja ilmoittaa rakennuttajalle välittömästi, mikäli epäilyjä haitallisista aineista ilmaantuu. Haitalliset aineet saa poistaa ainoastaan ko. purkuun erikoistunut alan ammattilainen ja ko. purkutyö tulee suorittaa viranomaissäädösten edellyttämällä tavalla. 
                                <br>
                                Sähköasennuksien purkaminen ja jännitteettömäksi tekeminen tulee suorittaa ennen muiden purkutöiden aloittamista. Purettavat kaapelit on merkittävä asianmukaisesti. Purettaessa väliseiniä tai muita rakenteita tulee varmistaa, ettei niihin tukeudu rakenteita, jotka voivat samalla sortua. Tällaiset rakenteet on tuettava ennen purkua. On myös varmistuttava siitä, ettei purettavissa rakenteissa ole jatkuvan sortumisen vaaraa (esim. alakatot), vaan purku tapahtuu hallitusti ja suunnitellusti.
                            </p>

                            <h3 class="text-black text-[20px] mt-10 uppercase">
                                4.3 Vesikatolla, kerroksissa ja kuiluissa tehtvävät työt
                            </h3>
                            <p class="text-dark my-5">Vesikatolla, kerroksissa ja kuiluissa tehtävien töiden osalta urakoitsijan on varmistettava putoamissuojaus sekä työntekijöiden, että esineiden ja materiaalien osalta.</p>

                            <h3 class="text-black text-[20px] mt-10 uppercase">
                                4.4 Rakennustyön suoritusvaatimus
                            </h3>
                            <p class="text-dark my-5">Asennusten ja tuentojen lujuus ja tarkoituksenmukaisuus:</p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Kaikkien työnaikaisten rakenteiden, tuentojen ja asennusten tulee olla riittävän lujia ja tarkoitustaan vastaavia ja niiden on täytettävä työturvallisuuden asettamat vaatimukset.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Alakattoon kiinnitettävien rakenteiden, kuten taloteknisten asennusten ja alakattorakenteiden, kiinnitystiheyden on oltava riittävä, valmistajan ohjeet ja yleiset määräykset täyttävä.</span>
                            </p>

                            <p class="text-dark my-5">Rakennusvälineet:</p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Urakoitsija vastaa käyttämiensä välineiden, koneiden ja laitteiden turvallisuudesta.</span>
                            </p>

                            <p class="text-dark my-5">Ärsyttävät ja haitalliset aineet:</p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Liuotinohenteisten maalien ja pinnoitteiden käyttöä pyritään välttämään.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Kuitenkin käytettäessä em. tuotteita, on noudatettava valmistajan ohjeita työturvallisuudesta.</span>
                            </p>

                            <p class="text-dark my-5">Paloturvallisuus:</p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Tulitöiden tekeminen on kiellettyä ilman erillistä lupaa.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Kaikkiin tulitöihin tulee olla päätoteuttajan myöntämä tulityölupa. Päätoteuttaja ei saa myöntää tulityölupia ilman rakennuttajan edustajan lupaa. Luvan tulityölupien myöntämiselle myöntää Tilaajan edustaja T3 tai kiinteistöpäällikkö K6.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Päätoteuttaja ylläpitää listausta myönnetyistä tulityöluvista.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Tulitöitä tehtäessä on urakoitsijoiden noudatettava tulitöistä aiheutuvien vahinkojen torjumista tilapäisillä tulityöpaikoilla käsitteleviä kansallisia standardeja SFS 5900 Tulitöiden paloturvallisuus ja SFS 5991 Katto- ja vedeneristysalan tulitöiden paloturvallisuus. Tulitöissä on lisäksi noudatettava lakeja ja asetuksia, kuten pelastuslakia, jonka mukaan on huolehdittava riittävistä varotoimista, kun ryhdytään tulityöhön. Sen lisäksi, mitä tulityöluvan ehdoissa määritellään, on noudatettava vakuutusyhtiöiden tulityöohjetta.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Tulitöitä tekevillä työntekijöillä on oltava asianmukainen tulityökoulutus ja sen osoittamiseksi voimassa oleva Suomen Pelastusalan Keskusjärjestön tulityökortti sekä kiinteistön myöntämä tulityölupa.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Urakoitsija laatii työmaan paloturvallisuussuunnitelman, jota päivitetään tarvittaessa.</span>
                            </p>

                            <p class="text-dark my-5">Pölyn leviäminen:</p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Runsaasti pölyäviä työvaiheita ovat mm. poraus, tasoitepintojen hionta sekä siivous.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Pölyä synnyttävissä työvaiheissa on käytettävä kohdepoistolla varustettuja laitteita ja tarvittaessa osastointia. Pölyn kulkeutuminen työalueiden ulkopuolelle on tehokkaasti estettävä mm. suojaseinin, suojaverhoin, iv-kanavien tulppauksin sekä alipaineistamalla työtila.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Päätoteuttaja vastaa, että pölyäviä töitä tehtäessä työntekijät ovat varustettu asianmukaisilla henkilökohtaisilla suojavarusteilla.</span>
                            </p>

                            <p class="text-dark my-5">Melun ja tärinän rajoittaminen:</p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Melua ja tärinää aiheuttavia työmenetelmiä tulee mahdollisuuksien mukaan välttää.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Pakottavissa tilanteissa melua ja tärinää aiheuttavat työvaiheet on suoritettava niin, että niistä ei aiheudu vaaraa työmaalla työskenteleville henkilöille tai kiinteistön muille käyttäjille tai laitteille.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Meluavat työt tulee ajoittaa siten, että niistä aiheutuva haittaa kiinteistön käyttäjille on mahdollisimman vähäinen.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Meluavien töiden tekemisestä sovitaan aina etukäteen kiinteistön edustajien kanssa.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Päätoteuttaja vastaa, että meluavia ja tärinää aiheuttavia töitä tehdessä työntekijät on varustettu asianmukaisilla henkilökohtaisilla suojavarusteilla.</span>
                            </p>

                            <p class="text-dark my-5">Henkilökohtaiset suojavarusteet ja vaatimukset:</p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Päätoteuttaja vastaa, että tämän ja aliurakoitsijoiden työntekijät on varustettu asianmukaisilla henkilökohtaisilla suojavarusteilla.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Työmaalla tulee käyttää suojakypärää, huomiovaatetusta, turvakenkiä, turvalaseja sekä tarvittaessa hengityksen suojaimia sekä kuulosuojaimia.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Jokaiselta työmaalla työskentelevältä henkilöltä edellytetään työturvallisuuskorttia.</span>
                            </p>

                            <p class="text-dark my-5">Työhygieeniset mittaukset:</p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Päätoteuttaja teettää ja arvioi tarvittaessa työhygieenisillä mittauksilla työntekijöiden altistumista sekä kiinteistön käyttäjien altistumista työympäristön/työmaan epäpuhtauksille.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Mittauksia ja selvityksiä tehdään tarvittaessa myös työmaata ympäröivissä tiloissa.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Päätoteuttajan on ryhdyttävä mittauksen tulosten edellyttämiin toimenpiteisiin.</span>
                            </p>

                            <p class="text-dark my-5">Kulkureitit ja poistumistiet:</p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Päätoteuttaja vastaa, että työskentelytasot, kulkutiet ja telineet sekä putoamissuojaus toteutetaan ja tarkastetaan rakennustöiden turvallisuusmääräyksiä noudattaen.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Toimistotilojen, liiketilojen ja työmaan poistumistiet on esitettävä työmaasuunnitelmassa.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Käytössä olevien tilojen poistumistiet on pidettävä käytössä koko työmaan ajan.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Väliaikaiset kulkutiet yms. on merkittävä selkeästi ja poistumistiet on pidettävä vapaana kaikesta rakennusmateriaalista yms., jotka voivat estää tai vaikeuttaa poistumisteiden käyttöä mahdollisessa hätä- tai palotilanteessa.</span>
                            </p>

                            <h3 class="text-black text-[20px] mt-10 uppercase">
                                4.5 Rakennusalue ja sen olosuhteet
                            </h3>
                            <p class="text-dark my-5">Työmaa-alue:</p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Päätoteuttajan tulee huolehtia siitä, että kiinteistölle, asiakkaille, ympäristölle ja kiinteistössä työskenteleville henkilöille ei aiheudu vahinkoa työn suorittamisesta.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Päätoteuttajan tulee huolehtia riittävällä rajaamisella, ettei ulkopuoliset tahot tule työmaa-alueelle vahingossa tai tarkoituksella ja että ilkivalta ja henkilövahingot estetään riittävällä rajaamisella.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Päätoteuttaja rajaa työmaan käytössä olevasta kiinteistöstä selkeästi ja merkitsee työmaa-alueen kilvin.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Päätoteuttaja valvoo työmaan kulkuliikennettä ja myöntää kulkulupia Rakennuttajan kanssa sovitusti.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Työmaajärjestelyistä samoin kuin urakoitsijoiden työmaa- ja varastokäyttöön tulevista alueista on sovittava erikseen rakennuttajan kanssa.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Työmaa-alue ja sen ympäristö on pidettävä siistinä ja aidattuna. Työalueelle kertyneet jätteet ja muu tarpeeton tavara on siirrettävä välittömästi niille osoitettuihin paikkoihin.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Työmaalla käytettävä haalausreitti on sovittava rakennuttajan kanssa. Haalaus on suoritettava siten, että se ei aiheuta vaaraa käyttäjille tai häiritse kohtuuttomasti käyttäjien toimintaa.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Mikäli katualuetta käytetään (tilapäisesti) tulee käytössä oleva alue erottaa muusta katualueesta ja kadun käyttäjille (jalankulku ja ajoneuvot) järjestää turvalliset kulkutiet.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Päätoteuttaja huolehtii mahdollisista liikenteen tilapäisjärjestelyistä sekä asianmukaisesta turvallisuuden varmistamisesta (alamies/näyttäjä/liikenteenohjaaja)</span>
                            </p>

                            <p class="text-dark my-5">Tupakointi:</p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Tupakointi on ehdottomasti kielletty rakennuksen sisätiloissa.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Lähtökohtaisesti tupakointi on kielletty kiinteistön alueella. Tupakointi on sallittua kiinteistön alueella vain erillisellä luvalla, erikseen merkityillä tai rakennuttajan kanssa sovituilla paikoilla.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Kiellon valvominen on päätoteuttajan vastuulla.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Mikäli työntekijä rikkoo tupakointikieltoa, tulee laiminlyönnistä ilmoittaa välittömästi rakennuttajan edustajalle sekä päätoteuttajalle.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Mikäli työntekijä rikkoo toistuvasti määräystä, poistetaan hänet työmaalta pysyvästi.</span>
                            </p>

                            <h3 class="text-black text-[20px] mt-10 uppercase">
                                4.6 Sähkötekniset turvamääräykset
                            </h3>
                            <p class="text-dark my-5">Työmaan sähköturvallisuus:</p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Ennen purkutöitä tulee sähköurakoitsijan tehdä työalueen purettavat kaapeloinnit jännitteettömiksi rakennuksen verkoista.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Kaikki kiinteät ja puolikiinteät sähköliitännät teettää ja niistä vastaa pääurakoitsija yhdessä ko. asennukset tehneen sähköurakoitsijan kanssa.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Pääurakoitsija vastaa siitä, että sähkötilat ovat lukittuja siitä hetkestä lähtien, kun laitteistoihin on kytketty jännite.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Pääurakoitsija vastaa työmaan riittävästä yleisvalaistuksesta.</span>
                            </p>

                            <p class="text-dark my-5">Sähkön jakelu:</p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Sähkön saa ottaa vain vikavirtasuojilla varustetuista ao. määräykset täyttävistä keskuksista.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Jakelu on pyrittävä hoitamaan siten, että kaapelit eivät kulje lattioilla tai maata pitkin. Erityistä huomiota tulee kiinnittää kaapeleiden sijoittamiseen oviaukoissa.</span>
                            </p>

                            <p class="text-dark my-5">Sähkölaitteiden turvallisuus:</p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Työmaalla käytettävien sähkölaitteiden tulee olla hyväksyttyjä, toimintakuntoisia ja turvallisuusmääräykset täyttäviä.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Käytettävien johtojen ja kaapeleiden tulee olla ko. käyttöön soveltuvia ja ehjiä.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Sähkölaitteille tulee suorittaa asianmukaiset käyttöönottotarkastukset sekä määräaikaistarkastukset.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Sähköurakoitsija vastaa keskeneräisten jännitteisten laitteistojen turvakilvistä.</span>
                            </p>

                            <p class="text-dark my-5">Työalueen läpi menevät asennukset ja niiden häiriöttömyys:</p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Erityistä huomiota tulee kiinnittää työalueiden läpi meneviin ja jännitteellisiin asennuksiin ja ne on merkittävä selkeästi varoitusmerkinnöin.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Purkutöissä on huolehdittava siitä, että käytössä olevien asennusten käyttöturvallisuus ja määräystenmukaisuus eivät purkutöiden aikana heikkene.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Tele- ja turvajärjestelmien häiriötön toiminta on varmistettava.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Purettavat ja uudelleen liitettävät asennukset on kytkettävä verkkoihin siten, että järjestelmien toiminta ei häiriinny.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Työt on tarvittaessa tehtävä normaalin työajan ulkopuolella.</span>
                            </p>

                            <h3 class="text-black text-[20px] mt-10 uppercase">
                                4.7 Lvi-tekniset turvamääräykset
                            </h3>
                            <p class="text-dark my-5">Vesivuodot:</p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Vesijohtojen pääsulku- ja linjasulkuventtiilien sijainti ja toimivuus on tarkastettava ennen töiden aloitusta pääurakoitsijan toimesta.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Vesivuodon sattuessa vuodosta on ilmoitettava välittömästi rakennuttajalle ja aloitettava toimenpiteet vahinkojen minimoimiseksi.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Vaurioituneet rakenteet tutkitaan, kuivataan ja korjataan ennen pinnoittamista.</span>
                            </p>

                            <p class="text-dark my-5">Ilmanvaihto:</p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Ilmanvaihto on järjestettävä siten, että työmaa-alueena olevan rakennuksen osa on aina alipaineinen muuhun rakennuksen osaan verrattuna.</span>
                            </p>
                            <p class="text-dark flex items-start gap-4 mt-5">
                                <span>-</span>
                                <span>Kanavien suojaamiseen rakennusaikaiselta pölyltä on kiinnitettävä erityistä huomiota siten, että kanavat on tulpattu ilma- ja pölytiiviisti.</span>
                            </p>

                            <h4 class="text-[17px] text-dark mt-10 mb-5">LIITTEET</h4>
                            <div class="flex items-center gap-3 mb-3">
                                <label class="inline-flex items-center gap-2 cursor-pointer">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_53', $data); ?>>
                                    <input type="text" name="pilar_filed8_6" placeholder="Asbesti- ja haitta-ainekartoitusraportti xx.xx.20xx" class="flex-1 w-full lg:w-[420px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </label>
                            </div>
                            <div class="flex items-center gap-3 mb-3">
                                <label class="inline-flex items-center gap-2 cursor-pointer">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1_54', $data); ?>>
                                    <input type="text" name="pilar_filed8_7" placeholder="Asbesti- ja haitta-ainekartoitusraportti xx.xx.20xx" class="flex-1 w-full lg:w-[420px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </label>
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