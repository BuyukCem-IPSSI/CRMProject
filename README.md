# CRMProject

### Installation
Cloning the repository
Clone this project into your working directory.
```
$ git@github.com:BuyukCem/CRMProject.git

Cloning into 'CRMProject'...
remote: Counting objects: 4794, done.
remote: Total 4794 (delta 0), reused 0 (delta 0)
Receiving objects: 100% (4794/4794), 1.59 MiB | 10.37 MiB/s, done.
Resolving deltas: 100% (2314/2314), done.
Checking connectivity... done.
```

#### Docker

By default will expose container port in 8010, You can change it in docker-compose.yml
```
$ mv .env.test

$ docker-compose up --build
$ docker-compose exec web php bin/console doctrine:migration:migrate
```
#### Start

Access website: http://localhost:8010/contact/


### TEST PHPUnit test

Please read the issue (https://github.com/BuyukCem/CRMProject/issues/2) 
because there is a problem when running tests with docker

```
$ docker-compose exec web ./bin/phpunit
```
