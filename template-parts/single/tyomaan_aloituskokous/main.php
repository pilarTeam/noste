<?php 
	$tm = $_GET['tm'];

	$project_intdata = get_post_meta( get_the_ID(), sprintf('%s_status', $tm), true );





	$tm_inner = [
		'toimittaa-kokouksen-aineiston-etukateen' => [
			'title' => 'Varmista, että urakoitsija toimittaa kokouksen aineiston etukäteen',
			'status' => !empty($project_intdata['status']['toimittaa-kokouksen-aineiston-etukateen']) ? $project_intdata['status']['toimittaa-kokouksen-aineiston-etukateen'] : 'aloittamatta',
			'url' => '',
			'comment' => !empty($project_intdata['comment']['toimittaa-kokouksen-aineiston-etukateen']) ? $project_intdata['comment']['toimittaa-kokouksen-aineiston-etukateen'] : 'aloittamatta',
		],
		'asialista' => [
			'title' => 'Laadi työmaan aloituskokouksen asialista ja toimita se kokouksen osallistujille',
			'status' => !empty($project_intdata['status']['asialista']) ? $project_intdata['status']['asialista'] : 'aloittamatta',
			'url' => [
				[
					'link'	=> '',
					'title'	=> 'Työmaan'
				],
				[
					'link'	=> 'aloituskokouksen-asialista',
					'title'	=> 'aloituskokouksen asialista'
				],
			],
			'comment' => !empty($project_intdata['comment']['asialista']) ? $project_intdata['comment']['asialista'] : 'aloittamatta',
		],
		'tyomaakatselmus' => [
			'title' => 'Pidä työmaakatselmus ja aloituskokous',
			'status' => !empty($project_intdata['status']['tyomaakatselmus']) ? $project_intdata['status']['tyomaakatselmus'] : 'aloittamatta',
			'url' => '',
			'comment' => !empty($project_intdata['comment']['tyomaakatselmus']) ? $project_intdata['comment']['tyomaakatselmus'] : 'aloittamatta',
		],
		'poytakirja-liitteineen' => [
			'title' => 'Laadi aloituskokouksen pöytäkirja liitteineen ja toimita se kokouksen osallistujille',
			'status' => !empty($project_intdata['status']['poytakirja-liitteineen']) ? $project_intdata['status']['poytakirja-liitteineen'] : 'aloittamatta',
			'url' => [
				[
					'link'	=> '',
					'title'	=> 'Työmaan'
				],
				[
					'link'	=> 'aloituskokouksen_poytakirja',
					'title'	=> 'aloituskokouksen pöytäkirja'
				],
			],
			'comment' => !empty($project_intdata['comment']['poytakirja-liitteineen']) ? $project_intdata['comment']['poytakirja-liitteineen'] : 'aloittamatta',
		],
		'aloituskokouspoytakirja' => [
			'title' => 'Varmista, että työmaan aloituskokouspöytäkirja allekirjoitetaan',
			'status' => !empty($project_intdata['status']['aloituskokouspoytakirja']) ? $project_intdata['status']['aloituskokouspoytakirja'] : 'aloittamatta',
			'url' => '',
			'comment' => !empty($project_intdata['comment']['aloituskokouspoytakirja']) ? $project_intdata['comment']['aloituskokouspoytakirja'] : 'aloittamatta',
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
                        <h2 class="text-xl font-medium text-[#08202C] mb-4">Rakentamisen käynnistäminen</h2>


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
                    <h1 class="text-lg text-dark mb-4">Työmaan aloituskokous</h1>

                    <p class="text-base text-[#475467] mb-4">
                        <b>Sisältö:</b><br>
                        Pidetään työmaan aloituskokous, jossa käydään läpi yhteistoiminnan pelisäännöt ja epäselvät asiat. <br><br>
                        <b>Kuvaus:</b><br>
                        Pian työmaatoiminnan käynnistymisen jälkeen pidetään työmaan aloituskokous. Työmaan aloituskokouksessa varmistetaan, että työmaan yhteiset pelisäännöt ovat selvillä kaikille osapuolille ja urakoitsija on laatinut ja toimittanut kaikki pyydetyt ja työmaan aloitukseen liittyvät dokumentit. Työmaan aloituskokouksen pöytäkirjaan kirjataan sen hetkinen tilanne. Työmaan aloituskokoukseen mennessä urakoitsijan on ollut hyvä tutustua jo rakennuskohteeseen ja aloittaa vähintään valmistelevia töitä. Lisäksi urakoitsijan on ollut hyvä perehtyä jo suunnitelmien toteutettavuuteen paikan päällä ja tuoda mahdolliset huomiot esiin aloituskokouksessa. Aloituskokous on hyvä pitää työmaalla ja samalla voidaan katselmoida kohde yhteisesti, sekä keskustella mahdollisista esiin nousseista yllätyksistä tai suunnitelmapuutteista. Aloituskokouksessa on paljon läpikäytäviä asioita ja kohdekierroksen kanssa tilaisuuteen on syytä varattava riittävästi aikaa (2-3 h). <br>
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
																if (isset($value['url']['title'])) {
																	$value['url'] = [
																		$value['url']
																	];
																}
																foreach ($value['url'] as $url) :
																	$title = !empty($url['title'])?$url['title']:false;
																	$link = !empty($url['link'])?$url['link']:false;
																	if (!empty($link)) :
																		$tmin_url = add_query_arg([
																			'tm' => $tm,
																			'tmin' => $url['link']
																		], get_permalink( get_the_ID() ) );
																		?>
																		<a href="<?php echo esc_attr( $tmin_url ); ?>" class="text-accent underline decoration-accent text-sm"><?php echo esc_html($title); ?></a>
																		<?php
																	else:
																		?>
																		<p class="text-sm text-[#818D93]"><?php echo esc_html($title); ?></p>
																	<?php endif; ?>		
																<?php endforeach; ?>		
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