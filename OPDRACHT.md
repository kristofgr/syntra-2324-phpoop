## Opdracht:

Programmeer een production ready REST API in PHP. Maak daarbij gebruik van:
OOP voor de architectuur van je project (50)
Combell voor de hosting van je project (10)
Docker-compose voor je local dev stack. Stem deze af op de beschikbare stack op Combell (5)
Clean urls (rewrite rules) voor de API endpoints, deze moeten zowel lokaal al op productie identiek zijn. Voorzie eveneens duidelijke documentatie. Ga uit van het prinicpe: ik moet een front-end kunnen bouwen gebruik makend van deze API zonder uitleg te krijgen hoe die werkt (25)
Extra's (10)

Je mag het onderwerp van je API zelf kiezen.

Een eerste voorbeeld (geen optie) is volgende ShoeStore:

- Een Shoe class met eigenschappen zoals merk, model, maat en kleur van de schoen.
- Methoden om schoen eigenschappen toe te voegen, te verwijderen, weer te geven en bij te werken.
- Een ShoeStore class met eigenschappen zoals naam, locatie en een lijst met beschikbare schoenen.
- Implementeer methoden om winkel eigenschappen toe te voegen, te verwijderen, weer te geven en bij te werken, evenals methoden om schoenen toe te voegen, te verwijderen en weer te geven binnen een winkel.
- Voeg een database toe om schoen- en winkelgegevens op te slaan en te beheren.
- Implementeer volgende endpoints:
- GET /stores
  -> geeft een overzicht van alle winkels en schoenen in stock
  -> Implementeer filters om schoenen en winkels te vinden op basis van merk, model of locatie.
- GET /shoes
  -> geeft een overzicht van alle schoenen met schoen-eigenschappen
  -> Implementeer filters om schoenen te vinden op basis van merk, model of locatie.

Een tweede voorbeeld (geen optie) over Star Wars characters:

- Een Character class met de volgende eigenschappen: naam, gezondheid, aanvalskracht en verdediging.
- Methoden in de Character class om de gezondheid van een personage bij te werken na een aanval en om de schade te berekenen op basis van de aanvalskracht en verdediging van het personage.
- Subclasses voor verschillende personages, zoals Jedi, Sith, Storm Trooper, enz., die de Character class erven en specifieke eigenschappen en methoden bevatten die uniek zijn voor elk personage.
- Creëer een eenvoudig gevechtssysteem waarbij twee personages tegen elkaar vechten.
- Implementeer een Battle class om het gevecht tussen twee personages te coördineren en het resultaat weer te geven.
- hoe alle gegevens bij in een databank

Extra uitdaging:

- Voeg meer complexe gevechtsmechanica toe, zoals speciale vaardigheden voor bepaalde personages.
