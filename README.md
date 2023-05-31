# Laravel News Application API

This is a simple RESTful API for managing a collection of news articles.


## Installation

## 1. Clone the repository:

```
git clone https://github.com/ameer-ali-jamali/news-app
```

## 3. Set up the database:

Create a new MySQL database for the project.
Update the .env file with your database credentials:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=<your_database_name>
DB_USERNAME=<your_database_username>
DB_PASSWORD=<your_database_password>
Run the database migrations:
```

## 4. Run This Cmd To Migrate Tables In Database
```
php artisan migrate
or
php artisan migrate:fresh
```

## 5. Seed the database with random articles (optional):
```
php artisan db:seed
```

## 6. Usage
To use the API, you can make requests to the following endpoints:
```
GET /articles: Get a collection of all articles.
GET /articles/{id}: Get a specific article by its ID.
POST /articles: Create a new article.
PUT /articles/{id}: Update an existing article.
DELETE /articles/{id}: Delete an article.
```

# Examples

GET /articles
Retrieve a collection of all articles.
```
### curl -X GET http://localhost:8000/articles
GET /articles/{id}
```

## Retrieve a specific article by its ID.
```
### curl -X GET http://localhost:8000/articles/1
POST /articles
```

## Create a new article.
```
curl -X POST -H "Content-Type: application/json" -d '{
  "title": "New photography exhibition",
  "content": "In a new exhibition at the Royal Botanic Garden Edinburgh, famous photographer explores the astonishing diversity of nature.",
  "author": "Oscar Davies",
  "category": "Nature",
  "published_at": "2020-02-10"
}' http://localhost:8000/articles
PUT /articles/{id}
```
## Update an existing article.
```
curl -X PUT -H "Content-Type: application/json" -d '{
  "title": "Updated title"
}' http://localhost:8000/articles/1
DELETE /articles/{id}
```
## Delete an article.
```
curl -X DELETE http://localhost:8000/articles/1
```

## Creator

This project was created by Ameer Ali.

LinkedIn: [Ameer Ali Jamali](https://www.linkedin.com/in/ameer-ali-jamali/)
