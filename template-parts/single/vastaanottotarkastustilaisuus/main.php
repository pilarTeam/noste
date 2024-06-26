<?php 
	$tm = $_GET['tm'];
    $user = wp_get_current_user();

	$project_intdata = !empty(get_post_meta( get_the_ID(), sprintf('%s_status', $tm), true )) ? json_decode( get_post_meta( get_the_ID(), sprintf('%s_status', $tm), true ), true ) : [];


	$tm_inner = [
		'vastaanottoon-liittyvat-dokumentit' => [
			'title' => 'Tarkasta urakoitsijan toimittamat vastaanottoon liittyvät dokumentit',
			'status' => !empty($project_intdata['vastaanottoon-liittyvat-dokumentit']['status']) ? $project_intdata['vastaanottoon-liittyvat-dokumentit']['status'] : 0,
			'url' => [
				'link'	=> 'huomioitavaa',
				'title'	=> 'OHJE Vastaanotossa huomioitavaa'
			],
			'comment' => !empty($project_intdata['vastaanottoon-liittyvat-dokumentit']['comment']) ? $project_intdata['vastaanottoon-liittyvat-dokumentit']['comment'] : '',
		],
		'toimita-kokouksen-osallistujille' => [
			'title' => 'Laadi vastaanottotarkastusasialista ja toimita se kokouksen osallistujille',
			'status' => !empty($project_intdata['toimita-kokouksen-osallistujille']['status']) ? $project_intdata['toimita-kokouksen-osallistujille']['status'] : 0,
			'url' => [
				'link'	=> 'vastaanottotarkastuksen-asialista',
				'title'	=> 'Vastaanottotarkastuksen asialista'
			],
			'comment' => !empty($project_intdata['toimita-kokouksen-osallistujille']['comment']) ? $project_intdata['toimita-kokouksen-osallistujille']['comment'] : '',
		],
		'sopimuksenmukaisuus' => [
			'title' => 'Tarkasta urakan sopimuksenmukaisuus',
			'status' => !empty($project_intdata['sopimuksenmukaisuus']['status']) ? $project_intdata['sopimuksenmukaisuus']['status'] : 0,
			'url' => '',
			'comment' => !empty($project_intdata['sopimuksenmukaisuus']['comment']) ? $project_intdata['sopimuksenmukaisuus']['comment'] : '',
		],
		'tarkasta-urakan-rakennustyot' => [
			'title' => 'Tarkasta urakan rakennustyöt ja huolehdi, että urakoitsija kirjaa ylös virhe- ja puutelistaukseen kaikki huomiot',
			'status' => !empty($project_intdata['tarkasta-urakan-rakennustyot']['status']) ? $project_intdata['tarkasta-urakan-rakennustyot']['status'] : 0,
			'url' => '',
			'comment' => !empty($project_intdata['tarkasta-urakan-rakennustyot']['comment']) ? $project_intdata['tarkasta-urakan-rakennustyot']['comment'] : '',
		],
		'vastaanottotarkastustilaisuus' => [
			'title' => 'Pidä vastaanottotarkastustilaisuus',
			'status' => !empty($project_intdata['vastaanottotarkastustilaisuus']['status']) ? $project_intdata['vastaanottotarkastustilaisuus']['status'] : 0,
			'url' => '',
			'comment' => !empty($project_intdata['vastaanottotarkastustilaisuus']['comment']) ? $project_intdata['vastaanottotarkastustilaisuus']['comment'] : '',
		],
		'vastaanottotarkastuspoytakirja' => [
			'title' => 'Laadi vastaanottotarkastuspöytäkirja liitteineen ja toimita se kokouksen osallistujille',
			'status' => !empty($project_intdata['vastaanottotarkastuspoytakirja']['status']) ? $project_intdata['vastaanottotarkastuspoytakirja']['status'] : 0,
			'url' => [
				'link'	=> 'hallinnanluovutustilaisuus_poytakirja',
				'title'	=> 'Vastaanottotarkastuksen poytäkirja'
			],
			'comment' => !empty($project_intdata['vastaanottotarkastuspoytakirja']['comment']) ? $project_intdata['vastaanottotarkastuspoytakirja']['comment'] : '',
		],
		'varmista' => [
			'title' => 'Varmista, että vastaanottotarkastuspöytäkirja allekirjoitetaan',
			'status' => !empty($project_intdata['varmista']['status']) ? $project_intdata['varmista']['status'] : 0,
			'url' => '',
			'comment' => !empty($project_intdata['varmista']['comment']) ? $project_intdata['varmista']['comment'] : '',
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
						<h2 class="text-xl font-medium text-[#08202C] mb-4">Rakennustöiden vastaanotto ja toimeksiannon lopetus</h2>


						<div class="content-wrap">
							<div class="excerpt" id="excerpt_content">
								<p class="text-base text-[#475467] mb-2">
									Urakan lopetusvaiheessa tärkeitä on varmistaa, että kiinteistönomistajan asiakas eli vuokralainen saa vuokrasopimuksessa sovitun lopputuloksen käyttöönsä sovitulla ajanhetkellä. Tärkeää on varmistaa, että urakoitsija vie loppuun koko urakkasuorituksen laadukkaasti. Tärkeää on myös dokumentoida urakan valmistuminen ...
								</p>

								<button class="text-accent underline decoration-accent text-base" id="showMore">Lue lisää</button>
							</div>

							<div class="hidden" id="full_content">
								<div class="grid grid-cols-1 md:grid-cols-2 gap-10">
									<p class="text-base text-[#475467] mb-2">
										Urakan lopetusvaiheessa tärkeitä on varmistaa, että kiinteistönomistajan asiakas eli vuokralainen saa vuokrasopimuksessa sovitun lopputuloksen käyttöönsä sovitulla ajanhetkellä. Tärkeää on varmistaa, että urakoitsija vie loppuun koko urakkasuorituksen laadukkaasti. Tärkeää on myös dokumentoida urakan valmistuminen vastaanottotilaisuudessa, nostaa esiin mahdolliset puutteet urakkasoritukseen liittyen ja varmistaa, että puutteet korjataan ennen kuin vuokralainen siirtyy käyttämään tilaa.
									</p>

									<p class="text-base text-[#475467] mb-2">

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
					<h1 class="text-2xl text-dark mb-4">Vastaanottotarkastustilaisuus</h1>

					<p class="text-base text-[#475467] mb-4">
						<b>Sisältö:</b><br>
						Pidetään vastaanottotarkastustilaisuus. Tarkastetaan tehdyt rakennustyöt ja varmistetaan, että urakoitsija on täyttänyt urakkasopimuksen mukaisen suoritusvelvoitteen, ja että tilat voidaan ottaa vastaan sekä luovuttaa edelleen vuokralaisen käyttöön.
					</p>

					<div class="mb-6 excerpt-expand">
						<p class="text-base text-[#475467]"><b>Kuvaus:</b></p>
						<p class="text-base text-[#475467] mb-4 content">
							Vastaanottotarkastustilaisuus on yksi tärkeimmistä, jos ei tärkein yksittäinen tilaisuus rakennushankkeen aikana. Vastaanottotarkastuksessa tarkastetaan, että urakkasuoritus on sopimuksenmukainen ja urakoitsija on täyttänyt kaikki urakkasopimuksen velvoitteet. Urakoitsijan on ennen vastaanottotarkastusta itse myös varmistettava, että rakennustyö on valmis ja täyttää sopimuksen mukaiset vaatimukset. Vastaanottotarkastukseen liittyy yksityiskohtaisten virhe- ja puutelistojen teko sekä urakoitsijan luovutusaineiston tarkastus (ml. tarkastuspöytäkirjat, itselleluovutustarkastukset, materiaalitiedot ja punakynäpiirustukset). Virheet ja puutteet tarkastetaan yhdessä urakoitsijan kanssa ja urakoitsija kirjaa ne muistiin. Huomiona kuitenkin, että suorittamatta olevat vähäiset viimeistelytyöt eivät estä vastaanottoa, jos niistä ei aiheudu estettä tai haittaa työntuloksen käyttöönotolle. Tällaisia vähäisiä korjaustöitä urakoitsija voi vielä käydä tekemässä tilassa muutamana päivänä vastaanottotarkastuksen jälkeen. <br><br> Hyväksytyn vastaanottotarkastuksen jälkeen muutosalue siirtyy takaisin tilaajan vastuulle urakoitsijalta. Silloin tulee varmistua siitä, että tilat ovat turvalliset käyttää ja ne voidaan luovuttaa edelleen vuokralaisen käyttöön turvallisesti (mm. sähkön käyttöönottopöytäkirjan avulla osoitetaan, että tilan sähköturvallisuus on kunnossa). Urakoitsijalla ei ole enää oikeutta toimia tiloissa omatoimisesti ja kaikki urakoitsijan kulkuoikeudet sekä avaimet luovutetaan tilaajalle, jos ei muusta sovita.<br><br> On tärkeä ymmärtää, että viimeistään vastaanottotarkastuksessa kummankin sopijapuolen on esitettävä toisiinsa kohdistuvat vaatimuksensa perusteiltaan sillä uhalla, että oikeus näiden vaatimusten tekemiseen on muutoin menetetty. Tällainen vaatimus tilaajalta urakoitsijalle voisi olla esimerkiksi urakan myöhästymisestä vaadittu viivästymissakko. On ehdottoman tärkeää valmistella vastaanottotarkastusasialista hyvin ja kiinnittää erityistä huomiota pöytäkirjan kirjauksiin.
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