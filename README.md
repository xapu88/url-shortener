# URL Shortener

## Getting started


1. Clone this repository

```bash
$ git clone https://github.com/vivifyideas/url-shortener
$ cd url-shortener
```

2. Install dependencies

```bash
$ composer install
```

3. Create `.env` file from `.env.example`

```bash
$ cp .env.example .env
```

4. Generate application key

```bash
$ php artisan key:generate
```

5. Generate JWT secret

```bash
$ php artisan jwt:secret
```

6. Create your local database for this app

7. Replace `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD` in `.env` file with your credentials and the name of the database you created previously

8. Run migrations and seeds

```bash
$ php artisan migrate --seed
```

9. Start up the app

```bash
$ php artisan serve
```

10. Check your database for users you can use to test the app. All users have the same password - `secret`.
