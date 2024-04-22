<?php 

/* Template Name: Esitietolomake */


if ( !is_user_logged_in() || !isset($_GET['pid']) ) {
    wp_redirect( site_url() );
    exit;
}

$takaisin = get_permalink( $_GET['pid'] );

get_header( 'noste' );

?>


    <section class="my-8">
        <div class="container px-4">
            <form id="global-form" action="<?php echo esc_url(admin_url('admin-post.php')) ?>" method="post" data-type="esitietolomake">
                <div class="border border-solid border-[#E1E1EA] rounded-[12px] p-[20px] bg-white">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <span class="text-[#818D93] text-[13px] font-medium">Project nimi</span>
                            <h1 class="text-[#08202C] text-[18px] font-medium">Esitietolomake</h1>
                        </div>
        
                        <div>
                            <button class="text-[#08202C] font-medium bg-[#E9E9F0] border border-solid border-[#CCCCD6] rounded-lg flex items-center gap-2 px-3 py-2">
                                <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path fill="#08202C" d="M60,12h-6V2c0-1.105-0.895-2-2-2H12c-1.105,0-2,0.895-2,2v10H4c-2.211,0-4,1.789-4,4v32 c0,2.211,1.789,4,4,4h6v10c0,1.105,0.895,2,2,2h40c1.105,0,2-0.895,2-2V52h6c2.211,0,4-1.789,4-4V16C64,13.789,62.211,12,60,12z M12,3c0-0.553,0.447-1,1-1h38c0.553,0,1,0.447,1,1v9H12V3z M52,61c0,0.553-0.447,1-1,1H13c-0.553,0-1-0.447-1-1V37 c0-0.553,0.447-1,1-1h38c0.553,0,1,0.447,1,1V61z M62,48c0,1.104-0.896,2-2,2h-6V36c0-1.105-0.895-2-2-2H12c-1.105,0-2,0.895-2,2 v14H4c-1.104,0-2-0.896-2-2V16c0-1.104,0.896-2,2-2h56c1.104,0,2,0.896,2,2V48z"></path> <path fill="#08202C" d="M19,44h12c0.553,0,1-0.447,1-1s-0.447-1-1-1H19c-0.553,0-1,0.447-1,1S18.447,44,19,44z"></path> <path fill="#08202C" d="M45,48H19c-0.553,0-1,0.447-1,1s0.447,1,1,1h26c0.553,0,1-0.447,1-1S45.553,48,45,48z"></path> <path fill="#08202C" d="M38,54H19c-0.553,0-1,0.447-1,1s0.447,1,1,1h19c0.553,0,1-0.447,1-1S38.553,54,38,54z"></path> <path fill="#08202C" d="M55,18c-1.657,0-3,1.343-3,3s1.343,3,3,3s3-1.343,3-3S56.657,18,55,18z M55,22c-0.553,0-1-0.447-1-1 s0.447-1,1-1s1,0.447,1,1S55.553,22,55,22z"></path> <path fill="#08202C" d="M45,18c-1.657,0-3,1.343-3,3s1.343,3,3,3s3-1.343,3-3S46.657,18,45,18z M45,22c-0.553,0-1-0.447-1-1 s0.447-1,1-1s1,0.447,1,1S45.553,22,45,22z"></path> </g> </g></svg>
        
                                Luonnos
                            </button>
                        </div>
                    </div>

                    <hr class="border border-solid border-[#E1E1EA] ml-[-20px] mr-[-20px]">

                    <div class="max-w-[700px] mx-auto mt-10">
                        <span class="font-medium italic text-[#00B2A9] block">K1</span>
                        <span class="font-medium italic text-[#00B2A9] block">K4</span>
                    </div>

                    <div class="help_wrap my-10 relative">
                        <div class="max-w-[700px] mx-auto flex items-center gap-2">
                            <h2 class="text-black text-[17px] lg:text-[24px] font-medium">
                                Esitietolomake
                            </h2>

                            <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                            
                            <hr class="help_line hidden w-full border border-solid border-[#E1E1EA]">
                        </div>

                        <div class="help_show hidden text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px]">
                            Huom! Tarkasta kaikki tiedot ennen ensimmaisen
                            asiakirjan tekoa.
                        </div>
                    </div>

                    <div class="max-w-[700px] mx-auto mb-10">
                        <h3 class="text-black text-[17px] font-medium">PROJEKTINJOHTO</h3>
                    </div>

                    <div class="mb-3">
                        <div class="help_wrap relative mb-2">
                            <div class="max-w-[700px] mx-auto flex items-center gap-2">
                                <label class="text-[#586B74] text-[14px] block min-w-[190px]">
                                    Projektinjohtokonsultti (yhtiö)
                                </label>
        
                                <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                                
                                <hr class="help_line hidden w-full border border-solid border-[#E1E1EA]">
                            </div>
        
                            <div class="help_show hidden text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px]">
                                Mahdollisuus vaihtaa nimea
                            </div>
                        </div>

                        <div class="max-w-[700px] mx-auto">
                            <input type="text" name="pilar_P0" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" placeholder="Partners at Noste.oi">
                        </div>
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Projektipäällikkö/vastuuhenkilö</label>
                        <input type="text" name="pilar_P1" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Projektipäällikön/vastuuhenkilön puhelinnumero</label>
                        <input type="text" name="pilar_P2" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Projektipäällikön/vastuuhenkilön sähköposti</label>
                        <input type="text" name="pilar_P3" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Projektijohtamisen asiantuntija</label>
                        <input type="text" name="pilar_P4" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Projektijohtamisen asiantuntijan puhelinnumero</label>
                        <input type="text" name="pilar_P5" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Rakennuttajan turvallisuuskoordinaattori</label>
                        <input type="text" name="pilar_TK1" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="max-w-[700px] mx-auto mt-10 mb-6">
                        <h3 class="text-black text-[17px] font-medium">TILAAJA, KIINTEISTÖ JA SUUNNITTELIJAT</h3>
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Tilaaja (yhtiö)</label>
                        <input type="text" name="pilar_T1" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Tilaajan edustaja (yhtiö)</label>
                        <input type="text" name="pilar_T2" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Tilaajan edustaja (henkilö)</label>
                        <input type="text" name="pilar_T3" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Tilaajan edustaja (tehtävä)</label>
                        <input type="text" name="pilar_T4" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Tilaajan edustajan puhelinnumero</label>
                        <input type="text" name="pilar_T5" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Tilaajan edustajan sähköposti</label>
                        <input type="text" name="pilar_T6" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Tilaajan Y-tunnus</label>
                        <input type="text" name="pilar_T7" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Tilaajan osoite (yhtiö)</label>
                        <input type="text" name="pilar_T8" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Tilasuunnittelija (yhtiö)</label>
                        <input type="text" name="pilar_T9" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Tilasuunnittelija (henkilö)</label>
                        <input type="text" name="pilar_T10" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Tilasuunnittelijan puhelinnumero</label>
                        <input type="text" name="pilar_T11" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Tilasuunnittelijan sähköposti</label>
                        <input type="text" name="pilar_T12" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Kiinteistön nimi</label>
                        <input type="text" name="pilar_K1" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Kiinteistön katuosoite</label>
                        <input type="text" name="pilar_K2" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Kiinteistön postinumero ja postitoimipaikka</label>
                        <input type="text" name="pilar_K3" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Projektin nimi</label>
                        <input type="text" name="pilar_K4" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Rakennuksen valmistumisvuosi</label>
                        <input type="text" name="pilar_K5" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Kiinteistöpäällikkö (Henkilö)</label>
                        <input type="text" name="pilar_K6" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Meluavan työn aikarajoitukset (x-y)</label>
                        <input type="text" name="pilar_K7" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Projektinumero</label>
                        <input type="text" name="pilar_K8" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Kiinteistöpäällikön sähköposti</label>
                        <input type="text" name="pilar_K9" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Kiinteistöpäällikön puhelinnumero</label>
                        <input type="text" name="pilar_K10" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Huoltohenkilö (Henkilö)</label>
                        <input type="text" name="pilar_K11" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Huollon sähköposti</label>
                        <input type="text" name="pilar_K12" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Huollon puhelinnumero</label>
                        <input type="text" name="pilar_K13" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Aulan sähköposti</label>
                        <input type="text" name="pilar_K14" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Aulan puhelinnumero</label>
                        <input type="text" name="pilar_K15" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Aulan aukioloajat (x-y)</label>
                        <input type="text" name="pilar_K16" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-3 text-[#586B74] text-[14px] block">Muutostöiden alaisen tilan sammutus-/ilmoitusjärjestelmä</label>

                        <div class="flex flex-col lg:flex-row gap-3 lg:items-center lg:gap-20">
                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K17">
                                <span class="flex-1 text-[#586B74] text-[14px]">Sprinkleri</span>
                            </label>

                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K17">
                                <span class="flex-1 text-[#586B74] text-[14px]">Paloilmoittimet</span>
                            </label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="help_wrap relative mb-2">
                            <div class="max-w-[700px] mx-auto flex items-center gap-2">
                                <label class="text-[#586B74] text-[14px] block min-w-[230px]">
                                    Onko automaatio suljettu järjestelmä
                                </label>
        
                                <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                                
                                <hr class="help_line hidden w-full border border-solid border-[#E1E1EA]">
                            </div>
        
                            <div class="help_show hidden text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px]">
                                Suljetulla järjestelmällä tarkoitetaan järjestelmää, joihin
                                muut yritykset eivät voi tehdä muutoksia (Esim.
                                Caverion)
                            </div>
                        </div>

                        <div class="flex flex-col lg:flex-row gap-3 lg:items-center lg:gap-20 max-w-[700px] mx-auto">
                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                <span class="flex-1 text-[#586B74] text-[14px]">Kyllä, kenen (---)</span>
                            </label>

                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K18">
                                <span class="flex-1 text-[#586B74] text-[14px]">Ei</span>
                            </label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="help_wrap relative mb-2">
                            <div class="max-w-[700px] mx-auto flex items-center gap-2">
                                <label class="text-[#586B74] text-[14px] block min-w-[245px]">
                                    Onko kulunvalvonta suljettu järjestelmä
                                </label>
        
                                <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                                
                                <hr class="help_line hidden w-full border border-solid border-[#E1E1EA]">
                            </div>
        
                            <div class="help_show hidden text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px]">
                                Suljetulla järjestelmällä tarkoitetaan järjestelmää, joihin
                                muut yritykset eivät voi tehdä muutoksia (Esim.
                                Caverion)
                            </div>
                        </div>

                        <div class="flex flex-col lg:flex-row gap-3 lg:items-center lg:gap-20 max-w-[700px] mx-auto">
                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K19">
                                <span class="flex-1 text-[#586B74] text-[14px]">Kyllä, kenen (---)</span>
                            </label>

                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K19">
                                <span class="flex-1 text-[#586B74] text-[14px]">Ei</span>
                            </label>
                        </div>
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-3 text-[#586B74] text-[14px] block">Vuokralaisten sähkön laskutus</label>

                        <div class="flex flex-col lg:flex-row gap-3 lg:items-center lg:gap-20">
                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K20">
                                <span class="flex-1 text-[#586B74] text-[14px]">Oma sähkösopimus</span>
                            </label>

                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K20">
                                <span class="flex-1 text-[#586B74] text-[14px]">Neliöperusteinen</span>
                            </label>

                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K20">
                                <span class="flex-1 text-[#586B74] text-[14px]">Kiinteistön alamittaus</span>
                            </label>
                        </div>
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Kiinteistön erikoisuudet (johtokaivot ulkoseinillä, vanhat lasiseinät huonoja, väliseinät ohuita tms.)</label>
                        <input type="text" name="pilar_K21" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Kiinteistömanageeraus (yhtiö)</label>
                        <input type="text" name="pilar_K22" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Huoltoyhtiö</label>
                        <input type="text" name="pilar_K23" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="max-w-[700px] mx-auto mt-10 mb-6">
                        <h3 class="text-black text-[17px] font-medium">URAKOITSIJA</h3>
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Päätoteuttaja (Yhtiö)</label>
                        <input type="text" name="pilar_U1" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Päätoteuttajan Y-tunnus</label>
                        <input type="text" name="pilar_U2" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Päätoteuttajan osoite</label>
                        <input type="text" name="pilar_U3" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Päätoteuttajan sopimusasioista vastaava henkilö</label>
                        <input type="text" name="pilar_U4" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Päätoteuttajan sopimusasioista vastaavan henkilön sähköposti</label>
                        <input type="text" name="pilar_U5" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Päätoteuttajan sopimusasioista vastaavan henkilön puhelinnumero</label>
                        <input type="text" name="pilar_U6" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Päätoteuttajan vastaava työnjohtaja</label>
                        <input type="text" name="pilar_U7" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Päätoteuttajan vastaavan työnjohtajan sähköposti</label>
                        <input type="text" name="pilar_U8" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Päätoteuttajan vastaavan työnjohtajan puhelinnumero</label>
                        <input type="text" name="pilar_U9" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="max-w-[700px] mx-auto mt-10 mb-6">
                        <h3 class="text-black text-[17px] font-medium">VUOKRALAINEN</h3>
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Vuokralainen (yhtiö)</label>
                        <input type="text" name="pilar_V1" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Vuokralaisen allekirjoitusoikeudellinen henkilö (nimi)</label>
                        <input type="text" name="pilar_V2" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Vuokralaisen yhteyshenkilö suunnitteluasioissa (nimi)</label>
                        <input type="text" name="pilar_V3" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Vuokralaisen yhteyshenkilön sähköposti</label>
                        <input type="text" name="pilar_V4" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Vuokralaisen yhteyshenkilön puhelinnumero</label>
                        <input type="text" name="pilar_V5" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Vuokralaisen Y-tunnus</label>
                        <input type="text" name="pilar_V6" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="max-w-[700px] mx-auto mt-10 mb-6">
                        <h3 class="text-black text-[17px] font-medium">PTS JA MUUT</h3>
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Muutostöissä huomioitavat PTS-asiat (esim. vaihdetaan valaistus LED vaikka suunnitelmissa ei lue)</label>
                        <input type="text" name="pilar_PTS" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Sähköisen laskutuksen ohje, tiedot kopioituina (ei kuvia)</label>
                        <input type="text" name="pilar_M1" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Pyydä avaimet ja kulkutunnisteet Nosteelle, mistä nouto</label>
                        <input type="text" name="pilar_M2" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Kokoustilojen varausohje, tiedot kopioituina (ei kuvia)</label>
                        <input type="text" name="pilar_M3" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Projektipankki ja ohjeet</label>
                        <input type="text" name="pilar_M4" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Tilamuutoksen ala</label>
                        <input type="text" name="pilar_K22" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="help_wrap mt-10 mb-5 relative">
                        <div class="max-w-[700px] mx-auto flex items-center gap-2">
                            <h2 class="text-black text-[17px] lg:text-[24px] font-medium min-w-[190px]">
                                TEHTÄVÄT TYÖT
                            </h2>

                            <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                            
                            <hr class="help_line hidden w-full border border-solid border-[#E1E1EA]">
                        </div>

                        <div class="help_show hidden text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px]">
                            Lisää kenttään kustannusarvion mukainen kustannus
                        </div>
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Purkutyöt</label>
                        <div class="flex items-center gap-3">
                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                            </label>
                            <input type="text" name="pilar_filed8_6" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                        </div>
                    </div>
                    
                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Lattiatyöt</label>
                        <div class="flex items-center gap-3">
                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY2">
                            </label>
                            <input type="text" name="pilar_filed8_6_1" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                        </div>
                    </div>
                    
                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Seinätyöt</label>
                        <div class="flex items-center gap-3">
                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY3">
                            </label>
                            <input type="text" name="pilar_filed8_6_2" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                        </div>
                    </div>
                    
                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Alakatto- ja holvityöt</label>
                        <div class="flex items-center gap-3">
                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY4">
                            </label>
                            <input type="text" name="pilar_filed8_6_3" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                        </div>
                    </div>
                    
                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">WC-muutokset</label>
                        <div class="flex items-center gap-3">
                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY5">
                            </label>
                            <input type="text" name="pilar_filed8_6_4" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                        </div>
                    </div>
                    
                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Keittiömuutokset</label>
                        <div class="flex items-center gap-3">
                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_T6">
                            </label>
                            <input type="text" name="pilar_filed8_6_5" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                        </div>
                    </div>
                    
                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Kalustustyöt</label>
                        <div class="flex items-center gap-3">
                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY6">
                            </label>
                            <input type="text" name="pilar_filed8_6_6" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                        </div>
                    </div>
                    
                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Sähkötyöt</label>
                        <div class="flex items-center gap-3">
                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY7">
                            </label>
                            <input type="text" name="pilar_filed8_6_7" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                        </div>
                    </div>
                    
                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">LVIA-työt</label>
                        <div class="flex items-center gap-3">
                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY8">
                            </label>
                            <input type="text" name="pilar_filed8_6_8" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                        </div>
                    </div>
                    
                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">SPR-työt</label>
                        <div class="flex items-center gap-3">
                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY9">
                            </label>
                            <input type="text" name="pilar_filed8_6_9" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                        </div>
                    </div>
                    
                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Turva- ja lukitustyöt</label>
                        <div class="flex items-center gap-3">
                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY10">
                            </label>
                            <input type="text" name="pilar_filed5_6_9" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                        </div>
                    </div>
                    
                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Muut työt</label>
                        <div class="flex items-center gap-3">
                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY11">
                            </label>
                            <input type="text" name="pilar_filed5_6_1" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                        </div>
                    </div>
                    
                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Käyttö- ja yhteiskustannukset</label>
                        <div class="flex items-center gap-3">
                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY12">
                            </label>
                            <input type="text" name="pilar_filed5_6_2" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                        </div>
                    </div>

                    <div class="help_wrap mt-10 mb-5 relative">
                        <div class="max-w-[700px] mx-auto flex items-center gap-2">
                            <h2 class="text-black text-[17px] lg:text-[24px] font-medium lg:min-w-[320px]">
                                BUDJETTI JA URAKKAHINTA
                            </h2>

                            <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                            
                            <hr class="help_line hidden w-full border border-solid border-[#E1E1EA]">
                        </div>

                        <div class="help_show hidden text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px]">
                            Huomioi Tilaajan kanssa tehdyt päätökset/
                            muokkaukset, kun siirrät summia kustannusarviosta
                        </div>
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Hyväksytty kokonaisbudjetti (€ alv 0%)</label>
                        <input type="text" name="pilar_BU1" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Hyväksytty budjetti rakennustöille (€, alv. 0%)</label>
                        <input type="text" name="pilar_BU2" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Hyväksytty budjetti proj.joht+ rakennuttamisen tehtävät (€, alv. 0%)</label>
                        <input type="text" name="pilar_BU3" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Hyväksytty budjetti suunnittelulle (€, alv. 0%)</label>
                        <input type="text" name="pilar_BU4" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Hyväksytty budjetin riskivaraus (€, alv. 0%)</label>
                        <input type="text" name="pilar_BU5" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Kiinteä urakkahinta (€ alv 0%)</label>
                        <input type="text" name="pilar_UH1" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Urakkahinnan alv. osuus €</label>
                        <input type="text" name="pilar_UH2" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Kiinteä urakkahinta (€ alv. 24%)</label>
                        <input type="text" name="pilar_UH3" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <div class="max-w-[700px] mx-auto mt-10 mb-6">
                        <h3 class="text-black text-[17px] font-medium">VAADITUT LOPPUDOKUMENTIT</h3>
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Urakoitsijan itselle luovutuksen virhe- ja puutelista</label>
                        <div class="flex items-center gap-3">
                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_VL1">
                            </label>
                            <input type="text" name="pilar_filed11_6" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                        </div>
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Urakoitsijan itselle luovutuksen virhe- ja puutelista</label>
                        
                        <label class="mb-1 flex items-center gap-2 cursor-pointer">
                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            </span>
                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_VL2">

                            <span class="flex-1 text-[#586B74] text-[14px]">Sähköasennusten tarkastus- ja käyttöönottopöytäkirjat</span>
                        </label>
                        
                        <label class="mb-1 flex items-center gap-2 cursor-pointer">
                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            </span>
                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_VL3">

                            <span class="flex-1 text-[#586B74] text-[14px]">Sähköasennusten 3. osapuolen varmennustarkastuksen pöytäkirja</span>
                        </label>
                        
                        <label class="mb-1 flex items-center gap-2 cursor-pointer">
                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            </span>
                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_VL4">

                            <span class="flex-1 text-[#586B74] text-[14px]">Yleiskaapelointipisteiden mittauspöytäkirja</span>
                        </label>
                        
                        <label class="mb-1 flex items-center gap-2 cursor-pointer">
                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            </span>
                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_VL5">

                            <span class="flex-1 text-[#586B74] text-[14px]">Nousukuidun mittauspöytäkirja</span>
                        </label>
                        
                        <label class="mb-1 flex items-center gap-2 cursor-pointer">
                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            </span>
                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_VL6">

                            <span class="flex-1 text-[#586B74] text-[14px]">Ilmamäärämittaus- ja säätöpöytäkirja</span>
                        </label>
                        
                        <label class="mb-1 flex items-center gap-2 cursor-pointer">
                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            </span>
                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_VL7">

                            <span class="flex-1 text-[#586B74] text-[14px]">Uusien jäähdytyspalkkien/konvektoreiden asennuspöytäkirja</span>
                        </label>
                        
                        <label class="mb-1 flex items-center gap-2 cursor-pointer">
                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            </span>
                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_VL8">

                            <span class="flex-1 text-[#586B74] text-[14px]">Uusien vesijohtojen painekokeiden pöytäkirja</span>
                        </label>
                        
                        <label class="mb-1 flex items-center gap-2 cursor-pointer">
                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            </span>
                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_VL9">

                            <span class="flex-1 text-[#586B74] text-[14px]">Paloilmoitinasennusten tarkastuspöytäkirja</span>
                        </label>
                        
                        <label class="mb-1 flex items-center gap-2 cursor-pointer">
                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            </span>
                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_VL10">

                            <span class="flex-1 text-[#586B74] text-[14px]">Paloilmoitinasennusten 3. osapuolen varmennustarkastuksen pöytäkirja</span>
                        </label>
                        
                        <label class="mb-1 flex items-center gap-2 cursor-pointer">
                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            </span>
                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_VL11">

                            <span class="flex-1 text-[#586B74] text-[14px]">Sprinkleriasennusten asennustodistus</span>
                        </label>
                        
                        <label class="mb-1 flex items-center gap-2 cursor-pointer">
                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            </span>
                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_VL12">

                            <span class="flex-1 text-[#586B74] text-[14px]">Sprinkleriasennusten 3. osapuolen varmennustarkastuksen pöytäkirja</span>
                        </label>
                        
                        <label class="mb-1 flex items-center gap-2 cursor-pointer">
                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            </span>
                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_VL13">

                            <span class="flex-1 text-[#586B74] text-[14px]">Automaation tarkastuspöytäkirja</span>
                        </label>
                        
                        <label class="mb-1 flex items-center gap-2 cursor-pointer">
                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            </span>
                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_VL14">

                            <span class="flex-1 text-[#586B74] text-[14px]">Vedeneristetöiden toteutuspöytäkirja</span>
                        </label>
                        
                        <label class="mb-1 flex items-center gap-2 cursor-pointer">
                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            </span>
                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_VL15">

                            <span class="flex-1 text-[#586B74] text-[14px]">Talotekniikka-asennusten punakynäpiirustukset</span>
                        </label>
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <div class="flex items-center gap-3">
                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_VL16">
                            </label>
                            <input type="text" name="pilar_filed12_6" placeholder="Muuta..." class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                        </div>
                    </div>

                    <div class="help_wrap relative mb-2">
                        <div class="max-w-[700px] mx-auto flex items-center gap-2">
                            <label class="text-[#586B74] text-[14px] block min-w-[230px]">
                                Projektin valmistumisaika xx.xx.xxxx
                            </label>

                            <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                            
                            <hr class="help_line hidden w-full border border-solid border-[#E1E1EA]">
                        </div>

                        <div class="help_show hidden text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px]">
                            Mahdollisuus vaihtaa nimea
                        </div>
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto flex items-center gap-5">
                        <input type="text" name="pilar_VA1" placeholder="XX.XX.XXXX" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[41%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                        <input type="text" name="pilar_VA2" placeholder="XX.XX.XXXX" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[41%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <hr class="border border-solid border-[#E1E1EA] ml-[-20px] mr-[-20px] mt-10">

                    <div class="flex items-center justify-between pt-[20px]">
                        <div>
                            <a href="<?php echo esc_attr( $takaisin ); ?>" class="text-[14px] text-black font-medium border border-solid border-[#E1E1EA] rounded-lg flex items-center pr-3 py-1">
                                <svg width="24px" height="24px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" stroke="#000000" stroke-width="0.00032"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="icomoon-ignore"> </g> <path d="M12.792 15.233l-0.754 0.754 6.035 6.035 0.754-0.754-5.281-5.281 5.256-5.256-0.754-0.754-3.013 3.013z" fill="#7a7a7a"> </path> </g></svg>
                                Takaisin
                            </a>
                        </div>
        
                        <div>
                            <button id="global-form-submit" class="text-[14px] text-white font-medium bg-[#00B2A9] border border-solid border-[#818D930F] rounded-lg flex items-center gap-2 px-3 py-1">
                                Hyväksy
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

 <?php get_footer(); ?>