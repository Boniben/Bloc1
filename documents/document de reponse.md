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
	
# 5 – URL

### 1. **Protocole**
   - **https://**
   - Le protocole spécifie la méthode de communication entre le navigateur et le serveur. Les plus courants sont `http` et `https` (sécurisé).

### 2. **Sous-domaine ou api**
   - **www.**
   - Le sous-domaine est une partie facultative de l'URL. Il est souvent utilisé pour distinguer différentes sections d'un site web.

### 3. **Nom de domaine ou DNS**
   - **example**
   - Le nom de domaine identifie le site web. C'est l'adresse principale du site que vous souhaitez visiter.

### 4. **zone DNS**
   - **.com ou .fr**
   - C'est la localisation du DNS
### 4. **Port**
   - **:8080**
   - Le port est un autre composant optionnel. Par défaut, le port pour `http` est 80 et pour `https` c'est 443, mais vous pouvez spécifier un port différent si nécessaire.

### 5. **Chemin**
   - **/path/to/resource**
   - Le chemin indique l'emplacement spécifique d'une ressource sur le serveur, comme une page ou un fichier.

### 6. **Paramètres de requête**
   - **?query=param**
   - Les paramètres de requête sont des paires clé-valeur qui sont passées au serveur pour fournir des informations supplémentaires ou filtrer les données.

### 7. **Fragment**
   - **#fragment**
   - Le fragment est une partie optionnelle de l'URL qui pointe vers une section spécifique d'une page.


	

