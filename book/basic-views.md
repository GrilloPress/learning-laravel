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

If you navigate to your Laravel app's public folder in the browser and hit the ```/my-cat``` you should see our lovely message.

## Using Data in our Views

As well as specify your view to render for any visitor, you can also include data and PHP variables in your route like so:

```php
// ./app/Http/routes.php
Route::get('/my-cat', function()
{
    return view('my-cat', ['name' => 'Mr Fluffy']);
});
```

With this extra piece of data we can now update our view to use it like so:

```php
// ./resources/views/my-cat.php

<h1>Hi I am a really basic view! MEEEEEEEEEEEEEEEOOOOOOOOW sez <?php echo $name ;?></h1>
<?php echo "php is cool in here too!" ;?>
```

Now when we visit our view we should now see the meow quote attributed to My Fluffy.

## Using Blade Templates

As with our ```.php``` templates we can create Blade templates to render views for our users.

Something that makes Blade templates great is the ability to easily create master templates which your views can fit within. Rather than just recreate our ```.php``` template, let's create a master template.

Within our views folder create another folder called: ```layouts``` and within the layouts folder create a template called: ```default.blade.php```.

Inside ```./views/layouts/default.blade.php``` write:

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Laravel and Bootstrap YOLO</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
   <div class="container">
          
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
```

Here we have a classic Bootstrap site ready for action. Just pure HTML this second.

Inside the ```<div class="container"></div>``` section add the following blade template syntax:

```php
  @yield('content')
```

Using the ```.blade.php``` file extension lets us use blade templating language.

One of the features of it is the use of the @ symbol to indicate areas within a template we let other templates be injected, or alternatively, where we want a template's content to be injected.

So here we are saying "Withing this basic layout, inject (yield) any view template's sections called yield into this container".

Let's see this in action.

Create another view file in the view folder called ```street-cat.blade.php```. Within ```./resources/views/street-cat.blade.php``` write:

```php
@extends('layouts.default')

@section('content')
    <p>Inject this content into the default.blade.php file #yolo</p>
@endsection
```

Here we have used two @ symbols and Blade methods. First using ```@extends()``` to indicate which file we are extending or building into. In this case we use 'layouts.default' to mean within the views folder extend the ```/views/layouts/deafult.blade.php``` file

> In Laravel the dot notation of . meaning /  in file paths is used regularly

The second method is ```@section('content')  @endsection```.

As you may have guessed the starting of the @section (and closing using @endsection) indicate where you place the content you want injecting and where you want it injecting specfically inside the file you have extended.

The reference inside the bracket of ```('content')``` indicates where to inject the content inside our ```default.blade.php``` file.

Let's wire up a route to render our new ```street-cat.blade.php``` view.

In our routes file write:

```php
Route::get('/street-cat', function()
{
   return view('street-cat');
});
```
