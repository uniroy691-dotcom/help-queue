# Help Queue

A simple help queue management application built with Laravel.

## Description

Help Queue allows users to submit help requests and join a waiting queue. Each ticket has a topic and a status.

### Features

- Create and manage help tickets.
- Organize tickets by topics.
- Track ticket statuses: waiting, helping, and done.
- Display the position of a ticket in the waiting queue.
- View all tickets associated with a topic.
- Access waiting tickets through a JSON endpoint.

## Technologies

- Laravel 13
- PHP
- SQLite
- Blade
- HTML / CSS

## Installation

Follow these steps to install and run the project locally.

### 1. Clone the repository

```bash
git clone https://github.com/uniroy691-dotcom/help-queue.git
cd help-queue
```

### 2. Install PHP dependencies

```bash
composer install
```

### 3. Install JavaScript dependencies

```bash
npm install
```

### 4. Configure the environment

```bash
cp .env.example .env
```

### 5. Generate the application key

```bash
php artisan key:generate
```

### 6. Create the database and seed sample data

```bash
php artisan migrate --seed
**Note:** The SQLite database file is not included in the Git repository. If Laravel asks whether it should create the database file, answer **yes**.
```

### 7. Run the application

```bash
composer run dev
```

Open the application in your browser:

http://127.0.0.1:8000

## Main Routes

| URL | Description |
|---|---|
| `/` | Redirects to the help queue |
| `/tickets` | Displays the help queue |
| `/tickets/create` | Creates a new ticket |
| `/topics/{topic}` | Displays tickets for a topic |
| `/queue.json` | Returns waiting tickets in JSON format |

## Project Structure

- `app/Models` — Ticket and Topic models.
- `app/Http/Controllers` — Application controllers.
- `database/migrations` — Database structure.
- `database/seeders` — Sample data.
- `resources/views` — Blade templates.
- `routes/web.php` — Application routes.
- `answers` — TP answers.

## License

This project was developed as part of a Laravel practical assignment.