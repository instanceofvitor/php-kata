# Setup composer autoload

Checkout branch 6-setup-composer-autoload
Edit composer.json for the following autoload configuration:

|Path                     |Type    |Namespace   |Env | 
|-------------------------|--------|------------|----|
|src                      |PSR-4   |PHPKata     |prod|
|legacy/lib/              |classmap|            |prod| 
|legacy/ClassMapDirect.php|classmap|            |prod|
|legacy/lib/functions.php |filemap |            |prod|
|tests/                   |filemap |PHPKata/Test|dev |

Help

Regenerate autoload file:
php composer.phar dump-autoload

composer.json
```
{
    "name": "vs/php-kata",
    "authors": [
        {
            "name": "Vitor Silva",
            "email": "vsilva@live.co.uk"
        }
    ],
    "require": {
        "phpunit/phpunit": "^5.2"
    },
    "autoload": {
        "psr-4": {
            "PHPKata\\": "src"
        },
        "classmap": ["legacy/lib/", "legacy/ClassMapDirect.php"],
        "files": ["legacy/lib/functions.php"]
    },
    "autoload-dev": {
        "psr-4": { "PHPKata\\Tests\\": "tests/" }
    }
}
```