# Migrations

Migrations are an important part of any application's development.

They create a history of your database's schema, a history you and other developers can scroll through.

Migrations let you: 

1. Set up, in PHP, what you want your database to look like, table by table
2. Roll back any changes that turn out to not be such a great idea
3. Easily share, between machines or people, how to build your application's databases

For these reasons, migrations are an essential part of modern database-driven application development.

## Creating a Migration

To create a migration you use Laravel's Artisan CLI. Within your application's root folder, you create a migration by running:

```
php artisan make:migration {{name of migration}} {{additional actions}}
```

The name of your migration should be as simplistic as possible. That is, if you are creating a table, you call your migration that. If you are adding a field to a existing table you make that overt as well,

So, your migration name should be things like: ```create_users_table```, ```add_featured_image_to_articles_table```.

```php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
```