<?php 

if (!is_singular('projektitiedot')) {return;}


<<<<<<< HEAD
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
                            <div class="mb-14 pt-[72px] mx-auto lg:max-w-[850px]">
                                <p class="text-accent italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K1', true ), 'K1') ); ?></p>
                                <p class="text-accent italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K4', true ), 'K4') ); ?></p>
                            </div>

                            <!-- main step start -->
                            <div class="mx-auto lg:max-w-[850px]">
                                <h2 class="md:text-2xl mb-8 text-[20px] text-black font-medium">TYÖMAAN ALOITUSKOKOUS</h2>
                                <h2 class="md:text-2xl text-[20px] text-black font-medium">ASIALISTA/PÖYTÄKIRJA</h2>
                                <div class="text-[#586B74] mt-[51px]">
                                    <!-- nested step 1.1  -->
                                    <div class="flex md:gap-[60px] flex-wrap">
                                        <div class="flex gap-4 flex-wrap">
                                            <p class="lg:mr-[107px] md:mr-[20px]">Aika ja paikka</p>
                                            <input class="border text-[#283B44] w-[104px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] p-3 font-medium" value="x.x.xxxx" type="text" name="aika_ja_paikka" id="aika_ja_paikka" value="<?php echo esc_attr( noste_check_array_data( $data, "aika_ja_paikka" ) ); ?>"/>
                                            <p>klo</p>
                                            <input class="border w-[68px] text-[#283B44] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] p-3 font-medium" type="text" name="aika_ja_paikka_klo" id="aika_ja_paikka_klo" value="<?php echo esc_attr( noste_check_array_data( $data, "aika_ja_paikka_klo", "x.x.xxxx" ) ); ?>"/>
                                        </div>
                                        <input class="border mt-[24px] md:mt-[0px] md:min-w-[264px] text-[#283B44] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] p-3 italic font-medium" type="text" name="vapaa_teksti_0" id="vapaa_teksti_0" value="<?php echo esc_attr( noste_check_array_data( $data, "vapaa_teksti_0", "Vapaa teksti" ) ); ?>"/>
                                    </div>

                                    <!-- nested step 1.2 -->
                                    <div class="flex md:gap-[236px] gap-[24px] flex-wrap items-center mt-[21px]">
                                        <div class="flex lg:gap-[20px] md:gap-[92px] gap-[20px] flex-wrap items-center">
                                            <p class="lg:mr-[159px]">Läsnä</p>
                                            <div class="relative flex items-center gap-3">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'K17'); ?> value="K17" />
                                                <p class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_U4', true ), 'U4') ); ?></p>
                                            </div>
                                        </div>
                                        <p class="italic text-[#00B2A9] mr-4"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_U1', true ), 'U1') ); ?></p>
                                    </div>

                                    <!-- nested checkbox start -->
                                    <div class="lg:ml-[222px] md:ml-[136px]">
                                        <div class="flex lg:gap-[236px] md:gap-[235px] gap-[24px] flex-wrap items-center mt-[21px]">
                                            <div class="flex gap-4 flex-wrap items-center">
                                                <div class="relative flex items-center gap-3">
                                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'U7'); ?> value="U7"/>
                                                    <p class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_U7', true ), 'U7') ); ?></p>
                                                </div>
                                            </div>
                                            <p class="italic text-[#00B2A9] mr-4"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_U1', true ), 'U1') ); ?></p>
                                        </div>

                                        <!-- nested checkbox 2 start -->
                                        <div class="flex lg:gap-[60px] md:gap-[62px] gap-[24px] flex-wrap items-center mt-[21px]">
                                            <div class="relative flex items-center gap-4">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'U1'); ?> value="U1"/>
                                                <input class="border text-[#283B44] lg:min-w-[192px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] p-3 italic font-medium" type="text" name="vapaa_teksti_1" id="vapaa_teksti_1" value="<?php echo esc_attr( noste_check_array_data( $data, "vapaa_teksti_1", "Vapaa teksti" ) ); ?>"/>
                                            </div>
                                            <p class="italic text-[#00B2A9] mr-4"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_U1', true ), 'U1') ); ?></p>
                                        </div>
                                        <!-- nested checkbox 2 end -->

                                        <!-- nested checkbox 3 start -->
                                        <div class="flex lg:gap-[228px] md:gap-[226px] gap-[24px] flex-wrap items-center mt-[21px]">
                                            <div class="flex gap-4 flex-wrap items-center">
                                                <div class="relative flex items-center gap-3">
                                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'T10'); ?> value="T10"/>
                                                    <p class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T10', true ), 'T10') ); ?></p>
                                                </div>
                                            </div>
                                            <p class="italic text-[#00B2A9] mr-4"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T9', true ), 'T9') ); ?></p>
                                        </div>
                                        <!-- nested checkbox 3 end -->

                                        <!-- nested checkbox 4 start -->
                                        <div class="flex md:gap-[60px] gap-[24px] flex-wrap items-center mt-[21px]">
                                            <div class="relative flex items-center gap-4">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'T9'); ?> value="T9"/>
                                                <input class="border text-[#283B44] lg:min-w-[192px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] p-3 italic font-medium" type="text" name="vapaa_teksti_2" id="vapaa_teksti_2" value="<?php echo esc_attr( noste_check_array_data( $data, "vapaa_teksti_2", "Vapaa teksti" ) ); ?>"/>
                                            </div>
                                            <p class="italic text-[#00B2A9] mr-4"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T9', true ), 'T9') ); ?></p>
                                        </div>
                                        <!-- nested checkbox 4 end -->

                                        <!-- nested checkbox 5 start -->
                                        <div class="flex md:gap-[236px] gap-[24px] flex-wrap items-center mt-[21px]">
                                            <div class="flex gap-4 flex-wrap items-center">
                                                <div class="relative flex items-center gap-3">
                                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'K6'); ?> value="K6"/>
                                                    <p class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K6', true ), 'K6') ); ?></p>
                                                </div>
                                            </div>
                                            <p class="italic text-[#00B2A9] mr-4"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K22', true ), 'K22') ); ?></p>
                                        </div>
                                        <!-- nested checkbox 5 end -->

                                        <!-- nested checkbox 6 start -->
                                        <div class="flex md:gap-[237px] gap-[24px] flex-wrap items-center mt-[21px]">
                                            <div class="flex gap-4 flex-wrap items-center">
                                                <div class="relative flex items-center gap-3">
                                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'T3'); ?> value="T3"/>
                                                    <p class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T3', true ), 'T3') ); ?></p>
                                                </div>
                                            </div>
                                            <p class="italic text-[#00B2A9] mr-4"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T2', true ), 'T2') ); ?></p>
                                        </div>
                                        <!-- nested checkbox 6 end -->

                                        <!-- nested checkbox 7 start -->
                                        <div class="flex md:gap-[60px] gap-[24px] flex-wrap items-center mt-[21px]">
                                            <div class="relative flex items-center gap-4">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'teksti_4'); ?> value="teksti_4"/>
                                                <input class="border text-[#283B44] lg:min-w-[192px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] p-3 italic font-medium" type="text" name="vapaa_teksti_3" id="vapaa_teksti_3" value="<?php echo esc_attr( noste_check_array_data( $data, "vapaa_teksti_3", "Vapaa teksti" ) ); ?>"/>
                                            </div>
                                            <input class="border text-[#283B44] lg:min-w-[192px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] p-3 italic font-medium" type="text" name="vapaa_teksti_4" id="vapaa_teksti_4" value="<?php echo esc_attr( noste_check_array_data( $data, "vapaa_teksti_4", "Vapaa teksti" ) ); ?>"/>
                                        </div>
                                        <!-- nested checkbox 7 end -->

                                        <!-- nested checkbox 8 start -->
                                        <div class="flex md:gap-[236px] gap-[24px] flex-wrap items-center mt-[21px]">
                                            <div class="flex gap-4 flex-wrap items-center">
                                                <div class="relative flex items-center gap-3">
                                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'P1'); ?> value="P1"/>
                                                    <p class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P1', true ), 'P1') ); ?></p>
                                                </div>
                                            </div>
                                            <p>Partners at Noste Oy</p>
                                        </div>
                                        <!-- nested checkbox 8 end -->

                                        <!-- nested checkbox 9 start -->
                                        <div class="flex md:gap-[236px] gap-[24px] flex-wrap items-center mt-[21px]">
                                            <div class="flex gap-4 flex-wrap items-center">
                                                <div class="relative flex items-center gap-3">
                                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'P4'); ?> value="P4"/>
                                                    <p class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P4', true ), 'P4') ); ?></p>
                                                </div>
                                            </div>
                                            <p>Partners at Noste Oy</p>
                                        </div>
                                        <!-- nested checkbox 8 end -->
                                    </div>
                                    <!-- nested checkbox end -->
                                </div>
                            </div>
                            <!-- main step end -->

                            <!-- 1st step start -->
                            <div class="mt-14">
                                <div class="help_wrap relative">
                                    <div class="flex items-center max-w-[850px] mx-auto">
                                        <h2 class="md:text-2xl text-[20px] text-black font-medium md:min-w-[590px] min-w-[225px] mr-2"><span class="lg:mr-16">1.</span> KOKOUKSEN AVAUS JA JÄRJESTÄYTYMINEN</h2>
                                        <a href="#!" class="help_click">
                                            <svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                    <path
                                                        d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13"
                                                        stroke="#000000"
                                                        stroke-width="0.72"
                                                        stroke-linecap="round"
                                                    ></path>
                                                    <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                                </g>
                                            </svg>
                                        </a>

                                        <hr class="help_line hidden w-full border border-solid border-[#E1E1EA]" />
                                    </div>

                                    <div
                                        class="help_show hidden text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-3 lg:absolute lg:right-[0px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] z-10"
                                    >
                                        HUOM! Kun kokouksessa käydään läpi asioita ja sovitaan jotain tehtäväksi kirjaa aina lauseen perään sulkuihin se kenelle tehtävä on osoitettu. Näin pöytäkirja toimii myös tehtäväluettelona.
                                    </div>
                                </div>

                                <div class="mx-auto lg:max-w-[850px] mt-6 text-[#586B74]">
                                    <div class="flex items-center gap-2 flex-wrap">
                                        <div class="flex items-center gap-5">
                                            <div class="relative flex items-center gap-2">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'P4_'); ?> value="P4_"/>
                                                <p class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P4', true ), 'P4') ); ?></p>
                                            </div>
                                            <div class="relative flex items-center gap-2">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'P4'); ?> value="P4"/>
                                                <p class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P4', true ), 'P4') ); ?></p>
                                            </div>
                                        </div>
                                        <p>toivotti läsnäolijat tervetulleiksi työmaan aloituskokoukseen.</p>
                                    </div>

                                    <div>
                                        <div class="flex items-center flex-wrap">
                                            <p>Kokouksen puheenjohtajana toimii</p>
                                            <div class="relative flex items-center gap-2 md:mx-4 mr-4">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'P4'); ?> value="P4"/>
                                                <p class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P4', true ), 'P4') ); ?></p>
                                            </div>
                                            <div class="relative flex items-center gap-2">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'P4_2'); ?> value="P4_2"/>
                                                <p class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P4', true ), 'P4') ); ?></p>
                                            </div>
                                            <p class="md:mx-4">/ Partners at Noste Oy ja sihteerinä</p>
                                            <div class="relative flex items-center gap-2 mr-4 md:mr-0">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'P4_3'); ?> value="P4_3" />
                                                <p class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P4', true ), 'P4') ); ?></p>
                                            </div>
                                            <div class="relative flex items-center gap-2 lg:mx-4 ">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'P4_4'); ?> value="P4_4" />
                                                <p class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P4', true ), 'P4') ); ?></p>
                                                / Partners
                                            </div>
                                            <p>at Noste Oy. Puheenjohtaja avasi kokouksen.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 1st step end -->

                            <!-- 2nd step start -->
                            <div class="mt-14 mx-auto lg:max-w-[850px] text-[#586B74]">
                                <h2 class="md:text-2xl text-[20px] text-black font-medium"><span class="lg:mr-16">2.</span>KOKOUKSEN PÄÄTÖSVALTAISUUS</h2>
                                <div class="mt-6">
                                    <p>Todettiin, että Tilaajan ja Urakoitsijan päätösvaltaiset edustajat ovat paikalla. Kokouksen pitämisestä ja ajankohdasta</p>
                                    <div class="flex items-center flex-wrap gap-3">
                                        <p>on sovittu yhteisesti osapuolten kesken</p>
                                        <input class="border text-[#283B44] w-[104px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] p-3 font-medium mb-[12px] md:mb-[0px]" type="text" name="osapuolten_kesken" id="osapuolten_kesken" value="<?php echo esc_attr( noste_check_array_data( $data, "osapuolten_kesken", 'xx.xx.xxxx' ) ); ?>"/>
                                    </div>
                                    <p>Todettiin kokous sopimuksen mukaiseksi ja päätösvaltaiseksi työmaakokoukseksi.</p>
                                </div>
                            </div>
                            <!-- 2nd step end -->

                            <!-- 3rd step start -->
                            <div class="mt-14 mx-auto lg:max-w-[850px] text-[#586B74]">
                                <h2 class="md:text-2xl text-[20px] text-black font-medium"><span class="lg:mr-16">3.</span>YHTEYSHENKILÖT JA YHTEISTOIMINTA</h2>
                                <p class="uppercase mt-6">kohteen nimi ja osoite</p>
                                <p>Kohde: <span class="text-[#00B2A9] italic">K1,K4</span></p>
                                <p>Osoite: <span class="text-[#00B2A9] italic">K2,K3</span></p>
                            </div>
                            <!-- 3rd step end -->

                            <!-- another 3rd step start -->
                            <div class="mt-14 mx-auto lg:max-w-[850px] text-[#586B74]">
                                <h2 class="md:text-2xl text-[20px] text-black font-medium"><span class="lg:mr-16">3.</span>YHTEYSHENKILÖT JA YHTEISTOIMINTA</h2>
                                <p class="uppercase mt-6">kohteen nimi ja osoite</p>
                                <p>Kohde: <span class="text-[#00B2A9] italic">K1,K4</span></p>
                                <p>Osoite: <span class="text-[#00B2A9] italic">K2,K3</span></p>
                                <p class="uppercase mt-6">projektin osapuolet</p>

                                <!-- nested content start -->
                                <div class="flex md:flex-row gap-5 mt-6 text-[#283B44]">
                                    <p class="font-medium w-2/5">Rakennuttaja</p>
                                    <p class="text-accent italic font-medium"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T1', true ), 'T1') ); ?></p>
                                </div>

                                <div class="flex md:flex-row flex-col gap-5 mt-6 text-[#283B44]">
                                    <p class="font-medium w-2/5">Projektinjohtokonsultti</p>
                                    <p class="font-medium">Partners at Noste Oy</p>
                                </div>

                                <div class="flex md:flex-row flex-col gap-5 mt-6 text-[#586B74]">
                                    <div class="relative flex items-center gap-3 w-2/5">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'P2'); ?> value="P2"/>
                                        <p>Projektipäällikkö</p>
                                    </div>
                                    <p><span class="italic text-[#00B2A9]">P1, </span>puh. <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P2', true ), 'P2') ); ?></span></p>
                                </div>

                                <div class="flex md:flex-row flex-col gap-5 mt-6 text-[#586B74]">
                                    <div class="relative flex md:items-center gap-3 w-2/5">
                                        <span class="mt-[5px] md:mt-[0px] shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'Projektijohtamisen_asiantuntija'); ?> value="Projektijohtamisen_asiantuntija" />
                                        <p>Projektijohtamisen asiantuntija</p>
                                    </div>
                                    <p><span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P4', true ), 'P4') ); ?>, </span>puh. <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P5', true ), 'P5') ); ?></span></p>
                                </div>

                                <div class="flex flex-wrap gap-5 mt-8 text-[#283B44]">
                                    <p class="font-medium w-2/5">Pääurakoitsija</p>
                                    <p class="text-accent italic font-medium"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_U1', true ), 'U1') ); ?></p>
                                </div>

                                <div class="flex md:flex-row flex-wrap gap-5 mt-6 text-[#586B74]">
                                    <p class="w-2/5">Työnjohtaja</p>
                                    <p><span class="italic text-[#00B2A9]">U7, </span>puh. <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_U9', true ), 'U9') ); ?></span></p>
                                </div>

                                <div class="flex md:flex-row flex-wrap gap-5 mt-8 text-[#283B44]">
                                    <p class="font-medium w-2/5">Tilasuunnittelu</p>
                                    <p class="text-accent italic font-medium"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T9', true ), 'T9') ); ?></p>
                                </div>

                                <div class="flex md:flex-row flex-col gap-5 mt-8 text-[#283B44]">
                                    <div class="w-2/5">
                                        <input class="border text-[#283B44] max-w-[245px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] p-3 italic font-medium" type="text" name="sisustusarkkitehti" id="sisustusarkkitehti" value="<?php echo esc_attr( noste_check_array_data( $data, "sisustusarkkitehti", "Sisustusarkkitehti" ) ); ?>"/>
                                    </div>
                                    <p class="text-[#586B74]"><span class="italic text-[#00B2A9]">T10, </span>puh. <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T11', true ), 'T11') ); ?></span></p>
                                </div>

                                <div class="flex md:flex-row flex-wrap gap-5 mt-7 text-[#283B44]">
                                    <p class="font-medium w-2/5">Käyttäjä</p>
                                    <p class="text-accent italic font-medium">V1</p>
                                </div>

                                <div class="flex md:flex-row flex-wrap gap-5 mt-8 text-[#283B44]">
                                    <p class="font-medium md:w-2/5">Kiinteistömanageeraus</p>
                                    <p class="text-accent italic font-medium"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K22', true ), 'K22') ); ?></p>
                                </div>

                                <div class="flex md:flex-row flex-col gap-5 mt-5 text-[#283B44]">
                                    <div class="w-2/5">
                                        <input class="border text-[#283B44] max-w-[245px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] p-3 italic font-medium" type="text" name="Kiinteistopaallikko" id="Kiinteistopaallikko" value="<?php echo esc_attr( noste_check_array_data( $data, "Kiinteistopaallikko", "Kiinteistöpäällikkö" ) ); ?>"/>
                                    </div>
                                    <p class="text-[#586B74]"><span class="italic text-[#00B2A9]">K6, </span>puh. <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K10', true ), 'K10') ); ?></span></p>
                                </div>

                                <div class="flex md:flex-row flex-wrap gap-5 mt-7 text-[#283B44]">
                                    <p class="font-medium w-2/5">Huolto</p>
                                    <div>
                                        <p class="text-accent italic font-medium"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K23', true ), 'K23') ); ?></p>
                                        <p class="mt-6 text-[#586B74]">
                                            <span class="italic text-[#00B2A9]">K11, </span>puh.
                                            <span class="italic text-[#00B2A9]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K13', true ), 'K13') ); ?></span>
                                        </p>
                                    </div>
                                </div>

                                <div class="flex md:flex-row flex-col gap-5 mt-6 text-[#283B44]">
                                    <div class="relative flex items-center gap-3 w-2/5">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'Aulapalvelut'); ?> value="Aulapalvelut"/>
                                        <p class="font-medium">Aulapalvelut</p>
                                    </div>
                                </div>

                                <div class="flex md:flex-row flex-col gap-5 md:mt-8 text-[#283B44]">
                                    <p class="font-medium w-2/5"></p>
                                    <p class="text-[#586B74]">Aukioloajat klo <span class="text-accent italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K16', true ), 'K16') ); ?></span></p>
                                </div>

                                <!-- nested content end -->
                            </div>
                            <!-- another 3rd step end -->

                            <!-- 4th step start -->
                            <div class="mt-14 text-[#586B74]">
                                <div class="max-w-[850px] mx-auto text-[#586B74]">
                                    <h2 class="md:text-2xl text-[20px] text-black font-medium"><span class="lg:mr-16">4.</span>SOPIMUSASIAT JA -LIITTEET</h2>
                                    <p class="my-6">URAKKASOPIMUS JA -AIKA</p>
                                    <p>
                                        Urakkamuotona on kiinteähintainen kokonaisurakka. <br />
                                        Urakkasopimuksen tilanne
                                    </p>

                                    <!-- nested 1 -->
                                    <div class="mt-6 flex items-center flex-wrap gap-6">
                                        <div class="flex gap-[60px]">
                                            <p>-</p>
                                            <p>TMK1 :</p>
                                        </div>

                                        <!-- 1st nested -->
                                        <div class="relative flex items-center gap-3">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'Kesken'); ?> value="Kesken"/>
                                            <p>Kesken</p>
                                        </div>

                                        <!-- 2nd nested -->
                                        <div class="relative flex items-center gap-3">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'Kommenteilla'); ?> value="Kommenteilla"/>
                                            <p>Kommenteilla</p>
                                        </div>

                                        <!-- 3rd nested -->
                                        <div class="relative flex items-center gap-3">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'Allekirjoitettu'); ?> value="Allekirjoitettu"/>
                                            <p>Allekirjoitettu</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- nested 2 -->
                                <div class="help_wrap relative">
                                    <div class="flex items-center lg:flex-row mt-[18px] max-w-[850px] mx-auto">
                                        <div class="flex items-center md:gap-[35.5px] gap-[20px] lg:min-w-[120px] md:min-w-[130px]">
                                            <p>-</p>
                                            <div class="flex items-center">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'teksti_5'); ?> value="teksti_5"/>
                                                <p class="md:ml-2 text-[#586B74] w-[55px]">TMK1 :</p>
                                            </div>
                                        </div>
                                        <input class="border lg:max-w-[245px] md:min-w-[245px] min-w-[85px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] italic ml-6 mr-3 font-medium" type="text" name="vapaa_teksti_5" id="vapaa_teksti_5" value="<?php echo esc_attr( noste_check_array_data( $data, "vapaa_teksti_5", "Vapaa teksti…" ) ); ?>"/>
                                        <a href="#!" class="help_click">
                                            <svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                    <path
                                                        d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13"
                                                        stroke="#000000"
                                                        stroke-width="0.72"
                                                        stroke-linecap="round"
                                                    ></path>
                                                    <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                                </g>
                                            </svg>
                                        </a>

                                        <hr class="help_line hidden w-full my-2 lg:my-0 border border-solid border-[#E1E1EA]" />
                                    </div>

                                    <div
                                        class="help_show hidden text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[0px] lg:mt-[-60px] mt-[10px] mb-[15px] lg:mb[0]"
                                    >
                                        Tilanne jos poikkeava: Urakoitsija allekirjoittanut, allekirjoitetaan sähköisesti jne.
                                    </div>
                                </div>

                                <!-- nested 3 -->
                                <div class="mt-[41px] max-w-[850px] mx-auto text-[#586B74]">
                                    <p>LASKUTUSKÄYTÄNTÖ</p>
                                    <p class="mt-6">Maksuerätaulukko</p>

                                    <!-- nested 3.1 -->
                                    <div class="mt-6 flex items-center flex-wrap gap-6">
                                        <div class="flex gap-[60px]">
                                            <p>-</p>
                                            <p>TMK1 :</p>
                                        </div>

                                        <!-- nested 3.2 -->
                                        <div class="relative flex items-center gap-3">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'Kesken_2'); ?> value="Kesken_2"/>
                                            <p>Kesken</p>
                                        </div>

                                        <!-- nested 3.3 -->
                                        <div class="relative flex items-center gap-3">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'Kommenteilla_2'); ?> value="Kommenteilla_2"/>
                                            <p>Kommenteilla</p>
                                        </div>

                                        <!-- nested 3.4 -->
                                        <div class="relative flex items-center gap-3">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'hyvaksytty'); ?> value="hyvaksytty"/>
                                            <p>Hyväksytty</p>
                                        </div>
                                    </div>
                                    <!-- nested 3.5 -->
                                    <div class="flex items-center lg:flex-row mt-[18px] relative">
                                        <div class="flex items-center md:gap-[35.5px] gap-[20px]">
                                            <p>-</p>
                                            <div class="flex items-center">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'teksti_6'); ?> value="teksti_6"/>
                                                <p class="ml-2 text-[#586B74] w-[55px]">TMK1 :</p>
                                            </div>
                                        </div>
                                        <input class="border max-w-[245px] w-full h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] italic ml-6 mr-3 font-medium" type="text" name="vapaa_teksti_6" id="vapaa_teksti_6" value="<?php echo esc_attr( noste_check_array_data( $data, "vapaa_teksti_6", "Vapaa teksti…" ) ); ?>"/>
                                    </div>

                                    <!-- nested 4 -->
                                    <div class="mt-10">
                                        <p>Laskujen tarkastaminen</p>
                                        <div class="flex lg:gap-[60px] gap-[20px] mt-6">
                                            <p>-</p>
                                            <p>
                                                TMK1: Ennen laskujen lähettämistä urakoitsijan on hyväksytettävä laskutettavat maksuerät rakennuttajakonsultilla urakkasopimuksessa kirjatun mukaisesti ja liitettävä rakennuttajakonsultin
                                                hyväksyntä osaksi laskua.
                                            </p>
                                        </div>
                                        <p class="mt-12">Laskutusohje</p>
                                        <div class="flex lg:gap-[60px] gap-[20px] mt-6">
                                            <p>-</p>
                                            <div>
                                                <p>TMK1: Verkkolaskutusosoite:</p>
                                                <p class="text-[#00B2A9] text-[18px] italic mt-[18px]">M1</p>
                                            </div>
                                        </div>

                                        <div class="mt-6 flex items-center flex-wrap">
                                            <div class="flex lg:gap-[60px] gap-[20px]">
                                                <p>-</p>
                                                <p class="mr-5">TMK1: Laskujen viitteeksi tulee laittaa</p>
                                            </div>

                                            <!-- nested 4.2 -->
                                            <div class="relative flex items-center gap-3">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'hankenumero_K8'); ?> value="hankenumero_K8"/>
                                                <p class="mr-5">hankenumero K8</p>
                                            </div>

                                            <!-- nested 4.3 -->
                                            <div class="relative flex items-center gap-3 mt-4 lg:mt-0">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'teksti_7'); ?> value="teksti_7" />
                                                <input class="border md:min-w-[245px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] italic ml-2 font-medium" type="text" name="vapaa_teksti_7" id="vapaa_teksti_7" value="<?php echo esc_attr( noste_check_array_data( $data, "vapaa_teksti_7", "Vapaa teksti…" ) ); ?>"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- another question -->
                                <div class="help_wrap relative mt-12">
                                    <div class="flex items-center max-w-[850px] mx-auto">
                                        <p class="mr-3">KOKOUSKÄYTÄNNÖT</p>
                                        <a href="#!" class="help_click">
                                            <svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                    <path
                                                        d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13"
                                                        stroke="#000000"
                                                        stroke-width="0.72"
                                                        stroke-linecap="round"
                                                    ></path>
                                                    <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                                </g>
                                            </svg>
                                        </a>

                                        <hr class="help_line hidden w-full border border-solid border-[#E1E1EA]" />
                                    </div>

                                    <div class="help_show hidden text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-3 lg:absolute lg:right-[0px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px]">
                                        Mikäli työmaa on jo käynnissä, mutta et ole vielä saanut, pyydä työvaiheilmoitus (=TVI), josta saat kätevästi työmaatilanteen hahmoteltua. Työvaiheilmoituksesta tulee käydä ilmi: Työmaan vahvuus,
                                        työmaatilanne, aikataulutilanne, suunnitelmapuutteet ja lisätyöesitykset kts urakkasopimus.
                                    </div>
                                </div>

                                <!-- nested 4 -->
                                <div class="max-w-[850px] mx-auto mt-6 text-[#586B74]">
                                    <p>Työmaakokouksiin osallistuvat ensisijaisesti urakoitsijat ja rakennuttajakonsultti.</p>
                                    <div class="flex lg:gap-[60px] gap-[20px] mt-6">
                                        <p>-</p>
                                        <div>
                                            <p>Suunnittelijat kutsutaan työmaakokouksiin vain tarvittaessa.</p>
                                            <div class="flex md:items-center lg:gap-10 gap-5 mt-[18px]">
                                                <p>o</p>
                                                <div class="flex md:items-center relative">
                                                    <span class="mt-[5px] md:mt-[0px] shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'aloituskokoukseen'); ?> value="aloituskokoukseen" />
                                                    <p class="ml-2 text-[#586B74]">TMK1: Tilasuunnittelija kutsuttu aloituskokoukseen</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex lg:gap-[60px] gap-[20px] mt-[18px]">
                                        <p>-</p>
                                        <p>Pääurakoitsija laatii urakkasopimuksen mukaisesti työvaiheilmoitukset, joista viimeisin liitetään osaksi</p>
                                    </div>
                                    <p>työmaakokouspöytäkirjaa.</p>

                                    <div class="flex lg:gap-[60px] gap-[20px] mt-[18px]">
                                        <p>-</p>
                                        <p>Työmaakokouksia järjestetään arviolta kerran kuukaudessa. Kuitenkin tarpeen mukaan.</p>
                                    </div>

                                    <!-- nested 5 -->
                                    <div class="mt-12">
                                        <p>VAKUUTUKSET JA VAKUUDET</p>
                                        <p class="mt-6">Todistus vastuuvakuutuksesta</p>
                                        <div class="flex lg:gap-[60px] gap-[20px] mt-[18px]">
                                            <p>-</p>
                                            <p>TMK1: Urakoitsija on toimittanut todistuksen voimassa olevasta vastuuvakuutuksesta sekä Luotettava </p>
                                        </div>
                                        <p>Kumppani-raportin tarjouksen jättämisen yhteydessä, OK.</p>
                                        <p class="mt-8">Rakennustyövakuutuksen toimittaminen</p>
                                        <div class="flex lg:gap-[60px] gap-[20px] mt-6">
                                            <p>-</p>
                                            <div class="flex md:items-center relative">
                                                <span class="mt-[5px] md:mt-[0px] shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'rakennustyovakuutuksesta'); ?> value="rakennustyovakuutuksesta" />
                                                <p class="ml-2 text-[#586B74]">TMK1: Pääurakoitsija on toimittanut todistuksen rakennustyövakuutuksesta</p>
                                            </div>
                                        </div>

                                        <div class="flex lg:gap-[60px] gap-[20px] mt-6">
                                            <p>-</p>
                                            <div class="flex md:items-center relative">
                                                <span class="mt-[5px] md:mt-[0px] shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'U7_1'); ?> value="U7_1" />
                                                <p class="ml-2 text-[#586B74]">TMK1: Pääurakoitsija ei ole toimittanut todistusta rakennustyövakuutuksesta, toimitetaan <span class="text-[#00B2A9] font-medium italic">(U7)</span></p>
                                            </div>
                                        </div>
                                        <p class="mt-8">Rakennusajan vakuus</p>
                                        <div class="flex lg:gap-[60px] gap-[20px] mt-6">
                                            <p>-</p>
                                            <div class="flex md:items-center relative">
                                                <span class="mt-[5px] md:mt-[0px] shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'rakennusajan_vakuuden'); ?> value="rakennusajan_vakuuden" />
                                                <p class="ml-2 text-[#586B74]">TMK1: Pääurakoitsija on toimittanut rakennusajan vakuuden</p>
                                            </div>
                                        </div>

                                        <div class="flex lg:gap-[60px] gap-[20px] mt-6">
                                            <p>-</p>
                                            <div class="flex md:items-center relative">
                                                <span class="mt-[5px] md:mt-[0px] shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'toimitetaan_1'); ?> value="toimitetaan_1" />
                                                <p class="ml-2 text-[#586B74]">TMK1: Pääurakoitsija ei ole toimittanut rakennusajan vakuutta, toimitetaan <span class="text-[#00B2A9] font-medium italic">(U7)</span></p>
                                            </div>
                                        </div>

                                        <p class="mt-8">Takuuajan vakuus</p>
                                        <div class="flex lg:gap-[60px] gap-[20px] mt-[18px]">
                                            <p>-</p>
                                            <p>
                                                Urakoitsijan tulee urakan vastaanoton yhteydessä toimittaa takuuajan vakuus, joka on 2 % laskettuna 
                                            </p>
                                        </div>
                                        <p>arvonlisäverottomasta urakkahinnasta lisä- ja muutostöineen.
                                            <span class="text-[#00B2A9] font-medium italic">(U7)</span></p>
                                    </div>
                                </div>
                            </div>
                            <!-- 4th step end -->

                            <!-- step 5 start -->
                            <div class="max-w-[850px] mx-auto mt-14 text-[#586B74]">
                                <h2 class="md:text-2xl text-[20px] text-black font-medium"><span class="lg:mr-16">5.</span>VIRANOMAISASIAT</h2>
                                <p class="my-6">Rakennusluvan tilanne.</p>
                                <div class="flex lg:gap-[60px] gap-[20px]">
                                    <p>-</p>
                                    <p>Hankkeessa tehtävät työt eivät edellytä rakennuslupaa.</p>
                                </div>
                            </div>
                            <!-- step 5 end -->

                            <!-- step 6 start -->
                            <div class="mt-14 text-[#586B74]">
                                <!-- nested 6.1 -->
                                <div class="max-w-[850px] mx-auto text-[#586B74]">
                                    <h2 class="md:text-2xl text-[20px] text-black font-medium"><span class="lg:mr-16">6.</span> AIKATAULU- JA TYÖMAATILANNE SEKÄ PÄÄURAKOITSIJAN ASIAT</h2>
                                    <p class="my-6">Pääurakoitsijan asiat:</p>

                                    <!-- nested 6.1.1 -->
                                    <div class="mt-6 flex items-center flex-wrap">
                                        <div class="flex lg:gap-[60px] gap-[20px]">
                                            <p>-</p>
                                            <div class="flex md:items-center relative">
                                                <span class="mt-[5px] md:mt-[0px] shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'tyovaiheilmoitus'); ?> value="tyovaiheilmoitus" />
                                                <p class="ml-2 text-[#586B74] flex items-center flex-wrap">
                                                    TMK1: Viimeisin työvaiheilmoitus (
                                                    <span>
                                                        <input class="mt-[5px] md:mt-[0px] border w-[104px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] mx-1 font-medium" type="text" name="viimeisin_tyovaiheilmoitus" id="viimeisin_tyovaiheilmoitus" value="<?php echo esc_attr( noste_check_array_data( $data, "viimeisin_tyovaiheilmoitus", "xx.xx.xxxx" ) ); ?>"/>
                                                    </span>
                                                    ), liite 1.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- nested 6.1.2 -->
                                    <div class="mt-6 flex items-center flex-wrap">
                                        <div class="flex lg:gap-[60px] gap-[20px]">
                                            <p>-</p>
                                            <div class="flex md:items-center relative">
                                                <span class="mt-[5px] md:mt-[0px] shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'ei_toimitettu'); ?> value="ei_toimitettu" />
                                                <p class="ml-2 text-[#586B74] flex items-center flex-wrap">TMK1: Työvaiheilmoitusta ei toimitettu.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- nested 6.1.3 -->
                                    <div class="flex lg:gap-[60px] gap-[20px] mt-[18px]">
                                        <p>-</p>
                                        <p class="flex items-center flex-wrap">
                                            TMK1: Työmaan yhteisvahvuus
                                            <span><input class="border w-[42px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] mx-2 font-medium" type="text" name="tyomaan_yhteisvahvuus" id="tyomaan_yhteisvahvuus" value="<?php echo esc_attr( noste_check_array_data( $data, "tyomaan_yhteisvahvuus", 'x' ) ); ?>"/></span> hlöä.
                                        </p>
                                    </div>
                                </div>

                                <!-- nested 6.2 -->
                                <div>
                                    <div class="max-w-[850px] mx-auto mt-12 text-[#586B74]">
                                        <p class="my-6">Pääurakoitsijan asiat:</p>

                                        <!-- nested 6.2.1 -->
                                        <div class="mt-6 flex items-center flex-wrap">
                                            <div class="flex lg:gap-[60px] gap-[20px]">
                                                <p>-</p>
                                                <div class="flex md:items-center relative">
                                                    <span class="mt-[5px] md:mt-[0px] shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'aikataulu_seurantaviivalla'); ?> value="aikataulu_seurantaviivalla" />
                                                    <p class="ml-2 text-[#586B74] flex items-center flex-wrap">
                                                        TMK1: Työmaa-aikataulu seurantaviivalla, (
                                                        <span>
                                                            <input class="mt-[5px] md:mt-[0px] border w-[104px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] mx-1 font-medium" type="text" name="tyomaa_aikataulu" id="tyomaa_aikataulu" value="<?php echo esc_attr( noste_check_array_data( $data, "tyomaa_aikataulu", 'xx.xx.xxxx' ) ); ?>"/>
                                                        </span>
                                                        ), liite 2.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- nested 6.2.2 -->
                                        <div class="mt-6 flex items-center flex-wrap">
                                            <div class="flex lg:gap-[60px] gap-[20px]">
                                                <p>-</p>
                                                <div class="flex md:items-center relative">
                                                    <span class="mt-[5px] md:mt-[0px] shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'ei_toimitettu_2'); ?> value="ei_toimitettu_2" />
                                                    <p class="ml-2 text-[#586B74] flex items-center flex-wrap">TMK1: Työvaiheilmoitusta ei toimitettu.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- another question -->
                                    <div class="help_wrap relative mt-6 text-[#586B74]">
                                        <div class="flex md:items-center max-w-[850px] mx-auto">
                                            <p>-</p>
                                            <p class="mr-3 lg:ml-[60px] ml-[20px] md:min-w-[289px]">Urakoitsijan ilmoitus aikataulutilanteesta</p>
                                            <a href="#!" class="help_click mt-[6px] md:mt-[0px]">
                                                <svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                        <path
                                                            d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13"
                                                            stroke="#000000"
                                                            stroke-width="0.72"
                                                            stroke-linecap="round"
                                                        ></path>
                                                        <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                                    </g>
                                                </svg>
                                            </a>

                                            <hr class="mt-[14px] md:mt-[0px] help_line hidden w-full border border-solid border-[#E1E1EA]" />
                                        </div>

                                        <div
                                            class="help_show hidden text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-3 lg:absolute lg:right-[0px] mt-[10px] mb-[15px] lg:mb[0px] lg:mt-[-55px]"
                                        >
                                            Käydään läpi onko työt saatu aloitettua/milloin aloitetaan ja mikä työvaihe on menossa. Lisäksi käydään läpi muutokset/epävarmuudet loppu urakan aikataulujen suhteen. Mikäli jokin työvaihe
                                            puuttuu tai on epäselvä kirjataan siitä huomiot. Käydään läpi, saadaanko urakka valmiiksi vuokrasopimuksen mukaisesti ja tuleeko asiasta viestiä Tilaajalle ja/tai Vuokralaiselle. Tarkennetaan,
                                            että kokonaisaikataulu on kaikille selvä ja varmistetaan, että urakoitsija on suunnitellut koko aikataulun.
                                        </div>
                                    </div>

                                    <!-- nested 6.3 -->
                                    <div class="max-w-[850px] mx-auto mt-[18px] text-[#586B74]">
                                        <!-- nested 6.3.1 -->
                                        <div class="flex items-center flex-wrap lg:flex-row relative lg:ml-[65px] ml-[20px]">
                                            <div class="flex items-center lg:gap-[50px] gap-[20px]">
                                                <p>o</p>
                                                <p>TMK1:</p>
                                            </div>
                                            <input class="mt-[14px] md:mt-[0px] border md:min-w-[408px] w-[200px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] ml-4 mr-3 font-medium" type="text" name="urakoitsijan_ilmoitus_1" id="urakoitsijan_ilmoitus_1" value="<?php echo esc_attr( noste_check_array_data( $data, "urakoitsijan_ilmoitus_1", 'Työt aloitettu…' ) ); ?>"/>
                                        </div>

                                        <!-- nested 6.3.2 -->
                                        <div class="flex mt-4 items-center flex-wrap lg:flex-row relative lg:ml-[65px] ml-[20px]">
                                            <div class="flex md:items-center lg:gap-[50px] gap-[20px]">
                                                <p>o</p>
                                                <p>TMK1:</p>
                                            </div>
                                            <input class="border mt-[14px] md:mt-[0px] md:min-w-[408px] w-[200px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] ml-4 mr-3 font-medium" type="text" name="urakoitsijan_ilmoitus_2" id="urakoitsijan_ilmoitus_2" value="<?php echo esc_attr( noste_check_array_data( $data, "urakoitsijan_ilmoitus_2", 'Tehty urakan mukaisista töistä…' ) ); ?>"/>
                                        </div>

                                        <!-- nested 6.3.3 -->
                                        <div class="flex mt-4 items-center flex-wrap lg:flex-row relative lg:ml-[65px] ml-[20px]">
                                            <div class="flex items-center lg:gap-[50px] gap-[20px]">
                                                <p>o</p>
                                                <p>TMK1:</p>
                                            </div>
                                            <input class="border mt-[14px] md:mt-[0px] md:min-w-[408px] w-[200px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] ml-4 mr-3 font-medium" type="text" name="urakoitsijan_ilmoitus_3" id="urakoitsijan_ilmoitus_3" value="<?php echo esc_attr( noste_check_array_data( $data, "urakoitsijan_ilmoitus_3", 'Meneillään oleva työvaihe on…' ) ); ?>"/>
                                        </div>

                                        <!-- nested 6.3.4 -->
                                        <div class="flex mt-4 items-center flex-wrap lg:flex-row relative lg:ml-[65px] ml-[20px]">
                                            <div class="flex items-center lg:gap-[50px] gap-[20px]">
                                                <p>o</p>
                                                <p>TMK1:</p>
                                            </div>
                                            <input class="border mt-[14px] md:mt-[0px] md:min-w-[408px] w-[200px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] ml-4 mr-3 font-medium" type="text" name="urakoitsijan_ilmoitus_4" id="urakoitsijan_ilmoitus_4" value="<?php echo esc_attr( noste_check_array_data( $data, "urakoitsijan_ilmoitus_4", 'Valmistuminen vuokrasopimuksen mukaisesti…' ) ); ?>"/>
                                        </div>

                                        <!-- nested 6.3.4 -->
                                        <div class="flex mt-4 items-center flex-wrap lg:flex-row relative lg:ml-[65px] ml-[20px]">
                                            <div class="flex items-center lg:gap-[50px] gap-[20px]">
                                                <p>o</p>
                                                <p>TMK1:</p>
                                            </div>
                                            <input class="border mt-[14px] md:mt-[0px] md:min-w-[408px] w-[200px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] ml-4 mr-3 font-medium" type="text" name="urakoitsijan_ilmoitus_4" id="urakoitsijan_ilmoitus_4" value="<?php echo esc_attr( noste_check_array_data( $data, "urakoitsijan_ilmoitus_4", 'Aikataulussa epävarmuuksia? …' ) ); ?>"/>
                                        </div>
                                    </div>

                                    <!-- another question -->
                                    <div class="help_wrap relative">
                                        <div class="flex items-center lg:flex-row mt-4 max-w-[850px] mx-auto">
                                            <div class="flex items-center gap-[26px] lg:min-w-[120px] lg:ml-[65px] ml-[20px]">
                                                <p>o</p>
                                                <div class="flex items-center">
                                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'tmk1_1'); ?> value="tmk1_1" />
                                                    <p class="ml-2 text-[#586B74]">TMK1:</p>
                                                </div>
                                            </div>
                                            <input class="ml-[10px] lg:ml-[0px] border md:min-w-[408px] w-[60px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] italic mr-3 font-medium" type="text" name="urakoitsijan_ilmoitus_5" id="urakoitsijan_ilmoitus_5" value="<?php echo esc_attr( noste_check_array_data( $data, "urakoitsijan_ilmoitus_5", 'Vapaa teksti…' ) ); ?>"/>
                                            <a href="#!" class="help_click">
                                                <svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                        <path
                                                            d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13"
                                                            stroke="#000000"
                                                            stroke-width="0.72"
                                                            stroke-linecap="round"
                                                        ></path>
                                                        <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                                    </g>
                                                </svg>
                                            </a>

                                            <hr class="help_line hidden w-full my-2 lg:my-0 border border-solid border-[#E1E1EA]" />
                                        </div>

                                        <div class="help_show hidden text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[0px] lg:mt-[-60px] mt-[10px] mb-[15px] lg:mb[0px]">
                                            Tähän voi lisätä jos urakassa on jotain erikoista koordinoitavaa aikataulun osalta, esim käyttäjän asennuksia.
                                        </div>
                                    </div>

                                    <!-- nested 6.3.5 -->
                                    <div class="mt-[18px] flex items-center flex-wrap max-w-[850px] mx-auto">
                                        <div class="flex lg:gap-[60px] gap-[20px]">
                                            <p>-</p>
                                            <div class="flex md:items-center relative">
                                                <span class="mt-[5px] md:mt-[0px] shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'olevien_kirjausten_mukaan'); ?> value="olevien_kirjausten_mukaan" />
                                                <p class="ml-2 text-[#586B74] flex items-center flex-wrap">TMK1: Päivitetään aikataulu yllä olevien kirjausten mukaan. <span class="text-[#00B2A9] italic font-medium"> (U7)</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- nested 6.3 -->
                                <div class="mt-12">
                                    <p class="max-w-[850px] mx-auto">Muut aikatauluasiat:</p>

                                    <!-- nested 6.3.1 -->

                                    <!-- another question -->
                                    <div class="help_wrap relative">
                                        <div class="flex items-center lg:flex-row mt-[19px] max-w-[850px] mx-auto">
                                            <div class="flex items-center lg:min-w-[145px]">
                                                <p class="lg:mr-[60px] mr-[20px]">-</p>
                                                <div class="flex items-center">
                                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'TMK1_2'); ?> value="TMK1_2" />
                                                    <p class="mx-2 text-[#586B74]">TMK1:</p>
                                                </div>
                                            </div>
                                            <input class="border md:min-w-[408px] w-[90px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] mr-3 font-medium" type="text" name="urakoitsijan_ilmoitus_6" id="urakoitsijan_ilmoitus_6" value="<?php echo esc_attr( noste_check_array_data( $data, "urakoitsijan_ilmoitus_6", 'Vapaa teksti…' ) ); ?>"/>
                                            <a href="#!" class="help_click">
                                                <svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                        <path
                                                            d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13"
                                                            stroke="#000000"
                                                            stroke-width="0.72"
                                                            stroke-linecap="round"
                                                        ></path>
                                                        <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                                    </g>
                                                </svg>
                                            </a>

                                            <hr class="help_line hidden w-full my-2 lg:my-0 border border-solid border-[#E1E1EA]" />
                                        </div>

                                        <div
                                            class="help_show hidden text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[0px] lg:mt-[-60px] mt-[10px] mb-[15px] lg:mb[0] z-10"
                                        >
                                            Tässä käydään läpi kaikki toimitusajalliset hankinnat mitä hankkeessa on. Tämä siksi, että varmistutaan että kaikkia tarvikkeita on kysytty jostain ettei tule yllätyksiä. Näitä tyypilllisesti:
                                            <br />
                                            - Lasiseinät ja -ovet <br />
                                            - Lattiamateriaalit <br />
                                            - Ovet <br />
                                            - Sähkökeskukset <br />
                                            - Valaisimet <br />
                                            - Keittiöt <br />
                                            jne.
                                        </div>
                                    </div>

                                    <!-- nested 6.3.2 -->
                                    <div class="max-w-[850px] mx-auto mt-[18px]">
                                        <div class="flex lg:gap-[60px] gap-[20px]">
                                            <p>-</p>
                                            <div>
                                                <p>Toimitusajallisten tuotteiden hankinnan tilanne:</p>
                                                <!-- Toimitusajallisten 1 -->
                                                <div class="flex items-center lg:gap-[60px] gap-[20px] mt-[18px]">
                                                    <p>o</p>
                                                    <input class="border md:min-w-[408px] w-[190px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] font-medium" type="text" name="hankinta_1" id="hankinta_1" value="<?php echo esc_attr( noste_check_array_data( $data, "hankinta_1", 'Hankinta' ) ); ?>" />
                                                </div>

                                                <!-- Toimitusajallisten 2 -->
                                                <div class="mt-6 flex items-center flex-wrap gap-3">
                                                    <div class="flex lg:gap-[60px] gap-[20px]">
                                                        <p>o</p>
                                                        <p>TMK1: [</p>
                                                    </div>

                                                    <!-- 1st nested -->
                                                    <div class="relative flex items-center gap-3">
                                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                                <g id="SVGRepo_iconCarrier">
                                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'urakoitsijalla_selvityksessa'); ?> value="urakoitsijalla_selvityksessa" />
                                                        <p>Urakoitsijalla selvityksessä] [</p>
                                                    </div>

                                                    <!-- 2nd nested -->
                                                    <div class="relative flex items-center gap-3">
                                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                                <g id="SVGRepo_iconCarrier">
                                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'tilattu'); ?> value="tilattu" />
                                                        <p>Tilattu] [</p>
                                                    </div>

                                                    <!-- 3rd nested -->
                                                    <div class="relative flex items-center gap-3">
                                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                                <g id="SVGRepo_iconCarrier">
                                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'Toimituksessa'); ?> value="Toimituksessa" />
                                                        <p class="mr-1">Toimituksessa] [</p>
                                                    </div>

                                                    <!-- 4th nested -->
                                                    <div class="relative flex flex-wrap items-center">
                                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                                <g id="SVGRepo_iconCarrier">
                                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'toimitettu_tyomaalle'); ?> value="toimitettu_tyomaalle" />
                                                        <p class="ml-2">Toimitettu työmaalle]</p>
                                                    </div>
                                                </div>

                                                <!-- Toimitusajallisten 3 -->
                                                <div class="mt-6 flex items-center flex-wrap">
                                                    <div class="flex lg:gap-[60px] gap-[20px]">
                                                        <p>o</p>
                                                        <p class="mr-3">TMK1: Toimitusaika [</p>
                                                    </div>

                                                    <!-- 1st nested -->
                                                    <div class="relative flex items-center gap-3">
                                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                                <g id="SVGRepo_iconCarrier">
                                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'vahvistettu'); ?> value="vahvistettu" />
                                                        <p class="mr-3">vahvistettu vapaa teksti] [</p>
                                                    </div>

                                                    <!-- 2nd nested -->
                                                    <div class="relative flex items-center gap-3">
                                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                                <g id="SVGRepo_iconCarrier">
                                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'arviolta'); ?> value="arviolta" />
                                                        <p class="mr-2">arviolta vapaa teksti] [</p>
                                                    </div>

                                                    <!-- 3rd nested -->
                                                    <div class="relative flex items-center">
                                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                                <g id="SVGRepo_iconCarrier">
                                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'tiedossa'); ?> value="tiedossa" />
                                                        <p class="ml-3">ei vielä tiedossa]</p>
                                                    </div>
                                                </div>

                                                <!-- Toimitusajallisten 4 -->
                                                <div class="mt-[17px] flex items-center flex-wrap">
                                                    <div class="flex lg:gap-[60px] gap-[20px]">
                                                        <p>o</p>
                                                        <div class="flex items-center flex-wrap">
                                                            <p class="text-[#586B74] mr-3">TMK1: Tavarantoimittaja</p>
                                                            <input class="mt-[14px] md:mt-[0px] border md:min-w-[408px] w-[190px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] font-medium" type="text" name="urakoitsijan_ilmoitus_7" id="urakoitsijan_ilmoitus_7" value="<?php echo esc_attr( noste_check_array_data( $data, "urakoitsijan_ilmoitus_7", 'Vapaa teksti…' ) ); ?>"/>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Toimitusajallisten 5 -->
                                                <div class="flex flex-wrap items-center lg:flex-row mt-4 relative">
                                                    <div class="flex items-center lg:gap-[60px] gap-[20px]">
                                                        <p>o</p>
                                                        <div class="flex items-center">
                                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                                    <g id="SVGRepo_iconCarrier">
                                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    </g>
                                                                </svg>
                                                            </span>
                                                            <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'TMK1_3'); ?> value="TMK1_3" />
                                                            <p class="ml-2 text-[#586B74]">TMK1:</p>
                                                        </div>
                                                    </div>
                                                    <input class="mt-[14px] md:mt-[0px] border md:w-[408px] w-[200px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] ml-[10px] font-medium" type="text" name="urakoitsijan_ilmoitus_8" id="urakoitsijan_ilmoitus_8" value="<?php echo esc_attr( noste_check_array_data( $data, "urakoitsijan_ilmoitus_8", 'Vapaa teksti…' ) ); ?>"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- nested 6.4 -->
                                    <div class="mt-[42px]">
                                        <div class="max-w-[850px] mx-auto mt-[18px]">
                                            <p>Työmaatilanne:</p>
                                            <div class="flex lg:gap-[60px] gap-[20px] mt-[18px]">
                                                <p>-</p>
                                                <p class="flex items-center flex-wrap gap-2">
                                                    TMK1: Työmaa on luovutettu urakoitsijan käyttöön
                                                    <span>
                                                        <input class="border w-[104px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] md:mx-2 font-medium" type="text" name="luovutettu_urakoitsijan" id="luovutettu_urakoitsijan" value="<?php echo esc_attr( noste_check_array_data( $data, "luovutettu_urakoitsijan", 'xx.xx.xxxx' ) ); ?>"/>
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="flex lg:gap-[60px] gap-[20px] mt-6">
                                                <p>-</p>
                                                <div>
                                                    <p>Avaimet ja kulkutunnisteet</p>

                                                    <!-- Avaimet ja kulkutunnisteet 1 -->
                                                    <div class="flex lg:gap-[60px] gap-[20px] mt-6">
                                                        <p>o</p>
                                                        <div class="flex lg:items-center relative">
                                                            <span class="mt-[5px] lg:mt-[0px] shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                                    <g id="SVGRepo_iconCarrier">
                                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    </g>
                                                                </svg>
                                                            </span>
                                                            <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'urakoitsijalla_on'); ?> value="urakoitsijalla_on" />
                                                            <p class="ml-2 text-[#586B74] flex items-center flex-wrap">TMK1: Urakoitsijalla on tarvittavat avaimet ja kulkutunnisteet kiinteistössä liikkumiseen.</p>
                                                        </div>
                                                    </div>

                                                    <!-- Avaimet ja kulkutunnisteet 2 -->
                                                    <div class="flex lg:gap-[60px] gap-[20px] mt-6">
                                                        <p>o</p>
                                                        <div class="flex lg:items-center relative">
                                                            <span class="mt-[5px] lg:mt-[0px] shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                                    <g id="SVGRepo_iconCarrier">
                                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    </g>
                                                                </svg>
                                                            </span>
                                                            <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'kulkutunnisteet_myonnetaan'); ?> value="kulkutunnisteet_myonnetaan" />
                                                            <p class="ml-2 text-[#586B74] flex items-center flex-wrap">TMK1: Kulkutunnisteet myönnetään aulasta. Sähköpostiin henkilöiden nimet, työnantajat ja</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- another question -->
                                    <div class="help_wrap relative text-[#586B74]">
                                        <div class="flex items-center max-w-[850px] mx-auto">
                                            <p></p>
                                            <p class="mr-3 lg:ml-[65px] ml-[20px] min-w-[190px] md:min-w-[218px]">kopioksi rakennuttajakonsultti.</p>
                                            <a href="#!" class="help_click">
                                                <svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                        <path
                                                            d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13"
                                                            stroke="#000000"
                                                            stroke-width="0.72"
                                                            stroke-linecap="round"
                                                        ></path>
                                                        <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                                    </g>
                                                </svg>
                                            </a>

                                            <hr class="help_line hidden w-full border border-solid border-[#E1E1EA]" />
                                        </div>

                                        <div
                                            class="help_show hidden text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-3 lg:absolute lg:right-[0px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-65px]"
                                        >
                                            Kuvaus miten sosiaalitilat ja suihkut on järjestetty. Muistutetaan, että kiinteistön tilat tulee olla käytön jälkeen vastaavassa kunnossa kuin ennen niiden ottamista työmaan käyttöön.
                                            Nykytilanne dokumentoidaan esimerkiksi valokuvin urakoitsijan toimesta.
                                        </div>
                                    </div>

                                    <!-- - Avaimet ja kulkutunnisteet 3 -->
                                    <div class="max-w-[850px] mx-auto">
                                        <div class="flex items-center flex-wrap mt-5 relative">
                                            <div class="flex items-center lg:gap-[60px] gap-[20px] lg:ml-[65px] ">
                                                <p>o</p>
                                                <div class="flex items-center">
                                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'urakoitsijan_ilmoitus_9_ck'); ?> value="urakoitsijan_ilmoitus_9_ck" />
                                                    <p class="ml-2 text-[#586B74]">TMK1:</p>
                                                </div>
                                            </div>
                                            <input class="border mt-[14px] md:mt-[0px] md:w-[408px] w-[190px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] ml-[10px] font-medium" type="text" name="urakoitsijan_ilmoitus_9" id="urakoitsijan_ilmoitus_9" value="<?php echo esc_attr( noste_check_array_data( $data, "urakoitsijan_ilmoitus_9", 'Vapaa teksti…' ) ); ?>"/>
                                        </div>

                                        <!-- - Työmaatoimisto ja sosiaalitilat 1 -->
                                        <div class="flex lg:gap-[60px] gap-[20px] mt-[26px]">
                                            <p>-</p>
                                            <div>
                                                <p>Työmaatoimisto ja sosiaalitilat</p>
                                                <div class="flex flex-wrap items-center mt-[18px] relative">
                                                    <div class="flex items-center lg:gap-[60px] gap-[20px]">
                                                        <p>o</p>
                                                        <p class="text-[#586B74]">TMK1:</p>
                                                    </div>
                                                    <input class="border md:w-[408px] w-[130px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] ml-[10px] font-medium" type="text" name="urakoitsijan_ilmoitus_10" id="urakoitsijan_ilmoitus_10" value="<?php echo esc_attr( noste_check_array_data( $data, "urakoitsijan_ilmoitus_10", 'Vapaa teksti…' ) ); ?>"/>
                                                </div>

                                                <div class="flex items-center flex-wrap mt-[18px] relative">
                                                    <div class="flex items-center lg:gap-[60px] gap-[20px]">
                                                        <p>o</p>
                                                        <div class="flex items-center">
                                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                                    <g id="SVGRepo_iconCarrier">
                                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    </g>
                                                                </svg>
                                                            </span>
                                                            <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'urakoitsijan_ilmoitus_11_ck'); ?> value="urakoitsijan_ilmoitus_11_ck" />
                                                            <p class="text-[#586B74] ml-3">TMK1:</p>
                                                        </div>
                                                    </div>
                                                    <input class="mt-[14px] md:mt-[0px] border md:w-[408px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] md:ml-[10px] font-medium" type="text" name="urakoitsijan_ilmoitus_11" id="urakoitsijan_ilmoitus_11" value="<?php echo esc_attr( noste_check_array_data( $data, "urakoitsijan_ilmoitus_11", 'Vapaa teksti…' ) ); ?>"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- - Jätehallinta -->
                                    <div class="help_wrap relative text-[#586B74] mt-[26px]">
                                        <div class="flex items-center max-w-[850px] mx-auto">
                                            <p>-</p>
                                            <p class="mr-3 lg:ml-[60px] ml-[20px]"> Jätehallinta</p>
                                            <a href="#!" class="help_click">
                                                <svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                        <path
                                                            d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13"
                                                            stroke="#000000"
                                                            stroke-width="0.72"
                                                            stroke-linecap="round"
                                                        ></path>
                                                        <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                                    </g>
                                                </svg>
                                            </a>

                                            <hr class="help_line hidden w-full border border-solid border-[#E1E1EA]" />
                                        </div>

                                        <div
                                            class="help_show hidden text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-3 lg:absolute lg:right-[0px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px]"
                                        >
                                        Kuvaus missä jätelava on tai miten jätteiden poisvienti on toteutettu.
                                        </div>
                                    </div>

                                    <!--  -->
                                    <div class="max-w-[850px] mx-auto mt-[18px]">
                                        <div>
                                            <div class="flex items-center flex-wrap mt-[18px] relative">
                                                <div class="flex items-center lg:gap-[60px] gap-[20px] lg:ml-[65px] ml-[20px]">
                                                    <p>o</p>
                                                    <p class="text-[#586B74]">TMK1:</p>
                                                </div>
                                                <input class="border mt-[14px] md:mt-[0px] md:w-[408px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] md:ml-[10px] ml-[20px] font-medium" type="text" name="urakoitsijan_ilmoitus_12" id="urakoitsijan_ilmoitus_12" value="<?php echo esc_attr( noste_check_array_data( $data, "urakoitsijan_ilmoitus_12", 'Vapaa teksti…' ) ); ?>"/>
                                            </div>

                                            <div class="flex items-center flex-wrap mt-[18px] relative">
                                                <div class="flex items-center lg:gap-[60px] gap-[20px] lg:ml-[65px] ml-[20px]">
                                                    <p>o</p>
                                                    <div class="flex items-center">
                                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                                <g id="SVGRepo_iconCarrier">
                                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'urakoitsijan_ilmoitus_13_ck'); ?> value="urakoitsijan_ilmoitus_13_ck" />
                                                        <p class="text-[#586B74] ml-3">TMK1:</p>
                                                    </div>
                                                </div>
                                                <input class="border mt-[14px] md:mt-[0px] md:w-[408px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] md:ml-[10px] ml-[20px] font-medium" type="text" name="urakoitsijan_ilmoitus_13" id="urakoitsijan_ilmoitus_13" value="<?php echo esc_attr( noste_check_array_data( $data, "urakoitsijan_ilmoitus_13", 'Vapaa teksti…' ) ); ?>"/>
                                            </div>
                                        </div>

                                        <!-- - Varastointi -->
                                        <div class="flex lg:gap-[60px] gap-[20px] mt-[26px]">
                                            <p>-</p>
                                            <div>
                                                <p>Varastointi</p>
                                                <div class="flex items-center flex-wrap mt-[18px] ">
                                                    <div class="flex items-center lg:gap-[60px] gap-[20px]">
                                                        <p>o</p>
                                                        <p class="text-[#586B74]">TMK1:</p>
                                                    </div>
                                                    <input class="border md:w-[408px] w-[130px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] ml-[10px] font-medium" type="text" name="urakoitsijan_ilmoitus_14" id="urakoitsijan_ilmoitus_14" value="<?php echo esc_attr( noste_check_array_data( $data, "urakoitsijan_ilmoitus_14", 'Vapaa teksti…' ) ); ?>"/>
                                                </div>

                                                <div class="flex items-center flex-wrap mt-[18px] relative">
                                                    <div class="flex items-center lg:gap-[60px] gap-[20px]">
                                                        <p>o</p>
                                                        <div class="flex items-center">
                                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                                    <g id="SVGRepo_iconCarrier">
                                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    </g>
                                                                </svg>
                                                            </span>
                                                            <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'urakoitsijan_ilmoitus_15_ck'); ?> value="urakoitsijan_ilmoitus_15_ck" />
                                                            <p class="text-[#586B74] ml-3">TMK1:</p>
                                                        </div>
                                                    </div>
                                                    <input class="border mt-[14px] md:mt-[0px] md:w-[408px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] md:ml-[10px] font-medium" type="text" name="urakoitsijan_ilmoitus_15" id="urakoitsijan_ilmoitus_15" value="<?php echo esc_attr( noste_check_array_data( $data, "urakoitsijan_ilmoitus_15", 'Vapaa teksti…' ) ); ?>"/>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- - Pysäköinti -->
                                    <div class="help_wrap relative text-[#586B74] mt-[26px]">
                                        <div class="flex items-center max-w-[850px] mx-auto">
                                            <p>-</p>
                                            <p class="mr-6 lg:ml-[60px] ml-[20px]">Pysäköinti</p>
                                            <a href="#!" class="help_click">
                                                <svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                        <path
                                                            d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13"
                                                            stroke="#000000"
                                                            stroke-width="0.72"
                                                            stroke-linecap="round"
                                                        ></path>
                                                        <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                                    </g>
                                                </svg>
                                            </a>

                                            <hr class="help_line hidden w-full border border-solid border-[#E1E1EA]" />
                                        </div>

                                        <div class="help_show hidden text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-3 lg:absolute lg:right-[0px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-38px]">
                                            Kuvaus onko urakoitsijalle osoitettu autopaikkoja jne.
                                        </div>
                                    </div>

                                        <!-- Pysäköinti nested -->
                                        <div class="max-w-[850px] mx-auto mt-[18px]">
                                        <div class="flex items-center flex-wrap mt-[18px] relative">
                                            <div class="flex items-center lg:gap-[60px] gap-[20px] lg:ml-[65px] ml-[20px]">
                                                <p>o</p>
                                                <p class="text-[#586B74]">TMK1:</p>
                                            </div>
                                            <input class="border mt-[14px] md:mt-[0px] md:w-[408px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] md:ml-[10px] ml-[20px] font-medium" type="text" name="urakoitsijan_ilmoitus_16" id="urakoitsijan_ilmoitus_16" value="<?php echo esc_attr( noste_check_array_data( $data, "urakoitsijan_ilmoitus_16", 'Vapaa teksti…' ) ); ?>"/>
                                        </div>

                                        <div class="flex items-center flex-wrap mt-[18px] relative">
                                            <div class="flex items-center lg:gap-[60px] gap-[20px] lg:ml-[65px] ml-[20px]">
                                                <p>o</p>
                                                <div class="flex items-center">
                                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'urakoitsijan_ilmoitus_17_ck'); ?> value="urakoitsijan_ilmoitus_17_ck" />
                                                    <p class="text-[#586B74] ml-3">TMK1:</p>
                                                </div>
                                            </div>
                                            <input class="border mt-[14px] md:mt-[0px] md:w-[408px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] md:ml-[10px] ml-[20px] font-medium" type="text" name="urakoitsijan_ilmoitus_17" id="urakoitsijan_ilmoitus_17" value="<?php echo esc_attr( noste_check_array_data( $data, "urakoitsijan_ilmoitus_17", 'Vapaa teksti…' ) ); ?>"/>
                                        </div>
                                    </div>

                                    <!-- - Kiinteistön tiedotus -->
                                    <div class="help_wrap relative text-[#586B74] mt-[26px]">
                                        <div class="flex items-center max-w-[850px] mx-auto">
                                            <p>-</p>
                                            <p class="mr-3 lg:ml-[60px] ml-[20px] min-w-[138px]">Kiinteistön tiedotus</p>
                                            <a href="#!" class="help_click">
                                                <svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                        <path
                                                            d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13"
                                                            stroke="#000000"
                                                            stroke-width="0.72"
                                                            stroke-linecap="round"
                                                        ></path>
                                                        <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                                    </g>
                                                </svg>
                                            </a>

                                            <hr class="help_line hidden w-full border border-solid border-[#E1E1EA]" />
                                        </div>

                                        <div class="help_show hidden text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-3 lg:absolute lg:right-[0px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-38px]">
                                        Kuvaus onko tiedotteet jaettu jne.
                                        </div>
                                    </div>

                                    <!-- Kiinteistön tiedotus nested -->
                                    <div class="max-w-[850px] mx-auto mt-[18px]">
                                        <div class="flex items-center flex-wrap mt-[18px] relative">
                                            <div class="flex items-center lg:gap-[60px] gap-[20px] lg:ml-[65px] ml-[20px]">
                                                <p>o</p>
                                                <p class="text-[#586B74]">TMK1:</p>
                                            </div>
                                            <input class="border mt-[14px] md:mt-[0px] md:w-[408px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] md:ml-[10px] ml-[20px] font-medium" type="text" name="urakoitsijan_ilmoitus_18" id="urakoitsijan_ilmoitus_18" value="<?php echo esc_attr( noste_check_array_data( $data, "urakoitsijan_ilmoitus_18", 'Vapaa teksti…' ) ); ?>"/>
                                        </div>

                                        <div class="flex items-center flex-wrap mt-[18px] relative">
                                            <div class="flex items-center lg:gap-[60px] gap-[20px] lg:ml-[65px] ml-[20px]">
                                                <p>o</p>
                                                <div class="flex items-center">
                                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'urakoitsijan_ilmoitus_19_ck'); ?> value="urakoitsijan_ilmoitus_19_ck" />
                                                    <p class="text-[#586B74] ml-3">TMK1:</p>
                                                </div>
                                            </div>
                                            <input class="border mt-[14px] md:mt-[0px] md:w-[408px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] md:ml-[10px] ml-[20px] font-medium" type="text" name="urakoitsijan_ilmoitus_19" id="urakoitsijan_ilmoitus_19" value="<?php echo esc_attr( noste_check_array_data( $data, "urakoitsijan_ilmoitus_19", 'Vapaa teksti…' ) ); ?>"/>
                                        </div>
                                    </div>

                                    <!-- - Muut pääurakoitsijan asiat -->
                                    <div class="help_wrap relative text-[#586B74] mt-[26px]">
                                        <div class="flex items-center max-w-[850px] mx-auto">
                                            <p class="mr-6 min-w-[190px]">Muut pääurakoitsijan asiat</p>
                                            <a href="#!" class="help_click">
                                                <svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                        <path
                                                            d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13"
                                                            stroke="#000000"
                                                            stroke-width="0.72"
                                                            stroke-linecap="round"
                                                        ></path>
                                                        <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                                    </g>
                                                </svg>
                                            </a>

                                            <hr class="help_line hidden w-full border border-solid border-[#E1E1EA]" />
                                        </div>

                                        <div class="help_show hidden text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-3 lg:absolute lg:right-[0px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-38px]">
                                        Käydään läpi mitä asioita pääurakoitsijalla on kirjattu työvaiheilmoituksessa. (TVI)
                                        </div>
                                    </div>

                                    <!-- Muut pääurakoitsijan asiat nested -->
                                    <div class="max-w-[850px] mx-auto mt-[18px]">
                                        <div class="flex items-center flex-wrap mt-[18px] relative">
                                            <div class="flex items-center lg:gap-[60px] gap-[20px] lg:ml-[65px] ml-[20px]">
                                                <p>-</p>
                                                <p class="text-[#586B74]">TMK1:</p>
                                            </div>
                                            <input class="border mt-[14px] md:mt-[0px] md:w-[408px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] md:ml-[10px] ml-[20px] font-medium" type="text" name="urakoitsijan_ilmoitus_20" id="urakoitsijan_ilmoitus_20" value="<?php echo esc_attr( noste_check_array_data( $data, "urakoitsijan_ilmoitus_20", 'Vapaa teksti…' ) ); ?>"/>
                                        </div>

                                        <div class="flex items-center flex-wrap mt-[18px] relative">
                                            <div class="flex items-center lg:gap-[60px] gap-[20px] lg:ml-[65px] ml-[20px]">
                                                <p>-</p>
                                                <div class="flex items-center">
                                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'urakoitsijan_ilmoitus_21_ck'); ?> value="urakoitsijan_ilmoitus_21_ck" />
                                                    <p class="text-[#586B74] ml-3">TMK1:</p>
                                                </div>
                                            </div>
                                            <input class="border mt-[14px] md:mt-[0px] md:w-[408px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] md:ml-[10px] ml-[20px] font-medium" type="text" name="urakoitsijan_ilmoitus_21" id="urakoitsijan_ilmoitus_21" value="<?php echo esc_attr( noste_check_array_data( $data, "urakoitsijan_ilmoitus_21", 'Vapaa teksti…' ) ); ?>"/>
                                        </div>
                                    </div>

                                    <!-- - Tilasuunnittelijan aikatauluasiat -->
                                    <div class="help_wrap relative text-[#586B74] mt-[26px]">
                                        <div class="flex items-center max-w-[850px] mx-auto">
                                            <p class="mr-3 md:min-w-[226px] min-w-[217px]">Tilasuunnittelijan aikatauluasiat</p>
                                            <a href="#!" class="help_click">
                                                <svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                        <path
                                                            d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13"
                                                            stroke="#000000"
                                                            stroke-width="0.72"
                                                            stroke-linecap="round"
                                                        ></path>
                                                        <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                                    </g>
                                                </svg>
                                            </a>

                                            <hr class="help_line hidden w-full border border-solid border-[#E1E1EA]" />
                                        </div>

                                        <div class="help_show hidden text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-3 lg:absolute lg:right-[0px] mt-[10px] mb-[15px] lg:mb[0px] lg:mt-[-45px]">
                                        Tähän kirjataan mikäli tilasuunnittelijan osalta tulee tehdä aikatauluun huomioita. <br> <br> Käyttäjälle tulee tosinaan esimerkiksi kalustus Tilasuunnittelijan kautta. Näin tieto siirtyy kaikille osapuolille.
                                        </div>
                                    </div>

                                    <!-- Tilasuunnittelijan aikatauluasiat -->
                                    <div class="max-w-[850px] mx-auto mt-[18px]">
                                        <div class="flex items-center flex-wrap mt-[18px] relative">
                                            <div class="flex items-center lg:gap-[60px] gap-[20px] lg:ml-[65px] ml-[20px]">
                                                <p>-</p>
                                                <p class="text-[#586B74]">TMK1:</p>
                                            </div>
                                            <input class="border mt-[14px] md:mt-[0px] md:w-[408px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] md:ml-[10px] ml-[20px] font-medium" type="text" name="urakoitsijan_ilmoitus_22" id="urakoitsijan_ilmoitus_22" value="<?php echo esc_attr( noste_check_array_data( $data, "urakoitsijan_ilmoitus_22", 'Vapaa teksti…' ) ); ?>"/>
                                        </div>

                                        <div class="flex items-center flex-wrap mt-[18px] relative">
                                            <div class="flex items-center lg:gap-[60px] gap-[20px] lg:ml-[65px] ml-[20px]">
                                                <p>-</p>
                                                <div class="flex items-center">
                                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'urakoitsijan_ilmoitus_23_ck'); ?> value="urakoitsijan_ilmoitus_23_ck" />
                                                    <p class="text-[#586B74] ml-3">TMK1:</p>
                                                </div>
                                            </div>
                                            <input class="border mt-[14px] md:mt-[0px] md:w-[408px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] md:ml-[10px] ml-[20px] font-medium" type="text" name="urakoitsijan_ilmoitus_23" id="urakoitsijan_ilmoitus_23" value="<?php echo esc_attr( noste_check_array_data( $data, "urakoitsijan_ilmoitus_23", 'Vapaa teksti…' ) ); ?>"/>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- step 6 end -->

                            <!-- step 7 start -->
                            <div class="mt-12 text-[#586B74]">
                                <div class="help_wrap relative">
                                    <div class="flex items-center max-w-[850px] mx-auto">
                                        <h2 class="md:text-2xl text-[20px] text-black font-medium lg:min-w-[345px] md:min-w-[280px] min-w-[222px] mr-2"><span class="lg:mr-16">7.</span>LISÄ- JA MUUTOSTYÖT</h2>
                                        <a href="#!" class="help_click">
                                            <svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                    <path
                                                        d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13"
                                                        stroke="#000000"
                                                        stroke-width="0.72"
                                                        stroke-linecap="round"
                                                    ></path>
                                                    <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                                </g>
                                            </svg>
                                        </a>

                                        <hr class="help_line hidden w-full border border-solid border-[#E1E1EA]" />
                                    </div>

                                    <div class="help_show hidden text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-3 lg:absolute lg:right-[0px] mt-[10px] mb-[15px] lg:mb[0px] lg:mt-[-40px] z-10">
                                    Kirjaa tilanne tähän. Kokouksessa ei ole tarpeen hyväksyä mitään, vaan näihin voidaan palata myöhemmin kun olet rauhassa selvittänyt onko kyseessä lisätyö vai ei ja mikä Tilaajan kanta on kustannukseen.
                                    </div>
                                </div>
                                <div class="max-w-[850px] mx-auto mt-6">
                                    <p>Lisä- ja muutostyötarjoukset tehdään urakkasopimuksen mukaisesti ja tarjoukset tarvittavine laskelmineen ja erittelyineen tulee hyväksyttää rakennuttajalla ennen töiden aloitusta. <br> <br> Huom. Oikeus tilata lisä- ja muutostöitä on vain erikseen urakkasopimuksessa määritetyillä henkilöillä. Suunnittelijalla, muulla asiantuntijalla tai käyttäjän edustajalla ei ole oikeutta antaa muutoksia koskevia määräyksiä.</p>
                                    <p class="mt-8">Hyväksytyt lisätyöt</p>

                                    <!-- Hyväksytyt lisätyöt -->
                                    <div class="mt-6 flex items-center flex-wrap text-[#586B74] lg:ml-[60px] ml-[20px]">
                                        <div class="flex lg:gap-[60px] gap-[20px] md:items-center">
                                            <p>-</p>
                                            <div class="flex md:items-center relative">
                                                <span
                                                    class="mt-[5px] md:mt-[0px] shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer"
                                                    name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'hankinta_2_ck'); ?> value="hankinta_2_ck" />
                                                <p class="ml-2 text-[#586B74] flex items-center flex-wrap gap-2">
                                                    TMK1: LMT
                                                    <span class="flex items-center">
                                                        <input class="border w-[41px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] text-[#283B44] mx-1 font-medium" value="x" type="text" name="hankinta_2" id="hankinta_2" value="<?php echo esc_attr( noste_check_array_data( $data, "hankinta_2", 'x' ) ); ?>" />,
                                                    </span>
                                                    <span><input class="border w-[65px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] text-[#283B44] mx-2 mr-3 font-medium" type="text" name="aihe" id="aihe" value="<?php echo esc_attr( noste_check_array_data( $data, "aihe", 'Aihe' ) ); ?>"/></span>,
                                                <div class="border-b w-[171px] text-[#586B74] md:block hidden mt-3 mx-1"></div>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex items-center flex-wrap gap-3 mt-[20px] lg:mt-[0px]">
                                            <p>€ (alv. 0 %), tilattu</p>
                                            <input class="border w-[131px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] text-[#283B44] mx-1 font-medium" type="text" name="tilattu_1" id="tilattu_1" value="<?php echo esc_attr( noste_check_array_data( $data, "tilattu_1", 'xx.xx.xxxx' ) ); ?>"/>
                                        </div>
                                    </div>

                                    <p class="mt-8">Tarjotut lisätyöt</p>

                                    <!-- Tarjotut lisätyöt -->
                                    <div class="mt-6 flex items-center flex-wrap text-[#586B74] lg:ml-[60px] ml-[20px]">
                                        <div class="flex lg:gap-[60px] gap-[20px] md:items-center">
                                            <p>-</p>
                                            <div class="flex md:items-center relative">
                                                <span
                                                    class="mt-[5px] md:mt-[0px] shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer"
                                                    name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'tilattu_2_ck'); ?> value="tilattu_2_ck" />
                                                <p class="ml-2 text-[#586B74] flex items-center flex-wrap gap-2">
                                                    TMK1: LMT
                                                    <span class="flex items-center">
                                                        <input class="border w-[41px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] text-[#283B44] mx-1 font-medium" type="text" name="tilattu_2" id="tilattu_2" value="<?php echo esc_attr( noste_check_array_data( $data, "tilattu_2", 'x' ) ); ?>"/>,
                                                    </span>
                                                    <span><input class="border w-[65px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] text-[#283B44] mx-2 mr-3 font-medium" type="text" name="aihe_2" id="aihe_2" value="<?php echo esc_attr( noste_check_array_data( $data, "aihe_2", 'Aihe' ) ); ?>"/></span>,
                                                <div class="border-b-2 w-[171px] text-[#586B74] md:block hidden mt-3 mx-1"></div>
                                                </p>
                                            </div>
                                        </div>
                                        <p class="md:mt-[20px] lg:mt-[0px]">€ (alv. 0 %)</p>
                                    </div>

                                    <!-- Muut lisätyöaiheet -->
                                    <p class="mt-8">Muut lisätyöaiheet</p>

                                    <div class="flex items-center flex-wrap mt-6 relative">
                                        <div class="flex items-center lg:gap-[60px] gap-[20px] lg:ml-[60px] ml-[20px]">
                                            <p>-</p>
                                            <div class="flex items-center">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'urakoitsijan_ilmoitus_24_ck'); ?> value="urakoitsijan_ilmoitus_24_ck" />
                                                <p class="text-[#586B74] ml-2">TMK1</p>
                                            </div>
                                        </div>
                                        <input class="border mt-[14px] md:mt-[0px] md:w-[408px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] md:ml-3 ml-[20px] font-medium" type="text" name="urakoitsijan_ilmoitus_24" id="urakoitsijan_ilmoitus_24" value="<?php echo esc_attr( noste_check_array_data( $data, "urakoitsijan_ilmoitus_24", 'Vapaa teksti…' ) ); ?>"/>
                                    </div>
                                    <p class="font-medium text-[#283B44] mt-[34px]">Rakennuttajakonsultti huomautti, että lisätöitä ei saa suorittaa ennen kirjallista hyväksyntää.</p>
                                </div>
                            </div>
                            <!-- step 7 end -->

                            <!-- step 8 start -->
                            <div class="mt-14 text-[#586B74]">
                                <div class="max-w-[850px] mx-auto">
                                    <h2 class="md:text-2xl text-[20px] text-black font-medium lg:min-w-[345px] mr-2"><span class="lg:mr-16">8.</span> TYÖTURVALLISUUS</h2>
                                    <p class="mt-6">Päätoteuttajan vastuut</p>

                                    <div class="flex lg:gap-[60px] gap-[20px] mt-6">
                                        <p>-</p>
                                        <p>Pääurakoitsijana toimiva <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_U1', true ), 'U1') ); ?></span> vastaa työmaan johtovelvollisuuksista ja toimii lainsäädännön tarkoittamana</p>
                                    </div>

                                    <p>työturvallisuudesta vastaavana päätoteuttajana.</p>

                                    <div class="flex lg:gap-[60px] gap-[20px] mt-6">
                                        <p>-</p>
                                        <p class="flex flex-wrap items-center gap-2">Päätoteuttajan työsuojelupäällikkönä ja työturvallisuudesta vastaavana henkilönä toimii<span>
                                            <input
                                            class="border mb-[10px] lg:mb-[0px] lg:w-[157px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] font-medium" type="text" name="tyonjohtaja_u7" id="tyonjohtaja_u7" value="<?php echo esc_attr( noste_check_array_data( $data, "tyonjohtaja_u7", 'työnjohtaja U7' ) ); ?>"/>
                                        </span></p>
                                    </div>

                                    <p class="flex flex-wrap items-center gap-3">Työsuojeluvaltuutettuna toimii <span>
                                        <input class="border w-[39px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] text-[#00B2A9] px-0 pl-[10px] italic font-medium" type="text" name="U7_2" id="U7_2" value="<?php echo esc_attr( noste_check_array_data( $data, "U7_2", 'U7' ) ); ?>"/>
                                    </span></p>
                                </div>

                                <!-- question part -->
                                <div class="help_wrap relative">
                                    <div class="flex md:items-center lg:flex-row mt-[26px] max-w-[850px] mx-auto">
                                        <div class="flex md:items-center lg:gap-[60px] gap-[20px] md:min-w-[320px] min-w-[230px]">
                                            <p>-</p>
                                            <div class="flex md:items-center">
                                                <span class="mt-[5px] md:mt[0px] shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'pilar_U7_ck'); ?> value="pilar_U7_ck" />
                                                <p class="ml-2 text-[#586B74] mr-[13px]">TMK1: Työnjohtajana toimii <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_U7', true ), 'U7') ); ?></span></p>
                                            </div>
                                        </div>
                                        <a href="#!" class="help_click mt-[6px] md:mt-[0px]">
                                            <svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                    <path
                                                        d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13"
                                                        stroke="#000000"
                                                        stroke-width="0.72"
                                                        stroke-linecap="round"
                                                    ></path>
                                                    <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                                </g>
                                            </svg>
                                        </a>
                        
                                        <hr class="help_line mt-[14px] md:mt-[0px] hidden w-full my-2 lg:my-0 border border-solid border-[#E1E1EA]" />
                                    </div>
                        
                                    <div
                                        class="help_show hidden text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-4 lg:absolute lg:right-[0px] lg:mt-[-45px] mt-[10px] mb-[15px] lg:mb[0]"
                                    >
                                    Valitaan jos työturvallisuudesta vastaa joku muu kuin työnjohtaja.
                                    </div>
                                </div>

                                <!-- nested 8.2 -->
                                <div class="max-w-[850px] mx-auto">
                                    <div class="flex lg:gap-[60px] gap-[20px] mt-6">
                                        <p>-</p>
                                        <p>Päätoteuttajan vastuulla on huolehtia verottajan edellyttämästä rakentamisen tiedonantovelvollisuudesta. </p>
                                    </div>
                                    <p>Pääurakoitsija vastaa sekä aliurakoitsijoidensa että kaikkien yhteisellä työmaalla työskentelevien henkilöiden ilmoittamisesta suoraan verottajalle. Päätoteuttajan tiedonantovelvollisuus koskee kaikkia yhteisellä työmaalla työskenteleviä henkilöitä, myös Tilaajan mahdollisiin erillishankintoihin liittyen.</p>

                                    <!-- nested 8.3 -->
                                    <div class="mt-[18px]">
                                        <!-- input field 1 -->
                                        <div class="flex items-center md:flex-row mt-[18px] relative">
                                            <div class="flex items-center lg:gap-[60px] gap-[20px] lg:ml-[60px] ml-[20px]">
                                                <p>o</p>
                                                <p class="text-[#586B74]">TMK1:</p>
                                            </div>
                                            <input
                                                class="border w-full h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] ml-5 font-medium"
                                                type="text"
                                                name="miten_tiedot"
                                                id="miten_tiedot"
                                                value="<?php echo esc_attr( noste_check_array_data( $data, "miten_tiedot", 'Miten tiedot kerätään? (perehdytyksessä, leimauslaitteella, muuten?)' ) ); ?>"
                                                />
                                        </div>

                                        <div class="flex items-center md:flex-row mt-[18px] relative">
                                            <div class="flex items-center lg:gap-[32px] gap-[20px] lg:ml-[60px] ml-[20px]">
                                                <p>o</p>
                                                <div class="flex items-center">
                                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'vapaa_teksti_8_ck'); ?> value="vapaa_teksti_8_ck" />
                                                    <p class="text-[#586B74] ml-3">TMK1:</p>
                                                </div>
                                            </div>
                                            <input class="border w-full h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] ml-5 font-medium" type="text" name="vapaa_teksti_8" id="vapaa_teksti_8" value="<?php echo esc_attr( noste_check_array_data( $data, "vapaa_teksti_8", 'Vapaa teksti' ) ); ?>"/>
                                        </div>
                                    </div>

                                    <!-- input field 2 -->
                                    <div class="flex lg:gap-[60px] gap-[20px] mt-8">
                                        <p>-</p>
                                        <p>Kaikki työmaalla työskentelevät henkilöt on perehdytettävä työmaahan. Perehdyttämisen suorittaa </p>
                                    </div>
                                    <p>päätoteuttaja, myös aliurakoitsijoiden työntekijöille. Pääurakoitsija ylläpitää listaa työmaan työntekijöistä. Pääurakoitsijalla tulee olla aina tiedossa työmaalla työskentelevien henkilöiden nimet, syntymäajat, veronumerot ja heidän palkanmaksajansa.</p>

                                    <div class="mt-[18px]">
                                        <div class="flex items-center md:flex-row mt-[18px] relative">
                                            <div class="flex items-center lg:gap-[60px] gap-[20px] lg:ml-[60px] ml-[20px]">
                                                <p>o</p>
                                                <p class="text-[#586B74]">TMK1:</p>
                                            </div>
                                            <input class="border w-full h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] ml-5 font-medium" type="text" name="tilanne_onko" id="tilanne_onko" value="<?php echo esc_attr( noste_check_array_data( $data, "tilanne_onko", 'Tilanne (onko aliurakoitsijoita/muita toimijoita työmaalla ja onko perehdytetty?)' ) ); ?>"/>
                                        </div>

                                        <div class="flex items-center md:flex-row mt-[18px] relative">
                                            <div class="flex items-center lg:gap-[32px] gap-[20px] lg:ml-[60px] ml-[20px]">
                                                <p>o</p>
                                                <div class="flex items-center">
                                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'vapaa_teksti12_ck'); ?> value="vapaa_teksti12_ck" />
                                                    <p class="text-[#586B74] ml-3">TMK1:</p>
                                                </div>
                                            </div>
                                            <input class="border w-full h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] ml-5 font-medium" type="text" name="vapaa_teksti12" id="vapaa_teksti12" value="<?php echo esc_attr( noste_check_array_data( $data, "vapaa_teksti12", 'Vapaa teksti' ) ); ?>"/>
                                        </div>
                                    </div>

                                    <!-- Tilaajavastuulain mukaiset selvitykset -->
                                    <p class="mt-[33px]">Tilaajavastuulain mukaiset selvitykset</p>
                                    <div class="flex lg:gap-[60px] gap-[20px] mt-6">
                                        <p>-</p>
                                        <p>Pääurakoitsijan selvitykset toimitettu urakkatarjouksen yhteydessä</p>
                                    </div>

                                    <div class="flex lg:gap-[60px] gap-[20px] mt-6">
                                        <p>-</p>
                                        <p>Aliurakoitsijoiden Tilaajavastuulain mukaiset selvitykset:</p>
                                    </div>
                                </div>

                                <!-- another question -->
                                <div class="help_wrap relative">
                                <div class="flex items-center lg:flex-row mt-6 max-w-[850px] mx-auto">
                                <div class="flex items-center gap-[32px] lg:min-w-[120px] lg:ml-[60px] ml-[20px]">
                                <p>o</p>
                                <div class="flex items-center">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                                </span>
                                <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'vapaa_teksti_13_ck'); ?> value="vapaa_teksti_13_ck" />
                                <p class="ml-3 text-[#586B74]">TMK1:</p>
                                </div>
                                </div>
                                <input class="border lg:min-w-[658px] md:min-w-[500px] min-w-[70px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] mr-3 ml-2 font-medium" type="text" name="vapaa_teksti_13" id="vapaa_teksti_13" value="<?php echo esc_attr( noste_check_array_data( $data, "vapaa_teksti_13", 'Vapaa teksti' ) ); ?>"/>
                                <a href="#!" class="help_click">
                                    <svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                            <path
                                                d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13"
                                                stroke="#000000"
                                                stroke-width="0.72"
                                                stroke-linecap="round"
                                            ></path>
                                            <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                        </g>
                                    </svg>
                                </a>

                                <hr class="help_line hidden w-full my-2 lg:my-0 border border-solid border-[#E1E1EA]" />
                                </div>

                                <div
                                    class="help_show hidden text-[#586B74] text-[14px] lg:w-[254px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-4 lg:absolute lg:right-[0px] lg:mt-[-50px] mt-[10px] mb-[15px] lg:mb[0]"
                                    >
                                    Aliurakoitsijoiden läpikäynti ja onko selvitystä toimitettu ja onko huomautettavaa. Huom! jos jollain vastuuvakuutus alle 1.000.000 € niin pyydä päivittämään, tai velvoita pääurakoitsija vastaamaan alijäävältä osuudelta omalla vastuuvakuutuksellaan.
                                </div>
                                </div>

                                <!-- Ilmoitusvelvollisuudet question -->
                                <div class="help_wrap relative text-[#586B74] mt-[40px]">
                                    <div class="flex items-center max-w-[850px] mx-auto">
                                        <p class="mr-3">Ilmoitusvelvollisuudet</p>
                                        <a href="#!" class="help_click">
                                            <svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                    <path
                                                        d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13"
                                                        stroke="#000000"
                                                        stroke-width="0.72"
                                                        stroke-linecap="round"
                                                    ></path>
                                                    <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                                </g>
                                            </svg>
                                        </a>

                                        <hr class="help_line hidden w-full border border-solid border-[#E1E1EA]" />
                                    </div>

                                    <div
                                        class="help_show hidden text-[#586B74] text-[14px] lg:w-[298px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-4 lg:absolute lg:right-[0px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-38px] z-10"
                                    >
                                    LAKI 44/2006 48 § <br> <br> Tulkinta: <br>Rakennustyön ennakkoilmoitus on tehtävä työmaasta, joka on tarkoitettu kestämään kauemmin kuin kuukauden ja jolla itsenäiset työnsuorittajat mukaan lukien työskentelee yhteensä vähintään 10 työntekijää sekä työmaasta, jolla työn määräksi arvioidaan yli 500 henkilötyöpäivää. <br> Yhteisellä rakennustyömaalla päätoteuttaja (pääurakoitsija tai vastaava) tekee alkavasta työmaasta yhden yhteisen alkamisilmoituksen. Sen tulee sisältää tiedot myös ilmoituksenantohetkellä tiedossa olevista sivu- ja aliurakoitsijoista arvioitune työvoimatietoineen. Ilmoituksen tekeminen Ilmoituksen voi tehdä täyttämällä pdf-muotoisen lomakkeen ja toimittamalla sen postitse tai sähköpostin liitteenä sen aluehallintoviraston työsuojelun vastuualueelle, jonka alueella työmaa sijaitsee. Ilmoituksen voi tehdä myös verkkolomakkeella.
                                    </div>
                                </div>

                                <!-- Rakennustyön ennakkoilmoitus -->
                                <div>
                                    <div class="max-w-[850px] mx-auto">
                                        <div class="flex lg:gap-[60px] gap-[20px] mt-6">
                                            <p>-</p>
                                            <p>Rakennustyön ennakkoilmoitus</p>
                                        </div>

                                        <!-- input field 1 -->
                                        <div class="flex items-center lg:flex-row mt-6 relative">
                                            <div class="flex items-center lg:gap-[32px] gap-[20px] lg:ml-[60px] ml-[20px]">
                                                <p>o</p>
                                                <div class="flex items-center">
                                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'vapaa_teksti_14_ck'); ?> value="vapaa_teksti_14_ck" />
                                                    <p class="text-[#586B74] ml-3">TMK1:</p>
                                                </div>
                                            </div>
                                            <input class="border w-full h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] ml-5 font-medium" type="text" name="vapaa_teksti_14" id="vapaa_teksti_14" value="<?php echo esc_attr( noste_check_array_data( $data, "vapaa_teksti_14", 'Vapaa teksti' ) ); ?>" />
                                        </div>
                                    </div>
                                </div>

                                <!-- - Työsuojeluhenkilöilmoitus -->
                                <div>
                                    <!-- question -->
                                    <div class="help_wrap relative text-[#586B74] mt-8">
                                        <div class="flex items-center max-w-[850px] mx-auto">
                                            <div class="flex lg:gap-[60px] gap-[20px]">
                                                <p>-</p>
                                            <p class="mr-4 lg:ml-[60px">Työsuojeluhenkilöilmoitus</p>
                                            </div>
                                            <a href="#!" class="help_click">
                                                <svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                        <path
                                                            d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13"
                                                            stroke="#000000"
                                                            stroke-width="0.72"
                                                            stroke-linecap="round"
                                                        ></path>
                                                        <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                                    </g>
                                                </svg>
                                            </a>

                                            <hr class="help_line hidden w-full border border-solid border-[#E1E1EA]" />
                                        </div>

                                        <div
                                            class="help_show hidden text-[#586B74] text-[14px] lg:w-[298px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-4 lg:absolute lg:right-[0px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-40px]"
                                        >
                                        Vna 2009/205 4 § <br> <br> Päätoteuttajan tulee ennen rakennustyön alkua tehdä asianomaiselle työsuojeluviranomaiselle liitteen 1 mukaiset tiedot sisältävä ennakkoilmoitus työmaasta, joka on tarkoitettu kestämään kauemmin kuin <br> kuukauden ja jolla itsenäiset työnsuorittajat mukaan lukien työskentelee yhteensä vähintään 10 työntekijää sekä työmaasta, jolla työn määräksi arvioidaan yli 500 henkilötyöpäivää. <br> Päätoteuttajan on annettava ennakkoilmoitus tiedoksi myös rakennuttajalle. <br> Päätoteuttajan on pantava ennakkoilmoitus selvästi näkyville rakennustyömaalla ja pidettävä se tarpeellisilta osin ajan tasalla.
                                        </div>
                                    </div>

                                        <!-- input field 1 -->
                                        <div class="max-w-[850px] mx-auto flex items-center lg:flex-row mt-6 relative">
                                        <div class="flex items-center lg:gap-[32px] gap-[20px] lg:ml-[60px] ml-[20px]">
                                            <p>o</p>
                                            <div class="flex items-center">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'vapaa_teksti_15_ck'); ?> value="vapaa_teksti_15_ck" />
                                                <p class="text-[#586B74] ml-3">TMK1:</p>
                                            </div>
                                        </div>
                                        <input class="border w-full h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] ml-5 font-medium" type="text" name="vapaa_teksti_15" id="vapaa_teksti_15" value="<?php echo esc_attr( noste_check_array_data( $data, "vapaa_teksti_15", 'Vapaa teksti' ) ); ?>" />
                                    </div>

                                    <!-- Urakoitsijan turvallisuussuunnitelmat question-->
                                    <div class="help_wrap relative text-[#586B74] mt-10">
                                        <div class="flex items-center max-w-[850px] mx-auto">
                                            <p class="mr-1 md:min-w-[263px] min-w-[224px]">Urakoitsijan turvallisuussuunnitelmat</p>
                                            <a href="#!" class="help_click">
                                                <svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                        <path
                                                            d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13"
                                                            stroke="#000000"
                                                            stroke-width="0.72"
                                                            stroke-linecap="round"
                                                        ></path>
                                                        <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                                    </g>
                                                </svg>
                                            </a>

                                            <hr class="help_line hidden w-full border border-solid border-[#E1E1EA]" />
                                        </div>

                                        <div class="help_show hidden text-[#586B74] text-[14px] lg:w-[298px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-4 lg:absolute lg:right-[0px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-41px] z-10" >
                                        Huom! Pääurakoitsijan turvallisuuteen liittyvissä suunnitelmissa kirjataan vain onko dokumentit vastaanotettu. Voi antaa myös päivitysvaateita (esim jos puuttuu jotain mielestäsi olennaista, kuten varapoistumistie), mutta muuten oikeellisuutta ei kommentoida/hyväksytä suunnitelmia. Vastuu dokumenttien oikeellisuudesta tulee säilyä niiden laatijalla.
                                        </div>
                                    </div>

                                    <!-- - Työmaan turvallisuussuunnitelma -->
                                    <div class="max-w-[850px] mx-auto ">
                                        <div class="flex lg:gap-[60px] gap-[20px] mt-6">
                                            <p>-</p>
                                            <p>Työmaan turvallisuussuunnitelma</p>
                                        </div>
                                            <!-- input field 1 -->
                                        <div class="flex items-center lg:flex-row mt-6 relative">
                                        <div class="flex items-center lg:gap-[32px] gap-[20px] lg:ml-[60px] ml-[20px]">
                                            <p>o</p>
                                            <div class="flex items-center">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'vapaa_teksti_16_ck'); ?> value="vapaa_teksti_16_ck" />
                                                <p class="text-[#586B74] ml-3">TMK1:</p>
                                            </div>
                                        </div>
                                        <input class="border w-full h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] ml-5 font-medium" value="Vapaa teksti" type="text" name="vapaa_teksti_16" id="vapaa_teksti_16" value="<?php echo esc_attr( noste_check_array_data( $data, "vapaa_teksti_16", 'Vapaa teksti' ) ); ?>" />
                                    </div>

                                    <!-- - Pölynhallintasuunnitelma -->
                                    <div class="flex lg:gap-[60px] gap-[20px] mt-12">
                                        <p>-</p>
                                        <p>Pölynhallintasuunnitelma</p>
                                    </div>
                                        <!-- input field 1 -->
                                    <div class="flex items-center lg:flex-row mt-6 relative">
                                    <div class="flex items-center lg:gap-[32px] gap-[20px] lg:ml-[60px] ml-[20px]">
                                        <p>o</p>
                                        <div class="flex items-center">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'vapaa_teksti_17_ck'); ?> value="vapaa_teksti_17_ck" />
                                            <p class="text-[#586B74] ml-3">TMK1:</p>
                                        </div>
                                    </div>
                                    <input class="border w-full h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] ml-5 font-medium" type="text" name="vapaa_teksti_17" id="vapaa_teksti_17" value="<?php echo esc_attr( noste_check_array_data( $data, "vapaa_teksti_17", 'Vapaa teksti' ) ); ?>"/>
                                </div>

                                <!-- input field 2 -->
                                <div class="flex items-center lg:flex-row mt-3 relative">
                                    <div class="flex items-center lg:gap-[32px] gap-[20px] lg:ml-[60px] ml-[20px]">
                                        <p>o</p>
                                        <div class="flex items-center">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'nosti_tasks_ck'); ?> value="nosti_tasks_ck" />
                                            <p class="text-[#586B74] ml-3">TMK1:</p>
                                        </div>
                                    </div>
                                        <textarea class="border w-full h-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[5px] text-[#283B44] ml-5 font-medium" id="nosti_tasks" name="nosti_tasks" rows="2"><?php echo esc_textarea( noste_check_array_data( $data, "nosti_tasks", 'Onko toimenpiteitä noudatettu? (IV-tulppaus, kanavien varastointi suojattuna, kohdepoistot purkutöissä jne.?)' ) ); ?></textarea>
                                </div>

                                <!-- - Työmaan aluesuunnitelma -->
                                <div class="flex lg:gap-[60px] gap-[20px] mt-12">
                                    <p>-</p>
                                    <p>Työmaan aluesuunnitelma</p>
                                </div>

                                </div>
                                </div>

                                <!-- Työmaan aluesuunnitelma question -->
                                <div class="help_wrap relative">
                                    <div class="mt-6 flex items-center max-w-[850px] mx-auto">
                                        <div class="flex flex-wrap lg:flex-row lg:flex-nowrap flex-row-reverse item-center lg:min-w-[520px] lg:ml-[60px] ml-[20px]">
                                        <div class="flex lg:gap-[60px] gap-[20px]">
                                            <p>o</p>
                                            <p class="mr-3">TMK1: [</p>
                                        </div>
                        
                                        <!-- 1st nested -->
                                        <div class="relative flex-wrap flex items-center gap-3">
                                            <span
                                                class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'Laadittu_ck'); ?> value="Laadittu_ck" />
                                            <p class="mr-2">Laadittu.] [</p>
                                        </div>
                        
                                        <!-- 2nd nested -->
                                        <div class="relative flex-wrap flex items-center gap-3">
                                            <span
                                                class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0 top-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'laaditaan_mennessa'); ?> value="laaditaan_mennessa" />
                                            <p class="mr-2">Laaditaan xx.xx.xxxx mennessä.]</p>
                                        </div>
                                    </div>
                        
                                        <!-- 3rd nested -->
                                        <a href="#!" class="help_click">
                                            <svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                    <path
                                                        d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13"
                                                        stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path>
                                                    <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                                </g>
                                            </svg>
                                        </a>
                        
                                        <hr class="help_line hidden w-full border border-solid border-[#E1E1EA]" />
                                    
                                    </div>
                                    <div
                                        class="help_show hidden text-[#586B74] text-[14px] lg:w-[298px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-4 lg:absolute lg:right-[0px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-65px]">
                                        Vna 205/2009 11 § <br> <br> Rakennustyömaa-alueen käytön suunnittelu Päätoteuttajan on esitettävä rakennuttajalle tässä pykälässä tarkoitetut rakennustyömaa-alueen käytön suunnitelmat. <br> Päätoteuttajan on tehtävä kirjallinen rakennustyömaa-alueen käytön suunnitelma. Päätoteuttajan on riittävän järjestelmällisesti selvitettävä ja tunnistettava kyseessä olevan työmaa-alueen yleiseen järjestelyyn, toteutukseen ja käyttöön liittyvät vaara- ja haittatekijät. Tällöin on otettava huomioon myös rakennuttajan turvallisuusasiakirjan tiedot. Vaara- ja haittatekijät on poistettava asianmukaisesti sekä milloin niitä ei voida poistaa, arvioitava niiden merkitys työmaalla työskentelevien ja muille työn vaikutuspiirissä olevien turvallisuudelle ja terveydelle. Rakennustyömaa-alueen käytön suunnittelussa on kiinnitettävä erityistä huomiota tapaturmavaaran ja terveyden haitan poistamisessa ja vähentämisessä ainakin seuraaviin seikkoihin: <br> 1) toimisto-, henkilöstö- ja varastotilojen määrä ja sijainti; <br> 2) nostureiden, koneiden ja laitteiden sijoitus; <br> 3) kaivuu- ja täyttömassojen sijoitus; <br> 4) rakennustarvikkeiden ja -aineiden sekä elementtien lastaus-, purkaus- ja varastointipaikkojen sijoitus; <br> 5) elementtirakentamisessa nostureiden nostopaikkojen perustus ja maapohjan vahvistus, nostureiden nostosäteet ja -kapasiteetit, nosturinkuljettajien mahdollisimman esteetön näköyhteys elementtivarastoon ja asennuskohteeseen; <br> 6) työmaaliikenne sekä sen ja yleisen liikenteen liittymiskohdat; <br> 7) kulku-, nousu- ja kuljetustiet sekä niiden kunnossapito; <br> 8) työmaan järjestys ja siisteys sekä pölyn torjuntaan ja hallintaan tarvittavien rakenteiden ja laitteiden sijoitus; <br> 9) jätteiden sekä turvallisuudelle ja terveydelle vaaraa tai haittaa aiheuttavien materiaalien kerääminen, säilyttäminen, poistaminen ja hävittäminen; <br> 10) palontorjunta; <br> 11) varastointialueiden rajaaminen ja järjestäminen, erityisesti kun käsitellään turvallisuudelle ja terveydelle vaaraa tai haittaa aiheuttavia materiaaleja tai aineita. Rakennustyömaa-alueen käytön suunnittelun keskeiset osat on esitettävä työmaasuunnitelmana kirjallisesti, tarvittaessa rakennus- ja työvaiheittain. Suunnitelmat on tarkistettava olosuhteiden muuttuessa, ja ne on muutenkin pidettävä ajan tasalla.
                                    </div>
                                </div>

                                <!-- - Työmaan aluesuunnitelma -->
                                <div class="max-w-[850px] mx-auto">
                                        <!-- input field 1 -->
                                    <div class="flex items-center lg:flex-row mt-6 relative">
                                    <div class="flex items-center lg:gap-[32px] gap-[20px] lg:ml-[60px] ml-[20px]">
                                        <p>o</p>
                                        <div class="flex items-center">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'vapaa_teksti_18_ck'); ?> value="vapaa_teksti_18_ck" />
                                            <p class="text-[#586B74] ml-3">TMK1:</p>
                                        </div>
                                    </div>
                                    <input class="border w-full h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] ml-5 font-medium" type="text" name="vapaa_teksti_18" id="vapaa_teksti_18" value="<?php echo esc_attr( noste_check_array_data( $data, "vapaa_teksti_18", 'Vapaa teksti' ) ); ?>" />
                                </div>

                                <div class="flex items-center lg:flex-row mt-6 relative">
                                    <div class="flex md:items-center lg:gap-[60px] gap-[20px] lg:ml-[60px] ml-[20px]">
                                        <p>o</p>
                                        <p class="text-[#586B74]">TMK1: Rakennuttajakonsultti huomautti, että työmaasuunnitelma tulee olla näkyvillä työmaalla.</p>
                                    </div>
                                </div>

                                <!-- checkbox -->
                                <div class="mt-6 flex flex-wrap items-center max-w-[850px] mx-auto">
                                    <div class="flex flex-wrap md:item-center lg:ml-[60px] ml-[20px]">
                                        <div class="flex lg:gap-[60px] gap-[20px]">
                                            <p></p>
                                            <p class="mr-3">TMK1: [</p>
                                        </div>
                        
                                        <!-- 1st nested -->
                                        <div class="relative flex md:items-center gap-3">
                                            <span
                                                class="mt-[5px] md:mt-[0px] shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'suunnitelma_nahtavilla'); ?> value="suunnitelma_nahtavilla" />
                                            <p class="mr-2"> Suunnitelma nähtävillä työmaalla.] [</p>
                                        </div>
                        
                                        <!-- 2nd nested -->
                                        <div class="relative flex md:items-center gap-3 mt-[12px] lg:mt-[0px]">
                                            <span
                                                class="mt-[5px] md:mt-[0px] shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'tyomaasuunnitelman_nakyviin'); ?> value="tyomaasuunnitelman_nakyviin" />
                                            <p class="mr-2">Urakoitsija lisää työmaasuunnitelman näkyviin</p>
                                        </div>
                                        
                                    </div>
                                </div>
                                <p class="lg:ml-[60px] ml-[48px]">työmaalle. <span class="text-[#00B2A9] italic font-medium"> (U1)</span> ]</p>

                                </div>

                                <!-- input question -->
                                <div class="help_wrap relative">
                                    <div class="flex lg:flex-row items-center mt-[34px] max-w-[850px] mx-auto">
                                        <div class="flex items-center">
                                            <span
                                                class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'muu_suunnitelma_ck'); ?> value="muu_suunnitelma_ck" />
                                        </div>
                                        <input
                                            class="border lg:min-w-[660px] md:min-w-[560px] min-w-[175px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] mx-3 font-medium"
                                            type="text" name="muu_suunnitelma" id="muu_suunnitelma" value="<?php echo esc_attr( noste_check_array_data( $data, "muu_suunnitelma", 'Muu suunnitelma' ) ); ?>"/>
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
                        
                                        <hr class="help_line hidden w-full my-2 lg:my-0 border border-solid border-[#E1E1EA]" />
                                    </div>
                        
                                    <div class="help_show hidden text-[#586B74] text-[14px] lg:w-[298px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-4 lg:absolute lg:right-[0px] lg:mt-[-50px] mt-[10px] mb-[15px] lg:mb[0]">
                                        Mikäli urakassa on vaarallisia töitä, kuten tulityöt, asbestipurkua jne. tulee näistä olla erillinen
                                        suunnitelma
                                    </div>
                                </div>

                                <!-- input 1 -->
                                <div class="max-w-[850px] mx-auto">
                                    <div class="flex items-center lg:flex-row mt-4 relative">
                                        <div class="flex items-center lg:gap-[32px] gap-[20px] lg:ml-[60px] ml-[20px]">
                                            <p>o</p>
                                            <div class="flex items-center">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'vapaa_teksti_19_ck'); ?> value="vapaa_teksti_19_ck" />
                                                <p class="text-[#586B74] md:ml-3">TMK1:</p>
                                            </div>
                                        </div>
                                        <input class="border w-full h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] ml-5 font-medium" type="text" name="vapaa_teksti_19" id="vapaa_teksti_19" value="<?php echo esc_attr( noste_check_array_data( $data, "vapaa_teksti_19", 'Vapaa teksti' ) ); ?>" />
                                    </div>
                                    <p class="mt-[40px]">Henkilökohtaiset suojavarusteet</p>
                                    <div class="flex lg:gap-[60px] gap-[20px] lg:ml-[60px] ml-[20px] mt-6">
                                        <p>-</p>
                                        <p>Työmaalla tulee käyttää turvallisuusasiakirjassa mainittuja suojavarusteita.</p>
                                    </div>
                                    <p class="mt-[40px]">Kiinteistöä palvelevat järjestelmät</p>
                                    <div class="flex lg:gap-[60px] gap-[20px] lg:ml-[60px] ml-[20px] mt-6">
                                        <p>-</p>
                                        <p>Urakoitsijan on toiminnassaan huomioitava, että kiinteistöä palvelevat ja toiminnassa olevat</p>
                                    </div>
                                    <p class="flex flex-wrap item-center lg:ml-[60px] ml-[20px]">järjestelmät ( <span><input class="border lg:w-[228px] my-[12px] md:my-[0px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] md:ml-[14px] mr-2 font-medium" type="text" name="eivat_hairiinny" id="eivat_hairiinny" value="<?php echo esc_attr( noste_check_array_data( $data, "eivat_hairiinny", 'mm. paloilmaisinjärjestelmä' ) ); ?>"/></span> ) eivät häiriinny rakentamisen aikana.</p>
                                </div>

                                <!-- input question 2 -->
                                <div class="help_wrap relative">
                                    <div class="flex items-center lg:flex-row mt-[34px] max-w-[850px] mx-auto">
                                        <div class="flex items-center">
                                            <span
                                                class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'vapaa_teksti_20_ck'); ?> value="vapaa_teksti_20_ck" />
                                        </div>
                                        <input class="border lg:min-w-[660px] md:min-w-[560px] min-w-[175px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] mx-3 font-medium" type="text" name="vapaa_teksti_20" id="vapaa_teksti_20" value="<?php echo esc_attr( noste_check_array_data( $data, "vapaa_teksti_20", 'Vapaa teksti' ) ); ?>"/>
                                        <a href="#!" class="help_click">
                                            <svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                    <path
                                                        d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13"
                                                        stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path>
                                                    <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                                </g>
                                            </svg>
                                        </a>
                        
                                        <hr class="help_line hidden w-full my-2 lg:my-0 border border-solid border-[#E1E1EA]" />
                                    </div>
                        
                                    <div class="help_show hidden text-[#586B74] text-[14px] lg:w-[382px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-4 lg:absolute lg:right-[0px] lg:mt-[-50px] mt-[10px] mb-[15px] lg:mb[0]">
                                        Mietin onko tarpeen lisätä vielä jokin erityismaininta. Esimerkiksi jokin erityinen turvallisuusriski.
                                    </div>
                                </div>

                                <!-- Rakennuttajan -->
                            <div class="mt-[40px] max-w-[850px] mx-auto">
                                    <div class="flex item-center flex-wrap">
                                        <p>Rakennuttajan turvallisuuskoordinaattorina toimii henkilö [ </p>
                    
                                        <!-- 1st nested -->
                                        <div class="relative flex flex-wrap items-center md:ml-3">
                                            <span
                                                class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'turvallisuuskoordinaattorina_ck'); ?> value="turvallisuuskoordinaattorina_ck" />
                                            <p class="ml-3">P1] [</p>
                                        </div>
                    
                                        <!-- 2nd nested -->
                                        <div class="relative flex flex-wrap items-center md:ml-3">
                                            <span
                                                class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0"
                                                name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'partners_at_noste_oy'); ?> value="partners_at_noste_oy" />
                                            <p class="mr-1 ml-3"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P4', true ), 'P4') ); ?></p>],</p>
                                            <p>Partners at Noste Oy.</p>
                                        </div>
                                    </div>
                                    <p class="mt-[40px]">Rakennuttajan turvallisuusasiakirja.</p>
                                    <div class="flex lg:gap-[60px] gap-[20px] lg:ml-[60px] ml-[20px] mt-6">
                                    <p>-</p>
                                    <p class="flex flex-wrap item-center">Rakennuttaja on laatinut kohteesta turvallisuusasiakirjan ( <span><input
                                    class="border my-[12px] md:my-[0px] lg:w-[96px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] md:ml-[12px] mr-2 font-medium"
                                    type="text" name="jaseonjaettu" id="jaseonjaettu" value="<?php echo esc_attr( noste_check_array_data( $data, "jaseonjaettu", 'xx.xx.xxxx' ) ); ?>"/></span> ) ja se on jaettu
                                    </p>
                                </div>
                                <p class="lg:ml-[60px] ml-[20px]">urakoitsijoille.</p>
                                <div class="flex lg:gap-[60px] gap-[20px] lg:ml-[60px] ml-[20px] mt-6">
                                    <p>-</p>
                                    <p>Mikäli urakoitsija havaitsee tarvetta päivittää turvallisuusasiakirjaa, on tästä ilmoitettava</p>
                                </div>
                                <p class="lg:ml-[60px] ml-[20px]">turvallisuuskoordinaattorille.</p>

                                <p class="mt-[40px]">Työturvallisuuden havainnointi</p>
                                    <div class="flex lg:gap-[60px] gap-[20px] lg:ml-[60px] ml-[20px] md:items-center mt-6">
                                        <p>-</p>
                                        <div class="flex md:items-center relative">
                                            <p class="mr-3">[</p>
                                            <span class="mt-[5px] md:mt-[0px] shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer left-[18px]" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'viikoittainen_tr_mittaus'); ?> value="viikoittainen_tr_mittaus" />
                                            <p class="ml-2 text-[#586B74]">
                                                Viikoittainen TR-mittaus
                                            </p>
                                        </div>
                                    </div>
                                <!--  -->
                                <div class="flex lg:gap-[60px] gap-[20px] lg:ml-[60px] ml-[20px] mt-6">
                                    <p>-</p>
                                    <p>Edellisen viikon TR-mittaus toimitetaan rakennuttajakonsultille ennen työmaakokousta</p>
                                </div>

                            </div>

                            <!-- another question -->
                            <div class="help_wrap relative">
                                <div class="flex max-w-[850px] mx-auto items-center">
                                    <div class="flex items-center lg:gap-[60px] gap-[20px] lg:ml-[60px] ml-[20px] mt-[18px] lg:min-w-[270px] min-w-[203px]">
                                        <p>-</p>
                                        <p class="flex items-center flex-wrap">
                                            Tavoitellaan >
                                            <span><input class="border w-[51px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] mx-2 font-medium"
                                            type="text" name="tavoitellan" id="tavoitellan" value="<?php echo esc_attr( noste_check_array_data( $data, "tavoitellan", 90 ) ); ?>"/></span> %
                                        </p>
                                    </div>
                                    <a href="#!" class="help_click mt-5 ml-[5px] md:ml-[0px]">
                                        <svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                <path
                                                    d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13"
                                                    stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path>
                                                <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                            </g>
                                        </svg>
                                    </a>
                    
                                    <hr class="help_line hidden mt-5 w-full border border-solid border-[#E1E1EA]" />
                                </div>
                                <div
                                    class="help_show hidden text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-4 lg:absolute lg:right-[0px] mt-[10px] mb-[15px] lg:mb[0px] lg:mt-[-45px]">
                                    Turvallisuusasiakirjassa määritetyn mukaisesti.
                                </div>
                            </div>


                            <!-- step 10 start -->
                            <div class="max-w-[850px] mx-auto text-[#586B74] mt-14">
                                <h2 class="md:text-2xl text-[20px] text-black font-medium"><span class="lg:mr-16">10. </span>SUUNNITTELUASIAT</h2>
                                <p class="mt-6">Projektipankki</p>
                                <div class="flex lg:gap-[60px] gap-[20px] mt-6 lg:ml-[60px] ml-[0px]">
                                    <p>-</p>
                                    <p>Urakan suunnitelmat ja loppudokumentit jaetaan:</p>
                                </div>

                                <div class="flex lg:gap-[60px] gap-[20px] items-center lg:ml-[60px] ml-[0px] mt-6">
                                    <p>-</p>
                                    <div class="flex items-center relative">
                                        <p class="mr-3">[</p>
                                        <span
                                            class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer left-[18px]" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'projektipankin_kautta'); ?> value="projektipankin_kautta" />
                                        <p class="ml-2 text-[#586B74]">
                                            Projektipankin kautta
                                        </p>
                                    </div>
                                </div>

                                <!-- many input -->
                                <div class="lg:ml-[123px] ml-[20px]">
                                    <!-- 1st input -->
                                    <div class="flex items-center lg:flex-row mt-4 relative">
                                        <div class="flex items-center lg:gap-[54px] gap-[20px]">
                                            <p>o</p>
                                            <p class="text-[#586B74]">TMK1:</p>
                                        </div>
                                        <input
                                            class="border max-w-[601px] w-full h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] ml-5 font-medium"
                                            type="text" name="mika_pankki" id="mika_pankki" value="<?php echo esc_attr( noste_check_array_data( $data, "mika_pankki", 'Mikä pankki' ) ); ?>"/>
                                    </div>

                                    <!-- 2nd input -->
                                    <div class="flex items-center lg:flex-row mt-4 relative">
                                        <div class="flex items-center lg:gap-[54px] gap-[20px]">
                                            <p>o</p>
                                            <p class="text-[#586B74]">TMK1:</p>
                                        </div>
                                        <input
                                            class="border max-w-[601px] w-full h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] ml-5 font-medium"
                                            type="text" name="tilanne_onko_kaikilla" id="tilanne_onko_kaikilla" value="<?php echo esc_attr( noste_check_array_data( $data, "tilanne_onko_kaikilla", 'Tilanne (Onko kaikilla tunnukset, toimiiko jne.)' ) ); ?>"/>
                                    </div>

                                    <!-- 3rd input -->
                                    <div class="flex items-center lg:flex-row mt-4 relative">
                                        <div class="flex items-center lg:gap-[54px] gap-[20px]">
                                            <p>o</p>
                                            <p class="text-[#586B74]">TMK1:</p>
                                        </div>
                                        <input
                                            class="border max-w-[601px] w-full h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] ml-5 font-medium"
                                            type="text" name="vapaa_teksti_23" id="vapaa_teksti_23" value="<?php echo esc_attr( noste_check_array_data( $data, "vapaa_teksti_23", 'Vapaa teksti' ) ); ?>"/>
                                    </div>
                                </div>

                                <!--  -->
                                <div class="flex lg:gap-[60px] gap-[20px] items-center lg:ml-[60px] ml-[0px] mt-6">
                                    <p>-</p>
                                    <div class="flex items-center relative">
                                        <p class="mr-3">[</p>
                                        <span
                                            class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer left-[18px]" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'sahkopostilla_ck'); ?> value="sahkopostilla_ck" />
                                        <p class="ml-2 text-[#586B74]">
                                            Sähköpostilla
                                        </p>
                                    </div>
                                </div>

                                <!-- input 2-->
                                <div class="flex items-center lg:flex-row mt-[18px] relative">
                                    <div class="flex items-center lg:gap-[54px] gap-[20px] lg:ml-[123px] ml-[20px]">
                                        <p>o</p>
                                        <p class="text-[#586B74]">TMK1:</p>
                                    </div>
                                    <input
                                        class="border max-w-[601px] w-full h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] ml-5 font-medium"
                                        type="text" name="vapaa_teksti_24" id="vapaa_teksti_24" value="<?php echo esc_attr( noste_check_array_data( $data, "vapaa_teksti_24", 'Vapaa teksti' ) ); ?>"/>
                                </div>

                                <!-- input 3 -->
                                <div class="flex items-center mt-8 relative ml-[20px] lg:ml-[0px]">
                                    <span
                                        class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'aihe_3_ck'); ?> value="aihe_3_ck" />
                                    <input
                                        class="border max-w-[660px] w-full h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] mx-3 font-medium"
                                        type="text" name="aihe_3" id="aihe_3" value="<?php echo esc_attr( noste_check_array_data( $data, "aihe_3", 'Aihe' ) ); ?>"/>
                                </div>

                                <!-- input 4 -->
                                <div class="flex items-center lg:flex-row mt-[18px] relative">
                                    <div class="flex items-center lg:gap-[60px] gap-[20px]">
                                        <p>-</p>
                                        <p class="text-[#586B74]">TMK1:</p>
                                    </div>
                                    <input
                                        class="border max-w-[601px] w-full h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] ml-5 font-medium"
                                        type="text" name="vapaa_teksti_25" id="vapaa_teksti_25" value="<?php echo esc_attr( noste_check_array_data( $data, "vapaa_teksti_25", 'Vapaa teksti' ) ); ?>"/>
                                </div>

                            </div>
                            <!-- step 10 end -->

                            <!-- step 11 start -->
                            <div class="max-w-[850px] mx-auto text-[#586B74] mt-14">
                                <h2 class="md:text-2xl text-[20px] text-black font-medium"><span class="lg:mr-16">11. </span>RAKENNUTTAJAN ASIAT</h2>

                                <p class="mt-6">Urakoitsijan on kiinnitettävä huomiota, ettei meluavia töitä suoriteta arkisin klo <span class="text-[#FE3B2D]"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K7', true ), 'K7') ); ?></span> välisenä aikana.</p>

                                <!-- input 1 -->
                                <div class="flex items-center mt-[18px] relative">
                                    <span
                                        class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'aihe_4_ck'); ?> value="aihe_4_ck" />
                                    <input
                                        class="border max-w-[660px] w-full h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] mx-3 font-medium"
                                        value="Aihe" type="text" name="aihe_4" id="aihe_4" value="<?php echo esc_attr( noste_check_array_data( $data, "aihe_4", 'Aihe' ) ); ?>"/>
                                </div>

                                <!-- input 2 -->
                                <div class="flex items-center lg:flex-row mt-4 relative">
                                    <div class="flex items-center lg:gap-[60px] gap-[20px] lg:ml-[120px] ml-[20px]">
                                        <p>-</p>
                                        <p class="text-[#586B74]">TMK1:</p>
                                    </div>
                                    <input
                                        class="border max-w-[601px] w-full h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] ml-5 font-medium"
                                        type="text" name="vapaa_teksti_26" id="vapaa_teksti_26" value="<?php echo esc_attr( noste_check_array_data( $data, "vapaa_teksti_26", 'Vapaa teksti' ) ); ?>"/>
                                </div>
                            </div>
                            <!-- step 11 end -->

                            <!-- step 12 start -->
                            <div class="max-w-[850px] mx-auto text-[#586B74] mt-14">
                                <h2 class="md:text-2xl text-[20px] text-black font-medium"><span class="lg:mr-16">12. </span>KÄYTTÄJIEN ASIAT</h2>

                                <p class="mt-6">Urakoitsijan on kiinnitettävä huomiota, ettei meluavia töitä suoriteta arkisin klo <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K7', true ), 'K7') ); ?></span> välisenä aikana.</p>
                            </div>

                                <!-- input question 2 -->
                            <div class="help_wrap relative">
                                <div class="flex items-center lg:flex-row mt-[18px] max-w-[850px] mx-auto">
                                    <div class="flex items-center">
                                        <span
                                            class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer"
                                            name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'vapaa_teksti_27_ck'); ?> value="vapaa_teksti_27_ck" />
                                    </div>
                                    <input class="border lg:min-w-[660px] md:min-w-[560px] max-w-[173px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] mx-3 font-medium" type="text" name="vapaa_teksti_27" id="vapaa_teksti_27" value="<?php echo esc_attr( noste_check_array_data( $data, "vapaa_teksti_27", 'Vapaa teksti' ) ); ?>"/>
                                    <a href="#!" class="help_click">
                                        <svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                <path
                                                    d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13"
                                                    stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path>
                                                <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                            </g>
                                        </svg>
                                    </a>
                    
                                    <hr class="help_line hidden w-full my-2 lg:my-0 border border-solid border-[#E1E1EA]" />
                                </div>
                    
                                <div
                                    class="help_show hidden text-[#586B74] text-[14px] lg:w-[382px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-4 lg:absolute lg:right-[-300px] lg:mt-[-45px] mt-[10px] mb-[15px] lg:mb[0] z-10">
                                    Esim. valitukset jne. viestit ja toiveet
                                </div>
                            </div>

                            <!-- input 2 -->
                            <div class="flex items-center lg:flex-row mt-4 relative max-w-[850px] mx-auto">
                                <div class="flex items-center lg:gap-[60px] gap-[20px] lg:ml-[120px] ml-[20px]">
                                    <p>-</p>
                                    <p class="text-[#586B74]">TMK1:</p>
                                </div>
                                <input class="border max-w-[601px] w-full h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] ml-5 font-medium"
                                    type="text" name="vapaa_teksti_28" id="vapaa_teksti_28" value="<?php echo esc_attr( noste_check_array_data( $data, "vapaa_teksti_28", 'Vapaa teksti' ) ); ?>"/>
                            </div>
                            <!-- step 12 end -->

                            <!-- step 13 start -->
                            <div class="max-w-[850px] mx-auto text-[#586B74] mt-14">
                                <h2 class="md:text-2xl text-[20px] text-black font-medium"><span class="lg:mr-16">13. </span>TYÖMAAKIERROS</h2>

                                <p class="mt-6">Urakoitsijan on kiinnitettävä huomiota, ettei meluavia töitä suoriteta arkisin klo <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K7', true ), 'K7') ); ?></span> välisenä aikana.</p>

                                <!-- checkbox -->
                                <div class="flex flex-wrap item-center lg:ml-[60px] ml-[0px] mt-6">
                                    <div class="flex lg:gap-[60px] gap-[20px]">
                                        <p>-</p>
                                        <p class="mr-3">TMK1: [</p>
                                    </div>
                    
                                    <!-- 1st nested -->
                                    <div class="relative flex items-center gap-3">
                                        <span
                                            class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'Kokouksen_jalkeen'); ?> value="Kokouksen_jalkeen" />
                                        <p class="mr-3"> Kokouksen jälkeen] [</p>
                                    </div>
                    
                                    <!-- 2nd nested -->
                                    <div class="relative flex items-center gap-3">
                                        <span
                                            class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'kokousta_tehtiin_ck'); ?> value="kokousta_tehtiin_ck" />
                                        <p class="mr-2">Ennen kokousta] tehtiin yhteinen kierros työmaalla.</p>
                                    </div>
                                    
                                </div>
                            </div>

                            <!-- checkbox question -->
                            <div class="help_wrap relative">
                                <div class="mt-6 flex items-center max-w-[850px] mx-auto text-[#586B74]">
                                    <div class="flex flex-wrap item-center lg:min-w-[370px] lg:ml-[60px] ml-[0px]">
                                        <div class="flex lg:gap-[60px] gap-[20px]">
                                            <p>-</p>
                                            <p class="mr-3">TMK1: [</p>
                                        </div>
                    
                                        <!-- 2nd nested -->
                                        <div class="relative flex md:items-center gap-3">
                                            <span
                                                class="mt-[5px] md:mt-[0px] shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'tarkistettiin_seuraavat_ck'); ?> value="tarkistettiin_seuraavat_ck" />
                                            <p class="mr-2 min-w-[190px] md:min-w-[0px]">Tarkistettiin seuraavat asiat</p>
                                        </div>
                                    </div>
                    
                                    <!-- 3rd nested -->
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
                                    <hr class="help_line hidden w-full border border-solid border-[#E1E1EA]" />
                                </div>
                                <div
                                    class="help_show hidden text-[#586B74] text-[14px] lg:w-[382px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-4 lg:absolute lg:right-[-300px] mt-[10px] lg:mt-[-45px] z-10">
                                    Mikäli jokin yllä keskusteltu asia vaatii tarkastelua paikan päällä.
                                </div>
                            </div>

                            <div class="max-w-[850px] mx-auto text-[#586B74] mt-3">
                                    <!-- input -->
                                <div class="flex items-center lg:flex-row relative">
                                    <div class="flex items-center lg:gap-[60px] gap-[20px] lg:ml-[125px] ml-[0px]">
                                    <p>o</p>
                                    <p class="text-[#586B74]">TMK1:</p>

                                    </div>
                                    <div class="flex items-center ml-4">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'sovittu_toimenpide_ck'); ?> value="sovittu_toimenpide_ck" />
                                    </div>
                                    <input
                                    class="border max-w-[573px] w-full h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] ml-4 font-medium"
                                    type="text" name="aihe_ja_kommentti" id="aihe_ja_kommentti" value="<?php echo esc_attr( noste_check_array_data( $data, "aihe_ja_kommentti", 'Aihe ja kommentti/sovittu toimenpide' ) ); ?>"/>
                                </div>

                                <!-- checkbox -->
                                <div class="flex item-center flex-wrap lg:ml-[60px] ml-[0px] mt-[10px]">
                                    <div class="flex lg:gap-[60px] gap-[20px] md:items-center">
                                        <p>-</p>
                                        <p class="mr-3">TMK1: </p>
                                    </div>
                
                                    <!-- 2nd nested -->
                                    <div class="relative flex md:items-center gap-3">
                                        <span
                                            class="mt-[5px] md:mt-[0px] shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0"
                                            name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'tyomaalta_liitteessa_ck'); ?> value="tyomaalta_liitteessa_ck" />
                                        <p>Kuvat työmaalta liitteessä</p>
                                        <input
                                        class="border w-[39px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] pl-[14px] font-medium text-[#283B44]"
                                        type="text" name="kuvat_tyomaalta" id="kuvat_tyomaalta" value="<?php echo esc_attr( noste_check_array_data( $data, "kuvat_tyomaalta", '3' ) ); ?>"/>
                                    </div>
                                </div>

                                <!--  -->
                                <div class="flex flex-wrap item-center lg:ml-[60px] ml-[0px] mt-3">
                                    <div class="flex lg:gap-[60px] gap-[20px] items-center">
                                        <p>-</p>
                                        <p class="mr-3">TMK1: [</p>
                                    </div>
                
                                    <!-- 2nd nested -->
                                    <div class="relative flex md:items-center gap-3">
                                        <span
                                            class="mt-[5px] md:mt-[0px] shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'yhteista_kierrosta'); ?> value="yhteista_kierrosta" />
                                        <p>Ei pidetty yhteistä kierrosta työmaalla, koska vapaa teksti.]</p>
                                    </div>
                                </div>
                            </div>
                            <!-- step 13 end -->

                            <!-- step 14 start -->
                            <div class="max-w-[850px] mx-auto text-[#586B74] mt-14">
                                <h2 class="md:text-2xl text-[20px] text-black font-medium"><span class="lg:mr-16">14. </span> MUUT ASIAT</h2>

                                <!-- input 1 -->
                                <div class="flex items-center mt-[18px] relative">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'aihe_5_ck'); ?> value="aihe_5_ck" />
                                    <input class="border max-w-[660px] w-full h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] mx-3 font-medium" value="Aihe" type="text" name="aihe_5" id="aihe_5" value="<?php echo esc_attr( noste_check_array_data( $data, "aihe_5", 'Aihe' ) ); ?>"/>
                                </div>

                                <!-- input 2 -->
                                <div class="flex items-center lg:flex-row mt-4 relative">
                                    <div class="flex items-center lg:gap-[60px] gap-[20px] lg:ml-[130px] ml-[20px]">
                                        <p>-</p>
                                        <p class="text-[#586B74]">TMK1:</p>
                                    </div>
                                    <input class="border max-w-[601px] w-full h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] ml-5 font-medium" type="text" name="vapaa_teksti_29" id="vapaa_teksti_29" value="<?php echo esc_attr( noste_check_array_data( $data, "vapaa_teksti_29", 'Vapaa teksti' ) ); ?>"/>
                                </div>
                            </div>
                            <!-- step 14 end -->

                            <div class="max-w-[850px] mx-auto text-[#586B74] mt-14">

                                <!-- step 15 start -->
                                <div>
                                    <h2 class="md:text-2xl text-[20px] text-black font-medium"><span class="lg:mr-16">15. </span> SEURAAVAT KOKOUKSET</h2> 

                                    <!-- input 2 -->
                                    <div class="flex items-center lg:flex-row mt-6 relative">
                                    <p class="text-[#586B74]">TMK1:</p>
                                    <input class="border max-w-[601px] w-full h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] ml-5 font-medium"
                                        type="text" name="vapaa_teksti_30" id="vapaa_teksti_30" value="<?php echo esc_attr( noste_check_array_data( $data, "vapaa_teksti_30", 'Vapaa teksti' ) ); ?>"/>
                                </div>
                                <p class="mt-[17px]">Rakennuttajakonsultti lähettää kokouskutsun. <span class="font-medium text-[#283B44]">(NOSTE)</span></p>
                                </div>
                                <!-- step 15 end -->

                                <!-- step 16 start -->
                                <div class="mt-14 text-[#586B74]">
                                    <h2 class="md:text-2xl text-[20px] text-black font-medium"><span class="lg:mr-16">16. </span>KOKOUKSEN PÄÄTTÄMINEN</h2> 

                                    <div class="flex item-center gap-3 mt-[18px]">
                                        <p>Puheenjohtaja päätti kokouksen klo</p>
                                        <input
                                        class="border w-[96px] h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] font-medium" type="text" name="puheenjohtaja" id="puheenjohtaja" value="<?php echo esc_attr( noste_check_array_data( $data, "puheenjohtaja", 'xx.xx' ) ); ?>"/>
                                    </div>

                                    <!-- checkbox -->
                                    <div class="mt-6">
                                        <p>Pöytäkirjan vakuudeksi</p>
                                        <!-- 1st nested -->
                                        <div class="relative flex items-center">
                                            [
                                            <div class="flex items-center">
                                                <span
                                                class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center mx-3">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0 left-[14px]" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'pilar_P1_ck'); ?> value="pilar_P1_ck" />
                                            </div>
                                            <p class="text-[#00B2A9] italic"><?php noste_check_empty_2($project_id, 'P1'); ?></p>
                                            <p> ] [</p>
                                            <div class="flex items-center relative">
                                                <span
                                                class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center mx-3">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0 left-[14px]" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'pilar_P4_ck'); ?> value="pilar_P4_ck" />
                                            </div>
                                            <p class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P4', true ), 'P4') ); ?></p>]</p>
                                        </div>
                                        <p>Partners at Noste Oy</p>
                                    </div>

                                    <p class="mt-8">Pöytäkirja tarkastetaan ja vahvistetaan hyväksytyksi allekirjoituksilla seuraavassa <br> työmaakokouksessa. Pöytäkirjan allekirjoittavat rakennuttajan ja pääurakoitsijan edustajat. <br> Virheet korjataan seuraavan työmaakokouksen pöytäkirjaan.</p>

                                    <p class="text-[#586B74] mt-8">
                                        <span class="lg:flex items-center gap-2">
                                            [
                                            <label class="relative inline-flex md:items-center gap-2">
                                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center mx-1">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0" <?php noste_checkbox_attrset('pilar_TY1', $data); ?> />
                                            </label>
                                            Sopijapuolet ovat allekirjoittaneet tämän pöytäkirjan sähköisesti. Pöytäkirja on pätevä, kun
                                        </span>
                                        molemmat osapuolet ovat sen allekirjoittaneet. Kumpikin sopijapuoli tallentaa ja/tai tulostaa <br>
                                        allekirjoituspalvelujärjestelmästä oman asiakirjakappaleensa.]
                                    </p>
                            
                                    <!-- checkbox -->
                                    <div class="relative flex items-center mt-14">
                                        <span
                                            class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'tilaajan_edustaja_ck'); ?> value="tilaajan_edustaja_ck" />
                                    </div>

                                    <!-- between section -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 mt-14 lg:gap-[150px] gap-[24px]">
                                        <div class="col-span-1">
                                            <div class="border-b-2 w-full text-[#94969C] md:block hidden mb-6"></div>
                                                <p>Tilaajan edustaja</p>
                                                <!-- 1st nested -->
                                                <div class="relative flex items-center">
                                                    [
                                                    <div class="relative flex items-center">
                                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center mx-3">
                                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <input type="checkbox" class="checkbox_change absolute opacity-0 left-[16px]" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'tilaajan_edustaja_2_ck'); ?> value="tilaajan_edustaja_2_ck" />
                                                    </div>
                                                    <p class="text-[#00B2A9] italic">P1 </p> ]
                                                    <div class="relative flex items-center">
                                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center mx-3">
                                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <input type="checkbox" class="checkbox_change absolute opacity-0 left-[16px]" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'partners_at_noste_2_ck'); ?> value="partners_at_noste_2_ck" />
                                                    </div>
                                                    <p class="text-[#00B2A9] italic">P4 </p> ]
                                                </div>
                                                <p>Partners at Noste Oy</p>
                                        </div>
                            
                                        <div class="col-span-1">
                                            <div class="border-b-2 w-full text-[#94969C] md:block hidden mb-6"></div>
                                                <p>Urakoitsijan edustaja</p>
                                                <!-- 1st nested -->
                                                <div class="relative flex items-center">
                                                    [
                                                    <div class="relative flex items-center">
                                                        <span
                                                        class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center mx-3">
                                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <input type="checkbox" class="checkbox_change absolute opacity-0 left-[16px]" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'pilar_P1_2_ck'); ?> value="pilar_P1_2_ck" />
                                                    </div>
                                                    
                                                    <p class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P1', true ), 'P1') ); ?></p>
                                                    <p>] </p>
                                                    <div class="relative flex items-center">
                                                        <span
                                                        class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center mx-3">
                                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <input type="checkbox" class="checkbox_change absolute opacity-0 left-[16px]" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'pilar_P4_2_ck'); ?> value="pilar_P4_2_ck" />
                                                    </div>
                                                    <p class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P4', true ), 'P4') ); ?></p>]
                                                </div>
                                                <p class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_U1', true ), 'U1') ); ?></p>
                                        </div>
                                    </div>
                            
                                </div>
                                <!-- step 16 end -->
                            </div>

                            <!-- another 16 -->
                            <div class="help_wrap relative">
                                <div class="mt-6 flex max-w-[850px] mx-auto items-center">
                                    <a href="#!" class="help_click">
                                        <svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                <path
                                                    d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13"
                                                    stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path>
                                                <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                            </g>
                                        </svg>
                                    </a>
                    
                                    <hr class="help_line hidden w-full border border-solid border-[#E1E1EA]" />
                                </div>
                                <div
                                    class="help_show hidden text-[#586B74] text-[14px] lg:w-[382px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-4 lg:absolute lg:right-[-300px] mt-[10px] lg:mt-[-40px]">
                                    Muista toimittaa PTK myös Tilaajalle ja kiinteistöpäällikölle kokouksessa mukana olleiden lisäksi.
                                </div>
                            </div>

                            <div class="max-w-[850px] mx-auto text-[#586B74] mt-5">
                                <p>Liitteet:</p>
                                    <div class="relative flex items-center gap-3 mt-6">
                                        <span
                                            class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'ei_liitteita'); ?> value="ei_liitteita" />
                                        <p class="mr-3"> Ei liitteitä</p>
                                    </div>

                                    <!-- input field -->
                                    <div class="flex flex-wrap items-center mt-4">
                                        <div class="flex items-center relative">
                                            <span
                                                class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] min-w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change lg:absolute opacity-0 cursor-pointer" name="noste_check[]" <?php noste_is_checked($data['noste_check'], 'liite1_ck'); ?> value="liite1_ck" />
                                        </div>
                                        <p class="text-[#586B74] ml-3 md:mr-[20px] lg:mr-[0px]">Liite 1</p>
                                    <input
                                        class="border lg:max-w-[601px] md:max-w-[500px] w-full h-8 shadow-[0_0_5px_2px_rgb(81,244,200,44%)] rounded-md border-[#06F9B7] py-[10px] text-[#283B44] lg:ml-5 mt-[12px] lg:mt-[0px] font-medium"
                                        type="text" name="vapaa_teksti_31" id="vapaa_teksti_31" value="<?php echo esc_attr( noste_check_array_data( $data, "vapaa_teksti_31", 'Vapaa teksti' ) ); ?>"/>
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