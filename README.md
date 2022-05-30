# custom-string-package-2 (part 1 error :v)
Add string "HELLO" to the first input string

## Installation
This project using composer.
```
$ composer require minhvq/custom-string
```
Declare autoload namespace in composer.json
```
"autoload": {
    "psr-4": {
        ...
        "MinhVuQuang\\CustomString\\": "vendor/minhvq/custom-string/src/"
    },
    ...
},
```
And run
```
$ composer dumpautoload 
```
Finally, add CustomStringServiceProvider in config/app.php
```
MinhVuQuang\CustomString\CustomStringServiceProvider::class,
```

## Usage
```php
echo MinhVuQuang\CustomString\Facades\CustomString::generate(Illuminate\Support\Str::random(40));
```
