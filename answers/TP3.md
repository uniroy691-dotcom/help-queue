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