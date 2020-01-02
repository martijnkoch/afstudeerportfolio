---
title: Front-end
description: Front-end
extends: _layouts.document
section: document
---

# Frontend

Na overleg met het development team is de keuze aan de frontend komen te vallen op [Vue.js](https://vuejs.org/). Vue is een populair Javascript framework en wordt veel in samenwerking met Laravel gebruikt. Zo zegt Grzybowska (2019) dat Vue.js op moment het meest populaire Javascript framework en tevens is Javascript de meest populaire programmeertaal op dit moment. Verder is Vue.js vrij gebruiksvriendelijk, het heeft een goede compiler, er is ondersteuning van [webpack](https://webpack.js.org/) en vanwege zijn populariteit is er veel informatie over te vinden.

Net zoals bij de backend worden hieronder een aantal belangrijke zaken toegelicht en er zijn een aantal code snippets ter ondersteuning.

### Vue.js installeren
Om Vue.js te installeren moet je gebruik maken van [Vue CLI](https://cli.vuejs.org/). Dit installeer je met [NPM](https://www.npmjs.com/), een Javascript package manager. Vue CLI is een command line tool die er voor zorgt dat er een aantal tools met Vue worden geïnstalleerd voor sneller development. Je hoeft dus niet alles van een nulpunt op te bouwen maar je kan sneller beginnen met bouwen van de applicatie. Als Vue CLI succesvol is geïnstalleerd krijg je de volgende startpagina te zien. 

![organogram](/assets/img/vue-cli.png "Vue cli")

### Frontend css library
Voor Vue.js zijn een aantal populaire frontend css library. Elke library heeft een eigen design uitgangspunt. Een frontend library is gekozen om ook het development proces te versnellen. Gekozen is voor de library: [BootstrapVue](https://bootstrap-vue.js.org/). Deze library biedt veel components aan die out of the box kunnen worden gebruikt. 

Als je een library aan een Vue.js applicatie wil toevoegen dan moeten deze worden geïnstalleerd worden door middel van NPM. Vervolgens moet je de library toevoegen aan je main.js file. 

![organogram](/assets/img/vue-bootstrap.png "Vue bootstrap")

### Routing 
Om routing te verzorgen in een Javascript framework zijn er verschillende routing library’s. De gebruikelijke router library voor vue is: Vue Router. Met Vue Router is het gemakkelijk om single page applicaties te maken. De Router is weer toegevoegd aan de main.js file en vervolgens kunnen in een router bestand de paden naar pagina’s worden vastgesteld. 

![router](/assets/img/vue-router.png "Vue router")

In de router geef je aan wat had pad gaat zijn van de webpagina. Wat de naam gaat zijn en welke component er moet worden geladen. In Vue.js wordt net als in andere Javascript frameworks gebruik gemaakt van components. Door middel van components is het makkelijk om stukken code ergens anders her te gebruiken. De componenten van je applicatie laadt je bovenin het router bestand in. 

![router](/assets/img/vue-router-components.png "Vue router components")

### HTTP client 
Om de Laravel Api aan de achterkant aan te spreken en gebruik te maken van de data en data te posten moet er gebruik worden gemaakt van een HTTP Client. Tot 2018 was Vue-Resource de ondersteunde HTTP Client voor vue: Vue Resource. Maar You (2016) meldde dat Vue-Resource niet meer de geadviseerde HTTP Client is. Deze is sindsdien Axios. Dit is een HTTP Client die in elke Javascript omgeving kan worden gebruikt. Net zoals andere library’s is deze geïnstalleerd met NPM. 

Om data uit de API te halen moet met Axios een GET request worden uitgevoerd. In de Mounted functie van een Vue component kunnen request worden vastgesteld. Op de pagina waar alle beschikbare games voor de streamer staan wordt de volgende get request gedaan. 

![organogram](/assets/img/axios-get.png "Vue router components")

Om de data daadwerkelijk op de pagina te vertonen in plaats van alleen in de console moet middels een for loop door de data worden gelopen. Daarna kan de data worden ingeladen in de Vue components.

![organogram](/assets/img/vue-for-loop.png "Vue router components")

Op de pagina van een game worden meerdere get requests gedaan binnen een functie. Hiermee worden verschillende advertenties en scènes binnengehaald. Ook wordt met axios het id van een specifieke game meegegeven aan de url. In de Vue router image is te zien dat het pad /games/:id is. Door middel van Axios wordt het juist id meegegeven waardoor de get request kan worden uitgevoerd. 

![organogram](/assets/img/axios-multiple-gets.png "Vue router components")

#### Bronnenlijst
<div class="bronnenlijst">
<p class="bron"> Vue.js. Version 2.6.10[Framework] - The Progressive JavaScript Framework. (2019) Geraadpleegd van </p><a class="bronlink" target="_blank" href="https://vuejs.org/">https://vuejs.org/</a>
<p class="bron"> Grzybowska, k. (2019, 16 september). Top 10 most popular JavaScript frameworks in 2019. Geraadpleegd </p><a class="bronlink" target="_blank" href="https://divante.com/blog/top-10-popular-javascript-frameworks-2019/">https://divante.com/blog/top-10-popular-javascript-frameworks-2019/</a>
<p class="bron"> Webpack. Version 4.41.5[Library] - A bundler for javascript and friends. (2019) Geraadpleegd van </p><a class="bronlink" target="_blank" href="https://webpack.js.org/">https://webpack.js.org/</a>
<p class="bron"> Vue CLI. Version 4.1.2[Library] - Standard Tooling for Vue.js Development. (2019) Geraadpleegd van </p><a class="bronlink" target="_blank" href="https://cli.vuejs.org/">https://cli.vuejs.org/</a>
<p class="bron"> NPM. Version 12.14.0[Software] - Build amazing things. (2019) Geraadpleegd van </p><a class="bronlink" target="_blank" href="https://www.npmjs.com/">https://www.npmjs.com/</a>
<p class="bron"> BootstrapVue. Version 2.1.0[Library] (2019) Geraadpleegd van </p><a class="bronlink" target="_blank" href="https://bootstrap-vue.js.org/">https://bootstrap-vue.js.org/</a>
<p class="bron"> Vue Router. Version 3.1.3[Library] (2019) Geraadpleegd van </p><a class="bronlink" target="_blank" href="https://router.vuejs.org/">https://router.vuejs.org/</a>
<p class="bron"> You, E. (2018, 20 juni). Retiring vue-resource. Geraadpleegd van </p><a class="bronlink" target="_blank" href="https://medium.com/the-vue-point/retiring-vue-resource-871a82880af4">hhttps://medium.com/the-vue-point/retiring-vue-resource-871a82880af4</a>
<p class="bron"> Axios. Version 0.19.0[Library] (2019) Geraadpleegd van </p><a class="bronlink" target="_blank" href="https://github.com/axios/axios">https://github.com/axios/axios</a> 
<p class="bron"> Vue.js Mounted. Version 2.6.10[Framework] (2019) Geraadpleegd van </p><a class="bronlink" target="_blank" href="https://vuejs.org/v2/api/#mounted">https://vuejs.org/v2/api/#mounted</a> 
</div>

