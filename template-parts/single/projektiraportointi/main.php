<?php 
	$tm = $_GET['tm'];

	$project_intdata = get_post_meta( get_the_ID(), sprintf('%s_status', $tm), true );




	$tm_inner = [
		'kustannusseuranta' => [
			'title' => 'Aloita projektin kustannusseuranta',
			'status' => !empty($project_intdata['status']['kustannusseuranta']) ? $project_intdata['status']['kustannusseuranta'] : 'aloittamatta',
			'url' => [
				'link'	=> '',
				'title'	=> 'Kustannusseurantakuvake löytyy projektin ylävalikosta'
			],
			'comment' => !empty($project_intdata['comment']['kustannusseuranta']) ? $project_intdata['comment']['kustannusseuranta'] : 'aloittamatta',
		],
		'projektiraportti' => [
			'title' => 'Laadi projektin ensimmäinen projektiraportti',
			'status' => !empty($project_intdata['status']['projektiraportti']) ? $project_intdata['status']['projektiraportti'] : 'aloittamatta',
			'url' => '',
			'comment' => !empty($project_intdata['comment']['projektiraportti']) ? $project_intdata['comment']['projektiraportti'] : 'aloittamatta',
		],
		'ajankaytto' => [
			'title' => 'Käy tarjouksen laatijan/toimittajan kanssa läpi projektille ajateltu ajankäyttö',
			'status' => !empty($project_intdata['status']['ajankaytto']) ? $project_intdata['status']['ajankaytto'] : 'aloittamatta',
			'url' => '',
			'comment' => !empty($project_intdata['comment']['ajankaytto']) ? $project_intdata['comment']['ajankaytto'] : 'aloittamatta',
		],
		'kirjallisesti' => [
			'title' => 'Varmista, että tilaaja hyväksyy tarjouksen kirjallisesti',
			'status' => !empty($project_intdata['status']['kirjallisesti']) ? $project_intdata['status']['kirjallisesti'] : 'aloittamatta',
			'url' => '',
			'comment' => !empty($project_intdata['comment']['kirjallisesti']) ? $project_intdata['comment']['kirjallisesti'] : 'aloittamatta',
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
                    <h1 class="text-lg text-dark mb-4">Projektiraportointi ja kustannusseuranta</h1>

                    <p class="text-base text-[#475467] mb-4">
                        <b>Sisältö:</b><br>
                        Aloitetaan projektin projektiraportointi ja kustannusseuranta. <br><br>
                        <b>Kuvaus:</b><br>
                        Tilaajat ovat tottuneet saamaan noste.iolta aina laadukasta projektinjohtopalvelua vuokralaismuutoksiin liittyen. Yksi laadukkaan toiminnan tae on noste.ion toimintajärjestelmän mukainen projektinjohtotapa. Toimintajärjestelmän mukaisesti projektille tehdään projektiraportti kuukausittain. Sisäinen projektiraportointi on tärkeää, jotta projektipäällikkö pysähtyy pienenkin projektin kohdalla tarkastelemaan projektia kokonaisuutena. Projektiraportin avulla tarkastellaan mm. budjettia, aikataulua, sopimustilannetta ja dokumentointia. Projektiraportti auttaa laadunvarmistuksessa ja mahdollistaa sparri-tuokiot sekä muiden tarpeiden havaitsemisen yhdessä kokeneemma kollegan kanssa. Lisäksi projektiraportti toimii helppona ja yhdenmukaisena tapana viestiä projektin tilanteesta tilaajan suuntaan, jos näin sovitaan tilaajan kanssa. <br><br>
						Tässä vaiheessa kun vuokralaismuutos toden teolla alkaa, alkaa myös projektin kustannusseuranta. Onhan hankkeelle jos sidottu sen ensimmäinen kustannus, kun projektinjohdon tarjous on hyväksytetty tilaajalla. Kustannusseurannan avulla hallitaan eri toimittajien sidottuja kustannuksia ja laskutusta, sekä ennustetaan hankkeen kokonaiskustannuksia suhteessa budjettiin. Kustannusseurannasta keskeiset tiedot siirtyvät projektiraporttiin.
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
																$title = !empty($value['url']['title'])?$value['url']['title']:false;
																$link = !empty($value['url']['link'])?$value['url']['link']:false;
																if (!empty($link)) :
																	$tmin_url = add_query_arg([
																		'tm' => $tm,
																		'tmin' => $value['url']['link']
																	], get_permalink( get_the_ID() ) );
																	?>
	                                                        		<a href="<?php echo esc_attr( $tmin_url ); ?>" class="text-accent underline decoration-accent text-sm"><?php echo esc_html($title); ?></a>
																	<?php
																else:
																	?>
	                                                        		<p class="text-sm text-[#818D93]"><?php echo esc_html($title); ?></p>
																<?php endif; ?>		
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