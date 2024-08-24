# 1 - Méthodes GET et POST

## Get 
Get est une requête qui permet d'obtenir une reponse des serveurs.
	Elle permet d'acceder aux informations mais pas d'en entrée de nouvelle car elle est peu sécurisé.
	Les requetes Get sont limité en taille et en format texte essentiellement et implémente les URL.
	
	En exmple, cliquer sur un bouton du site "leboncoin" tels que celui de l'onglet voiture, fait parti des requetes GET.
	https://www.leboncoin.fr/voitures/offres?locations
	Ecrire ferrari 458 dans la recherche textuel est egalement une requete GET
https://www.leboncoin.fr/recherche?category=2&text=ferrari+458

## Post
POST est une autre requete qui permet également d'obtenir des réponses des serveurs.
Contrairement à GET, POST permet d'envoyer un nombre illimité d'information tant en taille mais aussi en format.

En exemple, toujours sur le site "leboncoin" déposer une annonce requiere d'autres requete que GET.
La fonction Get est retrouvé lorsque l'on clique sur le bouton "deposer une annonce" puis lorsque l'on rentre le texte ou que l'on veut valider les informations de la mise en vente, la requete deployé est du POST.



# 2 - Comparaison des Méthodes

|       | GET | POST |
|:------|:---------:|:----------:|
|les formats|type .txt|tout les formats|
|taille de donnée|limité (2000carractere)|illimité|
|spécificité|implémente l'url|agit a partir du body du network|

# 3 -Extensible

En quoi le protocole http est il extensible ?
Cela vient du fait qu'il peut évoluer sans avoir besoin de nouvelle version.
Les entête "headers" qui integre, les variables peuvent s'implementer en fonction des besoins.

