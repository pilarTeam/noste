<?php 
	$tm = $_GET['tm'];

	$project_intdata = get_post_meta( get_the_ID(), sprintf('%s_status', $tm), true );




	$tm_inner = [
		'kohdekaynnin' => [
			'title' => 'Sovi kohdekäynnin tekemisestä sopivan tahon kanssa',
			'status' => !empty($project_intdata['status']['turvallisuusasiakirja']) ? $project_intdata['status']['turvallisuusasiakirja'] : 'aloittamatta',
			'url' => [
				'link' => '',
				'title' => 'OHJE Kohdekäynti ja siihen valmistautuminen',
			],
			'comment' => !empty($project_intdata['comment']['turvallisuusasiakirja']) ? $project_intdata['comment']['turvallisuusasiakirja'] : 'aloittamatta',
		],
		'katselmoimassa' => [
			'title' => 'Käy katselmoimassa kohde',
			'status' => !empty($project_intdata['status']['katselmoimassa']) ? $project_intdata['status']['katselmoimassa'] : 'aloittamatta',
			'url' => '',
			'comment' => !empty($project_intdata['comment']['katselmoimassa']) ? $project_intdata['comment']['katselmoimassa'] : 'aloittamatta',
		],		
		'huomioitavat' => [
			'title' => 'Tarkasta listaamasi huomioitavat asiat kohteella',
			'status' => !empty($project_intdata['status']['tarjouslomake']) ? $project_intdata['status']['tarjouslomake'] : 'aloittamatta',
			'url' => '',
			'comment' => !empty($project_intdata['comment']['tarjouslomake']) ? $project_intdata['comment']['tarjouslomake'] : 'aloittamatta',
		],
		'valokuvaa' => [
			'title' => 'Valokuvaa tilat ja dokumentoi',
			'status' => !empty($project_intdata['status']['valokuvaa']) ? $project_intdata['status']['valokuvaa'] : 'aloittamatta',
			'url' => '',
			'comment' => !empty($project_intdata['comment']['valokuvaa']) ? $project_intdata['comment']['valokuvaa'] : 'aloittamatta',
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
                        <p class="text-sm font-normal text-[#818D93] mb-1"><?php echo esc_html( noste_check_empty( $args['page_title'] ) ); ?></p>
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
                            </div >
                        </div>
                    </div>
                </div><!-- Card Header -->
                <!-- Card Body -->
                <div class="px-4 md:px-8 pt-6 pb-10 lg:h-[645px] overflow-y-auto no-scrollbar scroll-smooth">
                    <h1 class="text-lg text-dark mb-4">Kohdekäynti</h1>

                    <p class="text-base text-[#475467] mb-4">
                        <b>Sisältö:</b><br>
                        Käydään kohteessa tutustumassa ja selvittämässä avoimet asiat sekä riskit. Dokumentoidaan tila. <br><br>
                        <b>Kuvaus:</b><br>
                        Moni epäselvä asia selviää vain vuokralaismuutostilassa paikan päällä käymällä. Kohdekäynti on hyvä hetki selvittää asioita, joihin et vielä ole saanut lähtötiedoista, suunnitelmista tai kiinteistöpäälliköltä / -huollolta vastauksia. Jotta käynti olisi mahdollisimman hyödyllinen, valmistaudu käyntiin hyvin etukäteen ja tallenna käynti valokuvin. Liikaa valokuvia ei voi ottaa. Näin voit palata kohteeseen myöhemminkin valokuvien avulla. Muista selvittää miten tilaan pääsee (avaimet / kulkuoikeudet) ja saako tiloihin mennä vapaasti (onko tiloissa vuokralainen). Voit sopia kohdekäynnille, varsinkin kohteessa ensikertaa toimiessasi, tapaamisen vuokrauksen, huollon tai kiinteistöpäällikön kanssa, jolloin saat helposti lisää tietoa kohteesta myös heiltä. <br><br>
						Joskus voi olla sellainen tilanne, että vuokranantajalla ja entisellä vuokralaisella, joka kuitenkin vielä toimii vuokralaismuutoksen kohteena olevissa tiloissa, ei ole parhaimmat mahdolliset välit. Silloin kohdekäynti on syytä tehdä mahdollisimman huomaamattomasti, häiriötä herättämättömästi ja kiinteistöpäällikön johtamana. Omasta toimeksiannosta ei myöskään saa antaa ulkopuolisille mitään tietoja. Tällaisesta tilanteesta tilaaja kuitenkin pääsääntöisesti muistaa ilmoittaa.
                    </p>

                    <div>
                    
                        <div class="flex flex-col">
                            <div class="overflow-x-auto shadow-md sm:rounded-lg">
                                <div class="inline-block min-w-full align-middle">
                                    <div class="overflow-hidden">
                                        <table class="w-full whitespace-nowrap border-collapse">
                                            <thead class="text-left rounded-t-lg bg-accent text-white">
                                                <tr class="rounded-lg">
                                                    <th class="p-3">Tehtävät:</th>
                                                    <th class="p-3">Status:</th>
                                                    <th class="p-3">Dokumentit:</th>
                                                    <th class="p-3">Kommentti:</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            	<?php foreach ($tm_inner as $key => $value): ?>
	                                                <tr>
	                                                    <td class="px-4 py-3 border border-line">
	                                                        <p class="text-sm text-[#818D93]"><?php echo esc_html( $value['title'] ); ?></p>
	                                                    </td>
	                                                    <td class="px-4 py-3 border border-line text-sm" id="project_table_status">
	                                                        <div class="inline-flex items-center rounded-md border border-line px-2 py-1 <?php echo esc_attr( strtolower($value['status']) ); ?>">
	                                                            <span></span>
	                                                            <?php echo esc_html( $value['status'] ); ?>
	                                                        </div>
	                                                    </td>
	                                                    <td class="px-4 py-3 border border-line">
	                                                    	<?php
															if ( !empty($value['url']) ): 
																$title = !empty($value['url']['title'])?$value['url']['title']:false;
																$link = !empty($value['url']['link'])?$value['url']['link']:false;
																if (!empty($link)) :
																	$tmin_url = add_query_arg([
																		'tm' => $tm,
																		'tmin' => $value['url']['link']
																	], get_permalink( get_the_ID() ) );
																	?>
	                                                        		<a href="<?php echo esc_attr( $tmin_url ); ?>" class="text-accent underline decoration-accent text-sm"><?php echo esc_html($title); ?></a>
																	<?php
																else:
																	?>
	                                                        		<p class="text-sm text-[#818D93]"><?php echo esc_html($title); ?></p>
																<?php endif; ?>		
	                                                    	<?php endif ?>
	                                                    </td>
	                                                    <td class="px-4 py-3 border border-line">
	                                                        <form action="#" method="post" id="step_comments">
	                                                        	<input type="hidden" name="tm" value="<?php echo esc_attr( $tm ); ?>">
	                                                        	<input type="hidden" name="tmin" value="<?php echo esc_attr( $key ); ?>">
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