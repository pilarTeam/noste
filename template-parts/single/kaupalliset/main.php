<?php
$tm = $_GET['tm'];

$project_intdata = get_post_meta(get_the_ID(), sprintf('%s_status', $tm), true);




$tm_inner = [
	'turvallisuusasiakirja' => [
		'title' => 'Laadi turvallisuusasiakirja',
		'status' => !empty($project_intdata['status']['turvallisuusasiakirja']) ? $project_intdata['status']['turvallisuusasiakirja'] : 'aloittamatta',
		'url' => [
			'link' => 'turvallisuusasiakirja',
			'title' => 'Turvallisuusasiakirja',
		],
		'comment' => !empty($project_intdata['comment']['turvallisuusasiakirja']) ? $project_intdata['comment']['turvallisuusasiakirja'] : 'aloittamatta',
	],
	'tarjouspyyntokirje' => [
		'title' => 'Laadi tarjouspyyntökirje',
		'status' => !empty($project_intdata['status']['tarjouspyyntokirje']) ? $project_intdata['status']['tarjouspyyntokirje'] : 'aloittamatta',
		'url' => [
			'link' => 'tarjouspyyntokirje',
			'title' => 'Tarjouspyyntökirje',
		],
		'comment' => !empty($project_intdata['comment']['tarjouspyyntokirje']) ? $project_intdata['comment']['tarjouspyyntokirje'] : 'aloittamatta',
	],
	'tarjouslomake' => [
		'title' => 'Laadi tarjouslomake',
		'status' => !empty($project_intdata['status']['tarjouslomake']) ? $project_intdata['status']['tarjouslomake'] : 'aloittamatta',
		'url' => [
			'link' => 'tarjouslomake',
			'title' => 'Tarjouslomake',
		],
		'comment' => !empty($project_intdata['comment']['tarjouslomake']) ? $project_intdata['comment']['tarjouslomake'] : 'aloittamatta',
	],
	'urakkasopimusluonnos' => [
		'title' => 'Laadi urakkasopimusluonnos',
		'status' => !empty($project_intdata['status']['urakkasopimusluonnos']) ? $project_intdata['status']['urakkasopimusluonnos'] : 'aloittamatta',
		'url' => [
			'link' => 'urakkasopimusluonnos',
			'title' => 'Urakkasopimusluonnos',
		],
		'comment' => !empty($project_intdata['comment']['urakkasopimusluonnos']) ? $project_intdata['comment']['urakkasopimusluonnos'] : 'aloittamatta',
	],
	'tarjouspyyntoaineistoon' => [
		'title' => 'Liitä tarvittaessa tilaajan erityiset ohjeet tarjouspyyntöaineistoon',
		'status' => !empty($project_intdata['status']['tarjouspyyntöaineistoon']) ? $project_intdata['status']['tarjouspyyntöaineistoon'] : 'aloittamatta',
		'url' => '',
		'comment' => !empty($project_intdata['comment']['tarjouspyyntöaineistoon']) ? $project_intdata['comment']['tarjouspyyntöaineistoon'] : 'aloittamatta',
	],
	'urakoitsijoihin' => [
		'title' => 'Ole yhteydessä urakoitsijoihin ennen tarjouspyyntöjen toimitusta',
		'status' => !empty($project_intdata['status']['urakoitsijoihin']) ? $project_intdata['status']['urakoitsijoihin'] : 'aloittamatta',
		'url' => [
			'link' => '',
			'title' => 'OHJE Urakoitsijoiden kontaktointi',
		],
		'comment' => !empty($project_intdata['comment']['urakoitsijoihin']) ? $project_intdata['comment']['urakoitsijoihin'] : 'aloittamatta',
	],
	'Varmista' => [
		'title' => 'Varmista, että saat riittävän määrän urakkatarjouksia',
		'status' => !empty($project_intdata['status']['Varmista']) ? $project_intdata['status']['Varmista'] : 'aloittamatta',
		'url' => '',
		'comment' => !empty($project_intdata['comment']['Varmista']) ? $project_intdata['comment']['Varmista'] : 'aloittamatta',
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
						<h2 class="text-xl font-medium text-[#08202C] mb-4">Rakentamisen valmistelu</h2>


						<div class="content-wrap">
							<div class="excerpt" id="excerpt_content">
								<p class="text-base text-[#475467] mb-2">
									Rakentamisen valmisteluvaiheessa tärkeintä on varmistaa se, että vuokrasopimuksessa sovittu vuokralaismuutoksen laajuus, laatu ja aikataulu saadaan välitettyä urakasta kilpailevien urakoitsijoiden tietoon mahdollisimman selvästi niin, että rakennustöiden toteutus, eli urakkavaihe olisi mahdollisimman tehokas ja häiriötön. Toteutukseen ...
								</p>

								<button class="text-accent underline decoration-accent text-base" id="showMore">Lue lisää</button>
							</div>

							<div class="hidden" id="full_content">
								<div class="grid grid-cols-1 md:grid-cols-2 gap-10">
									<p class="text-base text-[#475467] mb-2">
										Rakentamisen valmisteluvaiheessa tärkeintä on varmistaa se, että vuokrasopimuksessa sovittu vuokralaismuutoksen laajuus, laatu ja aikataulu saadaan välitettyä urakasta kilpailevien urakoitsijoiden tietoon mahdollisimman selvästi niin, että rakennustöiden toteutus, eli urakkavaihe olisi mahdollisimman tehokas ja häiriötön. Toteutukseen liittyvät epäselvyydet pitää pyrkiä minimoimaan. Rakentamisen valmisteluvaiheessa tehdään kaikki aineisto urakan sisältöön liittyen. Mitä selkeämpi urakoitsijalle toimitettava aineisto on, sitä paremmin urakoitsijat voivat määritellä antamansa urakkatarjouksen hinnan.
									</p>

									<p class="text-base text-[#475467] mb-2">
										Rakentamisen valmisteluvaiheessa sidotaan suurin osa tai kaikki kustannukset vuokralaismuutokseen liittyen. Kustannustaso pyritään saamaan mahdollisimman alas, jotta kiinteistönomistaja ei maksa muutostöistä turhaan ylimääräistä. Lähtökohtaisesti sitoutuvat kustannukset pitää pysytä pitämään kustannusarvion puitteissa. Jos kustannukset ylittävät vuokrasopimuksen perusteena olleen kustannusarvion, kiinteistönomistajan tuotot madaltuvat suunnitellusta. Tässä asiassa projektipäällikön ammattitaidolla on suuri vaikutus. Toinen kiinteistönomistajan tuottoihin vaikuttava asia on projektin aikataulun varmistaminen. Projektipäällikön tulee varmistaa, että vuokralaismuutos toteutuu sovitussa aikataulussa, jotta vuokranmaksu ei myöhästy.
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
					<h1 class="text-2xl text-dark mb-4">Kaupalliset asiakirjat ja kilpailutusmateriaalin teko</h1>

					<p class="text-base text-[#475467] mb-4">
						<b>Sisältö:</b><br>
						Laaditaan urakkakilpailutuksen tarjouspyyntöaineiston kaupalliset asiakirjat. Laaditaan urakkasopimusluonnos osaksi tarjouspyyntöaineistoa. Selvitetään, onko tilaajalla erityisiä ohjeita, mitä liitetään kilpailutusaineistoon. Kontaktoidaan tarvittava määrä urakoitsijoita, esitellään kohde ja selvitetään urakoitsijan resurssitilanne.Varmistetaan, että saadaan riittävä määrä urakkatarjouksia.
					</p>

					<div class="mb-6 excerpt-expand">
						<p class="text-base text-[#475467]"><b>Kuvaus:</b></p>
						<p class="text-base text-[#475467] mb-4 content">
							Rakennusurakan laatua, laajuutta ja muita sopimusehtoja kuvataan urakkasopimuksessa ja urakkasopimuksen liitteinä olevissa sopimusasiakirjoissa. Urakkasopimuksen sopimusasiakirjoja on kahdenlaisia - kaupallisia ja teknisiä. Suunnittelijat tekevät pääsääntöisesti tekniset asiakirjat ja rakennuttajakonsultti (eli noste.io) tekee kaupalliset asiakirjat, pois lukien yleiset kaupalliset sopimusehdot kuten YSE 1998 ja urakoitsijan laatimat kaupalliset asiakirjat.
							<br>
							<br>
							Kaupalliset asiakirjat ovat sopimuksen taloudellista ja juridista sisältöä koskevat asiakirjat, jotka sopimuksessa on lueteltu kaupallisiksi asiakirjoiksi. Noste.io tekee pääsääntöisesti tämän kokoluokan projekteissa tarjouspyyntökirjeen, tarjouslomakkeen ja turvallisuusasiakirjan urakkakilpailutusta varten. Koska urakkasopimuksen kaupalliset asiakirjat vaikuttavat urakkatarjouksen laatimiseen, materiaali tehdään mahdollisimman täydellisenä. Lähtökohtaisesti vain urakkaneuvottelupöytäkirja ja urakoitsijan toimittamat dokumentit lisätään kaupallisiin asiakirjoihin urakkalaskentamateriaalissa olleiden asiakirjojen lisäksi.
							<br>
							<br>
							Urakkasopimus on vuokralaismuutoksen rakennusurakan tärkein dokumentti. Pienissä projekteissa ei ole järkevää käyttää aikaa yksilöityjen urakkasopimusten tekemiseen. Vuokralaismuutoksissa tarkoituksenmukaista on käyttää vakioitua, selkeää ja hyväksi todettua urakkasopimusmallia. Vakioitu urakkasopimusluonnos on syytä toimittaa osana urakkalaskenta-aineistoa urakoitsijoille, jotta urakoitsijat voivat ottaa huomioon sopimusluonnoksen tarjousta laatiessaan.
							<br>
							<br>
							Urakoitsijan tulee tuoda esiin tarjouksessaan, miltä osin urakoitsija haluaa sopimusluonnokseen vaikuttaa. Muilta osin sopimusluonnosta sovelletaan urakkaan sellaisenaan, urakkahintaan kuuluvana. Vakioitu sopimuspohja auttaa myös siinä, että jos teet useampaa vuokralaismuutosta, niin lähtökohtaisesti kaikissa vuokralaismuutoksissa on samat sopimusehdot automaattisesti. Tärkeää on kuitenkin varmistaa, että sopimuksessa ja sopimukseen liitettävissä asiakirjoissa ei ole ristiriitaa. Kaupalliset ehdot tulee käydä läpi urakoitsijan kanssa ennen tilauksen tekoa. Urakkasopimusluonnoksen avulla vältetään sopimuksen allekirjoitusvaiheessa edestakaiselta viestittelyltä ja saadaan kaupalliset ehdot mukaan jo tarjousvaiheeseen.
							<br>
							<br>
							Tässä vaiheessa on hyvä myös selvittää, onko tilaajalla heidän toimintaan liittyviä erityisiä ohjeita, mitä urakoitsijan pitäisi ottaa huomioon töitä tehdessä. Tilaajan ohjeet usein liittyvät esimerkiksi vastuullisuuteen, eettisyyteen, kestävään toimintaan tai urakan jälkeistä aikaa palvelevaan toimintaan, kuten luovutusaineiston kokoamiseen.
							<br>
							<br>
							Urakoitsijoiden resurssitilanteet vaihtelevat voitettujen urakoiden määrän ja keston mukaan. Jotta vältytään yllätyksiltä urakkalaskenta-ajan päättyessä, on hyvä selvittää etukäteen ketkä urakoitsijat olisivat kiinnostuneita laskemaan juuri tämän urakan ja keneltä urakoitsijalta tarjousta voidaan odottaa. Myöskään liian usealle urakoitsijalle laitettu kysely ei välttämättä ole tarkoituksen mukainen lisääntyvän työmäärän vuoksi. Pyrkimyksenä on saada paras (=edullisin) mahdollinen urakkatarjous sen hetkisen markkinatilanteen mukaan. Riittävä tarjousvertailu saadaan aikaiseksi, jos tarjouksen on antanut kolme urakoitsijaa tai enemmän. Usein kannattaa toimittaa tarjous vähintään viidelle urakoitsijalle, jotka lupaavat laskea tarjouksen. Eli kontaktoinnin jälkeen viiden urakoitsijan pitäisi sanoa, että ovat kiinnostuneita tarjoamaan kohdetta. Usein kaikki viisi eivät syystä tai toisesta pysty toimittamaan tarjousta, vaikka niin on ilmoitettu ennakkoon.
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