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
                        
                        <div class="max-w-[700px] mx-auto mt-20">
                            <div class="mb-[30px]">
                                <span class="font-medium italic text-[#00B2A9] block"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K1', true ), 'K1') ); ?></span>
                                <span class="font-medium italic text-[#00B2A9] block"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K4', true ), 'K4') ); ?></span>
                            </div>

                            <div class="mb-[30px]">
                                <h1 class="text-black text-[25px] font-medium mb-4">Tarjouslomake</h1>
                            </div>

                            <div class="my-[30px]">
                                <span class="font-medium italic text-[#00B2A9] block"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T1', true ), 'T1') ); ?></span>
                                <span class="font-medium italic text-[#00B2A9] block">K1, K2, K3</span>
                            </div>

                            <h2 class="text-black text-[20px] font-medium mb-10">URAKKATARJOUS</h2>

                            <div class="grid grid-cols-3 items-center mb-8">
                                <span class="text-[#586B74] block">Urakoitsijan nimi</span>
                                <span class="bg-[#D0D3D4] h-[1px] w-full lg:w-[464px] block col-span-2"></span>
                            </div>
                            <div class="grid grid-cols-3 items-center mb-8">
                                <span class="text-[#586B74] block">Osoite</span>
                                <span class="bg-[#D0D3D4] h-[1px] w-full lg:w-[464px] block col-span-2"></span>
                            </div>
                            <div class="grid grid-cols-3 items-center mb-8">
                                <span class="text-[#586B74] block">Puhelin</span>
                                <span class="bg-[#D0D3D4] h-[1px] w-full lg:w-[464px] block col-span-2"></span>
                            </div>
                            <div class="grid grid-cols-3 items-center mb-8">
                                <span class="text-[#586B74] block">Sähköposti</span>
                                <span class="bg-[#D0D3D4] h-[1px] w-full lg:w-[464px] block col-span-2"></span>
                            </div>
                            <div class="grid grid-cols-3 items-center mb-8">
                                <span class="text-[#586B74] block">Yhteyshenkilö</span>
                                <span class="bg-[#D0D3D4] h-[1px] w-full lg:w-[464px] block col-span-2"></span>
                            </div>

                            <p class="text-[#586B74] text-[15px] mt-5 mb-10">Allekirjoittanut urakoitsija sitoutuu <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T1', true ), 'T1') ); ?></span>:n toimeksiannosta suorittamaan urakkaan tarjouspyyntöasiakirjoissa kuuluvat rakennus- ja LVIAS-tekniset työt täysin valmiiksi sekä toimimaan työturvallisuudesta vastaavana päätoteuttajana ja pääurakoitsijana seuraavasti:</p>

                            <div class="grid grid-cols-3 items-center mb-8">
                                <span class="text-[#283B44] font-medium block">Kiinteä kokonaishinta (alv.0 %)</span>
                                <span class="flex items-end gap-2 block col-span-2 text-[#283B44] font-medium">
                                    <span class="bg-[#D0D3D4] h-[1px] w-full lg:w-[464px]"></span>
                                    €
                                </span>
                            </div>
                            <div class="grid grid-cols-3 items-center mb-8">
                                <span class="text-[#283B44] font-medium block">Arvonlisävero 24 %</span>
                                <span class="flex items-end gap-2 block col-span-2 text-[#283B44] font-medium">
                                    <span class="bg-[#D0D3D4] h-[1px] w-full lg:w-[464px]"></span>
                                    €
                                </span>
                            </div>
                            <div class="grid grid-cols-3 items-center mb-8">
                                <span class="text-[#283B44] font-medium block">Verollinen hinta yhteensä</span>
                                <span class="flex items-end gap-2 block col-span-2 text-[#283B44] font-medium">
                                    <span class="bg-[#D0D3D4] h-[1px] w-full lg:w-[464px]"></span>
                                    €
                                </span>
                            </div>

                            <p class="text-[#283B44] font-medium block mt-20 mb-8">Tarjoushinta jakautuu seuraavasti:</p>
                            <div class="grid grid-cols-3 items-center mb-8">
                                <span class="text-[#00B2A9] italic text-[15px] block"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_TY1', true ), 'TY1') ); ?></span>
                                <span class="flex items-end gap-2 block col-span-2 text-[#283B44] ml-[-80px]">
                                    <span class="bg-[#D0D3D4] h-[1px] w-full lg:w-[464px]"></span>
                                    € (alv. 0%)
                                </span>
                            </div>
                            <div class="grid grid-cols-3 items-center mb-8">
                                <span class="text-[#00B2A9] italic text-[15px] block"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_TY2', true ), 'TY2') ); ?></span>
                                <span class="flex items-end gap-2 block col-span-2 text-[#283B44] ml-[-80px]">
                                    <span class="bg-[#D0D3D4] h-[1px] w-full lg:w-[464px]"></span>
                                    € (alv. 0%)
                                </span>
                            </div>
                            <div class="grid grid-cols-3 items-center mb-8">
                                <span class="text-[#00B2A9] italic text-[15px] block"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_TY3', true ), 'TY3') ); ?></span>
                                <span class="flex items-end gap-2 block col-span-2 text-[#283B44] ml-[-80px]">
                                    <span class="bg-[#D0D3D4] h-[1px] w-full lg:w-[464px]"></span>
                                    € (alv. 0%)
                                </span>
                            </div>
                            <div class="grid grid-cols-3 items-center mb-8">
                                <span class="text-[#00B2A9] italic text-[15px] block"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_TY4', true ), 'TY4') ); ?></span>
                                <span class="flex items-end gap-2 block col-span-2 text-[#283B44] ml-[-80px]">
                                    <span class="bg-[#D0D3D4] h-[1px] w-full lg:w-[464px]"></span>
                                    € (alv. 0%)
                                </span>
                            </div>
                            <div class="grid grid-cols-3 items-center mb-8">
                                <span class="text-[#00B2A9] italic text-[15px] block"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_TY5', true ), 'TY5') ); ?></span>
                                <span class="flex items-end gap-2 block col-span-2 text-[#283B44] ml-[-80px]">
                                    <span class="bg-[#D0D3D4] h-[1px] w-full lg:w-[464px]"></span>
                                    € (alv. 0%)
                                </span>
                            </div>
                            <div class="grid grid-cols-3 items-center mb-8">
                                <span class="text-[#00B2A9] italic text-[15px] block"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_TY6', true ), 'TY6') ); ?></span>
                                <span class="flex items-end gap-2 block col-span-2 text-[#283B44] ml-[-80px]">
                                    <span class="bg-[#D0D3D4] h-[1px] w-full lg:w-[464px]"></span>
                                    € (alv. 0%)
                                </span>
                            </div>
                            <div class="grid grid-cols-3 items-center mb-8">
                                <span class="text-[#00B2A9] italic text-[15px] block"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_TY7', true ), 'TY7') ); ?></span>
                                <span class="flex items-end gap-2 block col-span-2 text-[#283B44] ml-[-80px]">
                                    <span class="bg-[#D0D3D4] h-[1px] w-full lg:w-[464px]"></span>
                                    € (alv. 0%)
                                </span>
                            </div>
                            <div class="grid grid-cols-3 items-center mb-8">
                                <span class="text-[#00B2A9] italic text-[15px] block"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_TY8', true ), 'TY8') ); ?></span>
                                <span class="flex items-end gap-2 block col-span-2 text-[#283B44] ml-[-80px]">
                                    <span class="bg-[#D0D3D4] h-[1px] w-full lg:w-[464px]"></span>
                                    € (alv. 0%)
                                </span>
                            </div>
                            <div class="grid grid-cols-3 items-center mb-8">
                                <span class="text-[#00B2A9] italic text-[15px] block"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_TY9', true ), 'TY9') ); ?></span>
                                <span class="flex items-end gap-2 block col-span-2 text-[#283B44] ml-[-80px]">
                                    <span class="bg-[#D0D3D4] h-[1px] w-full lg:w-[464px]"></span>
                                    € (alv. 0%)
                                </span>
                            </div>
                            <div class="grid grid-cols-3 items-center mb-8">
                                <span class="text-[#00B2A9] italic text-[15px] block"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_TY10', true ), 'TY10') ); ?></span>
                                <span class="flex items-end gap-2 block col-span-2 text-[#283B44] ml-[-80px]">
                                    <span class="bg-[#D0D3D4] h-[1px] w-full lg:w-[464px]"></span>
                                    € (alv. 0%)
                                </span>
                            </div>
                            <div class="grid grid-cols-3 items-center mb-8">
                                <span class="text-[#00B2A9] italic text-[15px] block"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_TY11', true ), 'TY11') ); ?></span>
                                <span class="flex items-end gap-2 block col-span-2 text-[#283B44] ml-[-80px]">
                                    <span class="bg-[#D0D3D4] h-[1px] w-full lg:w-[464px]"></span>
                                    € (alv. 0%)
                                </span>
                            </div>
                            <div class="grid grid-cols-3 items-center mb-8">
                                <span class="text-[#00B2A9] italic text-[15px] block"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_TY12', true ), 'TY12') ); ?></span>
                                <span class="flex items-end gap-2 block col-span-2 text-[#283B44] ml-[-80px]">
                                    <span class="bg-[#D0D3D4] h-[1px] w-full lg:w-[464px]"></span>
                                    € (alv. 0%)
                                </span>
                            </div>
                        </div>

                        <div class="help_wrap relative mb-2 mt-20">
                            <div class="max-w-[700px] mx-auto flex items-center gap-2">
                                <label class="inline-flex items-center gap-2 cursor-pointer">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY_1', $data); ?>>
                                    
                                    <span class="text-[#283B44] font-medium">OPTIOT</span>
                                </label>

                                <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                                
                                <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                            </div>

                            <div class="help_show text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                Mahdollisuus selvittää erillistöiden tms kustannuksia. Näitä voisi olla: Minikeittiövarausten tekeminen, LVI-suunnitelmien mukaan (2 kpl), Aulan ilmanvaihtomuutos LVI-suunnitelmien mukaan jne.
                            </div>
                        </div>

                        <div class="max-w-[700px] mx-auto">
                            <p class="text-[#283B44] text-[15px] font-medium">Option mukainen työ ei sisälly kiinteään kokonaishintaan. Optiohinta ilmoitetaan työsuorituksen tekemisestä täysin valmiiseen tasoon kaikki liittyvät työt huomioituna.</p>
                        </div>

                        <div class="help_wrap relative mb-2 mt-5">
                            <div class="max-w-[700px] mx-auto flex items-center gap-2">
                                <div class="flex flex-col lg:flex-row gap-5">
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY_2', $data); ?>>
                                        
                                        <span class="text-[#283B44] font-medium">OPTIOT</span>
                                    </label>
                                    <input type="text" <?php noste_textinput_attrset('pilar_TY1', $data, ''); ?> placeholder="Aihe" class="w-[290px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">   
                                    <span class="flex items-end gap-2 block col-span-2 text-[#283B44]">
                                        <span class="bg-[#D0D3D4] h-[1px] w-[164px]"></span>
                                        € (alv. 0%)
                                    </span>
                                </div>
                        
                                <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                                
                                <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                            </div>
                        
                            <div class="help_show text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                Mahdollisuus selvittää erillistöiden tms kustannuksia. Näitä voisi olla: Minikeittiövarausten tekeminen, LVI-suunnitelmien mukaan (2 kpl), Aulan ilmanvaihtomuutos LVI-suunnitelmien mukaan jne.
                            </div>
                        </div>

                        <div class="max-w-[700px] mx-auto">
                            <p class="text-[#283B44] font-medium block mt-20 mb-8">Urakoitsijan tuntiveloitushinnat mahdollisia lisä- ja muutostöitä varten:</p>
                            <div class="grid grid-cols-3 items-center mb-8">
                                <span class="text-[#586B74] block">Työnjohto</span>
                                <span class="flex items-end gap-2 block col-span-2 text-[#283B44] ">
                                    <span class="bg-[#D0D3D4] h-[1px] w-full lg:w-[350px]"></span>
                                    €/h (alv. 0 %)
                                </span>
                            </div>
                            <div class="grid grid-cols-3 items-center mb-8">
                                <span class="text-[#586B74] block">Rakennusammattityöntekijä</span>
                                <span class="flex items-end gap-2 block col-span-2 text-[#283B44] ">
                                    <span class="bg-[#D0D3D4] h-[1px] w-full lg:w-[350px]"></span>
                                    €/h (alv. 0 %)
                                </span>
                            </div>  
                            <div class="grid grid-cols-3 items-center mb-8">
                                <span class="text-[#586B74] block">Rakennustyöntekijä</span>
                                <span class="flex items-end gap-2 block col-span-2 text-[#283B44] ">
                                    <span class="bg-[#D0D3D4] h-[1px] w-full lg:w-[350px]"></span>
                                    €/h (alv. 0 %)
                                </span>
                            </div>  
                            <div class="grid grid-cols-3 items-center mb-8">
                                <span class="text-[#586B74] block">Rakennusaputöidentekijä</span>
                                <span class="flex items-end gap-2 block col-span-2 text-[#283B44] ">
                                    <span class="bg-[#D0D3D4] h-[1px] w-full lg:w-[350px]"></span>
                                    €/h (alv. 0 %)
                                </span>
                            </div>
                            <div class="grid grid-cols-3 items-center mb-8">
                                <span class="text-[#586B74] block">Sähköasentaja</span>
                                <span class="flex items-end gap-2 block col-span-2 text-[#283B44] ">
                                    <span class="bg-[#D0D3D4] h-[1px] w-full lg:w-[350px]"></span>
                                    €/h (alv. 0 %)
                                </span>
                            </div> 
                            <div class="grid grid-cols-3 items-center mb-8">
                                <span class="text-[#586B74] block">IV-asentaja</span>
                                <span class="flex items-end gap-2 block col-span-2 text-[#283B44] ">
                                    <span class="bg-[#D0D3D4] h-[1px] w-full lg:w-[350px]"></span>
                                    €/h (alv. 0 %)
                                </span>
                            </div>  
                            <div class="grid grid-cols-3 items-center">
                                <span class="text-[#586B74] block">Putkiasentaja</span>
                                <span class="flex items-end gap-2 block col-span-2 text-[#283B44] ">
                                    <span class="bg-[#D0D3D4] h-[1px] w-full lg:w-[350px]"></span>
                                    €/h (alv. 0 %)
                                </span>
                            </div>  

                            <p class="text-[#283B44] font-medium block mt-20 mb-8">Vakuudet:</p>
                            <div class="grid grid-cols-3 items-center">
                                <span class="text-[#586B74] block">Vakuuden antaja</span>
                                <span class="bg-[#D0D3D4] h-[1px] w-full lg:w-[464px] block col-span-2"></span>
                            </div>
                            
                            <p class="text-[#283B44] font-medium block mt-20 mb-8">Allekirjoitus:</p>
                            <div class="grid grid-cols-3 items-center mb-8">
                                <span class="text-[#586B74] block">Paikka ja päiväys</span>
                                <span class="bg-[#D0D3D4] h-[1px] w-full lg:w-[464px] block col-span-2"></span>
                            </div>
                            <div class="grid grid-cols-3 items-center mb-8">
                                <span class="text-[#586B74] block">IV-asentaja</span>
                                <span class="flex items-end gap-2 block col-span-2 text-[#586B74] ">
                                    <span class="bg-[#D0D3D4] h-[1px] w-[400px]"></span>
                                    puolesta
                                </span>
                            </div>
                            <div class="grid grid-cols-3 items-center mb-8">
                                <span class="text-[#586B74] block">Allekirjoitus</span>
                                <span class="bg-[#D0D3D4] h-[1px] w-full lg:w-[464px] block col-span-2"></span>
                            </div>
                            <div class="grid grid-cols-3 items-center">
                                <span class="text-[#586B74] block">Nimenselvennys</span>
                                <span class="bg-[#D0D3D4] h-[1px] w-full lg:w-[464px] block col-span-2"></span>
                            </div>

                            <p class="text-[#283B44] font-medium block mt-20 mb-3">Allekirjoitus:</p>
                            <div>
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY_3', $data); ?>>
                                    
                                    <span class="text-[#586B74]">Tilaajavastuulain mukaiset selvitykset</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer mt-5">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY_4', $data); ?>>
                                    
                                    <span class="text-[#586B74]">Ehdotus maksuerätaulukosta</span>
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