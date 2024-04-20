
<!-- Main Content -->
<section class="py-10">
    <div class="container px-4">
        <!-- grid View Item -->
        <div class="grid grid-cols-1 gap-4">
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
                    <div class="">
                        <div class="mx-auto max-w-[750px] mb-4">
                            <p class="text-sm text-accent italic">K1</p>
                            <p class="text-sm text-accent italic">K1</p>
                        </div>
                        
                        <h4 class="mb-8 text-[#081F2C] mx-auto max-w-[750px]">Projektin lähtötietopalaveri</h4>

                        <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" enctype="multipart/form-data">
                            <div class="mb-8 mx-auto max-w-[750px]">
                                <div class="flex flex-wrap mb-4">
                                    <label class="flex-[3] mr-4 text-sm font-medium text-black" for="version">Versio:</label>
                                    <p class="flex-[3] text-sm text-accent" id="version">xx.xx.xxxx</p>
                                </div>

                                <div class="flex flex-wrap mb-2">
                                    <label class="flex-[3] mr-4 text-sm font-medium text-black" for="subscriber">Tilaaja:</label>
                                    <p class="flex-[3] text-sm text-accent italic" id="subscriber">T1</p>
                                </div>
                                
                                <div class="flex flex-wrap mb-4">
                                    <label class="flex-[3] mr-4 text-sm font-medium text-black" for="author">Laatija:</label>
                                    <p class="flex-[3] text-sm text-accent italic" id="author">P1, Partners at Noste Oy</p>
                                </div>
                                
                                <div class="flex flex-wrap mb-4">
                                    <label class="flex-[3] mr-4 text-sm font-medium text-black" for="target">Kohde:</label>
                                    <p class="flex-[3] text-sm text-accent italic" id="target">K4</p>
                                </div>

                                <div class="flex flex-wrap mb-4">
                                    <label class="flex-[3] mr-4 text-sm font-medium text-black" for="target"></label>
                                    <p class="flex-[3] text-sm text-accent italic">K1</p>
                                </div>
                                
                                <div class="flex flex-wrap mb-4">
                                    <label class="flex-[3] mr-4 text-sm font-medium text-black" for="target"></label>
                                    <p class="flex-[3] text-sm text-accent italic">K2</p>
                                </div>

                                <div class="flex flex-wrap mb-4">
                                    <label class="flex-[3] mr-4 text-sm font-medium text-black" for="target"></label>
                                    <p class="flex-[3] text-sm text-accent italic">K3</p>
                                </div>

                                <div class="flex flex-wrap mb-4">
                                    <label class="flex-[3] mr-4 text-sm font-medium text-black" for="present">Läsnä:</label>
                                    <input class="shadow-input flex-[3] md:ml-5 text-sm border-accent rounded-md text-[#686d70]" type="text" id="present" name="present">
                                </div>
                            </div>

                            <p class="mb-8 text-[#081F2C] text-sm font-medium mx-auto max-w-[750px]">Tämän läpikäynnin tavoitteena on projektin lähtötietojen tehokas selvittäminen ja koonti yhteen paikkaan. Lisäksi käydään yhteisesti läpi Nosteelle astetetut tehtävät sekä arvioitu aikataulu.</p>

                            <div>
                                <div class="dropdown relative">
                                    <div class="flex flex-wrap flex-col mb-8 mx-auto max-w-[750px]">
                                        <label class="mr-4 mb-2 text-sm font-medium text-black flex items-center" for="general_situation">
                                            Vuokrauksen yleistilanne 
                                            <a href="javascript:void(0)" class="dropdown-toggle z-1 ml-3" data-dropdown="other_questions_tooltip">
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
                                        </label>
                                        <textarea class="shadow-input text-sm border-accent rounded-md text-[#586B74] order-3" id="general_ituation" name="general_situation" rows="4" placeholder="Onko tila ollut pitkään tyhjänä (vuokrauksen haasteet vs tilan vapautuminen juuri) tai milloin tila vapautuu? Mikä uuden vuokralaisen kanssa solmittavan vuokrasopimuksen tilanne on?"></textarea>

                                        <div class="tooltip_content p-2 lg:w-52 lg:after:w-[210%] xl:after:w-[273%] 2xl:after:w-[337%] border border-[#E1E1EA] bg-[#F6F8FF] rounded-md relkative lg:absolute top-0 right-2 order-2 mb-2 hidden
                                        " id="other_questions_tooltip">
                                            <p class="text-xs font-normal text-[#586B74]">Vuokrauksen yleistilanteessa käydään läpi, miksi ja milloin vuokraus on aktivoitunut (selvitetään onko tilassa haasteita tai ollaanko jo pitkään neuvoteltu samaa vuokrasopimusta) Korvaa pohjassa olevat apukysymykset keskustelun mukaan.</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="flex flex-wrap flex-col mb-8 mx-auto max-w-[750px]">
                                    <label class="mr-4 mb-2 text-sm font-medium text-black" for="nosti_tasks">
                                        Nosteen tehtävät
                                    </label>
                                    <textarea class="shadow-input text-sm border-accent rounded-md text-[#586B74]" id="nosti_tasks" name="nosti_tasks" rows="4" placeholder="Nosteelta toivotaan kustannusarvion ja alustavan aikataulun laadintaa? Millä aikataululla yllä olevat tarvitaan?"></textarea>
                                </div>

                                <div class="dropdown relative">
                                    <div class="flex flex-wrap flex-col mb-8 mx-auto max-w-[750px]">
                                        <div class="flex items-center mb-2">
                                            <p class="mr-4 text-sm font-normal text-[#586B74]">Sovittiin, että Noste laatii seuraavat dokumentit:</p>
                                            <a href="#" class="dropdown-toggle z-1" data-dropdown="other_questions_tooltip3">
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

                                        <div class="md:pl-12 order-3">
                                            <label class="flex items-center text-sm md:text-sm mb-2" for="agreed_prepare_documents1">
                                                <input class="shadow-input mr-2 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="agreed_prepare_documents[]" id="agreed_prepare_documents1" value="Vuokrasopimuksen hankintarajaliite">
                                                Vuokrasopimuksen hankintarajaliite
                                            </label>
                                            <label class="flex items-center text-sm md:text-sm mb-2" for="agreed_prepare_documents2">
                                                <input class="shadow-input mr-2 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="agreed_prepare_documents[]" id="agreed_prepare_documents2" value="Vuokrasopimuksen rakennustapaselostus">
                                                Vuokrasopimuksen rakennustapaselostus
                                            </label>
                                            <label class="flex items-center text-sm md:text-sm mb-2" for="agreed_prepare_documents3">
                                                <input class="shadow-input mr-2 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="agreed_prepare_documents[]" id="agreed_prepare_documents3" value="Vuokrasopimuksen lähtötietoaikataulu">
                                                Vuokrasopimuksen lähtötietoaikataulu
                                            </label>
                                            <label class="flex items-center text-sm md:text-sm mb-2" for="agreed_prepare_documents4">
                                                <input class="shadow-input mr-2 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="agreed_prepare_documents[]" id="agreed_prepare_documents4" value="muut">
                                                <input class="shadow-input text-sm border-accent rounded-md text-[#586B74] w-1/2" type="text" id="agreed_prepare_documents_content" name="agreed_prepare_documents_content" value="Muu, mikä">
                                            </label>
                                        </div>

                                        <div class="tooltip_content p-2 lg:w-52 lg:after:w-[142%] xl:after:w-[201%] 2xl:after:w-[265%] border border-[#E1E1EA] bg-[#F6F8FF] rounded-md relkative lg:absolute top-0 right-2 order-2 mb-2 hidden
                                        " id="other_questions_tooltip3">
                                            <p class="text-xs font-normal text-[#586B74]">Vuokrauksen yleistilanteessa käydään läpi, miksi ja milloin vuokraus on aktivoitunut (selvitetään onko tilassa haasteita tai ollaanko jo pitkään neuvoteltu samaa vuokrasopimusta) Korvaa pohjassa olevat apukysymykset keskustelun mukaan.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown relative">
                                    <div class="mb-2 mx-auto max-w-[750px]">
                                        <div class="flex items-center mb-4">
                                            <h5 class="font-medium">Vuokralaismuutoksen sisällön ja laatutason läpikäynti</h5>
                                            <a href="#" class="dropdown-toggle z-1 ml-4" data-dropdown="field_of_change_of_status_tooltip">
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
                                    
                                        <div class="tooltip_content p-2 lg:w-52 lg:after:w-[142%] xl:after:w-[136%] 2xl:after:w-[265%] border border-[#E1E1EA] bg-[#F6F8FF] rounded-md relkative lg:absolute top-0 right-2 order-2 mb-2 hidden
                                        " id="field_of_change_of_status_tooltip">
                                            <p class="text-xs font-normal text-[#586B74]">Kustannusjako on tärkeää, jotta tiedetään maksaja uusille toiveille ja budjettiylityksille.</p>
                                        </div>
                                    </div>
                                    <div class="mb-8 mx-auto max-w-[750px]">
                                        <div class="flex flex-wrap flex-col md:flex-row md:items-center mb-4 mx-auto max-w-[750px]">
                                            <label class="flex-[.5] md:mr-4 text-sm font-medium text-[#999a9b]" for="field_of_change_of_status">Tilamuutoksen ala</label>
                                            <div class="flex items-center">
                                                <input class="shadow-input text-sm border-accent rounded-md text-black w-36 md:ml-6" type="text" id="field_of_change_of_status" name="field_of_change_of_status">
                                                <span class="flex items-center ml-2">m<sup>2</sup></span>
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap flex-col md:flex-row md:items-center mb-4 mx-auto max-w-[750px]">
                                            <label class="flex-[.5] md:mr-4 text-sm font-medium text-[#999a9b]" for="project_name">Projektin nimi</label>
                                            <input class="shadow-input text-sm border-accent rounded-md w-36 text-black" type="text" id="project_name" name="project_name" placeholder="xxxxx">
                                        </div>
                                        <div class="flex flex-wrap flex-col md:flex-row md:items-center mb-4">
                                            <label class="flex-[.5] md:mr-4 text-sm font-medium text-[#999a9b]" for="the_building_ompleted_year">Rakennuksen valmistumisvuosi</label>
                                            <input class="shadow-input text-sm border-accent rounded-md w-36 text-black " type="text" id="the_building_ompleted_year" name="the_building_ompleted_year">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mb-8 dropdown relative">
                                    <div class="mx-auto max-w-[750px] relative">
                                        <textarea class="shadow-input w-full text-sm border-accent rounded-md text-[#586B74]" id="who_pays_new_requests_and_budget" name="who_pays_new_requests_and_budget" rows="6" placeholder="Käytiin läpi lähtötilanne. Käytiin läpi tilasuunnitelma, tilasuunnitelman lähtötietopuutteet/kysymykset sekä vuokralaisen erikoistoiveet ja tekniset vaatimukset. Käytiin läpi kiinteistön tekniset valmiudet verrattuna vuokralaisen vaatimuksiin. Käytiin läpi tilamuutosten laajuus verrattuna olemassa olevaan tilaan. Käytiin läpi maksaako vuokralainen osan kustannuksista (ja mikä on mahdollinen kustannusjako). Mikä suunnitelmien taso on? Joko suunnitelmat on lukittu vai vieläkö muutoksia tulee.">
                                        </textarea>
                                    </div>
                                </div>
                                
                                <div class="dropdown relative">
                                    <div class="flex flex-wrap flex-col mb-8 mx-auto max-w-[750px]">
                                        <div class="flex items-center mb-4">
                                            <label class="mr-4 text-sm font-medium text-black" for="other_questions">
                                                Muut kysymykset
                                            </label>
                                            <a href="#" class="dropdown-toggle z-1 ml-4" data-dropdown="other_questions_tooltip4">
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
                                        
                                        <textarea class="shadow-input text-sm border-accent rounded-md text-[#586B74]" id="other_questions" name="other_questions" rows="4" placeholder="Tullaanko töiden aikana tekemään töitä, jotka eivät kuulu vuokralaismuutokseen (esim. PTS asiat)"></textarea>
                                    </div>

                                    <div class="tooltip_content p-2 lg:w-52 lg:after:w-[142%] xl:after:w-[286%] 2xl:after:w-[351%] border border-[#E1E1EA] bg-[#F6F8FF] rounded-md relkative lg:absolute top-0 right-2 order-2 mb-2 hidden" id="other_questions_tooltip4">
                                        <p class="text-xs font-normal text-[#586B74]">Kiinteistöissä tehdään kiinteistön ylläpitoon ja huoltoon liittyviä PTS-korjauksia (eli pitkän tähtäimen suunnitelman mukaisia korjauksia). Kiinteistö hoitaa PTS-korjaukset pääsääntöisesti itse mutta jos vuokralaismuutosalueella on jotakin tiedossa olevia töitä ne usein halutaan yhdistää vuokralaismuutoksen kanssa.</p>
                                    </div>
                                </div>
                                
                                
                                <div class="mb-8 mx-auto max-w-[750px]">
                                    <h5 class="mr-4 mb-2 text-sm font-normal text-black">Sähkön laskutus</h5>
                                    <div class="flex md:flex-wrap flex-col md:flex-row md:items-center justify-between mb-4">
                                        <label class="flex items-center text-sm mb-2" for="electricity_billing1">
                                            <input class="shadow-input mr-2 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="electricity_billing[]" id="electricity_billing1">
                                            Sähkö laskutetaan neliöperusteisesti
                                        </label>
                                        <label class="flex items-center text-sm mb-2" for="electricity_billing2">
                                            <input class="shadow-input mr-2 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="electricity_billing[]" id="electricity_billing2">
                                            kiinteistön alamittauksen avulla
                                        </label>
                                        <label class="flex items-center text-sm mb-2" for="electricity_billing3">
                                            <input class="shadow-input mr-2 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="electricity_billing[]" id="electricity_billing3">
                                            vuokralaisella oma sähkösopimus
                                        </label>
                                    </div>
                                    <textarea class="shadow-input w-full text-sm border-accent rounded-md text-[#586B74]" id="electricity_billing_comment" name="electricity_billing_comment" rows="4" placeholder="Miten tilaan pääsee käymään/kulkutunnisteet? Onko käytössä projektipankkia vai jaetaanko suunnitelmia sähköpostilla? Sähköisen laskutuksen ohjeet?"></textarea>
                                </div>

                                <div class="mx-auto max-w-[750px]">
                                    <h5 class="mr-4 mb-4 text-sm font-medium text-black">Perustiedot</h5>
                                    <p class="mb-4 text-sm">Tämän läpikäynnin tavoitteena on projektin lähtötietojen tehokas selvittäminen ja koonti yhteen paikkaan. Lisäksi käydään yhteisesti läpi Nosteelle astetetut tehtävät sekä arvioitu aikataulu.</p>
                                </div>


                                <div class="flex flex-wrap flex-col md:flex-row md:items-center mb-4 mx-auto max-w-[750px]">
                                    <label class="flex-[2] mr-4 text-sm font-normal text-[#586B74]" for="property_name">Kiinteistön nimi</label>
                                    <input class="shadow-input flex-[3] text-sm border-accent rounded-md text-[#586B74]" type="text" id="property_name" name="property_name">
                                </div>

                                <div class="flex flex-wrap flex-col md:flex-row md:items-center mb-4 mx-auto max-w-[750px]">
                                    <label class="flex-[2] mr-4 text-sm font-normal text-[#586B74]" for="sreet_address">Kiinteistön katuosoite</label>
                                    <input class="shadow-input flex-[3] text-sm border-accent rounded-md text-[#586B74]" type="text" id="sreet_address" name="sreet_address">
                                </div>

                                <div class="flex flex-wrap flex-col md:flex-row md:items-center mb-4 mx-auto max-w-[750px]">
                                    <label class="flex-[2] mr-4 text-sm font-normal text-[#586B74]" for="property_manager">Kiinteistöpäällikkö (Henkilö)</label>
                                    <input class="shadow-input flex-[3] text-sm border-accent rounded-md text-[#586B74]" type="text" id="property_manager" name="property_manager">
                                </div>

                                <div class="flex flex-wrap flex-col md:flex-row md:items-center mb-4 mx-auto max-w-[750px]">
                                    <label class="flex-[2] mr-4 text-sm font-normal text-[#586B74]" for="property_manager_email">Kiinteistöpäällikön sähköposti</label>
                                    <input class="shadow-input flex-[3] text-sm border-accent rounded-md text-[#586B74]" type="email" id="property_manager_email" name="property_manager_email">
                                </div>

                                <div class="flex flex-wrap flex-col md:flex-row md:items-center mb-4 mx-auto max-w-[750px]">
                                    <label class="flex-[2] mr-4 text-sm font-normal text-[#586B74]" for="property_manager_phone">Kiinteistöpäällikön puhelinnumero</label>
                                    <input class="shadow-input flex-[3] text-sm border-accent rounded-md text-[#586B74]" type="tel" id="property_manager_phone" name="property_manager_phone">
                                </div>

                                <div class="flex flex-wrap flex-col md:flex-row md:items-center mb-4 mx-auto max-w-[750px]">
                                    <label class="flex-[2] mr-4 text-sm font-normal text-[#586B74]" for="maintenance_person">Huoltohenkilö (Henkilö)</label>
                                    <input class="shadow-input flex-[3] text-sm border-accent rounded-md text-[#586B74]" type="text" id="maintenance_person" name="maintenance_person">
                                </div>

                                <div class="flex flex-wrap flex-col md:flex-row md:items-center mb-4 mx-auto max-w-[750px]">
                                    <label class="flex-[2] mr-4 text-sm font-normal text-[#586B74]" for="service_email">Huollon sähköposti</label>
                                    <input class="shadow-input flex-[3] text-sm border-accent rounded-md text-[#586B74]" type="email" id="service_email" name="service_email">
                                </div>

                                <div class="flex flex-wrap flex-col md:flex-row md:items-center mb-4 mx-auto max-w-[750px]">
                                    <label class="flex-[2] mr-4 text-sm font-normal text-[#586B74]" for="service_phone_number">Huollon puhelinnumero</label>
                                    <input class="shadow-input flex-[3] text-sm border-accent rounded-md text-[#586B74]" type="tel" id="service_phone_number" name="service_phone_number">
                                </div>

                                <div class="flex flex-wrap flex-col md:flex-row md:items-center mb-4 mx-auto max-w-[750px]">
                                    <label class="flex-[2] mr-4 text-sm font-normal text-[#586B74]" for="aulas_email">Aulan sähköposti</label>
                                    <input class="shadow-input flex-[3] text-sm border-accent rounded-md text-[#586B74]" type="email" id="aulas_email" name="aulas_email">
                                </div>

                                <div class="flex flex-wrap flex-col md:flex-row md:items-center mb-4 mx-auto max-w-[750px]">
                                    <label class="flex-[2] mr-4 text-sm font-normal text-[#586B74]" for="lobby_phone_number">Aulan puhelinnumero</label>
                                    <input class="shadow-input flex-[3] text-sm border-accent rounded-md text-[#586B74]" type="tel" id="lobby_phone_number" name="lobby_phone_number">
                                </div>

                                <div class="flex flex-wrap flex-col md:flex-row md:items-center mb-4 mx-auto max-w-[750px]">
                                    <label class="flex-[2] mr-4 text-sm font-normal text-[#586B74]" for="lobby_opening_hours">Aulan aukioloajat</label>
                                    <input class="shadow-input flex-[3] text-sm border-accent rounded-md text-[#586B74]" type="text" id="lobby_opening_hours" name="lobby_opening_hours">
                                </div>

                                <div class="flex flex-wrap flex-col md:flex-row md:items-center mb-4 mx-auto max-w-[750px]">
                                    <label class="flex-[2] mr-4 text-sm font-normal text-[#586B74]" for="tenant_company">Vuokralainen (yhtiö)</label>
                                    <input class="shadow-input flex-[3] text-sm border-accent rounded-md text-[#586B74]" type="text" id="tenant_company" name="tenant_company">
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- Card Body -->
                <!-- Card footer -->
                <div class="card_footer p-4 border-t border-line">
                    <div class="flex items-center justify-between">
                        <a href="<?php echo esc_attr( site_url( remove_query_arg( [ 'tmin' ] ) ) ); ?>" class="btn gap-2 border border-line">
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