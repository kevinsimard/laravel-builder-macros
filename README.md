# Laravel Builder Macros
[![Code Climate](https://codeclimate.com/github/kevinsimard/laravel-builder-macros/badges/gpa.svg)](https://codeclimate.com/github/kevinsimard/laravel-builder-macros)

## Usage
### orderByRandom
```php
User::orderByRandom()->first();
User::where...->orderByRandom()->get();
```

## Installation
Add the service provider in ```config/app.php```

```php
'providers' => [
    ...
    'Kevinsimard\BuilderMacros\Providers\OrderByRandomServiceProvider',
    ...
],
```

## Code Structure
    ├── src
    │   └── Kevinsimard
    │       └── BuilderMacros
    │           └── Providers
    │               └── OrderByRandomServiceProvider.php
    ├── .gitattributes
    ├── .gitignore
    ├── README.md
    └── composer.json
