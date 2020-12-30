# Manual
## Jak postawić środowisko testowe na dockerze?
[Instrukcja dla Windowsa](https://docs.docker.com/docker-for-windows/)

[Instrukcja dla Linuxa](https://docs.docker.com/compose/install/)

#### Jeżeli wszystko zainstalowałeś, przejdź do instrukcji poniżej:
1. Sklonuj repozytorium (Clone a repository):
```bash
$ git clone https://strafe:mygithubpassword@github.com/witelon-squad/store
```
2. Następnie przechodzisz do folderu sklonowanego repozytorium: 
```bash
$ cd store
```
3. I budujesz obraz naszego środowiska testowego:
```bash
$ docker-compose up -d
```
4. Potem instalujesz zależności w projekcie za pomocą Composera:
```bash
$ docker exec app composer install
```
5. Oraz generujesz w Artisanie key dla Laravela:
```bash
$ docker-compose exec app php artisan key:generate
```
Środowisko testowe będzie dostępne pod tym adresem, na localhoscie: [localhost](http://localhost:8080), na porcie 8080.
### Usługi:
- www port: :8080
- SFTP port : :2249
- phpmyadmin port : 8081
### Jeżeli przy budowaniu wystąpią przykładowe błędy, skorzystajcie z instrukcji poniżej:
#### Błąd timeout:
```bash
$ export COMPOSE_HTTP_TIMEOUT=120
$ export DOCKER_CLIENT_TIMEOUT=120
```
#### Nie można połączyć się z kontenerem laravela poprzez ssh:
1. Szukamy kontener z laravelem i kopiujemy id jego
```bash
$ docker ps
```
2. Wchodzimy do shella kontenera 
```bash
$ docker exec -it <container id> /bin/bash
```
3.Restartujemy usługe ssh
```bash
$ service ssh restart && bash
```

### Dodatkowe informacje:
- Laravel znajduje się w katalogu: <b>www</b> i z niego jest hostowany,
- Baza danych znajduje się w katalogu: <b>databases</b>,
- Nie zalecam edytować bazy danych z plików na żywca, kiedy docker jes włączony, ponieważ może się wysypać,
- Jeżeli macie problem z kodem, zróbcie osobnego brancha i w comit opiszcie dokładnie problem. W wolnej chwili przejrzę kod i zmerguje z główną gałęzią, która za pomocą githube actions będzie deployowana na bierząco, na serwer główny, który znajduje się pod adresem: [serwer produkcyjny](http://95.111.242.110:8080/). 
- <b>[Link do trello z podziałem obowiązków](https://trello.com/invite/b/doovPsOY/9968c55ee89b9bb077f394cbca794503/portfolio-project)</b>
