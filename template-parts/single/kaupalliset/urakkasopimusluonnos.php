<?php 

if ( !is_singular( 'projektitiedot' ) ) {
   return;
}

$project_id = get_the_ID();
$ptname = implode('_', ['noste', $_GET['tm'], $_GET['tmin']]);
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
                    <?php wp_nonce_field('project_step_form_validation', 'project_step_form__nonce_field'); ?>
                    <input type="hidden" name="ptname" value="<?php echo esc_attr(implode('_', ['noste', $_GET['tm'], $_GET['tmin']])); ?>">
                    <input type="hidden" name="action" value="noste_update_project_step">
                    <input type="hidden" name="post_id" value="<?php echo esc_attr( $project_id ); ?>">
                    
                    <!-- Card Body -->
                    <div class="px-4 md:px-8 pt-6 pb-10 lg:h-[645px] overflow-y-auto no-scrollbar scroll-smooth">
                    
                        <div class="max-w-[800px] mx-auto mt-20">
                            <div class="mb-[30px]">
                                <span class="font-medium italic text-[#00B2A9] block"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K1', true ), 'K1') ); ?></span>
                                <span class="font-medium italic text-[#00B2A9] block"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K4', true ), 'K4') ); ?></span>
                            </div>

                            <div class="mb-[30px]">
                                <h1 class="text-black text-[28px] font-medium mb-4">Urakkasopimus. YSE 1998 asiakirja</h1>
                            </div>
                        </div>

                        <div class="help_wrap mb-5 relative">
                            <div class="max-w-[800px] mx-auto flex items-center gap-2">
                                <p class="text-[#586B74] text-[17px] min-w-[480px]">Tämä sopimuslomake pohjautuu ohjekorttiin RT 80260 (2016), Rakennusurakan yleisiin sopimusehtoihin YSE 1998, RT 16-10660, LVI 03-10277, Ratu 417-T, KH X4-00241, Infra 052-710016. Viittaukset VNa 205/2009.</p>

                                <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                                
                                <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                            </div>

                            <div class="help_show text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-80px] hidden">
                                <a href="https://www.finlex.fi/fi/laki/ajantasa/2009/20090205" class="text-[#00B2A9]" target="_blank">https://www.finlex.fi/fi/laki/ajantasa/2009/20090205</a>
                            </div>
                        </div>

                        <div class="max-w-[800px] mx-auto mt-10">
                            <div class="flex items-center mb-5">
                                <span class="text-[#586B74] text-[17px] w-[20%]">Hanke:</span>
                                <span class="text-[#586B74] text-[15px]">
                                    <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K4', true ), 'K4') ); ?></span>
                                </span>
                            </div>
                            <div class="flex items-center mb-5">
                                <span class="text-[#586B74] text-[17px] w-[20%]">Projektinumero:</span>
                                <span class="text-[#586B74] text-[15px]">
                                    <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K8', true ), 'K8') ); ?></span>
                                </span>
                            </div>
                            <div class="flex items-start mb-5">
                                <span class="text-[#586B74] text-[17px] w-[20%]">Rakennuskohde:</span>
                                <span class="text-[#586B74] text-[15px]">
                                    <span class="text-[#00B2A9] italic block mb-2"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K1', true ), 'K1') ); ?></span>
                                    <span class="text-[#00B2A9] italic block mb-2"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T1', true ), 'T1') ); ?></span>
                                    <span class="text-[#00B2A9] italic block mb-2"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K2', true ), 'K2') ); ?></span>
                                    <span class="text-[#00B2A9] italic block mb-2"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K3', true ), 'K3') ); ?></span>
                                </span>
                            </div>
                            <p class="text-[#586B74] mt-5 mb-10">
                                Urakkasopimus käsittää pääurakan, sisältäen kaikki tilan rakennustekniset sekä LVIAS-tekniset työt tarjouspyyntöasiakirjoissa esitetyssä laajuudessa.
                            </p>

                            <h2 class="text-black text-[20px] font-medium">
                                1. SOPIJAPUOLET
                            </h2>
                            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[20px] my-5">
                                <span class="text-[#586B74]">Tilaaja:</span>
                                <span>
                                    <span class="text-[#00B2A9] italic block mb-3"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T1', true ), 'T1') ); ?></span>
                                    <span class="text-[#586B74] text-[15px] block mb-3">
                                        Y-tunnus <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T7', true ), 'T7') ); ?></span>
                                    </span>
                                    <span class="text-[#00B2A9] italic block mb-3"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T8', true ), 'T8') ); ?></span>
                                </span>
                                <span class="text-[#00B2A9] italic block mb-2"></span>
                            </div>
                            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[20px] mb-5">
                                <span class="text-[#586B74]">Tilaajan edustajat:</span>
                                <span>
                                    <span class="text-[#586B74] block mb-3">Sopimusasioissa</span>
                                    <span class="text-[#00B2A9] italic block mb-3"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T4', true ), 'T4') ); ?></span>
                                    <span class="text-[#00B2A9] italic block mb-3"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T3', true ), 'T3') ); ?></span>
                                    <span class="text-[#00B2A9] italic block mb-3"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T6', true ), 'T6') ); ?></span>
                                    <span class="text-[#00B2A9] italic block mb-3"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T5', true ), 'T5') ); ?></span>
                                    <span class="text-[#00B2A9] italic block mb-3"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T2', true ), 'T2') ); ?></span>
                                </span>
                                <span>
                                    <span class="text-[#586B74] block mb-3">Työsuoritukseen liittyvissä asioissa</span>
                                    <span class="text-[#586B74] block mb-3">Projektipäällikkö</span>
                                    <span class="text-[#00B2A9] italic block mb-3"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P1', true ), 'P1') ); ?></span>
                                    <span class="text-[#00B2A9] italic block mb-3"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P3', true ), 'P3') ); ?></span>
                                    <span class="text-[#00B2A9] italic block mb-3"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P2', true ), 'P2') ); ?></span>
                                    <span class="text-[#586B74] block mb-3">Partners at Noste Oy</span>
                                </span>
                            </div>

                            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[20px] mb-5">
                                <span class="text-[#586B74]">Urakoitsija:</span>
                                <span>
                                    <span class="text-[#00B2A9] italic block mb-3"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_U1', true ), 'U1') ); ?></span>
                                    <span class="text-[#586B74] text-[15px] block mb-3">
                                        Y-tunnus <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_U2', true ), 'U2') ); ?></span>
                                    </span>
                                    <span class="text-[#00B2A9] italic block mb-3"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_U3', true ), 'U3') ); ?></span>
                                </span>
                                <span></span>
                            </div>

                            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[20px] mb-5">
                                <span class="text-[#586B74]">Urakoitsijan edustajat:</span>
                                <span>
                                    <span class="text-[#586B74] block mb-3">Sopimusasioissa</span>
                                    <span class="text-[#00B2A9] italic block mb-3"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_U4', true ), 'U4') ); ?></span>
                                    <span class="text-[#00B2A9] italic block mb-3"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_U5', true ), 'U5') ); ?></span>
                                    <span class="text-[#00B2A9] italic block mb-3"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_U6', true ), 'U6') ); ?></span>
                                </span>
                                <span>
                                    <span class="text-[#586B74] block mb-3">Työsuoritukseen liittyvissä asioissa</span>
                                    <span class="text-[#00B2A9] italic block mb-3"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_U7', true ), 'U7') ); ?></span>
                                    <span class="text-[#00B2A9] italic block mb-3"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_U8', true ), 'U8') ); ?></span>
                                    <span class="text-[#00B2A9] italic block mb-3"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_U9', true ), 'U9') ); ?></span>
                                </span>
                            </div>

                            <h2 class="text-black text-[20px] font-medium mb-5">
                                2. MUUT OSAPUOLET
                            </h2>
                            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[20px] mb-5">
                                <span class="text-[#586B74]">Rakennuttaja:</span>
                                <span class="text-[#00B2A9] italic block mb-3"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T1', true ), 'T1') ); ?></span>
                                <span></span>
                            </div>
                            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[20px] mb-5">
                                <span class="text-[#586B74]">Rakennuttajakonsultti:</span>
                                <span class="text-[#586B74]">Partners at Noste Oy</span>
                                <span></span>
                            </div>
                            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[20px] mb-5">
                                <span class="text-[#586B74]">Pääurakoitsija:</span>
                                <span class="text-[#00B2A9] italic block mb-3"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_U1', true ), 'U1') ); ?></span>
                                <span></span>
                            </div>
                            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[20px] mb-5">
                                <span class="text-[#586B74]">Työmaan johtovelvollisuuksista vastaava päätoteuttaja:</span>
                                <span class="text-[#00B2A9] italic block mb-3"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_U1', true ), 'U1') ); ?></span>
                                <span></span>
                            </div>
                            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[20px] mb-5">
                                <span class="text-[#586B74]">Työmaapalveluista vastaava:</span>
                                <span class="text-[#00B2A9] italic block mb-3"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_U1', true ), 'U1') ); ?></span>
                                <span></span>
                            </div>
                            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[20px] mb-5">
                                <span class="text-[#586B74]">Alistetut sivu-urakoitsijat:</span>
                                <span class="text-[#586B74]">Ei alistettuja sivu-urakoita.</span>
                                <span></span>
                            </div>
                        </div>

                        <div class="help_wrap mt-10 mb-5 relative">
                            <div class="max-w-[800px] mx-auto flex items-center gap-2">
                                <div class="flex gap-[94px] min-w-[525px]">
                                    <span class="text-[#586B74]">Alistetut sivu-urakoitsijat:</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" {{ helpers.noste_checkbox_attrset('pilar_TY_1') }}>
                                        <span class="text-[#586B74]">Ei nimettyjä erillishankintoja.</span>
                                    </label>
                                </div>

                                <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                                
                                <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                            </div>

                            <div class="help_show text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                Lähtökohtaisesti urakka-aikana ei tehdä muita töitä kohteessa. Kuitenkin joskus vuokranantaja tai vuokralainen saattaa tehdä omia asennuksia kohteessa ja niitä joudutaan mahdollisesti aikataulusyistä tekemään urakka-aikana. Erillishankinnoista pitää aina sopia urakoitsijan kanssa, koska he toimivat yhteisen työmaan osalta päävastuullisena työturvallisuuden ja sujuvuuden osalta. Tässä sopimuksessa on kuitenkin mahdollistettu erillishankintojen tekeminen alla olevilla kirjauksilla. 
                            </div>
                        </div>

                        <div class="help_wrap mt-10 mb-5 relative">
                            <div class="max-w-[800px] mx-auto flex items-center gap-2">
                                <div class="flex gap-[94px] min-w-[530px]">
                                    <span class="text-[#586B74] opacity-0">Alistetut sivu-urakoitsijat:</span>
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" {{ helpers.noste_checkbox_attrset('pilar_TY_2') }}>
                                        <input type="text" {{ helpers.noste_textinput_attrset('pilar_f2') }} placeholder="Erillishankinta ja toimittaja." class="flex-1 w-full lg:w-[230px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </label>
                                </div>

                                <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                                
                                <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                            </div>

                            <div class="help_show text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                Tähän uusi laatikko alapuolelle tarjolle, kun tämä laatikko rastitettu. Voi olla useampia.
                            </div>
                        </div>

                        <div class="max-w-[800px] mx-auto mt-10">
                            <h2 class="text-black text-[20px] font-medium mb-5">
                                3. SOPIMUKSET JA KÄSITTEISTÖ
                            </h2>
                            <p class="text-[#586B74] my-5">
                                Tässä urakassa noudatetaan Rakennusurakan yleisiä sopimusehtoja (YSE 1998 RT 16-10660), joihin tämä asiakirja perustuu, ellei tässä urakkasopimuksessa ole jonkun sopimusehdon osalta toisin kirjattu. Rakennusurakan yleisistä sopimusehdoista käytetään jäljempänä nimitystä YSE. 
                                <br>
                                Tässä urakkasopimuksessa käytetään YSE:n mukaista käsitteistöä. Muina käsitteinä noudatetaan ensisijaisesti muita julkaisuja ja rakennusalalla yleisesti käytössä olevia käsitteitä.
                            </p>

                            <h2 class="text-black text-[20px] font-medium mt-10">
                                4. URAKOITSIJAN SUORITUSVELVOLLISUUS
                            </h2>
                            <p class="text-[#586B74] my-5">
                                Urakan kohde
                            </p>
                        </div>

                        <div class="help_wrap relative">
                            <div class="max-w-[800px] mx-auto flex items-center gap-2">
                                
                                <div class="ml-20 min-w-[400px]">
                                    <input type="text" {{ helpers.noste_textinput_attrset('pilar_f3') }} placeholder="Vapaa teksti" class="w-full lg:w-[400px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </div>

                                <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                                
                                <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                            </div>

                            <div class="help_show text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                Lisää lyhyt kuvaus kohteesta. Esimerkiksi: Helsingin Pitäjänmäessä sijaitseva toimistokiinteistö. Muutostöiden alainen tila sijaitsee 6 kerroksisen rakennuksen 2. kerroksessa A-siivessä. Kiinteistössä on käyttäjiä urakan aikana.
                            </div>
                        </div>

                        <div class="max-w-[800px] mx-auto">
                            <p class="text-[#586B74] my-5">
                                Pääsuoritusvelvollisuus (Viite YSE 1 §)
                            </p>
                            <p class="text-[#586B74] ml-20">
                                Urakkaan kuuluvat YSE 1§:n mukaisesti kaikki sopimusasiakirjoissa urakoitsijalle määritellyt rakennustekniset sekä LVIAS-tekniset työt materiaaleineen, laitteineen ja hankintoineen sekä toimenpiteet, jotka tarvitaan kohteen saattamiseksi täysin valmiiksi. Urakoitsijan tulee suorittaa sopimuksenmukainen tehtävänsä ammattitaidolla noudattaen voimassa olevia rakentamista koskevia säädöksiä ja hyvää rakentamistapaa.
                            </p>

                            <p class="text-[#586B74] my-5">
                                Sivuvelvollisuudet (Viite YSE 2 §)
                            </p>
                            <p class="text-[#586B74] ml-20">
                                Urakkaan kuuluvat kaikki YSE 1998 2§:n toimenpiteet ja velvollisuudet, joita sopimusasiakirjoissa ei erikseen ole mainittu kuuluvaksi rakennuttajan velvoitteisiin. Pääurakoitsija vastaa tarvittavien ilmoitusten ja hyväksyttämisten tekemisestä viranomaisille.
                            </p>

                            <p class="text-[#586B74] my-5">
                                Työmaapalvelut (Viite YSE 3 §)
                            </p>
                            <p class="text-[#586B74] ml-20">
                                Pääurakoitsija vastaa YSE 1998 3 § mukaisista työmaapalveluista tämän urakkasopimuksen ja urakka-aikana tapahtuvien erillisurakoiden ja -hankintojen osalta.
                            </p>

                            <p class="text-[#586B74] my-5">
                                Työmaan johtovelvollisuudet (Viite YSE 4 §)
                            </p>
                            <p class="text-[#586B74] ml-20">
                                Urakkaan kuuluvat kaikki YSE 1998 4§:n toimenpiteet ja velvollisuudet. Urakoitsija toimii pääurakoitsijana, vastaa työmaan johtovelvollisuuksista ja toimii lainsäädännön tarkoittamana työturvallisuudesta vastaavana päätoteuttajana. Pääurakoitsija vastaa työmaan johtovelvollisuuksista myös urakka-aikana tehtävien erillishankintojen ja erillisurakoiden osalta. Rakennuttajalle ei siirry tämän asiakirjan tai muiden urakka-asiakirjojen kautta mitään päätoteuttajan työmaata koskevia velvoitteita
                            </p>

                            <h2 class="text-black text-[20px] font-medium mt-10">
                                5. SOPIMUSASIAKIRJAT
                            </h2>
                            <p class="text-[#586B74] mt-5">
                                (Viite YSE 12 § ja 13 §)
                            </p>
                            <p class="text-[#586B74] mt-5">
                                Urakassa noudatetaan tätä sopimusta ja siihen liittyviä jäljempänä lueteltuja sopimusasiakirjoja.
                            </p>
                            <p class="text-[#586B74] mt-5">
                                Asiakirjojen keskinäinen pätevyysjärjestys
                            </p>
                            <p class="text-[#586B74] mt-5 ml-20">
                                Asiakirjojen pätevyysjärjestys poikkeaa YSE 1998 13§:n järjestyksestä ja on alla olevan asiakirjaluettelon 
                                <br>
                                mukainen. 
                                <br>
                                Sopimusasiakirjojen lisäksi urakkasuorituksessa tulee noudattaa rakentamista koskevia yleisiä 
                                <br>
                                asetuksia, standardeja, työohjeita, työselityksiä sekä hyvää rakennustapaa.
                            </p>
                        </div>

                        <div class="help_wrap mt-10 mb-5 relative">
                            <div class="max-w-[800px] mx-auto flex items-center gap-2">
                                <h3 class="text-black text-[16px] font-medium min-w-[260px]">
                                    5.1. URAKKA-ASIAKIRJALUETTELO
                                </h3>

                                <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                                
                                <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                            </div>

                            <div class="help_show text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                Liitenumerot automaattisesti
                            </div>
                        </div>

                        <div class="help_wrap my-3 mb-5 relative">
                            <div class="max-w-[800px] mx-auto flex items-center gap-2">
                                <p class="text-[#586B74] min-w-[155px]">
                                    Kaupalliset asiakirjat
                                </p>

                                <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                                
                                <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                            </div>

                            <div class="help_show text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                Valitse tarpeelliset laatikot, päivitä liitenumerointi ja päivämäärät
                            </div>
                        </div>

                        <div class="max-w-[800px] mx-auto">
                            <table class="w-full">
                                <tr>
                                    <td class="text-center w-[8%] font-medium p-3 border border-solid border-[#E1E1EA]">
                                    </td>
                                    <td class="w-[45%] text-center text-[#586B74] p-3 border border-solid border-[#E1E1EA]">
                                        Asiakirjan nimi
                                    </td>
                                    <td class="w-[45%] text-center text-[#586B74] p-3 border border-solid border-[#E1E1EA]">
                                        Päiväys
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center w-[8%] font-medium p-3 border border-solid border-[#E1E1EA]">
                                    </td>
                                    <td class="w-[45%] text-center text-[#586B74] p-3 border border-solid border-[#E1E1EA]">
                                        Urakkasopimus
                                    </td>
                                    <td class="w-[45%] text-center text-[#586B74] p-3 border border-solid border-[#E1E1EA]">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center w-[8%] font-medium p-3 border border-solid border-[#E1E1EA]">
                                    </td>
                                    <td class="w-[45%] text-center text-[#586B74] p-3 border border-solid border-[#E1E1EA]">
                                        Urakkaneuvottelupöytäkirja
                                    </td>
                                    <td class="w-[45%] text-center text-[#586B74] p-3 border border-solid border-[#E1E1EA]">
                                        <input type="text" {{ helpers.noste_textinput_attrset('pilar_VA_1') }} placeholder="XX.XX.XXXX" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-full border border-solid border-[#06F9B7] rounded-[5px] px-2 py-1">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center w-[8%] font-medium p-3 border border-solid border-[#E1E1EA]">
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" {{ helpers.noste_checkbox_attrset('pilar_TY_3') }}>
                                        </label>
                                    </td>
                                    <td class="w-[45%] text-center text-[#586B74] p-3 border border-solid border-[#E1E1EA]">
                                        Lisäkirje 3
                                    </td>
                                    <td class="w-[45%] text-center text-[#586B74] p-3 border border-solid border-[#E1E1EA]">
                                        <input type="text" {{ helpers.noste_textinput_attrset('pilar_VA_2') }} placeholder="XX.XX.XXXX" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-full border border-solid border-[#06F9B7] rounded-[5px] px-2 py-1">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center w-[8%] font-medium p-3 border border-solid border-[#E1E1EA]">
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" {{ helpers.noste_checkbox_attrset('pilar_TY_4') }}>
                                        </label>
                                    </td>
                                    <td class="w-[45%] text-center text-[#586B74] p-3 border border-solid border-[#E1E1EA]">
                                        Lisäkirje 2
                                    </td>
                                    <td class="w-[45%] text-center text-[#586B74] p-3 border border-solid border-[#E1E1EA]">
                                        <input type="text" {{ helpers.noste_textinput_attrset('pilar_VA_3') }} placeholder="XX.XX.XXXX" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-full border border-solid border-[#06F9B7] rounded-[5px] px-2 py-1">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center w-[8%] font-medium p-3 border border-solid border-[#E1E1EA]">
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" {{ helpers.noste_checkbox_attrset('pilar_TY_5') }}>
                                        </label>
                                    </td>
                                    <td class="w-[45%] text-center text-[#586B74] p-3 border border-solid border-[#E1E1EA]">
                                        Lisäkirje 1
                                    </td>
                                    <td class="w-[45%] text-center text-[#586B74] p-3 border border-solid border-[#E1E1EA]">
                                        <input type="text" {{ helpers.noste_textinput_attrset('pilar_VA_4') }} placeholder="XX.XX.XXXX" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-full border border-solid border-[#06F9B7] rounded-[5px] px-2 py-1">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center w-[8%] font-medium p-3 border border-solid border-[#E1E1EA]">
                                    </td>
                                    <td class="w-[45%] text-center text-[#586B74] p-3 border border-solid border-[#E1E1EA]">
                                        Tarjouspyyntökirje
                                    </td>
                                    <td class="w-[45%] text-center text-[#586B74] p-3 border border-solid border-[#E1E1EA]">
                                        <input type="text" {{ helpers.noste_textinput_attrset('pilar_VA_5') }} placeholder="XX.XX.XXXX" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-full border border-solid border-[#06F9B7] rounded-[5px] px-2 py-1">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center w-[8%] font-medium p-3 border border-solid border-[#E1E1EA]">
                                    </td>
                                    <td class="w-[45%] text-center text-[#586B74] p-3 border border-solid border-[#E1E1EA]">
                                        Rakennuttajan turvallisuusasiakirja
                                    </td>
                                    <td class="w-[45%] text-center text-[#586B74] p-3 border border-solid border-[#E1E1EA]">
                                        <input type="text" {{ helpers.noste_textinput_attrset('pilar_VA_6') }} placeholder="XX.XX.XXXX" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-full border border-solid border-[#06F9B7] rounded-[5px] px-2 py-1">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center w-[8%] font-medium p-3 border border-solid border-[#E1E1EA]">
                                    </td>
                                    <td class="w-[45%] text-center text-[#586B74] p-3 border border-solid border-[#E1E1EA]">
                                        YSE 1998 (YSE on yleinen asiakirja, jota ei kopioida sopimukseen)
                                    </td>
                                    <td class="w-[45%] text-center text-[#586B74] p-3 border border-solid border-[#E1E1EA]">
                                        <input type="text" {{ helpers.noste_textinput_attrset('pilar_VA_7') }} placeholder="XX.XX.XXXX" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-full border border-solid border-[#06F9B7] rounded-[5px] px-2 py-1">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center w-[8%] font-medium p-3 border border-solid border-[#E1E1EA]">
                                    </td>
                                    <td class="w-[45%] text-center text-[#586B74] p-3 border border-solid border-[#E1E1EA]">
                                        Tarjous
                                    </td>
                                    <td class="w-[45%] text-center text-[#586B74] p-3 border border-solid border-[#E1E1EA]">
                                        <input type="text" {{ helpers.noste_textinput_attrset('pilar_VA_8') }} placeholder="XX.XX.XXXX" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-full border border-solid border-[#06F9B7] rounded-[5px] px-2 py-1">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center w-[8%] font-medium p-3 border border-solid border-[#E1E1EA]">
                                    </td>
                                    <td class="w-[45%] text-center text-[#586B74] p-3 border border-solid border-[#E1E1EA]">
                                        Maksuerätaulukko
                                    </td>
                                    <td class="w-[45%] text-center text-[#586B74] p-3 border border-solid border-[#E1E1EA]">
                                        <input type="text" {{ helpers.noste_textinput_attrset('pilar_VA_9') }} placeholder="XX.XX.XXXX" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-full border border-solid border-[#06F9B7] rounded-[5px] px-2 py-1">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center w-[8%] font-medium p-3 border border-solid border-[#E1E1EA]">
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" {{ helpers.noste_checkbox_attrset('pilar_TY_6') }}>
                                        </label>
                                    </td>
                                    <td class="w-[45%] text-center text-[#586B74] p-3 border border-solid border-[#E1E1EA]">
                                        <input type="text" {{ helpers.noste_textinput_attrset('pilar_VA_10') }} placeholder="Vapaa teksti" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-full lg:w-[250px] border border-solid border-[#06F9B7] rounded-[5px] px-2 py-1 mx-auto">
                                    </td>
                                    <td class="w-[45%] text-center text-[#586B74] p-3 border border-solid border-[#E1E1EA]">
                                        <input type="text" {{ helpers.noste_textinput_attrset('pilar_VA_11') }} placeholder="XX.XX.XXXX" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-full border border-solid border-[#06F9B7] rounded-[5px] px-2 py-1">
                                    </td>
                                </tr>
                            </table>

                            <p class="text-[#586B74] my-10">
                                Tekniset asiakirjat
                            </p>
                            <table class="w-full">
                                <tr>
                                    <td class="text-center w-[8%] font-medium p-3 border border-solid border-[#E1E1EA]">
                                    </td>
                                    <td class="w-[45%] text-center text-[#586B74] p-3 border border-solid border-[#E1E1EA]">
                                        Asiakirjan nimi
                                    </td>
                                    <td class="w-[45%] text-center text-[#586B74] p-3 border border-solid border-[#E1E1EA]">
                                        Päiväys
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center w-[8%] font-medium p-3 border border-solid border-[#E1E1EA]">
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" {{ helpers.noste_checkbox_attrset('pilar_TY_7') }}>
                                        </label>
                                    </td>
                                    <td class="w-[45%] text-center text-[#586B74] p-3 border border-solid border-[#E1E1EA]">
                                        <input type="text" {{ helpers.noste_textinput_attrset('pilar_VA_12') }} placeholder="Vapaa teksti" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-full lg:w-[250px] border border-solid border-[#06F9B7] rounded-[5px] px-2 py-1 mx-auto">
                                    </td>
                                    <td class="w-[45%] text-center text-[#586B74] p-3 border border-solid border-[#E1E1EA]">
                                        <input type="text" {{ helpers.noste_textinput_attrset('pilar_VA_13') }} placeholder="XX.XX.XXXX" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-full border border-solid border-[#06F9B7] rounded-[5px] px-2 py-1">
                                    </td>
                                </tr>
                            </table>

                            <h2 class="text-black text-[20px] font-medium mt-10">
                                6. TILAAJAN MYÖTÄVAIKUTUSVELVOLLISUUS
                            </h2>
                            <p class="text-[#586B74] my-5">
                                Lupien hankkiminen (Viite YSE 8 §)
                            </p>
                            <p class="text-[#586B74] ml-20">
                                Rakennuslupaa ei tarvita. 
                                <br>
                                Työsuoritukseen liittyvien ilmoitusten ja lupien tekemisestä/hankkimisesta vastaa pääurakoitsija.
                            </p>

                            <p class="text-[#586B74] my-5">
                                Suunnitelmien toimittaminen (Viite 8 §)
                            </p>
                            <p class="text-[#586B74] ml-20">
                                Rakennuttaja on toimittanut suunnitelmat urakoitsijalle sähköisesti.
                                <br>
                                Urakoitsija hankkii tarvittavat paperiset suunnitelmasarjat omalla kustannuksellaan.
                            </p>

                            <p class="text-[#586B74] my-5">
                                Tilaajan teettämät muut työt ja hankinnat (Viite YSE 7 § ja 8 §)
                            </p>
                            <p class="text-[#586B74] ml-20">
                                Rakennuttajalla ja käyttäjällä on oikeus teettää muita töitä tämän urakan aikana erillisurakkana / -hankintana. Näistä töistä sovitaan osapuolten kesken erikseen. Erillishankintojen mukaiset työt tehdään mahdollisesti osittain päällekkäin pääurakoitsijan töiden kanssa. Pääurakoitsija vastaa eri urakoitsijoiden töiden yhteensovittamisesta. Erillisurakoitsijat vastaavat itse omien töidensä aikataulusuunnittelusta ja aikataulunmukaisuudesta.
                            </p>

                            <h2 class="text-black text-[20px] font-medium mt-10">
                                7. LAADUNVARMISTUS
                            </h2>
                            <p class="text-[#586B74] my-5 leading-7">
                                (Viite YSE 9 §) 
                                <br>
                                YSE 1998 9§:n mukaisesti. 
                                <br>
                                (Viite YSE 10 §) 
                                <br>
                                Pääurakoitsijan tulee suorittaa rakennuttajan ja viranomaisten edellyttämät laadunvarmistus- ja valvontatoimenpiteet sekä muut velvollisuudet YSE 1998 10§:n mukaisesti. 
                                <br>
                                Pääurakoitsija vastaa omasta ja aliurakoitsijoidensa työsuorituksesta sekä työtulosten vaatimusten mukaisuudesta. Pääurakoitsijan on myös valvottava hankintojen ja aliurakoitsijoiden rakennusvaiheiden kelvollisuutta ja työsuoritusta, jotta sopimuksen mukainen laatu kaikilta osin saavutetaan. 
                                <br>
                                Pääurakoitsija laatii toteutusaikataulun, jossa on varattu riittävästi aikaa työn laadukkaaseen ja turvalliseen suorittamiseen sekä laatiessaan työmaan turvallisuussuunnitelmaa ottaa huomioon myös työn toteuttamisen laadunvarmistuksen keinot, joita ovat mm. pölyntorjuntasuunnitelma ja oman työn vastaanotot aikataulun mukaisesti. Pääurakoitsijan tulee hyväksyttää rakennuttajalla käyttämänsä materiaalit ja laitteet kirjallisesti, mikäli ne poikkeavat suunnitelma-asiakirjoista. Mikäli pääurakoitsija ei hyväksytä suunnitelmista poikkeavia materiaaleja/asennuksia ennakkoon on pääurakoitsijalla velvollisuus asentaa suunnitelman mukainen materiaali/asennus ilman, että Tilaajalle syntyy lisäkustannuksia.
                                <br>
                                Pääurakoitsija suorittaa urakkasopimusasiakirjojen mukaiset tarkastukset ja laatii sekä toimittaa seuraavat luovutusdokumentit:
                            </p>
                            <p class="text-[#586B74] ml-20">
                                Urakoitsijan itselle luovutuksen virhe- ja puutelista (täydennetään 
                                <br>
                                vastaanottotarkastuksessa) 
                                <br>
                                <span class="text-[#00B2A9] italic block"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_VL1', true ), 'VL1') ); ?></span> 
                                <span class="text-[#00B2A9] italic block">VL2…</span> 
                                . 
                                <br>
                                . 
                                <br>
                                . 
                                <span class="text-[#00B2A9] italic block">…VLX</span>
                                <br>
                                Käytettyjen tuotteiden materiaalitiedot ja CE-todistukset 
                                <br>
                                Käytettyjen tuotteiden käyttö- ja huolto-ohjeet
                            </p>
                            <p class="text-[#586B74] my-5">
                                Urakoitsijan tulee toimittaa tilojen turvallisuuden ja käyttöön soveltuvuuden todentavat luovutusdokumentit tilaajan edustajalle sähköisesti ennen vastaanottotarkastusta.
                            </p>

                            <h2 class="text-black text-[20px] font-medium mt-10">
                                8. URAKKA-AIKA
                            </h2>
                            <p class="text-[#586B74] my-5">
                                (Viite YSE 17 §) 
                                <br>
                                Urakoitsijan tulee suorittaa kohteen toteutus tämän urakkasopimuksen edellyttämän aikataulun <br> mukaisesti. 
                            </p>
                        </div>

                        <div class="help_wrap mt-10 mb-5 relative">
                            <div class="max-w-[800px] mx-auto flex items-center gap-2">
                                <div class="flex items-center gap-2 min-w-[655px]">
                                    <span class="text-[#586B74]">Koko urakan tulee olla täysin valmis ja vastaanotettavissa</span>
                                    <input type="text" {{ helpers.noste_textinput_attrset('pilar_f4') }} placeholder="xx.xxx.xxxx" class="flex-1 w-full lg:w-[230px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </div>

                                <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                                
                                <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                            </div>

                            <div class="help_show text-[#586B74] text-[14px] lg:w-[280px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                Valmistumisajankohta hankeaikataulun mukaan. Kuitenkin niin, että on hyvä varata noin viikko aikaa ennen vuokrasopimuksen alkua, jotta mahdolliset virheet ja puutteet ehditään korjata ennen vuokralaisen sisään muuttoa.
                            </div>
                        </div>

                        <div class="max-w-[800px] mx-auto">
                            <div>
                                <label class="inline-flex items-center gap-2 cursor-pointer">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" {{ helpers.noste_checkbox_attrset('pilar_TY_8') }}>
                                    <input type="text" {{ helpers.noste_textinput_attrset('pilar_f5') }} placeholder="Vapaa teksti" class="flex-1 w-full lg:w-[230px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </label>
                            </div>

                            <h2 class="text-black text-[20px] font-medium mt-10">
                                9. VIIVÄSTYSSAKKO
                            </h2>
                            <p class="text-[#586B74] my-5">
                                (Viite YSE 18 §) 
                                <br>
                                Työn valmistumisen myöhästyessä urakkasopimuksen mukaisesta ajankohdasta peritään viivästyssakkoa (YSE:stä poiketen) kultakin alkavalta työpäivältä 0,1 % arvonlisäverottomasta urakkasummasta laskettuna, kuitenkin enintään 50 työpäivältä. 
                                <br>
                                [ 
                                <label class="inline-flex items-center gap-2 cursor-pointer relative top-[3px]">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" {{ helpers.noste_checkbox_attrset('pilar_TY_9') }}>
                                </label>
                                Hyväksytty urakkasuoritus edellyttää, että urakoitsija on toimittanut rakennuttajalle sähköasennusten tarkastus- ja käyttöönottopöytäkirjat kohdassa 7 vaaditun mukaisesti ennen vastaanottotarkastusta.]
                            </p>

                            <h2 class="text-black text-[20px] font-medium mt-10">
                                10. VIIVÄSTYSSAKKO
                            </h2>
                            <p class="text-[#586B74] my-5">
                                (Viite YSE 29 §) 
                                <br>
                                YSE 1998 29§:n mukaisesti takuuaika kaikkien töiden osalta hyväksytystä vastaanottotarkastuksesta lukien on kaksi vuotta.
                            </p>

                            <h2 class="text-black text-[20px] font-medium mt-10">
                                11. VAKUUDET
                            </h2>
                            <p class="text-[#586B74] my-5">
                                (Viite YSE 36 § ja YSE 37 §) 
                                <br>
                                YSE 1998 36§:n mukaisesti urakoitsijan vakuudet:
                            </p>
                            <p class="text-[#586B74] ml-20">
                                Urakoitsija toimittaa ennen töiden aloittamista rakennusaikaisen vakuuden, jonka suuruus on 10 % arvonlisäverottomasta urakkasummasta ja joka on voimassa 3kk yli rakennusajan. Urakoitsija toimittaa rakennuttajalle vastaanottotarkastuksen jälkeen takuuajan vakuuden, jonka suuruus on 2 % arvonlisäverottomasta urakkasummasta lisä- ja muutostöineen ja joka on voimassa 3kk yli takuuajan. 
                                <br>
                                Vakuuden antajan tulee olla Tilaajan hyväksymä.
                            </p>
                            <p class="text-[#586B74] my-5">
                                YSE 1998 37§:n mukaisesti Tilaajan vakuudet:
                            </p>
                            <p class="text-[#586B74] ml-20">
                                Tilaaja ei aseta vakuutta.
                            </p>

                            <h2 class="text-black text-[20px] font-medium mt-10">
                                12. VAKUUTUKSET
                            </h2>
                            <p class="text-[#586B74] my-5">
                                (Viite YSE 38 §) 
                                <br>
                                Pääurakoitsija ottaa rakennuskohteelle YSE 1998 38§:n mukaisen rakennustyövakuutuksen koko rakennustyön osalta. Vakuutus tulee ottaa rakennuttajan nimiin ja sen tulee joka hetki vastata vähintään rakennuskohteen sen hetkistä täyttä arvonlisäverollista arvoa. 
                                <br>
                                Vakuutuksen omavastuu saa olla korkeintaan 0,5 % urakoitsijan verottomasta urakkahinnasta. 
                                <br>
                                Jokaisella työmaalla toimivalla urakoitsijalla tulee olla voimassa oleva urakoitsijan vastuuvakuutus, jonka suuruus tulee olla vähintään 1 000 000 €, myös aliurakoitsijoilla. Mikäli jonkun urakoitsijan vastuuvakuutus on alle 1 000 000 €, vastaa pääurakoitsija vajaaksi jäävästä osasta omalla kustannuksellaan. 
                                <br>
                                Kunkin urakoitsijan on vakuutettava henkilökuntansa vähintään lain vaatimalla tavalla. 
                                <br>
                                Urakoitsija vastaa kiinteistön omistajalle, rakennuttajalle, kiinteistön käyttäjille tai ulkopuolisille aiheuttamistaan vahingoista. Rakennuttajalla on oikeus pidättää vahingon aiheuttaneen urakoitsijan maksueristä eri osapuolien mahdollisesti vaatimat korvaukset.
                            </p>

                            <h2 class="text-black text-[20px] font-medium mt-10">
                                13. URAKKAHINTA
                            </h2>
                            <p class="text-[#586B74] my-5">
                                (Viite YSE 39 §) 
                                <br>
                                Urakan suoritusta vastaan rakennuttaja maksaa urakoitsijalle kiinteän urakkahinnan:
                            </p>
                        </div>

                        <div class="help_wrap relative mb-5">
                            <div class="max-w-[800px] mx-auto flex items-center gap-2">
                                <div class="flex gap-[100px] min-w-[355px]">
                                    <span class="text-[#586B74]">Kiinteä urakkahinta:</span>
                                    <span class="text-[#586B74] text-[15px]">
                                        <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_UH3', true ), 'UH3') ); ?></span>
                                        € (alv. 24%)
                                    </span>
                                </div>

                                <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                                
                                <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                            </div>

                            <div class="help_show text-[#586B74] text-[14px] lg:w-[330px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                Kun nämä kentät saa arvon "tyhjä" tulostuu: "Täydennetään myöhemmin"
                            </div>
                        </div>

                        <div class="max-w-[800px] mx-auto">
                            <div class="flex items-center mb-5">
                                <span class="text-[#586B74] text-[17px] w-[30%]">Arvonlisävero:</span>
                                <span class="text-[#586B74] text-[15px]">
                                    <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_UH2', true ), 'UH2') ); ?></span>
                                    €
                                </span>
                            </div>
                            <div class="flex items-center mb-5">
                                <span class="text-[#586B74] text-[17px] w-[30%]">Verollinen hinta:</span>
                                <span class="text-[#586B74] text-[15px]">
                                    <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_UH3', true ), 'UH3') ); ?></span>
                                    € (alv. 24%)
                                </span>
                            </div>

                            <h2 class="text-black text-[20px] font-medium mt-10">
                                14. URAKKAHINNAN MAKSAMINEN
                            </h2>
                        </div>

                        <div class="help_wrap my-5 relative">
                            <div class="max-w-[800px] mx-auto flex items-center gap-2">
                                <p class="text-[#586B74] text-[17px] min-w-[738px]">
                                    Tämä sopimuslomake pohjautuu (Viite YSE 40 §) 
                                    <br>
                                    Urakkahinta maksetaan pääurakoitsijalle yhteisesti sovitun maksuerätaulukon mukaisesti (Liite x). 
                                    <br>
                                    Ensimmäinen maksuerä on suuruudeltaan 5 % ja sen ehtona on:
                                    </p>

                                <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                                
                                <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                            </div>

                            <div class="help_show text-[#586B74] text-[14px] lg:w-[206px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-80px] hidden">
                                Tähän kohdan 5.1 mukaisen liitteen numero maksuerätaulukon kohdalta.    
                            </div>
                        </div>

                        <div class="max-w-[800px] mx-auto">
                            <p class="text-[#586B74] ml-20">
                                - Urakkasopimus on allekirjoitettu 
                                <br>
                                - Rakennusajan vakuus on toimitettu 
                                <br>
                                - Rakennustyövakuutus on toimitettu 
                                <br>
                                - Työmaasuunnitelmat on toimitettu 
                                <br>
                                - Ennakkoilmoitus aluehallintoviranomaisille on toimitettu sekä 
                                <br>
                                - Ilmoitus työsuojeluhenkilörekisteriin on tehty työmaan koon ja/tai keston niin vaatiessa.
                            </p>
                            
                            <p class="text-[#586B74] my-5">
                                Viimeinen maksuerä on suuruudeltaan 10 % urakkasummasta ja sen maksamisen ehtona on:    
                            </p>
                            <p class="text-[#586B74] ml-20">
                                - Urakka on vastaanotettu 
                                <br>
                                - Vastaanottotarkastuksessa havaitut virheet ja puutteet on korjattu 
                                <br>
                                - Luovutusaineisto on toimitettu kokonaisuudessaan tilaajalle 
                                <br>
                                - Takuuajan vakuus on toimitettu tilaajalle 
                                <br>
                                - Taloudellinen loppuselvitys on pidetty ja allekirjoitettu
                            </p>
                            <p class="text-[#586B74] mb-2 mt-5">
                                Laskutettavat maksuerät hyväksytetään Tilaajan nimeämällä henkilöllä (rakennuttajakonsultti) ennen laskutusta. Maksuerä hyväksytään laskutettavaksi, kun maksuerän perusteena oleva työvaihe on tehty. Urakoitsija osoittaa laskutettavaksi esitettävän maksuerän valmistumisen Tilaajan edustajalle toimittamalla valmiista työvaiheesta valokuvan. Maksuerälähetteet ja valokuvat toimitetaan rakennuttajakonsultin hyväksyttäväksi kootusti niin, että koonteja toimitetaan enintään kaksi kertaa kuukaudessa. Maksueriin perustuvat laskut laskutetaan kootusti niin, että Tilaajalle tulee maksettavaksi enintään 2 laskua kuukaudessa. Jokaisessa maksuerälähetteessä tulee olla viitteenä Tilaajan antama projektinumero.   
                            </p>
                        </div>
                        <div class="help_wrap relative">
                            <div class="max-w-[800px] mx-auto flex items-center gap-2">
                                <div class="flex flex-wrap items-center gap-2 min-w-[655px]">
                                    <span class="text-[#586B74]">Urakoitsijoiden laskut maksetaan</span>
                                    <input type="text" {{ helpers.noste_textinput_attrset('pilar_f6') }} placeholder="21" class="w-full lg:w-[50px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    <span class="text-[#586B74]">vuorokauden kuluessa siitä, kun lasku on esitetty rakennuttajalle ja</span>
                                </div>

                                <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                                
                                <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                            </div>

                            <div class="help_show text-[#586B74] text-[14px] lg:w-[280px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                Tarkista laskutusohjeesta mikä on tilaajan maksuehto (14 vrk, 21 vrk, 30 vrk?)
                            </div>
                        </div>
                        <div class="max-w-[800px] mx-auto">
                            <p class="text-[#586B74] mt-2 mb-5">
                                vastaava sopimuksen mukainen työvaihe on todettu maksukelpoiseksi. 
                                <br>
                                Laskun virheellisyydestä aiheutuneesta maksun viivästymisestä on vastuussa urakoitsija.
                            </p>

                            <h2 class="text-black text-[20px] font-medium mt-10">
                                15. HINTASIDONNAISUUDET
                            </h2>
                            <p class="text-[#586B74] my-5">
                                (Viite YSE 48 § ja 49 §) 
                                <br>
                                Urakkahinta on kiinteä ilman indeksisidonnaisuutta.
                            </p>

                            <h2 class="text-black text-[20px] font-medium mt-10">
                                16. SUUNNITELMIEN MUUTTAMISEN VAIKUTUS URAKKAHINTAAN
                            </h2>
                            <p class="text-[#586B74] my-5">
                                (Viite YSE 44 § ja YSE 47 §) 
                                <br>
                                YSE 1998 44§:n ja 47§:n mukaisesti, tässä kohdassa todetuin poikkeuksin ja huomioin. 
                                <br>
                                Urakoitsijan on perehdyttävä välittömästi hänelle toimitettuihin suunnitelma-asiakirjoihin tai hänelle annettuihin työmääräyksiin ja ilmoitettava välittömästi havaittuaan niissä urakkaan kuulumatonta työtä. 
                                <br>
                                Urakoitsijan tulee antaa suunnitelmien muutoksen vaikutuksesta urakkahintaan yksilöity tarjous tai eritelty laskelma riittävän ajoissa ennen ao. työn suorittamista, jotta hankkeen hyväksyttyä aikataulua voidaan noudattaa. Muutos- ja lisätyöt eivät oikeuta urakka-ajan pidennykseen, mikäli urakoitsija ei ole tehnyt asiasta varausta lisä- ja 
                                <br>
                                muutostyötarjousta tehdessään. 
                                <br>
                                Yleiskustannuslisänä rakennustöissä käytetään 12 %. Yleiskustannuslisä lasketaan muutoksesta aiheutuvien lisäysten ja vähennysten erotukselle. 
                                <br>
                                Jos hinnasta ei voida sopia, on työ tehtävä omakustannushintana. 
                                <br>
                                Työmaan käyttö- ja yhteiskustannukset lisätään lisä- ja muutostyölaskelmiin vain perustelluista syistä.
                            </p>

                            <h2 class="text-black text-[20px] font-medium mt-10">
                                17. OMISTUSOIKEUS
                            </h2>
                            <p class="text-[#586B74] my-5">
                                (Viite YSE 51 §, 52 § ja 53 §) 
                                <br>
                                YSE:n mukaisesti.
                            </p>

                            <h2 class="text-black text-[20px] font-medium mt-10">
                                18. LISÄ- JA MUUTOSTÖIDEN TILAAMINEN
                            </h2>
                            <p class="text-[#586B74] mt-5">
                                (Viite YSE 4 §, 46 § ja 59 §) 
                                <br> 
                                Lisä- ja muutostöissä noudatetaan YSE mukaista menettelyä kohdassa todetuin poikkeuksin ja huomioin. 
                                <br>
                                Muutos- ja lisätöitä on oikeutettu tilaamaan <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T3', true ), 'T3') ); ?></span>. YSE 43§:n momentin 3 sekä 59§:n momentin 4 tarkoittamia pieniä ja kiireellisiä muutoksia on oikeutettu tilaamaan projektipäällikkö <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P1', true ), 'P1') ); ?></span> 
                                <br>
                            </p>
                        </div>
                        <div class="help_wrap my-1 relative">
                            <div class="max-w-[800px] mx-auto flex items-center gap-2">
                                <p class="text-[#586B74] min-w-[320px]">
                                    [ 
                                    <label class="inline-flex items-center gap-2 cursor-pointer relative top-[3px]">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" {{ helpers.noste_checkbox_attrset('pilar_TY_10') }}>
                                    </label>
                                    sekä projektijohtamisen asiantuntija <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P4', true ), 'P4') ); ?></span> ]
                                </p>

                                <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                                
                                <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                            </div>

                            <div class="help_show text-[#586B74] text-[14px] lg:w-[206px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-80px] hidden">
                                Mikäli erillistä projektijohtamisen asiantuntijaa ei löydy koodilla P4 ei kohta: "sekä projektijohtamisen asiantuntija P4" tulostu ollenkaan.   
                            </div>
                        </div>
                        <div class="max-w-[800px] mx-auto">
                            <p class="text-[#586B74] mb-5">
                                Mitään töitä ei katsota lisä- tai muutostyöksi, ellei Tilaaja ole niitä ennen työn suorittamista hyväksynyt lisä- ja <br> muutostöiksi. Kirjalliseksi sopimiseksi katsotaan rakennuttajan toimivaltaisen edustajan kirjallinen muutostyötilaus (esim. sähköposti).
                            </p>

                            <h2 class="text-black text-[20px] font-medium mt-10">
                                19. VALVONTA
                            </h2>
                            <p class="text-[#586B74] my-5">
                                (Viite YSE 59 § ja 60 §) 
                                <br>
                                Rakennuttajakonsultti suorittaa työmaalla valvontaa Tilaajan edustajana. 
                                <br>
                                Urakoitsija koostaa katselmoitavat asiat valvontakäyntien yhteyteen. 
                                <br>
                                Tilaajan taholta tapahtuva valvonta ei rajoita eikä vähennä urakoitsijan sopimuksenmukaista vastuuta. 
                                <br>
                                Rakennuskohteen suunnittelijat voivat suorittaa laatimiensa suunnitelmien toteuttamisen yleisvalvontaa sekä 
                                <br>
                                suunnitelmia täydentävien ja täsmentävien ohjeiden antamista. Täydentävät ja täsmentävät ohjeet tai suunnitelmat 
                                <br>
                                eivät oikeuta urakoitsijaa lisäkorvauksiin, mikäli ne eivät ole selvästi ristiriidassa urakka-asiakirjojen kanssa.
                            </p>

                            <h2 class="text-black text-[20px] font-medium mt-10">
                                20. TYÖNJOHTO
                            </h2>
                            <p class="text-[#586B74] my-5">
                                (Viite YSE 1 §, 2 §, ja 56 §) 
                                <br>
                                Pääurakoitsijan vastaavana työnjohtajana urakkakohteessa toimii <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_U7', true ), 'U7') ); ?></span>.
                            </p>

                            <h2 class="text-black text-[20px] font-medium mt-10">
                                21. TYÖSUOJELU
                            </h2>
                            <p class="text-[#586B74] my-5">
                                (Viite YSE 57 §) 
                                <br>
                                Pääurakoitsija on hankkeen työturvallisuudesta vastaava päätoteuttaja. Pääurakoitsija vastaa kaikista työmaan 
                                <br>
                                turvallisuuteen liittyvistä velvollisuuksista ja vastaa siitä, että kaikki tähän työmaahan liittyvät uusimpien 
                                <br>
                                valtioneuvoston asetusten ja päätösten mukaiset määräykset tulevat hoidetuiksi (VNa 205/2009). 
                                <br>
                                Pääurakoitsija laatii työmaasuunnitelman. 
                                <br>
                                Työmaan turvallisuudesta vastaavana henkilönä toimii <span class="text-[#00B2A9] italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_U7', true ), 'U7') ); ?></span>. 
                                <br>
                                Rakennuttajan turvallisuuskoordinaattorina toimii <span class="text-[#00B2A9] italic">TK1</span>.
                            </p>

                            <h2 class="text-black text-[20px] font-medium mt-10">
                                22. YHTEISET TOIMITUKSET
                            </h2>
                            <p class="text-[#586B74] my-5">
                                (Viite YSE 66 §) 
                                <br>
                                Pääurakoitsijan tulee toimittaa työvaiheilmoitus rakennuttajalle kirjallisesti 2 kertaa kuukaudessa. 
                                <br>
                                Työvaiheilmoituksessa tulee käydä läpi aikataulutilanne, työmaatilanne valokuvin, työmaavahvuus, työturvallisuusasiat, haitat, kokoukset/läpikäynnit, suunnitelmapuutteet jne. edellisellä jaksolla tapahtuneet merkittävät asiat. Lisäksi urakoitsija laatii töiden aloituksesta sekä muutoksista kulkujärjestelyihin työmaan aikana, tiedotteet kiinteistössä jaettaviksi. 
                                <br>
                                Työmaakokouksia pidetään alustavasti kerran kuukaudessa. Työmaan aloituskokouksessa sovitaan tarkemmin seuraavat työmaakokoukset. Viimeisin työvaiheilmoitus liitetään työmaakokouksen pöytäkirjaan liitteeksi.
                            </p>

                            <h2 class="text-black text-[20px] font-medium mt-10">
                                23. MUUT SOPIMUSASIAT / ERITYISMÄÄRYKSIÄ
                            </h2>
                            <p class="text-[#586B74] my-5 leading-7">
                                Pääurakoitsija on sopimussuhteessa suoraan rakennuttajaan. Pääurakoitsija voi antaa osan töistä aliurakoitsijoiden tehtäväksi. Pääurakoitsijan on ilmoitettava alihankkijat ja aliurakoitsijat rakennuttajan hyväksyttäväksi viimeistään tarjousneuvottelujen yhteydessä. Rakennuttaja pidättää itsellään oikeuden hyväksyä tai hylätä pääurakoitsijan esittämät aliurakoitsijat. Aliurakoitsija ei saa ”ketjuttaa” töitä toiselle aliurakoitsijalle, ellei etukäteen ole sovittu. Rakennuttaja edellyttää, että pääurakoitsija valvoo, etteivät aliurakoitsijat käytä enää aliurakoitsijoita. 
                                <br>
                                Melua ja tärinää aiheuttavien töiden tekeminen kiinteistössä on kiellettyä arkisin klo K7 välisenä aikana. 
                                <br>
                                Pääurakoitsijan tulee huolehtia työnaikaisista tarpeellisista rakenteiden suojauksista ja suojaseinien rakentamisesta. Urakoitsijan tulee tarkkailla purettavia rakenteita ja ilmoittaa rakennuttajalle välittömästi, mikäli epäilyjä haitallisista aineista ilmaantuu. Haitalliset aineet saa poistaa ainoastaan ko. purkuun erikoistunut alan ammattilainen ja ko. purkutyö tulee suorittaa viranomaissäädösten edellyttämällä tavalla. 
                                <br>
                                Jätelavan paikan osoittamisesta urakoitsijalle sovitaan erikseen. Purkujäte on siirrettävä jätelavalle siten, ettei siirrosta synny vaaraa, eikä pöly leviä ympäristöön. Rakennuttaja ei vastaa ulkopuolisten jätelavoille laittaman tavaran aiheuttamista kustannuksista. Tarvittaessa lavojen on oltava umpinaisia ja lukittavia Urakoitsijalla on oikeus ottaa purkumateriaalista tarvitsemansa hyötymateriaali. 
                                <br>
                                Pääurakoitsija vastaa viranomaisten edellyttämällä tavalla kaiken syntyvän purkujätteen käsittelystä sekä pois kuljettamisesta kaikkine kustannuksineen. Purku- ja muista jätteistä on pyydettäessä esitettävä sijoituspaikkatiedot rakennuttajalle. 
                                <br>
                                Pääurakoitsija vastaa työaikaisesta siivouksesta ja loppusiivouksesta. Tavanomaisen työmaan siivousvelvoitteen lisäksi pääurakoitsijan tulee huolehtia, että rakennustyön aikana työalueena ja haalausreittinä käytettävät ulkopuoliset käytävä-, piha- ja katualueet pidetään siistinä. Urakka-alueen tulee olla puhtaustasoltaan pölytön ja muuttovalmis, kun loppusiivous on suoritettu. Kiinteistössä on urakoitsijan käyttöön tauko- ja wc-tilat, mutta ei urakoitsijan käyttöön tarkoitettuja suihkutiloja. Pääurakoitsija vastaa tarvittavilta osin itse työntekijöidensä sosiaalitilojen järjestämisestä, mikäli muuta ei urakkaneuvottelujen yhteydessä ole sovittu. 
                                <br>
                                Urakoitsijalle ei ole mahdollista osoittaa autopaikkoja. 
                                <br>
                                Tulitöiden tekeminen on kiellettyä ilman kiinteistön lupaa. 
                                <br>
                                Tupakointi kiinteistön alueella on kiellettyä turvallisuusasiakirjassa määrätyn mukaisesti. 
                                <br>
                                Tarjouspyyntöasiakirjat, urakkahinta ja urakka-asiakirjat eivät ole julkisia. 
                                <br>
                                Kumpikin osapuoli vastaa sopimuksenmukaisten tarkastusten kustannuksistaan. Mikäli kuitenkin joudutaan pitämään uusintatarkastuksia urakoitsijan suoritusten virheiden vuoksi, rakennuttaja veloittaa uusintatarkastuksista aiheutuvat kustannukset uusintatarkastustarpeen aiheuttaneelta urakoitsijalta seuraavasti:
                            </p>
                            <p class="text-[#586B74] ml-20">
                                - Ensimmäinen jälkitarkastus: veloituksetta
                                <br>
                                - Seuraavat jälkitarkastukset: 500 €
                            </p>
                        </div>

                        <div class="help_wrap mt-10 mb-5 relative">
                            <div class="max-w-[800px] mx-auto flex items-center gap-2">
                                <div class="flex items-center gap-2 min-w-[260px]">
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" {{ helpers.noste_checkbox_attrset('pilar_TY_11') }}>
                                        <input type="text" {{ helpers.noste_textinput_attrset('pilar_f7') }} placeholder="Vapaa teksti" class="flex-1 w-full lg:w-[230px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                    </label>    
                                </div>

                                <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                                
                                <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                            </div>

                            <div class="help_show text-[#586B74] text-[14px] lg:w-[280px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                                Lisää tähän kohtaan tarpeelliset erikoismääräykset jo olevien lisäksi. 
                                <br>
                                Määräykset voivat olla esimerkiksi: 
                                <br><br>
                                Muutostöiden kohteena olevien tilojen vuokralaisena toimiva xxx tai Tilaaja edellyttää tämän sopimuksen liitteenä 10 olevan salassapitosopimuksen solmimista ja noudattamista. Tämän sopimuksen allekirjoituksin allekirjoittanut urakoitsija sitoutuu liitteen 10 mukaiseen salassapitosopimukseen. 
                                <br><br>
                                Tilaajan edustaja (xxx) on sitoutunut noudattamaan omassa työskentelyssään eettisiä liiketoimintaohjeita (Code of Conduct). Tämän sopimuksen allekirjoittamalla urakoitsija vahvistaa saaneensa ja lukeneensa eettiset liiketoimintaohjeet (Liite x) ja vastuullinen hankinta -periaatteet (Liite x) ja sitoutuvansa noudattamaan niitä. 
                                <br><br>
                                jne.
                            </div>
                        </div>

                        <div class="max-w-[800px] mx-auto">
                            <h2 class="text-black text-[20px] font-medium mt-10">
                                24. RIITAISUUKSIEN RATKAISEMINEN
                            </h2>
                            <p class="text-[#586B74] my-5">
                                (Viite YSE 92 §) 
                                <br>
                                Mahdolliset riitaisuudet ratkaistaan ensisijaisesti osapuolten keskinäisten neuvottelujen avulla. Mikäli neuvottelumenetelmällä ei päästä ratkaisuun, tästä sopimuksesta aiheutuvat riidat ratkaistaan lopullisesti välimiesmenettelyssä Keskuskauppakamarin välityslautakunnan sääntöjen mukaisesti yhden välimiehen toimesta. Välimiesmenettelyn paikka on Helsinki ja menettely käydään suomen kielellä.
                            </p>
                        </div>

                        <div class="help_wrap mt-10 mb-5 relative">
                        <div class="max-w-[800px] mx-auto flex items-center gap-2">
                            <h2 class="text-black text-[20px] font-medium min-w-[220px]">
                                25. ALLEKIRJOITUKSET
                            </h2>
    
                            <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                            
                            <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                        </div>
    
                        <div class="help_show text-[#586B74] text-[14px] lg:w-[280px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                            Valitse sähköinen tai perinteinen allekirjoitustapa. Perinteisessä täytä tiedot manuaalisesti. Voi olla useampia allekirjoittajia.
                        </div>
                    </div>
    
                    <div class="max-w-[800px] mx-auto">
                        <label class="flex items-start gap-2 cursor-pointer">
                            <span class="mt-[5px] shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            </span>
                            <input type="checkbox" class="checkbox_change absolute opacity-0" {{ helpers.noste_checkbox_attrset('pilar_TY_12') }}>
                            <span class="text-[#586B74] flex-1">Sopijapuolet ovat allekirjoittaneet tämän sopimuksen sähköisesti. Sopimus on sitova, kun molemmat osapuolet ovat sen allekirjoittaneet. Kumpikin sopijapuoli tallentaa ja/tai tulostaa allekirjoituspalvelujärjestelmästä oman sopimuskappaleensa.</span>
                        </label>
    
                        <label class="flex items-center gap-2 cursor-pointer mt-5">
                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            </span>
                            <input type="checkbox" class="checkbox_change absolute opacity-0" {{ helpers.noste_checkbox_attrset('pilar_TY_13') }}>
                            <span class="text-[#586B74] flex-1">Tätä sopimusta on tehty kaksi samasanaista kappaletta, toinen Tilaajalle ja toinen urakoitsijalle.</span>
                        </label>
    
                        <div class="flex items-center mt-10 mb-5">
                            <span class="text-[#586B74] text-[17px] w-[20%]">Paikka</span>
                            <input type="text" {{ helpers.noste_textinput_attrset('pilar_f8') }} placeholder="Vapaa teksti" class="w-full lg:w-[264px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                        </div>
                        <div class="flex items-center mb-5">
                            <span class="text-[#586B74] text-[17px] w-[20%]">Aika</span>
                            <input type="text" {{ helpers.noste_textinput_attrset('pilar_f9') }} placeholder="Vapaa teksti" class="w-full lg:w-[264px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                        </div>
    
                        
                        <div class="flex items-center mt-10">
                            <span class="text-[#586B74] text-[17px] w-[20%]"></span>
                           
                            <div>
                                <span class="text-[#586B74] mb-5 block">Tilaaja</span>
    
                                <div class="flex items-center mb-5 gap-10">
                                    <label class="flex items-center gap-2 cursor-pointer relative top-[3px]">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" {{ helpers.noste_checkbox_attrset('pilar_TY_14') }}>
                                        <span class="text-[#00B2A9] italic">T1</span>
                                    </label>
    
                                    <input type="text" {{ helpers.noste_textinput_attrset('pilar_f10') }} placeholder="c/o T2" class="flex-1 w-full lg:w-[130px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </div>
                            </div>
                        </div>
    
                        <div class="flex items-end justify-between mb-5">
                            <span class="w-[25%]"></span>
                            <span class="w-[55%] text-[#00B2A9] italic">T3</span>
                            <span class="h-[1px] bg-[#E1E1EA] inline-block w-full lg:w-[363px]"></span>
                        </div>
                    </div>
    
                    <div class="help_wrap mb-5 relative">
                        <div class="max-w-[800px] mx-auto flex items-center gap-2">
                            <div class="flex items-center gap-[65px] ml-[160px] min-w-[215px]">
                                <label class="inline-flex items-center gap-2 cursor-pointer">
                                    <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                        <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <input type="checkbox" class="checkbox_change absolute opacity-0" {{ helpers.noste_checkbox_attrset('pilar_TY_15') }}>
                                </label>    
                                
                                <input type="text" {{ helpers.noste_textinput_attrset('pilar_f11') }} placeholder="T1 c/o T2" class="w-full lg:w-[130px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                            </div>
    
                            <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                            
                            <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                        </div>
    
                        <div class="help_show text-[#586B74] text-[14px] lg:w-[280px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                            Tähän uusi laatikko alapuolelle tarjolle, kun tämä laatikko rastitettu. Voi olla useampia.
                        </div>
                    </div>
    
                    <div class="max-w-[800px] mx-auto">
                        <div class="ml-[160px] flex items-end justify-between mb-5 gap-[65px]">
                            <span class="text-[#00B2A9] italic">T3</span>
                            <span class="">
                                <input type="text" {{ helpers.noste_textinput_attrset('pilar_f12') }} placeholder="Vapaa teksti" class="w-full lg:w-[264px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                            </span>
                            <span class="h-[1px] bg-[#E1E1EA] inline-block w-full"></span>
                        </div>
    
                        <div class="ml-[160px] mt-20">
                            <span class="text-[#586B74] mb-5 block">Urakoitsija</span>
                        </div>
                        <div class="ml-[160px] mb-5">
                            <label class="flex items-center gap-2 cursor-pointer relative top-[3px]">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" {{ helpers.noste_checkbox_attrset('pilar_TY_16') }}>
                                <span class="text-[#00B2A9] italic">U1</span>
                            </label>
                        </div>
                        <div class="ml-[160px] flex items-end gap-[330px] mb-5">
                            <span class="text-[#00B2A9] italic">U4</span>
                            <span class="h-[1px] bg-[#E1E1EA] inline-block w-full lg:w-[363px]"></span>
                        </div>
                    </div>
    
                    <div class="help_wrap relative mt-10">
                        <div class="max-w-[800px] mx-auto flex items-center gap-2">
                            <label class="inline-flex items-center gap-2 cursor-pointer ml-[160px]">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" {{ helpers.noste_checkbox_attrset('pilar_TY_17') }}>
                                <span class="text-[#00B2A9] italic">U1</span>
                            </label>
    
                            <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                            
                            <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                        </div>
    
                        <div class="help_show text-[#586B74] text-[14px] lg:w-[320px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                            Tähän uusi laatikko alapuolelle tarjolle, kun tämä laatikko rastitettu. Voi olla useampia. 
                        </div>
                    </div>
    
                    <div class="max-w-[800px] mx-auto">
                        <div class="ml-[160px] flex items-end gap-[135px] mt-3 mb-5">
                            <input type="text" {{ helpers.noste_textinput_attrset('pilar_f13') }} placeholder="Vapaa teksti" class="w-full lg:w-[264px] shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                            <span class="h-[1px] bg-[#E1E1EA] inline-block w-full lg:w-[363px]"></span>
                        </div>
                    </div>
    
                    <div class="help_wrap my-20 relative">
                        <div class="max-w-[800px] mx-auto flex items-center gap-2">
                            <p class="text-[#08202C] font-medium min-w-[130px]">
                                LIITTEITÄ <b class="text-[#586B74] font-normal ml-8 inline-block">kpl</b>
                            </p>
    
                            <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                            
                            <hr class="help_line w-full border border-solid border-[#E1E1EA] hidden">
                        </div>
    
                        <div class="help_show text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px] hidden">
                            Liitteiden määrä automaattinen kohdan 5.1. mukaan.
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