# Note de test

### Docker

- Utilisation de docker pour lancer un conteneure php pour lance les test
- Utilisation de docker pour d'un conteneur web pour la mise en place de de la partie 2
- Lancement d'un conteneur de base de donée mySql pour la partie 2

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

