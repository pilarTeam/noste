<?php 
	$tm = $_GET['tm'];

	$project_intdata = get_post_meta( get_the_ID(), sprintf('%s_status', $tm), true );

	$tm_inner = [
		'urakkasopimuksen_viimeistely' => [
			'title' => 'Täydennä ja viimeistele urakkasopimus sekä kokoa se liitteineen täysin valmiiksi',
			'status' => !empty($project_intdata['status']['urakkasopimuksen_viimeistely']) ? $project_intdata['status']['urakkasopimuksen_viimeistely'] : 'aloittamatta',
			'url' => [
				[
					'link'	=> '',
					'title'	=> 'OHJE Urakkasopimuksen viimeistely'
				],
				[
					'link'	=> 'urakkasopimus',
					'title'	=> 'Urakkasopimus'
				]
			],
			'comment' => !empty($project_intdata['comment']['urakkasopimuksen_viimeistely']) ? $project_intdata['comment']['urakkasopimuksen_viimeistely'] : 'aloittamatta',
		],
		'allekirjoitettavaksi' => [
			'title' => 'Toimita urakkasopimus allekirjoitettavaksi',
			'status' => !empty($project_intdata['status']['allekirjoitettavaksi']) ? $project_intdata['status']['allekirjoitettavaksi'] : 'aloittamatta',
			'url' => '',
			'comment' => !empty($project_intdata['comment']['allekirjoitettavaksi']) ? $project_intdata['comment']['allekirjoitettavaksi'] : 'aloittamatta',
		],
		'molempien_tahojen_toimesta' => [
			'title' => 'Varmista, että urakkasopimus allekirjoitetaan molempien tahojen toimesta',
			'status' => !empty($project_intdata['status']['molempien_tahojen_toimesta']) ? $project_intdata['status']['molempien_tahojen_toimesta'] : 'aloittamatta',
			'url' => '',
			'comment' => !empty($project_intdata['comment']['molempien_tahojen_toimesta']) ? $project_intdata['comment']['molempien_tahojen_toimesta'] : 'aloittamatta',
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
                        <h2 class="text-xl font-medium text-[#08202C] mb-4">Rakentamisen Käynnistäminen</h2>


                        <div class="content-wrap">
                            <div class="excerpt" id="excerpt_content">
                                <p class="text-base text-[#475467] mb-2">
								Rakentamisen käynnistämisvaiheessa kaikki vuokralaismuutokseen liittyvät päätökset ja ratkaisut on tehty. Tärkeintä tässä vaiheessa on tilata rakennustyöt urakoitsijalta ja allekirjoittaa urakkasopimus sekä varmistaa varsinaisten rakennustöiden hallittu aloitus. On varmistettava, että urakoitsija saapuu kohteelle, aloittaa työt kohteella yhteisest...
                                </p>

                                <button class="text-accent underline decoration-accent text-base" id="showMore">Lue lisää</button>
                            </div>

                            <div class="hidden" id="full_content">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                                    <p class="text-base text-[#475467] mb-2">
										Rakentamisen käynnistämisvaiheessa kaikki vuokralaismuutokseen liittyvät päätökset ja ratkaisut on tehty. Tärkeintä tässä vaiheessa on tilata rakennustyöt urakoitsijalta ja allekirjoittaa urakkasopimus sekä varmistaa varsinaisten rakennustöiden hallittu aloitus.
                                    </p>

                                    <p class="text-base text-[#475467] mb-2">
										On varmistettava, että urakoitsija saapuu kohteelle, aloittaa työt kohteella yhteisesti sovittujen sääntöjen mukaan, kiinteistön käyttäjät huomioiden. Urakoitsijan on tehtävä vaadittavat paperityöt töiden aloitukseen liittyen. Tässä vaiheessa kustannuksia ja materiaalia alkaa sitoutumaan projektille huomattavasti enemmän kuin aiemmin projektissa.
                                    </p>
                                </div>

                                <div class="text-right">
                                    <button class="text-accent underline decoration-accent text-base" id="hideMore">Vähemmän lukemista</button>
                                </div>
                            </div >
                        </div>

                    </div>
                </div><!-- Card Header -->
                <!-- Card Body -->
                <div class="px-4 md:px-8 pt-6 pb-10 lg:h-[645px] overflow-y-auto no-scrollbar scroll-smooth">
                    <h1 class="text-lg text-dark mb-4">Urakkasopimuksen allekirjoitus</h1>

                    <p class="text-base text-[#475467] mb-4">
                        <b>Sisältö:</b><br>
                        Kootaan urakkasopimus liitteineen valmiiksi ja allekirjoitettavaksi.
                    </p>

                    <div class="mb-6 excerpt-expand">
                        <p class="text-base text-[#475467]"><b>Kuvaus:</b></p>
                        <p class="text-base text-[#475467] mb-4 content">
						Lähtökohtaisesti vuokralaismuutoksissa pitää pyrkiä siihen, että kun urakoitsijavalinta on tehty tilaajan toimesta, voidaan urakoitsijalle ilmoittaa heidän valinnastaan ja laittaa urakkasopimus heille allekirjoitettavaksi välittömästi. Näin heti urakan alussa on olemassa lopulliseen muotoon koottu kirjallinen urakkasopimus, mukaan lukien sopimuksen liitteet ja missä urakan kaikki asiat on yksiselitteisesti sovittu. Urakkasopimuksen kokoaminen tapahtuu nopeasti, jos osapuolet ovat tehneet ennakkoon pyydetyt dokumentit ja käsitelleet ne viimeistään urakkaneuvottelujen yhteydessä tai heti neuvottelujen jälkeen. Huomionarvoista on ymmärtää selvittää ajoissa, ketkä ovat oikeat henkilöt allekirjoittamaan urakkasopimus tilaajan ja urakoitsijan puolelta.
                        </p>

                        <button class="text-accent underline decoration-accent text-base showMore">Lue lisää</button>
                    </div>

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