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
                
                <form action="<?php echo esc_url(get_permalink(get_the_ID())); ?>" method="post" enctype="multipart/form-data" class="ajax-submit">
                    <?php wp_nonce_field('project_step_form_validation', 'project_step_form__nonce_field'); ?>
                    <input type="hidden" name="ptname" value="<?php echo esc_attr(get_the_ptname()); ?>">
                    <input type="hidden" name="action" value="noste_update_project_step">
                    <input type="hidden" name="post_id" value="<?php echo esc_attr( $project_id ); ?>">

                    
                    <!-- Card Body -->
                    <div class="px-4 md:px-8 pt-6 pb-10 lg:h-[645px] overflow-y-auto no-scrollbar scroll-smooth"> 
                        <div class="mt-10">
                            <span class="font-medium italic text-[#00B2A9] block"><?php echo esc_attr( noste_check_empty( get_post_meta( $project_id, 'pilar_T1', true ), 'T1' )); ?></span>
                            <span class="font-medium italic text-[#00B2A9] block"><?php echo esc_attr( noste_check_empty( get_post_meta( $project_id, 'pilar_K1', true ), 'K1') ); ?></span>
                        </div>
                        <h4 class="mb-2 text-[#081F2C] max-w-[750px]">Aikataulu</h4>
                        <div class="max-w-[700px]">
                            <h4 class="font-medium italic text-[#00B2A9] block"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K4', true ), 'K4') ); ?></h4>
                        </div>
                        
                        <div class="max-w-[-750px] mx-auto mt-10">
                            <?php echo do_shortcode( '[gantt-form form_id="' . esc_attr( implode('/', [$_GET['tm'], $_GET['tmin']]) ) . '" columns="Text,Päättyy"]' ); ?>
                        </div>
                        
                        <div class="max-w-[-750px] mx-auto mt-10">
                            <div class="bg-[#D0D3D4] mb-6 max-w-[573px] p-2">Lomakuukausi</div>
                        </div>
                    </div>
                    <!-- Card footer --><?php echo wp_kses_post(noste_form_footer('form')); ?><!-- Card footer -->
                </form>
            </div>


        </div>
    </div>
</section>
<!-- Main Content -->