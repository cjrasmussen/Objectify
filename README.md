# Objectify

Simple functions for converting associative arrays to objects and vice-versa.

There are better ways to do this for specific cases but this covers some extremely general cases easy enough.

## Usage

```php
use cjrasmussen\Objectify\Objectify;

$array = [
    'foo' => 'bar',
    'baz' => [
        'alpha' => 1,
        'beta' => 2,
    ],
];
$object = Objectify::toObject($array);
```

## Installation

Simply add a dependency on cjrasmussen/objectify to your composer.json file if you use [Composer](https://getcomposer.org/) to manage the dependencies of your project:

```sh
composer require cjrasmussen/objectify
```

Although it's recommended to use Composer, you can actually include the file(s) any way you want.


## License

Objectify is [MIT](http://opensource.org/licenses/MIT) licensed.