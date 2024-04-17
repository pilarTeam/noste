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
        'numberposts' => -5,
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
                    $status = !empty(get_field('projektin_tila', $id)) ? get_field('projektin_tila', $id) : '';
                    $projektinumero = !empty(get_field('projektinumero', $id)) ? get_field('projektinumero', $id) : '';
                    $projektipaallikko = !empty(get_field('projektipaallikko', $id)) ? get_field('projektipaallikko', $id)['label'] : '';
                    $valvoja = !empty(get_field('valvoja', $id)) ? implode(', ', array_column(get_field('valvoja', $id), 'label')) : '';
                    $projektin_valmistelu = !empty(get_field('projektin_valmistelu', $id)) ? get_field('projektin_valmistelu', $id) : '';
                    ?>

                    <!-- card_item -->
                    <div class="card_item <?php echo esc_attr( strtolower($status) ); ?>">

                        <div class="border-b border-black2 p-3 flex items-center justify-between project-head">
                            <div class="project-comname">
                                <span class="font-bold text-text-base">Tilaaja (Yritys)</span>
                            </div>
                            <div class="status-wrap">
                                <span class="status <?php echo esc_attr( strtolower($status) ); ?>"><?php echo esc_html( $status ); ?></span>                                
                            </div>
                        </div> <!-- card_header -->

                        <div class="project-details">

                            <div class="border-b border-black2 pt-5 pb-2 px-3 project-details-wrap">
                                <a href="<?php echo esc_attr( get_the_permalink( $id ) ); ?>" class="single_permalink">
                                    <div class="project-title">
                                        <h2 class="text-lg font-bold py-3 title"><?php echo esc_html( get_the_title( $id ) ); ?></h2>
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
                                </a>
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
                                        <span>Kiinteistön nimi</span>
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
                                        <span>Kiinteistön osoite</span>
                                    </li>
                                </ul>
                            </div> <!-- body_bottom -->

                        </div> <!-- card_body -->

                        <div class="project-footer">
                            <div class="footer_top flex items-center gap-2 px-3 py-2">
                                <span class="status_name projektin_valmistelu"><?php echo esc_html( $projektin_valmistelu ); ?></span>
                            </div> <!-- footer_top -->

                            <div class="bg-[#F2F4F7] text-right px-3 py-4 project-edit-osoite">
                                <a href="#" class="btn bg-white border border-black2">
                                    <i class="um-faicon-pencil-square-o"></i>
                                    <span>Muokkaa projektia</span>
                                </a>
                            </div> <!-- footer_bottom -->
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