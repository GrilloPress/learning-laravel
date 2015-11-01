# Creating Models with Eloquent

A key part of Laravel is the use of "Models". A model is the representation of your database in code. It is also where you define and create the processes for making passwords secret (hashing).

In Laravel, we use a ORM called Eloquent

> An ORM is an object-relation mapper. Essentially, an ORM is a very complicated piece of software which transform your PHP objects into your database code/language of choice
> You may hear the odd scoffing about ORMs in developing software like it isn't real development or something. That is rubbish and something to ignore.



```cli
php artisan make:model {{Name}}
```