<?php

if (!is_singular('projektitiedot')) {
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
                    <input type="hidden" name="post_id" value="<?php echo esc_attr($project_id); ?>">

                    <!-- Card Body -->
                    <div class="px-4 md:px-8 pt-6 pb-10 lg:h-[645px] overflow-y-auto no-scrollbar scroll-smooth">
                        <div>
                            <div class="max-w-[700px] mx-auto mt-20">
                                <div class="mb-[30px]">
                                    <span class="font-medium italic text-[#00B2A9] block"><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_K1', true), 'K1')); ?></span>
                                    <span class="font-medium italic text-[#00B2A9] block"><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_K4', true), 'K4')); ?></span>
                                </div>

                                <div class="mb-[30px]">
                                    <h1 class="text-black text-[25px] font-medium mb-4">VASTAANOTTOTARKASTUKSEN PÖYTÄKIRJA</h1>
                                    <p class="text-[#586B74] mb-5">Tässä pöytäkirjalomakkeessa on otettu huomioon Rakennusurakan yleiset sopimusehdot YSE 1998 (RT 16-10660, LVI 03-10277, Ratu 417-T, KH X4-00241).</p>
                                </div>

                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px] mb-5">
                                    <span class="text-[#586B74]">Hanke:</span>
                                    <span class="italic text-[#00B2A9]"><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_K4', true), 'K4')); ?></span>
                                </div>

                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px] mb-5">
                                    <span class="text-[#586B74]">Projektinumero:</span>
                                    <span class="italic text-[#00B2A9]"><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_K8', true), 'K8')); ?></span>
                                </div>

                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px] mb-5">
                                    <span class="text-[#586B74]">Rakennuskohde:</span>
                                    <span class="italic text-[#00B2A9]"><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_K1', true), 'K1')); ?></span>
                                </div>

                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px] mb-5">
                                    <span class="text-[#586B74]"></span>
                                    <span class="italic text-[#00B2A9]"><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_T1', true), 'T1')); ?></span>
                                </div>

                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px] mb-5">
                                    <span class="text-[#586B74]"></span>
                                    <span class="italic text-[#00B2A9]"><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_K2', true), 'K2')); ?></span>
                                </div>

                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px] mb-5">
                                    <span class="text-[#586B74]"></span>
                                    <span class="italic text-[#00B2A9]"><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_K3', true), 'K3')); ?></span>
                                </div>

                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px] mb-5">
                                    <span class="text-[#586B74]">Tilaaja:</span>
                                    <p class="text-[#586B74]"><span class="italic text-[#00B2A9]"><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_T1', true), 'T1')); ?></span>, Y-tunnus <span class="italic text-[#00B2A9]"><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_T7', true), 'T7')); ?></span></p>
                                </div>

                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px] mb-5">
                                    <span class="text-[#586B74]">Rakennuttaja:</span>
                                    <p class="text-[#586B74]">Sama kuin Tilaaja.</p>
                                </div>

                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px] mb-5">
                                    <span class="text-[#586B74]">Pääurakoitsija:</span>
                                    <p class="text-[#586B74]"><span class="italic text-[#00B2A9]"><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_U1', true), 'U1')); ?></span>, Y-tunnus <span class="italic text-[#00B2A9]"><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_U2', true), 'U2')); ?></span></p>
                                </div>

                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px] mb-5">
                                    <span class="text-[#586B74]">Sivu-urakoitsijat:</span>
                                    <input type="text" name="sivu_urakoitsijat" placeholder="Ei ole." class="w-[150px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_array_data( $data, 'sivu_urakoitsijat' ) ); ?>">
                                </div>

                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px] mb-5">
                                    <span class="text-[#586B74]">Muut sopimusosapuolet:</span>
                                    <input type="text" name="muut_sopimusosapuolet" placeholder="Ei ole." class="w-[150px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_array_data( $data, 'muut_sopimusosapuolet' ) ); ?>">
                                </div>

                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px] mb-10">
                                    <span class="text-[#586B74]">Käyttäjä:</span>
                                    <p class="text-[#586B74]"><span class="italic text-[#00B2A9]"><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_V1', true), 'V1')); ?></span>, Y-tunnus <span class="italic text-[#00B2A9]"><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_V6', true), 'V6')); ?></span></p>
                                </div>

                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px] mb-5">
                                    <span class="text-[#586B74]">Tarkastus:</span>
                                    <p class="text-[#586B74]">Vastaanottotarkastus</p>
                                </div>

                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px] mb-5">
                                    <span class="text-[#586B74]">Tarkastuksen päivämäärä:</span>
                                    <input type="text" name="tarkastuksen_paivamaara" placeholder="xx.xx.xxxx" class="w-[150px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_array_data( $data, 'tarkastuksen_paivamaara' ) ); ?>">
                                </div>

                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px] mb-5">
                                    <span class="text-[#586B74]">Tarkastus:</span>
                                    <p class="text-[#586B74]">Vastaanottotarkastuksessa tarkastetaan rakennuttajan ja pääurakoitsijan (<span class="italic text-[#00B2A9]"><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_U1', true), 'U1')); ?></span>) välillä allekirjoitettuun pääurakkasopimukseen perustuvat työt lisä- ja muutostöineen, koko urakan osalta.</p>
                                </div>

                                <div>
                                    <h3 class="flex gap-20 text-black text-[20px] font-medium min-w-[295px]">
                                        <span>1.</span>
                                        <span>AIKA</span>
                                    </h3>

                                    <div class="mb-10 mt-5 ">
                                        <span class="text-[#586B74]">
                                            <div class="flex flex-col lg:flex-row lg:items-center gap-2">
                                                <span class="text-[#586B74]">Vastaanottotarkastuksen ajankohta,</span>
                                                <input type="text" name="pilar_VA4" placeholder="XX.XX.XXXX" class="w-full lg:w-[119px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_array_data( $data, 'pilar_VA4' ) ); ?>">
                                                <span class="text-[#586B74] text-[15px]">klo</span>
                                                <input type="text" name="pilar_VA5" placeholder="XX.XX" class="w-full lg:w-[68px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_array_data( $data, 'pilar_VA5' ) ); ?>">
                                            </div>
                                        </span>
                                    </div>
                                </div>

                                <div>
                                    <h3 class="flex gap-20 text-black text-[20px] font-medium min-w-[295px] ">
                                        <span>2.</span>
                                        <span>PAIKKA</span>
                                    </h3>

                                    <div class="flex flex-col lg:flex-row flex-wrap lg:items-center gap-2 mt-6 mb-10">
                                        <span class="text-[#586B74]"><span class="flex-1 h-[1px] bg-[#94969C] inline-block w-full min-w-[450px]"></span></span>
                                    </div>
                                </div>

                                <div>
                                    <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                        <span>3. </span>
                                        <span>OSANOTTAJAT</span>
                                    </h3>

                                    <div class="mb-10">
                                        <p class="text-[#586B74] mb-4">Tilaajan edustajat:</p>
                                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px] mb-4">
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
                                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_T3_check" <?php checked( noste_check_array_data( $data, 'noste_T3_check' ), 'on', true); ?>>
                                                    <span class="flex-1 text-[14px] italic text-[#00B2A9]"><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_T3', true), 'T3')); ?></span>
                                                </label>
                                            </span>

                                            <span class="flex-1 text-[14px] italic text-[#00B2A9]"><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_T2', true), 'T2')); ?></span>
                                        </div>

                                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px] mb-4">
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
                                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_K6_check" <?php checked( noste_check_array_data( $data, 'noste_K6_check' ), 'on', true); ?>>
                                                    <span class="flex-1 text-[14px] italic text-[#00B2A9]"><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_K6', true), 'K6')); ?></span>
                                                </label>
                                            </span>

                                            <span class="flex-1 text-[14px] italic text-[#00B2A9]"><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_K22', true), 'K22')); ?></span>
                                        </div>

                                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px] mb-4">
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
                                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_P1_check" <?php checked( noste_check_array_data( $data, 'noste_P1_check' ), 'on', true); ?>>
                                                    <span class="flex-1 text-[14px] italic text-[#00B2A9]"><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_P1', true), 'P1')); ?></span>
                                                </label>
                                            </span>

                                            <p class="text-[#586B74]">Partners at Noste Oy</p>
                                        </div>

                                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px] mb-4">
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
                                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_P4_check" <?php checked( noste_check_array_data( $data, 'noste_P4_check' ), 'on', true); ?>>
                                                    <span class="flex-1 text-[14px] italic text-[#00B2A9]"><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_P4', true), 'P4')); ?></span>
                                                </label>
                                            </span>

                                            <p class="text-[#586B74]">Partners at Noste Oy</p>
                                        </div>
                                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px] mb-4">
                                            <div class="flex gap-2 mb-4">
                                                <div class="flex items-center gap-3">
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
                                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="osanottajat_check" <?php checked( noste_check_array_data( $data, 'osanottajat_check' ), 'on', true); ?>>
                                                    </label>
                                                </div>
                                                <div class="flex gap-3">
                                                    <input type="text" name="osanottajat_muu" placeholder="Muu..." class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_array_data( $data, 'osanottajat_muu' ) ); ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <p class="text-[#586B74] mb-5">Urakoitsijan edustajat:</p>
                                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px] mb-4">
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
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_U4_check" <?php checked( noste_check_array_data( $data, 'noste_U4_check' ), 'on', true); ?>>
                                                <span class="flex-1 text-[14px] italic text-[#00B2A9]"><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_U4', true), 'U4')); ?></span>
                                            </label>
                                        </span>

                                        <span class="flex-1 text-[14px] italic text-[#00B2A9]"><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_U1', true), 'U1')); ?></span>
                                    </div>

                                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px] mb-4">
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
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_U7_check" <?php checked( noste_check_array_data( $data, 'noste_U7_check' ), 'on', true); ?>>
                                                <span class="flex-1 text-[14px] italic text-[#00B2A9]"><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_U7', true), 'U7')); ?></span>
                                            </label>
                                        </span>

                                        <span class="flex-1 text-[14px] italic text-[#00B2A9]"><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_U1', true), 'U1')); ?></span>
                                    </div>

                                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px] mb-4">
                                        <div class="flex gap-2 mb-5">
                                            <div class="flex items-center gap-3">
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
                                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="urakoitsijan_check" <?php checked( noste_check_array_data( $data, 'urakoitsijan_check' ), 'on', true); ?>>
                                                </label>
                                            </div>
                                            <div class="flex gap-3">
                                                <input type="text" name="urakoitsijan_muu" placeholder="Muu..." class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_array_data( $data, 'urakoitsijan_muu' ) ); ?>">
                                            </div>
                                        </div>

                                        <span class="flex-1 text-[14px] italic text-[#00B2A9]"><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_U1', true), 'U1')); ?></span>
                                    </div>
                                </div>

                                <div class="mb-10">
                                    <p class="text-[#586B74] mb-5">Muut:</p>
                                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px] mb-4">
                                        <div class="flex gap-2 mb-5">
                                            <div class="flex items-center gap-3">
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
                                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="urakoitsijan_muut_check" <?php checked( noste_check_array_data( $data, 'urakoitsijan_muut_check' ), 'on', true); ?>>
                                                </label>
                                            </div>
                                            <div class="flex gap-3">
                                                <input type="text" name="urakoitsijan_muut" placeholder="Muu..." class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_array_data( $data, 'urakoitsijan_muut' ) ); ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-10">
                                    <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                        <span>4. </span>
                                        <span>VASTAANOTTOTARKASTUKSEN SUORITTAJAT</span>
                                    </h3>

                                    <p class="text-[#586B74] mb-5">Vastaanottotarkastuksen suorittivat läsnäolijat.</p>
                                </div>

                                <div class="mb-10">
                                    <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                        <span>5. </span>
                                        <span>PUHEENJOHTAJA</span>
                                    </h3>

                                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px] mb-4">
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
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_P1_check" <?php checked( noste_check_array_data( $data, 'noste_P1_check' ), 'on', true); ?>>
>
                                                <span class="flex-1 text-[14px] italic text-[#00B2A9]"><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_P1', true), 'P1')); ?></span>
                                            </label>
                                        </span>

                                        <p class="text-[#586B74]">Partners at Noste Oy</p>
                                    </div>

                                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px] mb-4">
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
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_P4_check" <?php checked( noste_check_array_data( $data, 'noste_P4_check' ), 'on', true); ?>>
                                                <span class="flex-1 text-[14px] italic text-[#00B2A9]"><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_P4', true), 'P4')); ?></span>
                                            </label>
                                        </span>

                                        <p class="text-[#586B74]">Partners at Noste Oy</p>
                                    </div>
                                </div>

                                <div class="mb-10">
                                    <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                        <span>6. </span>
                                        <span>SIHTEERI</span>
                                    </h3>

                                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px] mb-4">
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
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_P1_check" <?php checked( noste_check_array_data( $data, 'noste_P1_check' ), 'on', true); ?>>
                                                <span class="flex-1 text-[14px] italic text-[#00B2A9]"><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_P1', true), 'P1')); ?></span>
                                            </label>
                                        </span>

                                        <p class="text-[#586B74]">Partners at Noste Oy</p>
                                    </div>

                                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px] mb-4">
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
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_P4_check" <?php checked( noste_check_array_data( $data, 'noste_P4_check' ), 'on', true); ?>>
                                                <span class="flex-1 text-[14px] italic text-[#00B2A9]"><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_P4', true), 'P4')); ?></span>
                                            </label>
                                        </span>

                                        <p class="text-[#586B74]">Partners at Noste Oy</p>
                                    </div>
                                </div>

                                <div class="mb-10">
                                    <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                        <span>7. </span>
                                        <span>VASTAANOTTOTARKASTUKSEN SOPIMUKSENMUKAISUUS</span>
                                    </h3>

                                    <div class="flex flex-col lg:flex-row flex-wrap lg:items-center gap-2 mt-1">
                                        <span class="text-[#586B74] text-[14px]">
                                            Vastaanottotarkastuksen pitämisestä ja ajankohdasta on sovittu yhteisesti osapuolten kesken
                                        </span>
                                        <span class="text-[#586B74] text-[14px]">
                                            <input type="text" name="vastaanottotarkastuksen_date" placeholder="xx.xx.xxxx" class="w-[85px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_array_data( $data, 'vastaanottotarkastuksen_date' ) ); ?>">
                                        </span>
                                        <span class="text-[#586B74] text-[14px]">
                                            Todettiin vastaanottotarkastus sopimuksen mukaiseksi.
                                        </span>
                                    </div>
                                </div>

                                <div class="mb-10">
                                    <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                        <span>8. </span>
                                        <span>VASTAANOTTOTARKASTUKSEN LAAJUUS</span>
                                    </h3>

                                    <span class="text-[#586B74] text-[14px]">
                                        Vastaanottotarkastuksessa tarkastetaan rakennuttajan ja pääurakoitsijan (U1) välillä allekirjoitettuun urakkasopimukseen perustuvat työt lisä- ja muutostöineen.
                                    </span>

                                    <div class="flex lg:items-end flex-col lg:flex-row gap-4 mt-3">
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
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="vastaanottotarkastuksen_toita_check" <?php checked( noste_check_array_data( $data, 'vastaanottotarkastuksen_toita_check' ), 'on', true); ?>>
                                            </label>
                                            <p class="text-[#586B74] text-[14px] leading-7">Vastaanottotarkastus ei koske seuraavia töitä:</p>

                                        </div>
                                        <span class="text-[#586B74]"><span class="flex-1 h-[1px] bg-[#94969C] inline-block w-full min-w-[250px]"></span></span>
                                    </div>
                                </div>

                                <div class="mb-10">
                                    <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                        <span>9. </span>
                                        <span>ENNAKKOON SUORITETUT TARKASTUKSET</span>
                                    </h3>

                                    <span class="text-[#586B74] text-[14px]">
                                        Suoritetut sopimuksen mukaiset tarkastukset:
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
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_VL1_check" <?php checked( noste_check_array_data( $data, 'noste_VL1_check' ), 'on', true); ?>>
                                        </label>
                                        <span class="flex-1 text-[14px] italic text-[#00B2A9]  min-w-[40px]"><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_VL1', true), 'VL1')); ?></span>
                                        <span class="flex-1 text-[14px]">(</span>
                                        <span class="text-[#586B74] text-[14px]">
                                            <input type="text" name="noste_VL1_date" placeholder="xx.xx.xxxx" class="w-[80px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_array_data( $data, 'noste_VL1_date' ) ); ?>">
                                        </span>
                                        <span class="text-[#586B74] text-[14px] w-full">, liite )</span>
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
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_VL2_check" <?php checked( noste_check_array_data( $data, 'noste_VL2_check' ), 'on', true); ?>>
                                        </label>
                                        <span class="flex-1 text-[14px] italic text-[#00B2A9]  min-w-[40px]"><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_VL2', true), 'VL2')); ?></span>
                                        <span class="flex-1 text-[14px]">(</span>
                                        <span class="text-[#586B74] text-[14px]">
                                            <input type="text" name="noste_VL2_date" placeholder="xx.xx.xxxx" class="w-[80px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_array_data( $data, 'noste_VL2_date' ) ); ?>">
                                        </span>
                                        <span class="text-[#586B74] text-[14px] w-full">, liite )</span>
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
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_VL3_check" <?php checked( noste_check_array_data( $data, 'noste_VL3_check' ), 'on', true); ?>>
                                        </label>
                                        <span class="flex-1 text-[14px] italic text-[#00B2A9]  min-w-[40px]"><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_VL3', true), 'VL3')); ?></span>
                                        <span class="flex-1 text-[14px]">(</span>
                                        <span class="text-[#586B74] text-[14px]">
                                            <input type="text" name="noste_VL3_date" placeholder="xx.xx.xxxx" class="w-[80px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_array_data( $data, 'noste_VL3_date' ) ); ?>">
                                        </span>
                                        <span class="text-[#586B74] text-[14px] w-full">, liite )</span>
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
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_VL4_check" <?php checked( noste_check_array_data( $data, 'noste_VL4_check' ), 'on', true); ?>>
                                        </label>
                                        <span class="flex-1 text-[14px] italic text-[#00B2A9]  min-w-[40px]"><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_VL4', true), 'VL4')); ?></span>
                                        <span class="flex-1 text-[14px]">(</span>
                                        <span class="text-[#586B74] text-[14px]">
                                            <input type="text" name="noste_VL4_date" placeholder="xx.xx.xxxx" class="w-[80px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_array_data( $data, 'noste_VL4_date' ) ); ?>">
                                        </span>
                                        <span class="text-[#586B74] text-[14px] w-full">, liite )</span>
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
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_VL5_check" <?php checked( noste_check_array_data( $data, 'noste_VL5_check' ), 'on', true); ?>>
                                        </label>
                                        <span class="flex-1 text-[14px] italic text-[#00B2A9]  min-w-[40px]"><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_VL5', true), 'VL5')); ?></span>
                                        <span class="flex-1 text-[14px]">(</span>
                                        <span class="text-[#586B74] text-[14px]">
                                            <input type="text" name="noste_VL5_date" placeholder="xx.xx.xxxx" class="w-[80px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_array_data( $data, 'noste_VL5_date' ) ); ?>">
                                        </span>
                                        <span class="text-[#586B74] text-[14px] w-full">, liite )</span>
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
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_VLX_check" <?php checked( noste_check_array_data( $data, 'noste_VLX_check' ), 'on', true); ?>>
                                        </label>
                                        <span class="flex-1 text-[14px] italic text-[#00B2A9]  min-w-[40px]"><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_VLX', true), 'VLX')); ?></span>
                                        <span class="flex-1 text-[14px]">(</span>
                                        <span class="text-[#586B74] text-[14px]">
                                            <input type="text" name="noste_VLX_date" placeholder="xx.xx.xxxx" class="w-[80px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_array_data( $data, 'noste_VLX_date' ) ); ?>">
                                        </span>
                                        <span class="text-[#586B74] text-[14px] w-full">, liite )</span>
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
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_VLXT_check" <?php checked( noste_check_array_data( $data, 'noste_VLXT_check' ), 'on', true); ?>>
                                        </label>
                                        <input type="text" name="noste_VLXT" class="w-[40px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_array_data( $data, 'noste_VLXT' ) ); ?>">
                                        <span class="flex-1 text-[14px]">(</span>
                                        <span class="text-[#586B74] text-[14px]">
                                            <input type="text" name="noste_VLXT_date" placeholder="xx.xx.xxxx" class="w-[80px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_array_data( $data, 'noste_VLXT_date' ) ); ?>">
                                        </span>
                                        <span class="text-[#586B74] text-[14px] w-full">, liite )</span>
                                    </div>

                                    <div class="flex gap-2 mb-4">
                                        <div class="flex items-center gap-3">
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
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_TY1_check" <?php checked( noste_check_array_data( $data, 'noste_TY1_check' ), 'on', true); ?>>
                                            </label>
                                        </div>
                                        <div class="flex gap-3">
                                            <input type="text" name="pilar_TY1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_TY1', true ), 'TY1') ); ?>">
                                        </div>
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
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="ei_suoritettuja_check" <?php checked( noste_check_array_data( $data, 'ei_suoritettuja_check' ), 'on', true); ?>>
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">Ei suoritettuja tarkastuksia.</p>
                                    </div>
                                </div>

                                <div class="mb-10">
                                    <h3 class="flex gap-20 text-black text-[20px] font-medium min-w-[295px]">
                                        <span>10.</span>
                                        <span>SUORITTAMATTOMAT TARKASTUKSET</span>
                                    </h3>

                                    <div class="flex items-center gap-3 mb-4 mt-5">
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
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="suorittamattomat_10_check" <?php checked( noste_check_array_data( $data, 'suorittamattomat_10_check' ), 'on', true); ?>>
                                        </label>
                                        <input type="text" name="suorittamattomat_10" class="w-[85px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_array_data( $data, 'suorittamattomat_10' ) ); ?>">
                                        <span class="flex-1 text-[14px]">(</span>
                                        <span class="text-[#586B74] text-[14px]">
                                            <input type="text" name="suorittamattomat_10_jalkikirjaus" placeholder="Jälkikirjaus: Lisätty liitteeksi" class="w-[195px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_array_data( $data, 'suorittamattomat_10_jalkikirjaus' ) ); ?>">
                                        </span>
                                        <span class="text-[#586B74] text-[14px]">,</span>
                                        <span class="text-[#586B74] text-[14px]">
                                            <input type="text" name="suorittamattomat_10_date" placeholder="xx.xx.xxxx" class="w-[80px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_array_data( $data, 'suorittamattomat_10_date' ) ); ?>">
                                        </span>
                                        <span class="text-[#586B74] text-[14px] w-full">)</span>
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
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="suorittamattomat_10_suorite_check" <?php checked( noste_check_array_data( $data, 'suorittamattomat_10_suorite_check' ), 'on', true); ?>>
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">Ei suoritettuja tarkastuksia.</p>
                                    </div>
                                </div>

                                <div class="mb-10">
                                    <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                        <span>11. </span>
                                        <span>URAKOITSIJAN VASTATTAVAKSI KATSOTTAVAT VIRHEET</span>
                                    </h3>

                                    <span class="text-[#586B74] text-[14px] mb-10">
                                        Tämän pöytäkirjan kohdan 9. Ennakkoon suoritetut tarkastukset sekä kohdan 10. Suorittamattomat tarkastukset mukaisesti havaitut virheet ja puutteet, joita ei tämän pöytäkirjan kohdassa 12 ole erikseen eritelty olemaan aiheuttamatta seuraamuksia urakoitsijoille. <br><br> Urakoitsijan ilmoitus virheistä ja puutteista:
                                    </span>

                                    <span class="text-[#586B74] block mb-4"><span class="flex-1 h-[1px] bg-[#94969C] inline-block w-full max-w-[250px]"></span></span>

                                    <input type="text" name="urakoitsijan_11_kaikki" placeholder="Kaikki korjaukset on suoritettava xx.xx.xxxx, klo xx.xx mennessä valmiiksi." class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_array_data( $data, 'urakoitsijan_11_kaikki' ) ); ?>">
                                </div>


                                <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                    <span>12. </span>
                                    <span>VIRHEET, JOTKA EIVÄT AIHEUTA URAKOITSIJALLE SEURAAMUKSIA SEKÄ SYY TÄHÄN</span>
                                </h3>

                            </div>

                            <div class="help_wrap relative mb-10">
                                <div class="max-w-[700px] mx-auto flex items-center gap-3 mb-4">
                                    <div class="flex items-center gap-3 min-w-[340px]">
                                        <span class="text-[#586B74] text-[14px] w-full">
                                            <input type="text" name="virheet_12" placeholder="Ei kirjattavaa." class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_array_data( $data, 'virheet_12' ) ); ?>">
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
                                    Tähän kirjataan kaikki asiat, joiden korjausta urakoitsijalta ei edellytetä. Näitä voivat olla esimerkiksi urakka alueella havaitut puutteet jotka eivät kuulu urakkasopimukseen, mutta jotka tulee korjata. Esimerkiksi virheet erillishankinnoissa, jos ei ole urakoitsijan vastuulla olevasta asennuksesta johtuva. Tai esimerkiksi Käyttäjän asennuksista/muutosta johtuvat asiat.
                                </div>
                            </div>
                            <div class="max-w-[700px] mx-auto">

                                <div class="mb-10">
                                    <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                        <span>13. </span>
                                        <span>VASTAANOTTOTARKASTUKSEN JÄLKEEN TEHTÄVÄT TYÖT</span>
                                    </h3>

                                    <span class="text-[#586B74] text-[14px] mb-10">
                                        Kohdan 10 suorittamattomien tarkastusten suorittaminen sekä virheiden ja puutteiden korjaaminen.<br> Kohdassa 11 esitettyjen virheiden ja puutteiden korjaaminen.<br> Luovutusdokumenttien toimittaminen rakennuttajalle.<br> Takuuajan vakuuden ja lopputilityksen toimittaminen.
                                    </span>

                                    <input type="text" name="vastaanottotarkas_13" placeholder="Kirjataan muut mahdollisesti vastaanottotarkastukseen jälkeen sovituiksi tehtävät työt." class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_array_data( $data, 'vastaanottotarkas_13' ) ); ?>">
                                </div>

                                <div class="mb-10">
                                    <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                        <span>14.</span>
                                        <span>VIIMEISTÄÄN TAKUUTARKASTUKSESSA KÄSITELTÄVÄT MUISTUTUKSET</span>
                                    </h3>

                                    <span class="text-[#586B74] text-[14px]">
                                        <input type="text" name="viimeistaan_14" placeholder="Ei kirjattavaa." class="w-[200px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_array_data( $data, 'viimeistaan_14' ) ); ?>">
                                    </span>
                                </div>

                                <div class="mb-10">
                                    <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                        <span>15. </span>
                                        <span>RAKENNUTTAJALLE/TILAAJALLE TOIMITETTAVAT LUOVUTUSASIAKIRJAT</span>
                                    </h3>
                                    <div class="mb-4">
                                        <div class="flex flex-col lg:flex-row lg:items-center gap-2 mt-5">
                                            <span class="text-[#586B74] text-[14px] ">Urakoitsija toimittaa rakennuttajakonsultille</span>
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
                                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_P1_15_check" <?php checked( noste_check_array_data( $data, 'noste_P1_15_check' ), 'on', true); ?>>
                                                    <span class="flex-1 text-[14px] italic text-[#00B2A9]"><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_P1', true), 'P1')); ?></span>
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
                                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_P4_15_check" <?php checked( noste_check_array_data( $data, 'noste_P4_15_check' ), 'on', true); ?>>
                                                    <span class="flex-1 text-[14px] italic text-[#00B2A9]"><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_P4', true), 'P4')); ?></span>
                                                </label>
                                                ]
                                            </span>
                                        </div>
                                        <span class="text-[#586B74] text-[14px] ">hankkeen luovutusasiakirjat sähköisessä muodossa</span>
                                        <span class="text-[#586B74] text-[14px] ">yhdessä erässä tämän tilaisuuden jälkeen xx.xx.xxxx mennessä.</span>
                                        <span class="text-[#586B74] text-[14px] ">Luovutusasiakirjoihin kuuluu:</span>
                                        <span class="text-[#586B74] text-[14px] ">Käytettyjen tuotteiden materiaalitiedot ja CE-todistukset</span>
                                        <span class="text-[#586B74] text-[14px] ">Käytettyjen tuotteiden käyttö- ja huolto-ohjeet</span>
                                        <span class="text-[#586B74] text-[14px] ">Punakynäpiirustukset</span>
                                        <span class="text-[#586B74] text-[14px] ">Suoritettujen ja suorittamatta olevien tarkastusten pöytäkirjat.</span>
                                        <span class="text-[#586B74] text-[14px] ">Muut urakkasopimuksessa mainitut luovutusasiakirjat</span>
                                    </div>
                                </div>
                                <div class="flex gap-2 mb-10">
                                    <div class="flex items-center gap-3">
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
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_TY1_check" <?php checked( noste_check_array_data( $data, 'noste_TY1_check' ), 'on', true); ?>>
                                        </label>
                                    </div>
                                    <div class="flex gap-3">
                                        <input type="text" name="rakennutta_15_input" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </div>
                                </div>

                                <div class="mb-10">
                                    <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                        <span>16. </span>
                                        <span>TYÖNTULOSTEN HYVÄKSYMINEN JA VASTAANOTTAMINEN</span>
                                    </h3>

                                    <span class="text-[#586B74] text-[14px] block mb-10">
                                        Aikaisemmin hyväksytyt ja vastaanotetut työntulokset:
                                    </span>
                                    <span class="text-[#586B74] text-[14px] block mb-4">
                                        Tässä tilaisuudessa hyväksyttävät ja vastaanotettavat työntulokset:
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
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="vastaanotetaan_16_check" <?php checked( noste_check_array_data( $data, 'vastaanotetaan_16_check' ), 'on', true); ?>>
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">Vastaanotetaan urakan tarkastuksen kohteena oleva suoritus kohdassa 8 määritetyssä laajuudessa tässä pöytäkirjassa ja sen liitteissä mainituilla virheillä ja puutteilla.</p>
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
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="katsoKohta_16_check" <?php checked( noste_check_array_data( $data, 'katsoKohta_16_check' ), 'on', true); ?>>
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">Katso kohta 17.</p>
                                    </div>

                                    <p class="text-[#586B74] text-[14px] leading-7 mb-4">Myöhemmin vastaanotettavat työntulokset:</p>

                                    <input type="text" name="jaikitomituksena_16" placeholder="Jälkitoimituksena asennettavien lasiseinien vastaanottaminen käydään erikseen läpi jälkitarkastuksessa." class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_array_data( $data, 'jaikitomituksena_16' ) ); ?>">
                                </div>

                                <div>
                                    <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                        <span>17. </span>
                                        <span>TAKUUAJAN HUOLLOT JA TARKASTUKSET</span>
                                    </h3>

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
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="takuuajan_katso_17_check" <?php checked( noste_check_array_data( $data, 'takuuajan_katso_17_check' ), 'on', true); ?>>
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">Katso kohta 17.</p>
                                    </div>


                                </div>

                            </div>

                            <div class="help_wrap relative mb-10">
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
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="takuuajan_katso_17_check_in" <?php checked( noste_check_array_data( $data, 'takuuajan_katso_17_check_in' ), 'on', true); ?>>
                                        </label>
                                        <span class="text-[#586B74] text-[14px] w-full">
                                            <input type="text" name="takuuajan_katso_17_value" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_array_data( $data, 'takuuajan_katso_17_value' ) ); ?>">
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
                                    Kirjataan mikäli jokin estää vastaanoton. Esimerkiksi käyttötarkoitukseen soveltumattoman keskeneräinen työ: (vrt vanhaa lattiaa ei vielä purettu ja uutta asennettu vs yhdestä huoneesta puuttuu lattia) tai vaaralliset ja säädösten vastaiset (esim. sähkön käyttöönottopöytäkirja puuttuu) Esimerkiksi: Hylätään vastaanottotarkastuksen kohteena olleet, rakennuttajan ja urakoitsijan välillä allekirjoitettuun pääurakkasopimukseen perustuvat työt lisä- ja muutostöineen. Hylkäyksen syynä keskeneräiset rakennus- ja talotekniikkatyöt (lattiamateriaalia ei vielä vaihdettu ja valaisimia ei asennettu) sekä näistä johtuva tilan soveltumattomuus turvalliseen ja käyttötarkoituksen mukaiseen käyttöön. Päätettiin vastaanottotarkastus klo xx.xx.
                                </div>
                            </div>
                            <div class="max-w-[700px] mx-auto">
                                <div>
                                    <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                        <span>18. </span>
                                        <span>TAKUUAJAT</span>
                                    </h3>
                                </div>

                            </div>

                            <div class="help_wrap relative mb-10">
                                <div class="max-w-[700px] mx-auto flex items-center gap-3 mb-4">
                                    <div class="flex items-center gap-3 min-w-[450px]">
                                        <span class="text-[#586B74] text-[14px]">Takuuaika alkaa</span>
                                        <span class="text-[#586B74] text-[14px]">
                                            <input type="text" name="takuuaika_aikaa_value" placeholder="xx.xx.xxxx" class="w-[120px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_array_data( $data, 'takuuaika_aikaa_value' ) ); ?>">
                                        </span>
                                        <span class="text-[#586B74] text-[14px]"> ja päättyy</span>
                                        <span class="text-[#586B74] text-[14px]">
                                            <input type="text" name="ja_paattyy_value" placeholder="xx.xx.xxxx" class="w-[120px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_array_data( $data, 'ja_paattyy_value' ) ); ?>">
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
                                    Takuuaika kaksi vuotta.
                                </div>
                            </div>

                            <div class="max-w-[700px] mx-auto">
                                <div class="mb-10">
                                    <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                        <span>19. </span>
                                        <span>TAKUUAJAN HUOLLOT JA TARKASTUKSET</span>
                                    </h3>

                                    <p class="text-[#586B74] text-[14px] leading-7 mb-10">Urakkasopimusasiakirjojen mukaisesti.</p>
                                    <p class="text-[#586B74] text-[14px] leading-7">Todettiin, että takuuajan päättyessä ja tarvittaessa takuuajan puolivälissä pidetään tarkastus. Havaitut käyttöä haittaavat puutteet korjataan sovittuna aikana. Kiireelliset ja oleellisesti haittaa aiheuttavat viat korjataan takuuaikana välittömästi.</p>
                                </div>

                                <div class="mb-10">
                                    <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                        <span>20.</span>
                                        <span>HOITO- JA KÄYTTÖKUSTANNUSTEN SIIRTYMINEN</span>
                                    </h3>

                                    <span class="text-[#586B74] text-[14px]">
                                        <input type="text" name="hoito_ja_20_value" placeholder="Ei siirrettäviä hoitokuluja." class="w-[200px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_array_data( $data, 'hoito_ja_20_value' ) ); ?>">
                                    </span>
                                </div>

                                <div class="mb-10">
                                    <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                        <span>21.</span>
                                        <span>VALMISTUMISAIKA</span>
                                    </h3>

                                    <p class="text-[#586B74] text-[14px] leading-7">Urakkasopimuksen mukainen valmistumisaika:</p>
                                    <p class="text-[#586B74] text-[14px] leading-7">Rakennuttajan ja pääurakoitsijan välillä allekirjoitettuun pääurakkasopimukseen perustuva valmistumisaika on koko hankkeen osalta <span class="flex-1 text-[14px] italic text-[#00B2A9]"><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_VA1', true), 'VA1')); ?></span>.</p>
                                    <p class="text-[#586B74] text-[14px] leading-7 mb-4">Myönnetyt urakka-ajan pidennykset ja niiden syyt:</p>

                                    <span class="text-[#586B74] text-[14px] mb-4">
                                        <input type="text" name="valmistumisika_21_ei" placeholder="Ei ole." class="w-[200px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_array_data( $data, 'valmistumisika_21_ei' ) ); ?>">
                                    </span>

                                    <p class="text-[#586B74] text-[14px] leading-7">Urakkasuorituksen valmistumisen toteaminen:</p>
                                    <div class="flex flex-col lg:flex-row lg:items-center gap-2 mt-5 mb-4">
                                        <span class="text-[#586B74] text-[14px] ">Todettiin, että urakkasuoritus valmistui</span>
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
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="valmistumisika_21_todettin_check" <?php checked( noste_check_array_data( $data, 'valmistumisika_21_todettin_check' ), 'on', true); ?>>
                                                <input type="text" name="valmistumisika_21_todettin_value" placeholder="Ei ole." class="w-[200px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_array_data( $data, 'valmistumisika_21_todettin_value' ) ); ?>">
                                            </label>
                                        </span>
                                    </div>

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
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="valmistumisika_21_sovitusta_check" <?php checked( noste_check_array_data( $data, 'valmistumisika_21_sovitusta_check' ), 'on', true); ?>>
                                        <input type="text" name="valmistumisika_21_sovitusta_value" placeholder="sovitusta aikataulusta poiketen xx.xx.xxxx." class="w-[350px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_array_data( $data, 'valmistumisika_21_sovitusta_value' ) ); ?>">
                                    </label>
                                </div>


                                <div class="mb-10">
                                    <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                        <span>22.</span>
                                        <span>MAKSAMATTOMAN URAKKAHINNAN MAKSUKELPOISUUS JA MAHDOLLISET PIDÄTYKSET</span>
                                    </h3>

                                    <p class="text-[#586B74] text-[14px] leading-7">Urakkasopimuksen mukainen valmistumisaika:</p>
                                    <p class="text-[#586B74] text-[14px] leading-7">Rakennuttajan ja pääurakoitsijan välillä allekirjoitettuun pääurakkasopimukseen perustuva valmistumisaika on koko hankkeen osalta <span class="flex-1 text-[14px] italic text-[#00B2A9]"><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_VA1', true), 'VA1')); ?></span>.</p>
                                    <p class="text-[#586B74] text-[14px] leading-7 mb-4">Myönnetyt urakka-ajan pidennykset ja niiden syyt:</p>

                                    <div class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                        <p class="text-[#586B74] text-[14px] leading-7">Maksamaton urakkahinta maksetaan urakkasopimuksen mukaisesti. Koko urakkahinta maksetaan, kun kaikki urakkasopimuksen ja tämän asiakirjan mukaiset työt on suoritettu hyväksytysti.</p>
                                    </div>

                                </div>

                                <div class="mb-10">
                                    <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                        <span>23.</span>
                                        <span>JÄLKITARKASTUKSET</span>
                                    </h3>

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
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="jalkitarkastukset_23_todettin_check" <?php checked( noste_check_array_data( $data, 'jalkitarkastukset_23_todettin_check' ), 'on', true); ?>>
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">Todettiin, että erilliselle jälkitarkastukselle ei ole tarvetta.</p>
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
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="jalkitarkastukset_23_urakoitsija_check" <?php checked( noste_check_array_data( $data, 'jalkitarkastukset_23_urakoitsija_check' ), 'on', true); ?>>
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">Urakoitsija todentaa rakennuttajakonsultille virheiden ja puutteiden korjausten valmistumisen valokuvin.</p>
                                    </div>

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
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="jalkitarkastukset_23_sovitusta_check" <?php checked( noste_check_array_data( $data, 'jalkitarkastukset_23_sovitusta_check' ), 'on', true); ?>>
                                        <input type="text" name="jalkitarkastukset_23_sovitusta_value" placeholder="sovitusta aikataulusta poiketen xx.xx.xxxx." class="w-[350px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_array_data( $data, 'jalkitarkastukset_23_sovitusta_value' ) ); ?>">
                                    </label>

                                </div>

                                <div>
                                    <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                        <span>24. </span>
                                        <span>MIELIPIDE-EROAVUUDET</span>
                                    </h3>

                                </div>
                            </div>
                            <div class="help_wrap relative mb-10">
                                <div class="max-w-[700px] mx-auto flex items-center gap-3 mb-4">
                                    <div class="flex items-center gap-3 min-w-[340px]">
                                        <span class="text-[#586B74] text-[14px] w-full">
                                            <input type="text" name="mielipide_24_value" placeholder="Ei kirjattavaa." class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_array_data( $data, 'mielipide_24_value' ) ); ?>">
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
                                    Tähän kirjaukset, jos johonkin kohtaan yllä on ollut erimielisyyttä.
                                </div>
                            </div>
                            <div class="max-w-[700px] mx-auto">
                                <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                    <span>25. </span>
                                    <span>SOPIJAPUOLTEN TOISIINSA KOHDISTAMAT VAATIMUKSET</span>
                                </h3>

                                <p class="text-[#586B74] text-[14px] leading-7">Urakoitsijan vaateet tilaajalle:</p>

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
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="maksamattomien_25_check" <?php checked( noste_check_array_data( $data, 'maksamattomien_25_check' ), 'on', true); ?>>
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">Maksamattomien maksuerien maksaminen urakkasopimuksen mukaisesti.</p>
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
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="hyvaksyttyjen_25_check" <?php checked( noste_check_array_data( $data, 'hyvaksyttyjen_25_check' ), 'on', true); ?>>
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">Hyväksyttyjen lisä- ja muutostöiden maksaminen.</p>
                                </div>
                            </div>
                            <div class="help_wrap relative mb-4">
                                <div class="max-w-[700px] mx-auto flex items-center gap-3 mb-4">
                                    <div class="flex items-center gap-3 min-w-[435px]">
                                        <div class="flex items-center gap-3 min-w-[245px]">
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
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="avoimien_25_check" <?php checked( noste_check_array_data( $data, 'avoimien_25_check' ), 'on', true); ?>>
                                            </label>
                                            <p class="text-[#586B74] text-[14px] leading-7">Avoimien lisätyöaiheiden käsittely</p>
                                        </div>
                                        <span class="text-[#586B74] text-[14px] w-full">
                                            <input type="text" name="avoimien_25_value" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_array_data( $data, 'avoimien_25_value' ) ); ?>">
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
                                    Näiden aiheiden erittely
                                </div>
                            </div>
                            <div class="max-w-[700px] mx-auto mb-10">
                                <label class="inline-flex items-center gap-2 cursor-pointer mb-10">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="avoimien_25_ext_check" <?php checked( noste_check_array_data( $data, 'avoimien_25_ext_check' ), 'on', true); ?>>
                                    <input type="text" name="avoimien_25_ext_value" class="w-[350px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_array_data( $data, 'avoimien_25_ext_value' ) ); ?>">
                                </label>

                                <p class="text-[#586B74] text-[14px] leading-7 mb-4">Kolmansien osapuolien vaateet urakoitsijalle:</p>

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
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="avoimien_25_todettin_check" <?php checked( noste_check_array_data( $data, 'avoimien_25_todettin_check' ), 'on', true); ?>>
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">Todettiin, että tällä hetkellä kolmansien osapuolien esittämiä vaateita ei ole tiedossa, mutta mikäli oikeutettuja vaatimuksia ilmenee, urakoitsija vastaa niistä urakkasopimuksen mukaisesti.</p>
                                </div>

                                <label class="inline-flex items-center gap-2 cursor-pointer mb-10">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="avoimien_25_todettin_ext_check" <?php checked( noste_check_array_data( $data, 'avoimien_25_todettin_ext_check' ), 'on', true); ?>>
                                    <input type="text" name="avoimien_25_todettin_ext_value" class="w-[350px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_array_data( $data, 'avoimien_25_todettin_ext_value' ) ); ?>">
                                </label>

                                <p class="text-[#586B74] text-[14px] leading-7 mb-4">Tilaajan vaateet:</p>

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
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="avoimien_25_kohdassa" <?php checked( noste_check_array_data( $data, 'avoimien_25_kohdassa' ), 'on', true); ?>>
                                    </label>
                                    <p class="text-[#586B74] text-[14px] leading-7">Kohdassa 13 mainittujen velvoitteiden suorittaminen</p>
                                </div>

                                <label class="inline-flex items-center gap-2 cursor-pointer mb-10">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="avoimien_25_kohdassa_ext" <?php checked( noste_check_array_data( $data, 'avoimien_25_kohdassa_ext' ), 'on', true); ?>>
                                    <input type="text" name="avoimien_25_kohdassa_ext_value" class="w-[350px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_array_data( $data, 'avoimien_25_kohdassa_ext_value' ) ); ?>">
                                </label>

                                <p class="text-[#586B74] text-[14px] leading-7 mb-4">Kumpikin sopijapuoli on esittänyt tässä vastaanottotarkastuksessa toisiinsa kohdistuvat vaatimuksensa perusteiltaan yksilöitynä. Vastaanottotarkastuksen jälkeen ilmenneitä aiheita ei käsitellä. Tässä tilaisuudessa ei hyväksytä vaateita puolin tai toisin. Vaateet käsitellään erikseen viimeistään taloudellisessa loppuselvityksessä.</p>

                                <div>
                                    <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                        <span>26. </span>
                                        <span>VAKUUDET</span>
                                    </h3>

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
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="vakuudet_26_todettin_check" <?php checked( noste_check_array_data( $data, 'vakuudet_26_todettin_check' ), 'on', true); ?>>
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">Todettiin, että rakennusaikainen vakuus voidaan vaihtaa takuuajan vakuuteen, kun työt on suoritettu loppuun.</p>
                                    </div>

                                    <div class="flex flex-col lg:flex-row lg:items-center gap-2 mt-5 mb-4">
                                        <span class="text-[#586B74] text-[14px] ">Takuuajan vakuus</span>
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
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="vakuudet_26_on_check" <?php checked( noste_check_array_data( $data, 'vakuudet_26_on_check' ), 'on', true); ?>>
                                                <span class="flex-1 text-[14px]">on</span>
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
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="vakuudet_26_ei_check" <?php checked( noste_check_array_data( $data, 'vakuudet_26_ei_check' ), 'on', true); ?>>
                                                <span class="flex-1 text-[14px]">ei ole</span>
                                            </label>
                                            ] toimitettu rakennuttajakonsultille.
                                        </span>
                                    </div>

                                    <label class="inline-flex items-center gap-2 cursor-pointer mb-10">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="vakuudet_26_ext_check" <?php checked( noste_check_array_data( $data, 'vakuudet_26_ext_check' ), 'on', true); ?>>
                                        <input type="text" name="vakuudet_26_ext_value" class="w-[350px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </label>
                                </div>

                                <div>
                                    <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                        <span>27. </span>
                                        <span>RAKENNUSTYÖN VAKUUTUKSEN PÄÄTTYMINEN</span>
                                    </h3>

                                    <p class="text-[#586B74] text-[14px] leading-7 mb-4">Rakennustyön vakuutus voidaan päättää, kun työt on suoritettu loppuun.</p>

                                    <label class="inline-flex items-center gap-2 cursor-pointer mb-10">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="rakennustyon_27_check" <?php checked( noste_check_array_data( $data, 'rakennustyon_27_check' ), 'on', true); ?>>
                                        <input type="text" name="rakennustyon_27_value" class="w-[350px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_array_data( $data, 'rakennustyon_27_value' ) ); ?>">
                                    </label>
                                </div>

                                <div>
                                    <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                        <span>28. </span>
                                        <span>TALOUDELLINEN LOPPUSELVITYS</span>
                                    </h3>

                                    <p class="text-[#586B74] text-[14px] leading-7 mb-4">Taloudellinen loppuselvitys pidetään yhteisesti sovittuna ajankohtana, kun kaikki tässä vastaanottotarkastuksessa mainitut virheet ja puutteet on hyväksytysti korjattu. Ennen taloudellista loppuselvitystä urakoitsija toimittaa rakennuttajalle urakan lopputilityksen vähintään 2 työpäivää ennen loppuselvityksen pitämistä.</p>

                                    <label class="inline-flex items-center gap-2 cursor-pointer mb-10">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="taloudellinen_28_check" <?php checked( noste_check_array_data( $data, 'taloudellinen_28_check' ), 'on', true); ?>>
                                        <input type="text" name="taloudellinen_28_value" class="w-[350px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_array_data( $data, 'taloudellinen_28_value' ) ); ?>">
                                    </label>
                                </div>

                                <div class="mb-10">
                                    <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                        <span>29. </span>
                                        <span>MUUT ASIAT</span>
                                    </h3>
                                    <input type="text" name="muut_29_value" placeholder="Ei kirjattavaa." class="w-[350px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_array_data( $data, 'muut_29_value' ) ); ?>">
                                </div>

                                <div>
                                    <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                        <span>30. </span>
                                        <span>TILOJEN LUOVUTUS KÄYTTÄJÄLLE</span>
                                    </h3>

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
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="tilojen_30_ei_check" <?php checked( noste_check_array_data( $data, 'tilojen_30_ei_check' ), 'on', true); ?>>
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">Ei ole tarvetta käyttäjän käytönopastukselle.</p>
                                    </div>
                                    <label class="inline-flex items-center gap-2 cursor-pointer mb-4">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="tilojen_30_urakoitsija_check" <?php checked( noste_check_array_data( $data, 'tilojen_30_urakoitsija_check' ), 'on', true); ?>>
                                        <input type="text" name="tilojen_30_urakoitsija_value" placeholder="Urakoitsija järjestää käytönopastuksen käyttäjälle erikseen sovittavana päivänä." class="w-[350px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_array_data( $data, 'tilojen_30_urakoitsija_value' ) ); ?>">
                                    </label>

                                    <div class="flex flex-col lg:flex-row lg:items-center gap-2">
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
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="tilojen_30_takuuajan_check" <?php checked( noste_check_array_data( $data, 'tilojen_30_takuuajan_check' ), 'on', true); ?>>
                                            <span class="text-[#586B74] text-[14px] ">Takuuajan vakuus</span>
                                        </label>

                                        <div class="flex flex-col lg:flex-row lg:items-center gap-2">
                                            <input type="text" name="tilojen_30_kio_date" placeholder="XX.XX.XXXX" class="w-full lg:w-[119px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id4" value="<?php echo esc_attr( noste_check_array_data( $data, 'tilojen_30_kio_date' ) ); ?>">
                                            <span class="text-[#586B74] text-[15px]">klo</span>
                                            <input type="text" name="tilojen_30_urakoit" placeholder="XX.XX" class="w-full lg:w-[68px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id5" value="<?php echo esc_attr( noste_check_array_data( $data, 'tilojen_30_urakoit' ) ); ?>">
                                            <span class="text-[#586B74] text-[14px] ">Urakoitsija</span>
                                        </div>
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
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="tilojen_30_osallstuu" <?php checked( noste_check_array_data( $data, 'tilojen_30_osallstuu' ), 'on', true); ?>>
                                                <span class="flex-1 text-[14px]">osallistuu</span>
                                            </label>
                                            ]
                                        </span>
                                    </div>
                                    <span class="text-[#586B74] text-[15px] inline-flex items-center gap-1 mb-4">
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
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="tilojen_30_ei_osallistu" <?php checked( noste_check_array_data( $data, 'tilojen_30_ei_osallistu' ), 'on', true); ?>>
                                            <span class="flex-1 text-[14px]">ei osallistu</span>
                                        </label>
                                        ] hallinnanluovutukseen.
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
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="tilojen_30_urakoitsija_tekee_check" <?php checked( noste_check_array_data( $data, 'tilojen_30_urakoitsija_tekee_check' ), 'on', true); ?>>
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">Urakoitsija tekee jälkitöitä tiloissa hallinnanluovutuksen jälkeen. Kulku tiloihin on sovittava urakoitsijan ja käyttäjän välillä.</p>
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
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="tilojen_30_urakoitsija_palauttaa_check" <?php checked( noste_check_array_data( $data, 'tilojen_30_urakoitsija_palauttaa_check' ), 'on', true); ?>>
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">Urakoitsijan tulee palauttaa kiinteät avaimet ja kulkutunnisteet sekä toimittaa kuittauksen</p>
                                    </div>
                                    <div class="flex mb-4">
                                        <p class="text-[#586B74] text-[14px] leading-7">rakennuttajakonsultille kuittauksen rakennuttajakonsultille</p>
                                        <span class="text-[#586B74] text-[15px] inline-flex gap-1">
                                            ([
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
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="tilojen_30_P1_check" <?php checked( noste_check_array_data( $data, 'tilojen_30_P1_check' ), 'on', true); ?>>
                                                <span class="flex-1 text-[14px] italic text-accent"><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_P1', true), 'P1')); ?></span>
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
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="tilojen_30_P4_check" <?php checked( noste_check_array_data( $data, 'tilojen_30_P4_check' ), 'on', true); ?>>
                                                <span class="flex-1 text-[14px] italic text-accent"><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_P4', true), 'P4')); ?></span>
                                            </label>
                                            ])
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
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="tilojen_30_urakoitsija_on_check" <?php checked( noste_check_array_data( $data, 'tilojen_30_urakoitsija_on_check' ), 'on', true); ?>>
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">Urakoitsijan on palauttanut kaikki kiinteät avaimet ja kulkutunnisteet.</p>
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
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="tilojen_30_tilat_ovat_check" <?php checked( noste_check_array_data( $data, 'tilojen_30_tilat_ovat_check' ), 'on', true); ?>>
                                        </label>
                                        <div class="flex items-center gap-2">
                                            <p class="text-[#586B74] text-[14px] leading-7">Tilat ovat urakoitsijan osalta valmiit luovutettavaksi vuokralaisen käyttöön</p>
                                            <input type="text" name="tilojen_30_tilat_ovat_value" placeholder="xx.xx.xxxx" class="w-full lg:w-[100px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id101" value="<?php echo esc_attr( noste_check_array_data( $data, 'tilojen_30_tilat_ovat_value' ) ); ?>">
                                        </div>
                                    </div>

                                    <label class="inline-flex items-center gap-2 cursor-pointer mb-10">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="tilojen_30_ext_check" <?php checked( noste_check_array_data( $data, 'tilojen_30_ext_check' ), 'on', true); ?>>
                                        <input type="text" name="tilojen_30_ext_value" class="w-[350px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_array_data( $data, 'tilojen_30_ext_value' ) ); ?>">
                                    </label>
                                </div>

                                <div>
                                    <h3 class="mb-5 flex gap-20 text-black text-[20px] font-medium">
                                        <span>31. </span>
                                        <span>PÖYTÄKIRJAN ALLEKIRJOITTAMINEN</span>
                                    </h3>

                                    <div class="flex items-start gap-3 mb-4">
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
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="tilojen_31_sopojapuolet_check" <?php checked( noste_check_array_data( $data, 'tilojen_31_sopojapuolet_check' ), 'on', true); ?>>
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">Sopijapuolet ovat allekirjoittaneet tämän sopimuksen sähköisesti. Sopimus on sitova, kun molemmat osapuolet ovat sen allekirjoittaneet. Kumpikin sopijapuoli tallentaa ja/tai tulostaa allekirjoituspalvelujärjestelmästä oman sopimuskappaleensa.</p>
                                    </div>

                                    <div class="flex items-center gap-3 mb-10">
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
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="tilojen_31_tata_check" <?php checked( noste_check_array_data( $data, 'tilojen_31_tata_check' ), 'on', true); ?>>
                                        </label>
                                        <p class="text-[#586B74] text-[14px] leading-7">Tätä sopimusta on tehty kaksi samasanaista kappaletta, toinen Tilaajalle ja toinen Urakoitsijalle.</p>
                                    </div>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                                        <p class="text-[#586B74] text-[14px] leading-7">Paikka</p>
                                        <span class="text-[#586B74]"><span class="flex-1 h-[1px] bg-[#94969C] inline-block w-full max-w-[250px]"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="help_wrap relative mb-4 mt-10">
                                <div class="max-w-[700px] mx-auto flex items-center gap-2">
                                    <label class="inline-flex items-center gap-2 cursor-pointer min-w-[130px]">
                                        <span class="text-[#586B74]">Allekirjoitukset</span>
                                    </label>

                                    <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path>
                                                <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                            </g>
                                        </svg> </a>

                                    <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                                </div>

                                <div class="help_show text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                    Valitse sähköinen tai perinteinen allekirjoitustapa. Perinteisessä täytä tiedot manuaalisesti. Voi olla useampia allekirjoittajia.
                                </div>
                            </div>
                            <div class="max-w-[700px] mx-auto mb-10">
                                <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 mb-4">
                                    <span></span>
                                    <span class="text-[#586B74] text-[14px]">Tilaaje</span>
                                    <span></span>
                                </div>
                                <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 mb-4">
                                    <span></span>
                                    <div class="flex flex-col lg:flex-row lg:items-center gap-2">
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
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="tilaaje_31_T1_check" <?php checked( noste_check_array_data( $data, 'tilaaje_31_T1_check' ), 'on', true); ?>>
                                            <span class="text-accent text-[14px] italic "><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_T1', true), 'T1')); ?></span>
                                        </label>

                                        <input type="text" name="tilaaje_31_T2_value" placeholder="c/o T2" class="w-full lg:w-[80px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id4" value="<?php echo esc_attr( noste_check_array_data( $data, 'tilaaje_31_T2_value' ) ); ?>">
                                    </div>

                                    <span class="text-[#586B74]"><span class="flex-1 h-[1px] bg-[#94969C] inline-block w-full max-w-[250px]"></span></span>
                                </div>
                                <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 mb-10">
                                    <span></span>
                                    <span class="text-accent text-[14px] italic "><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_T3', true), 'T3')); ?></span>
                                    <span></span>
                                </div>

                                <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 mb-4">
                                    <span></span>
                                    <div class="flex flex-col lg:flex-row lg:items-center gap-2">
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
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="tilaaje_31_T1T2_check" <?php checked( noste_check_array_data( $data, 'tilaaje_31_T1T2_check' ), 'on', true); ?>>
                                            <span class="text-accent text-[14px] italic "><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_T1', true), 'T1')); ?></span>
                                        </label>

                                        <input type="text" name="tilaaje_31_T1T2_value" placeholder="T1 c/o T2" class="w-full lg:w-[80px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id4" value="<?php echo esc_attr( noste_check_array_data( $data, 'tilaaje_31_T1T2_value' ) ); ?>">
                                    </div>

                                    <span class="text-[#586B74]"><span class="flex-1 h-[1px] bg-[#94969C] inline-block w-full max-w-[250px]"></span></span>
                                </div>

                                <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 mb-10">
                                    <span></span>
                                    <div class="flex flex-col lg:flex-row lg:items-center gap-2">
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
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="tilaaje_31_ext_check" <?php checked( noste_check_array_data( $data, 'tilaaje_31_ext_check' ), 'on', true); ?>>
                                        </label>
                                        <input type="text" name="tilaaje_31_ext_value" class="w-full lg:w-[80px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id4" value="<?php echo esc_attr( noste_check_array_data( $data, 'tilaaje_31_ext_value' ) ); ?>">
                                    </div>

                                    <span></span>
                                </div>

                                <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 mb-4">
                                    <span></span>
                                    <span class="text-[#586B74] text-[14px]">Urakoitsija</span>
                                    <span></span>
                                </div>

                                <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 mb-4">
                                    <span></span>
                                    <div class="flex flex-col lg:flex-row lg:items-center gap-2">
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
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="tilaaje_31_urakoitsija_check" <?php checked( noste_check_array_data( $data, 'tilaaje_31_urakoitsija_check' ), 'on', true); ?>>
                                            <span class="text-accent text-[14px] italic "><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_U1', true), 'U1')); ?></span>
                                        </label>
                                    </div>

                                    <span class="text-[#586B74]"><span class="flex-1 h-[1px] bg-[#94969C] inline-block w-full max-w-[250px]"></span></span>
                                </div>

                                <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 mb-10">
                                    <span></span>
                                    <span class="text-accent text-[14px] italic"><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_U4', true), 'U4')); ?></span>
                                    <span></span>
                                </div>


                                <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 mb-4">
                                    <span></span>
                                    <div class="flex flex-col lg:flex-row lg:items-center gap-2">
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
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="tilaaje_31_U1_check" <?php checked( noste_check_array_data( $data, 'tilaaje_31_U1_check' ), 'on', true); ?>>
                                            <span class="text-accent text-[14px] italic "><?php echo esc_html(noste_check_empty(get_post_meta($project_id, 'pilar_U1', true), 'U1')); ?></span>
                                        </label>
                                    </div>

                                    <span class="text-[#586B74]"><span class="flex-1 h-[1px] bg-[#94969C] inline-block w-full max-w-[250px]"></span></span>
                                </div>

                                <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 mb-10">
                                    <span></span>
                                    <div class="flex flex-col lg:flex-row lg:items-center gap-2">
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
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="tilaaje_31_ext_1_check" <?php checked( noste_check_array_data( $data, 'tilaaje_31_ext_1_check' ), 'on', true); ?>>
                                        </label>
                                        <input type="text" name="tilaaje_31_ext_1_value" class="w-full lg:w-[80px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] p-2" wfd-id="id4" value="<?php echo esc_attr( noste_check_array_data( $data, 'tilaaje_31_ext_1_value' ) ); ?>">
                                    </div>
                                    <span></span>
                                </div>


                                <h4 class="mt-10 font-medium">LIITTEET</h4>
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