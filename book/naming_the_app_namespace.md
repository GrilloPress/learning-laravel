# Updating your Namespace

With Laravel 5 onwards, each app you create is "namespaced".

By that, it means that all the code you write for your app by default sits within a keyword.

This keyword by default is the rather generic "App"

To see this in action, open up the ```/app/``` directory. 

In all of the subdirectories you'll see constant references to ```namespace App\Jobs;```

The name App isn't exactly unique, especially if you have several running, or various modules and other bits of code running.

To rename your namespace you run the following command:

```bash
# via the command-line naturally
php artisan app:name Whatever
```

The PHP style is to capitalize your namespace.