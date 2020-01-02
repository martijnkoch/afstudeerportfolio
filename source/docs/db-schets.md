---
title: Database schets
description: Database schets
extends: _layouts.document
section: document
---

## Database schets

Voordat er begonnen werd aan de backend is eerst de database geschetst. Als eerste komt er een users table. Hierin worden de data van een gebruiker opgeslagen. Tevens kan de gebruiker een afbeelding uploaden en er zijn twee rollen: admin en streamer. Zo heeft de admin meer mogelijkheden op het platform. Hij is ook de persoon die een nieuwe streamer kan toevoegen aan het platform. 

Een game heeft in verhouding minder rows. De naam en image zijn het belangrijkste en door middel van de ads_count kan worden bijgehouden hoeveel reclames er beschikbaar zijn voor een specifieke game. 

Een reclame is dus gelinkt aan een game_id. De admin kiest bij het uploaden van een file voor welke game de reclame is en voor welk scenario in een game. En er kunnen meerdere reclames aan een game worden toegevoegd. 

En als laatste zijn er verschillende scenario’s gelinkt aan een reclame. De game Fifa krijgt bijvoorbeeld 3 scenario’s: 1. na een doelpunt, 2. na een wedstrijd en 3. in het hoofdmenu. 
Bij een scenario komt een korte uitleg wanneer de reclame kan worden afgespeeld. Een scene is gelinkt aan een andere table, net zoals een reclame gelinkt is aan een game. 

![](/assets/img/database_schets.png "Db schets")