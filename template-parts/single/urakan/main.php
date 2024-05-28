<?php
$tm = $_GET['tm'];

$project_intdata = get_post_meta(get_the_ID(), sprintf('%s_status', $tm), true);





$tm_inner = [
    'kirjallinen-urakkatilaus' => [
        'title' => 'Lähetä urakan kirjallinen tilaus urakoitsijalle',
        'status' => !empty($project_intdata['status']['kirjallinen-urakkatilaus']) ? $project_intdata['status']['kirjallinen-urakkatilaus'] : 'aloittamatta',
        'url' => [
            'link'    => 'kirjallinen-urakkatilaus',
            'title'    => 'Kirjallinen urakkatilaus'
        ],
        'comment' => !empty($project_intdata['comment']['kirjallinen-urakkatilaus']) ? $project_intdata['comment']['kirjallinen-urakkatilaus'] : 'aloittamatta',
    ],
    'toimenpiteista-urakanalkaessa' => [
        'title' => 'Toimita urakoitsijalle listaus vaadituista toimenpiteistä urakan alkaessa',
        'status' => !empty($project_intdata['status']['toimenpiteista-urakanalkaessa']) ? $project_intdata['status']['toimenpiteista-urakanalkaessa'] : 'aloittamatta',
        'url' => [
            'link'    => '',
            'title'    => 'OHJE Urakoitsijalta vaadittavat urakan aloituksen tehtävät'
        ],
        'comment' => !empty($project_intdata['comment']['toimenpiteista-urakanalkaessa']) ? $project_intdata['comment']['toimenpiteista-urakanalkaessa'] : 'aloittamatta',
    ],
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
                        <h2 class="text-xl font-medium text-[#08202C] mb-4">Rakentamisen käynnistäminen</h2>


                        <div class="content-wrap">
                            <div class="excerpt" id="excerpt_content">
                                <p class="text-base text-[#475467] mb-2">
                                    Rakentamisen käynnistämisvaiheessa kaikki vuokralaismuutokseen liittyvät päätökset ja ratkaisut on tehty. Tärkeintä tässä vaiheessa on tilata rakennustyöt urakoitsijalta ja allekirjoittaa urakkasopimus sekä varmistaa varsinaisten rakennustöiden hallittu aloitus. On varmistettava, että urakoitsija saapuu kohteelle, aloittaa työt kohteella yhteisest...
                                </p>

                                <button class="text-accent underline decoration-accent text-base" id="showMore">Lue lisää</button>
                            </div>

                            <div class="hidden" id="full_content">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                                    <p class="text-base text-[#475467] mb-2">
                                        Rakentamisen käynnistämisvaiheessa kaikki vuokralaismuutokseen liittyvät päätökset ja ratkaisut on tehty. Tärkeintä tässä vaiheessa on tilata rakennustyöt urakoitsijalta ja allekirjoittaa urakkasopimus sekä varmistaa varsinaisten rakennustöiden hallittu aloitus.
                                    </p>

                                    <p class="text-base text-[#475467] mb-2">
                                        On varmistettava, että urakoitsija saapuu kohteelle, aloittaa työt kohteella yhteisesti sovittujen sääntöjen mukaan, kiinteistön käyttäjät huomioiden. Urakoitsijan on tehtävä vaadittavat paperityöt töiden aloitukseen liittyen. Tässä vaiheessa kustannuksia ja materiaalia alkaa sitoutumaan projektille huomattavasti enemmän kuin aiemmin projektissa.
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
                    <h1 class="text-2xl text-dark mb-4">Urakan kirjallinen tilaus</h1>

                    <p class="text-base text-[#475467] mb-4">
                        <b>Sisältö:</b><br>
                        Tilataan urakka kirjallisesti urakoitsijalta, jolloin kiirehankinnat ja työmaan perustaminen voidaan aloittaa välittömästi.
                    </p>

                    <div class="mb-6 excerpt-expand">
                        <p class="text-base text-[#475467]"><b>Kuvaus:</b></p>
                        <p class="text-base text-[#475467] mb-4 content">
                            Usein pienet ja nopeatempoiset vuokralaismuutokset halutaan saada mahdollisimman pian liikkeelle rakennustöiden osalta. Projektissa tulee pyrkiä siihen, että urakkasopimus saadaan allekirjoitettua heti urakoitsija valinnan jälkeen. Aina tämä ei ole kuitenkaan mahdollista esimerkiksi sopimusliitteiden viimeistelyn keskeneräisyyden takia. Urakkasopimuksen allekirjoittamista nopeampi aloitustapa on kirjallinen urakan tilaus. Kun tilaajan edustaja eli noste.io on toimittanut urakoitsijalle kirjallisen urakan tilausilmoituksen, urakoitsija voi aloittaa työt. Juridisesti sopimus on silloin syntynyt, vaikka kaikki urakkaan liittyvät muotoseikat sisällään pitävä ja määrittävä urakkasopimus on vielä allekirjoittamatta. Urakoitsija pääsee tämän jälkeen perustamaan työmaata, kiinnittämään resursseja, tilaamaan kiirehankinnat joilla on pitkä toimitusaika (esim. lasiseinäelementit tai lattiamateriaali) ja tekemään muita tarpeellisia töitä, jotta sovitussa urakka-ajassa saadaan vuokralaismuutos valmiiksi.
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
                                                <?php foreach ($tm_inner as $key => $value) : ?>
                                                    <tr>
                                                        <td class="px-4 py-3 border border-line">
                                                            <p class="text-sm text-[#818D93]"><?php echo esc_html($value['title']); ?></p>
                                                        </td>
                                                        <td class="px-4 py-3 border border-line text-sm" id="project_table_status">
                                                            <div class="inline-flex items-center rounded-md border border-line px-2 py-1 <?php echo esc_attr(strtolower($value['status'])); ?>">
                                                                <span></span>
                                                                <?php echo esc_html($value['status']); ?>
                                                            </div>
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
                                                            <form action="#" method="post" id="step_comments">
                                                                <input type="hidden" name="tm" value="<?php echo esc_attr($tm); ?>">
                                                                <input type="hidden" name="tmin" value="<?php echo esc_attr($key); ?>">
                                                                <input class="border border-accent w-full rounded-md" type="text" name="comments">
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