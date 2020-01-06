---
title: backend hosting
description: backend hosting
extends: _layouts.document
section: document
---
# Backend hosting

Om de backend te hosten is gekeken wat voor soort hosting hiervoor relevant is. Zelf heb ik een host van Vimexx tot mijn beschikking en er is gekeken of deze naar behoren werkte. Echter gaf deze geen gewenst resultaat en de video’s haperde bij weergave. Er is onderzocht welke andere hosting beter zou werken.

In de afgelopen jaren zijn cloud computing services erg in opkomst. Bij een reguliere web host koop je een gedeelte van een schijf en hierop kan je jouw projecten zetten. Je koopt bijvoorbeeld 2 GB serverruimte en hier moet je het mee dan. Wil je meer ruimte dan moet je een duurder plan kopen. Cloud computing schaalt met je mee. Als jij een kleine webapp runt betaal je weinig en mocht deze hard groeien dan stijgen de kosten mee. 

Een ander voordeel van cloud computing is de locatie van de servers. Een kleine webhost heb al zijn servers op een locatie liggen. Mocht er dus wat mis gaan met deze locatie dan zal alles offline gaan. Tevens kan de plek van de servers niet de ideale zijn voor je project. 
Cloud computing wordt vooral gedaan door grote tech bedrijven met servers over heel de wereld. De bekende leveranciers van cloud computing services zijn: Amazon, Microsoft, Google, IBM en Oracle. In Europa kan je bijvoorbeeld al kiezen of je je project wil hosten in: Duitsland, Frankrijk, Engeland, Ierland of Zweden. 

Er is gekeken naar de voor en nadelen zijn van deze services en welke het beste zou passen bij mijn prototype. N. Drake (2019) heeft de voor en nadelen van deze services beschreven. De keuze is komen te liggen op AWS van Amazon. Dit is de meest populaire cloud computing service op dit moment. En de voordelen van AWS zijn dat het een gratis tier heeft, het is zeer flexibel in wat je wil deployen en hoe. En er is een gemakkelijk database integratie voor je projecten. 

Voor een diepere uitleg over cloud computing raad ik u aan om onderstaande video af te spelen. 
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dH0yz-Osy54" allowfullscreen></iframe>
</div>

### AWS 
Om met AWS te kunnen hosten moet je allereerst een account aanmaken. Vervolgens is het met de Elastic Beanstalk service van AWS mogelijk om je applicatie te hosten. Dit is een service die hosting voor veel programmeer talen ondersteunt waaronder PHP. Dit deployed je webapp en de service zal met je meegroeien naarmate je app groter wordt. 

Uit de Tutorial van Academind (2017) bleek dat om Laravel klaar te maken voor deployment ik de root van het project moest kopiëren en zippen. De database credentials in de .env file moesten worden veranderd maar voor de rest hoeft er met Laravel niets te gebeuren. In AWS Elastic Beanstalk selecteer je de juist PHP versie en je kan de zip uploaden. Ook moet worden gekozen op welke locatie je je project wilt deployen. Er is gekozen voor Frankfurt omdat dit de laagste latency gaf. 

![](/assets/img/aws-one.png "Touchportal Mobile")

Als het project succesvol is geupload krijg je een overzicht met hierop de status van je app. Te zien is dat de app succesvol online staat, dat PHP 7.3 wordt gebruikt en onder upload kan je altijd een nieuwe versie van je Laravel project uploaden. Ook krijg je een URL waar je je project kan bezoeken. In mijn geval is dit: http://greenhouseapi-env.9tssmykstp.eu-central-1.elasticbeanstalk.com/ . 
Hier is de root van de URL laravel applicatie te vinden. 

![](/assets/img/aws-two.png "Touchportal Mobile")

#### Bronnenlijst
<div class="bronnenlijst">
<p class="bron"> Drake, N. (2019, 20 december). Best cloud computing services of 2020: for Digital Transformation. Geraadpleegd van </p><a class="bronlink" target="_blank" href="https://www.techradar.com/best/best-cloud-computing-services">https://www.techradar.com/best/best-cloud-computing-services</a>
<p class="bron"> What is Cloud Computing. (2019). Geraadpleegd van </p><a class="bronlink" target="_blank" href="https://aws.amazon.com/what-is-cloud-computing/">https://aws.amazon.com/what-is-cloud-computing/</a>
<p class="bron"> AWS Elastic Beanstalk (2019). Geraadpleegd van </p><a class="bronlink" target="_blank" href="https://aws.amazon.com/elasticbeanstalk/">https://aws.amazon.com/elasticbeanstalk/</a>
<p class="bron">Academind - Deploying a Laravel App via Elastic Beanstalk | Amazon Web Services BASICS (2017, 15 juni). Geraadpleegd van </p><a class="bronlink" target="_blank" href="https://www.youtube.com/watch?v=ISVaMijczKc">https://www.youtube.com/watch?v=ISVaMijczKc</a>
</div>