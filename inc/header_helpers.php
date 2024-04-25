<?php
$steps_names = [
    "tilaajan" => "Tilaajan yhteydenotto",
    "lahtotietojen" => "Lähtötietojen läpikäynti, alustavan kustannusarvion ja aikataulun teko",
    "kohdekaynti" => "Kohdekäynti",
    "vuokrasopimuksen" => "Vuokrasopimuksen apudokumentit",
    "kustannusarvion" => "Kustannusarvion ja aikataulun päivitys",
    "vuokrasopimuksen_allekirjoitus" => "Vuokrasopimuksen allekirjoitus ja vuokralaismuutoksen aloituspäätös",
    "noste_tarjouksen" => "Noste.ion tarjouksen toimitus",
    "projektiraportointi" => "Projektiraportointi ja kustannusseuranta",
    "suunnittelu" => "Suunnittelu ja selvitykset",
    "kaupalliset" => "Kaupalliset asiakirjat ja kilpailutusmateriaalin teko",
    "tarjouspyynnon" => "Tarjouspyynnön lähetys ja urakkakilpailutus",
    "tarjouksen" => "Tarjouksen hyväksyttäminen",
    "urakan" => "Urakan kirjallinen tilaus",
    "urakkasopimuksen" => "Urakkasopimuksen allekirjoitus",
    "tyomaan" => "Työmaan käynnistymisen tehtävät",
    "tyomaan_aloituskokous" => "Työmaan aloituskokous",
    "yleinen" => "Yleinen projektinjohto rakentamisen aikana",
    "tyomaavalvonta" => "Työmaavalvonta",
    "tyomaakokoukset" => "Työmaakokoukset",
    "lisaja" => "Lisä-ja muutostyökäsittely",
    "vastaanottotarkastustilaisuus" => "Vastaanottotarkastustilaisuus",
    "hallinnanluovutustilaisuus" => "Hallinnanluovutustilaisuus",
    "virheja" => "Virhe- ja puutekorjausten valvonta",
    "taloudellinen" => "Taloudellinen loppuselvitys",
    "loppudokumentaatio" => "Loppudokumentaatio ja projektin lopetus"
];
$forms_params = [
        "tilaajan-valmistele" => [
            "column" => 0,
            "step_id" => "tilaajan",
            "step" => "tilaajan",
            "form_id" => "valmistele",
            "form_title" => "Lähtötietopalaverin asialista",
            "form_version" => "Lähtötietop_valmis_ver1"
        ],
        "tilaajan-laadi" => [
            "column" => 0,
            "step_id" => "tilaajan",
            "step" => "tilaajan",
            "form_id" => "laadi",
            "form_title" => "Lähtötietopalaverin asialista",
            "form_version" => "Lähtötietop_valmis_ver1"
        ],
        "lahtotietojen-kustannusarvio" => [
            "column" => 0,
            "step_id" => "lahtotietojen",
            "step" => "lahtotietojen",
            "form_id" => "kustannusarvio",
            "form_title" => "Kustannusarvio",
            "form_version" => ""
        ],
        "lahtotietojen-aikataulu" => [
            "column" => 0,
            "step_id" => "lahtotietojen",
            "step" => "lahtotietojen",
            "form_id" => "aikataulu",
            "form_title" => "Aikataulu",
            "form_version" => ""
        ],
        "vuokrasopimuksen-rakennustapaselostus" => [
            "column" => 0,
            "step_id" => "vuokrasopimuksen",
            "step" => "vuokrasopimuksen",
            "form_id" => "rakennustapaselostus",
            "form_title" => "Rakennustapaselostus",
            "form_version" => ""
        ],
        "vuokrasopimuksen-hankintarajaliite" => [
            "column" => 0,
            "step_id" => "vuokrasopimuksen",
            "step" => "vuokrasopimuksen",
            "form_id" => "hankintarajaliite",
            "form_title" => "Hankintarajaliite",
            "form_version" => ""
        ],
        "vuokrasopimuksen-lahtotietoaikataulu" => [
            "column" => 0,
            "step_id" => "vuokrasopimuksen",
            "step" => "vuokrasopimuksen",
            "form_id" => "lahtotietoaikataulu",
            "form_title" => "Lähtötietoaikataulu",
            "form_version" => ""
        ],
        "kustannusarvion-kustannusarvio" => [
            "column" => 0,
            "step_id" => "kustannusarvion",
            "step" => "kustannusarvion",
            "form_id" => "kustannusarvio",
            "form_title" => "Kustannusarvio",
            "form_version" => ""
        ],
        "kustannusarvion-aikataulu" => [
            "column" => 0,
            "step_id" => "kustannusarvion",
            "step" => "kustannusarvion",
            "form_id" => "aikataulu",
            "form_title" => "Aikataulu",
            "form_version" => ""
        ],
        "suunnittelu-suunnittelutarjouksen" => [
            "column" => 1,
            "step_id" => "suunnittelu",
            "step" => "suunnittelu",
            "form_id" => "suunnittelutarjouksen",
            "form_title" => "OHJE Suunnittelutarjouksen pyytäminen",
            "form_version" => ""
        ],
        "suunnittelu-ainekartoituksen" => [
            "column" => 1,
            "step_id" => "suunnittelu",
            "step" => "suunnittelu",
            "form_id" => "ainekartoituksen",
            "form_title" => "OHJE Asbesti ja haitta-ainekartoituksen tekeminen",
            "form_version" => ""
        ],
        "suunnittelu-urakkalaskentasuunnitelmien" => [
            "column" => 1,
            "step_id" => "suunnittelu",
            "step" => "suunnittelu",
            "form_id" => "urakkalaskentasuunnitelmien",
            "form_title" => "OHJE Urakkalaskentasuunnitelmien tarkastus",
            "form_version" => ""
        ],
        "tarjouspyynnon-lisakirje" => [
            "column" => 1,
            "step_id" => "tarjouspyynnon",
            "step" => "tarjouspyynnon",
            "form_id" => "lisakirje",
            "form_title" => "lisäkirje",
            "form_version" => ""
        ],
        "tarjouspyynnon-alustava" => [
            "column" => 1,
            "step_id" => "tarjouspyynnon",
            "step" => "tarjouspyynnon",
            "form_id" => "alustava",
            "form_title" => "Urakkatarjousvertailu",
            "form_version" => ""
        ],
        "tarjouspyynnon-asialista" => [
            "column" => 1,
            "step_id" => "tarjouspyynnon",
            "step" => "tarjouspyynnon",
            "form_id" => "asialista",
            "form_title" => "Urakkaneuvottelun asialista",
            "form_version" => ""
        ],
        "tarjouspyynnon-poytakirja" => [
            "column" => 1,
            "step_id" => "tarjouspyynnon",
            "step" => "tarjouspyynnon",
            "form_id" => "poytakirja",
            "form_title" => "Urakkaneuvottelun pöytäkirja",
            "form_version" => ""
        ],
        "tarjouksen-urakkatarjousvertailu" => [
            "column" => 1,
            "step_id" => "tarjouksen",
            "step" => "tarjouksen",
            "form_id" => "urakkatarjousvertailu",
            "form_title" => "Urakkatarjousvertailu",
            "form_version" => "Tarjousvertailu_valmis_ver1"
        ],
        "urakan-kirjallinen-urakkatilaus" => [
            "column" => 2,
            "step_id" => "urakan",
            "step" => "urakan",
            "form_id" => "kirjallinen-urakkatilaus",
            "form_title" => "Kirjallinen urakkatilaus",
            "form_version" => ""
        ],
        "urakan-kirjallinen-urakkatilaus" => [
            "column" => 2,
            "step_id" => "urakan",
            "step" => "urakan",
            "form_id" => "kirjallinen-urakkatilaus",
            "form_title" => "Kirjallinen urakkatilaus",
            "form_version" => ""
        ],
        "tyomaan_aloituskokous-aloituskokouksen-asialista" => [
            "column" => 2,
            "step_id" => "tyomaan_aloituskokous",
            "step" => "tyomaan_aloituskokous",
            "form_id" => "aloituskokouksen-asialista",
            "form_title" => "aloituskokouksen asialista",
            "form_version" => ""
        ],
        "tyomaan_aloituskokous-aloituskokouksen%20poytakirja" => [
            "column" => 2,
            "step_id" => "tyomaan_aloituskokous",
            "step" => "tyomaan_aloituskokous",
            "form_id" => "aloituskokouksen%20poytakirja",
            "form_title" => "aloituskokouksen pöytäkirja",
            "form_version" => ""
        ],
        "tyomaakokoukset-asialista" => [
            "column" => 3,
            "step_id" => "tyomaakokoukset",
            "step" => "tyomaakokoukset",
            "form_id" => "asialista",
            "form_title" => "Työmaakokouksen asialista",
            "form_version" => ""
        ],
        "tyomaakokoukset-tyomaakokouksen-poytakirja" => [
            "column" => 3,
            "step_id" => "tyomaakokoukset",
            "step" => "tyomaakokoukset",
            "form_id" => "tyomaakokouksen-poytakirja",
            "form_title" => "Työmaakokouksen pöytäkirja",
            "form_version" => ""
        ],
        "vastaanottotarkastustilaisuus-huomioitavaa" => [
            "column" => 4,
            "step_id" => "vastaanottotarkastustilaisuus",
            "step" => "vastaanottotarkastustilaisuus",
            "form_id" => "huomioitavaa",
            "form_title" => "OHJE Vastaanotossa huomioitavaa",
            "form_version" => ""
        ],
        "vastaanottotarkastustilaisuus-vastaanottotarkastuksen-asialista" => [
            "column" => 4,
            "step_id" => "vastaanottotarkastustilaisuus",
            "step" => "vastaanottotarkastustilaisuus",
            "form_id" => "vastaanottotarkastuksen-asialista",
            "form_title" => "Vastaanottotarkastuksen asialista",
            "form_version" => ""
        ],
        "hallinnanluovutustilaisuus-virhe-ja-puutelista" => [
            "column" => 4,
            "step_id" => "hallinnanluovutustilaisuus",
            "step" => "hallinnanluovutustilaisuus",
            "form_id" => "virhe-ja-puutelista",
            "form_title" => "Käyttäjän virhe- ja puutelista",
            "form_version" => ""
        ],
        "hallinnanluovutustilaisuus-virhe-ja-puutelista-2" => [
            "column" => 4,
            "step_id" => "hallinnanluovutustilaisuus",
            "step" => "hallinnanluovutustilaisuus",
            "form_id" => "virhe-ja-puutelista-2",
            "form_title" => "Käyttäjän virhe- ja puutelista",
            "form_version" => ""
        ],
        "hallinnanluovutustilaisuus-hallinnanluovutustilaisuuden-poytakirja" => [
            "column" => 4,
            "step_id" => "hallinnanluovutustilaisuus",
            "step" => "hallinnanluovutustilaisuus",
            "form_id" => "hallinnanluovutustilaisuuden-poytakirja",
            "form_title" => "Hallinnanluovutustilaisuuden pöytäkirja",
            "form_version" => ""
        ],
        "taloudellinen-loppuselvityksen-asialista" => [
            "column" => 4,
            "step_id" => "taloudellinen",
            "step" => "taloudellinen",
            "form_id" => "loppuselvityksen-asialista",
            "form_title" => "Taloudellisen loppuselvityksen asialista",
            "form_version" => ""
        ],
        "taloudellinen-taloudellisen-loppuselvityksen" => [
            "column" => 4,
            "step_id" => "taloudellinen",
            "step" => "taloudellinen",
            "form_id" => "taloudellisen-loppuselvityksen",
            "form_title" => "Taloudellisen loppuselvityksen pöytäkirja",
            "form_version" => ""
        ],
];
?>