<?php
$tm = $_GET['tm'];

$project_intdata = get_post_meta(get_the_ID(), sprintf('%s_status', $tm), true);





$tm_inner = [
	'muutostyoesitykset' => [
		'title' => 'Käsittele urakoitsijan esittämät lisä- ja muutostyöesitykset',
		'status' => !empty($project_intdata['status']['muutostyoesitykset']) ? $project_intdata['status']['muutostyoesitykset'] : 'aloittamatta',
		'url' => '',
		'comment' => !empty($project_intdata['comment']['muutostyoesitykset']) ? $project_intdata['comment']['muutostyoesitykset'] : 'aloittamatta',
	],
	'lmt' => [
		'title' => 'Selvitä kuka on kustannusvastuussa LMT:stä ja hyväksytä se hänellä',
		'status' => !empty($project_intdata['status']['lmt']) ? $project_intdata['status']['lmt'] : 'aloittamatta',
		'url' => '',
		'comment' => !empty($project_intdata['comment']['lmt']) ? $project_intdata['comment']['lmt'] : 'aloittamatta',
	],
	'kustannusseurantaan' => [
		'title' => 'Lisää LMT-aihe kustannusseurantaan',
		'status' => !empty($project_intdata['status']['kustannusseurantaan']) ? $project_intdata['status']['kustannusseurantaan'] : 'aloittamatta',
		'url' => [
			'link'	=> '',
			'title'	=> 'Kustannusseurantakuvake löytyy projektin ylävalikosta'
		],
		'comment' => !empty($project_intdata['comment']['kustannusseurantaan']) ? $project_intdata['comment']['kustannusseurantaan'] : 'aloittamatta',
	],
	'ajantasaista' => [
		'title' => 'Huolehdi, että urakoitsija pitää ajantasaista lisä- ja muutostyökoontilistaa',
		'status' => !empty($project_intdata['status']['ajantasaista']) ? $project_intdata['status']['ajantasaista'] : 'aloittamatta',
		'url' => '',
		'comment' => !empty($project_intdata['comment']['ajantasaista']) ? $project_intdata['comment']['ajantasaista'] : 'aloittamatta',
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
						<h2 class="text-xl font-medium text-[#08202C] mb-4">Rakentaminen</h2>


						<div class="content-wrap">
							<div class="excerpt" id="excerpt_content">
								<p class="text-base text-[#475467] mb-2">
								Kiinteistönomistajan näkökulmasta rakentaminen on aina vähintään pieni häiriötekijä kiinteistön normaaliin käyttöön. Rakentamisesta syntyy melua, pölyä, jätettä ja erikoisjärjestelyjä esimerkiksi kiinteistössä liikkumisen osalta. Joskus joudutaan menemään myös muiden käyttäjien tiloihin tekemään asennustöitä. Rakentaminen pitää...
								</p>

								<button class="text-accent underline decoration-accent text-base" id="showMore">Lue lisää</button>
							</div>

							<div class="hidden" id="full_content">
								<div class="grid grid-cols-1 md:grid-cols-2 gap-10">
									<p class="text-base text-[#475467] mb-2">
										Kiinteistönomistajan näkökulmasta rakentaminen on aina vähintään pieni häiriötekijä kiinteistön normaaliin käyttöön. Rakentamisesta syntyy melua, pölyä, jätettä ja erikoisjärjestelyjä esimerkiksi kiinteistössä liikkumisen osalta. Joskus joudutaan menemään myös muiden käyttäjien tiloihin tekemään asennustöitä. Rakentaminen pitää pyrkiä tekemään mahdollisimman huomaamattomasti ja niin, ettei se häiritse kiinteistön muita vuokralaisia. Aktiivinen kiinteistön tiedottaminen ehkäisee hyvin vihaisia puhelinsoittoja.
									</p>

									<p class="text-base text-[#475467] mb-2">
									Rakentamisen aikana valvotaan, että vuokralaismuutos toteutuu sovitussa laajuudessa, laatutasossa ja aikataulussa. Tärkeää on myös varmistaa, että kiinteistönomistajan lakisääteiset velvollisuudet rakennushankkeeseen ryhtyvänä tulevat hoidetuiksi. Tapauskohtaisesti urakan aikana voi olla hyvin vähän selvitettäviä asioita tai sitten urakoitsija on hyvin usein yhteydessä projektipäällikköön mahdollisten haasteiden kanssa. Selkeät menettelyt asioiden hoitamiselle ehkäisee poukkoilua. Rakentamisen aikana tarkastetaan myös laskuja ja raportoidaan töiden etenemisestä. Lisä- ja muutostöitä käsitellään myös usein urakan aikana.
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
					<h1 class="text-2xl text-dark mb-4">Lisä- ja muutostyökäsittely</h1>

					<p class="text-base text-[#475467] mb-4">
						<b>Sisältö:</b><br>
						Rakentamisen aikana syntyvien lisä- ja muutostöiden käsittely.
					</p>

					<div class="mb-6 excerpt-expand">
						<p class="text-base text-[#475467]"><b>Kuvaus:</b></p>
						<p class="text-base text-[#475467] mb-4 content">
							Lähes jokaisessa urakassa syntyy lisä- ja / tai muutostöitä (lyhenne LMT). Esimerkiksi vuokralainen saattaa haluta jonkin asian lisättäväksi urakkaan, vaikka kahviautomaatin sähkö- ja vesipisteen. Rakennustöiden aikana voidaan myös huomata, että suunnitelman mukainen toteutus ei onnistu ja toteutusmuutos aiheuttaa lisäkuluja. Joskus urakoitsija voi esittää myös perusteettoman LMT:n, mutta sekin pitää käsitellä ja hylätä antaen samalla riittävät perustelut hylkäämiselle. Muutosten LMT-käsittely on syytä tehdä ilman turhaa viivyttelyä vuokralaismuutoksissa, joissa urakka-ajat ovat usein lyhyitä. Näin LMT ei aiheuta urakka-ajan pitenemistä ja mahdollista vastaanottotarkastuksen ja hallinnanluovutustilaisuuden siirtymistä.<br><br> On tärkeää ymmärtää, että tilaajan vastuulla olevat LMT:t pitää pystyä erottamaan vuokralaisen toivomista lisäyksistä. Tilaajan kanssa on sovittava miten käyttäjän LMT-asiat käsitellään. Maksaako vuokralainen itse LMT:n vai maksaako tilaaja ko. työn, jolloin vuokralaisen maksettavaa vuokraa kasvatetaan LMT:n summan verran.<br><br> Urakoitsijan tulee tehdä helposti ymmärrettävät ja kattavat LMT-esitykset, jotta käsittely eri osapuolien kanssa olisi mahdollisimman vaivatonta. Projektipäällikön pitää varmistaa LMT:n oikeellisuus, oikea hintataso sekä käsittelyn tapahtuminen. Projektipäällikön pitää varmistaa että lisä- ja muutostyöesitykset tehdään urakkasopimuksessa sovitun mukaisesti. Projektipäällikkö hyväksyttää tilaajalla kaikki LMT:t ellei muusta ole erikseen sovittu. Urakoitsija pitää yllä lisä- ja muutostöistä yhteenvetotaulukkoa ja LMT-tilanne käsitellään työmaakokouksissa.
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
																if (isset($value['url']['title'])) {
																	$value['url'] = [
																		$value['url']
																	];
																}
																foreach ($value['url'] as $url) :
																	$title = !empty($url['title']) ? $url['title'] : false;
																	$link = !empty($url['link']) ? $url['link'] : false;
																	if (!empty($link)) :
																		$tmin_url = add_query_arg([
																			'tm' => $tm,
																			'tmin' => $url['link']
																		], get_permalink(get_the_ID()));
															?>
																		<a href="<?php echo esc_attr($tmin_url); ?>" class="text-accent underline decoration-accent text-sm"><?php echo esc_html($title); ?></a>
																	<?php
																	else :
																	?>
																		<p class="text-sm text-[#818D93]"><?php echo esc_html($title); ?></p>
																	<?php endif; ?>
																<?php endforeach; ?>
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