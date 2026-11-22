Question1
Le message obtenu est : The selected status is invalid.
La valeur sleeping est refusée parce qu'elle ne figure pas dans la liste des statuts autorisés (waiting, helping, done). La règle Rule::in(Ticket::STATUSES) vérifie que le statut envoyé appartient à cette liste.
Question2
La méthode Ticket::waiting()->toSql() génère la requête SQL suivante :
select * from "tickets" where "status" = ? order by "id" asc
Cette requête récupère les tickets dont le statut est waiting, puis les trie par identifiant (id) dans l'ordre croissant. Le symbole ? représente une valeur liée (binding), qui correspond ici à waiting.