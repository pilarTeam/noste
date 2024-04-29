<?php 

/* Template Name: Toimintaloki */


if ( !is_user_logged_in() ) {
    wp_redirect( site_url() );
    exit;
}

get_header( 'noste' );

$user = wp_get_current_user();

if ( !isset($user->roles) || empty($user->roles) ) {
    wp_redirect( site_url() );
    exit;
}

if ( !array_intersect( [ 'editor', 'administrator' , 'um_project-manager' ], $user->roles ) ) {
    wp_redirect( site_url() );
    exit;
}

$filter = '';

if ( isset($_GET['pid']) && !empty($_GET['pid']) ) {
    $filter .= ' AND project_id = ' . (int) $_GET['pid'];
} 

if ( array_intersect( [ 'editor', 'administrator' ], $user->roles ) ) {
    $args = [
        'post_type' => 'projektitiedot',
        'numberposts' => -1,
        'fields' => 'ids'
    ];

}

if ( array_intersect( [ 'um_project-manager' ], $user->roles ) ) {
    $args = [
        'post_type' => 'projektitiedot',
        'numberposts' => -5,
        'fields' => 'ids',
        'meta_key'      => 'projektipaallikko',
        'meta_value'    => get_current_user_id()
    ];

    $filter .= ' AND user_id = ' . (int) get_the_ID();
}




if ( empty($args) ) {
    wp_redirect( site_url() );
    exit;
}

$projects = get_posts($args);


global $wpdb;
$sql = $wpdb->prepare( "SELECT * FROM wp_noste_notifications WHERE status = %s " . $filter ." ORDER BY `id` DESC
", 'active' );
$notifications = $wpdb->get_results( $sql, ARRAY_A );

?>

<section class="pt-5">
        <div class="container px-4">
            <div class="flex items-center gap-5 lg:gap-0 flex-col lg:flex-row">
                <div>
                    <h1 class="text-[26px] font-medium text-black">Toimintaloki</h1>
                </div>

                <form action="<?php echo esc_attr( get_permalink( get_the_ID() ) ); ?>" method="get" class="mx-auto notification-filter">
                    <div class="flex flex-col lg:flex-row w-full lg:w-auto lg:items-center gap-3 lg:gap-10 rounded-lg border border-solid border-[#E1E1EA] px-8 py-3">
                        <div>
                            <h2 class="text-black text-[18px] font-bold">Suodatin</h2>
                        </div>

                        <div class="flex items-center gap-3">
                            <span class="text-offwhite font-medium inline-block w-24 lg:w-auto">Päivämäärä:</span>
                            <div class="dropdown_click cursor-pointer w-full flex-1 relative">
                                <span class="flex items-center justify-between gap-1 font-medium rounded-lg border border-solid border-[#CCCCD6] px-3 py-2 text-black">
                                    Näytä kaikki

                                    <i class="um-faicon-angle-down"></i>
                                </span>

                                <div class="z-10 hidden min-w-[238px] mt-2 px-5 py-3 right-0 bg-white absolute w-full dropdown_wrap rounded-lg border border-solid border-[#CCCCD6]">
                                    <span class="text-[14px] block my-3 text-[#94969C] font-medium">Näytä Kaikki</span>
                                    <span class="text-[14px] block my-3 text-black font-medium">Viime Viikko</span>
                                    <span class="text-[14px] block my-3 text-black font-medium">Viime Kuukausi</span>
                                    <span class="text-[14px] block my-3 text-black font-medium">Viime Vuosi</span>
                                    <span class="text-[14px] block my-3 text-black font-medium">2021</span>
                                    <span class="text-[14px] block my-3 text-black font-medium">2020</span>
                                </div>
                            </div>
                        </div>
                        
                        <?php if ( !empty($projects) ): ?>
                        <div class="flex items-center gap-3">
                            <span class="text-offwhite font-medium inline-block w-24 lg:w-auto">Projekti:</span>
                            <div class="dropdown_click cursor-pointer w-full flex-1 relative">
                                <div class="dropdown-label flex items-center justify-between gap-1 font-medium rounded-lg border border-solid border-[#CCCCD6] px-3 py-2 text-black">
                                    <span class="selected-label"><?php echo isset( $_GET['pid'] ) ? get_the_title( $_GET['pid'] ) : 'Projektin Nimi' ?></span>  
                                    <i class="um-faicon-angle-down"></i>
                                </div>

                                <div class="dropdown_wrap z-10 hidden min-w-[238px] mt-2 px-5 py-3 right-0 bg-white absolute w-full dropdown_wrap rounded-lg border border-solid border-[#CCCCD6]">
                                    <?php foreach ($projects as $project_id): ?>
                                        <label class="text-[14px] block my-3 text-[#94969C] font-medium">
                                         <input type="radio" name="pid" value="<?php echo esc_attr( $project_id ); ?>" class="absolute hidden" <?php echo isset($_GET['pid']) ? checked( $_GET['pid'], $project_id ) : ''; ?>> <span class="name"><?php echo esc_html( get_the_title( $project_id ) ); ?></span></label>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                        <?php endif ?>

                        <div class="flex items-center gap-3">
                            <span class="text-offwhite font-medium inline-block w-24 lg:w-auto">Rooli:</span>
                            <div class="dropdown_click cursor-pointer w-full flex-1 relative">
                                <div class="dropdown-label flex items-center justify-between gap-1 font-medium rounded-lg border border-solid border-[#CCCCD6] px-3 py-2 text-black">
                                    <span class="selected-label"><?php echo isset( $_GET['roles'] ) ? $_GET['roles'] : 'Valvoja' ?></span>                                
                                    <i class="um-faicon-angle-down"></i>
                                </div>

                                <div class="dropdown_wrap z-10 hidden min-w-[238px] mt-2 px-5 py-3 right-0 bg-white absolute w-full dropdown_wrap rounded-lg border border-solid border-[#CCCCD6]">
                                    <label class="text-[14px] block my-3 text-[#94969C] font-medium">
                                        <input type="radio" name="roles" value="subscriber" class="absolute hidden" <?php echo isset($_GET['roles']) ? checked( $_GET['roles'], 'subscriber' ) : ''; ?>> <span class="name">Subscriber</span></label>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </form>
            </div>
            <hr class="border-b border-solid border-[#E1E1EA] my-5">
        </div>
    </section>

    <!-- add new project start  -->
    <section class="pt-5 pb-20 notification-list">
        <div class="container px-4">
            <div class="mx-auto max-w-[700px]">

                <div>
                    <span class="font-medium text-offwhite inline-block mr-2">Käytetyt suodattimet:</span>

                    <?php if ( $_GET ): ?>
                        <?php foreach ($_GET as $key => $value): if ( !empty($value) ) : 
                            $htmlval = ( $key == 'pid' ) ? get_the_title( $value ) : $value;
                        ?>
                            
                            <span class="cursor-pointer m-2 lg:mx-1 inline-flex items-center gap-1 bg-[#E9E9F0] text-offwhite text-[14px] px-2 py-[2px] rounded-[3px] close_notification" data-key="<?php echo esc_attr( $key ); ?>">
                                <?php echo esc_html( $htmlval ); ?>
                                <i class="um-icon-android-close"></i>
                            </span>

                        <?php endif; endforeach; ?>
                        
                    <?php endif ?>


                    <a href="<?php echo esc_attr( get_permalink( get_the_ID() ) ); ?>" class="inline-block text-offwhite ml-2 underline">Tyhjennä kaikki</a>
                </div>



                    <?php if ( !empty($notifications) ): ?>
                        <div>
                            <?php foreach ($notifications as $notification): 
                                um_fetch_user($notification['employer']);
                                $recent_time = strtotime('now') - strtotime($notification['date']);
                                $how_log_ago = '';
                                $content = !empty($notification['content']) ? json_decode( $notification['content'], true ) : [];

                                if ( !empty($content) ) {
                                    $step = $content['step'] ?? '';
                                    $instep = $content['instep'] ?? '';
                                    $form_name = $content['form_name'] ?? '';

                                    if ( $recent_time > 0 ) {

                                        $minutes = (int)($recent_time / 60);
                                        $hours = (int)($minutes / 60);
                                        $days = (int)($hours / 24);
                                        if ($days >= 1) {
                                          $how_log_ago = $days . ' days sitten' . ( $days != 1 ? 's' : '');
                                        } else if ($hours >= 1) {
                                          $how_log_ago = $hours . ' hours sitten' . ( $hours != 1 ? 's' : '');
                                        } else if ($minutes >= 1) {
                                          $how_log_ago = $minutes . ' minutes sitten' . ( $minutes != 1 ? 's' : '');
                                        } else {
                                          $how_log_ago = $recent_time . ' seconds sitten' . ( $recent_time != 1 ? 's' : '');
                                        }

                                    }

                                    ?>
                                   <div class="my-3 p-4 gap-3 flex rounded-lg border border-solid border-[#E1E1EA]">
                                        <div class="user_avatar">
                                            <?php echo um_user( 'profile_photo' ); ?>
                                        </div>                            
                                        <div class="flex-1">
                                            <span class="text-offwhite text-[14px]">Uusi toiminta • <?php echo esc_html( $how_log_ago ); ?></span>
                                            <p class="text-[#94969C] mt-1"><b class="text-black"><?php echo um_user( 'display_name' ); ?></b> <?php echo implode(' - ', [ $step, $instep ]); ?> <b class="text-black"><?php echo esc_attr( $form_name ); ?></b></p>
                                        </div>
                                    </div>
                                
                            <?php } endforeach ?>
                        </div>   
                    <?php endif ?>
            </div>
        </div> <!-- container -->
    </section>
    <!-- add new project end  -->

<?php get_footer(); ?>