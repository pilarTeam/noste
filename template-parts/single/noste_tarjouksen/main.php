<?php 
	$tm = $_GET['tm'];

	$project_intdata = get_post_meta( get_the_ID(), sprintf('%s_status', $tm), true );




	$tm_inner = [
		'arvioi' => [
			'title' => 'Arvioi oma ajankäyttö projektinjohdon tarjousta ja toimeksiantoa varten',
			'status' => !empty($project_intdata['status']['arvioi']) ? $project_intdata['status']['arvioi'] : 'aloittamatta',
			'url' => [
				'link'	=> '',
				'title'	=> 'OHJE Oman ajankäytön arviointi'
			],
			'comment' => !empty($project_intdata['comment']['arvioi']) ? $project_intdata['comment']['arvioi'] : 'aloittamatta',
		],
		'kustannusta' => [
			'title' => 'Tarkista, että ajankäyttö / tarjous ei ylitä kustannusarviossa arvioitua kustannusta',
			'status' => !empty($project_intdata['status']['kustannusta']) ? $project_intdata['status']['kustannusta'] : 'aloittamatta',
			'url' => '',
			'comment' => !empty($project_intdata['comment']['kustannusta']) ? $project_intdata['comment']['kustannusta'] : 'aloittamatta',
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
                        <p class="text-sm font-normal text-[#818D93] mb-1"><?php echo esc_html( noste_check_empty( $args['page_title'] ) ); ?></p>
                        <h2 class="text-xl font-medium text-[#08202C] mb-4">Rakentamisen valmistelu</h2>


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
                                        Projektin valmisteluvaiheessa tärkeintä on tukea kiinteistönomistajan vuokraamisesta vastaavaa tahoa niin, että tilasta tehtävä vuokrasopimustarjous kiinteistönomistajan (eli vuokranantajan / tilaajan) asiakkaalle, eli vuokralaisehdokkaalle olisi mahdollisimman houkutteleva. Samalla vuokrasopimustarjous pyritään laatimaan mahdollisimman kannattavaksi kiinteistönomistajalle. Vaiheelle kuvaavaa on aika-ajoin kiireelliset selvitystyöt, teknisten reunaehtojen selvitys vähillä lähtötiedoilla, sekä vuokrasopimustarjoukseen tarvittavien avustavien lähtötietojen nopea toimitus vuokrauksesta vastaavalle taholle. <br><br>Tässä vaiheessa vuokralaisehdokas usein kilpailuttaa useita kiinteistönomistajia lyhyen ajanjakson sisällä ja kiinteistöomistajan, jota noste.io auttaa, on pyrittävä antamaan vuokralaisehdokkaalle paras mahdollinen tarjous vuokralaisen tarvitsemista tiloista, niin tilatarpeiden kuin kustannusten osalta.
                                    </p>

                                    <p class="text-base text-[#475467] mb-2">
                                        Noste.ion toimittamat vuokrasopimustarjouksen lähtötiedot pyritään antamaan mahdollisimman paikkaansa pitävänä, ilman virheitä ja mahdollisimman nopeasti kiinteistönomistajalle vuokrasopimustarjouksen lähtötiedoiksi.<br><br> Tässä vaiheessa tehtävät alustavat selvitykset pyritään usein myös tekemään hyvin kustannustehokkaasti, koska vuokralaisehdokas voi päätyä valitsemaan jonkin toisen kiinteistönomistajan tilat, jäämään vanhoihin tiloihin tai tekemään jonkin muun ratkaisuun. Vuokrauksesta vastaavan tahon mieltymysten mukaan, henkilö joko toivoo paljon yhteystyötä noste.iolta tai sitten henkilö tekee hyvin omatoimisesti ja omin päin tämän vaiheen.
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
                    <h1 class="text-lg text-dark mb-4">Noste.ion tarjouksen toimitus</h1>

                    <p class="text-base text-[#475467] mb-4">
                        <b>Sisältö:</b><br>
                        Varmistetaan, että projektille on laadittu oikean suuruinen ajankäyttöarvio omaa toimeksiantoa varten. Hyväksytetään ajankäyttöarvioon perustuva projektinjohdon tarjous tilaajalla. Huom. toimeksiantoon liittyvän tarjouksen saa toimittaa asiakkaalle vain liiketoimintajohtaja tai toimitusjohtaja. <br><br>
                        <b>Kuvaus:</b><br>
                        Hyvän projektijohdon mukaisesti varmistetaan, että projektinjohtoon varattu ajankäyttö ja kustannukset ovat tilaajan kanssa sovittujen raamien puitteissa. Projektinjohdon ajankäyttöarviossa on hyvä huomioida mm. projektin laajuus, suunnittelun taso, kilpailutuksen laajuus ja kohdekohtaiset erityisyydet. Kustannusarvion laadintavaiheessa, muiden rakennuttajan kustannusten lisäksi, myös projektijohdon kustannukset on arvioitu alustavalla tasolla. Mikäli muutoksia ei ole tullut sen hetkisen tehtävänannon laajuuteen, olisi syytä pysyä annetun arvion puitteissa. Pitää muistaa, että myös projektinjohdon kustannukset vaikuttavat projektin kokonaiskustannuksiin ja sitä myöden vuokrauksen kannattavuuteen. Tarjouksen lähettämisessä on hyvä huomioida, että vain erikseen nimetyillä henkilöillä on oikeus lähettää tarjouksia noste.ion nimissä. Projektipäällikkö auttaa tarjouksen teossa omaa ajankäyttöään arvioimalla.
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