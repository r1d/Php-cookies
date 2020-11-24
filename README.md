# Php-cookies
PHP classe to easy manage cookies

### Cloning with composer
Not Available yet.

### By download in Composer 
Just [download this repository](https://github.com/r1d/Php-cookies/archive/master.zip) in a specific folder.

### Usage
```php
<?php
// Autoload via Composer
require 'vendor/autoload.php';

use helpers\cook;

cook::set('var','val');
$var=cook::get('var');
var_dump($var);

$var=cook::forget('var');
var_dump($var);
