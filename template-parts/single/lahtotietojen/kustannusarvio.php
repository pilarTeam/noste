
    <!-- Main Content -->
    <section class="my-8">
        <div class="container px-4">
            <!-- card_item -->
            <div class="card_item relative h-fit">
                <!-- Card Header -->
                <div class="card_header flex flex-col md:flex-row items-center md:justify-between px-4 md:px-8 py-6 border-b border-line top-0 z-10">
                    <div>
                        <p class="text-sm font-normal text-[#586B74] mb-1">Project nimi</p>
                        <!-- Breadcrumb -->
                        <nav class="flex justify-between" aria-label="Breadcrumb">
                            <ol class="inline-flex flex-wrap items-center mb-3 sm:mb-0">
                                <li>
                                    <span class="text-xs md:text-sm font-medium text-black">Projektin valmistelu</span>
                                </li>
                                <span class="mx-1 md:mx-2 text-black">/</span>
                                <li aria-current="page">
                                    <span class="text-xs md:text-sm font-medium text-black">Tilaajan yhteydenotto</span>
                                </li>
                                <span class="mx-1 md:mx-2 text-gray-400">/</span>
                                <li aria-current="page">
                                    <span class="text-xs md:text-sm font-medium text-black">Lähtötietop_valmis_ver1</span>
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <button class="btn gap-2 border border-line bg-[#E9E9F0]">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                            <defs>
                                <pattern id="pattern2" preserveAspectRatio="xMidYMid slice" width="100%" height="100%" viewBox="0 0 100 100">
                                    <image width="100" height="100" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAADO0lEQVR4nO2cz05UMRSHu9F3UHTNq4h7VyQtYTHBzLQy0LLleSAmJugr+CcqPsKQiEs1KuyHFMHoxXtvh7TTc879/ZKuSO/Md77pbcvMrVIIgiAIQizGhbnkprildsEMhEAI6dT+BBuMkG4hinkMdx72ANJ42ANI42EPII2HPYA0HvYA0njYA0jjYQ8gjYc9gDQe9gDSeNgDSONhDyCNhz2ANB72ANJ42ANI42EPII2HPYA0HvYA0njYA0jjYQ8gjYc9gDQe9gDUeJ7s79/Vbm9ibHhnbDhvviG0sFgNbDjXzr811o9jbReSsTkO940Ln1D0UOSDp60/Xt/evpc8MiAjLOMO8HE0Gt3pFXJ5m8Itab6MGmjrn/YKuZwz/u7kwlG8hSUNL6Q1ejpdMda/bMwrb1RfjPNn/wiZTld6OyFJWbd7Dxoj5Bf95Z3wLFxfCCkbCCEWCCEWCCmYjZ2dh9qG53FyvmovNp+F1a4+EFJWxreb+wv/Pf6trR+EFEocGe0bvnDY1g9CCiXeojp24T/b+kFIBSHa+R9t/SCkUOIE3jFCDtr6QUihxNVUnMD/M6l/jf8iaesHIeVXWodxzrhqB10yYiCEWCCEWCCEWCCEWCCEWCCEWCCEWCCEWKoJkf5TIpWpLvk7JF5HWlOZ6pK/Q+J1pDWVqS75OyReR1pTmeqSv0Ph61AJhBALhBALhBALhBALhBDLYIRsuPBYW39SexmrrT/Rk901KnWp9sLahs+1ZZjrZsMXKnWp9sIQQk3IZHfNuDCrPjpcmBnrH1GpS/0XJh4DIbRSTUjzN6u3fegTIyTXQ5+Nx6Ljo7y3kQIhN2VoF14t/li09eMSk2btfYju2Wf01qXM+9pKO3TG+uNlCYlr/9IyzJ/mT6kI0Ta8TzpaIyYejBLP4liKEOdPhyfEf0g+fOY60V48i0M7/7p5ukNOIUvch8y69hnlhfiz37UMW8kjI2dShXCJ4c7DHkAaD3sAaTzsAaTxpAIM7fuQakleZQ3s+5BqgRCuQgb2fUi1sAeQxsMeQBoPewBpPOwBpPGwB5DGwx5AGg+BZey8ZFPcUrtgBkIghHRqf4INRgiCIAiihpULmb7nGYjfxQAAAAAASUVORK5CYII=" />
                                </pattern>
                            </defs>
                            <rect id="icons8-print-100" width="20" height="20" fill="url(#pattern2)" />
                        </svg>
                
                
                        Takaisin
                    </button>
                </div><!-- Card Header -->

                <!-- Card Body -->
                <div class="px-4 md:px-8 pt-6 pb-10 lg:h-[645px] overflow-y-auto no-scrollbar scroll-smooth"> 
                    <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" enctype="multipart/form-data">
                        <div class="max-w-[750px] mx-auto mt-10">
                            <span class="text-sm font-medium italic text-[#00B2A9] block">K1</span>
                            <span class="text-sm font-medium italic text-[#00B2A9] block">K4</span>
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
                            <h3 class="text-accent text-[17px] italic font-medium">K4</h3>
                        </div>

                        <div class="mb-3">
                            <div class="max-w-[750px] mx-auto">
                                <div class="flex flex-wrap mb-4">
                                    <label class="flex-[3] mr-4 text-sm font-medium text-black">Tilan pinta-ala:</label>
                                    <p class="flex-[3] text-sm text-black"> <span class="text-accent italic font-medium">M5</span> m<sup>2</sup></p>
                                </div>
                            </div>
                        </div>

                        <div class="help_wrap mt-10 mb-4 relative">
                            <div class="max-w-[750px] mx-auto flex items-center gap-2">
                        
                                <div class="flex flex-col">
                                    <div class="overflow-x-auto">
                                        <div class="inline-block min-w-full align-middle">
                                            <div class="overflow-hidden">
                                                <table class="w-full whitespace-nowrap border-collapse">
                                                    <thead class="text-left rounded-t-lg bg-accent text-white">
                                                        <tr class="rounded-lg">
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
                                                            <td colspan="5" class="px-4 py-3 border border-line">
                                                                <h4 class="text-normal italic text-accent">TY1</h4>
                                                            </td>
                                                        </tr>
                                                        <tr tabindex="0">
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
                                                        <tr class="help_wrap relative">
                                                            <td colspan="4" class="px-4 py-3 border border-line">
                                                            </td>
                                                            
                                                            <td class="px-4 py-3 border border-line font-bold">
                                                                7 500 €
                                                            </td>
                                                            <td>

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
        
                                                                <div class="help_show hidden text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px]">
                                                                    Syötä kustannus myös esitietolomakkeelle ko. sarakkeeseen syöte2
                                                                </div>
                                                            </t>
                                                        </tr>
                                                        <!-- devider -->
                                                        <tr>
                                                            <td colspan="5" class="p-2 border border-line"></td>
                                                        </tr>
                                                        <!-- devider -->
                                                        <!-- 2nd Body -->
                                                        <tr>
                                                            <td colspan="5" class="px-4 py-3 border border-line">
                                                                <h4 class="text-normal italic text-accent">TY2</h4>
                                                            </td>
                                                        </tr>
                                                        <tr>
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
                                                            <td colspan="4" class="px-4 py-3 border border-line">
                                                            </td>
                                                        
                                                            <td class="px-4 py-3 border border-line font-bold">
                                                                7 500 €
                                                            </td>
                                                        </tr>

                                                        <!-- devider -->
                                                        <tr>
                                                            <td colspan="5" class="p-2 border border-line"></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="5" class="p-2 border border-line"></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="5" class="p-2 border border-line"></td>
                                                        </tr>
                                                        <!-- devider -->
                                                        <!-- 3rd Body -->

                                                        <tr>
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
                                                            <td colspan="4" class="px-4 py-3 border border-line">
                                                            </td>
                                                        
                                                            <td class="px-4 py-3 border border-line font-bold">
                                                                7 500 €
                                                            </td>
                                                        </tr>

                                                        <!-- 4th Body -->

                                                        <tr>
                                                            <td colspan="5" class="px-4 py-3 border border-line">
                                                            </td>
                                                        </tr>
                                                        <tr>
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
                                                        </tr>
                                                        <tr>
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
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td colspan="4" class="px-4 py-3 border border-line">
                                                            </td>
                                                        
                                                            <td class="px-4 py-3 border border-line font-bold">
                                                                7 500 €
                                                            </td>
                                                        </tr>

                                                        <!-- 5th Body -->

                                                        <tr>
                                                            <td colspan="4" class="px-4 py-3 border border-line">
                                                                <span class="text-sm font-bold">Rakennustyöt yhteensä</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-line font-bold">
                                                                7 500 €
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="5" class="px-4 py-3 border border-line">
                                                            </td>
                                                        </tr>
                                                        <tr>
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
                                                        
                                                        <tr>
                                                            <td colspan="4" class="px-4 py-3 border border-line">
                                                            </td>
                                                        
                                                            <td class="px-4 py-3 border border-line font-bold">
                                                                7 500 €
                                                            </td>
                                                        </tr>
                                                    </tbody>

                                                    <tfoot class="bg-accent">
                                                        <tr>
                                                            <td class="px-4 py-3 border border-white">
                                                                <span class="text-white">Kaikki yhteensä (alv 0%)</span>
                                                            </td>
                                                            <td class="px-4 py-3 border border-white">
                                                                <div class="flex items-center justify-between">
                                                                    <span class="text-white">=I45/ <span class="text-accent">M5</span></span>
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
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="help_wrap mb-4 relative">
                            <div class="max-w-[750px] mx-auto flex items-center gap-2">
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
                        
                            <div class="help_show hidden text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px]">
                                Syötä kustannus myös esitietolomakkeelle ko. sarakkeeseen syöte2
                            </div>
                        </div>
                        
                        <div class="help_wrap mb-4 relative">
                            <div class="max-w-[750px] mx-auto flex items-center gap-2">
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
                        
                            <div class="help_show hidden text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px]">
                                Syötä kustannus myös esitietolomakkeelle ko. sarakkeeseen syöte2
                            </div>
                        </div>
                    
                    </form>

                    <!-- Card footer -->
                    <div class="card_footer p-4 border-t border-line">
                        <div class="flex items-center justify-between">
                            <a href="<?php echo esc_attr(site_url(remove_query_arg(['tmin']))); ?>" class="btn gap-2 border border-line">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                                    <defs>
                                        <pattern id="pattern13" width="1" height="1" patternTransform="matrix(-1, 0, 0, 1, 40, 0)" viewBox="0 0 20 20">
                                            <image preserveAspectRatio="xMidYMid slice" width="20" height="20" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAABkklEQVR4nO3dQYrVQBhF4ecKFVF6oHu5dZ12SuiK6xNUeiC6A4UnDxyI9jwHcz4IZPjDISGTP3W5SJIkSdJ/rnN/3bm+da7HbOvF0fOc2vV6fTa29b1zv/6+foxt3R0916l1rq9/BDHK0XK/Xt6eDKOA5P7h1d9RxrZ+vpvr7dGznZZRgIwCZBQgowAZBSh+ffHEKDwxCk+MwhOj8MQoPDEKT4zCE6PwxCg8MQpPjMITo/DEKDwxCk+MwhOj8MQoPDEKT4zCE6PwxCg8MQpPjMITo/DEKDwxCk+MwhOj8MQoPGNbd08torpHz4vy5ciZTm08EWTM9fnouU5p+Mqi/Xtl/2dnfmwPb46e7XRqDI4ag6PG4KgxOGoMjhqDo8bgqDE4agyOGoOjxuCoMThqDI4ag6PG4KgxOGoMjhqDo8bgqDE4agyOGoOjxuCoMThqDI4ag6PG4KgxOGoMDmOAGAPEGCDGADEGiDFA+v7Dcw8nBrmtGntSNEjnevQsddora9s/jbl/vN0fPY8kSZIkXU7uFxa7dmp7vSU5AAAAAElFTkSuQmCC" />
                                        </pattern>
                                    </defs>
                                    <rect id="icons8-arrow-100" width="20" height="20" fill="url(#pattern13)" />
                                </svg>

                                Takaisin
                            </a>
                            
                            <a href="!#" class="btn gap-2 border border-accent bg-accent text-white">
                                Hyväksy
                            </a>
                        </div>
                    </div>
                    <!-- Card footer -->
                </div>
            </div>
        </div>
    </section>
    <!-- Main Content -->
