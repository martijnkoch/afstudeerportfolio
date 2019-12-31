---
title: Back-end
description: Back-end
extends: _layouts.document
section: document
---
# Backend

Na overleg met het development team binnen Greenhouse is de keuze aan de backend op het Php framework [Laravel](https://laravel.com/) komen te vallen. Omdat de backend veel functionaliteiten gaat krijgen is er gekozen voor een groot framework zoals Laravel. Er had gekozen kunnen worden voor een micoframework zoals SlimPhp of Lumen. Deze microframeworks zijn gericht op het maken van een API maar ook met een groter framework als Laravel is dit goed te doen. Laravel is op moment ook het meest populaire PHP framework en er is veel informatie over te vinden. 

### Gebruiker registreren
De eerste stap in het ontwikkel van de applicatie was om een registratie voor een streamer te maken. Niet zomaar iedereen kan een account aanmaken en dit zal alleen door een admin kunnen worden gedaan. Er is gebruik gemaakt van Laravel passport voor de beveiliging van de applicatie. [Laravel passport](https://laravel.com/docs/5.8/passport) zorgt voor Oauth 2 authentication en het is een losse dependency van laravel die moet worden geïnstalleerd. Bij het aanmaken van een nieuwe user wordt een access token meegegeven. Het testen van de API is gedaan door middel van [Postman](https://www.getpostman.com/). 

![](/assets/img/register-user-php.png "Touchportal Mobile")

![](/assets/img/register-user.png "Touchportal Mobile")

### Gebruiker laten inloggen
Voor de login van de user is wat meer nodig om te zorgen dat een match is tussen de user zijn access token en de secret key vanuit Laravel password. Naast de tokens heb je nog een andere library nodig om te zorgen dat de login zal werken. Deze library is [Guzzle](http://docs.guzzlephp.org/en/stable/) en is een populaire HTTP client.  

![code](/assets/img/login-php.png "Touchportal Mobile")

### Nieuwe game toevoegen
Om een nieuwe game te te voegen moest een nieuwe controller en model gemaakt. Een game bestaat uit de naam van de game, een image van de game en een ads_count als one to many relation voor het aantal reclames. 

Om een image op te slaan moet het pad naar de image worden opgeslagen in de database en de file zelf wordt opgeslagen in de public storage van laravel. Zo blijft de database snel en kunnen de images makkelijk worden aangesproken op de front-end. 

![code](/assets/img/image_upload.jpg "groupm")
### Reclame toevoegen

![code](/assets/img/laravel-ad.jpg "groupm")


### One to many relation

### Api endpoints