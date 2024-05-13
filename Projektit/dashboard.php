<?php 

/* Template Name: Dashboard */


if ( !is_user_logged_in() ) {
    wp_redirect( site_url() );
    exit;
}

$user = wp_get_current_user();

if ( !isset($user->roles) || empty($user->roles) ) {
    wp_redirect( site_url() );
    exit;
}


if ( !array_intersect( [ 'editor', 'administrator' , 'um_valvoja', 'um_project-manager'], $user->roles ) ) {
    wp_redirect( site_url() );
    exit;
}


if ( array_intersect( [ 'editor', 'administrator' ], $user->roles ) ) {
    $args = [
        'post_type' => 'projektitiedot',
        'numberposts' => 99999,
        'fields' => 'ids',     
    ];
}

if ( array_intersect( [ 'um_valvoja' ], $user->roles ) ) {
    $args = [
        'post_type'     => 'projektitiedot',
        'numberposts'   => 99999,
        'fields'        => 'ids',
        'meta_key'      => 'valvoja',
        'meta_value'    => get_current_user_id()
    ];
}

if ( array_intersect( [ 'um_project-manager' ], $user->roles ) ) {
    $args = [
        'post_type' => 'projektitiedot',
        'numberposts' => 99999,
        'fields' => 'ids',
        'meta_query' => array(
            array(
                'key' => 'projektipaallikko',
                'value' => get_current_user_id(),
                'compare' => 'LIKE'
            )
        )
    ];
}

if ( isset($_GET['psearch']) && !empty($_GET['psearch']) ) {
    $args['s'] = $_GET['psearch'];
    $searchVal = $_GET['psearch'];
} else {
    $searchVal = '';
}

if ( empty($args) ) {
    wp_redirect( site_url() );
    exit;
}

    $projects = get_posts($args);


get_header( 'noste' );
?>

   <!-- Sub Header -->
    <div class="bg-bodyBg lg:sticky top-[4.4rem]">
        <div class="container px-4">
            <div class="flex items-center justify-between border-b border-line py-2 md:py-3 lg:py-5">
                <h2 class="text-xl md:text-2xl text-black font-medium hidden md:block">Projektit</h2>
    
                <?php if ( array_intersect( [ 'editor', 'administrator' ], $user->roles ) ) : ?>
                    <div class="flex items-center w-full md:w-auto gap-2">
                        <a href="<?php echo esc_attr( get_permalink( 60 ) ); ?>" class="btn bg-accent text-white px-3 md:px-4 text-xs md:text-sm w-1/2 md:w-auto">
                            <i class="um-icon-plus text-white pr-1"></i>    
                            Luo uusi projekti
                        </a>
        
                        <a href="<?php echo esc_attr( get_permalink( 14 ) ); ?>" class="btn border-black1 px-3 md:px-4 text-xs md:text-sm w-1/2 md:w-auto">
                            <i class="um-icon-plus pr-1"></i>        
                            Luo uusi käyttäjä
                        </a>
                    </div>
                <?php endif; ?>

            </div>
        </div> <!-- container -->
    
        <!-- search start  -->
        <div class="container px-4">
            <div class="flex flex-col md:flex-row md:items-center justify-between border_bottom_1 py-2 md:py-3 lg:py-5 border-b border-line">
                <div class="search_box">
    

                    <form action="<?php echo esc_attr( get_permalink( get_the_ID() ) ); ?>" method="get">
                        <div class="flex items-center gap-4">
                            <div class="flex items-center md:min-w-[16rem] lg:min-w-[20rem] w-full px-2 border border-line rounded-lg shadow-component bg-white">
                                <i class="um-icon-ios-search"></i>
                                <input class="px-1 py-2 w-full bg-transparent" type="text" name="psearch" placeholder="Hae yksittäistä projektia..." value="<?php echo esc_attr( $searchVal ); ?>">
                            </div>
    
                            <div class="flex items-center gap-2">
                                <a href="<?php echo esc_attr( get_permalink( get_the_ID() ) ); ?>" class="btn border-black1">Tyhjennä</a>
                                <button class="btn bg-black text-white" type="submit">Hae</button>
                            </div>
                        </div>
                    </form>
    
                </div> <!-- search_box -->
    
                <div class="flex items-center justify-end text-right gap-2">
                    <button class="btn project-layout shadow-md" data-layout="grid-view-btn">
                        <?php echo noste_check_empty ( GetIconsMarkup( 'grid.svg' ) ); ?>
                    </button>
    
                    <button class="btn project-layout" data-layout="list-view-btn">
                        <?php echo noste_check_empty ( GetIconsMarkup( 'listtile.svg' ) ); ?>
                    </button>
                </div> <!-- flex -->
            </div>
    
        </div> <!-- container -->
        <!-- search end -->
    
        <div class="container px-4">
            <div class="flex items-center justify-between text-sm font-normal py-2 md:py-3 lg:py-5">
                <span class="text-black1">KAIKKI PROJEKTIT</span>
                <span class="text-black">Näytetään <b><?php echo esc_html( count($projects) ); ?></b> hanketta</span>
            </div> <!-- card_list_header -->
        </div>
    </div>
    <!-- Sub Header -->
    <!-- card list start  -->
    <section class="pb-20">

        <div class="container mx-auto change_status text-center hidden">
            <span class="loader"></span>
        </div>

        <div class="container px-4" id="dashboard_projectCard">

                <div class="card_item sample hidden">

                        <div class="border-b border-black2 p-3 flex items-center justify-between project-head">
                            <div class="pilar_T1">
                                <span class="font-bold text-text-base"></span>
                            </div>
                            <div class="status-wrap">
                                <span class="status"></span>                                
                            </div>
                        </div> <!-- card_header -->

                        <div class="project-details">

                            <div class="border-b border-black2 pt-5 pb-2 px-3 project-details-wrap">
                                <a href="" class="single_permalink">
                                    <div class="project-title">
                                        <h2 class="text-lg font-bold py-3 title"></h2>
                                        <p class="text-base font-medium text-[#475467] mb-2 projektinumero"></p>                                       
                                    </div>

                                    <ul>
                                        <li class="font-normal text-base gap-2 mb-1 project-projektipaallikko">
                                            <span class="text-[#586B74]">Projektipäällikkö : </span>
                                            <span class="projektipaallikko"></span>
                                        </li>
                                        <li class="font-normal gap-2 text-base project-valvoja">
                                            <span class="text-[#586B74]">Valvoja : </span>
                                            <span class="valvoja"></span>
                                        </li>
                                    </ul>
                                    </a>                                 
                            </div> <!-- body_top -->



                            <div class="border-b border-black2 px-3 py-6 project-kiinteisto">
                                <h3 class="text-accent text-base font-medium mb-4">KIINTEISTÖ</h3>

                                <ul>
                                    <li class="text-[#344054] flex item-center gap-2 mb-1">
                                        <span>
                                           <?php echo noste_check_empty ( GetIconsMarkup( 'home-addr.svg' ) ); ?>
                                        </span>
                                        <span class="pilar_K1"></span>
                                    </li>

                                    <li class="text-[#344054] flex item-center gap-2">
                                        <span>
                                           <?php echo noste_check_empty ( GetIconsMarkup( 'map.svg' ) ); ?>
                                        </span>
                                        <span class="pilar_K2"></span>
                                    </li>
                                </ul>
                            </div> <!-- body_bottom -->

                        </div> <!-- card_body -->

                        <div class="project-footer">
                            <div class="footer_top flex items-center gap-2 px-3 py-2">
                                <span class="status_name projektin_valmistelu"></span>
                            </div> <!-- footer_top -->


                            <?php if ( array_intersect( [ 'editor', 'administrator' ], $user->roles ) ) : ?>
                            <div class="bg-[#F2F4F7] text-right px-3 py-4 project-edit-osoite">
                                <a href="" class="btn bg-white border border-black2">
                                    <?php echo noste_check_empty ( GetIconsMarkup( 'edit.svg' ) ); ?>
                                    <span>Muokkaa projektia</span>
                                </a>
                            </div> <!-- footer_bottom -->
                            <?php endif; ?>
                        </div> <!-- card_footer -->

                </div> <!-- card_item -->    



            <div class="tile-layout-bar">
                <div></div>
                <div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div></div>
            </div>


            <!-- grid View Item -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">

                <?php foreach ($projects as $id): 

                    $projektinumero_k8 = noste_check_empty( get_post_meta( $id, 'pilar_K8', true ) );
                    $projektinimi_k4 = noste_check_empty( get_post_meta( $id, 'pilar_K4', true ) );
                    $tilaaja_t1 = noste_check_empty( get_post_meta( $id, 'pilar_T1', true ), 'Tilaaja (Yritys)');
                    $kiinteistonimi_K1 = noste_check_empty( get_post_meta( $id, 'pilar_K1', true ), 'Kiinteistön nimi' );
                    $kiinteiston_katusoite_k2 = noste_check_empty(get_post_meta( $id, 'pilar_K2', true ), 'Kiinteistön osoite');


                    $status = !empty(get_field('projektin_tila', $id)) ? get_field('projektin_tila', $id) : '';
                    $project_title = !empty($projektinimi_k4) ? $projektinimi_k4 : get_the_title( $id );

                    $projektinumero = !empty( $projektinumero_k8 ) ? $projektinumero_k8 : get_field('projektinumero', $id);
                    $projektipaallikko = !empty(get_field('projektipaallikko', $id)) ? get_field('projektipaallikko', $id)['label'] : '';
                    $valvoja = !empty(get_field('valvoja', $id)) ? implode(', ', array_column(get_field('valvoja', $id), 'label')) : '';
                    $projektin_valmistelu = !empty(get_field('projektin_valmistelu', $id)) ? get_field('projektin_valmistelu', $id) : '';


                    $edit_project = add_query_arg([ 'pid' => $id ], get_permalink( 60 ) );

                    $user_restricted = array_intersect( [ 'editor' ], $user->roles );

                    ?>

                    <!-- card_item -->
                    <div class="card_item <?php echo esc_attr( strtolower($status) ); ?>">

                        <div class="border-b border-black2 p-3 flex items-center justify-between project-head">
                            <div class="pilar_T1">
                                <span class="font-bold text-text-base"><?php echo esc_html( $tilaaja_t1 ); ?></span>
                            </div>
                            <div class="status-wrap">
                                <span class="status <?php echo esc_attr( strtolower($status) ); ?>"><?php echo esc_html( $status ); ?></span>                                
                            </div>
                        </div> <!-- card_header -->

                        <div class="project-details">

                            <div class="border-b border-black2 pt-5 pb-2 px-3 project-details-wrap">
                                <?php if ( !$user_restricted ) : ?>
                                <a href="<?php echo esc_attr( get_the_permalink( $id ) ); ?>" class="single_permalink">
                                <?php endif; ?>
                                    <div class="project-title">
                                        <h2 class="text-lg font-bold py-3 title"><?php echo esc_html( $project_title ); ?></h2>
                                        <p class="text-base font-medium text-[#475467] mb-2 projektinumero"><?php echo esc_html( $projektinumero ); ?></p>                                       
                                    </div>

                                    <ul>
                                        <li class="font-normal text-base gap-2 mb-1 project-projektipaallikko">
                                            <span class="text-[#586B74]">Projektipäällikkö : </span>
                                            <span class="projektipaallikko"><?php echo esc_html( $projektipaallikko ); ?></span>
                                        </li>
                                        <li class="font-normal gap-2 text-base project-valvoja">
                                            <span class="text-[#586B74]">Valvoja : </span>
                                            <span class="valvoja"><?php echo $valvoja; ?></span>
                                        </li>
                                    </ul>

                                <?php if ( !$user_restricted ) : ?>
                                    </a>
                                <?php endif; ?>                                    
                            </div> <!-- body_top -->



                            <div class="border-b border-black2 px-3 py-6 project-kiinteisto">
                                <h3 class="text-accent text-base font-medium mb-4">KIINTEISTÖ</h3>

                                <ul>
                                    <li class="text-[#344054] flex item-center gap-2 mb-1">
                                        <span>
                                            <?php echo noste_check_empty ( GetIconsMarkup( 'home-addr.svg' ) ); ?>
                                        </span>
                                        <span class="pilar_K1"><?php echo esc_html( $kiinteistonimi_K1 ); ?></span>
                                    </li>

                                    <li class="text-[#344054] flex item-center gap-2">
                                        <span>
                                            <?php echo noste_check_empty ( GetIconsMarkup( 'map.svg' ) ); ?>
                                        </span>
                                        <span class="pilar_K2"><?php echo esc_html( $kiinteiston_katusoite_k2 ); ?></span>
                                    </li>
                                </ul>
                            </div> <!-- body_bottom -->

                        </div> <!-- card_body -->

                        <div class="project-footer">
                            <div class="footer_top flex items-center gap-2 px-3 py-2">
                                <span class="status_name projektin_valmistelu"><?php echo esc_html( $projektin_valmistelu ); ?></span>
                            </div> <!-- footer_top -->


                            <?php if ( array_intersect( [ 'editor', 'administrator' ], $user->roles ) ) : ?>
                            <div class="bg-[#F2F4F7] text-right px-3 py-4 project-edit-osoite">
                                <a href="<?php echo esc_attr( $edit_project ); ?>" class="btn bg-white border border-black2">
                                     <?php echo noste_check_empty ( GetIconsMarkup( 'edit.svg' ) ); ?>
                                    <span>Muokkaa projektia</span>
                                </a>
                            </div> <!-- footer_bottom -->
                            <?php endif; ?>
                        </div> <!-- card_footer -->

                    </div> <!-- card_item -->                    
                <?php endforeach ?>

                
            </div> <!-- card_grid_item -->
            <!-- grid View Item -->

        </div> <!-- container -->
        <!-- list View Item -->

    </section>
    <!-- card list end  -->
   
<?php wp_footer(); ?>