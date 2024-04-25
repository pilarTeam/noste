<?php 

if ( !is_singular( 'projektitiedot' ) ) {
   return;
}

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
                
                <form action="<?php echo esc_url( get_permalink( get_the_ID() ) ); ?>" method="post" enctype="multipart/form-data" class="ajax-submit">
                    <?php wp_nonce_field('project_step_form_validation', 'project_step_form__nonce_field'); ?>
                    <input type="hidden" name="ptname" value="<?php echo esc_attr(implode('_', ['noste', $_GET['tm'], $_GET['tmin']])); ?>">
                    <input type="hidden" name="action" value="noste_update_project_step">
                    <input type="hidden" name="post_id" value="<?php echo esc_attr( $project_id ); ?>">
                    
                    <!-- Card Body -->
                    <div class="px-4 md:px-8 pt-6 pb-10 lg:h-[645px] overflow-y-auto no-scrollbar scroll-smooth">
                        
                        <div class="max-w-[880px] mx-auto mt-20">
                            <div class="mb-[30px]">
                                <span class="font-medium italic text-[#00B2A9] block"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K1', true ), 'K1') ); ?></span>
                                <span class="font-medium italic text-[#00B2A9] block"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K4', true ), 'K4') ); ?></span>
                            </div>

                            <div class="mb-[30px]">
                                <h1 class="text-black text-[25px] font-medium mb-4">Kokonaisurakka, kiinteä hinta</h1>
                                
                                <div class="flex justify-between items-center my-5">
                                    <h4 class="text-[#081F2C] font-bold">Vertailu (alv. 0%)</h4>
                                    <span class="text-[#00B2A9] italic">xx.xx.xxxx</span>
                                </div>
                            </div>

                            <table class="w-full">
                                <tr>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-white bg-[#00B2A9] text-[14px]">Sisältö</td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-white bg-[#00B2A9] text-[14px]">Nosteen kustannusarvio</td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="py-2 px-3">
                                        <div class="help_wrap relative">

                                            <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>
                        
                                            <div class="help_show text-[#586B74] text-[14px] lg:w-[170px] 2xl:w-[260px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:ml-[5px] lg:left-[100%] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-42px] hidden">
                                                <hr class="inline-block absolute right-[100%] top-[31px] w-[7px] border border-solid border-[#E1E1EA]">
                                                <span>
                                                    Urakoitsija sekä tarjouspäivämäärä
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="border border-solid border-[#E1E1EA] p-3 w-[20%] text-[#283B44] text-[14px] font-medium" colspan="6">
                                        Tilamuutostyö
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-[#00B2A9] italic border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-[14px]">TY1, Syöte1</td>
                                    <td class="text-[#00B2A9] text-right italic border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-[14px]">TY1, Syöte2</td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="py-2 px-3">
                                        <div class="help_wrap relative">

                                            <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>
                        
                                            <div class="help_show text-[#586B74] text-[14px] lg:w-[170px] 2xl:w-[260px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:ml-[5px] lg:left-[100%] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-42px] hidden">
                                                <hr class="inline-block absolute right-[100%] top-[31px] w-[7px] border border-solid border-[#E1E1EA]">
                                                <span>
                                                    Lisää tarjousten rivien mukaan
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-[#00B2A9] italic border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-[14px]">TY2, Syöte1</td>
                                    <td class="text-[#00B2A9] text-right italic border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-[14px]">TY2, Syöte2</td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="py-2 px-3"></td>
                                </tr>

                                <tr>
                                    <td class="text-[#00B2A9] italic border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-[14px]"></td>
                                    <td class="text-[#00B2A9] text-right italic border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-[14px]"></td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="py-2 px-3"></td>
                                </tr>

                                <tr>
                                    <td class="text-[#00B2A9] italic border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-[14px]"></td>
                                    <td class="text-[#00B2A9] text-right italic border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-[14px]"></td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="py-2 px-3"></td>
                                </tr>

                                <tr>
                                    <td class="text-[#00B2A9] italic border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-[14px]"></td>
                                    <td class="text-[#00B2A9] text-right italic border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-[14px]"></td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="py-2 px-3"></td>
                                </tr>

                                <tr>
                                    <td class="text-[#00B2A9] italic border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-[14px]"></td>
                                    <td class="text-[#00B2A9] text-right italic border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-[14px]"></td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="py-2 px-3"></td>
                                </tr>

                                <tr>
                                    <td class="text-[#00B2A9] italic border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-[14px]"></td>
                                    <td class="text-[#00B2A9] text-right italic border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-[14px]"></td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="py-2 px-3"></td>
                                </tr>

                                <tr>
                                    <td class="text-[#00B2A9] italic border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-[14px]"></td>
                                    <td class="text-[#00B2A9] text-right italic border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-[14px]"></td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="py-2 px-3"></td>
                                </tr>

                                <tr>
                                    <td class="text-[#00B2A9] italic border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-[14px]"></td>
                                    <td class="text-[#00B2A9] text-right italic border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-[14px]"></td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="py-2 px-3"></td>
                                </tr>

                                <tr>
                                    <td class="text-[#00B2A9] italic border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-[14px]"></td>
                                    <td class="text-[#00B2A9] text-right italic border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-[14px]"></td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="py-2 px-3"></td>
                                </tr>

                                <tr>
                                    <td class="text-[#00B2A9] italic border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-[14px]">TY12, Syöte1</td>
                                    <td class="text-[#00B2A9] text-right italic border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-[14px]">TY12, Syöte2</td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="py-2 px-3"></td>
                                </tr>

                                <tr>
                                    <td class="text-[#283B44] font-medium border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-[14px]" colspan="2">Ovatko tarjoukset vertailukelpoisia</td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <label class="inline-flex items-center gap-2 cursor-pointer mr-2">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[12px] h-[12px] rounded-[2px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                            <span class="text-[#586B74] text-[12px]">Kyllä</span>
                                        </label>
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[12px] h-[12px] rounded-[2px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                            <span class="text-[#586B74] text-[12px]">Ei</span>
                                        </label>
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <label class="inline-flex items-center gap-2 cursor-pointer mr-2">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[12px] h-[12px] rounded-[2px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                            <span class="text-[#586B74] text-[12px]">Kyllä</span>
                                        </label>
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[12px] h-[12px] rounded-[2px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                            <span class="text-[#586B74] text-[12px]">Ei</span>
                                        </label>
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <label class="inline-flex items-center gap-2 cursor-pointer mr-2">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[12px] h-[12px] rounded-[2px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                            <span class="text-[#586B74] text-[12px]">Kyllä</span>
                                        </label>
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[12px] h-[12px] rounded-[2px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                            <span class="text-[#586B74] text-[12px]">Ei</span>
                                        </label>
                                    </td>
                                    <td class="border border-solid border-[#E1E1EA] py-2 px-3">
                                        <label class="inline-flex items-center gap-2 cursor-pointer mr-2">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[12px] h-[12px] rounded-[2px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                            <span class="text-[#586B74] text-[12px]">Kyllä</span>
                                        </label>
                                        <label class="inline-flex items-center gap-2 cursor-pointer">
                                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[12px] h-[12px] rounded-[2px] inline-flex items-center justify-center">
                                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </span>
                                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_TY1">
                                            <span class="text-[#586B74] text-[12px]">Ei</span>
                                        </label>
                                    </td>
                                    <td class="py-2 px-3">
                                        <div class="help_wrap relative">

                                            <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>
                        
                                            <div class="help_show text-[#586B74] text-[14px] lg:w-[170px] 2xl:w-[260px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:ml-[5px] lg:left-[100%] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-42px] hidden">
                                                <hr class="inline-block absolute right-[100%] top-[31px] w-[7px] border border-solid border-[#E1E1EA]">
                                                <span>
                                                    Tarkasta ovatko tarjoukset vertailukelpoisia, eli puuttuuko joltain jotain.
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-[#283B44] font-medium border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-[14px]" colspan="2">Tarjoushinta</td>
                                    <td class="text-[#00B2A9] text-[14px] italic text-right border border-solid border-[#E1E1EA] py-2 px-3">
                                        0 €
                                    </td>
                                    <td class="text-[#00B2A9] text-[14px] italic text-right border border-solid border-[#E1E1EA] py-2 px-3">
                                        0 €
                                    </td>
                                    <td class="text-[#00B2A9] text-[14px] italic text-right border border-solid border-[#E1E1EA] py-2 px-3">
                                        0 €
                                    </td>
                                    <td class="text-[#00B2A9] text-[14px] italic text-right border border-solid border-[#E1E1EA] py-2 px-3">
                                        0 €
                                    </td>
                                    <td class="py-2 px-3">
                                        <div class="help_wrap relative">

                                            <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>
                        
                                            <div class="help_show text-[#586B74] text-[14px] lg:w-[170px] 2xl:w-[260px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:ml-[5px] lg:left-[100%] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-42px] hidden">
                                                <hr class="inline-block absolute right-[100%] top-[31px] w-[7px] border border-solid border-[#E1E1EA]">
                                                <span>
                                                    Mikäli tarjoukset eivät ole vertailukelpoisia, niin tällä rivillä voit lisätä/poistaa kustannuksia vertailun helpottamiseksi.
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-[#283B44] font-medium border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-[14px]" colspan="2">Korjaus vertailukelpoiseksi</td>
                                    <td class="text-[#00B2A9] text-[14px] italic text-right border border-solid border-[#E1E1EA] py-2 px-3">
                                    <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="text-[#00B2A9] text-[14px] italic text-right border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="text-[#00B2A9] text-[14px] italic text-right border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="text-[#00B2A9] text-[14px] italic text-right border border-solid border-[#E1E1EA] py-2 px-3">
                                        <input type="text" name="pilar_i1" class="w-full shadow-[0_0_5px_2px_rgb(81,244,200,44%)]  border border-solid border-[#06F9B7] rounded-[5px] py-1 px-2">
                                    </td>
                                    <td class="py-2 px-3">
                                        <div class="help_wrap relative">

                                            <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>
                        
                                            <div class="help_show text-[#586B74] text-[14px] lg:w-[170px] 2xl:w-[260px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:ml-[5px] lg:left-[100%] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-42px] hidden">
                                                <hr class="inline-block absolute right-[100%] top-[31px] w-[7px] border border-solid border-[#E1E1EA]">
                                                <span>
                                                    Vertaa tarjousta edullisimpaan (erotus)
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="bg-[#00B2A9] text-white font-medium border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-[14px]">Kokonaishinta (alv. 0%)</td>
                                    <td class="bg-[#00B2A9] text-[#283B44] text-right font-medium border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-[14px]">Summa ylläolevista</td>
                                    <td class="bg-[#00B2A9] text-[#283B44] text-[14px] italic text-right border border-solid border-[#E1E1EA] py-2 px-3">
                                        0 €
                                    </td>
                                    <td class="bg-[#00B2A9] text-[#283B44] text-[14px] italic text-right border border-solid border-[#E1E1EA] py-2 px-3">
                                        0 €
                                    </td>
                                    <td class="bg-[#00B2A9] text-[#283B44] text-[14px] italic text-right border border-solid border-[#E1E1EA] py-2 px-3">
                                        0 €
                                    </td>
                                    <td class="bg-[#00B2A9] text-[#283B44] text-[14px] italic text-right border border-solid border-[#E1E1EA] py-2 px-3">
                                        0 €
                                    </td>
                                    <td class="py-2 px-3"></td>
                                </tr>

                                <tr>
                                    <td class="text-[#283B44] font-medium border border-solid border-[#E1E1EA] py-2 px-3 w-[20%] text-[14px]" colspan="6">Erotus edullisimpaan tarjoukseen</td>
                                </tr>

                                <tr>
                                    <td class="text-[#283B44] font-medium border border-solid border-[#E1E1EA] pt-2 pb-20 px-3 w-[20%] text-[14px]" colspan="2"></td>
                                    <td class="text-[#586B74] text-[14px] border border-solid border-[#E1E1EA] pt-2 pb-20 px-3">
                                        Huomiot:
                                    </td>
                                    <td class="text-[#586B74] text-[14px] border border-solid border-[#E1E1EA] pt-2 pb-20 px-3">
                                        Huomiot:
                                    </td>
                                    <td class="text-[#586B74] text-[14px] border border-solid border-[#E1E1EA] pt-2 pb-20 px-3">
                                        Huomiot:
                                    </td>
                                    <td class="text-[#586B74] text-[14px] border border-solid border-[#E1E1EA] pt-2 pb-20 px-3">
                                        Huomiot:
                                    </td>
                                    <td class="py-2 px-3 align-baseline">
                                        <div class="help_wrap relative">

                                            <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>
                        
                                            <div class="help_show text-[#586B74] text-[14px] lg:w-[170px] 2xl:w-[260px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:ml-[5px] lg:left-[100%] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-42px] hidden">
                                                <hr class="inline-block absolute right-[100%] top-[31px] w-[7px] border border-solid border-[#E1E1EA]">
                                                <span>
                                                    Tähän voi kommentoida tarjouksen huomioita, kuten voimassaoloaika, onko päivitetty esim selonoton jälkeen tai jos jokin asia puuttuu tarjouksesta. Huomioi tässä myös mahdolliset optiohinnat.
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>

                            <table class="w-full mt-10">
                                <tr>
                                    <td class="bg-[#00B2A9] text-white font-medium border border-solid border-[#E1E1EA] py-2 px-3 text-[14px] w-[40%]">Urakoitsijat jotka eivät jättäneet tarjousta</td>
                                    <td class="w-full bg-[#00B2A9] text-white font-medium border border-solid border-[#E1E1EA] py-2 px-3 text-[14px]">Ehdotettu urakoitsija</td>
                                    <td class="py-2 px-3 align-baseline">
                                        <div class="help_wrap relative">

                                            <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>
                        
                                            <div class="help_show text-[#586B74] text-[14px] lg:w-[170px] 2xl:w-[260px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:ml-[5px] lg:left-[100%] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-42px] hidden">
                                                <hr class="inline-block absolute right-[100%] top-[31px] w-[7px] border border-solid border-[#E1E1EA]">
                                                <span>
                                                    Perustele valittava urakoitsija. Kriteerinä voi olla edullisuus tai jos usea tarjous on lähellä toisiaan voit käyttää omaa harkintaa. Suositellaan tarkastelemaan aikaisempia kokemuksia urakoitsijoista (yhteistyön helppous, laatu, aikataulussa pysyminen, viestintä jne.) Lisäksi tilaajavastuu-lakien mukaiset selvitykset tulee olla tarkistettu olevan asianmukaisesti kunnossa.
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-white font-medium border border-solid border-[#E1E1EA] py-2 px-3 text-[14px] w-[40%] h-[150px]"></td>
                                    <td class="w-full text-white font-medium border border-solid border-[#E1E1EA] py-2 px-3 text-[14px] h-[150px]"></td>
                                    <td class="py-2 px-3 align-baseline"></td>
                                </tr>
                            </table>
                        </div>
                    
                    </div><!-- Card Body -->
                    <!-- Card footer --><?php echo wp_kses_post(noste_form_footer('form')); ?><!-- Card footer -->
                </form>
            </div>


        </div>
    </div>
</section>
<!-- Main Content -->