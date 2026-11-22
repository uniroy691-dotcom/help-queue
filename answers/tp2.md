Question 1
Non, les noms des tickets changent généralement à chaque exécution. La factory utilise fake()->firstName() pour générer des prénoms aléatoires avec Faker. Le seeder crée donc de nouvelles données à chaque exécution.
Question2
 Laravel affiche une erreur 404 Not Found, car le ticket numéro 999 n'existe pas dans la base de données. La recherche automatique est effectuée grâce au Route Model Binding, avec le paramètre Ticket $ticket dans la méthode show() du contrôleur.
 Question3
 Avant de déplacer la route, Laravel renvoyait une erreur 404 parce qu'il interprétait create comme la valeur du paramètre {ticket}. Après avoir placé /tickets/create avant /tickets/{ticket}, Laravel reconnaît correctement la route de création. Une nouvelle erreur Route [tickets.store] not defined apparaît, car la route POST permettant d'enregistrer le formulaire sera créée dans l'exercice 4.
 Question4
 Sans la directive @csrf, Laravel doit normalement afficher une erreur 419 Page Expired, car le jeton CSRF est absent.
Le jeton CSRF protège l'application contre les attaques Cross-Site Request Forgery (CSRF). Ces attaques consistent à faire exécuter une action non autorisée sur un site au nom d'un utilisateur.
Question5
Le nom que j'avais saisi reste affiché dans le champ après le refus du formulaire. C'est grâce à old('name') dans la vue Blade, qui récupère l'ancienne valeur saisie avant la validation.
Question6
Question 6
Le troisième essai est refusé parce que la validation côté serveur vérifie que le sujet choisi appartient obligatoirement à la liste `Ticket::TOPICS`. Même si un utilisateur modifie le formulaire dans son navigateur, il ne peut pas contourner les règles de validation du serveur.