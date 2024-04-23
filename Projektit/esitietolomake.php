<?php 

/* Template Name: Esitietolomake */if ( !is_user_logged_in() || !isset($_GET['pid']) || empty($_GET['pid']) ) {
    wp_redirect( site_url() );
    exit;
}

$pid = (int) $_GET['pid'];

if ( !is_int($pid) ) {
    wp_redirect( site_url() );
    exit;
}


// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";


$takaisin = get_permalink( $_GET['pid'] );
$action_url = add_query_arg([
    'pid' => $_GET['pid']
], get_permalink( 62 ) );


get_header( 'noste' );

?>

<?php if ( ( isset($_POST['submit-form']) && $_POST['submit-form'] == 'submitted' ) && ( isset($_POST['pid']) && !empty($_POST['pid']) ) ): 
    
    $project_id = (int) $_POST['pid'];

    if ( is_int($project_id) ) {
        foreach ($_POST as $key => $value) {
            if ( str_contains( $key, 'pilar' ) && !empty($value) ) {

                if ( is_array($value) ) {
                    
                    $satize_arr = array_map(function($arrval){
                        return trim( stripslashes( sanitize_text_field( $arrval ) ) );
                    }, $value);

                    update_post_meta( $project_id, $key, json_encode( $satize_arr ) );

                } else {
                    $santiza_val = trim( stripslashes( sanitize_text_field( $value ) ) );
                    update_post_meta( $project_id, $key, $santiza_val );  

                    if ( $key == 'pilar_K4' ) {
                        wp_update_post([
                         'ID'   => $project_id,
                         'post_title'   => $value
                        ]);                        
                    }

                    if ( $key == 'pilar_K8' ) {
                        update_field( 'projektinumero', $value, $project_id );                      
                    }              

                }

            }
        }




    } else {
        wp_redirect( site_url() );
        exit;   
    }

    ?>

   
    <section class="my-8" id="print-preview">
        <div class="container px-4">
            <div class="border border-solid border-[#E1E1EA] rounded-[12px] p-[20px] bg-white">
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <span class="text-[#818D93] text-[13px] font-medium">Project nimi</span>
                        <h1 class="text-[#08202C] text-[18px] font-medium">Esitietolomake</h1>
                    </div>
    
                    <div>
                        <button class="print-btn text-[#08202C] font-medium bg-[#E9E9F0] border border-solid border-[#CCCCD6] rounded-lg flex items-center gap-2 px-3 py-2">
                            <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path fill="#08202C" d="M60,12h-6V2c0-1.105-0.895-2-2-2H12c-1.105,0-2,0.895-2,2v10H4c-2.211,0-4,1.789-4,4v32 c0,2.211,1.789,4,4,4h6v10c0,1.105,0.895,2,2,2h40c1.105,0,2-0.895,2-2V52h6c2.211,0,4-1.789,4-4V16C64,13.789,62.211,12,60,12z M12,3c0-0.553,0.447-1,1-1h38c0.553,0,1,0.447,1,1v9H12V3z M52,61c0,0.553-0.447,1-1,1H13c-0.553,0-1-0.447-1-1V37 c0-0.553,0.447-1,1-1h38c0.553,0,1,0.447,1,1V61z M62,48c0,1.104-0.896,2-2,2h-6V36c0-1.105-0.895-2-2-2H12c-1.105,0-2,0.895-2,2 v14H4c-1.104,0-2-0.896-2-2V16c0-1.104,0.896-2,2-2h56c1.104,0,2,0.896,2,2V48z"></path> <path fill="#08202C" d="M19,44h12c0.553,0,1-0.447,1-1s-0.447-1-1-1H19c-0.553,0-1,0.447-1,1S18.447,44,19,44z"></path> <path fill="#08202C" d="M45,48H19c-0.553,0-1,0.447-1,1s0.447,1,1,1h26c0.553,0,1-0.447,1-1S45.553,48,45,48z"></path> <path fill="#08202C" d="M38,54H19c-0.553,0-1,0.447-1,1s0.447,1,1,1h19c0.553,0,1-0.447,1-1S38.553,54,38,54z"></path> <path fill="#08202C" d="M55,18c-1.657,0-3,1.343-3,3s1.343,3,3,3s3-1.343,3-3S56.657,18,55,18z M55,22c-0.553,0-1-0.447-1-1 s0.447-1,1-1s1,0.447,1,1S55.553,22,55,22z"></path> <path fill="#08202C" d="M45,18c-1.657,0-3,1.343-3,3s1.343,3,3,3s3-1.343,3-3S46.657,18,45,18z M45,22c-0.553,0-1-0.447-1-1 s0.447-1,1-1s1,0.447,1,1S45.553,22,45,22z"></path> </g> </g></svg>
      
                            Tulosta
                        </button>
                    </div>
                </div>

                <hr class="border border-solid border-[#E1E1EA] ml-[-20px] mr-[-20px]">

                <div class="max-w-[800px] mx-auto">
                    <p class="text-[#08202C] text-[14px] font-medium mt-10">Vestibulum</p>
                    <p class="text-[#08202C] text-[14px] font-medium mb-10">Cras Eudat Dolores</p>

                    <h1 class="text-black text-[17px] lg:text-[24px] mb-10 font-bold">
                        Esitietolomake
                    </h1>

                    <table class="w-full">
                        <tr>
                            <th colspan="2" class="py-[10px] px-[15px] text-left bg-[#00B2A9] text-white text-[19px] font-medium border border-solid border-[#E1E1EA]">PROJEKTINJOHTO</th>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Projektinjohtokonsultti (yhtiö)</td>
                            <td class="py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_P0']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Projektipäällikkö/vastuuhenkilö</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_P1']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Projektipäällikön/vastuuhenkilön puhelinnumero</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_P2']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Projektipäällikön/vastuuhenkilön sähköposti</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA] opacity-50"><?php echo esc_html($_POST['pilar_P3']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Projektijohtamisen asiantuntija</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_P4']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Projektijohtamisen asiantuntijan puhelinnumero</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_P5']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Rakennuttajan turvallisuuskoordinaattori</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_TK1']??''); ?></td>
                        </tr>
                    </table>

                    <div class="h-[16px] bg-[#F8F8F8]"></div>

                    <table class="w-full">
                        <tr>
                            <th colspan="2" class="py-[10px] px-[15px] text-left bg-[#00B2A9] text-white text-[19px] font-medium border border-solid border-[#E1E1EA]">TILAAJA, KIINTEISTÖ JA SUUNNITTELIJAT</th>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Tilaaja (yhtiö)</td>
                            <td class="py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_T1']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Tilaajan edustaja (yhtiö)</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_T2']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Tilaajan edustaja (henkilö)</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA] opacity-50"><?php echo esc_html($_POST['pilar_T3']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Tilaajan edustaja (tehtävä)</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_T4']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Tilaajan edustajan puhelinnumero</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_T5']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Tilaajan edustajan sähköposti</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_T6']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Tilaajan Y-tunnus</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_T7']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Tilaajan osoite (yhtiö)</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_T8']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Tilasuunnittelija (yhtiö)</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_T9']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Tilasuunnittelija (henkilö)</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_T10']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Tilasuunnittelijan puhelinnumero</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_T11']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Tilasuunnittelijan sähköposti</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_T12']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Kiinteistön nimi</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_K1']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Kiinteistön katuosoite</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA] opacity-50"><?php echo esc_html($_POST['pilar_K2']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Kiinteistön postinumero ja postitoimipaikka</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_K3']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Projektin nimi</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_K4']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Rakennuksen valmistumisvuosi</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_K5']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Kiinteistöpäällikkö (Henkilö)</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_K6']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Meluavan työn aikarajoitukset (x-y)</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_K7']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Projektinumero</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_K8']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Kiinteistöpäällikön sähköposti</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_K9']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Kiinteistöpäällikön puhelinnumero</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_K10']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Huoltohenkilö (Henkilö)</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_K11']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Huollon sähköposti</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_K12']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Huollon puhelinnumero</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA] opacity-50"><?php echo esc_html($_POST['pilar_K13']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Aulan sähköposti</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA] opacity-50"><?php echo esc_html($_POST['pilar_K14']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Aulan puhelinnumero</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA] opacity-50"><?php echo esc_html($_POST['pilar_K15']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Aulan aukioloajat (x-y)</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_K16']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Muutostöiden alaisen tilan sammutus-/ilmoitusjärjestelmä</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html(implode(', ', (array) $_POST['pilar_K17']??'')); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Onko automaatio suljettu järjestelmä</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html((($_POST['pilar_K18']??'yes') == 'no')?'Ei':'Kyllä, kenen (' . $_POST['pilar_K18'] . ')'); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Onko kulunvalvonta suljettu järjestelmä</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html((($_POST['pilar_K19']??'yes') == 'no')?'Ei':'Kyllä, kenen (' . $_POST['pilar_K19'] . ')'); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Vuokralaisten sähkön laskutus</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html(implode(', ', (array) $_POST['pilar_K20']??'')); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Kiinteistön erikoisuudet (johtokaivot ulkoseinillä, vanhat lasiseinät huonoja, väliseinät ohuita tms.)</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_K21']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Kiinteistömanageeraus (yhtiö)</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_K22']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Huoltoyhtiö</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_K23']??''); ?></td>
                        </tr>
                    </table>

                    <div class="h-[16px] bg-[#F8F8F8]"></div>

                    <table class="w-full">
                        <tr>
                            <th colspan="2" class="py-[10px] px-[15px] text-left bg-[#00B2A9] text-white text-[19px] font-medium border border-solid border-[#E1E1EA]">URAKOITSIJA</th>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Päätoteuttaja (Yhtiö)</td>
                            <td class="py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA] opacity-50"><?php echo esc_html($_POST['pilar_U1']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Päätoteuttajan Y-tunnus</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_U2']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Päätoteuttajan osoite</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_U3']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Päätoteuttajan sopimusasioista vastaava henkilö</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_U4']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Päätoteuttajan sopimusasioista vastaavan henkilön sähköposti</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_U5']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Päätoteuttajan sopimusasioista vastaavan henkilön puhelinnumero</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_U6']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Päätoteuttajan vastaava työnjohtaja</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_U7']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Päätoteuttajan vastaavan työnjohtajan sähköposti</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_U8']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Päätoteuttajan vastaavan työnjohtajan puhelinnumero</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_U9']??''); ?></td>
                        </tr>
                    </table>

                    <div class="h-[16px] bg-[#F8F8F8]"></div>

                    <table class="w-full">
                        <tr>
                            <th colspan="2" class="py-[10px] px-[15px] text-left bg-[#00B2A9] text-white text-[19px] font-medium border border-solid border-[#E1E1EA]">VUOKRALAINEN</th>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Vuokralainen (yhtiö)</td>
                            <td class="py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_V1']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Vuokralaisen allekirjoitusoikeudellinen henkilö (nimi)</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_V2']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Vuokralaisen yhteyshenkilö suunnitteluasioissa (nimi)</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA] opacity-50"><?php echo esc_html($_POST['pilar_V3']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Vuokralaisen yhteyshenkilön sähköposti</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_V4']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Vuokralaisen yhteyshenkilön puhelinnumero</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_V5']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Vuokralaisen Y-tunnus</td>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_V6']??''); ?></td>
                        </tr>
                    </table>

                    <div class="h-[16px] bg-[#F8F8F8]"></div>

                    <table class="w-full">
                        <tr>
                            <th colspan="2" class="py-[10px] px-[15px] text-left bg-[#00B2A9] text-white text-[19px] font-medium border border-solid border-[#E1E1EA]">PTS JA MUUT</th>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Muutostöissä huomioitavat PTS-asiat (esim. vaihdetaan valaistus LED vaikka suunnitelmissa ei lue)</td>
                            <td class="py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_PTS']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Sähköisen laskutuksen ohje, tiedot kopioituina (ei kuvia)</td>
                            <td class="py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_M1']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Pyydä avaimet ja kulkutunnisteet Nosteelle, mistä nouto</td>
                            <td class="py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_M2']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Kokoustilojen varausohje, tiedot kopioituina (ei kuvia)</td>
                            <td class="py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_M3']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Projektipankki ja ohjeet</td>
                            <td class="py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_M4']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Tilamuutoksen ala</td>
                            <td class="py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_K22_']??''); ?></td>
                        </tr>
                    </table>

                    <div class="h-[16px] bg-[#F8F8F8]"></div>

                    <table class="w-full">
                        <tr>
                            <th colspan="2" class="py-[10px] px-[15px] text-left bg-[#00B2A9] text-white text-[19px] font-medium border border-solid border-[#E1E1EA]">TEHTÄVÄT TYÖT</th>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Purkutyöt</td>
                            <td class="py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_TY1']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Lattiatyöt</td>
                            <td class="py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_TY2']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">WC-muutokset</td>
                            <td class="py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_TY3']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Sähkötyöt</td>
                            <td class="py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_TY4']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Turva- ja lukitustyöt</td>
                            <td class="py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_TY10']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Käyttö- ja yhteiskustannukset</td>
                            <td class="py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_TY12']??''); ?></td>
                        </tr>
                    </table>

                    <div class="h-[16px] bg-[#F8F8F8]"></div>

                    <table class="w-full">
                        <tr>
                            <th colspan="2" class="py-[10px] px-[15px] text-left bg-[#00B2A9] text-white text-[19px] font-medium border border-solid border-[#E1E1EA]">BUDJETTI JA URAKKAHINTA</th>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Hyväksytty kokonaisbudjetti (€ alv. 0%)</td>
                            <td class="py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">€ <?php echo esc_html($_POST['pilar_BU1']??'0.00'); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Hyväksytty budjetti rakennustöille (€, alv. 0%)</td>
                            <td class="py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">€ <?php echo esc_html($_POST['pilar_BU2']??'0.00'); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Hyväksytty budjetti proj.joht + rakennuttamisen tehtävät (€, alv. 0%)</td>
                            <td class="py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">€ <?php echo esc_html($_POST['pilar_BU3']??'0.00'); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Hyväksytty budjetti suunnittelulle (€, alv. 0%)</td>
                            <td class="py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">€ <?php echo esc_html($_POST['pilar_BU4']??'0.00'); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Hyväksytty budjetin riskivaraus (€, alv. 0%)</td>
                            <td class="py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">€ <?php echo esc_html($_POST['pilar_BU5']??'0.00'); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Kiinteä urakkahinta (€ alv. 0%)</td>
                            <td class="py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">€ <?php echo esc_html($_POST['pilar_UH1']??'0.00'); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Urakkahinnan alv. osuus €</td>
                            <td class="py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">€ <?php echo esc_html($_POST['pilar_UH2']??'0.00'); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Kiinteä urakkahinta (€ alv. 24%)</td>
                            <td class="py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">€ <?php echo esc_html($_POST['pilar_UH3']??'0.00'); ?></td>
                        </tr>
                    </table>

                    <div class="h-[16px] bg-[#F8F8F8]"></div>

                    <table class="w-full">
                        <tr>
                            <th colspan="2" class="py-[10px] px-[15px] text-left bg-[#00B2A9] text-white text-[19px] font-medium border border-solid border-[#E1E1EA]">VAADITUT LOPPUDOKUMENTIT</th>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Urakoitsijan itselle luovutuksen virhe- ja puutelista</td>
                            <td class="py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html($_POST['pilar_VL1']??''); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] align-top text-[#586B74] border border-solid border-[#E1E1EA]">Urakoitsijan itselle luovutuksen virhe- ja puutelista</td>
                            <td class="py-[10px] pl-[35px] pr-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">
                                <ul class="list-disc">
                                    <?php for ($i=2; $i <= 16; $i++) :
                                        if (!isset($_POST['pilar_VL' . $i]) || empty($_POST['pilar_VL' . $i])) {continue;}
                                        if ($i == 16 && !isset($_POST['VL16_check'])) {continue;}
                                        ?>
                                        <li class="mb-3"><?php echo esc_html($_POST['pilar_VL' . $i]??''); ?></li>
                                    <?php endfor; ?>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-1/2 py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]">Projektin valmistumisaika xx.xx.xxxx</td>
                            <td class="py-[10px] px-[15px] text-[#586B74] border border-solid border-[#E1E1EA]"><?php echo esc_html(implode(', ', [$_POST['pilar_VA1']??'',
                            // $_POST['pilar_VA2']??''
                            ])); ?></td>
                        </tr>
                    </table>
                </div>

                <hr class="border border-solid border-[#E1E1EA] ml-[-20px] mr-[-20px] mt-10">

                <div class="flex items-center justify-between pt-[20px]">
                    <div>
                        <a href="<?php echo esc_attr( $takaisin ); ?>" class="text-[14px] text-black font-medium border border-solid border-[#E1E1EA] rounded-lg flex items-center pr-3 py-1">
                            <svg width="24px" height="24px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" stroke="#000000" stroke-width="0.00032"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="icomoon-ignore"> </g> <path d="M12.792 15.233l-0.754 0.754 6.035 6.035 0.754-0.754-5.281-5.281 5.256-5.256-0.754-0.754-3.013 3.013z" fill="#7a7a7a"> </path> </g></svg>
                            Takaisin
                        </a>
                    </div>
    
                    <div>
                        <a href="<?php echo esc_attr( $action_url ); ?>" class="btn bg-white border border-black2">
                            <i class="um-faicon-pencil-square-o"></i>
                            <span>Muokkaa projektia</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        window.onload = () => {
            jQuery('.print-btn').on('click', (event) => {
                event.preventDefault();print();
            });
        }
    </script>
    <style>
        @media print {
            body {visibility: hidden;}
            .border.border-solid.border-\[\#E1E1EA\].rounded-\[12px\].p-\[20px\].bg-white .max-w-\[800px\].mx-auto {
                top: 0;
                left: 0;
                width: calc(8.27in * 1.25);
                max-width: unset;
                position: absolute;
                visibility: visible;
            }
        }
    </style>
    
<?php else: ?>

    <section class="my-8">
        <div class="container px-4">
            <form id="esitietolomake_form" action="<?php echo esc_url( $action_url ); ?>" method="post">
                 <?php wp_nonce_field( 'esitietolomake_validation', 'esitietolomake_nonce_field' ); ?>
                <input type="hidden" name="pid" value="<?php echo esc_attr( $_GET['pid'] ); ?>">
                
                <div class="border border-solid border-[#E1E1EA] rounded-[12px] p-[20px] bg-white">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <span class="text-[#818D93] text-[13px] font-medium">Project nimi</span>
                            <h1 class="text-[#08202C] text-[18px] font-medium">Esitietolomake</h1>
                        </div>
        
                    </div>

                    <hr class="border border-solid border-[#E1E1EA] ml-[-20px] mr-[-20px]">

                    <div class="max-w-[700px] mx-auto mt-10">
                        <span class="font-medium italic text-[#00B2A9] block"><?php echo esc_html( noste_check_empty(get_post_meta( $pid, 'pilar_K1', true ), 'K1') ); ?></span>
                        <span class="font-medium italic text-[#00B2A9] block"><?php echo esc_html( noste_check_empty(get_post_meta( $pid, 'pilar_K4', true ), 'K4') ); ?></span>
                    </div>

                    <div class="help_wrap my-10 relative">
                        <div class="max-w-[700px] mx-auto flex items-center gap-2">
                            <h2 class="text-black text-[17px] lg:text-[24px] font-medium">
                                Esitietolomake
                            </h2>

                            <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                            
                            <hr class="help_line hidden w-full border border-solid border-[#E1E1EA]">
                        </div>

                        <div class="help_show hidden text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px]">
                            Huom! Tarkasta kaikki tiedot ennen ensimmaisen
                            asiakirjan tekoa.
                        </div>
                    </div>

                    <div class="max-w-[700px] mx-auto mb-10">
                        <h3 class="text-black text-[17px] font-medium">PROJEKTINJOHTO</h3>
                    </div>

                    <div class="mb-3">
                        <div class="help_wrap relative mb-2">
                            <div class="max-w-[700px] mx-auto flex items-center gap-2">
                                <label class="text-[#586B74] text-[14px] block min-w-[190px]">
                                    Projektinjohtokonsultti (yhtiö)
                                </label>
        
                                <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                                
                                <hr class="help_line hidden w-full border border-solid border-[#E1E1EA]">
                            </div>
        
                            <div class="help_show hidden text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px]">
                                Mahdollisuus vaihtaa nimea
                            </div>
                        </div>

                        <div class="max-w-[700px] mx-auto">
                            <input type="text" name="pilar_P0" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" placeholder="Partners at Noste.oi" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_P0', true )) ); ?>">
                        </div>
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Projektipäällikkö/vastuuhenkilö</label>
                        <input type="text" name="pilar_P1" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_P1', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Projektipäällikön/vastuuhenkilön puhelinnumero</label>
                        <input type="text" name="pilar_P2" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_P2', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Projektipäällikön/vastuuhenkilön sähköposti</label>
                        <input type="text" name="pilar_P3" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_P3', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Projektijohtamisen asiantuntija</label>
                        <input type="text" name="pilar_P4" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_P4', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Projektijohtamisen asiantuntijan puhelinnumero</label>
                        <input type="text" name="pilar_P5" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_P5', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Rakennuttajan turvallisuuskoordinaattori</label>
                        <input type="text" name="pilar_TK1" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_TK1', true )) ); ?>">
                    </div>

                    <div class="max-w-[700px] mx-auto mt-10 mb-6">
                        <h3 class="text-black text-[17px] font-medium">TILAAJA, KIINTEISTÖ JA SUUNNITTELIJAT</h3>
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Tilaaja (yhtiö)</label>
                        <input type="text" name="pilar_T1" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_T1', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Tilaajan edustaja (yhtiö)</label>
                        <input type="text" name="pilar_T2" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_T2', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Tilaajan edustaja (henkilö)</label>
                        <input type="text" name="pilar_T3" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_T3', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Tilaajan edustaja (tehtävä)</label>
                        <input type="text" name="pilar_T4" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_T4', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Tilaajan edustajan puhelinnumero</label>
                        <input type="text" name="pilar_T5" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_T5', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Tilaajan edustajan sähköposti</label>
                        <input type="text" name="pilar_T6" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_T6', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Tilaajan Y-tunnus</label>
                        <input type="text" name="pilar_T7" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_T7', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Tilaajan osoite (yhtiö)</label>
                        <input type="text" name="pilar_T8" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_T8', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Tilasuunnittelija (yhtiö)</label>
                        <input type="text" name="pilar_T9" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_T9', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Tilasuunnittelija (henkilö)</label>
                        <input type="text" name="pilar_T10" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_T10', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Tilasuunnittelijan puhelinnumero</label>
                        <input type="text" name="pilar_T11" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_T11', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Tilasuunnittelijan sähköposti</label>
                        <input type="text" name="pilar_T12" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_T12', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Kiinteistön nimi</label>
                        <input type="text" name="pilar_K1" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_K1', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Kiinteistön katuosoite</label>
                        <input type="text" name="pilar_K2" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_K2', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Kiinteistön postinumero ja postitoimipaikka</label>
                        <input type="text" name="pilar_K3" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_K3', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Projektin nimi</label>
                        <input type="text" name="pilar_K4" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_K4', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Rakennuksen valmistumisvuosi</label>
                        <input type="text" name="pilar_K5" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_K5', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Kiinteistöpäällikkö (Henkilö)</label>
                        <input type="text" name="pilar_K6" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_K6', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Meluavan työn aikarajoitukset (x-y)</label>
                        <input type="text" name="pilar_K7" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_K7', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Projektinumero</label>
                        <input type="text" name="pilar_K8" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_K8', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Kiinteistöpäällikön sähköposti</label>
                        <input type="text" name="pilar_K9" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_K9', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Kiinteistöpäällikön puhelinnumero</label>
                        <input type="text" name="pilar_K10" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_K10', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Huoltohenkilö (Henkilö)</label>
                        <input type="text" name="pilar_K11" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_K11', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Huollon sähköposti</label>
                        <input type="text" name="pilar_K12" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_K12', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Huollon puhelinnumero</label>
                        <input type="text" name="pilar_K13" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_K13', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Aulan sähköposti</label>
                        <input type="text" name="pilar_K14" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_K14', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Aulan puhelinnumero</label>
                        <input type="text" name="pilar_K15" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_K15', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Aulan aukioloajat (x-y)</label>
                        <input type="text" name="pilar_K16" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_K16', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-3 text-[#586B74] text-[14px] block">Muutostöiden alaisen tilan sammutus-/ilmoitusjärjestelmä</label>

                        <div class="flex flex-col lg:flex-row gap-3 lg:items-center lg:gap-20">
                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show <?php echo noste_checkbox_status( noste_checked_with_json( get_post_meta( $pid, 'pilar_K17', true ), 'Sprinkleri') ); ?>" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>

                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K17[]" value="Sprinkleri" <?php echo esc_html( noste_checked_with_json( get_post_meta( $pid, 'pilar_K17', true ), 'Sprinkleri' ) ); ?>>
                                <span class="flex-1 text-[#586B74] text-[14px]">Sprinkleri</span>
                            </label>

                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show <?php echo esc_attr( noste_checkbox_status( noste_checked_with_json( get_post_meta( $pid, 'pilar_K17', true ), 'Paloilmoittimet') ) ); ?>" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K17[]" value="Paloilmoittimet" <?php echo esc_html( noste_checked_with_json( get_post_meta( $pid, 'pilar_K17', true ), 'Paloilmoittimet' ) ); ?>>
                                <span class="flex-1 text-[#586B74] text-[14px]">Paloilmoittimet</span>
                            </label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="help_wrap relative mb-2">
                            <div class="max-w-[700px] mx-auto flex items-center gap-2">
                                <label class="text-[#586B74] text-[14px] block min-w-[230px]">
                                    Onko automaatio suljettu järjestelmä
                                </label>
        
                                <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                                
                                <hr class="help_line hidden w-full border border-solid border-[#E1E1EA]">
                            </div>
        
                            <div class="help_show hidden text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px]">
                                Suljetulla järjestelmällä tarkoitetaan järjestelmää, joihin
                                muut yritykset eivät voi tehdä muutoksia (Esim.
                                Caverion)
                            </div>
                        </div>

                        <div class="input-yes-no flex flex-col lg:flex-row gap-3 lg:items-center lg:gap-20 max-w-[700px] mx-auto">
                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <input type="text" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] lg:w-[50%] border border-solid border-[#06F9B7] rounded-[5px] p-2" name="pilar_K18" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_K18', true ) ) != 'no' ? noste_check_empty(get_post_meta( $pid, 'pilar_K18', true ) ) : '' ); ?>">
                                <!-- <input type="radio" class="radio_change absolute opacity-0" name="pilar_K18"> -->
                                <span class="flex-1 text-[#586B74] text-[14px]">Kyllä, kenen (---)</span>
                            </label>

                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show <?php echo esc_attr( noste_checkbox_status( noste_check_empty(get_post_meta( $pid, 'pilar_K18', true )) == 'no' ) ); ?>" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="radio" class="radio_change absolute opacity-0" name="pilar_K18" value="no" <?php echo esc_html( checked( noste_check_empty(get_post_meta( $pid, 'pilar_K18', true )), 'no' ) ); ?>>
                                <span class="flex-1 text-[#586B74] text-[14px]">Ei</span>
                            </label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="help_wrap relative mb-2">
                            <div class="max-w-[700px] mx-auto flex items-center gap-2">
                                <label class="text-[#586B74] text-[14px] block min-w-[245px]">
                                    Onko kulunvalvonta suljettu järjestelmä
                                </label>
        
                                <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                                
                                <hr class="help_line hidden w-full border border-solid border-[#E1E1EA]">
                            </div>
        
                            <div class="help_show hidden text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px]">
                                Suljetulla järjestelmällä tarkoitetaan järjestelmää, joihin
                                muut yritykset eivät voi tehdä muutoksia (Esim.
                                Caverion)
                            </div>
                        </div>

                        <div class="input-yes-no flex flex-col lg:flex-row gap-3 lg:items-center lg:gap-20 max-w-[700px] mx-auto">
                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <input type="text" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] lg:w-[50%] border border-solid border-[#06F9B7] rounded-[5px] p-2" name="pilar_K19" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_K19', true ) ) != 'no' ? noste_check_empty(get_post_meta( $pid, 'pilar_K19', true ) ) : '' ); ?>">
                                <span class="flex-1 text-[#586B74] text-[14px]">Kyllä, kenen (---)</span>
                            </label>

                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show <?php echo esc_attr( noste_checkbox_status( noste_check_empty(get_post_meta( $pid, 'pilar_K19', true )) == 'no' ) ); ?>" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="radio" class="radio_change absolute opacity-0" name="pilar_K19" value="no" <?php echo esc_html( checked( noste_check_empty(get_post_meta( $pid, 'pilar_K19', true )), 'no' ) ); ?>>
                                <span class="flex-1 text-[#586B74] text-[14px]">Ei</span>
                            </label>
                        </div>
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-3 text-[#586B74] text-[14px] block">Vuokralaisten sähkön laskutus</label>

                        <div class="flex flex-col lg:flex-row gap-3 lg:items-center lg:gap-20">
                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show <?php echo esc_attr( noste_checkbox_status( noste_checked_with_json( get_post_meta( $pid, 'pilar_K20', true ), 'Oma sahkosopimus') ) ); ?>" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K20[]" value="Oma sahkosopimus" <?php echo esc_html( noste_checked_with_json( get_post_meta( $pid, 'pilar_K20', true ), 'Oma sahkosopimus' ) ); ?>>
                                <span class="flex-1 text-[#586B74] text-[14px]">Oma sähkösopimus</span>
                            </label>

                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show <?php echo esc_attr( noste_checkbox_status( noste_checked_with_json( get_post_meta( $pid, 'pilar_K20', true ), 'Nelioperusteinen') ) ); ?>" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K20[]" value="Nelioperusteinen" <?php echo esc_html( noste_checked_with_json( get_post_meta( $pid, 'pilar_K20', true ), 'Nelioperusteinen' ) ); ?>>
                                <span class="flex-1 text-[#586B74] text-[14px]">Neliöperusteinen</span>
                            </label>

                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[16px] h-[16px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show <?php echo esc_attr( noste_checkbox_status(noste_checked_with_json( get_post_meta( $pid, 'pilar_K20', true ), 'Kiinteiston alamittaus')) ); ?>" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_K20[]" value="Kiinteiston alamittaus" <?php echo esc_html( noste_checked_with_json( get_post_meta( $pid, 'pilar_K20', true ), 'Kiinteiston alamittaus' ) ); ?>>
                                <span class="flex-1 text-[#586B74] text-[14px]">Kiinteistön alamittaus</span>
                            </label>
                        </div>
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Kiinteistön erikoisuudet (johtokaivot ulkoseinillä, vanhat lasiseinät huonoja, väliseinät ohuita tms.)</label>
                        <input type="text" name="pilar_K21" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_K21', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Kiinteistömanageeraus (yhtiö)</label>
                        <input type="text" name="pilar_K22" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_K22', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Huoltoyhtiö</label>
                        <input type="text" name="pilar_K23" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_K23', true )) ); ?>">
                    </div>

                    <div class="max-w-[700px] mx-auto mt-10 mb-6">
                        <h3 class="text-black text-[17px] font-medium">URAKOITSIJA</h3>
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Päätoteuttaja (Yhtiö)</label>
                        <input type="text" name="pilar_U1" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_U1', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Päätoteuttajan Y-tunnus</label>
                        <input type="text" name="pilar_U2" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_U2', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Päätoteuttajan osoite</label>
                        <input type="text" name="pilar_U3" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_U3', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Päätoteuttajan sopimusasioista vastaava henkilö</label>
                        <input type="text" name="pilar_U4" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_U4', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Päätoteuttajan sopimusasioista vastaavan henkilön sähköposti</label>
                        <input type="text" name="pilar_U5" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_U5', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Päätoteuttajan sopimusasioista vastaavan henkilön puhelinnumero</label>
                        <input type="text" name="pilar_U6" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_U6', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Päätoteuttajan vastaava työnjohtaja</label>
                        <input type="text" name="pilar_U7" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_U7', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Päätoteuttajan vastaavan työnjohtajan sähköposti</label>
                        <input type="text" name="pilar_U8" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_U8', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Päätoteuttajan vastaavan työnjohtajan puhelinnumero</label>
                        <input type="text" name="pilar_U9" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_U9', true )) ); ?>">
                    </div>

                    <div class="max-w-[700px] mx-auto mt-10 mb-6">
                        <h3 class="text-black text-[17px] font-medium">VUOKRALAINEN</h3>
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Vuokralainen (yhtiö)</label>
                        <input type="text" name="pilar_V1" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_V1', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Vuokralaisen allekirjoitusoikeudellinen henkilö (nimi)</label>
                        <input type="text" name="pilar_V2" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_V2', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Vuokralaisen yhteyshenkilö suunnitteluasioissa (nimi)</label>
                        <input type="text" name="pilar_V3" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_V3', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Vuokralaisen yhteyshenkilön sähköposti</label>
                        <input type="text" name="pilar_V4" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_V4', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Vuokralaisen yhteyshenkilön puhelinnumero</label>
                        <input type="text" name="pilar_V5" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_V5', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Vuokralaisen Y-tunnus</label>
                        <input type="text" name="pilar_V6" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_V6', true )) ); ?>">
                    </div>

                    <div class="max-w-[700px] mx-auto mt-10 mb-6">
                        <h3 class="text-black text-[17px] font-medium">PTS JA MUUT</h3>
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Muutostöissä huomioitavat PTS-asiat (esim. vaihdetaan valaistus LED vaikka suunnitelmissa ei lue)</label>
                        <input type="text" name="pilar_PTS" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_PTS', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Sähköisen laskutuksen ohje, tiedot kopioituina (ei kuvia)</label>
                        <input type="text" name="pilar_M1" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_M1', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Pyydä avaimet ja kulkutunnisteet Nosteelle, mistä nouto</label>
                        <input type="text" name="pilar_M2" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_M2', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Kokoustilojen varausohje, tiedot kopioituina (ei kuvia)</label>
                        <input type="text" name="pilar_M3" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_M3', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Projektipankki ja ohjeet</label>
                        <input type="text" name="pilar_M4" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_M4', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Tilamuutoksen ala</label>
                        <input type="text" name="pilar_K22_" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_K22_', true )) ); ?>">
                    </div>

                    <div class="help_wrap mt-10 mb-5 relative">
                        <div class="max-w-[700px] mx-auto flex items-center gap-2">
                            <h2 class="text-black text-[17px] lg:text-[24px] font-medium min-w-[190px]">
                                TEHTÄVÄT TYÖT
                            </h2>

                            <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                            
                            <hr class="help_line hidden w-full border border-solid border-[#E1E1EA]">
                        </div>

                        <div class="help_show hidden text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px]">
                            Lisää kenttään kustannusarvion mukainen kustannus
                        </div>
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Purkutyöt</label>
                        <div class="flex items-center gap-3">
                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="TY1_check">
                            </label>
                            <input type="text" name="pilar_TY1" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_TY1', true )) ); ?>">
                        </div>
                    </div>
                    
                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Lattiatyöt</label>
                        <div class="flex items-center gap-3">
                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="TY2_check">
                            </label>
                            <input type="text" name="pilar_TY2" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_TY2', true )) ); ?>">
                        </div>
                    </div>
                    
                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Seinätyöt</label>
                        <div class="flex items-center gap-3">
                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="TY3_check">
                            </label>
                            <input type="text" name="pilar_TY3" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_TY3', true )) ); ?>">
                        </div>
                    </div>
                    
                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Alakatto- ja holvityöt</label>
                        <div class="flex items-center gap-3">
                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="TY4_check">
                            </label>
                            <input type="text" name="pilar_TY4" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_TY4', true )) ); ?>">
                        </div>
                    </div>
                    
                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">WC-muutokset</label>
                        <div class="flex items-center gap-3">
                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="TY5_check">
                            </label>
                            <input type="text" name="pilar_TY5" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_TY5', true )) ); ?>">
                        </div>
                    </div>
                    
                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Keittiömuutokset</label>
                        <div class="flex items-center gap-3">
                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="T6_check">
                            </label>
                            <input type="text" name="pilar_T6_" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_T6_', true )) ); ?>">
                        </div>
                    </div>
                    
                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Kalustustyöt</label>
                        <div class="flex items-center gap-3">
                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="TY6_check">
                            </label>
                            <input type="text" name="pilar_TY6" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_TY6', true )) ); ?>">
                        </div>
                    </div>
                    
                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Sähkötyöt</label>
                        <div class="flex items-center gap-3">
                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="TY7_check">
                            </label>
                            <input type="text" name="pilar_TY7" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_TY7', true )) ); ?>">
                        </div>
                    </div>
                    
                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">LVIA-työt</label>
                        <div class="flex items-center gap-3">
                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="TY8_check">
                            </label>
                            <input type="text" name="pilar_TY8" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_TY8', true )) ); ?>">
                        </div>
                    </div>
                    
                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">SPR-työt</label>
                        <div class="flex items-center gap-3">
                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="TY9_check">
                            </label>
                            <input type="text" name="pilar_TY9" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_TY9', true )) ); ?>">
                        </div>
                    </div>
                    
                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Turva- ja lukitustyöt</label>
                        <div class="flex items-center gap-3">
                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="TY10_check">
                            </label>
                            <input type="text" name="pilar_TY10" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_TY10', true )) ); ?>">
                        </div>
                    </div>
                    
                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Muut työt</label>
                        <div class="flex items-center gap-3">
                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="TY11_check">
                            </label>
                            <input type="text" name="pilar_TY11" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_TY11', true )) ); ?>">
                        </div>
                    </div>
                    
                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Käyttö- ja yhteiskustannukset</label>
                        <div class="flex items-center gap-3">
                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="TY12_check">
                            </label>
                            <input type="text" name="pilar_TY12" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_TY12', true )) ); ?>">
                        </div>
                    </div>

                    <div class="help_wrap mt-10 mb-5 relative">
                        <div class="max-w-[700px] mx-auto flex items-center gap-2">
                            <h2 class="text-black text-[17px] lg:text-[24px] font-medium lg:min-w-[320px]">
                                BUDJETTI JA URAKKAHINTA
                            </h2>

                            <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                            
                            <hr class="help_line hidden w-full border border-solid border-[#E1E1EA]">
                        </div>

                        <div class="help_show hidden text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px]">
                            Huomioi Tilaajan kanssa tehdyt päätökset/
                            muokkaukset, kun siirrät summia kustannusarviosta
                        </div>
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Hyväksytty kokonaisbudjetti (€ alv 0%)</label>
                        <input type="text" name="pilar_BU1" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_BU1', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Hyväksytty budjetti rakennustöille (€, alv. 0%)</label>
                        <input type="text" name="pilar_BU2" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_BU2', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Hyväksytty budjetti proj.joht+ rakennuttamisen tehtävät (€, alv. 0%)</label>
                        <input type="text" name="pilar_BU3" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_BU3', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Hyväksytty budjetti suunnittelulle (€, alv. 0%)</label>
                        <input type="text" name="pilar_BU4" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_BU4', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Hyväksytty budjetin riskivaraus (€, alv. 0%)</label>
                        <input type="text" name="pilar_BU5" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_BU5', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Kiinteä urakkahinta (€ alv 0%)</label>
                        <input type="text" name="pilar_UH1" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_UH1', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Urakkahinnan alv. osuus €</label>
                        <input type="text" name="pilar_UH2" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_UH2', true )) ); ?>">
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Kiinteä urakkahinta (€ alv. 24%)</label>
                        <input type="text" name="pilar_UH3" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[85%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_UH3', true )) ); ?>">
                    </div>

                    <div class="max-w-[700px] mx-auto mt-10 mb-6">
                        <h3 class="text-black text-[17px] font-medium">VAADITUT LOPPUDOKUMENTIT</h3>
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Urakoitsijan itselle luovutuksen virhe- ja puutelista</label>
                        <div class="flex items-center gap-3">
                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="VL1_check">
                            </label>
                            <input type="text" name="pilar_VL1" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2" value="<?php echo esc_attr( noste_check_empty(get_post_meta( $pid, 'pilar_VL1', true )) ); ?>">
                        </div>
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <label class="mb-2 text-[#586B74] text-[14px] block">Urakoitsijan itselle luovutuksen virhe- ja puutelista</label>
                        
                        <label class="mb-1 flex items-center gap-2 cursor-pointer">
                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            </span>
                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_VL2" value="Sähköasennusten tarkastus- ja käyttöönottopöytäkirjat">

                            <span class="flex-1 text-[#586B74] text-[14px]">Sähköasennusten tarkastus- ja käyttöönottopöytäkirjat</span>
                        </label>
                        
                        <label class="mb-1 flex items-center gap-2 cursor-pointer">
                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            </span>
                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_VL3" value="Sähköasennusten 3. osapuolen varmennustarkastuksen pöytäkirja">

                            <span class="flex-1 text-[#586B74] text-[14px]">Sähköasennusten 3. osapuolen varmennustarkastuksen pöytäkirja</span>
                        </label>
                        
                        <label class="mb-1 flex items-center gap-2 cursor-pointer">
                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            </span>
                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_VL4" value="Yleiskaapelointipisteiden mittauspöytäkirja">

                            <span class="flex-1 text-[#586B74] text-[14px]">Yleiskaapelointipisteiden mittauspöytäkirja</span>
                        </label>
                        
                        <label class="mb-1 flex items-center gap-2 cursor-pointer">
                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            </span>
                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_VL5" value="Nousukuidun mittauspöytäkirja">

                            <span class="flex-1 text-[#586B74] text-[14px]">Nousukuidun mittauspöytäkirja</span>
                        </label>
                        
                        <label class="mb-1 flex items-center gap-2 cursor-pointer">
                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            </span>
                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_VL6" value="Ilmamäärämittaus- ja säätöpöytäkirja">

                            <span class="flex-1 text-[#586B74] text-[14px]">Ilmamäärämittaus- ja säätöpöytäkirja</span>
                        </label>
                        
                        <label class="mb-1 flex items-center gap-2 cursor-pointer">
                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            </span>
                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_VL7" value="Uusien jäähdytyspalkkien/konvektoreiden asennuspöytäkirja">

                            <span class="flex-1 text-[#586B74] text-[14px]">Uusien jäähdytyspalkkien/konvektoreiden asennuspöytäkirja</span>
                        </label>
                        
                        <label class="mb-1 flex items-center gap-2 cursor-pointer">
                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            </span>
                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_VL8" value="Uusien vesijohtojen painekokeiden pöytäkirja">

                            <span class="flex-1 text-[#586B74] text-[14px]">Uusien vesijohtojen painekokeiden pöytäkirja</span>
                        </label>
                        
                        <label class="mb-1 flex items-center gap-2 cursor-pointer">
                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            </span>
                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_VL9" value="Paloilmoitinasennusten tarkastuspöytäkirja">

                            <span class="flex-1 text-[#586B74] text-[14px]">Paloilmoitinasennusten tarkastuspöytäkirja</span>
                        </label>
                        
                        <label class="mb-1 flex items-center gap-2 cursor-pointer">
                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            </span>
                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_VL10" value="Paloilmoitinasennusten 3. osapuolen varmennustarkastuksen pöytäkirja">

                            <span class="flex-1 text-[#586B74] text-[14px]">Paloilmoitinasennusten 3. osapuolen varmennustarkastuksen pöytäkirja</span>
                        </label>
                        
                        <label class="mb-1 flex items-center gap-2 cursor-pointer">
                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            </span>
                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_VL11" value="Sprinkleriasennusten asennustodistus">

                            <span class="flex-1 text-[#586B74] text-[14px]">Sprinkleriasennusten asennustodistus</span>
                        </label>
                        
                        <label class="mb-1 flex items-center gap-2 cursor-pointer">
                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            </span>
                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_VL12" value="Sprinkleriasennusten 3. osapuolen varmennustarkastuksen pöytäkirja">

                            <span class="flex-1 text-[#586B74] text-[14px]">Sprinkleriasennusten 3. osapuolen varmennustarkastuksen pöytäkirja</span>
                        </label>
                        
                        <label class="mb-1 flex items-center gap-2 cursor-pointer">
                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            </span>
                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_VL13" value="Automaation tarkastuspöytäkirja">

                            <span class="flex-1 text-[#586B74] text-[14px]">Automaation tarkastuspöytäkirja</span>
                        </label>
                        
                        <label class="mb-1 flex items-center gap-2 cursor-pointer">
                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            </span>
                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_VL14" value="Vedeneristetöiden toteutuspöytäkirja">

                            <span class="flex-1 text-[#586B74] text-[14px]">Vedeneristetöiden toteutuspöytäkirja</span>
                        </label>
                        
                        <label class="mb-1 flex items-center gap-2 cursor-pointer">
                            <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            </span>
                            <input type="checkbox" class="checkbox_change absolute opacity-0" name="pilar_VL15" value="Talotekniikka-asennusten punakynäpiirustukset">

                            <span class="flex-1 text-[#586B74] text-[14px]">Talotekniikka-asennusten punakynäpiirustukset</span>
                        </label>
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto">
                        <div class="flex items-center gap-3">
                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <span class="shadow-[0_0_4px_2px_rgb(81,244,200,44%)] border border-solid border-[#06F9B7] w-[18px] h-[18px] rounded-[4px] inline-flex items-center justify-center">
                                    <svg class="check_show hidden" width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </span>
                                <input type="checkbox" class="checkbox_change absolute opacity-0" name="VL16_check">
                            </label>
                            <input type="text" name="pilar_VL16" placeholder="Muuta..." class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[81%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                        </div>
                    </div>

                    <div class="help_wrap relative mb-2">
                        <div class="max-w-[700px] mx-auto flex items-center gap-2">
                            <label class="text-[#586B74] text-[14px] block min-w-[230px]">
                                Projektin valmistumisaika xx.xx.xxxx
                            </label>

                            <a href="#!" class="help_click"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle> <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path> <circle cx="12" cy="16" r="1" fill="#000000"></circle> </g></svg> </a>                                      
                            
                            <hr class="help_line hidden w-full border border-solid border-[#E1E1EA]">
                        </div>

                        <div class="help_show hidden text-[#586B74] text-[14px] lg:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px]">
                            Mahdollisuus vaihtaa nimea
                        </div>
                    </div>

                    <div class="mb-3 max-w-[700px] mx-auto flex items-center gap-5">
                        <input type="text" name="pilar_VA1" placeholder="XX.XX.XXXX" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[41%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                        <input type="text" name="pilar_VA2" placeholder="XX.XX.XXXX" class="shadow-[0_0_5px_2px_rgb(81,244,200,44%)] w-[100%] lg:w-[41%] border border-solid border-[#06F9B7] rounded-[5px] p-2">
                    </div>

                    <hr class="border border-solid border-[#E1E1EA] ml-[-20px] mr-[-20px] mt-10">

                    <div class="flex items-center justify-between pt-[20px]">
                        <div>
                            <a href="<?php echo esc_attr( $takaisin ); ?>" class="text-[14px] text-black font-medium border border-solid border-[#E1E1EA] rounded-lg flex items-center pr-3 py-1">
                                <svg width="24px" height="24px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" stroke="#000000" stroke-width="0.00032"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="icomoon-ignore"> </g> <path d="M12.792 15.233l-0.754 0.754 6.035 6.035 0.754-0.754-5.281-5.281 5.256-5.256-0.754-0.754-3.013 3.013z" fill="#7a7a7a"> </path> </g></svg>
                                Takaisin
                            </a>
                        </div>
        
                        <div>
                            <button class="sample-btn text-[14px] text-white font-medium bg-[#00B2A9] border border-solid border-[#818D930F] rounded-lg flex items-center gap-2 px-3 py-1">
                                Hyväksy
                            </button>
                           <button class="hidden submit-btn text-[14px] text-white font-medium bg-[#00B2A9] border border-solid border-[#818D930F] rounded-lg flex items-center gap-2 px-3 py-1" type="submit" name="submit-form" value="submitted">
                                Hyväksy
                            </button>                          
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

<?php endif ?>
 <?php get_footer(); ?>