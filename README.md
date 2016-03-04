# Laravel Builder Macros

## Usage

### orderByRandom

```php
User::orderByRandom()->first();
User::where...->orderByRandom()->get();
```

## Installation

Add the `Kevinsimard\BuilderMacros\Providers\OrderByRandomServiceProvider` service provider in `config/app.php`.

## Code Structure

    ├── src
    │   └── Providers
    │       └── OrderByRandomServiceProvider.php
    ├── .editorconfig
    ├── .gitattributes
    ├── .gitignore
    ├── LICENSE.txt
    ├── README.md
    └── composer.json

## License

This package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
