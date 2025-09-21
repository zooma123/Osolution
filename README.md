# OsolutionTask
📦project-root
 ┣ 📂.scribe
 ┣ 📂app
 ┃ ┣ 📂Http
 ┃ ┃ ┣ 📂Controllers
 ┃ ┃ ┃ ┣ 📜Category.php
 ┃ ┃ ┃ ┣ 📜Controller.php
 ┃ ┃ ┃ ┗ 📜Task.php
 ┃ ┃ ┣ 📂Requests
 ┃ ┃ ┃ ┣ 📜StoreCategoryRequest.php
 ┃ ┃ ┃ ┗ 📜StoreTaskRequest.php
 ┃ ┃ ┗ 📂Models
 ┃ ┃   ┣ 📜Category.php
 ┃ ┃   ┣ 📜Task.php
 ┃ ┃   ┗ 📜User.php
 ┃ ┣ 📂Providers
 ┃ ┗ 📂Service
 ┃   ┣ 📜CategoryService.php
 ┃   ┗ 📜TaskService.php
 ┣ 📂bootstrap
 ┣ 📂config
 ┣ 📂database
 ┣ 📂public
 ┣ 📂resources
 ┗ 📂routes
   ┣ 📜api.php
   ┗ 📜web.php



///////////////////////////////////

Setup Instructions 

1-First Run The Server And mysql From Xampp 

2-configure The DataBase From .env And Modify The port of dataBase for 3306 instead of 3307 in your Pc 

3-Run The migarions File >> php artisan migrate 

4-To Run The Project << php artisan serve 

5- if The project Miss The Dependicies Run << composer install 

/////////////////////////////////////////

DataBase Schmea 

Category Table

| Column      | Type        | Description       |
| ----------- | ----------- | ----------------- |
| id          | BIGINT (PK) | Auto-increment ID |
| name        | VARCHAR     | Category name     |
| color       | VARCHAR     | Category color    |
| created\_at | TIMESTAMP   | Creation date     |
| updated\_at | TIMESTAMP   | Update date       |

Tasks Table

| Column        | Type        | Description             |
| ------------- | ----------- | ----------------------- |
| id            | BIGINT (PK) | Auto-increment ID       |
| category\_id  | BIGINT (FK) | Linked to categories.id |
| title         | VARCHAR     | Task title              |
| description   | TEXT        | Task description        |
| priority      | INT         | Task priority (1–3)     |
| is\_completed | BOOLEAN     | Completion status       |
| image\_url    | VARCHAR     | Task image link         |
| created\_at   | TIMESTAMP   | Creation date           |
| updated\_at   | TIMESTAMP   | Update date             |

///////////////////////////////////////////////

📡 API Endpoints

Categories 

➕ Create Category

POST /api/CreateCategory
Content-Type: application/json

{
  "name": "Electronics",
  "color": "blue"
}

📋 Get All Categories

GET /api/categories

POST /api/tasks
Content-Type: application/json

{
  "category_id": 1,
  "title": "Buy groceries",
  "description": "Milk, bread, and eggs",
  "priority": 3,
  "is_completed": false,
  "image_url": "https://picsum.photos/seed/task1/400/300"
}


////////////////////////////////////

I install Package Also You Can With it Get The Documetation of Api End Points And Api Collect For Post Man.

How To Run It <<
1- php Artisan serve
2-http://127.0.0.1:8000/docs  << Replace The Url With The Right Url in you local Machine But it ended With docs
