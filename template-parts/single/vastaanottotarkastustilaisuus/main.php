<?php 
	$tm = $_GET['tm'];

	$project_intdata = get_post_meta( get_the_ID(), sprintf('%s_status', $tm), true );





	$tm_inner = [
		'vastaanottoon-liittyvat-dokumentit' => [
			'title' => 'Tarkasta urakoitsijan toimittamat vastaanottoon liittyvät dokumentit',
			'status' => !empty($project_intdata['status']['vastaanottoon-liittyvat-dokumentit']) ? $project_intdata['status']['vastaanottoon-liittyvat-dokumentit'] : 'aloittamatta',
			'url' => [
				'link'	=> 'huomioitavaa',
				'title'	=> 'OHJE Vastaanotossa huomioitavaa'
			],
			'comment' => !empty($project_intdata['comment']['vastaanottoon-liittyvat-dokumentit']) ? $project_intdata['comment']['vastaanottoon-liittyvat-dokumentit'] : 'aloittamatta',
		],
		'toimita-kokouksen-osallistujille' => [
			'title' => 'Laadi vastaanottotarkastusasialista ja toimita se kokouksen osallistujille',
			'status' => !empty($project_intdata['status']['toimita-kokouksen-osallistujille']) ? $project_intdata['status']['toimita-kokouksen-osallistujille'] : 'aloittamatta',
			'url' => [
				'link'	=> 'vastaanottotarkastuksen-asialista',
				'title'	=> 'Vastaanottotarkastuksen asialista'
			],
			'comment' => !empty($project_intdata['comment']['toimita-kokouksen-osallistujille']) ? $project_intdata['comment']['toimita-kokouksen-osallistujille'] : 'aloittamatta',
		],
		'sopimuksenmukaisuus' => [
			'title' => 'Tarkasta urakan sopimuksenmukaisuus',
			'status' => !empty($project_intdata['status']['sopimuksenmukaisuus']) ? $project_intdata['status']['sopimuksenmukaisuus'] : 'aloittamatta',
			'url' => '',
			'comment' => !empty($project_intdata['comment']['sopimuksenmukaisuus']) ? $project_intdata['comment']['sopimuksenmukaisuus'] : 'aloittamatta',
		],
		'tarkasta-urakan-rakennustyöt' => [
			'title' => 'Tarkasta urakan rakennustyöt ja huolehdi, että urakoitsija kirjaa ylös virhe- ja puutelistaukseen kaikki huomiot',
			'status' => !empty($project_intdata['status']['tarkasta-urakan-rakennustyöt']) ? $project_intdata['status']['tarkasta-urakan-rakennustyöt'] : 'aloittamatta',
			'url' => '',
			'comment' => !empty($project_intdata['comment']['tarkasta-urakan-rakennustyöt']) ? $project_intdata['comment']['tarkasta-urakan-rakennustyöt'] : 'aloittamatta',
		],
		'vastaanottotarkastustilaisuus' => [
			'title' => 'Pidä vastaanottotarkastustilaisuus',
			'status' => !empty($project_intdata['status']['vastaanottotarkastustilaisuus']) ? $project_intdata['status']['vastaanottotarkastustilaisuus'] : 'aloittamatta',
			'url' => '',
			'comment' => !empty($project_intdata['comment']['vastaanottotarkastustilaisuus']) ? $project_intdata['comment']['vastaanottotarkastustilaisuus'] : 'aloittamatta',
		],
		'vastaanottotarkastuspoytakirja' => [
			'title' => 'Laadi vastaanottotarkastuspöytäkirja liitteineen ja toimita se kokouksen osallistujille',
			'status' => !empty($project_intdata['status']['vastaanottotarkastuspoytakirja']) ? $project_intdata['status']['vastaanottotarkastuspoytakirja'] : 'aloittamatta',
			'url' => [
				'link'	=> 'hallinnanluovutustilaisuus_poytakirja',
				'title'	=> 'Hallinnanluovutustilaisuus poytakirja'
			],
			'comment' => !empty($project_intdata['comment']['vastaanottotarkastuspoytakirja']) ? $project_intdata['comment']['vastaanottotarkastuspoytakirja'] : 'aloittamatta',
		],
		'varmista' => [
			'title' => 'Varmista, että vastaanottotarkastuspöytäkirja allekirjoitetaan',
			'status' => !empty($project_intdata['status']['varmista']) ? $project_intdata['status']['varmista'] : 'aloittamatta',
			'url' => '',
			'comment' => !empty($project_intdata['comment']['varmista']) ? $project_intdata['comment']['varmista'] : 'aloittamatta',
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
                        <p class="text-sm font-normal text-[#818D93] mb-1">Project nimi</p>
                        <h2 class="text-xl font-medium text-[#08202C] mb-4">Projektin valmistelu</h2>


                        <p class="text-base text-[#475467] mb-2" id="content">
                            Projektin valmisteluvaiheessa tärkeintä on tukea kiinteistönomistajan vuokraamisesta vastaavaa tahoa niin, että tilasta tehtävä vuokrasopimustarjous kiinteistönomistajan (eli vuokranantajan / tilaajan) asiakkaalle, eli vuokralaisehdokkaalle olisi mahdollisimman houkutteleva. Samalla vuokrasopimustarjous pyritään laatimaan mahdollisimman kannattavaksi kiinteistönomistajalle. Vaiheelle kuvaavaa on aika-ajoin kiireelliset selvitystyöt, teknisten reunaehtojen selvitys vähillä lähtötiedoilla, sekä vuokrasopimustarjoukseen tarvittavien avustavien lähtötietojen nopea toimitus vuokrauksesta vastaavalle taholle. Tässä vaiheessa vuokralaisehdokas usein kilpailuttaa useita kiinteistönomistajia lyhyen ajanjakson sisällä ja kiinteistöomistajan, jota noste.io auttaa, on pyrittävä antamaan vuokralaisehdokkaalle paras mahdollinen tarjous vuokralaisen tarvitsemista tiloista, niin tilatarpeiden kuin kustannusten osalta. <br> <br>
                            Noste.ion toimittamat vuokrasopimustarjouksen lähtötiedot pyritään antamaan mahdollisimman paikkaansa pitävänä, ilman virheitä ja mahdollisimman nopeasti kiinteistönomistajalle vuokrasopimustarjouksen lähtötiedoiksi. Tässä vaiheessa tehtävät alustavat selvitykset pyritään usein myös tekemään hyvin kustannustehokkaasti, koska vuokralaisehdokas voi päätyä valitsemaan jonkin toisen kiinteistönomistajan tilat, jäämään vanhoihin tiloihin tai tekemään jonkin muun ratkaisuun. Vuokrauksesta vastaavan tahon mieltymysten mukaan, henkilö joko toivoo paljon yhteystyötä noste.iolta tai sitten henkilö tekee hyvin omatoimisesti ja omin päin tämän vaiheen.
                        </p>
                        
                        <button class="text-accent underline decoration-accent text-base" id="showMore">Lue lisää</button>
                    </div>
                </div><!-- Card Header -->
                <!-- Card Body -->
                <div class="px-4 md:px-8 pt-6 pb-10 lg:h-[645px] overflow-y-auto no-scrollbar scroll-smooth">
                    <h1 class="text-lg text-dark mb-4">Vastaanottotarkastustilaisuus</h1>

                    <p class="text-base text-[#475467] mb-4">
                        <b>Sisältö:</b><br>
                        Pidetään vastaanottotarkastustilaisuus. Tarkastetaan tehdyt rakennustyöt ja varmistetaan, että urakoitsija on täyttänyt urakkasopimuksen mukaisen suoritusvelvoitteen, ja että tilat voidaan ottaa vastaan sekä luovuttaa edelleen vuokralaisen käyttöön. <br><br>
                        <b>Kuvaus:</b><br>
                        Vastaanottotarkastustilaisuus on yksi tärkeimmistä, jos ei tärkein yksittäinen tilaisuus rakennushankkeen aikana. Vastaanottotarkastuksessa tarkastetaan, että urakkasuoritus on sopimuksenmukainen ja urakoitsija on täyttänyt kaikki urakkasopimuksen velvoitteet. Urakoitsijan on ennen vastaanottotarkastusta itse myös varmistettava, että rakennustyö on valmis ja täyttää sopimuksen mukaiset vaatimukset. Vastaanottotarkastukseen liittyy yksityiskohtaisten virhe- ja puutelistojen teko sekä urakoitsijan luovutusaineiston tarkastus (ml. tarkastuspöytäkirjat, itselleluovutustarkastukset, materiaalitiedot ja punakynäpiirustukset). Virheet ja puutteet tarkastetaan yhdessä urakoitsijan kanssa ja urakoitsija kirjaa ne muistiin. Huomiona kuitenkin, että suorittamatta olevat vähäiset viimeistelytyöt eivät estä vastaanottoa, jos niistä ei aiheudu estettä tai haittaa työntuloksen käyttöönotolle. Tällaisia vähäisiä korjaustöitä urakoitsija voi vielä käydä tekemässä tilassa muutamana päivänä vastaanottotarkastuksen jälkeen. <br><br>
						Hyväksytyn vastaanottotarkastuksen jälkeen muutosalue siirtyy takaisin tilaajan vastuulle urakoitsijalta. Silloin tulee varmistua siitä, että tilat ovat turvalliset käyttää ja ne voidaan luovuttaa edelleen vuokralaisen käyttöön turvallisesti (mm. sähkön käyttöönottopöytäkirjan avulla osoitetaan, että tilan sähköturvallisuus on kunnossa). Urakoitsijalla ei ole enää oikeutta toimia tiloissa omatoimisesti ja kaikki urakoitsijan kulkuoikeudet sekä avaimet luovutetaan tilaajalle, jos ei muusta sovita. <br><br>
						On tärkeä ymmärtää, että viimeistään vastaanottotarkastuksessa kummankin sopijapuolen on esitettävä toisiinsa kohdistuvat vaatimuksensa perusteiltaan sillä uhalla, että oikeus näiden vaatimusten tekemiseen on muutoin menetetty. Tällainen vaatimus tilaajalta urakoitsijalle voisi olla esimerkiksi urakan myöhästymisestä vaadittu viivästymissakko. On ehdottoman tärkeää valmistella vastaanottotarkastusasialista hyvin ja kiinnittää erityistä huomiota pöytäkirjan kirjauksiin. <br>
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
	                                                        <form action="#" method="post">
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