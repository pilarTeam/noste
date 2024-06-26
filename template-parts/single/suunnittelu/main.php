<?php 
	$tm = $_GET['tm'];
    $user = wp_get_current_user();

	$project_intdata = !empty(get_post_meta( get_the_ID(), sprintf('%s_status', $tm), true )) ? json_decode( get_post_meta( get_the_ID(), sprintf('%s_status', $tm), true ), true ) : [];



	$tm_inner = [
		'suunnittelijoilta' => [
			'title' => 'Pyydä tilasuunnittelijalta suunnittelutarjous ja pyydä tarvittaessa muilta suunnittelijoilta tarjoukset konsultoinnista',
			'status' => !empty($project_intdata['suunnittelijoilta']['status']) ? $project_intdata['suunnittelijoilta']['status'] : 0,
			'url' => [
				'link'	=> 'suunnittelutarjouksen',
				'title'	=> 'OHJE Suunnittelutarjouksen pyytäminen'
			],
			'comment' => !empty($project_intdata['suunnittelijoilta']['comment']) ? $project_intdata['suunnittelijoilta']['comment'] : '',
		],
		'kirjallisesti' => [
			'title' => 'Varmista, että tarjoukset ovat kustannusarvion rajoissa ja että tilaaja hyväksyy toimeksiantotilaukset kirjallisesti',
			'status' => !empty($project_intdata['kirjallisesti']['status']) ? $project_intdata['kirjallisesti']['status'] : 0,
			'url' => '',
			'comment' => !empty($project_intdata['kirjallisesti']['comment']) ? $project_intdata['kirjallisesti']['comment'] : '',
		],
		'suunnittelijoilla' => [
			'title' => 'Tilaa suunnittelu ja varmista että suunnittelijoilla on oikeat lähtötiedot ja ohjeet toimeksiantoa varten',
			'status' => !empty($project_intdata['suunnittelijoilla']['status']) ? $project_intdata['suunnittelijoilla']['status'] : 0,
			'url' => '',
			'comment' => !empty($project_intdata['suunnittelijoilla']['comment']) ? $project_intdata['suunnittelijoilla']['comment'] : '',
		],
		'haitta-ainekartoitusraportti' => [
			'title' => 'Tilaa asbesti- ja haitta-ainekartoitusraportti tarvittaessa',
			'status' => !empty($project_intdata['haitta-ainekartoitusraportti']['status']) ? $project_intdata['haitta-ainekartoitusraportti']['status'] : 0,
			'url' => [
				'link'	=> '',
				'title'	=> 'OHJE Asbesti ja haitta-ainekartoituksen tekeminen'
			],
			'comment' => !empty($project_intdata['haitta-ainekartoitusraportti']['comment']) ? $project_intdata['haitta-ainekartoitusraportti']['comment'] : '',
		],
		'urakkalaskentasuunnitelmat' => [
			'title' => 'Tarkista, että tehdyt urakkalaskentasuunnitelmat vastaavat vuokrasopimuksessa sovittua laatua',
			'status' => !empty($project_intdata['urakkalaskentasuunnitelmat']['status']) ? $project_intdata['urakkalaskentasuunnitelmat']['status'] : 0,
			'url' => [
				'link'	=> 'urakkalaskentasuunnitelmien',
				'title'	=> 'OHJE Urakkalaskentasuunnitelmien tarkastus'
			],
			'comment' => !empty($project_intdata['urakkalaskentasuunnitelmat']['comment']) ? $project_intdata['urakkalaskentasuunnitelmat']['comment'] : '',
		],
		'varmista' => [
			'title' => 'Varmista, että urakkalaskentasuunnittelu saatetaan valmiiksi',
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
					<h1 class="text-2xl text-dark mb-4">Suunnittelu ja selvitykset</h1>

					<p class="text-base text-[#475467] mb-4">
						<b>Sisältö:</b><br>
						Johdetaan suunnittelua. Tilataan tilasuunnittelu ja pyydetään muilta suunnittelualoilta kommentit / lausunnot tarvittavilta osin tilamuutoksiin liittyen. Tehdään riittävät suunnitelmat urakkakilpailutusta varten ja varmistetaan, että suunnitelmat eivät sisällä ristiriitaisuuksia vuokrasopimuksen kanssa. Tehdään riittävät tutkimukset. Selvitetään mahdollisuus asbestin ja muiden haitta-aineiden esiintymiselle muutostöiden alaisissa rakennuksen osissa vuokralaismuutosalueella.
					</p>

					<div class="mb-6 excerpt-expand">
						<p class="text-base text-[#475467]"><b>Kuvaus:</b></p>
						<p class="text-base text-[#475467] mb-4 content">
							Projektin valmisteluvaiheessa tilasuunnittelija on saattanut tehdä useamman luonnoksen vuokratilan käytöstä vuokranantajalle vuokralaisneuvottelujen tueksi. Kun sopimukseen on päästy yhdellä tilasuunnitelmalla vuokralaisen kanssa, jatketaan suunnitelmien tarkentamista ja täydentämistä toteutusvaihetta varten. Tässä vaiheessa varmistetaan, että tilasuunnittelijalla on oikea versio vuokralaismuutoksen pohjapiirustuksesta käytössä ja tilasuunnittelijalta tilataan urakkalaskentasuunnitelmien tekeminen (pyydetään suunnittelutarjous, sovitaan ajankäyttö ja verrataan suunnittelukustannuksia kustannusseurantaan).
							<br>
							<br>
							Tässä vaiheessa projektia sovitaan, mitä suunnitelmia tilasuunnittelija tekee urakkalaskentaa varten ja minkä laatuisena. Lisäksi varmistetaan, että tilasuunnittelijalla on tiedossa muu vuokralaismuutokseen liittyvä laatutasomääritys. Suunnittelijalla ei ole aina tietoa viimeisimmistä kirjauksista ja / tai he eivät näe aina kaikkia toteutuksen kannalta olennaisia asioita tärkeiksi. Pienehköissä vuokralaismuutoksissa tilasuunnittelijan suunnitelmat ovat usein urakkalaskenta-aineiston ja urakkasopimuksen ainoat tekniset asiakirjat. Joskus vuokrasopimuksen liitteeksi tehdään rakennustapaselostus, joka voidaan liittää myös urakkasopimukseen ja urakkalaskenta-aineistoon.
							<br>
							<br>
							Tavanomaisia suunnitelmia tällaisissa projekteissa ovat esimerkiksi pohjapiirustus, purkupiirustus, lattiakaavio, lasiseinä- ja ovikaaviot, maalaussuunnitelma, uusittavien kalusteiden kalustesuunnitelmat. Tilasuunnittelija pääsääntöisesti yrittää tehdä parhaansa tilasuunnitelman osalta ja suunnittelijaa on ohjattava niin, ettei suunnitelmat kehity vuokrasopimuksen laatutasosta poikkeavaksi (ei esimerkiksi suunnitella keittiökalusteeseen kivitasoa, jos vuokrasopimuksessa on sovittu laminaattitaso). Tarkasta, että kaikki suunnitelmat on tehty kuten on sovittu ja mitään ei ole unohtunut.
							<br>
							<br>
							Jos tilasuunnittelijan lisäksi tarvitaan jokin toinen suunnittelija varmistamaan yksittäisen tilasuunnitelmaan liittyvän seikan, niin tällainen työ tilataan tarvittaessa. Tavanomaisia tarkastuksia on esimerkiksi poistumistieetäisyyksien tarkastus palokonsultin toimesta tai ilmamäärien tarkastus LVI-suunnittelijan toimesta. Nämä suunnittelijat eivät kuitenkaan tee varsinaisia suunnitelmia, vaan antavat varmistuksen toteutuksesta.
							<br>
							<br>
							Jos kohde on valmistunut ennen vuotta 1994, valtioneuvoston asetus velvoittaa teettämään asbestikartoituksen aina, ennen kuin tällaisissa rakennuksissa voidaan ryhtyä purkua sisältäviin töihin. Asbestikartoituksen tekemisestä vastaa Rakennuttaja eli kiinteistönomistaja. Noste.io kiinteistönomistajan edunvalvojana varmistaa, että kartoitus tarvittaessa tehdään.
							<br>
							<br>
							Tässä vaiheessa on tärkeää saada käyttöön mahdollisimman kattava suunnitelmapaketti, jotta eri urakoitsijoiden tarjoukset ovat vertailukelpoiset, sisältävät kaiken vuokralaismuutokseen liittyvän työn ja johon voidaan viitata urakkasopimusneuvotteluissa ja jossa asiat on esitetty yksiselitteisesti.
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