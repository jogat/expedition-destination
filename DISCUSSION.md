First I need to work on the Project setup
- creating .env from .env.example
- Chose mariadb (similar to mysql)as engine 
- ran migration and seed the database
- I noticed the `APP_KEY` needed to be created so I ran: `php artisan key:generate`
- now that the project is running with hardcoded data I want to pull the data from database
I've found the issue on `DestinationExplorer`, after reviewing a few alternatives, I think overriding the activites property on `Destination` is the most long term solution, as it can be used on different context out of `DestinationExplorer`.
