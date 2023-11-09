# Entrainement-code-igniter-4

Formation personnelle à l'utilisation du framework PHP CodeIgniter4
https://www.youtube.com/playlist?list=PLT9miexWCpPW6Z_OXNv2d78cqCrZaPrVG

## Pour obtenir les dépendance

Rendez-vous dans le fichier first-ci4 dans un cmd et rentrez la commande composer install

## Pour lancer l'appli

```
$ cd ../entrainement-code-igniter-4/first-ci4
$ php spark serve
```

## Liste de commandes

```
Cache
  cache:clear        Nettoye les caches.
  cache:info         Présente les informations du fichier cache du système actuel.

CodeIgniter
  env                Recupère l'environnement actuel, ou en créer un nouveau.
  filter:check       Vérifie les filtres d'une route.
  help               Affiche les informations d'usage basique.
  list               Liste les commandes disponible.
  namespaces         Vérifie que vos namespaces sont correctement paramétrés.
  publish            Découvre and éxecutes toutes les classes Publisher prédéfinies.
  routes             Affiche toutes les routes.
  serve              Lances le Serveur PHP-Development de CodeIgniter.

Database
  db:create          Crée une nouvelle base de données.
  db:seed            Lance le seeder spécifié pour envoyer des données connues dans la base de données.
  db:table           Récupère les informations de la table selectionnée.
  migrate            Localise et lance les nouvelles migrations vers la base de données.
  migrate:refresh    Réactualise via un rollback suivi par une récente instance l'état de la base de donnée.
  migrate:rollback   Reviens au dernier état des migrations.
  migrate:status     Liste toutes les migrations et si elles ont été lancées ou pas.

Encryption
  key:generate       Génère une nouvelle clé de cryptage et l'inscript dans un fichier `.env`.

Generators
  make:cell          Génère un nouveau fichier Cell et sa vue associée.
  make:command       Génère une nouvelle commande spark.
  make:config        Génère un nouveau fichier config.
  make:controller    Génère un nouveau fichier controller.
  make:entity        Génère un nouveau fichier entity.
  make:filter        Génère un nouveau fichier filter.
  make:migration     Génère un nouveau fichier migration.
  make:model         Génère un nouveau fihcier model.
  make:scaffold      Génère un set complet de fichiers scaffold.
  make:seeder        Génère un nouveau fichier seeder.
  make:validation    Génère un nouveau ficher validation.
  migrate:create     [DEPRECATED] Créer un nouveau fichier migration. Utiliser plutôt "make:migration".
  session:migration  [DEPRECATED] Génère le fichier migration pour les sessions de base de données, Utiliser plutôt "make:migration --session".

Housekeeping
  debugbar:clear     Purge de tous les fichiers debugbar JSON.
  logs:clear         Purge de tous les fichiers log.
```
