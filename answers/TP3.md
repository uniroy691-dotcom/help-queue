Question1
Le message obtenu est : The selected status is invalid.
La valeur sleeping est refusée parce qu'elle ne figure pas dans la liste des statuts autorisés (waiting, helping, done). La règle Rule::in(Ticket::STATUSES) vérifie que le statut envoyé appartient à cette liste.