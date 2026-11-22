Question1
Le message obtenu est : The selected status is invalid.
La valeur sleeping est refusée parce qu'elle ne figure pas dans la liste des statuts autorisés (waiting, helping, done). La règle Rule::in(Ticket::STATUSES) vérifie que le statut envoyé appartient à cette liste.
Question2
La méthode Ticket::waiting()->toSql() génère la requête SQL suivante :
select * from "tickets" where "status" = ? order by "id" asc
Cette requête récupère les tickets dont le statut est waiting, puis les trie par identifiant (id) dans l'ordre croissant. Le symbole ? représente une valeur liée (binding), qui correspond ici à waiting.
Question3
Le nombre de personnes devant mon ticket est calculé avec la variable $ahead.
La requête compte les tickets ayant le statut waiting et un identifiant inférieur à celui de mon ticket :
Ticket::waiting()->where('id', '<', $ticket->id)->count();
Le résultat représente le nombre de tickets en attente qui ont été créés avant le mien.
Question4
Les badges affichent les sujets des tickets. Ils permettent d'identifier rapidement la catégorie de chaque ticket, comme Git, Laravel, Blade, Database ou Setup.
Grâce à la relation belongsTo() entre Ticket et Topic, chaque ticket récupère le nom de son sujet à partir de la clé étrangère topic_id.
Question5
Lorsque je remplace temporairement l'identifiant du sujet par 99, Laravel refuse la création du ticket, car cet identifiant n'existe pas dans la table topics.
La règle de validation exists:topics,id vérifie que le topic_id envoyé existe réellement dans la base de données. Cela permet d'éviter les relations invalides entre les tickets et les sujets.
Question6
Le sujet Laravel possède 3 tickets associés dans la base de données.
La relation hasMany() dans le modèle Topic permet de récupérer tous les tickets appartenant à un sujet. La méthode count() permet de calculer leur nombre.
Question7
1.La réponse JSON contient 9 tickets en attente.
2.Chaque ticket contient un objet topic avec les informations du sujet associé, notamment son id et son name.
3.Une application externe peut consommer ce JSON en envoyant une requête HTTP GET vers /queue.json. Elle peut ensuite exploiter les données pour afficher les tickets et leurs sujets, par exemple dans une application mobile ou une interface JavaScript.
Question8
Le clonage de mon projet depuis GitHub dans un nouveau dossier a réussi. Après avoir installé les dépendances avec composer install et npm install, généré la clé Laravel et exécuté les migrations avec le Seeder, le projet a démarré correctement avec composer run dev.
La page Help Queue s'affiche correctement et contient 9 tickets en attente avec leurs sujets.
Le premier essai de composer install a échoué parce que Composer utilisait PHP 8.2.12, alors que le projet nécessite une version plus récente. Le problème a été résolu en utilisant PHP 8.5.13.
### Questions de fin de TP
1.`Ticket::waiting()` récupère les tickets dont le statut est `waiting` et les trie par identifiant (`id`) croissant.
Un scope permet de centraliser cette requête dans le modèle `Ticket`, de réutiliser la même logique et de rendre le code plus lisible, au lieu de répéter `where('status', 'waiting')` partout.
2.La colonne topic_id se trouve dans la table tickets. Elle est placée dans cette table parce qu'un ticket appartient à un seul sujet (Topic), tandis qu'un sujet peut être associé à plusieurs tickets.
C'est une relation One-to-Many (un-à-plusieurs). La clé étrangère est donc placée du côté des tickets.
3.Une application mobile, une application frontend JavaScript ou un autre système externe (API client) pourrait utiliser cet endpoint.
Ces applications peuvent envoyer une requête HTTP GET vers /queue.json pour récupérer les tickets en attente au format JSON et afficher ou exploiter ces données.