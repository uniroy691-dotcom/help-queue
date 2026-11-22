Question 1
Non, les noms des tickets changent généralement à chaque exécution. La factory utilise fake()->firstName() pour générer des prénoms aléatoires avec Faker. Le seeder crée donc de nouvelles données à chaque exécution.
Question2
 Laravel affiche une erreur 404 Not Found, car le ticket numéro 999 n'existe pas dans la base de données. La recherche automatique est effectuée grâce au Route Model Binding, avec le paramètre Ticket $ticket dans la méthode show() du contrôleur.
 