# Partials

Laravel's Blade templating system is very handy. As well as being able to define sections to add content, you can create things called "partials".

Partials are essentially small views or snippets of HTML that are used regularly throughout an app.

The benefit of using a partial is that you can reduce the amount of HTML or PHP your layout file has, or reduce the complexity of a view by having a dedicated partial where your login form or sidebar is found.

Let's create a common one.

## Creating a Navbar

In our ```../resources/views/``` file create a new directory called 'partials'.

Inside our new ```../resources/views/partials/``` directory create a file called 'header.blade.php' and write the following:

```html
<nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Cats</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
```

> Although we don't have any PHP in this yet, we make it a blade file so that it can be included without errors in our views, as well as enable us to add PHP when we want to

To include this partial in our layout we open up our ```../views/layouts/default.blade.php``` file and write blade's include function with the path to the view we want to include inside the function call.

```php
@include('partials.header')
    
    // do not include this stuff again. This is just to show where we put the partial. Above your div.container
    <div class="container">
      @yield('content')
    </div>
```

Right above our ```div.container``` write ```@include('partials.header')```. This will inject our partial file into our layout.

Let's work out what is happening here:

1. The ```@include()``` function works like a normal PHP include with the view directory as its base
2. The @ symbol acts a bit like wrapping your function in <?php tags and is used by the Blade templating language
2. Inside the @include() function we provide the location of the view we want to include (In our case a partial called header)
3. As with Laravel elsewhere, we use a dot notation to indicate folders. So, partials.header relates to the file location of ```./partials/header.blade.php```
4. We don't need to include the ```.blade.php``` part of our file that we are including because the function is smart enough to work that out

If you load up the street-cat route you should now see our navbar.

Naturally you can do this in all manner of template files (not just the layouts). You can also pass your included files specific variables and data like so:

```php
@include('partials.header', ['message' => 'meow meow meow'])
```

By doing this, we can, from every template we include a file, also have a custom value returned into our partial. We would do this by echoing the message variable somewhere in our partial.

To do so you would update your header partial with something like the following:

```php

 <a class="navbar-brand" href="#">Cats are {{ $message }}</a>
```

Which will print out the $message variable in our site header.

If you are wondering what the "moustache" brackets are, they are how you echo content using the Blade templating language. We'll get to using those a little more in the dedicated blade section.

> This code is actually very brittle because if the code that calls our header doesn't have the $message variable set then we get an exception and it breaks our template
> To remove this you can use something like isset() to check that you have a variable.
> If you use something like: ```{{ $message or 'Purrrr' }}``` you can use the variable or fallback to a string, in this case 'Purrrr'.

## Partial and View organisation

As Laravel lets you define your view folder organization without restriction or convention, you are free to organize your views as you wish.

This is both a great thing, and a bad thing.

Your own, or teams, style of development and preferences are therefore easy to build in. There are however, many ways to skin a cat and some direction would likely be a better thing.

Feel free to organize your files how you wish however the below are some good rules/methods that you are free to adopt, especially for small or simple apps:

```
// ./resources/views is our base folder here

- errors
    - 504.blade.php
- layouts
    - default.blade.php
    - blog.blade.php
- partials // some people prefer to call this inc or includes
    - header.blade.php
    - footer.blade.php
- articles // an example range of files for any articles routes/controller methods
    - index.blade.php
    - create.blade.php
    - edit.blade.php
    - show.blade.php
    - form.blade.php // the file which we use as a partial into other templates. Some prefer to use an underscore to indicate it is a partial and not a top-level template
- pages // Unless you are creating a CMS with a page-type, the place to create your static pages. Alt name can be static or static-pages
    - home.blade.php
    - contact.blade.php
    - about.blade.php

```