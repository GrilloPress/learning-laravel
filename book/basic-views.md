# Creating Views

1. Create a file in

Views are the files you create to provide users with the ability to view your content, update information etc.

In Laravel you can create Views in clasic ```.php``` files or a templating language called ```.blade.php```.

You place your view files in the ```resources/views``` folders.

## Using Classic HTML and PHP

To create a simple ```.php``` view file, like one you would create in WordPress, you link up your route to a specific folder. That is, to create a view for a page called ```/my-cat``` you update the following route:

```php
// ./app/Http/routes.php
Route::get('/my-cat', function()
{
    return view('my-cat');
});
```

As with any other routes, we specify inside a function what we want returned when a visitor hits the ```/my-cat``` route.

Here we use the function of ```view``` and inside brackets the name of the view file we want the visitor to see.

To complete this route and view combination we have to have a view file called ```my-cat.php``` (or a blade template file called ```my-cat.blade.php```).

Let's create one.

```php
// ./resources/views/my-cat.php

<h1>Hi I am a really basic view! MEEEEEEEEEEEEEEEOOOOOOOOW</h1>
<?php echo "php is cool in here too!" ;?>
```


contain the HTML served by your application, and serve as a convenient method of separating your controller and domain logic from your presentation logic. Views are stored in the resources/views directory.

