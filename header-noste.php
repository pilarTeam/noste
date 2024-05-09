<?php 

if ( !is_user_logged_in() ) {
    wp_redirect( site_url() );
    exit;
}


$user = wp_get_current_user();

if ( !isset($user->roles) && empty($user->roles) ) {
    wp_redirect( site_url() );
    exit;   
}

?>


<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

<?php wp_head(); 
date_default_timezone_set("Asia/Dhaka");
?>

</head>
<body <?php body_class( 'font-roboto bg-bodyBg' ); ?>>

    <!-- header part start  -->
    <header class="lg:sticky top-0 z-10">
        <!-- Top Header -->
        <div class="py-3 bg-white border-b border-line">
            <div class="container px-4">
                <!-- <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 items-center justify-center md:justify-normal"> -->
                <div class="flex items-center justify-between gap-4">
                    <!-- site_logo -->
                    <div class="site_logo order-1">
                        <?php the_custom_logo(); ?>
                    </div><!-- site_logo -->
    
                   <!-- Tab Fuild -->
                   <div class="noste-header-middle order-3 lg:order-2 w-[50%]">
                    <?php echo noste_header_middle(); ?>                       
                   </div>
 
    
                    <!-- User Profile -->
                    <div class="flex justify-end order-2 lg:order-3">
                        <div class="flex items-center gap-5">
                            <div class="notification-wrapper flex items-center gap-5">
                                <?php 
                                if ( array_intersect(['um_valvoja', 'administrator'], $user->roles) ) {
                                    echo noste_header_notification(); 
                                }
                                ?>  
                            </div>
    
                            <div class="border-l border-line pl-4 relative cursor-pointer">
                                <div class="switch-toggle flex items-center gap-3" data-toggle="mini-profile">
                                    <div class="user_avatar">
                                        <?php $profile_photo = um_get_user_avatar_data( um_user( 'ID' ) ); ?>
                                        <img class="h-full w-full rounded-full object-cover" src="<?php echo $profile_photo['url'] ?? ''; ?>" alt="">
                                    </div> <!-- user_avatar -->
                                    <div class="hidden md:block">
                                        <p class="text-base text-black font-medium"><?php echo um_user('display_name'); ?></p>
                                        <p class="text-sm text-[#818D93] font-normal"><?php echo noste_get_roles( UM()->user()->get_role() ); ?></p>
                                    </div>
                                    <button>
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="12" height="12" viewBox="0 0 12 12">
                                            <defs>
                                                <pattern id="pattern6" preserveAspectRatio="xMidYMid slice" width="100%" height="100%" viewBox="0 0 96 96">
                                                    <image width="96" height="96" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAABmElEQVR4nO3ZwUrDQBSF4Ww8DWZvcWPSrgJ36Puv9CGk6BOIPoVSodBFKU0TeufO/B/MPj1/BgJtGgAAAAAAAAAAAAAAAAAAAAAAAOSj2+6e2iG9Pmx3qSmM+jS2Q3p7fBmfm2zH7+29HdLvqrefkiKoT+NqSF+H39b29pldhNPxj6eUCDod/3hyinBu/FIi6Nz4OUW4NH70CLo0fg4Rrhk/agRdM75nhCnjR4ugKeN7RLhl/CgRdMv494wwZ/zcI2jO+PeKsESAHCNoifH/j32EuAU5RVCk8UuLoIjjlxJBkcePHkEljB81gkoaP1oElTh+lAgqefzcI6iG8XONoJrGzy2Cahw/lwiqeXzvCGJ8vwhifL+bIMb3iyDG94sgxveLIMafrtukdTuk/QIRvg9n/qdm2h+eqanJUjehrfk7P34Eq3d8/wjG+H4RGN8xgvHm+0UwxveLYIzvF8EY3y+CMb5fBGN8vwjG+H4RjPH9Ihjj+0UwxveLYIzvF8EY3y+CMb6XbpPW1f2TBQAAAAAAAAAAgGaSP+MgIpmI76GJAAAAAElFTkSuQmCC" />
                                                </pattern>
                                            </defs>
                                            <rect id="icons8-expand-arrow-96" width="12" height="12" fill="url(#pattern6)" />
                                        </svg>
                                    </button>                                                                        
                                </div>

                                    <div class="w-[15rem] border-t bg-[#08202C] absolute right-0 top-full z-[10] hidden" id="mini-profile">
                                        <ul class="bg-transparent p-0">
                                            <li class="text-center border-b border-[#283B44] py-4 px-2">
                                                <div class="user_avatar mx-auto mb-2">
                                                    <div class="flex items-center justify-center mx-auto" id="avatarContainer">
                                                        <?php $profile_photo = um_get_user_avatar_data( um_user( 'ID' ) ); ?>
                                                        <img class="h-full w-full rounded-full object-cover" src="<?php echo $profile_photo['url'] ?? ''; ?>" alt="">
                                                        <!-- <label class="absolute -bottom-1 -right-2 cursor-pointer">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="18" viewBox="0 0 18 18">
                                                                <defs>
                                                                    <pattern id="pattern" width="1" height="1" viewBox="-4.444 -4.444 26.887 26.887">
                                                                        <image preserveAspectRatio="xMidYMid slice" width="18" height="18" xlink:href="data:image/png;base64,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" />
                                                                    </pattern>
                                                                </defs>
                                                                <rect id="icons8-photo-100" width="18" height="18" rx="9" fill="url(#pattern)" />
                                                            </svg>
    
                                                            <input type="file" id="FileUpload1" class="hidden" />
                                                        </label> -->
                                                    </div>
                                                </div> <!-- user_avatar -->
    
                                                <p class="text-white"><?php echo um_user('display_name'); ?></p>
                                                <p class="text-offwhite text-sm"><?php echo um_user('user_email'); ?></p>
                                            </li>
<!--                                             <li class="border-b border-[#283B44] inline-block w-full p-2">
                                                <a href="#!" class="flex items-center gap-5 text-offwhite">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24">
                                                        <defs>
                                                            <pattern id="pattern" preserveAspectRatio="xMidYMid slice" width="100%" height="100%" viewBox="0 0 100 100">
                                                                <image width="100" height="100" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAADAElEQVR4nO2c3W4TMRCFzQW8Az8vxAPAM4Dg6WhfoYAgcLWKp5WdUsAO4gapcL9owgRoUAUbvJmxfY5kqTdxvp5zdneU1nEOgiCoDy0W481xHG+Aw4AftFo/9CF/oZguabV+oALhwPHLiJA+UczjZoWU1QIJ4PhhxDYMWWqBRHDACIvFUAcQgQNG2CyGOoAIHDDCZjHUAUTggBE2i6EOIAIHjLBZDHUAEThghM1iqAOIwAEjdIoxDMOtZUxPfUgvKaRvu2/418WvCekFxfUT3svNJOrhSvUXF3d8zG8nh3D9erN89/m2m0HUeiDc5sJhbNeC/8TpCotaD4RvUzOEsV2PXWFR64FsnhlXngX5Gd/Cpu5zevr+LoV0tAP63BUWtR4IxfT1943Z2H33Ojv7cO8qaLp0hUXtB1J247kNowMFojZ1IhBjUycCMTZ1IhBjU+fmPxHxULczdf4JkI72mbR4wvIxHdc+9pL21MlTwFyXqA/50b6/TCtT3OT9+CHGU0D5MNKrGj86Ie1AWDyS8RRQLpD0utYPF8lCICxuM08BFPPJ7n30H0Pg15zwbWqOK6O7QGoRzf9Qr2rqbD4QX8vUaeXSo9mvkEqmzl4CGWqZOnsJpJqps6dAqpg6ewvEvKwYQUY41GXFCAIHjDBZDHUAEThghM1iqAOIwAEjbBZDHUAEDhhhsxjqACJwwAibxVAHEIEDRtgshjqACBwwwmYx1AFE4IARNouhDiACB4ywWYxDAQz4Rgk7gXh8o4SdQAbts30T1fwta6l9tm+img/Ea5/tm6jmAyHts30T1UEguej+tfGaAyAEgkD+R7hCGr+izQFQZWf7mg/E13K2r5dAqJazfb0EMtRytq+XQKo529dTIFWc7estkFqk7oc6gDGp+6EOIAIHjLBZDHUAEThghM1iqAOIwAEjbBZDHUAEDhhhsxjqACJwwAibxVAHEIEDRtgshjqACBwwwmYxKKTz7Zv7kFYHBxCB46cR+b6P+SMv/tkpicABQRAEQY71HbsT/O3PnJesAAAAAElFTkSuQmCC" />
                                                            </pattern>
                                                        </defs>
                                                        <rect id="icons8-adjust-100" width="24" height="24" fill="url(#pattern)" />
                                                    </svg>
    
                                                    Aktiivinien
                                                </a>
                                            </li> -->
                                            <li class="inline-block w-full px-5 py-3 border-b border-[#283B44]">
                                                <a href="#!" class="user_box flex items-center justify-between gap-3 relative">
                                                    <div class="flex items-center gap-2">
                                                        <div class="user_avatar">
                                                            <?php $profile_photo = um_get_user_avatar_data( um_user( 'ID' ) ); ?>
                                                            <img class="h-full w-full rounded-full object-cover" src="<?php echo $profile_photo['url'] ?? ''; ?>" alt="">
                                                        </div> <!-- user_avatar -->
                                                        <div>
                                                            <p class="text-base text-white font-medium"><?php echo um_user('display_name'); ?></p>
                                                            <p class="text-sm text-[#818D93] font-normal"><?php echo UM()->user()->get_role(); ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
                                                                <defs>
                                                                    <pattern id="pattern" preserveAspectRatio="xMidYMid slice" width="100%" height="100%" viewBox="0 0 96 96">
                                                                        <image width="96" height="96" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAABeUlEQVR4nO3ZvUoDQRiF4b0orSysFAu9IwtLr/DMgDupnLESRJAwVcKChlSCP9mzy/c+sP3ynolrssMAAAAAAAAAAAAAAACwBPmp3aSx3bvvIyRt6nUa2zaXtkulPbrvJ2z8/HkxgjE+IywgPiPM88D9Nv5hBB7M85/8o6urvNz+8y3EJeL7EN+I+EbENyK+EfGNiG9EfOLHJL5kET8kcfKJH5I4+cQPSZx84s9qeiU3vcIb1vUacbuEe/6zVOrD16u5VJ7vXPehiH92juLvnCOI+L4RRHzfCAr7wF3AQy5HfOD+5tSd4pOgiCd/KSMoenznCCK+bwQR3zeCiO8bQcT3jSDi+0YQ8X0jiPi+EUR83wgivvf3mhTxt51T++Gp3oX+eWEFI3Ti+0boxPd9EjrxfSN04vtG6MT3jdCJb/qekPg/fz7atMtc6vthgLF9qNSrGW8BubTzPLbXVOpbHusFRQzS2M6mi/gAAAAAAAAAAAAAAADDyu0BWJ5kaQG3t14AAAAASUVORK5CYII=" />
                                                                    </pattern>
                                                                </defs>
                                                                <rect id="icons8-done-96" width="16" height="16" fill="url(#pattern)" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>
<!--                                             <li class="border-b border-[#283B44] inline-block w-full p-2">
                                                <a href="#!" class="flex items-center gap-5 text-offwhite">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24">
                                                        <defs>
                                                            <pattern id="pattern" preserveAspectRatio="xMidYMid slice" width="100%" height="100%" viewBox="0 0 100 100">
                                                                <image width="100" height="100" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAADd0lEQVR4nO3dzW7TQBQFYAuJ8gylfQU27FiAxJ+Q+HkBxBaJChbs2PJMFDbsKRWksIkyY3emaknuTVWJTUsLbAiMhUTjAHLMTHxIz5G8i+dK83XGSXzjZtnPdLvdhZ6XR8bJunXyyXod8dBfcxDmxMlr64cPw1xlKWN2ds4ar+8IoHX/CDd623uLSTCCNjG0yW7Q6XRGp6ODhG2KK0Obbs8r0UHKa8bYXqnPwhYWvdB/njz/sGSdrFZA1qIXsl4OjhcJhaMXmZMURX95HET2oxepLsPoBeYsNvV8EWS6EAQsBAELQcBCELAQBCwEAQtBwEIQsBAELAQBC0HAYp084XdZwCjxB+e3vf+EEn9ggjSO8fI0ix2CgIUgYCEIWAgCFoLUi/G756zTl8bLi96mnM9ShSD1Mt5MKAe5l4tZihCkXozXfqUFKA0KQeol35L7k52LcpBv6aUsZghSP9bJY+PkW6XT89BsDi/HK8JP6lFQrBteiVOAIFgoBAFDIQgYCkFSoQyuNhuQ1xAsFIKAoRAkPUruB9fqD8ItKzmKcXpUG4UgYCgEAUMhyIxRvH7J/fDWn0/iNQQLhSBgKARpF6Xnh7fHX8gtCwuFIAAfHr1+NX5wB2KFWK/3jJe9ydujeqIO4/Sz2ZIbrYKExxuF9+ZtT4ZFOZwetgpSFMWZ8gu4tifCgxxtg4QYL3etk93WJ8O3e0BsWSf1om6rGMffaREECKN8EVdIqxgTn9YJAoRRvpgrZPYYTo96Xq7//gSCzBzjr/dECAKEUZ7IFYKDUZ5MkOQYU3WeECQ9xlS9WQQBwigH4paVEKNB0zVBgDDKAblCcDDKQQmCg1EOTBAcjHJwgkTBiPZLXIIAYZRFuEJqJfx3tslbr3xwQCsJ3TGTzRh8tEZrGY1Gp6zTj8kxQrhl1Uvu9KZ1ao3T973NwYUsVQgCFoKAhSBgIQhYCNI8fJAyGEaS1luukOYYBAHDIAhAku8o3LKmC0HAQhCwEAQsBAELQcBCELAQBCwEAQtBwEKQkwci+8cLFEV/OXqROUlR9JcrrUD70YsYJ+vjnXiymucflqIXmgMM4+V5ZYWszagjj4et98CYB9FBut3ugvW6QQSd8uk98iZ0NGYp0tveW7ReO0TRmiDyNsxZlrx/1euK9foqtEoSRycaq8PchG0q2cr4AfEdWLK0nQuBWq4AAAAASUVORK5CYII=" />
                                                            </pattern>
                                                        </defs>
                                                        <rect id="icons8-log-out-100" width="24" height="24" fill="url(#pattern)" />
                                                    </svg>
                                                
                                                    Lisää tili
                                                </a>
                                            </li> -->
                                            <li class="border-b border-[#283B44] inline-block w-full px-5 py-3">
                                                <a href="<?php echo esc_attr( get_permalink( 16 ) ); ?>" class="flex items-center gap-5 text-offwhite">
                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0.00 0.00 300.00 300.00" style="width: 19px;"> <g stroke-width="2.20" fill="none" stroke-linecap="butt"> <path stroke="#dadee6" stroke-opacity="0.745" vector-effect="non-scaling-stroke" d="M 236.48 62.51 C 236.18 61.28 235.50 60.29 234.44 59.53 C 234.17 59.34 233.99 59.08 233.91 58.77 C 233.55 57.45 232.69 56.94 231.32 57.24"/> <path stroke="#dadee6" stroke-opacity="0.745" vector-effect="non-scaling-stroke" d="M 230.61 56.53 C 230.83 55.90 230.87 55.37 230.74 54.92 C 230.63 54.57 230.40 54.37 230.04 54.32 L 228.04 54.05"/> <path stroke="#dadee6" stroke-opacity="0.745" vector-effect="non-scaling-stroke" d="M 13.99 12.78 C 13.28 13.07 12.80 13.55 12.54 14.21"/> <path stroke="#dadee6" stroke-opacity="0.745" vector-effect="non-scaling-stroke" d="M 2.22 289.90 C 2.33 289.30 2.20 288.68 1.82 288.05 C 1.66 287.78 1.50 287.77 1.34 288.04 C 1.29 288.12 1.22 288.17 1.11 288.20 C 0.94 288.25 0.84 288.20 0.80 288.03 C 0.75 287.86 0.68 287.77 0.59 287.75"/> <path stroke="#dadee6" stroke-opacity="0.745" vector-effect="non-scaling-stroke" d="M 230.71 244.84 C 230.71 244.33 230.29 243.91 229.78 243.91 C 229.27 243.91 228.85 244.33 228.85 244.84 C 228.85 245.35 229.27 245.77 229.78 245.77 C 230.29 245.77 230.71 245.35 230.71 244.84"/> </g> <path fill="#d8dde6" d="M 17.85 0.00 L 216.76 0.00 C 222.49 -0.04 226.15 0.25 227.74 0.87 C 231.01 2.15 233.78 4.11 236.03 6.74 C 238.66 9.81 239.97 13.39 239.97 17.46 C 239.96 29.70 240.00 42.21 240.08 54.98 C 240.10 58.35 239.93 61.73 239.58 65.12 C 239.54 65.46 239.35 65.61 239.01 65.57 C 238.27 65.47 237.82 65.06 237.66 64.35 C 237.49 63.59 237.10 62.98 236.48 62.51 C 236.18 61.28 235.50 60.29 234.44 59.53 C 234.17 59.34 233.99 59.08 233.91 58.77 C 233.55 57.45 232.69 56.94 231.32 57.24 C 230.98 57.03 230.74 56.79 230.61 56.53 C 230.83 55.90 230.87 55.37 230.74 54.92 C 230.63 54.57 230.40 54.37 230.04 54.32 L 228.04 54.05 C 228.01 41.62 227.99 29.18 227.98 16.75 C 227.97 16.06 227.81 15.35 227.49 14.64 C 227.36 14.35 226.98 14.27 226.74 14.49 C 226.44 14.77 226.11 14.83 225.75 14.66 C 225.39 14.50 225.22 14.08 225.38 13.72 C 225.74 12.89 225.48 12.40 224.60 12.26 C 223.38 12.07 222.10 11.97 220.75 11.97 C 153.25 11.98 85.75 12.00 18.25 12.04 C 16.62 12.04 15.20 12.29 13.99 12.78 C 13.28 13.07 12.80 13.55 12.54 14.21 C 12.19 16.45 12.01 19.30 12.01 22.75 C 11.99 109.92 11.99 197.10 12.01 284.27 C 12.01 284.63 12.15 284.92 12.43 285.14 C 12.80 285.44 13.20 285.46 13.65 285.19 C 14.21 284.85 14.92 285.28 14.89 285.93 C 14.88 286.19 14.80 286.45 14.67 286.70 C 14.46 287.10 14.16 287.17 13.79 286.91 C 13.58 286.77 13.34 286.63 13.09 286.48 C 12.87 286.36 12.79 286.42 12.85 286.67 C 12.86 286.71 12.86 286.75 12.86 286.79 C 12.85 287.18 13.03 287.30 13.39 287.17 C 13.86 287.00 14.26 287.09 14.61 287.44 C 14.84 287.69 15.13 287.82 15.48 287.84 C 16.53 287.89 17.54 287.91 18.51 287.91 C 82.82 288.02 147.15 288.05 211.50 287.99 C 215.67 287.98 219.91 287.86 224.20 287.62 C 226.05 287.51 227.52 286.01 227.59 284.16 C 228.02 273.23 228.14 261.62 227.97 249.33 C 227.94 247.48 228.35 245.80 228.37 244.00 C 228.38 243.57 228.60 243.36 229.03 243.37 L 230.16 243.41 C 230.59 243.42 230.92 243.25 231.15 242.88 C 231.48 242.35 231.55 241.74 231.34 241.06 C 231.20 240.60 231.37 240.39 231.85 240.44 L 232.39 240.49 C 232.76 240.53 232.85 240.70 232.66 241.01 L 232.13 241.89 C 231.84 242.36 231.97 242.54 232.51 242.45 L 232.98 242.36 C 233.51 242.27 233.65 241.98 233.40 241.50 L 233.28 241.27 C 233.16 241.05 233.19 240.85 233.37 240.68 L 237.19 236.93 C 237.44 236.68 237.58 236.34 237.59 235.99 L 237.61 235.10 C 237.62 234.86 237.77 234.66 238.00 234.59 L 239.00 234.31 C 239.31 234.22 239.47 234.34 239.46 234.67 C 239.44 236.06 240.00 237.20 240.00 238.63 C 240.01 250.52 240.00 263.54 239.99 277.68 C 239.99 283.23 239.53 287.18 238.62 289.53 C 237.07 293.52 233.77 296.60 228.73 298.79 C 227.64 299.27 225.02 299.67 220.87 300.00 L 15.88 300.00 L 9.62 299.13 C 9.49 299.12 9.43 299.05 9.44 298.92 L 9.44 298.63 C 9.44 298.58 9.46 298.56 9.50 298.56 C 10.30 298.55 11.05 298.47 11.76 298.31 C 12.34 298.18 12.34 298.04 11.76 297.89 L 6.65 296.60 C 6.26 296.51 6.07 296.26 6.09 295.85 L 6.12 295.00 C 6.15 294.14 5.31 293.53 4.51 293.83 C 3.98 294.02 3.62 293.88 3.42 293.41 C 2.83 292.02 3.39 291.27 2.22 289.90 C 2.33 289.30 2.20 288.68 1.82 288.05 C 1.66 287.78 1.50 287.77 1.34 288.04 C 1.29 288.12 1.22 288.17 1.11 288.20 C 0.94 288.25 0.84 288.20 0.80 288.03 C 0.75 287.86 0.68 287.77 0.59 287.75 L 0.00 282.99 L 0.00 16.23 L 0.79 12.24 C 0.83 12.02 1.01 11.86 1.23 11.82 C 1.39 11.80 1.51 11.72 1.59 11.59 C 2.45 10.26 3.01 8.74 3.27 7.04 C 3.35 6.53 3.64 6.22 4.13 6.11 L 5.11 5.89 C 5.51 5.80 5.77 5.55 5.88 5.16 L 6.13 4.26 C 6.25 3.83 6.53 3.54 6.96 3.41 C 8.47 2.95 10.05 2.48 11.69 2.01 C 12.22 1.86 12.22 1.70 11.69 1.54 C 11.51 1.48 11.36 1.37 11.24 1.21 C 11.10 1.01 10.93 0.97 10.72 1.10 C 10.56 1.19 10.40 1.18 10.25 1.08 C 10.08 0.97 10.10 0.90 10.30 0.88 L 17.85 0.00 Z M 230.71 244.84 C 230.71 244.33 230.29 243.91 229.78 243.91 C 229.27 243.91 228.85 244.33 228.85 244.84 C 228.85 245.35 229.27 245.77 229.78 245.77 C 230.29 245.77 230.71 245.35 230.71 244.84 Z"/> <path fill="#dddfe5" fill-opacity="0.486" d="M 13.99 12.78 L 14.15 13.79 C 14.21 14.16 14.06 14.35 13.69 14.38 C 13.38 14.41 12.99 14.35 12.54 14.21 C 12.80 13.55 13.28 13.07 13.99 12.78 Z"/> <path fill="#dddfe5" fill-opacity="0.486" d="M 228.04 54.05 L 230.04 54.32 C 230.40 54.37 230.63 54.57 230.74 54.92 C 230.87 55.37 230.83 55.90 230.61 56.53 C 230.03 56.90 229.43 56.96 228.81 56.72 C 228.49 56.60 228.31 56.37 228.27 56.02 L 228.04 54.05 Z"/> <path fill="#dddfe5" fill-opacity="0.486" d="M 231.32 57.24 C 232.69 56.94 233.55 57.45 233.91 58.77 C 233.99 59.08 234.17 59.34 234.44 59.53 C 235.50 60.29 236.18 61.28 236.48 62.51 L 235.08 62.29 C 234.65 62.22 234.43 61.97 234.44 61.52 C 234.45 61.07 234.31 60.65 234.04 60.27 C 233.82 59.96 233.46 59.79 233.08 59.80 C 232.67 59.82 232.27 59.73 231.90 59.52 C 231.59 59.35 231.43 59.09 231.41 58.74 L 231.32 57.24 Z"/> <path fill="#d8dde6" d="M 300.00 147.86 L 300.00 151.88 C 298.75 153.53 296.81 155.64 294.20 158.20 C 281.54 170.62 261.18 190.87 233.11 218.95 C 231.53 220.53 230.19 221.40 229.09 221.56 C 227.36 221.82 225.65 221.64 223.98 221.01 C 223.65 220.88 223.41 220.67 223.24 220.36 C 221.64 217.33 221.57 214.80 223.02 212.78 C 224.26 211.05 225.77 209.31 227.56 207.54 C 242.69 192.53 257.35 177.93 271.54 163.72 C 272.74 162.52 273.64 161.08 275.03 160.16 C 276.28 159.35 277.41 158.40 278.43 157.33 C 278.62 157.13 278.53 156.80 278.27 156.72 C 276.56 156.17 274.71 155.90 272.72 155.90 C 213.61 156.04 156.05 156.06 100.02 155.95 C 99.57 155.95 99.15 155.83 98.78 155.58 C 98.27 155.24 97.75 155.25 97.24 155.62 C 96.91 155.85 96.45 155.65 96.39 155.25 C 96.34 154.91 96.41 154.60 96.62 154.33 C 96.79 154.09 96.96 154.10 97.12 154.35 C 97.20 154.47 97.30 154.56 97.43 154.63 C 98.01 154.94 98.51 154.86 98.92 154.39 C 99.23 154.04 99.20 153.73 98.83 153.45 C 98.30 153.04 97.72 153.00 97.09 153.35 C 96.62 153.60 96.04 153.27 96.04 152.73 L 96.02 147.35 C 96.02 147.03 96.16 146.80 96.45 146.67 C 96.80 146.51 97.14 146.52 97.47 146.71 C 97.73 146.85 98.01 146.89 98.30 146.84 C 98.45 146.81 98.58 146.76 98.70 146.67 C 99.03 146.44 99.12 146.13 98.95 145.76 C 98.83 145.50 98.65 145.31 98.42 145.18 C 98.10 145.00 97.69 145.05 97.43 145.32 L 97.09 145.66 C 96.85 145.91 96.66 145.87 96.53 145.55 C 96.44 145.33 96.41 145.11 96.42 144.89 C 96.47 144.35 96.72 144.21 97.19 144.47 C 97.78 144.79 98.35 144.76 98.91 144.38 C 99.23 144.17 99.58 144.06 99.95 144.06 C 160.10 143.93 217.57 143.96 272.36 144.13 C 274.53 144.14 276.54 143.82 278.38 143.19 C 278.73 143.07 278.81 142.62 278.52 142.39 C 276.65 140.92 274.96 139.45 273.44 137.97 C 256.55 121.62 240.81 105.94 226.24 90.94 C 225.43 90.10 224.61 89.24 223.78 88.37 C 219.84 84.22 223.43 77.43 229.04 78.69 C 232.02 79.35 235.39 83.30 237.80 85.70 C 247.17 94.99 256.56 104.27 265.96 113.55 C 277.57 125.02 288.92 136.45 300.00 147.86 Z"/> <circle fill="#dddfe5" fill-opacity="0.486" cx="229.78" cy="244.84" r="0.93"/> <path fill="#dddfe5" fill-opacity="0.486" d="M 0.59 287.75 C 0.68 287.77 0.75 287.86 0.80 288.03 C 0.84 288.20 0.94 288.25 1.11 288.20 C 1.22 288.17 1.29 288.12 1.34 288.04 C 1.50 287.77 1.66 287.78 1.82 288.05 C 2.20 288.68 2.33 289.30 2.22 289.90 C 0.78 291.17 0.24 290.45 0.59 287.75 Z"/> </svg> Kirjaudu ulos
                                                </a>
                                            </li>
                                        </ul>
    
                                    </div>



                            </div> <!-- user_box -->
    
                        </div>
                    </div> <!-- User Profile -->
    
                </div> <!-- grid -->
            </div> <!-- container -->
        </div>
        <!-- Top Header -->

    </header> <!-- header_area  -->
    <!-- header part end  -->