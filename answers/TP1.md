Question2:
On obtient le code HTTP 404 Not Found, car l'URL /helo ne correspond à aucune route définie dans le fichier routes/web.php. Laravel ne trouve donc pas la page demandée.
Question3:
parce que {name} accepte un seul segment dans l'URL. L'adresse /hello/a/b contient deux segments (a et b), donc elle ne correspond pas à cette route
Question4:
Pour la deuxième adresse, le texte <marquee>Bob s'affiche normalement et n'est pas interprété comme une balise HTML. On en déduit que {{ }} permet d'afficher une variable tout en échappant le code HTML, ce qui protège l'application contre les attaques XSS.
Question5:
La table tickets contient 7 colonnes : id, name, topic, description, status, created_at et updated_at.

Les colonnes created_at et updated_at sont créées automatiquement par la ligne $table->timestamps(). La colonne id est créée par $table->id().
question6:
Illuminate\Database\Eloquent\MassAssignmentException Add [name] to fillable property to allow mass assignment on [App\Models\Ticket].
Question7:
Mon ticket porte le numéro 4, car les tickets sont triés par date de création croissante avec orderBy('created_at'). Mon ticket a été créé après les trois autres. La variable $loop->iteration affiche leur numéro dans l'ordre de la liste.
Q bonus:
Laravel utilise le mécanisme d'Implicit Model Binding pour rechercher automatiquement le ticket correspondant à l'identifiant fourni dans l'URL. Comme le ticket numéro 999 n'existe pas dans la base de données, Laravel retourne une erreur HTTP 404 Not Found.
Question fin tp:
Question1:
1:routes/web.php : Laravel reconnaît la route /tickets.
2:app/Http/Controllers/TicketController.php : la méthode index() est exécutée.
3:app/Models/Ticket.php : le modèle récupère les tickets depuis la base de données.
4:database/database.sqlite : contient la table tickets.
5:resources/views/tickets/index.blade.php : affiche les tickets.
6:resources/views/layouts/app.blade.php : fournit la structure générale de la page.
Question2:
Une migration permet de créer et de modifier la structure de la base de données à travers du code. Elle est préférable à une création manuelle, car elle permet de partager les modifications avec les autres développeurs, de garder un historique dans Git et de reproduire facilement la même structure sur plusieurs machines.
Question3:
Laravel utilise une protection appelée Mass Assignment Protection. Elle empêche l'affectation massive des attributs qui ne sont pas autorisés dans $fillable. Après avoir ajouté $fillable, les champs name, topic et description peuvent être utilisés avec Ticket::create().
