<?php

/* Template Name: Projektiraportti */

if (!is_user_logged_in() || !isset($_GET['pid']) || empty($_GET['pid'])) {
    wp_redirect(site_url());
    exit;
}

$pid = (int) $_GET['pid'];

if (!is_int($pid)) {
    wp_redirect(site_url());
    exit;
}

// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";


$takaisin = get_permalink($_GET['pid']);
$action_url = add_query_arg([
    'pid' => $_GET['pid']
], get_permalink(62));


get_header('noste');
?>
 
    <section class="my-8">
        <div class="container px-4">
            <div class="border border-solid border-[#E1E1EA] rounded-[12px] p-[20px] bg-white h-fit overflow-hidden relative">
                <div class="flex gap-3 lg:gap-0 lg:items-center flex-col lg:flex-row justify-between mb-4">
                    <div>
                        <span class="text-[#818D93] text-[13px] font-medium">Project nimi</span>
                        <p class="text-[#08202C] text-[18px] font-medium mt-2 lg:mt-0">Projektiraportti</p>
                    </div>
    
                    <div>
                        <button class="text-[#08202C] font-medium bg-[#E9E9F0] border border-solid border-[#CCCCD6] rounded-lg flex items-center gap-2 px-3 py-2">
                            <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path fill="#08202C" d="M60,12h-6V2c0-1.105-0.895-2-2-2H12c-1.105,0-2,0.895-2,2v10H4c-2.211,0-4,1.789-4,4v32 c0,2.211,1.789,4,4,4h6v10c0,1.105,0.895,2,2,2h40c1.105,0,2-0.895,2-2V52h6c2.211,0,4-1.789,4-4V16C64,13.789,62.211,12,60,12z M12,3c0-0.553,0.447-1,1-1h38c0.553,0,1,0.447,1,1v9H12V3z M52,61c0,0.553-0.447,1-1,1H13c-0.553,0-1-0.447-1-1V37 c0-0.553,0.447-1,1-1h38c0.553,0,1,0.447,1,1V61z M62,48c0,1.104-0.896,2-2,2h-6V36c0-1.105-0.895-2-2-2H12c-1.105,0-2,0.895-2,2 v14H4c-1.104,0-2-0.896-2-2V16c0-1.104,0.896-2,2-2h56c1.104,0,2,0.896,2,2V48z"></path> <path fill="#08202C" d="M19,44h12c0.553,0,1-0.447,1-1s-0.447-1-1-1H19c-0.553,0-1,0.447-1,1S18.447,44,19,44z"></path> <path fill="#08202C" d="M45,48H19c-0.553,0-1,0.447-1,1s0.447,1,1,1h26c0.553,0,1-0.447,1-1S45.553,48,45,48z"></path> <path fill="#08202C" d="M38,54H19c-0.553,0-1,0.447-1,1s0.447,1,1,1h19c0.553,0,1-0.447,1-1S38.553,54,38,54z"></path> <path fill="#08202C" d="M55,18c-1.657,0-3,1.343-3,3s1.343,3,3,3s3-1.343,3-3S56.657,18,55,18z M55,22c-0.553,0-1-0.447-1-1 s0.447-1,1-1s1,0.447,1,1S55.553,22,55,22z"></path> <path fill="#08202C" d="M45,18c-1.657,0-3,1.343-3,3s1.343,3,3,3s3-1.343,3-3S46.657,18,45,18z M45,22c-0.553,0-1-0.447-1-1 s0.447-1,1-1s1,0.447,1,1S45.553,22,45,22z"></path> </g> </g></svg>
      
                            Luonnos
                        </button>
                    </div>
                </div>

                <hr class="border border-solid border-[#E1E1EA] ml-[-20px] mr-[-20px]">

                <div class="lg:h-[645px] overflow-y-auto no-scrollbar scroll-smooth">
                    <div class="max-w-[1000px] mx-auto mt-20">
                        <div class="mb-[30px]">
                            <span class="font-medium italic text-[#00B2A9] block">
                                K1, K4, M5 m2 
                                <br>
                                Projektiraportti #
                            </span>
                        </div>
    
                        <table class="w-full">
                            <tr>
                                <td colspan="6" class="border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-white bg-[#00B2A9] font-medium">Projektin yhteenveto</td>
                            </tr>

                            <tr>
                                <td class=" border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-[#283B44] font-medium bg-[#D0D3D4] text-[14px]">Projektin nimi, pinta-ala</td>
                                <td class="border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-[#586B74] text-[14px]">
                                    <span class="font-medium italic text-[#00B2A9]">
                                        K1, K4, M5
                                    </span>
                                     m2
                                </td>
                                <td class=" border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-[#283B44] font-medium bg-[#D0D3D4] text-[14px]">pvm</td>
                                <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                    <span class="font-medium italic text-[#00B2A9]">
                                        xx.xx.xxxx
                                    </span>
                                </td>
                                <td class=" border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-[#283B44] font-medium bg-[#D0D3D4] text-[14px]">Raportti #</td>
                                <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                    
                                </td>
                                <td class="py-2 px-3">
                                    <div class="help_wrap relative">
    
                                        <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>
                    
                                        <div class="help_show text-[#586B74] text-[14px] lg:w-[170px] 2xl:w-[260px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:ml-[5px] lg:left-[100%] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-42px] hidden">
                                            <hr class="inline-block absolute right-[100%] top-[31px] w-[7px] border border-solid border-[#E1E1EA]">
                                            <span>
                                                Raportti nro
                                            </span>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class=" border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-[#283B44] font-medium bg-[#D0D3D4] text-[14px]">Projektipäällikkö</td>
                                <td class="border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-[#586B74] text-[14px]">
                                    <span class="font-medium italic text-[#00B2A9]">
                                        P1
                                    </span>
                                </td>
                                <td class=" border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-[#283B44] font-medium bg-[#D0D3D4] text-[14px]">Projektijoht. asiantun.</td>
                                <td class=" border border-solid border-[#E1E1EA] py-2 px-3">
                                    <span class="font-medium italic text-[#00B2A9]">
                                        P4
                                    </span>
                                </td>
                                <td class=" border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-[#283B44] font-medium bg-[#D0D3D4] text-[14px]">Tilaaja</td>
                                <td class="w-[20%] border border-solid border-[#E1E1EA] py-2 px-3">
                                    <span class="font-medium italic text-[#00B2A9]">
                                        T2, T3
                                    </span>
                                </td>
                                <td class="py-2 px-3">
                                    
                                </td>
                            </tr>
                        </table>

                        <table class="w-full mt-[30px]">
                            <tr>
                                <td colspan="3" class="border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-white bg-[#00B2A9] font-medium">Projektin yleiskatsaus</td>
                            </tr>

                            <tr>
                                <td class="text-[#00B2A9] font-medium border border-solid border-[#E1E1EA] py-2 px-3">
                                    *Projektitilanne
                                </td>
                                <td class="w-[12%] border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-[#283B44] font-medium bg-[#D0D3D4] text-[14px]">Status</td>
                                <td class=" border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-[#283B44] font-medium bg-[#D0D3D4] text-[14px]">Kommentit</td>
                                <td class="py-2 px-3 w-0">
                                    
                                </td>
                            </tr>

                            <tr>
                                <td class="w-[20%] border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium bg-[#D0D3D4] text-[14px]">
                                    Projektin yleistilanne
                                </td>
                                <td class="py-2 px-3">
                                    <div class="dropdown_click shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2 cursor-pointer relative">
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
                                                <span class="text-black text-[14px]">Red</span>
                                            </label>
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Amber</span>
                                            </label>
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Green</span>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class=" border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium w-[100%] text-[14px]">
                                    <input type="text" name="pilar_M4" value="" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="py-2 px-3 w-0">
                                    
                                </td>
                            </tr>

                            <tr>
                                <td class="w-[20%] border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium bg-[#D0D3D4] text-[14px]">
                                    Aikataulu
                                </td>
                                <td class="py-2 px-3">
                                    <div class="dropdown_click shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2 cursor-pointer relative">
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
                                                <span class="text-black text-[14px]">Red</span>
                                            </label>
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Amber</span>
                                            </label>
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Green</span>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class=" border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium w-[100%] text-[14px]">
                                    <input type="text" name="pilar_M4" value="" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="py-2 px-3 w-0">
                                    <div class="help_wrap relative">
    
                                        <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>
                    
                                        <div class="help_show text-[#586B74] text-[14px] lg:w-[170px] 2xl:w-[260px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:ml-[5px] lg:left-[100%] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-42px] hidden">
                                            <hr class="inline-block absolute right-[100%] top-[31px] w-[7px] border border-solid border-[#E1E1EA]">
                                            <span>
                                                Valitse Status-alasvetovalikosta osioon sinun mielestäsi parhaiten kuvaava status (RED, AMBER, GREEN). Kuvaa kommenttikentässä lyhyesti status sanallisesti.
                                            </span>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="w-[20%] border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium bg-[#D0D3D4] text-[14px]">
                                    Budjetti
                                </td>
                                <td class="py-2 px-3">
                                    <div class="dropdown_click shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2 cursor-pointer relative">
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
                                                <span class="text-black text-[14px]">Red</span>
                                            </label>
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Amber</span>
                                            </label>
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Green</span>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class=" border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium w-[100%] text-[14px]">
                                    <input type="text" name="pilar_M4" value="" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="py-2 px-3 w-0">
                                    <div class="help_wrap relative">
    
                                        <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>
                    
                                        <div class="help_show text-[#586B74] text-[14px] lg:w-[170px] 2xl:w-[260px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:ml-[5px] lg:left-[100%] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-42px] hidden">
                                            <hr class="inline-block absolute right-[100%] top-[31px] w-[7px] border border-solid border-[#E1E1EA]">
                                            <span>
                                                Valitse Status-alasvetovalikosta osioon sinun mielestäsi parhaiten kuvaava status (RED, AMBER, GREEN). Kuvaa kommenttikentässä lyhyesti status sanallisesti.
                                            </span>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="w-[20%] border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium bg-[#D0D3D4] text-[14px]">
                                    Haasteet ja riskit
                                </td>
                                <td class="py-2 px-3">
                                    <div class="dropdown_click shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2 cursor-pointer relative">
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
                                                <span class="text-black text-[14px]">Red</span>
                                            </label>
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Amber</span>
                                            </label>
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Green</span>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class=" border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium w-[100%] text-[14px]">
                                    <input type="text" name="pilar_M4" value="" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="py-2 px-3 w-0">
                                    <div class="help_wrap relative">
    
                                        <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>
                    
                                        <div class="help_show text-[#586B74] text-[14px] lg:w-[170px] 2xl:w-[260px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:ml-[5px] lg:left-[100%] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-42px] hidden">
                                            <hr class="inline-block absolute right-[100%] top-[31px] w-[7px] border border-solid border-[#E1E1EA]">
                                            <span>
                                                Valitse Status-alasvetovalikosta osioon sinun mielestäsi parhaiten kuvaava status (RED, AMBER, GREEN). Kuvaa kommenttikentässä lyhyesti status sanallisesti.
                                            </span>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="w-[20%] border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium bg-[#D0D3D4] text-[14px]">
                                    Dokumentaatio
                                </td>
                                <td class="py-2 px-3">
                                    <div class="dropdown_click shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2 cursor-pointer relative">
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
                                                <span class="text-black text-[14px]">Red</span>
                                            </label>
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Amber</span>
                                            </label>
                                            <label class="flex items-center gap-3 my-4 cursor-pointer block">                       
                                                <span class="text-black text-[14px]">Green</span>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class=" border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium w-[100%] text-[14px]">
                                    <input type="text" name="pilar_M4" value="" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                <td class="py-2 px-3 w-0">
                                    <div class="help_wrap relative">
    
                                        <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>
                    
                                        <div class="help_show text-[#586B74] text-[14px] lg:w-[170px] 2xl:w-[260px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:ml-[5px] lg:left-[100%] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-42px] hidden">
                                            <hr class="inline-block absolute right-[100%] top-[31px] w-[7px] border border-solid border-[#E1E1EA]">
                                            <span>
                                                Valitse Status-alasvetovalikosta osioon sinun mielestäsi parhaiten kuvaava status (RED, AMBER, GREEN). Kuvaa kommenttikentässä lyhyesti status sanallisesti.
                                            </span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
    
                        <table class="w-full mt-[30px]">
                            <tr>
                                <td colspan="3" class="border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-white bg-[#00B2A9] font-medium">Aikataulu ja valmiusaste</td>
                            </tr>

                            <tr>
                                <td class="w-[20%] border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium bg-[#D0D3D4] text-[14px]">
                                    Rakentamisen alku (pvm)
                                </td>
                                
                                <td class=" border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium text-[14px]">
                                    <input type="text" name="pilar_M4" value="" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                
                                <td rowspan="5" class="w-[50%] border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium text-[14px]">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sample-graph.png" alt="graph">
                                </td>

                                <td class="py-2 px-3 w-0">
                                    <div class="help_wrap relative">
    
                                        <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>
                    
                                        <div class="help_show text-[#586B74] text-[14px] lg:w-[170px] 2xl:w-[260px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:ml-[5px] lg:left-[100%] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-42px] hidden">
                                            <hr class="inline-block absolute right-[100%] top-[31px] w-[7px] border border-solid border-[#E1E1EA]">
                                            <span>
                                                Valmiusasteen voit arvioida projektin aikataulun tai laskutuksen mukaan. Tai yhdistelmä näistä.
                                            </span>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="w-[20%] border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium bg-[#D0D3D4] text-[14px]">
                                    Rakentamisen alku (pvm)
                                </td>
                                
                                <td class=" border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium text-[14px]">
                                    <input type="text" name="pilar_M4" value="" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2" placeholder="VA1">
                                </td>
                                
                                <td class="py-2 px-3 w-0">
                                    
                                </td>
                            </tr>

                            <tr>
                                <td class="w-[20%] border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium bg-[#D0D3D4] text-[14px]">
                                    Rakentamisen alku (pvm)
                                </td>
                                
                                <td class=" border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium text-[14px]">
                                    <input type="text" name="pilar_M4" value="" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                                </td>
                                
                                <td class="py-2 px-3 w-0">
                                    
                                </td>
                            </tr>

                            <tr>
                                <td class="w-[20%] border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium bg-[#D0D3D4] text-[14px]">
                                    Rakentamisen alku (pvm)
                                </td>
                                
                                <td class="w-[26%] border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium bg-[#D0D3D4] text-[14px]">
                                    #ARVO!
                                </td>
                                
                                <td class="py-2 px-3 w-0">
                                    
                                </td>
                            </tr>

                            <tr>
                                <td class="w-[20%] border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium bg-[#D0D3D4] text-[14px]">
                                    Rakentamisen alku (pvm)
                                </td>
                                
                                <td class=" border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium text-[14px]">
                                    <input type="text" name="pilar_M4" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="=TOT2 kustannusseurantapohjasta /TOT3 kustannusseurantapohjasta (%)">
                                </td>
                                
                                <td class="py-2 px-3 w-0">
                                    
                                </td>
                            </tr>
                        </table>

                        <table class="w-full mt-[30px]">
                            <tr>
                                <td colspan="4" class="border border-solid border-[#E1E1EA] py-2 px-3 text-white bg-[#00B2A9] font-medium">Budjetti</td>
                            </tr>

                            <tr>
                                <td class=" border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium bg-[#D0D3D4] text-[14px]">Budjetti YHT.</td>
                                <td class="text-right w-[20%] border border-solid border-[#E1E1EA] py-2 px-3 text-[#586B74] text-[14px]">
                                    <span class="font-medium italic text-[#00B2A9]">
                                        BU1
                                    </span>
                                </td>
                                <td class=" border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium bg-[#D0D3D4] text-[14px]">Kommentit</td>
                                <td rowspan="3" class="w-[30%] border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium text-[14px]">
                                    <textarea class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2 min-h-[150px]"></textarea>
                                </td>
                                <td class="py-2 px-3 w-0">
                                    <div class="help_wrap relative">
    
                                        <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>
                    
                                        <div class="help_show text-[#586B74] text-[14px] lg:w-[170px] 2xl:w-[260px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:ml-[5px] lg:left-[100%] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-42px] hidden">
                                            <hr class="inline-block absolute right-[100%] top-[31px] w-[7px] border border-solid border-[#E1E1EA]">
                                            <span>
                                                Kommenteissa hyvä pohtia riittääkö budjetti/onko mahdollisia ylityksiä
                                                vielä tulossa.
                                            </span>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class=" border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium bg-[#D0D3D4] text-[14px]">Ennuste</td>
                                <td class="text-right w-[20%] border border-solid border-[#E1E1EA] py-2 px-3 text-[#586B74] text-[14px]">
                                    <span class="font-medium italic text-[#00B2A9]">
                                        TOT3 kustannusseurantapohjasta
                                    </span>
                                </td>
                                <td class=" border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium bg-[#D0D3D4] text-[14px]">
                                    <span class="font-medium italic text-[#00B2A9]">
                                        =TOT3 kustannusseurantapohjasta /BUT (%)
                                    </span>
                                </td>
                                <td class="py-2 px-3 w-0">
                                    
                                </td>
                            </tr>

                            <tr>
                                <td class=" border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium bg-[#D0D3D4] text-[14px]">Budjetti jäljellä</td>
                                <td class="text-right border border-solid border-[#E1E1EA] py-2 px-3 text-[#586B74] text-[14px]">
                                    <span class="font-medium italic text-[#00B2A9]">
                                        =BU1-TOT3 kustannusseurantapohjasta
                                    </span>
                                </td>
                                <td class=" border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium text-[14px]">
                                    
                                </td>
                                <td class="py-2 px-3 w-0">
                                    
                                </td>
                            </tr>

                            <tr>
                                <td colspan="4" class="border border-solid border-[#E1E1EA] py-2 px-3 text-white font-medium"></td>
                            </tr>

                            <tr>
                                <td class=" border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium bg-[#D0D3D4] text-[14px]">Nosteen laskutusarvio</td>
                                <td class="text-right w-[20%] border border-solid border-[#E1E1EA] py-2 px-3 text-[#586B74] text-[14px]">
                                    <span class="font-medium italic text-[#00B2A9]">
                                        TOT1 kustannusseurantapohjasta
                                    </span>
                                </td>
                                <td class=" border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium bg-[#D0D3D4] text-[14px]">Kommentit</td>
                                <td rowspan="3" class="w-[30%] border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium text-[14px]">
                                    <textarea class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2 min-h-[150px]"></textarea>
                                </td>
                                <td class="py-2 px-3 w-0">
                                    <div class="help_wrap relative">
    
                                        <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>
                    
                                        <div class="help_show text-[#586B74] text-[14px] lg:w-[170px] 2xl:w-[260px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:ml-[5px] lg:left-[100%] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-42px] hidden">
                                            <hr class="inline-block absolute right-[100%] top-[31px] w-[7px] border border-solid border-[#E1E1EA]">
                                            <span>
                                                Pohdi riittääkö jos tuntiveloitteinen. Jos ei riitä niin käy läpi Tilaajan kanssa ja kirjaa, että käyty läpi.
                                            </span>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class=" border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium bg-[#D0D3D4] text-[14px]">Nosteen laskutus tot.</td>
                                <td class="text-right w-[20%] border border-solid border-[#E1E1EA] py-2 px-3 text-[#586B74] text-[14px]">
                                    <span class="font-medium italic text-[#00B2A9]">
                                        TOT4 kustannusseurantapohjasta
                                    </span>
                                </td>
                                <td class="w-[25%] border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium bg-[#D0D3D4] text-[14px]">
                                    <span class="font-medium italic text-[#00B2A9]">
                                        =TOT4 kustannusseurantapohjasta/TOT1 kustannusseurantapohjasta (%)
                                    </span>
                                </td>
                                <td class="py-2 px-3 w-0">
                                    
                                </td>
                            </tr>

                            <tr>
                                <td class=" border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium bg-[#D0D3D4] text-[14px]">Laskutus jäljellä</td>
                                <td class="text-right border border-solid border-[#E1E1EA] py-2 px-3 text-[#586B74] text-[14px]">
                                    <span class="font-medium italic text-[#00B2A9]">
                                        =TOT1-TOT4
                                    </span>
                                </td>
                                <td class=" border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium text-[14px]">
                                    
                                </td>
                                <td class="py-2 px-3 w-0">
                                    
                                </td>
                            </tr>
                        </table>

                        <table class="w-full mt-[30px]">
                            <tbody>
                                <tr>
                                    <td colspan="3" class="border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-white bg-[#00B2A9] font-medium">Haasteet, riskit ja reklamaatiot</td>
                                </tr>
                        
                                <tr>
                                    <td class="w-[33%] border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium bg-[#D0D3D4] text-[14px]">Aihe</td>
                                    <td class="w-[33%] border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium bg-[#D0D3D4] text-[14px]">Toimintasuunnitelma</td>
                                    <td class="w-[33%] border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium bg-[#D0D3D4] text-[14px]">Tilanne</td>
                                    <td class="py-2 px-3 w-0"></td>
                                </tr>
                        
                                <tr>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium text-[14px]">
                                        <input type="text" name="pilar_M4" value="" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2" />
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium text-[14px]">
                                        <input type="text" name="pilar_M4" value="" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2" />
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium text-[14px]">
                                        <input type="text" name="pilar_M4" value="" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2" />
                                    </td>
                                    <td class="py-2 px-3 w-0">
                                        <div class="help_wrap relative">
    
                                            <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>
                        
                                            <div class="help_show text-[#586B74] text-[14px] lg:w-[170px] 2xl:w-[260px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:ml-[5px] lg:left-[100%] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-42px] hidden">
                                                <hr class="inline-block absolute right-[100%] top-[31px] w-[7px] border border-solid border-[#E1E1EA]">
                                                <span>
                                                    Näitä voi olla esimerkiksi
                                                    vuokralaisen suunnitelmapuutteet/ lisätyötoiveet, muut vuokralaiset
                                                    (toiminta käytössä olevassa
                                                    kiinteistössä)
                                                    Kiinteistön rakenneosien puutteet
                                                    (lasiseinien ääneneristävyys)
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium text-[14px]">
                                        <input type="text" name="pilar_M4" value="" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2" />
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium text-[14px]">
                                        <input type="text" name="pilar_M4" value="" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2" />
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium text-[14px]">
                                        <input type="text" name="pilar_M4" value="" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2" />
                                    </td>
                                    <td class="py-2 px-3 w-0">
                                        
                                    </td>
                                </tr>
                        
                                <tr>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium text-[14px]">
                                        <input type="text" name="pilar_M4" value="" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2" />
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium text-[14px]">
                                        <input type="text" name="pilar_M4" value="" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2" />
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium text-[14px]">
                                        <input type="text" name="pilar_M4" value="" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2" />
                                    </td>
                                    <td class="py-2 px-3 w-0">
                                        
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <table class="w-full mt-[30px]">
                            <tbody>
                                <tr>
                                    <td colspan="3" class="border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-white bg-[#00B2A9] font-medium">Projektin dokumentaatio</td>
                                </tr>
                        
                                <tr>
                                    <td class="w-[12%] border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-[#283B44] font-medium bg-[#D0D3D4] text-[14px]">Dokumentit asemalla</td>
                                    <td class="w-[12%] border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-[#283B44] font-medium bg-[#D0D3D4] text-[14px]">Status</td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-[#283B44] font-medium bg-[#D0D3D4] text-[14px]">Kommentit</td>
                                    <td class="py-2 px-3 w-0"></td>
                                </tr>
                        
                                <tr>
                                    <td class="w-[20%] border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium text-[14px]">
                                        Kustannusarviot
                                    </td>
                                    <td class="py-2 px-3">
                                        <div class="dropdown_click shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2 cursor-pointer relative">
                                            <span class="flex items-center justify-between">
                                                <span></span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 300 300">
                                                    <g id="expand_input_field" transform="translate(-622 -557)">
                                                        <rect id="Rectangle_1128" data-name="Rectangle 1128" width="20px" height="20px" transform="translate(622 557)" fill="#fff" opacity="0"></rect>
                                                        <path
                                                            id="Path_117"
                                                            data-name="Path 117"
                                                            d="M46.2,5.365a14.91,14.91,0,0,1,22.908,0l42.716,51.259A14.91,14.91,0,0,1,100.37,81.079H14.938A14.91,14.91,0,0,1,3.484,56.624Z"
                                                            transform="translate(828.752 742.447) rotate(180)"
                                                            fill="#818d93"
                                                        ></path>
                                                    </g>
                                                </svg>
                                            </span>
                        
                                            <div class="hidden dropdown_wrap overflow-y-auto absolute w-full border border-solid border-[#E1E1EA] rounded-lg p-3 text-offwhite mt-3 left-0 top-full z-50 bg-white" style="display: none;">
                                                <label class="flex items-center gap-3 my-4 cursor-pointer block">
                                                    <span class="text-black text-[14px]">Red</span>
                                                </label>
                                                <label class="flex items-center gap-3 my-4 cursor-pointer block">
                                                    <span class="text-black text-[14px]">Amber</span>
                                                </label>
                                                <label class="flex items-center gap-3 my-4 cursor-pointer block">
                                                    <span class="text-black text-[14px]">Green</span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium w-[100%] text-[14px]">
                                        <input type="text" name="pilar_M4" value="" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2" />
                                    </td>
                                    <td class="py-2 px-3 w-0"></td>
                                </tr>
                        
                                <tr>
                                    <td class="w-[20%] border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium text-[14px]">
                                        Tilaajan päätökset
                                    </td>
                                    <td class="py-2 px-3">
                                        <div class="dropdown_click shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2 cursor-pointer relative">
                                            <span class="flex items-center justify-between">
                                                <span></span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 300 300">
                                                    <g id="expand_input_field" transform="translate(-622 -557)">
                                                        <rect id="Rectangle_1128" data-name="Rectangle 1128" width="20px" height="20px" transform="translate(622 557)" fill="#fff" opacity="0"></rect>
                                                        <path
                                                            id="Path_117"
                                                            data-name="Path 117"
                                                            d="M46.2,5.365a14.91,14.91,0,0,1,22.908,0l42.716,51.259A14.91,14.91,0,0,1,100.37,81.079H14.938A14.91,14.91,0,0,1,3.484,56.624Z"
                                                            transform="translate(828.752 742.447) rotate(180)"
                                                            fill="#818d93"
                                                        ></path>
                                                    </g>
                                                </svg>
                                            </span>
                        
                                            <div class="hidden dropdown_wrap overflow-y-auto absolute w-full border border-solid border-[#E1E1EA] rounded-lg p-3 text-offwhite mt-3 left-0 top-full z-50 bg-white" style="display: none;">
                                                <label class="flex items-center gap-3 my-4 cursor-pointer block">
                                                    <span class="text-black text-[14px]">Red</span>
                                                </label>
                                                <label class="flex items-center gap-3 my-4 cursor-pointer block">
                                                    <span class="text-black text-[14px]">Amber</span>
                                                </label>
                                                <label class="flex items-center gap-3 my-4 cursor-pointer block">
                                                    <span class="text-black text-[14px]">Green</span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium w-[100%] text-[14px]">
                                        <input type="text" name="pilar_M4" value="" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2" />
                                    </td>
                                    <td class="py-2 px-3 w-0"></td>
                                </tr>
                        
                                <tr>
                                    <td class="w-[20%] border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium text-[14px]">
                                        Vuokralaisen päätökset
                                    </td>
                                    <td class="py-2 px-3">
                                        <div class="dropdown_click shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2 cursor-pointer relative">
                                            <span class="flex items-center justify-between">
                                                <span></span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 300 300">
                                                    <g id="expand_input_field" transform="translate(-622 -557)">
                                                        <rect id="Rectangle_1128" data-name="Rectangle 1128" width="20px" height="20px" transform="translate(622 557)" fill="#fff" opacity="0"></rect>
                                                        <path
                                                            id="Path_117"
                                                            data-name="Path 117"
                                                            d="M46.2,5.365a14.91,14.91,0,0,1,22.908,0l42.716,51.259A14.91,14.91,0,0,1,100.37,81.079H14.938A14.91,14.91,0,0,1,3.484,56.624Z"
                                                            transform="translate(828.752 742.447) rotate(180)"
                                                            fill="#818d93"
                                                        ></path>
                                                    </g>
                                                </svg>
                                            </span>
                        
                                            <div class="hidden dropdown_wrap overflow-y-auto absolute w-full border border-solid border-[#E1E1EA] rounded-lg p-3 text-offwhite mt-3 left-0 top-full z-50 bg-white" style="display: none;">
                                                <label class="flex items-center gap-3 my-4 cursor-pointer block">
                                                    <span class="text-black text-[14px]">Red</span>
                                                </label>
                                                <label class="flex items-center gap-3 my-4 cursor-pointer block">
                                                    <span class="text-black text-[14px]">Amber</span>
                                                </label>
                                                <label class="flex items-center gap-3 my-4 cursor-pointer block">
                                                    <span class="text-black text-[14px]">Green</span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium w-[100%] text-[14px]">
                                        <input type="text" name="pilar_M4" value="" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2" />
                                    </td>
                                    <td class="py-2 px-3 w-0"></td>
                                </tr>
                        
                                <tr>
                                    <td class="w-[20%] border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium text-[14px]">
                                        Vuokrasopimuksen liitteet
                                    </td>
                                    <td class="py-2 px-3">
                                        <div class="dropdown_click shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2 cursor-pointer relative">
                                            <span class="flex items-center justify-between">
                                                <span></span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 300 300">
                                                    <g id="expand_input_field" transform="translate(-622 -557)">
                                                        <rect id="Rectangle_1128" data-name="Rectangle 1128" width="20px" height="20px" transform="translate(622 557)" fill="#fff" opacity="0"></rect>
                                                        <path
                                                            id="Path_117"
                                                            data-name="Path 117"
                                                            d="M46.2,5.365a14.91,14.91,0,0,1,22.908,0l42.716,51.259A14.91,14.91,0,0,1,100.37,81.079H14.938A14.91,14.91,0,0,1,3.484,56.624Z"
                                                            transform="translate(828.752 742.447) rotate(180)"
                                                            fill="#818d93"
                                                        ></path>
                                                    </g>
                                                </svg>
                                            </span>
                        
                                            <div class="hidden dropdown_wrap overflow-y-auto absolute w-full border border-solid border-[#E1E1EA] rounded-lg p-3 text-offwhite mt-3 left-0 top-full z-50 bg-white" style="display: none;">
                                                <label class="flex items-center gap-3 my-4 cursor-pointer block">
                                                    <span class="text-black text-[14px]">Red</span>
                                                </label>
                                                <label class="flex items-center gap-3 my-4 cursor-pointer block">
                                                    <span class="text-black text-[14px]">Amber</span>
                                                </label>
                                                <label class="flex items-center gap-3 my-4 cursor-pointer block">
                                                    <span class="text-black text-[14px]">Green</span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium w-[100%] text-[14px]">
                                        <input type="text" name="pilar_M4" value="" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2" />
                                    </td>
                                    <td class="py-2 px-3 w-0"></td>
                                </tr>
                        
                                <tr>
                                    <td class="w-[20%] border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium text-[14px]">
                                        Vuokralaispalaverimuistiot
                                    </td>
                                    <td class="py-2 px-3">
                                        <div class="dropdown_click shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2 cursor-pointer relative">
                                            <span class="flex items-center justify-between">
                                                <span></span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 300 300">
                                                    <g id="expand_input_field" transform="translate(-622 -557)">
                                                        <rect id="Rectangle_1128" data-name="Rectangle 1128" width="20px" height="20px" transform="translate(622 557)" fill="#fff" opacity="0"></rect>
                                                        <path
                                                            id="Path_117"
                                                            data-name="Path 117"
                                                            d="M46.2,5.365a14.91,14.91,0,0,1,22.908,0l42.716,51.259A14.91,14.91,0,0,1,100.37,81.079H14.938A14.91,14.91,0,0,1,3.484,56.624Z"
                                                            transform="translate(828.752 742.447) rotate(180)"
                                                            fill="#818d93"
                                                        ></path>
                                                    </g>
                                                </svg>
                                            </span>
                        
                                            <div class="hidden dropdown_wrap overflow-y-auto absolute w-full border border-solid border-[#E1E1EA] rounded-lg p-3 text-offwhite mt-3 left-0 top-full z-50 bg-white" style="display: none;">
                                                <label class="flex items-center gap-3 my-4 cursor-pointer block">
                                                    <span class="text-black text-[14px]">Red</span>
                                                </label>
                                                <label class="flex items-center gap-3 my-4 cursor-pointer block">
                                                    <span class="text-black text-[14px]">Amber</span>
                                                </label>
                                                <label class="flex items-center gap-3 my-4 cursor-pointer block">
                                                    <span class="text-black text-[14px]">Green</span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium w-[100%] text-[14px]">
                                        <input type="text" name="pilar_M4" value="" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2" />
                                    </td>
                                    <td class="py-2 px-3 w-0"></td>
                                </tr>
                        
                                <tr>
                                    <td class="w-[20%] border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium text-[14px]">
                                        Suunnitelmat
                                    </td>
                                    <td class="py-2 px-3">
                                        <div class="dropdown_click shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2 cursor-pointer relative">
                                            <span class="flex items-center justify-between">
                                                <span></span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 300 300">
                                                    <g id="expand_input_field" transform="translate(-622 -557)">
                                                        <rect id="Rectangle_1128" data-name="Rectangle 1128" width="20px" height="20px" transform="translate(622 557)" fill="#fff" opacity="0"></rect>
                                                        <path
                                                            id="Path_117"
                                                            data-name="Path 117"
                                                            d="M46.2,5.365a14.91,14.91,0,0,1,22.908,0l42.716,51.259A14.91,14.91,0,0,1,100.37,81.079H14.938A14.91,14.91,0,0,1,3.484,56.624Z"
                                                            transform="translate(828.752 742.447) rotate(180)"
                                                            fill="#818d93"
                                                        ></path>
                                                    </g>
                                                </svg>
                                            </span>
                        
                                            <div class="hidden dropdown_wrap overflow-y-auto absolute w-full border border-solid border-[#E1E1EA] rounded-lg p-3 text-offwhite mt-3 left-0 top-full z-50 bg-white" style="display: none;">
                                                <label class="flex items-center gap-3 my-4 cursor-pointer block">
                                                    <span class="text-black text-[14px]">Red</span>
                                                </label>
                                                <label class="flex items-center gap-3 my-4 cursor-pointer block">
                                                    <span class="text-black text-[14px]">Amber</span>
                                                </label>
                                                <label class="flex items-center gap-3 my-4 cursor-pointer block">
                                                    <span class="text-black text-[14px]">Green</span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium w-[100%] text-[14px]">
                                        <input type="text" name="pilar_M4" value="" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2" />
                                    </td>
                                    <td class="py-2 px-3 w-0"></td>
                                </tr>
                        
                                <tr>
                                    <td class="w-[20%] border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium text-[14px]">
                                        Urakkasopimus
                                    </td>
                                    <td class="py-2 px-3">
                                        <div class="dropdown_click shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2 cursor-pointer relative">
                                            <span class="flex items-center justify-between">
                                                <span></span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 300 300">
                                                    <g id="expand_input_field" transform="translate(-622 -557)">
                                                        <rect id="Rectangle_1128" data-name="Rectangle 1128" width="20px" height="20px" transform="translate(622 557)" fill="#fff" opacity="0"></rect>
                                                        <path
                                                            id="Path_117"
                                                            data-name="Path 117"
                                                            d="M46.2,5.365a14.91,14.91,0,0,1,22.908,0l42.716,51.259A14.91,14.91,0,0,1,100.37,81.079H14.938A14.91,14.91,0,0,1,3.484,56.624Z"
                                                            transform="translate(828.752 742.447) rotate(180)"
                                                            fill="#818d93"
                                                        ></path>
                                                    </g>
                                                </svg>
                                            </span>
                        
                                            <div class="hidden dropdown_wrap overflow-y-auto absolute w-full border border-solid border-[#E1E1EA] rounded-lg p-3 text-offwhite mt-3 left-0 top-full z-50 bg-white" style="display: none;">
                                                <label class="flex items-center gap-3 my-4 cursor-pointer block">
                                                    <span class="text-black text-[14px]">Red</span>
                                                </label>
                                                <label class="flex items-center gap-3 my-4 cursor-pointer block">
                                                    <span class="text-black text-[14px]">Amber</span>
                                                </label>
                                                <label class="flex items-center gap-3 my-4 cursor-pointer block">
                                                    <span class="text-black text-[14px]">Green</span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium w-[100%] text-[14px]">
                                        <input type="text" name="pilar_M4" value="" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2" />
                                    </td>
                                    <td class="py-2 px-3 w-0"></td>
                                </tr>
                        
                                <tr>
                                    <td class="w-[20%] border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium text-[14px]">
                                        Työmaakokouspöytäkirjat
                                    </td>
                                    <td class="py-2 px-3">
                                        <div class="dropdown_click shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2 cursor-pointer relative">
                                            <span class="flex items-center justify-between">
                                                <span></span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 300 300">
                                                    <g id="expand_input_field" transform="translate(-622 -557)">
                                                        <rect id="Rectangle_1128" data-name="Rectangle 1128" width="20px" height="20px" transform="translate(622 557)" fill="#fff" opacity="0"></rect>
                                                        <path
                                                            id="Path_117"
                                                            data-name="Path 117"
                                                            d="M46.2,5.365a14.91,14.91,0,0,1,22.908,0l42.716,51.259A14.91,14.91,0,0,1,100.37,81.079H14.938A14.91,14.91,0,0,1,3.484,56.624Z"
                                                            transform="translate(828.752 742.447) rotate(180)"
                                                            fill="#818d93"
                                                        ></path>
                                                    </g>
                                                </svg>
                                            </span>
                        
                                            <div class="hidden dropdown_wrap overflow-y-auto absolute w-full border border-solid border-[#E1E1EA] rounded-lg p-3 text-offwhite mt-3 left-0 top-full z-50 bg-white" style="display: none;">
                                                <label class="flex items-center gap-3 my-4 cursor-pointer block">
                                                    <span class="text-black text-[14px]">Red</span>
                                                </label>
                                                <label class="flex items-center gap-3 my-4 cursor-pointer block">
                                                    <span class="text-black text-[14px]">Amber</span>
                                                </label>
                                                <label class="flex items-center gap-3 my-4 cursor-pointer block">
                                                    <span class="text-black text-[14px]">Green</span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium w-[100%] text-[14px]">
                                        <input type="text" name="pilar_M4" value="" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2" />
                                    </td>
                                    <td class="py-2 px-3 w-0"></td>
                                </tr>
                        
                                <tr>
                                    <td class="w-[20%] border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium text-[14px]">
                                        Vastaanottokokouspöytäkirja
                                    </td>
                                    <td class="py-2 px-3">
                                        <div class="dropdown_click shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2 cursor-pointer relative">
                                            <span class="flex items-center justify-between">
                                                <span></span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 300 300">
                                                    <g id="expand_input_field" transform="translate(-622 -557)">
                                                        <rect id="Rectangle_1128" data-name="Rectangle 1128" width="20px" height="20px" transform="translate(622 557)" fill="#fff" opacity="0"></rect>
                                                        <path
                                                            id="Path_117"
                                                            data-name="Path 117"
                                                            d="M46.2,5.365a14.91,14.91,0,0,1,22.908,0l42.716,51.259A14.91,14.91,0,0,1,100.37,81.079H14.938A14.91,14.91,0,0,1,3.484,56.624Z"
                                                            transform="translate(828.752 742.447) rotate(180)"
                                                            fill="#818d93"
                                                        ></path>
                                                    </g>
                                                </svg>
                                            </span>
                        
                                            <div class="hidden dropdown_wrap overflow-y-auto absolute w-full border border-solid border-[#E1E1EA] rounded-lg p-3 text-offwhite mt-3 left-0 top-full z-50 bg-white" style="display: none;">
                                                <label class="flex items-center gap-3 my-4 cursor-pointer block">
                                                    <span class="text-black text-[14px]">Red</span>
                                                </label>
                                                <label class="flex items-center gap-3 my-4 cursor-pointer block">
                                                    <span class="text-black text-[14px]">Amber</span>
                                                </label>
                                                <label class="flex items-center gap-3 my-4 cursor-pointer block">
                                                    <span class="text-black text-[14px]">Green</span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium w-[100%] text-[14px]">
                                        <input type="text" name="pilar_M4" value="" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2" />
                                    </td>
                                    <td class="py-2 px-3 w-0"></td>
                                </tr>
                        
                                <tr>
                                    <td class="w-[20%] border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium text-[14px]">
                                        Hallinnanluovutuspöytäkirja
                                    </td>
                                    <td class="py-2 px-3">
                                        <div class="dropdown_click shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2 cursor-pointer relative">
                                            <span class="flex items-center justify-between">
                                                <span></span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 300 300">
                                                    <g id="expand_input_field" transform="translate(-622 -557)">
                                                        <rect id="Rectangle_1128" data-name="Rectangle 1128" width="20px" height="20px" transform="translate(622 557)" fill="#fff" opacity="0"></rect>
                                                        <path
                                                            id="Path_117"
                                                            data-name="Path 117"
                                                            d="M46.2,5.365a14.91,14.91,0,0,1,22.908,0l42.716,51.259A14.91,14.91,0,0,1,100.37,81.079H14.938A14.91,14.91,0,0,1,3.484,56.624Z"
                                                            transform="translate(828.752 742.447) rotate(180)"
                                                            fill="#818d93"
                                                        ></path>
                                                    </g>
                                                </svg>
                                            </span>
                        
                                            <div class="hidden dropdown_wrap overflow-y-auto absolute w-full border border-solid border-[#E1E1EA] rounded-lg p-3 text-offwhite mt-3 left-0 top-full z-50 bg-white" style="display: none;">
                                                <label class="flex items-center gap-3 my-4 cursor-pointer block">
                                                    <span class="text-black text-[14px]">Red</span>
                                                </label>
                                                <label class="flex items-center gap-3 my-4 cursor-pointer block">
                                                    <span class="text-black text-[14px]">Amber</span>
                                                </label>
                                                <label class="flex items-center gap-3 my-4 cursor-pointer block">
                                                    <span class="text-black text-[14px]">Green</span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium w-[100%] text-[14px]">
                                        <input type="text" name="pilar_M4" value="" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2" />
                                    </td>
                                    <td class="py-2 px-3 w-0"></td>
                                </tr>
                        
                                <tr>
                                    <td class="w-[20%] border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium text-[14px]">
                                        Taloudellisen loppuselvity- ksen päytäkirja
                                    </td>
                                    <td class="py-2 px-3">
                                        <div class="dropdown_click shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2 cursor-pointer relative">
                                            <span class="flex items-center justify-between">
                                                <span></span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 300 300">
                                                    <g id="expand_input_field" transform="translate(-622 -557)">
                                                        <rect id="Rectangle_1128" data-name="Rectangle 1128" width="20px" height="20px" transform="translate(622 557)" fill="#fff" opacity="0"></rect>
                                                        <path
                                                            id="Path_117"
                                                            data-name="Path 117"
                                                            d="M46.2,5.365a14.91,14.91,0,0,1,22.908,0l42.716,51.259A14.91,14.91,0,0,1,100.37,81.079H14.938A14.91,14.91,0,0,1,3.484,56.624Z"
                                                            transform="translate(828.752 742.447) rotate(180)"
                                                            fill="#818d93"
                                                        ></path>
                                                    </g>
                                                </svg>
                                            </span>
                        
                                            <div class="hidden dropdown_wrap overflow-y-auto absolute w-full border border-solid border-[#E1E1EA] rounded-lg p-3 text-offwhite mt-3 left-0 top-full z-50 bg-white" style="display: none;">
                                                <label class="flex items-center gap-3 my-4 cursor-pointer block">
                                                    <span class="text-black text-[14px]">Red</span>
                                                </label>
                                                <label class="flex items-center gap-3 my-4 cursor-pointer block">
                                                    <span class="text-black text-[14px]">Amber</span>
                                                </label>
                                                <label class="flex items-center gap-3 my-4 cursor-pointer block">
                                                    <span class="text-black text-[14px]">Green</span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium w-[100%] text-[14px]">
                                        <input type="text" name="pilar_M4" value="" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2" />
                                    </td>
                                    <td class="py-2 px-3 w-0"></td>
                                </tr>
                        
                                <tr>
                                    <td class="w-[20%] border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-[#283B44] font-medium bg-[#D0D3D4] text-[14px]">
                                        Muu dokumentaatio   
                                    </td>
                                    <td class="py-2 px-3">
                                        <div class="dropdown_click shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2 cursor-pointer relative">
                                            <span class="flex items-center justify-between">
                                                <span></span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 300 300">
                                                    <g id="expand_input_field" transform="translate(-622 -557)">
                                                        <rect id="Rectangle_1128" data-name="Rectangle 1128" width="20px" height="20px" transform="translate(622 557)" fill="#fff" opacity="0"></rect>
                                                        <path
                                                            id="Path_117"
                                                            data-name="Path 117"
                                                            d="M46.2,5.365a14.91,14.91,0,0,1,22.908,0l42.716,51.259A14.91,14.91,0,0,1,100.37,81.079H14.938A14.91,14.91,0,0,1,3.484,56.624Z"
                                                            transform="translate(828.752 742.447) rotate(180)"
                                                            fill="#818d93"
                                                        ></path>
                                                    </g>
                                                </svg>
                                            </span>
                        
                                            <div class="hidden dropdown_wrap overflow-y-auto absolute w-full border border-solid border-[#E1E1EA] rounded-lg p-3 text-offwhite mt-3 left-0 top-full z-50 bg-white" style="display: none;">
                                                <label class="flex items-center gap-3 my-4 cursor-pointer block">
                                                    <span class="text-black text-[14px]">Red</span>
                                                </label>
                                                <label class="flex items-center gap-3 my-4 cursor-pointer block">
                                                    <span class="text-black text-[14px]">Amber</span>
                                                </label>
                                                <label class="flex items-center gap-3 my-4 cursor-pointer block">
                                                    <span class="text-black text-[14px]">Green</span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium w-[100%] text-[14px] flex items-center gap-[15px]">
                                        <input type="text" name="pilar_M4" value="" class="italic shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] border border-solid border-[#06F9B7] rounded-[5px] p-2" />
                                        <a href="#!" class="inline-block border border-solid border-[#E1E1EA] rounded-lg min-w-[100px] py-[6px] px-[15px]">Lisää Kuva</a>
                                    </td>
                                    <td class="py-2 px-3 w-0"></td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="w-full mt-[30px]">
                            <tbody>
                                <tr>
                                    <td colspan="1" class="border border-solid border-[#E1E1EA] py-2 px-3 text-white ">
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K17">
                                            <span class="flex-1 font-medium text-[#586B74] text-[14px]">Pääurakoitsijan toteutusaikataulu</span>
                                        </label>

                                        <label class="ml-3 inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K17">
                                            <span class="flex-1 font-medium text-[#586B74] text-[14px]">Rakennuttajakonsultin hankeaikataulu</span>
                                        </label>
                                    </td>
                                </tr>
                        
                                <tr>
                                    <td rowspan="3" class="border border-solid border-[#E1E1EA] py-2 px-3 text-[#283B44] font-medium text-[14px]">
                                        <textarea class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] rounded-[5px] p-2 min-h-[200px]"></textarea>
                                    </td>
                                    <td class="py-2 px-3 w-0 align-top">
                                        <div class="help_wrap relative">
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
                        
                                            <div
                                                class="help_show text-[#586B74] text-[14px] lg:w-[170px] 2xl:w-[260px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:ml-[5px] lg:left-[100%] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-42px] hidden"
                                            >
                                                <hr class="inline-block absolute right-[100%] top-[31px] w-[7px] border border-solid border-[#E1E1EA]" />
                                                <span>
                                                    Lisää kuvakaappaus urakoitsijan
                                                    aikataulusta tai omasta
                                                    hankeaikataulusta. Kumpi saatavilla
                                                    ja ajantasaisempi.
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>                        
                        
                    </div>
                </div>

                <hr class="border border-solid border-[#E1E1EA] ml-[-20px] mr-[-20px] mt-10">

                <div class="flex items-center justify-between pt-[20px]">
                    <div>
                        <a href="./index.html" class="text-[14px] text-black font-medium border border-solid border-[#E1E1EA] rounded-lg flex items-center pr-3 py-1">
                            <svg width="24px" height="24px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" stroke="#000000" stroke-width="0.00032"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="icomoon-ignore"> </g> <path d="M12.792 15.233l-0.754 0.754 6.035 6.035 0.754-0.754-5.281-5.281 5.256-5.256-0.754-0.754-3.013 3.013z" fill="#7a7a7a"> </path> </g></svg>
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