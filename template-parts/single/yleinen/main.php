<?php 
	$tm = $_GET['tm'];
    $user = wp_get_current_user();

	$project_intdata = !empty(get_post_meta( get_the_ID(), sprintf('%s_status', $tm), true )) ? json_decode( get_post_meta( get_the_ID(), sprintf('%s_status', $tm), true ), true ) : [];


	$tm_inner = [
		'laskut' => [
			'title' => 'Tarkasta projektin laskut',
			'status' => !empty($project_intdata['laskut']['status']) ? $project_intdata['laskut']['status'] : 0,
			'url' => '',
			'comment' => !empty($project_intdata['laskut']['comment']) ? $project_intdata['laskut']['comment'] : '',
		],
		'kustannusseurantaa' => [
			'title' => 'Ylläpidä kustannusseurantaa ja tee tarvittavat muutokset LMT:t mukaan lukien',
			'status' => !empty($project_intdata['kustannusseurantaa']['status']) ? $project_intdata['kustannusseurantaa']['status'] : 0,
			'url' => [
				'link'	=> '',
				'title'	=> 'Kustannusseurantakuvake löytyy projektin ylävalikosta'
			],
			'comment' => !empty($project_intdata['kustannusseurantaa']['comment']) ? $project_intdata['kustannusseurantaa']['comment'] : '',
		],
		'silmalla' => [
			'title' => 'Pidä silmällä mahdollisia budjettiylityksiä',
			'status' => !empty($project_intdata['silmalla']['status']) ? $project_intdata['silmalla']['status'] : 0,
			'url' => '',
			'comment' => !empty($project_intdata['silmalla']['comment']) ? $project_intdata['silmalla']['comment'] : '',
		],
		'mahdollisia' => [
			'title' => 'Pidä silmällä mahdollisia toimeksiannon ylityksiä (myös oma ajankäyttö / laskutus)',
			'status' => !empty($project_intdata['mahdollisia']['status']) ? $project_intdata['mahdollisia']['status'] : 0,
			'url' => '',
			'comment' => !empty($project_intdata['mahdollisia']['comment']) ? $project_intdata['mahdollisia']['comment'] : '',
		],
		'osapuoliin' => [
			'title' => 'Pidä yhteyttä eri osapuoliin rakentamisen aikana',
			'status' => !empty($project_intdata['osapuoliin']['status']) ? $project_intdata['osapuoliin']['status'] : 0,
			'url' => '',
			'comment' => !empty($project_intdata['osapuoliin']['comment']) ? $project_intdata['osapuoliin']['comment'] : '',
		],
		'kuukausittain' => [
			'title' => 'Tee kuukausittain projektiraportti',
			'status' => !empty($project_intdata['kuukausittain']['status']) ? $project_intdata['kuukausittain']['status'] : 0,
			'url' => [
				'link'	=> '',
				'title'	=> 'Projektirapottikuvake löytyy projektin ylävalikosta'
			],
			'comment' => !empty($project_intdata['kuukausittain']['comment']) ? $project_intdata['kuukausittain']['comment'] : '',
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
					<h1 class="text-2xl text-dark mb-4">Yleinen projektinjohto rakentamisen aikana</h1>

					<p class="text-base text-[#475467] mb-4">
						<b>Sisältö:</b><br>
						Yleinen projektinjohto rakentamisen aikana. Pidetään yhteyttä osapuolten välillä, tarkastetaan laskuja, raportoidaan, pidetään kirjaa lisä- ja muutostöistä (lyhenne LMT) ja käsitellään työmaalla esiin nousseita asioita.
					</p>

					<div class="mb-6 excerpt-expand">
						<p class="text-base text-[#475467]"><b>Kuvaus:</b></p>
						<p class="text-base text-[#475467] mb-4 content">
							Rakentamisen aikana tehdään paljon muitakin asioita, kuin edellä mainitut työmaakokousten pitämiset, työmaavalvonta ja lisä- ja muutostyökäsittelyt. Tärkeää on pysyä koko ajan kartalla projektin tilanteesta. Tärkeää on pitää myös muut osapuolet (tilaaja, urakoitsija, käyttäjä, kiinteistö, suunnittelija) kartalla projektin tilanteesta. Etenevätkö asiat suunnitellusti vai onko vastassa jotakin haasteita mihin pitää reagoida? Riittävällä ennakoimisella projektin aikana vältetään urakan äkillisiä ongelmatilanteita tai viivästyksiä projektin loppuvaiheessa. Esiin nousevia asioita selvitetään usein sähköposteilla ja puheluilla. <br> <br> Projektipäällikön pitää muistaa pysyä roolissaan. Ei saa lähteä hätiköiden selvittelemään lukemattomia asioita aina kun työmaalta soitetaan kysymyksen kanssa. Jokaista yksittäistä asiaa ei lähdetä selvittämään työmaalla käymällä, vaan asiat käsitellään kootusti työmaakierrosten yhteydessä ja kokouksissa. Työnjohtajan, työmaainsinöörin tai suunnittelijan tehtäviä ei saa alkaa itse tekemään, heitä tulee johtaa. <br><br> Urakoitsijan ja konsulttien laskujen tarkastus on tärkeä kuukausittainen tehtävä, jotta tilaajan maksuvelvollisuus täyttyy. Laskujen tarkastuksen yhteydessä päivitetään kustannusseurantaa, seurataan loppukustannusennustetta sekä laskutuskertymää ja sitä raportoidaan projektiraportin yhteydessä. Urakoitsijan LMT-koontilistaa verrataan myös budjetin ja kustannusseuranna varauksiin ja ennakoidaan, onko riskinä esim. budjettiylitys. Myös muista tilaajan vastuista ja myötävaikutusvelvollisuuksista pitää projektipäällikön huolehtia. Noste.io tekee tilaajan vastuulla olevat käytännön tehtävät ja edustaa tilaaja muihin osapuoliin nähden.
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