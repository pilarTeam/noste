<?php 

if ( !is_singular( 'projektitiedot' ) ) {
   return;
}

$project_id = get_the_ID();
$ptname = implode('_', ['noste', $_GET['tm'], $_GET['tmin']]);

$data = !empty( get_post_meta( $project_id, $ptname, true ) ) ? json_decode( get_post_meta( $project_id, $ptname, true ), true ) : '';


?>

<section class="py-10">
    <!-- grid View Item -->
    <div class="grid grid-cols-1 gap-4">
        <div class="container">

            <!-- card_item -->
            <div class="card_item relative h-fit">
                <!-- Card Header --><?php echo wp_kses_post(noste_form_header('form')); ?><!-- Card Header -->
                <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" class="ajax-submit">
                    <?php wp_nonce_field('project_step_form_validation', 'project_step_form__nonce_field'); ?>
                    <input type="hidden" name="ptname" value="<?php echo esc_attr(implode('_', ['noste', $_GET['tm'], $_GET['tmin']])); ?>">
                    <input type="hidden" name="action" value="noste_update_project_step">
                    <input type="hidden" name="post_id" value="<?php echo esc_attr( $project_id ); ?>">

                    <!-- Card Body -->
                    <div class="px-4 md:px-8 pt-6 pb-10 lg:h-[645px] overflow-y-auto no-scrollbar scroll-smooth">
                        <div class="">
                            <div class="mx-auto max-w-[700px] mb-4">
                                <p class="text-sm text-accent italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K1', true ), 'K1') ); ?></p>
                                <p class="text-sm text-accent italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K4', true ), 'K4') ); ?></p>
                            </div>
                            
                            <h4 class="mb-8 text-[#081F2C] mx-auto max-w-[700px]">RAKENNUSTAPASELOSTUS</h4>
            
                                <div class="mb-8 mx-auto max-w-[700px]">
                                    <div class="flex flex-wrap mb-4">
                                        <label class="flex-[3] md:flex-[.7] lg:flex-[.67] mr-4 text-sm font-medium text-black" for="version">Versio:</label>
                                        <input class="shadow-input md:ml-5 text-sm border-accent rounded-md text-[#686d70]" type="text" id="version" name="present" placeholder="xx.xx.xxxx">
                                    </div>
            
                                    <div class="flex flex-wrap mb-2">
                                        <label class="flex-[3] mr-4 text-sm font-medium text-black" for="um_project-manager">Tilaaja:</label>
                                        <p class="flex-[3] text-sm text-accent italic" id="um_project-manager"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_T1', true ), 'T1') ); ?></p>
                                    </div>
                                    
                                    <div class="flex flex-wrap mb-4">
                                        <label class="flex-[3] mr-4 text-sm font-medium text-black" for="author">Laatija:</label>
                                        <p class="flex-[3] text-sm text-accent italic" id="author"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_P1', true ), 'P1') ); ?>, <span class="text-[#586B74]">Partners at Noste Oy</span></p>
                                    </div>
                                    
                                    <div class="flex flex-wrap mb-4">
                                        <label class="flex-[3] mr-4 text-sm font-medium text-black" for="target">Kohde:</label>
                                        <p class="flex-[3] text-sm text-accent italic" id="target"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K4', true ), 'K4') ); ?></p>
                                    </div>
            
                                    <div class="flex flex-wrap mb-4">
                                        <label class="flex-[3] mr-4 text-sm font-medium text-black" for="target"></label>
                                        <p class="flex-[3] text-sm text-accent italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K1', true ), 'K1') ); ?></p>
                                    </div>
                                    
                                    <div class="flex flex-wrap mb-4">
                                        <label class="flex-[3] mr-4 text-sm font-medium text-black" for="target"></label>
                                        <p class="flex-[3] text-sm text-accent italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K2', true ), 'K2') ); ?></p>
                                    </div>
            
                                    <div class="flex flex-wrap mb-4">
                                        <label class="flex-[3] mr-4 text-sm font-medium text-black" for="target"></label>
                                        <p class="flex-[3] text-sm text-accent italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K3', true ), 'K3') ); ?></p>
                                    </div>
                                </div>
            
                                <h4 class="mb-8 text-[#081F2C] mx-auto max-w-[700px]">YLEISTÄ</h4>
            
                                <div class="help_wrap my-10 relative">
                                    <div class="max-w-[700px] mx-auto">
                                        <div class="flex flex-col lg:flex-row lg:items-center gap-2">
                                            <input type="text" name="pilar_filed8_1" class="shadow-input inline-block max-w-full w-full border border-solid border-[#06F9B7] rounded-[5px] p-2" value="Kuvaus muutosten laajuudesta yleisellä tasolla...">
                                            <a href="#!" class="help_click">
                                                <svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g stroke-width="0"></g>
                                                    <g stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g>
                                                        <circle cx="12" cy="12" r="10" stroke="#000000" stroke-width="0.72"></circle>
                                                        <path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#000000" stroke-width="0.72" stroke-linecap="round"></path>
                                                        <circle cx="12" cy="16" r="1" fill="#000000"></circle>
                                                    </g>
                                                </svg> </a>
                                    
                                            <hr class="help_line hidden w-full lg:w-[0px] border border-solid border-[#E1E1EA]">
                                        </div>
                                    </div>
                                
                                    <div class="help_show hidden text-[#586B74] text-[14px] lg:w-[240px] 2xl:w-[384px] bg-[#F6F8FF] border border-solid border-[#E1E1EA] rounded-lg p-5 lg:absolute lg:right-[10px] mt-[10px] mb-[15px] lg:mb[0] lg:mt-[-50px]">
                                        Esittelykappaleeseen avataan tehtävien töiden luonnetta, eli ollaanko tekemässä kuinka mittavia muutoksia. Esim: -Vasta valmistuvan toimistotalon muokkaukset uudelle toimijalle. - Olevan toimistorakennuksen muokkaaminen kokonaisvaltaisesti uuden toimijan käyttöön - Olevan tilan toimintojen parantaminen olevalle toimijalle - Olevan tilan laajentaminen olevalle toimijalle jne. Näin seuraavista kappaleista lukija saa enemmän irti ja paremman käsityksen, siitä mitä ollaan tekemässä. Pyri välttämän sanamuotoja, jotka saavat tilan näyttämään huonolta Viittaa lopuksi suunnitelmiin, jos niitä o, ristiriitaisuuksien välttämiseksi.
                                    </div>
                                </div>
            
                                <div class="max-w-[700px] mx-auto flex items-center gap-2">
                                    <ul class="list-none w-full">
                                        <li class="mb-10">
                                            <label class="flex items-center text-md md:text-lg mb-5" for="agreed_prepare_documents9">
                                                <span class="font-bold mr-5">1.</span>
                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="agreed_prepare_documents[1]" id="agreed_prepare_documents9">
                                                SUUNNITTELU
                                            </label>
                                            <textarea class="shadow-input inline-block max-w-full w-full border border-solid border-[#06F9B7] rounded-[5px] p-4" id="suunnittelu" name="suunnittelu" rows="2">Vuokranantaja vastaa tilan suunnittelusta vuokrasopimuksen mukaiseen tasoon Vuokralamen vastaa sisustussuunnittelusta (ml. tila- ja irtokalustesuunnittelu) sekä omien järjestelmien suunnittelusta</textarea>
                                        </li>
                                        
                                        <li class="mb-10">
                                            <label class="flex items-center text-md md:text-lg mb-5" for="agreed_prepare_documents2">
                                                <span class="font-bold mr-5">2.</span>
                                                <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="agreed_prepare_documents[2]" id="agreed_prepare_documents2">
                                                TILAJAKO-OSAT
                                            </label>
                                            <textarea class="shadow-input inline-block max-w-full w-full border border-solid border-[#06F9B7] rounded-[5px] p-4" id="tilajako-osat" name="tilajako-osat" rows="22">Vuokratilan hissiaulaan ei tule muutoksia.
                                            
Vuokratiloihin rakennetaan uudet tai muokataan vanhoista rakenteista pohjapiirustuksen mukaiset huoneet ja tilat. Vanhat väliseinät ja lasiseinät puretaan pohjapiirustuksen mukaisesti. Purettujen seinien otsat päätetään alakattopinnan tasoon ja viimeistellään peltiprofililla. Tilaan jäävät entiset väliseinät pysyvät siinä kunnossa kuin ne ovat. Toimistohuoneiden ja käytävän väliselle seinälle sekä neuvotteluhuoneiden ja käytävien väliselle seinälle rakennetaan uudet lasiseinät. Uuslin lasiseiniin asennetaan sähköpielet. Uudet lasiseinät varustetaan huomioteippauksella (20mm korkea huurreviiva) n. 1000mm korkeudella. Huoneiden väliseinät ovat kipsilevyseinia. Neuvotteluhuoneessa vahvistetaan näytön kiinnitystä varten yksi seinä huoneen sisäpuolelta Habito-levyllä Väliseinien ja lasiseinien äänitasoeroluku tavoitearvo sisäilmaluokituksen 2018, S2 tason mukaan (Toimistohuone Äänitasoeroluku työhuoneiden välillä DnT,w 40 dB, Aanitasoeroluku käytävälle DnT,w : 25 dB, Avotilatoimisto: Äänitasoeroluku työhuoneeseen DnT,w 25 dB. Neuvotteluhuone: Äänitasperoluku naapurihuoneeseen DrniT,w > 44 dB, Äänitasoeroluku käytävälle DnTw 30 dB). Toimistorakennuksessa kahden eri toimijen välillä rakennettavan seinän äänitasoeroluku Ympäristöministeriön ohje rakennuksen ääniympäristöstä 2018 mukaan z 52 dB (DnTw) ΤΑΙ 
                                    
Tilat rakennetaan hyödyntämällä olemassa olevta lasiseiniä, väliseiniä ja väliseinärakentalta, Mahdolliset uudet väliseinärakenteet ja seinien aukotusten ummistukset rakennetaan vastaamaan olemassa olevia väliseiniä (lasiseinä kipsilevyseinä, elementtiseina).
                                    
Vuokratilaan asennetaan uudet maalatut laakaovet pohjapirustuksen mukaisiin paikkoihin. Lasiseinäjärjestelmäaan</textarea>
                                        </li>
                                        
                                        <li class="mb-10">
                                        <label class="flex items-center text-md md:text-lg mb-5" for="agreed_prepare_documents3">
                                            <span class="font-bold mr-5">3.</span>
                                            <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="agreed_prepare_documents[3]" id="agreed_prepare_documents3">
                                            TILAPINNAT
                                        </label>
                                        <textarea class="shadow-input inline-block max-w-full w-full border border-solid border-[#06F9B7] rounded-[5px] p-4" id="tilapinnat" name="tilapinnat" rows="20">Vuokratilassa on osittain alakattoa (kipsilevykatto tai akustiikkalevypalakatto) ja osittain katto on holviin asti auki. Alakattoja muokataan vain tilamuutosten vaatimassa laajuudessa. Muokkaukset toteutetaan saman tyylisesti kuin olemassa oleva katto. Katto on hoiviin asti auki pääsääntöisesti ikkunaseinällä, ulkoseinälinjalla. Holviin läsätään tarvittaessa akustiikkalevyjä työpistealueiden kohdalle vieressä olevia alueita vastaava määrä. Alakattoalueilla katossa oleva tekniikka on piilossa ja holviin asti auki olevissa osissa katossa oleva tekniikka on näkyvillä. Katto maalataan vain uusien kipsilevykattojen osalta. Katto on väriltään vaalea/valkoinen
                                            
Vanha tekstiilipalamatto poistetaan. Toimistotiloihin (avotila, neuvotteluhuoneet ja työhuoneet) asennetaan uusi tekstiilpalamatto. Yleisiin tiloihin asennetaan uusi vinyylilattia. Vuokralainen voi valita vuokranantajan esittämistä lattiamateriaalivaihtoehdoista käytettävän tuotteen. Tuotteet valitaan niin, että ne sopivat känteistön yleiseen ilmeeseen ja tuote on neutraali imeeltään. Ehdotettavat tuotteet voivat vaihdella saatavuuden ja toimitusaikojen mukaan. Jalkalista uusitaan, jalkalistan väri on toimittajan vakiosävy. Uudet kipsilevyseinät saumatasoitetaan ja maalataan. Värisävyt vaaleat, olemassa olevien seinien mukaan, seinäpinnat yksivärisiä
                                        
Vuokratilaan asennetaan uudet maalatut laakaovet pohjapirustuksen mukaisiin paikkoihin. Lasiseinäjärjestelmäaan
                                            </textarea>
                                        </li>
                                        
                                        <li class="mb-10">
                                        <label class="flex items-center text-md md:text-lg mb-5" for="agreed_prepare_documents4">
                                            <span class="font-bold mr-5">4.</span>
                                            <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="agreed_prepare_documents[4]" id="agreed_prepare_documents4">
                                            KALUSTEET JA VARUSTEET
                                        </label>
                                        <textarea class="shadow-input inline-block max-w-full w-full border border-solid border-[#06F9B7] rounded-[5px] p-4" id="kalusteet-ja-varusteet" name="kalusteet-ja-varusteet" rows="20">Vuokratilassa on olemassa oleva taukskeittiö, el muutoksia
                                                
ΤΑΙ
                                        
Vuokratilaan rakennetaan uusi taukokeittiö
                                        
Kalusteiden runkorakenne ja ovet melamiinia. Ovet laakarvia lankavetimellä. Kolme yläkaappia (kaappi, kuivauskaappi sekä tilavaraus mikroaaltouunille + pistorasia). Alhaalla vetolaatikostot, astianpesukone (ei integroitu) sekä allaskaappi jätevaunulla ja jätteen lajittelulle korit. Astianpesukoneen alle asennetaan vesikaukalo. Laminaattitaso ja rst-allas 340-400 mm. Keittiöallashana (oras) Tason viereen asennettava korkea jääkaappi (el pakastelokeroa, ei integroitu). Välitilavalaisin (LED) sekä kaksi sähköpistorasiaa. Kalusteväli roiskesuojalevy (valkoinen) tai laatoitettu (150x150 mm laatta, valkoinen, saumaus valkoisella sauma-aineella). Jääkaapin viereen korkea siivouskomero (sis. kiinteä hylly, 2 tarvikekoria, oskarin oksa, kaarikoukku imuriletkulle, 2 kpl ripustuskoukku). Vuokralainen voi valita kalusteen värin vuokranantajan esittämistä vaihtoehdoista. Väri on kiinteistön yleiseen ilmeeseen sopiva ja neutraali ilmeeltään.
                                        
Vuokratilan WC-tiloihin ei tule muutoksia. Tilamuutoksen yhteydessä varmistetaan, että WC-kalusteet ovat ehjiä Tilan ikkunoiden sälekaihtirnet tarkastetaan ja tarvittaessa korjataan muutostöiden yhteydessä
                                            </textarea>
                                        </li>
                                        
                                        <li class="mb-10">
                                        <label class="flex items-center text-md md:text-lg mb-5" for="agreed_prepare_documents5">
                                            <span class="font-bold mr-5">5.</span>
                                            <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="agreed_prepare_documents[5]" id="agreed_prepare_documents5">
                                            LVIA-JÄRJESTELMÄT
                                        </label>
                                        <textarea class="shadow-input inline-block max-w-full w-full border border-solid border-[#06F9B7] rounded-[5px] p-4" id="lvia-järjestelmät" name="lvia-järjestelmät" rows="25">Vuokratilaa palvelee kiinteistön olemassa olevat vesi, viemäri, lämmitys, jäähdytys- ja ilmanvaihtojärjestelmät, jotka pysyvät ennallaan. Vuokratilassa on kiinteistön sprinkleri-sammutusjärjestelmä
                                                
Tilamuutoksen yhteydessä huomioidaan seuraavat muutokset olemassa oleviin järjestelmiin
                                        
Ilmanvaihtokanavistoon tehdään tilamuutosten vaatimat muutokset. Vaadittavat muutokset määrittää vuokranantaja. Mahdolliset uudet ilmanvaihdon päätelaitteet toteutetaan ko tilan kattoon sopivaksi ja olemassa olevien päätelaitteiden ilmeen mukaisiksi. Ilmanvaihtojärjestelmä mitataan ja säädetään sekä tarvittaessa kanavat nuohotaan vuokratilan alueella. Tilojen ilmamäärät säädetään sisäilmastoluokitus 2018, RT 07-11299 mukaan, 82 sisälimastoluokka (hyvä ilmanlaatu).
                                        
Jäähdytykseen ei tule muutoksia pois lukien seuraava lisäys. Uuteen rakennettavaan neuvotteluhuoneeseen lisätään jäähdytystä. Jäähdytys toteutetaan kattoon asennettavalla jäähdytyspalkilla tai jäähdytyskonvektorilla jäähdytystarpeen mukaan.
                                        
Vesi- ja viemänjärjestelmiin ei tehdä muutoksia pois lukien seuraavaa lisäystä. Keittiökalusteeseen lisätään uudelle kahvikoneelle kylmävesipiste ja viemäripiste.
                                        
Sprinkleri-järjestelmään tehdään tilamuutoksesta syntyvät välttämättömät muutokset niin, että viranomaismääräykset täyttyvät.
                                            </textarea>
                                        </li>
                                        
                                        <li class="mb-10">
                                        <label class="flex items-center text-md md:text-lg mb-5" for="agreed_prepare_documents6">
                                            <span class="font-bold mr-5">6.</span>
                                            <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="agreed_prepare_documents[6]" id="agreed_prepare_documents6">
                                            SÄHKÖ- JA YLEISKAAPELOINTIJÄRJESTELMÄT
                                        </label>
                                        <textarea class="shadow-input inline-block max-w-full w-full border border-solid border-[#06F9B7] rounded-[5px] p-4" id="sähkö-ja" name="sähkö-ja" rows="45">Vuokratilaa palvelee kiinteistön olemassa olevat sähkö- ja yleiskaapelointijärjestelmät, jotka pysyvät ennallaan Vuokratilassa on olemassa oleva ryhmäkeskus, joka palvelee vain tätä vuokratilaa. Sähkön mittaus toteutetaan kiinteistöautomaation kautta/sähköyhtiön mittauksella/tilakohtaista sähkönmittausta ei suoriteta, vaan mittaus perustuu neliömetripohjaiseen anvioon. Vuokralaisella on mahdollisuus/ei ole mahdollisuutta tehda oma sähkösopimus vuokratilaan.
        
Sähkönjakelu on toteutettu ulkoseinälinjoilla johtokanavilla ja keskialueilla katossa olevalla yläjakeluna kaapelihyllyjen avulla. Vuokralainen jatkaa tarvittaessa sähkönjakelua työpisteelle esim. pistorasiapylväällä tai jatkojohdolla
                                        
Vuokratilassa on olemassa oleva huoneistojakamo, joka palvelee vain tätä vuokratilaa. Huoneistojakamoon tuodaan talojakamosta x kpl CATSa kaapelia ja x kpl 8SM valokuitu. Kiinteistö on liitetty Elisan ja Tellan valokuituverkkoihin. Yleiskaapelointi on toteutettu ulkoseinälinjoilla johtokanavilla ja keskialueilla katossa olevalla yläjakeluna kaapelihyllyjen avulla Vuokralainen jatkaa tarvittaessa yleiskaapelointia työpisteelle esim. pistorasiapylväällä tai patch-kaapelilla.
                                        
Vuokratilassa on olemassa oleva valaistus ja olemassa oleva valaistuksenohjaus Yleisvalaistuksen ohjaus on/off kytkimin, ohjaus pääsääntöisesti tilaan tultaessa seinässä olevalla painikkeella tai suoraan kiinni valaisimessa
                                        
olevalla vetonarulla.
                                        
ΤΑΙ
                                        
Vuokratilaan asennetaan uusi yleisvalaistus (LED). Yleisvalaistuksen perusvalotaso on noin 300lx. Alakaton alueilla yleisvalaistus upotetuin led-valoin. Alueilla, joilla ei ole alakattoa, yleisvalaistus toteutetaan ripustetuin led- valaisimin. Neuvotteluhuoneissa säädettävä valaistustaso (rasiasäädin ja on/off). Neuvotteluhuoneiden säädin sijoitetaan lasiseinän sähköpieleen. Muuten vuokratilaan asennetaan valaisimet, joissa on valaisinkohtainen päivänvalo/läsnäolotunniste. Ei muuta valaistusohjausta

Tilamuutoksen yhteydessä huomioidaan seuraavat asiat olemassa oleviin sähkö- ja yleiskaapelointijärjestelmiin

Sähkön ja yleiskaapeloinnin osalta vain tilamuutosten vaatimat muutokset.
Tilamuutoksen yhteydessä varmistetaan, että jokaisen työpisteen lähellä on kutakin työpistettä kohden vähintään 1kpl 2-osainen suojamaadoitettu sähköpistorasia ja 1kpl RJ45-verkkopistorasia.
Tilamuutoksen yhteydessä varmistetaan, että neuvotteluhuoneessa on 1kpl 2-osainen suojamaadoitettu sähköpistorasia ja 2xRJ45-verkkopistorasia, lisäksi 1kpl 1-osainen suojamaadoitettu sähköpistorasia näytölle. Jakelu johtokanavalla tai seinästä rasioilla (jos rakennetaan uusi seinä). Vuokralainen voi jatkaa kaapeloinnin tarvittaessa neuvotteluhuoneen pöytään tai näytölle esim. pinta-asenteisena sähkökourussa.

Vuokratilassa ei ole ovipuhelinjärjestelmää eikä ovikelloa.
                                            </textarea>
                                        </li>
                                        
                                        <li class="mb-10">
                                        <label class="flex items-center text-md md:text-lg mb-5" for="agreed_prepare_documents7">
                                            <span class="font-bold mr-5">7.</span>
                                            <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="agreed_prepare_documents[7]" id="agreed_prepare_documents7">
                                            TURVA-, KULUNVALVONTA- JA LUKITUSJÄRJESTELMÄT
                                        </label>
                                        <textarea class="shadow-input inline-block max-w-full w-full border border-solid border-[#06F9B7] rounded-[5px] p-4" id="kulunvalvonta-ja" name="kulunvalvonta-ja" rows="18">Klinteistön kulunvalvonnan piiriin kuuluvat ulko-ovet, hissit, porrashuoneet ja toimistohuoneistoihin johtavat ovet
        
Edellä mainituissa ovissa on myös lukitus avaimilla, pois lukien hissit
                                        
Vuokratilan rajalla on hätäpoistumistieovi joka johtaa viereiseen vuokratilaan. Ovessa on hätäpoistumistielukitus, hälytin ja magneettikosketin. Oven käyttö aiheuttaa hälytyksen ja sitä ei saa käyttää, ellei ole hätätilanne.
                                        
Vuokratilan sisällä on sähkökaappi, jossa on kiinteistön lukitus (vuokralainen ei pääse tilaan). Muuten vuokratilan sisällä ei ole kulunvalvottuja tai lukollisia ovia,
                                        
Paloilmoitin, hätäpoistumistie sekä turvavalojärjestelmien muutokset toteutetaan tilamuutosten vaatimassa laajuudessa kiinteistön järjestelmien kanssa yhteensopivaksi ja viranomaismääräykset täyttäviksl
                                        
Kiinteisttiesä ja vuokratilassa on olemassa oleva palosammutuskalusto
                                            </textarea>
                                        </li>
            
                                        <li class="mb-10">
                                        <label class="flex items-center text-md md:text-lg mb-5" for="agreed_prepare_documents8">
                                            <span class="font-bold mr-5">8.</span>
                                            <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="agreed_prepare_documents[8]" id="agreed_prepare_documents8">
                                            vuokralaisen hankinnat
                                        </label>
                                        <textarea class="shadow-input inline-block max-w-full w-full border border-solid border-[#06F9B7] rounded-[5px] p-4" id="vuokralaisen-hankinnat" name="vuokralaisen-hankinnat" rows="18">Vuokralainen hankkii ja asentaa kaikki liiketoimintaan liittyvät varusteet, laitteet, kalusteet, irtokalusteet ja toimistokalusteet. Vuokralainen vastaa omien hankintojen teknisistä varauksista, jos varauksia ei ole nimenomaisesti edellä tässä dokumentissa kirjattu tehtäväksi vuokrasopimuksen peruslaatutasoon. Vuokranantaja voi kieltää vuokralaisen hankinnan asennuksen, jos se voi aiheuttaa vaaraa tai vaurioita rakennukselle (esim. painava kassakaappi tai sähkölaite, joka ei täytä turvallisuusmääräyksiä). Vuokralaisen kalustus tulee mahdollistaa kaiken alkaa turvallisen ja esteettömän poistumisen vuokratilasta Vuokralainen hankkil asentaa ja tarvittaessa suunnittelee min
        
Toimistokalusteet ja -laitent
WLAN järjestelmät
Serverijärjestelmät sekä aktiivilaitteet
AV- ja informaatiojärjestelmät
Sisustusvalaisimet ja kohdevalaisimet
Kulunvalvonta ja lukitusjärjestelmät vuokratilojen sisällä
Kamera- ja turvajärjestelmät vuokratilojen sisällä
Tilapintojen erikoisvärit, tekstuurit tai akustikkapinnat
                                            </textarea>
                                        </li>
                                    </ul>
                                </div>
        
                        </div>
                </div><!-- Card Body -->
                <!-- Card footer --><?php echo wp_kses_post(noste_form_footer('form')); ?><!-- Card footer -->
                </form>
            </div>
        </div>

    </div>
</section>