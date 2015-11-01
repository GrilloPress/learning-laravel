# Get Set Go Get Laravel

## Installing Composer

To get started with Laravel you need to use the PHP package manager [Composer](https://getcomposer.org/).

If you are aware of NPM and Ruby's Bundler you'll have a sense already of what it does.

To install Composer you'll need to follow one of the methods on the [Composer website](https://getcomposer.org/doc/00-intro.md).

For Linux users you can get down and dirty and use ```curl```:

```
curl -sS https://getcomposer.org/installer | php
```

Once that downloads you just run: ```php composer.phar```. The ```.phar``` is a PHP Archive format. A Zip file for PHP basically.

## Installing Laravel

To install Laravel you have to download an installer via Composer (which partly explains why you need Composer!).

To do that, you run: ```composer global require "laravel/installer=~1.1"```

This will download the framework and enable you to create laravel projects with the command ```laravel new name_of_thing_being_created_here```

## Using Composer to Create Laravel Projects

You can also skip the use of the Laravel Installer and just use Composer. To do that you use this schema:

```
composer create-project laravel/laravel {{name_of_app}} --prefer-dist
```

With ```{{name_of_app}}``` being your name of choice. If you were creating some kind of social network app called Twitter you'd write:

```
composer create-project laravel/laravel twitter --prefer-dist
```

> ##### A note on the right PHP packages
>
>
>