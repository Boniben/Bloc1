# 1 - Méthodes GET et POST

## Get 
Get est une requête qui permet d'obtenir une reponse des serveurs.
	Elle permet d'acceder aux informations mais pas d'en entrée de nouvelle car elle est peu sécurisé.
	Les requetes Get sont limité en taille et en format texte essentiellement et implémente les URL.
	
En exemple, cliquer sur un bouton du site "leboncoin" tels que celui de l'onglet voiture, fait parti des requetes [GET](https://www.leboncoin.fr/voitures/offres?locations) Ecrire ferrari 458 dans la recherche textuel est egalement une requete [GET](https://www.leboncoin.fr/recherche?category=2&text=ferrari+458)

## Post
POST est une autre requete qui permet également d'obtenir des réponses des serveurs.
Contrairement à GET, POST permet d'envoyer un nombre illimité d'information tant en taille mais aussi en format.

En exemple, toujours sur le site "leboncoin" déposer une annonce requiere d'autres requete que GET.
La fonction Get est retrouvé lorsque l'on clique sur le bouton "deposer une annonce" puis lorsque l'on rentre le texte ou que l'on veut valider les informations de la mise en vente, la requete deployé est du [POST](https://www.leboncoin.fr/deposer-une-annonce)





# 2 - Comparaison des Méthodes

|       | GET | POST |
|:------|:---------:|:----------:|
|les formats|type .txt|tout les formats|
|taille de donnée|limité (2000carractere)|illimité|
|spécificité|implémente l'url|agit a partir du body du network|
|sécurité|faible car visible|plus importante que get|





# 3 -Extensible

En quoi le protocole http est il extensible ?
	Cela vient du fait qu'il peut évoluer sans avoir besoin de nouvelle version.
	Les entête "headers" qui integre, les variables peuvent s'implementer en fonction des besoins.
	
	
	
	
# 4 - Sans état

Explication :
	On parle que Http est sans etat car il n'y a pas d'etat dans le protocole http. Il n'y a pas de suivi entre 2 requetes sur le serveur, l'information du client n'est pas présente, a chaque réponse de requete le serveur réidentifie la personne via les cookies et/ou l'id de session.
	[shema explicatif des interraction avec le serveur et le client qui explique le sans etat](https://docs.google.com/document/d/1JLvWOxeNOCab81PBlJ6wduIFFk0TPR5RLJqAxNqsRd4/edit)
	https://drive.google.com/open?id=1Yle0iVGGSLNE5K5CKZOAStMjRl1Nq8z-SD1bZinmCFw&usp=drive_copy
	
	
	
# 5 – URL

Décomposition de l'adresse : https://www.test.fr:8080/path/to/resource?query=param#fragment

## . **Protocole**
   - **https://**
   - Le protocole spécifie la méthode de communication entre le navigateur et le serveur. Les plus courants sont `http` et `https` (sécurisé).

## . **Sous-domaine ou api**
   - **www.**
   - Le sous-domaine est une partie facultative de l'URL. Il est souvent utilisé pour distinguer différentes sections d'un site web.

## . **Nom de domaine ou DNS**
   - **example**
   - Le nom de domaine identifie le site web. C'est l'adresse principale du site que vous souhaitez visiter.

## . **zone DNS**
   - **.com ou .fr**
   - C'est la localisation du DNS
## . **Port**
   - **:8080**
   - Le port est un autre composant optionnel. Par défaut, le port pour `http` est 80 et pour `https` c'est 443, mais vous pouvez spécifier un port différent si nécessaire.

## . **Chemin ou path**
   - **/path/to/resource**
   - Le chemin indique l'emplacement spécifique d'une ressource sur le serveur, comme une page ou un fichier.

## . **Paramètres de requête ou query string**
   - **?query=param**
   - Les paramètres de requête sont des paires clé-valeur qui sont passées au serveur pour fournir des informations supplémentaires ou filtrer les données.

## . **Fragment**
   - **#fragment**
   - Le fragment est une partie optionnelle de l'URL qui pointe vers une section spécifique d'une page.





# 6 - Codes Status

## 1. Les réponses informatives (100 à 199)
Exemple: 102 processing correspond à : l'information que le serveur à bien reçu la requete mais que la réponse n'est pas encore disponible.

## 2. Les réponses de succès (200-299)
Exemple: 200 ok correspond à : A bien fonctionné et la ressources a bien été transmise
	
## 3. les messages de redirection (300 à 399)
Exemple: 302 found Veut dire que la ressource demandée a été modifiée temporairement, cela pourra fonctionner ultérieurement avec le meme URL.
requete 304 veut dire égalment que la requete que l'on a fait ne vient pas du serveur mais du cache car il n'y a pas eu de modification.


## 4. Les erreurs du clients (400 à 499)
Exemple: 404 not found Cela arrive régulierement et se traduit par "le serveur n'a pas trouvé la ressource"

## 5. Les erreurs du serveur (500 à 599)
Exemple: 504 gateway timeout C'est la réponse que l'on obtient quand un serveur servant de passerelle n'a pas eu de réponse dans les temps.
	
	
# 7 – Négociation de contenu

~~La negociation de contenu http fait référence à l'interraction entre le client et le serveur. Par exemple le client va réaliser une demande via l'url qui va contenir une requete de langue ou de format ou nimporte quel spécificité et le serveur va devoir au vu de cette spécificité donné la bonne au réponse au serveur.
Si la requete demandé est réalisable alors le serveur répondra 200 OK et affichera la ressources demandé, si au contraire la réponse n'existe pas alors il pourrait afficher 404 not found.
Pour illustrer ses propos la requete : https://www.amazon.fr/ le site d'amazon va s'afficher en francais mais ce sera surtout une version propre a la version française qui sera affiché. Si au contraire je suis belge et que par mecanisme je veux écrire https://www.amazon.be soit la zone DNS atribué aux url belge je tombe alors sur un tout autre site.~~


~~Reponse a retravailler car cela peut etre considerer comme la différence entre une addresse et une autre alors que la negociation est bien le choix de variable dans le meme serveur.
Donc c'est le même principe explicité avant mais sur un serveur identique qui va simplement selectionner la langue par exemple. Faire le choix de la réponse attendu avec les informations présente dans l'url que l'utilisateur ou le client (via les cookies) a imcrementé et qui va imposer au serveur un choix de réponse. Cela peut fonctionner avec la langue, mais aussi l'environnement de travail par exemple le  ~~

*correction*
En faisant une requete précise dans un URL via un client, comme la langue ou d'autre parametre qui dépendent du client. Le serveur va répondre la réponse adapté via un algo.



# 8 – Installation Apache & configuration
Je n'arrive pas a finir de télécharger xchamp sur le pc, car pas admin ou pas assez de droit sur la session du domain INFO




	

