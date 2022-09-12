
# CRUD-laravel-8

 <p> Всех приветствую, это мое учебное веб приложение по работе с базой данных, хранящей данные о видеоиграх: название, разработчик, несколько жанров которым соответствует игра. Реализованы CRUD операции, а также поиск игр по жанрам, доп. условие - если игре было присвоен жанр, то он не меняется.<br>
Взаимодействовать с базой можно как через веб страницы ,так и через API.</p>

Главная страница
http://localhost:8877/

Postman (указать тип ответа сервера  Accept : application/json) запросы по API:
* Поиск по жанру (id) <br> метод  - GET <br>
  
  http://localhost:8877/api/V1/genres/search/{id}
  <br>
  <br>
* Создание игры <br> метод - POST <br>
  http://localhost:8877/api/V1/games
  <br>
  <br>
*  Получение списка игр <br> метод - GET <br>
   http://localhost:8877/api/V1/games 
   <br>
  <br>
* Получение конкретной игры<br> метод - GET <br>
   http://localhost:8877/api/V1/games/{game}
  <br>
  <br>
* Изменение конкретной игры<br> метод - PATCH <br>
     http://localhost:8877/api/V1/games/{game}
  <br>
     <br>
* Удаление конкретной игры<br> метод - DELETE <br>
     http://localhost:8877/api/V1/games/{game}
     <br>
     <br>



![Снимок экрана (12)](https://user-images.githubusercontent.com/94881316/188412172-6411ed85-0c86-4fb4-be80-1d7a1aafd12e.png)
![Снимок экрана (13)](https://user-images.githubusercontent.com/94881316/188412322-9e51543f-e6ab-4362-8f85-57eec8473d1e.png)
![Снимок экрана (14)](https://user-images.githubusercontent.com/94881316/188412405-42f83378-4481-45b1-adee-eb47758c605c.png)

![Снимок экрана (1)](https://user-images.githubusercontent.com/94881316/188411865-3a7f2295-de2a-4a2b-9355-e551dd5055f5.png)
