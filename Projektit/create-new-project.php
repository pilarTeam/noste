<?php 

/* Template Name: Create Project */


if ( !is_user_logged_in() ) {
    wp_redirect( site_url() );
    exit;
}


$user = wp_get_current_user();


$project = isset($_GET['pid'])?get_post((int) $_GET['pid']):false;
$is_update = isset($_GET['pid']);
if (is_wp_error($project)) {$project = false;}
// else {setup_postdata($project);}
$project_id = ($project)?$project->ID:0;
// print_r($project);



if (
    // Kamrul
    (isset($user->roles) && !empty($user->roles) && !array_intersect(['editor', 'administrator'], $user->roles))
            ||
    // Remal
    ($is_update && $project == false)
) {
    wp_redirect( site_url() );
    exit;	
}

$pm_users = get_users([ 
    'role__in'  => ['um_project-manager'],
    'fields'    => 'IDs'
]);

$sub_users = get_users([ 
    'role__in'  => ['subscriber'],
    'fields'    => 'IDs'
]);

$projects_list = get_posts([
    'post_type' => 'projektitiedot',
    'numberposts' => -1,
    'fields' => 'ids'
]);


get_header( 'noste' );

?>

    <section class="pt-5">
        <div class="container px-4">
            <h1 class="text-[26px] font-medium text-black">Luo uusi projekti</h1>

            <hr class="border-b border-solid border-[#E1E1EA] my-5">

        </div>
    </section>

    <!-- add new project start  -->
    <section class="pt-10 pb-20" id="<?php echo esc_attr(($project)?'create-project':'create-project'); ?>">
        <div class="container px-4">
            <div class="mx-auto max-w-[700px]">
                <h2 class="text-2xl text-black font-medium">Projektitiedot</h2>
                <p class="text-base text-offwhite mt-3">Lisää projektitiedot ja määritä projektihenkilöt.</p>

                <hr class="border-b border-solid border-[#E1E1EA] my-10">

                <div>
                    <form action="<?php echo esc_url('/create-new-project/'); ?>" method="post">
                        <?php
                            wp_nonce_field('create_project_validation', 'create_project_nonce_field');
                        ?>
                        <?php if ($project) : ?>
                            <input type="hidden" name="to_update_id" value="<?php echo esc_attr($project_id); ?>">
                        <?php endif; ?>
                        <div>
                            <label for="project_name" class="text-black font-medium block mb-2">Projektin nimi</label>
                            <input type="text" class="w-full border border-solid border-[#E1E1EA] rounded-lg py-3 text-offwhite" name="project_name" id="project_name" placeholder="Projektin nimi" value="<?php echo esc_attr(($project)?get_the_title($project):''); ?>" required>
                        </div>

                        <div class="flex justify-between gap-5 mt-5 flex-col lg:flex-row">
                            <div class="flex-1 w-full">
                                <label for="projektinumero" class="text-black font-medium block mb-2">Projektinumero</label>
                                <input type="text" class="w-full border border-solid border-[#E1E1EA] rounded-lg py-3 text-offwhite" name="projektinumero" id="projektinumero" placeholder="Projektinumero" value="<?php echo esc_attr(($project)?get_field('projektinumero', $project_id):''); ?>" required>
                            </div>

                            <div class="flex-1 w-full">
                                <label for="calendar" class="text-black font-medium block mb-2">Luontipäivämäärä</label>
                                <div class="relative w-full border border-solid border-[#E1E1EA] rounded-lg py-2 text-offwhite cursor-pointer">
                                    <input type="text" class="bg-transparent w-full h-full" name="luontipaivamaara" id="calendar" placeholder="Luontipäivämäärä" value="<?php echo esc_attr(($project)?get_field('luontipaivamaara', $project_id):''); ?>" required>
                                    
                                    <span class="absolute top-[10px] right-[10px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 300 300">
                                            <image id="icons8-planner-100" width="300" height="300" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAAC3klEQVR4nO2dwW4TMRCGfQUJHgDOnPuI8UQ9sKpHop4D6huUA0qfhMIb0B5aUIUEqBwLaFpUVUlKdjfr5Pfm/6S5pLU1nm/tRrZXDaEA0+bNK1F7H9V+itqfh+GfxZTf7evblwGUaeX5Lw4m2bf5gSxGvkIc1LTy/BfwJ2v1YO7jOIAhlee/wLJp/lhEzd8DGLHy/BeYT7rrz7dN7fmPbkBSef6jG5BUnv/oBiSI+U8178WUT2KyLx2+cSyNVQNCjzB4/vnSa+s1bi9D7Rp3QFa5kLvwGreS4vZqGJBULuRfzFoIWX+ZohBrWZ/8daWQVQVdt/26/ZemdP6d21OIUQgSQiFYyOiEJPtR8+acFM5/40L88Kbm7etYOP+NC/FDGz+8afGV72rS2IsAxn7h/DcuxPFE/elZOv3vPjtGlLGJ/LcihDwOhYBBIWBQCBgUAgaFjE0Iw4rWgEIU6yGjEN2+BArREQkZ5C8ZuYdCwKAQMCgEDAoBg0LAoBAwKAQMCgGDQsCgEDAoBAwKAYNCwKAQMCgEDAoBg0LAoBAwKAQMCgGDQsCgEDAoBAwKAYNCwKAQMCgEDAoJIUwOD59LshQ1n8eUf/e9GH3bNtlZ1HzgfVJIXxmaPw1+cz3l06ZpnnXNZ+dniCRLpV4liGoNhXTEl6li73ckO+uaD2eI2s3DIqjqk9ATbztX0BsK6cjQLyCt2x9niFIIFEIhWAiFYCEUgoVQCBZCIVgIhWAhFIKFUAgWQiFYCIVgIRSChVAI9vb75Ojoad++vC2334EPqKLmz13z2fnt96j5oNyJYX5NIT0uOcRkHwucp3/gJYeeeOH8QoIvMeteA/I+fGb0keHs/JKFBoWAQSFgUAgYFAIGhYBBIWBQCBgUAgaF1C5k6H9wz7D/bMXYRQsh+YRFtE09SLOVQqaa96LaNaVYWRkp//Jat1rn/Bfdnmi+pBgbWMZtTWetZRBCCCGhHX8B/zJ71JK/ADsAAAAASUVORK5CYII="/>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <hr class="border-b border-solid border-[#E1E1EA] my-10">

                        <div class="flex justify-between gap-5 mt-5 flex-col lg:flex-row">
                            <div class="flex-1 w-full">
                                <label for="Projektipäällikkö" class="text-black font-medium block mb-2">Projektipäällikkö</label>
                                <div class="dropdown_click w-full border border-solid border-[#E1E1EA] rounded-lg text-offwhite cursor-pointer relative">
                                    <span class="dropdown-label flex items-center justify-between p-3">
                                        <span class="selected-label"><?php
                                            $label = 'Projektipäällikkö';
                                            if ($project) {
                                                $obj = get_field('projektipaallikko', $project_id);
                                                if ($obj && isset($obj['label'])) {
                                                    $label = $obj['label'];
                                                }
                                            }
                                            echo esc_html($label);
                                        ?></span>

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 300 300">
                                            <g id="expand_input_field" transform="translate(-622 -557)">
                                            <rect id="Rectangle_1128" data-name="Rectangle 1128" width="20px" height="20px" transform="translate(622 557)" fill="#fff" opacity="0"/>
                                            <path id="Path_117" data-name="Path 117" d="M46.2,5.365a14.91,14.91,0,0,1,22.908,0l42.716,51.259A14.91,14.91,0,0,1,100.37,81.079H14.938A14.91,14.91,0,0,1,3.484,56.624Z" transform="translate(828.752 742.447) rotate(180)" fill="#818d93"/>
                                            </g>
                                        </svg>
                                    </span>

                                    <div class="hidden dropdown_wrap h-[222px] overflow-y-auto absolute w-full border border-solid border-[#E1E1EA] rounded-lg p-3 text-offwhite mt-3 left-0 top-full z-50 bg-white">

                                    <?php 
                                        if ( !empty($pm_users) ):
                                            $projektipaallikko = get_field('projektipaallikko', $project_id);
                                            if ($projektipaallikko && isset($projektipaallikko['value'])) {
                                                $projektipaallikko = $projektipaallikko['value'];
                                            }
                                            foreach ($pm_users as $user_id): 
                                                um_fetch_user($user_id);
                                    ?>

                                                <label class="flex items-center justify-between my-4 cursor-pointer block">
                                                    <div class="flex items-center gap-3">
                                                        <div class="user_avatar">
                                                            <?php echo um_user( 'profile_photo' ); ?>
                                                            <!-- <img class="h-full w-full rounded-full object-cover hidden" src="./assets/images/logo.png" alt="" /> -->
                                                        </div>                                            
                                                        <span class="name font-medium text-black text-[18px]"><?php echo um_user( 'display_name' ); ?></span>
                                                    </div>

                                                    <span class="border border-solid border-[#E1E1EA] rounded-full px-3 py-1">Valittu</span>

                                                    <input type="radio" class="absolute hidden" name="projektipaallikko" value="<?php echo esc_attr( $user_id ); ?>" <?php echo esc_attr($user_id == $projektipaallikko?'checked':''); ?> required>
                                                </label>

                                            <?php endforeach; 
                                        endif;
                                    ?>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-1 w-full">
                                <label for="valvoja" class="text-black font-medium block mb-2">Valvoja</label>
                                <div class="dropdown_click w-full border border-solid border-[#E1E1EA] rounded-lg text-offwhite cursor-pointer relative">
                                    <span class="dropdown-label flex items-center justify-between p-3">
                                        <span class="selected-label"><?php
                                            $label = 'Valvoja';
                                            if ($is_update) {
                                                $valvoja = get_field('valvoja', $project_id);
                                                $valvoja = isset($valvoja[0])?$valvoja[0]:$valvoja;
                                                if ($valvoja && isset($valvoja['label'])) {
                                                    $label = $valvoja['label'];
                                                }
                                            }
                                            echo esc_html($label);
                                        ?></span>

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 300 300">
                                            <g id="expand_input_field" transform="translate(-622 -557)">
                                            <rect id="Rectangle_1128" data-name="Rectangle 1128" width="20px" height="20px" transform="translate(622 557)" fill="#fff" opacity="0"/>
                                            <path id="Path_117" data-name="Path 117" d="M46.2,5.365a14.91,14.91,0,0,1,22.908,0l42.716,51.259A14.91,1s4.91,0,0,1,100.37,81.079H14.938A14.91,14.91,0,0,1,3.484,56.624Z" transform="translate(828.752 742.447) rotate(180)" fill="#818d93"/>
                                            </g>
                                        </svg>
                                    </span>

                                    <div class="hidden dropdown_wrap h-[222px] overflow-y-auto absolute w-full border border-solid border-[#E1E1EA] rounded-lg p-3 text-offwhite mt-3 left-0 top-full z-50 bg-white">

                                    <?php 
                                        if ( !empty($sub_users) ):
                                            if ($is_update) {
                                                $valvoja = get_field('valvoja', $project_id);
                                                $valvoja = isset($valvoja[0])?$valvoja[0]:$valvoja;
                                                if ($valvoja && isset($valvoja['value'])) {
                                                    $valvoja = $valvoja['value'];
                                                }
                                            }
                                            foreach ($sub_users as $user_id): 
                                                um_fetch_user($user_id);
                                    ?>

                                                <label class="flex items-center justify-between my-4 cursor-pointer block">
                                                    <div class="flex items-center gap-3">
                                                        <div class="user_avatar">
                                                            <?php echo um_user( 'profile_photo' ); ?>
                                                            <!-- <img class="h-full w-full rounded-full object-cover hidden" src="./assets/images/logo.png" alt="" /> -->
                                                        </div>                                            
                                                        <span class="name font-medium text-black text-[18px]"><?php echo um_user( 'display_name' ); ?></span>
                                                    </div>

                                                    <span class="border border-solid border-[#E1E1EA] rounded-full px-3 py-1">Valittu</span>

                                                    <input type="radio" class="absolute hidden" name="valvoja" value="<?php echo esc_attr( $user_id ); ?>" <?php echo esc_attr($user_id == $valvoja?'checked':''); ?> required>
                                                </label>

                                            <?php endforeach; 
                                        endif;
                                    ?>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php if (!$project) : ?>
                            
                        <hr class="border-b border-solid border-[#E1E1EA] my-10">

                        <div>
                            <label for="project_name" class="text-black font-medium block mb-2">Kopioi olemassa olevan projektin tiedot</label>
                            <div class="dropdown_click w-full border border-solid border-[#E1E1EA] rounded-lg text-offwhite cursor-pointer relative">
                                <span class="dropdown-label flex items-center justify-between p-3">
                                    <span class="selected-label">Kopioi projektin</span>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 300 300">
                                        <g id="expand_input_field" transform="translate(-622 -557)">
                                        <rect id="Rectangle_1128" data-name="Rectangle 1128" width="20px" height="20px" transform="translate(622 557)" fill="#fff" opacity="0"/>
                                        <path id="Path_117" data-name="Path 117" d="M46.2,5.365a14.91,14.91,0,0,1,22.908,0l42.716,51.259A14.91,14.91,0,0,1,100.37,81.079H14.938A14.91,14.91,0,0,1,3.484,56.624Z" transform="translate(828.752 742.447) rotate(180)" fill="#818d93"/>
                                        </g>
                                    </svg>
                                </span>

                                <div class="hidden dropdown_wrap h-[222px] overflow-y-auto absolute w-full border border-solid border-[#E1E1EA] rounded-lg p-3 text-offwhite mt-3 left-0 top-full z-50 bg-white">

                                    <?php 
                                        if ( !empty($projects_list) ):
                                            foreach ($projects_list as $project_id): ?>

                                                <label class="flex items-center gap-3 my-4 cursor-pointer block">                 
                                                    <span class="name text-black text-[14px]"><?php echo esc_html( get_the_title( $project_id ) ); ?></span>
                                                    <input type="radio" name="project_id" class="hidden" value="<?php echo esc_attr( $project_id ); ?>">
                                                </label>

                                            <?php endforeach; 
                                        endif;
                                    ?>

                                </div>
                            </div>
                        </div>
                        <?php endif; ?>

                        <div class="flex items-center justify-between mt-10">
                            <a class="flex items-center gap-2 text-[#586B74] px-4 py-2 border border-solid border-[#E1E1EA] rounded-lg" href="<?php echo esc_attr( get_permalink( get_the_ID() ) ); ?>">
                                <svg width="19px" height="19px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>Reload</title> <g id="Page-1" stroke-width="0.4800000000000001" fill="none" fill-rule="evenodd"> <g id="Reload"> <rect id="Rectangle" fill-rule="nonzero" x="0" y="0" width="24" height="24"> </rect> <path d="M4,13 C4,17.4183 7.58172,21 12,21 C16.4183,21 20,17.4183 20,13 C20,8.58172 16.4183,5 12,5 C10.4407,5 8.98566,5.44609 7.75543,6.21762" id="Path" stroke="#586B74" stroke-width="0.4800000000000001" stroke-linecap="round"> </path> <path d="M9.2384,1.89795 L7.49856,5.83917 C7.27552,6.34441 7.50429,6.9348 8.00954,7.15784 L11.9508,8.89768" id="Path" stroke="#586B74" stroke-width="0.4800000000000001" stroke-linecap="round"> </path> </g> </g> </g></svg>
                                Nollaa
                            </a>
                            <button class="bg-accent text-white px-4 py-2 border border-solid border-[#E1E1EA] rounded-lg project-submit-btn">Tallenna Muutokset</button> 
                        </div>
                    </form>
                </div> <!-- add form  -->
            </div>
        </div> <!-- container -->
    </section>

<?php 

get_footer();