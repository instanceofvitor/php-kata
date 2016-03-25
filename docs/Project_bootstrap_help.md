# Project bootstrap

1. Download composer
```sh
curl -sS https://getcomposer.org/installer | php
```

2. Setup project to use phpunit
```sh
composer init
php composer.phar require phpunit/phpunit
```

3. Create phpunit configuration

/phpunit.xml.dist

```
<phpunit bootstrap="tests/bootstrap.php">
    <testsuites>
        <testsuite name="php-kata">
            <directory>tests</directory>
        </testsuite>
    </testsuites>
</phpunit>
```