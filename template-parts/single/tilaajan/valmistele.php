<?php 

if ( !is_singular( 'projektitiedot' ) ) {
   return;
}

// global $globalSFormData;
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
                <form action="<?php echo esc_url( get_permalink( get_the_ID() ) ); ?>" method="post" enctype="multipart/form-data" class="ajax-submit">
                    <!-- Card Body -->
                    <?php wp_nonce_field('project_step_form_validation', 'project_step_form__nonce_field'); ?>
                    <input type="hidden" name="ptname" value="<?php echo esc_attr(get_the_ptname()) ; ?>">
                    <input type="hidden" name="action" value="noste_update_project_step">
                    <input type="hidden" name="post_id" value="<?php echo esc_attr( $project_id ); ?>">

                    <div class="px-4 md:px-8 pt-6 pb-10 lg:h-[645px] overflow-y-auto no-scrollbar scroll-smooth">
                        <div class="">
                            <div class="mx-auto max-w-[750px] mb-[30px]">
                                <span class="font-medium italic text-[#00B2A9] block"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K1', true ), 'K1') ); ?></span>
                                <span class="font-medium italic text-[#00B2A9] block"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K4', true ), 'K4') ); ?></span>
                            </div>
                            
                            <h1 class="text-black text-[25px] font-medium mb-[30px] mx-auto max-w-[750px]">Projektin lähtötietopalaveri</h1>

                            <div class="mb-8 mx-auto max-w-[750px]">
                                <div class="flex flex-wrap mb-4">
                                    <label class="flex-[3] mr-4 text-sm font-medium text-black" for="version">Versio:</label>
                                    <p class="flex-[3] text-sm text-accent" id="version"><?php echo esc_html( gmdate('d.m.Y') ); ?></p>
                                </div>

                                <div class="flex flex-wrap mb-2">
                                    <label class="flex-[3] mr-4 text-sm font-medium text-black" for="um_project-manager">Tilaaja:</label>

                                    <input type="text" id="um_project-manager" name="pilar_T1" class="flex-[3] text-sm text-accent italic readonly_global" value="<?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T1', true ), 'T1') ); ?>" readonly>
                                </div>
                                
                                <div class="flex flex-wrap mb-4">
                                    <label class="flex-[3] mr-4 text-sm font-medium text-black" for="author">Laatija:</label>

                                    <input type="text" id="author" name="pilar_P1" class="flex-[3] text-sm text-accent italic readonly_global" value="<?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P1', true ), 'P1') ); ?>, Partners at Noste Oy" readonly>
                                </div>
                                
                                <div class="flex flex-wrap mb-4">
                                    <label class="flex-[3] mr-4 text-sm font-medium text-black" for="target">Kohde:</label>

                                    <input type="text" id="target" name="pilar_K4" class="flex-[3] text-sm text-accent italic readonly_global" value="<?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K4', true ), 'K4') ); ?>" readonly>
                                </div>

                                <div class="flex flex-wrap mb-4">
                                    <label class="flex-[3] mr-4 text-sm font-medium text-black" for="target"></label>

                                    <input type="text" id="target" name="pilar_K1" class="flex-[3] text-sm text-accent italic readonly_global" value="<?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K1', true ), 'K1') ); ?>" readonly>
                                </div>
                                
                                <div class="flex flex-wrap mb-4">
                                    <label class="flex-[3] mr-4 text-sm font-medium text-black" for="target"></label>

                                    <input type="text" id="target" name="pilar_K2" class="flex-[3] text-sm text-accent italic readonly_global" value="<?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K2', true ), 'K2') ); ?>" readonly>
                                </div>

                                <div class="flex flex-wrap mb-4">
                                    <label class="flex-[3] mr-4 text-sm font-medium text-black" for="target"></label>

                                    <input type="text" id="target" name="pilar_K3" class="flex-[3] text-sm text-accent italic readonly_global" value="<?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K3', true ), 'K3') ); ?>" readonly>
                                </div>

                                <div class="flex flex-wrap items-center mb-4">
                                    <label class="flex-[3] mr-4 text-sm font-medium text-black" for="present">Läsnä:</label>
                                    <input class="shadow-input flex-[3] md:ml-5 text-sm border-accent rounded-md text-[#686d70]" type="text" id="present" <?php noste_textinput_attrset('present'); ?>>
                                </div>
                            </div>

                            <p class="mb-8 text-[#081F2C] text-sm font-medium mx-auto max-w-[750px]">Tämän läpikäynnin tavoitteena on projektin lähtötietojen tehokas selvittäminen ja koonti yhteen paikkaan. Lisäksi käydään yhteisesti läpi Nosteelle astetetut tehtävät sekä arvioitu aikataulu.</p>

                            <div>
                                <div class="help_wrap relative mb-4 mt-10">
                                    <div class="max-w-[750px] mx-auto flex items-center gap-2">
                                        <label class="inline-flex items-center gap-2 cursor-pointer min-w-[190px]">                        
                                            <span class="text-sm font-medium text-black">Vuokrauksen yleistilanne</span>
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
                                        Vuokrauksen yleistilanteessa käydään läpi, miksi ja milloin vuokraus on aktivoitunut (selvitetään onko tilassa haasteita tai ollaanko jo pitkään neuvoteltu samaa vuokrasopimusta) Korvaa pohjassa olevat apukysymykset keskustelun mukaan.
                                    </div>
                                </div>

                                <div class="max-w-[750px] mx-auto flex items-center gap-2 mb-10">
                                    <textarea class="shadow-input text-sm border-accent rounded-md text-[#586B74] order-3 w-full" id="general_ituation" name="general_situation" rows="4" placeholder="Onko tila ollut pitkään tyhjänä (vuokrauksen haasteet vs tilan vapautuminen juuri) tai milloin tila vapautuu? Mikä uuden vuokralaisen kanssa solmittavan vuokrasopimuksen tilanne on?"><?php echo esc_textarea(noste_check_array_data($data, 'general_situation')); ?></textarea>
                                </div>
                                
                                <div class="flex flex-wrap flex-col mb-8 mx-auto max-w-[750px]">
                                    <label class="mr-4 mb-2 text-sm font-medium text-black" for="nosti_tasks">
                                        Nosteen tehtävät
                                    </label>
                                    <textarea class="shadow-input text-sm border-accent rounded-md text-[#586B74]" id="nosti_tasks" name="nosti_tasks" rows="4" placeholder="Nosteelta toivotaan kustannusarvion ja alustavan aikataulun laadintaa? Millä aikataululla yllä olevat tarvitaan?"><?php echo esc_textarea(noste_check_array_data($data, 'nosti_tasks')); ?></textarea>
                                </div>

                                <div class="help_wrap relative mb-4 mt-10">
                                    <div class="max-w-[750px] mx-auto flex items-center gap-2">
                                        <label class="inline-flex items-center gap-2 cursor-pointer min-w-[325px]">                        
                                            <p class="mr-4 text-sm font-normal text-[#586B74]">Sovittiin, että Noste laatii seuraavat dokumentit:</p>
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
                                    Tässä on syytä kertoa, mitä hyötyä lisäpalveluista on. Näitä mm. kun laatutaso vastaa sitä mikä Nosteella ollut tiedossa vastaa kustannusarvio paremmin todellisuutta ja vältytään ristiriitaisilta olettamuksilta lopputuloksen suhteen (joku vuokralainen voi odottaa prameaa ja kiiltävää tilaa vaikka vuokranantaja on vuokraamassa olevaa tilaa pienin muutoksin)
                                    </div>
                                </div>

                                <div class="flex flex-wrap flex-col mb-8 mx-auto max-w-[750px]">
                                    <div class="md:pl-12 order-3">
                                        <?php foreach((isset($data['apd'])?(array) $data['apd']:[]) as $index => $item) :
                                            if (empty(trim($item))) {continue;} ?>
                                            <label class="flex items-center text-sm md:text-sm mb-2" for="apd_<?php echo esc_attr($index); ?>">
                                                <input class="shadow-input mr-2 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" <?php noste_repeatable_area_checkbox_attrset('apd_ck', $item); ?> id="apd_<?php echo esc_attr($index); ?>">
                                                <?php echo esc_html($item); ?>
                                                <input type="hidden" name="apd[]" value="<?php echo esc_attr($item); ?>">
                                            </label>
                                        <?php endforeach; ?>
                                        <label class="flex items-center text-sm md:text-sm mb-2" for="apd_extra">
                                            <input class="shadow-input mr-2 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="apd_ck[]" id="apd_extra">
                                            <input class="shadow-input text-sm border-accent rounded-md text-[#586B74] w-1/2" type="text" id="apd_extra_content" name="apd[]" placeholder="Muu, mikä" oninput="this.previousElementSibling.value = value;" onblur="do_repeat_once(this);">
                                        </label>
                                    </div>
                                </div>

                                <div class="mb-8">
                                    <div class="mb-4 mx-auto max-w-[750px]">
                                        <span class="text-sm font-medium text-black">Vuokralaismuutoksen sisällön ja laatutason läpikäynti</span>
                                    </div>

                                    <div class="flex flex-wrap flex-col md:flex-row md:items-center mb-4 mx-auto max-w-[750px]">
                                        <label class="flex-[.5] md:mr-4 text-sm font-medium text-[#999a9b]" for="field_of_change_of_status">Tilamuutoksen ala</label>
                                        <div class="flex items-center">
                                            <input class="shadow-input text-sm border-accent rounded-md text-black w-36 md:ml-6" type="text" id="field_of_change_of_status" name="field_of_change_of_status" value="<?php echo esc_attr( noste_check_array_data( $data, 'field_of_change_of_status' ) ); ?>">
                                            <span class="flex items-center ml-2">m<sup>2</sup></span>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap flex-col md:flex-row md:items-center mb-4 mx-auto max-w-[750px]">
                                        <label class="flex-[.5] md:mr-4 text-sm font-medium text-[#999a9b]" for="project_name">Projektin nimi</label>
                                        <input class="shadow-input text-sm border-accent rounded-md w-36 text-black" type="text" id="project_name" name="project_name" placeholder="xxxxx" value="<?php echo esc_attr( noste_check_array_data( $data, 'project_name' ) ); ?>">
                                    </div>
                                    <div class="flex flex-wrap flex-col md:flex-row md:items-center mb-4 mx-auto max-w-[750px]">
                                        <label class="flex-[.5] md:mr-4 text-sm font-medium text-[#999a9b]" for="the_building_ompleted_year">Rakennuksen valmistumisvuosi</label>
                                        <input class="shadow-input text-sm border-accent rounded-md w-36 text-black " type="text" id="the_building_ompleted_year" name="the_building_completed_year" value="<?php echo esc_attr( noste_check_array_data( $data, 'the_building_completed_year' ) ); ?>">
                                    </div>
                                </div>
                                
                                <div class="help_wrap relative mb-4 mt-10">
                                    <div class="max-w-[750px] mx-auto flex items-center gap-2">
                                        <textarea class="shadow-input text-sm border-accent rounded-md text-[#586B74] min-w-[680px]" id="who_pays_new_requests_and_budget" name="who_pays_new_requests_and_budget" rows="6" placeholder="Käytiin läpi lähtötilanne. Käytiin läpi tilasuunnitelma, tilasuunnitelman lähtötietopuutteet/kysymykset sekä vuokralaisen erikoistoiveet ja tekniset vaatimukset. Käytiin läpi kiinteistön tekniset valmiudet verrattuna vuokralaisen vaatimuksiin. Käytiin läpi tilamuutosten laajuus verrattuna olemassa olevaan tilaan. Käytiin läpi maksaako vuokralainen osan kustannuksista (ja mikä on mahdollinen kustannusjako). Mikä suunnitelmien taso on? Joko suunnitelmat on lukittu vai vieläkö muutoksia tulee."><?php echo esc_textarea(noste_check_array_data($data, 'who_pays_new_requests_and_budget')); ?></textarea>
                                
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
                                    <div class="help_show text-[#586B74] text-[14px] lg:w-[192px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:-mt-[75px] hidden">
                                        Kustannusjako on tärkeää, jotta tiedetään maksaja uusille toiveille ja budjettiylityksille.
                                    </div>
                                </div>


                                <div class="help_wrap relative mb-4 mt-10">
                                    <div class="max-w-[750px] mx-auto flex items-center gap-2">
                                        <label class="inline-flex items-center gap-2 cursor-pointer min-w-[190px]">                        
                                            <span class="text-sm font-medium text-black">Muut kysymykset</span>
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
                                        Kiinteistöissä tehdään kiinteistön ylläpitoon ja huoltoon liittyviä PTS-korjauksia (eli pitkän tähtäimen suunnitelman mukaisia korjauksia). Kiinteistö hoitaa PTS-korjaukset pääsääntöisesti itse mutta jos vuokralaismuutosalueella on jotakin tiedossa olevia töitä ne usein halutaan yhdistää vuokralaismuutoksen kanssa.
                                    </div>
                                </div>
                                
                                <div class="mb-8 mx-auto max-w-[750px]">
                                    <textarea class="shadow-input text-sm border-accent rounded-md text-[#586B74] w-full" rows="4" placeholder="Tullaanko töiden aikana tekemään töitä, jotka eivät kuulu vuokralaismuutokseen (esim. PTS asiat)" name="other_questions"><?php echo esc_textarea(noste_check_array_data($data, 'other_questions')); ?></textarea>
                                </div>
                                
                                
                                <div class="mb-8 mx-auto max-w-[750px]">
                                    <h5 class="mr-4 mb-2 text-sm font-normal text-black">Sähkön laskutus</h5>
                                    <div class="flex md:flex-wrap flex-col md:flex-row md:items-center justify-between mb-4">
                                        <label class="flex items-center text-sm mb-2" for="electricity_billing1">
                                            <input class="shadow-input mr-2 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="electricity_billing[1]" id="electricity_billing1" value="Sahko laskutetaan nelioperusteisesti" <?php echo esc_attr( noste_checked_with_array( noste_check_array_data( $data, 'electricity_billing' ), 'Sahko laskutetaan nelioperusteisesti' ) ); ?>>
                                            Sähkö laskutetaan neliöperusteisesti
                                        </label>
                                        <label class="flex items-center text-sm mb-2" for="electricity_billing2">
                                            <input class="shadow-input mr-2 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="electricity_billing[2]" id="electricity_billing2" value="kiinteiston alamittauksen avulla" <?php echo esc_attr( noste_checked_with_array( noste_check_array_data( $data, 'electricity_billing' ), 'kiinteiston alamittauksen avulla' ) ); ?>>
                                            kiinteistön alamittauksen avulla
                                        </label>
                                        <label class="flex items-center text-sm mb-2" for="electricity_billing3">
                                            <input class="shadow-input mr-2 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="electricity_billing[3]" id="electricity_billing3" value="vuokralaisella oma sahkosopimus" <?php echo esc_attr( noste_checked_with_array( noste_check_array_data( $data, 'electricity_billing' ), 'vuokralaisella oma sahkosopimus' ) ); ?>>
                                            vuokralaisella oma sähkösopimus
                                        </label>
                                    </div>
                                    <textarea class="shadow-input w-full text-sm border-accent rounded-md text-[#586B74]" id="electricity_billing_comment" name="electricity_billing_comment" rows="4" placeholder="Miten tilaan pääsee käymään/kulkutunnisteet? Onko käytössä projektipankkia vai jaetaanko suunnitelmia sähköpostilla? Sähköisen laskutuksen ohjeet?"><?php echo esc_textarea(noste_check_array_data($data, 'electricity_billing_comment')); ?></textarea>
                                </div>

                                <div class="mx-auto max-w-[750px]">
                                    <h5 class="mr-4 mb-4 text-sm font-medium text-black">Perustiedot</h5>
                                    <p class="mb-4 text-sm">Seuraavat tiedot on kerätty mahdollisuuksien mukaan ennen palaveria ja tietojen oikeellisuus on tarkastettu palaverin aikana/jälkeen.</p>
                                </div>


                                <div class="flex flex-wrap flex-col md:flex-row md:items-center mb-4 mx-auto max-w-[750px]">
                                    <label class="flex-[2] mr-4 text-sm font-normal text-[#586B74]" for="property_name">Kiinteistön nimi</label>
                                    <input class="shadow-input flex-[3] text-sm border-accent rounded-md text-[#586B74]" type="text" id="property_name" name="property_name" value="<?php echo esc_attr( noste_check_array_data( $data, 'property_name' ) ); ?>">
                                </div>

                                <div class="flex flex-wrap flex-col md:flex-row md:items-center mb-4 mx-auto max-w-[750px]">
                                    <label class="flex-[2] mr-4 text-sm font-normal text-[#586B74]" for="sreet_address">Kiinteistön katuosoite</label>
                                    <input class="shadow-input flex-[3] text-sm border-accent rounded-md text-[#586B74]" type="text" id="sreet_address" name="sreet_address" value="<?php echo esc_attr( noste_check_array_data( $data, 'sreet_address' ) ); ?>">
                                </div>

                                <div class="flex flex-wrap flex-col md:flex-row md:items-center mb-4 mx-auto max-w-[750px]">
                                    <label class="flex-[2] mr-4 text-sm font-normal text-[#586B74]" for="property_manager">Kiinteistöpäällikkö (Henkilö)</label>
                                    <input class="shadow-input flex-[3] text-sm border-accent rounded-md text-[#586B74]" type="text" id="property_manager" name="property_manager" value="<?php echo esc_attr( noste_check_array_data( $data, 'property_manager' ) ); ?>">
                                </div>

                                <div class="flex flex-wrap flex-col md:flex-row md:items-center mb-4 mx-auto max-w-[750px]">
                                    <label class="flex-[2] mr-4 text-sm font-normal text-[#586B74]" for="property_manager_email">Kiinteistöpäällikön sähköposti</label>
                                    <input class="shadow-input flex-[3] text-sm border-accent rounded-md text-[#586B74]" type="email" id="property_manager_email" name="property_manager_email" value="<?php echo esc_attr( noste_check_array_data( $data, 'property_manager_email' ) ); ?>">
                                </div>

                                <div class="flex flex-wrap flex-col md:flex-row md:items-center mb-4 mx-auto max-w-[750px]">
                                    <label class="flex-[2] mr-4 text-sm font-normal text-[#586B74]" for="property_manager_phone">Kiinteistöpäällikön puhelinnumero</label>
                                    <input class="shadow-input flex-[3] text-sm border-accent rounded-md text-[#586B74]" type="tel" id="property_manager_phone" name="property_manager_phone" value="<?php echo esc_attr( noste_check_array_data( $data, 'property_manager_phone' ) ); ?>">
                                </div>

                                <div class="flex flex-wrap flex-col md:flex-row md:items-center mb-4 mx-auto max-w-[750px]">
                                    <label class="flex-[2] mr-4 text-sm font-normal text-[#586B74]" for="maintenance_person">Huoltohenkilö (Henkilö)</label>
                                    <input class="shadow-input flex-[3] text-sm border-accent rounded-md text-[#586B74]" type="text" id="maintenance_person" name="maintenance_person" value="<?php echo esc_attr( noste_check_array_data( $data, 'maintenance_person' ) ); ?>">
                                </div>

                                <div class="flex flex-wrap flex-col md:flex-row md:items-center mb-4 mx-auto max-w-[750px]">
                                    <label class="flex-[2] mr-4 text-sm font-normal text-[#586B74]" for="service_email">Huollon sähköposti</label>
                                    <input class="shadow-input flex-[3] text-sm border-accent rounded-md text-[#586B74]" type="email" id="service_email" name="service_email" value="<?php echo esc_attr( noste_check_array_data( $data, 'service_email' ) ); ?>">
                                </div>

                                <div class="flex flex-wrap flex-col md:flex-row md:items-center mb-4 mx-auto max-w-[750px]">
                                    <label class="flex-[2] mr-4 text-sm font-normal text-[#586B74]" for="service_phone_number">Huollon puhelinnumero</label>
                                    <input class="shadow-input flex-[3] text-sm border-accent rounded-md text-[#586B74]" type="tel" id="service_phone_number" name="service_phone_number" value="<?php echo esc_attr( noste_check_array_data( $data, 'service_phone_number' ) ); ?>">
                                </div>

                                <div class="flex flex-wrap flex-col md:flex-row md:items-center mb-4 mx-auto max-w-[750px]">
                                    <label class="flex-[2] mr-4 text-sm font-normal text-[#586B74]" for="aulas_email">Aulan sähköposti</label>
                                    <input class="shadow-input flex-[3] text-sm border-accent rounded-md text-[#586B74]" type="email" id="aulas_email" name="aulas_email" value="<?php echo esc_attr( noste_check_array_data( $data, 'aulas_email' ) ); ?>">
                                </div>

                                <div class="flex flex-wrap flex-col md:flex-row md:items-center mb-4 mx-auto max-w-[750px]">
                                    <label class="flex-[2] mr-4 text-sm font-normal text-[#586B74]" for="lobby_phone_number">Aulan puhelinnumero</label>
                                    <input class="shadow-input flex-[3] text-sm border-accent rounded-md text-[#586B74]" type="tel" id="lobby_phone_number" name="lobby_phone_number" value="<?php echo esc_attr( noste_check_array_data( $data, 'lobby_phone_number' ) ); ?>">
                                </div>

                                <div class="flex flex-wrap flex-col md:flex-row md:items-center mb-4 mx-auto max-w-[750px]">
                                    <label class="flex-[2] mr-4 text-sm font-normal text-[#586B74]" for="lobby_opening_hours">Aulan aukioloajat</label>
                                    <input class="shadow-input flex-[3] text-sm border-accent rounded-md text-[#586B74]" type="text" id="lobby_opening_hours" name="lobby_opening_hours" value="<?php echo esc_attr( noste_check_array_data( $data, 'lobby_opening_hours' ) ); ?>">
                                </div>

                                <div class="flex flex-wrap flex-col md:flex-row md:items-center mb-4 mx-auto max-w-[750px]">
                                    <label class="flex-[2] mr-4 text-sm font-normal text-[#586B74]" for="tenant_company">Vuokralainen (yhtiö)</label>
                                    <input class="shadow-input flex-[3] text-sm border-accent rounded-md text-[#586B74]" type="text" id="tenant_company" name="tenant_company" value="<?php echo esc_attr( noste_check_array_data( $data, 'tenant_company' ) ); ?>">
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
<script>
    window.do_repeat_once = (trgInput) => {
        if (trgInput.value !== '' && trgInput.previousElementSibling?.checked) {
            var label_id = 'id_' + Math.random(0, 99999).toString().replaceAll('.', '');
            var label = document.createElement('label');label.className = 'flex items-center text-sm md:text-sm mb-2';
            label.setAttribute('for', label_id);
            var checkbox = document.createElement('input');
            checkbox.className = 'shadow-input mr-2 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-[\'\2713\'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2';
            if (trgInput.previousElementSibling?.checked) {checkbox.setAttribute('checked', true);}
            checkbox.setAttribute('value', trgInput.value);checkbox.name = 'apd_ck[]';
            checkbox.id = label.getAttribute('for');label.appendChild(checkbox);
            var span = document.createElement('span');span.innerHTML = trgInput.value;label.appendChild(span);
            var hidden = document.createElement('input');hidden.type = 'hidden';hidden.setAttribute('value', trgInput.value);hidden.name = 'apd[]';label.appendChild(hidden);
            trgInput.parentElement.parentElement.insertBefore(label, trgInput.parentElement);
            trgInput.value = '';trgInput.previousElementSibling.checked = false;
        }
    }
</script>