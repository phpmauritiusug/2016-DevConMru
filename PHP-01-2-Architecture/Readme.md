# Autoloading, Composer and application architecture

_This session is the second of a series of 3, which will learn you how to build your PHP website from scratch, to a world class Laravel application, while deeply understanding what's going on backstage, giving you complete control over every little detail._

From handmade autoloading to using Composer as a dependency management tool, we will dive in how we can create better PHP applications at all development stages : designing, hardcoding, testing and deploying.

## Summary

- From a set of source code files to a designed layout
- Wrapping concepts in classes
- Autoloading your code manually
- Understanding closure / anonymous functions
- PSR-0 and PSR-4 autoloading standard
- PHP libraries and dependency management with Composer
- How PSRs and Composer changed PHP world

## Setting up your environment

You can simply re-use the same environment we created [during the first session](https://github.com/phpmauritiusug/2016-DevConMru/tree/master/PHP-01-1-JumpStart#setting-up-your-environment), and replace the content of the `/var/www` folder from your virtual machine with the content you will find in the [code/manual-autoloading](https://github.com/phpmauritiusug/2016-DevConMru/tree/master/PHP-01-2-Architecture/code/manual-autoloading) folder in this repository.

Thanks to Vagrant, following the examples for setting up the environment, the content of the virtual `/var/www` folder is in `/your/folder/2016-DevConMru/PHP-01-1-JumpStart/vagrant-env`: no use to vagrant SSH, you can use your favorite text editor right now!

## Two steps code

During this session, we refactored our personal website code in two ways.

### Manual autoloading

We first included a manual autoloading function to understand how this can be done and help improving your application architecture.

Code, to be placed in your virtual `/var/www` folder is placed in the [code/manual-autoloading](https://github.com/phpmauritiusug/2016-DevConMru/tree/master/PHP-01-2-Architecture/code/manual-autoloading) folder.

### Composer automated autoloading

After [downloading and installing Composer](https://getcomposer.org/download/), we installed the awesome [michelf/php-markdown](https://packagist.org/packages/michelf/php-markdown) package to parse our Markdown blog posts in HTML with only 2 lines of PHP code, before using the insanely powerful `composer.json` file to let Composer [autoload our PSR-4](https://getcomposer.org/doc/04-schema.md#psr-4) web pages we just namespaced.

Code, to be placed in your virtual `/var/www` folder is placed in the [code/composer-autoloading](https://github.com/phpmauritiusug/2016-DevConMru/tree/master/PHP-01-2-Architecture/code/composer-autoloading) folder.
