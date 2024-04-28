<?php 
	$tm = $_GET['tm'];

	$project_intdata = get_post_meta( get_the_ID(), sprintf('%s_status', $tm), true );




	$tm_inner = [
		'urakkatarjousvertailu' => [
			'title' => 'Päivitä tarvittaessa urakkatarjousvertailu',
			'status' => !empty($project_intdata['status']['urakkatarjousvertailu']) ? $project_intdata['status']['urakkatarjousvertailu'] : 'aloittamatta',
			'url' => [
				'link'	=> 'urakkatarjousvertailu',
				'title'	=> 'Urakkatarjousvertailu'
			],
			'comment' => !empty($project_intdata['comment']['urakkatarjousvertailu']) ? $project_intdata['comment']['urakkatarjousvertailu'] : 'aloittamatta',
		],
		'esitatilaajan' => [
			'title' => 'Esitä tilaajan hyväksyttäväksi valittava urakoitsija',
			'status' => !empty($project_intdata['status']['esitatilaajan']) ? $project_intdata['status']['esitatilaajan'] : 'aloittamatta',
			'url' => [
				'link'	=> '',
				'title'	=> 'OHJE Urakoitsijan hyväksyttäminen Tilaajalla'
			],
			'comment' => !empty($project_intdata['comment']['esitatilaajan']) ? $project_intdata['comment']['esitatilaajan'] : 'aloittamatta',
		],
		'edeta' => [
			'title' => 'Varmista, että tilaaja antaa kirjallisen päätöksen urakoitsijan tarjouksen hyväksymisestä ja luvan edetä projektissa toteutusvaiheeseen',
			'status' => !empty($project_intdata['status']['edeta']) ? $project_intdata['status']['edeta'] : 'aloittamatta',
			'url' => '',
			'comment' => !empty($project_intdata['comment']['edeta']) ? $project_intdata['comment']['edeta'] : 'aloittamatta',
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
                    <h1 class="text-lg text-dark mb-4">Urakan kirjallinen tilaus</h1>

                    <p class="text-base text-[#475467] mb-4">
                        <b>Sisältö:</b><br>
                        Esitellään tarvittaessa päivitetty, lopullinen urakkatarjousvertailu tilaajalle urakkaneuvottelujen jälkeen. Esitetään tilaajalle valittava urakoitsija hyväksyttäväksi. Varmistetaan, että tilaaja tekee päätöksen urakoitsijan hyväksymisestä ja projektin edistämisestä. <br><br>
                        <b>Kuvaus:</b><br>
                        Jotta voidaan edetä toteutusvaiheeseen, tulee tilaajalta saada kirjallinen hyväksyntä urakkatarjouksen hyväksymisestä, urakoitsijavalinnasta ja projektin edistämisestä.Tilaajan päätöksenteko pitää pyrkiä tekemään mahdollisimman helpoksi valmistelemalla tilaajalle hyvin perusteltu esitys etenemiseen liittyen. Valmiiksi eritelty ja urakkaneuvottelun jälkeen tarvittaessa päivitetty urakkatarjousvertailu antaa tilaajalle päätöksenteon tueksi hyvän työkalun. Lisää urakkatarjousvertailu esityksesi liitteeksi. <br>
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
<<<<<<< HEAD
																$title = !empty($value['url']['title'])?$value['url']['title']:false;
																$link = !empty($value['url']['link'])?$value['url']['link']:false;
=======
																$title = !empty($value['url']['title']) ? $value['url']['title'] :false;
																$link = !empty($value['url']['link']) ? $value['url']['link'] : false;
																
>>>>>>> main
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