<?php 

/* Template Name: Toimintaloki */


if ( !is_user_logged_in() ) {
    wp_redirect( site_url() );
    exit;
}

get_header( 'noste' );

?>

<section class="pt-5">
        <div class="container px-4">
            <div class="flex items-center gap-5 lg:gap-0 flex-col lg:flex-row">
                <div>
                    <h1 class="text-[26px] font-medium text-black">Toimintaloki</h1>
                </div>

                <div class="mx-auto flex flex-col lg:flex-row w-full lg:w-auto lg:items-center gap-3 lg:gap-10 rounded-lg border border-solid border-[#E1E1EA] px-8 py-3">
                    <div>
                        <h2 class="text-black text-[18px] font-bold">Suodatin</h2>
                    </div>

                    <div class="flex items-center gap-3">
                        <span class="text-offwhite font-medium inline-block w-24 lg:w-auto">Päivämäärä:</span>
                        <div class="dropdown_click cursor-pointer w-full flex-1 relative">
                            <span class="flex items-center justify-between gap-1 font-medium rounded-lg border border-solid border-[#CCCCD6] px-3 py-2 text-black">
                                Näytä kaikki

                                <svg fill="#000000" width="18px" height="18px" viewBox="-8.5 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>angle-down</title> <path d="M7.28 20.040c-0.24 0-0.44-0.080-0.6-0.24l-6.44-6.44c-0.32-0.32-0.32-0.84 0-1.2 0.32-0.32 0.84-0.32 1.2 0l5.84 5.84 5.84-5.84c0.32-0.32 0.84-0.32 1.2 0 0.32 0.32 0.32 0.84 0 1.2l-6.44 6.44c-0.16 0.16-0.4 0.24-0.6 0.24z"></path> </g></svg>
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

                    <div class="flex items-center gap-3">
                        <span class="text-offwhite font-medium inline-block w-24 lg:w-auto">Projekti:</span>
                        <div class="dropdown_click cursor-pointer w-full flex-1 relative">
                            <span class="flex items-center justify-between gap-1 font-medium rounded-lg border border-solid border-[#CCCCD6] px-3 py-2 text-black">
                                Projektin Nimi

                                <svg fill="#000000" width="18px" height="18px" viewBox="-8.5 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>angle-down</title> <path d="M7.28 20.040c-0.24 0-0.44-0.080-0.6-0.24l-6.44-6.44c-0.32-0.32-0.32-0.84 0-1.2 0.32-0.32 0.84-0.32 1.2 0l5.84 5.84 5.84-5.84c0.32-0.32 0.84-0.32 1.2 0 0.32 0.32 0.32 0.84 0 1.2l-6.44 6.44c-0.16 0.16-0.4 0.24-0.6 0.24z"></path> </g></svg>
                            </span>

                            <div class="z-10 hidden min-w-[238px] mt-2 px-5 py-3 right-0 bg-white absolute w-full dropdown_wrap rounded-lg border border-solid border-[#CCCCD6]">
                                <span class="text-[14px] block my-3 text-[#94969C] font-medium">Projektin Nimi</span>
                                <span class="text-[14px] block my-3 text-black font-medium">Projektin Nimi</span>
                                <span class="text-[14px] block my-3 text-black font-medium">Projektin Nimi</span>
                                <span class="text-[14px] block my-3 text-black font-medium">Projektin Nimi</span>
                                <span class="text-[14px] block my-3 text-black font-medium">Projektin Nimi</span>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center gap-3">
                        <span class="text-offwhite font-medium inline-block w-24 lg:w-auto">Rooli:</span>
                        <div class="dropdown_click cursor-pointer w-full flex-1 relative">
                            <span class="flex items-center justify-between gap-1 font-medium rounded-lg border border-solid border-[#CCCCD6] px-3 py-2 text-black">
                                Valvoja

                                <svg fill="#000000" width="18px" height="18px" viewBox="-8.5 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>angle-down</title> <path d="M7.28 20.040c-0.24 0-0.44-0.080-0.6-0.24l-6.44-6.44c-0.32-0.32-0.32-0.84 0-1.2 0.32-0.32 0.84-0.32 1.2 0l5.84 5.84 5.84-5.84c0.32-0.32 0.84-0.32 1.2 0 0.32 0.32 0.32 0.84 0 1.2l-6.44 6.44c-0.16 0.16-0.4 0.24-0.6 0.24z"></path> </g></svg>
                            </span>

                            <div class="z-10 hidden min-w-[238px] mt-2 px-5 py-3 right-0 bg-white absolute w-full dropdown_wrap rounded-lg border border-solid border-[#CCCCD6]">
                                <span class="text-[14px] block my-3 text-[#94969C] font-medium">Pääkäyttäjä</span>
                                <span class="text-[14px] block my-3 text-black font-medium">Ylläpitäjä</span>
                                <span class="text-[14px] block my-3 text-black font-medium">Valvoja</span>
                                <span class="text-[14px] block my-3 text-black font-medium">Projektipäällikkö</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="border-b border-solid border-[#E1E1EA] my-5">

        </div>
    </section>

    <!-- add new project start  -->
    <section class="pt-5 pb-20">
        <div class="container px-4">
            <div class="mx-auto max-w-[700px]">

                <div>
                    <span class="font-medium text-offwhite inline-block mr-2">Käytetyt suodattimet:</span>
                    
                    <span class="m-2 lg:mx-1 inline-flex items-center gap-1 bg-[#E9E9F0] text-offwhite text-[14px] px-2 py-[2px] rounded-[3px]">
                        Näytä kaikki

                        <svg width="16px" height="16px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M13.06 12L17.48 7.57996C17.5537 7.5113 17.6128 7.4285 17.6538 7.3365C17.6948 7.2445 17.7168 7.14518 17.7186 7.04448C17.7204 6.94378 17.7018 6.84375 17.6641 6.75036C17.6264 6.65697 17.5703 6.57214 17.499 6.50092C17.4278 6.4297 17.343 6.37356 17.2496 6.33584C17.1562 6.29811 17.0562 6.27959 16.9555 6.28137C16.8548 6.28314 16.7555 6.30519 16.6635 6.34618C16.5715 6.38717 16.4887 6.44627 16.42 6.51996L12 10.94L7.58 6.51996C7.43782 6.38748 7.24978 6.31535 7.05548 6.31878C6.86118 6.32221 6.67579 6.40092 6.53838 6.53834C6.40096 6.67575 6.32225 6.86113 6.31882 7.05544C6.3154 7.24974 6.38752 7.43778 6.52 7.57996L10.94 12L6.52 16.42C6.37955 16.5606 6.30066 16.7512 6.30066 16.95C6.30066 17.1487 6.37955 17.3393 6.52 17.48C6.66062 17.6204 6.85125 17.6993 7.05 17.6993C7.24875 17.6993 7.43937 17.6204 7.58 17.48L12 13.06L16.42 17.48C16.5606 17.6204 16.7512 17.6993 16.95 17.6993C17.1488 17.6993 17.3394 17.6204 17.48 17.48C17.6204 17.3393 17.6993 17.1487 17.6993 16.95C17.6993 16.7512 17.6204 16.5606 17.48 16.42L13.06 12Z" fill="#818D93"></path> </g></svg>
                    </span>

                    <span class="m-2 lg:mx-1 inline-flex items-center gap-1 bg-[#E9E9F0] text-offwhite text-[14px] px-2 py-[2px] rounded-[3px]">
                        Näytä kaikki

                        <svg width="16px" height="16px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M13.06 12L17.48 7.57996C17.5537 7.5113 17.6128 7.4285 17.6538 7.3365C17.6948 7.2445 17.7168 7.14518 17.7186 7.04448C17.7204 6.94378 17.7018 6.84375 17.6641 6.75036C17.6264 6.65697 17.5703 6.57214 17.499 6.50092C17.4278 6.4297 17.343 6.37356 17.2496 6.33584C17.1562 6.29811 17.0562 6.27959 16.9555 6.28137C16.8548 6.28314 16.7555 6.30519 16.6635 6.34618C16.5715 6.38717 16.4887 6.44627 16.42 6.51996L12 10.94L7.58 6.51996C7.43782 6.38748 7.24978 6.31535 7.05548 6.31878C6.86118 6.32221 6.67579 6.40092 6.53838 6.53834C6.40096 6.67575 6.32225 6.86113 6.31882 7.05544C6.3154 7.24974 6.38752 7.43778 6.52 7.57996L10.94 12L6.52 16.42C6.37955 16.5606 6.30066 16.7512 6.30066 16.95C6.30066 17.1487 6.37955 17.3393 6.52 17.48C6.66062 17.6204 6.85125 17.6993 7.05 17.6993C7.24875 17.6993 7.43937 17.6204 7.58 17.48L12 13.06L16.42 17.48C16.5606 17.6204 16.7512 17.6993 16.95 17.6993C17.1488 17.6993 17.3394 17.6204 17.48 17.48C17.6204 17.3393 17.6993 17.1487 17.6993 16.95C17.6993 16.7512 17.6204 16.5606 17.48 16.42L13.06 12Z" fill="#818D93"></path> </g></svg>
                    </span>

                    <span class="m-2 lg:mx-1 inline-flex items-center gap-1 bg-[#E9E9F0] text-offwhite text-[14px] px-2 py-[2px] rounded-[3px]">
                        Näytä kaikki

                        <svg width="16px" height="16px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M13.06 12L17.48 7.57996C17.5537 7.5113 17.6128 7.4285 17.6538 7.3365C17.6948 7.2445 17.7168 7.14518 17.7186 7.04448C17.7204 6.94378 17.7018 6.84375 17.6641 6.75036C17.6264 6.65697 17.5703 6.57214 17.499 6.50092C17.4278 6.4297 17.343 6.37356 17.2496 6.33584C17.1562 6.29811 17.0562 6.27959 16.9555 6.28137C16.8548 6.28314 16.7555 6.30519 16.6635 6.34618C16.5715 6.38717 16.4887 6.44627 16.42 6.51996L12 10.94L7.58 6.51996C7.43782 6.38748 7.24978 6.31535 7.05548 6.31878C6.86118 6.32221 6.67579 6.40092 6.53838 6.53834C6.40096 6.67575 6.32225 6.86113 6.31882 7.05544C6.3154 7.24974 6.38752 7.43778 6.52 7.57996L10.94 12L6.52 16.42C6.37955 16.5606 6.30066 16.7512 6.30066 16.95C6.30066 17.1487 6.37955 17.3393 6.52 17.48C6.66062 17.6204 6.85125 17.6993 7.05 17.6993C7.24875 17.6993 7.43937 17.6204 7.58 17.48L12 13.06L16.42 17.48C16.5606 17.6204 16.7512 17.6993 16.95 17.6993C17.1488 17.6993 17.3394 17.6204 17.48 17.48C17.6204 17.3393 17.6993 17.1487 17.6993 16.95C17.6993 16.7512 17.6204 16.5606 17.48 16.42L13.06 12Z" fill="#818D93"></path> </g></svg>
                    </span>

                    <a href="#!" class="inline-block text-offwhite ml-2 underline">Tyhjennä kaikki</a>
                </div>

                <div>
                    <div class="flex items-center gap-5 my-10">
                        <hr class="border-b border-solid border-[#E1E1EA] flex-1">
                        <span class="text-offwhite font-medium text-[14px]">Tänään</span>
                        <hr class="border-b border-solid border-[#E1E1EA] flex-1">
                    </div>

                    <div>
                        <div class="my-3 p-4 gap-3 flex rounded-lg border border-solid border-[#E1E1EA]">
                            <div class="user_avatar">
                                <span class="text-xl lg:text-2xl font-bold text-white">K</span>
                                <img class="h-full w-full rounded-full object-cover hidden" src="./assets/images/logo.png" alt="" />
                            </div>                            
                            <div class="flex-1">
                                <span class="text-offwhite text-[14px]">Uusi toiminta • 6 min sitten</span>
                                <p class="text-[#94969C] mt-1"><b class="text-black">Laura Vatanen</b> lorem ipsum dolor sit amet eudat vestibulum cras dolores <b class="text-black">Vestibulum_cras.docx</b></p>
                            </div>
                        </div>
                        <div class="my-3 p-4 gap-3 flex rounded-lg border border-solid border-[#E1E1EA]">
                            <div class="user_avatar">
                                <span class="text-xl lg:text-2xl font-bold text-white">K</span>
                                <img class="h-full w-full rounded-full object-cover hidden" src="./assets/images/logo.png" alt="" />
                            </div>                            
                            <div class="flex-1">
                                <span class="text-offwhite text-[14px]">Uusi toiminta • 6 min sitten</span>
                                <p class="text-[#94969C] mt-1"><b class="text-black">Laura Vatanen</b> lorem ipsum dolor sit amet eudat vestibulum cras dolores <b class="text-black">Vestibulum_cras.docx</b></p>
                            </div>
                        </div>
                        <div class="my-3 p-4 gap-3 flex rounded-lg border border-solid border-[#E1E1EA]">
                            <div class="user_avatar">
                                <span class="text-xl lg:text-2xl font-bold text-white">K</span>
                                <img class="h-full w-full rounded-full object-cover hidden" src="./assets/images/logo.png" alt="" />
                            </div>                            
                            <div class="flex-1">
                                <span class="text-offwhite text-[14px]">Uusi toiminta • 6 min sitten</span>
                                <p class="text-[#94969C] mt-1"><b class="text-black">Laura Vatanen</b> lorem ipsum dolor sit amet eudat vestibulum cras dolores <b class="text-black">Vestibulum_cras.docx</b></p>
                            </div>
                        </div>
                        <div class="my-3 p-4 gap-3 flex rounded-lg border border-solid border-[#E1E1EA]">
                            <div class="user_avatar">
                                <span class="text-xl lg:text-2xl font-bold text-white">K</span>
                                <img class="h-full w-full rounded-full object-cover hidden" src="./assets/images/logo.png" alt="" />
                            </div>                            
                            <div class="flex-1">
                                <span class="text-offwhite text-[14px]">Uusi toiminta • 6 min sitten</span>
                                <p class="text-[#94969C] mt-1"><b class="text-black">Laura Vatanen</b> lorem ipsum dolor sit amet eudat vestibulum cras dolores <b class="text-black">Vestibulum_cras.docx</b></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex items-center gap-5 my-10">
                        <hr class="border-b border-solid border-[#E1E1EA] flex-1">
                        <span class="text-offwhite font-medium text-[14px]">Ellen</span>
                        <hr class="border-b border-solid border-[#E1E1EA] flex-1">
                    </div>

                    <div>
                        <div class="my-3 p-4 gap-3 flex rounded-lg border border-solid border-[#E1E1EA]">
                            <div class="user_avatar">
                                <span class="text-xl lg:text-2xl font-bold text-white">K</span>
                                <img class="h-full w-full rounded-full object-cover hidden" src="./assets/images/logo.png" alt="" />
                            </div>                            
                            <div class="flex-1">
                                <span class="text-offwhite text-[14px]">Uusi toiminta • 6 min sitten</span>
                                <p class="text-[#94969C] mt-1"><b class="text-black">Laura Vatanen</b> lorem ipsum dolor sit amet eudat vestibulum cras dolores <b class="text-black">Vestibulum_cras.docx</b></p>
                            </div>
                        </div>
                        <div class="my-3 p-4 gap-3 flex rounded-lg border border-solid border-[#E1E1EA]">
                            <div class="user_avatar">
                                <span class="text-xl lg:text-2xl font-bold text-white">K</span>
                                <img class="h-full w-full rounded-full object-cover hidden" src="./assets/images/logo.png" alt="" />
                            </div>                            
                            <div class="flex-1">
                                <span class="text-offwhite text-[14px]">Uusi toiminta • 6 min sitten</span>
                                <p class="text-[#94969C] mt-1"><b class="text-black">Laura Vatanen</b> lorem ipsum dolor sit amet eudat vestibulum cras dolores <b class="text-black">Vestibulum_cras.docx</b></p>
                            </div>
                        </div>
                        <div class="my-3 p-4 gap-3 flex rounded-lg border border-solid border-[#E1E1EA]">
                            <div class="user_avatar">
                                <span class="text-xl lg:text-2xl font-bold text-white">K</span>
                                <img class="h-full w-full rounded-full object-cover hidden" src="./assets/images/logo.png" alt="" />
                            </div>                            
                            <div class="flex-1">
                                <span class="text-offwhite text-[14px]">Uusi toiminta • 6 min sitten</span>
                                <p class="text-[#94969C] mt-1"><b class="text-black">Laura Vatanen</b> lorem ipsum dolor sit amet eudat vestibulum cras dolores <b class="text-black">Vestibulum_cras.docx</b></p>
                            </div>
                        </div>
                        <div class="my-3 p-4 gap-3 flex rounded-lg border border-solid border-[#E1E1EA]">
                            <div class="user_avatar">
                                <span class="text-xl lg:text-2xl font-bold text-white">K</span>
                                <img class="h-full w-full rounded-full object-cover hidden" src="./assets/images/logo.png" alt="" />
                            </div>                            
                            <div class="flex-1">
                                <span class="text-offwhite text-[14px]">Uusi toiminta • 6 min sitten</span>
                                <p class="text-[#94969C] mt-1"><b class="text-black">Laura Vatanen</b> lorem ipsum dolor sit amet eudat vestibulum cras dolores <b class="text-black">Vestibulum_cras.docx</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- container -->
    </section>
    <!-- add new project end  -->

<?php get_footer(); ?>