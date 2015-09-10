# Setting up Laravel

1. Run ```laravel new``` command
2. Configure database (This example uses sqlite)


# 1. Running Laravel New

To create a Laravel application you run: ```laravel new app_name```

cd into the app

# 2. Configuring your database

open up ```/config/database.php``` and assign the database to whatever you want

## Using Sqlite

Create a sqlite database in /storage/ called: database.sqlite

If it is not called ```database.sqlite``` you need to change the configuration code. In the ```database.php``` file the connector looks like:

```php
'sqlite' => [
            'driver'   => 'sqlite',
            'database' => storage_path('database.sqlite'),
            'prefix'   => '',
        ],
```

The ```storage_path()``` function accesses the storage file and within that you tell it where it can find the database ```.sqlite``` file.

one-line command from the root of the laravel folder would be: ```touch storage/database.sqlite```

## Using MySQL

## Using PostGreSQL