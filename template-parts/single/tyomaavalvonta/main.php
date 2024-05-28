<?php 
	$tm = $_GET['tm'];
    $user = wp_get_current_user();

	$project_intdata = !empty(get_post_meta( get_the_ID(), sprintf('%s_status', $tm), true )) ? json_decode( get_post_meta( get_the_ID(), sprintf('%s_status', $tm), true ), true ) : [];


	$tm_inner = [
		'kay_tyomaalla' => [
			'title' => 'Käy työmaalla tekemässä valvontaa',
			'status' => !empty($project_intdata['kay_tyomaalla']['status']) ? $project_intdata['kay_tyomaalla']['status'] : 0,
			'url' => [
				'link'	=> '',
				'title'	=> 'OHJE Työmaan yleinen valvonta'
			],
			'comment' => !empty($project_intdata['kay_tyomaalla']['comment']) ? $project_intdata['kay_tyomaalla']['comment'] : '',
		],
		'dokumentoi-työmaan-eteneminen' => [
			'title' => 'Valokuvaa ja dokumentoi työmaan eteneminen',
			'status' => !empty($project_intdata['dokumentoi-työmaan-eteneminen']['status']) ? $project_intdata['dokumentoi-työmaan-eteneminen']['status'] : 0,
			'url' => '',
			'comment' => !empty($project_intdata['dokumentoi-työmaan-eteneminen']['comment']) ? $project_intdata['dokumentoi-työmaan-eteneminen']['comment'] : '',
		],
		'kuittaa-maksettavaksi' => [
			'title' => 'Kuittaa maksettavaksi maksuerät, jos urakoitsija niitä kohdekäynnillä esittää',
			'status' => !empty($project_intdata['kuittaa-maksettavaksi']['status']) ? $project_intdata['kuittaa-maksettavaksi']['status'] : 0,
			'url' => '',
			'comment' => !empty($project_intdata['kuittaa-maksettavaksi']['comment']) ? $project_intdata['kuittaa-maksettavaksi']['comment'] : '',
		],
		'huomautukset' => [
			'title' => 'Tee kohdekäynnillä havaittujen asioiden pohjalta tarvittavat huomautukset urakoitsijalle kirjallisesti',
			'status' => !empty($project_intdata['huomautukset']['status']) ? $project_intdata['huomautukset']['status'] : 0,
			'url' => '',
			'comment' => !empty($project_intdata['huomautukset']['comment']) ? $project_intdata['huomautukset']['comment'] : '',
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
					<h1 class="text-2xl text-dark mb-4">Työmaavalvonta</h1>

					<p class="text-base text-[#475467] mb-4">
						<b>Sisältö:</b><br>
						Työmaan valvonta eli kohdekäynnit (pysy pulssilla).
					</p>

					<div class="mb-6 excerpt-expand">
						<p class="text-base text-[#475467]"><b>Kuvaus:</b></p>
						<p class="text-base text-[#475467] mb-4 content">
							Työmaavalvontaa suoritettaessa valvotaan työmaan aikataulua, verrataan meneillään olevaa työvaihetta urakoitsijan ilmoittamaan, tarkastellaan työn laatua ja laadunvarmistusmenettelyjen toteutumista, suunnitelman mukaisen rakentamisen toteutumista ja havainnoidaan yleistä työturvallisuutta turvallisuuskoordinaattorin roolissa.<br><br> Työmaakäyntien yhteydessä on hyvä kuitata esitetyt maksuerät oikeellisiksi ja hyväksytyiksi. Valvontakierroksilla on hyvä tarkastella mahdollisia lisä- ja muutostyöaiheita paikan päällä. Valvontakierroksilla tarvittaessa reagoidaan sopimuksen vastaiseen toimintaan. Jos työmaakokoukset pidetään neljän viikon välein, kannattaa yksi valvontakierros yhdistää työmaakokoukseen ja pitää yksi valvontakierros työmaakokousten välissä.
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