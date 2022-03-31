# APP

This REST API client is build using Laravel 8

![Logo Laravel](https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg "Logo Laravel")

## Requirements:

- PHP ^7.3
- Composer

### Steps

Clone the GIT repository into your local computer and install everything

```bash
git clone https://github.com/abilioposada/APP.git

cd APP

composer install

php artisan key:generate
```

Add the following line inside `.env` and make sure to update it for your current API endpoint

```
API_URI=http://localhost:8000/api
```

Run the server using other port different than the default

```bash
php artisan serve --port=8080
```

Browse to http://127.0.0.1:8080/authors from your REST client

**If you want to see all availables routes, run: `php artisan r:l`**

Download the [REST API](URL: "https://github.com/abilioposada/API" ) for this project