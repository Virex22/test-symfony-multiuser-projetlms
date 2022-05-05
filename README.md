# installation du projet de test

pour comprendre comment le multi-users fonctionne dans symfony, il faut commencer par crée le fichier .env.local pour initialiser la base de données, ensuite excecuter les commandes suivantes :

```
composer update
php bin/console d:d:c (doctrine:database:create)
php bin/console d:s:u --force (doctrine:schema:update --force)
php bin/console d:f:l (doctrine:fixtures:load)
```

# Ce qu'il faut pour le multiuser

il faut modifier le fichier suivant (là ou j'ai mis les commentaires)
- `/config/packages/security.yaml`

il faut assigner les roles séparément sur les entité, comme fait dans les fixtures

- `/src/DataFixtures/AppFixtures.php`

# login disponible :

user : one@one.one
mdp : 12345
role : ROLE_ONE

user : two@two.two
mdp : 12345
role : ROLE_TWO




