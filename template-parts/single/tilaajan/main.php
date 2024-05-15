<?php 
	$tm = $_GET['tm'];

	$project_intdata = !empty(get_post_meta( get_the_ID(), sprintf('%s_status', $tm), true )) ? json_decode( get_post_meta( get_the_ID(), sprintf('%s_status', $tm), true ), true ) : [];

	$tm_inner = [
		'valmistele' => [
			'title' => 'Valmistele ja laadi lähtötietopalaverin asialista',
			'status' => !empty($project_intdata['valmistele']['status']) ? $project_intdata['valmistele']['status'] : 0,
			'url' => [
				'link' => 'valmistele',
				'title' => 'Lähtötietopalaverin asialista',
			],
			'comment' => !empty($project_intdata['valmistele']['comment']) ? $project_intdata['valmistele']['comment'] : 0,
		],
		'pida' => [
			'title' => 'Valmistele ja laadi lähtötietopalaverin asialista',
			'status' => !empty($project_intdata['pida']['status']) ? $project_intdata['pida']['status'] : 0,
			'url' => '',
			'comment' => !empty($project_intdata['pida']['comment']) ? $project_intdata['pida']['comment'] : 'aloittamatta',
		],		
		'laadi' => [
			'title' => 'Valmistele ja laadi lähtötietopalaverin asialista',
			'status' => !empty($project_intdata['laadi']['status']) ? $project_intdata['laadi']['status'] : 0,
			'url' => [
				'link' => 'laadi',
				'title' => 'Lähtötietopalaverin asialista',
			],
			'comment' => !empty($project_intdata['laadi']['comment']) ? $project_intdata['laadi']['comment'] : 'aloittamatta',
		],
		'sovi' => [
			'title' => 'Valmistele ja laadi lähtötietopalaverin asialista',
			'status' => !empty($project_intdata['sovi']['status']) ? $project_intdata['sovi']['status'] : 0,
			'url' => '',
			'comment' => !empty($project_intdata['sovi']['comment']) ? $project_intdata['sovi']['comment'] : 'aloittamatta',
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
                        <p class="text-sm font-normal text-[#818D93] mb-1"><?php echo esc_html( noste_check_empty( $args['page_title'] ) ); ?></p>
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
                    <h1 class="text-lg text-dark mb-4">Tilaajan yhteydenotto</h1>

                    <p class="text-base text-[#475467] mb-4">
                        <b>Sisältö:</b><br>
                        Käydään läpi tilaajan kanssa sähköpostitse / Teamsilla / puhelimitse vuokralaismuutoksen lähtötiedot ja lähtötietotarpeet sekä sovitaan projektipäällikön tehtävät. Lisäksi dokumentoidaan läpikäydyt asiat. <br><br><br>
                        <b>Kuvaus:</b><br>
                        Eri tilaajilla on erilaisia tarpeita vuokralaismuutosten osalta. On tärkeää käydä heti alussa läpi yhdessä tilaajan kanssa projektin lähtötiedot ja tehtävät, jotta tarpeista ja tavoitteista ollaan samaa mieltä. Tilaaja- tai tapauskohtaisesti vuokralaismuutoksia tehdään joko kevyesti suunnittelun-rakentamisen-projektinjohdon osalta tai sitten raskaammin. Se kuinka paljon vuokralaismuutokseen panostetaan, vaikuttaa paljon projektissa käytettävään aikaan ja kustannuksiin. Noste.ion toimeksiannon osalta on tärkeää ymmärtää, toivooko tilaaja kevyempää projektinjohtoa pienellä kustannuksella, vai onko tilaajan tarvitsemat prosessit raskaammat, mikä johtaa suurempaan ajankäyttöön ja kustannuksiin. <br><br><br>
                        Lähtötietopalaverin asialista antaa hyvän raamin asioiden läpikäynnille tilaajan kanssa sekä antaa ammattimaisen ja valmiin kuvan asioiden hoitamisesta. Tämä vaihe on tärkeä erityisesti, jos asiakas on sinulle uusi. Pääset asialistan avulla helpommin tutuksi kohteen kanssa. Jos kohde on sinulle entuudestaan tuttu, voit karsia selvitettäviä asioita jotka jo tiedät, kuten esimerkiksi yhteystiedot. <br><br>
                        Huom. vaikka projektin valmisteluvaiheessa on vasta tarkoituksena auttaa tilaajaa pääsemään vuokrasopimukseen vuokralaisen kanssa, on projektipäällikölle tärkeää pyrkiä ymmärtämään koko projektin luonne mahdollisimman hyvin, jotta vuokrasopimukseen liittyvät lähtötiedot saadaan mahdollisimman paikkansapitäviksi. Tavanomaiset lähtötiedot tässä vaiheessa ovat esimerkiksi tilasuunnittelijan tekemä alustava pohjapiirustus, karkea näkemys aikataulusta, yksittäisiä tietoja siitä millaisia muutoksia halutaan olemassa olevaan tilaan. Tässä vaiheessa pitää pyrkiä kaivamaan mahdollisimman paljon lisää tietoa sellaisista asioista, joilla on merkittävä vaikutus vuokralaismuutokselle.
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
	                                                        <div class="instep-status relative inline-flex items-center rounded-md border border-line px-2 py-1 <?php echo esc_attr( 'status_' . strtolower( $value['status'] ) ); ?>">
	                                                        	<span></span>
	                                                            <?php echo esc_html( $status[$value['status']] ); ?>
	                                                        </div>
	                                                    </td>
	                                                    <td class="px-4 py-3 border border-line">
	                                                    	<?php if ( !empty($value['url']) ): 
										                        $tmin_url = add_query_arg([
										                            'tm' => $tm,
										                            'tmin' => $value['url']['link']
										                        ], get_permalink( get_the_ID() ) ); 
	                                                    	?>
	                                                        	<a href="<?php echo esc_attr( $tmin_url ); ?>" class="text-accent underline decoration-accent text-sm"><?php echo esc_html( $value['url']['title'] ); ?></a>     		
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