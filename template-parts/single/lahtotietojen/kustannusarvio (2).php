<?php 

if (!is_singular('projektitiedot')) {return;}

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
                
                <form action="<?php echo esc_url(get_permalink(get_the_ID())); ?>" method="post" enctype="multipart/form-data" class="ajax-submit">
                    <?php wp_nonce_field('project_step_form_validation', 'project_step_form__nonce_field'); ?>
                    <input type="hidden" name="ptname" value="<?php echo esc_attr(get_the_ptname()); ?>">
                    <input type="hidden" name="action" value="noste_update_project_step">
                    <input type="hidden" name="post_id" value="<?php echo esc_attr( $project_id ); ?>">

                    
                    <!-- Card Body -->
                    <div class="px-4 md:px-8 pt-6 pb-10 lg:h-[645px] overflow-y-auto no-scrollbar scroll-smooth"> 
                        <div class="max-w-[750px] mx-auto mt-10">
                            <span class="font-medium italic text-[#00B2A9] block"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K1', true ), 'K1') ); ?></span>
                            <span class="font-medium italic text-[#00B2A9] block"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K4', true ), 'K4') ); ?></span>
                            <div class="text-right">
                                <span class="font-medium italic text-[#00B2A9] block">xx.xx.xxxx</span>
                            </div>
                        </div>

                        <div class="help_wrap my-10 relative">
                            <div class="max-w-[750px] mx-auto">
                                <div class="flex flex-col lg:flex-row lg:items-center gap-2">
                                    <input type="text" name="pilar_filed8_1" class="shadow-input max-w-[310px] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Vuokralaismuutoksen kustannusarvio (alv. 0%)">
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
                        
                                    <hr class="help_line hidden w-full border border-solid border-[#E1E1EA]">
                                </div>
                            </div>
                        
                            <div class="help_show hidden text-[#586B74] text-[14px] lg:w-[240px] 2xl:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px]">
                                Minkä tyyppinen muutostyö on kyseessä
                            </div>
                        </div>
            
                        <div class="max-w-[750px] mx-auto mb-5">
                            <h3 class="text-accent text-[17px] italic font-medium"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K4', true ), 'K4') ); ?></h3>
                        </div>

                        <div class="mb-3">
                            <div class="max-w-[750px] mx-auto">
                                <div class="flex flex-wrap mb-4">
                                    <label class="flex-[3] mr-4 text-sm font-medium text-black">Tilan pinta-ala:</label>
                                    <p class="flex-[3] text-sm text-black"> <span class="text-accent italic font-medium"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_M5', true ), 'M5') ); ?></span> m<sup>2</sup></p>
                                </div>
                            </div>
                        </div>

                        <div class="help_wrap mt-10 mb-4 relative">
                            <div class="max-w-[880px] mx-auto flex items-center gap-2">
                                <table class="w-full whitespace-nowrap border-collapse">
                                    <thead class="text-left rounded-t-lg bg-accent text-white">
                                        <tr class="rounded-lg">
                                            <th class="bg-white"></th>
                                            <th class="p-3 w-56">Tehtävät:</th>
                                            <th class="p-3">Status:</th>
                                            <th class="p-3">Dokumentit:</th>
                                            <th class="p-3">Kommentti:</th>
                                            <th class="p-3"></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <!-- 1st Body -->
                                        <tr>
                                            <td></td>
                                            <td colspan="5" class="px-4 py-3 border border-line">
                                                <h4 class="text-normal italic text-accent"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_TY1', true ), 'TY1') ); ?></h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td class="px-4 py-3 border border-line">
                                                <div class="flex items-center gap-3">
                                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g stroke-width="0"></g>
                                                                <g stroke-linecap="round" stroke-linejoin="round"></g>
                                                                <g>
                                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_filed2_1">
                                                    </label>
                                                    <input type="text" name="pilar_filed8_2" class="shadow-input w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 border border-line text-sm">
                                                <div class="flex items-center border border-solid border-accent shadow-input rounded-lg">
                                                    <input type="text" name="pilar_filed8_3" class="w-[100%] lg:w-[81%] rounded-[5px] p-2 rounded-l-lg">
                                                    <select id="measured1" class="bg-[#F6F8FF] border border-[#E1E1EA] text-black text-sm rounded-r-lg px-1">
                                                        <option selected value="kpl">kpl</option>
                                                        <option value="m2">m <sup>2</sup> </option>
                                                        <option value="erä">erä</option>
                                                        <option value="kpl">kpl</option>
                                                        <option value="jm">jm</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 border border-line">
                                                <div class="flex items-center gap-3">
                                                    <input type="text" name="pilar_filed8_4" value="500" class="shadow-input w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                                    <label class="inline-flex items-center gap-2 cursor-pointer text-[#586B74]">
                                                        € / kpl
                                                    </label>
                                                    
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 border border-line">
                                                <label class="inline-flex items-center gap-2 cursor-pointer text-[#586B74]">2 500 € </label>
                                            </td>

                                            <td class="px-4 py-3 border border-line">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td class="px-4 py-3 border border-line">
                                                <div class="flex items-center gap-3">
                                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g stroke-width="0"></g>
                                                                <g stroke-linecap="round" stroke-linejoin="round"></g>
                                                                <g>
                                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_filed2_2">
                                                    </label>
                                                    <input type="text" name="pilar_filed8_5" class="shadow-input w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 border border-line text-sm">
                                                <div class="flex items-center border border-solid border-accent shadow-input rounded-lg">
                                                    <input type="text" name="pilar_filed8_6" class="w-[100%] lg:w-[81%] rounded-[5px] p-2 rounded-l-lg">
                                                    <select id="measured2" class="bg-[#F6F8FF] border border-[#E1E1EA] text-black text-sm rounded-r-lg px-1">
                                                        <option selected value="kpl">kpl</option>
                                                        <option value="m2">m<sup>2</sup></option>
                                                        <option value="erä">erä</option>
                                                        <option value="kpl">kpl</option>
                                                        <option value="jm">jm</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 border border-line">
                                                <div class="flex items-center gap-3">
                                                    <input type="text" name="pilar_filed8_7" value="500" class="shadow-input w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                                    <label class="inline-flex items-center gap-2 cursor-pointer text-[#586B74]">
                                                        € / kpl
                                                    </label>
                                                    
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 border border-line">
                                                <label class="inline-flex items-center gap-2 cursor-pointer text-[#586B74]">2 500 € </label>
                                            </td>

                                            <td class="px-4 py-3 border border-line">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td class="px-4 py-3 border border-line">
                                                <div class="flex items-center gap-3">
                                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g stroke-width="0"></g>
                                                                <g stroke-linecap="round" stroke-linejoin="round"></g>
                                                                <g>
                                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_filed2_3">
                                                    </label>
                                                    <input type="text" name="pilar_filed8_7" class="shadow-input w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 border border-line text-sm">
                                                <div class="flex items-center border border-solid border-accent shadow-input rounded-lg">
                                                    <input type="text" name="pilar_filed8_8" class="w-[100%] lg:w-[81%] rounded-[5px] p-2 rounded-l-lg">
                                                    <select id="measured3" class="bg-[#F6F8FF] border border-[#E1E1EA] text-black text-sm rounded-r-lg px-1">
                                                        <option selected value="kpl">kpl</option>
                                                        <option value="m2">m<sup>2</sup></option>
                                                        <option value="erä">erä</option>
                                                        <option value="kpl">kpl</option>
                                                        <option value="jm">jm</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 border border-line">
                                                <div class="flex items-center gap-3">
                                                    <input type="text" name="pilar_filed8_9" value="500" class="shadow-input w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                                    <label class="inline-flex items-center gap-2 cursor-pointer text-[#586B74]">
                                                        € / kpl
                                                    </label>
                                                    
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 border border-line">
                                                <label class="inline-flex items-center gap-2 cursor-pointer text-[#586B74]">2 500 € </label>
                                            </td>

                                            <td class="px-4 py-3 border border-line">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td colspan="4" class="px-4 py-3 border border-line">
                                            </td>
                                            <td class="px-4 py-3 border border-line font-bold">
                                                7 500 €
                                            </td>
                                            <td class="py-2 px-3">
                                                <div class="help_wrap relative">
                                                
                                                    <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                                <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path>
                                                                <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                                            </g>
                                                        </svg> </a>
                                                
                                                    <div class="help_show text-[#586B74] text-[14px] lg:w-[170px] 2xl:w-[260px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:ml-[5px] lg:left-[100%] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-42px] whitespace-normal hidden">
                                                        <hr class="inline-block absolute right-[100%] top-[31px] w-[7px] border border-solid border-[#E1E1EA]">
                                                        <span>
                                                            Syötä kustannus myös esitietolomakkeelle ko. sarakkeeseen syöte2
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- devider -->
                                        <tr>
                                            <td></td>
                                            <td colspan="5" class="p-2 border border-line"></td>
                                        </tr>
                                        <!-- devider -->
                                        <!-- 2nd Body -->
                                        <tr>
                                            <td></td>
                                            <td colspan="5" class="px-4 py-3 border border-line">
                                                <h4 class="text-normal italic text-accent"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_TY2', true ), 'TY2') ); ?></h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td class="px-4 py-3 border border-line  w-56">
                                                <div class="flex items-center gap-3">
                                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g stroke-width="0"></g>
                                                                <g stroke-linecap="round" stroke-linejoin="round"></g>
                                                                <g>
                                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_filed2_3">
                                                    </label>
                                                    <input type="text" name="pilar_filed8_10" class="shadow-input w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 border border-line text-sm" id="project_table_status">
                                                <div class="flex items-center border border-solid border-accent shadow-input rounded-lg">
                                                    <input type="text" name="pilar_filed8_11" class="w-[100%] lg:w-[81%] rounded-[5px] p-2 rounded-l-lg">
                                                    <select id="measured4" class="bg-[#F6F8FF] border border-[#E1E1EA] text-black text-sm rounded-r-lg px-1">
                                                        <option selected value="kpl">kpl</option>
                                                        <option value="m2">m<sup>2</sup></option>
                                                        <option value="erä">erä</option>
                                                        <option value="kpl">kpl</option>
                                                        <option value="jm">jm</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 border border-line">
                                                <div class="flex items-center gap-3">
                                                    <input type="text" name="pilar_filed8_12" value="500" class="shadow-input w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                                    <label class="inline-flex items-center gap-2 cursor-pointer text-[#586B74]">
                                                        € / kpl
                                                    </label>
                                        
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 border border-line">
                                                <label class="inline-flex items-center gap-2 cursor-pointer text-[#586B74]">2 500 € </label>
                                            </td>
                                        
                                            <td class="px-4 py-3 border border-line">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td class="px-4 py-3 border border-line">
                                                <div class="flex items-center gap-3">
                                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g stroke-width="0"></g>
                                                                <g stroke-linecap="round" stroke-linejoin="round"></g>
                                                                <g>
                                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_filed2_5">
                                                    </label>
                                                    <input type="text" name="pilar_filed8_13" class="shadow-input w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 border border-line text-sm" id="project_table_status">
                                                <div class="flex items-center border border-solid border-accent shadow-input rounded-lg">
                                                    <input type="text" name="pilar_filed8_14" class="w-[100%] lg:w-[81%] rounded-[5px] p-2 rounded-l-lg">
                                                    <select id="measured5" class="bg-[#F6F8FF] border border-[#E1E1EA] text-black text-sm rounded-r-lg px-1">
                                                        <option selected value="kpl">kpl</option>
                                                        <option value="m2">m<sup>2</sup></option>
                                                        <option value="erä">erä</option>
                                                        <option value="kpl">kpl</option>
                                                        <option value="jm">jm</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 border border-line">
                                                <div class="flex items-center gap-3">
                                                    <input type="text" name="pilar_filed8_15" value="500" class="shadow-input w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                                    <label class="inline-flex items-center gap-2 cursor-pointer text-[#586B74]">
                                                        € / kpl
                                                    </label>
                                        
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 border border-line">
                                                <label class="inline-flex items-center gap-2 cursor-pointer text-[#586B74]">2 500 € </label>
                                            </td>
                                        
                                            <td class="px-4 py-3 border border-line">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td></td>
                                            <td colspan="4" class="px-4 py-3 border border-line">
                                            </td>
                                        
                                            <td class="px-4 py-3 border border-line font-bold">
                                                7 500 €
                                            </td>

                                            <td class="py-2 px-3">
                                                <div class="help_wrap relative">
                                            
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
                                            
                                                    <div class="help_show text-[#586B74] text-[14px] lg:w-[170px] 2xl:w-[260px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:ml-[5px] lg:left-[100%] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-42px] whitespace-normal hidden">
                                                        <hr class="inline-block absolute right-[100%] top-[31px] w-[7px] border border-solid border-[#E1E1EA]">
                                                        <span class="flex flex-wrap">
                                                            Syötä kustannus myös esitietolomakkeelle ko. sarakkeeseen syöte2
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- devider -->
                                        <tr>
                                            <td></td>
                                            <td colspan="5" class="p-2 border border-line"></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td colspan="5" class="p-2 border border-line"></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td colspan="5" class="p-2 border border-line"></td>
                                        </tr>
                                        <!-- devider -->
                                        <!-- 3rd Body -->

                                        <tr>
                                            <td></td>
                                            <td colspan="5" class="px-4 py-3 border border-line">
                                                <svg width="32px" height="32px" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#00B2A9" stroke-width="0.00024000000000000003">
                                                    <g stroke-width="0"></g>
                                                    <g stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.048"></g>
                                                    <g>
                                                        <path d="M5 10C6.10457 10 7 10.8954 7 12C7 13.1046 6.10457 14 5 14C3.89543 14 3 13.1046 3 12C3 10.8954 3.89543 10 5 10Z" fill="#00B2A9"></path>
                                                        <path d="M12 10C13.1046 10 14 10.8954 14 12C14 13.1046 13.1046 14 12 14C10.8954 14 10 13.1046 10 12C10 10.8954 10.8954 10 12 10Z" fill="#00B2A9"></path>
                                                        <path d="M21 12C21 10.8954 20.1046 10 19 10C17.8954 10 17 10.8954 17 12C17 13.1046 17.8954 14 19 14C20.1046 14 21 13.1046 21 12Z" fill="#00B2A9"></path>
                                                    </g>
                                                </svg>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td class="px-4 py-3 border border-line  w-56">
                                                <div class="flex items-center gap-3">
                                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g stroke-width="0"></g>
                                                                <g stroke-linecap="round" stroke-linejoin="round"></g>
                                                                <g>
                                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_filed2_6">
                                                    </label>
                                                    <input type="text" name="pilar_filed8_16" class="shadow-input w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 border border-line text-sm">
                                                <div class="flex items-center border border-solid border-accent shadow-input rounded-lg">
                                                    <input type="text" name="pilar_filed8_17" class="w-[100%] lg:w-[81%] rounded-[5px] p-2 rounded-l-lg">
                                                    <select id="measured4" class="bg-[#F6F8FF] border border-[#E1E1EA] text-black text-sm rounded-r-lg px-1">
                                                        <option selected value="kpl">kpl</option>
                                                        <option value="m2">m<sup>2</sup></option>
                                                        <option value="erä">erä</option>
                                                        <option value="kpl">kpl</option>
                                                        <option value="jm">jm</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 border border-line">
                                                <div class="flex items-center gap-3">
                                                    <input type="text" name="pilar_filed8_18" value="500" class="shadow-input w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                                    <label class="inline-flex items-center gap-2 cursor-pointer text-[#586B74]">
                                                        € / kpl
                                                    </label>
                                        
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 border border-line">
                                                <label class="inline-flex items-center gap-2 cursor-pointer text-[#586B74]">2 500 € </label>
                                            </td>
                                        
                                            <td class="px-4 py-3 border border-line">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td class="px-4 py-3 border border-line">
                                                <div class="flex items-center gap-3">
                                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g stroke-width="0"></g>
                                                                <g stroke-linecap="round" stroke-linejoin="round"></g>
                                                                <g>
                                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_filed2_7">
                                                    </label>
                                                    <input type="text" name="pilar_filed8_19" class="shadow-input w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 border border-line text-sm">
                                                <div class="flex items-center border border-solid border-accent shadow-input rounded-lg">
                                                    <input type="text" name="pilar_filed8_20" class="w-[100%] lg:w-[81%] rounded-[5px] p-2 rounded-l-lg">
                                                    <select id="measured6" class="bg-[#F6F8FF] border border-[#E1E1EA] text-black text-sm rounded-r-lg px-1">
                                                        <option selected value="kpl">kpl</option>
                                                        <option value="m2">m<sup>2</sup></option>
                                                        <option value="erä">erä</option>
                                                        <option value="kpl">kpl</option>
                                                        <option value="jm">jm</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 border border-line">
                                                <div class="flex items-center gap-3">
                                                    <input type="text" name="pilar_filed8_21" value="500" class="shadow-input w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                                    <label class="inline-flex items-center gap-2 cursor-pointer text-[#586B74]">
                                                        € / kpl
                                                    </label>
                                        
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 border border-line">
                                                <label class="inline-flex items-center gap-2 cursor-pointer text-[#586B74]">2 500 € </label>
                                            </td>
                                        
                                            <td class="px-4 py-3 border border-line">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td></td>
                                            <td colspan="4" class="px-4 py-3 border border-line">
                                            </td>
                                        
                                            <td class="px-4 py-3 border border-line font-bold">
                                                7 500 €
                                            </td>

                                            <td class="py-2 px-3">
                                                <div class="help_wrap relative">
                                            
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
                                            
                                                    <div class="help_show text-[#586B74] text-[14px] lg:w-[170px] 2xl:w-[260px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:ml-[5px] lg:left-[100%] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-42px] whitespace-normal hidden">
                                                        <hr class="inline-block absolute right-[100%] top-[31px] w-[7px] border border-solid border-[#E1E1EA]">
                                                        <span class="flex flex-wrap">
                                                            Syötä kustannus myös esitietolomakkeelle ko. sarakkeeseen syöte2
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- 4th Body -->

                                        <tr>
                                            <td></td>
                                            <td colspan="5" class="px-4 py-3 border border-line">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td colspan="5" class="px-4 py-3 border border-line">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td class="px-4 py-3 border border-line  w-56">
                                                <div class="flex items-center gap-3">
                                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g stroke-width="0"></g>
                                                                <g stroke-linecap="round" stroke-linejoin="round"></g>
                                                                <g>
                                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_filed2_8">
                                                    </label>
                                                    <input type="text" name="pilar_filed8_22" class="shadow-input w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 border border-line text-sm">
                                                <div class="flex items-center border border-solid border-accent shadow-input rounded-lg">
                                                    <input type="text" name="pilar_filed8_23" class="w-[100%] lg:w-[81%] rounded-[5px] p-2 rounded-l-lg">
                                                    <select id="measured4" class="bg-[#F6F8FF] border border-[#E1E1EA] text-black text-sm rounded-r-lg px-1">
                                                        <option selected value="kpl">kpl</option>
                                                        <option value="m2">m<sup>2</sup></option>
                                                        <option value="erä">erä</option>
                                                        <option value="kpl">kpl</option>
                                                        <option value="jm">jm</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 border border-line">
                                                <div class="flex items-center gap-3">
                                                    <input type="text" name="pilar_filed8_24" value="500" class="shadow-input w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                                    <label class="inline-flex items-center gap-2 cursor-pointer text-[#586B74]">
                                                        € / kpl
                                                    </label>
                                        
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 border border-line">
                                                <label class="inline-flex items-center gap-2 cursor-pointer text-[#586B74]">2 500 € </label>
                                            </td>
                                        
                                            <td class="px-4 py-3 border border-line">
                                            </td>
                                            <td class="py-2 px-3">
                                                <div class="help_wrap relative">
                                            
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
                                            
                                                    <div class="help_show text-[#586B74] text-[14px] lg:w-[170px] 2xl:w-[260px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:ml-[5px] lg:left-[100%] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-42px] whitespace-normal hidden">
                                                        <hr class="inline-block absolute right-[100%] top-[31px] w-[7px] border border-solid border-[#E1E1EA]">
                                                        <span class="flex flex-wrap">
                                                        Tyypillisesti 12%
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td class="px-4 py-3 border border-line">
                                                <div class="flex items-center gap-3">
                                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g stroke-width="0"></g>
                                                                <g stroke-linecap="round" stroke-linejoin="round"></g>
                                                                <g>
                                                                    <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_filed2_9">
                                                    </label>
                                                    <input type="text" name="pilar_filed8_25" class="shadow-input w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 border border-line text-sm" id="project_table_status">
                                                <div class="flex items-center border border-solid border-accent shadow-input rounded-lg">
                                                    <input type="text" name="pilar_filed8_26" class="w-[100%] lg:w-[81%] rounded-[5px] p-2 rounded-l-lg">
                                                    <select id="measured7" class="bg-[#F6F8FF] border border-[#E1E1EA] text-black text-sm rounded-r-lg px-1">
                                                        <option selected value="kpl">kpl</option>
                                                        <option value="m2">m<sup>2</sup></option>
                                                        <option value="erä">erä</option>
                                                        <option value="kpl">kpl</option>
                                                        <option value="jm">jm</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 border border-line">
                                                <div class="flex items-center gap-3">
                                                    <input type="text" name="pilar_filed8_27" value="500" class="shadow-input w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                                    <label class="inline-flex items-center gap-2 cursor-pointer text-[#586B74]">
                                                        € / kpl
                                                    </label>
                                        
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 border border-line">
                                                <label class="inline-flex items-center gap-2 cursor-pointer text-[#586B74]">2 500 € </label>
                                            </td>
                                        
                                            <td class="px-4 py-3 border border-line">
                                            </td>

                                            <td class="py-2 px-3">
                                                <div class="help_wrap relative">
                                            
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
                                            
                                                    <div class="help_show text-[#586B74] text-[14px] lg:w-[170px] 2xl:w-[260px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:ml-[5px] lg:left-[100%] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-42px] whitespace-normal hidden">
                                                        <hr class="inline-block absolute right-[100%] top-[31px] w-[7px] border border-solid border-[#E1E1EA]">
                                                        <span class="flex flex-wrap">
                                                            Tyypillisesti 12%
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td></td>
                                            <td colspan="4" class="px-4 py-3 border border-line">
                                            </td>
                                        
                                            <td class="px-4 py-3 border border-line font-bold">
                                                7 500 €
                                            </td>

                                            <td class="py-2 px-3">
                                                <div class="help_wrap relative">
                                            
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
                                            
                                                    <div class="help_show text-[#586B74] text-[14px] lg:w-[170px] 2xl:w-[260px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:ml-[5px] lg:left-[100%] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-42px] whitespace-normal hidden">
                                                        <hr class="inline-block absolute right-[100%] top-[31px] w-[7px] border border-solid border-[#E1E1EA]">
                                                        <span class="flex flex-wrap">
                                                            Syötä kustannus myös esitietolomakkeelle ko. sarakkeeseen syöte2
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- 5th Body -->
                                        
                                        <tr>
                                            <td></td>
                                            <td colspan="4" class="px-4 py-3 border border-line">
                                                <span class="text-sm font-bold">Rakennustyöt yhteensä</span>
                                            </td>
                                            <td class="px-4 py-3 border border-line font-bold">
                                                7 500 €
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td colspan="5" class="px-4 py-3 border border-line">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-2 px-3 help_wrap">
                                                <div class="help_wrap relative">
                                            
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
                                            
                                                    <div class="help_show text-[#586B74] text-[14px] lg:w-[170px] 2xl:w-[260px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:ml-[5px] lg:right-[100%] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-42px] whitespace-normal hidden">
                                                        <hr class="inline-block absolute left-[100%] top-[31px] w-[7px] border border-solid border-[#E1E1EA]">
                                                        <span class="flex flex-wrap">
                                                            Syötä kustannus myös esitietolomakkeelle kohtaan BU3, huomioi, että tämä ei ole Nosteen sitova tarjous ja sisältää mahdollisesti muita konsulttikuluja. Mikäli tämä on hankala arvioida, voi käyttää esim 8-12 % koko urakkahinnasta.
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 border border-line  w-56">
                                                <span class="text-sm font-bold">Projektinjohto, rakennuttaminen ja valvonta</span>
                                            </td>
                                            <td class="px-4 py-3 border border-line text-sm">
                                                <div class="flex items-center border border-solid border-accent shadow-input rounded-lg">
                                                    <input type="text" name="pilar_filed8_28" class="w-[100%] lg:w-[81%] rounded-[5px] p-2 rounded-l-lg">
                                                    <select id="measured4" class="bg-[#F6F8FF] border border-[#E1E1EA] text-black text-sm rounded-r-lg px-1">
                                                        <option selected value="kpl">kpl</option>
                                                        <option value="m2">m<sup>2</sup></option>
                                                        <option value="erä">erä</option>
                                                        <option value="kpl">kpl</option>
                                                        <option value="jm">jm</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 border border-line">
                                                <div class="flex items-center gap-3">
                                                    <input type="text" name="pilar_filed8_29" value="500" class="shadow-input w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                                    <label class="inline-flex items-center gap-2 cursor-pointer text-[#586B74]">
                                                        € / kpl
                                                    </label>
                                        
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 border border-line">
                                                <label class="inline-flex items-center gap-2 cursor-pointer text-[#586B74]">2 500 € </label>
                                            </td>
                                        
                                            <td class="px-4 py-3 border border-line">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-2 px-3">
                                                <div class="help_wrap relative">
                                            
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
                                            
                                                    <div class="help_show text-[#586B74] text-[14px] lg:w-[170px] 2xl:w-[260px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:ml-[5px] lg:right-[100%] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-42px] whitespace-normal hidden">
                                                        <hr class="inline-block absolute left-[100%] top-[31px] w-[7px] border border-solid border-[#9b9ba5]">
                                                        <span class="flex flex-wrap">
                                                            Syötä kustannus myös esitietolomakkeelle kohtaan BU4. Huom! Sisältää myös erikoissuunnittelun konsultoinnin kustannukset jos tarpeen.
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 border border-line">
                                                <div class="flex items-center gap-3">
                                                    <span class="text-sm font-bold">Suunnittelu</span>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 border border-line text-sm">
                                                <div class="flex items-center border border-solid border-accent shadow-input rounded-lg">
                                                    <input type="text" name="pilar_filed8_30" class="w-[100%] lg:w-[81%] rounded-[5px] p-2 rounded-l-lg">
                                                    <select id="measured8" class="bg-[#F6F8FF] border border-[#E1E1EA] text-black text-sm rounded-r-lg px-1">
                                                        <option selected value="kpl">kpl</option>
                                                        <option value="m2">m<sup>2</sup></option>
                                                        <option value="erä">erä</option>
                                                        <option value="kpl">kpl</option>
                                                        <option value="jm">jm</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 border border-line">
                                                <div class="flex items-center gap-3">
                                                    <input type="text" name="pilar_filed8_30" value="500" class="shadow-input w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                                    <label class="inline-flex items-center gap-2 cursor-pointer text-[#586B74]">
                                                        € / kpl
                                                    </label>
                                        
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 border border-line">
                                                <label class="inline-flex items-center gap-2 cursor-pointer text-[#586B74]">2 500 € </label>
                                            </td>
                                        
                                            <td class="px-4 py-3 border border-line">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="py-2 px-3">
                                                <div class="help_wrap relative">
                                            
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
                                            
                                                    <div class="help_show text-[#586B74] text-[14px] lg:w-[170px] 2xl:w-[260px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:ml-[5px] lg:right-[100%] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-42px] whitespace-normal hidden">
                                                        <hr class="inline-block absolute left-[100%] top-[31px] w-[7px] border border-solid border-[#E1E1EA]">
                                                        <span class="flex flex-wrap">
                                                            Syötä kustannus myös esitietolomakkeelle kohtaan BU6. Sisältää esimerkiksi asbestikartoituksen, projektipankin tai piirustuskopiotilauksen kustannukset.
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 border border-line">
                                                <div class="flex items-center gap-3">
                                                    <span class="text-sm font-bold">Muut rakennuttajan tehtävät</span>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 border border-line text-sm">
                                                <div class="flex items-center border border-solid border-accent shadow-input rounded-lg">
                                                    <input type="text" name="pilar_filed8_31" class="w-[100%] lg:w-[81%] rounded-[5px] p-2 rounded-l-lg">
                                                    <select id="measured9" class="bg-[#F6F8FF] border border-[#E1E1EA] text-black text-sm rounded-r-lg px-1">
                                                        <option selected value="kpl">kpl</option>
                                                        <option value="m2">m<sup>2</sup></option>
                                                        <option value="erä">erä</option>
                                                        <option value="kpl">kpl</option>
                                                        <option value="jm">jm</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 border border-line">
                                                <div class="flex items-center gap-3">
                                                    <input type="text" name="pilar_filed8_32" value="500" class="shadow-input w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                                    <label class="inline-flex items-center gap-2 cursor-pointer text-[#586B74]">
                                                        € / kpl
                                                    </label>
                                        
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 border border-line">
                                                <label class="inline-flex items-center gap-2 cursor-pointer text-[#586B74]">2 500 € </label>
                                            </td>
                                        
                                            <td class="px-4 py-3 border border-line">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="py-2 px-3">
                                                <div class="help_wrap relative">
                                            
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
                                            
                                                    <div class="help_show text-[#586B74] text-[14px] lg:w-[170px] 2xl:w-[260px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:ml-[5px] lg:right-[100%] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-42px] whitespace-normal hidden">
                                                        <hr class="inline-block absolute left-[100%] top-[31px] w-[7px] border border-solid border-[#E1E1EA]">
                                                        <span class="flex flex-wrap">
                                                            Tyypillisesti maksimissaan 10%, Syötä kustannus myös esitietolomakkeelle kohtaan BU5
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 border border-line">
                                                <div class="flex items-center gap-3">
                                                    <span class="text-sm font-bold">Riskivaraus</span>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 border border-line text-sm">
                                                <div class="flex items-center border border-solid border-accent shadow-input rounded-lg">
                                                    <input type="text" name="pilar_filed8_33" class="w-[100%] lg:w-[81%] rounded-[5px] p-2 rounded-l-lg">
                                                    <select id="measured10" class="bg-[#F6F8FF] border border-[#E1E1EA] text-black text-sm rounded-r-lg px-1">
                                                        <option selected value="kpl">kpl</option>
                                                        <option value="m2">m<sup>2</sup></option>
                                                        <option value="erä">erä</option>
                                                        <option value="kpl">kpl</option>
                                                        <option value="jm">jm</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 border border-line">
                                                <div class="flex items-center gap-3">
                                                    <input type="text" name="pilar_filed8_34" value="500" class="shadow-input w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                                    <label class="inline-flex items-center gap-2 cursor-pointer text-[#586B74]">
                                                        € / kpl
                                                    </label>
                                        
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 border border-line">
                                                <label class="inline-flex items-center gap-2 cursor-pointer text-[#586B74]">2 500 € </label>
                                            </td>
                                        
                                            <td class="px-4 py-3 border border-line">
                                            </td>
                                        </tr>
                                    </tbody>

                                    <tfoot class="bg-accent">
                                        <tr>
                                            <td class="bg-white"></td>
                                            <td class="px-4 py-3 border border-white">
                                                <span class="text-white">Kaikki yhteensä (alv 0%)</span>
                                            </td>
                                            <td class="px-4 py-3 border border-white">
                                                <div class="flex items-center justify-between">
                                                    <span class="text-white">=I45/ <span class="text-accent"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_M5', true ), 'M5') ); ?></span></span>
                                                    <span class="text-white">€/m2</span>
                                                </div>
                                            </td>
                                            <td colspan="2" class="px-4 py-3 border border-white"></td>
                                            <td class="px-4 py-3 border border-white">
                                                <span class="text-white">7500 €</span>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>


                        <div class="help_wrap mb-4 relative">
                            <div class="max-w-[793px] mx-auto flex items-center gap-2">
                                <div class="w-full border border-line">
                                    <div class="bg-accent px-4 py-3">
                                        <span class="text-sm text-white">Rakennustyöt yhteensä</span>
                                    </div>
                                    <div class="p-4">
                                        <textarea class="shadow-input text-sm border-accent rounded-md text-[#586B74] order-3 w-full" rows="4"></textarea>
                                    </div>
                                </div>
                        
                                <a href="#!" class="help_click">
                                    <svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g stroke-width="0"></g>
                                        <g stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g>
                                            <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                            <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path>
                                            <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                        </g>
                                    </svg>
                                </a>
                        
                            </div>
                        

                            <div class="help_show hidden text-[#586B74] text-[14px] lg:w-[170px] 2xl:w-[260px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-122px]">
                                <hr class="inline-block absolute right-[100%] top-[31px] w-[50px] border border-solid border-[#E1E1EA]">
                                <span>
                                    Esimerkiksi minkä hintaa ei voida järkevästi arvioida ja on siksi jätetty pois kustannusarviosta. <br><br>
                                    Lisäksi kaikki oletukset (esim. uusia IV-kanavia ei tuoda tilaan tilan ulkopuolelta) <br><br>
                                    Lisäksi sovitut toteutusratkaisut (tekstiilipalamatto asennetaan olemassa olevan linoleum-maton päälle jne.) <br><br>
                                </span>
                            </div>
                        </div>
                        
                        <div class="help_wrap mb-4 relative">
                            <div class="max-w-[793px] mx-auto flex items-center gap-2">
                                <div class="w-full border border-line">
                                    <div class="bg-accent px-4 py-3">
                                        <span class="text-sm text-white">Rakennustyöt yhteensä</span>
                                    </div>
                                    <div class="p-4">
                                        <textarea class="shadow-input text-sm border-accent rounded-md text-[#586B74] order-3 w-full" name="general_situation" rows="4"></textarea>
                                    </div>
                                </div>
                        
                                <a href="#!" class="help_click">
                                    <svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g stroke-width="0"></g>
                                        <g stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g>
                                            <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                            <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path>
                                            <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                        </g>
                                    </svg>
                                </a>
                        
                            </div>
                        
                            <div class="help_show hidden text-[#586B74] text-[14px] lg:w-[170px] 2xl:w-[260px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-122px]">
                                <hr class="inline-block absolute right-[100%] top-[31px] w-[50px] border border-solid border-[#E1E1EA]">
                                <span>
                                    Esim. Tilasuunnitelma jne.
                                </span>
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