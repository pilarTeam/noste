<?php 
	$tm = $_GET['tm'];

	$project_intdata = get_post_meta( get_the_ID(), sprintf('%s_status', $tm), true );





	$tm_inner = [
		'varmista' => [
			'title' => 'Varmista, että urakoitsija toimittaa kokouksen aineiston etukäteen',
			'status' => !empty($project_intdata['status']['varmista']) ? $project_intdata['status']['varmista'] : 'aloittamatta',
			'url' => '',
			'comment' => !empty($project_intdata['comment']['varmista']) ? $project_intdata['comment']['varmista'] : 'aloittamatta',
		],
		'asialista' => [
			'title' => 'Laadi työmaakokouksen asialista ja toimita se kokouksen osallistujille',
			'status' => !empty($project_intdata['status']['asialista']) ? $project_intdata['status']['asialista'] : 'aloittamatta',
			'url' => [
				'link'	=> 'asialista',
				'title'	=> 'Työmaakokouksen asialista'
			],
			'comment' => !empty($project_intdata['comment']['asialista']) ? $project_intdata['comment']['asialista'] : 'aloittamatta',
		],
		'tyomaakokous' => [
			'title' => 'Pidä työmaakatselmus ja työmaakokous',
			'status' => !empty($project_intdata['status']['tyomaakokous']) ? $project_intdata['status']['tyomaakokous'] : 'aloittamatta',
			'url' => '',
			'comment' => !empty($project_intdata['comment']['tyomaakokous']) ? $project_intdata['comment']['tyomaakokous'] : 'aloittamatta',
		],
		'tyomaakokouksen' => [
			'title' => 'Laadi työmaakokouksen pöytäkirja liitteineen ja toimita se kokouksen osallistujille',
			'status' => !empty($project_intdata['status']['tyomaakokouksen']) ? $project_intdata['status']['tyomaakokouksen'] : 'aloittamatta',
			'url' => [
				'link'	=> 'tyomaakokouksen-poytakirja',
				'title'	=> 'Työmaakokouksen pöytäkirja'
			],
			'comment' => !empty($project_intdata['comment']['tyomaakokouksen']) ? $project_intdata['comment']['tyomaakokouksen'] : 'aloittamatta',
		],
		'varmista-allekirjoitetaan' => [
			'title' => 'Varmista, että työmaakokouspöytäkirja allekirjoitetaan',
			'status' => !empty($project_intdata['status']['varmista-allekirjoitetaan']) ? $project_intdata['status']['varmista-allekirjoitetaan'] : 'aloittamatta',
			'url' => '',
			'comment' => !empty($project_intdata['comment']['varmista-allekirjoitetaan']) ? $project_intdata['comment']['varmista-allekirjoitetaan'] : 'aloittamatta',
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
                        <h2 class="text-xl font-medium text-[#08202C] mb-4">Rakentaminen</h2>


                        <p class="text-base text-[#475467] mb-2" id="content">
                            Projektin valmisteluvaiheessa tärkeintä on tukea kiinteistönomistajan vuokraamisesta vastaavaa tahoa niin, että tilasta tehtävä vuokrasopimustarjous kiinteistönomistajan (eli vuokranantajan / tilaajan) asiakkaalle, eli vuokralaisehdokkaalle olisi mahdollisimman houkutteleva. Samalla vuokrasopimustarjous pyritään laatimaan mahdollisimman kannattavaksi kiinteistönomistajalle. Vaiheelle kuvaavaa on aika-ajoin kiireelliset selvitystyöt, teknisten reunaehtojen selvitys vähillä lähtötiedoilla, sekä vuokrasopimustarjoukseen tarvittavien avustavien lähtötietojen nopea toimitus vuokrauksesta vastaavalle taholle. Tässä vaiheessa vuokralaisehdokas usein kilpailuttaa useita kiinteistönomistajia lyhyen ajanjakson sisällä ja kiinteistöomistajan, jota noste.io auttaa, on pyrittävä antamaan vuokralaisehdokkaalle paras mahdollinen tarjous vuokralaisen tarvitsemista tiloista, niin tilatarpeiden kuin kustannusten osalta. <br> <br>
                            Noste.ion toimittamat vuokrasopimustarjouksen lähtötiedot pyritään antamaan mahdollisimman paikkaansa pitävänä, ilman virheitä ja mahdollisimman nopeasti kiinteistönomistajalle vuokrasopimustarjouksen lähtötiedoiksi. Tässä vaiheessa tehtävät alustavat selvitykset pyritään usein myös tekemään hyvin kustannustehokkaasti, koska vuokralaisehdokas voi päätyä valitsemaan jonkin toisen kiinteistönomistajan tilat, jäämään vanhoihin tiloihin tai tekemään jonkin muun ratkaisuun. Vuokrauksesta vastaavan tahon mieltymysten mukaan, henkilö joko toivoo paljon yhteystyötä noste.iolta tai sitten henkilö tekee hyvin omatoimisesti ja omin päin tämän vaiheen.
                        </p>
                        
                        <button class="text-accent underline decoration-accent text-base" id="showMore">Lue lisää</button>
                    </div>
                </div><!-- Card Header -->
                <!-- Card Body -->
                <div class="px-4 md:px-8 pt-6 pb-10 lg:h-[645px] overflow-y-auto no-scrollbar scroll-smooth">
                    <h1 class="text-lg text-dark mb-4">Työmaakokoukset</h1>

                    <p class="text-base text-[#475467] mb-4">
                        <b>Sisältö:</b><br>
                        Pidetään työmaakokoukset tasaisin väliajoin ja dokumentoidaan siellä työmaatilanne sekä työmaan eteneminen. <br><br>
                        <b>Kuvaus:</b><br>
                        Jotta työmaan etenemisen seuraaminen ja urakan aikana syntyvien asioiden käsittely olisi johdonmukaista, tilaajan edustajan ja urakoitsijan välillä pidetään työmaakokouksia. Työmaakokouksia pidetään usein noin neljän viikon välein. Sopijapuolten yhteisesti pitämistä työmaakokouksista pidetään pöytäkirjaa, jonka tilaaja ja urakoitsija tai heidän edustajansa allekirjoittavat. Työmaakokouksissa puheenjohtajana ja pöytäkirjan pitäjänä toimii projektipäällikkö. <br><br>
						Urakoitsija tekee työvaiheilmoituksen työmaakokoukseen käsiteltäväksi. Työmaakokouksissa käydään läpi osapuolten väliset asiat: työmaan aikataulu- ja yleinen työmaatilanne, lisä- ja muutostyöasiat, mahdolliset huomiot tai muutokset suunnitelmiin sekä muut työmaahan liittyvät tärkeät asiat. Huomiona että työmaakokouksessa tehty pöytäkirjaan otettu huomautus tai ilmoitus, joka muutoin olisi tehtävä kirjallisesti, katsotaan mainitunlaista kirjallista ilmoitusta vastaavaksi. Työmaan aloituskokouksen ja normaalin työmaakokouksen juridinen merkitys on sama, mutta aloituskokouksessa tavanomaisesti käsitellään hieman eri asioita kuin normaalissa työmaakokouksessa. <br><br>
						Työmaakokouksen pöytäkirjan kirjauksiin on kiinnitettävä erityistä huomiota, jotta kirjaukset ovat selkeitä ja tilaajan edun mukaisia. Jos riitatilanne syntyy urakan aikana tilaajan ja urakoitsijan välillä, asian käsittelyn kulku tarkastetaan ensisijaisesti työmaakokouspöytäkirjan perusteella, jonka molemmat osapuolet ovat allekirjoituksillaan hyväksyneet oikeelliseksi. <br>
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