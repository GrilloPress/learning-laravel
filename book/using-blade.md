# Using the Blade templating language

The default templating language for Laravel is Blade. It takes inspiration from Razor, a modern ASP.NET templating language.

It is a flavour that utilizes curly braces ```{{}}``` and the ```@``` symbol.



## Logic with Blade

As we saw in the previous section, the ```@``` symbol enabled us to extend templates and create sections that would slot into those templates.

The ```@``` symbol is also used to create our logic and control structures.

#### If, Else, ElseIf

TO create an if control block you write:

```php
@if ($user)
  <p>Hi there!</p>
@endif
```

You can extend this control block with else and elseif like so:

```php
@if ($admin)
  <p>Hi there Admin!</p>
@elseif ($user)
  <p>Hi there User!</p>
@else ($follower)
  <p>Nice to see you there my little one!</p>
@endif
```

As you can see you don't use the traditional curly brackets that you do in your normal PHP templates.

You can also use the Perl-style unless in Blade templating, unlike PHP templates. Like so:

```php
@unless ($asleep)
  $sheep++
@endunless
```

> If you don't get unless, it is essentially and if wi