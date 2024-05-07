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


if ( !array_intersect( [ 'editor', 'administrator' , 'um_project-manager', 'subscriber'], $user->roles ) ) {
    wp_redirect( site_url() );
    exit;
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
}

if ( array_intersect( [ 'subscriber' ], $user->roles ) ) {
    $args = [
        'post_type' => 'projektitiedot',
        'numberposts' => -5,
        'fields' => 'ids',
        'meta_query' => array(
            array(
                'key' => 'valvoja',
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
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                                    <defs>
                                        <pattern id="pattern003" preserveAspectRatio="xMidYMid slice" width="100%" height="100%" viewBox="0 0 128 128">
                                            <image width="128" height="128" xlink:href="data:image/png;base64,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" />
                                        </pattern>
                                    </defs>
                                    <rect id="icons8-search-128" width="20" height="20" fill="url(#pattern003)" />
                                </svg>
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
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                            <defs>
                                <pattern id="pattern001" preserveAspectRatio="xMidYMid slice" width="100%" height="100%" viewBox="0 0 100 100">
                                    <image width="100" height="100" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAADAklEQVR4nO3csVITURjF8Q1F7knoVVTYi5MZmexVXwqVRh9OHSvFTqTSV1HocWIjWVLk7nBycjLfmdn2z29JFprkNk0sFovFYrFYLBaLbe9GKZe3qS2XyN01crnZ7NVdp9xdpFzeNfP5eAe9629y+Pwxcjnf/E2VlVfK5efCtCve2u0hl2/qm8Ld63zxFOyAt26pLWdbcDM3q995L964e4e8IJfL4e7T/nF52Gx4+89ePkBbPizfYHfh7q0e2nJ1Ozpt548a0aZHJwdLv+y2/HH3Vq//2N2LlOiBmVcfJHtg5tUHyR6YefVBsgdmXn2Q7IGZVx8ke2Dm1QfJHph59UGyB2ZefZDsgZlXHyR7YObVB8kemHn1QbIHZl59kOyBmVcfJHtg5tUHyR6YefVBsgdmXn2Q7IGZVx8ke2Dm1QfJHph59UGyB2ZefZDsgZlXHyR7YObVB8kemHn1QbIHZl59kOyBmVcfJHtg5tUHyR6YefVBsgdm3vpg78PLik+S976I8/8G2/K7MfdWL7XlRy/6UfGJ8um/T5J3n29bUu6+u3urN87lff+x25Yr5flrd2/9ZrOEtvxS3wzuXN2XlV8Rc/MO2eTpqyfI5es23dz06ORgV7xDN1o8cou/g/1/nBu52nK1+NnpuDtd853m5o3FYrFYbGNzOztkZOZdf25nh0zMvLVzOztkz8xbN7ezQ5KZd8gLYnV2SDLzVs/t7BCYeavXf+zuRUr0wMyrD5I9MPPqg2QPzLz6INkDM68+SPbAzKsPkj0w8+qDZA/MvPog2QMzrz5I9sDMqw+SPTDz6oNkD8y8+iDZAzOvPkj2wMyrD5I9MPPqg2QPzLz6INkDM68+SPbAzKsPkj0w8+qDZA/MvPog2QMzrz5I9sDMqw+SPTDz6oNkD8y8+iDZAzOvPkj2wMyrD5I9MPPqg2QPzLz6INkDM2990OzsEJh5q+d2dkgy81bP7eyQsZm3fm5nh8zMvEPmdnbIxMw7dG5nh4zMvLFYLBaLxWKxWCzWKPYXCuVwFl1xSZsAAAAASUVORK5CYII=" />
                                </pattern>
                            </defs>
                            <rect id="icons8-grid-100" width="20" height="20" fill="url(#pattern001)" />
                        </svg>
                    </button>
    
                    <button class="btn project-layout" data-layout="list-view-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                            <defs>
                                <pattern id="pattern002" preserveAspectRatio="xMidYMid slice" width="100%" height="100%" viewBox="0 0 100 100">
                                    <image width="100" height="100" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAACB0lEQVR4nO3bT07CQByG4W5ox4V4Ap2JaYJ0xlXvofFe/o2nUY8BgudAd5DUTGsUCiTtAuYnfZ9kNk0DTb9Mp53kiyIAAAAACKx3OrSJcQ/KuLEy9qsabpwYex+fZVno6+uOLIuVts/K2IUyrtg87EJp+xTleS/05XYhjLftQdSGtq+EskPVzGgYxm8o7nGX19TpNWPDY+o9NtlVNBgc+xGby2tl3KQ2S+axtsPQ139wfhbwlTCiNO2vnXienyhjp8vnJsbeBbnoQ+YDWL7JfjZsO/dIu5vaLBk1+P12j0LT7REp7WYrB/xjaps07dfWkRmBOAJRBz1Dyg/AvwM8slzYQPwXeO3gxC/gGxd1bT+Wz02MvW2zXqEBvx2y/tprp34BL9+20rRfLua1MKrXXnfR5D/Qkt8OaTu1/Mxq+z9oKs97fjukcSDavbB1spdQ3KN/FG0Pws7LmcHm4n7XFP8F7j/6lHaf1bAjv4CzVQIAAAAAAAAAAAAAe0WDSgoaVILQoJKFBpUgNKiEoUElDA0qJ6wfQoOqCB0CgRjJgdCgKkQFQoNKGBpUAtGgkoYGlUA0qGSiQQUAAAAAAAAAAAAAYtCgkoIGlSA0qGShQSUIDSphaFAJQ4PKBa8gUNgx4W88gZj/EggNqkJUIDSohKFBJRANKmloUAlEg0omGlQAAAAAEHXKNx+rMm1+KmuxAAAAAElFTkSuQmCC" />
                                </pattern>
                            </defs>
                            <rect id="icons8-list-100_1_" data-name="icons8-list-100 (1)" width="20" height="20" fill="url(#pattern002)" />
                        </svg>
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
                            <div class="project-comname">
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
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="19" height="19" viewBox="0 0 19 19">
                                                <defs>
                                                    <pattern id="pattern4" preserveAspectRatio="xMidYMid slice" width="100%" height="100%" viewBox="0 0 96 96">
                                                        <image width="96" height="96" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAAFRElEQVR4nO2dTYhcRRDH289o/IqfhyCKgiAS9aASMd70akBQ9CAqCIKImJtgxPUQRBQDw8bp7mziTNVkc3iomel6LsoiC6IENEZFiSYSolH8jPGLiF9xpGZnh7Dubvb1m5nu97Z+0JcNO6+6/t2vq6prskoJgiAIgiAIJcJA8/oq0qrQdiw5LKarDRIZpLZBOqrRJS/UW9eEtqv0WExvYsdrcP92nd8b3Z+RbbgbQttZOiy4m49Z8ccdGt1ktdG6MbTd5XA80BuLdfwc4y3TcLeEnkfhsJDeaoB25nD8/4VAd1voeUVNu90+gZ2kgd7po+NnnxNv8zP4WaHnGw0jIyMndh3/3qAcP8cZ8b7F9M4lLUSSJCeZenqPQbfHy5HgfjFIGwzQRo10xFOM3bpOty8pIazddYpGutcAfeq3eulXDe6ZsbHXzut95ri7QAM9pcH97PmZH7NNvChU+R3v9nmu1kPs5Fptx4r5njEKr5zfEQLpJ89dtd9g+uDI1NTJqiwkSXIqT8ogHfQ7OOkHdqpNJs9Z7DMrjYmzDaaPGXCHPcU+oBv0aKUysUwVFTZ+2vHuK8+D8nt2PDvT14YtW5pnsRAa3Y+eO+JzFqJWmzpNFQXE189gozW4r/0mTd+x06x1y/tl06YkOZNtMui+8dyF37JNzyfJ6SpWeLVNO56NjXOS2IfFkXdX9p2871uN9MWwt3nu16PHudR3OPQz4J7msNDz/bpfY+sBjo5CzYFFN5A+osF96TUHpEMG3RNDF8I06HED9Jun4/dZoPtiCvV4R1ikh3g3es7psEH38NAM9speIf4YO1euAu7NKAXQBcwyvbL16AQA91HRHD9XoZCLdhrpkyIJ8GHZKo0j3YotF++iF2DTtvRSVVKq9fQ6ESAgIkBgRIDAiACBiV2AzoVJoWvoBRXgoAFax5XGhRKbKtLdnO5zaVgVlMgEcHs0tu5fqJjGohigdccWu7rXhRu2bp24UBWMaATQtdYaTk7m+3e+MNfgnuSyrZm/RHFEA1UsuEtUQYhGgHkNxJcvytqdoNH9ZZBQN5pXqciJVoDN2LqMV7MB+j1zFRF742inuxnT1SpSohPAbnv1al69BtzfORzfLkovZzQCzLSLz9Wn3+exO6aKanABsvbp920AfcaXOSGvL4MJ0OnhBHcXN7TmdaCu0x0a3bs5xDjAV3+h2kOGKgB3tOXp4ewa9QF/xuxryLyvsJmmrep4eq4qmwAzTUw5OgV6h+jxLmU00rWdEBToH/9GXaqMbm+uVEUXoNff02m18A8jfb6bVR1PL88Xxro/OkKO0xW5nBBCAM5Eucfet81EA/2pgV60NXdl3gmObm+uNEDP+fYadZI6cMDhsSqCABrpWe8YngUD2ri5MXFxvydaq+1YocGtn+4T9VkUnbOlGb0A/Eu+bXnci68GTKUysYwPcY1ur4+d5RKg26q9UNl54N8jw8WHsOURIJIkKGsyWHwBgHZWG7Q21v4eXWutWUiIwgvAD1ORY61bLgKIAG3ZASivIHkFgZwBbTmE5RDOhkRB2ZAwdBYShgbGSh4gAhjJhElKEfIKIqkFGSnGySGssiJ5QDYkD5iFhKGBsZIHiABG8gCSPEBeQSR5gJE8QA5hlRXJA7IheUCOMJT/k0Huws41GrRW+oI8BdDgbNb+0kxDLuVJBBg2VnZAWKwIIAIYOQOonIcw/30XjntjHnq6RX2xAqw36HYNamigsf4KUPChB/D9gL4jAgRGBAiMCBAYESAwIkBgpv8MoJss4zBAL4X2ryAIgiAIglrS/AehEd5CrIShZAAAAABJRU5ErkJggg==" />
                                                    </pattern>
                                                </defs>
                                                <rect id="icons8-real-estate-96_1_" data-name="icons8-real-estate-96 (1)" width="19" height="19" fill="url(#pattern4)" />
                                            </svg>
                                        </span>
                                        <span><?php echo esc_html( $kiinteistonimi_K1 ); ?></span>
                                    </li>

                                    <li class="text-[#344054] flex item-center gap-2">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="19" height="19" viewBox="0 0 19 19">
                                                <defs>
                                                    <pattern id="pattern8" preserveAspectRatio="xMidYMid slice" width="100%" height="100%" viewBox="0 0 96 96">
                                                        <image width="96" height="96" xlink:href="data:image/png;base64,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" />
                                                    </pattern>
                                                </defs>
                                                <rect id="icons8-location-96_1_" data-name="icons8-location-96 (1)" width="19" height="19" fill="url(#pattern8)" />
                                            </svg>
                                        </span>
                                        <span><?php echo esc_html( $kiinteiston_katusoite_k2 ); ?></span>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0.00 0.00 300.00 300.00" style="width: 21px; padding-right: 5px;"> <g stroke-width="2.20" fill="none" stroke-linecap="butt"> <path stroke="#5e7078" stroke-opacity="0.804" vector-effect="non-scaling-stroke" d="M 21.67 53.31 C 23.47 54.61 25.50 55.13 27.75 54.86 C 27.86 54.85 27.92 54.90 27.93 55.02 L 27.93 55.03 C 27.94 55.14 27.88 55.21 27.76 55.22 C 20.53 56.04 13.28 56.22 6.01 55.76"/> <path stroke="#5e6e75" stroke-opacity="0.537" vector-effect="non-scaling-stroke" d="M 6.01 55.76 L 6.00 293.90"/> <path stroke="#5e7078" stroke-opacity="0.804" vector-effect="non-scaling-stroke" d="M 162.51 53.29 C 162.58 53.88 162.56 54.38 162.46 54.81 C 162.37 55.19 162.14 55.45 161.78 55.59 L 160.25 56.18 C 159.94 56.30 159.76 56.53 159.73 56.87 C 159.59 58.31 158.68 59.30 157.00 59.84 C 156.77 59.91 156.61 60.06 156.50 60.27 C 156.19 60.90 156.13 61.53 156.32 62.17"/> <path stroke="#5e7078" stroke-opacity="0.804" vector-effect="non-scaling-stroke" d="M 30.69 78.06 L 28.71 78.13 C 28.38 78.14 28.21 78.31 28.21 78.65 L 28.23 268.52 C 28.23 268.89 28.41 269.07 28.78 269.08 C 29.43 269.09 30.09 268.98 30.78 268.73"/> <path stroke="#5e7078" stroke-opacity="0.804" vector-effect="non-scaling-stroke" d="M 31.08 269.04 C 30.80 269.99 30.78 270.81 31.02 271.51 C 31.14 271.83 31.37 271.99 31.71 271.99 L 221.55 271.99 C 221.82 271.99 222.04 271.78 222.04 271.51 L 222.04 269.04"/> <path stroke="#5e7078" stroke-opacity="0.804" vector-effect="non-scaling-stroke" d="M 246.66 270.28 L 245.82 270.07 C 245.41 269.97 245.25 269.71 245.32 269.29 C 245.42 268.74 245.42 268.18 245.31 267.61 C 245.30 267.52 245.24 267.48 245.15 267.47 C 245.03 267.47 244.97 267.52 244.96 267.63 C 244.39 276.36 244.14 285.14 244.21 293.98"/> <path stroke="#5e6e75" stroke-opacity="0.537" vector-effect="non-scaling-stroke" d="M 244.21 293.98 L 6.25 293.98"/> </g> <path fill="#5f6e75" d="M 171.84 77.70 C 172.09 77.43 172.34 77.16 172.61 76.89 C 174.19 75.28 175.86 73.65 177.61 72.00 C 179.29 70.41 180.96 68.82 182.63 67.21 C 190.48 59.61 198.13 51.19 205.68 44.20 C 207.60 42.42 209.47 40.54 211.28 38.55 C 213.71 35.89 216.41 33.60 218.77 30.93 C 223.75 25.32 229.74 19.74 236.74 14.20 C 239.22 12.24 241.69 10.58 244.15 9.23 C 252.94 4.40 266.96 5.12 275.09 10.85 C 278.10 12.98 281.39 15.72 284.94 19.05 C 286.69 20.70 288.66 23.14 289.73 25.26 C 295.52 36.68 295.28 48.18 289.01 59.75 C 287.86 61.88 286.70 63.55 285.54 64.76 C 272.01 78.79 258.95 91.91 246.36 104.12 C 245.71 104.75 245.04 105.42 244.35 106.11 C 228.06 122.62 210.65 140.15 192.10 158.70 C 187.27 163.53 182.54 168.23 177.91 172.81 C 173.03 177.64 168.26 182.56 163.59 187.59 C 161.65 189.68 154.99 190.61 152.35 191.05 C 147.53 191.86 142.89 193.40 137.97 193.95 C 132.51 194.56 127.36 196.14 121.96 196.86 C 118.25 197.36 114.33 198.10 110.22 199.09 C 107.54 199.74 104.11 200.22 99.94 200.53 C 99.51 200.56 99.32 200.37 99.36 199.94 C 99.85 195.02 100.65 190.46 101.74 186.25 C 103.24 180.46 103.31 175.07 104.99 169.20 C 106.09 165.40 105.79 161.59 106.76 157.86 C 107.72 154.21 108.51 150.55 109.12 146.88 C 109.90 142.24 111.92 138.11 115.17 134.50 C 119.11 130.13 123.09 126.06 127.10 122.30 C 134.40 115.47 141.18 108.50 148.12 101.50 C 149.18 100.43 153.20 96.53 160.18 89.81 C 163.48 86.64 167.37 82.60 171.84 77.70 Z M 184.53 132.14 C 190.82 125.99 197.85 118.99 205.62 111.14 C 209.77 106.93 214.46 102.19 219.68 96.92 C 227.27 89.25 234.76 81.81 242.14 74.60 C 249.21 67.68 255.56 61.03 262.37 53.99 C 263.43 52.90 264.56 51.80 265.76 50.70 C 268.14 48.51 270.84 44.33 270.07 40.83 C 269.21 36.92 267.34 33.91 264.46 31.81 C 262.30 30.23 260.24 29.50 258.29 29.61 C 255.70 29.76 253.45 30.75 251.54 32.59 C 237.36 46.24 223.45 60.03 209.82 73.98 C 207.59 76.27 203.90 79.52 201.09 82.59 C 193.79 90.56 184.17 99.29 175.91 107.74 C 166.27 117.61 155.94 127.36 146.43 137.26 C 142.41 141.44 138.54 145.45 134.83 149.30 C 132.33 151.89 131.19 157.61 130.97 161.21 C 130.79 164.10 130.02 166.85 129.59 169.74 C 129.50 170.34 130.08 170.83 130.66 170.64 C 133.57 169.69 136.40 169.16 139.17 169.05 C 143.75 168.85 149.57 167.17 152.71 163.51 C 153.74 162.32 154.81 161.22 155.93 160.22 C 165.92 151.32 175.42 141.06 184.53 132.14 Z"/> <path fill="#5c727e" fill-opacity="0.604" d="M 21.67 53.31 C 23.47 54.61 25.50 55.13 27.75 54.86 C 27.86 54.85 27.92 54.90 27.93 55.02 L 27.93 55.03 C 27.94 55.14 27.88 55.21 27.76 55.22 C 20.53 56.04 13.28 56.22 6.01 55.76 L 5.99 53.15 L 21.67 53.31 Z"/> <path fill="#576d73" fill-opacity="0.075" d="M 5.99 53.15 L 6.01 55.76 L 6.00 293.90 C 5.15 293.97 4.40 293.92 3.77 293.73 C 3.44 293.63 3.26 293.41 3.22 293.08 C 3.12 292.19 3.07 291.30 3.07 290.41 C 3.04 211.92 3.04 133.23 3.08 54.36 C 3.08 53.73 3.58 53.21 4.21 53.20 L 5.99 53.15 Z"/> <path fill="#5f6e75" d="M 21.67 53.31 L 162.51 53.29 C 162.58 53.88 162.56 54.38 162.46 54.81 C 162.37 55.19 162.14 55.45 161.78 55.59 L 160.25 56.18 C 159.94 56.30 159.76 56.53 159.73 56.87 C 159.59 58.31 158.68 59.30 157.00 59.84 C 156.77 59.91 156.61 60.06 156.50 60.27 C 156.19 60.90 156.13 61.53 156.32 62.17 L 142.38 76.21 C 141.83 76.77 141.11 77.14 140.33 77.28 C 139.05 77.50 137.73 77.68 136.36 77.83 C 134.70 78.02 133.19 78.11 131.83 78.10 C 98.12 77.84 64.41 77.83 30.69 78.06 L 28.71 78.13 C 28.38 78.14 28.21 78.31 28.21 78.65 L 28.23 268.52 C 28.23 268.89 28.41 269.07 28.78 269.08 C 29.43 269.09 30.09 268.98 30.78 268.73 C 31.03 269.15 31.13 269.25 31.08 269.04 C 30.80 269.99 30.78 270.81 31.02 271.51 C 31.14 271.83 31.37 271.99 31.71 271.99 L 221.55 271.99 C 221.82 271.99 222.04 271.78 222.04 271.51 L 222.04 269.04 C 222.09 217.65 222.08 184.22 222.03 168.75 C 222.02 166.60 222.08 164.41 222.21 162.18 C 222.31 160.49 222.87 158.99 223.88 157.66 C 225.01 156.19 226.10 154.94 227.16 153.91 C 230.27 150.90 233.46 147.98 236.74 145.17 C 240.07 142.32 242.68 139.29 245.75 136.40 C 246.07 136.09 246.23 136.16 246.23 136.61 L 246.66 270.28 L 245.82 270.07 C 245.41 269.97 245.25 269.71 245.32 269.29 C 245.42 268.74 245.42 268.18 245.31 267.61 C 245.30 267.52 245.24 267.48 245.15 267.47 C 245.03 267.47 244.97 267.52 244.96 267.63 C 244.39 276.36 244.14 285.14 244.21 293.98 L 6.25 293.98 C 6.16 293.95 6.08 293.93 6.00 293.90 L 6.01 55.76 C 13.28 56.22 20.53 56.04 27.76 55.22 C 27.88 55.21 27.94 55.14 27.93 55.03 L 27.93 55.02 C 27.92 54.90 27.86 54.85 27.75 54.86 C 25.50 55.13 23.47 54.61 21.67 53.31 Z"/> <path fill="#5c727e" fill-opacity="0.604" d="M 162.51 53.29 C 163.40 53.02 164.23 53.03 164.99 53.33 C 165.32 53.46 165.36 53.64 165.10 53.89 L 156.32 62.17 C 156.13 61.53 156.19 60.90 156.50 60.27 C 156.61 60.06 156.77 59.91 157.00 59.84 C 158.68 59.30 159.59 58.31 159.73 56.87 C 159.76 56.53 159.94 56.30 160.25 56.18 L 161.78 55.59 C 162.14 55.45 162.37 55.19 162.46 54.81 C 162.56 54.38 162.58 53.88 162.51 53.29 Z"/> <path fill="#5c727e" fill-opacity="0.604" d="M 30.69 78.06 C 30.72 78.36 30.76 78.60 30.79 78.79 C 30.89 79.36 30.94 79.68 30.94 79.76 C 30.86 142.51 30.84 205.25 30.89 268.00 C 30.89 268.29 30.85 268.54 30.78 268.73 C 30.09 268.98 29.43 269.09 28.78 269.08 C 28.41 269.07 28.23 268.89 28.23 268.52 L 28.21 78.65 C 28.21 78.31 28.38 78.14 28.71 78.13 L 30.69 78.06 Z"/> <path fill="#5c727e" fill-opacity="0.604" d="M 246.66 270.28 L 246.80 294.12 C 246.08 293.89 245.22 293.85 244.21 293.98 C 244.14 285.14 244.39 276.36 244.96 267.63 C 244.97 267.52 245.03 267.47 245.15 267.47 C 245.24 267.48 245.30 267.52 245.31 267.61 C 245.42 268.18 245.42 268.74 245.32 269.29 C 245.25 269.71 245.41 269.97 245.82 270.07 L 246.66 270.28 Z"/> <path fill="#5c727e" fill-opacity="0.604" d="M 31.08 269.04 L 222.04 269.04 L 222.04 271.51 C 222.04 271.78 221.82 271.99 221.55 271.99 L 31.71 271.99 C 31.37 271.99 31.14 271.83 31.02 271.51 C 30.78 270.81 30.80 269.99 31.08 269.04 Z"/> <path fill="#576d73" fill-opacity="0.075" d="M 6.25 293.98 L 244.21 293.98 C 245.22 293.85 246.08 293.89 246.80 294.12 C 246.95 296.07 245.43 297.05 242.25 297.05 C 163.84 297.06 85.36 297.07 6.83 297.06 C 6.46 297.06 6.25 296.88 6.18 296.52 C 6.06 295.79 6.08 294.95 6.25 293.98 Z"/> </svg>
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