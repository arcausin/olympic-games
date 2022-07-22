Rattrapage Symfony Alexis D'Ambrosio
Recherche sur Internet :
- https://www.udemy.com/course/apprendre-symfony-par-la-creation-dun-site-ecommerce/
- https://www.youtube.com/watch?v=d8-C-U7Jn_c

présentation video : https://youtu.be/-S371RSapEc

Installation

- Cloner le répertoire
- Ouvrir le terminal de commande
- Se rendre dans le répertoire cloner /olympic-games/symfony/
- Taper la commande composer install
- Configurer le fichier /symfony/.env pour se connecter a la base de données
- Taper les 3 commandes suivantes pour initialiser la base de données
- symfony console doctrine:database:create
- symfony console make:migration
- symfony console doctrine:migrations:migrate (appuyer sur entrer pour valider la question)

Enfin avec la commande suivante vous pouvez lancer votre serveur pour accéder au projet : symfony server:start (par défaut : http://127.0.0.1:8000/)
