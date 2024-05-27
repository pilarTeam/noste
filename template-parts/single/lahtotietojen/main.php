<?php
$tm = $_GET['tm'];

$project_intdata = get_post_meta(get_the_ID(), sprintf('%s_status', $tm), true);




$tm_inner = [
	'valmistele' => [
		'title' => 'Lähtötietojen ja huomioitavien asioiden läpikäynti',
		'status' => !empty($project_intdata['status']['valmistele']) ? $project_intdata['status']['valmistele'] : 'aloittamatta',
		'url' => [
			'link' => '',
			'title' => 'OHJE Lähtötietojen läpikäynti ja huomioitavat asiat',
		],
		'comment' => !empty($project_intdata['comment']['valmistele']) ? $project_intdata['comment']['valmistele'] : 'aloittamatta',
	],
	'pida' => [
		'title' => 'Kommentoi tilasuunnitelmaa tarvittavilta osin',
		'status' => !empty($project_intdata['status']['pida']) ? $project_intdata['status']['pida'] : 'aloittamatta',
		'url' => '',
		'comment' => !empty($project_intdata['comment']['pida']) ? $project_intdata['comment']['pida'] : 'aloittamatta',
	],
	'laadi' => [
		'title' => 'Tee arvio suunnittelutarpeista (tarvitaanko muita asiantuntijoita kuin tilasuunnittelijaa)',
		'status' => !empty($project_intdata['status']['laadi']) ? $project_intdata['status']['laadi'] : 'aloittamatta',
		'url' => '',
		'comment' => !empty($project_intdata['comment']['laadi']) ? $project_intdata['comment']['laadi'] : 'aloittamatta',
	],
	'kustannusarvio' => [
		'title' => 'Laadi alustava kustannusarvio',
		'status' => !empty($project_intdata['status']['kustannusarvio']) ? $project_intdata['status']['kustannusarvio'] : 'aloittamatta',
		'url' => [
			'link' => 'kustannusarvio',
			'title' => 'Kustannusarvio',
		],
		'comment' => !empty($project_intdata['comment']['kustannusarvio']) ? $project_intdata['comment']['kustannusarvio'] : 'aloittamatta',
	],
	'aikataulu' => [
		'title' => 'Laadi alustava aikataulu',
		'status' => !empty($project_intdata['status']['aikataulu']) ? $project_intdata['status']['aikataulu'] : 'aloittamatta',
		'url' => [
			'link' => 'aikataulu',
			'title' => 'Aikataulu',
		],
		'comment' => !empty($project_intdata['comment']['aikataulu']) ? $project_intdata['comment']['aikataulu'] : 'aloittamatta',
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
										Projektin valmisteluvaiheessa tärkeintä on tukea kiinteistönomistajan vuokraamisesta vastaavaa tahoa niin, että tilasta tehtävä vuokrasopimustarjous kiinteistönomistajan (eli vuokranantajan / tilaajan) asiakkaalle, eli vuokralaisehdokkaalle olisi mahdollisimman houkutteleva. Samalla vuokrasopimustarjous pyritään laatimaan mahdollisimman kannattavaksi kiinteistönomistajalle. Vaiheelle kuvaavaa on aika-ajoin kiireelliset selvitystyöt, teknisten reunaehtojen selvitys vähillä lähtötiedoilla, sekä vuokrasopimustarjoukseen tarvittavien avustavien lähtötietojen nopea toimitus vuokrauksesta vastaavalle taholle. <br><br> Tässä vaiheessa vuokralaisehdokas usein kilpailuttaa useita kiinteistönomistajia lyhyen ajanjakson sisällä ja kiinteistöomistajan, jota noste.io auttaa, on pyrittävä antamaan vuokralaisehdokkaalle paras mahdollinen tarjous vuokralaisen tarvitsemista tiloista, niin tilatarpeiden kuin kustannusten osalta.
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
					<h1 class="text-2xl text-dark mb-4">Lähtötietojen läpikäynti, alustavan kustannusarvion ja aikataulun teko</h1>

					<p class="text-base text-[#475467] mb-4">
						<b>Sisältö:</b><br>
						Käydään läpi saadut lähtötiedot ja laaditaan alustava kustannusarvio sekä aikataulu. Arvioidaan mitä riskejä ja avoimia asioita saatujen lähtötietojen lisäksi pitää selvittää ja onko tarvetta TATE-suunnittelulle tilasuunnittelun lisäksi. Viestitään tilaajalle mihin oletuksiin kustannusarvio perustuu ja mitä mahdollisia rajoitteita olevat tilat asettaa tilasuunnitelmalle. Tarvittaessa tilasuunnitelman kommentointi.
					</p>

					<div class="mb-6 excerpt-expand">
						<p class="text-base text-[#475467]"><b>Kuvaus:</b></p>
						<p class="text-base text-[#475467] mb-4 content">
							Tässä vaiheessa projektin valmistelua annetaan vuokrauksesta vastaavalle taholle tärkeimmät, vähintään suuntaa antavat lähtötiedot vuokrasopimustarjouksen tekemistä varten. Nämä lähtötiedot ovat aikataulu ja kustannusarvio. Näiden dokumenttien tärkeyttä ei voi liikaa korostaa. Jos vuokrausneuvottelut etenevät myöhemmin, tässä vaiheessa indikoituihin kustannuksiin, toteutettavuuteen ja laatutasoon palataan jatkoneuvotteluissa. On myös erittäin tärkeää viestiä mahdollisista oletuksista, riskeistä ja avoimista asioista tilaajalle, jotta myös tilaajalla on mahdollisimman hyvä tilannekuva kokonaisuuden osalta. Tarkoituksena on se, että noste.ion antamia lähtötietoja ei tarvitsisi tämän jälkeen muuttaa, pois lukien tiedostetut avoimet asiat ja riskit. Tilamuutoksen sisällön ja huomioitavien asioiden läpikäyntiohjeen avulla on tarkoitus miettiä miten tehtävät muutokset vaikuttavat eri asioihin ja varmistua siitä, ettei mitään tärkeää jää huomiotta.<br><br> Tämä vaihe on yleensä nopea ja alustava kustannusarvio sekä aikataulu tarvitaankin noin kahden päivän sisällä lähtötietojen saamisesta. Nopeus on valttia, sillä tilaaja käyttää alustavaa kustannusarviota apuna vuokrauksen kannattavuuden laskennassa ja vuokrasopimustarjousta laatiessa. Mikäli kustannusarvio viipyy, voi vuokraus jäädä tekemättä. Kuitenkaan hutiloida ei saa, koska alustavakin kustannusarvio antaa osviittaa siitä kannattaako vuokrausneuvotteluja jatkaa ja mihin hinta- ja laatutasoon vuokratilassa voidaan päästä. Jatkoa ajatellen, jotta projektia voidaan johtaa tehokkaasti, tulee ymmärtää mitä ollaan tekemässä. Yksinkertaisen projektin pystyy projektipäällikkö sisäistämään jo tässä vaiheessa.
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