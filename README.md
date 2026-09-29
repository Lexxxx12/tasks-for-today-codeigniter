# Tasks for Today Management System

A polished CodeIgniter 4 task dashboard created for IT0049. The application includes a today-only dashboard, a complete task list, database-backed accounts, a profile, and a developer page.

## Project links

- GitHub: https://github.com/Lexxxx12/tasks-for-today-codeigniter
- Live application: https://tasks-for-today-lexxxx12.onrender.com

## Requirements

- PHP 8.2 or newer with `intl`, `mbstring`, and `sqlite3`
- Composer

## Run locally

```bash
composer install
php spark migrate
php spark db:seed AppSeeder
php spark serve
```

Open `http://localhost:8080`.

## Personalize before submitting

Edit the developer values in `.env` if needed. Update the demo user in `app/Database/Seeds/AppSeeder.php`, then reset and seed the database:

```bash
php spark migrate:refresh --seed AppSeeder
```

## Required pages

- `/` — tasks scheduled for today only
- `/tasks` — every task ordered by date
- `/tasks/new` — add a database-backed task
- `/profile` — the selected user profile
- `/accounts/new` — create an account with validated, unique details
- `/about` — project and developer information

## Project structure

- `app/Models` — TaskModel and UserModel
- `app/Controllers` — one controller for each page
- `app/Views` — reusable layout, partials, and page templates
- `app/Database/Migrations` — database schema
- `app/Database/Seeds/AppSeeder.php` — eight tasks across three dates and one user
- `public/assets` — responsive CSS and JavaScript

Task checkboxes are interactive: selecting one toggles the saved task status between pending and completed.

SQLite is configured for easy local demonstration. To use MySQL, update the database values in `.env`; the migrations work with either database driver.

## Render deployment

The included `Dockerfile` and `render.yaml` deploy the project as a free Render web service. Migrations run when the container starts, and the database is seeded when empty. The free service uses ephemeral storage, so records added online can reset after a redeploy or service restart; the seeded demonstration data is recreated automatically.
