# Manual
## Jak postawić środowisko testowe na dockerze ?
[Instrukcja dla windowsa](https://docs.docker.com/docker-for-windows/)

[Instrukcja dla linuxa](https://docs.docker.com/compose/install/)

#### Jeżeli wszystko zainstalowałeś  przejdzi do instrukcji niżej:
1. Clone a repository:
```bash
$ git clone https://strafe:mygithubpassword@github.com/witelon-squad/store
```
2. Przechodzimy do folderu z klonowanego repozytorium 
```bash
$ cd store
```
3. Budujemy obraz naszego środowiska testowego
```bash
$ docker-compose up -d
```
5. Instalacja zależności w projekcie za pomocą composera
```bash
$ docker exec app composer install
```
6.  Generujemy w artisanie key dla laravela
```bash
$ docker-compose exec app php artisan key:generate
```
Środowisko testowe będzie dostępne pod tym adresem na localhoscie [localhost](http://localhost:8080) na porcie 8080

### Jeżeli przy budowaniu błędy przykładowe nastąpią skorzystajcie z instrukcji poniżej:
#### Błąd timeout
```bash
$ export COMPOSE_HTTP_TIMEOUT=120
$ export DOCKER_CLIENT_TIMEOUT=120
```

### Dodatkowe informacje:
- Laravel znajduje się w katalogu <b>www</b> i z niego jest hostowany
- Baza danych znajduje się w katalogu <b>databases</b>,
- Nie zalecam edytować bazy danych z plików na żywca kiedy docker jes włączony ponieważ może się wysypać
- Jeżeli macie problem z kodem zróbcie osobnego brancha i w comit opiszcie dokładnie problem.W wolnej chwili przejrze kod i z merge z główną gałęzią która za pomocą githube actions będzie deployowana na bierząco na serwer główny który znajduje się pod adresem tym [serwer produkcyjny](http://95.111.242.110:8080/) 
