# Note de test

### Docker

- Utilisation de docker pour lancer un conteneur php pour lance les tests
- Utilisation de docker pour d'un conteneur web pour la mise en place de la partie 2
- Lancement d'un conteneur de base de données mySql pour la partie 2

#### Lancer docker 

```sh
docker-compose up --build -d
```

#### Entre dans le conteneur php 

```sh
docker exec -it test-php bash
```

### Installation

```sh
composer install --dev
```

Puis lancez les tests:

```sh
./vendor/bin/phpunit --testdox --bootstrap vendor/autoload.php tests --colors
```


### Partie 1

Pas de problème dans l'ensemble la plupart des questions je les ai déjà faits en C++ ou JS lors de ma formation.

### Partie 2

Cette partie se trouve dans le répertoire `maison`.

Url d'accès : "http://localhost:8887" 

Manque de temps pour la partie BD.

