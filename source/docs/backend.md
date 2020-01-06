---
title: Back-end
description: Back-end
extends: _layouts.document
section: document
---
# Backend

Na overleg met het development team binnen Greenhouse is de keuze aan de backend kant op het PHP framewor [Laravel](https://laravel.com/) komen te vallen.
Omdat de backend veel functionaliteiten gaat krijgen is er gekozen voor een groot framework zoals Laravel. Er had gekozen kunnen worden voor een micoframework zoals SlimPhp of Lumen. Deze microframeworks zijn gericht op het maken van een API maar ook met een groter framework als Laravel is dit goed te doen. Tevens is Laravel op moment ook het meest populaire PHP framework (A. Kothari , 2019) en er is veel informatie over te vinden. 

Hieronder worden een aantal backend hoofdzaken kort toegelicht met hiervan de bijbehorende code snippets. Voor alle backend code kan de volgende [Github](https://github.com/martijnkoch/Greenhouse/tree/master/backend) link worden bezocht.  

### Gebruiker registreren
De eerste stap in het ontwikkelen van de applicatie was om een nieuwe streamer te registreren. Niet zomaar iedereen kan een account aanmaken en dit zal alleen door een admin kunnen worden gedaan Er is gebruik gemaakt van Laravel passport voor de beveiliging van de applicatie. [Laravel passport](https://laravel.com/docs/5.8/passport) zorgt voor Oauth 2 authentication en het is een losse dependency van Laravel met [Composer](https://getcomposer.org/) is geinstalleerd. Bij het aanmaken van een nieuwe user wordt een access token meegegeven. Het testen van de API is gedaan door middel van [Postman](https://www.getpostman.com/). 

![](/assets/img/register-user-php.png "Register code")

![](/assets/img/register-user.png "Postman")

### Gebruiker laten inloggen
Voor de login van de user is wat extra’s nodig om te zorgen voor een match tussen de user zijn access token en de secret key vanuit Laravel password. Naast de tokens heb je nog een andere library nodig om te zorgen dat de login zal werken. Deze library is [Guzzle](http://docs.guzzlephp.org/en/stable/) en is een populaire HTTP client.  

Als er een match is tussen de access token en de secret key dan zal er een Bearer token terugkomen. 

![organogram](/assets/img/login-php.png "Login code")

![](/assets/img/api-login.png "Postman login")

### Nieuwe game toevoegen
Om een nieuwe game toe te voegen, moesten een nieuwe controller en model worden gemaakt. Een game bestaat uit de naam van de game, een image van de game en een ads_count als one to many relation voor het aantal reclames.  

Om een image op te slaan moet het pad naar de image worden opgeslagen in de database en de file zelf wordt opgeslagen in de public storage van Laravel. Zo blijft de database snel en kunnen de images makkelijk worden aangesproken aan de front-end.

![organogram](/assets/img/image_upload.jpg "Image upload code")

### Reclame toevoegen
Een nieuwe reclame toevoegen lijkt veel op het toevoegen van een nieuwe game. Echter moet er hier geen image worden toegevoegd, maar een video file. Onder de rules wordt gekeken of de file wel toegestaan is. Aan de hand van de ingevoerde data wordt de filenaam gegenereerd. Deze krijgt de video game naam, het scenenummer en de naam van de klant. Mocht de klant een nieuwe reclame hebben voor een video game scene, dan kan deze gemakkelijk worden overschreven en ook de streamer hoeft niets goed te zetten in zijn streaming software. Als je Toto als voorbeeld neemt: dan is er dagelijks wel een voetbalwedstrijd en de tekst moet vaak worden vernieuwd. Het is dan alleen een kwestie van de nieuwe te uploaden en de content op de stream past zich vanzelf aan.

![organogram](/assets/img/laravel-ad.jpg "Reclame code")

### One to many relation
Een belangrijk onderdeel van de API is om een one to many relation op te stellen. Zo moet een game meerdere reclames kunnen hebben. Een game heeft meerdere scenario’s wanneer een bepaalde reclame kan worden afgespeeld. In Laravel is het opzetten van een one to many relatie vrij gemakkelijk. In de model van de game kan worden vastgesteld, dat een game meerdere reclames en scènes heeft. 

![organogram](/assets/img/one-to-many.png "One to many")

### API
De API heeft verschillende paden. Deze paden kunnen door de front-end worden aangesproken. Vladimir Sidorenko (2017) heeft een Best Practices RESTful API Design guide. Deze guide is gevolgd om de definities van de Api paden aan te duiden. Zo zijn een aantal korte regels voor API paden: 
- Simplicity
- Fast performance
- Fully-featuring
- Reliability
- Scalability

![organogram](/assets/img/api-paths.png "Api")

#### Bronnenlijst
<div class="bronnenlijst">
<p class="bron"> Laravel. Version 6.6.1 [Framework] - The PHP Framework For Web Artisans. (2019) Geraadpleegd van </p><a class="bronlink" target="_blank" href="https://laravel.com/">https://laravel.com/</a>
<p class="bron">
Kothari, A. (2019). Top 7 PHP Frameworks for Better Application Development. Geraadpleegd van</p> <a class="bronlink" target="_blank" href="https://geekflare.com/php-frameworks/">https://geekflare.com/php-frameworks/</a>
<p class="bron">Postman (2019). Version 5.5.4 [Software]. Geraadpleegd van</p> <a class="bronlink" target="_blank" href="https://www.getpostman.com/">https://www.getpostman.com/</a>
<p class="bron">
Laravel Passport. Version 8.0 [Library]. (2019) Geraadpleegd van</p><a class="bronlink" href="https://laravel.com/docs/5.8/passport" target="_blank">https://laravel.com/docs/5.8/passport</a>
<p class="bron"> Composer. Version 1.8.5 [Software]. (2019) Geraadpleegd van</p><a class="bronlink" href="https://getcomposer.org/" target="_blank">https://getcomposer.org/</a>
<p class="bron">
Guzzle, PHP HTTP client. Version 6.5 [Library]. (2019) Geraadpleegd van</p> <a class="bronlink" href="http://docs.guzzlephp.org/en/stable/" target="_blank">http://docs.guzzlephp.org/en/stable/</a>
<p class="bron">
Sidorenko , V. (2017, 1 oktober). RESTful API Design: Best Practices. Geraadpleegd op 31 december 2019, van </p> <a class="bronlink" href="https://gearheart.io/blog/restful-api-design-best-practices/" target="_blank">https://gearheart.io/blog/restful-api-design-best-practices/</a>
</div>