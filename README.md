# php-templates
Compiled PHP module to process template files.

Extremely fast, especially with complex page layouts.
Among others, supports Macromedia Dreamweaver template syntax.

http://sourceforge.net/projects/php-templates/

Added support for PHP 5.3+ and some other improvements.

Requirements
============
This should work with whatever release of php your Unix or Linux distribution comes with. You just need to have phpize.

Installation
============
From inside the repository:
```
$ phpize
$ ./configure --enable-templates=shared --with-php-config=`which php-config`
$ make
$ make install
```
