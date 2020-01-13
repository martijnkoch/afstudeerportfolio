---
title: Inspiratiedocument
description: Inspiratiedocument
extends: _layouts.document
section: document
---

# TouchPortal

Om te zorgen dat reclames kunnen worden uitgezet door de streamer is gekeken welke tool hier oplossing voor biedt. Er zijn verschillende streaming decks van het merk Elgato. Deze fysieke decks kosten tussen de $100 en $250 dollar en hebben een beperkt aantal knoppen. 
Een semi gratis alternatief voor de stream decks is [Touchportal](https://www.touch-portal.com/). Touchportal is een app voor mobiel en tablet die connectie maakt met de pc van de streamer. En vervolgens maakt TouchPortal een connectie met OBS, het stream programma op de pc van de streamer. In Touchportal kunnen buttons waren aangemaakt die een bepaalde functionaliteit hebben. Touchportal is gratis tot 16 buttons, daarna kan de pro versie worden aangeschaft voor $10. 
Dan is het mogelijk om meer buttons toe te voegen. 

![esports-geschiedenis](/assets/img/touchportal-preview.png "Touchportal desktop")

### Hoe werkt TouchPortal?
Net zoals de fysieke kastjes van Elgato heeft de app van Touchportal buttons waarop kan worden geklikt. Als eerste moet op de streaming pc het programma Touchportal worden geïnstalleerd. Als je het programma opent krijgt je al een paar buttons met simpele functionaliteiten zoals een website openen. Maar omdat TouchPortal nog niet gelinkt is aan stream programma OBS zal dit nog niet werken.
![esports-geschiedenis](/assets/img/touchportal-desktop.jpg "Touchportal desktop")


Om het stream programma OBS te linken aan Touchportal moet je [Obs-websocket](https://github.com/haganbmj/obs-websocket-js) installeren . 
Nadat Obs-websocket is geïnstalleerd kan een serverpoort en wachtwoord worden opgegeven voor de websocket.  
Vervolgens kan in Touchportal onder de settings worden geconnect naar OBS. 
Als laatste moet de app worden gedownload, deze is zowel beschikbaar voor android als IOS. In de app connect je naar de pc programma van Touchportal. 

![gaben](/assets/img/touchportal-mobile.jpg "Touchportal Mobile")

### Hoe kan een reclame worden aan en uitgezet?
In het stream programma OBS heb je verschillende lagen zitten net zoals in bijvoorbeeld Photoshop. Als de streamer een nieuwe reclame wil toevoegen moet een nieuwe laag worden toegevoegd. Er zijn veel soorten lagen met verschillende functionaliteiten waar uit kan worden gekozen. De reclames die worden aangeleverd door Greenhouse zijn een webpagina dus moet de URL worden ingevuld door de streamer. 
![esports-geschiedenis](/assets/img/OBS-options.png "OBS options")

Als de laag is toegevoegd aan OBS dan kan TouchPortal deze herkennen. Bij het aanmaken van een nieuwe button kan de bron van OBS de laag worden gekozen. Er zit automatisch als een toggle op de toegevoegde bron. Nu kan met je mobiel de layer worden aan en uitgezet.
![esports-geschiedenis](/assets/img/touchportal-options.png "TouchPortal options")

### Hoe kan er een timer worden aangezet zodat reclames niet worden gespamt? 
 Als de streamer op een knop klikt om een reclame af te spelen is het de bedoeling dat er geen misbruik kan worden gemaakt. Zo is een scenario voor een reclame na een doelpunt bij Fifa. Dus alleen op die momenten zou de reclame mogen worden afgespeeld. 

Als de reclame loopt moet er een timer worden ingebouwd die langer is dan de reclame. Daarna moet er nog een timer komen die als cooldown fungeert zodat de reclame niet weer meteen kan worden afgespeeld. 

![esports-geschiedenis](/assets/img/touchportal-timer.png "TouchPortal timer")

### Hoe kan de visualisatie van de button worden veranderd als een reclame loopt?

![esports-geschiedenis](/assets/img/touchportal-visualisatie.png "TouchPortal visualisatie")

<div align="center" class="embed-responsive embed-responsive-16by9">
    <video loop controls class="embed-responsive-item" muted>
        <source src="/assets/video/recording.mp4" type="video/mp4">
    </video>
</div>
