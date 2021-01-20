# Actions

[![Packagist PHP support](https://img.shields.io/packagist/php-v/sfneal/actions)](https://packagist.org/packages/sfneal/actions)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/sfneal/actions.svg?style=flat-square)](https://packagist.org/packages/sfneal/actions)
[![Build Status](https://travis-ci.com/sfneal/actions.svg?branch=master&style=flat-square)](https://travis-ci.com/sfneal/actions)
[![StyleCI](https://github.styleci.io/repos/287091100/shield?branch=master)](https://github.styleci.io/repos/287091100?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/sfneal/actions/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/sfneal/actions/?branch=master)
[![Total Downloads](https://img.shields.io/packagist/dt/sfneal/actions.svg?style=flat-square)](https://packagist.org/packages/sfneal/actions)

Abstraction layers for utilizing the "Action" pattern in PHP applications.

## Installation

You can install the package via composer:

```bash
composer require sfneal/actions
```

## Usage
Here's a basic example of an action class that accepts a string parameter to the contructor and then outputs the string in all caps from the execute method.

``` php
use Sfneal\Actions\AbstractAction;

class MockAction extends AbstractAction
{
    /**
     * @var mixed|string
     */
    private $string;
    
    /**
     * MockAction constructor.
     * 
     * @param string $string
     */
    public function __construct($string = 'output')
    {
        $this->string = $string;
    }
    
    /**
     * Execute the action.
     *
     * @return mixed
     */
    public function execute()
    {
        return strtoupper($this->string);
    }
}
```


```php
$output = (new MockAction('string'))->execute();
>>> 'STRING'
```

### Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email stephen.neal14@gmail.com instead of using the issue tracker.

## Credits

- [Stephen Neal](https://github.com/sfneal)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
