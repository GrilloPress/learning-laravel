# Using Elixir

Ensure Node is installed

```shell
node -v
```

This should echo the version if Node is installed. If it is not, time to do so. [Find the documentation to install Node.js here](https://nodejs.org/en/)

If Node is installed, you then need to install Gulp.js.

[Gulp.js](http://gulpjs.com/) is a JavaScript task runner which can help you compile your Sass files into CSS, run your tests and live reload any changes.

To install Gulp.js download it via NPM:

```shell
npm install --global gulp
```

With your dependencies installed you can now set up Elixir.

Move into your application's root directory (the file created when you first created your Laravel app. Inside it is where the app/ bootstrap/ folders live).

In your application's root directory you should see a ```package.json``` file.

In your terminal run:

```
npm install
```

This will install a whole raft of NPM modules/libraries and may take some time. However, you now have Elixir/Gulp installed and ready to use.

### Running Elixir & Gulp

To run your Elixir tasks, like say compiling your assets into CSS etc., you can now run the ```gulp``` command.

> If you use ```gulp --production``` it will compile and compress your assets to be as small as possible

You can avoid having to run the gulp command everytime you make a update to your JavaScript files or update your CSS from any changes to your Sass file by running ```gulp watch```.

Running Gulp Watch can be a little resource intensive from time to time so if everything is lagging a little, it can be worth shutting it off. 

> Sass is a CSS pre-processor. Essentially, that is a language like CSS that has things like variables and functions which you can use to output CSS. So, write in a more-powerful version of CSS with lots of shortcuts but still produce lovely clean and performant CSS
>
> [To see more, see the Sass website](http://sass-lang.com/)

### Doing something with Elixir