<?php 

if ( !is_singular( 'projektitiedot' ) ) {
   return;
}

$project_id = get_the_ID();
$ptname = implode('_', ['noste', $_GET['tm'], $_GET['tmin']]);

$data = !empty( get_post_meta( $project_id, $ptname, true ) ) ? json_decode( get_post_meta( $project_id, $ptname, true ), true ) : '';


?>

<!-- grid View Item -->
<div class="grid grid-cols-1 gap-4">
    <!-- card_item -->
    <div class="card_item relative h-fit">
        <!-- Card Header -->
        <div class="card_header flex flex-col md:flex-row md:items-center md:justify-between px-4 md:px-8 py-6 border-b border-line top-0 z-10">
            <div>
                <p class="text-sm font-normal text-[#586B74] mb-1">Project nimi</p>
                <!-- Breadcrumb -->
                <nav class="flex justify-between" aria-label="Breadcrumb">
                    <ol class="inline-flex flex-wrap items-center mb-3 sm:mb-0">
                        <li>
                            <span class="text-xs md:text-sm font-medium text-black">Projektin valmistelu</span>
                        </li>
                        <span class="mx-1 md:mx-2 text-black">/</span>
                        <li aria-current="page">
                            <span class="text-xs md:text-sm font-medium text-black">Vuokrasopimuksen apudokumentit</span>
                        </li>
                        <span class="mx-1 md:mx-2 text-gray-400">/</span>
                        <li aria-current="page">
                            <span class="text-xs md:text-sm font-medium text-black">Rakennustapaselostus_valmis_ver1</span>
                        </li>
                    </ol>
                </nav>
            </div>
            <button class="btn gap-2 border border-line bg-[#E9E9F0]">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                    <defs>
                        <pattern id="pattern2" preserveAspectRatio="xMidYMid slice" width="100%" height="100%" viewBox="0 0 100 100">
                            <image width="100" height="100" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAADO0lEQVR4nO2cz05UMRSHu9F3UHTNq4h7VyQtYTHBzLQy0LLleSAmJugr+CcqPsKQiEs1KuyHFMHoxXtvh7TTc879/ZKuSO/Md77pbcvMrVIIgiAIQizGhbnkprildsEMhEAI6dT+BBuMkG4hinkMdx72ANJ42ANI42EPII2HPYA0HvYA0njYA0jjYQ8gjYc9gDQe9gDSeNgDSONhDyCNhz2ANB72ANJ42ANI42EPII2HPYA0HvYA0njYA0jjYQ8gjYc9gDQe9gDUeJ7s79/Vbm9ibHhnbDhvviG0sFgNbDjXzr811o9jbReSsTkO940Ln1D0UOSDp60/Xt/evpc8MiAjLOMO8HE0Gt3pFXJ5m8Itab6MGmjrn/YKuZwz/u7kwlG8hSUNL6Q1ejpdMda/bMwrb1RfjPNn/wiZTld6OyFJWbd7Dxoj5Bf95Z3wLFxfCCkbCCEWCCEWCCmYjZ2dh9qG53FyvmovNp+F1a4+EFJWxreb+wv/Pf6trR+EFEocGe0bvnDY1g9CCiXeojp24T/b+kFIBSHa+R9t/SCkUOIE3jFCDtr6QUihxNVUnMD/M6l/jf8iaesHIeVXWodxzrhqB10yYiCEWCCEWCCEWCCEWCCEWCCEWCCEWCCEWKoJkf5TIpWpLvk7JF5HWlOZ6pK/Q+J1pDWVqS75OyReR1pTmeqSv0Ph61AJhBALhBALhBALhBALhBDLYIRsuPBYW39SexmrrT/Rk901KnWp9sLahs+1ZZjrZsMXKnWp9sIQQk3IZHfNuDCrPjpcmBnrH1GpS/0XJh4DIbRSTUjzN6u3fegTIyTXQ5+Nx6Ljo7y3kQIhN2VoF14t/li09eMSk2btfYju2Wf01qXM+9pKO3TG+uNlCYlr/9IyzJ/mT6kI0Ta8TzpaIyYejBLP4liKEOdPhyfEf0g+fOY60V48i0M7/7p5ukNOIUvch8y69hnlhfiz37UMW8kjI2dShXCJ4c7DHkAaD3sAaTzsAaTxpAIM7fuQakleZQ3s+5BqgRCuQgb2fUi1sAeQxsMeQBoPewBpPOwBpPGwB5DGwx5AGg+BZey8ZFPcUrtgBkIghHRqf4INRgiCIAiihpULmb7nGYjfxQAAAAAASUVORK5CYII=" />
                        </pattern>
                    </defs>
                    <rect id="icons8-print-100" width="20" height="20" fill="url(#pattern2)" />
                </svg>

                Takaisin
            </button>
        </div><!-- Card Header -->
        <!-- Card Body -->
        <div class="px-4 md:px-8 pt-6 pb-10 lg:h-[645px] overflow-y-auto no-scrollbar scroll-smooth">
            <div class="">
                <div class="mx-auto max-w-[700px] mb-4">
                    <p class="text-sm text-accent italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K1', true ), 'K1') ); ?></p>
                    <p class="text-sm text-accent italic"><?php echo esc_html( noste_check_empty(get_post_meta( $project_id, 'pilar_K1', true ), 'K1') ); ?></p>
                </div>
                
                <h4 class="mb-8 text-[#081F2C] mx-auto max-w-[700px]">RAKENNUSTAPASELOSTUS</h4>

                <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
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
                                <div class="p-4 border border-accent shadow-input rounded-lg">
                                    <p class="text-sm">
                                        Vuokranantaja vastaa tilan suunnittelusta vuokrasopimuksen mukaiseen tasoon Vuokralamen vastaa sisustussuunnittelusta (ml. tila- ja irtokalustesuunnittelu) sekä omien järjestelmien suunnittelusta
                                    </p>
                                </div>
                            </li>
                            
                            <li class="mb-10">
                                <label class="flex items-center text-md md:text-lg mb-5" for="agreed_prepare_documents2">
                                    <span class="font-bold mr-5">2.</span>
                                    <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="agreed_prepare_documents[2]" id="agreed_prepare_documents2">
                                    TILAJAKO-OSAT
                                </label>
                                <div class="p-4 border border-accent shadow-input rounded-lg">
                                    <p class="text-sm">
                                        Vuokratilan hissiaulaan ei tule muutoksia.<br><br>
                                        Vuokratiloihin rakennetaan uudet tai muokataan vanhoista rakenteista pohjapiirustuksen mukaiset huoneet ja tilat. Vanhat väliseinät ja lasiseinät puretaan pohjapiirustuksen mukaisesti. Purettujen seinien otsat päätetään alakattopinnan tasoon ja viimeistellään peltiprofililla. Tilaan jäävät entiset väliseinät pysyvät siinä kunnossa kuin ne ovat. Toimistohuoneiden ja käytävän väliselle seinälle sekä neuvotteluhuoneiden ja käytävien väliselle seinälle rakennetaan uudet lasiseinät. Uuslin lasiseiniin asennetaan sähköpielet. Uudet lasiseinät varustetaan huomioteippauksella (20mm korkea huurreviiva) n. 1000mm korkeudella. Huoneiden väliseinät ovat kipsilevyseinia. Neuvotteluhuoneessa vahvistetaan näytön kiinnitystä varten yksi seinä huoneen sisäpuolelta Habito-levyllä Väliseinien ja lasiseinien äänitasoeroluku tavoitearvo sisäilmaluokituksen 2018, S2 tason mukaan (Toimistohuone Äänitasoeroluku työhuoneiden välillä DnT,w 40 dB, Aanitasoeroluku käytävälle DnT,w : 25 dB, Avotilatoimisto: Äänitasoeroluku työhuoneeseen DnT,w 25 dB. Neuvotteluhuone: Äänitasperoluku naapurihuoneeseen DrniT,w > 44 dB, Äänitasoeroluku käytävälle DnTw 30 dB). Toimistorakennuksessa kahden eri toimijen välillä rakennettavan seinän äänitasoeroluku Ympäristöministeriön ohje rakennuksen ääniympäristöstä 2018 mukaan z 52 dB (DnTw) ΤΑΙ <br><br>
                                        Tilat rakennetaan hyödyntämällä olemassa olevta lasiseiniä, väliseiniä ja väliseinärakentalta, Mahdolliset uudet väliseinärakenteet ja seinien aukotusten ummistukset rakennetaan vastaamaan olemassa olevia väliseiniä (lasiseinä kipsilevyseinä, elementtiseina).<br><br>
                                        Vuokratilaan asennetaan uudet maalatut laakaovet pohjapirustuksen mukaisiin paikkoihin. Lasiseinäjärjestelmäaan
                                    </p>
                                </div>
                            </li>
                            
                            <li class="mb-10">
                                <label class="flex items-center text-md md:text-lg mb-5" for="agreed_prepare_documents3">
                                    <span class="font-bold mr-5">3.</span>
                                    <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="agreed_prepare_documents[3]" id="agreed_prepare_documents3">
                                    TILAPINNAT
                                </label>
                                <div class="p-4 border border-accent shadow-input rounded-lg">
                                    <p class="text-sm">
                                        Vuokratilassa on osittain alakattoa (kipsilevykatto tai akustiikkalevypalakatto) ja osittain katto on holviin asti auki. Alakattoja muokataan vain tilamuutosten vaatimassa laajuudessa. Muokkaukset toteutetaan saman tyylisesti kuin olemassa oleva katto. Katto on hoiviin asti auki pääsääntöisesti ikkunaseinällä, ulkoseinälinjalla. Holviin läsätään tarvittaessa akustiikkalevyjä työpistealueiden kohdalle vieressä olevia alueita vastaava määrä. Alakattoalueilla katossa oleva tekniikka on piilossa ja holviin asti auki olevissa osissa katossa oleva tekniikka on näkyvillä. Katto maalataan vain uusien kipsilevykattojen osalta. Katto on väriltään vaalea/valkoinen Vanha tekstiilipalamatto poistetaan. Toimistotiloihin (avotila, neuvotteluhuoneet ja työhuoneet) asennetaan uusi tekstiilpalamatto. Yleisiin tiloihin asennetaan uusi vinyylilattia. Vuokralainen voi valita vuokranantajan esittämistä lattiamateriaalivaihtoehdoista käytettävän tuotteen. Tuotteet valitaan niin, että ne sopivat känteistön yleiseen ilmeeseen ja tuote on neutraali imeeltään. Ehdotettavat tuotteet voivat vaihdella saatavuuden ja toimitusaikojen mukaan. Jalkalista uusitaan, jalkalistan väri on toimittajan vakiosävy. Uudet kipsilevyseinät saumatasoitetaan ja maalataan. Värisävyt vaaleat, olemassa olevien seinien mukaan, seinäpinnat yksivärisiä<br>
                                        Vuokratilaan asennetaan uudet maalatut laakaovet pohjapirustuksen mukaisiin paikkoihin. Lasiseinäjärjestelmäaan
                                    </p>
                                </div>
                            </li>
                            
                            <li class="mb-10">
                                <label class="flex items-center text-md md:text-lg mb-5" for="agreed_prepare_documents4">
                                    <span class="font-bold mr-5">4.</span>
                                    <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="agreed_prepare_documents[4]" id="agreed_prepare_documents4">
                                    KALUSTEET JA VARUSTEET
                                </label>
                                <div class="p-4 border border-accent shadow-input rounded-lg">
                                    <p class="text-sm">
                                        Vuokratilassa on olemassa oleva taukskeittiö, el muutoksia<br>
                                        ΤΑΙ<br>
                                        Vuokratilaan rakennetaan uusi taukokeittiö<br>
                                        Kalusteiden runkorakenne ja ovet melamiinia. Ovet laakarvia lankavetimellä. Kolme yläkaappia (kaappi, kuivauskaappi sekä tilavaraus mikroaaltouunille + pistorasia). Alhaalla vetolaatikostot, astianpesukone (ei integroitu) sekä allaskaappi jätevaunulla ja jätteen lajittelulle korit. Astianpesukoneen alle asennetaan vesikaukalo. Laminaattitaso ja rst-allas 340-400 mm. Keittiöallashana (oras) Tason viereen asennettava korkea jääkaappi (el pakastelokeroa, ei integroitu). Välitilavalaisin (LED) sekä kaksi sähköpistorasiaa. Kalusteväli roiskesuojalevy (valkoinen) tai laatoitettu (150x150 mm laatta, valkoinen, saumaus valkoisella sauma-aineella). Jääkaapin viereen korkea siivouskomero (sis. kiinteä hylly, 2 tarvikekoria, oskarin oksa, kaarikoukku imuriletkulle, 2 kpl ripustuskoukku). Vuokralainen voi valita kalusteen värin vuokranantajan esittämistä vaihtoehdoista. Väri on kiinteistön yleiseen ilmeeseen sopiva ja neutraali ilmeeltään.<br>
                                        Vuokratilan WC-tiloihin ei tule muutoksia. Tilamuutoksen yhteydessä varmistetaan, että WC-kalusteet ovat ehjiä Tilan ikkunoiden sälekaihtirnet tarkastetaan ja tarvittaessa korjataan muutostöiden yhteydessä
                                    </p>
                                </div>
                            </li>
                            
                            <li class="mb-10">
                                <label class="flex items-center text-md md:text-lg mb-5" for="agreed_prepare_documents5">
                                    <span class="font-bold mr-5">5.</span>
                                    <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="agreed_prepare_documents[5]" id="agreed_prepare_documents5">
                                    LVIA-JÄRJESTELMÄT
                                </label>
                                <div class="p-4 border border-accent shadow-input rounded-lg">
                                    <p class="text-sm">
                                        Vuokratilaa palvelee kiinteistön olemassa olevat vesi, viemäri, lämmitys, jäähdytys- ja ilmanvaihtojärjestelmät, jotka pysyvät ennallaan. Vuokratilassa on kiinteistön sprinkleri-sammutusjärjestelmä<br><br>
                                        Tilamuutoksen yhteydessä huomioidaan seuraavat muutokset olemassa oleviin järjestelmiin<br><br>
                                        Ilmanvaihtokanavistoon tehdään tilamuutosten vaatimat muutokset. Vaadittavat muutokset määrittää vuokranantaja. Mahdolliset uudet ilmanvaihdon päätelaitteet toteutetaan ko tilan kattoon sopivaksi ja olemassa olevien päätelaitteiden ilmeen mukaisiksi. Ilmanvaihtojärjestelmä mitataan ja säädetään sekä tarvittaessa kanavat nuohotaan vuokratilan alueella. Tilojen ilmamäärät säädetään sisäilmastoluokitus 2018, RT 07-11299 mukaan, 82 sisälimastoluokka (hyvä ilmanlaatu).<br><br>
                                        Jäähdytykseen ei tule muutoksia pois lukien seuraava lisäys. Uuteen rakennettavaan neuvotteluhuoneeseen lisätään jäähdytystä. Jäähdytys toteutetaan kattoon asennettavalla jäähdytyspalkilla tai jäähdytyskonvektorilla jäähdytystarpeen mukaan.<br><br>
                                        Vesi- ja viemänjärjestelmiin ei tehdä muutoksia pois lukien seuraavaa lisäystä. Keittiökalusteeseen lisätään uudelle kahvikoneelle kylmävesipiste ja viemäripiste.<br><br>
                                        Sprinkleri-järjestelmään tehdään tilamuutoksesta syntyvät välttämättömät muutokset niin, että viranomaismääräykset täyttyvät.
                                    </p>
                                </div>
                            </li>
                            
                            <li class="mb-10">
                                <label class="flex items-center text-md md:text-lg mb-5" for="agreed_prepare_documents6">
                                    <span class="font-bold mr-5">6.</span>
                                    <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="agreed_prepare_documents[6]" id="agreed_prepare_documents6">
                                    SÄHKÖ- JA YLEISKAAPELOINTIJÄRJESTELMÄT
                                </label>
                                <div class="p-4 border border-accent shadow-input rounded-lg">
                                    <p class="text-sm">
                                        Vuokratilaa palvelee kiinteistön olemassa olevat sähkö- ja yleiskaapelointijärjestelmät, jotka pysyvät ennallaan Vuokratilassa on olemassa oleva ryhmäkeskus, joka palvelee vain tätä vuokratilaa. Sähkön mittaus toteutetaan kiinteistöautomaation kautta/sähköyhtiön mittauksella/tilakohtaista sähkönmittausta ei suoriteta, vaan mittaus perustuu neliömetripohjaiseen anvioon. Vuokralaisella on mahdollisuus/ei ole mahdollisuutta tehda oma sähkösopimus vuokratilaan.
                                        Sähkönjakelu on toteutettu ulkoseinälinjoilla johtokanavilla ja keskialueilla katossa olevalla yläjakeluna kaapelihyllyjen avulla. Vuokralainen jatkaa tarvittaessa sähkönjakelua työpisteelle esim. pistorasiapylväällä tai jatkojohdolla<br><br>
                                        Vuokratilassa on olemassa oleva huoneistojakamo, joka palvelee vain tätä vuokratilaa. Huoneistojakamoon tuodaan talojakamosta x kpl CATSa kaapelia ja x kpl 8SM valokuitu. Kiinteistö on liitetty Elisan ja Tellan valokuituverkkoihin. Yleiskaapelointi on toteutettu ulkoseinälinjoilla johtokanavilla ja keskialueilla katossa olevalla yläjakeluna kaapelihyllyjen avulla Vuokralainen jatkaa tarvittaessa yleiskaapelointia työpisteelle esim. pistorasiapylväällä tai patch-kaapelilla.
                                        Vuokratilassa on olemassa oleva valaistus ja olemassa oleva valaistuksenohjaus Yleisvalaistuksen ohjaus on/off kytkimin, ohjaus pääsääntöisesti tilaan tultaessa seinässä olevalla painikkeella tai suoraan kiinni valaisimessa<br><br>
                                        olevalla vetonarulla.<br><br>
                                        ΤΑΙ<br>
                                        Vuokratilaan asennetaan uusi yleisvalaistus (LED) Yleisvalaistuksen perusvalotaso on noin 300x, Alakaton alueilla<br><br>
                                        yleisvalaistus upotetuin led-valoin. Alueilla, joilla ei ole alakattoa, yleisvalaistus toteutetaan ripustetuin led valaisimin. Neuvotteluhuoneissa säädettävä valaistustaso (rasiasäädin ja on/off). Neuvotteluhuoneiden säädin
                                        sijoitetaan lasiseinän sähköpieleen. Muuten vuokratilaan asennetaan valaisimet, joissa on valaisinkohtainen päivänvalo/läsnäolotunniste. Ei muuta valaistusohjausta.<br><br>
                                        Tilamuutoksen yhteydessä huomioidaan seuraavat asiat olemassa oleviin sähkö- ja yleiskaapelointijärjestelmin- Sähkön ja yleiskaapeloinnin osalta vain tilamuutosten vaatimat muutokset Tilamuutoksen yhteydessä varmistetaan, että jokaisen työpisteen lähellä on kutakin työpistettä kohden<br><br>
                                        vähintään 1kpl 2-osainen suojamaadoitettu sähköpistorasia ja 1kpl RJ45-verkkopistorasia-Titamuutoksen yhteydessä varmistetaan, että neuvotteluhuoneessa on 1kpl 2-osainen suojamaadoitettu<br>
                                        sähköpistorasia ja 2xRJ45-verkkopistorasia, lisäksi 1kpl 1-osainen suojamaadoitettu sähköpistorasia näytöille. Jakelu johtokanavalla tai seinästä rasioilla (jos rakennetaan uusi seinä). Vuokralainen voi jatkaa
                                    </p>
                                </div>
                            </li>
                            
                            <li class="mb-10">
                                <label class="flex items-center text-md md:text-lg mb-5" for="agreed_prepare_documents7">
                                    <span class="font-bold mr-5">7.</span>
                                    <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="agreed_prepare_documents[7]" id="agreed_prepare_documents7">
                                    TURVA-, KULUNVALVONTA- JA LUKITUSJÄRJESTELMÄT
                                </label>
                                <div class="p-4 border border-accent shadow-input rounded-lg">
                                    <p class="text-sm">
                                        Klinteistön kulunvalvonnan piiriin kuuluvat ulko-ovet, hissit, porrashuoneet ja toimistohuoneistoihin johtavat ovet
                                        Edellä mainituissa ovissa on myös lukitus avaimilla, pois lukien hissit
                                        Vuokratilan rajalla on hätäpoistumistieovi joka johtaa viereiseen vuokratilaan. Ovessa on hätäpoistumistielukitus, hälytin ja magneettikosketin. Oven käyttö aiheuttaa hälytyksen ja sitä ei saa käyttää, ellei ole hätätilanne.
                                        Vuokratilan sisällä on sähkökaappi, jossa on kiinteistön lukitus (vuokralainen ei pääse tilaan). Muuten vuokratilan sisällä ei ole kulunvalvottuja tai lukollisia ovia,
                                        Paloilmoitin, hätäpoistumistie sekä turvavalojärjestelmien muutokset toteutetaan tilamuutosten vaatimassa laajuudessa kiinteistön järjestelmien kanssa yhteensopivaksi ja viranomaismääräykset täyttäviksl
                                        Kiinteisttiesä ja vuokratilassa on olemassa oleva palosammutuskalusto
                                    </p>
                                </div>
                            </li>

                            <li class="mb-10">
                                <label class="flex items-center text-md md:text-lg mb-5" for="agreed_prepare_documents8">
                                    <span class="font-bold mr-5">8.</span>
                                    <input class="shadow-input mr-3 relative appearance-none rounded border cursor-pointer border-accent checked:border-accent checked:after:content-['\2713'] checked:after:text-primary checked:after:absolute checked:after:top-1/2 checked:after:left-1/2 checked:after:-translate-x-1/2 checked:after:-translate-y-1/2 h-5 w-2 p-2" type="checkbox" name="agreed_prepare_documents[8]" id="agreed_prepare_documents8">
                                    TURVA-, KULUNVALVONTA- JA LUKITUSJÄRJESTELMÄT
                                </label>
                                <div class="p-4 border border-accent shadow-input rounded-lg">
                                    <p class="text-sm">
                                        Vuokralainen hankkii ja asentaa kaikki liiketoimintaan liittyvät varusteet, laitteet, kalusteet, irtokalusteet ja toimistokalusteet. Vuokralainen vastaa omien hankintojen teknisistä varauksista, jos varauksia ei ole nimenomaisesti edellä tässä dokumentissa kirjattu tehtäväksi vuokrasopimuksen peruslaatutasoon. Vuokranantaja voi kieltää vuokralaisen hankinnan asennuksen, jos se voi aiheuttaa vaaraa tai vaurioita rakennukselle (esim. painava kassakaappi tai sähkölaite, joka ei täytä turvallisuusmääräyksiä). Vuokralaisen kalustus tulee mahdollistaa kaiken alkaa turvallisen ja esteettömän poistumisen vuokratilasta Vuokralainen hankkil asentaa ja tarvittaessa suunnittelee min
                                    </p>
                                    <ul class="list-disc p-4">
                                        <li>Toimistokalusteet ja -laitent</li>
                                        <li>WLAN järjestelmät</li>
                                        <li>Serverijärjestelmät sekä aktiivilaitteet</li>
                                        <li>AV- ja informaatiojärjestelmät</li>
                                        <li>Sisustusvalaisimet ja kohdevalaisimet</li>
                                        <li>Kulunvalvonta ja lukitusjärjestelmät vuokratilojen sisällä</li>
                                        <li>Kamera- ja turvajärjestelmät vuokratilojen sisällä</li>
                                        <li>Tilapintojen erikoisvärit, tekstuurit tai akustikkapinnat</li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>

                </form>
            </div>
        </div><!-- Card Body -->
        <!-- Card footer -->
        <div class="card_footer p-4 border-t border-line">
            <div class="flex items-center justify-between">
                <a href="<?php echo esc_attr(site_url(remove_query_arg(['tmin']))); ?>" class="btn gap-2 border border-line">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                        <defs>
                            <pattern id="pattern13" width="1" height="1" patternTransform="matrix(-1, 0, 0, 1, 40, 0)" viewBox="0 0 20 20">
                                <image preserveAspectRatio="xMidYMid slice" width="20" height="20" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAABkklEQVR4nO3dQYrVQBhF4ecKFVF6oHu5dZ12SuiK6xNUeiC6A4UnDxyI9jwHcz4IZPjDISGTP3W5SJIkSdJ/rnN/3bm+da7HbOvF0fOc2vV6fTa29b1zv/6+foxt3R0916l1rq9/BDHK0XK/Xt6eDKOA5P7h1d9RxrZ+vpvr7dGznZZRgIwCZBQgowAZBSh+ffHEKDwxCk+MwhOj8MQoPDEKT4zCE6PwxCg8MQpPjMITo/DEKDwxCk+MwhOj8MQoPDEKT4zCE6PwxCg8MQpPjMITo/DEKDwxCk+MwhOj8MQoPGNbd08torpHz4vy5ciZTm08EWTM9fnouU5p+Mqi/Xtl/2dnfmwPb46e7XRqDI4ag6PG4KgxOGoMjhqDo8bgqDE4agyOGoOjxuCoMThqDI4ag6PG4KgxOGoMjhqDo8bgqDE4agyOGoOjxuCoMThqDI4ag6PG4KgxOGoMDmOAGAPEGCDGADEGiDFA+v7Dcw8nBrmtGntSNEjnevQsddora9s/jbl/vN0fPY8kSZIkXU7uFxa7dmp7vSU5AAAAAElFTkSuQmCC" />
                            </pattern>
                        </defs>
                        <rect id="icons8-arrow-100" width="20" height="20" fill="url(#pattern13)" />
                    </svg>

                    Takaisin
                </a>
                
                <a href="!#" class="btn gap-2 border border-accent bg-accent text-white">
                    Hyväksy
                </a>
            </div>
        </div>
        <!-- Card footer -->
    </div>


</div>