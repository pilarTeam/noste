<?php 

if ( !is_singular( 'projektitiedot' ) ) {
   return;
}

$project_id = get_the_ID();
$ptname = implode('_', ['noste', $_GET['tm'], $_GET['tmin']]);

$data = !empty( get_post_meta( $project_id, $ptname, true ) ) ? json_decode( get_post_meta( $project_id, $ptname, true ), true ) : '';

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
                        <div class="">
                            <div class="mx-auto max-w-[750px] mb-4">
                                <p class="text-sm text-accent italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K1', true ), 'K1') ); ?></p>
                                <p class="text-sm text-accent italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K4', true ), 'K4') ); ?></p>
                            </div>
                            
                            <h4 class="mb-8 text-[#081F2C] mx-auto max-w-[750px]">Projektin lähtötietopalaveri</h4>


                                <div class="mb-8 mx-auto max-w-[750px]">
                                    <div class="flex flex-wrap mb-4">
                                        <label class="flex-[3] mr-4 text-sm font-medium text-black" for="version">Versio:</label>
                                        <p class="flex-[3] text-sm text-accent" id="version">xx.xx.xxxx</p>
                                    </div>

                                    <div class="flex flex-wrap mb-2">
                                        <label class="flex-[3] mr-4 text-sm font-medium text-black" for="subscriber">Tilaaja:</label>
                                        <p class="flex-[3] text-sm text-accent italic" id="subscriber"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T1', true ), 'T1') ); ?></p>
                                    </div>
                                    
                                    <div class="flex flex-wrap mb-4">
                                        <label class="flex-[3] mr-4 text-sm font-medium text-black" for="author">Laatija:</label>
                                        <p class="flex-[3] text-sm text-accent italic" id="author"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P1', true ), 'P1') ); ?>, Partners at Noste Oy</p>
                                    </div>
                                    
                                    <div class="flex flex-wrap mb-4">
                                        <label class="flex-[3] mr-4 text-sm font-medium text-black" for="target">Kohde:</label>
                                        <p class="flex-[3] text-sm text-accent italic" id="target"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K4', true ), 'K4') ); ?></p>
                                    </div>

                                    <div class="flex flex-wrap mb-4">
                                        <label class="flex-[3] mr-4 text-sm font-medium text-black" for="target"></label>
                                        <p class="flex-[3] text-sm text-accent italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K1', true ), 'K1') ); ?></p>
                                    </div>
                                    
                                    <div class="flex flex-wrap mb-4">
                                        <label class="flex-[3] mr-4 text-sm font-medium text-black" for="target"></label>
                                        <p class="flex-[3] text-sm text-accent italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K2', true ), 'K2') ); ?></p>
                                    </div>

                                    <div class="flex flex-wrap mb-4">
                                        <label class="flex-[3] mr-4 text-sm font-medium text-black" for="target"></label>
                                        <p class="flex-[3] text-sm text-accent italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K3', true ), 'K3') ); ?></p>
                                    </div>

                                    <div class="flex flex-wrap mb-4">
                                        <label class="flex-[3] mr-4 text-sm font-medium text-black" for="present">Läsnä:</label>
                                        <input class="shadow-input flex-[3] md:ml-5 text-sm border-accent rounded-md text-[#686d70]" type="text" id="present" name="present" value="<?php echo esc_attr( noste_check_empty( $data['present'] ) ); ?>">
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
                                            <textarea class="shadow-input text-sm border-accent rounded-md text-[#586B74] order-3" id="general_ituation" name="general_situation" rows="4" placeholder="Onko tila ollut pitkään tyhjänä (vuokrauksen haasteet vs tilan vapautuminen juuri) tai milloin tila vapautuu? Mikä uuden vuokralaisen kanssa solmittavan vuokrasopimuksen tilanne on?"><?php echo esc_html( noste_check_empty( $data['general_situation'] ) ); ?></textarea>

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
                                        <textarea class="shadow-input text-sm border-accent rounded-md text-[#586B74]" id="nosti_tasks" name="nosti_tasks" rows="4" placeholder="Nosteelta toivotaan kustannusarvion ja alustavan aikataulun laadintaa? Millä aikataululla yllä olevat tarvitaan?"><?php echo esc_html( noste_check_empty( $data['nosti_tasks'] ) ); ?></textarea>
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
                                                    <input class="shadow-input mr-2 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="agreed_prepare_documents[]" id="agreed_prepare_documents1" value="Vuokrasopimuksen hankintarajaliite" <?php echo esc_attr( noste_checked_with_array( $data['agreed_prepare_documents'], 'Vuokrasopimuksen hankintarajaliite' ) ); ?>>
                                                    Vuokrasopimuksen hankintarajaliite
                                                </label>
                                                <label class="flex items-center text-sm md:text-sm mb-2" for="agreed_prepare_documents2">
                                                    <input class="shadow-input mr-2 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="agreed_prepare_documents[]" id="agreed_prepare_documents2" value="Vuokrasopimuksen rakennustapaselostus" <?php echo esc_attr( noste_checked_with_array( $data['agreed_prepare_documents'], 'Vuokrasopimuksen rakennustapaselostus' ) ); ?>>
                                                    Vuokrasopimuksen rakennustapaselostus
                                                </label>
                                                <label class="flex items-center text-sm md:text-sm mb-2" for="agreed_prepare_documents3">
                                                    <input class="shadow-input mr-2 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="agreed_prepare_documents[]" id="agreed_prepare_documents3" value="Vuokrasopimuksen lähtötietoaikataulu" <?php echo esc_attr( noste_checked_with_array( $data['agreed_prepare_documents'], 'Vuokrasopimuksen lähtötietoaikataulu' ) ); ?>>
                                                    Vuokrasopimuksen lähtötietoaikataulu
                                                </label>
                                                <label class="flex items-center text-sm md:text-sm mb-2" for="agreed_prepare_documents4">
                                                    <input class="shadow-input mr-2 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="agreed_prepare_documents" id="agreed_prepare_documents4" <?php echo esc_attr( !empty($data['agreed_prepare_documents']['others']) ? 'checked' : '' ); ?>>
                                                    <input class="shadow-input text-sm border-accent rounded-md text-[#586B74] w-1/2" type="text" id="agreed_prepare_documents_content" name="agreed_prepare_documents['others']" value="<?php echo esc_attr( noste_check_empty( $data['agreed_prepare_documents']['others'], '' ) ); ?>">
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
                                                    <input class="shadow-input text-sm border-accent rounded-md text-black w-36 md:ml-6" type="text" id="field_of_change_of_status" name="field_of_change_of_status" value="<?php echo esc_attr( noste_check_empty( $data['field_of_change_of_status'] ) ); ?>">
                                                    <span class="flex items-center ml-2">m<sup>2</sup></span>
                                                </div>
                                            </div>
                                            <div class="flex flex-wrap flex-col md:flex-row md:items-center mb-4 mx-auto max-w-[750px]">
                                                <label class="flex-[.5] md:mr-4 text-sm font-medium text-[#999a9b]" for="project_name">Projektin nimi</label>
                                                <input class="shadow-input text-sm border-accent rounded-md w-36 text-black" type="text" id="project_name" name="project_name" placeholder="xxxxx" value="<?php echo esc_attr( noste_check_empty( $data['project_name'] ) ); ?>">
                                            </div>
                                            <div class="flex flex-wrap flex-col md:flex-row md:items-center mb-4">
                                                <label class="flex-[.5] md:mr-4 text-sm font-medium text-[#999a9b]" for="the_building_ompleted_year">Rakennuksen valmistumisvuosi</label>
                                                <input class="shadow-input text-sm border-accent rounded-md w-36 text-black " type="text" id="the_building_ompleted_year" name="the_building_completed_year" value="<?php echo esc_attr( noste_check_empty( $data['the_building_completed_year'] ) ); ?>">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-8 dropdown relative">
                                        <div class="mx-auto max-w-[750px] relative">
                                            <textarea class="shadow-input w-full text-sm border-accent rounded-md text-[#586B74]" id="who_pays_new_requests_and_budget" name="who_pays_new_requests_and_budget" rows="6" placeholder="Käytiin läpi lähtötilanne. Käytiin läpi tilasuunnitelma, tilasuunnitelman lähtötietopuutteet/kysymykset sekä vuokralaisen erikoistoiveet ja tekniset vaatimukset. Käytiin läpi kiinteistön tekniset valmiudet verrattuna vuokralaisen vaatimuksiin. Käytiin läpi tilamuutosten laajuus verrattuna olemassa olevaan tilaan. Käytiin läpi maksaako vuokralainen osan kustannuksista (ja mikä on mahdollinen kustannusjako). Mikä suunnitelmien taso on? Joko suunnitelmat on lukittu vai vieläkö muutoksia tulee."><?php echo esc_html( noste_check_empty( $data['who_pays_new_requests_and_budget'] ) ); ?>
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
                                            
                                            <textarea class="shadow-input text-sm border-accent rounded-md text-[#586B74]" id="other_questions" name="other_questions" rows="4" placeholder="Tullaanko töiden aikana tekemään töitä, jotka eivät kuulu vuokralaismuutokseen (esim. PTS asiat)"><?php echo esc_html( noste_check_empty( $data['other_questions'] ) ); ?></textarea>
                                        </div>

                                        <div class="tooltip_content p-2 lg:w-52 lg:after:w-[142%] xl:after:w-[286%] 2xl:after:w-[351%] border border-[#E1E1EA] bg-[#F6F8FF] rounded-md relkative lg:absolute top-0 right-2 order-2 mb-2 hidden" id="other_questions_tooltip4">
                                            <p class="text-xs font-normal text-[#586B74]">Kiinteistöissä tehdään kiinteistön ylläpitoon ja huoltoon liittyviä PTS-korjauksia (eli pitkän tähtäimen suunnitelman mukaisia korjauksia). Kiinteistö hoitaa PTS-korjaukset pääsääntöisesti itse mutta jos vuokralaismuutosalueella on jotakin tiedossa olevia töitä ne usein halutaan yhdistää vuokralaismuutoksen kanssa.</p>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="mb-8 mx-auto max-w-[750px]">
                                        <h5 class="mr-4 mb-2 text-sm font-normal text-black">Sähkön laskutus</h5>
                                        <div class="flex md:flex-wrap flex-col md:flex-row md:items-center justify-between mb-4">
                                            <label class="flex items-center text-sm mb-2" for="electricity_billing1">
                                                <input class="shadow-input mr-2 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="electricity_billing[]" id="electricity_billing1" value="Sahko laskutetaan nelioperusteisesti" <?php echo esc_attr( noste_checked_with_array( $data['electricity_billing'], 'Sahko laskutetaan nelioperusteisesti' ) ); ?>>
                                                Sähkö laskutetaan neliöperusteisesti
                                            </label>
                                            <label class="flex items-center text-sm mb-2" for="electricity_billing2">
                                                <input class="shadow-input mr-2 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="electricity_billing[]" id="electricity_billing2" value="kiinteiston alamittauksen avulla" <?php echo esc_attr( noste_checked_with_array( $data['electricity_billing'], 'kiinteiston alamittauksen avulla' ) ); ?>>
                                                kiinteistön alamittauksen avulla
                                            </label>
                                            <label class="flex items-center text-sm mb-2" for="electricity_billing3">
                                                <input class="shadow-input mr-2 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="electricity_billing[]" id="electricity_billing3" value="vuokralaisella oma sahkosopimus" <?php echo esc_attr( noste_checked_with_array( $data['electricity_billing'], 'vuokralaisella oma sahkosopimus' ) ); ?>>
                                                vuokralaisella oma sähkösopimus
                                            </label>
                                        </div>
                                        <textarea class="shadow-input w-full text-sm border-accent rounded-md text-[#586B74]" id="electricity_billing_comment" name="electricity_billing_comment" rows="4" placeholder="Miten tilaan pääsee käymään/kulkutunnisteet? Onko käytössä projektipankkia vai jaetaanko suunnitelmia sähköpostilla? Sähköisen laskutuksen ohjeet?"><?php echo esc_html( noste_check_empty( $data['electricity_billing_comment'] ) ); ?></textarea>
                                    </div>

                                    <div class="mx-auto max-w-[750px]">
                                        <h5 class="mr-4 mb-4 text-sm font-medium text-black">Perustiedot</h5>
                                        <p class="mb-4 text-sm">Tämän läpikäynnin tavoitteena on projektin lähtötietojen tehokas selvittäminen ja koonti yhteen paikkaan. Lisäksi käydään yhteisesti läpi Nosteelle astetetut tehtävät sekä arvioitu aikataulu.</p>
                                    </div>


                                    <div class="flex flex-wrap flex-col md:flex-row md:items-center mb-4 mx-auto max-w-[750px]">
                                        <label class="flex-[2] mr-4 text-sm font-normal text-[#586B74]" for="property_name">Kiinteistön nimi</label>
                                        <input class="shadow-input flex-[3] text-sm border-accent rounded-md text-[#586B74]" type="text" id="property_name" name="property_name" value="<?php echo esc_attr( noste_check_empty( $data['property_name'] ) ); ?>">
                                    </div>

                                    <div class="flex flex-wrap flex-col md:flex-row md:items-center mb-4 mx-auto max-w-[750px]">
                                        <label class="flex-[2] mr-4 text-sm font-normal text-[#586B74]" for="sreet_address">Kiinteistön katuosoite</label>
                                        <input class="shadow-input flex-[3] text-sm border-accent rounded-md text-[#586B74]" type="text" id="sreet_address" name="sreet_address" value="<?php echo esc_attr( noste_check_empty( $data['sreet_address'] ) ); ?>">
                                    </div>

                                    <div class="flex flex-wrap flex-col md:flex-row md:items-center mb-4 mx-auto max-w-[750px]">
                                        <label class="flex-[2] mr-4 text-sm font-normal text-[#586B74]" for="property_manager">Kiinteistöpäällikkö (Henkilö)</label>
                                        <input class="shadow-input flex-[3] text-sm border-accent rounded-md text-[#586B74]" type="text" id="property_manager" name="property_manager" value="<?php echo esc_attr( noste_check_empty( $data['property_manager'] ) ); ?>">
                                    </div>

                                    <div class="flex flex-wrap flex-col md:flex-row md:items-center mb-4 mx-auto max-w-[750px]">
                                        <label class="flex-[2] mr-4 text-sm font-normal text-[#586B74]" for="property_manager_email">Kiinteistöpäällikön sähköposti</label>
                                        <input class="shadow-input flex-[3] text-sm border-accent rounded-md text-[#586B74]" type="email" id="property_manager_email" name="property_manager_email" value="<?php echo esc_attr( noste_check_empty( $data['property_manager_email'] ) ); ?>">
                                    </div>

                                    <div class="flex flex-wrap flex-col md:flex-row md:items-center mb-4 mx-auto max-w-[750px]">
                                        <label class="flex-[2] mr-4 text-sm font-normal text-[#586B74]" for="property_manager_phone">Kiinteistöpäällikön puhelinnumero</label>
                                        <input class="shadow-input flex-[3] text-sm border-accent rounded-md text-[#586B74]" type="tel" id="property_manager_phone" name="property_manager_phone" value="<?php echo esc_attr( noste_check_empty( $data['property_manager_phone'] ) ); ?>">
                                    </div>

                                    <div class="flex flex-wrap flex-col md:flex-row md:items-center mb-4 mx-auto max-w-[750px]">
                                        <label class="flex-[2] mr-4 text-sm font-normal text-[#586B74]" for="maintenance_person">Huoltohenkilö (Henkilö)</label>
                                        <input class="shadow-input flex-[3] text-sm border-accent rounded-md text-[#586B74]" type="text" id="maintenance_person" name="maintenance_person" value="<?php echo esc_attr( noste_check_empty( $data['maintenance_person'] ) ); ?>">
                                    </div>

                                    <div class="flex flex-wrap flex-col md:flex-row md:items-center mb-4 mx-auto max-w-[750px]">
                                        <label class="flex-[2] mr-4 text-sm font-normal text-[#586B74]" for="service_email">Huollon sähköposti</label>
                                        <input class="shadow-input flex-[3] text-sm border-accent rounded-md text-[#586B74]" type="email" id="service_email" name="service_email" value="<?php echo esc_attr( noste_check_empty( $data['service_email'] ) ); ?>">
                                    </div>

                                    <div class="flex flex-wrap flex-col md:flex-row md:items-center mb-4 mx-auto max-w-[750px]">
                                        <label class="flex-[2] mr-4 text-sm font-normal text-[#586B74]" for="service_phone_number">Huollon puhelinnumero</label>
                                        <input class="shadow-input flex-[3] text-sm border-accent rounded-md text-[#586B74]" type="tel" id="service_phone_number" name="service_phone_number" value="<?php echo esc_attr( noste_check_empty( $data['service_phone_number'] ) ); ?>">
                                    </div>

                                    <div class="flex flex-wrap flex-col md:flex-row md:items-center mb-4 mx-auto max-w-[750px]">
                                        <label class="flex-[2] mr-4 text-sm font-normal text-[#586B74]" for="aulas_email">Aulan sähköposti</label>
                                        <input class="shadow-input flex-[3] text-sm border-accent rounded-md text-[#586B74]" type="email" id="aulas_email" name="aulas_email" value="<?php echo esc_attr( noste_check_empty( $data['aulas_email'] ) ); ?>">
                                    </div>

                                    <div class="flex flex-wrap flex-col md:flex-row md:items-center mb-4 mx-auto max-w-[750px]">
                                        <label class="flex-[2] mr-4 text-sm font-normal text-[#586B74]" for="lobby_phone_number">Aulan puhelinnumero</label>
                                        <input class="shadow-input flex-[3] text-sm border-accent rounded-md text-[#586B74]" type="tel" id="lobby_phone_number" name="lobby_phone_number" value="<?php echo esc_attr( noste_check_empty( $data['lobby_phone_number'] ) ); ?>">
                                    </div>

                                    <div class="flex flex-wrap flex-col md:flex-row md:items-center mb-4 mx-auto max-w-[750px]">
                                        <label class="flex-[2] mr-4 text-sm font-normal text-[#586B74]" for="lobby_opening_hours">Aulan aukioloajat</label>
                                        <input class="shadow-input flex-[3] text-sm border-accent rounded-md text-[#586B74]" type="text" id="lobby_opening_hours" name="lobby_opening_hours" value="<?php echo esc_attr( noste_check_empty( $data['lobby_opening_hours'] ) ); ?>">
                                    </div>

                                    <div class="flex flex-wrap flex-col md:flex-row md:items-center mb-4 mx-auto max-w-[750px]">
                                        <label class="flex-[2] mr-4 text-sm font-normal text-[#586B74]" for="tenant_company">Vuokralainen (yhtiö)</label>
                                        <input class="shadow-input flex-[3] text-sm border-accent rounded-md text-[#586B74]" type="text" id="tenant_company" name="tenant_company" value="<?php echo esc_attr( noste_check_empty( $data['tenant_company'] ) ); ?>">
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