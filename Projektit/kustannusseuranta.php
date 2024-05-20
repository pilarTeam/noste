<?php 

/* Template Name: Kustannusseuranta */

if ( !is_user_logged_in() || !isset($_GET['pid']) ) {
    wp_redirect( site_url() );
    exit;
}

$takaisin = get_permalink( $_GET['pid'] );

$pid = (int) $_GET['pid'];

if ( !is_int($pid) ) {
    wp_redirect( site_url() );
    exit;
}



get_header( 'noste' );

?>
    <style>
        .scroller {
            scrollbar-width: thin;
        }
    </style>
    <section class="my-8">
        <div class="container px-4">
            <div class="border border-solid border-[#E1E1EA] rounded-[12px] p-[20px] bg-white">
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <span class="text-[#818D93] text-[13px] font-medium">Project nimi</span>
                        <h1 class="text-[#08202C] text-[18px] font-medium">Kustannusseuranta</h1>
                    </div>
    
                    <div>
                        <button class="text-[#08202C] font-medium bg-[#E9E9F0] border border-solid border-[#CCCCD6] rounded-lg flex items-center gap-2 px-3 py-2">
                            <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path fill="#08202C" d="M60,12h-6V2c0-1.105-0.895-2-2-2H12c-1.105,0-2,0.895-2,2v10H4c-2.211,0-4,1.789-4,4v32 c0,2.211,1.789,4,4,4h6v10c0,1.105,0.895,2,2,2h40c1.105,0,2-0.895,2-2V52h6c2.211,0,4-1.789,4-4V16C64,13.789,62.211,12,60,12z M12,3c0-0.553,0.447-1,1-1h38c0.553,0,1,0.447,1,1v9H12V3z M52,61c0,0.553-0.447,1-1,1H13c-0.553,0-1-0.447-1-1V37 c0-0.553,0.447-1,1-1h38c0.553,0,1,0.447,1,1V61z M62,48c0,1.104-0.896,2-2,2h-6V36c0-1.105-0.895-2-2-2H12c-1.105,0-2,0.895-2,2 v14H4c-1.104,0-2-0.896-2-2V16c0-1.104,0.896-2,2-2h56c1.104,0,2,0.896,2,2V48z"></path> <path fill="#08202C" d="M19,44h12c0.553,0,1-0.447,1-1s-0.447-1-1-1H19c-0.553,0-1,0.447-1,1S18.447,44,19,44z"></path> <path fill="#08202C" d="M45,48H19c-0.553,0-1,0.447-1,1s0.447,1,1,1h26c0.553,0,1-0.447,1-1S45.553,48,45,48z"></path> <path fill="#08202C" d="M38,54H19c-0.553,0-1,0.447-1,1s0.447,1,1,1h19c0.553,0,1-0.447,1-1S38.553,54,38,54z"></path> <path fill="#08202C" d="M55,18c-1.657,0-3,1.343-3,3s1.343,3,3,3s3-1.343,3-3S56.657,18,55,18z M55,22c-0.553,0-1-0.447-1-1 s0.447-1,1-1s1,0.447,1,1S55.553,22,55,22z"></path> <path fill="#08202C" d="M45,18c-1.657,0-3,1.343-3,3s1.343,3,3,3s3-1.343,3-3S46.657,18,45,18z M45,22c-0.553,0-1-0.447-1-1 s0.447-1,1-1s1,0.447,1,1S45.553,22,45,22z"></path> </g> </g></svg>
      
                            Luonnos
                        </button>
                    </div>
                </div>

                <hr class="border border-solid border-[#E1E1EA] ml-[-20px] mr-[-20px]">

                <div class="mt-10 lg:ml-[70px]">
                    <span class="font-medium italic text-[#00B2A9] block"><?php echo esc_attr( noste_check_empty( get_post_meta( $pid, 'pilar_T1', true ), 'T1' )); ?></span>
                    <span class="font-medium italic text-[#00B2A9] block"><?php echo esc_attr( noste_check_empty( get_post_meta( $pid, 'pilar_K1', true ), 'K1') ); ?></span>
                </div>

                <div class="flex items-center justify-between my-10 lg:ml-[70px]">
                    <input type="text" name="pilar_M4" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[300px] border border-solid border-[#06F9B7] rounded-[5px] p-2" placeholder="Kustannusseuranta (alv. 0%)">
                    <span class="italic text-[#00B2A9]"><?php echo esc_html( gmdate('d.m.Y') ); ?></span>
                </div>

                <div class="mb-10 lg:ml-[70px]">
                    <h3 class="italic text-[#00B2A9] font-medium text-[24px]"><?php echo esc_attr( noste_check_empty( get_post_meta( $pid, 'pilar_K4', true ), 'K4') ); ?></h3>
                </div>

                <div>
                    <div class="overflow-x-scroll lg:overflow-x-auto scroller">
                        <table class="w-full">
                            <tr>
                                <th class="min-w-[70px]"></th>
                                <th class="min-w-[424px] bg-[#00B2A9] text-left text-white font-medium p-3 text-[18px] border border-solid border-[#E1E1EA]">Toimenpiteet</th>
                                <th class="min-w-[126px] bg-[#00B2A9] text-left text-white font-medium p-3 text-[18px] border border-solid border-[#E1E1EA]">Budjetti</th>
                                <th class="min-w-[188px] bg-[#00B2A9] text-left text-white font-medium p-3 text-[18px] border border-solid border-[#E1E1EA]">Sidottu</th>
                                <th class="min-w-[300px] bg-[#00B2A9] text-left text-white font-medium p-3 text-[18px] border border-solid border-[#E1E1EA]">Toteuma</th>
                                <th class="min-w-[350px] bg-[#00B2A9] text-left text-white font-medium p-3 text-[18px] border border-solid border-[#E1E1EA]">Ennuste</th>
                                <th class=""></th>
                            </tr>
    
                            <tr>
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left text-[#283B44] font-medium p-3 border border-solid border-[#E1E1EA]">Rakennustyöt yhteensä</td>
                                <td class="text-[#00B2A9] italic text-left p-3 border border-solid border-[#E1E1EA]"><?php echo esc_attr( noste_check_empty( get_post_meta( $pid, 'pilar_BU2', true ), 'BU2') ); ?></td>
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-[#586B74] text-[14px] text-left p-3 border border-solid border-[#E1E1EA]">E2=<span class="text-[#00B2A9] italic"><?php echo esc_attr( noste_check_empty( get_post_meta( $pid, 'pilar_UH1', true ), 'UH1') ); ?></span> + 6200€ + <span class="italic">Ennuste1 + jne.</span></td>
                                <td class=""></td>
                            </tr>
    
                            <tr>
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left text-[#00B2A9] italic p-3 border border-solid border-[#E1E1EA]"><?php echo esc_attr( noste_check_empty( get_post_meta( $pid, 'pilar_U1', true ), 'U1') ); ?>, Urakkasopimuksen mukaiset työt</td>
                                <td class="text-left p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-[#00B2A9] italic text-left p-3 border border-solid border-[#E1E1EA]"><?php echo esc_attr( noste_check_empty( get_post_meta( $pid, 'pilar_UH1', true ),'UH1') ); ?></td>
                                <td class="text-left text-[#586B74 text-[14px] p-3 border border-solid border-[#E1E1EA] laskun_summa_total">60 000 €</td>
                                <td class="text-[#00B2A9] italic text-[14px] text-left p-3 border border-solid border-[#E1E1EA]">0 €</td>
                                <td class=""></td>
                            </tr>
    
                            <tr>
                                <td class="text-center font-medium p-3 border border-solid border-[#E1E1EA]">
                                    <a href="#!" class="row_collapse" id="collapse_2">
                                        <svg width="24px" height="24px" class="icon1 mx-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#586B74" stroke-width="0.384"></circle> <path d="M15 12H9" stroke="#586B74" stroke-width="0.384" stroke-linecap="round"></path> </g></svg>

                                        <svg width="24px" height="24px" class="icon2 hidden mx-auto" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 7V17M7 12H17M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#586B74" stroke-width="0.336" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </a>
                                </td>
                                <td class="text-left text-[#00B2A9] italic font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="col_collapse_2 bg-[#00B2A9] text-left text-black p-3 text-[17px] border border-solid border-[#E1E1EA]">Laskunumero</td>
                                <td class="col_collapse_2 bg-[#00B2A9] text-right text-black p-3 text-[17px] border border-solid border-[#E1E1EA]">Laskun summa (alv 0%)</td>
                                <td class="text-[#586B74] text-[14px] text-left p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class=""></td>
                            </tr>
    
                            <tr class="row_collapse_2">
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left text-[#00B2A9] italic font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-right text-[#586B74] text-[14px] p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="1" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="text-right text-[#586B74] text-[14px] p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="20 000 €" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2 kustan_calculate laskun_summa">
                                </td>
                                <td class="text-[#586B74] text-[14px] text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class=""></td>
                            </tr>
    
                            <tr class="row_collapse_2">
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left text-[#00B2A9] italic font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-right text-[#586B74] text-[14px] p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="2" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="text-right text-[#586B74] text-[14px] p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="40 000 €" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2 kustan_calculate laskun_summa">
                                </td>
                                <td class="text-[#586B74] text-[14px] text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class=""></td>
                            </tr>
    
                            <tr class="row_collapse_2">
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left text-[#00B2A9] italic font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-center font-medium p-3 border border-solid border-[#E1E1EA]">
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                    </label>
                                </td>
                                <td class="text-right text-[#586B74] text-[14px] p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="x" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="text-right text-[#586B74] text-[14px] p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="0 €" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2 kustan_calculate laskun_summa">
                                </td>
                                <td class="text-[#586B74] text-[14px] text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class=""></td>
                            </tr>
    
                            <tr class="row_collapse_2">
                                <td class="text-left font-medium p-6 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left text-[#00B2A9] italic font-medium p-6 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-center font-medium p-6 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-right text-[#586B74] font-medium text-[14px] p-6 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-right text-[#586B74] font-medium text-[14px] p-6 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-[#586B74] text-[14px] text-left font-medium p-6 border border-solid border-[#E1E1EA]"></td>
                                <td class=""></td>
                            </tr>
    
                            <tr>
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-[#586B74] text-[14px] text-left p-3 border border-solid border-[#E1E1EA]"><span class="text-[#00B2A9] italic"><?php echo esc_attr( noste_check_empty( get_post_meta( $pid, 'pilar_U1', true ), 'U1') ); ?>,</span> Lisä- ja muutostyöt</td>
                                <td class="text-center font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-right text-[#586B74] text-[14px] p-3 border border-solid border-[#E1E1EA] tarjous_G24">5 000 €</td>
                                <td class="text-right text-[#586B74] text-[14px] p-3 border border-solid border-[#E1E1EA] tarjous_G24">5 000 €</td>
                                <td class="text-[#586B74] text-[14px] text-left p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="6 200 €" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2 tarjous_value_total">
                                </td>
                                <td class=""></td>
                            </tr>
                        </table>
                    </div>

                    <div class="overflow-x-scroll scroller">
                        <table class="w-full">
                            <tr>
                                <td class="text-center p-3 border border-solid border-[#E1E1EA]">
                                    <a href="#!" class="row_collapse" id="collapse_3">
                                        <svg width="24px" height="24px" class="icon1 mx-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#586B74" stroke-width="0.384"></circle> <path d="M15 12H9" stroke="#586B74" stroke-width="0.384" stroke-linecap="round"></path> </g></svg>

                                        <svg width="24px" height="24px" class="icon2 hidden mx-auto" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 7V17M7 12H17M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#586B74" stroke-width="0.336" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </a>
                                </td>
                                <td class="min-w-[424px] text-left text-white font-medium p-3 text-[18px] border border-solid border-[#E1E1EA]"></td>
                                <td class="min-w-[126px] text-left text-white font-medium p-3 text-[18px] border border-solid border-[#E1E1EA]"></td>
                                <td class="col_collapse_3 min-w-[188px] bg-[#00B2A9] text-left text-black p-3 border border-solid border-[#E1E1EA]">Juokseva nro</td>
                                <td class="col_collapse_3 min-w-[300px] bg-[#00B2A9] text-left text-black p-3 border border-solid border-[#E1E1EA]">Tarjous nro</td>
                                <td class="col_collapse_3 min-w-[350px] bg-[#00B2A9] text-left text-black p-3 border border-solid border-[#E1E1EA]">Sisältö</td>
                                <td class="col_collapse_3 bg-[#00B2A9] text-left text-black p-3 border border-solid border-[#E1E1EA] min-w-[230px]">Tarjous € (alv 0%)</td>
                                <td class="col_collapse_3 bg-[#00B2A9] text-left text-white font-medium p-3 text-[18px] border border-solid border-[#E1E1EA] min-w-[230px]">Tarjous pvm.</td>
                                <td class="col_collapse_3 bg-[#00B2A9] text-left text-black p-3 border border-solid border-[#E1E1EA] min-w-[230px]">Käyttäjämuutos</td>
                                <td class="col_collapse_3 bg-[#00B2A9] text-left text-black p-3 border border-solid border-[#E1E1EA] min-w-[230px]">Hinnoitteluperuste</td>
                                <td class="col_collapse_3 bg-[#00B2A9] text-left text-black p-3 border border-solid border-[#E1E1EA] min-w-[230px]">Maksaja</td>
                                <td class="col_collapse_3 bg-[#00B2A9] text-left text-black p-3 border border-solid border-[#E1E1EA] min-w-[230px]">Lisätyö / muutostyö</td>
                                <td class="col_collapse_3 bg-[#00B2A9] text-left text-black p-3 border border-solid border-[#E1E1EA] min-w-[230px]">Hyväks. Käyttäjä (pvm.)</td>
                                <td class="col_collapse_3 bg-[#00B2A9] text-left text-black p-3 border border-solid border-[#E1E1EA] min-w-[230px]">Hyväks. Tilaaja (pvm.)</td>
                                <td class="col_collapse_3 bg-[#00B2A9] text-left text-black p-3 border border-solid border-[#E1E1EA] min-w-[230px]">Lisäaikavaikutus (tv)</td>
                                <td class="col_collapse_3 bg-[#00B2A9] text-left text-black p-3 border border-solid border-[#E1E1EA] min-w-[230px]">Laskutettu</td>
                                <td class="col_collapse_3 bg-[#00B2A9] text-left text-black p-3 border border-solid border-[#E1E1EA] min-w-[230px]">Lasku numero</td>
                                <td class="col_collapse_3 bg-[#00B2A9] text-left text-black p-3 border border-solid border-[#E1E1EA] min-w-[450px]">Huom.</td>
                            </tr>

                            <tr class="row_collapse_3"> 
                                <td class="min-w-[70px] text-center font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="min-w-[424px] text-right text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]"></td>
                                <td class="min-w-[126px] text-right text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]"></td>
                                <td class="min-w-[188px] text-right text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="1" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="min-w-[300px] text-right text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="2a" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="min-w-[350px] text-right text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="Sisäänkäyntiovi" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="text-right text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="5 000 €" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2 kustan_calculate tarjous_value G24">
                                </td>
                                <td class="text-right text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="12/24/2023" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="text-left text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <div class="dropdown_click shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2 cursor-pointer relative">
                                        <span class="flex items-center justify-between">
                                            Kyllä
        
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 300 300">
                                                <g id="expand_input_field" transform="translate(-622 -557)">
                                                <rect id="Rectangle_1128" data-name="Rectangle 1128" width="20px" height="20px" transform="translate(622 557)" fill="#fff" opacity="0"></rect>
                                                <path id="Path_117" data-name="Path 117" d="M46.2,5.365a14.91,14.91,0,0,1,22.908,0l42.716,51.259A14.91,14.91,0,0,1,100.37,81.079H14.938A14.91,14.91,0,0,1,3.484,56.624Z" transform="translate(828.752 742.447) rotate(180)" fill="#818d93"></path>
                                                </g>
                                            </svg>
                                        </span>
        
                                        <div class="hidden dropdown_wrap overflow-y-auto absolute w-full border border-solid border-[#E1E1EA] rounded-lg p-3 text-offwhite mt-3 left-0 top-full z-50 bg-white" style="display: none;">
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Ei</span>
                                            </label>
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Kyllä</span>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-left text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <div class="dropdown_click shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2 cursor-pointer relative">
                                        <span class="flex items-center justify-between">
                                            Kiinteähintainen
        
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 300 300">
                                                <g id="expand_input_field" transform="translate(-622 -557)">
                                                <rect id="Rectangle_1128" data-name="Rectangle 1128" width="20px" height="20px" transform="translate(622 557)" fill="#fff" opacity="0"></rect>
                                                <path id="Path_117" data-name="Path 117" d="M46.2,5.365a14.91,14.91,0,0,1,22.908,0l42.716,51.259A14.91,14.91,0,0,1,100.37,81.079H14.938A14.91,14.91,0,0,1,3.484,56.624Z" transform="translate(828.752 742.447) rotate(180)" fill="#818d93"></path>
                                                </g>
                                            </svg>
                                        </span>
        
                                        <div class="hidden dropdown_wrap overflow-y-auto absolute w-full border border-solid border-[#E1E1EA] rounded-lg p-3 text-offwhite mt-3 left-0 top-full z-50 bg-white" style="display: none;">
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Laskutyö</span>
                                            </label>
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Kiinteähintainen</span>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-left text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <div class="dropdown_click shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2 cursor-pointer relative">
                                        <span class="flex items-center justify-between">
                                            Vuokranantaja
        
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 300 300">
                                                <g id="expand_input_field" transform="translate(-622 -557)">
                                                <rect id="Rectangle_1128" data-name="Rectangle 1128" width="20px" height="20px" transform="translate(622 557)" fill="#fff" opacity="0"></rect>
                                                <path id="Path_117" data-name="Path 117" d="M46.2,5.365a14.91,14.91,0,0,1,22.908,0l42.716,51.259A14.91,14.91,0,0,1,100.37,81.079H14.938A14.91,14.91,0,0,1,3.484,56.624Z" transform="translate(828.752 742.447) rotate(180)" fill="#818d93"></path>
                                                </g>
                                            </svg>
                                        </span>
        
                                        <div class="hidden dropdown_wrap overflow-y-auto absolute w-full border border-solid border-[#E1E1EA] rounded-lg p-3 text-offwhite mt-3 left-0 top-full z-50 bg-white" style="display: none;">
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Vuokralainen</span>
                                            </label>
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Vuokranantaja</span>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-left text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <div class="dropdown_click shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2 cursor-pointer relative">
                                        <span class="flex items-center justify-between">
                                            Lisätyö
        
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 300 300">
                                                <g id="expand_input_field" transform="translate(-622 -557)">
                                                <rect id="Rectangle_1128" data-name="Rectangle 1128" width="20px" height="20px" transform="translate(622 557)" fill="#fff" opacity="0"></rect>
                                                <path id="Path_117" data-name="Path 117" d="M46.2,5.365a14.91,14.91,0,0,1,22.908,0l42.716,51.259A14.91,14.91,0,0,1,100.37,81.079H14.938A14.91,14.91,0,0,1,3.484,56.624Z" transform="translate(828.752 742.447) rotate(180)" fill="#818d93"></path>
                                                </g>
                                            </svg>
                                        </span>
        
                                        <div class="hidden dropdown_wrap overflow-y-auto absolute w-full border border-solid border-[#E1E1EA] rounded-lg p-3 text-offwhite mt-3 left-0 top-full z-50 bg-white" style="display: none;">
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Muutostyö</span>
                                            </label>
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Lisätyö</span>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-right text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="-" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="text-right text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="Matti Meikäläinen 25.12.2023" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="text-right text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="3" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="text-left text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <div class="dropdown_click shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2 cursor-pointer relative">
                                        <span class="flex items-center justify-between">
                                            Kyllä
        
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 300 300">
                                                <g id="expand_input_field" transform="translate(-622 -557)">
                                                <rect id="Rectangle_1128" data-name="Rectangle 1128" width="20px" height="20px" transform="translate(622 557)" fill="#fff" opacity="0"></rect>
                                                <path id="Path_117" data-name="Path 117" d="M46.2,5.365a14.91,14.91,0,0,1,22.908,0l42.716,51.259A14.91,14.91,0,0,1,100.37,81.079H14.938A14.91,14.91,0,0,1,3.484,56.624Z" transform="translate(828.752 742.447) rotate(180)" fill="#818d93"></path>
                                                </g>
                                            </svg>
                                        </span>
        
                                        <div class="hidden dropdown_wrap overflow-y-auto absolute w-full border border-solid border-[#E1E1EA] rounded-lg p-3 text-offwhite mt-3 left-0 top-full z-50 bg-white" style="display: none;">
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Ei</span>
                                            </label>
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Kyllä</span>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-left text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <div class="dropdown_click shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2 cursor-pointer relative">
                                        <span class="flex items-center justify-between">
                                            Kyllä
        
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 300 300">
                                                <g id="expand_input_field" transform="translate(-622 -557)">
                                                <rect id="Rectangle_1128" data-name="Rectangle 1128" width="20px" height="20px" transform="translate(622 557)" fill="#fff" opacity="0"></rect>
                                                <path id="Path_117" data-name="Path 117" d="M46.2,5.365a14.91,14.91,0,0,1,22.908,0l42.716,51.259A14.91,14.91,0,0,1,100.37,81.079H14.938A14.91,14.91,0,0,1,3.484,56.624Z" transform="translate(828.752 742.447) rotate(180)" fill="#818d93"></path>
                                                </g>
                                            </svg>
                                        </span>
        
                                        <div class="hidden dropdown_wrap overflow-y-auto absolute w-full border border-solid border-[#E1E1EA] rounded-lg p-3 text-offwhite mt-3 left-0 top-full z-50 bg-white" style="display: none;">
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Ei</span>
                                            </label>
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Kyllä</span>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-right text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="Teräslasiovi vasikalla, heloitukset ja lukitukset kuuluvat tarjoukseen" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                            </tr>

                            <tr class="row_collapse_3">
                                <td class="min-w-[70px] text-center font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="min-w-[424px] text-right text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]"></td>
                                <td class="min-w-[126px] text-right text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]"></td>
                                <td class="min-w-[188px] text-right text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="2" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="min-w-[300px] text-right text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="3" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="min-w-[350px] text-right text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="Lattialistat" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="text-right text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="1 200 €" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2 kustan_calculate tarjous_value">
                                </td>
                                <td class="text-right text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="12/24/2023" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="text-left text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <div class="dropdown_click shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2 cursor-pointer relative">
                                        <span class="flex items-center justify-between">
                                            Kyllä
        
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 300 300">
                                                <g id="expand_input_field" transform="translate(-622 -557)">
                                                <rect id="Rectangle_1128" data-name="Rectangle 1128" width="20px" height="20px" transform="translate(622 557)" fill="#fff" opacity="0"></rect>
                                                <path id="Path_117" data-name="Path 117" d="M46.2,5.365a14.91,14.91,0,0,1,22.908,0l42.716,51.259A14.91,14.91,0,0,1,100.37,81.079H14.938A14.91,14.91,0,0,1,3.484,56.624Z" transform="translate(828.752 742.447) rotate(180)" fill="#818d93"></path>
                                                </g>
                                            </svg>
                                        </span>
        
                                        <div class="hidden dropdown_wrap overflow-y-auto absolute w-full border border-solid border-[#E1E1EA] rounded-lg p-3 text-offwhite mt-3 left-0 top-full z-50 bg-white" style="display: none;">
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Ei</span>
                                            </label>
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Kyllä</span>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-left text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <div class="dropdown_click shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2 cursor-pointer relative">
                                        <span class="flex items-center justify-between">
                                            Kiinteähintainen
        
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 300 300">
                                                <g id="expand_input_field" transform="translate(-622 -557)">
                                                <rect id="Rectangle_1128" data-name="Rectangle 1128" width="20px" height="20px" transform="translate(622 557)" fill="#fff" opacity="0"></rect>
                                                <path id="Path_117" data-name="Path 117" d="M46.2,5.365a14.91,14.91,0,0,1,22.908,0l42.716,51.259A14.91,14.91,0,0,1,100.37,81.079H14.938A14.91,14.91,0,0,1,3.484,56.624Z" transform="translate(828.752 742.447) rotate(180)" fill="#818d93"></path>
                                                </g>
                                            </svg>
                                        </span>
        
                                        <div class="hidden dropdown_wrap overflow-y-auto absolute w-full border border-solid border-[#E1E1EA] rounded-lg p-3 text-offwhite mt-3 left-0 top-full z-50 bg-white" style="display: none;">
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Laskutyö</span>
                                            </label>
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Kiinteähintainen</span>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-left text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <div class="dropdown_click shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2 cursor-pointer relative">
                                        <span class="flex items-center justify-between">
                                            Vuokranantaja
        
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 300 300">
                                                <g id="expand_input_field" transform="translate(-622 -557)">
                                                <rect id="Rectangle_1128" data-name="Rectangle 1128" width="20px" height="20px" transform="translate(622 557)" fill="#fff" opacity="0"></rect>
                                                <path id="Path_117" data-name="Path 117" d="M46.2,5.365a14.91,14.91,0,0,1,22.908,0l42.716,51.259A14.91,14.91,0,0,1,100.37,81.079H14.938A14.91,14.91,0,0,1,3.484,56.624Z" transform="translate(828.752 742.447) rotate(180)" fill="#818d93"></path>
                                                </g>
                                            </svg>
                                        </span>
        
                                        <div class="hidden dropdown_wrap overflow-y-auto absolute w-full border border-solid border-[#E1E1EA] rounded-lg p-3 text-offwhite mt-3 left-0 top-full z-50 bg-white" style="display: none;">
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Vuokralainen</span>
                                            </label>
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Vuokranantaja</span>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-left text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <div class="dropdown_click shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2 cursor-pointer relative">
                                        <span class="flex items-center justify-between">
                                            Lisätyö
        
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 300 300">
                                                <g id="expand_input_field" transform="translate(-622 -557)">
                                                <rect id="Rectangle_1128" data-name="Rectangle 1128" width="20px" height="20px" transform="translate(622 557)" fill="#fff" opacity="0"></rect>
                                                <path id="Path_117" data-name="Path 117" d="M46.2,5.365a14.91,14.91,0,0,1,22.908,0l42.716,51.259A14.91,14.91,0,0,1,100.37,81.079H14.938A14.91,14.91,0,0,1,3.484,56.624Z" transform="translate(828.752 742.447) rotate(180)" fill="#818d93"></path>
                                                </g>
                                            </svg>
                                        </span>
        
                                        <div class="hidden dropdown_wrap overflow-y-auto absolute w-full border border-solid border-[#E1E1EA] rounded-lg p-3 text-offwhite mt-3 left-0 top-full z-50 bg-white" style="display: none;">
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Muutostyö</span>
                                            </label>
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Lisätyö</span>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-right text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="-" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="text-right text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="-" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="text-right text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="1" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="text-left text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <div class="dropdown_click shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2 cursor-pointer relative">
                                        <span class="flex items-center justify-between">
                                            Kyllä
        
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 300 300">
                                                <g id="expand_input_field" transform="translate(-622 -557)">
                                                <rect id="Rectangle_1128" data-name="Rectangle 1128" width="20px" height="20px" transform="translate(622 557)" fill="#fff" opacity="0"></rect>
                                                <path id="Path_117" data-name="Path 117" d="M46.2,5.365a14.91,14.91,0,0,1,22.908,0l42.716,51.259A14.91,14.91,0,0,1,100.37,81.079H14.938A14.91,14.91,0,0,1,3.484,56.624Z" transform="translate(828.752 742.447) rotate(180)" fill="#818d93"></path>
                                                </g>
                                            </svg>
                                        </span>
        
                                        <div class="hidden dropdown_wrap overflow-y-auto absolute w-full border border-solid border-[#E1E1EA] rounded-lg p-3 text-offwhite mt-3 left-0 top-full z-50 bg-white" style="display: none;">
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Ei</span>
                                            </label>
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Kyllä</span>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-left text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <div class="dropdown_click shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2 cursor-pointer relative">
                                        <span class="flex items-center justify-between">
                                            Kyllä
        
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 300 300">
                                                <g id="expand_input_field" transform="translate(-622 -557)">
                                                <rect id="Rectangle_1128" data-name="Rectangle 1128" width="20px" height="20px" transform="translate(622 557)" fill="#fff" opacity="0"></rect>
                                                <path id="Path_117" data-name="Path 117" d="M46.2,5.365a14.91,14.91,0,0,1,22.908,0l42.716,51.259A14.91,14.91,0,0,1,100.37,81.079H14.938A14.91,14.91,0,0,1,3.484,56.624Z" transform="translate(828.752 742.447) rotate(180)" fill="#818d93"></path>
                                                </g>
                                            </svg>
                                        </span>
        
                                        <div class="hidden dropdown_wrap overflow-y-auto absolute w-full border border-solid border-[#E1E1EA] rounded-lg p-3 text-offwhite mt-3 left-0 top-full z-50 bg-white" style="display: none;">
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Ei</span>
                                            </label>
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Kyllä</span>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-right text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="Vaihdetaan kaikki jalkalistat uusiin." class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                            </tr>

                            <tr class="row_collapse_3">
                                <td class="min-w-[70px] text-center font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="min-w-[424px] text-right text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]"></td>
                                <td class="min-w-[126px] text-center text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                    </label>
                                </td>
                                <td class="min-w-[188px] text-right text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="min-w-[300px] text-right text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="min-w-[350px] text-right text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="text-right text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2 kustan_calculate tarjous_value">
                                </td>
                                <td class="text-right text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="text-left text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <div class="dropdown_click shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2 cursor-pointer relative">
                                        <span class="flex items-center justify-between">
                                            <span></span>
        
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 300 300">
                                                <g id="expand_input_field" transform="translate(-622 -557)">
                                                <rect id="Rectangle_1128" data-name="Rectangle 1128" width="20px" height="20px" transform="translate(622 557)" fill="#fff" opacity="0"></rect>
                                                <path id="Path_117" data-name="Path 117" d="M46.2,5.365a14.91,14.91,0,0,1,22.908,0l42.716,51.259A14.91,14.91,0,0,1,100.37,81.079H14.938A14.91,14.91,0,0,1,3.484,56.624Z" transform="translate(828.752 742.447) rotate(180)" fill="#818d93"></path>
                                                </g>
                                            </svg>
                                        </span>
        
                                        <div class="hidden dropdown_wrap overflow-y-auto absolute w-full border border-solid border-[#E1E1EA] rounded-lg p-3 text-offwhite mt-3 left-0 top-full z-50 bg-white" style="display: none;">
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Ei</span>
                                            </label>
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Kyllä</span>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-left text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <div class="dropdown_click shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2 cursor-pointer relative">
                                        <span class="flex items-center justify-between">
                                            <span></span>
        
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 300 300">
                                                <g id="expand_input_field" transform="translate(-622 -557)">
                                                <rect id="Rectangle_1128" data-name="Rectangle 1128" width="20px" height="20px" transform="translate(622 557)" fill="#fff" opacity="0"></rect>
                                                <path id="Path_117" data-name="Path 117" d="M46.2,5.365a14.91,14.91,0,0,1,22.908,0l42.716,51.259A14.91,14.91,0,0,1,100.37,81.079H14.938A14.91,14.91,0,0,1,3.484,56.624Z" transform="translate(828.752 742.447) rotate(180)" fill="#818d93"></path>
                                                </g>
                                            </svg>
                                        </span>
        
                                        <div class="hidden dropdown_wrap overflow-y-auto absolute w-full border border-solid border-[#E1E1EA] rounded-lg p-3 text-offwhite mt-3 left-0 top-full z-50 bg-white" style="display: none;">
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Laskutyö</span>
                                            </label>
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Kiinteähintainen</span>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-left text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <div class="dropdown_click shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2 cursor-pointer relative">
                                        <span class="flex items-center justify-between">
                                            <span></span>
        
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 300 300">
                                                <g id="expand_input_field" transform="translate(-622 -557)">
                                                <rect id="Rectangle_1128" data-name="Rectangle 1128" width="20px" height="20px" transform="translate(622 557)" fill="#fff" opacity="0"></rect>
                                                <path id="Path_117" data-name="Path 117" d="M46.2,5.365a14.91,14.91,0,0,1,22.908,0l42.716,51.259A14.91,14.91,0,0,1,100.37,81.079H14.938A14.91,14.91,0,0,1,3.484,56.624Z" transform="translate(828.752 742.447) rotate(180)" fill="#818d93"></path>
                                                </g>
                                            </svg>
                                        </span>
        
                                        <div class="hidden dropdown_wrap overflow-y-auto absolute w-full border border-solid border-[#E1E1EA] rounded-lg p-3 text-offwhite mt-3 left-0 top-full z-50 bg-white" style="display: none;">
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Vuokralainen</span>
                                            </label>
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Vuokranantaja</span>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-left text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <div class="dropdown_click shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2 cursor-pointer relative">
                                        <span class="flex items-center justify-between">
                                            <span></span>
        
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 300 300">
                                                <g id="expand_input_field" transform="translate(-622 -557)">
                                                <rect id="Rectangle_1128" data-name="Rectangle 1128" width="20px" height="20px" transform="translate(622 557)" fill="#fff" opacity="0"></rect>
                                                <path id="Path_117" data-name="Path 117" d="M46.2,5.365a14.91,14.91,0,0,1,22.908,0l42.716,51.259A14.91,14.91,0,0,1,100.37,81.079H14.938A14.91,14.91,0,0,1,3.484,56.624Z" transform="translate(828.752 742.447) rotate(180)" fill="#818d93"></path>
                                                </g>
                                            </svg>
                                        </span>
        
                                        <div class="hidden dropdown_wrap overflow-y-auto absolute w-full border border-solid border-[#E1E1EA] rounded-lg p-3 text-offwhite mt-3 left-0 top-full z-50 bg-white" style="display: none;">
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Muutostyö</span>
                                            </label>
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Lisätyö</span>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-right text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="text-right text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="text-right text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="text-left text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <div class="dropdown_click shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2 cursor-pointer relative">
                                        <span class="flex items-center justify-between">
                                            <span></span>
        
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 300 300">
                                                <g id="expand_input_field" transform="translate(-622 -557)">
                                                <rect id="Rectangle_1128" data-name="Rectangle 1128" width="20px" height="20px" transform="translate(622 557)" fill="#fff" opacity="0"></rect>
                                                <path id="Path_117" data-name="Path 117" d="M46.2,5.365a14.91,14.91,0,0,1,22.908,0l42.716,51.259A14.91,14.91,0,0,1,100.37,81.079H14.938A14.91,14.91,0,0,1,3.484,56.624Z" transform="translate(828.752 742.447) rotate(180)" fill="#818d93"></path>
                                                </g>
                                            </svg>
                                        </span>
        
                                        <div class="hidden dropdown_wrap overflow-y-auto absolute w-full border border-solid border-[#E1E1EA] rounded-lg p-3 text-offwhite mt-3 left-0 top-full z-50 bg-white" style="display: none;">
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Ei</span>
                                            </label>
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Kyllä</span>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-left text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <div class="dropdown_click shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2 cursor-pointer relative">
                                        <span class="flex items-center justify-between">
                                            <span></span>
        
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 300 300">
                                                <g id="expand_input_field" transform="translate(-622 -557)">
                                                <rect id="Rectangle_1128" data-name="Rectangle 1128" width="20px" height="20px" transform="translate(622 557)" fill="#fff" opacity="0"></rect>
                                                <path id="Path_117" data-name="Path 117" d="M46.2,5.365a14.91,14.91,0,0,1,22.908,0l42.716,51.259A14.91,14.91,0,0,1,100.37,81.079H14.938A14.91,14.91,0,0,1,3.484,56.624Z" transform="translate(828.752 742.447) rotate(180)" fill="#818d93"></path>
                                                </g>
                                            </svg>
                                        </span>
        
                                        <div class="hidden dropdown_wrap overflow-y-auto absolute w-full border border-solid border-[#E1E1EA] rounded-lg p-3 text-offwhite mt-3 left-0 top-full z-50 bg-white" style="display: none;">
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Ei</span>
                                            </label>
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Kyllä</span>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-right text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="overflow-x-scroll lg:overflow-x-auto scroller">
                        <table class="w-full">
                            <tr>
                                <td class="text-center min-w-[70px] text-left font-medium p-3 border border-solid border-[#E1E1EA]">
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                    </label>
                                </td>
                                <td class="min-w-[424px] text-left text-[#283B44] p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="Muut toimittajat, Asbestipurku Oy" class="itlaic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="min-w-[126px] text-[#00B2A9] italic text-left p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="min-w-[188px] text-left p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="Tarjous 1" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="min-w-[300px] text-left text-[#586B74] p-3 border border-solid border-[#E1E1EA] tarjous_1_total">6000 €  </td>
                                <td class="min-w-[350px] text-[#586B74] text-[14px] text-left p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="Ennuste1" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class=""></td>
                            </tr>

                            <tr>
                                <td class="text-center font-medium p-3 border border-solid border-[#E1E1EA]">
                                    <a href="#!" class="row_collapse" id="collapse_4">
                                        <svg width="24px" height="24px" class="icon1 mx-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#586B74" stroke-width="0.384"></circle> <path d="M15 12H9" stroke="#586B74" stroke-width="0.384" stroke-linecap="round"></path> </g></svg>

                                        <svg width="24px" height="24px" class="icon2 hidden mx-auto" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 7V17M7 12H17M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#586B74" stroke-width="0.336" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </a>
                                </td>
                                <td class="text-left text-[#00B2A9] italic font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="col_collapse_4 bg-[#00B2A9] text-left text-black p-3 text-[17px] border border-solid border-[#E1E1EA]">Laskunumero</td>
                                <td class="col_collapse_4 bg-[#00B2A9] text-right text-black p-3 text-[17px] border border-solid border-[#E1E1EA]">Laskun summa (alv 0%)</td>
                                <td class="text-[#586B74] text-[14px] text-left p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class=""></td>
                            </tr>
    
                            <tr class="row_collapse_4">
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left text-[#00B2A9] italic font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-right text-[#586B74] text-[14px] p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="1" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="text-right text-[#586B74] text-[14px] p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="1000 €" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2 tarjous_1_value">
                                </td>
                                <td class="text-[#586B74] text-[14px] text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class=""></td>
                            </tr>
    
                            <tr class="row_collapse_4">
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left text-[#00B2A9] italic font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-right text-[#586B74] text-[14px] p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="2" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="text-right text-[#586B74] text-[14px] p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="5000 €" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2 tarjous_1_value">
                                </td>
                                <td class="text-[#586B74] text-[14px] text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class=""></td>
                            </tr>
    
                            <tr class="row_collapse_4">
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left text-[#00B2A9] italic font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-center font-medium p-3 border border-solid border-[#E1E1EA]">
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                    </label>
                                </td>
                                <td class="text-right text-[#586B74] text-[14px] p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="x" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="text-right text-[#586B74] text-[14px] p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="0 €" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2 tarjous_1_value">
                                </td>
                                <td class="text-[#586B74] text-[14px] text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class=""></td>
                            </tr>
    
                            <tr class="row_collapse_4">
                                <td class="text-left font-medium p-6 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left text-[#00B2A9] italic font-medium p-6 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-center font-medium p-6 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-right text-[#586B74] font-medium text-[14px] p-6 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-right text-[#586B74] font-medium text-[14px] p-6 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-[#586B74] text-[14px] text-left font-medium p-6 border border-solid border-[#E1E1EA]"></td>
                                <td class=""></td>
                            </tr>
    
                            <tr>
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-black text-[14px] text-left font-medium p-3 border border-solid border-[#E1E1EA]">Projektinjohto, rakennuttaminen ja valvonta</td>
                                <td class="text-[#00B2A9] italic text-left p-3 border border-solid border-[#E1E1EA]"><?php echo esc_attr( noste_check_empty( get_post_meta( $pid, 'pilar_BU3', true ), 'BU3') ); ?></td>
                                <td class="text-right text-[#586B74] font-medium text-[14px] p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-right text-[#586B74] font-medium text-[14px] p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="min-w-[350px] text-left text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA] italic">E3=Ennuste2+ Ennuste3 + jne.</td>
                                <td class=""></td>
                            </tr>
    
                            <tr>
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="min-w-[350px] text-left text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA]">Partners at Noste Oy</td>
                                <td class="text-[#00B2A9] italic text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-right text-[#586B74] text-[14px] p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="Tarjous 2" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="text-right text-[#586B74] text-[14px] p-3 border border-solid border-[#E1E1EA] tarjous_2_total">4500 €</td>
                                <td class="min-w-[350px] text-right text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA] italic">
                                    <input type="text" name="pilar_M4" value="Ennuste2" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class=""></td>
                            </tr>

                            <tr>
                                <td class="text-center font-medium p-3 border border-solid border-[#E1E1EA]">
                                    <a href="#!" class="row_collapse" id="collapse_5">
                                        <svg width="24px" height="24px" class="icon1 mx-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#586B74" stroke-width="0.384"></circle> <path d="M15 12H9" stroke="#586B74" stroke-width="0.384" stroke-linecap="round"></path> </g></svg>

                                        <svg width="24px" height="24px" class="icon2 hidden mx-auto" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 7V17M7 12H17M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#586B74" stroke-width="0.336" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </a>
                                </td>
                                <td class="text-left text-[#00B2A9] italic font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="col_collapse_5 bg-[#00B2A9] text-left text-black p-3 text-[17px] border border-solid border-[#E1E1EA]">Laskunumero</td>
                                <td class="col_collapse_5 bg-[#00B2A9] text-right text-black p-3 text-[17px] border border-solid border-[#E1E1EA]">Laskun summa (alv 0%)</td>
                                <td class="text-[#586B74] text-[14px] text-left p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class=""></td>
                            </tr>

                            <tr class="row_collapse_5">
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left text-[#00B2A9] italic font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-right text-[#586B74] font-medium text-[14px] p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="1" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="text-right text-[#586B74] font-medium text-[14px] p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="3500 €" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2 tarjous_2_value">
                                </td>
                                <td class="text-[#586B74] text-[14px] text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class=""></td>
                            </tr>
    
                            <tr class="row_collapse_5">
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left text-[#00B2A9] italic font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-right text-[#586B74] font-medium text-[14px] p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="2" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="text-right text-[#586B74] font-medium text-[14px] p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="1000 €" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2 tarjous_2_value">
                                </td>
                                <td class="text-[#586B74] text-[14px] text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class=""></td>
                            </tr>
    
                            <tr class="row_collapse_5">
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left text-[#00B2A9] italic font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-center font-medium p-3 border border-solid border-[#E1E1EA]">
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                    </label>
                                </td>
                                <td class="text-right text-[#586B74] font-medium text-[14px] p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="x" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="text-right text-[#586B74] font-medium text-[14px] p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="0 €" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2 tarjous_2_value">
                                </td>
                                <td class="text-[#586B74] text-[14px] text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class=""></td>
                            </tr>

                            <tr>
                                <td class="text-center min-w-[70px] text-left font-medium p-3 border border-solid border-[#E1E1EA]">
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                    </label>
                                </td>
                                <td class="min-w-[424px] text-left text-[#283B44] p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="Muut toimittajat, LVIAS-valvonta Oy" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="min-w-[126px] text-[#00B2A9] italic text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="min-w-[188px] text-left p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="Tarjous 3" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="min-w-[300px] text-right p-3 border border-solid border-[#E1E1EA] tarjous_3_total">500 € </td>
                                <td class="min-w-[350px] text-[#586B74] text-[14px] text-left p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="Ennuste3" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class=""></td>
                            </tr>

                            <tr>
                                <td class="text-center font-medium p-3 border border-solid border-[#E1E1EA]">
                                    <a href="#!" class="row_collapse" id="collapse_6">
                                        <svg width="24px" height="24px" class="icon1 mx-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#586B74" stroke-width="0.384"></circle> <path d="M15 12H9" stroke="#586B74" stroke-width="0.384" stroke-linecap="round"></path> </g></svg>

                                        <svg width="24px" height="24px" class="icon2 hidden mx-auto" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 7V17M7 12H17M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#586B74" stroke-width="0.336" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </a>
                                </td>
                                <td class="text-left text-[#00B2A9] italic font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="col_collapse_6 bg-[#00B2A9] text-left text-black p-3 text-[17px] border border-solid border-[#E1E1EA]">Laskunumero</td>
                                <td class="col_collapse_6 bg-[#00B2A9] text-right text-black p-3 text-[17px] border border-solid border-[#E1E1EA]">Laskun summa (alv 0%)</td>
                                <td class="text-[#586B74] text-[14px] text-left p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class=""></td>
                            </tr>

                            <tr class="row_collapse_6">
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left text-[#00B2A9] italic font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-right text-[#586B74] text-[14px] p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="1" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="text-right text-[#586B74] text-[14px] p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="500 €" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2 tarjous_3_value">
                                </td>
                                <td class="text-[#586B74] text-[14px] text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class=""></td>
                            </tr>
    
                            <tr class="row_collapse_6">
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left text-[#00B2A9] italic font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-center font-medium p-3 border border-solid border-[#E1E1EA]">
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                    </label>
                                </td>
                                <td class="text-right text-[#586B74] text-[14px] p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="x" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="text-right text-[#586B74] text-[14px] p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="0 €" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2 tarjous_3_value">
                                </td>
                                <td class="text-[#586B74] text-[14px] text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class=""></td>
                            </tr>

                            <tr class="row_collapse_6">
                                <td class="text-left font-medium p-6 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left text-[#00B2A9] italic font-medium p-6 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-center font-medium p-6 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-right text-[#586B74] font-medium text-[14px] p-6 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-right text-[#586B74] font-medium text-[14px] p-6 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-[#586B74] text-[14px] text-left font-medium p-6 border border-solid border-[#E1E1EA]"></td>
                                <td class=""></td>
                            </tr>

                            <tr>
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-black text-[14px] text-left font-medium p-3 border border-solid border-[#E1E1EA]">Suunnittelu</td>
                                <td class="text-[#00B2A9] italic text-left p-3 border border-solid border-[#E1E1EA]"><?php echo esc_attr( noste_check_empty( get_post_meta( $pid, 'pilar_BU4', true ), 'BU4') ); ?></td>
                                <td class="text-right text-[#586B74] font-medium text-[14px] p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-right text-[#586B74] font-medium text-[14px] p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="min-w-[350px] text-left text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA] italic">E4=Ennuste4+ Ennuste5 + jne.</td>
                                <td class=""></td>
                            </tr>

                            <tr>
                                <td class="text-center min-w-[70px] text-left font-medium p-3 border border-solid border-[#E1E1EA]">
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                    </label>
                                </td>
                                <td class="min-w-[424px] text-left text-[#00B2A9] italic p-3 border border-solid border-[#E1E1EA]">
                                    T9
                                </td>
                                <td class="min-w-[126px] text-[#00B2A9] text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="min-w-[188px] text-left p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="Tarjous 4" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="min-w-[300px] text-right p-3 border border-solid border-[#E1E1EA] tarjous_4_total">1250 €</td>
                                <td class="min-w-[350px] text-[#586B74] text-[14px] text-left p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="Ennuste4" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class=""></td>
                            </tr>

                            <tr>
                                <td class="text-center font-medium p-3 border border-solid border-[#E1E1EA]">
                                    <a href="#!" class="row_collapse" id="collapse_7">
                                        <svg width="24px" height="24px" class="icon1 mx-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#586B74" stroke-width="0.384"></circle> <path d="M15 12H9" stroke="#586B74" stroke-width="0.384" stroke-linecap="round"></path> </g></svg>

                                        <svg width="24px" height="24px" class="icon2 hidden mx-auto" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 7V17M7 12H17M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#586B74" stroke-width="0.336" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </a>
                                </td>
                                <td class="text-left text-[#00B2A9] italic font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="col_collapse_7 bg-[#00B2A9] text-left text-black p-3 text-[17px] border border-solid border-[#E1E1EA]">Laskunumero</td>
                                <td class="col_collapse_7 bg-[#00B2A9] text-right text-black p-3 text-[17px] border border-solid border-[#E1E1EA]">Laskun summa (alv 0%)</td>
                                <td class="text-[#586B74] text-[14px] text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class=""></td>
                            </tr>

                            <tr class="row_collapse_7">
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left text-[#00B2A9] italic font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-right text-[#586B74] text-[14px] p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="1" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="text-right text-[#586B74] text-[14px] p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="500 €" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2 tarjous_4_value">
                                </td>
                                <td class="text-[#586B74] text-[14px] text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class=""></td>
                            </tr>

                            <tr class="row_collapse_7">
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left text-[#00B2A9] italic font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-right text-[#586B74] text-[14px] p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="2" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="text-right text-[#586B74] text-[14px] p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="700 €" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2 tarjous_4_value">
                                </td>
                                <td class="text-[#586B74] text-[14px] text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class=""></td>
                            </tr>

                            <tr class="row_collapse_7">
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left text-[#00B2A9] italic font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-center font-medium p-3 border border-solid border-[#E1E1EA]">
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                    </label>
                                </td>
                                <td class="text-right text-[#586B74] text-[14px] p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="x" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="text-right text-[#586B74] text-[14px] p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="0 €" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2 tarjous_4_value">
                                </td>
                                <td class="text-[#586B74] text-[14px] text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class=""></td>
                            </tr>

                            <tr>
                                <td class="text-center min-w-[70px] text-left font-medium p-3 border border-solid border-[#E1E1EA]">
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                    </label>
                                </td>
                                <td class="min-w-[424px] text-left text-[#283B44] p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="Muut toimittajat, Palokonsultti Oy/LVI-suun Oy" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="min-w-[126px] text-[#00B2A9] italic text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="min-w-[188px] text-left p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="Tarjous 5" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="min-w-[300px] text-right p-3 border border-solid border-[#E1E1EA] tarjous_5_total">100 € </td>
                                <td class="min-w-[350px] text-[#586B74] text-[14px] text-left p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="Ennuste5" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class=""></td>
                            </tr>

                            <tr>
                                <td class="text-center font-medium p-3 border border-solid border-[#E1E1EA]">
                                    <a href="#!" class="row_collapse" id="collapse_8">
                                        <svg width="24px" height="24px" class="icon1 mx-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#586B74" stroke-width="0.384"></circle> <path d="M15 12H9" stroke="#586B74" stroke-width="0.384" stroke-linecap="round"></path> </g></svg>

                                        <svg width="24px" height="24px" class="icon2 hidden mx-auto" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 7V17M7 12H17M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#586B74" stroke-width="0.336" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </a>
                                </td>
                                <td class="text-left text-[#00B2A9] italic font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="col_collapse_8 bg-[#00B2A9] text-left text-black p-3 text-[17px] border border-solid border-[#E1E1EA]">Laskunumero</td>
                                <td class="col_collapse_8 bg-[#00B2A9] text-right text-black p-3 text-[17px] border border-solid border-[#E1E1EA]">Laskun summa (alv 0%)</td>
                                <td class="text-[#586B74] text-[14px] text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class=""></td>
                            </tr>

                            <tr class="row_collapse_8">
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left text-[#00B2A9] italic font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-right text-[#586B74] text-[14px] p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="1" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="text-right text-[#586B74] text-[14px] p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="120 €" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2 tarjous_5_value">
                                </td>
                                <td class="text-[#586B74] text-[14px] text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class=""></td>
                            </tr>

                            <tr class="row_collapse_8">
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left text-[#00B2A9] italic font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-center font-medium p-3 border border-solid border-[#E1E1EA]">
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                    </label>
                                </td>
                                <td class="text-right text-[#586B74] text-[14px] p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="x" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="text-right text-[#586B74] text-[14px] p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="0 €" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2 tarjous_5_value">
                                </td>
                                <td class="text-[#586B74] text-[14px] text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class=""></td>
                            </tr>

                            <tr>
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-black text-[14px] text-left font-medium p-3 border border-solid border-[#E1E1EA]">Muut rakennuttajan tehtävät</td>
                                <td class="text-[#00B2A9] italic text-left p-3 border border-solid border-[#E1E1EA]"><?php echo esc_attr( noste_check_empty( get_post_meta( $pid, 'pilar_BU6', true ), 'BU6') ); ?></td>
                                <td class="text-right text-[#586B74] font-medium text-[14px] p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-right text-[#586B74] font-medium text-[14px] p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="min-w-[350px] text-left text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA] italic">E6=Ennuste6+ jne.</td>
                                <td class=""></td>
                            </tr>

                            <tr>
                                <td class="text-center min-w-[70px] text-left font-medium p-3 border border-solid border-[#E1E1EA]">
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                    </label>
                                </td>
                                <td class="min-w-[424px] text-left text-[#283B44] p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="Muut toimittajat, Projektipankki Oy/Asbestikartoitus Oy" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="min-w-[126px] text-[#00B2A9] italic text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="min-w-[188px] text-left p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="Tarjous 6" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="min-w-[300px] text-right p-3 border border-solid border-[#E1E1EA] tarjous_6_total">100 €</td>
                                <td class="min-w-[350px] text-[#586B74] text-[14px] text-left p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="Ennuste6" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class=""></td>
                            </tr>

                            <tr>
                                <td class="text-center font-medium p-3 border border-solid border-[#E1E1EA]">
                                    <a href="#!" class="row_collapse" id="collapse_1">
                                        <svg width="24px" height="24px" class="icon1 mx-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#586B74" stroke-width="0.384"></circle> <path d="M15 12H9" stroke="#586B74" stroke-width="0.384" stroke-linecap="round"></path> </g></svg>

                                        <svg width="24px" height="24px" class="icon2 hidden mx-auto" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 7V17M7 12H17M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#586B74" stroke-width="0.336" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </a>
                                </td>
                                <td class="text-left text-[#00B2A9] italic font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="col_collapse_1 bg-[#00B2A9] text-left text-black p-3 text-[17px] border border-solid border-[#E1E1EA]">Laskunumero</td>
                                <td class="col_collapse_1 bg-[#00B2A9] text-right text-black p-3 text-[17px] border border-solid border-[#E1E1EA]">Laskun summa (alv 0%)</td>
                                <td class="text-[#586B74] text-[14px] text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class=""></td>
                            </tr>
                            
                            <tr class="row_collapse_1">
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left text-[#00B2A9] italic font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-right text-[#586B74] text-[14px] p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="1" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="text-right text-[#586B74] text-[14px] p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="50 €" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2 tarjous_6_value">
                                </td>
                                <td class="text-[#586B74] text-[14px] text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class=""></td>
                            </tr>

                            <tr class="row_collapse_1">
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left text-[#00B2A9] italic font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-right text-[#586B74] text-[14px] p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="2" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="text-right text-[#586B74] text-[14px] p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="50 €" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2 tarjous_6_value">
                                </td>
                                <td class="text-[#586B74] text-[14px] text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class=""></td>
                            </tr>

                            <tr class="row_collapse_1">
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left text-[#00B2A9] italic font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-center font-medium p-3 border border-solid border-[#E1E1EA]">
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                            <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </span>
                                        <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                    </label>
                                </td>
                                <td class="text-right text-[#586B74] text-[14px] p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="x" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="text-right text-[#586B74] text-[14px] p-3 border border-solid border-[#E1E1EA]">
                                    <input type="text" name="pilar_M4" value="0 €" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2 tarjous_6_value">
                                </td>
                                <td class="text-[#586B74] text-[14px] text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class=""></td>
                            </tr>

                            <tr class="row_collapse_1">
                                <td class="text-left font-medium p-6 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left text-[#00B2A9] italic font-medium p-6 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-center font-medium p-6 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-right text-[#586B74] font-medium text-[14px] p-6 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-right text-[#586B74] font-medium text-[14px] p-6 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-[#586B74] text-[14px] text-left font-medium p-6 border border-solid border-[#E1E1EA]"></td>
                                <td class=""></td>
                            </tr>

                            <tr>
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-[#586B74] text-[14px] text-left font-medium p-3 border border-solid border-[#E1E1EA]">Kaikki yhteensä (alv. 0%)</td>
                                <td class="text-[#00B2A9] italic text-left font-medium p-3 border border-solid border-[#E1E1EA]"><?php echo esc_attr( noste_check_empty( get_post_meta( $pid, 'pilar_BU5', true ), 'BU5' )); ?></td>
                                <td class="text-right text-[#586B74] font-medium text-[14px] p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-right text-[#586B74] font-medium text-[14px] p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="min-w-[350px] text-left text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA] italic">E5-(<span class="text-[#00B2A9] italic"><?php echo esc_attr( noste_check_empty( get_post_meta( $pid, 'pilar_BU5', true ), 'BU5') ); ?></span>-((E2-<span class="text-[#00B2A9] italic"><?php echo esc_attr( noste_check_empty( get_post_meta( $pid, 'pilar_BU2', true ), 'BU2') ); ?></span>)+(E3-<span class="text-[#00B2A9] italic"><?php echo esc_attr( noste_check_empty( get_post_meta( $pid, 'pilar_BU3', true ), 'BU3') ); ?></span>)+(E4-<span class="text-[#00B2A9] italic"><?php echo esc_attr( noste_check_empty( get_post_meta( $pid, 'pilar_BU4', true ), 'BU4') ); ?></span>)+(E6-<span class="text-[#00B2A9] italic"><?php echo esc_attr( noste_check_empty( get_post_meta( $pid, 'pilar_BU6', true ), 'BU6') ); ?></span>))
                                    jos negatiivinen niin E5=0</td>
                                <td class=""></td>
                            </tr>

                            <tr>
                                <td class="text-left font-medium p-6 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left text-[#00B2A9] italic font-medium p-6 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-center font-medium p-6 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-right text-[#586B74] font-medium text-[14px] p-6 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-right text-[#586B74] font-medium text-[14px] p-6 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-[#586B74] text-[14px] text-left font-medium p-6 border border-solid border-[#E1E1EA]"></td>
                                <td class=""></td>
                            </tr>

                            <tr>
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-[#586B74] text-[14px] text-left font-medium p-3 border border-solid border-[#E1E1EA]">Riskivaraus</td>
                                <td class="text-[#00B2A9] italic text-left font-medium p-3 border border-solid border-[#E1E1EA]"><?php echo esc_attr( noste_check_empty( get_post_meta( $pid, 'pilar_BU1', true ), 'BU1') ); ?></td>
                                <td class="text-left text-[#586B74] font-medium text-[14px] p-3 border border-solid border-[#E1E1EA]">
                                    =<span class="text-[#00B2A9] italic"><?php echo esc_attr( noste_check_empty( get_post_meta( $pid, 'pilar_UH1', true ), 'UH1') ); ?></span>+5000€ + Tarjous1 + Tarjous2 + Tarjous3 + Tarjous4 + Tarjous5+ Tarjous6
                                </td>
                                <td class="text-right text-[#586B74] font-medium text-[14px] p-3 border border-solid border-[#E1E1EA]">
                                    '=Summa <br>
                                    toteumasarekkeesta
                                </td>
                                <td class="min-w-[350px] text-left font-medium text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA] italic">'=E2+ E3+E4+E5+E6</td>
                                <td class=""></td>
                            </tr>

                            <tr>
                                <td class="text-left font-medium p-6 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left text-[#00B2A9] italic font-medium p-6 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-center font-medium p-6 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-right text-[#586B74] font-medium text-[14px] p-6 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-right text-[#586B74] font-medium text-[14px] p-6 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-[#586B74] text-[14px] font-medium text-left font-medium p-6 border border-solid border-[#E1E1EA]"></td>
                                <td class=""></td>
                            </tr>

                            <tr>
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-[#586B74] text-[14px] text-left font-medium p-3 border border-solid border-[#E1E1EA]">Verrattuna budjettiin</td>
                                <td class="text-[#00B2A9] italic text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left text-[#586B74] font-medium text-[14px] p-3 border border-solid border-[#E1E1EA]">
                                    ="Kaikki yhteensä, sidottu"/<span class="text-[#00B2A9] italic"><?php echo esc_attr( noste_check_empty( get_post_meta( $pid, 'pilar_BU1', true ), 'BU1') ); ?></span>*100%
                                </td>
                                <td class="text-right text-[#586B74] font-medium text-[14px] p-3 border border-solid border-[#E1E1EA]">
                                    ="Kaikki yhteensä, toteuma"/<span class="text-[#00B2A9] italic"><?php echo esc_attr( noste_check_empty( get_post_meta( $pid, 'pilar_BU1', true ), 'BU1') ); ?></span>*100%
                                </td>
                                <td class="min-w-[350px] text-left font-medium text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA] italic">
                                    ="Kaikki yhteensä, ennuste"/<span class="text-[#00B2A9] italic"><?php echo esc_attr( noste_check_empty( get_post_meta( $pid, 'pilar_BU1', true ), 'BU1') ); ?></span>*100%
                                </td>
                                <td class=""></td>
                            </tr>

                            <tr>
                                <td class="text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-[#586B74] text-[14px] text-left font-medium p-3 border border-solid border-[#E1E1EA]">Ylitys (+)/Alitus (-) (alv 0%)</td>
                                <td class="text-[#00B2A9] italic text-left font-medium p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-left text-[#586B74] font-medium text-[14px] p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="text-right text-[#586B74] font-medium text-[14px] p-3 border border-solid border-[#E1E1EA]"></td>
                                <td class="min-w-[350px] text-left font-medium text-[#586B74] p-3 text-[14px] border border-solid border-[#E1E1EA] italic">
                                    ="Kaikki yhteensä, ennuste"-<span class="text-[#00B2A9] italic"><?php echo esc_attr( noste_check_empty( get_post_meta( $pid, 'pilar_BU1', true ), 'BU1') ); ?></span>
                                </td>
                                <td class=""></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <hr class="border border-solid border-[#E1E1EA] ml-[-20px] mr-[-20px] mt-10">

                <div class="flex items-center justify-between pt-[20px]">
                    <div>
                        <a href="./index.html" class="text-[14px] text-black font-medium border border-solid border-[#E1E1EA] rounded-lg flex items-center pr-3 py-1">
                            <svg width="24px" height="24px" class="mx-auto" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" stroke="#000000" stroke-width="0.00032"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="icomoon-ignore"> </g> <path d="M12.792 15.233l-0.754 0.754 6.035 6.035 0.754-0.754-5.281-5.281 5.256-5.256-0.754-0.754-3.013 3.013z" fill="#7a7a7a"> </path> </g></svg>
                            Takaisin
                        </a>
                    </div>
    
                    <div>
                        <button class="text-[14px] text-white font-medium bg-[#00B2A9] border border-solid border-[#818D930F] rounded-lg flex items-center gap-2 px-3 py-1">
                            Hyväksy
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>