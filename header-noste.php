<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

<?php wp_head(); ?>

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
                                <?php echo noste_header_notification(); ?>  
                            </div>
    
                            <div class="border-l border-line pl-4 flex items-center gap-3 relative">
                                <div class="user_avatar">
                                    <?php $profile_photo = um_get_user_avatar_data( um_user( 'ID' ) ); ?>
                                    <img class="h-full w-full rounded-full object-cover" src="<?php echo $profile_photo['url'] ?? ''; ?>" alt="">
                                </div> <!-- user_avatar -->
                                <div class="hidden md:block">
                                    <p class="text-base text-black font-medium"><?php echo um_user('display_name'); ?></p>
                                    <p class="text-sm text-[#818D93] font-normal"><?php echo UM()->user()->get_role(); ?></p>
                                </div>
                                <div class="dropdown relative">
                                    <button class="dropdown-toggle" data-dropdown="profile-dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="12" height="12" viewBox="0 0 12 12">
                                            <defs>
                                                <pattern id="pattern6" preserveAspectRatio="xMidYMid slice" width="100%" height="100%" viewBox="0 0 96 96">
                                                    <image width="96" height="96" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAABmElEQVR4nO3ZwUrDQBSF4Ww8DWZvcWPSrgJ36Puv9CGk6BOIPoVSodBFKU0TeufO/B/MPj1/BgJtGgAAAAAAAAAAAAAAAAAAAAAAAOSj2+6e2iG9Pmx3qSmM+jS2Q3p7fBmfm2zH7+29HdLvqrefkiKoT+NqSF+H39b29pldhNPxj6eUCDod/3hyinBu/FIi6Nz4OUW4NH70CLo0fg4Rrhk/agRdM75nhCnjR4ugKeN7RLhl/CgRdMv494wwZ/zcI2jO+PeKsESAHCNoifH/j32EuAU5RVCk8UuLoIjjlxJBkcePHkEljB81gkoaP1oElTh+lAgqefzcI6iG8XONoJrGzy2Cahw/lwiqeXzvCGJ8vwhifL+bIMb3iyDG94sgxveLIMafrtukdTuk/QIRvg9n/qdm2h+eqanJUjehrfk7P34Eq3d8/wjG+H4RGN8xgvHm+0UwxveLYIzvF8EY3y+CMb5fBGN8vwjG+H4RjPH9Ihjj+0UwxveLYIzvF8EY3y+CMb6XbpPW1f2TBQAAAAAAAAAAgGaSP+MgIpmI76GJAAAAAElFTkSuQmCC" />
                                                </pattern>
                                            </defs>
                                            <rect id="icons8-expand-arrow-96" width="12" height="12" fill="url(#pattern6)" />
                                        </svg>
                                    </button>
    
                                    <div class="w-[15rem] border-t bg-[#08202C] absolute right-0 top-12 z-[10] dropdown-menu hidden" id="profile-dropdown">
                                        <ul class="bg-transparent p-0">
                                            <li class="text-center border-b border-[#283B44] py-4 px-2">
                                                <div class="user_avatar mx-auto mb-2">
                                                    <div class="flex items-center justify-center mx-auto" id="avatarContainer">
                                                        <span class="text-2xl font-bold text-white" id="text">K</span>
                                                        <img class="h-full w-full rounded-full object-cover hidden" src="<?php echo noste_custom_logo_url(); ?>" alt="User Avatar" id="avatarImage">
                                                        <label class="absolute -bottom-1 -right-2 cursor-pointer">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="18" viewBox="0 0 18 18">
                                                                <defs>
                                                                    <pattern id="pattern" width="1" height="1" viewBox="-4.444 -4.444 26.887 26.887">
                                                                        <image preserveAspectRatio="xMidYMid slice" width="18" height="18" xlink:href="data:image/png;base64,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" />
                                                                    </pattern>
                                                                </defs>
                                                                <rect id="icons8-photo-100" width="18" height="18" rx="9" fill="url(#pattern)" />
                                                            </svg>
    
                                                            <input type="file" id="FileUpload1" class="hidden" />
                                                        </label>
                                                    </div>
                                                </div> <!-- user_avatar -->
    
                                                <p class="text-white">Klara Royment</p>
                                                <p class="text-offwhite text-sm">nimi_sukunimi@noste.io</p>
                                            </li>
                                            <li class="border-b border-[#283B44] inline-block w-full p-2">
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
                                            </li>
                                            <li class="inline-block w-full p-2">
                                                <a href="#!" class="user_box flex items-center justify-between gap-3 relative">
                                                    <div class="flex items-center gap-2">
                                                        <div class="user_avatar">
                                                            <span class="text-xl lg:text-2xl font-bold text-white">K</span>
                                                            <img class="h-full w-full rounded-full object-cover hidden" src="<?php echo noste_custom_logo_url(); ?>" alt="">
                                                        </div> <!-- user_avatar -->
                                                        <div>
                                                            <p class="text-base text-white font-medium"><?php echo um_user('display_name'); ?></p>
                                                            <p class="text-sm text-[#818D93] font-normal">Admin</p>
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
                                            <li class="border-b border-[#283B44] inline-block w-full p-2">
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
                                            </li>
                                            <li class="border-b border-[#283B44] inline-block w-full p-2">
                                                <a href="#!" class="flex items-center gap-5 text-offwhite">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24">
                                                        <defs>
                                                            <pattern id="pattern" preserveAspectRatio="xMidYMid slice" width="100%" height="100%" viewBox="0 0 100 100">
                                                                <image width="100" height="100" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAADd0lEQVR4nO3dzW7TQBQFYAuJ8gylfQU27FiAxJ+Q+HkBxBaJChbs2PJMFDbsKRWksIkyY3emaknuTVWJTUsLbAiMhUTjAHLMTHxIz5G8i+dK83XGSXzjZtnPdLvdhZ6XR8bJunXyyXod8dBfcxDmxMlr64cPw1xlKWN2ds4ar+8IoHX/CDd623uLSTCCNjG0yW7Q6XRGp6ODhG2KK0Obbs8r0UHKa8bYXqnPwhYWvdB/njz/sGSdrFZA1qIXsl4OjhcJhaMXmZMURX95HET2oxepLsPoBeYsNvV8EWS6EAQsBAELQcBCELAQBCwEAQtBwEIQsBAELAQBC0HAYp084XdZwCjxB+e3vf+EEn9ggjSO8fI0ix2CgIUgYCEIWAgCFoLUi/G756zTl8bLi96mnM9ShSD1Mt5MKAe5l4tZihCkXozXfqUFKA0KQeol35L7k52LcpBv6aUsZghSP9bJY+PkW6XT89BsDi/HK8JP6lFQrBteiVOAIFgoBAFDIQgYCkFSoQyuNhuQ1xAsFIKAoRAkPUruB9fqD8ItKzmKcXpUG4UgYCgEAUMhyIxRvH7J/fDWn0/iNQQLhSBgKARpF6Xnh7fHX8gtCwuFIAAfHr1+NX5wB2KFWK/3jJe9ydujeqIO4/Sz2ZIbrYKExxuF9+ZtT4ZFOZwetgpSFMWZ8gu4tifCgxxtg4QYL3etk93WJ8O3e0BsWSf1om6rGMffaREECKN8EVdIqxgTn9YJAoRRvpgrZPYYTo96Xq7//gSCzBzjr/dECAKEUZ7IFYKDUZ5MkOQYU3WeECQ9xlS9WQQBwigH4paVEKNB0zVBgDDKAblCcDDKQQmCg1EOTBAcjHJwgkTBiPZLXIIAYZRFuEJqJfx3tslbr3xwQCsJ3TGTzRh8tEZrGY1Gp6zTj8kxQrhl1Uvu9KZ1ao3T973NwYUsVQgCFoKAhSBgIQhYCNI8fJAyGEaS1luukOYYBAHDIAhAku8o3LKmC0HAQhCwEAQsBAELQcBCELAQBCwEAQtBwEKQkwci+8cLFEV/OXqROUlR9JcrrUD70YsYJ+vjnXiymucflqIXmgMM4+V5ZYWszagjj4et98CYB9FBut3ugvW6QQSd8uk98iZ0NGYp0tveW7ReO0TRmiDyNsxZlrx/1euK9foqtEoSRycaq8PchG0q2cr4AfEdWLK0nQuBWq4AAAAASUVORK5CYII=" />
                                                            </pattern>
                                                        </defs>
                                                        <rect id="icons8-log-out-100" width="24" height="24" fill="url(#pattern)" />
                                                    </svg>
    
                                                    Kirjaudu ulos
                                                </a>
                                            </li>
                                        </ul>
    
                                    </div>
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