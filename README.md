# Last Logged In Date
This package will add a new column to the user database table a record the last time a user
logged in.

# Install
Install the package by using the command.

```
composer require dappacode/lastloggedin --dev
```

Then add the service provider `Dappa\LastLoggedIn\LastLoggedInServiceProvider::class` to `config/app.php`

# Migrate Database
We need to add a new column to the user database table, you can do so by running the below command.

```
php artisan migrate
```