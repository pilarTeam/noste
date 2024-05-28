<?php 
	$tm = $_GET['tm'];
    $user = wp_get_current_user();

	$project_intdata = !empty(get_post_meta( get_the_ID(), sprintf('%s_status', $tm), true )) ? json_decode( get_post_meta( get_the_ID(), sprintf('%s_status', $tm), true ), true ) : [];


	$tm_inner = [
		'Informoi-osapuolia-projektin-loppumisesta' => [
			'title' => 'Informoi osapuolia projektin loppumisesta',
			'status' => !empty($project_intdata['Informoi-osapuolia-projektin-loppumisesta']['status']) ? $project_intdata['Informoi-osapuolia-projektin-loppumisesta']['status'] : 0,
			'url' => [
				'link'	=> '',
				'title'	=> 'OHJE Projektin päättämisen muistilista'
			],
			'comment' => !empty($project_intdata['Informoi-osapuolia-projektin-loppumisesta']['comment']) ? $project_intdata['Informoi-osapuolia-projektin-loppumisesta']['comment'] : '',
		],
		'arkistoitu' => [
			'title' => 'Varmista, että projektin aineisto on toimitettu projektipankkiin tai muulla sovitulla tavalla arkistoitu',
			'status' => !empty($project_intdata['arkistoitu']['status']) ? $project_intdata['arkistoitu']['status'] : 0,
			'url' => '',
			'comment' => !empty($project_intdata['arkistoitu']['comment']) ? $project_intdata['arkistoitu']['comment'] : '',
		],
		'takuuajan-listaukseen' => [
			'title' => 'Varmista, että projektin tiedot viedään noste.ion takuuajan listaukseen',
			'status' => !empty($project_intdata['takuuajan-listaukseen']['status']) ? $project_intdata['takuuajan-listaukseen']['status'] : 0,
			'url' => '',
			'comment' => !empty($project_intdata['takuuajan-listaukseen']['comment']) ? $project_intdata['takuuajan-listaukseen']['comment'] : '',
		],
		'loppuraportti' => [
			'title' => 'Tee viimeinen projektiraportti = loppuraportti',
			'status' => !empty($project_intdata['loppuraportti']['status']) ? $project_intdata['loppuraportti']['status'] : 0,
			'url' => [
				'link'	=> '',
				'title'	=> 'Projektirapottikuvake löytyy projektin ylävalikosta'
			],
			'comment' => !empty($project_intdata['loppuraportti']['comment']) ? $project_intdata['loppuraportti']['comment'] : '',
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
					<h1 class="text-2xl text-dark mb-4">Loppudokumentaatio ja projektin lopetus</h1>

					<p class="text-base text-[#475467] mb-4">
						<b>Sisältö:</b><br>
						Huolehditaan projektin asianmukaisesta loppudokumentaatiosta ja lopetuksesta.
					</p>

					<div class="mb-6 excerpt-expand">
						<p class="text-base text-[#475467]"><b>Kuvaus:</b></p>
						<p class="text-base text-[#475467] mb-4 content">
							On tärkeää, että jokainen projekti lopetetaan tyylillä. Näin projektista ja noste.iosta jää tilaajalle hyvä kokemus. Lisäksi jokaiseen projektiin palataan viimeistään takuuajan päättymisen yhteydessä pidettävässä 2. vuotistakuutarkastuksessa.
							<br>
							<br>
							On tärkeää, että projektin lopetuksen yhteydessä varmistetaan, että kaikki tehdyt suunnitelmat, sopimukset (allekirjoituksin varustettuna), pöytäkirjat (allekirjoituksin varustettuna), raportit, urakoitsijan luovutusaineisto, vakuudet ja muut tärkeät dokumentit on tallennettu tai erikseen toimitettu tilaajan määrittämään paikaan.
							<br>
							<br>
							Selkeiden pöytäkirjakirjausten ja ajantasaisten loppupiirustusten tärkeys korostuu projektin jälkeen mahdollisesti syntyvissä selvitystilanteissa. Dokumenttien avulla tiedetään mitä töitä on tehty (suunnitelmat) ja / tai mitä asioita on sovittu (kirjaukset TMK-, VOT- ja TALS-pöytäkirjoissa). Viimeistään tässä vaiheessa on syytä ilmoittaa urakoitsijan lisäksi myös kaikille muille osapuolille, että projekti loppuu ja laskutus on lopetettava koska projekti sulkeutuu. Näin tilaaja saa projektin päätettyä omassa järjestelmässään ja investoinnit löytävät oikean paikkansa. Projektin valmistumisen tiedot viedään noste.ion omaan takuuajan listaukseen, jotta takuuaikoja ja niihin liittyviä tehtäviä voidaan seurata. Projektista tehdään viimeinen projektiraportti, joka toimii loppuraporttina.
							<br>
							<br>
							Voit taputtaa nyt itseäsi olalle, olet johtanut vuokralaismuutoksen alusta loppuun!
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