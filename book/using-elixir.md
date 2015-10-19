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
