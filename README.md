# Morenos

## Tech Stack

- PHP 8.4 / Laravel 13
- Blade templates (layouts, partials, components)
- Vite
- Bootstrap 5
- Sass (SCSS)

## Project Structure

```
resources/
  views/
    layouts/     # main layout (app.blade.php)
    partials/    # page sections (hero, services, blog, contact, footer, ...)
    components/  # reusable Blade components (buttons, cards)
  scss/          # Sass styles
  js/            # app.js
```

## Requirements

- PHP >= 8.4
- Composer
- Node.js >= 18

## Installation

1. Clone the repository
```bash
git clone https://github.com/pipos4k/Morenos.git
cd Morenos
```

2. Install PHP dependencies
```bash
composer install
```

3. Install JS dependencies
```bash
npm install
```

4. Set up environment file
```bash
cp .env.example .env
php artisan key:generate
```

## Running the project

Start the Laravel dev server:
```bash
php artisan serve
```

In a separate terminal, start Vite:
```bash
npm run dev
```

Then visit `http://localhost:8000` in your browser.
