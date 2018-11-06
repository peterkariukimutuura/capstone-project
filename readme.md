

## Capstone Project

Installation Instructions

- Create Mysql Database call it capstone-project
- Rename the `.env.example` to `.env`
- Change the following environment variables to match your server configurations
	`DB_DATABASE=capstone-project`
	`DB_USERNAME=root`
	`DB_PASSWORD=`
- `DB_PASSWORD=` should be equal to your localhost login password
- Run `php artisan migrate`
- Go to Register and create a new account then login in with the details.