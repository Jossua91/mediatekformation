# Mediatekformation
## Présentation - Partie utilisateur
Ce site, développé avec Symfony 6.4, permet d'accéder aux vidéos d'auto-formation proposées par une chaîne de médiathèques et qui sont aussi accessibles sur YouTube.<br> 
Actuellement, seule la partie front office a été développée. Elle contient les fonctionnalités globales suivantes :<br>
![img1](https://github.com/user-attachments/assets/9c5c503b-738d-40cf-ba53-36ba4c0209e8)
## Les différentes pages
Voici les 5 pages correspondant aux différents cas d’utilisation.
### Page 1 : l'accueil
Cette page présente le fonctionnement du site et les 2 dernières vidéos mises en ligne.<br>
La partie du haut contient une bannière (logo, nom et phrase présentant le but du site) et le menu permettant d'accéder aux 3 pages principales (Accueil, Formations, Playlists).<br>
Le centre contient un texte de présentation avec, entre autres, les liens pour accéder aux 2 autres pages principales.<br>
La partie basse contient les 2 dernières formations mises en ligne. Cliquer sur une image permet d'accéder à la page 3 de présentation de la formation.<br>
Le bas de page contient un lien pour accéder à la page des CGU : ce lien est présent en bas de chaque page excepté la page des CGU.<br>
![img2](https://github.com/user-attachments/assets/523b4233-3505-4b8c-9db0-5e7b72965bc6)
### Page 2 : les formations
Cette page présente les formations proposées en ligne (accessibles sur YouTube).<br>
La partie haute est identique à la page d'accueil (bannière et menu).<br>
La partie centrale contient un tableau composé de 5 colonnes :<br>
•	La 1ère colonne ("formation") contient le titre de chaque formation.<br>
•	La 2ème colonne ("playlist") contient le nom de la playlist dans laquelle chaque formation se trouve.<br>
•	La 3ème colonne ("catégories") contient la ou les catégories concernées par chaque formation (langage…).<br>
•	La 4ème colonne ("date") contient la date de parution de chaque formation.<br>
•	LA 5ème contient la capture visible sur YouTube, pour chaque formation.<br>
Au niveau des colonnes "formation", "playlist" et "date", 2 boutons permettent de trier les lignes en ordre croissant ("<") ou décroissant (">").<br>
Au niveau des colonnes "formation" et "playlist", il est possible de filtrer les lignes en tapant un texte : seuls les lignes qui contiennent ce texte sont affichées. Si la zone est vide, le fait de cliquer sur "filtrer" permet de retrouver la liste complète.<br> 
Au niveau de la catégorie, la sélection d'une catégorie dans le combo permet d'afficher uniquement les formations qui ont cette catégorie. Le fait de sélectionner la ligne vide du combo permet d'afficher à nouveau toutes les formations.<br>
Par défaut la liste est triée sur la date par ordre décroissant (la formation la plus récente en premier).<br>
Le fait de cliquer sur une miniature permet d'accéder à la troisième page contenant le détail de la formation.<br>
![img3](https://github.com/user-attachments/assets/bc033cf9-41a5-4cad-a268-8abb400965c5)
### Page 3 : détail d'une formation
Cette page n'est pas accessible par le menu mais uniquement en cliquant sur une miniature dans la page "Formations" ou une image dans la page "Accueil".<br>
La partie haute est identique à la page d'accueil (bannière et menu).<br>
La partie centrale est séparée en 2 parties :<br>
•	La partie gauche contient la vidéo qui peut être directement visible dans le site ou sur YouTube.<br>
•	La partie droite contient la date de parution, le titre de la formation, le nom de la playlist, la liste des catégories et sa description détaillée.<br>
![img4](https://github.com/user-attachments/assets/f41d05d8-5980-4dc4-9eb7-58d1c31b8a25)
### Page 4 : les playlists
Cette page présente les playlists.<br>
La partie haute est identique à la page d'accueil (bannière et menu).<br>
La partie centrale contient un tableau composé de 3 colonnes :<br>
•	La 1ère colonne ("playlist") contient le nom de chaque playlist.<br>
•	La 2ème colonne ("catégories") contient la ou les catégories concernées par chaque playlist (langage…).<br>
•	La 3ème contient un bouton pour accéder à la page de présentation de la playlist.<br>
Au niveau de la colonne "playlist", 2 boutons permettent de trier les lignes en ordre croissant ("<") ou décroissant (">"). Il est aussi possible de filtrer les lignes en tapant un texte : seuls les lignes qui contiennent ce texte sont affichées. Si la zone est vide, le fait de cliquer sur "filtrer" permet de retrouver la liste complète.<br> 
Au niveau de la catégorie, la sélection d'une catégorie dans le combo permet d'afficher uniquement les playlists qui ont cette catégorie. Le fait de sélectionner la ligne vide du combo permet d'afficher à nouveau toutes les playlists.<br>
Par défaut la liste est triée sur le nom de la playlist.<br>
Cliquer sur le bouton "voir détail" d'une playlist permet d'accéder à la page 5 qui présente le détail de la playlist concernée.<br>
![img5](https://github.com/user-attachments/assets/bbe8934f-8d4b-4da2-8216-60b96b726d8a)
### Page 5 : détail d'une playlist
Cette page n'est pas accessible par le menu mais uniquement en cliquant sur un bouton "voir détail" dans la page "Playlists".<br>
La partie haute est identique à la page d'accueil (bannière et menu).<br>
La partie centrale est séparée en 2 parties :<br>
•	La partie gauche contient les informations de la playlist (titre, liste des catégories, description).<br>
•	La partie droite contient la liste des formations contenues dans la playlist (miniature et titre) avec possibilité de cliquer sur une formation pour aller dans la page de la formation.<br>
![img6](https://github.com/user-attachments/assets/f216a9e7-084a-4683-9b4e-cada5574a0e2)
## Présentation - Partie administration
Voici les différentes fonctionnalités présente dans la partie administration :<br>
![img8](https://github.com/user-attachments/assets/bd6a5d09-7ced-40a2-b6f4-1a2181d2cc6d)
### Page 1 : Page de connexion
Cette page permet à un administrateur de se connecter pour accéder à la partie administration du site, en renseigner ses identifiants (nom d'utilisateur et mot de passe). Elle est accessible via l'URL se terminant par /login.<br>
![img9](https://github.com/user-attachments/assets/15026df9-2d26-43c2-9d80-e799f5b2615e)
### Page 2 : Gestions des formations
Cette page permet de gérer les formations : il est possible de trier et filtrer la liste, d’ajouter une nouvelle formation grâce à un bouton situé au-dessus de la liste de formations, de visualiser pour chaque formation son nom, sa playlist associée, sa catégorie, sa date de parution, ainsi que ses actions, voir le détail, modifier ou supprimer la formation.<br>
![img10](https://github.com/user-attachments/assets/d0a0e481-fa50-41d0-8f69-76f0c8c3051b)
### Page 2.1 : Gestions des formations - Ajout d'une formation
Cette page est accessible en cliquant sur le bouton "Ajouter" situé au-dessus de la liste des formations. Elle contient un formulaire permettant de renseigner les informations suivantes : date de parution, titre, playlist associée, catégories, description, et l'identifiant de la vidéo. Un bouton permet ensuite d’enregistrer la nouvelle formation.<br>
![image10](https://github.com/user-attachments/assets/902a4cd0-f561-45ea-9da1-8f7197f62463)
### Page 2.2 : Gestions des formations - Voir en détail
Cette page est accessible en cliquant sur "Voir en détail" depuis la liste des formations. Elle affiche toutes les informations de la formation sélectionnée, y compris la vidéo intégrée, le titre, la playlist, les catégories, la date de parution et la description complète.<br>
![image11](https://github.com/user-attachments/assets/e0347f5c-7637-41b1-999f-2303871d2c93)
### Page 2.3 : Gestions des formations - Modifier une formation
Cette page est accessible en cliquant sur "Modifier" depuis la liste des formations. Elle reprend le même formulaire que pour l'ajout d'une formation, avec les informations déjà pré-remplies. Il est possible de modifier la date de parution, le titre, la playlist associée, les catégories, la description et l'identifiant de la vidéo, puis d'enregistrer les modifications.<br>
![image12](https://github.com/user-attachments/assets/722e0486-c218-418f-9066-dd5660b3c4f7)
### Page 2.4 : Gestions des formations - Supprimer une formation
Lorsque l'on clique sur "Supprimer" depuis la liste des formations, une fenêtre pop-up de confirmation s'affiche afin de valider ou annuler la suppression de la formation sélectionnée.<br>
![image13](https://github.com/user-attachments/assets/068d1ce7-0a40-4f47-bf85-a5a4bd6046bb)

### Page 3 : Gestion des playlists
Cette page permet de gérer les playlists de formations : il est possible de trier et filtrer la liste, d’ajouter une nouvelle playlist grâce à un bouton situé au-dessus de la liste, de visualiser pour chaque playlist son nom, le nombre de formations associées, ses catégories, ainsi que ses actions (voir en détail ou modifier).<br>
![image14](https://github.com/user-attachments/assets/7a3e84ab-4e85-4a96-8185-f71e7ceeee57)

### Page 3.1 : Gestion des playlists - Ajout d'une playlist
Cette page est accessible en cliquant sur le bouton "Ajouter" situé au-dessus de la liste des playlists. Elle contient un formulaire permettant de renseigner le nom et la description de la nouvelle playlist, puis un bouton permet d’enregistrer la création.<br>
![image15](https://github.com/user-attachments/assets/d0ff10f6-3679-4317-a4fc-23854705d930)

### Page 3.2 : Gestion des playlists - Voir en détail
Cette page est accessible en cliquant sur "Voir en détail" depuis la liste des playlists. Elle affiche toutes les informations de la playlist sélectionnée : son titre, sa description, ses catégories associées, ainsi que la liste des formations appartenant à cette playlist.<br>
![image16](https://github.com/user-attachments/assets/e49400f4-f068-4c6e-9b38-552aa597b7d6)

### Page 3.3 : Gestion des playlists - Modifier une playlist
Cette page est accessible en cliquant sur "Modifier" depuis la liste des playlists. Elle contient un formulaire avec les informations de la playlist déjà pré-remplies. Il est possible de modifier le titre et la description de la playlist, puis d’enregistrer les modifications.<br>
![image17](https://github.com/user-attachments/assets/63fc5e80-59da-4da0-8a04-d244511ed25e)

### Page 4 : Gestion des catégories
Cette page permet de gérer les catégories utilisées pour les formations et les playlists : il est possible d’ajouter une nouvelle catégorie grâce à un formulaire intégré situé au-dessus de la liste, ainsi que de supprimer une catégorie existante. La liste affiche uniquement le nom de chaque catégorie et propose une action de suppression.<br>
![image18](https://github.com/user-attachments/assets/927ca43a-ab2a-4c34-b613-199427407e6e)

### Page 4.1 : Gestion des catégories - Ajout d'une catégorie
Un formulaire est intégré au-dessus de la liste des catégories. Il permet de saisir le nom d'une nouvelle catégorie, puis de l'ajouter en cliquant sur un bouton "Ajouter une catégorie".<br>
![image19](https://github.com/user-attachments/assets/f73b8d8c-cb66-43ec-a06c-70497dea9bed)

### Page 4.2 : Gestion des catégories - Suppression d'une catégorie
Chaque ligne de la liste contient un bouton "Supprimer". Lorsqu’on clique dessus, une fenêtre pop-up de confirmation apparaît pour valider ou annuler la suppression de la catégorie sélectionnée.<br>
![image20](https://github.com/user-attachments/assets/5e8b2f85-959b-4f25-97a1-5170cf9376cb)

# Accéssibilité
Cette application web est disponible à l'adresse url suivante : https://mediatekformation.jossua-creuzet.fr/

# Autres
## La base de données
La base de données exploitée par le site est au format MySQL.
### Schéma conceptuel de données
Voici le schéma correspondant à la BDD.<br>
![img7](https://github.com/user-attachments/assets/f3eca694-bf96-4f6f-811e-9d11a7925e9e)
### Relations issues du schéma
<code><strong>formation (id, published_at, title, video_id, description, playlist_id)</strong>
id : clé primaire
playlist_id : clé étrangère en ref. à id de playlist
<strong>playlist (id, name, description)</strong>
id : clé primaire
<strong>categorie (id, name)</strong>
id : clé primaire
<strong>formation_categorie (id_formation, id_categorie)</strong>
id_formation, id_categorie : clé primaire
id_formation : clé étrangère en ref. à id de formation
id_categorie : clé étrangère en ref. à id de categorie</code>

Remarques : 
Les clés primaires des entités sont en auto-incrémentation.<br>
Le chemin des images (des 2 tailles) n'est pas mémorisé dans la BDD car il peut être fabriqué de la façon suivante :<br>
"https://i.ytimg.com/vi/" suivi de, soit "/default.jpg" (pour la miniature), soit "/hqdefault.jpg" (pour l'image plus grande de la page d'accueil).
## Test de l'application en local
- Vérifier que Composer, Git et Wamserver (ou équivalent) sont installés sur l'ordinateur.
- Télécharger le code et le dézipper dans www de Wampserver (ou dossier équivalent) puis renommer le dossier en "mediatekformation".<br>
- Ouvrir une fenêtre de commandes en mode admin, se positionner dans le dossier du projet et taper "composer install" pour reconstituer le dossier vendor.<br>
- Dans phpMyAdmin, se connecter à MySQL en root sans mot de passe et créer la BDD 'mediatekformation'.<br>
- Récupérer le fichier mediatekformation.sql en racine du projet et l'utiliser pour remplir la BDD (si vous voulez mettre un login/pwd d'accès, il faut créer un utilisateur, lui donner les droits sur la BDD et il faut le préciser dans le fichier ".env" en racine du projet).<br>
- De préférence, ouvrir l'application dans un IDE professionnel. L'adresse pour la lancer est : http://localhost/mediatekformation/public/index.php<br>
