---
title: adviesrapport
description: adviesrapport
extends: _layouts.document
section: document
---

# Adviesrapport


### Inleiding
Dit adviesrapport is geschreven in januari 2020 voor Greenhouse te Eindhoven. Greenhouse is een online marketing bureau, dat full service activiteiten verricht voor zijn klanten. Er is een onderzoek voor Greenhouse uitgevoerd, met de volgende probleemstelling. 

<h5>“Hoe zit de streaming en eSports wereld in elkaar en wat zijn de beste mogelijkheden tot adverteren op streaming platformen?”</h5>

Greenhouse ziet dat er veel potentie ligt in de streaming en eSports wereld. Dit is een snel groeiende markt, die de laatste jaren booming is. Echter wordt hier nog maar heel weinig op geadverteerd. Als het voor Greenhouse mogelijk is om hier ook te adverteren, dan kunnen zij een hele nieuwe doelgroep bereiken. 

Dit rapport beschrijft alle adviezen die zijn voortgekomen uit diverse onderzoeken. Dit adviesrapport is geschreven voor intern gebruik binnen Greenhouse. Middels het rapport kan verder met het project worden gewerkt.

### Opzet onderzoek

Gedurende de afstudeeropdracht zijn verschillende onderzoeken uitgevoerd met elk een eigen onderzoeksmethode. Het DOT-framework is gebruikt als onderzoeksframework om de onderzoeksmethoden vast te stellen. 

#### 1. Literatuurstudie - biebonderzoek:  
In de literatuurstudie is uitgezoomd op de gaming wereld. Als eerste is gekeken wat precies eSports zijn. Vervolgens is gekeken naar het verleden en heden van de gaming wereld. Welke games en genres zijn populair en welke bekende tools zijn er op de markt. [Link naar onderzoek](/docs/literatuurstudie/)


#### 2. Interviews Greenhouse experts - veldonderzoek: 
Om te kijken wat Greenhouse al met gaming en streaming doet zijn er interviews gehouden met experts binnen Greenhouse. Er zijn in totaal vier interviews gehouden. Elk interview dat is gehouden is met iemand van een andere afdeling geweest binnen Greenhouse. Zo is gesproken met het: video-team, blossom, creative-craft en media. [Link naar onderzoek](/docs/interview-experts/) 

#### 3. Gaming in Nederland - biebonderzoek:
Greenhouse richt zich als bedrijf vooral op de Nederlandse markt. Daarom is het van belang om een goed beeld te krijgen van de Nederlandse gaming markt. Er is gekeken hoe groot de Nederlandse markt is, wat de toekomstperspectieven zijn. En welke games het meest populair zijn. [Link naar onderzoek](/docs/esports-in-nederland/)

#### 4. Interview gaming doelgroep - veldonderzoek: 
Er zijn interviews gehouden met game fans van de drie grootste eSports titels van Nederland: FIFA, Counter Strike Global Offensive (CSGO) en League of Legends (LoL). Met deze interviews is erachter gekomen hoe de doelgroep tegen huidige advertenties aankijkt op streaming websites. Of deze huidige advertenties aansluiten bij hun interesses, en wat een betere manier van adverteren zou zijn. [Link naar onderzoek](/docs/interview-doelgroep/) 

#### 5. Advertenties op streams - biebonderzoek 
Er is gekeken hoe er momenteel al wordt geadverteerd op streaming websites. Op deze manier kon worden vastgesteld wat de status van de huidige markt is en waar kansen liggen. Dit gecombineerd met interview van de experts en doelgroep is er uiteindelijk een concept ontwikkeld. [Link naar onderzoek](/docs/hoe-wordt-er-geadverteerd-op-streaming-websites/)

### Advies
In dit gedeelte van het adviesrapport staan alle stappen die zijn genomen om de genoemde probleemstelling op te lossen. 

#### Concept
Uit de interviews met experts en de doelgroep kwam naar voren, dat advertenties op streaming websites momenteel erg generiek zijn en niet aansluiten bij de doelgroep die kijkt. Je hebt vaak een pre-roll voor een stream zitten die 30 seconde duurt. Deze gaat vaak over een bekende film of een automerk. Om bijvoorbeeld überhaupt op Twitch te mogen adverteren moet eerst $10,000 worden ingelegd. En je krijgt ook geen resultaten terug van hoeveel mensen er naar je advertentie hebben gekeken. 

Daarom is het belangrijk om relevante advertenties aan de doelgroep te laten zien. Maar wel met een belangrijk punt, dat het de gameplay van de streamer niet in de weg moet zitten. De gameplay is ‘heilig’ en hier mag niet teveel aan worden veranderd. Als je de streamer in controle laat over het beheer van de reclames dan kan hij/zij zelf kiezen, wanneer het een goed moment is om een reclame af te spelen. In de streaming software van de streamer kunnen reclames worden toegevoegd en deze reclame layers kan hij dan aan- en uitzetten.
Voorbeelden van hoe gepersonaliseerde reclames eruit zien zijn te vinden op: [Concept animaties pagina](/docs/concept-animaties) 

##### Advies omtrent het concept: 
Met het huidige concept is de streamer in controle over de reclames en hoe vaak deze worden afgespeeld en wanneer. Het is echter ook mogelijk om er voor te kiezen om de streamer niet in controle te laten. Zo kunnen advertenties met zekerheid op regelmatige basis worden afgespeeld. Wel met het risico dat de advertenties de gameplay in de weg gaan zitten.

#### Uitwerking 
Om gepersonaliseerde reclames mogelijk te maken is gespard met het video-team. De conclusie uit het gesprek was dat het noodzakelijk is om een tussenplatform te creëren. Op dit online platform kunnen advertenties worden geüpload door een werknemer van Greenhouse. Vervolgens kan de streamer inloggen op het platform en hij kan de advertentie URL’s kopiëren en toevoegen aan de streaming software. In combinatie met het programma TouchPortal kan de streamer advertenties aan- en uitzetten in de stream. Zo is hij zelf in controle wanneer advertenties worden afgespeeld. 

Allereerst zijn de wireframes en is daarna het design van het online platform gemaakt. Deze zijn wederom besproken met het video-team voorafgaande van het bouwproces. 

Toen het design klaar was, is er eerst gesproken met het development-team over de keuze voor frameworks. De keuze voor frameworks is komen te liggen op Laravel (PHP) aan de backend en Vue (Javascript) aan de frontend met een MQSQL database. Deze frameworks sluiten goed aan bij de programmeertalen en frameworks waar binnen Greenhouse ervaring mee heeft. Aan de backend kant is een API gemaakt waar gebruikers kunnen worden aangemeld en inloggen. Er kunnen games worden toegevoegd en aan een game kunnen reclames worden gekoppeld. 

##### Advies omtrent de uitwerking:  
Voor het afstudeerproject is gekozen om de frontend zo ver mogelijk af te krijgen, zodat kan worden ge user test met een streamer. 
De backend functionaliteiten zijn door middel van Postman uitgevoerd en ook in het webdesign is geen rekening met admin pagina’s gehouden. 

Ook is er niet veel aandacht besteed aan de responsiveness van het platform. Dit omdat een streamer door middel van zijn computer streamt en hierop het platform zal bezoeken. 

#### Beheer 
Om de code te beheren is gebruik gemaakt van verschillende tools. Aan de backend kant is gebruik gemaakt van Composer. Dit is een dependency manager voor PHP. Aan de frontend kant is gebruik gemaakt van Node Package Manager (NPM). 

Alle code is te vinden op mijn persoonlijk GitHub maar is ook online gezet in de interne Gitlab van Greenhouse. De code kan makkelijk worden geïnstalleerd door commands die te vinden zijn in de package.json bestanden in de frontend en backend map. De database connectie kan makkelijk worden gemaakt in de .env file in de backend map. Om de database te synchroniseren kan het command: php artisan migrate worden uitgevoerd. Dit zal de database aanmaken en tables vullen met rows. Op de frontend is een main.js file aanwezig. Hierin staan twee paden om de api aan te spreken. Een localhost pad en een productie pad. Deze kunnen gemakkelijk worden ingevuld en aangepast.

#### Vervolgstappen 
Aan technische kant is het belangrijk, dat de admin kant wordt geprogrammeerd. Dan kunnen er gemakkelijk nieuwe streamers en games worden toegevoegd. Ook moet er een betere manier komen om video’s te verwijderen. Momenteel selecteer je de klant voor een advertentie, de game en het scene nummer. Dit genereert statische filenames en het oude bestand zal worden weggegooid als een nieuwe is. Ook moet er een meting worden gedaan als de streamer via TouchPortal een reclame afspeelt. Er moet worden gemeten hoeveel mensen er aan het kijken zijn en aan de hand daarvan moet de streamer een bedrag verdienen. Technisch is het mogelijk want de Twitch API geeft deze mogelijkheid. Echter is dit niet op tijd geïmplementeerd en getest. En wellicht zijn er ook betere afrekenmodellen die kunnen worden toegepast.  