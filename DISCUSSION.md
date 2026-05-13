First I need to work on the Project setup
- creating .env from .env.example
- Chose mariadb (similar to mysql)as engine 
- ran migration and seed the database
- I noticed the `APP_KEY` needed to be created so I ran: `php artisan key:generate`
- now that the project is running with hardcoded data I want to pull the data from database
