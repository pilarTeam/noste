<?php 
	$tm = $_GET['tm'];

	$project_intdata = get_post_meta( get_the_ID(), sprintf('%s_status', $tm), true );




	$tm_inner = [
		'tarjouspyyntoaineisto' => [
			'title' => 'Tarkista ja kokoa tarjouspyyntöaineisto',
			'status' => !empty($project_intdata['status']['tarjouspyyntoaineisto']) ? $project_intdata['status']['tarjouspyyntoaineisto'] : 'aloittamatta',
			'url' => '',
			'comment' => !empty($project_intdata['comment']['tarjouspyyntoaineisto']) ? $project_intdata['comment']['tarjouspyyntoaineisto'] : 'aloittamatta',
		],
		'urakoitsijoille' => [
			'title' => 'Lähetä tarjouspyyntöaineisto urakoitsijoille',
			'status' => !empty($project_intdata['status']['urakoitsijoille']) ? $project_intdata['status']['urakoitsijoille'] : 'aloittamatta',
			'url' => [
				'link'	=> '',
				'title'	=> 'OHJE Tarjouspyynnön lähetys'
			],
			'comment' => !empty($project_intdata['comment']['urakoitsijoille']) ? $project_intdata['comment']['urakoitsijoille'] : 'aloittamatta',
		],
		'tutustuneet' => [
			'title' => 'Varmista, että urakoitsijat ovat tutustuneet kohteeseen',
			'status' => !empty($project_intdata['status']['tutustuneet']) ? $project_intdata['status']['tutustuneet'] : 'aloittamatta',
			'url' => [
				'link'	=> '',
				'title'	=> 'OHJE Kohdekäynti urakoitsijan kanssa'
			],
			'comment' => !empty($project_intdata['comment']['tutustuneet']) ? $project_intdata['comment']['tutustuneet'] : 'aloittamatta',
		],
		'lisakirje' => [
			'title' => 'Laadi tarvittaessa lisäkirje urakkakilpailutukseen',
			'status' => !empty($project_intdata['status']['lisakirje']) ? $project_intdata['status']['lisakirje'] : 'aloittamatta',
			'url' => [
				'link'	=> 'lisakirje',
				'title'	=> 'lisäkirje'
			],
			'comment' => !empty($project_intdata['comment']['lisakirje']) ? $project_intdata['comment']['lisakirje'] : 'aloittamatta',
		],
		'alustava' => [
			'title' => 'Laadi alustava urakkatarjousvertailu',
			'status' => !empty($project_intdata['status']['alustava']) ? $project_intdata['status']['alustava'] : 'aloittamatta',
			'url' => [
				'link'	=> 'alustava',
				'title'	=> 'Urakkatarjousvertailu'
			],
			'comment' => !empty($project_intdata['comment']['alustava']) ? $project_intdata['comment']['alustava'] : 'aloittamatta',
		],
		'vertaile' => [
			'title' => 'Vertaile urakkatarjoukset kustannusarvion kanssa',
			'status' => !empty($project_intdata['status']['vertaile']) ? $project_intdata['status']['vertaile'] : 'aloittamatta',
			'url' => '',
			'comment' => !empty($project_intdata['comment']['vertaile']) ? $project_intdata['comment']['vertaile'] : 'aloittamatta',
		],
		'tilaajalle' => [
			'title' => 'Toimita tilaajalle alustava urakkatarjousvertailu ja ehdota miten edetään',
			'status' => !empty($project_intdata['status']['tilaajalle']) ? $project_intdata['status']['tilaajalle'] : 'aloittamatta',
			'url' => '',
			'comment' => !empty($project_intdata['comment']['tilaajalle']) ? $project_intdata['comment']['tilaajalle'] : 'aloittamatta',
		],
		'huomiota' => [
			'title' => 'Selvitä asiat, mihin erityisesti tulee kiinnittää huomiota urakkaneuvotteluissa',
			'status' => !empty($project_intdata['status']['huomiota']) ? $project_intdata['status']['huomiota'] : 'aloittamatta',
			'url' => '',
			'comment' => !empty($project_intdata['comment']['huomiota']) ? $project_intdata['comment']['huomiota'] : 'aloittamatta',
		],
		'asialista' => [
			'title' => 'Valmistele ja laadi urakkaneuvottelun asialista',
			'status' => !empty($project_intdata['status']['asialista']) ? $project_intdata['status']['asialista'] : 'aloittamatta',
			'url' => [
				'link'	=> 'asialista',
				'title'	=> 'Urakkaneuvottelun asialista'
			],
			'comment' => !empty($project_intdata['comment']['asialista']) ? $project_intdata['comment']['asialista'] : 'aloittamatta',
		],
		'pida' => [
			'title' => 'Pidä urakkaneuvottelu(t)',
			'status' => !empty($project_intdata['status']['pida']) ? $project_intdata['status']['pida'] : 'aloittamatta',
			'url' => '',
			'comment' => !empty($project_intdata['comment']['pida']) ? $project_intdata['comment']['pida'] : 'aloittamatta',
		],
		'liitteineen' => [
			'title' => 'Laadi urakkaneuvottelun pöytäkirja liitteineen valmiiksi',
			'status' => !empty($project_intdata['status']['liitteineen']) ? $project_intdata['status']['liitteineen'] : 'aloittamatta',
			'url' => [
				'link'	=> 'poytakirja',
				'title'	=> 'Urakkaneuvottelun pöytäkirja'
			],
			'comment' => !empty($project_intdata['comment']['liitteineen']) ? $project_intdata['comment']['liitteineen'] : 'aloittamatta',
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
                            </div >
                        </div>

                    </div>
                </div><!-- Card Header -->
                <!-- Card Body -->
                <div class="px-4 md:px-8 pt-6 pb-10 lg:h-[645px] overflow-y-auto no-scrollbar scroll-smooth">
                    <h1 class="text-lg text-dark mb-4">Tarjouspyynnön lähetys ja urakkakilpailutus</h1>

                    <p class="text-base text-[#475467] mb-4">
                        <b>Sisältö:</b><br>
                        Lähetetään urakan tarjouspyyntöaineisto etukäteen kontaktoiduille urakoitsijoille. Viedään urakoitsijat kohteelle katselmoimaan sen ominaisuudet ja vallitsevat olosuhteet. Läpikäydään ja vertaillaan saadut urakkatarjoukset keskenään eroavaisuuksien havaitsemiseksi ja parhaimman tarjouksen löytämiseksi. Vertaillaan eritellyt urakkatarjoukset myös kustannusarvion kanssa, jotta mahdolliset puutteet tarjouksissa havaitaan. Varmistetaan, ettei urakkahinnat ylitä kustannusarviossa arvioitua rakennustyön hintaa. Pidetään urakkaneuvottelut 1-2 parhaimman tarjouksen antaneen urakoitsijan kanssan.
                    </p>

                    <div class="mb-6 excerpt-expand">
                        <p class="text-base text-[#475467]"><b>Kuvaus:</b></p>
                        <p class="text-base text-[#475467] mb-4 content">
                            Kun urakan tarjouspyyntöaineisto on valmis, aineisto vielä tarkastetaan ja kootaan lähetettäväksi etukäteen kontaktoiduille urakoitsijoille. Hyvin laaditun tarjouspyyntöaineiston avulla varmistutaan siitä, että urakoitsijoilta saadaan paras mahdollinen urakkatarjous tehtävälle työlle. Tarjouspyynnön lähetysvaiheessa on tärkeää varmistua myös siitä, että kaikki tarjoukseen ja tarjoushintaan olennaisesti vaikuttavat asiat on huomioitu aineistossa oikein. 
							<br>
							<br>
							Selkeä ja urakan kokoon sopivasti suhteutettu tarjouspyyntöaineisto mahdollistaa realistisen suuruiset urakkatarjouksen laskennan. Urakoitsijan tarjouslaskijan ei tarvitse arvailla asioita tarjoukseen tai lisätä riskivaroja, jos tarjouspyyntöaineisto on selkeä. Mitä vähemmän on epäselviä asioita urakan tekemiseen liittyen, sitä vähemmän epävarmuuksia kompensoidaan tarjoushintaa nostamalla. Hyvä tarjouspyyntöaineisto myös takaa urakoitsijoiden mielenkiinnon säilymisen ja mahdollisimman monen tarjouksen saamisen. Urakoitsijat voivat saada useita tarjouspyyntöjä viikossa ja he valitsevat itselleen parhaimmat tarjottavat kohteet monen tarjouspyynnön seasta. Urakkalaskenta-ajan kesto vaikuttaa myös paljon siihen, kuinka hyvät urakkatarjoukset saadaan. Jos urakoitsija ei ehdi perehtymään aineistoon liian lyhyen laskenta-ajan takia, se antaa yläkanttiin hinnoitellun tarjouksen, joka on varman päälle laskettu niin, ettei urakoitsija varmasti joudu urakasta tappiolle. Jos urakkalaskenta-aika on liian pitkä, tarjouslaskenta voi ikään kuin unohtua urakoitsijalta tai sitten voi tulla mielenkiintoisempia tarjouspyyntöjä vastaan myöhemmin. Hyvä laskenta-aika on noin kaksi viikkoa 
							<br>
							<br>
							Usein kohdekäynnillä ratkeaa tai selkeytyy moni urakoitsijalle epäselvä asia. Kohdekäynnillä sinä saat myös selville monta asiaa urakoitsijasta. Onko urakoitsija tutustunut ennen kohdekäyntiä jo tarjouspyyntöaineistoon, onko urakoitsija valmistautunut kohdekäyntiin tarkentavilla kysymyksillä esimerkiksi suunnitelmien sisältöön liittyen, dokumentoiko urakoitsija tilaa valokuvien ottamisella jälkiselvityksiä varten, onko urakoitsijan mukana yhteistyökumppaneita kuten aliurakoitsijat, selvittääkö urakoitsija tuotantoon liittyviä asioita kohdekierroksella (esimerkiksi mistä voidaan haalata muutosalueelle tavaraa). Jos vastaus edellä mainittuihin asioihin on kyllä, voit odottaa ko. urakoitsijalta harkiten laskettua urakkatarjousta. Jos vastaus em. asioihin on ei, tai urakoitsija ei edes saavu kohdekäynnille, urakoitsija ei välttämättä tarjoa kohdetta tai sitten urakkatarjous ei ole välttämättä hyvin laadittu. Kohdekäynnillä voi tulla esiin myös asioita, joita et ole huomioinut aikaisemmin ollenkaan omalla kohdekierroksella ja tämä voi johtaa urakkalaskenta-aineiston lisäkirjeen tekemiseen. Lisäkirjeellä täydennetään tarjouspyyntöaineistoa jälkikäteen. Lisäkirje toimitetaan kaikille urakoitsijoille. Kohdekäynnillä tapaat urakoitsijat kasvotusten ja voit arvioida urakoitsijan yhteistyökyvykkyyttä. Jos urakkatarjouksissa on vain pieniä eroja, kannattaa valita urakoitsija, joka vaikuttaa enemmän yhteistyökykyiseltä, jos tämän osalta on selkeä ero kilpailijoiden kesken. 
							<br>
							<br>
							Urakkatarjousvertailun tekemisen tarkoituksena on koota kaikki saadut urakkatarjoukset yhteen dokumenttiin havainnollisesti. Urakkatarjousvertailu auttaa havaitsemaan urakkatarjousten eroavaisuudet niin hinnoittelun osalta, kuin myös muun tarjoussisällön osalta. Vertailu on tärkeä tehdä, jotta erotetaan kenellä urakoitsijalla on paras tarjous ja kenen / keiden kanssa urakkaneuvottelu kannattaa järjestää. Yleisesti urakkaneuvottelua ei kannata pitää kaikkien tarjonneiden kanssa. Urakkatarjoukset vertaillaan kustannusarvion kanssa, jotta mahdolliset puutteet tarjouksissa havaitaan. ja varmistetaan, ettei urakkahinnat ylitä kustannusarviossa arvioitua rakennustyön hintaa. Tässä vaiheessa tilaaja pidetään ajantasalla saatujen urakkatarjousten hintatasosta ja siitä, miten saadut urakkatarjoukset vertautuvat kustannusarvioon. Lisäksi tilaajalle esitetään näkemys jatkotoimista. Tarjousvertailusta myös tilaaja näkee yhdellä silmäyksellä urakkakilpailutuksen tuloksen. 
							<br>
							<br>
							Jotta varmistutaan siitä, että urakkatarjous pitää sisällään kaiken tarpeellisen urakkaan liittyen ja urakoitsijalla ja tilaajalla on yhteinen käsitys urakan sisällöstä, pidetään urakkaneuvottelut 1-2 parhaimman tarjouksen antaneen urakoitsijan kanssan. Urakkaneuvotteluissa tarkennetaan epäselvät asiat ja täydennetään mahdolliset puutteelliset asiat. Urakkaneuvotteluissa tutustutaan urakoitsijaan ja saadaan käsitys heidän yhteistyökyvystä ja projektihenkilöistä. Urakoitsijan on tuotava esiin viimeistään urakkaneuvotteluissa kaikki poikkeukset mitä heidän tarjouksensa sisältää urakkalaskenta-aineiston teknisiin tai kaupallisiin ehtoihin verrattuna. Urakkaneuvottelusta pidetään pöytäkirjaa ja pöytäkirja liitetään urakkasopimukseen liitteeksi. Urakkaneuvottelupöytäkirja on pätevyysjärjestyksessä sopimuksen liitteistä korkeimmalla. Hyvä urakkaneuvottelupöytäkirja pelastaa monelta riitatilanteelta urakan aikana, esimerkiksi lisätöiden suhteen.
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