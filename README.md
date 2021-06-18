**WindWard**

## Installation

1. Cloner le repo : `git clone https://github.com/Enzo690/WindWard` puis rentrer dans le dossier dossier du projet : `WindWard`
2. Il vous faut composer sur votre machine puis : `composer install`
3. Installer les dépendances Node.js, attention de bian avoir Node.js sur sa machine : `npm i`
4. Créer la BDD avec un nom à retenir en *utf8_general_ci*
5. Créer un fichier : *.env* à la racine du projet et copier le contenu du *.env.example* à l'intérieur et modifier les données pour faire fonctionner le projet :

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

6. Créer la structure de la BDD : `php artisan migrate`
7. Ajouter des données de test dans la BDD `php artisan db:seed`
8. Lancer à la racine du projet : `php artisan serve` puis accéder au site avec le lien donné

## Administration

Pour se connecter à un compte Administrateur, récupérer l'email d'un compte avec les permissions administratives dans la BDD. Pour les mots de passe des comptes de tests sont : `password`. Puis se connecter avec dans la page : `/login`

***Site disponible sur : https://windward.foxwind.fr/***
