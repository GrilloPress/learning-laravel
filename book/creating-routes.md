
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
// If you want to create a list of task creation/deletion routes in one command

Route::resource('tasks', 'TasksController');
```

# 2. Creating a controller

To create a controller you use the ```php artisan make:controller``` command with the name of the controller afterwards

Inside the controller you get a class that contains functions.

The class is named as your controller and extends from a generic Controller class.

```php
class PagesController extends Controller {

      public function index()
    {
        //returns things for the index URL
    }
}
```

# 3. Route Parameters



```php
Route::get('cats/{id}', function($id) {
  return sprintf('Cat #%s', $id);
});

Route::get('cats/{id}/{age}', function($id, $age) {
  return $id . " " . $age; 
});
```