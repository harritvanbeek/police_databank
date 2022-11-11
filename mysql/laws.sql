-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 11 nov 2022 om 08:15
-- Serverversie: 10.3.24-MariaDB-cll-lve
-- PHP-versie: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u45525p41851_databank`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `laws`
--

CREATE TABLE `laws` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `fine` int(11) NOT NULL DEFAULT 0,
  `months` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `laws`
--

INSERT INTO `laws` (`id`, `name`, `description`, `fine`, `months`) VALUES
(27, 'R602 - Het negeren van een roodverkeerlicht', 'Niet stoppen bij rood verkeerslicht, ', 750, 0),
(28, 'R628b - Niet opvolgen stopteken politie', 'Het negeren stop teken, Bij verkeers controle en bij vordering ', 1350, 5),
(29, 'D505 - Baldadigheid', 'Op de openbare weg of op een voor publiek toegankelijke plaats tegen goederen of personen baldadigheid plegen\r\nstraatschenderij; waaruit bleek dit; feitelijke baldadigheid beschrijven.', 1830, 0),
(30, 'F116a - Inbrekerswerktuig', 'Het is verboden op de weg of in de nabijheid van winkels te vervoeren of bij zich te hebben een voorwerp dat er kennelijk toe is uitgerust om het plegen van (winkel)diefstal te vergemakkelijken', 800, 0),
(31, 'D517 - Identiteitsbewijs', 'Niet voldoen aan de verplichting om een identiteitsbewijs ter inzage aan te bieden feiten en omstandigheden vermelden waarom vordering redelijkerwijze noodzakelijk werd geacht.', 2500, 0),
(32, 'Administratiekosten', 'Administratiekosten die wettelijk zijn berekend. die bij elke boete bij geteld word', 10, 0),
(34, 'K150c - Niet op eerste vordering behoorlijk het rijbewijs ter inzage afgeven', 'Niet op eerste vordering behoorlijk het rijbewijs ter inzage afgeven', 4500, 0),
(35, 'Artikel 266sr - Belediging ambtenaar in functie', 'Belediging van Ambtenaar in Functie', 4300, 3),
(43, 'VA 005 - Snelheidsoverschrijding 5 km/h', 'Overschrijding van maximum snelheid', 1000, 0),
(44, 'VA 010 - Snelheidsoverschrijding 10 km/h', 'Overschrijding van maximum snelheid', 2000, 0),
(46, 'VA 015 - Snelheidsoverschrijding 15/20 km/h', 'Overschrijding van maximum snelheid', 3000, 0),
(47, 'VA 025 - Snelheidsoverschrijding 25/30 km/h', 'Overschrijding van maximum snelheid', 4000, 0),
(48, 'VA 040 - Snelheidsoverschrijding 30/40 km/h', 'Overschrijding van maximum snelheid', 5000, 0),
(49, 'VA 050 - Snelheidsoverschrijding 50 km/h', 'Overschrijding van maximum snelheid', 6000, 0),
(50, 'VA 060 - Snelheidsoverschrijding 60/70 km/h', 'Overschrijding van maximum snelheid', 7000, 0),
(51, 'VA 080 - Snelheidsoverschrijding 70 /90 km/h', 'Overschrijding van maximum snelheid', 8000, 0),
(52, 'VA 100 - Snelheidsoverschrijding 100 km/h', 'Overschrijding van maximum snelheid', 9000, 0),
(53, 'Artikel 5 - Wegenverkeerswet', 'Het is een ieder verboden zich zodanig te gedragen dat gevaar op de weg wordt veroorzaakt of kan worden veroorzaakt of dat het verkeer op de weg wordt gehinderd of kan worden gehinderd. 3 maanden voorwaardelijk', 6000, 0),
(55, 'Artikel 184 - Niet voldoen aan een bevel of vordering', 'Hij die opzettelijk niet voldoet aan een bevel of een vordering, krachtens wettelijk voorschrift gedaan door een ambtenaar met de uitoefening van enig toezicht belast of door een ambtenaar belast met of bevoegd verklaard tot het opsporen of onderzoeken van strafbare feiten, alsmede hij die opzettelijk enige handeling, door een van die ambtenaren ondernomen ter uitvoering van enig wettelijk voorschrift, belet, belemmert of verijdelt.', 3000, 5),
(57, 'Artikel 426ter - Belemmeren hulpverlener', 'Hij die wederrechtelijk een hulpverlener gedurende de uitoefening van zijn beroep in zijn vrijheid van beweging belemmert of met een of meer anderen zich aan hem tegen zijn uitdrukkelijk verklaarde wil blijft opdringen of hem op hinderlijke wijze blijft volgen wordt gestraft met hechtenis van ten hoogste drie maanden of geldboete van de derde categorie.', 8700, 20),
(58, 'Artikel 196 - Onrechtmatig voordoen als politie ambt.', 'Hij die in het openbaar kledingstukken of opzichtige onderscheidingstekens draagt of voert, welke uitdrukking zijn van een bepaald staatkundig streven, wordt gestraft met hechtenis van ten hoogste twaalf dagen of geldboete van de tweede categorie.', 4500, 15),
(59, 'Artikel 142 - Misbruik noodnummer', 'Valse meldingen maken - onnodig gebruik maken van 112 nummer', 6700, 3),
(60, 'Artikel 48 - Medeplichtigen mishandeling', 'Vechten, na aangifte kan straf gegeven worden', 1250, 5),
(61, 'Artikel 26 - WWM Vuurwapen (CAT.II&III)', 'Vuur handwapens ', 10000, 25),
(62, 'Artikel 27 - WWM Semi,full automatische ', 'Semi wapens en full automatisch wapens.', 25000, 40),
(63, 'Artikel 13 - WWM Steek/slag (Cat:I)', 'Steekwapens en slagwapens (Vrijwillig afstaan geen celstraf van 10 maand)', 800, 0),
(64, 'Artikel 461 - Verboden toegang', 'Zonder daartoe gerechtigd te zijn zich bevinden op eens anders grond, waarvan de toegang op blijkbare wijze was\r\nverboden op welke blijkbare wijze was de toegang verboden; waar bevond verdachte zich; niet op kenteken.\r\n', 4000, 10),
(65, 'Artikel 310 - Eenvoudige diefstal', 'Het ontnemen van goederen uit bijvoorbeeld, Huis,winkel,persoon (bij nacht is huis art.311)', 1750, 10),
(66, 'Artikel 311 - Gekwalificeerde diefstal', 'diefstal gedurende de voor de nachtrust bestemde tijd, in een woning of op een besloten erf waarop een woning staat, door iemand die zich aldaar buiten weten of tegen de wil van de rechthebbende bevindt;\r\ndiefstal door twee of meer verenigde personen;\r\ndiefstal waarbij de schuldige zich de toegang tot de plaats van het misdrijf heeft verschaft of het weg te nemen goed onder zijn bereik heeft gebracht door middel van braak, verbreking of inklimming, van valse sleutels, van een valse order of een vals kostuum;', 4500, 20),
(67, 'Artikel 312 - Diefstal met geweld', 'Winkel & Huisinbraak', 4000, 30),
(68, 'Artikel 255 - Verlating van hulpbehoevenden', 'Hij die opzettelijk iemand tot wiens onderhoud, verpleging of verzorging hij krachtens wet of overeenkomst verplicht is, in een hulpeloze toestand brengt of laat, wordt gestraft met gevangenisstraf van ten hoogste twee jaren of geldboete van de vierde categorie.', 4350, 48),
(71, 'Artikel 177 - Omkoping', 'Hij die een ambtenaar een gift of belofte doet dan wel een dienst verleent of aanbiedt met het oogmerk om hem te bewegen in zijn bediening, in strijd met zijn plicht, iets te doen of na te laten;\r\n2hij die een ambtenaar een gift of belofte doet dan wel een dienst verleent of aanbiedt ten gevolge of naar aanleiding van hetgeen door deze in zijn huidige of vroegere bediening, in strijd met zijn plicht, is gedaan of nagelaten.', 100000, 24),
(72, 'Artikel 282 - Gijzeling/ontvoeren', 'Hij die opzettelijk iemand wederrechtelijk van de vrijheid berooft of beroofd houdt,\r\n\r\n', 4700, 15),
(73, 'Artikel 302 - Zware mishandeling', 'Hij die aan een ander opzettelijk zwaar lichamelijk letsel toebrengt maar waardoor persoon nog wel zelfstandig na ziekenhuis kan.\r\nZoals aanrijden,of steek/slagwapen,nekslag', 6000, 25),
(74, 'Artikel 48 - Medeplichtigen Moord', 'Hij die opzettelijk een ander van het leven berooft, wordt, als schuldig aan doodslag', 11000, 40),
(75, 'Artikel 287 - Doodslag/Moord', 'Hij die opzettelijk een ander van het leven berooft, wordt, als schuldig aan doodslag', 21750, 60),
(76, 'Artikel 289 - Moord voorbedachten rade', 'Hij die opzettelijk en met voorbedachten rade een ander van het leven berooft,\r\n(Doel bewust iemand vermoorden)', 30000, 80),
(78, 'R315b - Foutief parkeren', 'Als bestuurder een voertuig parkeren op een andere plaats dan daarvoor bestemd is. ', 1000, 0),
(80, 'Artikel 11 Opw - SOFT DRUGS (Vanaf 6 tot 10)', 'Op zak hebben van SOFT drugs zoals (Wiet, Joint)', 500, 0),
(81, 'Artikel 11 Opw - SOFT DRUGS (Vanaf 11 tot 50)', 'Op zak hebben van hard drugs zoals (Wiet, Joint)', 1000, 4),
(82, 'Artikel 11 Opw -SOFT DRUGS (Vanaf 50+)', 'Op zak hebben van hard drugs zoals (Wiet, Joint)', 2500, 8),
(84, 'Artikel 10 Opw -HARD DRUGS (Vanaf 2 tot 10)', 'Op zak hebben van hard drugs zoals (Oxy,Coke, Meth)', 500, 2),
(85, 'Artikel 10 Opw - HARD DRUGS (Vanaf 11 tot 50)', 'Op zak hebben van hard drugs zoals (Oxy,Coke, Meth)', 1000, 5),
(86, 'Artikel 10 Opw - Hard drugs (Vanaf 50+)', 'Op zak hebben van hard drugs zoals (Oxy,Coke, Meth)', 5000, 12),
(89, 'Artikel 447e - Niet meewerken identificatieplicht', 'Niet meewerken aan identificatieplicht, zoals vingerafdrukken,dna,bloed,NAW gegevens,foto', 10000, 15),
(91, 'Art. 180 Verzet van arrestatie', 'Het verzetten bij een arrestatie. in cellencomplex/ziekenhuis', 8200, 0),
(94, 'Eenvoudige mishandeling', 'Vechten, na aangifte kan straf gegeven worden', 3500, 15),
(95, 'Verstoring openbare orde ', 'duwen, trekken, schelden,vechten,samenscholing etc.', 3200, 5),
(97, 'Art.317 - Afpersing en afdreiging', 'Hij die, met het oogmerk door geweld of bedreiging met geweld iemand dwingt hetzij tot de afgifte van enig goederen dat geheel of ten dele aan deze of aan een derde toebehoort, hetzij tot het aangaan van een schuld of het teniet doen van een inschuld, hetzij tot het ter beschikking stellen van gegevens, wordt, als schuldig aan afpersing', 76000, 48),
(98, 'Artikel 188 - Valse aangifte', 'Hij die aangifte of klacht doet dat een strafbaar feit gepleegd is, wetende dat het niet gepleegd is, wordt gestraft met gevangenisstraf van ten hoogste een jaar of geldboete van de derde categorie. ', 0, 1),
(99, 'Artikel 307 - Dood door schuld', 'Bij roekeloos rijden waar een slachtoffer is gevallen, ', 8700, 48),
(100, 'Artikel 138 - Huisvredebreuk', 'Hij die in de woning of het besloten lokaal of erf, bij een ander in gebruik, wederrechtelijk binnendringt of, wederrechtelijk aldaar vertoevende, zich niet op de vordering van of vanwege de rechthebbende aanstonds verwijdert.\r\n\r\nHij die zich de toegang heeft verschaft door middel van braak of inklimming, van valse sleutels, van een valse order of een vals kostuum, of die, zonder voorkennis van de rechthebbende en anders dan ten gevolge van vergissing binnengekomen, aldaar wordt aangetroffen in de voor de nachtrust bestemde tijd, wordt geacht te zijn binnengedrongen.', 8700, 12),
(103, 'Artikel 1 - Gezichtsbedekkende kleding', 'In openbaar masker dragen, en na eerste vordering niet afdoen.', 150, 0),
(104, 'Artikel 350 - Vernieling', 'Hij die opzettelijk en wederrechtelijk enig goed dat geheel of ten dele aan een ander toebehoort, vernielt, beschadigt, onbruikbaar maakt of wegmaakt, wordt gestraft met gevangenisstraf van ten hoogste twee jaren of geldboete van de derde categorie.', 3500, 10),
(105, 'Artikel 285 - Bedreiging', 'met enig misdrijf tegen het leven gericht,bepaalde uitingen zoals ik maak je kapot,of ik smijt je van de berg', 5000, 15),
(110, 'R426a - Rijden zonder verlichting', 'als bestuurder van een motorvoertuig, bromfietser, snorfietser of als bestuurder van een gehandicaptenvoertuig rijden terwijl niet gelijktijdig met het groot licht, het dimlicht, het stadslicht of het mistlicht, het achterlicht brandt bij nacht, binnen de bebouwde kom.', 600, 0),
(112, 'Terroristische bommelding', 'Deze straf kan gegeven worden, voor Heterdaad betrappen van plaatsen van Bommen in onder andere autos, etc etc, tevens ook voor het dragen voor bomgordel, explosieven. Meer info volgt.', 30000, 120),
(115, 'Artikel 6 Schuldig aan verkeersongeluk', 'Het is een ieder die aan het verkeer deelneemt verboden zich zodanig te gedragen dat een aan zijn schuld te wijten verkeersongeval plaatsvindt waardoor een ander wordt gedood of waardoor een ander zwaar lichamelijk letsel wordt toegebracht of zodanig lichamelijk letsel dat daaruit tijdelijke ziekte of verhindering in de uitoefening van de normale bezigheden ontstaat.', 3000, 20),
(116, 'Artikel 7 Plaatsdelict verlaten', 'Het is degene die bij een verkeersongeval is betrokken of door wiens gedraging een verkeersongeval is veroorzaakt, verboden de plaats van het ongeval te verlaten.', 5000, 15),
(117, 'Artikel 8 Rijden onder invloed', 'Het is een ieder verboden een voertuig te besturen, als bestuurder te doen besturen of als begeleider op te treden, terwijl hij verkeert onder zodanige invloed van een stof, waarvan hij weet of redelijkerwijs moet weten, dat het gebruik daarvan - al dan niet in combinatie met het gebruik van een andere stof - de rijvaardigheid kan verminderen, dat hij niet tot behoorlijk besturen of tot behoorlijk te begeleiden in staat moet worden geacht', 4500, 15),
(119, 'Artikel 36 Geen kenteken hebben.', 'kentekenplichtig voertuig van persoon heeft geen kenteken.', 2000, 0),
(121, 'Artikel 140 Deelneming criminele oragnisatie', 'Deelneming aan een organisatie die tot oogmerk heeft het plegen van misdrijven, wordt gestraft met gevangenisstraf van ten hoogste zes jaren of geldboete van de vijfde categorie.', 200000, 180),
(122, 'Artikel 149 Grafsteen opzettelijk vernielen', 'Hij die opzettelijk een graf schendt of enig op een begraafplaats opgericht gedenkteken opzettelijk en wederrechtelijk vernielt of beschadigt, wordt gestraft met gevangenisstraf van ten hoogste een jaar of geldboete van de derde categorie.', 7400, 12),
(124, 'Artikel 157 Brandstichting', 'Hij die opzettelijk brand sticht of een ontploffing teweegbrengt word gestraft met 15 maanden en een geld boete van 4500', 0, 180),
(125, 'Artikel 168 Voertuig onbruikbaar maken', 'Hij die enig vaartuig, voertuig of luchtvaartuig opzettelijk en wederrechtelijk doet zinken, stranden of verongelukken, vernielt, onbruikbaar maakt of beschadigt.', 500, 36),
(129, 'Artikel 420 - Witwassen', 'Witwassen dat enkel bestaat uit het verwerven of voorhanden hebben van een voorwerp dat onmiddellijk afkomstig is uit enig eigen misdrijf wordt als eenvoudig witwassen.', 4000, 0),
(131, 'Artikel 426 Openbaar dronkenschap', 'Dronken op openbare weg, hinder veroorzaken  (7 maand in cel HB)', 3500, 7),
(133, 'Artikel 5.2.65 Neonlicht voeren', 'Personenauto\'s met meer licht dan toegestaan. (Neon onder de auto, andere kleur koplampen)', 3500, 0),
(134, 'F120a - Klimmen en klauteren', 'Klimmen of zich bevinden op een beeld, monument, overkapping, constructie, openbare toiletgelegenheid, voertuig, hek, heining of andere afsluiting, verkeersmeubilair of daarvoor niet bestemd straatmeubilair waarop? (Cell straf niet altijd nodig)', 1500, 5),
(135, 'R395 - Gevaar of hinder veroorzaken met stilstaand voertuig', 'Een voertuig op een zodanige wijze laten staan waardoor op de weg gevaar wordt/kan worden veroorzaakt, dan wel het verkeer wordt/kan worden gehinderd gevaar; situatie omschrijven; cat. 4 uitsluitend gehandicaptenvoertuig\\r\\nmet motor.', 2200, 0),
(136, 'Afsleepkosten ', 'Als je een auto moet laten wegslepen.', 150, 0),
(137, 'Artikel 367 - Helpen bij ontsnapping', 'bevrijding of zelfbevrijding aan zijn schuld te wijten is, wordt hij gestraft met hechtenis.', 7500, 20),
(139, 'F173a - Handelen in verdovende middelen', 'Zich op een openbare plaats ophouden met het kennelijke doel om middelen als bedoeld in artikel 2 en 3 van de Opiumwet of daarop gelijkende waar, al dan niet tegen betaling af te leveren, aan te bieden of te verwerven, daarbij behulpzaam te zijn of daarin te bemiddelen waaruit kon worden aangenomen dat werd gehandeld.', 4150, 24),
(140, 'Artikel 216 - Heling', 'Hij die een goed verwerft, voorhanden heeft of overdraagt, dan wel een persoonlijk recht op of een zakelijk recht ten aanzien van een goed vestigt of overdraagt, terwijl hij ten tijde van de verwerving of het voorhanden krijgen van het goed dan wel het vestigen van het recht wist dat het een door misdrijf verkregen goed betrof.', 4150, 20),
(142, 'K055 - Rijden zonder geldig rijbewijs', 'artikel 107, lid 1 en feitcode K055\\r\\nRijden zonder rijbewijs. Wanneer men een motorvoertuig bestuurt zonder rijbewijs is men in overtreding', 8500, 0),
(144, 'D515 - Valse identiteit opgeven', 'opgeven van een valse naam, voornaam, geboortedatum, geboorteplaats, adres of woon- of verblijfplaats', 9500, 10),
(145, 'F121b - Op openbare weg met aangebroken fles/blik alcohol', 'aangebroken flessen, blikjes e.d. met alcoholhoudende drank bij zich hebben op een openbare plaats in aangew. geb.', 95, 0),
(147, 'H205 - Overlast veroorzaken voor omgeving d.m.v. toestellen of geluidsapparatuur', 'Veroorzaken van geluidhinder voor een omwonende of de omgeving door/met toe- stellen/(geluids)apparaten/handelingen', 1250, 0),
(148, 'F250 - Met een voertuig rijden door park / plantsoen', 'zonder ontheffing rijden/bevinden met vo ertuig/paard in publiektoegankelijk park natuurgebied/plantsoen/recreatieterrein', 4500, 0),
(150, 'CITES - Koraal 1 t/m 10 stuks', 'Het in bezit zijn van \"Vochtig\" Koraal is strafbaar en vastgesteld door de instantie CITES. De hoogte van de boete hangt af van de hoeveelheid. Met Vochtig koraal wordt bedoelt koraal dat nog leeft en dus uit zijn leefomgeving is gehaald', 800, 0),
(151, 'CITES - Koraal 11 t/m 25 stuks', 'Het in bezit zijn van \"Vochtig\" Koraal is strafbaar en vastgesteld door de instantie CITES. De hoogte van de boete hangt af van de hoeveelheid. Met Vochtig koraal wordt bedoelt koraal dat nog leeft en dus uit zijn leefomgeving is gehaald.', 1400, 0),
(152, 'CITES - Koraal 26 t/m 50 stuks', 'Het in bezit zijn van \"Vochtig\" Koraal is strafbaar en vastgesteld door de instantie CITES. De hoogte van de boete hangt af van de hoeveelheid. Met Vochtig koraal wordt bedoelt koraal dat nog leeft en dus uit zijn leefomgeving is gehaald.', 2000, 0),
(153, 'CITES - Koraal 51 t/m 75 stuks', 'Het in bezit zijn van \"Vochtig\" Koraal is strafbaar en vastgesteld door de instantie CITES. De hoogte van de boete hangt af van de hoeveelheid. Met Vochtig koraal wordt bedoelt koraal dat nog leeft en dus uit zijn leefomgeving is gehaald.', 3000, 0),
(154, 'CITES - Koraal 76 t/m 100 stuks', 'Het in bezit zijn van \"Vochtig\" Koraal is strafbaar en vastgesteld door de instantie CITES. De hoogte van de boete hangt af van de hoeveelheid. Met Vochtig koraal wordt bedoelt koraal dat nog leeft en dus uit zijn leefomgeving is gehaald.', 4500, 0),
(155, 'CITES - Koraal 101 t/m 125 stuks', 'Het in bezit zijn van \"Vochtig\" Koraal is strafbaar en vastgesteld door de instantie CITES. De hoogte van de boete hangt af van de hoeveelheid. Met Vochtig koraal wordt bedoelt koraal dat nog leeft en dus uit zijn leefomgeving is gehaald.', 6000, 0),
(156, 'CITES - Koraal 125+', 'Het in bezit zijn van \"Vochtig\" Koraal is strafbaar en vastgesteld door de instantie CITES. De hoogte van de boete hangt af van de hoeveelheid. Met Vochtig koraal wordt bedoelt koraal dat nog leeft en dus uit zijn leefomgeving is gehaald.', 8000, 10),
(157, 'R551a - Eenrichtingsweg overige wegen', 'Handelen in strijd met geslotenverklaring, als bestuurder van een motorvoertuig, bromfiets of snorfiets op autoweg of autosnelweg (spookrijden)', 1400, 0),
(159, 'Artikel 11- WVW Niet APK waardig', 'Niet APK waardig voertuig, Het is verboden opzettelijk wederrechtelijk een aan een ander toebehorend motorrijtuig op de weg te gebruiken.', 30, 0),
(163, 'Artikel 312 - Kleine bank + Juwelier', 'Diefstal met geweld bij Kleine bank en Juwelier', 9500, 35),
(165, 'Artikel 312 - Pacific Bank', 'Diefstal met geweldpleging bij grote bank', 15000, 50),
(168, 'H107 - Voertuigwrak op de weg laten staan', 'een voertuigwrak parkeren op de weg', 1750, 0),
(169, 'Artikel 48 - Medeplichtigen Zware mishandeling', 'Hij die medeplicht is  aan een ander opzettelijk zwaar lichamelijk letsel toebrengt maar waardoor persoon nog wel zelfstandig na ziekenhuis kan.\r\nZoals aanrijden,of steek/slagwapen,nekslag', 8500, 15),
(170, 'Artikel 48 - Medeplichtigen Afpersing en afdreiging', 'Hij die mee doet aan, met het oogmerk om zich of een ander wederrechtelijk te bevoordelen, door geweld of bedreiging met geweld iemand dwingt hetzij tot de afgifte van enig goed dat geheel of ten dele aan deze of aan een derde toebehoort, hetzij tot het aangaan van een schuld of het teniet doen van een inschuld, hetzij tot het ter beschikking stellen van gegevens, wordt, als schuldig aan afpersing.', 4300, 15),
(171, 'Artikel 48 - Medeplichtig Gezijzeling/ontvoering', 'Hij die mede opzettelijk iemand wederrechtelijk van de vrijheid berooft of beroofd houdt.', 2500, 13),
(173, 'Artikel 288 - Poging tot doodslag/moord', 'Iemand proberen van het leven te beroven, maar mislukt ', 11000, 30),
(175, 'Artikel 48 - Medeplichtig Tot poging doodslag/moord', 'Iemand proberen van het leven te beroven, maar mislukt ', 6000, 15),
(176, 'Artikel 48 - Medeplichting Moord voorbedachten rade', 'Hij die medeplichtig is aan opzettelijk en met voorbedachten rade een ander van het leven berooft,\r\n(Doel bewust iemand vermoorden)', 15000, 55),
(177, 'Artikel 161ter - (Koperdiefstal)', 'Titel VII. Misdrijven waardoor de algemene veiligheid van personen of goederen wordt in gevaar gebracht\r\nArtikel 161ter\r\nHij aan wiens schuld te wijten is, dat enig elektriciteitswerk wordt vernield, beschadigd, of onbruikbaar gemaakt, dat stoornis in de gang of in de werking van zodanig werk ontstaat, of dat een ten opzichte van zodanig werk genomen veiligheidsmaatregel wordt verijdeld', 5000, 5),
(178, 'Artikel 26 -WWM Munitie(Cat:II&III)', 'Als persoon alleen munitie opzak heeft.', 5000, 10),
(179, 'F060a - Niet Opvolgen Bevel Politie om zich te verwijderen', 'niet opvolgen bevel politie om zich te verwijderen i.g.v. (dreigende) ongeregeldheden', 1500, 5),
(180, 'Artikel 131- Opruiing', 'Hij die in het openbaar, mondeling of bij geschrift of afbeelding, tot enig strafbaar feit of tot gewelddadig optreden tegen het openbaar gezag opruit', 1000, 60),
(181, 'Artikel 207- Meineed', 'Indien de valse verklaring is afgelegd in een strafzaak ten nadele van de beklaagde of verdachte, wordt de schuldige gestraft met gevangenisstraf van ten hoogste negen jaren of geldboete van de vijfde categorie.', 8350, 25),
(182, 'R315b - Niet de rijbaan gebruiken', 'Als bestuurder van een motorvoertuig niet de rijbaan gebruiken wat werd gebruikt, - door stil te staan op het trottoir, het voetpad, het fietspad, het fiets/ bromfietspad of het ruiterpad.', 1250, 0),
(183, 'Artikel 10 - Racen (WVW)', 'Het is verboden op de weg een wedstrijd met voertuigen te houden of daaraan deel te nemen.', 2000, 2),
(184, 'Artikel 225 - Bewijsschrift vervalsen', 'Hij die een geschrift dat bestemd is om tot bewijs van enig feit te dienen, valselijk opmaakt of vervalst, met het oogmerk om het als echt en onvervalst te gebruiken of door anderen te doen gebruiken, wordt als schuldig aan valsheid in geschrift gestraft, met gevangenisstraf van ten hoogste zes jaren of geldboete van de vijfde categorie.', 1000, 10),
(185, 'Artikel 261 Smaad & Laster', '1.Hij die opzettelijk iemands eer of goede naam aanrandt, door telastlegging van een bepaald feit, met het kennelijke doel om daaraan ruchtbaarheid te geven, wordt, als schuldig aan smaad, gestraft met gevangenisstraf van ten hoogste zes maanden of geldboete van de derde categorie.2.Indien dit geschiedt door middel van geschriften of afbeeldingen, verspreid, openlijk tentoongesteld of aangeslagen, of door geschriften waarvan de inhoud openlijk ten gehore wordt gebracht, wordt de dader, als schuldig aan smaadschrift, gestraft met gevangenisstraf van ten hoogste een jaar of geldboete van de derde categorie.3.Noch smaad, noch smaadschrift bestaat voor zover de dader heeft gehandeld tot noodzakelijke verdediging, of te goeder trouw heeft kunnen aannemen dat het te last gelegde waar was en dat het algemeen belang de telastlegging eiste.', 2500, 10),
(186, 'R486 - Voorrangsvoertuig niet voor laten gaan', 'Voorrangsvoertuig niet voor laten gaan werden optische en geluidssignalen gevoerd; mate van hinder.', 2500, 0),
(187, 'F120b - Overlast veroorzaken', 'Zich zodanig ophouden dat voor andere gebruikers of bewoners van nabij die plaats gelegen woningen onnodige overlast of hinder wordt veroorzaakt waaruit bleek dit?', 1500, 0),
(188, 'Artikel 306 - Deelneming aan aanval of vechterij', 'Zij die opzettelijk deelnemen aan een aanval of vechterij waarin onderscheiden personen zijn gewikkeld, worden, behoudens ieders verantwoordelijkheid voor de bijzondere door hem bedreven feiten, gestraft', 3500, 15),
(189, 'Artikel 189 - Opzettelijk hinderen van onderzoek/aanhouding', 'Hij die opzettelijk de hulpdiensten hinder bij onderzoek of bij een aanhouding verdachte bijvoorbeeld laat ontkomen of hele tijd in de weg loopt', 2500, 10),
(190, 'F120b - Op een openbare plaats overlast of hinder veroorzaken ', 'Zodanig op te houden waardoor voor weggebruikers of omwonenden overlast of hinder wordt veroorzaakt.een openbare plaats overlast of hinder veroorzaken voor andere gebruikers of bewoners (Cell straff niet altijd van toepassing)', 1000, 10),
(191, 'F125a/b - Zonder redelijk doel rondhangen', 'A.zonder redelijk doel in portiek/poort ophouden, op/tegen raamkozijn / drempel v.e. gebouw zitten/liggen\r\nB. Zonder redelijk doel rondhangen\', \'zich zonder redelijk doel in ge- meenschappelijke ruimte v. flat/publiek toegankelijk gebouw bevinden', 950, 0),
(192, 'D537b - Op terrein van een ander zich niet houden aan de toegangsvoorwaarden (1)', 'zich niet houden aan de toegangsvoor-waarden van de eigenaar eerste maal', 850, 0),
(193, 'D537b - Op terrein van een ander zich niet houden aan de toegangsvoorwaarden (2)', 'zich niet houden aan de toegangsvoor-waarden van de eigenaar tweede vergrijp', 1000, 5),
(194, 'F112 - Orde verstoren in horecabedrijf', 'in een openbare inrichting de orde verstoren (Cell straf niet altijd van toepassing)', 750, 5),
(195, 'Art. 35.1.1-Het niet dragen van een helm op een 2-wieler ', 'Als iemand geen helm draagt op een motor/elektrische fiets meer dan 25km/h is dit strafbaar.', 95, 0);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `laws`
--
ALTER TABLE `laws`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `laws`
--
ALTER TABLE `laws`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
