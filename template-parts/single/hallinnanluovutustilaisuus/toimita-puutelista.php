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
                    <input type="hidden" name="ptname" value="<?php echo esc_attr( $ptname ) ; ?>">
                    <input type="hidden" name="action" value="noste_update_project_step">
                    <input type="hidden" name="post_id" value="<?php echo esc_attr( $project_id ); ?>">

                    <!-- Card Body -->
                    <div class="px-4 md:px-8 pt-6 pb-10 lg:h-[645px] overflow-y-auto no-scrollbar scroll-smooth">
                        <div>
                            <div class="max-w-[700px] mx-auto mt-20">
                                <div class="mb-[30px]">
                                    <span class="font-medium italic text-[#00B2A9] block"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K1', true ), 'K1') ); ?></span>
                                    <span class="font-medium italic text-[#00B2A9] block"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K4', true ), 'K4') ); ?></span>
                                </div>
                            
                                <div class="mb-[30px]"> 
                                    <p class="text-[#586B74] mb-5">Hallinnanluovutus</p>
                                    <div class="flex lg:justify-between items-center">
                                        <h1 class="text-black text-[25px] font-medium mb-4">Käyttäjän virhe- ja puutelistaus</h1>
                                        <div class="text-right">
                                            <span class="font-medium italic text-[#00B2A9] block"><?php echo esc_html( gmdate('d.m.Y') ); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="help_wrap mb-4 relative">
                                <div class="max-w-[750px] mx-auto flex items-center gap-2">
                                    <table class="w-full whitespace-nowrap border-collapse">
                                        <thead class="text-left rounded-t-lg bg-accent text-white">
                                            <tr class="rounded-lg">
                                                <th class="bg-white"></th>
                                                <th class="p-3 w-56">Numero</th>
                                                <th class="p-3 min-w-[300px]">Virhe</th>
                                                <th class="p-3">Kommentti</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- 1st Body -->
                                            <?php for ($i=1; $i < 3; $i++) { ?>
                                                <tr>
                                                    <?php if ( $i == 2 ): ?>
                                                        <td class="px-4 py-3 border border-line">
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
                                                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="user_error_check[<?php echo $i ?>]" <?php checked( noste_check_array_data( noste_check_array_data( $data, 'user_error_check' ), $i ), 'on', true); ?>
>
                                                            </label>
                                                        </td>  
                                                    <?php else: ?>     
                                                    <td class="px-4 py-3 border border-line"></td>  
                                                    <?php endif ?>
                                                    <td class="px-4 py-3 border border-line">
                                                        <input type="text" name="user_error_number[<?php echo $i ?>]" placeholder="<?php echo $i ?>" class="shadow-input w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo noste_check_array_data( noste_check_array_data( $data, 'user_error_number' ), $i ) ?>">
                                                    </td>
                                                    <td class="px-4 py-3 border border-line text-sm">
                                                        <input type="text" name="user_error_error[<?php echo $i ?>]" placeholder="Tila jossa virhe on: Virhe yksilöitynä" class="shadow-input w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo noste_check_array_data( noste_check_array_data( $data, 'user_error_error' ), $i ) ?>">
                                                    </td>
                                                    <td class="px-4 py-3 border border-line">
                                                        <input type="text" name="user_error_comment[<?php echo $i ?>]" placeholder="Sovittu toimenpide" class="shadow-input w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo noste_check_array_data( noste_check_array_data( $data, 'user_error_comment' ), $i ) ?>">
                                                    </td>
                                                </tr>                                                    
                                            <?php } ?>
                                        </tbody>
                                    </table>

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

                                <div class="help_show hidden text-[#586B74] text-[14px] lg:w-[170px] 2xl:w-[260px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[50px] mb-[15px] lg:mb[0] lg:mt-[-122px]">
                                    <hr class="inline-block absolute right-[100%] top-[31px] w-[40px] border border-solid border-[#E1E1EA]">
                                    <span>
                                        Huomioi onko virhe muutoksen laajuuden mukainen
                                    </span>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                    <!-- / Card Body -->

                    <!-- Card footer -->
                    <?php echo wp_kses_post(noste_form_footer('form')); ?>
                    <!-- Card footer -->
                </form>
            </div>


        </div>
    </div>
</section>
<!-- Main Content -->