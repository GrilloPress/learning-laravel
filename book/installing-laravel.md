# Get Set Go Get Laravel

To get started with Laravel you need to use the PHP package manager [Composer](https://getcomposer.org/).

If you are aware of NPM and Ruby's Bundler you'll have a sense already of what it does.

To install Composer you'll need to follow one of the methods on the [Composer website](https://getcomposer.org/doc/00-intro.md).

For Linux users you can get down and dirty and use ```curl```:

```
curl -sS https://getcomposer.org/installer | php
```

Once that downloads you just run: ```php composer.phar```. The ```.phar``` is a PHP Archive format. A Zip file for PHP basically.

# Installing Laravel

To install Laravel you have to download an installer via Composer. 

To do that, you run: ```composer global require "laravel/installer=~1.1"```

This will download the framework and enable you to create laravel projects with the command ```laravel new name_of_thing_being_created_here```