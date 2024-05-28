<?php 
    $tm = $_GET['tm'];
    $user = wp_get_current_user();

    $project_intdata = !empty(get_post_meta( get_the_ID(), sprintf('%s_status', $tm), true )) ? json_decode( get_post_meta( get_the_ID(), sprintf('%s_status', $tm), true ), true ) : [];

    // echo "<pre>";
    // var_dump($project_intdata);
    // echo "</pre>";


    $tm_inner = [
        'kohdekaynnin' => [
            'title' => 'Sovi kohdekäynnin tekemisestä sopivan tahon kanssa',
            'status' => !empty($project_intdata['kohdekaynnin']['status']) ? $project_intdata['kohdekaynnin']['status'] : 0,
            'url' => [
                'link' => '',
                'title' => 'OHJE Kohdekäynti ja siihen valmistautuminen',
            ],
            'comment' => !empty($project_intdata['kohdekaynnin']['comment']) ? $project_intdata['kohdekaynnin']['comment'] : '',
        ],
        'katselmoimassa' => [
            'title' => 'Käy katselmoimassa kohde',
            'status' => !empty($project_intdata['katselmoimassa']['status']) ? $project_intdata['katselmoimassa']['status'] : 0,
            'url' => '',
            'comment' => !empty($project_intdata['katselmoimassa']['comment']) ? $project_intdata['katselmoimassa']['comment'] : '',
        ],
        'huomioitavat' => [
            'title' => 'Tarkasta listaamasi huomioitavat asiat kohteella',
            'status' => !empty($project_intdata['huomioitavat']['status']) ? $project_intdata['huomioitavat']['status'] : 0,
            'url' => '',
            'comment' => !empty($project_intdata['huomioitavat']['comment']) ? $project_intdata['huomioitavat']['comment'] : '',
        ],
        'valokuvaa' => [
            'title' => 'Valokuvaa tilat ja dokumentoi',
            'status' => !empty($project_intdata['valokuvaa']['status']) ? $project_intdata['valokuvaa']['status'] : 0,
            'url' => '',
            'comment' => !empty($project_intdata['valokuvaa']['comment']) ? $project_intdata['valokuvaa']['comment'] : '',
        ],
    ];


    $status = [
        'Aloittamatta',
        'Aloitettu',
        'Odottaa hyväksyntää',
        'Hyväksytty'
    ];

?>


<!-- Main Content -->
<section class="pt-10">
    <div class="container px-4">
        <!-- grid View Item -->
        <div class="grid grid-cols-1">
            <!-- card_item -->
            <div class="card_item relative h-fit">
                <!-- Card Header -->
                <div class="card_header px-4 md:px-8 py-6 border-b border-line top-0 z-10">
                    <div>
                        <p class="text-sm font-normal text-[#818D93] mb-1"><?php echo esc_html(noste_check_empty($args['page_title'])); ?></p>
                        <h2 class="text-xl font-medium text-[#08202C] mb-4">Projektin valmistelu</h2>


                        <div class="content-wrap">
                            <div class="excerpt" id="excerpt_content">
                                <p class="text-base text-[#475467] mb-2">
                                    Projektin valmisteluvaiheessa tärkeintä on tukea kiinteistönomistajan vuokraamisesta vastaavaa tahoa niin, että tilasta tehtävä vuokrasopimustarjous kiinteistönomistajan (eli vuokranantajan / tilaajan) asiakkaalle, eli vuokralaisehdokkaalle olisi mahdollisimman houkutteleva. Samalla vuokrasopimustarjous pyritään laatimaan mahdollisimman...
                                </p>

                                <button class="text-accent underline decoration-accent text-base" id="showMore">Lue lisää</button>
                            </div>

                            <div class="hidden" id="full_content">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                                    <p class="text-base text-[#475467] mb-2">
                                        Projektin valmisteluvaiheessa tärkeintä on tukea kiinteistönomistajan vuokraamisesta vastaavaa tahoa niin, että tilasta tehtävä vuokrasopimustarjous kiinteistönomistajan (eli vuokranantajan / tilaajan) asiakkaalle, eli vuokralaisehdokkaalle olisi mahdollisimman houkutteleva. Samalla vuokrasopimustarjous pyritään laatimaan mahdollisimman kannattavaksi kiinteistönomistajalle. Vaiheelle kuvaavaa on aika-ajoin kiireelliset selvitystyöt, teknisten reunaehtojen selvitys vähillä lähtötiedoilla, sekä vuokrasopimustarjoukseen tarvittavien avustavien lähtötietojen nopea toimitus vuokrauksesta vastaavalle taholle. <br><br>Tässä vaiheessa vuokralaisehdokas usein kilpailuttaa useita kiinteistönomistajia lyhyen ajanjakson sisällä ja kiinteistöomistajan, jota noste.io auttaa, on pyrittävä antamaan vuokralaisehdokkaalle paras mahdollinen tarjous vuokralaisen tarvitsemista tiloista, niin tilatarpeiden kuin kustannusten osalta.
                                    </p>

                                    <p class="text-base text-[#475467] mb-2">
                                        Noste.ion toimittamat vuokrasopimustarjouksen lähtötiedot pyritään antamaan mahdollisimman paikkaansa pitävänä, ilman virheitä ja mahdollisimman nopeasti kiinteistönomistajalle vuokrasopimustarjouksen lähtötiedoiksi.<br><br> Tässä vaiheessa tehtävät alustavat selvitykset pyritään usein myös tekemään hyvin kustannustehokkaasti, koska vuokralaisehdokas voi päätyä valitsemaan jonkin toisen kiinteistönomistajan tilat, jäämään vanhoihin tiloihin tai tekemään jonkin muun ratkaisuun. Vuokrauksesta vastaavan tahon mieltymysten mukaan, henkilö joko toivoo paljon yhteystyötä noste.iolta tai sitten henkilö tekee hyvin omatoimisesti ja omin päin tämän vaiheen.
                                    </p>
                                </div>

                                <div class="text-right">
                                    <button class="text-accent underline decoration-accent text-base" id="hideMore">Vähemmän lukemista</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Card Header -->
                <!-- Card Body -->
                <div class="px-4 md:px-8 pt-6 pb-10 lg:h-[645px] overflow-y-auto no-scrollbar scroll-smooth">
                    <h1 class="text-2xl text-dark mb-4">Kohdekäynti</h1>

                    <p class="text-base text-[#475467] mb-4">
                        <b>Sisältö:</b><br>
                        Käydään kohteessa tutustumassa ja selvittämässä avoimet asiat sekä riskit. Dokumentoidaan tila.
                    </p>

                    <div class="mb-6 excerpt-expand">
                        <p class="text-base text-[#475467]"><b>Kuvaus:</b></p>
                        <p class="text-base text-[#475467] mb-4 content">
                            Moni epäselvä asia selviää vain vuokralaismuutostilassa paikan päällä käymällä. Kohdekäynti on hyvä hetki selvittää asioita, joihin et vielä ole saanut lähtötiedoista, suunnitelmista tai kiinteistöpäälliköltä / -huollolta vastauksia. Jotta käynti olisi mahdollisimman hyödyllinen, valmistaudu käyntiin hyvin etukäteen ja tallenna käynti valokuvin. Liikaa valokuvia ei voi ottaa. Näin voit palata kohteeseen myöhemminkin valokuvien avulla. Muista selvittää miten tilaan pääsee (avaimet / kulkuoikeudet) ja saako tiloihin mennä vapaasti (onko tiloissa vuokralainen). Voit sopia kohdekäynnille, varsinkin kohteessa ensikertaa toimiessasi, tapaamisen vuokrauksen, huollon tai kiinteistöpäällikön kanssa, jolloin saat helposti lisää tietoa kohteesta myös heiltä.<br><br> Joskus voi olla sellainen tilanne, että vuokranantajalla ja entisellä vuokralaisella, joka kuitenkin vielä toimii vuokralaismuutoksen kohteena olevissa tiloissa, ei ole parhaimmat mahdolliset välit. Silloin kohdekäynti on syytä tehdä mahdollisimman huomaamattomasti, häiriötä herättämättömästi ja kiinteistöpäällikön johtamana. Omasta toimeksiannosta ei myöskään saa antaa ulkopuolisille mitään tietoja. Tällaisesta tilanteesta tilaaja kuitenkin pääsääntöisesti muistaa ilmoittaa.
                        </p>

                        <button class="text-accent underline decoration-accent text-base showMore">Lue lisää</button>
                    </div>

                    <div>

                        <div class="flex flex-col">
                            <div class="overflow-x-auto shadow-md sm:rounded-lg">
                                <div class="inline-block min-w-full align-middle">
                                    <div class="overflow-hidden">
                                        <table class="w-full whitespace-wrap border-collapse">
                                            <thead class="text-left rounded-t-lg bg-accent text-white">
                                                <tr class="rounded-lg">
                                                    <th class="p-3">Tehtävät:</th>
                                                    <th class="p-3">Status:</th>
                                                    <th class="p-3">Dokumentit:</th>
                                                    <th class="p-3 min-w-[310px]">Kommentti:</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($tm_inner as $key => $value): ?>
                                                    <tr>
                                                        <td class="px-4 py-3 border border-line">
                                                            <p class="text-sm text-[#818D93]"><?php echo esc_html( $value['title'] ); ?></p>
                                                        </td>
                                                        <td class="px-4 py-3 border border-line text-sm" id="project_table_status">

                                                        <?php if ( array_intersect( [ 'um_valvoja' ], $user->roles ) ): ?>
                                                            <form action="#" method="post" id="valvoja_status">
                                                                <input type="hidden" name="post_id" value="<?php echo esc_attr(get_the_ID()); ?>">
                                                                <input type="hidden" name="tm" value="<?php echo esc_attr( $tm ); ?>">
                                                                <input type="hidden" name="tmin" value="<?php echo esc_attr( $key ); ?>">

                                                                <select name="valvoja_status" class="status_<?php echo esc_attr( strtolower( $value['status'] ) ); ?>">
                                                                    <?php foreach ($status as $k => $v): ?>
                                                                        <option value="<?php echo esc_attr( $k ); ?>" <?php selected( strtolower( $value['status'] ), $k, true ); ?>><?php echo esc_html( $v ); ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </form>
                                                        <?php else: ?>    
                                                            <div class="instep-status relative inline-flex items-center rounded-md border border-line px-2 py-1 <?php echo esc_attr( 'status_' . strtolower( $value['status'] ) ); ?>">
                                                                <span></span>
                                                                <?php echo esc_html( $status[$value['status']] ); ?>
                                                            </div>
                                                        <?php endif ?>
                                                        <style type="text/css">
                                                            form#valvoja_status select {
                                                                border: 1px solid #ddd;
                                                                background: transparent;
                                                                border-radius: 3px;
                                                            }
                                                            form#valvoja_status select.status_2 {
                                                                border-left: 8px solid rgb(0 178 169 / var(--tw-border-opacity));
                                                            }   
                                                            form#valvoja_status select.status_3 {
                                                                border-left: 8px solid rgb(6 249 183 / var(--tw-border-opacity));
                                                            }
                                                            form#valvoja_status select.status_1 {
                                                                border-left: 8px solid #E1E1EA;
                                                            }
                                                            form#valvoja_status select.status_0 {
                                                                border-left: 10px solid #f5f5f5;
                                                            }
                                                        </style>

                                                            <!-- $status -->
                                                        </td>
                                                        <td class="px-4 py-3 border border-line">
                                                            <?php
                                                                if (!empty($value['url'])) :
                                                                    $title = !empty($value['url']['title']) ? $value['url']['title'] : false;
                                                                    $link = !empty($value['url']['link']) ? $value['url']['link'] : false;
                                                                    if (!empty($link)) :
                                                                        $tmin_url = add_query_arg([
                                                                            'tm' => $tm,
                                                                            'tmin' => $value['url']['link']
                                                                        ], get_permalink(get_the_ID()));
                                                                ?>
                                                                        <a href="<?php echo esc_attr($tmin_url); ?>" class="text-accent underline decoration-accent text-sm"><?php echo esc_html($title); ?></a>
                                                                    <?php
                                                                    else :
                                                                    ?>
                                                                        <p class="text-sm text-[#818D93]"><?php echo esc_html($title); ?></p>
                                                                    <?php endif; ?>
                                                                <?php endif ?>
                                                        </td>
                                                        <td class="px-4 py-3 border border-line">
                                                            <form action="#" method="post" id="step_comments" class="<?php echo esc_attr( empty($value['url']) || empty($value['url']['link']) ? 'not_form' : 'form' ); ?>">
                                                                <input type="hidden" name="post_id" value="<?php echo esc_attr(get_the_ID()); ?>">
                                                                <input type="hidden" name="tm" value="<?php echo esc_attr( $tm ); ?>">
                                                                <input type="hidden" name="tmin" value="<?php echo esc_attr( $key ); ?>">
                                                                <input class="border border-accent w-full rounded-md" type="text" name="comments" value="<?php echo esc_attr( $value['comment'] ); ?>">
                                                            </form>
                                                        </td>
                                                    </tr>                                                   
                                                <?php endforeach ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- Card Body -->
            </div>


        </div>
    </div>
</section>