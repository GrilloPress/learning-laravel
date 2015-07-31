# Creating a Laravel App

1. create a new route
2. create a controller

# 1. Creating a route

You create routes in the /app/Http/routes.php file.

Inside you set out the routes in various methods. See documentation for examples: [routing](http://laravel.com/docs/5.0/routing)

```php
Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@home'
]);
```

Will map the ```/``` url to the home function ina  controller called PagesController.

You can also create a resource route (covering all of Create Read Update and Delete and the HTTP verbs of Get Put Post Delete etc.)

You do that with:

```php
Route::resource('tasks', 'TasksController');
```

# 2. Creating a controller