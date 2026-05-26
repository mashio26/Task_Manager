# Task Manager

Simple CRUD application built with Laravel for a technical interview exercise.

## Features

- Create a task
- Edit a task
- Delete a task
- List tasks
- Validation on forms
- Flash success messages
- Pagination
- Feature tests

---

## Tech Stack

- PHP 8.5
- Laravel 13
- SQLite
- Blade
- Tailwind CSS
- PHPUnit

---

## Installation

### Clone repository

```bash
git clone https://github.com/mashio26/Task_Manager
cd task_manager
```

### Install dependencies
```bash
composer install
npm install
```

### Start Vite
```bash
npm run dev
```

## Configure environment

### Create .env file:
```bash
cp .env.example .env
```

### Generate application key:
```bash
php artisan key:generate
```

## Configure database

SQLite database is used for this project.

### Create database file:
```bash
touch database/database.sqlite
```
### Run migrations
```bash
php artisan migrate
```
## Start application
```bash
php artisan serve
Server running on [http://127.0.0.1:8000].
```
## Run tests
```bash
php artisan test
```