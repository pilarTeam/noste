<?php 
	$tm = $_GET['tm'];

	$project_intdata = get_post_meta( get_the_ID(), sprintf('%s_status', $tm), true );





	$tm_inner = [
		'hallinnanluovutustilaisuuden-asialista' => [
			'title' => 'Laadi hallinnanluovutuksen asialista ja toimita se kokouksen osallistujille',
			'status' => !empty($project_intdata['status']['hallinnanluovutustilaisuuden-asialista']) ? $project_intdata['status']['hallinnanluovutustilaisuuden-asialista'] : 'aloittamatta',
			'url' => [
				'link'	=> '',
				'title'	=> 'Hallinnanluovutustilaisuuden asialista'
			],
			'comment' => !empty($project_intdata['comment']['hallinnanluovutustilaisuuden-asialista']) ? $project_intdata['comment']['hallinnanluovutustilaisuuden-asialista'] : 'aloittamatta',
		],
		'toimita-virhe-ja-puutelistapohja' => [
			'title' => 'Toimita käyttäjälle virhe- ja puutelistapohja',
			'status' => !empty($project_intdata['status']['toimita-virhe-ja-puutelistapohja']) ? $project_intdata['status']['toimita-virhe-ja-puutelistapohja'] : 'aloittamatta',
			'url' => [
				'link'	=> 'toimita-puutelista',
				'title'	=> 'Käyttäjän virhe- ja puutelista'
			],
			'comment' => !empty($project_intdata['comment']['toimita-virhe-ja-puutelistapohja']) ? $project_intdata['comment']['toimita-virhe-ja-puutelistapohja'] : 'aloittamatta',
		],
		'hallinnanluovutustilaisuuteen' => [
			'title' => 'Pidä tai osallistu hallinnanluovutustilaisuuteen',
			'status' => !empty($project_intdata['status']['hallinnanluovutustilaisuuteen']) ? $project_intdata['status']['hallinnanluovutustilaisuuteen'] : 'aloittamatta',
			'url' => '',
			'comment' => !empty($project_intdata['comment']['hallinnanluovutustilaisuuteen']) ? $project_intdata['comment']['hallinnanluovutustilaisuuteen'] : 'aloittamatta',
		],
		'virhe-ja-toimita-se' => [
			'title' => 'Täytä käyttäjän virhe- ja puutelista ja toimita se urakoitsijalle',
			'status' => !empty($project_intdata['status']['virhe-ja-toimita-se']) ? $project_intdata['status']['virhe-ja-toimita-se'] : 'aloittamatta',
			'url' => [
				'link'	=> 'tayta-puutelista',
				'title'	=> 'Käyttäjän virhe- ja puutelista'
			],
			'comment' => !empty($project_intdata['comment']['virhe-ja-toimita-se']) ? $project_intdata['comment']['virhe-ja-toimita-se'] : 'aloittamatta',
		],
		'hallinnanluovutuksen' => [
			'title' => 'Laadi hallinnanluovutuksen pöytäkirja liitteineen ja toimita se kokouksen osallistujille',
			'status' => !empty($project_intdata['status']['hallinnanluovutuksen']) ? $project_intdata['status']['hallinnanluovutuksen'] : 'aloittamatta',
			'url' => [
				'link'	=> 'hallinnanluovutustilaisuuden-poytakirja',
				'title'	=> 'Hallinnanluovutustilaisuuden pöytäkirja'
			],
			'comment' => !empty($project_intdata['comment']['hallinnanluovutuksen']) ? $project_intdata['comment']['hallinnanluovutuksen'] : 'aloittamatta',
		],
		'hallinnanluovutuspoytakirja' => [
			'title' => 'Varmista, että hallinnanluovutuspöytäkirja allekirjoitetaan',
			'status' => !empty($project_intdata['status']['hallinnanluovutuspoytakirja']) ? $project_intdata['status']['hallinnanluovutuspoytakirja'] : 'aloittamatta',
			'url' => '',
			'comment' => !empty($project_intdata['comment']['hallinnanluovutuspoytakirja']) ? $project_intdata['comment']['hallinnanluovutuspoytakirja'] : 'aloittamatta',
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
                        <h2 class="text-xl font-medium text-[#08202C] mb-4">Rakennustöiden vastaanotto ja toimeksiannon lopetus</h2>


                        <p class="text-base text-[#475467] mb-2" id="content">
                            Projektin valmisteluvaiheessa tärkeintä on tukea kiinteistönomistajan vuokraamisesta vastaavaa tahoa niin, että tilasta tehtävä vuokrasopimustarjous kiinteistönomistajan (eli vuokranantajan / tilaajan) asiakkaalle, eli vuokralaisehdokkaalle olisi mahdollisimman houkutteleva. Samalla vuokrasopimustarjous pyritään laatimaan mahdollisimman kannattavaksi kiinteistönomistajalle. Vaiheelle kuvaavaa on aika-ajoin kiireelliset selvitystyöt, teknisten reunaehtojen selvitys vähillä lähtötiedoilla, sekä vuokrasopimustarjoukseen tarvittavien avustavien lähtötietojen nopea toimitus vuokrauksesta vastaavalle taholle. Tässä vaiheessa vuokralaisehdokas usein kilpailuttaa useita kiinteistönomistajia lyhyen ajanjakson sisällä ja kiinteistöomistajan, jota noste.io auttaa, on pyrittävä antamaan vuokralaisehdokkaalle paras mahdollinen tarjous vuokralaisen tarvitsemista tiloista, niin tilatarpeiden kuin kustannusten osalta. <br> <br>
                            Noste.ion toimittamat vuokrasopimustarjouksen lähtötiedot pyritään antamaan mahdollisimman paikkaansa pitävänä, ilman virheitä ja mahdollisimman nopeasti kiinteistönomistajalle vuokrasopimustarjouksen lähtötiedoiksi. Tässä vaiheessa tehtävät alustavat selvitykset pyritään usein myös tekemään hyvin kustannustehokkaasti, koska vuokralaisehdokas voi päätyä valitsemaan jonkin toisen kiinteistönomistajan tilat, jäämään vanhoihin tiloihin tai tekemään jonkin muun ratkaisuun. Vuokrauksesta vastaavan tahon mieltymysten mukaan, henkilö joko toivoo paljon yhteystyötä noste.iolta tai sitten henkilö tekee hyvin omatoimisesti ja omin päin tämän vaiheen.
                        </p>
                        
                        <button class="text-accent underline decoration-accent text-base" id="showMore">Lue lisää</button>
                    </div>
                </div><!-- Card Header -->
                <!-- Card Body -->
                <div class="px-4 md:px-8 pt-6 pb-10 lg:h-[645px] overflow-y-auto no-scrollbar scroll-smooth">
                    <h1 class="text-lg text-dark mb-4">Hallinnanluovutustilaisuus</h1>

                    <p class="text-base text-[#475467] mb-4">
                        <b>Sisältö:</b><br>
                        Pidetään hallinnaluovutustilaisuus, jos näin sovitaan tilaajan kanssa. Tarkastetaan vuokratila ja käydään hallinnanluovuksen pöytäkirjan sisältö läpi tilaajan ja vuokralaisen kanssa. <br><br>
                        <b>Kuvaus:</b><br>
                        Hallinnanluovutustilaisuudessa urakoitsijalta hieman aiemmin tilaajalle luovutettu vuokra-alue luovutetaan vuokralaisen hallintaan ja vastuulle. Usein vastaanottotarkastustilaisuus ja hallinnanluovutustilaisuus pidetään samana päivänä tai muutaman päivän sisään toisistaan. Vuokranmaksu alkaa usein hallinnanluovutuksesta. <br><br>
						Hallinnanluovutustilaisuuden pitäminen on yleisesti kiinteistön vastuulla, koska tilaisuus liittyy vuokrasopimuksen mukaisten ehtojen täyttymiseen. Ehtoja ovat esimerkiksi se, että tila täyttää vuokrasopimuksen ehdot laadultaan, ja että luovutusajankohta on vuokrasopimuksen mukainen. Tässä tilaisuudessa vuokralainen voi vielä kommentoida esimerkiksi rakennustyön jälkeä ja huomiot kirjataan ylös. Projektipäällikkö osallistuessaan tekee käyttäjän virhe- ja puutelistauksen. Monesti tilaisuuden pitäminen siirtyy kokonaan luontevasti tilaajalta tai kiinteistöpäälliköltä projektipäällikölle. <br>
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